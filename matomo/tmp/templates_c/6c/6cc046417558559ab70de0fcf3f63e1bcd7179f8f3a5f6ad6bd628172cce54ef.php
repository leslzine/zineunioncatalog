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

/* @UserCountry/getDistinctCountries.twig */
class __TwigTemplate_b77e85807eb3e958719d78149ae2a8297eea6c5df0d99187f427f1fcf1352a0e extends \Twig\Template
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
        echo "<div piwik-content-block>
    <div class=\"sparkline\">
        ";
        // line 3
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [($context["urlSparklineCountries"] ?? $this->getContext($context, "urlSparklineCountries"))]);
        echo "
\t<div>
        ";
        // line 5
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_DistinctCountries", (("<strong>" . call_user_func_array($this->env->getFilter('number')->getCallable(), [($context["numberDistinctCountries"] ?? $this->getContext($context, "numberDistinctCountries"))])) . "</strong>")]);
        echo "
\t</div>
    </div>
    <br style=\"clear:left\"/>
</div>
";
    }

    public function getTemplateName()
    {
        return "@UserCountry/getDistinctCountries.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div piwik-content-block>
    <div class=\"sparkline\">
        {{ sparkline(urlSparklineCountries) }}
\t<div>
        {{ 'UserCountry_DistinctCountries'|translate(\"<strong>\"~numberDistinctCountries|number~\"</strong>\")|raw }}
\t</div>
    </div>
    <br style=\"clear:left\"/>
</div>
", "@UserCountry/getDistinctCountries.twig", "/var/www/zinecat.org/matomo/plugins/UserCountry/templates/getDistinctCountries.twig");
    }
}
