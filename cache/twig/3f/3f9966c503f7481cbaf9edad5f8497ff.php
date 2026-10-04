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

/* forms/default/field.html.twig */
class __TwigTemplate_f1a63776aa2b64f26899f4f4cf9a9f6f_sourced extends Template
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

        $this->ensureTraitsAllowed();

        // line 14
        $_trait_0 = $this->load("forms/layouts/field-variables.html.twig", 14);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."forms/layouts/field-variables.html.twig".'" cannot be used as a trait.', 14, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'field_override_variables_before' => [$this, 'block_field_override_variables_before'],
                'outer_field_classes' => [$this, 'block_outer_field_classes'],
                'global_attributes' => [$this, 'block_global_attributes'],
                'input_attributes' => [$this, 'block_input_attributes'],
            ]
        );
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 13
        return $this->load((((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 13), "ignore", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("forms/default/field-ignored.html.twig") : ("forms/layouts/field.html.twig")), 13);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 18), "ignore", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            $context["field_name"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 19)));
            // line 20
            $context["vertical"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 20) == "vertical");
            // line 22
            if (( !(($tmp = ($context["blueprints"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["blueprints"] ?? null), "schema", [], "any", false, true, false, 22), "type", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 22)], "method", false, true, false, 22), "input@", [], "array", true, true, false, 22) &&  !(null === (($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["blueprints"] ?? null), "schema", [], "any", false, false, false, 22), "type", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 22)], "method", false, false, false, 22)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["input@"] ?? null) : null)))) ? ((($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["blueprints"] ?? null), "schema", [], "any", false, false, false, 22), "type", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 22)], "method", false, false, false, 22)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["input@"] ?? null) : null)) : (true)) === true))) {
                // line 23
                $context["default"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "default", [], "any", false, false, false, 23);
                // line 24
                $context["toggleable"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", true, true, false, 24) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", false, false, false, 24)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "toggleable", [], "any", false, false, false, 24)) : (false));
                // line 25
                if ((($tmp = ($context["toggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 26
                    $context["originalValue"] = (((array_key_exists("originalValue", $context) &&  !(null === $context["originalValue"]))) ? ($context["originalValue"]) : (($context["value"] ?? null)));
                    // line 27
                    $context["toggleableChecked"] =  !(null === ($context["originalValue"] ?? null));
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 28
($context["field"] ?? null), "overridable", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 29
                    $context["toggleable"] = true;
                    // line 30
                    $context["default"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getDefaultValue", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 30)], "method", true, true, false, 30) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getDefaultValue", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 30)], "method", false, false, false, 30)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getDefaultValue", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 30)], "method", false, false, false, 30)) : (($context["default"] ?? null)));
                    // line 31
                    $context["toggleableChecked"] = ( !(null === ($context["value"] ?? null)) && (($context["value"] ?? null) != ($context["default"] ?? null)));
                }
                // line 34
                $context["cookie_name"] = ((("forms-" . CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 34)) . "-") . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 34));
                // line 35
                $context["value"] = (((array_key_exists("value", $context) &&  !(null === $context["value"]))) ? ($context["value"]) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->getCookie(($context["cookie_name"] ?? null))));
                // line 36
                $context["has_value"] =  !(($context["value"] ?? null) === null);
                // line 37
                if ( !(($tmp = ($context["has_value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 38
                    $context["value"] = ($context["default"] ?? null);
                }
                // line 41
                if ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "yaml", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 41), "type", [], "any", false, false, false, 41) == "yaml")) && is_iterable(($context["value"] ?? null)))) {
                    // line 42
                    $context["value"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->yamlGuarded($this->env, false, ($context["value"] ?? null));
                }
            } else {
                // line 45
                $context["toggleable"] = false;
            }
            // line 49
            $context["isDisabledToggleable"] = ((($tmp = ($context["toggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["toggleableChecked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
            // line 51
            if ((($tmp = ($context["toggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 52
                $context["form_field_toggleable"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 53
                    yield "    ";
                    yield from $this->load("forms/default/toggleable.html.twig", 53)->unwrap()->yield(CoreExtension::merge($context, ["checked" => ($context["toggleableChecked"] ?? null)]));
                    // line 54
                    yield "  ";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }
            // line 57
            $context["errors"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "messages", [], "any", false, false, false, 57), CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 57), [], "any", false, false, false, 57);
            // line 58
            $context["required"] = ((($tmp = ($context["client_side_validation"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 58), "required", [], "any", false, false, false, 58), ["on", "true", 1]));
            // line 59
            $context["autofocus"] = ((($context["inline_errors"] ?? null) == false) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autofocus", [], "any", false, false, false, 59), ["on", "true", 1]));
            // line 61
            if (((($tmp = ($context["inline_errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 62
                $context["autofocus"] = true;
            }
            // line 65
            $context["embed_outer_field_classes"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 66
                yield "  ";
                yield from $this->unwrap()->yieldBlock('outer_field_classes', $context, $blocks);
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 70
            if ((($tmp = ($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["form_field_outer_core"] = (($context["form_field_outer_core"] ?? null) . " has-errors");
            }
            // line 71
            if ((($tmp = ($context["toggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["form_field_outer_core"] = (($context["form_field_outer_core"] ?? null) . " form-field-toggleable");
            }
            // line 73
            $context["layout_form_field_outer_classes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "outerclasses", [], "any", false, false, false, 73);
            // line 74
            $context["layout_form_field_outer_classes"] = ((Twig\Extension\CoreExtension::trim(($context["layout_form_field_outer_classes"] ?? null)) . " ") . ($context["form_field_outer_classes"] ?? null));
            // line 75
            $context["layout_form_field_outer_classes"] = ((Twig\Extension\CoreExtension::trim(($context["layout_form_field_outer_classes"] ?? null)) . " ") . ($context["embed_outer_field_classes"] ?? null));
            // line 78
            $context["show_label"] = ( !(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 78) === false) &&  !(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "display_label", [], "any", false, false, false, 78) === false));
            // line 81
            $context["layout_form_field_outer_label_classes"] = Twig\Extension\CoreExtension::trim((((((($tmp = ($context["form_field_outer_label_classes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["form_field_outer_label_classes"]) : ("form-label")) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelclasses", [], "any", false, false, false, 81)));
            // line 82
            $context["layout_form_field_label_classes"] = Twig\Extension\CoreExtension::trim((((($tmp = ($context["form_field_label_classes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["form_field_label_classes"]) : ("inline")));
            // line 83
            $context["form_field_label_trim"] = (((($tmp = ($context["toggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("toggleable") : (""));
            // line 86
            $context["layout_form_field_outer_data_classes"] = Twig\Extension\CoreExtension::trim((((((($tmp = ($context["form_field_outer_data_classes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["form_field_outer_data_classes"]) : (" form-data")) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "dataclasses", [], "any", false, false, false, 86)));
            // line 89
            $context["layout_form_field_wrapper_classes"] = Twig\Extension\CoreExtension::trim((((((($tmp = ($context["form_field_wrapper_classes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["form_field_wrapper_classes"]) : (" form-input-wrapper")) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 89)));
            // line 92
            if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->ofTypeFunc(($context["field"] ?? null), "array")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 93
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 94
                    $context["field"] = Twig\Extension\CoreExtension::merge(($context["field"] ?? null), ["classes" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 94) . " ") . Twig\Extension\CoreExtension::trim(                    $this->unwrap()->renderBlock("field_input_classes", $context, $blocks)))]);
                } else {
                    // line 96
                    $context["field"] = Twig\Extension\CoreExtension::merge(($context["field"] ?? null), ["classes" =>                     $this->unwrap()->renderBlock("field_input_classes", $context, $blocks)]);
                }
            }
            // line 99
            $context["layout_form_field_input_classes"] = Twig\Extension\CoreExtension::trim(((($context["form_field_input_classes"] ?? null) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 99)));
            // line 102
            $context["form_field_inline_error_classes"] = (((($tmp = ($context["form_field_inline_error_classes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["form_field_inline_error_classes"]) : (" form-errors"));
            // line 105
            $context["form_field_extra_wrapper_classes"] = ("form-extra-wrapper " . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 105));
            // line 108
            $context["form_field_for"] = (((($tmp = ($context["toggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("toggleable_" . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 108))) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 108))));
            // line 111
            $context["form_field_label"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 111), false)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 111)));
            // line 112
            $context["form_field_label"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ((array_key_exists("form_field_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["form_field_label"] ?? null), Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 112)))) : (Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 112)))));
            // line 115
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 116
                $context["form_field_help"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 116)), false))) : ($this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 116)))));
            }
            // line 120
            $context["form_field_required"] = ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 120), "required", [], "any", false, false, false, 120), ["on", "true", 1])) ? (true) : (false));
            // line 123
            $context["form_field_description"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 123)), false)) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", false, false, false, 123))));
        }
        // line 13
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field_override_variables_before(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer_field_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_global_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 127
        yield "  data-grav-field=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 127), "html", null, true);
        yield "\"
  data-grav-disabled=\"";
        // line 128
        yield (string) $this->escaper->escape(((($tmp = ($context["toggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["toggleableChecked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)), "html", null, true);
        yield "\"
  data-grav-default=\"";
        // line 129
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonEncodeGuarded($this->env, false, ($context["default"] ?? null)), "html_attr");
        yield "\"
";
        return; yield;
    }

    // line 132
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 133
        yield "  class=\"";
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::trim(($context["layout_form_field_input_classes"] ?? null)), "html", null, true);
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 133), "html", null, true);
        yield "\"
  ";
        // line 134
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 134)) {
            yield "id=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 134));
            yield "\" ";
        }
        // line 135
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", true, true, false, 135)) {
            yield "style=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 135));
            yield "\" ";
        }
        // line 136
        yield "  ";
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["isDisabledToggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            yield "disabled=\"disabled\"";
        }
        // line 137
        yield "  ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 137))) {
            yield "placeholder=\"";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 137)), "html_attr");
            yield "\"";
        }
        // line 138
        yield "  ";
        if ((($tmp = ($context["autofocus"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "autofocus=\"autofocus\"";
        }
        // line 139
        yield "  ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "novalidate", [], "any", false, false, false, 139), ["on", "true", 1])) {
            yield "novalidate=\"novalidate\"";
        }
        // line 140
        yield "  ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "readonly", [], "any", false, false, false, 140), ["on", "true", 1])) {
            yield "readonly=\"readonly\"";
        }
        // line 141
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", true, true, false, 141)) {
            yield "autocomplete=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", false, false, false, 141), "html", null, true);
            yield "\"";
        }
        // line 142
        yield "  ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autocapitalize", [], "any", false, false, false, 142), ["off", "characters", "words", "sentences"])) {
            yield "autocapitalize=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autocapitalize", [], "any", false, false, false, 142), "html", null, true);
            yield "\"";
        }
        // line 143
        yield "  ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "inputmode", [], "any", false, false, false, 143), ["none", "text", "decimal", "numeric", "tel", "search", "email", "url"])) {
            yield "inputmode=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "inputmode", [], "any", false, false, false, 143), "html", null, true);
            yield "\"";
        }
        // line 144
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "tabindex", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "tabindex=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "tabindex", [], "any", false, false, false, 144), "html", null, true);
            yield "\"";
        }
        // line 145
        yield "  ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "spellcheck", [], "any", false, false, false, 145), ["true", "false"])) {
            yield "spellcheck=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "spellcheck", [], "any", false, false, false, 145), "html", null, true);
            yield "\"";
        }
        // line 146
        yield "  ";
        if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "required=\"required\"";
        }
        // line 147
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 147), "pattern", [], "any", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "pattern=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 147), "pattern", [], "any", false, false, false, 147));
            yield "\"";
        }
        // line 148
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 148), "message", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "title=\"";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 148), "message", [], "any", false, false, false, 148)));
            yield "\"
  ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 149
($context["field"] ?? null), "title", [], "any", true, true, false, 149)) {
            yield "title=\"";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, false, 149)));
            yield "\" ";
        }
        // line 150
        yield "
  ";
        // line 152
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", true, true, false, 152)) {
            // line 153
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", false, false, false, 153));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 154
                yield "      ";
                if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->ofTypeFunc($context["attribute"], "array")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 155
                    yield "        ";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 155), "html", null, true);
                    yield "=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 155), "html_attr");
                    yield "\"
      ";
                } else {
                    // line 157
                    yield "        ";
                    yield (string) $this->escaper->escape($context["key"], "html", null, true);
                    yield "=\"";
                    yield (string) $this->escaper->escape($context["attribute"], "html_attr");
                    yield "\"
      ";
                }
                // line 159
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 160
            yield "  ";
        }
        // line 161
        yield "
  ";
        // line 163
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "datasets", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 164
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "datasets", [], "any", false, false, false, 164));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 165
                yield "      data-";
                yield (string) $this->escaper->escape($context["key"], "html", null, true);
                yield "=\"";
                yield (string) $this->escaper->escape($context["attribute"], "html_attr");
                yield "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 167
            yield "  ";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/default/field.html.twig";
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
        return array (  432 => 167,  420 => 165,  415 => 164,  412 => 163,  409 => 161,  406 => 160,  399 => 159,  391 => 157,  383 => 155,  380 => 154,  375 => 153,  372 => 152,  369 => 150,  363 => 149,  356 => 148,  349 => 147,  344 => 146,  337 => 145,  330 => 144,  323 => 143,  316 => 142,  309 => 141,  304 => 140,  299 => 139,  294 => 138,  287 => 137,  282 => 136,  275 => 135,  269 => 134,  262 => 133,  255 => 132,  248 => 129,  244 => 128,  239 => 127,  232 => 126,  222 => 66,  212 => 16,  208 => 13,  205 => 123,  203 => 120,  200 => 116,  198 => 115,  196 => 112,  194 => 111,  192 => 108,  190 => 105,  188 => 102,  186 => 99,  182 => 96,  179 => 94,  177 => 93,  175 => 92,  173 => 89,  171 => 86,  169 => 83,  167 => 82,  165 => 81,  163 => 78,  161 => 75,  159 => 74,  157 => 73,  153 => 71,  149 => 70,  144 => 66,  142 => 65,  139 => 62,  137 => 61,  135 => 59,  133 => 58,  131 => 57,  126 => 54,  123 => 53,  121 => 52,  119 => 51,  117 => 49,  114 => 45,  110 => 42,  108 => 41,  105 => 38,  103 => 37,  101 => 36,  99 => 35,  97 => 34,  94 => 31,  92 => 30,  90 => 29,  88 => 28,  86 => 27,  84 => 26,  82 => 25,  80 => 24,  78 => 23,  76 => 22,  74 => 20,  72 => 19,  70 => 18,  63 => 13,  41 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
DO NOT MODIFY!

Default layout can be found in form plugin or your theme:

templates/forms/layouts/field/default-field.html.twig

The `extends` and `use` tags have to sit at the root of a template. Twig 3.28
deprecates them anywhere else and Twig 4 rejects them outright, so a field with
`validate.ignore` is switched off by extending an empty layout rather than by
wrapping the whole file in a condition.
#}
{% extends field.validate.ignore ? \x27forms/default/field-ignored.html.twig\x27 : \x27forms/layouts/field.html.twig\x27 %}
{% use \x27forms/layouts/field-variables.html.twig\x27 %}

{% block field_override_variables_before %}{% endblock %}

{% if not field.validate.ignore %}
{% set field_name = (scope ~ field.name)|fieldName %}
{% set vertical = field.style == \x27vertical\x27 %}

{% if not blueprints or (blueprints.schema.type(field.type)[\x27input@\x27] ?? true) is same as(true) %}
    {% set default = field.default %}
    {% set toggleable = field.toggleable ?? false %}
    {% if toggleable %}
        {% set originalValue = originalValue ?? value %}
        {% set toggleableChecked = originalValue is not null %}
    {% elseif field.overridable %}
        {% set toggleable = true %}
        {% set default = form.getDefaultValue(field.name) ?? default %}
        {% set toggleableChecked = value is not null and value != default %}
    {% endif %}

    {% set cookie_name = \x27forms-\x27 ~ form.name ~ \x27-\x27 ~ field.name %}
    {% set value = value ?? get_cookie(cookie_name) %}
    {% set has_value = value is not same as(null) %}
    {% if not has_value %}
        {% set value = default %}
    {% endif %}

    {% if (field.yaml or field.validate.type == \x27yaml\x27) and value is iterable %}
        {% set value = value|yaml %}
    {% endif %}
{% else %}
    {% set toggleable = false %}
{% endif %}

{# DEPRECATED: Needed by old form fields; remove when backwards compatibility breaks are allowed #}
{% set isDisabledToggleable = toggleable and not toggleableChecked %}

{% if toggleable %}
  {% set form_field_toggleable %}
    {% include \x27forms/default/toggleable.html.twig\x27 with {checked: toggleableChecked} %}
  {% endset %}
{% endif %}

{% set errors = attribute(form.messages, field.name) %}
{% set required = client_side_validation and field.validate.required in [\x27on\x27, \x27true\x27, 1] %}
{% set autofocus = (inline_errors == false) and field.autofocus in [\x27on\x27, \x27true\x27, 1] %}

{% if inline_errors and errors %}
    {% set autofocus = true %}
{% endif %}

{% set embed_outer_field_classes %}
  {% block outer_field_classes %}{% endblock %}
{% endset %}

{# Field Classes #}
{%- if errors %}{% set form_field_outer_core = form_field_outer_core ~ \x27 has-errors\x27  %}{% endif -%}
{%- if toggleable %}{% set form_field_outer_core = form_field_outer_core ~ \x27 form-field-toggleable\x27 %}{% endif -%}

{% set layout_form_field_outer_classes = field.outerclasses %}
{% set layout_form_field_outer_classes = layout_form_field_outer_classes|trim ~ \x27 \x27 ~ form_field_outer_classes %}
{% set layout_form_field_outer_classes = layout_form_field_outer_classes|trim ~ \x27 \x27 ~ embed_outer_field_classes %}

{# Show Label logic #}
{% set show_label = field.label is not same as(false) and field.display_label is not same as(false )%}

{# Label Classes #}
{% set layout_form_field_outer_label_classes = ((form_field_outer_label_classes ?: \x27form-label\x27) ~ \x27 \x27 ~ field.labelclasses)|trim %}
{% set layout_form_field_label_classes = (form_field_label_classes ?: \x27inline\x27)|trim %}
{% set form_field_label_trim = toggleable ? \x27toggleable\x27 %}

{# Field Outer Data classes #}
{% set layout_form_field_outer_data_classes = ((form_field_outer_data_classes ?: \x27 form-data\x27) ~ \x27 \x27 ~ field.dataclasses)|trim  %}

{# Field Wrapper classes #}
{% set layout_form_field_wrapper_classes = ((form_field_wrapper_classes ?: \x27 form-input-wrapper\x27) ~ \x27 \x27 ~ field.wrapper_classes)|trim %}

{# Field input classes #}
{% if field|of_type(\x27array\x27) %}
  {% if field.classes %}
    {% set field = field|merge({\x27classes\x27: field.classes ~ \x27 \x27 ~ block(\x27field_input_classes\x27)|trim }) %}
  {% else %}
    {% set field = field|merge({\x27classes\x27: block(\x27field_input_classes\x27) }) %}
  {% endif %}
{% endif %}
{% set layout_form_field_input_classes = (form_field_input_classes ~ \x27 \x27 ~ field.classes)|trim %}

{# Inline error classes #}
{% set form_field_inline_error_classes = form_field_inline_error_classes ?: \x27 form-errors\x27 %}

{# Field extra classes #}
{% set form_field_extra_wrapper_classes = \x27form-extra-wrapper \x27 ~ field.wrapper_classes %}

{# Field For #}
{% set form_field_for = toggleable ? \x27toggleable_\x27 ~ field.name : field.id|e %}

{# Field Label #}
{% set form_field_label = field.markdown ? field.label|markdown(false) : field.label %}
{% set form_field_label = form_field_label|default(field.name|capitalize)|t %}

{# Field Help #}
{% if field.help %}
    {% set form_field_help = field.markdown ? field.help|t|markdown(false)|e : field.help|t|e %}
{% endif %}

{# Field Requied #}
{% set form_field_required = field.validate.required in [\x27on\x27, \x27true\x27, 1] ? true : false %}

{# Field Description #}
{% set form_field_description = field.markdown ? field.description|t|markdown(false)|raw : field.description|t|raw %}
{% endif %}

{% block global_attributes %}
  data-grav-field=\"{{ field.type }}\"
  data-grav-disabled=\"{{ toggleable and toggleableChecked }}\"
  data-grav-default=\"{{ default|json_encode()|e(\x27html_attr\x27) }}\"
{% endblock %}

{% block input_attributes %}
  class=\"{{ layout_form_field_input_classes|trim }} {{ field.size }}\"
  {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
  {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
  {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
  {% if field.placeholder is not empty %}placeholder=\"{{ field.placeholder|t|e(\x27html_attr\x27) }}\"{% endif %}
  {% if autofocus %}autofocus=\"autofocus\"{% endif %}
  {% if field.novalidate in [\x27on\x27, \x27true\x27, 1] %}novalidate=\"novalidate\"{% endif %}
  {% if field.readonly in [\x27on\x27, \x27true\x27, 1] %}readonly=\"readonly\"{% endif %}
  {% if field.autocomplete is defined %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
  {% if field.autocapitalize in [\x27off\x27, \x27characters\x27, \x27words\x27, \x27sentences\x27] %}autocapitalize=\"{{ field.autocapitalize }}\"{% endif %}
  {% if field.inputmode in [\x27none\x27, \x27text\x27, \x27decimal\x27, \x27numeric\x27, \x27tel\x27, \x27search\x27, \x27email\x27, \x27url\x27] %}inputmode=\"{{ field.inputmode }}\"{% endif %}
  {% if field.tabindex %}tabindex=\"{{ field.tabindex }}\"{% endif %}
  {% if field.spellcheck in [\x27true\x27, \x27false\x27] %}spellcheck=\"{{ field.spellcheck }}\"{% endif %}
  {% if required %}required=\"required\"{% endif %}
  {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern|e }}\"{% endif %}
  {% if field.validate.message %}title=\"{{ field.validate.message|t|e }}\"
  {% elseif field.title is defined %}title=\"{{ field.title|t|e }}\" {% endif %}

  {# Support key/value and .name/.value styles #}
  {% if field.attributes is defined %}
    {% for key,attribute in field.attributes %}
      {% if attribute|of_type(\x27array\x27) %}
        {{ attribute.name }}=\"{{ attribute.value|e(\x27html_attr\x27) }}\"
      {% else %}
        {{ key }}=\"{{ attribute|e(\x27html_attr\x27) }}\"
      {% endif %}
    {% endfor %}
  {% endif %}

  {# Support for Custom data attributes#}
  {% if field.datasets %}
    {% for key, attribute in field.datasets %}
      data-{{ key }}=\"{{ attribute|e(\x27html_attr\x27) }}\"
    {% endfor %}
  {% endif %}
{% endblock %}
", "forms/default/field.html.twig", "/Users/amer/Sites/kaffekos1/user/plugins/form/templates/forms/default/field.html.twig");
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
