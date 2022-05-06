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

/* @UserCountryMap/realtimeMap.twig */
class __TwigTemplate_c3c433f75873527608f19903bdaddda2aa78553013cffbeb69c66a5d6541a13f extends \Twig\Template
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
        echo "<div class=\"card\"><div class=\"RealTimeMap card-content\" style=\"position:relative; overflow:hidden;\"
     data-standalone=\"";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, (((isset($context["mapIsStandaloneNotWidget"]) || array_key_exists("mapIsStandaloneNotWidget", $context))) ? (_twig_default_filter(($context["mapIsStandaloneNotWidget"] ?? $this->getContext($context, "mapIsStandaloneNotWidget")), 0)) : (0)), "html", null, true);
        echo "\"
     data-config=\"";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["config"] ?? $this->getContext($context, "config"))), "html", null, true);
        echo "\"
     tabindex=\"0\">
    <div class=\"RealTimeMap_container\">
        <div class=\"RealTimeMap_map\" style=\"overflow:hidden;\"></div>
        <div class=\"realTimeMap_overlay\">
            ";
        // line 8
        if ((($this->getAttribute(($context["config"] ?? null), "showFooterMessage", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "showFooterMessage", []), true)) : (true))) {
            // line 9
            echo "            <span class=\"showing_visits_of\" style=\"display:none;\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountryMap_ShowingVisits"]), "html", null, true);
            echo "
                <span class=\"realTimeMap_timeSpan\" style=\"font-weight:bold;\"></span>
            </span>
            ";
        }
        // line 13
        echo "            <span class=\"no_data\" style=\"display:none;\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_ThereIsNoDataForThisReport"]), "html", null, true);
        echo "</span>
            <span class=\"loading_data\">";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_LoadingData"]), "html", null, true);
        echo "...</span>
            <img src=\"plugins/UserCountryMap/images/realtimemap-loading.gif\" style=\"vertical-align:baseline;position:relative;left:-2px;\">
        </div>
        ";
        // line 17
        if ((($this->getAttribute(($context["config"] ?? null), "showDateTime", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "showDateTime", []), true)) : (true))) {
            // line 18
            echo "        <div class=\"realTimeMap_overlay realTimeMap_datetime\"></div>
        ";
        }
        // line 20
        echo "    </div>
    <div class=\"RealTimeMap_meta\">
        <span class=\"loadingPiwik\">
            <img src=\"plugins/Morpheus/images/loading-blue.gif\"> ";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_LoadingData"]), "html", null, true);
        echo "...
        </span>
    </div>

    ";
        // line 27
        if (($context["userIsSuperUser"] ?? $this->getContext($context, "userIsSuperUser"))) {
            // line 28
            echo "        <div style=\"display:none;margin-top:20px;margin-bottom:0;\" id=\"realTimeMapNoVisitsInfo\" class=\"alert alert-info\">
            <p>";
            // line 29
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountryMap_NoVisitsInfo"]), "html", null, true);
            echo "</p>
            <p>";
            // line 30
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountryMap_NoVisitsInfo2"]), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 33
        echo "    </div>
</div>
<script type=\"text/javascript\">UserCountryMap.RealtimeMap.initElements();</script>";
    }

    public function getTemplateName()
    {
        return "@UserCountryMap/realtimeMap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 33,  93 => 30,  89 => 29,  86 => 28,  84 => 27,  77 => 23,  72 => 20,  68 => 18,  66 => 17,  60 => 14,  55 => 13,  47 => 9,  45 => 8,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\"><div class=\"RealTimeMap card-content\" style=\"position:relative; overflow:hidden;\"
     data-standalone=\"{{ mapIsStandaloneNotWidget|default(0) }}\"
     data-config=\"{{ config|json_encode }}\"
     tabindex=\"0\">
    <div class=\"RealTimeMap_container\">
        <div class=\"RealTimeMap_map\" style=\"overflow:hidden;\"></div>
        <div class=\"realTimeMap_overlay\">
            {% if config.showFooterMessage|default(true) %}
            <span class=\"showing_visits_of\" style=\"display:none;\">{{ 'UserCountryMap_ShowingVisits'|translate }}
                <span class=\"realTimeMap_timeSpan\" style=\"font-weight:bold;\"></span>
            </span>
            {% endif %}
            <span class=\"no_data\" style=\"display:none;\">{{ 'CoreHome_ThereIsNoDataForThisReport'|translate }}</span>
            <span class=\"loading_data\">{{ 'General_LoadingData'|translate }}...</span>
            <img src=\"plugins/UserCountryMap/images/realtimemap-loading.gif\" style=\"vertical-align:baseline;position:relative;left:-2px;\">
        </div>
        {% if config.showDateTime|default(true) %}
        <div class=\"realTimeMap_overlay realTimeMap_datetime\"></div>
        {% endif %}
    </div>
    <div class=\"RealTimeMap_meta\">
        <span class=\"loadingPiwik\">
            <img src=\"plugins/Morpheus/images/loading-blue.gif\"> {{ 'General_LoadingData'|translate }}...
        </span>
    </div>

    {% if userIsSuperUser %}
        <div style=\"display:none;margin-top:20px;margin-bottom:0;\" id=\"realTimeMapNoVisitsInfo\" class=\"alert alert-info\">
            <p>{{ 'UserCountryMap_NoVisitsInfo'|translate }}</p>
            <p>{{ 'UserCountryMap_NoVisitsInfo2'|translate }}</p>
        </div>
    {% endif %}
    </div>
</div>
<script type=\"text/javascript\">UserCountryMap.RealtimeMap.initElements();</script>", "@UserCountryMap/realtimeMap.twig", "/var/www/zinecat.org/matomo/plugins/UserCountryMap/templates/realtimeMap.twig");
    }
}
