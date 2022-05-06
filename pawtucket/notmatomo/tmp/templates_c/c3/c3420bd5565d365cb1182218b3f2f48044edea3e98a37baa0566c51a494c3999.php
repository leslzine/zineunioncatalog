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

/* @Installation/welcome.twig */
class __TwigTemplate_6d7e4524366a88c4d794b14835a5f7bef57bfa38641202144024b19c530c8904 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@Installation/layout.twig", "@Installation/welcome.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
    <h2>";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_Welcome"]), "html", null, true);
        echo "</h2>

    ";
        // line 7
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_WelcomeHelp", ($context["totalNumberOfSteps"] ?? $this->getContext($context, "totalNumberOfSteps"))]);
        echo "

    <script type=\"text/javascript\">
        <!--
        \$(function () {
            // client-side test for broken tracker (e.g., mod_security rule)
            \$('.next-step').hide();
            \$.ajax({
                url: 'matomo.php',
                data: 'url=http://example.com',
                complete: function () {
                    \$('.next-step').show();
                },
                error: function (req) {
                    \$('.next-step a').attr('href', \$('.next-step a').attr('href') + '&trackerStatus=' + req.status);
                }
            });
        });
        //-->
    </script>

    ";
        // line 28
        if ( !($context["showNextStep"] ?? $this->getContext($context, "showNextStep"))) {
            // line 29
            echo "        <p class=\"next-step\">
            <a href=\"";
            // line 30
            echo \Piwik\piwik_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_RefreshPage"]), "html", null, true);
            echo " &raquo;</a>
        </p>
    ";
        }
        // line 33
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Installation/welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 33,  79 => 30,  76 => 29,  74 => 28,  50 => 7,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
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

    <h2>{{ 'Installation_Welcome'|translate }}</h2>

    {{ 'Installation_WelcomeHelp'|translate(totalNumberOfSteps)|raw }}

    <script type=\"text/javascript\">
        <!--
        \$(function () {
            // client-side test for broken tracker (e.g., mod_security rule)
            \$('.next-step').hide();
            \$.ajax({
                url: 'matomo.php',
                data: 'url=http://example.com',
                complete: function () {
                    \$('.next-step').show();
                },
                error: function (req) {
                    \$('.next-step a').attr('href', \$('.next-step a').attr('href') + '&trackerStatus=' + req.status);
                }
            });
        });
        //-->
    </script>

    {% if not showNextStep %}
        <p class=\"next-step\">
            <a href=\"{{ url }}\">{{ 'General_RefreshPage'|translate }} &raquo;</a>
        </p>
    {% endif %}

{% endblock %}
", "@Installation/welcome.twig", "/var/www/zinecat.org/pawtucket/matomo/plugins/Installation/templates/welcome.twig");
    }
}
