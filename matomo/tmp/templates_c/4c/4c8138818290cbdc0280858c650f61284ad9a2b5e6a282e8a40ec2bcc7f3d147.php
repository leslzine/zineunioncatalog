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

/* @UserCountry/_updaterManage.twig */
class __TwigTemplate_174802752b21c2b78b4636a2b422214da81abc50c40b9249416a487374a6c855 extends \Twig\Template
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
        echo "<div ng-show=\"locationUpdater.geoipDatabaseInstalled\" id=\"geoipdb-update-info\">
    <p>
\t\t";
        // line 3
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_GeoIPUpdaterInstructions", "<a href=\"http://www.maxmind.com/?rId=piwik\">", "</a>", "<a rel=\"noreferrer noopener\" href=\"https://db-ip.com/?refid=mtm\">", "</a>"]);
        echo "
        <br/><br/>
\t\t";
        // line 5
        if ( !twig_test_empty((((isset($context["dbipLiteUrl"]) || array_key_exists("dbipLiteUrl", $context))) ? (_twig_default_filter(($context["dbipLiteUrl"] ?? $this->getContext($context, "dbipLiteUrl")))) : ("")))) {
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_GeoLiteCityLink", (("<a rel=\"noreferrer noopener\" href=\"" . \Piwik\piwik_escape_filter($this->env, ($context["dbipLiteUrl"] ?? $this->getContext($context, "dbipLiteUrl")), "html_attr")) . "\">"), \Piwik\piwik_escape_filter($this->env, ($context["dbipLiteUrl"] ?? $this->getContext($context, "dbipLiteUrl")), "html"), "</a>"]);
        }
        // line 6
        echo "
\t\t<span ng-show=\"locationUpdater.geoipDatabaseInstalled\">
\t\t\t<br/><br/>";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_GeoIPUpdaterIntro"]), "html", null, true);
        echo ":
\t\t</span>
\t</p>

\t<div piwik-field uicontrol=\"text\" name=\"geoip-location-db\"
\t\t ng-model=\"locationUpdater.locationDbUrl\"
\t\t introduction=\"";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_LocationDatabase"]), "html_attr");
        echo "\"
\t\t data-title=\"";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Actions_ColumnDownloadURL"]), "html_attr");
        echo "\"
\t\t value=\"";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, ($context["geoIPLocUrl"] ?? $this->getContext($context, "geoIPLocUrl")), "html", null, true);
        echo "\"
\t\t inline-help=\"";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_LocationDatabaseHint"]), "html_attr");
        echo "\">
\t</div>

\t<div piwik-field uicontrol=\"text\" name=\"geoip-isp-db\"
\t\t ng-model=\"locationUpdater.ispDbUrl\"
\t\t introduction=\"";
        // line 22
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_ISPDatabase"]), "html_attr");
        echo "\"
\t\t data-title=\"";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Actions_ColumnDownloadURL"]), "html_attr");
        echo "\"
\t\t value=\"";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, ($context["geoIPIspUrl"] ?? $this->getContext($context, "geoIPIspUrl")), "html", null, true);
        echo "\">
\t</div>

\t";
        // line 27
        if ((isset($context["geoIPOrgUrl"]) || array_key_exists("geoIPOrgUrl", $context))) {
            // line 28
            echo "\t<div piwik-field uicontrol=\"text\" name=\"geoip-org-db\"
\t\t ng-model=\"locationUpdater.orgDbUrl\"
\t\t introduction=\"";
            // line 30
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_OrgDatabase"]), "html_attr");
            echo "\"
\t\t data-title=\"";
            // line 31
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Actions_ColumnDownloadURL"]), "html_attr");
            echo "\"
\t\t value=\"";
            // line 32
            echo \Piwik\piwik_escape_filter($this->env, ($context["geoIPOrgUrl"] ?? $this->getContext($context, "geoIPOrgUrl")), "html", null, true);
            echo "\">
\t</div>
\t";
        }
        // line 35
        echo "
