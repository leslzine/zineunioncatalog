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

/* @Login/loginLayout.twig */
class __TwigTemplate_a4d59dd1e983576bf8bcd50628f4f9c9118a21124604e9f91efb7cb14d4b382d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'head' => [$this, 'block_head'],
            'pageDescription' => [$this, 'block_pageDescription'],
            'body' => [$this, 'block_body'],
            'loginContent' => [$this, 'block_loginContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Morpheus/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 13
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_LogIn"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        $context["bodyId"] = "loginPage";
        // line 1
        $this->parent = $this->loadTemplate("@Morpheus/layout.twig", "@Login/loginLayout.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta($context, array $blocks = [])
    {
        // line 4
        echo "    <meta name=\"robots\" content=\"noindex,nofollow\">
";
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <script type=\"text/javascript\" src=\"libs/bower_components/jquery-placeholder/jquery.placeholder.js\"></script>
";
    }

    // line 15
    public function block_pageDescription($context, array $blocks = [])
    {
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_OpenSourceWebAnalytics"]), "html", null, true);
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        // line 20
        echo "
    ";
        // line 21
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.beforeTopBar", "login"]);
        echo "
    ";
        // line 22
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.beforeContent", "login"]);
        echo "

    ";
        // line 24
        $this->loadTemplate("_iframeBuster.twig", "@Login/loginLayout.twig", 24)->display($context);
        // line 25
        echo "
    <div id=\"notificationContainer\">
    </div>
    <nav>
        <div class=\"nav-wrapper\">
            ";
        // line 30
        $this->loadTemplate("@CoreHome/_logo.twig", "@Login/loginLayout.twig", 30)->display(twig_array_merge($context, ["logoLink" => "https://matomo.org", "centeredLogo" => true, "useLargeLogo" => false]));
        // line 31
        echo "        </div>
    </nav>

    <section class=\"loginSection row\">
        <div class=\"col s12 m6 push-m3 l4 push-l4\">

        ";
        // line 38
        echo "        ";
        if ((((isset($context["isValidHost"]) || array_key_exists("isValidHost", $context)) && (isset($context["invalidHostMessage"]) || array_key_exists("invalidHostMessage", $context))) && (($context["isValidHost"] ?? $this->getContext($context, "isValidHost")) == false))) {
            // line 39
            echo "            ";
            $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "@Login/loginLayout.twig", 39)->display($context);
            // line 40
            echo "        ";
        } else {
            // line 41
            echo "            ";
            $this->displayBlock('loginContent', $context, $blocks);
            // line 43
            echo "        ";
        }
        // line 44
        echo "
        </div>
    </section>

";
    }

    // line 41
    public function block_loginContent($context, array $blocks = [])
    {
        // line 42
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Login/loginLayout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 42,  133 => 41,  125 => 44,  122 => 43,  119 => 41,  116 => 40,  113 => 39,  110 => 38,  102 => 31,  100 => 30,  93 => 25,  91 => 24,  86 => 22,  82 => 21,  79 => 20,  76 => 19,  70 => 15,  61 => 8,  58 => 7,  53 => 4,  50 => 3,  45 => 1,  43 => 17,  39 => 13,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Morpheus/layout.twig' %}

{% block meta %}
    <meta name=\"robots\" content=\"noindex,nofollow\">
{% endblock %}

{% block head %}
    {{ parent() }}

    <script type=\"text/javascript\" src=\"libs/bower_components/jquery-placeholder/jquery.placeholder.js\"></script>
{% endblock %}

{% set title %}{{ 'Login_LogIn'|translate }}{% endset %}

{% block pageDescription %}{{ 'General_OpenSourceWebAnalytics'|translate }}{% endblock %}

{% set bodyId = 'loginPage' %}

{% block body %}

    {{ postEvent(\"Template.beforeTopBar\", \"login\") }}
    {{ postEvent(\"Template.beforeContent\", \"login\") }}

    {% include \"_iframeBuster.twig\" %}

    <div id=\"notificationContainer\">
    </div>
    <nav>
        <div class=\"nav-wrapper\">
            {% include \"@CoreHome/_logo.twig\" with { 'logoLink': 'https://matomo.org', 'centeredLogo': true, 'useLargeLogo': false } %}
        </div>
    </nav>

    <section class=\"loginSection row\">
        <div class=\"col s12 m6 push-m3 l4 push-l4\">

        {# untrusted host warning #}
        {% if (isValidHost is defined and invalidHostMessage is defined and isValidHost == false) %}
            {% include '@CoreHome/_warningInvalidHost.twig' %}
        {% else %}
            {% block loginContent %}
            {% endblock %}
        {% endif %}

        </div>
    </section>

{% endblock %}
", "@Login/loginLayout.twig", "/var/www/zinecat.org/matomo/plugins/Login/templates/loginLayout.twig");
    }
}
