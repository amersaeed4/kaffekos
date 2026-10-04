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

/* home.html.twig */
class __TwigTemplate_2eab75c2a801a19e9db455434df918c1_sourced extends Template
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
            'body_class' => [$this, 'block_body_class'],
            'og_image' => [$this, 'block_og_image'],
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
        // line 4
        $context["hero"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "hero", [], "any", true, true, false, 4) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "hero", [], "any", false, false, false, 4)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "hero", [], "any", false, false, false, 4)) : ([]));
        // line 5
        $context["hero_img"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "image", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 5)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "image", [], "any", false, false, false, 5)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)) : (null));
        // line 1
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "is-home page-home";
        return; yield;
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_og_image(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        if ((($tmp = ($context["hero_img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<meta property=\"og:image\" content=\"";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(($macros["kk"] ?? $this->throwUninitializedMacroNamespace(9))->call("imgurl", [($context["hero_img"] ?? null), 1200, 630], $context, 9, $this->source), true), "html", null, true);
            yield "\">";
        } else {
            yield from $this->yieldParentBlock("og_image", $context, $blocks);
        }
        return; yield;
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "<section class=\"hero hero-fun\"";
        if ((($tmp = ($context["hero_img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " style=\"--hero: url(\x27";
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(12))->call("imgurlfit", [($context["hero_img"] ?? null), 2400, 3200], $context, 12, $this->source);
            yield "\x27); --hero-y: ";
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "focus", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "focus", [], "any", false, false, false, 12), "html", null, true)) : ("40%"));
            yield "\"";
        }
        yield ">
    <div class=\"hero-shade\"></div>
    <span class=\"hm-chip hm-chip-1\" aria-hidden=\"true\"><b>Kaffe</b> coffee</span>
    <span class=\"hm-chip hm-chip-2\" aria-hidden=\"true\"><b>Kos</b> cosiness</span>
    <span class=\"hm-chip hm-chip-3\" aria-hidden=\"true\"><b>Skål</b> cheers</span>
    <div class=\"wrap hero-content\">
        ";
        // line 18
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "eyebrow", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"eyebrow eyebrow-light\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "eyebrow", [], "any", false, false, false, 18), "html", null, true);
            yield "</p>";
        }
        // line 19
        yield "        ";
        $context["hw"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "title", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "title", [], "any", false, false, false, 19), CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 19))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 19))), " ");
        // line 20
        yield "        <h1>";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["hw"] ?? null)) > 1)) {
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["hw"] ?? null), 0,  -1), " "), "html", null, true);
            yield " ";
        }
        yield "<em>";
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), ($context["hw"] ?? null)), "html", null, true);
        yield "</em></h1>
        ";
        // line 21
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "subtitle", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"lead\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "subtitle", [], "any", false, false, false, 21), "html", null, true);
            yield "</p>";
        }
        // line 22
        yield "        <div class=\"hero-actions\">
            ";
        // line 23
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "btn1_label", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a class=\"btn btn-primary btn-lg\" href=\"";
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(23))->call("href", [(((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "btn1_url", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "btn1_url", [], "any", false, false, false, 23)) : ("/menu"))], $context, 23, $this->source);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "btn1_label", [], "any", false, false, false, 23), "html", null, true);
            yield "</a>";
        }
        // line 24
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "btn2_label", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a class=\"btn btn-ghost btn-lg\" href=\"";
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(24))->call("href", [(((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "btn2_url", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "btn2_url", [], "any", false, false, false, 24)) : ("/contact"))], $context, 24, $this->source);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "btn2_label", [], "any", false, false, false, 24), "html", null, true);
            yield "</a>";
        }
        // line 25
        yield "        </div>
        ";
        // line 26
        if (((null === CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "show_open_badge", [], "any", false, false, false, 26)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "show_open_badge", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 27
            yield "            <p class=\"open-badge\" data-open-status><span class=\"dot\"></span><span data-open-text>Opening hours below</span></p>
        ";
        }
        // line 29
        yield "    </div>
</section>
<div class=\"hm-ticker\" aria-hidden=\"true\">
    <div class=\"hm-ticker-band\">
        <div class=\"hm-ticker-track\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 35
            yield "                <div class=\"hm-ticker-group\">
                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(["Hausbrandt", "Kaffe", "Kos", "Cinnamon buns", "Matcha", "Velkommen", "Frappes", "Skål", "Hausbrandt", "Kaffe", "Kos", "Cinnamon buns", "Matcha", "Velkommen", "Frappes", "Skål"]);
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                yield "<span>";
                yield (string) $this->escaper->escape($context["w"], "html", null, true);
                yield "</span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['w'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 37
            yield "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['g'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 39
        yield "        </div>
    </div>
</div>
";
        return; yield;
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "
";
        // line 47
        $context["intro"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "intro", [], "any", true, true, false, 47) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "intro", [], "any", false, false, false, 47)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "intro", [], "any", false, false, false, 47)) : ([]));
        // line 48
        if ((((null === CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "enabled", [], "any", false, false, false, 48)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "enabled", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "title", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "text", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)))) {
            // line 49
            yield "    ";
            $context["intro_img"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "image", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 49)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "image", [], "any", false, false, false, 49)) instanceof \Stringable && (is_array($_v2) || $_v2 instanceof \ArrayObject || $_v2 instanceof \ArrayIterator) ? (string) $_v3 : $_v3)] ?? null) : null)) : (null));
            // line 50
            yield "    ";
            $context["intro_img2"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "image2", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 50)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[(($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "image2", [], "any", false, false, false, 50)) instanceof \Stringable && (is_array($_v4) || $_v4 instanceof \ArrayObject || $_v4 instanceof \ArrayIterator) ? (string) $_v5 : $_v5)] ?? null) : null)) : (null));
            // line 51
            yield "    <section class=\"section section-welcome hm-welcome\">
        <div class=\"wrap split\">
            <div class=\"split-media\">
                ";
            // line 54
            if ((($tmp = ($context["intro_img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<div class=\"frame\">";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(54))->call("img", [($context["intro_img"] ?? null), 720, 860, CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "title", [], "any", false, false, false, 54)], $context, 54, $this->source);
                yield "</div>";
            }
            // line 55
            yield "                ";
            if ((($tmp = ($context["intro_img2"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<div class=\"frame frame-small\">";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(55))->call("img", [($context["intro_img2"] ?? null), 360, 360, ""], $context, 55, $this->source);
                yield "</div>";
            }
            // line 56
            yield "            </div>
            <div class=\"split-text\">
                ";
            // line 58
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "eyebrow", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<p class=\"eyebrow\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "eyebrow", [], "any", false, false, false, 58), "html", null, true);
                yield "</p>";
            }
            // line 59
            yield "                <h2>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "title", [], "any", false, false, false, 59), "html", null, true);
            yield "</h2>
                <div class=\"prose\">";
            // line 60
            yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "text", [], "any", false, false, false, 60), false);
            yield "</div>
                ";
            // line 61
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "link_label", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 62
                yield "                    <a class=\"link-arrow\" href=\"";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(62))->call("href", [(((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "link_url", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "link_url", [], "any", false, false, false, 62)) : ("/about"))], $context, 62, $this->source);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "link_label", [], "any", false, false, false, 62), "html", null, true);
                yield " ";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(62))->call("icon", ["arrow", 18], $context, 62, $this->source);
                yield "</a>
                ";
            }
            // line 64
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "stats", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "                    <ul class=\"stats hm-stats\">
                        ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "stats", [], "any", false, false, false, 66));
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
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 67
                    yield "                            <li class=\"hm-stat hm-stat-";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 67), "html", null, true);
                    yield "\"><strong>";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "value", [], "any", false, false, false, 67), "html", null, true);
                    yield "</strong><span>";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "label", [], "any", false, false, false, 67), "html", null, true);
                    yield "</span></li>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 69
                yield "                    </ul>
                ";
            }
            // line 71
            yield "            </div>
        </div>
    </section>
