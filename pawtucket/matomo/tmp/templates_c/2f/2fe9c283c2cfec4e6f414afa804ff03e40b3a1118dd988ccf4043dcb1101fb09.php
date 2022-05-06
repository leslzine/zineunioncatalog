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

/* admin.twig */
class __TwigTemplate_2023a732f8e6d2a4889c0a25cea8b662eae8fefe174a4000e03215bee3ca24b4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'root' => [$this, 'block_root'],
            'topcontrols' => [$this, 'block_topcontrols'],
            'notification' => [$this, 'block_notification'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_Administration"]), "html", null, true);
        $context["categoryTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 5
        $context["bodyClass"] = call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.bodyClass", "admin"]);
        // line 6
        $context["isAdminArea"] = true;
        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "admin.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "    ";
        $context["topMenuModule"] = "CoreAdminHome";
        // line 10
        echo "    ";
        $context["topMenuAction"] = "home";
        // line 11
        echo "    ";
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.header", "admin"]);
        echo "
    ";
        // line 12
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 13
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.footer", "admin"]);
        echo "
";
    }

    // line 17
    public function block_root($context, array $blocks = [])
    {
        // line 18
        echo "    ";
        $this->loadTemplate("@CoreHome/_topScreen.twig", "admin.twig", 18)->display($context);
        // line 19
        echo "
    <div class=\"top_controls\">
        <div piwik-quick-access ng-cloak class=\"piwikTopControl borderedControl\"></div>

        ";
        // line 23
        $this->displayBlock('topcontrols', $context, $blocks);
        // line 25
        echo "
        ";
        // line 26
        $this->loadTemplate("@CoreHome/_headerMessage.twig", "admin.twig", 26)->display($context);
        // line 27
        echo "    </div>

    ";
        // line 29
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "admin.twig", 29)->unwrap();
        // line 30
        echo "    ";
        echo $context["ajax"]->getrequestErrorDiv((((isset($context["emailSuperUser"]) || array_key_exists("emailSuperUser", $context))) ? (_twig_default_filter(($context["emailSuperUser"] ?? $this->getContext($context, "emailSuperUser")), "")) : ("")), ($context["areAdsForProfessionalServicesEnabled"] ?? $this->getContext($context, "areAdsForProfessionalServicesEnabled")), ($context["currentModule"] ?? $this->getContext($context, "currentModule")));
        echo "
    ";
        // line 31
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.beforeContent", "admin", ($context["currentModule"] ?? $this->getContext($context, "currentModule")), ($context["currentAction"] ?? $this->getContext($context, "currentAction"))]);
        echo "

    <div class=\"page\">

        ";
        // line 35
        if (( !(isset($context["showMenu"]) || array_key_exists("showMenu", $context)) || ($context["showMenu"] ?? $this->getContext($context, "showMenu")))) {
            // line 36
            echo "            ";
            $context["menu"] = $this->loadTemplate("@CoreHome/_menu.twig", "admin.twig", 36)->unwrap();
            // line 37
            echo "            ";
            echo $context["menu"]->getmenu(($context["adminMenu"] ?? $this->getContext($context, "adminMenu")), false, "Menu--admin", ($context["currentModule"] ?? $this->getContext($context, "currentModule")), ($context["currentAction"] ?? $this->getContext($context, "currentAction")));
            echo "
        ";
        }
        // line 39
        echo "

        <div class=\"pageWrap\">
            <a name=\"main\"></a>
            ";
        // line 43
        $this->displayBlock('notification', $context, $blocks);
        // line 46
        echo "            ";
        $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "admin.twig", 46)->display($context);
        // line 47
        echo "
            <div class=\"admin\" id=\"content\" ng-cloak>

                <div class=\"ui-confirm\" id=\"alert\">
                    <h2></h2>
                    <input role=\"no\" type=\"button\" value=\"";
        // line 52
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Ok"]), "html", null, true);
        echo "\"/>
                </div>

                ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "

            </div>
        </div>
    </div>


";
    }

    // line 23
    public function block_topcontrols($context, array $blocks = [])
    {
        // line 24
        echo "        ";
    }

    // line 43
    public function block_notification($context, array $blocks = [])
    {
        // line 44
        echo "                ";
        $this->loadTemplate("@CoreHome/_notifications.twig", "admin.twig", 44)->display($context);
        // line 45
        echo "            ";
    }

    // line 55
    public function block_content($context, array $blocks = [])
    {
        // line 56
        echo "                ";
    }

    public function getTemplateName()
    {
        return "admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 56,  178 => 55,  174 => 45,  171 => 44,  168 => 43,  164 => 24,  161 => 23,  150 => 57,  148 => 55,  142 => 52,  135 => 47,  132 => 46,  130 => 43,  124 => 39,  118 => 37,  115 => 36,  113 => 35,  106 => 31,  101 => 30,  99 => 29,  95 => 27,  93 => 26,  90 => 25,  88 => 23,  82 => 19,  79 => 18,  76 => 17,  70 => 13,  66 => 12,  61 => 11,  58 => 10,  55 => 9,  52 => 8,  47 => 1,  45 => 6,  43 => 5,  39 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% set categoryTitle %}{{ 'CoreAdminHome_Administration'|translate }}{% endset %}

{% set bodyClass = postEvent('Template.bodyClass', 'admin') %}
{% set isAdminArea = true %}

{% block body %}
    {% set topMenuModule = 'CoreAdminHome' %}
    {% set topMenuAction = 'home' %}
    {{ postEvent(\"Template.header\", \"admin\") }}
    {{ parent() }}
    {{ postEvent(\"Template.footer\", \"admin\") }}
{% endblock %}


{% block root %}
    {% include \"@CoreHome/_topScreen.twig\" %}

    <div class=\"top_controls\">
        <div piwik-quick-access ng-cloak class=\"piwikTopControl borderedControl\"></div>

        {% block topcontrols %}
        {% endblock %}

        {% include \"@CoreHome/_headerMessage.twig\" %}
    </div>

    {% import 'ajaxMacros.twig' as ajax %}
    {{ ajax.requestErrorDiv(emailSuperUser|default(''), areAdsForProfessionalServicesEnabled, currentModule) }}
    {{ postEvent(\"Template.beforeContent\", \"admin\", currentModule, currentAction) }}

    <div class=\"page\">

        {% if showMenu is not defined or showMenu %}
            {% import '@CoreHome/_menu.twig' as menu %}
            {{ menu.menu(adminMenu, false, 'Menu--admin', currentModule, currentAction) }}
        {% endif %}


        <div class=\"pageWrap\">
            <a name=\"main\"></a>
            {% block notification %}
                {% include \"@CoreHome/_notifications.twig\" %}
            {% endblock %}
            {% include \"@CoreHome/_warningInvalidHost.twig\" %}

            <div class=\"admin\" id=\"content\" ng-cloak>

                <div class=\"ui-confirm\" id=\"alert\">
                    <h2></h2>
                    <input role=\"no\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
                </div>

                {% block content %}
                {% endblock %}


            </div>
        </div>
    </div>


{% endblock %}
", "admin.twig", "/var/www/zinecat.org/pawtucket/matomo/plugins/Morpheus/templates/admin.twig");
    }
}
