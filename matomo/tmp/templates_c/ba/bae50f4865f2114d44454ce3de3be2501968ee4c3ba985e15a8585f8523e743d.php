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

/* @Installation/cannotConnectToDb.twig */
class __TwigTemplate_197650d163e250dec26b14b449b6f38b4488a57d580993c1694ebbb507dcc79e extends \Twig\Template
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
        echo "<p>";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_CannotConnectToDb"]), "html", null, true);
        echo ":</p>

<p><strong>";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, ($context["exceptionMessage"] ?? $this->getContext($context, "exceptionMessage")), "html", null, true);
        echo "</strong></p>

<p>";
        // line 5
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_CannotConnectToDbResolvingExplanation", "<a href=\"javascript:window.location.reload()\">", "</a>"]);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "@Installation/cannotConnectToDb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p>{{ 'Installation_CannotConnectToDb'|translate }}:</p>

<p><strong>{{ exceptionMessage }}</strong></p>

<p>{{ 'Installation_CannotConnectToDbResolvingExplanation'|translate('<a href=\"javascript:window.location.reload()\">', '</a>')|raw }}</p>", "@Installation/cannotConnectToDb.twig", "/var/www/zinecat.org/matomo/plugins/Installation/templates/cannotConnectToDb.twig");
    }
}
