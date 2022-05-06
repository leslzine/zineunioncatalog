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

/* @Installation/firstWebsiteSetup.twig */
class __TwigTemplate_c075a2464c770b33de42cff5bf7bfb2ba00f12cece6f5d6c12ac20bc547ecd65 extends \Twig\Template
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
        return "@Installation/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@Installation/layout.twig", "@Installation/firstWebsiteSetup.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
    <h2>";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_SetupWebsite"]), "html", null, true);
        echo "</h2>

    ";
        // line 7
        if ((isset($context["displayGeneralSetupSuccess"]) || array_key_exists("displayGeneralSetupSuccess", $context))) {
            // line 8
            echo "        <div id=\"feedback\" class=\"alert alert-success\">
            ";
            // line 9
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_SuperUserSetupSuccess"]), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 12
        echo "
    <p>";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_SiteSetup"]), "html", null, true);
        echo "</p>

    ";
        // line 15
        if ((isset($context["errorMessage"]) || array_key_exists("errorMessage", $context))) {
            // line 16
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 17
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_SetupWebsiteError"]), "html", null, true);
            echo ":
            <br/>- ";
            // line 18
            echo ($context["errorMessage"] ?? $this->getContext($context, "errorMessage"));
            echo "
        </div>
    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if ((isset($context["form_data"]) || array_key_exists("form_data", $context))) {
            // line 23
            echo "        ";
            $this->loadTemplate("genericForm.twig", "@Installation/firstWebsiteSetup.twig", 23)->display($context);
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <div class=\"clearfix\"></div>

    <p><em>";
        // line 27
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_SiteSetupFootnote"]), "html", null, true);
        echo "</em></p>

";
    }

    public function getTemplateName()
    {
        return "@Installation/firstWebsiteSetup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 27,  95 => 25,  92 => 24,  89 => 23,  87 => 22,  84 => 21,  78 => 18,  74 => 17,  71 => 16,  69 => 15,  64 => 13,  61 => 12,  55 => 9,  52 => 8,  50 => 7,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Installation/layout.twig' %}

{% block content %}

    <h2>{{ 'Installation_SetupWebsite'|translate }}</h2>

    {% if displayGeneralSetupSuccess is defined %}
        <div id=\"feedback\" class=\"alert alert-success\">
            {{ 'Installation_SuperUserSetupSuccess'|translate }}
        </div>
    {% endif %}

    <p>{{ 'Installation_SiteSetup'|translate }}</p>

    {% if errorMessage is defined %}
        <div class=\"alert alert-danger\">
            {{ 'Installation_SetupWebsiteError'|translate }}:
            <br/>- {{ errorMessage|raw }}
        </div>
    {% endif %}

    {% if form_data is defined %}
        {% include \"genericForm.twig\" %}
    {% endif %}
    <div class=\"clearfix\"></div>

    <p><em>{{ 'Installation_SiteSetupFootnote'|translate }}</em></p>

{% endblock %}
", "@Installation/firstWebsiteSetup.twig", "/var/www/zinecat.org/pawtucket/matomo/plugins/Installation/templates/firstWebsiteSetup.twig");
    }
}
