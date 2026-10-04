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

/* forms/layouts/field/default-field.html.twig */
class __TwigTemplate_eed8890f9da3b48a4633833880941157_sourced extends Template
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
            'field' => [$this, 'block_field'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'global_attributes' => [$this, 'block_global_attributes'],
            'group' => [$this, 'block_group'],
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('field', $context, $blocks);
        return; yield;
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<div class=\"form-field ";
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::trim(($context["layout_form_field_outer_classes"] ?? null)), "html", null, true);
        yield " ";
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::trim(($context["form_field_outer_core"] ?? null)), "html", null, true);
        yield "\">
  ";
        // line 3
        yield from $this->unwrap()->yieldBlock('contents', $context, $blocks);
        // line 52
        yield "</div>
";
        return; yield;
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        if ((($tmp = ($context["show_label"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "      <div class=\"";
            yield (string) $this->escaper->escape(($context["layout_form_field_outer_label_classes"] ?? null), "html", null, true);
            yield "\">";
            // line 6
            yield (string) $this->escaper->escape(($context["form_field_toggleable"] ?? null), "html", null, true);
            // line 7
            yield "<label class=\"";
            yield (string) $this->escaper->escape(($context["layout_form_field_label_classes"] ?? null), "html", null, true);
            yield (string) $this->escaper->escape(($context["form_field_label_trim"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "for=\"";
                yield (string) $this->escaper->escape(($context["form_field_for"] ?? null), "html", null, true);
                yield "\"";
            }
            yield ">";
            // line 8
            yield from $this->unwrap()->yieldBlock('label', $context, $blocks);
            // line 18
            yield "</label>
      </div>
    ";
        }
        // line 21
        yield "    <div class=\"";
        yield (string) $this->escaper->escape(($context["layout_form_field_outer_data_classes"] ?? null), "html", null, true);
        yield "\"
        ";
        // line 22
        yield from $this->unwrap()->yieldBlock('global_attributes', $context, $blocks);
        // line 23
        yield "    >
      ";
        // line 24
        yield from $this->unwrap()->yieldBlock('group', $context, $blocks);
        // line 43
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "description", [], "any", true, true, false, 43)) {
            // line 44
            yield "        <div class=\"";
            yield (string) $this->escaper->escape(($context["form_field_extra_wrapper_classes"] ?? null), "html", null, true);
            yield "\">
          <span class=\"form-description\">
            ";
            // line 46
            yield (string) ($context["form_field_description"] ?? null);
            yield "
          </span>
        </div>
      ";
        }
        // line 50
        yield "    </div>
  ";
        return; yield;
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        if ((($tmp = ($context["form_field_help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "<span class=\"tooltip\" data-tooltip=\"";
            yield (string) $this->escaper->escape(($context["form_field_help"] ?? null));
            yield "\">";
            yield (string) ($context["form_field_label"] ?? null);
            yield "</span>";
        } else {
            // line 12
            yield (string) ($context["form_field_label"] ?? null);
        }
        // line 14
        if ((($tmp = ($context["form_field_required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "              <span class=\"required\">*</span>";
        }
        return; yield;
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_global_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_group(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "        ";
        yield from $this->unwrap()->yieldBlock('input', $context, $blocks);
        // line 42
        yield "      ";
        return; yield;
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "          <div class=\"";
        yield (string) $this->escaper->escape(($context["layout_form_field_wrapper_classes"] ?? null), "html", null, true);
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 26), "html", null, true);
        yield "\">
            ";
        // line 27
        yield from $this->unwrap()->yieldBlock('prepend', $context, $blocks);
        // line 28
        yield "            ";
        $context["input_value"] = ((is_iterable(($context["value"] ?? null))) ? (Twig\Extension\CoreExtension::join(($context["value"] ?? null), ",")) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringGuarded($this->env, false, ($context["value"] ?? null))));
        // line 29
        yield "            <input
              name=\"";
        // line 30
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 30))), "html", null, true);
        yield "\"
              value=\"";
        // line 31
        yield (string) $this->escaper->escape(($context["input_value"] ?? null));
        yield "\"
              ";
        // line 32
        yield from $this->unwrap()->yieldBlock('input_attributes', $context, $blocks);
        // line 33
        yield "            />
            ";
        // line 34
        yield from $this->unwrap()->yieldBlock('append', $context, $blocks);
        // line 35
        yield "            ";
        if (((($tmp = ($context["inline_errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 36
            yield "            <div class=\"";
            yield (string) $this->escaper->escape(($context["form_field_inline_error_classes"] ?? null), "html", null, true);
            yield "\">
              <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 37
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["errors"] ?? null)));
            yield "</p>
            </div>
            ";
        }
        // line 40
        yield "          </div>
        ";
        return; yield;
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_prepend(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 34
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
        return "forms/layouts/field/default-field.html.twig";
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
        return array (  280 => 34,  270 => 32,  260 => 27,  254 => 40,  248 => 37,  243 => 36,  240 => 35,  238 => 34,  235 => 33,  233 => 32,  229 => 31,  225 => 30,  222 => 29,  219 => 28,  217 => 27,  210 => 26,  203 => 25,  198 => 42,  195 => 25,  188 => 24,  178 => 22,  172 => 15,  170 => 14,  167 => 12,  160 => 10,  158 => 9,  151 => 8,  145 => 50,  138 => 46,  132 => 44,  129 => 43,  127 => 24,  124 => 23,  122 => 22,  117 => 21,  112 => 18,  110 => 8,  99 => 7,  97 => 6,  93 => 5,  90 => 4,  83 => 3,  77 => 52,  75 => 3,  68 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block field %}
<div class=\"form-field {{ layout_form_field_outer_classes|trim }} {{ form_field_outer_core|trim}}\">
  {% block contents %}
    {% if show_label %}
      <div class=\"{{- layout_form_field_outer_label_classes -}}\">
        {{- form_field_toggleable -}}
        <label class=\"{{ layout_form_field_label_classes }}{{ form_field_label_trim }}\" {% if field.id %}for=\"{{ form_field_for }}\"{% endif %}>
          {%- block label -%}
            {%- if form_field_help -%}
              <span class=\"tooltip\" data-tooltip=\"{{ form_field_help|e }}\">{{ form_field_label|raw }}</span>
            {%- else -%}
              {{ form_field_label|raw }}
            {%- endif -%}
            {%- if form_field_required %}
              <span class=\"required\">*</span>
            {%- endif -%}
          {%- endblock -%}
        </label>
      </div>
    {% endif %}
    <div class=\"{{ layout_form_field_outer_data_classes }}\"
        {% block global_attributes %}{% endblock %}
    >
      {% block group %}
        {% block input %}
          <div class=\"{{ layout_form_field_wrapper_classes }} {{ field.size }}\">
            {% block prepend %}{% endblock prepend %}
            {% set input_value = value is iterable ? value|join(\x27,\x27) : value|string %}
            <input
              name=\"{{ (scope ~ field.name)|fieldName }}\"
              value=\"{{ input_value|e }}\"
              {% block input_attributes %}{% endblock %}
            />
            {% block append %}{% endblock append %}
            {% if inline_errors and errors %}
            <div class=\"{{ form_field_inline_error_classes }}\">
              <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> {{ errors|first|e }}</p>
            </div>
            {% endif %}
          </div>
        {% endblock %}
      {% endblock %}
      {% if field.description is defined %}
        <div class=\"{{ form_field_extra_wrapper_classes }}\">
          <span class=\"form-description\">
            {{ form_field_description|raw }}
          </span>
        </div>
      {% endif %}
    </div>
  {% endblock %}
</div>
{% endblock %}
", "forms/layouts/field/default-field.html.twig", "/Users/amer/Sites/kaffekos1/user/plugins/form/templates/forms/layouts/field/default-field.html.twig");
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
