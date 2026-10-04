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

/* forms/form.html.twig */
class __TwigTemplate_f82831bef19cd9c59841185a4614ccbb_sourced extends Template
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
            'xhr' => [$this, 'block_xhr'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 29
        return $this->parent ??= $this->load("forms/default/form.html.twig", 29);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("forms/default/form.html.twig", 29);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_xhr(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield from $this->load("forms/layouts/xhr.html.twig", 32)->unwrap()->yield($context);
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/form.html.twig";
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
        return array (  61 => 32,  54 => 31,  43 => 29,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
DO NOT MODIFY!

Default layout can be found in form plugin or your theme:

templates/forms/layouts/form/default-form.html.twig
templates/forms/layouts/field/default-field.html.twig
templates/forms/layouts/button/default-button.html.twig

If you want to use multiple different layouts in your site, you can do:

```
form:
  name: my-form
  layout: tailwind
```

and copy the above files to:

templates/forms/layouts/form/tailwind-form.html.twig
templates/forms/layouts/field/tailwind-field.html.twig
templates/forms/layouts/button/tailwind-button.html.twig

You can also override individual fields by copying (using text field as an example):

templates/forms/fields/text/text.html.twig -> templates/forms/fields/text/tailwind-text.html.twig

#}
{% extends \"forms/default/form.html.twig\" %}

{% block xhr %}
{% include \x27forms/layouts/xhr.html.twig\x27 %}
{% endblock %}

", "forms/form.html.twig", "/Users/amer/Sites/kaffekos1/user/plugins/form/templates/forms/form.html.twig");
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
