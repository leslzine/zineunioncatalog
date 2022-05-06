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

/* @SitesManager/_trackingCodeEmail.twig */
class __TwigTemplate_9e039c97c387826edf40c723c2632baaa440adc67ebc40e55301e5845d82b088 extends \Twig\Template
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
        if (($context["showMatomoLinks"] ?? $this->getContext($context, "showMatomoLinks"))) {
            echo "** ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_JsTrackingTag"]), "html", null, true);
        }
        // line 2
        echo "
";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_JSTracking_CodeNoteBeforeClosingHeadEmail", "'head'"]), "html", null, true);
        echo "

";
        // line 5
        echo ($context["jsTag"] ?? $this->getContext($context, "jsTag"));
        echo "

";
        // line 7
        if (($context["showMatomoLinks"] ?? $this->getContext($context, "showMatomoLinks"))) {
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_EmailInstructionsDocsPlainText", "https://developer.matomo.org/guides/tracking-javascript-guide"]);
        }
        // line 8
        echo "
";
        // line 9
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_EmailInstructionsGenerateTrackingCode", (($context["piwikUrl"] ?? $this->getContext($context, "piwikUrl")) . call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "CoreAdminHome", "action" => "trackingCodeGenerator"]]))]);
        echo "

";
        // line 11
        if (($context["showMatomoLinks"] ?? $this->getContext($context, "showMatomoLinks"))) {
            // line 12
            echo "** ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_InstallationGuides"]), "html", null, true);
            echo "
WordPress: https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/
Squarespace: https://matomo.org/faq/new-to-piwik/how-do-i-integrate-matomo-with-squarespace-website/
Wix: https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-wix/
SharePoint: https://matomo.org/faq/how-to-install/faq_19424/
Joomla: https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-joomla/

** ";
            // line 19
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_Integrations"]), "html", null, true);
            echo "
";
            // line 20
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_JSTrackingIntro3a", "", ""]), "html", null, true);
            echo "
https://matomo.org/integrate/

** ";
            // line 23
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_LogAnalytics"]), "html", null, true);
            echo "
";
            // line 24
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_LogAnalyticsDescription", "", ""]), "html", null, true);
            echo "
https://matomo.org/log-analytics/

** ";
            // line 27
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_MobileAppsAndSDKs"]), "html", null, true);
            echo "
";
            // line 28
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_MobileAppsAndSDKsDescription", "", ""]), "html", null, true);
            echo "
https://matomo.org/integrate/#programming-language-platforms-and-frameworks

** ";
            // line 31
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_HttpTrackingApi"]), "html", null, true);
            echo "
";
            // line 32
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_HttpTrackingApiDescription", "", ""]), "html", null, true);
            echo "
https://developer.matomo.org/api-reference/tracking-api
    
** ";
            // line 35
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_EmailInstructionsSiteDetailsHeading"]), "html", null, true);
            echo "
";
            // line 36
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_EmailInstructionsSiteDetails"]), "html", null, true);
            echo "
* ";
            // line 37
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_EmailInstructionsYourSiteId", ($context["idSite"] ?? $this->getContext($context, "idSite"))]), "html", null, true);
            echo "
* ";
            // line 38
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_EmailInstructionsYourTrackingUrl", ($context["trackingUrl"] ?? $this->getContext($context, "trackingUrl"))]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@SitesManager/_trackingCodeEmail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  121 => 37,  117 => 36,  113 => 35,  107 => 32,  103 => 31,  97 => 28,  93 => 27,  87 => 24,  83 => 23,  77 => 20,  73 => 19,  62 => 12,  60 => 11,  55 => 9,  52 => 8,  48 => 7,  43 => 5,  38 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if showMatomoLinks %}** {{ 'General_JsTrackingTag'|translate }}{% endif %}

{{ 'CoreAdminHome_JSTracking_CodeNoteBeforeClosingHeadEmail'|translate(\"'head'\") }}

{{ jsTag|raw }}

{% if showMatomoLinks %}{{ 'SitesManager_EmailInstructionsDocsPlainText'|translate('https://developer.matomo.org/guides/tracking-javascript-guide')|raw }}{% endif %}

{{ 'SitesManager_EmailInstructionsGenerateTrackingCode'|translate(piwikUrl ~ linkTo({'module': 'CoreAdminHome', 'action': 'trackingCodeGenerator'}))|raw }}

{% if showMatomoLinks %}
** {{ 'SitesManager_InstallationGuides'|translate }}
WordPress: https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/
Squarespace: https://matomo.org/faq/new-to-piwik/how-do-i-integrate-matomo-with-squarespace-website/
Wix: https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-wix/
SharePoint: https://matomo.org/faq/how-to-install/faq_19424/
Joomla: https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-joomla/

** {{ 'SitesManager_Integrations'|translate }}
{{ 'CoreAdminHome_JSTrackingIntro3a'|translate('', '') }}
https://matomo.org/integrate/

** {{ 'SitesManager_LogAnalytics'|translate }}
{{ 'SitesManager_LogAnalyticsDescription'|translate('', '') }}
https://matomo.org/log-analytics/

** {{ 'SitesManager_MobileAppsAndSDKs'|translate }}
{{ 'SitesManager_MobileAppsAndSDKsDescription'|translate('', '') }}
https://matomo.org/integrate/#programming-language-platforms-and-frameworks

** {{ 'CoreAdminHome_HttpTrackingApi'|translate }}
{{ 'CoreAdminHome_HttpTrackingApiDescription'|translate('', '') }}
https://developer.matomo.org/api-reference/tracking-api
    
** {{ 'SitesManager_EmailInstructionsSiteDetailsHeading'|translate }}
{{ 'SitesManager_EmailInstructionsSiteDetails'|translate }}
* {{ 'SitesManager_EmailInstructionsYourSiteId'|translate(idSite) }}
* {{ 'SitesManager_EmailInstructionsYourTrackingUrl'|translate(trackingUrl) }}
{% endif %}", "@SitesManager/_trackingCodeEmail.twig", "/var/www/zinecat.org/pawtucket/matomo/plugins/SitesManager/templates/_trackingCodeEmail.twig");
    }
}