";
        }
        // line 75
        yield "
";
        // line 77
        $context["cf"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "coffee", [], "any", true, true, false, 77) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "coffee", [], "any", false, false, false, 77)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "coffee", [], "any", false, false, false, 77)) : ([]));
        // line 78
        if ((((null === CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "enabled", [], "any", false, false, false, 78)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "enabled", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "title", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "text", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)))) {
            // line 79
            yield "    ";
            $context["cf_img"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "image", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 79)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[(($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "image", [], "any", false, false, false, 79)) instanceof \Stringable && (is_array($_v6) || $_v6 instanceof \ArrayObject || $_v6 instanceof \ArrayIterator) ? (string) $_v7 : $_v7)] ?? null) : null)) : (null));
            // line 80
            yield "    ";
            $context["cf_img2"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "image2", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 80)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[(($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "image2", [], "any", false, false, false, 80)) instanceof \Stringable && (is_array($_v8) || $_v8 instanceof \ArrayObject || $_v8 instanceof \ArrayIterator) ? (string) $_v9 : $_v9)] ?? null) : null)) : (null));
            // line 81
            yield "    <section class=\"section section-navy coffee\">
        <div class=\"wrap coffee-grid\">
            <div class=\"coffee-text\">
                ";
            // line 84
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "eyebrow", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<p class=\"eyebrow eyebrow-light\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "eyebrow", [], "any", false, false, false, 84), "html", null, true);
                yield "</p>";
            }
            // line 85
            yield "                <h2>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "title", [], "any", false, false, false, 85), "html", null, true);
            yield "</h2>
                <div class=\"prose\">";
            // line 86
            yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "text", [], "any", false, false, false, 86), false);
            yield "</div>
                ";
            // line 87
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "facts", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 88
                yield "                    <ul class=\"stats stats-light\">
                        ";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "facts", [], "any", false, false, false, 89));
                foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                    yield "<li><strong>";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "value", [], "any", false, false, false, 89), "html", null, true);
                    yield "</strong><span>";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "label", [], "any", false, false, false, 89), "html", null, true);
                    yield "</span></li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['f'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 90
                yield "                    </ul>
                ";
            }
            // line 92
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "link_label", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 93
                yield "                    ";
                $context["cf_url"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "link_url", [], "any", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "link_url", [], "any", false, false, false, 93)) : ("#"));
                // line 94
                yield "                    <a class=\"btn btn-ghost\" href=\"";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(94))->call("href", [($context["cf_url"] ?? null)], $context, 94, $this->source);
                yield "\"";
                if ((is_string($_v10 = ($context["cf_url"] ?? null)) && is_string($_v11 = "http") && str_starts_with($_v10, $_v11))) {
                    yield " target=\"_blank\" rel=\"noopener\"";
                }
                yield ">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "link_label", [], "any", false, false, false, 94), "html", null, true);
                yield " ";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(94))->call("icon", ["arrow", 18], $context, 94, $this->source);
                yield "</a>
                ";
            }
            // line 96
            yield "            </div>
            ";
            // line 97
            if (((($tmp = ($context["cf_img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["cf_img2"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 98
                yield "                <div class=\"coffee-media\">
                    <div class=\"coffee-halo\" aria-hidden=\"true\"></div>
                    <div class=\"coffee-products\">
                        ";
                // line 101
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(101))->call("imgfit", [($context["cf_img"] ?? null), 640, 760, "Hausbrandt Gourmet 100% Arabica coffee beans", "product product-main"], $context, 101, $this->source);
                yield "
                        ";
                // line 102
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(102))->call("imgfit", [($context["cf_img2"] ?? null), 560, 760, "Hausbrandt Sublime 100% Arabica coffee beans", "product product-second"], $context, 102, $this->source);
                yield "
                    </div>
                    ";
                // line 104
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "caption", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<p class=\"coffee-caption\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "caption", [], "any", false, false, false, 104), "html", null, true);
                    yield "</p>";
                }
                // line 105
                yield "                </div>
            ";
            }
            // line 107
            yield "        </div>
    </section>
";
        }
        // line 110
        yield "
";
        // line 112
        $context["hl"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "highlights", [], "any", true, true, false, 112) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "highlights", [], "any", false, false, false, 112)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "highlights", [], "any", false, false, false, 112)) : ([]));
        // line 113
        if ((((null === CoreExtension::getAttribute($this->env, $this->source, ($context["hl"] ?? null), "enabled", [], "any", false, false, false, 113)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hl"] ?? null), "enabled", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hl"] ?? null), "items", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 114
            yield "    <section class=\"section hm-features\">
        <div class=\"wrap\">
            ";
            // line 116
            yield from $this->load("partials/section-head.html.twig", 116)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => "Why Kaffekos", "title" => CoreExtension::getAttribute($this->env, $this->source, ($context["hl"] ?? null), "title", [], "any", false, false, false, 116), "subtitle" => CoreExtension::getAttribute($this->env, $this->source, ($context["hl"] ?? null), "subtitle", [], "any", false, false, false, 116)]));
            // line 117
            yield "            <div class=\"features hm-cards\">
                ";
            // line 118
            $context["tones"] = ["coral", "lagoon", "plum", "navy"];
            // line 119
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["hl"] ?? null), "items", [], "any", false, false, false, 119));
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
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 120
                yield "                    <div class=\"feature hm-card hm-card--";
                yield (string) $this->escaper->escape((($_v12 = ($context["tones"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[(($_v13 = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 120) % 4)) instanceof \Stringable && (is_array($_v12) || $_v12 instanceof \ArrayObject || $_v12 instanceof \ArrayIterator) ? (string) $_v13 : $_v13)] ?? null) : null), "html", null, true);
                yield "\" data-n=\"";
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%02d", CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 120)), "html", null, true);
                yield "\">
                        <div class=\"feature-icon\">";
                // line 121
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(121))->call("icon", [(((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["f"], "icon", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["f"], "icon", [], "any", false, false, false, 121)) : ("cup")), 30], $context, 121, $this->source);
                yield "</div>
                        <h3>";
                // line 122
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "title", [], "any", false, false, false, 122), "html", null, true);
                yield "</h3>
                        <p>";
                // line 123
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "text", [], "any", false, false, false, 123), "html", null, true);
                yield "</p>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 126
            yield "            </div>
        </div>
    </section>
