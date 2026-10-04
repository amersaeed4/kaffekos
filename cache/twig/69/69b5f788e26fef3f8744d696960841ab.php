<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* forms/layouts/button/default-button.html.twig */
class __TwigTemplate_8264e3fd1d3378a6c77b57da42d45275_sourced extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];
    private \Twig\Runtime\EscaperRuntime $escaper;

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->escaper = $env->getRuntime('Twig\Runtime\EscaperRuntime');

        $this->parent = false;

        $this->blocks = [
            'embed_button_core' => [$this, 'block_embed_button_core'],
            'embed_button_classes' => [$this, 'block_embed_button_classes'],
            'embed_button_content' => [$this, 'block_embed_button_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["button_tag"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "<button
    ";
            // line 3
            yield from $this->unwrap()->yieldBlock('embed_button_core', $context, $blocks);
            // line 4
            yield "    ";
            yield from $this->unwrap()->yieldBlock('embed_button_classes', $context, $blocks);
            // line 5
            yield ">";
            yield from $this->unwrap()->yieldBlock('embed_button_content', $context, $blocks);
            yield "</button>
";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        yield "
";
        // line 8
        if ((($tmp = ($context["button_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "  <a href=\"";
            yield (string) $this->escaper->escape(($context["button_url"] ?? null));
            yield "\">";
            yield (string) Twig\Extension\CoreExtension::trim(($context["button_tag"] ?? null));
            yield "</a>
";
        } else {
            // line 11
            yield "  ";
            yield (string) Twig\Extension\CoreExtension::trim(($context["button_tag"] ?? null));
            yield "
";
        }
        return; yield;
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_button_core(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_button_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_button_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/layouts/button/default-button.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  110 => 5,  100 => 4,  90 => 3,  81 => 11,  73 => 9,  71 => 8,  68 => 7,  61 => 5,  58 => 4,  56 => 3,  53 => 2,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set button_tag %}
<button
    {% block embed_button_core %}{% endblock %}
    {% block embed_button_classes %}{% endblock %}
>{%- block embed_button_content -%}{%- endblock -%}</button>
{% endset %}

{% if button_url %}
  <a href=\"{{ button_url|e }}\">{{ button_tag|trim|raw }}</a>
{% else %}
  {{ button_tag|trim|raw }}
{% endif %}
", "forms/layouts/button/default-button.html.twig", "/Users/amer/Sites/kaffekos1/user/plugins/form/templates/forms/layouts/button/default-button.html.twig");
    }
    
    public function ensureSecurityCheckedOrHandOver(): ?\Twig\Template
    {
        if (!$this->sandbox->isSandboxed()) {
            return null;
        }

        return $this->loadSecurityCheckedTemplate() ?? throw new \Twig\Sandbox\SecurityError(\sprintf('Template "%s" was loaded as a trusted template and cannot be rendered while the sandbox is enabled.', $this->getTemplateName()), -1, $this->source);
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed()) {
            throw new \Twig\Sandbox\SecurityError(\sprintf('Template "%s" was loaded as a trusted template and cannot be rendered while the sandbox is enabled.', $this->getTemplateName()), -1, $this->source);
        }
    }
}
