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
        yield "is-home";
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
        yield "<section class=\"hero\"";
        if ((($tmp = ($context["hero_img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " style=\"--hero: url(\x27";
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(12))->call("imgurlfit", [($context["hero_img"] ?? null), 2400, 3200], $context, 12, $this->source);
            yield "\x27); --hero-y: ";
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "focus", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "focus", [], "any", false, false, false, 12), "html", null, true)) : ("40%"));
            yield "\"";
        }
        yield ">
    <div class=\"hero-shade\"></div>
    <div class=\"wrap hero-content\">
        ";
        // line 15
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "eyebrow", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"eyebrow eyebrow-light\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "eyebrow", [], "any", false, false, false, 15), "html", null, true);
            yield "</p>";
        }
        // line 16
        yield "        <h1>";
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "title", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "title", [], "any", false, false, false, 16), CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 16))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 16))), "html", null, true);
        yield "</h1>
        ";
        // line 17
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "subtitle", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"lead\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "subtitle", [], "any", false, false, false, 17), "html", null, true);
            yield "</p>";
        }
        // line 18
        yield "        <div class=\"hero-actions\">
            ";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "btn1_label", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a class=\"btn btn-primary btn-lg\" href=\"";
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(19))->call("href", [(((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "btn1_url", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "btn1_url", [], "any", false, false, false, 19)) : ("/menu"))], $context, 19, $this->source);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "btn1_label", [], "any", false, false, false, 19), "html", null, true);
            yield "</a>";
        }
        // line 20
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "btn2_label", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a class=\"btn btn-ghost btn-lg\" href=\"";
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(20))->call("href", [(((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "btn2_url", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "btn2_url", [], "any", false, false, false, 20)) : ("/contact"))], $context, 20, $this->source);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "btn2_label", [], "any", false, false, false, 20), "html", null, true);
            yield "</a>";
        }
        // line 21
        yield "        </div>
        ";
        // line 22
        if (((null === CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "show_open_badge", [], "any", false, false, false, 22)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "show_open_badge", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 23
            yield "            <p class=\"open-badge\" data-open-status><span class=\"dot\"></span><span data-open-text>Opening hours below</span></p>
        ";
        }
        // line 25
        yield "    </div>
    <div class=\"pattern-band pattern-band-gold\" aria-hidden=\"true\"></div>
</section>
";
        return; yield;
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "
";
        // line 33
        $context["intro"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "intro", [], "any", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "intro", [], "any", false, false, false, 33)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "intro", [], "any", false, false, false, 33)) : ([]));
        // line 34
        if ((((null === CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "enabled", [], "any", false, false, false, 34)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "enabled", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "title", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "text", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)))) {
            // line 35
            yield "    ";
            $context["intro_img"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "image", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 35)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "image", [], "any", false, false, false, 35)) instanceof \Stringable && (is_array($_v2) || $_v2 instanceof \ArrayObject || $_v2 instanceof \ArrayIterator) ? (string) $_v3 : $_v3)] ?? null) : null)) : (null));
            // line 36
            yield "    ";
            $context["intro_img2"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "image2", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 36)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[(($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "image2", [], "any", false, false, false, 36)) instanceof \Stringable && (is_array($_v4) || $_v4 instanceof \ArrayObject || $_v4 instanceof \ArrayIterator) ? (string) $_v5 : $_v5)] ?? null) : null)) : (null));
            // line 37
            yield "    <section class=\"section section-welcome\">
        <div class=\"wrap split\">
            <div class=\"split-media\">
                ";
            // line 40
            if ((($tmp = ($context["intro_img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<div class=\"frame\">";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(40))->call("img", [($context["intro_img"] ?? null), 720, 860, CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "title", [], "any", false, false, false, 40)], $context, 40, $this->source);
                yield "</div>";
            }
            // line 41
            yield "                ";
            if ((($tmp = ($context["intro_img2"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<div class=\"frame frame-small\">";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(41))->call("img", [($context["intro_img2"] ?? null), 360, 360, ""], $context, 41, $this->source);
                yield "</div>";
            }
            // line 42
            yield "            </div>
            <div class=\"split-text\">
                ";
            // line 44
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "eyebrow", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<p class=\"eyebrow\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "eyebrow", [], "any", false, false, false, 44), "html", null, true);
                yield "</p>";
            }
            // line 45
            yield "                <h2>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "title", [], "any", false, false, false, 45), "html", null, true);
            yield "</h2>
                <div class=\"prose\">";
            // line 46
            yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "text", [], "any", false, false, false, 46), false);
            yield "</div>
                ";
            // line 47
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "link_label", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 48
                yield "                    <a class=\"link-arrow\" href=\"";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(48))->call("href", [(((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "link_url", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "link_url", [], "any", false, false, false, 48)) : ("/about"))], $context, 48, $this->source);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "link_label", [], "any", false, false, false, 48), "html", null, true);
                yield " ";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(48))->call("icon", ["arrow", 18], $context, 48, $this->source);
                yield "</a>
                ";
            }
            // line 50
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "stats", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 51
                yield "                    <ul class=\"stats\">
                        ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["intro"] ?? null), "stats", [], "any", false, false, false, 52));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 53
                    yield "                            <li><strong>";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "value", [], "any", false, false, false, 53), "html", null, true);
                    yield "</strong><span>";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "label", [], "any", false, false, false, 53), "html", null, true);
                    yield "</span></li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 55
                yield "                    </ul>
                ";
            }
            // line 57
            yield "            </div>
        </div>
    </section>
