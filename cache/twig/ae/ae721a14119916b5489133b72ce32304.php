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

/* forms/fields/nonce/nonce.html.twig */
class __TwigTemplate_6fe930f33c00b169096294da85423e8f_sourced extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["nonce_action"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getNonceAction", [], "method", true, true, false, 1) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getNonceAction", [], "method", false, false, false, 1)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getNonceAction", [], "method", false, false, false, 1)) : ("form"));
        // line 2
        $context["nonce_name"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getNonceName", [], "method", true, true, false, 2) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getNonceName", [], "method", false, false, false, 2)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getNonceName", [], "method", false, false, false, 2)) : ("form-nonce"));
        // line 3
        $context["nonce_value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getNonce", [], "method", false, false, false, 3);
        // line 4
        yield "<input type=\"hidden\" name=\"";
        yield (string) $this->escaper->escape(($context["nonce_name"] ?? null), "html", null, true);
        yield "\" value=\"";
        yield (string) $this->escaper->escape(($context["nonce_value"] ?? null), "html", null, true);
        yield "\" class=\"form-nonce-field\" data-nonce-action=\"";
        yield (string) $this->escaper->escape(($context["nonce_action"] ?? null), "html", null, true);
        yield "\" />
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/nonce/nonce.html.twig";
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
        return array (  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set nonce_action = form.getNonceAction() ?? \x27form\x27 %}
{% set nonce_name = form.getNonceName() ?? \x27form-nonce\x27 %}
{% set nonce_value = form.getNonce() %}
<input type=\"hidden\" name=\"{{ nonce_name }}\" value=\"{{ nonce_value }}\" class=\"form-nonce-field\" data-nonce-action=\"{{ nonce_action }}\" />
", "forms/fields/nonce/nonce.html.twig", "/Users/amer/Sites/kaffekos1/user/plugins/form/templates/forms/fields/nonce/nonce.html.twig");
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
