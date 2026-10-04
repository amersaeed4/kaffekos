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

/* forms/layouts/form.html.twig */
class __TwigTemplate_80b44d0f1fe371fa385be5ec5bfba6dc_sourced extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return $this->load([(("forms/layouts/form/" . ($context["layout"] ?? null)) . "-form.html.twig"), "forms/layouts/form/default-form.html.twig"], 4);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        $context["layout"] = (((array_key_exists("layout", $context) &&  !(null === $context["layout"]))) ? ($context["layout"]) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "layout", [], "any", true, true, false, 3) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "layout", [], "any", false, false, false, 3)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "layout", [], "any", false, false, false, 3)) : ("default"))));
        // line 4
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/layouts/form.html.twig";
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
        return array (  51 => 4,  49 => 3,  42 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# DEPRECATED: Do not override this file! Use forms/layouts/form/[FORM_LAYOUT]-form.html.twig instead #}

{% set layout = layout ?? form.layout ?? \x27default\x27 %}
{% extends [\"forms/layouts/form/#{layout}-form.html.twig\", \x27forms/layouts/form/default-form.html.twig\x27] %}
", "forms/layouts/form.html.twig", "/Users/amer/Sites/kaffekos1/user/plugins/form/templates/forms/layouts/form.html.twig");
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
