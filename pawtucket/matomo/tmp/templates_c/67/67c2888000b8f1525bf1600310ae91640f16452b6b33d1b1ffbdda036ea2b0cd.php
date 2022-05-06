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

/* @CoreHome/_warningInvalidHost.twig */
class __TwigTemplate_40d89e0b9617d7b8f7af59e55225fd7191990cc1b9c7625228073f95f06bc9d4 extends \Twig\Template
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
        // line 2
        if ((((isset($context["isValidHost"]) || array_key_exists("isValidHost", $context)) && (isset($context["invalidHostMessage"]) || array_key_exists("invalidHostMessage", $context))) && (($context["isValidHost"] ?? $this->getContext($context, "isValidHost")) == false))) {
            // line 3
            echo "    ";
            ob_start();
            // line 4
            echo "        <a class=\"btn btn-link\" style=\"float:right;\" href=\"https://matomo.org/faq/troubleshooting/#faq_171\" rel=\"noreferrer noopener\" target=\"_blank\">
            <span class=\"icon-help\"></span>
            ";
            // line 6
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Help"]), "html", null, true);
            echo "
        </a>
        <strong>";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Warning"]), "html", null, true);
            echo ":&nbsp;</strong>";
            echo ($context["invalidHostMessage"] ?? $this->getContext($context, "invalidHostMessage"));
            echo "

        <br>
        <br>

        ";
            // line 13
            echo ($context["invalidHostMessageHowToFix"] ?? $this->getContext($context, "invalidHostMessageHowToFix"));
            echo "
    ";
            $context["invalidHostText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 15
            echo "
    <div style=\"clear:both;width:800px;\">
        ";
            // line 17
            echo call_user_func_array($this->env->getFilter('notification')->getCallable(), [($context["invalidHostText"] ?? $this->getContext($context, "invalidHostText")), ["noclear" => true, "raw" => true, "context" => "warning"]]);
            echo "
    </div>

";
        }
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_warningInvalidHost.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  63 => 17,  59 => 15,  54 => 13,  44 => 8,  39 => 6,  35 => 4,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# untrusted host warning #}
{% if (isValidHost is defined and invalidHostMessage is defined and isValidHost == false) %}
    {% set invalidHostText %}
        <a class=\"btn btn-link\" style=\"float:right;\" href=\"https://matomo.org/faq/troubleshooting/#faq_171\" rel=\"noreferrer noopener\" target=\"_blank\">
            <span class=\"icon-help\"></span>
            {{ 'General_Help'|translate }}
        </a>
        <strong>{{ 'General_Warning'|translate }}:&nbsp;</strong>{{ invalidHostMessage|raw }}

        <br>
        <br>

        {{ invalidHostMessageHowToFix|raw }}
    {% endset %}

    <div style=\"clear:both;width:800px;\">
        {{ invalidHostText|notification({'noclear': true, 'raw': true, 'context': 'warning'}) }}
    </div>

{% endif %}

", "@CoreHome/_warningInvalidHost.twig", "/var/www/zinecat.org/pawtucket/matomo/plugins/CoreHome/templates/_warningInvalidHost.twig");
    }
}
