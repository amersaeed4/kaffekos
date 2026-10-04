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

/* forms/default/form.html.twig */
class __TwigTemplate_d89a34dd648312522cb9fc9653ad9f68_sourced extends Template
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
            'xhr' => [$this, 'block_xhr'],
            'form_classes' => [$this, 'block_form_classes'],
            'inner_markup_fields_start' => [$this, 'block_inner_markup_fields_start'],
            'inner_markup_fields_end' => [$this, 'block_inner_markup_fields_end'],
            'inner_markup_fields' => [$this, 'block_inner_markup_fields'],
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'field' => [$this, 'block_field'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
            'inner_markup_buttons_start' => [$this, 'block_inner_markup_buttons_start'],
            'inner_markup_buttons_end' => [$this, 'block_inner_markup_buttons_end'],
            'inner_markup_buttons' => [$this, 'block_inner_markup_buttons'],
            'inner_markup_button_open' => [$this, 'block_inner_markup_button_open'],
            'inner_markup_button_close' => [$this, 'block_inner_markup_button_close'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('xhr', $context, $blocks);
        // line 2
        $context["form"] = (((array_key_exists("form", $context) &&  !(null === $context["form"]))) ? ($context["form"]) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "session", [], "any", false, false, false, 2), "getFlashObject", ["form"], "method", false, false, false, 2)));
        // line 3
        $context["layout"] = (((array_key_exists("layout", $context) &&  !(null === $context["layout"]))) ? ($context["layout"]) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "layout", [], "any", true, true, false, 3) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "layout", [], "any", false, false, false, 3)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "layout", [], "any", false, false, false, 3)) : ("default"))));
        // line 4
        $context["field_layout"] = (((array_key_exists("field_layout", $context) &&  !(null === $context["field_layout"]))) ? ($context["field_layout"]) : (($context["layout"] ?? null)));
        // line 5
        yield "
<div id=\"";
        // line 6
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
        yield "-wrapper\" class=\"form-wrapper\">
";
        // line 8
        yield from $this->load("partials/form-messages.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "
";
        // line 10
        $context["scope"] = (((($tmp = (((($tmp = ($context["scope"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["scope"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "scope", [], "any", true, true, false, 10)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "scope", [], "any", false, false, false, 10)) : ("data."));
        // line 11
        $context["multipart"] = "";
        // line 12
        $context["blueprints"] = (((array_key_exists("blueprints", $context) &&  !(null === $context["blueprints"]))) ? ($context["blueprints"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "blueprint", [], "method", false, false, false, 12)));
        // line 13
        $context["method"] = Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "method", [], "any", false, false, false, 13)), "POST");
        // line 14
        $context["client_side_validation"] = (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "client_side_validation", [], "any", false, false, false, 14))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "client_side_validation", [], "any", false, false, false, 14)) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->definedDefaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 14), "form", [], "any", false, false, false, 14), "client_side_validation", [], "any", false, false, false, 14), true)));
        // line 15
        $context["inline_errors"] = (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inline_errors", [], "any", false, false, false, 15))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inline_errors", [], "any", false, false, false, 15)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 15), "form", [], "any", false, false, false, 15), "inline_errors", [false], "method", false, false, false, 15)));
        // line 16
        yield "
";
        // line 17
        $context["data"] = (((array_key_exists("data", $context) &&  !(null === $context["data"]))) ? ($context["data"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "data", [], "any", false, false, false, 17)));
        // line 18
        $context["context"] = (((array_key_exists("context", $context) &&  !(null === $context["context"]))) ? ($context["context"]) : (($context["data"] ?? null)));
        // line 19
        yield "
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 21
            yield "    ";
            if (((($context["method"] ?? null) == "POST") && (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 21) == "file"))) {
                // line 22
                yield "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 23
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 25
        yield "
";
        // line 26
        $context["action"] = (((array_key_exists("action", $context) &&  !(null === $context["action"]))) ? ($context["action"]) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "action", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "action", [], "any", false, false, false, 26)) : ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "route", [], "any", false, false, false, 26) . CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "params", [], "any", false, false, false, 26))))));
        // line 27
        $context["action"] = ((((is_string($_v0 = ($context["action"] ?? null)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1)) || (is_string($_v2 = ($context["action"] ?? null)) && is_string($_v3 = "#") && str_starts_with($_v2, $_v3)))) ? (($context["action"] ?? null)) : ((($context["base_url"] ?? null) . ($context["action"] ?? null))));
        // line 28
        $context["action"] = Twig\Extension\CoreExtension::trim(($context["action"] ?? null), "/", "right");
        // line 29
        yield "
";
        // line 30
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 31
            yield "    ";
            $context["action"] = (($context["base_url_relative"] ?? null) . "/");
        }
        // line 33
        yield "
";
        // line 34
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "keep_alive", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["plugin://form/assets/form.vendor.js", ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 35);
            // line 36
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["plugin://form/assets/form.min.js", ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 36);
        }
        // line 38
        yield "
";
        // line 39
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addInlineJs", [(((((((((((("
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: \x27" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 42
($context["grav"] ?? null), "route", [], "any", false, false, false, 42), "withoutParams", [], "method", false, false, false, 42), "toString", [true], "method", false, false, false, 42)) . "\x27,
        current_params: ") . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonEncodeGuarded($this->env, false, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 43
($context["grav"] ?? null), "route", [], "any", false, false, false, 43), "params", [], "any", false, false, false, 43))) . ",
        param_sep: \x27") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["config"] ?? null), "system", [], "any", false, false, false, 44), "param_sep", [], "any", false, false, false, 44)) . "\x27,
        base_url_relative: \x27") .         // line 45
($context["base_url_relative"] ?? null)) . "\x27,
        form_nonce: \x27") . CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["form"] ?? null), "getNonce", [], "method", false, false, false, 46)) . "\x27,
        session_timeout: ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["config"] ?? null), "system", [], "any", false, false, false, 47), "session", [], "any", false, false, false, 47), "timeout", [], "any", false, false, false, 47)) . "
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
"), ["group" => "bottom", "position" => "before", "priority" => 100]], "method", false, false, false, 39);
        // line 51
        yield "
