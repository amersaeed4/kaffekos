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

/* forms/layouts/xhr.html.twig */
class __TwigTemplate_a1bb3eebc3c3696c192c9472a5ddf542_sourced extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "xhr_submit", [], "any", false, false, false, 1) == true)) {
            // line 2
            yield "  ";
            // line 3
            yield "  ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["plugin://form/assets/xhr-submitter.js", ["group" => "bottom", "priority" => 101, "position" => "before"]], "method", false, false, false, 3);
            // line 4
            yield "  ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addInlineJs", [(((((("
    document.addEventListener(\x27DOMContentLoaded\x27, () => {
        // This now primarily sets up the *potential* for XHR submission
        // It might not attach the listener directly if recaptcha is present
        attachFormSubmitListener(\x27" . CoreExtension::getAttribute($this->env, $this->source,             // line 8
($context["form"] ?? null), "id", [], "any", false, false, false, 8)) . "\x27);

        // Re-run captcha initializers *if* the form was loaded via XHR initially
        // This covers edge cases, might not be strictly needed if captcha script handles DOMContentLoaded
        const formElement = document.getElementById(\x27") . CoreExtension::getAttribute($this->env, $this->source,             // line 12
($context["form"] ?? null), "id", [], "any", false, false, false, 12)) . "\x27);
        if (formElement && window.GravRecaptchaInitializers) {
            const initializerFuncName = \x27initRecaptcha_") . CoreExtension::getAttribute($this->env, $this->source,             // line 14
($context["form"] ?? null), "id", [], "any", false, false, false, 14)) . "\x27;
            if (typeof window.GravRecaptchaInitializers[initializerFuncName] === \x27function\x27) {
                 // Check if it needs init (e.g., if container exists but no widget/listener)
                 // For simplicity, just call it again; the init function should be idempotent
                 // window.GravRecaptchaInitializers[initializerFuncName]();
            }
        }
    });"), ["group" => "bottom", "priority" => 100, "position" => "before"]], "method", false, false, false, 4);
            // line 23
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["plugin://form/assets/captcha/recaptcha-handler.js", ["group" => "bottom", "priority" => 99, "position" => "before"]], "method", false, false, false, 23);
            // line 24
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["plugin://form/assets/captcha/turnstile-handler.js", ["group" => "bottom", "priority" => 98, "position" => "before"]], "method", false, false, false, 24);
            // line 25
            yield "    ";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/layouts/xhr.html.twig";
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
        return array (  81 => 25,  78 => 24,  75 => 23,  66 => 14,  63 => 12,  58 => 8,  52 => 4,  49 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if form.xhr_submit == true %}
  {# Ensure xhr-submitter.js is loaded BEFORE the inline JS that uses it #}
  {% do assets.addJs(\x27plugin://form/assets/xhr-submitter.js\x27, {\x27group\x27: \x27bottom\x27, \x27priority\x27: 101, \x27position\x27: \x27before\x27}) %}
  {% do assets.addInlineJs(\"
    document.addEventListener(\x27DOMContentLoaded\x27, () => {
        // This now primarily sets up the *potential* for XHR submission
        // It might not attach the listener directly if recaptcha is present
        attachFormSubmitListener(\x27\" ~ form.id ~ \"\x27);

        // Re-run captcha initializers *if* the form was loaded via XHR initially
        // This covers edge cases, might not be strictly needed if captcha script handles DOMContentLoaded
        const formElement = document.getElementById(\x27\" ~ form.id ~ \"\x27);
        if (formElement && window.GravRecaptchaInitializers) {
            const initializerFuncName = \x27initRecaptcha_\" ~ form.id ~ \"\x27;
            if (typeof window.GravRecaptchaInitializers[initializerFuncName] === \x27function\x27) {
                 // Check if it needs init (e.g., if container exists but no widget/listener)
                 // For simplicity, just call it again; the init function should be idempotent
                 // window.GravRecaptchaInitializers[initializerFuncName]();
            }
        }
    });\",
    {\x27group\x27: \x27bottom\x27, \x27priority\x27: 100, \x27position\x27: \x27before\x27}) %}
    {% do assets.addJs(\x27plugin://form/assets/captcha/recaptcha-handler.js\x27, {\x27group\x27: \x27bottom\x27, \x27priority\x27: 99, \x27position\x27: \x27before\x27}) %}
    {% do assets.addJs(\x27plugin://form/assets/captcha/turnstile-handler.js\x27, {\x27group\x27: \x27bottom\x27, \x27priority\x27: 98, \x27position\x27: \x27before\x27}) %}
    {# cap-handler.js is loaded by the cap field template itself so it works on non-XHR forms too. #}
{% endif %}", "forms/layouts/xhr.html.twig", "/Users/amer/Sites/kaffekos1/user/plugins/form/templates/forms/layouts/xhr.html.twig");
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
