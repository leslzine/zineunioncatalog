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

/* @ProfessionalServices/promoServicesWidget.twig */
class __TwigTemplate_9533989c9d8f739368c5867db70464426cd2afd0a0a2f5e5cdbaea1708822ead extends \Twig\Template
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
        echo "<div class=\"promoWidget\">
    <div class=\"promo\">
        <a href=\"";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, ($context["ctaLinkUrl"] ?? $this->getContext($context, "ctaLinkUrl")), "html_attr");
        echo "\" target=\"_blank\" rel=\"noreferrer noopener\"><img class=\"icon\" src=\"plugins/ProfessionalServices/images/promo.png\"></a>
        <h2>";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, ($context["ctaTitle"] ?? $this->getContext($context, "ctaTitle")), "html", null, true);
        echo "</h2>
        <p class=\"text\">
            <span>";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, ($context["ctaText"] ?? $this->getContext($context, "ctaText")), "html", null, true);
        echo "</span>
            <br /><br />
            <a class=\"btn\" href=\"";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, ($context["ctaLinkUrl"] ?? $this->getContext($context, "ctaLinkUrl")), "html_attr");
        echo "\" target=\"_blank\" rel=\"noreferrer noopener\">
                ";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, ($context["ctaLinkTitle"] ?? $this->getContext($context, "ctaLinkTitle")), "html", null, true);
        echo "
            </a>
        </p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@ProfessionalServices/promoServicesWidget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  48 => 8,  43 => 6,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"promoWidget\">
    <div class=\"promo\">
        <a href=\"{{ ctaLinkUrl|e('html_attr') }}\" target=\"_blank\" rel=\"noreferrer noopener\"><img class=\"icon\" src=\"plugins/ProfessionalServices/images/promo.png\"></a>
        <h2>{{ ctaTitle }}</h2>
        <p class=\"text\">
            <span>{{ ctaText }}</span>
            <br /><br />
            <a class=\"btn\" href=\"{{ ctaLinkUrl|e('html_attr') }}\" target=\"_blank\" rel=\"noreferrer noopener\">
                {{ ctaLinkTitle }}
            </a>
        </p>
    </div>
</div>
", "@ProfessionalServices/promoServicesWidget.twig", "/var/www/zinecat.org/matomo/plugins/ProfessionalServices/templates/promoServicesWidget.twig");
    }
}
