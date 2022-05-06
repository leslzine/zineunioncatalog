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

/* dashboard.twig */
class __TwigTemplate_0906d4a00a4908b553a86f2c98b2252f675b8ea351efa5b9ea2f74b1078cb5d8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'pageDescription' => [$this, 'block_pageDescription'],
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
        // line 7
        ob_start();
        echo ($context["siteName"] ?? $this->getContext($context, "siteName"));
        echo " - ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_WebAnalyticsReports"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        $context["bodyClass"] = call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.bodyClass", "dashboard"]);
        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "dashboard.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_pageDescription($context, array $blocks = [])
    {
        echo "Web Analytics report for ";
        echo \Piwik\piwik_escape_filter($this->env, ($context["siteName"] ?? $this->getContext($context, "siteName")), "html_attr");
        echo " - Matomo";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        // line 14
        echo "    ";
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.header", "dashboard"]);
        echo "
    ";
        // line 15
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 16
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.footer", "dashboard"]);
        echo "
";
    }

    // line 19
    public function block_root($context, array $blocks = [])
    {
        // line 20
        echo "    ";
        $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "dashboard.twig", 20)->display($context);
        // line 21
        echo "    ";
        $this->loadTemplate("@CoreHome/_topScreen.twig", "dashboard.twig", 21)->display($context);
        // line 22
        echo "
    <div class=\"top_controls\">
        <div piwik-quick-access ng-cloak class=\"piwikTopControl borderedControl\"></div>
        ";
        // line 25
        $this->displayBlock('topcontrols', $context, $blocks);
        // line 27
        echo "
    </div>

    <div class=\"ui-confirm\" id=\"alert\">
        <h2></h2>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 32
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Ok"]), "html", null, true);
        echo "\"/>
    </div>

    ";
        // line 35
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.beforeContent", "dashboard", ($context["currentModule"] ?? $this->getContext($context, "currentModule")), ($context["currentAction"] ?? $this->getContext($context, "currentAction"))]);
        echo "

    <div class=\"page\">

        ";
        // line 39
        if (((isset($context["showMenu"]) || array_key_exists("showMenu", $context)) && ($context["showMenu"] ?? $this->getContext($context, "showMenu")))) {
            // line 40
            echo "            <div id=\"secondNavBar\" class=\"Menu--dashboard z-depth-1\">
                <div piwik-reporting-menu></div>
            </div>
        ";
        }
        // line 44
        echo "
        <div class=\"pageWrap\" ng-cloak>

            <a name=\"main\"></a>
            ";
        // line 48
        $this->displayBlock('notification', $context, $blocks);
        // line 51
        echo "
            <div piwik-popover></div>

            <piwik-comparisons></piwik-comparisons>

            ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "
            <div class=\"clear\"></div>
        </div>

    </div>
";
    }

    // line 25
    public function block_topcontrols($context, array $blocks = [])
    {
        // line 26
        echo "        ";
    }

    // line 48
    public function block_notification($context, array $blocks = [])
    {
        // line 49
        echo "                ";
        $this->loadTemplate("@CoreHome/_notifications.twig", "dashboard.twig", 49)->display($context);
        // line 50
        echo "            ";
    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
        // line 57
        echo "            ";
    }

    public function getTemplateName()
    {
        return "dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 57,  177 => 56,  173 => 50,  170 => 49,  167 => 48,  163 => 26,  160 => 25,  151 => 58,  149 => 56,  142 => 51,  140 => 48,  134 => 44,  128 => 40,  126 => 39,  119 => 35,  113 => 32,  106 => 27,  104 => 25,  99 => 22,  96 => 21,  93 => 20,  90 => 19,  84 => 16,  80 => 15,  75 => 14,  72 => 13,  64 => 9,  57 => 4,  54 => 3,  49 => 1,  47 => 11,  41 => 7,  35 => 1,);
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

{% block head %}
    {{ parent() }}
{% endblock %}

{% set title %}{{ siteName|raw }} - {{ 'CoreHome_WebAnalyticsReports'|translate }}{% endset %}

{% block pageDescription %}Web Analytics report for {{ siteName|escape(\"html_attr\") }} - Matomo{% endblock %}

{% set bodyClass = postEvent('Template.bodyClass', 'dashboard') %}

{% block body %}
    {{ postEvent(\"Template.header\", \"dashboard\") }}
    {{ parent() }}
    {{ postEvent(\"Template.footer\", \"dashboard\") }}
{% endblock %}

{% block root %}
    {% include \"@CoreHome/_warningInvalidHost.twig\" %}
    {% include \"@CoreHome/_topScreen.twig\" %}

    <div class=\"top_controls\">
        <div piwik-quick-access ng-cloak class=\"piwikTopControl borderedControl\"></div>
        {% block topcontrols %}
        {% endblock %}

    </div>

    <div class=\"ui-confirm\" id=\"alert\">
        <h2></h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
    </div>

    {{ postEvent(\"Template.beforeContent\", \"dashboard\", currentModule, currentAction) }}

    <div class=\"page\">

        {% if showMenu is defined and showMenu %}
            <div id=\"secondNavBar\" class=\"Menu--dashboard z-depth-1\">
                <div piwik-reporting-menu></div>
            </div>
        {% endif %}

        <div class=\"pageWrap\" ng-cloak>

            <a name=\"main\"></a>
            {% block notification %}
                {% include \"@CoreHome/_notifications.twig\" %}
            {% endblock %}

            <div piwik-popover></div>

            <piwik-comparisons></piwik-comparisons>

            {% block content %}
            {% endblock %}

            <div class=\"clear\"></div>
        </div>

    </div>
{% endblock %}
", "dashboard.twig", "/var/www/zinecat.org/pawtucket/matomo/plugins/Morpheus/templates/dashboard.twig");
    }
}