";
        }
        // line 61
        yield "
";
        // line 63
        $context["cf"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "coffee", [], "any", true, true, false, 63) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "coffee", [], "any", false, false, false, 63)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "coffee", [], "any", false, false, false, 63)) : ([]));
        // line 64
        if ((((null === CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "enabled", [], "any", false, false, false, 64)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "enabled", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "title", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "text", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)))) {
            // line 65
            yield "    ";
            $context["cf_img"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "image", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 65)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[(($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "image", [], "any", false, false, false, 65)) instanceof \Stringable && (is_array($_v6) || $_v6 instanceof \ArrayObject || $_v6 instanceof \ArrayIterator) ? (string) $_v7 : $_v7)] ?? null) : null)) : (null));
            // line 66
            yield "    ";
            $context["cf_img2"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "image2", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 66)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[(($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "image2", [], "any", false, false, false, 66)) instanceof \Stringable && (is_array($_v8) || $_v8 instanceof \ArrayObject || $_v8 instanceof \ArrayIterator) ? (string) $_v9 : $_v9)] ?? null) : null)) : (null));
            // line 67
            yield "    <section class=\"section section-navy coffee\">
        <div class=\"wrap coffee-grid\">
            <div class=\"coffee-text\">
                ";
            // line 70
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "eyebrow", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<p class=\"eyebrow eyebrow-light\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "eyebrow", [], "any", false, false, false, 70), "html", null, true);
                yield "</p>";
            }
            // line 71
            yield "                <h2>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "title", [], "any", false, false, false, 71), "html", null, true);
            yield "</h2>
                <div class=\"prose\">";
            // line 72
            yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "text", [], "any", false, false, false, 72), false);
            yield "</div>
                ";
            // line 73
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "facts", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 74
                yield "                    <ul class=\"stats stats-light\">
                        ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "facts", [], "any", false, false, false, 75));
                foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                    yield "<li><strong>";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "value", [], "any", false, false, false, 75), "html", null, true);
                    yield "</strong><span>";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "label", [], "any", false, false, false, 75), "html", null, true);
                    yield "</span></li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['f'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 76
                yield "                    </ul>
                ";
            }
            // line 78
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "link_label", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 79
                yield "                    ";
                $context["cf_url"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "link_url", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "link_url", [], "any", false, false, false, 79)) : ("#"));
                // line 80
                yield "                    <a class=\"btn btn-ghost\" href=\"";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(80))->call("href", [($context["cf_url"] ?? null)], $context, 80, $this->source);
                yield "\"";
                if ((is_string($_v10 = ($context["cf_url"] ?? null)) && is_string($_v11 = "http") && str_starts_with($_v10, $_v11))) {
                    yield " target=\"_blank\" rel=\"noopener\"";
                }
                yield ">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "link_label", [], "any", false, false, false, 80), "html", null, true);
                yield " ";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(80))->call("icon", ["arrow", 18], $context, 80, $this->source);
                yield "</a>
                ";
            }
            // line 82
            yield "            </div>
            ";
            // line 83
            if (((($tmp = ($context["cf_img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["cf_img2"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 84
                yield "                <div class=\"coffee-media\">
                    <div class=\"coffee-halo\" aria-hidden=\"true\"></div>
                    <div class=\"coffee-products\">
                        ";
                // line 87
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(87))->call("imgfit", [($context["cf_img"] ?? null), 640, 760, "Hausbrandt Gourmet 100% Arabica coffee beans", "product product-main"], $context, 87, $this->source);
                yield "
                        ";
                // line 88
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(88))->call("imgfit", [($context["cf_img2"] ?? null), 560, 760, "Hausbrandt Sublime 100% Arabica coffee beans", "product product-second"], $context, 88, $this->source);
                yield "
                    </div>
                    ";
                // line 90
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "caption", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<p class=\"coffee-caption\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cf"] ?? null), "caption", [], "any", false, false, false, 90), "html", null, true);
                    yield "</p>";
                }
                // line 91
                yield "                </div>
            ";
            }
            // line 93
            yield "        </div>
    </section>
