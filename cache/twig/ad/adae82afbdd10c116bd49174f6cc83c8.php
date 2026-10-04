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

/* partials/menu-item.html.twig */
class __TwigTemplate_185f2722367df89b7d645db5a2edf225_sourced extends Template
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
        $macros["kk"] = $this->macros["kk"] = $this->load("macros/kk.html.twig", 1)->unwrap()->getMacroNamespace();
        // line 3
        yield "<article class=\"menu-item";
        yield (string) (((($tmp = ($context["card"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" menu-card") : (""));
        yield (string) ((((($tmp = ($context["image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["show_image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? (" has-image") : (""));
        yield "\">
    ";
        // line 4
        if (((($tmp = ($context["image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["show_image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 5
            yield "        <div class=\"menu-item-img\">";
            yield (string) (((($tmp = ($context["card"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($macros["kk"] ?? $this->throwUninitializedMacroNamespace(5))->call("img", [($context["image"] ?? null), 480, 360, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 5)], $context, 5, $this->source)) : (($macros["kk"] ?? $this->throwUninitializedMacroNamespace(5))->call("img", [($context["image"] ?? null), 192, 192, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 5)], $context, 5, $this->source)));
            yield "</div>
    ";
        }
        // line 7
        yield "    <div class=\"menu-item-body\">
        <div class=\"menu-item-top\">
            <h3>";
        // line 9
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 9), "html", null, true);
        yield "</h3>
            ";
        // line 10
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($context["show_price"] ?? null) === false))) {
            // line 11
            yield "                <span class=\"menu-dots\" aria-hidden=\"true\"></span>
                <span class=\"menu-price\">";
            // line 12
            yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(12))->call("price", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "any", false, false, false, 12), ($context["currency"] ?? null)], $context, 12, $this->source);
            yield "</span>
            ";
        }
        // line 14
        yield "        </div>
        ";
        // line 15
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "description", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "description", [], "any", false, false, false, 15), "html", null, true);
            yield "</p>";
        }
        // line 16
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"badge badge-";
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 16)), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 16), "html", null, true);
            yield "</span>";
        }
        // line 17
        yield "    </div>
</article>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/menu-item.html.twig";
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
        return array (  100 => 17,  91 => 16,  85 => 15,  82 => 14,  77 => 12,  74 => 11,  72 => 10,  68 => 9,  64 => 7,  58 => 5,  56 => 4,  50 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/kk.html.twig\x27 as kk %}
{# One menu item. Pass: item, image (media or null), currency, show_image, card (true = big photo card), show_price (false hides the price) #}
<article class=\"menu-item{{ card ? \x27 menu-card\x27 : \x27\x27 }}{{ image and show_image ? \x27 has-image\x27 : \x27\x27 }}\">
    {% if image and show_image %}
        <div class=\"menu-item-img\">{{ (card ? kk.img(image, 480, 360, item.name) : kk.img(image, 192, 192, item.name)) }}</div>
    {% endif %}
    <div class=\"menu-item-body\">
        <div class=\"menu-item-top\">
            <h3>{{ item.name }}</h3>
            {% if item.price and show_price is not same as(false) %}
                <span class=\"menu-dots\" aria-hidden=\"true\"></span>
                <span class=\"menu-price\">{{ kk.price(item.price, currency) }}</span>
            {% endif %}
        </div>
        {% if item.description %}<p>{{ item.description }}</p>{% endif %}
        {% if item.badge %}<span class=\"badge badge-{{ item.badge|lower }}\">{{ item.badge }}</span>{% endif %}
    </div>
</article>
", "partials/menu-item.html.twig", "/Users/amer/Sites/kaffekos1/user/themes/kaffekos/templates/partials/menu-item.html.twig");
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
