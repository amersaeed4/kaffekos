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

/* partials/section-head.html.twig */
class __TwigTemplate_ec3985a1b2bf4f16a7185fd6b712b45b_sourced extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        if ((((($tmp = ($context["eyebrow"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = ($context["subtitle"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 3
            yield "<div class=\"section-head";
            yield (string) (((($tmp = ($context["light"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" on-dark") : (""));
            yield "\">
    ";
            // line 4
            if ((($tmp = ($context["eyebrow"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<p class=\"eyebrow\">";
                yield (string) $this->escaper->escape(($context["eyebrow"] ?? null), "html", null, true);
                yield "</p>";
            }
            // line 5
            yield "    ";
            if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<h2>";
                yield (string) $this->escaper->escape(($context["title"] ?? null), "html", null, true);
                yield "</h2>";
            }
            // line 6
            yield "    ";
            if ((($tmp = ($context["subtitle"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<p class=\"lead\">";
                yield (string) $this->escaper->escape(($context["subtitle"] ?? null), "html", null, true);
                yield "</p>";
            }
            // line 7
            yield "    <div class=\"knot\" aria-hidden=\"true\"><span></span></div>
</div>
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/section-head.html.twig";
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
        return array (  75 => 7,  68 => 6,  61 => 5,  55 => 4,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Centered section heading. Pass: eyebrow, title, subtitle, light #}
{% if eyebrow or title or subtitle %}
<div class=\"section-head{{ light ? \x27 on-dark\x27 : \x27\x27 }}\">
    {% if eyebrow %}<p class=\"eyebrow\">{{ eyebrow }}</p>{% endif %}
    {% if title %}<h2>{{ title }}</h2>{% endif %}
    {% if subtitle %}<p class=\"lead\">{{ subtitle }}</p>{% endif %}
    <div class=\"knot\" aria-hidden=\"true\"><span></span></div>
</div>
{% endif %}
", "partials/section-head.html.twig", "/Users/amer/Sites/kaffekos1/user/themes/kaffekos/templates/partials/section-head.html.twig");
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