";
        }
        // line 96
        yield "
";
        // line 98
        $context["hl"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "highlights", [], "any", true, true, false, 98) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "highlights", [], "any", false, false, false, 98)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "highlights", [], "any", false, false, false, 98)) : ([]));
        // line 99
        if ((((null === CoreExtension::getAttribute($this->env, $this->source, ($context["hl"] ?? null), "enabled", [], "any", false, false, false, 99)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hl"] ?? null), "enabled", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hl"] ?? null), "items", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 100
            yield "    <section class=\"section section-sand\">
        <div class=\"wrap\">
            ";
            // line 102
            yield from $this->load("partials/section-head.html.twig", 102)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => null, "title" => CoreExtension::getAttribute($this->env, $this->source, ($context["hl"] ?? null), "title", [], "any", false, false, false, 102), "subtitle" => CoreExtension::getAttribute($this->env, $this->source, ($context["hl"] ?? null), "subtitle", [], "any", false, false, false, 102)]));
            // line 103
            yield "            <div class=\"features\">
                ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["hl"] ?? null), "items", [], "any", false, false, false, 104));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 105
                yield "                    <div class=\"feature\">
                        <div class=\"feature-icon\">";
                // line 106
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(106))->call("icon", [(((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["f"], "icon", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["f"], "icon", [], "any", false, false, false, 106)) : ("cup")), 30], $context, 106, $this->source);
                yield "</div>
                        <h3>";
                // line 107
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "title", [], "any", false, false, false, 107), "html", null, true);
                yield "</h3>
                        <p>";
                // line 108
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "text", [], "any", false, false, false, 108), "html", null, true);
                yield "</p>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['f'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 111
            yield "            </div>
        </div>
    </section>
";
        }
        // line 115
        yield "
