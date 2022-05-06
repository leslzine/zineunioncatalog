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

/* @SitesManager/index.twig */
class __TwigTemplate_150811eca7ea766587089ab990e67b52dc67f2ec8b672e12448ba2e3569f15f6 extends \Twig\Template
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
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_WebsitesManagement"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@SitesManager/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "
    <div ng-include=\"'plugins/SitesManager/templates/index.html?cb=";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, ($context["cacheBuster"] ?? $this->getContext($context, "cacheBuster")), "html", null, true);
        echo "'\"></div>

";
    }

    public function getTemplateName()
    {
        return "@SitesManager/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  47 => 6,  44 => 5,  39 => 1,  35 => 3,  29 => 1,);
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

{% set title %}{{ 'SitesManager_WebsitesManagement'|translate }}{% endset %}

{% block content %}

    <div ng-include=\"'plugins/SitesManager/templates/index.html?cb={{ cacheBuster }}'\"></div>

{% endblock %}
", "@SitesManager/index.twig", "/var/www/zinecat.org/pawtucket/matomo/plugins/SitesManager/templates/index.twig");
    }
}