\t<div id=\"locationProviderUpdatePeriodInlineHelp\" class=\"inline-help-node\">
\t\t";
        // line 37
        if (((isset($context["lastTimeUpdaterRun"]) || array_key_exists("lastTimeUpdaterRun", $context)) &&  !twig_test_empty(($context["lastTimeUpdaterRun"] ?? $this->getContext($context, "lastTimeUpdaterRun"))))) {
            // line 38
            echo "\t\t\t";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_UpdaterWasLastRun", ($context["lastTimeUpdaterRun"] ?? $this->getContext($context, "lastTimeUpdaterRun"))]);
            echo "
\t\t";
        } else {
            // line 40
            echo "\t\t\t";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_UpdaterHasNotBeenRun"]), "html", null, true);
            echo "
\t\t";
        }
        // line 42
        echo "\t\t<br/><br/>
\t\t<div id=\"geoip-updater-next-run-time\">
\t\t\t";
        // line 44
        $this->loadTemplate("@UserCountry/_updaterNextRunTime.twig", "@UserCountry/_updaterManage.twig", 44)->display($context);
        // line 45
        echo "\t\t</div>
\t</div>

\t<div piwik-field uicontrol=\"radio\" name=\"geoip-update-period\"
\t\t ng-model=\"locationUpdater.updatePeriod\"
\t\t introduction=\"";
        // line 50
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_DownloadNewDatabasesEvery"]), "html_attr");
        echo "\"
\t\t value=\"";
        // line 51
        echo \Piwik\piwik_escape_filter($this->env, ($context["geoIPUpdatePeriod"] ?? $this->getContext($context, "geoIPUpdatePeriod")), "html", null, true);
        echo "\"
\t\t options=\"";
        // line 52
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["updatePeriodOptions"] ?? $this->getContext($context, "updatePeriodOptions"))), "html", null, true);
        echo "\"
\t\t inline-help=\"#locationProviderUpdatePeriodInlineHelp\">
\t</div>

\t<input type=\"button\"
\t\t   class=\"btn\"
\t\t   ng-click=\"locationUpdater.saveGeoIpLinks()\"
\t\t   ng-value=\"locationUpdater.buttonUpdateSaveText\"/>

\t<div>
\t\t<div id=\"done-updating-updater\"></div>
\t\t<div id=\"geoipdb-update-info-error\"></div>
\t\t<div piwik-progressbar
\t\t\t progress=\"locationUpdater.progressUpdateDownload\"
\t\t\t label=\"locationUpdater.progressUpdateLabel\"
\t\t\t ng-show=\"locationUpdater.isUpdatingGeoIpDatabase\"></div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@UserCountry/_updaterManage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 52,  145 => 51,  141 => 50,  134 => 45,  132 => 44,  128 => 42,  122 => 40,  116 => 38,  114 => 37,  110 => 35,  104 => 32,  100 => 31,  96 => 30,  92 => 28,  90 => 27,  84 => 24,  80 => 23,  76 => 22,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  47 => 8,  43 => 6,  39 => 5,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div ng-show=\"locationUpdater.geoipDatabaseInstalled\" id=\"geoipdb-update-info\">
    <p>
\t\t{{ 'UserCountry_GeoIPUpdaterInstructions'|translate('<a href=\"http://www.maxmind.com/?rId=piwik\">','</a>','<a rel=\"noreferrer noopener\" href=\"https://db-ip.com/?refid=mtm\">','</a>')|raw }}
        <br/><br/>
\t\t{% if dbipLiteUrl|default is not empty %}{{ 'UserCountry_GeoLiteCityLink'|translate('<a rel=\"noreferrer noopener\" href=\"'~dbipLiteUrl|e('html_attr')~'\">',dbipLiteUrl|e('html'),'</a>')|raw }}{% endif %}