";
        // line 117
        $context["ft"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "featured", [], "any", true, true, false, 117) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "featured", [], "any", false, false, false, 117)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "featured", [], "any", false, false, false, 117)) : ([]));
        // line 118
        if (((null === CoreExtension::getAttribute($this->env, $this->source, ($context["ft"] ?? null), "enabled", [], "any", false, false, false, 118)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ft"] ?? null), "enabled", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 119
            yield "    ";
            $context["menu_page"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "find", ["/menu"], "method", false, false, false, 119);
            // line 120
            yield "    ";
            $context["picks"] = $this->env->getFunction('kk_featured_items')->getCallable()(($context["menu_page"] ?? null), (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ft"] ?? null), "limit", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ft"] ?? null), "limit", [], "any", false, false, false, 120)) : (6)));
            // line 121
            yield "    ";
            if ((($tmp = ($context["picks"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 122
                yield "        <section class=\"section\">
            <div class=\"wrap\">
                ";
                // line 124
                yield from $this->load("partials/section-head.html.twig", 124)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => "From our kitchen", "title" => CoreExtension::getAttribute($this->env, $this->source, ($context["ft"] ?? null), "title", [], "any", false, false, false, 124), "subtitle" => CoreExtension::getAttribute($this->env, $this->source, ($context["ft"] ?? null), "subtitle", [], "any", false, false, false, 124)]));
                // line 125
                yield "                <div class=\"menu-grid\">
                    ";
                // line 126
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
                    // line 127
                    yield "                        ";
                    yield from $this->load("partials/menu-item.html.twig", 127)->unwrap()->yield(CoreExtension::merge($context, ["item" => CoreExtension::getAttribute($this->env, $this->source, $context["pick"], "item", [], "any", false, false, false, 127), "image" => CoreExtension::getAttribute($this->env, $this->source, $context["pick"], "image", [], "any", false, false, false, 127), "currency" => $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "menu.currency"), "show_image" => true, "card" => true, "show_price" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ft"] ?? null), "show_prices", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (true) : (false))]));
                    // line 128
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
                // line 129
                yield "                </div>
                <p class=\"center\"><a class=\"btn btn-outline\" href=\"";
                // line 130
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menu_page"] ?? null), "url", [], "any", false, false, false, 130), "html", null, true);
                yield "\">";
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ft"] ?? null), "button_label", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ft"] ?? null), "button_label", [], "any", false, false, false, 130), "html", null, true)) : ("See the full menu"));
                yield "</a></p>
            </div>
        </section>
    ";
            }
        }
        // line 135
        yield "
";
        // line 137
        $context["q"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "quote", [], "any", true, true, false, 137) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "quote", [], "any", false, false, false, 137)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "quote", [], "any", false, false, false, 137)) : ([]));
        // line 138
        if ((((null === CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "enabled", [], "any", false, false, false, 138)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "enabled", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "word", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "text", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)))) {
            // line 139
            yield "    ";
            $context["q_img"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "image", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v12 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 139)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[(($_v13 = CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "image", [], "any", false, false, false, 139)) instanceof \Stringable && (is_array($_v12) || $_v12 instanceof \ArrayObject || $_v12 instanceof \ArrayIterator) ? (string) $_v13 : $_v13)] ?? null) : null)) : (null));
            // line 140
            yield "    <section class=\"kos\"";
            if ((($tmp = ($context["q_img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " style=\"--kos-bg: url(\x27";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(140))->call("imgurlfit", [($context["q_img"] ?? null), 2000, 2000], $context, 140, $this->source);
                yield "\x27)\"";
            }
            yield ">
        <div class=\"pattern-band pattern-band-gold\" aria-hidden=\"true\"></div>
        <div class=\"wrap kos-inner\">
            <p class=\"kos-word\">";
            // line 143
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "word", [], "any", false, false, false, 143), "html", null, true);
            yield "</p>
            ";
            // line 144
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "pronunciation", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<p class=\"kos-pron\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "pronunciation", [], "any", false, false, false, 144), "html", null, true);
                yield "</p>";
            }
            // line 145
            yield "            <p class=\"kos-text\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["q"] ?? null), "text", [], "any", false, false, false, 145), "html", null, true);
            yield "</p>
        </div>
        <div class=\"pattern-band pattern-band-gold\" aria-hidden=\"true\"></div>
    </section>
";
        }
        // line 150
        yield "
