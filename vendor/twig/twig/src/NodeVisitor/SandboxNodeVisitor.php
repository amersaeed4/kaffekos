<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\NodeVisitor;

use Twig\Environment;
use Twig\Extension\SandboxExtension;
use Twig\Node\CheckSecurityCallNode;
use Twig\Node\CheckSecurityNode;
use Twig\Node\CheckToStringNode;
use Twig\Node\CoercesChildrenToStringInterface;
use Twig\Node\Expression\ArrayExpression;
use Twig\Node\Expression\ArrowFunctionExpression;
use Twig\Node\Expression\Binary\HasEveryBinary;
use Twig\Node\Expression\Binary\HasSomeBinary;
use Twig\Node\Expression\Binary\ObjectDestructuringSetBinary;
use Twig\Node\Expression\Binary\RangeBinary;
use Twig\Node\Expression\CallExpression;
use Twig\Node\Expression\FilterExpression;
use Twig\Node\Expression\FunctionExpression;
use Twig\Node\Expression\GetAttrExpression;
use Twig\Node\Expression\OperatorEscapeInterface;
use Twig\Node\Expression\TestExpression;
use Twig\Node\Expression\Unary\SpreadUnary;
use Twig\Node\Expression\Variable\ContextVariable;
use Twig\Node\ModuleNode;
use Twig\Node\Node;
use Twig\Node\Nodes;
use Twig\Node\SandboxNode;
use Twig\Node\TrustedTemplateGuardNode;
use Twig\TokenParser\TokenParserInterface;
use Twig\TwigCallableInterface;
use Twig\Util\CallableParameters;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
final class SandboxNodeVisitor implements NodeVisitorInterface
{
    private $inAModule = false;
    /** @var array<string, int> */
    private $tags;
    /** @var array<string, int> */
    private $filters;
    /** @var array<string, int> */
    private $functions;
    /** @var array<string, int> */
    private $tests;
    // GRAV FORK: compile-time source sandboxing, see CompileTimeSourcePolicyInterface.
    private bool $trusted = false;
    private int $arrowDepth = 0;

    public function enterNode(Node $node, Environment $env): Node
    {
        // GRAV FORK: compile-time source sandboxing, see CompileTimeSourcePolicyInterface.
        // A trusted module gets no instrumentation, and the nodes that compile a sandbox
        // check on their own (they test for the SandboxExtension) are told to skip it. A node
        // this misses keeps its check, which is only slower. Remove this block and every
        // template is instrumented again, as upstream does.
        // Arrow function bodies are the exception: a closure can be handed to a template
        // rendered inside the sandbox and run there, past the guard, so they keep the
        // per-value checks (falling through to the wrapping below; tags, filters and
        // functions are still only checked when their own template renders, as upstream).
        if ($node instanceof ModuleNode) {
            $this->trusted = $this->isTrustedModule($node, $env);
            $this->arrowDepth = 0;
        }
        if ($this->trusted) {
            if ($node instanceof ArrowFunctionExpression) {
                ++$this->arrowDepth;
            }
            if (0 === $this->arrowDepth) {
                if ($node instanceof GetAttrExpression || $node instanceof CallExpression || $node instanceof ObjectDestructuringSetBinary || $node instanceof HasSomeBinary || $node instanceof HasEveryBinary) {
                    $node->setAttribute('sandbox_trusted', true);
                }

                return $node;
            }
        }

        if ($node instanceof ModuleNode) {
            $this->inAModule = true;
            $this->tags = [];
            $this->filters = [];
            $this->functions = [];
            $this->tests = [];
        } elseif ($this->inAModule) {
            // look for tags
            if ($node->getNodeTag() && !isset($this->tags[$node->getNodeTag()]) && !$this->isTagAlwaysAllowedInSandbox($env, $node->getNodeTag())) {
                $this->tags[$node->getNodeTag()] = $node->getTemplateLine();
            }

            // look for filters
            if ($node instanceof FilterExpression && !isset($this->filters[$name = $node->getAttribute('name')]) && !$this->isFilterAlwaysAllowedInSandbox($env, $node)) {
                $this->filters[$name] = $node->getTemplateLine();
            }

            // look for functions
            if ($node instanceof FunctionExpression && !isset($this->functions[$name = $node->getAttribute('name')]) && !$this->isFunctionAlwaysAllowedInSandbox($env, $node)) {
                $this->functions[$name] = $node->getTemplateLine();
            }

            // look for tests
            if ($node instanceof TestExpression && !isset($this->tests[$name = $node->getAttribute('name')]) && !$this->isTestAlwaysAllowedInSandbox($env, $node)) {
                $this->tests[$name] = $node->getTemplateLine();
            }

            // look for functions whose parser callable replaced the FunctionExpression
            // with a specialized node (e.g. `parent`, `block`, `attribute`); the
            // original function name was stashed by FunctionExpressionParser.
            if ($node->hasAttribute('sandboxed_function_name')) {
                $name = $node->getAttribute('sandboxed_function_name');
                if (!isset($this->functions[$name]) && !$this->isSandboxedFunctionAlwaysAllowedInSandbox($env, $node, $name)) {
                    $this->functions[$name] = $node->getTemplateLine();
                }
            }

            // the .. operator is equivalent to the range() function
            if ($node instanceof RangeBinary && !isset($this->functions['range']) && !$this->isFunctionNameAlwaysAllowedInSandbox($env, 'range')) {
                $this->functions['range'] = $node->getTemplateLine();
            }
        }

        // wrap children that the node itself will string-coerce at runtime;
        // applies to ModuleNode (`parent` slot for {% extends %}) too
        // GRAV FORK: `|| $this->trusted` wraps inside the arrow function bodies of a trusted module, see above.
        if (($this->inAModule || $this->trusted) && $node instanceof CoercesChildrenToStringInterface) {
            $params = CallableParameters::fromNode($node, $env);
            foreach ($node->getStringCoercedChildNames() as $childName) {
                // For Filter/Function/Test calls, consult the PHP callable
                // signature: skip wrapping arguments whose param type cannot
                // implicitly string-coerce (e.g. `int`, a `final` value object).
                if (null !== $params && 'arguments' === $childName) {
                    $this->wrapArguments($node, $params);

                    continue;
                }
                if (null !== $params && 'node' === $childName && $node instanceof FilterExpression) {
                    // The filter's input value maps to the first PHP parameter.
                    if (isset($params[0]) && CallableParameters::isStringCoercionSafe($params[0]->getType(), $params[0]->getDeclaringClass())) {
                        continue;
                    }
                }
                $this->wrapNode($node, $childName);
            }
        }

        return $node;
    }

