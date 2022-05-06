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

/* @CoreAdminHome/getTrackingFailures.twig */
class __TwigTemplate_1d3ff6c53e671c230dfe0ac6114d263efe786a99b606fe7db6d8b094641ad5d3 extends \Twig\Template
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
        if ((($context["numFailures"] ?? $this->getContext($context, "numFailures")) == 0)) {
            // line 3
            echo "        <p class=\"system-success\"><span class=\"icon-ok\"></span> ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_NoKnownFailures"]), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 5
            echo "        <p class=\"system-errors\">
            <span style=\"font-size: 16px;\"><span class=\"icon-error\"></span> ";
            // line 6
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_NTrackingFailures", ($context["numFailures"] ?? $this->getContext($context, "numFailures"))]), "html", null, true);
            echo "</span>
        </p>
        <p>
            <a href=\"";
            // line 9
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "CoreAdminHome", "action" => "trackingFailures"]]), "html", null, true);
            echo "\"
            >";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_ViewAllTrackingFailures"]), "html", null, true);
            echo "</a>
        </p>
    ";
        }
        // line 13
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/getTrackingFailures.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  54 => 10,  50 => 9,  44 => 6,  41 => 5,  35 => 3,  33 => 2,  30 => 1,);
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
    {% if numFailures == 0 %}
        <p class=\"system-success\"><span class=\"icon-ok\"></span> {{ 'CoreAdminHome_NoKnownFailures'|translate }}</p>
    {% else %}
        <p class=\"system-errors\">
            <span style=\"font-size: 16px;\"><span class=\"icon-error\"></span> {{ 'CoreAdminHome_NTrackingFailures'|translate(numFailures) }}</span>
        </p>
        <p>
            <a href=\"{{ linkTo({'module': 'CoreAdminHome', 'action': 'trackingFailures'}) }}\"
            >{{ 'CoreAdminHome_ViewAllTrackingFailures'|translate }}</a>
        </p>
    {% endif %}
</div>", "@CoreAdminHome/getTrackingFailures.twig", "/var/www/zinecat.org/matomo/plugins/CoreAdminHome/templates/getTrackingFailures.twig");
    }
}
