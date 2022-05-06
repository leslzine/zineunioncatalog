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

/* @Live/_visitorLogIcons.twig */
class __TwigTemplate_6880a5c008fad278f8b8f3c8891cbb4b9daaef8bbdfdec69be7cf2de32894635 extends \Twig\Template
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
        $context["visitHasEcommerceActivity"] = $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "visitEcommerceStatusIcon"], "method");
        // line 2
        $context["breakBeforeVisitorRank"] = (((($context["visitHasEcommerceActivity"] ?? $this->getContext($context, "visitHasEcommerceActivity")) && $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "visitorTypeIcon"], "method"))) ? (true) : (false));
        // line 3
        echo "
<span class=\"visitorLogIcons\">

    <span class=\"visitorDetails\">
    ";
        // line 7
        if ($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "visitorTypeIcon"], "method")) {
            // line 8
            echo "        <span class=\"visitorLogIconWithDetails visitorTypeIcon\">
            <img src=\"";
            // line 9
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "visitorTypeIcon"], "method"), "html", null, true);
            echo "\"/>
            <ul class=\"details\">
                <li>";
            // line 11
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ReturningVisitor"]), "html", null, true);
            echo " - ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_NVisits", $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "visitCount"], "method")]), "html", null, true);
            echo "</li>
            </ul>
        </span>
    ";
        }
        // line 15
        echo "    ";
        if ($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "countryFlag"], "method")) {
            // line 16
            echo "        <span class=\"visitorLogIconWithDetails flag\" profile-header-text=\"";
            if ($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "city"], "method")) {
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "city"], "method"), "html_attr");
            } else {
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "country"], "method"), "html", null, true);
            }
            echo "\">

            <img src=\"";
            // line 18
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "countryFlag"], "method"), "html", null, true);
            echo "\"/>
            <ul class=\"details\">
                <li>";
            // line 20
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_Country"]), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "country"], "method"), "html", null, true);
            echo "</li>
                ";
            // line 21
            if ($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "region"], "method")) {
                echo "<li>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_Region"]), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "region"], "method"), "html", null, true);
                echo "</li>";
            }
            // line 22
            echo "                ";
            if ($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "city"], "method")) {
                echo "<li>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_City"]), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "city"], "method"), "html", null, true);
                echo "</li>";
            }
            // line 23
            echo "                ";
            if ($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "language"], "method")) {
                echo "<li>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserLanguage_BrowserLanguage"]), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "language"], "method"), "html", null, true);
                echo "</li>";
            }
            // line 24
            echo "                ";
            if ($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "providerName"], "method")) {
                echo "<li>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Provider_ColumnProvider"]), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "providerName"], "method"), "html", null, true);
                echo "</li>";
            }
            // line 25
            echo "                <li>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_IP"]), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "visitIp"], "method"), "html", null, true);
            echo "</li>
                ";
            // line 26
            if ( !twig_test_empty($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "visitorId"], "method"))) {
                echo "<li>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_VisitorID"]), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "visitorId"], "method"), "html", null, true);
                echo "</li>";
            }
            // line 27
            echo "
            </ul>
        </span>
    ";
        }
        // line 31
        echo "    ";
        if ($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "browserIcon"], "method")) {
            // line 32
            echo "        <span class=\"visitorLogIconWithDetails\" profile-header-text=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "browser"], "method"), "html_attr");
            echo "\">
            <img src=\"";
            // line 33
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "browserIcon"], "method"), "html", null, true);
            echo "\"/>
            <ul class=\"details\">
                <li>";
            // line 35
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_ColumnBrowser"]), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "browser"], "method"), "html", null, true);
            echo "</li>
                <li>";
            // line 36
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_BrowserEngine"]), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "browserFamily"], "method"), "html", null, true);
            echo "</li>
                ";
            // line 37
            if ((twig_length_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "pluginsIcons"], "method")) > 0)) {
                // line 38
                echo "                    <li>
                        ";
                // line 39
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Plugins"]), "html", null, true);
                echo ":
                        ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "pluginsIcons"], "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["pluginIcon"]) {
                    // line 41
                    echo "                            <img width=\"16px\" height=\"16px\" src=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["pluginIcon"], "pluginIcon", []), "html", null, true);
                    echo "\" alt=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["pluginIcon"], "pluginName", []), true), "html", null, true);
                    echo "\"/>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pluginIcon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "                    </li>
                ";
            }
            // line 45
            echo "            </ul>
        </span>
    ";
        }
        // line 48
        echo "        ";
        if ($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "operatingSystemIcon"], "method")) {
            // line 49
            echo "            <span class=\"visitorLogIconWithDetails\" profile-header-text=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "operatingSystem"], "method"), "html_attr");
            echo "\">
            <img src=\"";
            // line 50
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "operatingSystemIcon"], "method"), "html", null, true);
            echo "\"/>
            <ul class=\"details\">
                <li>";
            // line 52
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_ColumnOperatingSystem"]), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "operatingSystem"], "method"), "html", null, true);
            echo "</li>
            </ul>
        </span>
        ";
        }
        // line 56
        echo "        ";
        if ($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "deviceTypeIcon"], "method")) {
            // line 57
            echo "            <span class=\"visitorLogIconWithDetails\" profile-header-text=\"";
            if ($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "resolution"], "method")) {
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "resolution"], "method"), "html_attr");
            } else {
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "deviceType"], "method"), "html", null, true);
            }
            echo "\">
            <img src=\"";
            // line 58
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "deviceTypeIcon"], "method"), "html", null, true);
            echo "\"/>
            <ul class=\"details\">
                <li>";
            // line 60
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_DeviceType"]), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "deviceType"], "method"), "html", null, true);
            echo "</li>
                ";
            // line 61
            if ($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "deviceBrand"], "method")) {
                echo "<li>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_DeviceBrand"]), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "deviceBrand"], "method"), "html", null, true);
                echo "</li>";
            }
            // line 62
            echo "                ";
            if ($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "deviceModel"], "method")) {
                echo "<li>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_DeviceModel"]), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "deviceModel"], "method"), "html", null, true);
                echo "</li>";
            }
            // line 63
            echo "                ";
            if ($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "resolution"], "method")) {
                echo "<li>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Resolution_ColumnResolution"]), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "resolution"], "method"), "html", null, true);
                echo "</li>";
            }
            // line 64
            echo "            </ul>
        </span>
        ";
        }
        // line 67
        echo "    </span>

    ";
        // line 69
        if (($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "goalConversions"], "method") || ($context["visitHasEcommerceActivity"] ?? $this->getContext($context, "visitHasEcommerceActivity")))) {
            // line 70
            echo "    <span class=\"visitorType\">
        ";
            // line 72
            echo "        ";
            if ($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "goalConversions"], "method")) {
                // line 73
                echo "            <span title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_VisitConvertedNGoals", $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "goalConversions"], "method")]), "html", null, true);
                echo "\" class=\"visitorLogTooltip\">
                <img src=\"";
                // line 74
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "visitConvertedIcon"], "method"), "html", null, true);
                echo "\"/>
                <span class=\"conversionCount\">";
                // line 75
                if (($this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "goalConversions"], "method") > 99)) {
                    echo "99+";
                } else {
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "goalConversions"], "method"), "html", null, true);
                }
                echo "</span>
            </span>
        ";
            }
            // line 78
            echo "        ";
            // line 79
            echo "        ";
            if (($context["visitHasEcommerceActivity"] ?? $this->getContext($context, "visitHasEcommerceActivity"))) {
                // line 80
                echo "            <img class=\"visitorLogTooltip\" src=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "visitEcommerceStatusIcon"], "method"), "html", null, true);
                echo "\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitor"] ?? $this->getContext($context, "visitor")), "getColumn", [0 => "visitEcommerceStatus"], "method"), "html", null, true);
                echo "\"/>
        ";
            }
            // line 82
            echo "    </span>
    ";
        }
        // line 84
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "@Live/_visitorLogIcons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 84,  317 => 82,  309 => 80,  306 => 79,  304 => 78,  294 => 75,  290 => 74,  285 => 73,  282 => 72,  279 => 70,  277 => 69,  273 => 67,  268 => 64,  259 => 63,  250 => 62,  242 => 61,  236 => 60,  231 => 58,  222 => 57,  219 => 56,  210 => 52,  205 => 50,  200 => 49,  197 => 48,  192 => 45,  188 => 43,  177 => 41,  173 => 40,  169 => 39,  166 => 38,  164 => 37,  158 => 36,  152 => 35,  147 => 33,  142 => 32,  139 => 31,  133 => 27,  125 => 26,  118 => 25,  109 => 24,  100 => 23,  91 => 22,  83 => 21,  77 => 20,  72 => 18,  62 => 16,  59 => 15,  50 => 11,  45 => 9,  42 => 8,  40 => 7,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set visitHasEcommerceActivity = visitor.getColumn('visitEcommerceStatusIcon') %}
{% set breakBeforeVisitorRank = (visitHasEcommerceActivity and visitor.getColumn('visitorTypeIcon')) ? true : false %}