";
        }
        // line 130
        yield "
";
        // line 132
        $context["ft"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "featured", [], "any", true, true, false, 132) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "featured", [], "any", false, false, false, 132)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "featured", [], "any", false, false, false, 132)) : ([]));
        // line 133
        if (((null === CoreExtension::getAttribute($this->env, $this->source, ($context["ft"] ?? null), "enabled", [], "any", false, false, false, 133)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ft"] ?? null), "enabled", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 134
            yield "    ";
            $context["menu_page"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "find", ["/menu"], "method", false, false, false, 134);
            // line 135
            yield "    ";
            $context["picks"] = $this->env->getFunction('kk_featured_items')->getCallable()(($context["menu_page"] ?? null), (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ft"] ?? null), "limit", [], "any", false, false, false, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ft"] ?? null), "limit", [], "any", false, false, false, 135)) : (6)));
            // line 136
            yield "    ";
            if ((($tmp = ($context["picks"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 137
                yield "        <section class=\"section hm-favs\">
            <div class=\"wrap\">
                ";
                // line 139
                yield from $this->load("partials/section-head.html.twig", 139)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => "From our kitchen", "title" => CoreExtension::getAttribute($this->env, $this->source, ($context["ft"] ?? null), "title", [], "any", false, false, false, 139), "subtitle" => CoreExtension::getAttribute($this->env, $this->source, ($context["ft"] ?? null), "subtitle", [], "any", false, false, false, 139)]));
                // line 140
                yield "                <div class=\"menu-grid hm-fav-grid\">
                    ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["picks"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["pick"]) {
                    // line 142
                    yield "                        ";
                    yield from $this->load("partials/menu-item.html.twig", 142)->unwrap()->yield(CoreExtension::merge($context, ["item" => CoreExtension::getAttribute($this->env, $this->source, $context["pick"], "item", [], "any", false, false, false, 142), "image" => CoreExtension::getAttribute($this->env, $this->source, $context["pick"], "image", [], "any", false, false, false, 142), "currency" => $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "menu.currency"), "show_image" => true, "card" => true, "show_price" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ft"] ?? null), "show_prices", [], "any", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (true) : (false))]));
                    // line 143
                    yield "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['pick'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 144
                yield "                </div>
                <p class=\"center\"><a class=\"btn btn-primary btn-lg\" href=\"";
                // line 145
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menu_page"] ?? null), "url", [], "any", false, false, false, 145), "html", null, true);
                yield "\">";
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ft"] ?? null), "button_label", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ft"] ?? null), "button_label", [], "any", false, false, false, 145), "html", null, true)) : ("See the full menu"));
                yield "</a></p>
            </div>
        </section>
    ";
            }
        }
        // line 150
        yield "
