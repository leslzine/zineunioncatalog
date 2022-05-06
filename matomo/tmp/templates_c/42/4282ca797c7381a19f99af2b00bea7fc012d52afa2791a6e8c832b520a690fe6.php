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

/* @Installation/systemCheckPage.twig */
class __TwigTemplate_b05e7c2279579dc24d5755b3b845067e28967c29f38a9420471b1946bcd06a1f extends \Twig\Template
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
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_SystemCheck"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@Installation/systemCheckPage.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "
    <div piwik-content-block content-title=\"";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html_attr");
        echo "\" feature=\"true\">

        ";
        // line 9
        if ($this->getAttribute(($context["diagnosticReport"] ?? $this->getContext($context, "diagnosticReport")), "hasErrors", [], "method")) {
            // line 10
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 11
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_SystemCheckSummaryThereWereErrors", "<strong>", "</strong>", "<strong>", "</strong>"]);
            echo "
                ";
            // line 12
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_SeeBelowForMoreInfo"]), "html", null, true);
            echo "
            </div>
        ";
        } elseif ($this->getAttribute(        // line 14
($context["diagnosticReport"] ?? $this->getContext($context, "diagnosticReport")), "hasWarnings", [], "method")) {
            // line 15
            echo "            <div class=\"alert alert-warning\">
                ";
            // line 16
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_SystemCheckSummaryThereWereWarnings"]), "html", null, true);
            echo "
                ";
            // line 17
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_SeeBelowForMoreInfo"]), "html", null, true);
            echo "
            </div>
        ";
        } else {
            // line 20
            echo "            <div class=\"alert alert-success\">
                ";
            // line 21
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_SystemCheckSummaryNoProblems"]), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 24
        echo "
            ";
        // line 25
        $this->loadTemplate("@Installation/_systemCheckSection.twig", "@Installation/systemCheckPage.twig", 25)->display($context);
        // line 26
        echo "    </div>


";
    }

    public function getTemplateName()
    {
        return "@Installation/systemCheckPage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 26,  96 => 25,  93 => 24,  87 => 21,  84 => 20,  78 => 17,  74 => 16,  71 => 15,  69 => 14,  64 => 12,  60 => 11,  57 => 10,  55 => 9,  50 => 7,  47 => 6,  44 => 5,  39 => 1,  35 => 3,  29 => 1,);
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

{% set title %}{{ 'Installation_SystemCheck'|translate }}{% endset %}

{% block content %}

    <div piwik-content-block content-title=\"{{ title|e('html_attr') }}\" feature=\"true\">

        {% if diagnosticReport.hasErrors() %}
            <div class=\"alert alert-danger\">
                {{ 'Installation_SystemCheckSummaryThereWereErrors'|translate('<strong>','</strong>','<strong>','</strong>')|raw }}
                {{ 'Installation_SeeBelowForMoreInfo'|translate }}
            </div>
        {% elseif diagnosticReport.hasWarnings() %}
            <div class=\"alert alert-warning\">
                {{ 'Installation_SystemCheckSummaryThereWereWarnings'|translate }}
                {{ 'Installation_SeeBelowForMoreInfo'|translate }}
            </div>
        {% else %}
            <div class=\"alert alert-success\">
                {{ 'Installation_SystemCheckSummaryNoProblems'|translate }}
            </div>
        {% endif %}

            {% include \"@Installation/_systemCheckSection.twig\" %}
    </div>


{% endblock %}
", "@Installation/systemCheckPage.twig", "/var/www/zinecat.org/matomo/plugins/Installation/templates/systemCheckPage.twig");
    }
}
