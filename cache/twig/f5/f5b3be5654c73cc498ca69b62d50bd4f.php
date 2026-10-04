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

/* forms/fields/honeypot/honeypot.html.twig */
class __TwigTemplate_5edbb5c2d8ecc0ad2df8bdfbfd73fd0f_sourced extends Template
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
            'field' => [$this, 'block_field'],
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
    public function block_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        $context["input_value"] = ((is_iterable(($context["value"] ?? null))) ? (Twig\Extension\CoreExtension::join(($context["value"] ?? null), ",")) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->stringGuarded($this->env, false, ($context["value"] ?? null))));
        // line 5
        yield "<input aria-hidden=\"true\"
       type=\"text\"
       ";
        // line 7
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 7), "form", [], "any", false, false, false, 7), "inline_css", [], "any", false, false, false, 7) == true)) {
            // line 8
            yield "       style=\"visibility:hidden;position:absolute!important;height:1px;width:1px;overflow:hidden;clip:rect(1px,1px,1px,1px);\"
       ";
        }
        // line 10
        yield "       class=\"form-honeybear\"
       tabindex=\"-1\"
       autocomplete=\"off\"
       name=\"";
        // line 13
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 13))), "html", null, true);
        yield "\"
       value=\"";
        // line 14
        yield (string) $this->escaper->escape(($context["input_value"] ?? null));
        yield "\" />
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/honeypot/honeypot.html.twig";
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
        return array (  85 => 14,  81 => 13,  76 => 10,  72 => 8,  70 => 7,  66 => 5,  64 => 4,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
{% set input_value = value is iterable ? value|join(\x27,\x27) : value|string %}
<input aria-hidden=\"true\"
       type=\"text\"
       {% if config.plugins.form.inline_css == true %}
       style=\"visibility:hidden;position:absolute!important;height:1px;width:1px;overflow:hidden;clip:rect(1px,1px,1px,1px);\"
       {% endif %}
       class=\"form-honeybear\"
       tabindex=\"-1\"
       autocomplete=\"off\"
       name=\"{{ (scope ~ field.name)|fieldName }}\"
       value=\"{{ input_value|e }}\" />
{% endblock %}
", "forms/fields/honeypot/honeypot.html.twig", "/Users/amer/Sites/kaffekos1/user/plugins/form/templates/forms/fields/honeypot/honeypot.html.twig");
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
