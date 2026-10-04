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

/* partials/footer.html.twig */
class __TwigTemplate_ef04b4c78749d9b352ebc858a9f262af_sourced extends Template
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
        $context["biz"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "business");
        // line 3
        $context["social"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social");
        // line 4
        $context["hours"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "hours");
        // line 5
        yield "<footer class=\"site-footer\">
    <div class=\"pattern-band\" aria-hidden=\"true\"></div>
    <div class=\"wrap footer-grid\">
        <div class=\"footer-brand\">
            <a class=\"brand brand-light\" href=\"";
        // line 9
        yield (string) (((($context["base_url"] ?? null) == "")) ? ("/") : ($this->escaper->escape(($context["base_url"] ?? null), "html", null, true)));
        yield "\">
                <img src=\"";
        // line 10
        yield (string) $this->escaper->escape(($context["logo_url"] ?? null), "html", null, true);
        yield "\" alt=\"\" width=\"52\" height=\"52\">
                <span class=\"brand-text\">
                    <span class=\"brand-name\">";
        // line 12
        yield (string) (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "brand.wordmark")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "brand.wordmark"), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 12), "html", null, true)));
        yield "</span>
                    ";
        // line 13
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "brand.tagline")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"brand-tag\">";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "brand.tagline"), "html", null, true);
            yield "</span>";
        }
        // line 14
        yield "                </span>
            </a>
            <p>";
        // line 16
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "footer.about"), "html", null, true);
        yield "</p>
            <ul class=\"social\">
                ";
        // line 18
        $context["social_names"] = ["instagram" => "Instagram", "facebook" => "Facebook", "tiktok" => "TikTok", "youtube" => "YouTube", "linkedin" => "LinkedIn", "x" => "X"];
        // line 19
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["instagram", "facebook", "tiktok", "youtube", "linkedin", "x"]);
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 20
            yield "                    ";
            if ((($tmp = (($_v0 = ($context["social"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = $context["key"]) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 21
                yield "                        <li><a href=\"";
                yield (string) $this->escaper->escape((($_v2 = ($context["social"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = $context["key"]) instanceof \Stringable && (is_array($_v2) || $_v2 instanceof \ArrayObject || $_v2 instanceof \ArrayIterator) ? (string) $_v3 : $_v3)] ?? null) : null), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener\" aria-label=\"";
                yield (string) $this->escaper->escape((($_v4 = ($context["social_names"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[(($_v5 = $context["key"]) instanceof \Stringable && (is_array($_v4) || $_v4 instanceof \ArrayObject || $_v4 instanceof \ArrayIterator) ? (string) $_v5 : $_v5)] ?? null) : null), "html", null, true);
                yield "\">";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(21))->call("icon", [$context["key"], 20], $context, 21, $this->source);
                yield "</a></li>
                    ";
            } elseif ((            // line 22
$context["key"] != "x")) {
                // line 23
                yield "                        <li><span class=\"is-soon\" title=\"";
                yield (string) $this->escaper->escape((($_v6 = ($context["social_names"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[(($_v7 = $context["key"]) instanceof \Stringable && (is_array($_v6) || $_v6 instanceof \ArrayObject || $_v6 instanceof \ArrayIterator) ? (string) $_v7 : $_v7)] ?? null) : null), "html", null, true);
                yield " - coming soon\" role=\"img\" aria-label=\"";
                yield (string) $this->escaper->escape((($_v8 = ($context["social_names"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[(($_v9 = $context["key"]) instanceof \Stringable && (is_array($_v8) || $_v8 instanceof \ArrayObject || $_v8 instanceof \ArrayIterator) ? (string) $_v9 : $_v9)] ?? null) : null), "html", null, true);
                yield " (coming soon)\">";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(23))->call("icon", [$context["key"], 20], $context, 23, $this->source);
                yield "</span></li>
                    ";
            }
            // line 25
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 26
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "whatsapp", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "                    <li><a href=\"https://wa.me/";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "whatsapp", [], "any", false, false, false, 27), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\" aria-label=\"WhatsApp\">";
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(27))->call("icon", ["whatsapp", 20], $context, 27, $this->source);
            yield "</a></li>
                ";
        }
        // line 29
        yield "            </ul>
        </div>

        <div>
            <h3 class=\"footer-title\">Explore</h3>
            <ul class=\"footer-links\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pages"] ?? null), "children", [], "any", false, false, false, 35), "visible", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 36
            yield "                    <li><a href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 36), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 36), "html", null, true);
            yield "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 38
        yield "            </ul>
        </div>

        <div>
            <h3 class=\"footer-title\">Find us</h3>
            <address class=\"footer-address\">
                ";
        // line 44
        yield (string) Twig\Extension\CoreExtension::nl2br($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "address", [], "any", false, false, false, 44), "html"));
        yield "
            </address>
            <ul class=\"footer-links\">
                ";
        // line 47
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "phone", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<li><a href=\"tel:";
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "phone", [], "any", false, false, false, 47), [" " => ""]), "html", null, true);
            yield "\">";
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(47))->call("icon", ["phone", 16], $context, 47, $this->source);
            yield " ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "phone", [], "any", false, false, false, 47), "html", null, true);
            yield "</a></li>";
        }
        // line 48
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "email", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<li><a href=\"mailto:";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "email", [], "any", false, false, false, 48), "html", null, true);
            yield "\">";
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(48))->call("icon", ["mail", 16], $context, 48, $this->source);
            yield " ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "email", [], "any", false, false, false, 48), "html", null, true);
            yield "</a></li>";
        }
        // line 49
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "maps_url", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<li><a href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "maps_url", [], "any", false, false, false, 49), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\">";
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(49))->call("icon", ["pin", 16], $context, 49, $this->source);
            yield " Get directions</a></li>";
        }
        // line 50
        yield "            </ul>
        </div>

        <div>
            <h3 class=\"footer-title\">Opening hours</h3>
            ";
        // line 55
        yield from $this->load("partials/hours.html.twig", 55)->unwrap()->yield(CoreExtension::merge($context, ["compact" => true]));
        // line 56
        yield "        </div>
    </div>
    <div class=\"footer-bottom\">
        <div class=\"wrap\">
            <span>&copy; ";
        // line 60
        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ";
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "footer.copyright"), "html", null, true);
        yield "</span>
            ";
        // line 61
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "footer.tagline")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"footer-kos\">";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "footer.tagline"), "html", null, true);
            yield "</span>";
        }
        // line 62
        yield "        </div>
    </div>
