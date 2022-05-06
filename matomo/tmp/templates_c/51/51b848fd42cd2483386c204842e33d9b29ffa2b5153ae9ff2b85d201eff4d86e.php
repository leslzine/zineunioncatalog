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

/* @CoreHome/_logo.twig */
class __TwigTemplate_475f251d4a6832b1919850dd9bc9fd83a5e323b681c260ba1b92db3fdb4fba18 extends \Twig\Template
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
        echo "<span id=\"logo\" class=\"logo brand-logo ";
        if (((isset($context["centeredLogo"]) || array_key_exists("centeredLogo", $context)) && ($context["centeredLogo"] ?? $this->getContext($context, "centeredLogo")))) {
            echo "center";
        }
        echo "\">
    ";
        // line 2
        if (( !(isset($context["logoLink"]) || array_key_exists("logoLink", $context)) ||  !twig_test_empty(($context["logoLink"] ?? $this->getContext($context, "logoLink"))))) {
            // line 3
            echo "    <a href=\"";
            echo \Piwik\piwik_escape_filter($this->env, (((isset($context["logoLink"]) || array_key_exists("logoLink", $context))) ? (_twig_default_filter(($context["logoLink"] ?? $this->getContext($context, "logoLink")), "index.php")) : ("index.php")), "html", null, true);
            echo "\" tabindex=\"-1\"
       title=\"";
            // line 4
            if (($context["isCustomLogo"] ?? $this->getContext($context, "isCustomLogo"))) {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_PoweredBy"]), "html", null, true);
                echo " ";
            }
            echo "Matomo";
            if ( !($context["isCustomLogo"] ?? $this->getContext($context, "isCustomLogo"))) {
                echo " # ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_OpenSourceWebAnalytics"]), "html", null, true);
            }
            echo "\"
    >
    ";
        }
        // line 7
        echo "    ";
        if (($context["hasSVGLogo"] ?? $this->getContext($context, "hasSVGLogo"))) {
            // line 8
            echo "        <img src='";
            echo \Piwik\piwik_escape_filter($this->env, ($context["logoSVG"] ?? $this->getContext($context, "logoSVG")), "html", null, true);
            echo "?matomo' tabindex=\"3\"
             alt=\"";
            // line 9
            if (($context["isCustomLogo"] ?? $this->getContext($context, "isCustomLogo"))) {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_PoweredBy"]), "html", null, true);
                echo " ";
            }
            echo "Matomo\"
             class=\"";
            // line 10
            if ( !($context["isCustomLogo"] ?? $this->getContext($context, "isCustomLogo"))) {
                echo "default-piwik-logo";
            }
            echo "\" />
    ";
        } else {
            // line 12
            echo "        <img src='";
            if ((((isset($context["useLargeLogo"]) || array_key_exists("useLargeLogo", $context))) ? (_twig_default_filter(($context["useLargeLogo"] ?? $this->getContext($context, "useLargeLogo")), false)) : (false))) {
                echo \Piwik\piwik_escape_filter($this->env, ($context["logoLarge"] ?? $this->getContext($context, "logoLarge")), "html", null, true);
            } else {
                echo \Piwik\piwik_escape_filter($this->env, ($context["logoHeader"] ?? $this->getContext($context, "logoHeader")), "html", null, true);
            }
            echo "?matomo' alt=\"";
            if (($context["isCustomLogo"] ?? $this->getContext($context, "isCustomLogo"))) {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_PoweredBy"]), "html", null, true);
                echo " ";
            }
            echo "Matomo\" />
    ";
        }
        // line 14
        echo "        ";
        if (( !(isset($context["logoLink"]) || array_key_exists("logoLink", $context)) ||  !twig_test_empty(($context["logoLink"] ?? $this->getContext($context, "logoLink"))))) {
            // line 15
            echo "    </a>
    ";
        }
        // line 17
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 17,  98 => 15,  95 => 14,  80 => 12,  73 => 10,  66 => 9,  61 => 8,  58 => 7,  44 => 4,  39 => 3,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<span id=\"logo\" class=\"logo brand-logo {% if centeredLogo is defined and centeredLogo %}center{% endif %}\">
    {% if logoLink is not defined or logoLink is not empty %}
    <a href=\"{{ logoLink|default('index.php') }}\" tabindex=\"-1\"
       title=\"{% if isCustomLogo %}{{ 'General_PoweredBy'|translate }} {% endif %}Matomo{% if not isCustomLogo %} # {{ 'General_OpenSourceWebAnalytics'|translate }}{% endif %}\"
    >
    {% endif %}
    {% if hasSVGLogo %}
        <img src='{{ logoSVG }}?matomo' tabindex=\"3\"
             alt=\"{% if isCustomLogo %}{{ 'General_PoweredBy'|translate }} {% endif %}Matomo\"
             class=\"{% if not isCustomLogo %}default-piwik-logo{% endif %}\" />
    {% else %}
        <img src='{% if useLargeLogo|default(false) %}{{ logoLarge }}{% else %}{{ logoHeader }}{% endif %}?matomo' alt=\"{% if isCustomLogo %}{{ 'General_PoweredBy'|translate }} {% endif %}Matomo\" />
    {% endif %}
        {% if logoLink is not defined or logoLink is not empty %}
    </a>
    {% endif %}
</span>
", "@CoreHome/_logo.twig", "/var/www/zinecat.org/matomo/plugins/CoreHome/templates/_logo.twig");
    }
}