";
        // line 53
        $context["override_form_classes"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 54
            yield "  ";
            yield from $this->unwrap()->yieldBlock('form_classes', $context, $blocks);
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        yield "
";
        // line 59
        $context["override_inner_markup_fields_start"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 60
            yield "  ";
            yield from $this->unwrap()->yieldBlock('inner_markup_fields_start', $context, $blocks);
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        yield "
";
        // line 63
        $context["override_inner_markup_fields_end"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 64
            yield "  ";
            yield from $this->unwrap()->yieldBlock('inner_markup_fields_end', $context, $blocks);
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        yield "
";
        // line 67
        $context["override_inner_markup_fields"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 68
            yield "  ";
            yield from $this->unwrap()->yieldBlock('inner_markup_fields', $context, $blocks);
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        yield "
";
        // line 85
        $context["override_inner_markup_buttons_start"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 86
            yield "  ";
            yield from $this->unwrap()->yieldBlock('inner_markup_buttons_start', $context, $blocks);
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 90
        yield "
";
        // line 91
        $context["override_inner_markup_buttons_end"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 92
            yield "  ";
            yield from $this->unwrap()->yieldBlock('inner_markup_buttons_end', $context, $blocks);
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        yield "
";
        // line 98
        $context["override_inner_markup_buttons"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 99
            yield "  ";
            yield from $this->unwrap()->yieldBlock('inner_markup_buttons', $context, $blocks);
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 159
        yield "
";
        // line 161
        yield from $this->load("forms/default/form.html.twig", 161, 2)->unwrap()->yield($context);
        // line 215
        yield "
";
        // line 216
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "forms", [], "any", false, false, false, 216), "dropzone", [], "any", false, false, false, 216), "enabled", [], "any", false, false, false, 216)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 217
            yield "<div id=\"dropzone-template\" style=\"display:none;\">
    ";
            // line 218
            yield from $this->load("forms/dropzone/template.html.twig", 218)->unwrap()->yield($context);
            // line 219
            yield "</div>
";
        }
        // line 221
        yield "</div>
";
        return; yield;
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_xhr(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 55
        yield (string) $this->escaper->escape(($context["form_outer_classes"] ?? null), "html", null, true);
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "classes", [], "any", false, false, false, 55), "html", null, true);
        return; yield;
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_fields_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_fields_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 69
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 69));
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
        foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
            // line 70
            yield "      ";
            $context["field"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->prepareFormField($context, $context["field"], $context["field_name"]);
            // line 71
            yield "      ";
            if ((($tmp = $context["field"]) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 72
                yield "        ";
                $context["value"] = (((($tmp = ($context["form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 72)], "method", false, false, false, 72)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "value", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 72)], "method", false, false, false, 72)));
                // line 73
                yield "        ";
                $context["field_templates"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 73), ($context["field_layout"] ?? null));
                // line 74
                yield "
        ";
                // line 75
                yield from $this->unwrap()->yieldBlock('inner_markup_field_open', $context, $blocks);
                // line 76
                yield "        ";
                yield from $this->unwrap()->yieldBlock('field', $context, $blocks);
                // line 79
                yield "        ";
                yield from $this->unwrap()->yieldBlock('inner_markup_field_close', $context, $blocks);
                // line 80
                yield "      ";
            }
            // line 81
            yield "    ";
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
        unset($context['_seq'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 82
        yield "  ";
        return; yield;
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_field_open(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 77
        yield "          ";
        try {
            $_v4 = $this->load(($context["field_templates"] ?? null), 77);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v4 = null;
        }
        if ($_v4) {
            yield from $_v4->unwrap()->yield($context);
        }
        // line 78
        yield "        ";
        return; yield;
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_field_close(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_buttons_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 87
        yield "  <div class=\"";
        yield (string) (((($tmp = ($context["form_button_outer_classes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["form_button_outer_classes"], "html", null, true)) : ("buttons"));
        yield "\">
  ";
        return; yield;
    }

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_buttons_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 93
        yield "  </div>
  ";
        return; yield;
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_buttons(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 100
        yield "    ";
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", true, true, false, 100) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", false, false, false, 100)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", false, false, false, 100)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "buttons", [], "any", false, false, false, 101));
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
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 102
                yield "        ";
                if (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["button"], "access", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "access", [], "any", false, false, false, 102))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 103
                    yield "
          ";
                    // line 104
                    yield from $this->unwrap()->yieldBlock('inner_markup_button_open', $context, $blocks);
                    // line 107
                    yield "
          ";
                    // line 108
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 109
                        yield "            ";
                        $context["button_url"] = (((is_string($_v5 = CoreExtension::getAttribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 109)) && is_string($_v6 = "http") && str_starts_with($_v5, $_v6))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 109)) : ((($context["base_url"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 109))));
                        // line 110
                        yield "          ";
                    }
                    // line 111
                    yield "
          ";
                    // line 112
                    yield from $this->load("forms/default/form.html.twig", 112, 1)->unwrap()->yield($context);
                    // line 149
                    yield "
          ";
                    // line 150
                    yield from $this->unwrap()->yieldBlock('inner_markup_button_close', $context, $blocks);
                    // line 153
                    yield "
        ";
                }
                // line 155
                yield "      ";
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
            unset($context['_seq'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 156
            yield "    ";
        }
        // line 157
        yield "  ";
        return; yield;
    }

    // line 104
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_button_open(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 105
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "outerclasses", [], "any", true, true, false, 105)) {
            yield "<div class=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "outerclasses", [], "any", false, false, false, 105), "html", null, true);
            yield "\">";
        }
        // line 106
        yield "          ";
        return; yield;
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_button_close(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 151
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "outerclasses", [], "any", true, true, false, 151)) {
            yield "</div>";
        }
        // line 152
        yield "          ";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/default/form.html.twig";
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
        return array (  569 => 152,  564 => 151,  557 => 150,  552 => 106,  545 => 105,  538 => 104,  533 => 157,  530 => 156,  515 => 155,  511 => 153,  509 => 150,  506 => 149,  504 => 112,  501 => 111,  498 => 110,  495 => 109,  493 => 108,  490 => 107,  488 => 104,  485 => 103,  482 => 102,  464 => 101,  461 => 100,  454 => 99,  448 => 93,  441 => 92,  433 => 87,  426 => 86,  416 => 79,  411 => 78,  400 => 77,  393 => 76,  383 => 75,  378 => 82,  363 => 81,  360 => 80,  357 => 79,  354 => 76,  352 => 75,  349 => 74,  346 => 73,  343 => 72,  340 => 71,  337 => 70,  319 => 69,  312 => 68,  302 => 64,  292 => 60,  285 => 55,  278 => 54,  268 => 1,  262 => 221,  258 => 219,  256 => 218,  253 => 217,  251 => 216,  248 => 215,  246 => 161,  243 => 159,  238 => 99,  236 => 98,  233 => 96,  228 => 92,  226 => 91,  223 => 90,  218 => 86,  216 => 85,  213 => 84,  208 => 68,  206 => 67,  203 => 66,  198 => 64,  196 => 63,  193 => 62,  188 => 60,  186 => 59,  183 => 58,  178 => 54,  176 => 53,  173 => 51,  168 => 47,  166 => 46,  164 => 45,  162 => 44,  160 => 43,  158 => 42,  154 => 39,  151 => 38,  147 => 36,  144 => 35,  142 => 34,  139 => 33,  135 => 31,  133 => 30,  130 => 29,  128 => 28,  126 => 27,  124 => 26,  121 => 25,  113 => 23,  110 => 22,  107 => 21,  103 => 20,  100 => 19,  98 => 18,  96 => 17,  93 => 16,  91 => 15,  89 => 14,  87 => 13,  85 => 12,  83 => 11,  81 => 10,  78 => 9,  76 => 8,  72 => 6,  69 => 5,  67 => 4,  65 => 3,  63 => 2,  61 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block xhr %}{% endblock %}
{% set form = form ?? grav.session.getFlashObject(\x27form\x27) %}
{% set layout = layout ?? form.layout ?? \x27default\x27 %}
{% set field_layout = field_layout ?? layout %}

<div id=\"{{ form.id }}-wrapper\" class=\"form-wrapper\">
{# Keep here for Backwards Compatibility #}
{% include \x27partials/form-messages.html.twig\x27 %}

{% set scope = scope ?: form.scope is defined ? form.scope : \x27data.\x27 %}
{% set multipart = \x27\x27 %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default(\x27POST\x27) %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|defined(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% set data = data ?? form.data %}
{% set context = context ?? data %}

{% for field in form.fields %}
    {% if (method == \x27POST\x27 and field.type == \x27file\x27) %}
        {% set multipart = \x27 enctype=\"multipart/form-data\"\x27 %}
    {% endif %}
{% endfor %}

{% set action = action ?? (form.action ?: page.route ~ uri.params) %}
{% set action = (action starts with \x27http\x27) or (action starts with \x27#\x27) ? action : base_url ~ action %}
{% set action = action|trim(\x27/\x27, \x27right\x27) %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ \x27/\x27 %}
{% endif %}

{% if form.keep_alive %}
    {% do assets.addJs(\x27plugin://form/assets/form.vendor.js\x27, { \x27group\x27: \x27bottom\x27, \x27loading\x27: \x27defer\x27 }) %}
    {% do assets.addJs(\x27plugin://form/assets/form.min.js\x27, { \x27group\x27: \x27bottom\x27, \x27loading\x27: \x27defer\x27 }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: \x27\" ~ grav.route.withoutParams().toString(true) ~\"\x27,
        current_params: \" ~ grav.route.params|json_encode ~ \",
        param_sep: \x27\" ~ config.system.param_sep ~ \"\x27,
        base_url_relative: \x27\" ~ base_url_relative ~ \"\x27,
        form_nonce: \x27\" ~ form.getNonce() ~ \"\x27,
        session_timeout: \" ~ config.system.session.timeout ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {\x27group\x27: \x27bottom\x27, \x27position\x27: \x27before\x27, \x27priority\x27: 100}) %}

{# Backwards Compatibility for block overrides #}
{% set override_form_classes %}
  {% block form_classes -%}
    {{ form_outer_classes }} {{ form.classes }}
  {%- endblock %}
{% endset %}

{% set override_inner_markup_fields_start %}
  {% block inner_markup_fields_start %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields_end %}
  {% block inner_markup_fields_end %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields %}
  {% block inner_markup_fields %}
    {% for field_name, field in form.fields %}
      {% set field = prepare_form_field(field, field_name) %}
      {% if field %}
        {% set value = form ? form.value(field.name) : data.value(field.name) %}
        {% set field_templates = include_form_field(field.type, field_layout) %}

        {% block inner_markup_field_open %}{% endblock %}
        {% block field %}
          {% include field_templates ignore missing %}
        {% endblock %}
        {% block inner_markup_field_close %}{% endblock %}
      {% endif %}
    {% endfor %}
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_start %}
  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: \x27buttons\x27}}\">
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_end %}
  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}
{% endset %}

{# BC-friendly override point for the whole buttons loop, mirroring the fields pattern above #}
{% set override_inner_markup_buttons %}
  {% block inner_markup_buttons %}
    {% if form.isEnabled() ?? true %}
      {% for button in form.buttons %}
        {% if not button.access or authorize(button.access) %}

          {% block inner_markup_button_open %}
            {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}
          {% endblock %}

          {% if button.url %}
            {% set button_url = button.url starts with \x27http\x27 ? button.url : base_url ~ button.url %}
          {% endif %}

          {% embed \x27forms/layouts/button.html.twig\x27 %}
            {% block embed_button_core %}
              {% if button.id %}id=\"{{ button.id }}\"{% endif %}
              {% if button.disabled %}disabled=\"disabled\"{% endif %}
              {% if button.name %}
                name=\"{{ button.name }}\"
              {% else %}
                {% if button.task %}name=\"task\" value=\"{{ button.task }}\"{% endif %}
              {% endif %}
              type=\"{{ button.type|default(\x27submit\x27) }}\"
              {% if button.attributes is defined %}
                {% for key,attribute in button.attributes %}
                  {% if attribute|of_type(\x27array\x27) %}
                    {{ attribute.name }}=\"{{ attribute.value|e(\x27html_attr\x27) }}\"
                  {% else %}
                    {{ key }}=\"{{ attribute|e(\x27html_attr\x27) }}\"
                  {% endif %}
                {% endfor %}
              {% endif %}
            {% endblock %}

            {% block embed_button_classes %}
              {% block button_classes %}
                class=\"{{ form_button_classes ?: \x27button\x27 }} {{ button.classes }}\"
              {% endblock %}
            {% endblock %}

            {% block embed_button_content -%}
              {%- set button_value = button.value|t|default(\x27Submit\x27) -%}
              {%- if button.html -%}
                {{- button_value|trim|raw -}}
              {%- else -%}
                {{- button_value|trim|e -}}
              {%- endif -%}
            {%- endblock %}

          {% endembed %}

          {% block inner_markup_button_close %}
            {% if button.outerclasses is defined %}</div>{% endif %}
          {% endblock %}

        {% endif %}
      {% endfor %}
    {% endif %}
  {% endblock %}
{% endset %}

{# Embed for HTML layout #}
{% embed \x27forms/layouts/form.html.twig\x27 %}

  {% block embed_form_core %}
    name=\"{{ form.name }}\"
    action=\"{{ action }}\"
    method=\"{{ method }}\"{{ multipart|raw }}
    id=\"{{ form.id|default(form.name|hyphenize) }}\"
    {% if form.novalidate %}novalidate{% endif %}
    {% if form.xhr_submit %}data-xhr-enabled=\"true\"{% endif %}
    {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
    {% if form.attributes is defined %}
      {% for key,attribute in form.attributes %}
        {% if attribute|of_type(\x27array\x27) %}
          {{ attribute.name }}=\"{{ attribute.value|e(\x27html_attr\x27) }}\"
        {% else %}
          {{ key }}=\"{{ attribute|e(\x27html_attr\x27) }}\"
        {% endif %}
      {% endfor %}
    {% endif %}
  {% endblock %}

  {% block embed_form_classes -%}
    class=\"{{ parent() }} {{ override_form_classes|trim }}\"
  {%- endblock %}

  {% block embed_form_custom_attributes %}
    {% for k, v in blueprints.form.attributes %}
      {{ k }}=\"{{ v|e }}\"
    {% endfor %}
  {% endblock %}

  {% block embed_fields %}
    {{ override_inner_markup_fields_start|raw }}
    {{ override_inner_markup_fields|raw }}

    {% if form.isEnabled() ?? true %}
    {% include include_form_field(\x27formname\x27, field_layout, \x27hidden\x27) %}
    {% include include_form_field(\x27formtask\x27, field_layout, \x27hidden\x27) %}
    {% include include_form_field(\x27uniqueid\x27, field_layout, \x27hidden\x27) %}
    {% include include_form_field(\x27nonce\x27, field_layout, \x27hidden\x27) %}
    {% endif %}

    {{ override_inner_markup_fields_end|raw }}
  {% endblock %}

  {% block embed_buttons %}
    {{ override_inner_markup_buttons_start|raw }}

    {{ override_inner_markup_buttons|raw }}

    {{ override_inner_markup_buttons_end }}
  {% endblock %}

{% endembed %}

{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include \x27forms/dropzone/template.html.twig\x27 %}
</div>
{% endif %}
</div>
", "forms/default/form.html.twig", "/Users/amer/Sites/kaffekos1/user/plugins/form/templates/forms/default/form.html.twig");
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


/* forms/default/form.html.twig */
class __TwigTemplate_d89a34dd648312522cb9fc9653ad9f68_sourced___1 extends Template
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
            'embed_button_core' => [$this, 'block_embed_button_core'],
            'embed_button_classes' => [$this, 'block_embed_button_classes'],
            'button_classes' => [$this, 'block_button_classes'],
            'embed_button_content' => [$this, 'block_embed_button_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 112
        return $this->parent ??= $this->load("forms/layouts/button.html.twig", 112);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("forms/layouts/button.html.twig", 112);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 113
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_button_core(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 114
        yield "              ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "id", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "id=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "id", [], "any", false, false, false, 114), "html", null, true);
            yield "\"";
        }
        // line 115
        yield "              ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "disabled", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled=\"disabled\"";
        }
        // line 116
        yield "              ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "name", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 117
            yield "                name=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "name", [], "any", false, false, false, 117), "html", null, true);
            yield "\"
              ";
        } else {
            // line 119
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "task", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "name=\"task\" value=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "task", [], "any", false, false, false, 119), "html", null, true);
                yield "\"";
            }
            // line 120
            yield "              ";
        }
        // line 121
        yield "              type=\"";
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "type", [], "any", true, true, false, 121)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "type", [], "any", false, false, false, 121), "submit")) : ("submit")), "html", null, true);
        yield "\"
              ";
        // line 122
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "attributes", [], "any", true, true, false, 122)) {
            // line 123
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "attributes", [], "any", false, false, false, 123));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 124
                yield "                  ";
                if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->ofTypeFunc($context["attribute"], "array")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 125
                    yield "                    ";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 125), "html", null, true);
                    yield "=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 125), "html_attr");
                    yield "\"
                  ";
                } else {
                    // line 127
                    yield "                    ";
                    yield (string) $this->escaper->escape($context["key"], "html", null, true);
                    yield "=\"";
                    yield (string) $this->escaper->escape($context["attribute"], "html_attr");
                    yield "\"
                  ";
                }
                // line 129
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 130
            yield "              ";
        }
        // line 131
        yield "            ";
        return; yield;
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_button_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 134
        yield "              ";
        yield from $this->unwrap()->yieldBlock('button_classes', $context, $blocks);
        // line 137
        yield "            ";
        return; yield;
    }

    // line 134
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 135
        yield "                class=\"";
        yield (string) (((($tmp = ($context["form_button_classes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["form_button_classes"], "html", null, true)) : ("button"));
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "classes", [], "any", false, false, false, 135), "html", null, true);
        yield "\"
              ";
        return; yield;
    }

    // line 139
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_button_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 140
        $context["button_value"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "value", [], "any", false, false, false, 140)), "Submit");
        // line 141
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "html", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 142
            yield (string) Twig\Extension\CoreExtension::trim(($context["button_value"] ?? null));
        } else {
            // line 144
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::trim(($context["button_value"] ?? null)));
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/default/form.html.twig";
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
        return array (  1020 => 144,  1017 => 142,  1015 => 141,  1013 => 140,  1006 => 139,  996 => 135,  989 => 134,  984 => 137,  981 => 134,  974 => 133,  969 => 131,  966 => 130,  959 => 129,  951 => 127,  943 => 125,  940 => 124,  935 => 123,  933 => 122,  928 => 121,  925 => 120,  918 => 119,  912 => 117,  909 => 116,  904 => 115,  897 => 114,  890 => 113,  879 => 112,  569 => 152,  564 => 151,  557 => 150,  552 => 106,  545 => 105,  538 => 104,  533 => 157,  530 => 156,  515 => 155,  511 => 153,  509 => 150,  506 => 149,  504 => 112,  501 => 111,  498 => 110,  495 => 109,  493 => 108,  490 => 107,  488 => 104,  485 => 103,  482 => 102,  464 => 101,  461 => 100,  454 => 99,  448 => 93,  441 => 92,  433 => 87,  426 => 86,  416 => 79,  411 => 78,  400 => 77,  393 => 76,  383 => 75,  378 => 82,  363 => 81,  360 => 80,  357 => 79,  354 => 76,  352 => 75,  349 => 74,  346 => 73,  343 => 72,  340 => 71,  337 => 70,  319 => 69,  312 => 68,  302 => 64,  292 => 60,  285 => 55,  278 => 54,  268 => 1,  262 => 221,  258 => 219,  256 => 218,  253 => 217,  251 => 216,  248 => 215,  246 => 161,  243 => 159,  238 => 99,  236 => 98,  233 => 96,  228 => 92,  226 => 91,  223 => 90,  218 => 86,  216 => 85,  213 => 84,  208 => 68,  206 => 67,  203 => 66,  198 => 64,  196 => 63,  193 => 62,  188 => 60,  186 => 59,  183 => 58,  178 => 54,  176 => 53,  173 => 51,  168 => 47,  166 => 46,  164 => 45,  162 => 44,  160 => 43,  158 => 42,  154 => 39,  151 => 38,  147 => 36,  144 => 35,  142 => 34,  139 => 33,  135 => 31,  133 => 30,  130 => 29,  128 => 28,  126 => 27,  124 => 26,  121 => 25,  113 => 23,  110 => 22,  107 => 21,  103 => 20,  100 => 19,  98 => 18,  96 => 17,  93 => 16,  91 => 15,  89 => 14,  87 => 13,  85 => 12,  83 => 11,  81 => 10,  78 => 9,  76 => 8,  72 => 6,  69 => 5,  67 => 4,  65 => 3,  63 => 2,  61 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block xhr %}{% endblock %}
{% set form = form ?? grav.session.getFlashObject(\x27form\x27) %}
{% set layout = layout ?? form.layout ?? \x27default\x27 %}
{% set field_layout = field_layout ?? layout %}

