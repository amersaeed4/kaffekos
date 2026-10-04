<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Node;

use Twig\Attribute\YieldReady;
use Twig\Compiler;

/**
 * GRAV FORK: compile-time source sandboxing, see CompileTimeSourcePolicyInterface.
 *
 * Takes the place of CheckSecurityNode in a template compiled as trusted, which
 * has no sandbox checks of its own. Templates loaded while the runtime flag is on
 * get a fully checked class, so this only matters for an instance loaded earlier
 * (a TemplateWrapper passed into a sandboxed include, a trusted parent's blocks,
 * macros imported before the sandbox turned on).
 *
 * It compiles two methods:
 *
 *  - ensureSecurityCheckedOrHandOver() returns, while the sandbox is on, the fully
 *    checked variant of the same template (Template::loadSecurityCheckedTemplate())
 *    and throws when there is none. Template::yield(), yieldBlock(), getParent()
 *    and MacroNamespace run that variant instead, so the render matches upstream
 *    Twig, with runtime checks. With the sandbox off it costs the one
 *    isSandboxed() call ensureSecurityChecked() used to cost there.
 *  - ensureSecurityChecked() throws a SecurityError while the sandbox is on, as
 *    the backstop for any path that calls it without handing over, so a missed
 *    path fails closed.
 *
 * If this node is lost, a trusted template rendered inside a sandboxed render
 * runs unchecked, silently. Grav's SourceSandboxCompilationTest pins it.
 *
 * @internal
 */
#[YieldReady]
final class TrustedTemplateGuardNode extends Node
{
    public function compile(Compiler $compiler): void
    {
        $throw = "throw new \\Twig\\Sandbox\\SecurityError(\\sprintf('Template \"%s\" was loaded as a trusted template and cannot be rendered while the sandbox is enabled.', \$this->getTemplateName()), -1, \$this->source);\n";

        $compiler
            ->write("\n")
            ->write("public function ensureSecurityCheckedOrHandOver(): ?\\Twig\\Template\n")
            ->write("{\n")
            ->indent()
            ->write("if (!\$this->sandbox->isSandboxed()) {\n")
            ->indent()
            ->write("return null;\n")
            ->outdent()
            ->write("}\n\n")
            ->write('return $this->loadSecurityCheckedTemplate() ?? ')->raw($throw)
            ->outdent()
            ->write("}\n")
            ->write("\n")
            ->write("public function ensureSecurityChecked(): void\n")
            ->write("{\n")
            ->indent()
            ->write("if (\$this->sandbox->isSandboxed()) {\n")
            ->indent()
            ->write($throw)
            ->outdent()
            ->write("}\n")
            ->outdent()
            ->write("}\n")
        ;
    }
}