    public function leaveNode(Node $node, Environment $env): ?Node
    {
        // GRAV FORK: compile-time source sandboxing, see CompileTimeSourcePolicyInterface.
        // A trusted module only gets the checker and a guard that hands a render while the
        // sandbox is on over to the checked variant, or throws. Keep it paired with the block in enterNode(): without
        // it a trusted module gets another module's CheckSecurityNode instead of the guard.
        if ($this->trusted) {
            if ($node instanceof ArrowFunctionExpression) {
                --$this->arrowDepth;
            }
            if ($node instanceof ModuleNode) {
                $this->trusted = false;

                $node->setNode('constructor_start', new Nodes([new CheckSecurityCallNode(), $node->getNode('constructor_start')]));
                $node->setNode('class_end', new Nodes([new TrustedTemplateGuardNode(), $node->getNode('class_end')]));
            }

            return $node;
        }

        if ($node instanceof ModuleNode) {
            $this->inAModule = false;

            $node->setNode('constructor_start', new Nodes([new CheckSecurityCallNode(), $node->getNode('constructor_start')]));
            $node->setNode('class_end', new Nodes([new CheckSecurityNode($this->filters, $this->tags, $this->functions, $this->tests), $node->getNode('class_end')]));
        }

        return $node;
    }

    /**
     * Wraps each entry in the `arguments` slot only when the corresponding
     * PHP parameter type can implicitly string-coerce.
     *
     * @param list<\ReflectionParameter> $params parameters relative to the
     *                                           first template argument (for
     *                                           filters and tests: starting
     *                                           after the `node`/input
     *                                           parameter)
     */
    private function wrapArguments(Node $node, array $params): void
    {
        $arguments = $node->getNode('arguments');
        if (!$arguments instanceof Nodes && !$arguments instanceof ArrayExpression) {
            $this->wrapNode($node, 'arguments');

            return;
        }

        // Filters and tests pass their input value (`node`) as the first PHP
        // param, so their template arguments start at offset 1.
        $positional = \array_slice($params, $node->hasNode('node') ? 1 : 0);
        $variadic = null;
        $byName = [];
        foreach ($positional as $p) {
            if ($p->isVariadic()) {
                $variadic = $p;
                break;
            }
            $byName[$this->normalizeName($p->getName())] ??= $p;
        }

        $positionalIdx = 0;
        foreach ($arguments as $key => $_) {
            if (\is_int($key)) {
                $param = $positional[$positionalIdx] ?? $variadic;
                if (null !== $param && !$param->isVariadic()) {
                    ++$positionalIdx;
                }
            } else {
                $param = $byName[$this->normalizeName($key)] ?? $variadic;
            }

            if (null !== $param && CallableParameters::isStringCoercionSafe($param->getType(), $param->getDeclaringClass())) {
                continue;
            }
            $this->wrapNode($arguments, (string) $key);
        }
    }

    private function normalizeName(string $name): string
    {
        return strtolower(str_replace('_', '', $name));
    }

