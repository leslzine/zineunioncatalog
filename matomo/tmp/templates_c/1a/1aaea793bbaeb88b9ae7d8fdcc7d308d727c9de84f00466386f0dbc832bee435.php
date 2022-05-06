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

/* @Installation/getSystemCheckWidget.twig */
class __TwigTemplate_44f77e865f33258c30f05bfbb511f8a17cef70783d0c04c02fad1bbdca1766a9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"widgetBody system-check\">
    ";
        // line 2
        if (( !($context["numErrors"] ?? $this->getContext($context, "numErrors")) &&  !($context["numWarnings"] ?? $this->getContext($context, "numWarnings")))) {
            // line 3
            echo "        <p class=\"system-success\"><span class=\"icon-ok\"></span> ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_SystemCheckNoErrorsOrWarnings"]), "html", null, true);
            echo "</p>
    ";
        }
        // line 5
        echo "
    ";
        // line 6
        if (($context["numErrors"] ?? $this->getContext($context, "numErrors"))) {
            // line 7
            echo "        <p class=\"system-errors\"><span class=\"icon-error\"></span> ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Errors"]), "html", null, true);
            echo "</p>
        <ul>
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "                <li title=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["error"], "getLongErrorMessage", []), "html_attr");
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["error"], "getLabel", []), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </ul>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if (($context["numWarnings"] ?? $this->getContext($context, "numWarnings"))) {
            // line 16
            echo "
        <p class=\"system-warnings\">

            ";
            // line 19
            if (($context["numErrors"] ?? $this->getContext($context, "numErrors"))) {
                // line 20
                echo "                <br />
            ";
            }
            // line 22
            echo "
            <span class=\"icon-warning\"></span> ";
            // line 23
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Warnings"]), "html", null, true);
            echo "
        </p>
        <ul>
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["warnings"] ?? $this->getContext($context, "warnings")));
            foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                // line 27
                echo "                <li title=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["warning"], "getLongErrorMessage", []), "html_attr");
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["warning"], "getLabel", []), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </ul>
    ";
        }
        // line 31
        echo "
    ";
        // line 32
        if ((($context["numErrors"] ?? $this->getContext($context, "numErrors")) || ($context["numWarnings"] ?? $this->getContext($context, "numWarnings")))) {
            // line 33
            echo "        <p>
            <br />
            <a href=\"";
            // line 35
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "Installation", "action" => "systemCheckPage"]]), "html", null, true);
            echo "\"
            >";
            // line 36
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_SystemCheckViewFullSystemCheck"]), "html", null, true);
            echo "</a>
        </p>
    ";
        }
        // line 39
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@Installation/getSystemCheckWidget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 39,  128 => 36,  124 => 35,  120 => 33,  118 => 32,  115 => 31,  111 => 29,  100 => 27,  96 => 26,  90 => 23,  87 => 22,  83 => 20,  81 => 19,  76 => 16,  74 => 15,  71 => 14,  67 => 12,  56 => 10,  52 => 9,  46 => 7,  44 => 6,  41 => 5,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widgetBody system-check\">
    {% if not numErrors and not numWarnings %}
        <p class=\"system-success\"><span class=\"icon-ok\"></span> {{ 'Installation_SystemCheckNoErrorsOrWarnings'|translate }}</p>
    {% endif %}

    {% if numErrors %}
        <p class=\"system-errors\"><span class=\"icon-error\"></span> {{ 'General_Errors'|translate }}</p>
        <ul>
            {% for error in errors %}
                <li title=\"{{ error.getLongErrorMessage|e('html_attr') }}\">{{ error.getLabel }}</li>
            {% endfor %}
        </ul>
    {% endif %}

    {% if numWarnings %}

        <p class=\"system-warnings\">

            {% if numErrors %}
                <br />
            {% endif %}

            <span class=\"icon-warning\"></span> {{ 'General_Warnings'|translate }}
        </p>
        <ul>
            {% for warning in warnings %}
                <li title=\"{{ warning.getLongErrorMessage|e('html_attr') }}\">{{ warning.getLabel }}</li>
            {% endfor %}
        </ul>
    {% endif %}

    {% if numErrors or numWarnings %}
        <p>
            <br />
            <a href=\"{{ linkTo({'module': 'Installation', 'action': 'systemCheckPage'}) }}\"
            >{{ 'Installation_SystemCheckViewFullSystemCheck'|translate }}</a>
        </p>
    {% endif %}
</div>", "@Installation/getSystemCheckWidget.twig", "/var/www/zinecat.org/matomo/plugins/Installation/templates/getSystemCheckWidget.twig");
    }
}
