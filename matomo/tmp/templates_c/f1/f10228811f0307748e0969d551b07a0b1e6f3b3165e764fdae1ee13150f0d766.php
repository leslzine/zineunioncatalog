<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Live/_actionTooltip.twig */
class __TwigTemplate_180bb4752bc3076bf8b5794e1b5060cca92ab984f5e1996ad55ab13e7e3795a1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "serverTimePretty", []), "html", null, true);
        if (($this->getAttribute(($context["action"] ?? null), "url", [], "any", true, true) && twig_length_filter($this->env, twig_trim_filter($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", []))))) {
            // line 2
            echo "
";
            // line 3
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", []), "html", null, true);
        }
        if ($this->getAttribute(($context["action"] ?? null), "generationTime", [], "any", true, true)) {
            // line 4
            echo "
";
            // line 5
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ColumnGenerationTime"]), "html", null, true);
            echo ": ";
            echo $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "generationTime", []);
        }
        // line 6
        if ($this->getAttribute(($context["action"] ?? null), "timeSpentPretty", [], "any", true, true)) {
            // line 7
            echo "
";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_TimeOnPage"]), "html", null, true);
            echo ": ";
            echo $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "timeSpentPretty", []);
        }
    }

    public function getTemplateName()
    {
        return "@Live/_actionTooltip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  50 => 7,  48 => 6,  43 => 5,  40 => 4,  36 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ action.serverTimePretty }}{% if action.url is defined and action.url|trim|length %}

{{ action.url }}{% endif %}{%- if action.generationTime is defined %}

{{ 'General_ColumnGenerationTime'|translate }}: {{ action.generationTime|raw }}{% endif %}
{%- if action.timeSpentPretty is defined %}

{{ 'General_TimeOnPage'|translate }}: {{ action.timeSpentPretty|raw }}{% endif -%}", "@Live/_actionTooltip.twig", "/var/www/zinecat.org/matomo/plugins/Live/templates/_actionTooltip.twig");
    }
}
