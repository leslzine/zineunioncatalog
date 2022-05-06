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

/* @Installation/systemCheck.twig */
class __TwigTemplate_17b837ac17f91ad0b9db0c2a880d8f4f7cff33cde51277b7f74b0785ba4e95f9 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@Installation/layout.twig", "@Installation/systemCheck.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
    <script type=\"text/javascript\">
        \$(function () {
            // client-side test for https to handle the case where the server is behind a reverse proxy
            if (document.location.protocol === 'https:') {
                \$('p.next-step a').attr('href', \$('p.next-step a').attr('href') + '&clientProtocol=https');
            }
        });
    </script>

    ";
        // line 14
        if ( !($context["showNextStep"] ?? $this->getContext($context, "showNextStep"))) {
            // line 15
            echo "        ";
            $this->loadTemplate("@Installation/_systemCheckLegend.twig", "@Installation/systemCheck.twig", 15)->display($context);
            // line 16
            echo "        <br style=\"clear:both;\">
    ";
        }
        // line 18
        echo "
    <h2>";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_SystemCheck"]), "html", null, true);
        echo "</h2>

    ";
        // line 21
        $this->loadTemplate("@Installation/_systemCheckSection.twig", "@Installation/systemCheck.twig", 21)->display($context);
        // line 22
        echo "
    ";
        // line 23
        if ( !($context["showNextStep"] ?? $this->getContext($context, "showNextStep"))) {
            // line 24
            echo "        <p>
            <span class=\"icon-export\"></span>
            <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/docs/requirements/\">";
            // line 26
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_Requirements"]), "html", null, true);
            echo "</a>
        </p>
        ";
            // line 28
            $this->loadTemplate("@Installation/_systemCheckLegend.twig", "@Installation/systemCheck.twig", 28)->display($context);
            // line 29
            echo "    ";
        }
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Installation/systemCheck.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  89 => 29,  87 => 28,  82 => 26,  78 => 24,  76 => 23,  73 => 22,  71 => 21,  66 => 19,  63 => 18,  59 => 16,  56 => 15,  54 => 14,  42 => 4,  39 => 3,  29 => 1,);
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

    <script type=\"text/javascript\">
        \$(function () {
            // client-side test for https to handle the case where the server is behind a reverse proxy
            if (document.location.protocol === 'https:') {
                \$('p.next-step a').attr('href', \$('p.next-step a').attr('href') + '&clientProtocol=https');
            }
        });
    </script>

    {% if not showNextStep %}
        {% include \"@Installation/_systemCheckLegend.twig\" %}
        <br style=\"clear:both;\">
    {% endif %}

    <h2>{{ 'Installation_SystemCheck'|translate }}</h2>

    {% include \"@Installation/_systemCheckSection.twig\" %}

    {% if not showNextStep %}
        <p>
            <span class=\"icon-export\"></span>
            <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/docs/requirements/\">{{ 'Installation_Requirements'|translate }}</a>
        </p>
        {% include \"@Installation/_systemCheckLegend.twig\" %}
    {% endif %}

{% endblock %}
", "@Installation/systemCheck.twig", "/var/www/zinecat.org/pawtucket/matomo/plugins/Installation/templates/systemCheck.twig");
    }
}
