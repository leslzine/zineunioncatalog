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

/* @UserCountry/_updaterNextRunTime.twig */
class __TwigTemplate_e48580c98dbf39e15bf686f39199537cf98a605d6e11a87de196a92ed1005f83 extends \Twig\Template
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
        if ( !twig_test_empty((((isset($context["nextRunTime"]) || array_key_exists("nextRunTime", $context))) ? (_twig_default_filter(($context["nextRunTime"] ?? $this->getContext($context, "nextRunTime")))) : ("")))) {
            // line 2
            echo "  ";
            if ((twig_date_converter($this->env, $this->getAttribute(($context["nextRunTime"] ?? $this->getContext($context, "nextRunTime")), "getTimestamp", [], "method")) <= twig_date_converter($this->env))) {
                // line 3
                echo "      ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_UpdaterScheduledForNextRun"]), "html", null, true);
                echo "
  ";
            } else {
                // line 5
                echo "      ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_UpdaterWillRunNext", (("<strong>" . $this->getAttribute(($context["nextRunTime"] ?? $this->getContext($context, "nextRunTime")), "toString", [], "method")) . "</strong>")]);
                echo "
  ";
            }
        } else {
            // line 8
            echo "  ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_UpdaterIsNotScheduledToRun"]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@UserCountry/_updaterNextRunTime.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  41 => 5,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if nextRunTime|default is not empty %}
  {% if date(nextRunTime.getTimestamp()) <= date() %}
      {{ 'UserCountry_UpdaterScheduledForNextRun'|translate }}
  {% else %}
      {{ 'UserCountry_UpdaterWillRunNext'|translate('<strong>' ~ nextRunTime.toString() ~ '</strong>')|raw }}
  {% endif %}
{% else %}
  {{ 'UserCountry_UpdaterIsNotScheduledToRun'|translate }}
{% endif %}", "@UserCountry/_updaterNextRunTime.twig", "/var/www/zinecat.org/matomo/plugins/UserCountry/templates/_updaterNextRunTime.twig");
    }
}