";
        // line 152
        $context["q"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "quote", [], "any", true, true, false, 152) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "quote", [], "any", false, false, false, 152)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "quote", [], "any", false, false, false, 152)) : ([]));
        // line 153
        if ((((null === CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "enabled", [], "any", false, false, false, 153)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "enabled", [], "any", false, false, false, 153)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "word", [], "any", false, false, false, 153)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "text", [], "any", false, false, false, 153)) && $tmp instanceof Markup ? (string) $tmp : $tmp)))) {
            // line 154
            yield "    ";
            $context["q_img"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "image", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 154)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[(($_v15 = CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "image", [], "any", false, false, false, 154)) instanceof \Stringable && (is_array($_v14) || $_v14 instanceof \ArrayObject || $_v14 instanceof \ArrayIterator) ? (string) $_v15 : $_v15)] ?? null) : null)) : (null));
            // line 155
            yield "    <section class=\"kos hm-kos\"";
            if ((($tmp = ($context["q_img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " style=\"--kos-bg: url(\x27";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(155))->call("imgurlfit", [($context["q_img"] ?? null), 2000, 2000], $context, 155, $this->source);
                yield "\x27)\"";
            }
            yield ">
        <div class=\"pattern-band pattern-band-gold\" aria-hidden=\"true\"></div>
        <div class=\"wrap kos-inner\">
            <p class=\"kos-word\">";
            // line 158
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "word", [], "any", false, false, false, 158), "html", null, true);
            yield "</p>
            ";
            // line 159
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "pronunciation", [], "any", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<p class=\"kos-pron\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "pronunciation", [], "any", false, false, false, 159), "html", null, true);
                yield "</p>";
            }
            // line 160
            yield "            <p class=\"kos-text\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "text", [], "any", false, false, false, 160), "html", null, true);
            yield "</p>
        </div>
        <div class=\"pattern-band pattern-band-gold\" aria-hidden=\"true\"></div>
    </section>
";
        }
        // line 165
        yield "
