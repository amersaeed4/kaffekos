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

/* forms/layouts/form/default-form.html.twig */
class __TwigTemplate_3edacc6127adf13e86f27ea617eee0c8_sourced extends Template
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
            'embed_form_core' => [$this, 'block_embed_form_core'],
            'embed_form_classes' => [$this, 'block_embed_form_classes'],
            'embed_form_custom_attributes' => [$this, 'block_embed_form_custom_attributes'],
            'embed_fields' => [$this, 'block_embed_fields'],
            'embed_buttons' => [$this, 'block_embed_buttons'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<form
    ";
        // line 2
        yield from $this->unwrap()->yieldBlock('embed_form_core', $context, $blocks);
        // line 3
        yield "    ";
        yield from $this->unwrap()->yieldBlock('embed_form_classes', $context, $blocks);
        // line 4
        yield "    ";
        yield from $this->unwrap()->yieldBlock('embed_form_custom_attributes', $context, $blocks);
        // line 5
        yield ">
  ";
        // line 6
        yield from $this->unwrap()->yieldBlock('embed_fields', $context, $blocks);
        // line 7
        yield "  ";
        yield from $this->unwrap()->yieldBlock('embed_buttons', $context, $blocks);
        // line 8
        yield "</form>

";
        return; yield;
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_form_core(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_form_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_form_custom_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_buttons(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/layouts/form/default-form.html.twig";
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
        return array (  116 => 7,  106 => 6,  96 => 4,  86 => 3,  76 => 2,  69 => 8,  66 => 7,  64 => 6,  61 => 5,  58 => 4,  55 => 3,  53 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form
    {% block embed_form_core %}{% endblock %}
    {% block embed_form_classes %}{% endblock %}
    {% block embed_form_custom_attributes %}{% endblock %}
>
  {% block embed_fields %}{% endblock %}
  {% block embed_buttons %}{% endblock %}
</form>

", "forms/layouts/form/default-form.html.twig", "/Users/amer/Sites/kaffekos1/user/plugins/form/templates/forms/layouts/form/default-form.html.twig");
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
