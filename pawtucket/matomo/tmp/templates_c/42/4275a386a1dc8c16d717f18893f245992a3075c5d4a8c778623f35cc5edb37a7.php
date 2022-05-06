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

/* @Installation/trackingCode.twig */
class __TwigTemplate_5782dd6488f2437336f9e96887c0da765af33678677a74c06481e095addc0c58 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@Installation/layout.twig", "@Installation/trackingCode.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
    ";
        // line 5
        if ((isset($context["displayfirstWebsiteSetupSuccess"]) || array_key_exists("displayfirstWebsiteSetupSuccess", $context))) {
            // line 6
            echo "        <div id=\"feedback\" class=\"alert alert-success\">
            ";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_SetupWebsiteSetupSuccess", ($context["displaySiteName"] ?? $this->getContext($context, "displaySiteName"))]), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        echo ($context["trackingHelp"] ?? $this->getContext($context, "trackingHelp"));
        echo "

    <h3>";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_LargePiwikInstances"]), "html", null, true);
        echo "</h3>
    <p>
        ";
        // line 15
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_JsTagArchivingHelp1", "<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/docs/setup-auto-archiving/\">", "</a>"]);
        echo "
    </p>
    <p>
        ";
        // line 18
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ReadThisToLearnMore", "<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/docs/optimize/\">", "</a>"]);
        echo "
    </p>

";
    }

    public function getTemplateName()
    {
        return "@Installation/trackingCode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  69 => 15,  64 => 13,  59 => 11,  56 => 10,  50 => 7,  47 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
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

    {% if displayfirstWebsiteSetupSuccess is defined %}
        <div id=\"feedback\" class=\"alert alert-success\">
            {{ 'Installation_SetupWebsiteSetupSuccess'|translate(displaySiteName) }}
        </div>
    {% endif %}

    {{ trackingHelp|raw }}

    <h3>{{ 'Installation_LargePiwikInstances'|translate }}</h3>
    <p>
        {{ 'Installation_JsTagArchivingHelp1'|translate('<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/docs/setup-auto-archiving/\">','</a>')|raw }}
    </p>
    <p>
        {{ 'General_ReadThisToLearnMore'|translate('<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/docs/optimize/\">','</a>')|raw }}
    </p>

{% endblock %}
", "@Installation/trackingCode.twig", "/var/www/zinecat.org/pawtucket/matomo/plugins/Installation/templates/trackingCode.twig");
    }
}
