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

/* @CoreHome/_headerMessage.twig */
class __TwigTemplate_c706ff6dc8a25b11ac08ff7f1a6adbf2c519957421bf9ec0bbcd354c2728b7a9 extends \Twig\Template
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
        // line 2
        $context["test_latest_version_available"] = "4.0.0";
        // line 3
        $context["test_piwikUrl"] = "https://demo.matomo.org/";
        // line 4
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, ((($context["piwikUrl"] ?? $this->getContext($context, "piwikUrl")) == "http://demo.matomo.org/") || (($context["piwikUrl"] ?? $this->getContext($context, "piwikUrl")) == "https://demo.matomo.org/")), "html", null, true);
        $context["isPiwikDemo"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 5
        echo "
";
        // line 6
        ob_start();
        // line 7
        echo "    <span id=\"updateCheckLinkContainer\">
        <span class=\"icon icon-fixed icon-reload\"></span>
                ";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_CheckForUpdates"]), "html", null, true);
        echo "
    </span>
";
        $context["updateCheck"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo "
";
        // line 13
        if ((((((($context["latest_version_available"] ?? $this->getContext($context, "latest_version_available")) &&  !($context["isPiwikDemo"] ?? $this->getContext($context, "isPiwikDemo"))) && ($context["hasSomeViewAccess"] ?? $this->getContext($context, "hasSomeViewAccess"))) &&  !($context["isUserIsAnonymous"] ?? $this->getContext($context, "isUserIsAnonymous"))) && ($context["showUpdateNotificationToUser"] ?? $this->getContext($context, "showUpdateNotificationToUser"))) || ((($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser")) && (isset($context["isAdminArea"]) || array_key_exists("isAdminArea", $context))) && ($context["isAdminArea"] ?? $this->getContext($context, "isAdminArea"))))) {
            // line 14
            echo "<div piwik-expand-on-hover
     id=\"header_message\"
     class=\"piwikSelector borderedControl ";
            // line 16
            if ( !($context["latest_version_available"] ?? $this->getContext($context, "latest_version_available"))) {
                echo "header_info";
            } else {
            }
            echo " piwikTopControl ";
            if (($context["latest_version_available"] ?? $this->getContext($context, "latest_version_available"))) {
                echo "update_available";
            }
            echo "\"
        >

        ";
            // line 19
            if ((($context["latest_version_available"] ?? $this->getContext($context, "latest_version_available")) &&  !($context["isPiwikDemo"] ?? $this->getContext($context, "isPiwikDemo")))) {
                // line 20
                echo "        <a class=\"title\" href=\"?module=CoreUpdater&action=newVersionAvailable\" style=\"cursor:pointer;\">
            ";
                // line 21
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_NewUpdatePiwikX", ($context["latest_version_available"] ?? $this->getContext($context, "latest_version_available"))]), "html", null, true);
                echo "
            <span class=\"icon-warning\"></span>
          </a>
        ";
            } elseif (((            // line 24
($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser")) && (isset($context["isAdminArea"]) || array_key_exists("isAdminArea", $context))) && ($context["isAdminArea"] ?? $this->getContext($context, "isAdminArea")))) {
                // line 25
                echo "            ";
                if (($context["isInternetEnabled"] ?? $this->getContext($context, "isInternetEnabled"))) {
                    // line 26
                    echo "            <a class=\"title\">";
                    echo ($context["updateCheck"] ?? $this->getContext($context, "updateCheck"));
                    echo "</a>
            ";
                } else {
                    // line 28
                    echo "            <a class=\"title\" href=\"https://matomo.org/changelog/\" target=\"_blank\" rel=\"noreferrer noopener\">
                <span id=\"updateCheckLinkContainer\">
                    ";
                    // line 30
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_SeeAvailableVersions"]), "html", null, true);
                    echo "
                </span>
            </a>
            ";
                }
                // line 34
                echo "        ";
            }
            // line 35
            echo "
    <div class=\"dropdown positionInViewport\">
        ";
            // line 37
            if ((($context["latest_version_available"] ?? $this->getContext($context, "latest_version_available")) && ($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser")))) {
                // line 38
                echo "            ";
                if (($context["isMultiServerEnvironment"] ?? $this->getContext($context, "isMultiServerEnvironment"))) {
                    // line 39
                    echo "                ";
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_OneClickUpdateNotPossibleAsMultiServerEnvironment", (("<a rel='noreferrer noopener' href='https://builds.matomo.org/piwik-" . ($context["latest_version_available"] ?? $this->getContext($context, "latest_version_available"))) . ".zip'>builds.matomo.org</a>")]);
                    echo "
            ";
                } else {
                    // line 41
                    echo "                ";
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_PiwikXIsAvailablePleaseUpdateNow", ($context["latest_version_available"] ?? $this->getContext($context, "latest_version_available")), "<br /><a href='index.php?module=CoreUpdater&amp;action=newVersionAvailable'>", "</a>", "<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/changelog/'>", "</a>"]);
                    echo "
            ";
                }
                // line 43
                echo "            <br />
        ";
            } elseif ((((            // line 44
($context["latest_version_available"] ?? $this->getContext($context, "latest_version_available")) &&  !($context["isPiwikDemo"] ?? $this->getContext($context, "isPiwikDemo"))) && ($context["hasSomeViewAccess"] ?? $this->getContext($context, "hasSomeViewAccess"))) &&  !($context["isUserIsAnonymous"] ?? $this->getContext($context, "isUserIsAnonymous")))) {
                // line 45
                echo "            ";
                $context["updateSubject"] = \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_NewUpdatePiwikX", ($context["latest_version_available"] ?? $this->getContext($context, "latest_version_available"))]), "url");
                // line 46
                echo "            ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_PiwikXIsAvailablePleaseNotifyPiwikAdmin", (("<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/'>Matomo</a> <a target='_blank' rel='noreferrer noopener' href='https://matomo.org/changelog/'>" . ($context["latest_version_available"] ?? $this->getContext($context, "latest_version_available"))) . "</a>"), (((("<a href='mailto:" . ($context["superUserEmails"] ?? $this->getContext($context, "superUserEmails"))) . "?subject=") . ($context["updateSubject"] ?? $this->getContext($context, "updateSubject"))) . "'>"), "</a>"]);
                echo "
            <br />
        ";
            }
            // line 49
            echo "
        ";
            // line 50
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_YouAreCurrentlyUsing", ($context["piwik_version"] ?? $this->getContext($context, "piwik_version"))]), "html", null, true);
            echo "
    </div>
</div>

<span class=\"icon icon-arrowup\"></span>
<div style=\"clear:right\"></div>
";
        } else {
            // line 57
            echo "<span class=\"icon icon-arrowup\"></span>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_headerMessage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 57,  150 => 50,  147 => 49,  140 => 46,  137 => 45,  135 => 44,  132 => 43,  126 => 41,  120 => 39,  117 => 38,  115 => 37,  111 => 35,  108 => 34,  101 => 30,  97 => 28,  91 => 26,  88 => 25,  86 => 24,  80 => 21,  77 => 20,  75 => 19,  62 => 16,  58 => 14,  56 => 13,  53 => 12,  47 => 9,  43 => 7,  41 => 6,  38 => 5,  34 => 4,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# testing, remove test_ from var names #}
{% set test_latest_version_available=\"4.0.0\" %}
{% set test_piwikUrl='https://demo.matomo.org/' %}
{% set isPiwikDemo %}{{ piwikUrl == 'http://demo.matomo.org/' or piwikUrl == 'https://demo.matomo.org/' }}{% endset %}

{% set updateCheck %}
    <span id=\"updateCheckLinkContainer\">
        <span class=\"icon icon-fixed icon-reload\"></span>
                {{ 'CoreHome_CheckForUpdates'|translate }}
    </span>
{% endset %}

{% if (latest_version_available and not isPiwikDemo and hasSomeViewAccess and not isUserIsAnonymous and showUpdateNotificationToUser) or (isSuperUser and isAdminArea is defined and isAdminArea) %}
<div piwik-expand-on-hover
     id=\"header_message\"
     class=\"piwikSelector borderedControl {% if not latest_version_available %}header_info{% else %}{% endif %} piwikTopControl {% if latest_version_available %}update_available{% endif %}\"
        >

        {% if latest_version_available and not isPiwikDemo %}
        <a class=\"title\" href=\"?module=CoreUpdater&action=newVersionAvailable\" style=\"cursor:pointer;\">
            {{ 'General_NewUpdatePiwikX'|translate(latest_version_available) }}
            <span class=\"icon-warning\"></span>
          </a>
        {% elseif isSuperUser and isAdminArea is defined and isAdminArea %}
            {% if isInternetEnabled %}
            <a class=\"title\">{{ updateCheck|raw }}</a>
            {% else %}
            <a class=\"title\" href=\"https://matomo.org/changelog/\" target=\"_blank\" rel=\"noreferrer noopener\">
                <span id=\"updateCheckLinkContainer\">
                    {{ 'CoreHome_SeeAvailableVersions'|translate }}
                </span>
            </a>
            {% endif %}
        {% endif %}

    <div class=\"dropdown positionInViewport\">
        {% if latest_version_available and isSuperUser %}
            {% if isMultiServerEnvironment %}
                {{ 'CoreHome_OneClickUpdateNotPossibleAsMultiServerEnvironment'|translate(\"<a rel='noreferrer noopener' href='https://builds.matomo.org/piwik-\" ~ latest_version_available ~ \".zip'>builds.matomo.org</a>\")|raw }}
            {% else %}
                {{ 'General_PiwikXIsAvailablePleaseUpdateNow'|translate(latest_version_available,\"<br /><a href='index.php?module=CoreUpdater&amp;action=newVersionAvailable'>\",\"</a>\",\"<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/changelog/'>\",\"</a>\")|raw }}
            {% endif %}
            <br />
        {% elseif latest_version_available and not isPiwikDemo and hasSomeViewAccess and not isUserIsAnonymous %}
            {% set updateSubject = 'General_NewUpdatePiwikX'|translate(latest_version_available)|e('url') %}
            {{ 'General_PiwikXIsAvailablePleaseNotifyPiwikAdmin'|translate(\"<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/'>Matomo</a> <a target='_blank' rel='noreferrer noopener' href='https://matomo.org/changelog/'>\" ~ latest_version_available ~ \"</a>\", \"<a href='mailto:\" ~ superUserEmails ~ \"?subject=\" ~ updateSubject ~ \"'>\", \"</a>\")|raw }}
            <br />
        {% endif %}

        {{ 'General_YouAreCurrentlyUsing'|translate(piwik_version) }}
    </div>
</div>

<span class=\"icon icon-arrowup\"></span>
<div style=\"clear:right\"></div>
{% else %}
<span class=\"icon icon-arrowup\"></span>
{% endif %}
", "@CoreHome/_headerMessage.twig", "/var/www/zinecat.org/pawtucket/matomo/plugins/CoreHome/templates/_headerMessage.twig");
    }
}
