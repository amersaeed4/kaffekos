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

/* blog.html.twig */
class __TwigTemplate_c5d55715107382efacd536f04c445347_sourced extends Template
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
        yield "<section class=\"section\">
    ";
        // line 6
        if ((($tmp = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 6)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "        <div class=\"wrap wrap-narrow prose center\">";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 7);
            yield "</div>
    ";
        }
        // line 9
        yield "    <div class=\"wrap\">
        <div class=\"posts\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, false, 11), "published", [], "any", false, false, false, 11), "order", ["date", "desc"], "method", false, false, false, 11));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 12
            yield "                ";
            $context["cover"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "header", [], "any", false, false, false, 12), "cover", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "media", [], "any", false, false, false, 12)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "header", [], "any", false, false, false, 12), "cover", [], "any", false, false, false, 12)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)) : (null));
            // line 13
            yield "                <article class=\"post-card\">
                    <a class=\"post-cover\" href=\"";
            // line 14
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 14), "html", null, true);
            yield "\">
                        ";
            // line 15
            if ((($tmp = ($context["cover"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(15))->call("img", [($context["cover"] ?? null), 800, 520, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 15)], $context, 15, $this->source);
            } else {
                yield "<span class=\"post-cover-empty\">";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(15))->call("icon", ["cup", 40], $context, 15, $this->source);
                yield "</span>";
            }
            // line 16
            yield "                    </a>
                    <div class=\"post-body\">
                        <time datetime=\"";
            // line 18
            yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, false, 18), "Y-m-d"), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, false, 18), "j F Y"), "html", null, true);
            yield "</time>
                        <h2><a href=\"";
            // line 19
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 19), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 19), "html", null, true);
            yield "</a></h2>
                        <p>";
            // line 20
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "header", [], "any", false, false, false, 20), "summary", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "header", [], "any", false, false, false, 20), "summary", [], "any", false, false, false, 20), "html", null, true)) : ($this->escaper->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 20)), "html", null, true)));
            yield "</p>
                        <a class=\"link-arrow\" href=\"";
            // line 21
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 21), "html", null, true);
            yield "\">Read more ";
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(21))->call("icon", ["arrow", 18], $context, 21, $this->source);
            yield "</a>
                    </div>
                </article>
            ";
            $context['_iterated'] = true;
        }
        // line 24
        if (!$context['_iterated']) {
            // line 25
            yield "                <p class=\"center\">No posts yet. Check back soon.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 27
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
        return "blog.html.twig";
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
        return array (  157 => 27,  149 => 25,  147 => 24,  137 => 21,  133 => 20,  127 => 19,  121 => 18,  117 => 16,  109 => 15,  105 => 14,  102 => 13,  99 => 12,  94 => 11,  90 => 9,  84 => 7,  82 => 6,  79 => 5,  72 => 4,  61 => 3,  56 => 1,  54 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/kk.html.twig\x27 as kk %}
{% block hero %}{% include \x27partials/banner.html.twig\x27 %}{% endblock %}
{% block content %}
<section class=\"section\">
    {% if page.content|striptags|trim %}
        <div class=\"wrap wrap-narrow prose center\">{{ page.content|raw }}</div>
    {% endif %}
    <div class=\"wrap\">
        <div class=\"posts\">
            {% for post in page.children.published.order(\x27date\x27, \x27desc\x27) %}
                {% set cover = post.header.cover ? post.media[post.header.cover] : null %}
                <article class=\"post-card\">
                    <a class=\"post-cover\" href=\"{{ post.url }}\">
                        {% if cover %}{{ kk.img(cover, 800, 520, post.title) }}{% else %}<span class=\"post-cover-empty\">{{ kk.icon(\x27cup\x27, 40) }}</span>{% endif %}
                    </a>
                    <div class=\"post-body\">
                        <time datetime=\"{{ post.date|date(\x27Y-m-d\x27) }}\">{{ post.date|date(\x27j F Y\x27) }}</time>
                        <h2><a href=\"{{ post.url }}\">{{ post.title }}</a></h2>
                        <p>{{ post.header.summary ?: post.summary|striptags }}</p>
                        <a class=\"link-arrow\" href=\"{{ post.url }}\">Read more {{ kk.icon(\x27arrow\x27, 18) }}</a>
                    </div>
                </article>
            {% else %}
                <p class=\"center\">No posts yet. Check back soon.</p>
            {% endfor %}
        </div>
    </div>
</section>
{% endblock %}
", "blog.html.twig", "/Users/amer/Sites/kaffekos1/user/themes/kaffekos/templates/blog.html.twig");
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