<span class=\"visitorLogIcons\">

    <span class=\"visitorDetails\">
    {% if visitor.getColumn('visitorTypeIcon') %}
        <span class=\"visitorLogIconWithDetails visitorTypeIcon\">
            <img src=\"{{ visitor.getColumn('visitorTypeIcon') }}\"/>
            <ul class=\"details\">
                <li>{{ 'General_ReturningVisitor'|translate }} - {{ 'General_NVisits'|translate(visitor.getColumn('visitCount')) }}</li>
            </ul>
        </span>
    {% endif %}
    {% if visitor.getColumn('countryFlag') %}
        <span class=\"visitorLogIconWithDetails flag\" profile-header-text=\"{% if visitor.getColumn('city') %}{{ visitor.getColumn('city')|e('html_attr') }}{% else %}{{ visitor.getColumn('country') }}{% endif %}\">

            <img src=\"{{ visitor.getColumn('countryFlag') }}\"/>
            <ul class=\"details\">
                <li>{{ 'UserCountry_Country'|translate }}: {{ visitor.getColumn('country') }}</li>
                {% if visitor.getColumn('region') %}<li>{{ 'UserCountry_Region'|translate }}: {{ visitor.getColumn('region') }}</li>{% endif %}
                {% if visitor.getColumn('city') %}<li>{{ 'UserCountry_City'|translate }}: {{ visitor.getColumn('city') }}</li>{% endif %}
                {% if visitor.getColumn('language') %}<li>{{ 'UserLanguage_BrowserLanguage'|translate }}: {{ visitor.getColumn('language') }}</li>{% endif %}
                {% if visitor.getColumn('providerName') %}<li>{{ 'Provider_ColumnProvider'|translate }}: {{ visitor.getColumn('providerName') }}</li>{% endif %}
                <li>{{ 'General_IP'|translate }}: {{ visitor.getColumn('visitIp') }}</li>
                {% if visitor.getColumn('visitorId') is not empty %}<li>{{ 'General_VisitorID'|translate }}: {{ visitor.getColumn('visitorId') }}</li>{% endif %}

            </ul>
        </span>
    {% endif %}
    {% if visitor.getColumn('browserIcon') %}
        <span class=\"visitorLogIconWithDetails\" profile-header-text=\"{{ visitor.getColumn('browser')|e('html_attr') }}\">
            <img src=\"{{ visitor.getColumn('browserIcon') }}\"/>
            <ul class=\"details\">
                <li>{{ 'DevicesDetection_ColumnBrowser'|translate }}: {{ visitor.getColumn('browser') }}</li>
                <li>{{ 'DevicesDetection_BrowserEngine'|translate }}: {{ visitor.getColumn('browserFamily') }}</li>
                {% if visitor.getColumn('pluginsIcons')|length > 0 %}
                    <li>
                        {{ 'General_Plugins'|translate }}:
                        {% for pluginIcon in visitor.getColumn('pluginsIcons') %}
                            <img width=\"16px\" height=\"16px\" src=\"{{ pluginIcon.pluginIcon }}\" alt=\"{{ pluginIcon.pluginName|capitalize(true) }}\"/>
                        {% endfor %}
                    </li>
                {% endif %}
            </ul>
        </span>
    {% endif %}
        {% if visitor.getColumn('operatingSystemIcon') %}
            <span class=\"visitorLogIconWithDetails\" profile-header-text=\"{{ visitor.getColumn('operatingSystem')|e('html_attr') }}\">
            <img src=\"{{ visitor.getColumn('operatingSystemIcon') }}\"/>
            <ul class=\"details\">
                <li>{{ 'DevicesDetection_ColumnOperatingSystem'|translate }}: {{ visitor.getColumn('operatingSystem') }}</li>
            </ul>
        </span>
        {% endif %}
        {% if visitor.getColumn('deviceTypeIcon') %}
            <span class=\"visitorLogIconWithDetails\" profile-header-text=\"{% if visitor.getColumn('resolution') %}{{ visitor.getColumn('resolution')|e('html_attr') }}{% else %}{{ visitor.getColumn('deviceType') }}{% endif %}\">
            <img src=\"{{ visitor.getColumn('deviceTypeIcon') }}\"/>
            <ul class=\"details\">
                <li>{{ 'DevicesDetection_DeviceType'|translate }}: {{ visitor.getColumn('deviceType') }}</li>
                {% if visitor.getColumn('deviceBrand') %}<li>{{ 'DevicesDetection_DeviceBrand'|translate }}: {{ visitor.getColumn('deviceBrand') }}</li>{% endif %}
                {% if visitor.getColumn('deviceModel') %}<li>{{ 'DevicesDetection_DeviceModel'|translate }}: {{ visitor.getColumn('deviceModel') }}</li>{% endif %}
                {% if visitor.getColumn('resolution') %}<li>{{ 'Resolution_ColumnResolution'|translate }}: {{ visitor.getColumn('resolution') }}</li>{% endif %}
            </ul>
        </span>
        {% endif %}
    </span>

    {% if visitor.getColumn('goalConversions') or visitHasEcommerceActivity %}
    <span class=\"visitorType\">
        {# Goals, and/or Ecommerce activity #}
        {% if visitor.getColumn('goalConversions') %}
            <span title=\"{{ 'General_VisitConvertedNGoals'|translate(visitor.getColumn('goalConversions')) }}\" class=\"visitorLogTooltip\">
                <img src=\"{{ visitor.getColumn('visitConvertedIcon') }}\"/>
                <span class=\"conversionCount\">{% if visitor.getColumn('goalConversions') > 99 %}99+{% else %}{{ visitor.getColumn('goalConversions') }}{% endif %}</span>
            </span>
        {% endif %}
        {# Ecommerce activity #}
        {% if visitHasEcommerceActivity %}
            <img class=\"visitorLogTooltip\" src=\"{{ visitor.getColumn('visitEcommerceStatusIcon') }}\" title=\"{{ visitor.getColumn('visitEcommerceStatus') }}\"/>
        {% endif %}
    </span>
    {% endif %}
</span>
", "@Live/_visitorLogIcons.twig", "/var/www/zinecat.org/matomo/plugins/Live/templates/_visitorLogIcons.twig");
    }
}
