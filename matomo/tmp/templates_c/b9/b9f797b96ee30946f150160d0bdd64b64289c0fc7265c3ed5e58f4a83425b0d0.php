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

/* @CoreHome/getDefaultIndexView.twig */
class __TwigTemplate_ef988607c171ee0321b9cf5797e13f85e69be30b4f6e3b12fdca6dfb8c763ea5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'topcontrols' => [$this, 'block_topcontrols'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@CoreHome/getDefaultIndexView.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("dashboard.twig", "@CoreHome/getDefaultIndexView.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_topcontrols($context, array $blocks = [])
    {
        // line 5
        echo "    ";
        $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@CoreHome/getDefaultIndexView.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->loadTemplate("@CoreHome/_periodSelect.twig", "@CoreHome/getDefaultIndexView.twig", 6)->display($context);
        // line 7
        echo "    ";
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.nextToCalendar"]);
        echo "
    ";
        // line 8
        $this->loadTemplate($context["dashboardSettingsControl"]->getTemplateFile(), "@CoreHome/getDefaultIndexView.twig", 8)->display(twig_array_merge($context, $context["dashboardSettingsControl"]->getTemplateVars()));
        // line 9
        echo "    ";
        $this->loadTemplate("@CoreHome/_headerMessage.twig", "@CoreHome/getDefaultIndexView.twig", 9)->display($context);
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        // line 13
        echo "    ";
        echo $context["ajax"]->getrequestErrorDiv((((isset($context["emailSuperUser"]) || array_key_exists("emailSuperUser", $context))) ? (_twig_default_filter(($context["emailSuperUser"] ?? $this->getContext($context, "emailSuperUser")), "")) : ("")), ($context["areAdsForProfessionalServicesEnabled"] ?? $this->getContext($context, "areAdsForProfessionalServicesEnabled")), ($context["currentModule"] ?? $this->getContext($context, "currentModule")));
        echo "
    ";
        // line 14
        echo $context["ajax"]->getloadingDiv();
        echo "

    <div id=\"content\" class=\"home\">
        ";
        // line 17
        if (($context["content"] ?? $this->getContext($context, "content"))) {
            echo \Piwik\piwik_escape_filter($this->env, ($context["content"] ?? $this->getContext($context, "content")), "html", null, true);
        }
        // line 18
        echo "        <div piwik-reporting-page ng-cloak></div>
    </div>
    <div class=\"clear\"></div>

";
    }

    public function getTemplateName()
    {
        return "@CoreHome/getDefaultIndexView.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 18,  78 => 17,  72 => 14,  67 => 13,  64 => 12,  59 => 9,  57 => 8,  52 => 7,  49 => 6,  46 => 5,  43 => 4,  38 => 1,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"dashboard.twig\" %}
{% import 'ajaxMacros.twig' as ajax %}

{% block topcontrols %}
    {% include \"@CoreHome/_siteSelectHeader.twig\" %}
    {% include \"@CoreHome/_periodSelect.twig\" %}
    {{ postEvent(\"Template.nextToCalendar\") }}
    {% render dashboardSettingsControl %}
    {% include \"@CoreHome/_headerMessage.twig\" %}
{% endblock %}

{% block content %}
    {{ ajax.requestErrorDiv(emailSuperUser|default(''), areAdsForProfessionalServicesEnabled, currentModule) }}
    {{ ajax.loadingDiv() }}

    <div id=\"content\" class=\"home\">
        {% if content %}{{ content }}{% endif %}
        <div piwik-reporting-page ng-cloak></div>
    </div>
    <div class=\"clear\"></div>

{% endblock %}

", "@CoreHome/getDefaultIndexView.twig", "/var/www/zinecat.org/matomo/plugins/CoreHome/templates/getDefaultIndexView.twig");
    }
}