";
        // line 167
        $context["ps"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "photostrip", [], "any", true, true, false, 167) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "photostrip", [], "any", false, false, false, 167)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "photostrip", [], "any", false, false, false, 167)) : ([]));
        // line 168
        if (((null === CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "enabled", [], "any", false, false, false, 168)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "enabled", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 169
            yield "    ";
            $context["gpage"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "find", ["/gallery"], "method", false, false, false, 169);
            // line 170
            yield "    ";
            $context["strip"] = $this->env->getFunction('kk_gallery_photos')->getCallable()(($context["gpage"] ?? null), (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "count", [], "any", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "count", [], "any", false, false, false, 170)) : (6)));
            // line 171
            yield "    ";
            if ((($tmp = ($context["strip"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 172
                yield "        <section class=\"section hm-strip\">
            <div class=\"wrap\">
                ";
                // line 174
                yield from $this->load("partials/section-head.html.twig", 174)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => "Gallery", "title" => CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "title", [], "any", false, false, false, 174), "subtitle" => CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "subtitle", [], "any", false, false, false, 174)]));
                // line 175
                yield "            </div>
            <div class=\"wrap wrap-wide\">
                <div class=\"photo-strip hm-photos\">
                    ";
                // line 178
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["strip"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["ph"]) {
                    // line 179
                    yield "                        <a href=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["gpage"] ?? null), "url", [], "any", false, false, false, 179), "html", null, true);
                    yield "\" class=\"photo\">";
                    yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(179))->call("img", [CoreExtension::getAttribute($this->env, $this->source, $context["ph"], "media", [], "any", false, false, false, 179), 560, 560, (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ph"], "caption", [], "any", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["ph"], "caption", [], "any", false, false, false, 179)) : ("Kaffekos"))], $context, 179, $this->source);
                    yield "</a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['ph'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 181
                yield "                </div>
                <p class=\"center\"><a class=\"btn btn-primary btn-lg\" href=\"";
                // line 182
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["gpage"] ?? null), "url", [], "any", false, false, false, 182), "html", null, true);
                yield "\">View the gallery</a></p>
            </div>
        </section>
    ";
            }
        }
        // line 187
        yield "
";
        // line 189
        $context["rv"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "reviews", [], "any", true, true, false, 189) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "reviews", [], "any", false, false, false, 189)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "reviews", [], "any", false, false, false, 189)) : ([]));
        // line 190
        if ((((null === CoreExtension::getAttribute($this->env, $this->source, ($context["rv"] ?? null), "enabled", [], "any", false, false, false, 190)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["rv"] ?? null), "enabled", [], "any", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["rv"] ?? null), "items", [], "any", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 191
            yield "    <section class=\"section\">
        <div class=\"wrap\">
            ";
            // line 193
            yield from $this->load("partials/section-head.html.twig", 193)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => "Kind words", "title" => CoreExtension::getAttribute($this->env, $this->source, ($context["rv"] ?? null), "title", [], "any", false, false, false, 193), "subtitle" => CoreExtension::getAttribute($this->env, $this->source, ($context["rv"] ?? null), "subtitle", [], "any", false, false, false, 193)]));
            // line 194
            yield "            <div class=\"reviews\">
                ";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["rv"] ?? null), "items", [], "any", false, false, false, 195));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 196
                yield "                    <figure class=\"review\">
                        <div class=\"stars\" aria-label=\"";
                // line 197
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "rating", [], "any", false, false, false, 197)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "rating", [], "any", false, false, false, 197), "html", null, true)) : (5));
                yield " out of 5 stars\">
                            ";
                // line 198
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    yield "<span class=\"";
                    yield (string) ((($context["i"] <= (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "rating", [], "any", false, false, false, 198)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["r"], "rating", [], "any", false, false, false, 198)) : (5)))) ? ("on") : (""));
                    yield "\">";
                    yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(198))->call("icon", ["star", 18], $context, 198, $this->source);
                    yield "</span>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 199
                yield "                        </div>
                        <blockquote>";
                // line 200
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "text", [], "any", false, false, false, 200), "html", null, true);
                yield "</blockquote>
                        <figcaption><strong>";
                // line 201
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "name", [], "any", false, false, false, 201), "html", null, true);
                yield "</strong>";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "info", [], "any", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span>";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "info", [], "any", false, false, false, 201), "html", null, true);
                    yield "</span>";
                }
                yield "</figcaption>
                    </figure>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 204
            yield "            </div>
        </div>
    </section>
";
        }
        // line 208
        yield "
