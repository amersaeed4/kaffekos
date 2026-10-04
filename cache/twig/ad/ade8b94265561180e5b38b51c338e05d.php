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

/* partials/base.html.twig */
class __TwigTemplate_acfb25e86276f6d4bd22ea30c070e358_sourced extends Template
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
            'og_image' => [$this, 'block_og_image'],
            'head_extra' => [$this, 'block_head_extra'],
            'body_class' => [$this, 'block_body_class'],
            'hero' => [$this, 'block_hero'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $macros["kk"] = $this->macros["kk"] = $this->load("macros/kk.html.twig", 1)->unwrap()->getMacroNamespace();
        // line 2
        $context["biz"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "business");
        // line 3
        $context["social"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "social");
        // line 4
        $context["colors"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "colors");
        // line 5
        $context["hours"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "hours");
        // line 6
        $context["logo"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_logo");
        // line 7
        $context["logo_first"] = (((is_iterable(($context["logo"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["logo"] ?? null)) > 0))) ? (Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["logo"] ?? null))) : (null));
        // line 8
        $context["logo_url"] = (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["logo_first"] ?? null), "name", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["logo_first"] ?? null), "name", [], "any", false, false, false, 8), null)) : (null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/logo/" . CoreExtension::getAttribute($this->env, $this->source, ($context["logo_first"] ?? null), "name", [], "any", false, false, false, 8)))) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/kk-logo.png")));
        // line 9
        $context["favicon"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "custom_favicon");
        // line 10
        $context["favicon_first"] = (((is_iterable(($context["favicon"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["favicon"] ?? null)) > 0))) ? (Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["favicon"] ?? null))) : (null));
        // line 11
        $context["favicon_url"] = (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["favicon_first"] ?? null), "name", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["favicon_first"] ?? null), "name", [], "any", false, false, false, 11), null)) : (null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/favicon/" . CoreExtension::getAttribute($this->env, $this->source, ($context["favicon_first"] ?? null), "name", [], "any", false, false, false, 11)))) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/kk-logo.png")));
        // line 12
        $context["page_title"] = (((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "route", [], "any", false, false, false, 12) != "/")) && (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "route", [], "any", false, false, false, 12) != "/home"))) ? (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 12) . " | ") . CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 12))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 12) . " | ") . (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "brand.tagline")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "brand.tagline")) : ("Coffee House")))));
        // line 13
        $context["page_desc"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metadata", [], "any", false, true, false, 13), "description", [], "any", false, true, false, 13), "content", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metadata", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13), "content", [], "any", false, false, false, 13), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "hero", [], "any", false, true, false, 13), "subtitle", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "hero", [], "any", false, false, false, 13), "subtitle", [], "any", false, false, false, 13), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "banner", [], "any", false, true, false, 13), "subtitle", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "banner", [], "any", false, false, false, 13), "subtitle", [], "any", false, false, false, 13), ((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "summary", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "summary", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13))))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "summary", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "summary", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13))))))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "banner", [], "any", false, true, false, 13), "subtitle", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "banner", [], "any", false, false, false, 13), "subtitle", [], "any", false, false, false, 13), ((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "summary", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "summary", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13))))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "summary", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "summary", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13))))))))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "hero", [], "any", false, true, false, 13), "subtitle", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "hero", [], "any", false, false, false, 13), "subtitle", [], "any", false, false, false, 13), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "banner", [], "any", false, true, false, 13), "subtitle", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "banner", [], "any", false, false, false, 13), "subtitle", [], "any", false, false, false, 13), ((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "summary", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "summary", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13))))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "summary", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "summary", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13))))))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "banner", [], "any", false, true, false, 13), "subtitle", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "banner", [], "any", false, false, false, 13), "subtitle", [], "any", false, false, false, 13), ((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "summary", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "summary", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13))))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "summary", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "summary", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13)))))))));
        // line 14
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 19
        yield (string) $this->escaper->escape(($context["page_title"] ?? null), "html");
        yield "</title>
    <meta name=\"description\" content=\"";
        // line 20
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::striptags(($context["page_desc"] ?? null)), "html_attr");
        yield "\">
    <meta name=\"theme-color\" content=\"";
        // line 21
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["colors"] ?? null), "navy", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["colors"] ?? null), "navy", [], "any", false, false, false, 21), "#0f2747")) : ("#0f2747")), "html", null, true);
        yield "\">
    <link rel=\"canonical\" href=\"";
        // line 22
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true, true], "method", false, false, false, 22), "html", null, true);
        yield "\">
    <link rel=\"icon\" href=\"";
        // line 23
        yield (string) $this->escaper->escape(($context["favicon_url"] ?? null), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 24
        yield (string) $this->escaper->escape(($context["favicon_url"] ?? null), "html", null, true);
        yield "\">
    <meta property=\"og:site_name\" content=\"";
        // line 25
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 25), "html_attr");
        yield "\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"";
        // line 27
        yield (string) $this->escaper->escape(($context["page_title"] ?? null), "html_attr");
        yield "\">
    <meta property=\"og:description\" content=\"";
        // line 28
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::striptags(($context["page_desc"] ?? null)), "html_attr");
        yield "\">
    <meta property=\"og:url\" content=\"";
        // line 29
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true, true], "method", false, false, false, 29), "html", null, true);
        yield "\">
    ";
        // line 30
        yield from $this->unwrap()->yieldBlock('og_image', $context, $blocks);
        // line 31
        yield "    <meta name=\"twitter:card\" content=\"summary_large_image\">

    <link rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin href=\"";
        // line 33
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://fonts/fraunces-normal.woff2"), "html", null, true);
        yield "\">
    <link rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin href=\"";
        // line 34
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://fonts/dm-sans-normal.woff2"), "html", null, true);
        yield "\">
    ";
        // line 35
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/kaffekos.css", 100], "method", false, false, false, 35);
        // line 36
        yield "    ";
        yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, false, 36);
        yield "
    <style>
        :root {
            --navy: ";
        // line 39
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["colors"] ?? null), "navy", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["colors"] ?? null), "navy", [], "any", false, false, false, 39), "#0f2747")) : ("#0f2747")), "html", null, true);
        yield ";
            --red: ";
        // line 40
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["colors"] ?? null), "red", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["colors"] ?? null), "red", [], "any", false, false, false, 40), "#ba0c2f")) : ("#ba0c2f")), "html", null, true);
        yield ";
            --gold: ";
        // line 41
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["colors"] ?? null), "gold", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["colors"] ?? null), "gold", [], "any", false, false, false, 41), "#c99a5b")) : ("#c99a5b")), "html", null, true);
        yield ";
            --cream: ";
        // line 42
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["colors"] ?? null), "cream", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["colors"] ?? null), "cream", [], "any", false, false, false, 42), "#fbf6ec")) : ("#fbf6ec")), "html", null, true);
        yield ";
            --sand: ";
        // line 43
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["colors"] ?? null), "sand", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["colors"] ?? null), "sand", [], "any", false, false, false, 43), "#f1e6d2")) : ("#f1e6d2")), "html", null, true);
        yield ";
            --ink: ";
        // line 44
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["colors"] ?? null), "ink", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["colors"] ?? null), "ink", [], "any", false, false, false, 44), "#2b1a10")) : ("#2b1a10")), "html", null, true);
        yield ";
            --pattern: url(\x27";
        // line 45
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/pattern-star.svg"), "html", null, true);
        yield "\x27);
        }
    </style>

    ";
        // line 49
        yield from $this->load("partials/jsonld.html.twig", 49)->unwrap()->yield($context);
        // line 50
        yield "    ";
        yield from $this->unwrap()->yieldBlock('head_extra', $context, $blocks);
        // line 51
        yield "</head>
