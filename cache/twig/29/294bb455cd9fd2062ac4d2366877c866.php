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

/* about.html.twig */
class __TwigTemplate_0c0625049dcee0edc9d8e7cab1a1ec13_sourced extends Template
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

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->load("partials/banner.html.twig", 4)->unwrap()->yield($context);
        return; yield;
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        $context["story_img"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "story_image", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 7)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "story_image", [], "any", false, false, false, 7)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)) : (null));
        // line 8
        yield "<section class=\"section\">
    <div class=\"wrap ";
        // line 9
        yield (string) (((($tmp = ($context["story_img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("split") : ("wrap-narrow"));
        yield "\">
        ";
        // line 10
        if ((($tmp = ($context["story_img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "            <div class=\"split-media\"><div class=\"frame\">";
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(11))->call("img", [($context["story_img"] ?? null), 720, 860, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 11)], $context, 11, $this->source);
            yield "</div></div>
        ";
        }
        // line 13
        yield "        <div class=\"split-text prose\">";
        yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 13);
        yield "</div>
    </div>
</section>

";
        // line 17
        $context["vals"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "values", [], "any", true, true, false, 17) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "values", [], "any", false, false, false, 17)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "values", [], "any", false, false, false, 17)) : ([]));
        // line 18
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["vals"] ?? null), "items", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "<section class=\"section section-sand\">
    <div class=\"wrap\">
        ";
            // line 21
            yield from $this->load("partials/section-head.html.twig", 21)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => null, "title" => CoreExtension::getAttribute($this->env, $this->source, ($context["vals"] ?? null), "title", [], "any", false, false, false, 21), "subtitle" => null]));
            // line 22
            yield "        <div class=\"features\">
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["vals"] ?? null), "items", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 24
                yield "                <div class=\"feature\">
                    <div class=\"feature-icon\">";
                // line 25
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(25))->call("icon", [(((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["f"], "icon", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["f"], "icon", [], "any", false, false, false, 25)) : ("heart")), 30], $context, 25, $this->source);
                yield "</div>
                    <h3>";
                // line 26
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "title", [], "any", false, false, false, 26), "html", null, true);
                yield "</h3>
                    <p>";
                // line 27
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "text", [], "any", false, false, false, 27), "html", null, true);
                yield "</p>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['f'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 30
            yield "        </div>
    </div>
</section>
";
        }
        // line 34
        yield "
";
        // line 35
        $context["team"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "team", [], "any", true, true, false, 35) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "team", [], "any", false, false, false, 35)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "team", [], "any", false, false, false, 35)) : ([]));
        // line 36
        if ((((null === CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "enabled", [], "any", false, false, false, 36)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "enabled", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "members", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 37
            yield "<section class=\"section\">
    <div class=\"wrap\">
        ";
            // line 39
            yield from $this->load("partials/section-head.html.twig", 39)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => null, "title" => CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "title", [], "any", false, false, false, 39), "subtitle" => CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "subtitle", [], "any", false, false, false, 39)]));
            // line 40
            yield "        <div class=\"team\">
            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "members", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 42
                yield "                ";
                $context["photo"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["m"], "photo", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 42)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = CoreExtension::getAttribute($this->env, $this->source, $context["m"], "photo", [], "any", false, false, false, 42)) instanceof \Stringable && (is_array($_v2) || $_v2 instanceof \ArrayObject || $_v2 instanceof \ArrayIterator) ? (string) $_v3 : $_v3)] ?? null) : null)) : (null));
                // line 43
                yield "                <div class=\"member\">
                    <div class=\"member-photo\">
                        ";
                // line 45
                if ((($tmp = ($context["photo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(45))->call("img", [($context["photo"] ?? null), 400, 400, CoreExtension::getAttribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 45)], $context, 45, $this->source);
                } else {
                    yield "<span>";
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 45), 0, 1), "html", null, true);
                    yield "</span>";
                }
                // line 46
                yield "                    </div>
                    <h3>";
                // line 47
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 47), "html", null, true);
                yield "</h3>
                    ";
                // line 48
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["m"], "role", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<p class=\"role\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "role", [], "any", false, false, false, 48), "html", null, true);
                    yield "</p>";
                }
                // line 49
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["m"], "bio", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<p>";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "bio", [], "any", false, false, false, 49), "html", null, true);
                    yield "</p>";
                }
                // line 50
                yield "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 52
            yield "        </div>
    </div>