";
        // line 210
        $context["v"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "visit", [], "any", true, true, false, 210) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "visit", [], "any", false, false, false, 210)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "visit", [], "any", false, false, false, 210)) : ([]));
        // line 211
        if (((null === CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "enabled", [], "any", false, false, false, 211)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "enabled", [], "any", false, false, false, 211)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 212
            yield "    ";
            yield from $this->load("partials/visit.html.twig", 212)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "eyebrow", [], "any", false, false, false, 212), "title" => CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "title", [], "any", false, false, false, 212), "text" => CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "text", [], "any", false, false, false, 212)]));
        }
        // line 214
        yield "
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home.html.twig";
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
        return array (  771 => 214,  767 => 212,  765 => 211,  763 => 210,  760 => 208,  754 => 204,  738 => 201,  734 => 200,  731 => 199,  717 => 198,  713 => 197,  710 => 196,  706 => 195,  703 => 194,  701 => 193,  697 => 191,  695 => 190,  693 => 189,  690 => 187,  682 => 182,  679 => 181,  667 => 179,  663 => 178,  658 => 175,  656 => 174,  652 => 172,  649 => 171,  646 => 170,  643 => 169,  641 => 168,  639 => 167,  636 => 165,  627 => 160,  621 => 159,  617 => 158,  606 => 155,  603 => 154,  601 => 153,  599 => 152,  596 => 150,  586 => 145,  583 => 144,  568 => 143,  565 => 142,  548 => 141,  545 => 140,  543 => 139,  539 => 137,  536 => 136,  533 => 135,  530 => 134,  528 => 133,  526 => 132,  523 => 130,  517 => 126,  499 => 123,  495 => 122,  491 => 121,  484 => 120,  466 => 119,  464 => 118,  461 => 117,  459 => 116,  455 => 114,  453 => 113,  451 => 112,  448 => 110,  443 => 107,  439 => 105,  433 => 104,  428 => 102,  424 => 101,  419 => 98,  417 => 97,  414 => 96,  400 => 94,  397 => 93,  394 => 92,  390 => 90,  376 => 89,  373 => 88,  371 => 87,  367 => 86,  362 => 85,  356 => 84,  351 => 81,  348 => 80,  345 => 79,  343 => 78,  341 => 77,  338 => 75,  332 => 71,  328 => 69,  306 => 67,  289 => 66,  286 => 65,  283 => 64,  273 => 62,  271 => 61,  267 => 60,  262 => 59,  256 => 58,  252 => 56,  245 => 55,  239 => 54,  234 => 51,  231 => 50,  228 => 49,  226 => 48,  224 => 47,  221 => 45,  214 => 44,  206 => 39,  198 => 37,  186 => 36,  183 => 35,  179 => 34,  172 => 29,  168 => 27,  166 => 26,  163 => 25,  154 => 24,  146 => 23,  143 => 22,  137 => 21,  127 => 20,  124 => 19,  118 => 18,  102 => 12,  95 => 11,  78 => 9,  67 => 7,  62 => 1,  60 => 5,  58 => 4,  56 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/kk.html.twig\x27 as kk %}

{% set hero = header.hero ?? {} %}
{% set hero_img = hero.image ? page.media[hero.image] : null %}

{% block body_class %}is-home page-home{% endblock %}

{% block og_image %}{% if hero_img %}<meta property=\"og:image\" content=\"{{ url(kk.imgurl(hero_img, 1200, 630), true) }}\">{% else %}{{ parent() }}{% endif %}{% endblock %}

{% block hero %}
<section class=\"hero hero-fun\"{% if hero_img %} style=\"--hero: url(\x27{{ kk.imgurlfit(hero_img, 2400, 3200) }}\x27); --hero-y: {{ hero.focus ?: \x2740%\x27 }}\"{% endif %}>
    <div class=\"hero-shade\"></div>
    <span class=\"hm-chip hm-chip-1\" aria-hidden=\"true\"><b>Kaffe</b> coffee</span>
    <span class=\"hm-chip hm-chip-2\" aria-hidden=\"true\"><b>Kos</b> cosiness</span>
    <span class=\"hm-chip hm-chip-3\" aria-hidden=\"true\"><b>Skål</b> cheers</span>
    <div class=\"wrap hero-content\">
        {% if hero.eyebrow %}<p class=\"eyebrow eyebrow-light\">{{ hero.eyebrow }}</p>{% endif %}
        {% set hw = (hero.title|default(page.title))|split(\x27 \x27) %}
        <h1>{% if hw|length > 1 %}{{ hw|slice(0, -1)|join(\x27 \x27) }} {% endif %}<em>{{ hw|last }}</em></h1>
        {% if hero.subtitle %}<p class=\"lead\">{{ hero.subtitle }}</p>{% endif %}
        <div class=\"hero-actions\">
            {% if hero.btn1_label %}<a class=\"btn btn-primary btn-lg\" href=\"{{ kk.href(hero.btn1_url ?: \x27/menu\x27) }}\">{{ hero.btn1_label }}</a>{% endif %}
            {% if hero.btn2_label %}<a class=\"btn btn-ghost btn-lg\" href=\"{{ kk.href(hero.btn2_url ?: \x27/contact\x27) }}\">{{ hero.btn2_label }}</a>{% endif %}
        </div>
        {% if hero.show_open_badge is null or hero.show_open_badge %}
            <p class=\"open-badge\" data-open-status><span class=\"dot\"></span><span data-open-text>Opening hours below</span></p>
        {% endif %}
    </div>
</section>
<div class=\"hm-ticker\" aria-hidden=\"true\">
    <div class=\"hm-ticker-band\">
        <div class=\"hm-ticker-track\">
            {% for g in 1..2 %}
                <div class=\"hm-ticker-group\">
                    {% for w in [\x27Hausbrandt\x27, \x27Kaffe\x27, \x27Kos\x27, \x27Cinnamon buns\x27, \x27Matcha\x27, \x27Velkommen\x27, \x27Frappes\x27, \x27Skål\x27, \x27Hausbrandt\x27, \x27Kaffe\x27, \x27Kos\x27, \x27Cinnamon buns\x27, \x27Matcha\x27, \x27Velkommen\x27, \x27Frappes\x27, \x27Skål\x27] %}<span>{{ w }}</span>{% endfor %}
                </div>
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}

