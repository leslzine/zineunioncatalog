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

/* @Login/_formErrors.twig */
class __TwigTemplate_761ea4c168291288d2deb907a1c01cc46936ff7f8f995ed375eb7f7bf63ceaf5 extends \Twig\Template
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
        echo "
";
        // line 2
        if (((isset($context["formErrors"]) || array_key_exists("formErrors", $context)) &&  !twig_test_empty(($context["formErrors"] ?? $this->getContext($context, "formErrors"))))) {
            // line 3
            echo "    <div piwik-notification
         noclear=\"true\"
         context=\"error\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["formErrors"] ?? $this->getContext($context, "formErrors")));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 7
                echo "            <strong>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Error"]), "html", null, true);
                echo "</strong>: ";
                echo $context["data"];
                echo "
            <br/>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@Login/_formErrors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  44 => 7,  40 => 6,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% if formErrors is defined and formErrors is not empty %}
    <div piwik-notification
         noclear=\"true\"
         context=\"error\">
        {% for data in formErrors %}
            <strong>{{ 'General_Error'|translate }}</strong>: {{ data|raw }}
            <br/>
        {% endfor %}
    </div>
{% endif %}
", "@Login/_formErrors.twig", "/var/www/zinecat.org/matomo/plugins/Login/templates/_formErrors.twig");
    }
}
