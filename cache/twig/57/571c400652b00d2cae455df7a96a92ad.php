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

/* partials/banner.html.twig */
class __TwigTemplate_c410abad3aaba0f5083a08f98102a9b2_sourced extends Template
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
        // line 3
        $context["bimg"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "banner", [], "any", false, false, false, 3), "image", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 3)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "banner", [], "any", false, false, false, 3), "image", [], "any", false, false, false, 3)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)) : (null));
        // line 4
        yield "<section class=\"page-banner";
        yield (string) (((($tmp = ($context["bimg"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" has-photo") : (""));
        yield "\"";
        if ((($tmp = ($context["bimg"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " style=\"--banner: url(\x27";
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(4))->call("imgurlfit", [($context["bimg"] ?? null), 2000, 2000], $context, 4, $this->source);
            yield "\x27)\"";
        }
        yield ">
    <div class=\"wrap\">
        ";
        // line 6
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "banner", [], "any", false, false, false, 6), "eyebrow", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"eyebrow\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "banner", [], "any", false, false, false, 6), "eyebrow", [], "any", false, false, false, 6), "html", null, true);
            yield "</p>";
        }
        // line 7
        yield "        <h1>";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
        ";
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "banner", [], "any", false, false, false, 8), "subtitle", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"lead\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "banner", [], "any", false, false, false, 8), "subtitle", [], "any", false, false, false, 8), "html", null, true);
            yield "</p>";
        }
        // line 9
        yield "    </div>
    <div class=\"pattern-band pattern-band-gold\" aria-hidden=\"true\"></div>
</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/banner.html.twig";
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
        return array (  81 => 9,  75 => 8,  70 => 7,  64 => 6,  52 => 4,  50 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/kk.html.twig\x27 as kk %}
{# Title banner used by all inner pages. Optional photo from Page Banner tab. #}
{% set bimg = header.banner.image ? page.media[header.banner.image] : null %}
<section class=\"page-banner{{ bimg ? \x27 has-photo\x27 : \x27\x27 }}\"{% if bimg %} style=\"--banner: url(\x27{{ kk.imgurlfit(bimg, 2000, 2000) }}\x27)\"{% endif %}>
    <div class=\"wrap\">
        {% if header.banner.eyebrow %}<p class=\"eyebrow\">{{ header.banner.eyebrow }}</p>{% endif %}
        <h1>{{ page.title }}</h1>
        {% if header.banner.subtitle %}<p class=\"lead\">{{ header.banner.subtitle }}</p>{% endif %}
    </div>
    <div class=\"pattern-band pattern-band-gold\" aria-hidden=\"true\"></div>
</section>
", "partials/banner.html.twig", "/Users/amer/Sites/kaffekos1/user/themes/kaffekos/templates/partials/banner.html.twig");
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