{% block content %}

{# ------------------------------------------------------------- WELCOME #}
{% set intro = header.intro ?? {} %}
{% if (intro.enabled is null or intro.enabled) and (intro.title or intro.text) %}
    {% set intro_img = intro.image ? page.media[intro.image] : null %}
    {% set intro_img2 = intro.image2 ? page.media[intro.image2] : null %}
    <section class=\"section section-welcome hm-welcome\">
        <div class=\"wrap split\">
            <div class=\"split-media\">
                {% if intro_img %}<div class=\"frame\">{{ kk.img(intro_img, 720, 860, intro.title) }}</div>{% endif %}
                {% if intro_img2 %}<div class=\"frame frame-small\">{{ kk.img(intro_img2, 360, 360, \x27\x27) }}</div>{% endif %}
            </div>
            <div class=\"split-text\">
                {% if intro.eyebrow %}<p class=\"eyebrow\">{{ intro.eyebrow }}</p>{% endif %}
                <h2>{{ intro.title }}</h2>
                <div class=\"prose\">{{ intro.text|markdown(false)|raw }}</div>
                {% if intro.link_label %}
                    <a class=\"link-arrow\" href=\"{{ kk.href(intro.link_url ?: \x27/about\x27) }}\">{{ intro.link_label }} {{ kk.icon(\x27arrow\x27, 18) }}</a>
                {% endif %}
                {% if intro.stats %}
                    <ul class=\"stats hm-stats\">
                        {% for s in intro.stats %}
                            <li class=\"hm-stat hm-stat-{{ loop.index }}\"><strong>{{ s.value }}</strong><span>{{ s.label }}</span></li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </div>
        </div>
    </section>
{% endif %}

{# ---------------------------------------------------------- OUR COFFEE #}
{% set cf = header.coffee ?? {} %}
{% if (cf.enabled is null or cf.enabled) and (cf.title or cf.text) %}
    {% set cf_img = cf.image ? page.media[cf.image] : null %}
    {% set cf_img2 = cf.image2 ? page.media[cf.image2] : null %}
    <section class=\"section section-navy coffee\">
        <div class=\"wrap coffee-grid\">
            <div class=\"coffee-text\">
                {% if cf.eyebrow %}<p class=\"eyebrow eyebrow-light\">{{ cf.eyebrow }}</p>{% endif %}
                <h2>{{ cf.title }}</h2>
                <div class=\"prose\">{{ cf.text|markdown(false)|raw }}</div>
                {% if cf.facts %}
                    <ul class=\"stats stats-light\">
                        {% for f in cf.facts %}<li><strong>{{ f.value }}</strong><span>{{ f.label }}</span></li>{% endfor %}
                    </ul>
                {% endif %}
                {% if cf.link_label %}
                    {% set cf_url = cf.link_url ?: \x27#\x27 %}
                    <a class=\"btn btn-ghost\" href=\"{{ kk.href(cf_url) }}\"{% if cf_url starts with \x27http\x27 %} target=\"_blank\" rel=\"noopener\"{% endif %}>{{ cf.link_label }} {{ kk.icon(\x27arrow\x27, 18) }}</a>
                {% endif %}
            </div>
            {% if cf_img or cf_img2 %}
                <div class=\"coffee-media\">
                    <div class=\"coffee-halo\" aria-hidden=\"true\"></div>
                    <div class=\"coffee-products\">
                        {{ kk.imgfit(cf_img, 640, 760, \x27Hausbrandt Gourmet 100% Arabica coffee beans\x27, \x27product product-main\x27) }}
                        {{ kk.imgfit(cf_img2, 560, 760, \x27Hausbrandt Sublime 100% Arabica coffee beans\x27, \x27product product-second\x27) }}
                    </div>
                    {% if cf.caption %}<p class=\"coffee-caption\">{{ cf.caption }}</p>{% endif %}
                </div>
            {% endif %}
        </div>
    </section>
{% endif %}

{# ---------------------------------------------------------- HIGHLIGHTS #}
{% set hl = header.highlights ?? {} %}
{% if (hl.enabled is null or hl.enabled) and hl.items %}
    <section class=\"section hm-features\">
        <div class=\"wrap\">
            {% include \x27partials/section-head.html.twig\x27 with {eyebrow: \x27Why Kaffekos\x27, title: hl.title, subtitle: hl.subtitle} %}
            <div class=\"features hm-cards\">
                {% set tones = [\x27coral\x27, \x27lagoon\x27, \x27plum\x27, \x27navy\x27] %}
                {% for f in hl.items %}
                    <div class=\"feature hm-card hm-card--{{ tones[loop.index0 % 4] }}\" data-n=\"{{ \x27%02d\x27|format(loop.index) }}\">
                        <div class=\"feature-icon\">{{ kk.icon(f.icon ?: \x27cup\x27, 30) }}</div>
                        <h3>{{ f.title }}</h3>
                        <p>{{ f.text }}</p>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>
{% endif %}

{# --------------------------------------------------- MENU FAVOURITES #}
{% set ft = header.featured ?? {} %}
{% if ft.enabled is null or ft.enabled %}
    {% set menu_page = page.find(\x27/menu\x27) %}
    {% set picks = kk_featured_items(menu_page, ft.limit ?: 6) %}
    {% if picks %}
        <section class=\"section hm-favs\">
            <div class=\"wrap\">
                {% include \x27partials/section-head.html.twig\x27 with {eyebrow: \x27From our kitchen\x27, title: ft.title, subtitle: ft.subtitle} %}
                <div class=\"menu-grid hm-fav-grid\">
                    {% for pick in picks %}
                        {% include \x27partials/menu-item.html.twig\x27 with {item: pick.item, image: pick.image, currency: theme_var(\x27menu.currency\x27), show_image: true, card: true, show_price: (ft.show_prices ? true : false)} %}
                    {% endfor %}
                </div>
                <p class=\"center\"><a class=\"btn btn-primary btn-lg\" href=\"{{ menu_page.url }}\">{{ ft.button_label ?: \x27See the full menu\x27 }}</a></p>
            </div>
        </section>
    {% endif %}
{% endif %}

{# ---------------------------------------------------------------- KOS #}
{% set q = header.quote ?? {} %}
{% if (q.enabled is null or q.enabled) and (q.word or q.text) %}
    {% set q_img = q.image ? page.media[q.image] : null %}
    <section class=\"kos hm-kos\"{% if q_img %} style=\"--kos-bg: url(\x27{{ kk.imgurlfit(q_img, 2000, 2000) }}\x27)\"{% endif %}>
        <div class=\"pattern-band pattern-band-gold\" aria-hidden=\"true\"></div>
        <div class=\"wrap kos-inner\">
            <p class=\"kos-word\">{{ q.word }}</p>
            {% if q.pronunciation %}<p class=\"kos-pron\">{{ q.pronunciation }}</p>{% endif %}
            <p class=\"kos-text\">{{ q.text }}</p>
        </div>
        <div class=\"pattern-band pattern-band-gold\" aria-hidden=\"true\"></div>
    </section>
{% endif %}

{# -------------------------------------------------------- PHOTO STRIP #}
{% set ps = header.photostrip ?? {} %}
{% if ps.enabled is null or ps.enabled %}
    {% set gpage = page.find(\x27/gallery\x27) %}
    {% set strip = kk_gallery_photos(gpage, ps.count ?: 6) %}
    {% if strip %}
        <section class=\"section hm-strip\">
            <div class=\"wrap\">
                {% include \x27partials/section-head.html.twig\x27 with {eyebrow: \x27Gallery\x27, title: ps.title, subtitle: ps.subtitle} %}
            </div>
            <div class=\"wrap wrap-wide\">
                <div class=\"photo-strip hm-photos\">
                    {% for ph in strip %}
                        <a href=\"{{ gpage.url }}\" class=\"photo\">{{ kk.img(ph.media, 560, 560, ph.caption ?: \x27Kaffekos\x27) }}</a>
                    {% endfor %}
                </div>
                <p class=\"center\"><a class=\"btn btn-primary btn-lg\" href=\"{{ gpage.url }}\">View the gallery</a></p>
            </div>
        </section>
    {% endif %}
{% endif %}

{# ------------------------------------------------------------ REVIEWS #}
{% set rv = header.reviews ?? {} %}
{% if (rv.enabled is null or rv.enabled) and rv.items %}
    <section class=\"section\">
        <div class=\"wrap\">
            {% include \x27partials/section-head.html.twig\x27 with {eyebrow: \x27Kind words\x27, title: rv.title, subtitle: rv.subtitle} %}
            <div class=\"reviews\">
                {% for r in rv.items %}
                    <figure class=\"review\">
                        <div class=\"stars\" aria-label=\"{{ r.rating ?: 5 }} out of 5 stars\">
                            {% for i in 1..5 %}<span class=\"{{ i <= (r.rating ?: 5) ? \x27on\x27 : \x27\x27 }}\">{{ kk.icon(\x27star\x27, 18) }}</span>{% endfor %}
                        </div>
                        <blockquote>{{ r.text }}</blockquote>
                        <figcaption><strong>{{ r.name }}</strong>{% if r.info %}<span>{{ r.info }}</span>{% endif %}</figcaption>
                    </figure>
                {% endfor %}
            </div>
        </div>
    </section>
{% endif %}

{# ------------------------------------------------------------- VISIT #}
{% set v = header.visit ?? {} %}
{% if v.enabled is null or v.enabled %}
    {% include \x27partials/visit.html.twig\x27 with {eyebrow: v.eyebrow, title: v.title, text: v.text} %}
{% endif %}

{% endblock %}
", "home.html.twig", "/Users/amer/Sites/kaffekos1/user/themes/kaffekos/templates/home.html.twig");
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
