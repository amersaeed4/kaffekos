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

/* partials/form-messages.html.twig */
class __TwigTemplate_033c87568d251939135adceb3c036902_sourced extends Template
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    ";
            $context["inline_errors"] = (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inline_errors", [], "any", false, false, false, 2))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inline_errors", [], "any", false, false, false, 2)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 2), "form", [], "any", false, false, false, 2), "inline_errors", [false], "method", false, false, false, 2)));
            // line 3
            yield "    ";
            $context["status_mapping"] = ["success" => "green", "error" => "red", "warning" => "yellow"];
            // line 4
            yield "    ";
            $context["message"] = ((((($tmp = ($context["inline_errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "messages", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "GRAV.FORM.VALIDATION_FAIL")) : (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 4)));
            // line 5
            yield "    <div class=\"notices ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 5), "html", null, true);
            yield " ";
            yield (string) (((($tmp = (($_v0 = ($context["status_mapping"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 5)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape((($_v2 = ($context["status_mapping"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 5)) instanceof \Stringable && (is_array($_v2) || $_v2 instanceof \ArrayObject || $_v2 instanceof \ArrayIterator) ? (string) $_v3 : $_v3)] ?? null) : null), "html", null, true)) : ("green"));
            yield "\"><p>";
            yield (string) ($context["message"] ?? null);
            yield "</p></div>
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/form-messages.html.twig";
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
        return array (  59 => 5,  56 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if form.message %}
    {% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}
    {% set status_mapping = {\x27success\x27:\x27green\x27, \x27error\x27: \x27red\x27, \x27warning\x27: \x27yellow\x27} %}
    {% set message = inline_errors and form.messages ? \"GRAV.FORM.VALIDATION_FAIL\"|t : form.message %}
    <div class=\"notices {{ form.status }} {{ status_mapping[form.status] ?: \x27green\x27 }}\"><p>{{ message|raw }}</p></div>
{% endif %}", "partials/form-messages.html.twig", "/Users/amer/Sites/kaffekos1/user/plugins/form/templates/partials/form-messages.html.twig");
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
