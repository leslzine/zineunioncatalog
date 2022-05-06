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

/* @CoreHome/_periodSelect.twig */
class __TwigTemplate_8304770d008076432ca6118a2b639cb7c09970c45eefcbd9acd92204618b27ec extends \Twig\Template
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
        echo "<div
    id=\"periodString\"
    piwik-period-selector
    periods=\"";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["enabledPeriods"] ?? $this->getContext($context, "enabledPeriods"))), "html_attr");
        echo "\"
    class=\"borderedControl piwikTopControl\"
>
</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_periodSelect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div
    id=\"periodString\"
    piwik-period-selector
    periods=\"{{ enabledPeriods|json_encode|e('html_attr') }}\"
    class=\"borderedControl piwikTopControl\"
>
</div>
", "@CoreHome/_periodSelect.twig", "/var/www/zinecat.org/matomo/plugins/CoreHome/templates/_periodSelect.twig");
    }
}