</footer>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/footer.html.twig";
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
        return array (  234 => 62,  228 => 61,  222 => 60,  216 => 56,  214 => 55,  207 => 50,  198 => 49,  187 => 48,  177 => 47,  171 => 44,  163 => 38,  151 => 36,  147 => 35,  139 => 29,  131 => 27,  128 => 26,  121 => 25,  111 => 23,  109 => 22,  100 => 21,  97 => 20,  92 => 19,  90 => 18,  85 => 16,  81 => 14,  75 => 13,  71 => 12,  66 => 10,  62 => 9,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/kk.html.twig\x27 as kk %}
{% set biz = theme_var(\x27business\x27) %}
{% set social = theme_var(\x27social\x27) %}
{% set hours = theme_var(\x27hours\x27) %}
<footer class=\"site-footer\">
    <div class=\"pattern-band\" aria-hidden=\"true\"></div>
    <div class=\"wrap footer-grid\">
        <div class=\"footer-brand\">
            <a class=\"brand brand-light\" href=\"{{ base_url == \x27\x27 ? \x27/\x27 : base_url }}\">
                <img src=\"{{ logo_url }}\" alt=\"\" width=\"52\" height=\"52\">
                <span class=\"brand-text\">
                    <span class=\"brand-name\">{{ theme_var(\x27brand.wordmark\x27) ?: site.title }}</span>
                    {% if theme_var(\x27brand.tagline\x27) %}<span class=\"brand-tag\">{{ theme_var(\x27brand.tagline\x27) }}</span>{% endif %}
                </span>
            </a>
            <p>{{ theme_var(\x27footer.about\x27) }}</p>
            <ul class=\"social\">
                {% set social_names = {instagram: \x27Instagram\x27, facebook: \x27Facebook\x27, tiktok: \x27TikTok\x27, youtube: \x27YouTube\x27, linkedin: \x27LinkedIn\x27, x: \x27X\x27} %}
                {% for key in [\x27instagram\x27, \x27facebook\x27, \x27tiktok\x27, \x27youtube\x27, \x27linkedin\x27, \x27x\x27] %}
                    {% if social[key] %}
                        <li><a href=\"{{ social[key] }}\" target=\"_blank\" rel=\"noopener\" aria-label=\"{{ social_names[key] }}\">{{ kk.icon(key, 20) }}</a></li>
                    {% elseif key != \x27x\x27 %}
                        <li><span class=\"is-soon\" title=\"{{ social_names[key] }} - coming soon\" role=\"img\" aria-label=\"{{ social_names[key] }} (coming soon)\">{{ kk.icon(key, 20) }}</span></li>
                    {% endif %}
                {% endfor %}
                {% if biz.whatsapp %}
                    <li><a href=\"https://wa.me/{{ biz.whatsapp }}\" target=\"_blank\" rel=\"noopener\" aria-label=\"WhatsApp\">{{ kk.icon(\x27whatsapp\x27, 20) }}</a></li>
                {% endif %}
            </ul>
        </div>

        <div>
            <h3 class=\"footer-title\">Explore</h3>
            <ul class=\"footer-links\">
                {% for p in pages.children.visible %}
                    <li><a href=\"{{ p.url }}\">{{ p.menu }}</a></li>
                {% endfor %}
            </ul>
        </div>

        <div>
            <h3 class=\"footer-title\">Find us</h3>
            <address class=\"footer-address\">
                {{ biz.address|e(\x27html\x27)|nl2br }}
            </address>
            <ul class=\"footer-links\">
                {% if biz.phone %}<li><a href=\"tel:{{ biz.phone|replace({\x27 \x27: \x27\x27}) }}\">{{ kk.icon(\x27phone\x27, 16) }} {{ biz.phone }}</a></li>{% endif %}
                {% if biz.email %}<li><a href=\"mailto:{{ biz.email }}\">{{ kk.icon(\x27mail\x27, 16) }} {{ biz.email }}</a></li>{% endif %}
                {% if biz.maps_url %}<li><a href=\"{{ biz.maps_url }}\" target=\"_blank\" rel=\"noopener\">{{ kk.icon(\x27pin\x27, 16) }} Get directions</a></li>{% endif %}
            </ul>
        </div>

        <div>
            <h3 class=\"footer-title\">Opening hours</h3>
            {% include \x27partials/hours.html.twig\x27 with {compact: true} %}
        </div>
    </div>
    <div class=\"footer-bottom\">
        <div class=\"wrap\">
            <span>&copy; {{ \x27now\x27|date(\x27Y\x27) }} {{ theme_var(\x27footer.copyright\x27) }}</span>
            {% if theme_var(\x27footer.tagline\x27) %}<span class=\"footer-kos\">{{ theme_var(\x27footer.tagline\x27) }}</span>{% endif %}
        </div>
    </div>
</footer>
", "partials/footer.html.twig", "/Users/amer/Sites/kaffekos1/user/themes/kaffekos/templates/partials/footer.html.twig");
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
