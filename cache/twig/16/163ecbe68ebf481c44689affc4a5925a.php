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

/* @Page:/Users/amer/Sites/kaffekos1/user/pages/02.about */
class __TwigTemplate_62cffe97c75406150a7ee7fae520a92b_sourced extends Template
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
        yield "<h2>A little piece of Norway in Lahore</h2>
<p>The name says it all. <strong>Kaffe</strong> is the Norwegian word for coffee, and <strong>kos</strong> is that wonderful feeling of cosiness, warmth and contentment that Norwegians treasure through long winters.</p>
<p>Kaffekos is our way of bringing that feeling to Lahore: a clean, calm and welcoming café where the coffee is carefully crafted, the bakes are warm and the atmosphere makes you want to stay a little longer.</p>
<p>Whether you are meeting friends, working on a laptop, or just treating yourself to a quiet moment, there is always a seat and a warm welcome waiting.</p>
<p><em>Velkommen. Kos deg!</em></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/kaffekos1/user/pages/02.about";
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
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h2>A little piece of Norway in Lahore</h2>
<p>The name says it all. <strong>Kaffe</strong> is the Norwegian word for coffee, and <strong>kos</strong> is that wonderful feeling of cosiness, warmth and contentment that Norwegians treasure through long winters.</p>
<p>Kaffekos is our way of bringing that feeling to Lahore: a clean, calm and welcoming café where the coffee is carefully crafted, the bakes are warm and the atmosphere makes you want to stay a little longer.</p>
<p>Whether you are meeting friends, working on a laptop, or just treating yourself to a quiet moment, there is always a seat and a warm welcome waiting.</p>
<p><em>Velkommen. Kos deg!</em></p>", "@Page:/Users/amer/Sites/kaffekos1/user/pages/02.about", "");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
