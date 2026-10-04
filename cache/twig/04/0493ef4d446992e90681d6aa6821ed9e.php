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

/* partials/visit.html.twig */
class __TwigTemplate_f2648b5dc79f6a71a0e067b5d28f8006_sourced extends Template
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
        // line 4
        yield "<section class=\"section section-navy visit\">
    <div class=\"wrap visit-grid\">
        <div class=\"visit-info\">
            ";
        // line 7
        if ((($tmp = ($context["eyebrow"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"eyebrow eyebrow-light\">";
            yield (string) $this->escaper->escape(($context["eyebrow"] ?? null), "html", null, true);
            yield "</p>";
        }
        // line 8
        yield "            <h2>";
        yield (string) (((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["title"], "html", null, true)) : ("Visit us"));
        yield "</h2>
            ";
        // line 9
        if ((($tmp = ($context["text"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"lead\">";
            yield (string) $this->escaper->escape(($context["text"] ?? null), "html", null, true);
            yield "</p>";
        }
        // line 10
        yield "
            <div class=\"visit-cols\">
                <div>
                    <h3>";
        // line 13
        yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(13))->call("icon", ["pin", 18], $context, 13, $this->source);
        yield " Address</h3>
                    <address>";
        // line 14
        yield (string) Twig\Extension\CoreExtension::nl2br($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "address", [], "any", false, false, false, 14), "html"));
        yield "</address>
                    <p class=\"visit-links\">
                        ";
        // line 16
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "phone", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a href=\"tel:";
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "phone", [], "any", false, false, false, 16), [" " => ""]), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "phone", [], "any", false, false, false, 16), "html", null, true);
            yield "</a>";
        }
        // line 17
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "email", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a href=\"mailto:";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "email", [], "any", false, false, false, 17), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "email", [], "any", false, false, false, 17), "html", null, true);
            yield "</a>";
        }
        // line 18
        yield "                    </p>
                </div>
                <div>
                    <h3>";
        // line 21
        yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(21))->call("icon", ["clock", 18], $context, 21, $this->source);
        yield " Opening hours</h3>
                    ";
        // line 22
        yield from $this->load("partials/hours.html.twig", 22)->unwrap()->yield(CoreExtension::merge($context, ["compact" => false]));
        // line 23
        yield "                </div>
            </div>

            <div class=\"hero-actions\">
                ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "maps_url", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a class=\"btn btn-primary\" href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "maps_url", [], "any", false, false, false, 27), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\">Get directions</a>";
        }
        // line 28
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "whatsapp", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a class=\"btn btn-ghost\" href=\"https://wa.me/";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "whatsapp", [], "any", false, false, false, 28), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\">Chat on WhatsApp</a>";
        }
        // line 29
        yield "            </div>
        </div>
        <div class=\"visit-map\">
            ";
        // line 32
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "lat", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "lng", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 33
            yield "                <iframe title=\"Map showing the Kaffekos location\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"
                    src=\"https://www.google.com/maps?q=";
            // line 34
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "lat", [], "any", false, false, false, 34), "html", null, true);
            yield ",";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "lng", [], "any", false, false, false, 34), "html", null, true);
            yield "&amp;z=16&amp;output=embed\"></iframe>
            ";
        }
        // line 36
        yield "        </div>
    </div>
</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/visit.html.twig";
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
        return array (  152 => 36,  145 => 34,  142 => 33,  140 => 32,  135 => 29,  128 => 28,  122 => 27,  116 => 23,  114 => 22,  110 => 21,  105 => 18,  96 => 17,  88 => 16,  83 => 14,  79 => 13,  74 => 10,  68 => 9,  63 => 8,  57 => 7,  52 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/kk.html.twig\x27 as kk %}
{% set biz = theme_var(\x27business\x27) %}
{# \"Visit us\" block: hours + address + map. Pass: eyebrow, title, text #}
<section class=\"section section-navy visit\">
    <div class=\"wrap visit-grid\">
        <div class=\"visit-info\">
            {% if eyebrow %}<p class=\"eyebrow eyebrow-light\">{{ eyebrow }}</p>{% endif %}
            <h2>{{ title ?: \x27Visit us\x27 }}</h2>
            {% if text %}<p class=\"lead\">{{ text }}</p>{% endif %}

            <div class=\"visit-cols\">
                <div>
                    <h3>{{ kk.icon(\x27pin\x27, 18) }} Address</h3>
                    <address>{{ biz.address|e(\x27html\x27)|nl2br }}</address>
                    <p class=\"visit-links\">
                        {% if biz.phone %}<a href=\"tel:{{ biz.phone|replace({\x27 \x27: \x27\x27}) }}\">{{ biz.phone }}</a>{% endif %}
                        {% if biz.email %}<a href=\"mailto:{{ biz.email }}\">{{ biz.email }}</a>{% endif %}
                    </p>
                </div>
                <div>
                    <h3>{{ kk.icon(\x27clock\x27, 18) }} Opening hours</h3>
                    {% include \x27partials/hours.html.twig\x27 with {compact: false} %}
                </div>
            </div>

            <div class=\"hero-actions\">
                {% if biz.maps_url %}<a class=\"btn btn-primary\" href=\"{{ biz.maps_url }}\" target=\"_blank\" rel=\"noopener\">Get directions</a>{% endif %}
                {% if biz.whatsapp %}<a class=\"btn btn-ghost\" href=\"https://wa.me/{{ biz.whatsapp }}\" target=\"_blank\" rel=\"noopener\">Chat on WhatsApp</a>{% endif %}
            </div>
        </div>
        <div class=\"visit-map\">
            {% if biz.lat and biz.lng %}
                <iframe title=\"Map showing the Kaffekos location\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"
                    src=\"https://www.google.com/maps?q={{ biz.lat }},{{ biz.lng }}&amp;z=16&amp;output=embed\"></iframe>
            {% endif %}
        </div>
    </div>
</section>
", "partials/visit.html.twig", "/Users/amer/Sites/kaffekos1/user/themes/kaffekos/templates/partials/visit.html.twig");
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