";
        // line 152
        $context["ps"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "photostrip", [], "any", true, true, false, 152) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "photostrip", [], "any", false, false, false, 152)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "photostrip", [], "any", false, false, false, 152)) : ([]));
        // line 153
        if (((null === CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "enabled", [], "any", false, false, false, 153)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "enabled", [], "any", false, false, false, 153)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 154
            yield "    ";
            $context["gpage"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "find", ["/gallery"], "method", false, false, false, 154);
            // line 155
            yield "    ";
            $context["strip"] = $this->env->getFunction('kk_gallery_photos')->getCallable()(($context["gpage"] ?? null), (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "count", [], "any", false, false, false, 155)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "count", [], "any", false, false, false, 155)) : (6)));
            // line 156
            yield "    ";
            if ((($tmp = ($context["strip"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 157
                yield "        <section class=\"section section-sand\">
            <div class=\"wrap\">
                ";
                // line 159
                yield from $this->load("partials/section-head.html.twig", 159)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => "Gallery", "title" => CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "title", [], "any", false, false, false, 159), "subtitle" => CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "subtitle", [], "any", false, false, false, 159)]));
                // line 160
                yield "            </div>
            <div class=\"wrap wrap-wide\">
                <div class=\"photo-strip\">
                    ";
                // line 163
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["strip"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["ph"]) {
                    // line 164
                    yield "                        <a href=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["gpage"] ?? null), "url", [], "any", false, false, false, 164), "html", null, true);
                    yield "\" class=\"photo\">";
                    yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(164))->call("img", [CoreExtension::getAttribute($this->env, $this->source, $context["ph"], "media", [], "any", false, false, false, 164), 560, 560, (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ph"], "caption", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["ph"], "caption", [], "any", false, false, false, 164)) : ("Kaffekos"))], $context, 164, $this->source);
                    yield "</a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['ph'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 166
                yield "                </div>
                <p class=\"center\"><a class=\"btn btn-outline\" href=\"";
                // line 167
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["gpage"] ?? null), "url", [], "any", false, false, false, 167), "html", null, true);
                yield "\">View the gallery</a></p>
            </div>
        </section>
    ";
            }
        }
        // line 172
        yield "
";
        // line 174
        $context["rv"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "reviews", [], "any", true, true, false, 174) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "reviews", [], "any", false, false, false, 174)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "reviews", [], "any", false, false, false, 174)) : ([]));
        // line 175
        if ((((null === CoreExtension::getAttribute($this->env, $this->source, ($context["rv"] ?? null), "enabled", [], "any", false, false, false, 175)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["rv"] ?? null), "enabled", [], "any", false, false, false, 175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["rv"] ?? null), "items", [], "any", false, false, false, 175)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 176
            yield "    <section class=\"section\">
        <div class=\"wrap\">
            ";
            // line 178
            yield from $this->load("partials/section-head.html.twig", 178)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => "Kind words", "title" => CoreExtension::getAttribute($this->env, $this->source, ($context["rv"] ?? null), "title", [], "any", false, false, false, 178), "subtitle" => CoreExtension::getAttribute($this->env, $this->source, ($context["rv"] ?? null), "subtitle", [], "any", false, false, false, 178)]));
            // line 179
            yield "            <div class=\"reviews\">
                ";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["rv"] ?? null), "items", [], "any", false, false, false, 180));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 181
                yield "                    <figure class=\"review\">
                        <div class=\"stars\" aria-label=\"";
                // line 182
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "rating", [], "any", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "rating", [], "any", false, false, false, 182), "html", null, true)) : (5));
                yield " out of 5 stars\">
                            ";
                // line 183
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    yield "<span class=\"";
                    yield (string) ((($context["i"] <= (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "rating", [], "any", false, false, false, 183)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["r"], "rating", [], "any", false, false, false, 183)) : (5)))) ? ("on") : (""));
                    yield "\">";
                    yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(183))->call("icon", ["star", 18], $context, 183, $this->source);
                    yield "</span>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 184
                yield "                        </div>
                        <blockquote>";
                // line 185
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "text", [], "any", false, false, false, 185), "html", null, true);
                yield "</blockquote>
                        <figcaption><strong>";
                // line 186
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "name", [], "any", false, false, false, 186), "html", null, true);
                yield "</strong>";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "info", [], "any", false, false, false, 186)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span>";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "info", [], "any", false, false, false, 186), "html", null, true);
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
            // line 189
            yield "            </div>
        </div>
    </section>