<div id=\"{{ form.id }}-wrapper\" class=\"form-wrapper\">
{# Keep here for Backwards Compatibility #}
{% include \x27partials/form-messages.html.twig\x27 %}

{% set scope = scope ?: form.scope is defined ? form.scope : \x27data.\x27 %}
{% set multipart = \x27\x27 %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default(\x27POST\x27) %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|defined(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% set data = data ?? form.data %}
{% set context = context ?? data %}

{% for field in form.fields %}
    {% if (method == \x27POST\x27 and field.type == \x27file\x27) %}
        {% set multipart = \x27 enctype=\"multipart/form-data\"\x27 %}
    {% endif %}
{% endfor %}

{% set action = action ?? (form.action ?: page.route ~ uri.params) %}
{% set action = (action starts with \x27http\x27) or (action starts with \x27#\x27) ? action : base_url ~ action %}
{% set action = action|trim(\x27/\x27, \x27right\x27) %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ \x27/\x27 %}
{% endif %}

{% if form.keep_alive %}
    {% do assets.addJs(\x27plugin://form/assets/form.vendor.js\x27, { \x27group\x27: \x27bottom\x27, \x27loading\x27: \x27defer\x27 }) %}
    {% do assets.addJs(\x27plugin://form/assets/form.min.js\x27, { \x27group\x27: \x27bottom\x27, \x27loading\x27: \x27defer\x27 }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: \x27\" ~ grav.route.withoutParams().toString(true) ~\"\x27,
        current_params: \" ~ grav.route.params|json_encode ~ \",
        param_sep: \x27\" ~ config.system.param_sep ~ \"\x27,
        base_url_relative: \x27\" ~ base_url_relative ~ \"\x27,
        form_nonce: \x27\" ~ form.getNonce() ~ \"\x27,
        session_timeout: \" ~ config.system.session.timeout ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {\x27group\x27: \x27bottom\x27, \x27position\x27: \x27before\x27, \x27priority\x27: 100}) %}

{# Backwards Compatibility for block overrides #}
{% set override_form_classes %}
  {% block form_classes -%}
    {{ form_outer_classes }} {{ form.classes }}
  {%- endblock %}
{% endset %}

{% set override_inner_markup_fields_start %}
  {% block inner_markup_fields_start %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields_end %}
  {% block inner_markup_fields_end %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields %}
  {% block inner_markup_fields %}
    {% for field_name, field in form.fields %}
      {% set field = prepare_form_field(field, field_name) %}
      {% if field %}
        {% set value = form ? form.value(field.name) : data.value(field.name) %}
        {% set field_templates = include_form_field(field.type, field_layout) %}

        {% block inner_markup_field_open %}{% endblock %}
        {% block field %}
          {% include field_templates ignore missing %}
        {% endblock %}
        {% block inner_markup_field_close %}{% endblock %}
      {% endif %}
    {% endfor %}
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_start %}
  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: \x27buttons\x27}}\">
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_end %}
  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}
{% endset %}

{# BC-friendly override point for the whole buttons loop, mirroring the fields pattern above #}
{% set override_inner_markup_buttons %}
  {% block inner_markup_buttons %}
    {% if form.isEnabled() ?? true %}
      {% for button in form.buttons %}
        {% if not button.access or authorize(button.access) %}

          {% block inner_markup_button_open %}
            {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}
          {% endblock %}

          {% if button.url %}
            {% set button_url = button.url starts with \x27http\x27 ? button.url : base_url ~ button.url %}
          {% endif %}

          {% embed \x27forms/layouts/button.html.twig\x27 %}
            {% block embed_button_core %}
              {% if button.id %}id=\"{{ button.id }}\"{% endif %}
              {% if button.disabled %}disabled=\"disabled\"{% endif %}
              {% if button.name %}
                name=\"{{ button.name }}\"
              {% else %}
                {% if button.task %}name=\"task\" value=\"{{ button.task }}\"{% endif %}
              {% endif %}
              type=\"{{ button.type|default(\x27submit\x27) }}\"
              {% if button.attributes is defined %}
                {% for key,attribute in button.attributes %}
                  {% if attribute|of_type(\x27array\x27) %}
                    {{ attribute.name }}=\"{{ attribute.value|e(\x27html_attr\x27) }}\"
                  {% else %}
                    {{ key }}=\"{{ attribute|e(\x27html_attr\x27) }}\"
                  {% endif %}
                {% endfor %}
              {% endif %}
            {% endblock %}

            {% block embed_button_classes %}
              {% block button_classes %}
                class=\"{{ form_button_classes ?: \x27button\x27 }} {{ button.classes }}\"
              {% endblock %}
            {% endblock %}

            {% block embed_button_content -%}
              {%- set button_value = button.value|t|default(\x27Submit\x27) -%}
              {%- if button.html -%}
                {{- button_value|trim|raw -}}
              {%- else -%}
                {{- button_value|trim|e -}}
              {%- endif -%}
            {%- endblock %}

          {% endembed %}

          {% block inner_markup_button_close %}
            {% if button.outerclasses is defined %}</div>{% endif %}
          {% endblock %}

        {% endif %}
      {% endfor %}
    {% endif %}
  {% endblock %}
{% endset %}

{# Embed for HTML layout #}
{% embed \x27forms/layouts/form.html.twig\x27 %}

  {% block embed_form_core %}
    name=\"{{ form.name }}\"
    action=\"{{ action }}\"
    method=\"{{ method }}\"{{ multipart|raw }}
    id=\"{{ form.id|default(form.name|hyphenize) }}\"
    {% if form.novalidate %}novalidate{% endif %}
    {% if form.xhr_submit %}data-xhr-enabled=\"true\"{% endif %}
    {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
    {% if form.attributes is defined %}
      {% for key,attribute in form.attributes %}
        {% if attribute|of_type(\x27array\x27) %}
          {{ attribute.name }}=\"{{ attribute.value|e(\x27html_attr\x27) }}\"
        {% else %}
          {{ key }}=\"{{ attribute|e(\x27html_attr\x27) }}\"
        {% endif %}
      {% endfor %}
    {% endif %}
  {% endblock %}

  {% block embed_form_classes -%}
    class=\"{{ parent() }} {{ override_form_classes|trim }}\"
  {%- endblock %}

  {% block embed_form_custom_attributes %}
    {% for k, v in blueprints.form.attributes %}
      {{ k }}=\"{{ v|e }}\"
    {% endfor %}
  {% endblock %}

  {% block embed_fields %}
    {{ override_inner_markup_fields_start|raw }}
    {{ override_inner_markup_fields|raw }}

    {% if form.isEnabled() ?? true %}
    {% include include_form_field(\x27formname\x27, field_layout, \x27hidden\x27) %}
    {% include include_form_field(\x27formtask\x27, field_layout, \x27hidden\x27) %}
    {% include include_form_field(\x27uniqueid\x27, field_layout, \x27hidden\x27) %}
    {% include include_form_field(\x27nonce\x27, field_layout, \x27hidden\x27) %}
    {% endif %}

    {{ override_inner_markup_fields_end|raw }}
  {% endblock %}

  {% block embed_buttons %}
    {{ override_inner_markup_buttons_start|raw }}

    {{ override_inner_markup_buttons|raw }}

    {{ override_inner_markup_buttons_end }}
  {% endblock %}

{% endembed %}

{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include \x27forms/dropzone/template.html.twig\x27 %}
</div>
{% endif %}
</div>
", "forms/default/form.html.twig", "/Users/amer/Sites/kaffekos1/user/plugins/form/templates/forms/default/form.html.twig");
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


/* forms/default/form.html.twig */
class __TwigTemplate_d89a34dd648312522cb9fc9653ad9f68_sourced___2 extends Template
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
            'embed_form_core' => [$this, 'block_embed_form_core'],
            'embed_form_classes' => [$this, 'block_embed_form_classes'],
            'embed_form_custom_attributes' => [$this, 'block_embed_form_custom_attributes'],
            'embed_fields' => [$this, 'block_embed_fields'],
            'embed_buttons' => [$this, 'block_embed_buttons'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 161
        return $this->parent ??= $this->load("forms/layouts/form.html.twig", 161);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("forms/layouts/form.html.twig", 161);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 163
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_form_core(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 164
        yield "    name=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 164), "html", null, true);
        yield "\"
    action=\"";
        // line 165
        yield (string) $this->escaper->escape(($context["action"] ?? null), "html", null, true);
        yield "\"
    method=\"";
        // line 166
        yield (string) $this->escaper->escape(($context["method"] ?? null), "html", null, true);
        yield "\"";
        yield (string) ($context["multipart"] ?? null);
        yield "
    id=\"";
        // line 167
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", true, true, false, 167)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 167), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("hyphen", CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 167)))) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("hyphen", CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 167)))), "html", null, true);
        yield "\"
    ";
        // line 168
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "novalidate", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "novalidate";
        }
        // line 169
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "xhr_submit", [], "any", false, false, false, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "data-xhr-enabled=\"true\"";
        }
        // line 170
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "keep_alive", [], "any", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "data-grav-keepalive=\"true\"";
        }
        // line 171
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "attributes", [], "any", true, true, false, 171)) {
            // line 172
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "attributes", [], "any", false, false, false, 172));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 173
                yield "        ";
                if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->ofTypeFunc($context["attribute"], "array")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 174
                    yield "          ";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 174), "html", null, true);
                    yield "=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 174), "html_attr");
                    yield "\"
        ";
                } else {
                    // line 176
                    yield "          ";
                    yield (string) $this->escaper->escape($context["key"], "html", null, true);
                    yield "=\"";
                    yield (string) $this->escaper->escape($context["attribute"], "html_attr");
                    yield "\"
        ";
                }
                // line 178
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 179
            yield "    ";
        }
        // line 180
        yield "  ";
        return; yield;
    }

    // line 182
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_form_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 183
        yield "class=\"";
        yield from $this->yieldParentBlock("embed_form_classes", $context, $blocks);
        yield " ";
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::trim(($context["override_form_classes"] ?? null)), "html", null, true);
        yield "\"";
        return; yield;
    }

    // line 186
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_form_custom_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 187
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["blueprints"] ?? null), "form", [], "any", false, false, false, 187), "attributes", [], "any", false, false, false, 187));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 188
            yield "      ";
            yield (string) $this->escaper->escape($context["k"], "html", null, true);
            yield "=\"";
            yield (string) $this->escaper->escape($context["v"]);
            yield "\"
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 190
        yield "  ";
        return; yield;
    }

    // line 192
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 193
        yield "    ";
        yield (string) ($context["override_inner_markup_fields_start"] ?? null);
        yield "
    ";
        // line 194
        yield (string) ($context["override_inner_markup_fields"] ?? null);
        yield "

    ";
        // line 196
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", true, true, false, 196) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", false, false, false, 196)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", false, false, false, 196)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 197
            yield "    ";
            yield from $this->load($this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField("formname", ($context["field_layout"] ?? null), "hidden"), 197)->unwrap()->yield($context);
            // line 198
            yield "    ";
            yield from $this->load($this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField("formtask", ($context["field_layout"] ?? null), "hidden"), 198)->unwrap()->yield($context);
            // line 199
            yield "    ";
            yield from $this->load($this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField("uniqueid", ($context["field_layout"] ?? null), "hidden"), 199)->unwrap()->yield($context);
            // line 200
            yield "    ";
            yield from $this->load($this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField("nonce", ($context["field_layout"] ?? null), "hidden"), 200)->unwrap()->yield($context);
            // line 201
            yield "    ";
        }
        // line 202
        yield "
    ";
        // line 203
        yield (string) ($context["override_inner_markup_fields_end"] ?? null);
        yield "
  ";
        return; yield;
    }

    // line 206
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_buttons(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 207
        yield "    ";
        yield (string) ($context["override_inner_markup_buttons_start"] ?? null);
        yield "

    ";
        // line 209
        yield (string) ($context["override_inner_markup_buttons"] ?? null);
        yield "

    ";
        // line 211
        yield (string) $this->escaper->escape(($context["override_inner_markup_buttons_end"] ?? null), "html", null, true);
        yield "
  ";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/default/form.html.twig";
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
        return array (  1532 => 211,  1527 => 209,  1521 => 207,  1514 => 206,  1507 => 203,  1504 => 202,  1501 => 201,  1498 => 200,  1495 => 199,  1492 => 198,  1489 => 197,  1487 => 196,  1482 => 194,  1477 => 193,  1470 => 192,  1465 => 190,  1453 => 188,  1448 => 187,  1441 => 186,  1432 => 183,  1425 => 182,  1420 => 180,  1417 => 179,  1410 => 178,  1402 => 176,  1394 => 174,  1391 => 173,  1386 => 172,  1383 => 171,  1378 => 170,  1373 => 169,  1369 => 168,  1365 => 167,  1359 => 166,  1355 => 165,  1350 => 164,  1343 => 163,  1332 => 161,  1020 => 144,  1017 => 142,  1015 => 141,  1013 => 140,  1006 => 139,  996 => 135,  989 => 134,  984 => 137,  981 => 134,  974 => 133,  969 => 131,  966 => 130,  959 => 129,  951 => 127,  943 => 125,  940 => 124,  935 => 123,  933 => 122,  928 => 121,  925 => 120,  918 => 119,  912 => 117,  909 => 116,  904 => 115,  897 => 114,  890 => 113,  879 => 112,  569 => 152,  564 => 151,  557 => 150,  552 => 106,  545 => 105,  538 => 104,  533 => 157,  530 => 156,  515 => 155,  511 => 153,  509 => 150,  506 => 149,  504 => 112,  501 => 111,  498 => 110,  495 => 109,  493 => 108,  490 => 107,  488 => 104,  485 => 103,  482 => 102,  464 => 101,  461 => 100,  454 => 99,  448 => 93,  441 => 92,  433 => 87,  426 => 86,  416 => 79,  411 => 78,  400 => 77,  393 => 76,  383 => 75,  378 => 82,  363 => 81,  360 => 80,  357 => 79,  354 => 76,  352 => 75,  349 => 74,  346 => 73,  343 => 72,  340 => 71,  337 => 70,  319 => 69,  312 => 68,  302 => 64,  292 => 60,  285 => 55,  278 => 54,  268 => 1,  262 => 221,  258 => 219,  256 => 218,  253 => 217,  251 => 216,  248 => 215,  246 => 161,  243 => 159,  238 => 99,  236 => 98,  233 => 96,  228 => 92,  226 => 91,  223 => 90,  218 => 86,  216 => 85,  213 => 84,  208 => 68,  206 => 67,  203 => 66,  198 => 64,  196 => 63,  193 => 62,  188 => 60,  186 => 59,  183 => 58,  178 => 54,  176 => 53,  173 => 51,  168 => 47,  166 => 46,  164 => 45,  162 => 44,  160 => 43,  158 => 42,  154 => 39,  151 => 38,  147 => 36,  144 => 35,  142 => 34,  139 => 33,  135 => 31,  133 => 30,  130 => 29,  128 => 28,  126 => 27,  124 => 26,  121 => 25,  113 => 23,  110 => 22,  107 => 21,  103 => 20,  100 => 19,  98 => 18,  96 => 17,  93 => 16,  91 => 15,  89 => 14,  87 => 13,  85 => 12,  83 => 11,  81 => 10,  78 => 9,  76 => 8,  72 => 6,  69 => 5,  67 => 4,  65 => 3,  63 => 2,  61 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block xhr %}{% endblock %}
{% set form = form ?? grav.session.getFlashObject(\x27form\x27) %}
{% set layout = layout ?? form.layout ?? \x27default\x27 %}
{% set field_layout = field_layout ?? layout %}

<div id=\"{{ form.id }}-wrapper\" class=\"form-wrapper\">
{# Keep here for Backwards Compatibility #}
{% include \x27partials/form-messages.html.twig\x27 %}

{% set scope = scope ?: form.scope is defined ? form.scope : \x27data.\x27 %}
{% set multipart = \x27\x27 %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default(\x27POST\x27) %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|defined(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% set data = data ?? form.data %}
{% set context = context ?? data %}

{% for field in form.fields %}
    {% if (method == \x27POST\x27 and field.type == \x27file\x27) %}
        {% set multipart = \x27 enctype=\"multipart/form-data\"\x27 %}
    {% endif %}
{% endfor %}

{% set action = action ?? (form.action ?: page.route ~ uri.params) %}
{% set action = (action starts with \x27http\x27) or (action starts with \x27#\x27) ? action : base_url ~ action %}
{% set action = action|trim(\x27/\x27, \x27right\x27) %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ \x27/\x27 %}
{% endif %}

{% if form.keep_alive %}
    {% do assets.addJs(\x27plugin://form/assets/form.vendor.js\x27, { \x27group\x27: \x27bottom\x27, \x27loading\x27: \x27defer\x27 }) %}
    {% do assets.addJs(\x27plugin://form/assets/form.min.js\x27, { \x27group\x27: \x27bottom\x27, \x27loading\x27: \x27defer\x27 }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: \x27\" ~ grav.route.withoutParams().toString(true) ~\"\x27,
        current_params: \" ~ grav.route.params|json_encode ~ \",
        param_sep: \x27\" ~ config.system.param_sep ~ \"\x27,
        base_url_relative: \x27\" ~ base_url_relative ~ \"\x27,
        form_nonce: \x27\" ~ form.getNonce() ~ \"\x27,
        session_timeout: \" ~ config.system.session.timeout ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {\x27group\x27: \x27bottom\x27, \x27position\x27: \x27before\x27, \x27priority\x27: 100}) %}

{# Backwards Compatibility for block overrides #}
{% set override_form_classes %}
  {% block form_classes -%}
    {{ form_outer_classes }} {{ form.classes }}
  {%- endblock %}
{% endset %}

{% set override_inner_markup_fields_start %}
  {% block inner_markup_fields_start %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields_end %}
  {% block inner_markup_fields_end %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields %}
  {% block inner_markup_fields %}
    {% for field_name, field in form.fields %}
      {% set field = prepare_form_field(field, field_name) %}
      {% if field %}
        {% set value = form ? form.value(field.name) : data.value(field.name) %}
        {% set field_templates = include_form_field(field.type, field_layout) %}

        {% block inner_markup_field_open %}{% endblock %}
        {% block field %}
          {% include field_templates ignore missing %}
        {% endblock %}
        {% block inner_markup_field_close %}{% endblock %}
      {% endif %}
    {% endfor %}
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_start %}
  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: \x27buttons\x27}}\">
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_end %}
  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}
{% endset %}

{# BC-friendly override point for the whole buttons loop, mirroring the fields pattern above #}
{% set override_inner_markup_buttons %}
  {% block inner_markup_buttons %}
    {% if form.isEnabled() ?? true %}
      {% for button in form.buttons %}
        {% if not button.access or authorize(button.access) %}

          {% block inner_markup_button_open %}
            {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}
          {% endblock %}

          {% if button.url %}
            {% set button_url = button.url starts with \x27http\x27 ? button.url : base_url ~ button.url %}
          {% endif %}

          {% embed \x27forms/layouts/button.html.twig\x27 %}
            {% block embed_button_core %}
              {% if button.id %}id=\"{{ button.id }}\"{% endif %}
              {% if button.disabled %}disabled=\"disabled\"{% endif %}
              {% if button.name %}
                name=\"{{ button.name }}\"
              {% else %}
                {% if button.task %}name=\"task\" value=\"{{ button.task }}\"{% endif %}
              {% endif %}
              type=\"{{ button.type|default(\x27submit\x27) }}\"
              {% if button.attributes is defined %}
                {% for key,attribute in button.attributes %}
                  {% if attribute|of_type(\x27array\x27) %}
                    {{ attribute.name }}=\"{{ attribute.value|e(\x27html_attr\x27) }}\"
                  {% else %}
                    {{ key }}=\"{{ attribute|e(\x27html_attr\x27) }}\"
                  {% endif %}
                {% endfor %}
              {% endif %}
            {% endblock %}

            {% block embed_button_classes %}
              {% block button_classes %}
                class=\"{{ form_button_classes ?: \x27button\x27 }} {{ button.classes }}\"
              {% endblock %}
            {% endblock %}

            {% block embed_button_content -%}
              {%- set button_value = button.value|t|default(\x27Submit\x27) -%}
              {%- if button.html -%}
                {{- button_value|trim|raw -}}
              {%- else -%}
                {{- button_value|trim|e -}}
              {%- endif -%}
            {%- endblock %}

          {% endembed %}

          {% block inner_markup_button_close %}
            {% if button.outerclasses is defined %}</div>{% endif %}
          {% endblock %}

        {% endif %}
      {% endfor %}
    {% endif %}
  {% endblock %}
{% endset %}

{# Embed for HTML layout #}
{% embed \x27forms/layouts/form.html.twig\x27 %}

  {% block embed_form_core %}
    name=\"{{ form.name }}\"
    action=\"{{ action }}\"
    method=\"{{ method }}\"{{ multipart|raw }}
    id=\"{{ form.id|default(form.name|hyphenize) }}\"
    {% if form.novalidate %}novalidate{% endif %}
    {% if form.xhr_submit %}data-xhr-enabled=\"true\"{% endif %}
    {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
    {% if form.attributes is defined %}
      {% for key,attribute in form.attributes %}
        {% if attribute|of_type(\x27array\x27) %}
          {{ attribute.name }}=\"{{ attribute.value|e(\x27html_attr\x27) }}\"
        {% else %}
          {{ key }}=\"{{ attribute|e(\x27html_attr\x27) }}\"
        {% endif %}
      {% endfor %}
    {% endif %}
  {% endblock %}

  {% block embed_form_classes -%}
    class=\"{{ parent() }} {{ override_form_classes|trim }}\"
  {%- endblock %}

  {% block embed_form_custom_attributes %}
    {% for k, v in blueprints.form.attributes %}
      {{ k }}=\"{{ v|e }}\"
    {% endfor %}
  {% endblock %}

  {% block embed_fields %}
    {{ override_inner_markup_fields_start|raw }}
    {{ override_inner_markup_fields|raw }}

    {% if form.isEnabled() ?? true %}
    {% include include_form_field(\x27formname\x27, field_layout, \x27hidden\x27) %}
    {% include include_form_field(\x27formtask\x27, field_layout, \x27hidden\x27) %}
    {% include include_form_field(\x27uniqueid\x27, field_layout, \x27hidden\x27) %}
    {% include include_form_field(\x27nonce\x27, field_layout, \x27hidden\x27) %}
    {% endif %}

    {{ override_inner_markup_fields_end|raw }}
  {% endblock %}

  {% block embed_buttons %}
    {{ override_inner_markup_buttons_start|raw }}

    {{ override_inner_markup_buttons|raw }}

    {{ override_inner_markup_buttons_end }}
  {% endblock %}

{% endembed %}

{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include \x27forms/dropzone/template.html.twig\x27 %}
</div>
{% endif %}
</div>
", "forms/default/form.html.twig", "/Users/amer/Sites/kaffekos1/user/plugins/form/templates/forms/default/form.html.twig");
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