    private function wrapNode(Node $node, string $name): void
    {
        $expr = $node->getNode($name);
        // `_self` is internal: it compiles to `$this->getTemplateName()` and is always a string
        if ($expr instanceof ContextVariable && '_self' === $expr->getAttribute('name')) {
            return;
        }
        if (($expr instanceof ContextVariable || $expr instanceof GetAttrExpression) && !$expr->isGenerator()) {
            $node->setNode($name, new CheckToStringNode($expr));
        } elseif ($expr instanceof SpreadUnary) {
            $expr->setNode('node', new CheckToStringNode($expr->getNode('node'), true));
        } elseif ($expr instanceof ArrayExpression || $expr instanceof Nodes) {
            foreach ($expr as $name => $_) {
                $this->wrapNode($expr, $name);
            }
        } elseif ($expr instanceof OperatorEscapeInterface) {
            foreach ($expr->getOperandNamesToEscape() as $operandName) {
                $this->wrapNode($expr, $operandName);
            }
        } elseif ($expr instanceof FilterExpression || $expr instanceof FunctionExpression) {
            $node->setNode($name, new CheckToStringNode($expr));
        }
    }

    /**
     * GRAV FORK: compile-time source sandboxing, see CompileTimeSourcePolicyInterface.
     */
    private function isTrustedModule(ModuleNode $node, Environment $env): bool
    {
        $source = $node->getSourceContext();
        if (null === $source || !$env->hasExtension(SandboxExtension::class) || !$env->getExtension(SandboxExtension::class)->getChecker()->isTrustedAtCompileTime($source)) {
            return false;
        }

        // The body of a sandbox tag runs with the runtime flag on, so the template
        // using it keeps its checks. Embedded templates are decided on their own.
        return !self::containsSandboxTag($node);
    }

    private static function containsSandboxTag(Node $node): bool
    {
        foreach ($node as $child) {
            if ($child instanceof SandboxNode || self::containsSandboxTag($child)) {
                return true;
            }
        }

        return false;
    }

    private function isTagAlwaysAllowedInSandbox(Environment $env, string $name): bool
    {
        if (null === $parser = $env->getTokenParser($name)) {
            return false;
        }

        return self::isAlwaysAllowedInSandbox($parser);
    }

    private function isFilterAlwaysAllowedInSandbox(Environment $env, FilterExpression $node): bool
    {
        if ($node->hasAttribute('twig_callable')) {
            $filter = $node->getAttribute('twig_callable');
        } elseif (null === $filter = $env->getFilter($node->getAttribute('name'))) {
            return false;
        }

        return self::isAlwaysAllowedInSandbox($filter);
    }

    private function isFunctionAlwaysAllowedInSandbox(Environment $env, FunctionExpression $node): bool
    {
        if ($node->hasAttribute('twig_callable')) {
            $function = $node->getAttribute('twig_callable');
        } elseif (null === $function = $env->getFunction($node->getAttribute('name'))) {
            return false;
        }

        return self::isAlwaysAllowedInSandbox($function);
    }

    private function isTestAlwaysAllowedInSandbox(Environment $env, TestExpression $node): bool
    {
        if ($node->hasAttribute('twig_callable')) {
            $test = $node->getAttribute('twig_callable');
        } elseif (null === $test = $env->getTest($node->getAttribute('name'))) {
            return false;
        }

        return self::isAlwaysAllowedInSandbox($test);
    }

    private function isSandboxedFunctionAlwaysAllowedInSandbox(Environment $env, Node $node, string $name): bool
    {
        if ($node->hasAttribute('sandboxed_function')) {
            $function = $node->getAttribute('sandboxed_function');
        } elseif (null === $function = $env->getFunction($name)) {
            return false;
        }

        return self::isAlwaysAllowedInSandbox($function);
    }

    private function isFunctionNameAlwaysAllowedInSandbox(Environment $env, string $name): bool
    {
        if (null === $function = $env->getFunction($name)) {
            return false;
        }

        return self::isAlwaysAllowedInSandbox($function);
    }

    /**
     * @param TwigCallableInterface|TokenParserInterface $subject
     */
    private static function isAlwaysAllowedInSandbox($subject): bool
    {
        if (method_exists($subject, 'isAlwaysAllowedInSandbox')) {
            return $subject->isAlwaysAllowedInSandbox();
        }

        $interface = $subject instanceof TokenParserInterface ? TokenParserInterface::class : TwigCallableInterface::class;
        trigger_deprecation('twig/twig', '3.28', 'Not implementing the "isAlwaysAllowedInSandbox()" method in "%s" is deprecated. This method will be part of the "%s" interface in 4.0.', $subject::class, $interface);

        return false;
    }

    public function getPriority(): int
    {
        return 0;
    }
}
