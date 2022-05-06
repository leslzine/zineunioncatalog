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

/* @Live/_totalVisitors.twig */
class __TwigTemplate_8df6972ed3b7a661c3828805ecb25c275f2292414ff9bd1cfb46898c1500c7f3 extends \Twig\Template
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
        echo "<div id=\"visitsTotal\">
    <table class=\"dataTable\" cellspacing=\"0\">
        <thead>
        <tr>
            <th id=\"label\" class=\"sortable label first\" style=\"cursor: auto;\">
                <div id=\"thDIV\">";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Date"]), "html", null, true);
        echo "</div>
            </th>
            <th class=\"sortable\" style=\"cursor: auto;\">
                <div id=\"thDIV\">";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ColumnNbVisits"]), "html", null, true);
        echo "</div>
            </th>
            <th class=\"sortable\" style=\"cursor: auto;\">
                <div id=\"thDIV\">";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Actions"]), "html", null, true);
        echo "</div>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr class=\"\">
            <td class=\"label column\">";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_LastHours", 24]), "html", null, true);
        echo "</td>
            <td class=\"column\">";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), [($context["visitorsCountToday"] ?? $this->getContext($context, "visitorsCountToday"))]), "html", null, true);
        echo "</td>
            <td class=\"column\">";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), [($context["pisToday"] ?? $this->getContext($context, "pisToday"))]), "html", null, true);
        echo "</td>
        </tr>
        <tr class=\"\">
            <td class=\"label column\">";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_LastMinutes", 30]), "html", null, true);
        echo "</td>
            <td class=\"column\">";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), [($context["visitorsCountHalfHour"] ?? $this->getContext($context, "visitorsCountHalfHour"))]), "html", null, true);
        echo "</td>
            <td class=\"column\">";
        // line 25
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), [($context["pisHalfhour"] ?? $this->getContext($context, "pisHalfhour"))]), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Live/_totalVisitors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  76 => 24,  72 => 23,  66 => 20,  62 => 19,  58 => 18,  49 => 12,  43 => 9,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"visitsTotal\">
    <table class=\"dataTable\" cellspacing=\"0\">
        <thead>
        <tr>
            <th id=\"label\" class=\"sortable label first\" style=\"cursor: auto;\">
                <div id=\"thDIV\">{{ 'General_Date'|translate }}</div>
            </th>
            <th class=\"sortable\" style=\"cursor: auto;\">
                <div id=\"thDIV\">{{ 'General_ColumnNbVisits'|translate }}</div>
            </th>
            <th class=\"sortable\" style=\"cursor: auto;\">
                <div id=\"thDIV\">{{ 'General_Actions'|translate }}</div>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr class=\"\">
            <td class=\"label column\">{{ 'Live_LastHours'|translate(24) }}</td>
            <td class=\"column\">{{ visitorsCountToday|number }}</td>
            <td class=\"column\">{{ pisToday|number }}</td>
        </tr>
        <tr class=\"\">
            <td class=\"label column\">{{ 'Live_LastMinutes'|translate(30) }}</td>
            <td class=\"column\">{{ visitorsCountHalfHour|number }}</td>
            <td class=\"column\">{{ pisHalfhour|number }}</td>
        </tr>
        </tbody>
    </table>
</div>
", "@Live/_totalVisitors.twig", "/var/www/zinecat.org/matomo/plugins/Live/templates/_totalVisitors.twig");
    }
}
