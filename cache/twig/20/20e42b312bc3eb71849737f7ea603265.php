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

/* forms/fields/select/select.html.twig */
class __TwigTemplate_11cf93c0be9580b4272df7298dc4c810_sourced extends Template
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
            'global_attributes' => [$this, 'block_global_attributes'],
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("forms/field.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("forms/field.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_global_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    data-grav-selectize=\"";
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonEncodeGuarded($this->env, false, ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", true, true, false, 4)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", false, false, false, 4)) : ([]))), "html_attr");
        yield "\"
    ";
        // line 5
        yield from $this->yieldParentBlock("global_attributes", $context, $blocks);
        yield "
";
        return; yield;
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    <div class=\"";
        yield (string) (((($tmp = ($context["form_field_wrapper_classes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["form_field_wrapper_classes"], "html", null, true)) : ("form-select-wrapper"));
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 9), "html", null, true);
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 9), "html", null, true);
        yield "\">
        <select name=\"";
        // line 10
        yield (string) $this->escaper->escape(($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 10))) . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("[]") : (""))), "html", null, true);
        yield "\"
                class=\"";
        // line 11
        yield (string) $this->escaper->escape(($context["form_field_select_classes"] ?? null), "html", null, true);
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 11), "html", null, true);
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 11), "html", null, true);
        yield "\"
                ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 12)) {
            yield "id=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 12));
            yield "\" ";
        }
        // line 13
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", true, true, false, 13)) {
            yield "style=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 13));
            yield "\" ";
        }
        // line 14
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled=\"disabled\"";
        }
        // line 15
        yield "                ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autofocus", [], "any", false, false, false, 15), ["on", "true", 1])) {
            yield "autofocus=\"autofocus\"";
        }
        // line 16
        yield "                ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "novalidate", [], "any", false, false, false, 16), ["on", "true", 1])) {
            yield "novalidate=\"novalidate\"";
        }
        // line 17
        yield "                ";
        if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "required=\"required\"";
        }
        // line 18
        yield "                ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 18), ["on", "true", 1])) {
            yield "multiple=\"multiple\"";
        }
        // line 19
        yield "                ";
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["isDisabledToggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            yield "disabled=\"disabled\"";
        }
        // line 20
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "tabindex", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "tabindex=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "tabindex", [], "any", false, false, false, 20), "html", null, true);
            yield "\"";
        }
        // line 21
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "form", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "form=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "form", [], "any", false, false, false, 21), "html", null, true);
            yield "\"";
        }
        // line 22
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", true, true, false, 22)) {
            yield "autocomplete=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", false, false, false, 22), "html", null, true);
            yield "\"";
        }
        // line 23
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "key", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "                    data-key-observe=\"";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 24))), "html", null, true);
            yield "\"
                ";
        }
        // line 26
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "datasets", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "datasets", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["datakey"] => $context["datavalue"]) {
                // line 28
                yield "                        data-";
                yield (string) $this->escaper->escape($context["datakey"], "html", null, true);
                yield "=\"";
                yield (string) $this->escaper->escape($context["datavalue"], "html_attr");
                yield "\"
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['datakey'], $context['datavalue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 30
            yield "                ";
        }
        // line 31
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 33
                yield "                        ";
                yield (string) $this->escaper->escape($context["key"], "html", null, true);
                yield "=\"";
                yield (string) $this->escaper->escape($context["value"], "html_attr");
                yield "\"
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 35
            yield "                ";
        }
        // line 36
        yield "                >
            ";
        // line 37
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 37))) {
            yield "<option value=\"\" disabled selected>";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 37)), "html", null, true);
            yield "</option>";
        }
        // line 38
        yield "
            ";
        // line 39
        $context["options"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 39);
        // line 40
        yield "            ";
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", false, false, false, 40), "create", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 41
            yield "              ";
            $context["custom_value"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["value"] ?? null)) : ([ (string)($context["value"] ?? null) => ($context["value"] ?? null)]));
            // line 42
            yield "              ";
            $context["options"] = array_unique(Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ((array_key_exists("custom_value", $context)) ? (Twig\Extension\CoreExtension::default(($context["custom_value"] ?? null), [])) : ([]))));
            // line 43
            yield "            ";
        }
        // line 44
        yield "
            ";
        // line 48
        yield "            ";
        $context["selectize_store_keys"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", false, true, false, 48), "store_keys", [], "any", true, true, false, 48) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", false, false, false, 48), "store_keys", [], "any", false, false, false, 48)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", false, false, false, 48), "store_keys", [], "any", false, false, false, 48)) : (false));
        // line 49
        yield "            ";
        $context["selectize_use_label_as_value"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "selectize", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = ($context["selectize_store_keys"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
        // line 50
        yield "
            ";
        // line 51
        $context["value"] = ((is_iterable(($context["value"] ?? null))) ? (($context["value"] ?? null)) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringGuarded($this->env, false, ($context["value"] ?? null))));
        // line 52
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item_value"]) {
            // line 53
            yield "                ";
            if ((is_iterable($context["item_value"]) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item_value"], "value", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 54
                yield "                    ";
                $context["akey"] = (((($tmp = ($context["selectize_use_label_as_value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["item_value"]) : ($context["key"]));
                // line 55
                yield "                    ";
                $context["avalue"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item_value"], "value", [], "any", false, false, false, 55));
                // line 56
                yield "                    <option ";
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item_value"], "disabled", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled=\"disabled\"") : (""));
                yield "
                        ";
                // line 57
                yield (string) ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item_value"], "selected", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || ($context["key"] == ($context["value"] ?? null)))) ? ("selected=\"selected\"") : (""));
                yield "
                        ";
                // line 62
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item_value"], "label", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "label=\"";
                    yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item_value"], "label", [], "any", false, false, false, 62)), "html_attr");
                    yield "\"";
                }
                // line 63
                yield "                        value=\"";
                yield (string) $this->escaper->escape(($context["akey"] ?? null), "html", null, true);
                yield "\"
                    >
                        ";
                // line 68
                yield "                        ";
                yield (string) $this->escaper->escape(($context["avalue"] ?? null), "html", null, true);
                yield "
                    </option>
                ";
            } elseif (is_iterable(            // line 70
$context["item_value"])) {
                // line 71
                yield "                    ";
                $context["optgroup_label"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys($context["item_value"]));
                // line 72
                yield "                    <optgroup label=\"";
                yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, ($context["optgroup_label"] ?? null)), "html_attr");
                yield "\">
                      ";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v0 = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 73)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[(($_v2 = $context["key"]) instanceof \Stringable && (is_array($_v1) || $_v1 instanceof \ArrayObject || $_v1 instanceof \ArrayIterator) ? (string) $_v2 : $_v2)] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v3 = ($context["optgroup_label"] ?? null)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v3 : $_v3)] ?? null) : null));
                foreach ($context['_seq'] as $context["subkey"] => $context["suboption"]) {
                    // line 74
                    yield "                          ";
                    $context["subkey"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringGuarded($this->env, false, $context["subkey"]);
                    // line 75
                    yield "                          ";
                    $context["item_value"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringGuarded($this->env, false, (((($tmp = ($context["selectize_use_label_as_value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["suboption"]) : ($context["subkey"])));
                    // line 76
                    yield "                          ";
                    $context["selected"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringGuarded($this->env, false, (((($tmp = ($context["selectize_use_label_as_value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["suboption"]) : ($context["subkey"])));
                    // line 77
                    yield "                          <option ";
                    if ((($context["subkey"] === ($context["value"] ?? null)) || ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && CoreExtension::inFilter(($context["selected"] ?? null), ($context["value"] ?? null))))) {
                        yield "selected=\"selected\"";
                    }
                    yield " value=\"";
                    yield (string) $this->escaper->escape($context["subkey"], "html", null, true);
                    yield "\">
                            ";
                    // line 78
                    yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $context["suboption"]), "html", null, true);
                    yield "
                          </option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['subkey'], $context['suboption'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 81
                yield "                    </optgroup>
                ";
            } else {
                // line 83
                yield "                    ";
                $context["val"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringGuarded($this->env, false, (((($tmp = ($context["selectize_use_label_as_value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["item_value"]) : ($context["key"])));
                // line 84
                yield "                    ";
                $context["selected"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringGuarded($this->env, false, (((($tmp = ($context["selectize_use_label_as_value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["item_value"]) : ($context["key"])));
                // line 85
                yield "                    <option ";
                if (((($context["val"] ?? null) === ($context["value"] ?? null)) || ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "multiple", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && CoreExtension::inFilter(($context["selected"] ?? null), ($context["value"] ?? null))))) {
                    yield "selected=\"selected\"";
                }
                yield " value=\"";
                yield (string) $this->escaper->escape(($context["val"] ?? null), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $context["item_value"]), "html", null, true);
                yield "</option>
                ";
            }
            // line 87
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['item_value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 88
        yield "
        </select>
    </div>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/select/select.html.twig";
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
        return array (  377 => 88,  370 => 87,  358 => 85,  355 => 84,  352 => 83,  348 => 81,  338 => 78,  329 => 77,  326 => 76,  323 => 75,  320 => 74,  316 => 73,  311 => 72,  308 => 71,  306 => 70,  300 => 68,  294 => 63,  287 => 62,  283 => 57,  278 => 56,  275 => 55,  272 => 54,  269 => 53,  264 => 52,  262 => 51,  259 => 50,  256 => 49,  253 => 48,  250 => 44,  247 => 43,  244 => 42,  241 => 41,  238 => 40,  236 => 39,  233 => 38,  227 => 37,  224 => 36,  221 => 35,  209 => 33,  204 => 32,  201 => 31,  198 => 30,  186 => 28,  181 => 27,  178 => 26,  172 => 24,  169 => 23,  162 => 22,  155 => 21,  148 => 20,  143 => 19,  138 => 18,  133 => 17,  128 => 16,  123 => 15,  118 => 14,  111 => 13,  105 => 12,  97 => 11,  93 => 10,  84 => 9,  77 => 8,  70 => 5,  65 => 4,  58 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block global_attributes %}
    data-grav-selectize=\"{{ (field.selectize is defined ? field.selectize : {})|json_encode()|e(\x27html_attr\x27) }}\"
    {{ parent() }}
{% endblock %}

{% block input %}
    <div class=\"{{ form_field_wrapper_classes ?: \x27form-select-wrapper\x27 }} {{ field.size }} {{ field.wrapper_classes }}\">
        <select name=\"{{ (scope ~ field.name)|fieldName ~ (field.multiple ? \x27[]\x27 : \x27\x27) }}\"
                class=\"{{ form_field_select_classes }} {{ field.classes }} {{ field.size }}\"
                {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                {% if field.disabled %}disabled=\"disabled\"{% endif %}
                {% if field.autofocus in [\x27on\x27, \x27true\x27, 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in [\x27on\x27, \x27true\x27, 1] %}novalidate=\"novalidate\"{% endif %}
                {% if required %}required=\"required\"{% endif %}
                {% if field.multiple in [\x27on\x27, \x27true\x27, 1] %}multiple=\"multiple\"{% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.tabindex %}tabindex=\"{{ field.tabindex }}\"{% endif %}
                {% if field.form %}form=\"{{ field.form }}\"{% endif %}
                {% if field.autocomplete is defined %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                {% if field.key %}
                    data-key-observe=\"{{ (scope ~ field.name)|fieldName }}\"
                {% endif %}
                {% if field.datasets %}
                    {% for datakey, datavalue in field.datasets %}
                        data-{{ datakey }}=\"{{ datavalue|e(\x27html_attr\x27) }}\"
                    {% endfor %}
                {% endif %}
                {% if field.attributes %}
                    {% for key, value in field.attributes %}
                        {{ key }}=\"{{ value|e(\x27html_attr\x27) }}\"
                    {% endfor %}
                {% endif %}
                >
            {% if field.placeholder is not empty %}<option value=\"\" disabled selected>{{ field.placeholder|t }}</option>{% endif %}

            {% set options = field.options %}
            {% if field.selectize.create and value %}
              {% set custom_value = field.multiple ? value : { (value): value } %}
              {% set options = options|merge(custom_value|default([]))|array_unique %}
            {% endif %}

            {# When selectize+multiple, the legacy default stores option labels
               rather than keys. Setting `selectize.store_keys: true` opts in to
               the saner \"store the option key as value\" behavior. #}
            {% set selectize_store_keys = field.selectize.store_keys ?? false %}
            {% set selectize_use_label_as_value = field.selectize and field.multiple and not selectize_store_keys %}

            {% set value = value is iterable ? value : value|string %}
            {% for key, item_value in options %}
                {% if item_value is iterable and item_value.value %}
                    {% set akey = selectize_use_label_as_value ? item_value : key %}
                    {% set avalue = item_value.value|t %}
                    <option {{ item_value.disabled ? \x27disabled=\"disabled\"\x27 : \x27\x27 }}
                        {{ item_value.selected or key == value ? \x27selected=\"selected\"\x27 : \x27\x27 }}
                        {# GHSA-5jrr-wfgh-mhg9: quote + html_attr-escape the label,
                           matching the optgroup branch below; the previous
                           unquoted `label=` ~ value let a value with a space
                           inject a new attribute onto the <option>. #}
                        {% if item_value.label %}label=\"{{ item_value.label|t|e(\x27html_attr\x27) }}\"{% endif %}
                        value=\"{{ akey }}\"
                    >
                        {# GHSA-c2q3-p4jr-c55f: dropped |raw — option text is now
                           autoescaped so taxonomy/option values supplied by
                           lower-privileged editors can no longer inject script. #}
                        {{ avalue }}
                    </option>
                {% elseif item_value is iterable %}
                    {% set optgroup_label = item_value|keys|first %}
                    <optgroup label=\"{{ optgroup_label|t|e(\x27html_attr\x27) }}\">
                      {% for subkey, suboption in field.options[key][optgroup_label] %}
                          {% set subkey = subkey|string %}
                          {% set item_value = (selectize_use_label_as_value ? suboption : subkey)|string %}
                          {% set selected = (selectize_use_label_as_value ? suboption : subkey)|string %}
                          <option {% if subkey is same as (value) or (field.multiple and selected in value) %}selected=\"selected\"{% endif %} value=\"{{ subkey }}\">
                            {{ suboption|t }}
                          </option>
                      {% endfor %}
                    </optgroup>
                {% else %}
                    {% set val = (selectize_use_label_as_value ? item_value : key)|string %}
                    {% set selected = (selectize_use_label_as_value ? item_value : key)|string %}
                    <option {% if val is same as (value) or (field.multiple and selected in value) %}selected=\"selected\"{% endif %} value=\"{{ val }}\">{{ item_value|t }}</option>
                {% endif %}
            {% endfor %}

        </select>
    </div>
{% endblock %}
", "forms/fields/select/select.html.twig", "/Users/amer/Sites/kaffekos1/user/plugins/form/templates/forms/fields/select/select.html.twig");
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
