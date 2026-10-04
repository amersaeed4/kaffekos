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

/* partials/header.html.twig */
class __TwigTemplate_315907b444f230c5f429df6356966724_sourced extends Template
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
        // line 1
        $macros["kk"] = $this->macros["kk"] = $this->load("macros/kk.html.twig", 1)->unwrap()->getMacroNamespace();
        // line 2
        $context["cta_label"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "header.cta_label");
        // line 3
        $context["cta_url"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "header.cta_url");
        // line 4
        $context["wordmark"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "brand.wordmark")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "brand.wordmark")) : (CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 4)));
        // line 5
        yield "<header class=\"site-header\" id=\"site-header\">
    <div class=\"wrap header-inner\">
        <a class=\"brand\" href=\"";
        // line 7
        yield (string) (((($context["base_url"] ?? null) == "")) ? ("/") : ($this->escaper->escape(($context["base_url"] ?? null), "html", null, true)));
        yield "\" aria-label=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        yield " home\">
            <img src=\"";
        // line 8
        yield (string) $this->escaper->escape(($context["logo_url"] ?? null), "html", null, true);
        yield "\" alt=\"\" width=\"44\" height=\"44\">
            <span class=\"brand-text\">
                <span class=\"brand-name\">";
        // line 10
        yield (string) $this->escaper->escape(($context["wordmark"] ?? null), "html", null, true);
        yield "</span>
                ";
        // line 11
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "brand.tagline")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"brand-tag\">";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "brand.tagline"), "html", null, true);
            yield "</span>";
        }
        // line 12
        yield "            </span>
        </a>

        <nav class=\"main-nav\" id=\"main-nav\" aria-label=\"Main\">
            <ul>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pages"] ?? null), "children", [], "any", false, false, false, 17), "visible", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 18
            yield "                    <li><a href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 18), "html", null, true);
            yield "\" class=\"";
            yield (string) ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("active") : (""));
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 18), "html", null, true);
            yield "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 20
        yield "            </ul>
            ";
        // line 21
        if ((($tmp = ($context["cta_label"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                <a class=\"btn btn-primary nav-cta\" href=\"";
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(22))->call("href", [($context["cta_url"] ?? null)], $context, 22, $this->source);
            yield "\">";
            yield (string) $this->escaper->escape(($context["cta_label"] ?? null), "html", null, true);
            yield "</a>
            ";
        }
        // line 24
        yield "        </nav>

        <button class=\"nav-toggle\" type=\"button\" aria-controls=\"main-nav\" aria-expanded=\"false\" aria-label=\"Open menu\">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/header.html.twig";
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
        return array (  119 => 24,  111 => 22,  109 => 21,  106 => 20,  92 => 18,  88 => 17,  81 => 12,  75 => 11,  71 => 10,  66 => 8,  60 => 7,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/kk.html.twig\x27 as kk %}
{% set cta_label = theme_var(\x27header.cta_label\x27) %}
{% set cta_url = theme_var(\x27header.cta_url\x27) %}
{% set wordmark = theme_var(\x27brand.wordmark\x27) ?: site.title %}
<header class=\"site-header\" id=\"site-header\">
    <div class=\"wrap header-inner\">
        <a class=\"brand\" href=\"{{ base_url == \x27\x27 ? \x27/\x27 : base_url }}\" aria-label=\"{{ site.title }} home\">
            <img src=\"{{ logo_url }}\" alt=\"\" width=\"44\" height=\"44\">
            <span class=\"brand-text\">
                <span class=\"brand-name\">{{ wordmark }}</span>
                {% if theme_var(\x27brand.tagline\x27) %}<span class=\"brand-tag\">{{ theme_var(\x27brand.tagline\x27) }}</span>{% endif %}
            </span>
        </a>

        <nav class=\"main-nav\" id=\"main-nav\" aria-label=\"Main\">
            <ul>
                {% for p in pages.children.visible %}
                    <li><a href=\"{{ p.url }}\" class=\"{{ p.active or p.activeChild ? \x27active\x27 : \x27\x27 }}\">{{ p.menu }}</a></li>
                {% endfor %}
            </ul>
            {% if cta_label %}
                <a class=\"btn btn-primary nav-cta\" href=\"{{ kk.href(cta_url) }}\">{{ cta_label }}</a>
            {% endif %}
        </nav>

        <button class=\"nav-toggle\" type=\"button\" aria-controls=\"main-nav\" aria-expanded=\"false\" aria-label=\"Open menu\">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
", "partials/header.html.twig", "/Users/amer/Sites/kaffekos1/user/themes/kaffekos/templates/partials/header.html.twig");
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
