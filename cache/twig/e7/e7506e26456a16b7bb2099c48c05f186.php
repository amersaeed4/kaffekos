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

/* partials/hours.html.twig */
class __TwigTemplate_3aad1d76f37ef28ef4928b8419c3bf3c_sourced extends Template
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
        yield "<table class=\"hours";
        yield (string) (((($tmp = ($context["compact"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" hours-compact") : (""));
        yield "\" data-hours-table>
    <tbody>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "hours"));
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 6
            yield "        <tr data-day=\"";
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["h"], "day", [], "any", false, false, false, 6)), "html", null, true);
            yield "\">
            <th scope=\"row\">";
            // line 7
            yield (string) (((($tmp = ($context["compact"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["h"], "day", [], "any", false, false, false, 7), 0, 3), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "day", [], "any", false, false, false, 7), "html", null, true)));
            yield "</th>
            <td>";
            // line 8
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["h"], "closed", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Closed";
            } else {
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(8))->call("time12", [CoreExtension::getAttribute($this->env, $this->source, $context["h"], "open", [], "any", false, false, false, 8)], $context, 8, $this->source);
                yield " &ndash; ";
                yield (string) ($macros["kk"] ?? $this->throwUninitializedMacroNamespace(8))->call("time12", [CoreExtension::getAttribute($this->env, $this->source, $context["h"], "close", [], "any", false, false, false, 8)], $context, 8, $this->source);
            }
            yield "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['h'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 11
        yield "    </tbody>
</table>
";
        // line 13
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "hours_note")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"hours-note\">";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "hours_note"), "html", null, true);
            yield "</p>";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/hours.html.twig";
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
        return array (  89 => 13,  85 => 11,  69 => 8,  65 => 7,  60 => 6,  56 => 5,  50 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/kk.html.twig\x27 as kk %}
{# Opening hours table. Pass compact: true for the footer version #}
<table class=\"hours{{ compact ? \x27 hours-compact\x27 : \x27\x27 }}\" data-hours-table>
    <tbody>
    {% for h in theme_var(\x27hours\x27) %}
        <tr data-day=\"{{ h.day|lower }}\">
            <th scope=\"row\">{{ compact ? h.day|slice(0, 3) : h.day }}</th>
            <td>{% if h.closed %}Closed{% else %}{{ kk.time12(h.open) }} &ndash; {{ kk.time12(h.close) }}{% endif %}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
{% if theme_var(\x27hours_note\x27) %}<p class=\"hours-note\">{{ theme_var(\x27hours_note\x27) }}</p>{% endif %}
", "partials/hours.html.twig", "/Users/amer/Sites/kaffekos1/user/themes/kaffekos/templates/partials/hours.html.twig");
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
