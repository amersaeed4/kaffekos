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

/* menu.html.twig */
class __TwigTemplate_1b4b551821d1c866e76def673defc5db_sourced extends Template
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
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->load("partials/banner.html.twig", 2)->unwrap()->yield($context);
        return; yield;
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        $context["cats"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, false, 4), "published", [], "any", false, false, false, 4);
        // line 5
        $context["show_images"] = ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "menu_options", [], "any", false, false, false, 5), "show_images", [], "any", false, false, false, 5)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "menu_options", [], "any", false, false, false, 5), "show_images", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
        // line 6
        $context["show_prices"] = ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "menu_options", [], "any", false, false, false, 6), "show_prices", [], "any", false, false, false, 6)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "menu_options", [], "any", false, false, false, 6), "show_prices", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
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
        yield "
    ";
        // line 12
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["cats"] ?? null)) > 1)) {
            // line 13
            yield "        <nav class=\"menu-tabs\" aria-label=\"Menu categories\">
            <div class=\"wrap\">
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["cats"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                yield "<a href=\"#";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "slug", [], "any", false, false, false, 15), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "title", [], "any", false, false, false, 15), "html", null, true);
                yield "</a>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 16
            yield "            </div>
        </nav>
    ";
        }
        // line 19
        yield "
    <div class=\"wrap wrap-menu\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["cats"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 22
            yield "            ";
            yield from $this->load("partials/menu-section.html.twig", 22)->unwrap()->yield(CoreExtension::merge($context, ["cat" => $context["cat"], "currency" => $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "menu.currency"), "show_images" => ($context["show_images"] ?? null), "show_prices" => ($context["show_prices"] ?? null)]));
            // line 23
            yield "        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 24
            yield "            <p class=\"center\">The menu is being prepared. Please check back soon.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 26
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "menu_options", [], "any", false, false, false, 26), "note", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"menu-note\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "menu_options", [], "any", false, false, false, 26), "note", [], "any", false, false, false, 26), "html", null, true);
            yield "</p>";
        }
        // line 27
        yield "    </div>
</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "menu.html.twig";
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
        return array (  174 => 27,  167 => 26,  159 => 24,  146 => 23,  143 => 22,  125 => 21,  121 => 19,  116 => 16,  102 => 15,  98 => 13,  96 => 12,  93 => 11,  87 => 9,  85 => 8,  82 => 7,  80 => 6,  78 => 5,  76 => 4,  69 => 3,  58 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% block hero %}{% include \x27partials/banner.html.twig\x27 %}{% endblock %}
{% block content %}
{% set cats = page.children.published %}
{% set show_images = header.menu_options.show_images is null or header.menu_options.show_images %}
{% set show_prices = header.menu_options.show_prices is null or header.menu_options.show_prices %}
<section class=\"section\">
    {% if page.content|striptags|trim %}
        <div class=\"wrap wrap-narrow prose center\">{{ page.content|raw }}</div>
    {% endif %}

    {% if cats|length > 1 %}
        <nav class=\"menu-tabs\" aria-label=\"Menu categories\">
            <div class=\"wrap\">
                {% for cat in cats %}<a href=\"#{{ cat.slug }}\">{{ cat.title }}</a>{% endfor %}
            </div>
        </nav>
    {% endif %}

    <div class=\"wrap wrap-menu\">
        {% for cat in cats %}
            {% include \x27partials/menu-section.html.twig\x27 with {cat: cat, currency: theme_var(\x27menu.currency\x27), show_images: show_images, show_prices: show_prices} %}
        {% else %}
            <p class=\"center\">The menu is being prepared. Please check back soon.</p>
        {% endfor %}
        {% if header.menu_options.note %}<p class=\"menu-note\">{{ header.menu_options.note }}</p>{% endif %}
    </div>
</section>
{% endblock %}
", "menu.html.twig", "/Users/amer/Sites/kaffekos1/user/themes/kaffekos/templates/menu.html.twig");
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
