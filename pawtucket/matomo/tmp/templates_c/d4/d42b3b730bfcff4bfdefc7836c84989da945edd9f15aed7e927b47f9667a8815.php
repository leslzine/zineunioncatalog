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

/* @Installation/setupSuperUser.twig */
class __TwigTemplate_d54b2a71fc348806075f8d962692dbe77d9e1a7ce342f78b7d45375d520fb384 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@Installation/layout.twig", "@Installation/setupSuperUser.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
    <h2>";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_SuperUser"]), "html", null, true);
        echo "</h2>

    ";
        // line 7
        if ((isset($context["errorMessage"]) || array_key_exists("errorMessage", $context))) {
            // line 8
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 9
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_SuperUserSetupError"]), "html", null, true);
            echo ":
            <br/>- ";
            // line 10
            echo ($context["errorMessage"] ?? $this->getContext($context, "errorMessage"));
            echo "
        </div>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if ((isset($context["form_data"]) || array_key_exists("form_data", $context))) {
            // line 15
            echo "        ";
            $this->loadTemplate("genericForm.twig", "@Installation/setupSuperUser.twig", 15)->display($context);
            // line 16
            echo "    ";
        }
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Installation/setupSuperUser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  73 => 16,  70 => 15,  68 => 14,  65 => 13,  59 => 10,  55 => 9,  52 => 8,  50 => 7,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
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

    <h2>{{ 'Installation_SuperUser'|translate }}</h2>

    {% if errorMessage is defined %}
        <div class=\"alert alert-danger\">
            {{ 'Installation_SuperUserSetupError'|translate }}:
            <br/>- {{ errorMessage|raw }}
        </div>
    {% endif %}

    {% if form_data is defined %}
        {% include \"genericForm.twig\" %}
    {% endif %}

{% endblock %}
", "@Installation/setupSuperUser.twig", "/var/www/zinecat.org/pawtucket/matomo/plugins/Installation/templates/setupSuperUser.twig");
    }
}