\t\t<span ng-show=\"locationUpdater.geoipDatabaseInstalled\">
\t\t\t<br/><br/>{{ 'UserCountry_GeoIPUpdaterIntro'|translate }}:
\t\t</span>
\t</p>

\t<div piwik-field uicontrol=\"text\" name=\"geoip-location-db\"
\t\t ng-model=\"locationUpdater.locationDbUrl\"
\t\t introduction=\"{{ 'UserCountry_LocationDatabase'|translate|e('html_attr') }}\"
\t\t data-title=\"{{ 'Actions_ColumnDownloadURL'|translate|e('html_attr') }}\"
\t\t value=\"{{ geoIPLocUrl }}\"
\t\t inline-help=\"{{ 'UserCountry_LocationDatabaseHint'|translate|e('html_attr') }}\">
\t</div>

\t<div piwik-field uicontrol=\"text\" name=\"geoip-isp-db\"
\t\t ng-model=\"locationUpdater.ispDbUrl\"
\t\t introduction=\"{{ 'UserCountry_ISPDatabase'|translate|e('html_attr') }}\"
\t\t data-title=\"{{ 'Actions_ColumnDownloadURL'|translate|e('html_attr') }}\"
\t\t value=\"{{ geoIPIspUrl }}\">
\t</div>

\t{% if geoIPOrgUrl is defined %}
\t<div piwik-field uicontrol=\"text\" name=\"geoip-org-db\"
\t\t ng-model=\"locationUpdater.orgDbUrl\"
\t\t introduction=\"{{ 'UserCountry_OrgDatabase'|translate|e('html_attr') }}\"
\t\t data-title=\"{{ 'Actions_ColumnDownloadURL'|translate|e('html_attr') }}\"
\t\t value=\"{{ geoIPOrgUrl }}\">
\t</div>
\t{% endif %}

\t<div id=\"locationProviderUpdatePeriodInlineHelp\" class=\"inline-help-node\">
\t\t{% if lastTimeUpdaterRun is defined and lastTimeUpdaterRun is not empty %}
\t\t\t{{ 'UserCountry_UpdaterWasLastRun'|translate(lastTimeUpdaterRun)|raw }}
\t\t{% else %}
\t\t\t{{ 'UserCountry_UpdaterHasNotBeenRun'|translate }}
\t\t{% endif %}
\t\t<br/><br/>
\t\t<div id=\"geoip-updater-next-run-time\">
\t\t\t{% include \"@UserCountry/_updaterNextRunTime.twig\" %}
\t\t</div>
\t</div>

\t<div piwik-field uicontrol=\"radio\" name=\"geoip-update-period\"
\t\t ng-model=\"locationUpdater.updatePeriod\"
\t\t introduction=\"{{ 'UserCountry_DownloadNewDatabasesEvery'|translate|e('html_attr') }}\"
\t\t value=\"{{ geoIPUpdatePeriod }}\"
\t\t options=\"{{ updatePeriodOptions|json_encode }}\"
\t\t inline-help=\"#locationProviderUpdatePeriodInlineHelp\">
\t</div>

\t<input type=\"button\"
\t\t   class=\"btn\"
\t\t   ng-click=\"locationUpdater.saveGeoIpLinks()\"
\t\t   ng-value=\"locationUpdater.buttonUpdateSaveText\"/>

\t<div>
\t\t<div id=\"done-updating-updater\"></div>
\t\t<div id=\"geoipdb-update-info-error\"></div>
\t\t<div piwik-progressbar
\t\t\t progress=\"locationUpdater.progressUpdateDownload\"
\t\t\t label=\"locationUpdater.progressUpdateLabel\"
\t\t\t ng-show=\"locationUpdater.isUpdatingGeoIpDatabase\"></div>
\t</div>
</div>
", "@UserCountry/_updaterManage.twig", "/var/www/zinecat.org/matomo/plugins/UserCountry/templates/_updaterManage.twig");
    }
}