";
        }
        // line 193
        yield "
";
        // line 195
        $context["v"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "visit", [], "any", true, true, false, 195) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "visit", [], "any", false, false, false, 195)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "visit", [], "any", false, false, false, 195)) : ([]));
        // line 196
        if (((null === CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "enabled", [], "any", false, false, false, 196)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "enabled", [], "any", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 197
            yield "    ";
            yield from $this->load("partials/visit.html.twig", 197)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "eyebrow", [], "any", false, false, false, 197), "title" => CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "title", [], "any", false, false, false, 197), "text" => CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "text", [], "any", false, false, false, 197)]));
        }
        // line 199
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
        return array (  675 => 199,  671 => 197,  669 => 196,  667 => 195,  664 => 193,  658 => 189,  642 => 186,  638 => 185,  635 => 184,  621 => 183,  617 => 182,  614 => 181,  610 => 180,  607 => 179,  605 => 178,  601 => 176,  599 => 175,  597 => 174,  594 => 172,  586 => 167,  583 => 166,  571 => 164,  567 => 163,  562 => 160,  560 => 159,  556 => 157,  553 => 156,  550 => 155,  547 => 154,  545 => 153,  543 => 152,  540 => 150,  531 => 145,  525 => 144,  521 => 143,  510 => 140,  507 => 139,  505 => 138,  503 => 137,  500 => 135,  490 => 130,  487 => 129,  472 => 128,  469 => 127,  452 => 126,  449 => 125,  447 => 124,  443 => 122,  440 => 121,  437 => 120,  434 => 119,  432 => 118,  430 => 117,  427 => 115,  421 => 111,  411 => 108,  407 => 107,  403 => 106,  400 => 105,  396 => 104,  393 => 103,  391 => 102,  387 => 100,  385 => 99,  383 => 98,  380 => 96,  375 => 93,  371 => 91,  365 => 90,  360 => 88,  356 => 87,  351 => 84,  349 => 83,  346 => 82,  332 => 80,  329 => 79,  326 => 78,  322 => 76,  308 => 75,  305 => 74,  303 => 73,  299 => 72,  294 => 71,  288 => 70,  283 => 67,  280 => 66,  277 => 65,  275 => 64,  273 => 63,  270 => 61,  264 => 57,  260 => 55,  248 => 53,  244 => 52,  241 => 51,  238 => 50,  228 => 48,  226 => 47,  222 => 46,  217 => 45,  211 => 44,  207 => 42,  200 => 41,  194 => 40,  189 => 37,  186 => 36,  183 => 35,  181 => 34,  179 => 33,  176 => 31,  169 => 30,  161 => 25,  157 => 23,  155 => 22,  152 => 21,  143 => 20,  135 => 19,  132 => 18,  126 => 17,  121 => 16,  115 => 15,  102 => 12,  95 => 11,  78 => 9,  67 => 7,  62 => 1,  60 => 5,  58 => 4,  56 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/kk.html.twig\x27 as kk %}

{% set hero = header.hero ?? {} %}
{% set hero_img = hero.image ? page.media[hero.image] : null %}

{% block body_class %}is-home{% endblock %}

{% block og_image %}{% if hero_img %}<meta property=\"og:image\" content=\"{{ url(kk.imgurl(hero_img, 1200, 630), true) }}\">{% else %}{{ parent() }}{% endif %}{% endblock %}