<body class=\"";
        // line 52
        yield from $this->unwrap()->yieldBlock('body_class', $context, $blocks);
        yield "\">
<a class=\"skip-link\" href=\"#main\">Skip to content</a>

";
        // line 55
        if (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "announcement.enabled")) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "announcement.text")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 56
            yield "    ";
            $context["ann_link"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "announcement.link");
            // line 57
            yield "    <div class=\"announce\">
        ";
            // line 58
            if ((($tmp = ($context["ann_link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<a href=\"";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(58))->call("href", [($context["ann_link"] ?? null)], $context, 58, $this->source);
                yield "\">";
                yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "announcement.text"), "html", null, true);
                yield " ";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(58))->call("icon", ["arrow", 16], $context, 58, $this->source);
                yield "</a>
        ";
            } else {
                // line 59
                yield "<span>";
                yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "announcement.text"), "html", null, true);
                yield "</span>";
            }
            // line 60
            yield "    </div>
";
        }
        // line 62
        yield "
";
        // line 63
        yield from $this->load("partials/header.html.twig", 63)->unwrap()->yield($context);
        // line 64
        yield "
<main id=\"main\">
    ";
        // line 66
        yield from $this->unwrap()->yieldBlock('hero', $context, $blocks);
        // line 67
        yield "    ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 68
        yield "</main>