</section>
";
        }
        // line 56
        yield "
";
        // line 57
        yield from $this->load("partials/visit.html.twig", 57)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => "Velkommen", "title" => "Come say hello", "text" => ""]));
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "about.html.twig";
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
        return array (  220 => 57,  217 => 56,  211 => 52,  203 => 50,  196 => 49,  190 => 48,  186 => 47,  183 => 46,  175 => 45,  171 => 43,  168 => 42,  164 => 41,  161 => 40,  159 => 39,  155 => 37,  153 => 36,  151 => 35,  148 => 34,  142 => 30,  132 => 27,  128 => 26,  124 => 25,  121 => 24,  117 => 23,  114 => 22,  112 => 21,  108 => 19,  106 => 18,  104 => 17,  96 => 13,  90 => 11,  88 => 10,  84 => 9,  81 => 8,  79 => 7,  72 => 6,  61 => 4,  56 => 1,  54 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/kk.html.twig\x27 as kk %}

{% block hero %}{% include \x27partials/banner.html.twig\x27 %}{% endblock %}

{% block content %}
{% set story_img = header.story_image ? page.media[header.story_image] : null %}
<section class=\"section\">
    <div class=\"wrap {{ story_img ? \x27split\x27 : \x27wrap-narrow\x27 }}\">
        {% if story_img %}
            <div class=\"split-media\"><div class=\"frame\">{{ kk.img(story_img, 720, 860, page.title) }}</div></div>
        {% endif %}
        <div class=\"split-text prose\">{{ page.content|raw }}</div>
    </div>
</section>

{% set vals = header.values ?? {} %}
{% if vals.items %}
<section class=\"section section-sand\">
    <div class=\"wrap\">
        {% include \x27partials/section-head.html.twig\x27 with {eyebrow: null, title: vals.title, subtitle: null} %}
        <div class=\"features\">
            {% for f in vals.items %}
                <div class=\"feature\">
                    <div class=\"feature-icon\">{{ kk.icon(f.icon ?: \x27heart\x27, 30) }}</div>
                    <h3>{{ f.title }}</h3>
                    <p>{{ f.text }}</p>
                </div>
            {% endfor %}
        </div>
    </div>
</section>
{% endif %}

{% set team = header.team ?? {} %}
{% if (team.enabled is null or team.enabled) and team.members %}
<section class=\"section\">
    <div class=\"wrap\">
        {% include \x27partials/section-head.html.twig\x27 with {eyebrow: null, title: team.title, subtitle: team.subtitle} %}
        <div class=\"team\">
            {% for m in team.members %}
                {% set photo = m.photo ? page.media[m.photo] : null %}
                <div class=\"member\">
                    <div class=\"member-photo\">
                        {% if photo %}{{ kk.img(photo, 400, 400, m.name) }}{% else %}<span>{{ m.name|slice(0,1) }}</span>{% endif %}
                    </div>
                    <h3>{{ m.name }}</h3>
                    {% if m.role %}<p class=\"role\">{{ m.role }}</p>{% endif %}
                    {% if m.bio %}<p>{{ m.bio }}</p>{% endif %}
                </div>
            {% endfor %}
        </div>
    </div>
</section>
{% endif %}

{% include \x27partials/visit.html.twig\x27 with {eyebrow: \x27Velkommen\x27, title: \x27Come say hello\x27, text: \x27\x27} %}
{% endblock %}
", "about.html.twig", "/Users/amer/Sites/kaffekos1/user/themes/kaffekos/templates/about.html.twig");
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