{% block hero %}
<section class=\"hero\"{% if hero_img %} style=\"--hero: url(\x27{{ kk.imgurlfit(hero_img, 2400, 3200) }}\x27); --hero-y: {{ hero.focus ?: \x2740%\x27 }}\"{% endif %}>
    <div class=\"hero-shade\"></div>
    <div class=\"wrap hero-content\">
        {% if hero.eyebrow %}<p class=\"eyebrow eyebrow-light\">{{ hero.eyebrow }}</p>{% endif %}
        <h1>{{ hero.title|default(page.title) }}</h1>
        {% if hero.subtitle %}<p class=\"lead\">{{ hero.subtitle }}</p>{% endif %}
        <div class=\"hero-actions\">
            {% if hero.btn1_label %}<a class=\"btn btn-primary btn-lg\" href=\"{{ kk.href(hero.btn1_url ?: \x27/menu\x27) }}\">{{ hero.btn1_label }}</a>{% endif %}
            {% if hero.btn2_label %}<a class=\"btn btn-ghost btn-lg\" href=\"{{ kk.href(hero.btn2_url ?: \x27/contact\x27) }}\">{{ hero.btn2_label }}</a>{% endif %}
        </div>
        {% if hero.show_open_badge is null or hero.show_open_badge %}
            <p class=\"open-badge\" data-open-status><span class=\"dot\"></span><span data-open-text>Opening hours below</span></p>
        {% endif %}
    </div>
    <div class=\"pattern-band pattern-band-gold\" aria-hidden=\"true\"></div>
</section>
{% endblock %}

{% block content %}

{# ------------------------------------------------------------- WELCOME #}
{% set intro = header.intro ?? {} %}
{% if (intro.enabled is null or intro.enabled) and (intro.title or intro.text) %}
    {% set intro_img = intro.image ? page.media[intro.image] : null %}
    {% set intro_img2 = intro.image2 ? page.media[intro.image2] : null %}
    <section class=\"section section-welcome\">
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
                    <ul class=\"stats\">
                        {% for s in intro.stats %}
                            <li><strong>{{ s.value }}</strong><span>{{ s.label }}</span></li>
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
    <section class=\"section section-sand\">
        <div class=\"wrap\">
            {% include \x27partials/section-head.html.twig\x27 with {eyebrow: null, title: hl.title, subtitle: hl.subtitle} %}
            <div class=\"features\">
                {% for f in hl.items %}
                    <div class=\"feature\">
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
        <section class=\"section\">
            <div class=\"wrap\">
                {% include \x27partials/section-head.html.twig\x27 with {eyebrow: \x27From our kitchen\x27, title: ft.title, subtitle: ft.subtitle} %}
                <div class=\"menu-grid\">
                    {% for pick in picks %}
                        {% include \x27partials/menu-item.html.twig\x27 with {item: pick.item, image: pick.image, currency: theme_var(\x27menu.currency\x27), show_image: true, card: true, show_price: (ft.show_prices ? true : false)} %}
                    {% endfor %}
                </div>
                <p class=\"center\"><a class=\"btn btn-outline\" href=\"{{ menu_page.url }}\">{{ ft.button_label ?: \x27See the full menu\x27 }}</a></p>
            </div>
        </section>
    {% endif %}
{% endif %}

{# ---------------------------------------------------------------- KOS #}
{% set q = header.quote ?? {} %}
{% if (q.enabled is null or q.enabled) and (q.word or q.text) %}
    {% set q_img = q.image ? page.media[q.image] : null %}
    <section class=\"kos\"{% if q_img %} style=\"--kos-bg: url(\x27{{ kk.imgurlfit(q_img, 2000, 2000) }}\x27)\"{% endif %}>
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
        <section class=\"section section-sand\">
            <div class=\"wrap\">
                {% include \x27partials/section-head.html.twig\x27 with {eyebrow: \x27Gallery\x27, title: ps.title, subtitle: ps.subtitle} %}
            </div>
            <div class=\"wrap wrap-wide\">
                <div class=\"photo-strip\">
                    {% for ph in strip %}
                        <a href=\"{{ gpage.url }}\" class=\"photo\">{{ kk.img(ph.media, 560, 560, ph.caption ?: \x27Kaffekos\x27) }}</a>
                    {% endfor %}
                </div>
                <p class=\"center\"><a class=\"btn btn-outline\" href=\"{{ gpage.url }}\">View the gallery</a></p>
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
