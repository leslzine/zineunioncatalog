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

/* @Installation/finished.twig */
class __TwigTemplate_f8e88577938692bea017027657fe98488507278c7b423674d2102dc1553e73e7 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@Installation/layout.twig", "@Installation/finished.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
    <h2>";
        // line 5
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_Congratulations"]);
        echo "</h2>

    ";
        // line 7
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_CongratulationsHelp"]);
        echo "

    <h3>";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_WelcomeToCommunity"]), "html", null, true);
        echo "</h3>
    <p>
        ";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_CollaborativeProject"]), "html", null, true);
        echo "
    </p>
    <p>
        ";
        // line 14
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_GetInvolved", "<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/get-involved/\">", "</a>"]);
        echo "
        ";
        // line 15
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_HelpTranslatePiwik", "<a rel='noreferrer noopener' target='_blank' href='https://matomo.org/translations/'>", "</a>"]);
        echo "
    </p>
    <p>";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_WeHopeYouWillEnjoyPiwik"]), "html", null, true);
        echo "</p>
    <p><i>";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_HappyAnalysing"]), "html", null, true);
        echo "</i></p>

    ";
        // line 20
        if (($context["areAdsForProfessionalServicesEnabled"] ?? $this->getContext($context, "areAdsForProfessionalServicesEnabled"))) {
            // line 21
            echo "        <h3>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_ProfessionalServicesAdTitle"]), "html", null, true);
            echo "</h3>
        <p>
            ";
            // line 23
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_ProfessionalServicesfessionalServicesAdText"]), "html", null, true);
            echo "
        </p>
        <p>
            ";
            // line 26
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_ProfessionalServicesfessionalDiscoverHow", (("<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"" . ($context["linkToProfessionalServices"] ?? $this->getContext($context, "linkToProfessionalServices"))) . "\">"), "</a>"]);
            echo "
        </p>
    ";
        }
        // line 29
        echo "
    <h3>";
        // line 30
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_DefaultSettings"]), "html", null, true);
        echo "</h3>
    <p>";
        // line 31
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_DefaultSettingsHelp"]), "html", null, true);
        echo "</p>

    ";
        // line 33
        if ((isset($context["errorMessage"]) || array_key_exists("errorMessage", $context))) {
            // line 34
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 35
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Error"]), "html", null, true);
            echo ":
            <br/>- ";
            // line 36
            echo ($context["errorMessage"] ?? $this->getContext($context, "errorMessage"));
            echo "
        </div>
    ";
        }
        // line 39
        echo "
    <div class=\"installation-finished\">
        ";
        // line 41
        if ((isset($context["form_data"]) || array_key_exists("form_data", $context))) {
            // line 42
            echo "            ";
            $this->loadTemplate("genericForm.twig", "@Installation/finished.twig", 42)->display($context);
            // line 43
            echo "        ";
        }
        // line 44
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "@Installation/finished.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 44,  140 => 43,  137 => 42,  135 => 41,  131 => 39,  125 => 36,  121 => 35,  118 => 34,  116 => 33,  111 => 31,  107 => 30,  104 => 29,  98 => 26,  92 => 23,  86 => 21,  84 => 20,  79 => 18,  75 => 17,  70 => 15,  66 => 14,  60 => 11,  55 => 9,  50 => 7,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
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

    <h2>{{ 'Installation_Congratulations'|translate|raw }}</h2>

    {{ 'Installation_CongratulationsHelp'|translate|raw }}

    <h3>{{ 'Installation_WelcomeToCommunity'|translate }}</h3>
    <p>
        {{ 'Installation_CollaborativeProject'|translate }}
    </p>
    <p>
        {{ 'Installation_GetInvolved'|translate('<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/get-involved/\">','</a>')|raw }}
        {{ 'General_HelpTranslatePiwik'|translate(\"<a rel='noreferrer noopener' target='_blank' href=\\'https://matomo.org/translations/\\'>\",\"<\\/a>\")|raw }}
    </p>
    <p>{{ 'Installation_WeHopeYouWillEnjoyPiwik'|translate }}</p>
    <p><i>{{ 'Installation_HappyAnalysing'|translate }}</i></p>

    {% if areAdsForProfessionalServicesEnabled %}
        <h3>{{ 'Installation_ProfessionalServicesAdTitle'|translate }}</h3>
        <p>
            {{ 'Installation_ProfessionalServicesfessionalServicesAdText'|translate }}
        </p>
        <p>
            {{ 'Installation_ProfessionalServicesfessionalDiscoverHow'|translate('<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"' ~ linkToProfessionalServices ~ '\">','</a>')|raw }}
        </p>
    {% endif %}

    <h3>{{ 'Installation_DefaultSettings'|translate }}</h3>
    <p>{{ 'Installation_DefaultSettingsHelp'|translate }}</p>

    {% if errorMessage is defined %}
        <div class=\"alert alert-danger\">
            {{ 'General_Error'|translate }}:
            <br/>- {{ errorMessage|raw }}
        </div>
    {% endif %}

    <div class=\"installation-finished\">
        {% if form_data is defined %}
            {% include \"genericForm.twig\" %}
        {% endif %}
    </div>

{% endblock %}
", "@Installation/finished.twig", "/var/www/zinecat.org/pawtucket/matomo/plugins/Installation/templates/finished.twig");
    }
}