";
        // line 70
        yield from $this->load("partials/footer.html.twig", 70)->unwrap()->yield($context);
        // line 71
        yield "
<script type=\"application/json\" id=\"kk-hours\">";
        // line 72
        yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonEncodeGuarded($this->env, false, ($context["hours"] ?? null));
        yield "</script>
";
        // line 73
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/kaffekos.js", ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 73);
        // line 74
        yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", ["bottom"], "method", false, false, false, 74);
        yield "
</body>
</html>
";
        return; yield;
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_og_image(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "<meta property=\"og:image\" content=\"";
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/kk-logo.png", true), "html", null, true);
        yield "\">";
        return; yield;
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_extra(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/base.html.twig";
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
        return array (  304 => 67,  294 => 66,  284 => 52,  274 => 50,  261 => 30,  252 => 74,  250 => 73,  246 => 72,  243 => 71,  241 => 70,  237 => 68,  234 => 67,  232 => 66,  228 => 64,  226 => 63,  223 => 62,  219 => 60,  214 => 59,  203 => 58,  200 => 57,  197 => 56,  195 => 55,  189 => 52,  186 => 51,  183 => 50,  181 => 49,  174 => 45,  170 => 44,  166 => 43,  162 => 42,  158 => 41,  154 => 40,  150 => 39,  143 => 36,  141 => 35,  137 => 34,  133 => 33,  129 => 31,  127 => 30,  123 => 29,  119 => 28,  115 => 27,  110 => 25,  106 => 24,  102 => 23,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  79 => 14,  77 => 13,  75 => 12,  73 => 11,  71 => 10,  69 => 9,  67 => 8,  65 => 7,  63 => 6,  61 => 5,  59 => 4,  57 => 3,  55 => 2,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/kk.html.twig\x27 as kk %}
{% set biz = theme_var(\x27business\x27) %}
{% set social = theme_var(\x27social\x27) %}
{% set colors = theme_var(\x27colors\x27) %}
{% set hours = theme_var(\x27hours\x27) %}
{% set logo = theme_var(\x27custom_logo\x27) %}
{% set logo_first = (logo is iterable and logo|length > 0) ? logo|first : null %}
{% set logo_url = logo_first.name|default(null) ? url(\x27theme://images/logo/\x27 ~ logo_first.name) : url(\x27theme://images/kk-logo.png\x27) %}
{% set favicon = theme_var(\x27custom_favicon\x27) %}
{% set favicon_first = (favicon is iterable and favicon|length > 0) ? favicon|first : null %}
{% set favicon_url = favicon_first.name|default(null) ? url(\x27theme://images/favicon/\x27 ~ favicon_first.name) : url(\x27theme://images/kk-logo.png\x27) %}
{% set page_title = page.title and page.route != \x27/\x27 and page.route != \x27/home\x27 ? page.title ~ \x27 | \x27 ~ site.title : site.title ~ \x27 | \x27 ~ (theme_var(\x27brand.tagline\x27) ?: \x27Coffee House\x27) %}
{% set page_desc = page.metadata.description.content|default(header.hero.subtitle|default(header.banner.subtitle|default(header.summary|default(site.metadata.description)))) %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{{ page_title|e(\x27html\x27) }}</title>
    <meta name=\"description\" content=\"{{ page_desc|striptags|e(\x27html_attr\x27) }}\">
    <meta name=\"theme-color\" content=\"{{ colors.navy|default(\x27#0f2747\x27) }}\">
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\">
    <link rel=\"icon\" href=\"{{ favicon_url }}\">
    <link rel=\"apple-touch-icon\" href=\"{{ favicon_url }}\">
    <meta property=\"og:site_name\" content=\"{{ site.title|e(\x27html_attr\x27) }}\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"{{ page_title|e(\x27html_attr\x27) }}\">
    <meta property=\"og:description\" content=\"{{ page_desc|striptags|e(\x27html_attr\x27) }}\">
    <meta property=\"og:url\" content=\"{{ page.url(true, true) }}\">
    {% block og_image %}<meta property=\"og:image\" content=\"{{ url(\x27theme://images/kk-logo.png\x27, true) }}\">{% endblock %}
    <meta name=\"twitter:card\" content=\"summary_large_image\">

    <link rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin href=\"{{ url(\x27theme://fonts/fraunces-normal.woff2\x27) }}\">
    <link rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin href=\"{{ url(\x27theme://fonts/dm-sans-normal.woff2\x27) }}\">
    {% do assets.addCss(\x27theme://css/kaffekos.css\x27, 100) %}
    {{ assets.css()|raw }}
    <style>
        :root {
            --navy: {{ colors.navy|default(\x27#0f2747\x27) }};
            --red: {{ colors.red|default(\x27#ba0c2f\x27) }};
            --gold: {{ colors.gold|default(\x27#c99a5b\x27) }};
            --cream: {{ colors.cream|default(\x27#fbf6ec\x27) }};
            --sand: {{ colors.sand|default(\x27#f1e6d2\x27) }};
            --ink: {{ colors.ink|default(\x27#2b1a10\x27) }};
            --pattern: url(\x27{{ url(\x27theme://images/pattern-star.svg\x27) }}\x27);
        }
    </style>

    {% include \x27partials/jsonld.html.twig\x27 %}
    {% block head_extra %}{% endblock %}
</head>
<body class=\"{% block body_class %}{% endblock %}\">
<a class=\"skip-link\" href=\"#main\">Skip to content</a>

{% if theme_var(\x27announcement.enabled\x27) and theme_var(\x27announcement.text\x27) %}
    {% set ann_link = theme_var(\x27announcement.link\x27) %}
    <div class=\"announce\">
        {% if ann_link %}<a href=\"{{ kk.href(ann_link) }}\">{{ theme_var(\x27announcement.text\x27) }} {{ kk.icon(\x27arrow\x27, 16) }}</a>
        {% else %}<span>{{ theme_var(\x27announcement.text\x27) }}</span>{% endif %}
    </div>
{% endif %}

{% include \x27partials/header.html.twig\x27 %}

<main id=\"main\">
    {% block hero %}{% endblock %}
    {% block content %}{% endblock %}
</main>

{% include \x27partials/footer.html.twig\x27 %}

<script type=\"application/json\" id=\"kk-hours\">{{ hours|json_encode|raw }}</script>
{% do assets.addJs(\x27theme://js/kaffekos.js\x27, {group: \x27bottom\x27, loading: \x27defer\x27}) %}
{{ assets.js(\x27bottom\x27)|raw }}
</body>
</html>
", "partials/base.html.twig", "/Users/amer/Sites/kaffekos1/user/themes/kaffekos/templates/partials/base.html.twig");
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
