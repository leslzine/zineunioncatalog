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

/* @Login/bruteForceLog.twig */
class __TwigTemplate_c1e537b5d8657ce454e20f3c4a008e70fbc3588f463984385d5aa9313250bf5a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_BruteForceLog"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@Login/bruteForceLog.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "
    <div piwik-content-block content-title=\"";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_CurrentlyBlockedIPs"]), "html_attr");
        echo "\">
        ";
        // line 8
        if (twig_test_empty(($context["blockedIps"] ?? $this->getContext($context, "blockedIps")))) {
            // line 9
            echo "            <p>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountryMap_None"]), "html", null, true);
            echo "</p>
        ";
        } else {
            // line 11
            echo "            <ul style=\"margin-left: 20px;\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blockedIps"] ?? $this->getContext($context, "blockedIps")));
            foreach ($context['_seq'] as $context["_key"] => $context["blockedIp"]) {
                // line 13
                echo "                <li style=\"list-style: disc;\">";
                echo \Piwik\piwik_escape_filter($this->env, $context["blockedIp"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockedIp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "            </ul>
        ";
        }
        // line 17
        echo "
        ";
        // line 18
        if ( !twig_test_empty(($context["blockedIps"] ?? $this->getContext($context, "blockedIps")))) {
            // line 19
            echo "            <p><br />";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_CurrentlyBlockedIPsUnblockInfo"]), "html", null, true);
            echo "</p>

            <div>
                <input type=\"button\" class=\"btn\" value=\"";
            // line 22
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_UnblockAllIPs"]), "html", null, true);
            echo "\" onclick=\"bruteForceLog.unblockAllIps();\">
            </div>

            <div id=\"confirmUnblockAllIps\" class=\"ui-confirm\">
                <h2>";
            // line 26
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_CurrentlyBlockedIPsUnblockConfirm"]), "html", null, true);
            echo "</h2>
                <input role=\"yes\" type=\"button\" value=\"";
            // line 27
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Yes"]), "html", null, true);
            echo "\"/>
                <input role=\"no\" type=\"button\" value=\"";
            // line 28
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_No"]), "html", null, true);
            echo "\"/>
            </div>
        ";
        }
        // line 31
        echo "
        ";
        // line 32
        if ( !twig_test_empty(($context["blacklistedIps"] ?? $this->getContext($context, "blacklistedIps")))) {
            // line 33
            echo "            <h3>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_IPsAlwaysBlocked"]), "html", null, true);
            echo "</h3>
            <ul style=\"margin-left: 20px;\">
                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blacklistedIps"] ?? $this->getContext($context, "blacklistedIps")));
            foreach ($context['_seq'] as $context["_key"] => $context["blacklistedIp"]) {
                // line 36
                echo "                    <li style=\"list-style: disc;\">";
                echo \Piwik\piwik_escape_filter($this->env, $context["blacklistedIp"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blacklistedIp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            </ul>
        ";
        }
        // line 40
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "@Login/bruteForceLog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 40,  139 => 38,  130 => 36,  126 => 35,  120 => 33,  118 => 32,  115 => 31,  109 => 28,  105 => 27,  101 => 26,  94 => 22,  87 => 19,  85 => 18,  82 => 17,  78 => 15,  69 => 13,  65 => 12,  62 => 11,  56 => 9,  54 => 8,  50 => 7,  47 => 6,  44 => 5,  39 => 1,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'Login_BruteForceLog'|translate }}{% endset %}

{% block content %}

    <div piwik-content-block content-title=\"{{ 'Login_CurrentlyBlockedIPs'|translate|e('html_attr') }}\">
        {% if blockedIps is empty %}
            <p>{{ 'UserCountryMap_None'|translate }}</p>
        {% else %}
            <ul style=\"margin-left: 20px;\">
                {% for blockedIp in blockedIps %}
                <li style=\"list-style: disc;\">{{ blockedIp }}</li>
                {% endfor %}
            </ul>
        {% endif %}

        {% if blockedIps is not empty %}
            <p><br />{{ 'Login_CurrentlyBlockedIPsUnblockInfo'|translate }}</p>

            <div>
                <input type=\"button\" class=\"btn\" value=\"{{ 'Login_UnblockAllIPs'|translate }}\" onclick=\"bruteForceLog.unblockAllIps();\">
            </div>

            <div id=\"confirmUnblockAllIps\" class=\"ui-confirm\">
                <h2>{{ 'Login_CurrentlyBlockedIPsUnblockConfirm'|translate }}</h2>
                <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
                <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
            </div>
        {% endif %}

        {% if blacklistedIps is not empty %}
            <h3>{{ 'Login_IPsAlwaysBlocked'|translate }}</h3>
            <ul style=\"margin-left: 20px;\">
                {% for blacklistedIp in blacklistedIps %}
                    <li style=\"list-style: disc;\">{{ blacklistedIp }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

{% endblock %}
", "@Login/bruteForceLog.twig", "/var/www/zinecat.org/pawtucket/matomo/plugins/Login/templates/bruteForceLog.twig");
    }
}
