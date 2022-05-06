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

/* @SitesManager/_displayJavascriptCode.twig */
class __TwigTemplate_425bf4e5c46a72898ac7a0f27bf2035461dc771053446bb2e00ec083b352303c extends \Twig\Template
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
        echo "<div class=\"trackingHelpHeader\">
    <h2>";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_TrackingTags", ($context["displaySiteName"] ?? $this->getContext($context, "displaySiteName"))]), "html", null, true);
        echo "</h2>
    <a class=\"btn\" 
        href=\"mailto:?subject=";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter(call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_EmailInstructionsSubject"])), "html_attr");
        echo "&body=";
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter(($context["emailBody"] ?? $this->getContext($context, "emailBody"))), "html_attr");
        echo "\">
        ";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_EmailInstructionsButton"]), "html", null, true);
        echo "
    </a>
</div>

<div class='trackingHelp'>
    <p>";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_JSTracking_Intro"]), "html", null, true);
        echo "</p>

    <p>";
        // line 12
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_JSTrackingIntro3a", "<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>"]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_JSTrackingIntro3b"]);
        echo "</p>

    <h3>";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_JsTrackingTag"]), "html", null, true);
        echo "</h3>

    <p>";
        // line 16
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_JSTracking_CodeNoteBeforeClosingHead", "&lt;/head&gt;"]);
        echo "</p>

    <pre piwik-select-on-focus>";
        // line 18
        echo ($context["jsTag"] ?? $this->getContext($context, "jsTag"));
        echo "</pre>

    <p>";
        // line 20
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_JSTrackingIntro5", "<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://developer.matomo.org/guides/tracking-javascript-guide\">", "</a>"]);
        echo "</p>

    ";
        // line 22
        if ((isset($context["isInstall"]) || array_key_exists("isInstall", $context))) {
            // line 23
            echo "        <p>";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_JSTracking_EndNote", "", ""]);
            echo "</p>
    ";
        } else {
            // line 25
            echo "        <p>";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_JSTracking_EndNote", (("<a href=\"" . call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "CoreAdminHome", "action" => "trackingCodeGenerator"]])) . "\">"), "</a>"]);
            echo "</p>
    ";
        }
        // line 27
        echo "
    <h3>";
        // line 28
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_LogAnalytics"]), "html", null, true);
        echo "</h3>

    <p>";
        // line 30
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_LogAnalyticsDescription", "<a href=\"https://matomo.org/log-analytics/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>"]);
        echo "</p>

    <h3>";
        // line 32
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_MobileAppsAndSDKs"]), "html", null, true);
        echo "</h3>

    <p>";
        // line 34
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_MobileAppsAndSDKsDescription", "<a href=\"https://matomo.org/integrate/#programming-language-platforms-and-frameworks\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>"]);
        echo "</p>

    <h3>";
        // line 36
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_HttpTrackingApi"]), "html", null, true);
        echo "</h3>
    <p>";
        // line 37
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_HttpTrackingApiDescription", "<a href=\"https://developer.matomo.org/api-reference/tracking-api\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>"]);
        echo "</p>
    <p></p>

    ";
        // line 40
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.endTrackingHelpPage"]);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@SitesManager/_displayJavascriptCode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 40,  125 => 37,  121 => 36,  116 => 34,  111 => 32,  106 => 30,  101 => 28,  98 => 27,  92 => 25,  86 => 23,  84 => 22,  79 => 20,  74 => 18,  69 => 16,  64 => 14,  57 => 12,  52 => 10,  44 => 5,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"trackingHelpHeader\">
    <h2>{{ 'SitesManager_TrackingTags'|translate(displaySiteName) }}</h2>
    <a class=\"btn\" 
        href=\"mailto:?subject={{ 'SitesManager_EmailInstructionsSubject'|translate|url_encode|e('html_attr') }}&body={{ emailBody|url_encode|e('html_attr') }}\">
        {{ 'SitesManager_EmailInstructionsButton'|translate }}
    </a>
</div>

<div class='trackingHelp'>
    <p>{{ 'Installation_JSTracking_Intro'|translate }}</p>

    <p>{{ 'CoreAdminHome_JSTrackingIntro3a'|translate('<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }} {{ 'CoreAdminHome_JSTrackingIntro3b'|translate|raw }}</p>

    <h3>{{ 'General_JsTrackingTag'|translate }}</h3>

    <p>{{ 'CoreAdminHome_JSTracking_CodeNoteBeforeClosingHead'|translate(\"&lt;/head&gt;\")|raw }}</p>

    <pre piwik-select-on-focus>{{ jsTag|raw }}</pre>

    <p>{{ 'CoreAdminHome_JSTrackingIntro5'|translate('<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://developer.matomo.org/guides/tracking-javascript-guide\">','</a>')|raw }}</p>

    {% if isInstall is defined %}
        <p>{{ 'Installation_JSTracking_EndNote'|translate('', '')|raw }}</p>
    {% else %}
        <p>{{ 'CoreAdminHome_JSTracking_EndNote'|translate('<a href=\"' ~ linkTo({'module': 'CoreAdminHome', 'action': 'trackingCodeGenerator'}) ~'\">','</a>')|raw }}</p>
    {% endif %}

    <h3>{{ 'SitesManager_LogAnalytics'|translate }}</h3>

    <p>{{ 'SitesManager_LogAnalyticsDescription'|translate('<a href=\"https://matomo.org/log-analytics/\" rel=\"noreferrer noopener\" target=\"_blank\">', '</a>')|raw }}</p>

    <h3>{{ 'SitesManager_MobileAppsAndSDKs'|translate }}</h3>

    <p>{{ 'SitesManager_MobileAppsAndSDKsDescription'|translate('<a href=\"https://matomo.org/integrate/#programming-language-platforms-and-frameworks\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>

    <h3>{{ 'CoreAdminHome_HttpTrackingApi'|translate }}</h3>
    <p>{{ 'CoreAdminHome_HttpTrackingApiDescription'|translate('<a href=\"https://developer.matomo.org/api-reference/tracking-api\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>
    <p></p>

    {{ postEvent('Template.endTrackingHelpPage') }}
</div>
", "@SitesManager/_displayJavascriptCode.twig", "/var/www/zinecat.org/pawtucket/matomo/plugins/SitesManager/templates/_displayJavascriptCode.twig");
    }
}
