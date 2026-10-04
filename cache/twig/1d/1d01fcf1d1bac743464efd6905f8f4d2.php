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

/* forms/fields/textarea/textarea.html.twig */
class __TwigTemplate_b1b857d922ba454a56aa3c49c2920a8a_sourced extends Template
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
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
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
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    <div class=\"";
        yield (string) (((($tmp = ($context["form_field_wrapper_classes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["form_field_wrapper_classes"], "html", null, true)) : ("form-textarea-wrapper"));
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 4), "html", null, true);
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 4), "html", null, true);
        yield "\">
        ";
        // line 5
        yield from $this->unwrap()->yieldBlock('prepend', $context, $blocks);
        // line 6
        yield "        <textarea
            ";
        // line 8
        yield "            name=\"";
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 8))), "html", null, true);
        yield "\"
            ";
        // line 10
        yield "            ";
        yield from $this->unwrap()->yieldBlock('input_attributes', $context, $blocks);
        // line 43
        yield "            >";
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::trim(($context["value"] ?? null)), "html");
        yield "</textarea>
            ";
        // line 44
        yield from $this->unwrap()->yieldBlock('append', $context, $blocks);
        // line 45
        yield "            ";
        if (((($tmp = ($context["inline_errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 46
            yield "                <div class=\"";
            yield (string) (((($tmp = ($context["form_errors_classes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["form_errors_classes"], "html", null, true)) : ("form-errors"));
            yield "\">
                    <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 47
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["errors"] ?? null)), "html", null, true);
            yield "</p>
                </div>
            ";
        }
        // line 50
        yield "    </div>
";
        return; yield;
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_prepend(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "                class=\"";
        yield (string) $this->escaper->escape(($context["form_field_textarea_classes"] ?? null), "html", null, true);
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
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["isDisabledToggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            yield "disabled=\"disabled\"";
        }
        // line 15
        yield "                ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 15))) {
            yield "placeholder=\"";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 15)), "html", null, true);
            yield "\"";
        }
        // line 16
        yield "                ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autofocus", [], "any", false, false, false, 16), ["on", "true", 1])) {
            yield "autofocus=\"autofocus\"";
        }
        // line 17
        yield "                ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "novalidate", [], "any", false, false, false, 17), ["on", "true", 1])) {
            yield "novalidate=\"novalidate\"";
        }
        // line 18
        yield "                ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "readonly", [], "any", false, false, false, 18), ["on", "true", 1])) {
            yield "readonly=\"readonly\"";
        }
        // line 19
        yield "                ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", false, false, false, 19), ["on", "off"])) {
            yield "autocomplete=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", false, false, false, 19), "html", null, true);
            yield "\"";
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
        if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "required=\"required\"";
        }
        // line 22
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 22), "pattern", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "pattern=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 22), "pattern", [], "any", false, false, false, 22), "html", null, true);
            yield "\"";
        }
        // line 23
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 23), "message", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "title=\"";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 23), "message", [], "any", false, false, false, 23)));
            yield "\"";
        }
        // line 24
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "rows", [], "any", true, true, false, 24)) {
            yield "rows=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "rows", [], "any", false, false, false, 24), "html", null, true);
            yield "\"";
        }
        // line 25
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cols", [], "any", true, true, false, 25)) {
            yield "cols=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cols", [], "any", false, false, false, 25), "html", null, true);
            yield "\"";
        }
        // line 26
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "minlength", [], "any", true, true, false, 26) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, true, false, 26), "min", [], "any", true, true, false, 26))) {
            yield "minlength=\"";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "minlength", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "minlength", [], "any", false, false, false, 26), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 26), "min", [], "any", false, false, false, 26))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 26), "min", [], "any", false, false, false, 26))), "html", null, true);
            yield "\"";
        }
        // line 27
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "maxlength", [], "any", true, true, false, 27) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, true, false, 27), "max", [], "any", true, true, false, 27))) {
            yield "maxlength=\"";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "maxlength", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "maxlength", [], "any", false, false, false, 27), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 27), "max", [], "any", false, false, false, 27))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 27), "max", [], "any", false, false, false, 27))), "html", null, true);
            yield "\"";
        }
        // line 28
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "datasets", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "datasets", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["datakey"] => $context["datavalue"]) {
                // line 30
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
            // line 32
            yield "                ";
        }
        // line 33
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", true, true, false, 33)) {
            // line 34
            yield "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 35
                yield "                    ";
                if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->ofTypeFunc($context["attribute"], "array")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 36
                    yield "                      ";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 36), "html", null, true);
                    yield "=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 36), "html_attr");
                    yield "\"
                    ";
                } else {
                    // line 38
                    yield "                      ";
                    yield (string) $this->escaper->escape($context["key"], "html", null, true);
                    yield "=\"";
                    yield (string) $this->escaper->escape($context["attribute"], "html_attr");
                    yield "\"
                    ";
                }
                // line 40
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 41
            yield "                ";
        }
        // line 42
        yield "            ";
        return; yield;
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_append(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/textarea/textarea.html.twig";
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
        return array (  308 => 44,  303 => 42,  300 => 41,  293 => 40,  285 => 38,  277 => 36,  274 => 35,  269 => 34,  266 => 33,  263 => 32,  251 => 30,  246 => 29,  243 => 28,  236 => 27,  229 => 26,  222 => 25,  215 => 24,  208 => 23,  201 => 22,  196 => 21,  189 => 20,  182 => 19,  177 => 18,  172 => 17,  167 => 16,  160 => 15,  155 => 14,  148 => 13,  142 => 12,  133 => 11,  126 => 10,  116 => 5,  110 => 50,  104 => 47,  99 => 46,  96 => 45,  94 => 44,  89 => 43,  86 => 10,  81 => 8,  78 => 6,  76 => 5,  67 => 4,  60 => 3,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block input %}
    <div class=\"{{ form_field_wrapper_classes ?: \x27form-textarea-wrapper\x27 }} {{ field.size }} {{ field.wrapper_classes }}\">
        {% block prepend %}{% endblock prepend %}
        <textarea
            {# required attribute structures #}
            name=\"{{ (scope ~ field.name)|fieldName }}\"
            {# input attribute structures #}
            {% block input_attributes %}
                class=\"{{ form_field_textarea_classes }} {{ field.classes }} {{ field.size }}\"
                {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.placeholder is not empty %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
                {% if field.autofocus in [\x27on\x27, \x27true\x27, 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in [\x27on\x27, \x27true\x27, 1] %}novalidate=\"novalidate\"{% endif %}
                {% if field.readonly in [\x27on\x27, \x27true\x27, 1] %}readonly=\"readonly\"{% endif %}
                {% if field.autocomplete in [\x27on\x27, \x27off\x27] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                {% if field.tabindex %}tabindex=\"{{ field.tabindex }}\"{% endif %}
                {% if required %}required=\"required\"{% endif %}
                {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern }}\"{% endif %}
                {% if field.validate.message %}title=\"{{ field.validate.message|t|e }}\"{% endif %}
                {% if field.rows is defined %}rows=\"{{ field.rows }}\"{% endif %}
                {% if field.cols is defined %}cols=\"{{ field.cols }}\"{% endif %}
                {% if field.minlength is defined or field.validate.min is defined %}minlength=\"{{ field.minlength | default(field.validate.min) }}\"{% endif %}
                {% if field.maxlength is defined or field.validate.max is defined %}maxlength=\"{{ field.maxlength | default(field.validate.max) }}\"{% endif %}
                {% if field.datasets %}
                    {% for datakey, datavalue in field.datasets %}
                        data-{{ datakey }}=\"{{ datavalue|e(\x27html_attr\x27) }}\"
                    {% endfor %}
                {% endif %}
                {% if field.attributes is defined %}
                  {% for key,attribute in field.attributes %}
                    {% if attribute|of_type(\x27array\x27) %}
                      {{ attribute.name }}=\"{{ attribute.value|e(\x27html_attr\x27) }}\"
                    {% else %}
                      {{ key }}=\"{{ attribute|e(\x27html_attr\x27) }}\"
                    {% endif %}
                  {% endfor %}
                {% endif %}
            {% endblock %}
            >{{ value|trim|e(\x27html\x27) }}</textarea>
            {% block append %}{% endblock append %}
            {% if inline_errors and errors %}
                <div class=\"{{ form_errors_classes ?: \x27form-errors\x27 }}\">
                    <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> {{ errors|first }}</p>
                </div>
            {% endif %}
    </div>
{% endblock %}
", "forms/fields/textarea/textarea.html.twig", "/Users/amer/Sites/kaffekos1/user/plugins/form/templates/forms/fields/textarea/textarea.html.twig");
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
