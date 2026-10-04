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

/* forms/fields/text/text.html.twig */
class __TwigTemplate_9c470a18a0ae22fbe23c69ef42c225f2_sourced extends Template
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
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return $this->parent ??= $this->load("forms/field.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "copy_to_clipboard", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 2
            $context["field"] = Twig\Extension\CoreExtension::merge(($context["field"] ?? null), ["wrapper_classes" => "form-input-addon-wrapper"]);
        }
        // line 5
        $this->parent = $this->load("forms/field.html.twig", 5);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_prepend(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "    <div class=\"form-input-addon form-input-prepend\">";
            // line 10
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend", [], "any", false, false, false, 10)));
            } else {
                yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "prepend", [], "any", false, false, false, 10)));
            }
            // line 11
            yield "</div>
";
        }
        return; yield;
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "    type=\"text\"
    ";
        // line 17
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "size=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 17), "html", null, true);
            yield "\"";
        }
        // line 18
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "minlength", [], "any", true, true, false, 18) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, true, false, 18), "min", [], "any", true, true, false, 18))) {
            yield "minlength=\"";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "minlength", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "minlength", [], "any", false, false, false, 18), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 18), "min", [], "any", false, false, false, 18))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 18), "min", [], "any", false, false, false, 18))), "html", null, true);
            yield "\"";
        }
        // line 19
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "maxlength", [], "any", true, true, false, 19) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, true, false, 19), "max", [], "any", true, true, false, 19))) {
            yield "maxlength=\"";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "maxlength", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "maxlength", [], "any", false, false, false, 19), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 19), "max", [], "any", false, false, false, 19))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 19), "max", [], "any", false, false, false, 19))), "html", null, true);
            yield "\"";
        }
        // line 20
        yield "    ";
        yield from $this->yieldParentBlock("input_attributes", $context, $blocks);
        yield "
";
        return; yield;
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_append(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "copy_to_clipboard", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "        <div class=\"form-input-addon form-input-append copy-to-clipboard\">
            ";
            // line 26
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "copy_to_clipboard", [], "any", false, false, false, 26), ["0", "1"])) {
                // line 27
                yield "                <i class=\"fa fa-clipboard\"></i>
            ";
            } else {
                // line 29
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "copy_to_clipboard", [], "any", false, false, false, 29)));
                } else {
                    yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "copy_to_clipboard", [], "any", false, false, false, 29)));
                }
            }
            // line 31
            yield "        </div>
    ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["field"] ?? null), "append", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "        <div class=\"form-input-addon form-input-append\">";
            // line 34
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append", [], "any", false, false, false, 34)));
            } else {
                yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "append", [], "any", false, false, false, 34)));
            }
            // line 35
            yield "</div>
    ";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/text/text.html.twig";
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
        return array (  166 => 35,  160 => 34,  158 => 33,  156 => 32,  153 => 31,  146 => 29,  142 => 27,  140 => 26,  137 => 25,  134 => 24,  127 => 23,  119 => 20,  112 => 19,  105 => 18,  99 => 17,  96 => 16,  89 => 15,  82 => 11,  76 => 10,  74 => 9,  72 => 8,  65 => 7,  60 => 5,  57 => 2,  55 => 1,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if field.prepend or field.append or field.copy_to_clipboard %}
    {% set field = field|merge({\x27wrapper_classes\x27: \x27form-input-addon-wrapper\x27}) %}
{% endif %}

{% extends \"forms/field.html.twig\" %}

{% block prepend %}
{% if field.prepend %}
    <div class=\"form-input-addon form-input-prepend\">
        {%- if field.markdown -%}{{- field.prepend|t|markdown|raw -}}{%- else -%}{{- field.prepend|t|e -}}{%- endif -%}
    </div>
{% endif %}
{% endblock %}

{% block input_attributes %}
    type=\"text\"
    {% if field.size %}size=\"{{ field.size }}\"{% endif %}
    {% if field.minlength is defined or field.validate.min is defined %}minlength=\"{{ field.minlength | default(field.validate.min) }}\"{% endif %}
    {% if field.maxlength is defined or field.validate.max is defined %}maxlength=\"{{ field.maxlength | default(field.validate.max) }}\"{% endif %}
    {{ parent() }}
{% endblock %}

{% block append %}
    {% if field.copy_to_clipboard %}
        <div class=\"form-input-addon form-input-append copy-to-clipboard\">
            {% if field.copy_to_clipboard in [\x270\x27, \x271\x27] %}
                <i class=\"fa fa-clipboard\"></i>
            {% else %}
                {%- if field.markdown -%}{{- field.copy_to_clipboard|t|markdown|raw -}}{%- else -%}{{- field.copy_to_clipboard|t|e -}}{%- endif -%}
            {% endif %}
        </div>
    {% elseif field.append %}
        <div class=\"form-input-addon form-input-append\">
            {%- if field.markdown -%}{{- field.append|t|markdown|raw -}}{%- else -%}{{- field.append|t|e -}}{%- endif -%}
        </div>
    {% endif %}
{% endblock %}


", "forms/fields/text/text.html.twig", "/Users/amer/Sites/kaffekos1/user/plugins/form/templates/forms/fields/text/text.html.twig");
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
