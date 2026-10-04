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

/* partials/jsonld.html.twig */
class __TwigTemplate_ba48f743c313be8f5bf4a81e9abaa91c_sourced extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["biz"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "business");
        // line 3
        $context["social"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social");
        // line 4
        $context["days"] = ["monday" => "Monday", "tuesday" => "Tuesday", "wednesday" => "Wednesday", "thursday" => "Thursday", "friday" => "Friday", "saturday" => "Saturday", "sunday" => "Sunday"];
        // line 5
        $context["specs"] = [];
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "hours"), function ($__h__) use ($context, $macros) { $context["h"] = $__h__; return ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "day", [], "any", false, false, true, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "closed", [], "any", false, false, true, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "open", [], "any", false, false, true, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "close", [], "any", false, false, true, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 7
            yield "    ";
            $context["specs"] = Twig\Extension\CoreExtension::merge(($context["specs"] ?? null), [["@type" => "OpeningHoursSpecification", "dayOfWeek" => Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["h"], "day", [], "any", false, false, false, 7)), "opens" => CoreExtension::getAttribute($this->env, $this->source, $context["h"], "open", [], "any", false, false, false, 7), "closes" => CoreExtension::getAttribute($this->env, $this->source, $context["h"], "close", [], "any", false, false, false, 7)]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['h'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 9
        $context["same"] = [];
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, ($context["social"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ($context["v"] ?? null); }));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            $context["same"] = Twig\Extension\CoreExtension::merge(($context["same"] ?? null), [$context["v"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 11
        $context["data"] = ["@context" => "https://schema.org", "@type" => "CafeOrCoffeeShop", "name" => CoreExtension::getAttribute($this->env, $this->source,         // line 14
($context["site"] ?? null), "title", [], "any", false, false, false, 14), "url" => (        // line 15
($context["base_url_absolute"] ?? null) . "/"), "image" => $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/kk-logo.png", true), "telephone" => CoreExtension::getAttribute($this->env, $this->source,         // line 17
($context["biz"] ?? null), "phone", [], "any", false, false, false, 17), "email" => CoreExtension::getAttribute($this->env, $this->source,         // line 18
($context["biz"] ?? null), "email", [], "any", false, false, false, 18), "priceRange" => CoreExtension::getAttribute($this->env, $this->source,         // line 19
($context["biz"] ?? null), "price_range", [], "any", false, false, false, 19), "servesCuisine" => ["Coffee", "Norwegian", "Bakery"], "address" => ["@type" => "PostalAddress", "streetAddress" => Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source,         // line 21
($context["biz"] ?? null), "address", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "address", [], "any", false, false, false, 21), "")) : ("")), ["
" => ", "]), "addressLocality" => "Lahore", "addressCountry" => "PK"], "geo" => ["@type" => "GeoCoordinates", "latitude" => CoreExtension::getAttribute($this->env, $this->source,         // line 22
($context["biz"] ?? null), "lat", [], "any", false, false, false, 22), "longitude" => CoreExtension::getAttribute($this->env, $this->source, ($context["biz"] ?? null), "lng", [], "any", false, false, false, 22)], "openingHoursSpecification" =>         // line 23
($context["specs"] ?? null), "sameAs" =>         // line 24
($context["same"] ?? null)];
        // line 26
        yield "<script type=\"application/ld+json\">";
        yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonEncodeGuarded($this->env, false, ($context["data"] ?? null), (Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_SLASHES") | Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_UNICODE")));
        yield "</script>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/jsonld.html.twig";
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
        return array (  89 => 26,  87 => 24,  86 => 23,  85 => 22,  83 => 21,  82 => 19,  81 => 18,  80 => 17,  79 => 15,  78 => 14,  77 => 11,  67 => 10,  65 => 9,  57 => 7,  53 => 6,  51 => 5,  49 => 4,  47 => 3,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Structured data so Google can show Kaffekos with address, hours and photos #}
{% set biz = theme_var(\x27business\x27) %}
{% set social = theme_var(\x27social\x27) %}
{% set days = {\x27monday\x27: \x27Monday\x27, \x27tuesday\x27: \x27Tuesday\x27, \x27wednesday\x27: \x27Wednesday\x27, \x27thursday\x27: \x27Thursday\x27, \x27friday\x27: \x27Friday\x27, \x27saturday\x27: \x27Saturday\x27, \x27sunday\x27: \x27Sunday\x27} %}
{% set specs = [] %}
{% for h in (theme_var(\x27hours\x27))|filter(h => h.day and not h.closed and h.open and h.close) %}
    {% set specs = specs|merge([{\x27@type\x27: \x27OpeningHoursSpecification\x27, \x27dayOfWeek\x27: h.day|capitalize, \x27opens\x27: h.open, \x27closes\x27: h.close}]) %}
{% endfor %}
{% set same = [] %}
{% for k, v in (social)|filter((v, k) => v) %}{% set same = same|merge([v]) %}{% endfor %}
{% set data = {
    \x27@context\x27: \x27https://schema.org\x27,
    \x27@type\x27: \x27CafeOrCoffeeShop\x27,
    \x27name\x27: site.title,
    \x27url\x27: base_url_absolute ~ \x27/\x27,
    \x27image\x27: url(\x27theme://images/kk-logo.png\x27, true),
    \x27telephone\x27: biz.phone,
    \x27email\x27: biz.email,
    \x27priceRange\x27: biz.price_range,
    \x27servesCuisine\x27: [\x27Coffee\x27, \x27Norwegian\x27, \x27Bakery\x27],
    \x27address\x27: {\x27@type\x27: \x27PostalAddress\x27, \x27streetAddress\x27: (biz.address|default(\x27\x27)|replace({\"\\n\": \x27, \x27})), \x27addressLocality\x27: \x27Lahore\x27, \x27addressCountry\x27: \x27PK\x27},
    \x27geo\x27: {\x27@type\x27: \x27GeoCoordinates\x27, \x27latitude\x27: biz.lat, \x27longitude\x27: biz.lng},
    \x27openingHoursSpecification\x27: specs,
    \x27sameAs\x27: same
} %}
<script type=\"application/ld+json\">{{ data|json_encode(constant(\x27JSON_UNESCAPED_SLASHES\x27) b-or constant(\x27JSON_UNESCAPED_UNICODE\x27))|raw }}</script>
", "partials/jsonld.html.twig", "/Users/amer/Sites/kaffekos1/user/themes/kaffekos/templates/partials/jsonld.html.twig");
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
