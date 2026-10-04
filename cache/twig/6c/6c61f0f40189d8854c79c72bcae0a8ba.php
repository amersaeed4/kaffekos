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

/* gallery.html.twig */
class __TwigTemplate_d80a4bb818bc1d89b4cd9e78789a60cb_sourced extends Template
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
        $context["photos"] = $this->env->getFunction('kk_gallery_photos')->getCallable()(($context["page"] ?? null));
        // line 6
        yield "<section class=\"section\">
    ";
        // line 7
        if ((($tmp = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 7)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "        <div class=\"wrap wrap-narrow prose center\">";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 8);
            yield "</div>
    ";
        }
        // line 10
        yield "    <div class=\"wrap wrap-wide\">
        <div class=\"gallery\" data-gallery>
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["photos"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ph"]) {
            // line 13
            yield "                <a class=\"gallery-item\" href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ph"], "media", [], "any", false, false, false, 13), "cropResize", [1800, 1800], "method", false, false, false, 13), "quality", [82], "method", false, false, false, 13), "url", [], "any", false, false, false, 13), "html", null, true);
            yield "\" data-caption=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ph"], "caption", [], "any", false, false, false, 13), "html_attr");
            yield "\">
                    ";
            // line 14
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(14))->call("imgfit", [CoreExtension::getAttribute($this->env, $this->source, $context["ph"], "media", [], "any", false, false, false, 14), 700, 1000, (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ph"], "caption", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["ph"], "caption", [], "any", false, false, false, 14)) : ("Kaffekos photo"))], $context, 14, $this->source);
            yield "
                    ";
            // line 15
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ph"], "caption", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"gallery-cap\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ph"], "caption", [], "any", false, false, false, 15), "html", null, true);
                yield "</span>";
            }
            // line 16
            yield "                </a>
            ";
            $context['_iterated'] = true;
        }
        // line 17
        if (!$context['_iterated']) {
            // line 18
            yield "                <p class=\"center\">Photos coming soon.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ph'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 20
        yield "        </div>
    </div>
</section>

<dialog class=\"lightbox\" id=\"lightbox\" aria-label=\"Photo viewer\">
    <button class=\"lightbox-close\" type=\"button\" aria-label=\"Close\">&times;</button>
    <button class=\"lightbox-nav lightbox-prev\" type=\"button\" aria-label=\"Previous photo\">&#8249;</button>
    <figure><img src=\"\" alt=\"\"><figcaption></figcaption></figure>
    <button class=\"lightbox-nav lightbox-next\" type=\"button\" aria-label=\"Next photo\">&#8250;</button>
</dialog>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "gallery.html.twig";
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
        return array (  133 => 20,  125 => 18,  123 => 17,  118 => 16,  112 => 15,  108 => 14,  101 => 13,  96 => 12,  92 => 10,  86 => 8,  84 => 7,  81 => 6,  79 => 5,  72 => 4,  61 => 3,  56 => 1,  54 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/kk.html.twig\x27 as kk %}
{% block hero %}{% include \x27partials/banner.html.twig\x27 %}{% endblock %}
{% block content %}
{% set photos = kk_gallery_photos(page) %}
<section class=\"section\">
    {% if page.content|striptags|trim %}
        <div class=\"wrap wrap-narrow prose center\">{{ page.content|raw }}</div>
    {% endif %}
    <div class=\"wrap wrap-wide\">
        <div class=\"gallery\" data-gallery>
            {% for ph in photos %}
                <a class=\"gallery-item\" href=\"{{ ph.media.cropResize(1800, 1800).quality(82).url }}\" data-caption=\"{{ ph.caption|e(\x27html_attr\x27) }}\">
                    {{ kk.imgfit(ph.media, 700, 1000, ph.caption ?: \x27Kaffekos photo\x27) }}
                    {% if ph.caption %}<span class=\"gallery-cap\">{{ ph.caption }}</span>{% endif %}
                </a>
            {% else %}
                <p class=\"center\">Photos coming soon.</p>
            {% endfor %}
        </div>
    </div>
</section>

<dialog class=\"lightbox\" id=\"lightbox\" aria-label=\"Photo viewer\">
    <button class=\"lightbox-close\" type=\"button\" aria-label=\"Close\">&times;</button>
    <button class=\"lightbox-nav lightbox-prev\" type=\"button\" aria-label=\"Previous photo\">&#8249;</button>
    <figure><img src=\"\" alt=\"\"><figcaption></figcaption></figure>
    <button class=\"lightbox-nav lightbox-next\" type=\"button\" aria-label=\"Next photo\">&#8250;</button>
</dialog>
{% endblock %}
", "gallery.html.twig", "/Users/amer/Sites/kaffekos1/user/themes/kaffekos/templates/gallery.html.twig");
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
