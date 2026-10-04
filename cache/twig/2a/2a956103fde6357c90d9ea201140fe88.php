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

/* macros/kk.html.twig */
class __TwigTemplate_a7f7b2a71a9b733acb84080554c73c72_sourced extends Template
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
        // line 4
        yield "
";
        // line 39
        yield "
";
        // line 48
        yield "
";
        // line 56
        yield "
";
        // line 61
        yield "
";
        // line 66
        yield "
";
        // line 71
        yield "
";
        // line 77
        yield "
";
        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "icon" => new \Twig\TwigMacro("icon", function ($name = null, $size = null, ...$varargs): string|Markup {
                // line 7
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "size" => $size,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 8
                    $context["s"] = (((($tmp = ($context["size"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["size"]) : (24));
                    // line 9
                    $context["paths"] = ["cup" => "<path d=\"M4 9h13v5a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5V9z\"/><path d=\"M17 10h1.5a2.5 2.5 0 0 1 0 5H17\"/><path d=\"M8 3c0 1.5 1 1.5 1 3\"/><path d=\"M12 3c0 1.5 1 1.5 1 3\"/>", "bean" => "<ellipse cx=\"12\" cy=\"12\" rx=\"5.5\" ry=\"9\" transform=\"rotate(35 12 12)\"/><path d=\"M8.2 6.4c3.4 1.4 3.6 3.6 1.6 5.4s-1.6 4.2 1.8 5.8\"/>", "bun" => "<circle cx=\"12\" cy=\"12\" r=\"9\"/><path d=\"M12 12.5a1 1 0 1 1 1-1c0 2.200-3.500 2.700-4.300.4S11 6.300 14.300 7.300s4.200 5.200 1.700 7.700-7 2.200-8.800-.5\"/>", "cake" => "<path d=\"M4 20h16\"/><path d=\"M5 20v-6a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v6\"/><path d=\"M5 16.500c2 1.500 3 1.500 5 0s3-1.500 5 0 3 1.500 4 .5\"/><path d=\"M12 12V9.500\"/><path d=\"M12 8.200c-.9-.8-.9-1.900 0-2.700.9.800.9 1.900 0 2.700z\"/>", "heart" => "<path d=\"M12 20s-7-4.400-7-10a4 4 0 0 1 7-2.600A4 4 0 0 1 19 10c0 5.600-7 10-7 10z\"/>", "leaf" => "<path d=\"M5 19c0-9 5-14 14-14 0 9-5 14-14 14z\"/><path d=\"M5 19l8-8\"/>", "sun" => "<circle cx=\"12\" cy=\"12\" r=\"4\"/><path d=\"M12 2.500v2.500M12 19v2.500M2.500 12H5M19 12h2.500M5.300 5.300l1.800 1.800M16.900 16.900l1.800 1.800M5.300 18.700l1.800-1.800M16.900 7.100l1.800-1.800\"/>", "snow" => "<path d=\"M12 3v18M4.200 7.500l15.600 9M4.200 16.500l15.600-9M9.500 4.500L12 6.500l2.500-2M9.500 19.500l2.500-2 2.500 2\"/>", "wifi" => "<path d=\"M2 9a15 15 0 0 1 20 0\"/><path d=\"M5 12.500a10.500 10.500 0 0 1 14 0\"/><path d=\"M8.500 16a6 6 0 0 1 7 0\"/><path d=\"M12 19.500h.01\"/>", "users" => "<path d=\"M16 20v-1.500a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4V20\"/><circle cx=\"9.500\" cy=\"7.500\" r=\"3.500\"/><path d=\"M21 20v-1.500a4 4 0 0 0-3-3.870\"/><path d=\"M16 4.130a3.500 3.500 0 0 1 0 6.740\"/>", "book" => "<path d=\"M4 5a2 2 0 0 1 2-2h13v16H6a2 2 0 0 0-2 2z\"/><path d=\"M4 5v16\"/><path d=\"M8.500 7h6\"/>", "music" => "<path d=\"M9 18V5l11-2v13\"/><circle cx=\"6\" cy=\"18\" r=\"3\"/><circle cx=\"17\" cy=\"16\" r=\"3\"/>", "star" => "<path d=\"M12 3l2.800 5.700 6.200.9-4.500 4.400 1.100 6.200L12 17.200l-5.600 3 1.100-6.200L3 9.600l6.200-.9z\"/>", "clock" => "<circle cx=\"12\" cy=\"12\" r=\"9\"/><path d=\"M12 7v5l3 2\"/>", "pin" => "<path d=\"M12 21s-7-6.200-7-11a7 7 0 0 1 14 0c0 4.800-7 11-7 11z\"/><circle cx=\"12\" cy=\"10\" r=\"2.500\"/>", "phone" => "<path d=\"M5 4h4l2 5-2.500 1.500a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2z\"/>", "mail" => "<rect x=\"3\" y=\"5\" width=\"18\" height=\"14\" rx=\"2\"/><path d=\"M3 7l9 6 9-6\"/>", "arrow" => "<path d=\"M5 12h14M13 6l6 6-6 6\"/>", "check" => "<path d=\"M5 12.500l4.500 4.500L19 7.500\"/>", "instagram" => "<rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"5\"/><circle cx=\"12\" cy=\"12\" r=\"4\"/><path d=\"M17.500 6.500h.01\"/>", "facebook" => "<path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"/>", "tiktok" => "<path d=\"M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5\"/>", "youtube" => "<path d=\"M22.500 6.400a2.800 2.800 0 0 0-1.900-2C18.900 4 12 4 12 4s-6.900 0-8.600.4a2.800 2.800 0 0 0-1.900 2A29 29 0 0 0 1 11.800a29 29 0 0 0 .5 5.300 2.800 2.800 0 0 0 1.900 1.900c1.700.5 8.600.5 8.600.5s6.900 0 8.600-.5a2.800 2.800 0 0 0 1.900-1.900 29 29 0 0 0 .5-5.300 29 29 0 0 0-.5-5.400z\"/><path d=\"M9.800 15l5.700-3.200-5.700-3.300z\"/>", "linkedin" => "<path d=\"M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z\"/><rect x=\"2\" y=\"9\" width=\"4\" height=\"12\"/><circle cx=\"4\" cy=\"4\" r=\"2\"/>", "x" => "<path d=\"M4 4l16 16M20 4L4 20\"/>", "whatsapp" => "<path d=\"M7.900 20A9 9 0 1 0 4 16.100L2.500 21.500z\"/><path d=\"M9 8.500c.4 2.300 2.300 4.700 5.500 6l1.500-1.500-2-1-1 .8c-.9-.4-1.700-1.200-2.100-2.100l.8-1-1-2z\"/>"];
                    // line 37
                    yield "<svg class=\"icon icon-";
                    yield (string) $this->escaper->escape(($context["name"] ?? null), "html", null, true);
                    yield "\" width=\"";
                    yield (string) $this->escaper->escape(($context["s"] ?? null), "html", null, true);
                    yield "\" height=\"";
                    yield (string) $this->escaper->escape(($context["s"] ?? null), "html", null, true);
                    yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\">";
                    yield (string) ((CoreExtension::getAttribute($this->env, $this->source, ($context["paths"] ?? null), ($context["name"] ?? null), [], "array", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["paths"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = ($context["name"] ?? null)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null), (($_v2 = ($context["paths"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["star"] ?? null) : null))) : ((($_v3 = ($context["paths"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["star"] ?? null) : null)));
                    yield "</svg>";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "size" => false], false),
            "img" => new \Twig\TwigMacro("img", function ($medium = null, $w = null, $h = null, $alt = null, $cls = null, $lazy = null, ...$varargs): string|Markup {
                // line 41
                $macros = $this->macros;
                $context = [
                    "medium" => $medium,
                    "w" => $w,
                    "h" => $h,
                    "alt" => $alt,
                    "cls" => $cls,
                    "lazy" => $lazy,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 42
                    if ((($tmp = ($context["medium"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 43
                        $context["m1"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["medium"] ?? null), "cropZoom", [($context["w"] ?? null), ($context["h"] ?? null)], "method", false, false, false, 43), "quality", [80], "method", false, false, false, 43);
                        // line 44
                        $context["m2"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["medium"] ?? null), "cropZoom", [(($context["w"] ?? null) * 2), (($context["h"] ?? null) * 2)], "method", false, false, false, 44), "quality", [76], "method", false, false, false, 44);
                        // line 45
                        yield "<img src=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["m1"] ?? null), "url", [], "any", false, false, false, 45), "html", null, true);
                        yield "\" srcset=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["m1"] ?? null), "url", [], "any", false, false, false, 45), "html", null, true);
                        yield " 1x, ";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["m2"] ?? null), "url", [], "any", false, false, false, 45), "html", null, true);
                        yield " 2x\" width=\"";
                        yield (string) $this->escaper->escape(($context["w"] ?? null), "html", null, true);
                        yield "\" height=\"";
                        yield (string) $this->escaper->escape(($context["h"] ?? null), "html", null, true);
                        yield "\" alt=\"";
                        yield (string) $this->escaper->escape(($context["alt"] ?? null), "html_attr");
                        yield "\"";
                        if ((($tmp = ($context["cls"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " class=\"";
                            yield (string) $this->escaper->escape(($context["cls"] ?? null), "html", null, true);
                            yield "\"";
                        }
                        if ( !(($context["lazy"] ?? null) === false)) {
                            yield " loading=\"lazy\" decoding=\"async\"";
                        }
                        yield ">";
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["medium" => false, "w" => false, "h" => false, "alt" => false, "cls" => false, "lazy" => false], false),
            "imgfit" => new \Twig\TwigMacro("imgfit", function ($medium = null, $w = null, $h = null, $alt = null, $cls = null, ...$varargs): string|Markup {
                // line 50
                $macros = $this->macros;
                $context = [
                    "medium" => $medium,
                    "w" => $w,
                    "h" => $h,
                    "alt" => $alt,
                    "cls" => $cls,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 51
                    if ((($tmp = ($context["medium"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 52
                        $context["m1"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["medium"] ?? null), "cropResize", [($context["w"] ?? null), ($context["h"] ?? null)], "method", false, false, false, 52), "quality", [80], "method", false, false, false, 52);
                        // line 53
                        yield "<img src=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["m1"] ?? null), "url", [], "any", false, false, false, 53), "html", null, true);
                        yield "\" width=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["m1"] ?? null), "width", [], "any", false, false, false, 53), "html", null, true);
                        yield "\" height=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["m1"] ?? null), "height", [], "any", false, false, false, 53), "html", null, true);
                        yield "\" alt=\"";
                        yield (string) $this->escaper->escape(($context["alt"] ?? null), "html_attr");
                        yield "\"";
                        if ((($tmp = ($context["cls"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " class=\"";
                            yield (string) $this->escaper->escape(($context["cls"] ?? null), "html", null, true);
                            yield "\"";
                        }
                        yield " loading=\"lazy\" decoding=\"async\">";
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["medium" => false, "w" => false, "h" => false, "alt" => false, "cls" => false], false),
            "imgurl" => new \Twig\TwigMacro("imgurl", function ($medium = null, $w = null, $h = null, ...$varargs): string|Markup {
                // line 58
                $macros = $this->macros;
                $context = [
                    "medium" => $medium,
                    "w" => $w,
                    "h" => $h,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 59
                    if ((($tmp = ($context["medium"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["medium"] ?? null), "cropZoom", [($context["w"] ?? null), ($context["h"] ?? null)], "method", false, false, false, 59), "quality", [80], "method", false, false, false, 59), "url", [], "any", false, false, false, 59), "html", null, true);
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["medium" => false, "w" => false, "h" => false], false),
            "imgurlfit" => new \Twig\TwigMacro("imgurlfit", function ($medium = null, $w = null, $h = null, ...$varargs): string|Markup {
                // line 63
                $macros = $this->macros;
                $context = [
                    "medium" => $medium,
                    "w" => $w,
                    "h" => $h,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 64
                    if ((($tmp = ($context["medium"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["medium"] ?? null), "cropResize", [($context["w"] ?? null), ($context["h"] ?? null)], "method", false, false, false, 64), "quality", [80], "method", false, false, false, 64), "url", [], "any", false, false, false, 64), "html", null, true);
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["medium" => false, "w" => false, "h" => false], false),
            "href" => new \Twig\TwigMacro("href", function ($u = null, ...$varargs): string|Markup {
                // line 68
                $macros = $this->macros;
                $context = [
                    "u" => $u,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 69
                    if (((((is_string($_v4 = ($context["u"] ?? null)) && is_string($_v5 = "http") && str_starts_with($_v4, $_v5)) || (is_string($_v6 = ($context["u"] ?? null)) && is_string($_v7 = "mailto:") && str_starts_with($_v6, $_v7))) || (is_string($_v8 = ($context["u"] ?? null)) && is_string($_v9 = "tel:") && str_starts_with($_v8, $_v9))) || (is_string($_v10 = ($context["u"] ?? null)) && is_string($_v11 = "#") && str_starts_with($_v10, $_v11)))) {
                        yield (string) $this->escaper->escape(($context["u"] ?? null), "html", null, true);
                    } else {
                        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(($context["u"] ?? null)), "html", null, true);
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["u" => false], false),
            "price" => new \Twig\TwigMacro("price", function ($p = null, $currency = null, ...$varargs): string|Markup {
                // line 73
                $macros = $this->macros;
                $context = [
                    "p" => $p,
                    "currency" => $currency,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 74
                    $context["t"] = Twig\Extension\CoreExtension::trim(($context["p"] ?? null));
                    // line 75
                    if (CoreExtension::matches("/^[0-9][0-9.,]*\$/", ($context["t"] ?? null))) {
                        yield (string) $this->escaper->escape(($context["currency"] ?? null), "html", null, true);
                        yield "&nbsp;";
                        yield (string) $this->escaper->escape(($context["t"] ?? null), "html", null, true);
                    } else {
                        yield (string) $this->escaper->escape(($context["t"] ?? null), "html", null, true);
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["p" => false, "currency" => false], false),
            "time12" => new \Twig\TwigMacro("time12", function ($t = null, ...$varargs): string|Markup {
                // line 79
                $macros = $this->macros;
                $context = [
                    "t" => $t,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 80
                    if ((($tmp = ($context["t"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(("2000-01-01 " . ($context["t"] ?? null)), "g:i A"), "html", null, true);
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["t" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "macros/kk.html.twig";
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
        return array (  291 => 80,  281 => 79,  269 => 75,  267 => 74,  256 => 73,  246 => 69,  236 => 68,  228 => 64,  216 => 63,  208 => 59,  196 => 58,  175 => 53,  173 => 52,  171 => 51,  157 => 50,  129 => 45,  127 => 44,  125 => 43,  123 => 42,  108 => 41,  94 => 37,  92 => 9,  90 => 8,  79 => 7,  69 => 77,  66 => 71,  63 => 66,  60 => 61,  57 => 56,  54 => 48,  51 => 39,  48 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# ---------------------------------------------------------------------------
   Kaffekos helper macros: icons, images, links, prices
   --------------------------------------------------------------------------- #}

{# Inline SVG icon. Names: cup bean bun cake heart leaf sun snow wifi users book music star clock pin phone mail arrow check
   instagram facebook tiktok youtube linkedin x whatsapp #}
{% macro icon(name, size) %}
{%- set s = size ?: 24 -%}
{%- set paths = {
    \x27cup\x27: \x27<path d=\"M4 9h13v5a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5V9z\"/><path d=\"M17 10h1.5a2.5 2.5 0 0 1 0 5H17\"/><path d=\"M8 3c0 1.5 1 1.5 1 3\"/><path d=\"M12 3c0 1.5 1 1.5 1 3\"/>\x27,
    \x27bean\x27: \x27<ellipse cx=\"12\" cy=\"12\" rx=\"5.5\" ry=\"9\" transform=\"rotate(35 12 12)\"/><path d=\"M8.2 6.4c3.4 1.4 3.6 3.6 1.6 5.4s-1.6 4.2 1.8 5.8\"/>\x27,
    \x27bun\x27: \x27<circle cx=\"12\" cy=\"12\" r=\"9\"/><path d=\"M12 12.5a1 1 0 1 1 1-1c0 2.200-3.500 2.700-4.300.4S11 6.300 14.300 7.300s4.200 5.200 1.700 7.700-7 2.200-8.800-.5\"/>\x27,
    \x27cake\x27: \x27<path d=\"M4 20h16\"/><path d=\"M5 20v-6a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v6\"/><path d=\"M5 16.500c2 1.500 3 1.500 5 0s3-1.500 5 0 3 1.500 4 .5\"/><path d=\"M12 12V9.500\"/><path d=\"M12 8.200c-.9-.8-.9-1.900 0-2.700.9.800.9 1.900 0 2.700z\"/>\x27,
    \x27heart\x27: \x27<path d=\"M12 20s-7-4.400-7-10a4 4 0 0 1 7-2.600A4 4 0 0 1 19 10c0 5.600-7 10-7 10z\"/>\x27,
    \x27leaf\x27: \x27<path d=\"M5 19c0-9 5-14 14-14 0 9-5 14-14 14z\"/><path d=\"M5 19l8-8\"/>\x27,
    \x27sun\x27: \x27<circle cx=\"12\" cy=\"12\" r=\"4\"/><path d=\"M12 2.500v2.500M12 19v2.500M2.500 12H5M19 12h2.500M5.300 5.300l1.800 1.800M16.900 16.900l1.800 1.800M5.300 18.700l1.800-1.800M16.900 7.100l1.800-1.800\"/>\x27,
    \x27snow\x27: \x27<path d=\"M12 3v18M4.200 7.500l15.600 9M4.200 16.500l15.600-9M9.500 4.500L12 6.500l2.500-2M9.500 19.500l2.500-2 2.500 2\"/>\x27,
    \x27wifi\x27: \x27<path d=\"M2 9a15 15 0 0 1 20 0\"/><path d=\"M5 12.500a10.500 10.500 0 0 1 14 0\"/><path d=\"M8.500 16a6 6 0 0 1 7 0\"/><path d=\"M12 19.500h.01\"/>\x27,
    \x27users\x27: \x27<path d=\"M16 20v-1.500a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4V20\"/><circle cx=\"9.500\" cy=\"7.500\" r=\"3.500\"/><path d=\"M21 20v-1.500a4 4 0 0 0-3-3.870\"/><path d=\"M16 4.130a3.500 3.500 0 0 1 0 6.740\"/>\x27,
    \x27book\x27: \x27<path d=\"M4 5a2 2 0 0 1 2-2h13v16H6a2 2 0 0 0-2 2z\"/><path d=\"M4 5v16\"/><path d=\"M8.500 7h6\"/>\x27,
    \x27music\x27: \x27<path d=\"M9 18V5l11-2v13\"/><circle cx=\"6\" cy=\"18\" r=\"3\"/><circle cx=\"17\" cy=\"16\" r=\"3\"/>\x27,
    \x27star\x27: \x27<path d=\"M12 3l2.800 5.700 6.200.9-4.500 4.400 1.100 6.200L12 17.200l-5.600 3 1.100-6.200L3 9.600l6.200-.9z\"/>\x27,
    \x27clock\x27: \x27<circle cx=\"12\" cy=\"12\" r=\"9\"/><path d=\"M12 7v5l3 2\"/>\x27,
    \x27pin\x27: \x27<path d=\"M12 21s-7-6.200-7-11a7 7 0 0 1 14 0c0 4.800-7 11-7 11z\"/><circle cx=\"12\" cy=\"10\" r=\"2.500\"/>\x27,
    \x27phone\x27: \x27<path d=\"M5 4h4l2 5-2.500 1.500a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2z\"/>\x27,
    \x27mail\x27: \x27<rect x=\"3\" y=\"5\" width=\"18\" height=\"14\" rx=\"2\"/><path d=\"M3 7l9 6 9-6\"/>\x27,
    \x27arrow\x27: \x27<path d=\"M5 12h14M13 6l6 6-6 6\"/>\x27,
    \x27check\x27: \x27<path d=\"M5 12.500l4.500 4.500L19 7.500\"/>\x27,
    \x27instagram\x27: \x27<rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"5\"/><circle cx=\"12\" cy=\"12\" r=\"4\"/><path d=\"M17.500 6.500h.01\"/>\x27,
    \x27facebook\x27: \x27<path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"/>\x27,
    \x27tiktok\x27: \x27<path d=\"M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5\"/>\x27,
    \x27youtube\x27: \x27<path d=\"M22.500 6.400a2.800 2.800 0 0 0-1.900-2C18.900 4 12 4 12 4s-6.900 0-8.600.4a2.800 2.800 0 0 0-1.900 2A29 29 0 0 0 1 11.800a29 29 0 0 0 .5 5.300 2.800 2.800 0 0 0 1.900 1.900c1.700.5 8.600.5 8.600.5s6.900 0 8.600-.5a2.800 2.800 0 0 0 1.900-1.900 29 29 0 0 0 .5-5.300 29 29 0 0 0-.5-5.400z\"/><path d=\"M9.800 15l5.700-3.200-5.700-3.300z\"/>\x27,
    \x27linkedin\x27: \x27<path d=\"M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z\"/><rect x=\"2\" y=\"9\" width=\"4\" height=\"12\"/><circle cx=\"4\" cy=\"4\" r=\"2\"/>\x27,
    \x27x\x27: \x27<path d=\"M4 4l16 16M20 4L4 20\"/>\x27,
    \x27whatsapp\x27: \x27<path d=\"M7.900 20A9 9 0 1 0 4 16.100L2.500 21.500z\"/><path d=\"M9 8.500c.4 2.300 2.300 4.700 5.500 6l1.500-1.500-2-1-1 .8c-.9-.4-1.700-1.200-2.100-2.100l.8-1-1-2z\"/>\x27,
} -%}
<svg class=\"icon icon-{{ name }}\" width=\"{{ s }}\" height=\"{{ s }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\">{{ paths[name]|default(paths[\x27star\x27])|raw }}</svg>
{%- endmacro %}

{# Resized <img>. `medium` is a Grav media object (page.media[\x27file.jpg\x27]); returns nothing if missing. #}
{% macro img(medium, w, h, alt, cls, lazy) %}
{%- if medium -%}
    {%- set m1 = medium.cropZoom(w, h).quality(80) -%}
    {%- set m2 = medium.cropZoom(w * 2, h * 2).quality(76) -%}
    <img src=\"{{ m1.url }}\" srcset=\"{{ m1.url }} 1x, {{ m2.url }} 2x\" width=\"{{ w }}\" height=\"{{ h }}\" alt=\"{{ alt|e(\x27html_attr\x27) }}\"{% if cls %} class=\"{{ cls }}\"{% endif %}{% if lazy is not same as(false) %} loading=\"lazy\" decoding=\"async\"{% endif %}>
{%- endif -%}
{% endmacro %}

{# Resized <img> that keeps the photo\x27s own proportions (fits inside w x h). Used by the masonry gallery. #}
{% macro imgfit(medium, w, h, alt, cls) %}
{%- if medium -%}
    {%- set m1 = medium.cropResize(w, h).quality(80) -%}
    <img src=\"{{ m1.url }}\" width=\"{{ m1.width }}\" height=\"{{ m1.height }}\" alt=\"{{ alt|e(\x27html_attr\x27) }}\"{% if cls %} class=\"{{ cls }}\"{% endif %} loading=\"lazy\" decoding=\"async\">
{%- endif -%}
{% endmacro %}

{# Plain URL of a resized picture (for CSS backgrounds / meta tags) #}
{% macro imgurl(medium, w, h) %}
{%- if medium -%}{{ medium.cropZoom(w, h).quality(80).url }}{%- endif -%}
{% endmacro %}

{# Same, but fitted inside w x h WITHOUT cropping, so CSS decides what part stays visible (hero / banners) #}
{% macro imgurlfit(medium, w, h) %}
{%- if medium -%}{{ medium.cropResize(w, h).quality(80).url }}{%- endif -%}
{% endmacro %}

{# Link that works for /internal, relative, http(s), mailto, tel and #anchor addresses #}
{% macro href(u) %}
{%- if u starts with \x27http\x27 or u starts with \x27mailto:\x27 or u starts with \x27tel:\x27 or u starts with \x27#\x27 -%}{{ u }}{%- else -%}{{ url(u) }}{%- endif -%}
{% endmacro %}

{# Menu price: adds the currency in front of a plain number, leaves text like \"Small 450 / Large 600\" alone #}
{% macro price(p, currency) %}
{%- set t = p|trim -%}
{%- if t matches \x27/^[0-9][0-9.,]*\$/\x27 -%}{{ currency }}&nbsp;{{ t }}{%- else -%}{{ t }}{%- endif -%}
{% endmacro %}

{# 24h \"HH:MM\" -> \"8:00 AM\" #}
{% macro time12(t) %}
{%- if t -%}{{ (\x272000-01-01 \x27 ~ t)|date(\x27g:i A\x27) }}{%- endif -%}
{% endmacro %}
", "macros/kk.html.twig", "/Users/amer/Sites/kaffekos1/user/themes/kaffekos/templates/macros/kk.html.twig");
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
