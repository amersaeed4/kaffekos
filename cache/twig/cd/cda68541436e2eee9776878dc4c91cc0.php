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

/* partials/menu-section.html.twig */
class __TwigTemplate_263b97c9864fc2909a44155851b19b3f_sourced extends Template
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
        // line 2
        yield "<section class=\"menu-section\" id=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cat"] ?? null), "slug", [], "any", false, false, false, 2), "html", null, true);
        yield "\">
    <header class=\"menu-section-head\">
        <h2>";
        // line 4
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cat"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        yield "</h2>
        ";
        // line 5
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["cat"] ?? null), "header", [], "any", false, false, false, 5), "description", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["cat"] ?? null), "header", [], "any", false, false, false, 5), "description", [], "any", false, false, false, 5), "html", null, true);
            yield "</p>";
        }
        // line 6
        yield "    </header>
    <div class=\"menu-grid\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["cat"] ?? null), "header", [], "any", false, false, false, 8), "items", [], "any", false, false, false, 8), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, true, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "soldout", [], "any", false, false, true, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)); }));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            yield "            ";
            $context["image"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["cat"] ?? null), "media", [], "any", false, false, false, 9)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 9)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)) : (null));
            // line 10
            yield "            ";
            yield from $this->load("partials/menu-item.html.twig", 10)->unwrap()->yield(CoreExtension::merge($context, ["item" => $context["item"], "image" => ($context["image"] ?? null), "currency" => ($context["currency"] ?? null), "show_image" => ($context["show_images"] ?? null), "show_price" => ($context["show_prices"] ?? null)]));
            // line 11
            yield "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 12
        yield "    </div>
</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/menu-section.html.twig";
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
        return array (  106 => 12,  91 => 11,  88 => 10,  85 => 9,  68 => 8,  64 => 6,  58 => 5,  54 => 4,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# One category block. Pass: cat (page), currency, show_images, show_prices #}
<section class=\"menu-section\" id=\"{{ cat.slug }}\">
    <header class=\"menu-section-head\">
        <h2>{{ cat.title }}</h2>
        {% if cat.header.description %}<p>{{ cat.header.description }}</p>{% endif %}
    </header>
    <div class=\"menu-grid\">
        {% for item in (cat.header.items)|filter(item => item.name and not item.soldout) %}
            {% set image = item.image ? cat.media[item.image] : null %}
            {% include \x27partials/menu-item.html.twig\x27 with {item: item, image: image, currency: currency, show_image: show_images, show_price: show_prices} %}
        {% endfor %}
    </div>
</section>
", "partials/menu-section.html.twig", "/Users/amer/Sites/kaffekos1/user/themes/kaffekos/templates/partials/menu-section.html.twig");
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
