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

/* contact.html.twig */
class __TwigTemplate_f30fc4ed57ad4ec3a45631fd8694703a_sourced extends Template
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

        $this->blocks = [
            'hero' => [$this, 'block_hero'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("partials/base.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["kk"] = $this->macros["kk"] = $this->load("macros/kk.html.twig", 2)->unwrap()->getMacroNamespace();
        // line 1
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->load("partials/banner.html.twig", 3)->unwrap()->yield($context);
        return; yield;
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        $context["biz"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "business");
        // line 6
        $context["c"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "contact", [], "any", true, true, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "contact", [], "any", false, false, false, 6)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "contact", [], "any", false, false, false, 6)) : ([]));
        // line 7
        yield "<section class=\"section\">
    ";
        // line 8
        if ((($tmp = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 8)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "        <div class=\"wrap wrap-narrow prose center\">";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 9);
            yield "</div>
    ";
        }
        // line 11
        yield "    <div class=\"wrap contact-grid\">
        <div class=\"contact-form card\">
            <h2>";
        // line 13
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "form_title", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "form_title", [], "any", false, false, false, 13), "html", null, true)) : ("Send us a message"));
        yield "</h2>
            ";
        // line 14
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "form_intro", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "form_intro", [], "any", false, false, false, 14), "html", null, true);
            yield "</p>";
        }
        // line 15
        yield "            ";
        yield from $this->load("forms/form.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "        </div>
        <aside class=\"contact-side\">
            <div class=\"card\">
                <h2>";
        // line 19
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "info_title", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "info_title", [], "any", false, false, false, 19), "html", null, true)) : ("Find us"));
        yield "</h2>
                <ul class=\"contact-list\">
                    <li>";
        // line 21
        yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(21))->call("icon", ["pin", 22], $context, 21, $this->source);
        yield "<span>";
        yield (string) Twig\Extension\CoreExtension::nl2br($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "address", [], "any", false, false, false, 21), "html"));
        yield "</span></li>
                    ";
        // line 22
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "phone", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<li>";
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(22))->call("icon", ["phone", 22], $context, 22, $this->source);
            yield "<a href=\"tel:";
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "phone", [], "any", false, false, false, 22), [" " => ""]), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "phone", [], "any", false, false, false, 22), "html", null, true);
            yield "</a></li>";
        }
        // line 23
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "whatsapp", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<li>";
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(23))->call("icon", ["whatsapp", 22], $context, 23, $this->source);
            yield "<a href=\"https://wa.me/";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "whatsapp", [], "any", false, false, false, 23), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\">Message us on WhatsApp</a></li>";
        }
        // line 24
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "email", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<li>";
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(24))->call("icon", ["mail", 22], $context, 24, $this->source);
            yield "<a href=\"mailto:";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "email", [], "any", false, false, false, 24), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "email", [], "any", false, false, false, 24), "html", null, true);
            yield "</a></li>";
        }
        // line 25
        yield "                </ul>
                ";
        // line 26
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "maps_url", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a class=\"btn btn-outline btn-block\" href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "maps_url", [], "any", false, false, false, 26), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\">Get directions</a>";
        }
        // line 27
        yield "            </div>
            <div class=\"card\">
                <h2>";
        // line 29
        yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(29))->call("icon", ["clock", 22], $context, 29, $this->source);
        yield " Opening hours</h2>
                ";
        // line 30
        yield from $this->load("partials/hours.html.twig", 30)->unwrap()->yield(CoreExtension::merge($context, ["compact" => false]));
        // line 31
        yield "                <p class=\"open-badge open-badge-dark\" data-open-status><span class=\"dot\"></span><span data-open-text></span></p>
            </div>
        </aside>
    </div>
    ";
        // line 35
        if (((((null === CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "show_map", [], "any", false, false, false, 35)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "show_map", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "lat", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "lng", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 36
            yield "        <div class=\"wrap wrap-wide contact-map\">
            <iframe title=\"Map showing the Kaffekos location\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"
                src=\"https://www.google.com/maps?q=";
            // line 38
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "lat", [], "any", false, false, false, 38), "html", null, true);
            yield ",";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "lng", [], "any", false, false, false, 38), "html", null, true);
            yield "&amp;z=16&amp;output=embed\"></iframe>
        </div>
    ";
        }
        // line 41
        yield "</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "contact.html.twig";
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
        return array (  196 => 41,  188 => 38,  184 => 36,  182 => 35,  176 => 31,  174 => 30,  170 => 29,  166 => 27,  160 => 26,  157 => 25,  146 => 24,  137 => 23,  127 => 22,  121 => 21,  116 => 19,  111 => 16,  108 => 15,  102 => 14,  98 => 13,  94 => 11,  88 => 9,  86 => 8,  83 => 7,  81 => 6,  79 => 5,  72 => 4,  61 => 3,  56 => 1,  54 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/kk.html.twig\x27 as kk %}
{% block hero %}{% include \x27partials/banner.html.twig\x27 %}{% endblock %}
{% block content %}
{% set biz = theme_var(\x27business\x27) %}
{% set c = header.contact ?? {} %}
<section class=\"section\">
    {% if page.content|striptags|trim %}
        <div class=\"wrap wrap-narrow prose center\">{{ page.content|raw }}</div>
    {% endif %}
    <div class=\"wrap contact-grid\">
        <div class=\"contact-form card\">
            <h2>{{ c.form_title ?: \x27Send us a message\x27 }}</h2>
            {% if c.form_intro %}<p>{{ c.form_intro }}</p>{% endif %}
            {% include \x27forms/form.html.twig\x27 %}
        </div>
        <aside class=\"contact-side\">
            <div class=\"card\">
                <h2>{{ c.info_title ?: \x27Find us\x27 }}</h2>
                <ul class=\"contact-list\">
                    <li>{{ kk.icon(\x27pin\x27, 22) }}<span>{{ biz.address|e(\x27html\x27)|nl2br }}</span></li>
                    {% if biz.phone %}<li>{{ kk.icon(\x27phone\x27, 22) }}<a href=\"tel:{{ biz.phone|replace({\x27 \x27: \x27\x27}) }}\">{{ biz.phone }}</a></li>{% endif %}
                    {% if biz.whatsapp %}<li>{{ kk.icon(\x27whatsapp\x27, 22) }}<a href=\"https://wa.me/{{ biz.whatsapp }}\" target=\"_blank\" rel=\"noopener\">Message us on WhatsApp</a></li>{% endif %}
                    {% if biz.email %}<li>{{ kk.icon(\x27mail\x27, 22) }}<a href=\"mailto:{{ biz.email }}\">{{ biz.email }}</a></li>{% endif %}
                </ul>
                {% if biz.maps_url %}<a class=\"btn btn-outline btn-block\" href=\"{{ biz.maps_url }}\" target=\"_blank\" rel=\"noopener\">Get directions</a>{% endif %}
            </div>
            <div class=\"card\">
                <h2>{{ kk.icon(\x27clock\x27, 22) }} Opening hours</h2>
                {% include \x27partials/hours.html.twig\x27 with {compact: false} %}
                <p class=\"open-badge open-badge-dark\" data-open-status><span class=\"dot\"></span><span data-open-text></span></p>
            </div>
        </aside>
    </div>
    {% if (c.show_map is null or c.show_map) and biz.lat and biz.lng %}
        <div class=\"wrap wrap-wide contact-map\">
            <iframe title=\"Map showing the Kaffekos location\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"
                src=\"https://www.google.com/maps?q={{ biz.lat }},{{ biz.lng }}&amp;z=16&amp;output=embed\"></iframe>
        </div>
    {% endif %}
</section>
{% endblock %}
", "contact.html.twig", "/Users/amer/Sites/kaffekos1/user/themes/kaffekos/templates/contact.html.twig");
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
