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

/* layout.twig */
class __TwigTemplate_03d1e6a5ed310c6b5d214bd04d6b175f34628c523743db9963a447e1e8591ee3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'pageTitle' => [$this, 'block_pageTitle'],
            'pageDescription' => [$this, 'block_pageDescription'],
            'meta' => [$this, 'block_meta'],
            'body' => [$this, 'block_body'],
            'root' => [$this, 'block_root'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html id=\"ng-app\" ";
        // line 2
        if ((isset($context["language"]) || array_key_exists("language", $context))) {
            echo "lang=\"";
            echo \Piwik\piwik_escape_filter($this->env, ($context["language"] ?? $this->getContext($context, "language")), "html", null, true);
            echo "\"";
        }
        echo " ng-app=\"piwikApp\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "    </head>
    <body id=\"";
        // line 33
        echo \Piwik\piwik_escape_filter($this->env, (((isset($context["bodyId"]) || array_key_exists("bodyId", $context))) ? (_twig_default_filter(($context["bodyId"] ?? $this->getContext($context, "bodyId")), "")) : ("")), "html", null, true);
        echo "\" ng-app=\"app\" class=\"";
        echo \Piwik\piwik_escape_filter($this->env, (((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context))) ? (_twig_default_filter(($context["bodyClass"] ?? $this->getContext($context, "bodyClass")), "")) : ("")), "html", null, true);
        echo "\">

    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "
        <div id=\"pageFooter\">
            ";
        // line 52
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.pageFooter"]);
        echo "
        </div>

        ";
        // line 55
        $this->loadTemplate("@CoreHome/_adblockDetect.twig", "layout.twig", 55)->display($context);
        // line 56
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "            <meta charset=\"utf-8\">
            <title>";
        // line 7
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 12
        echo "</title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
            <meta name=\"viewport\" content=\"initial-scale=1.0\"/>
            <meta name=\"generator\" content=\"Matomo - free/libre analytics platform\"/>
            <meta name=\"description\" content=\"";
        // line 16
        $this->displayBlock('pageDescription', $context, $blocks);
        echo "\"/>
            <meta name=\"apple-itunes-app\" content=\"app-id=737216887\" />
            <meta name=\"google\" content=\"notranslate\">
            ";
        // line 19
        $this->displayBlock('meta', $context, $blocks);
        // line 22
        echo "
            ";
        // line 23
        $this->loadTemplate("@CoreHome/_favicon.twig", "layout.twig", 23)->display($context);
        // line 24
        echo "            ";
        $this->loadTemplate("@CoreHome/_applePinnedTabIcon.twig", "layout.twig", 24)->display($context);
        // line 25
        echo "            <meta name=\"theme-color\" content=\"";
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["themeStyles"] ?? $this->getContext($context, "themeStyles")), "colorHeaderBackground", []), "html", null, true);
        echo "\">
            ";
        // line 26
        $this->loadTemplate("_jsGlobalVariables.twig", "layout.twig", 26)->display($context);
        // line 27
        echo "            ";
        $this->loadTemplate("_jsCssIncludes.twig", "layout.twig", 27)->display($context);
        // line 29
        if ( !($context["isCustomLogo"] ?? $this->getContext($context, "isCustomLogo"))) {
            echo "<link rel=\"manifest\" href=\"plugins/CoreHome/javascripts/manifest.json\">";
        }
        // line 30
        echo "
        ";
    }

    // line 7
    public function block_pageTitle($context, array $blocks = [])
    {
        // line 8
        if ((isset($context["title"]) || array_key_exists("title", $context))) {
            echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo " - ";
        }
        // line 9
        if ((isset($context["categoryTitle"]) || array_key_exists("categoryTitle", $context))) {
            echo \Piwik\piwik_escape_filter($this->env, ($context["categoryTitle"] ?? $this->getContext($context, "categoryTitle")), "html", null, true);
            echo " - ";
        }
        // line 10
        echo "Matomo";
    }

    // line 16
    public function block_pageDescription($context, array $blocks = [])
    {
    }

    // line 19
    public function block_meta($context, array $blocks = [])
    {
        // line 20
        echo "                <meta name=\"robots\" content=\"noindex,nofollow\">
            ";
    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        // line 36
        echo "
        ";
        // line 37
        $this->loadTemplate("_iframeBuster.twig", "layout.twig", 37)->display($context);
        // line 38
        echo "        ";
        $this->loadTemplate("@CoreHome/_javaScriptDisabled.twig", "layout.twig", 38)->display($context);
        // line 39
        echo "
        <div id=\"root\">
            ";
        // line 41
        $this->displayBlock('root', $context, $blocks);
        // line 43
        echo "        </div>

        <div piwik-popover-handler></div>

        ";
        // line 47
        $this->loadTemplate("@CoreHome/_shortcuts.twig", "layout.twig", 47)->display($context);
        // line 48
        echo "
    ";
    }

    // line 41
    public function block_root($context, array $blocks = [])
    {
        // line 42
        echo "            ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 42,  189 => 41,  184 => 48,  182 => 47,  176 => 43,  174 => 41,  170 => 39,  167 => 38,  165 => 37,  162 => 36,  159 => 35,  154 => 20,  151 => 19,  146 => 16,  142 => 10,  137 => 9,  132 => 8,  129 => 7,  124 => 30,  120 => 29,  117 => 27,  115 => 26,  110 => 25,  107 => 24,  105 => 23,  102 => 22,  100 => 19,  94 => 16,  88 => 12,  86 => 7,  83 => 5,  80 => 4,  74 => 56,  72 => 55,  66 => 52,  62 => 50,  60 => 35,  53 => 33,  50 => 32,  48 => 4,  39 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html id=\"ng-app\" {% if language is defined %}lang=\"{{ language }}\"{% endif %} ng-app=\"piwikApp\">
    <head>
        {% block head %}
            <meta charset=\"utf-8\">
            <title>
                {%- block pageTitle %}
                    {%- if title is defined -%}{{ title }} - {% endif -%}
                    {%- if categoryTitle is defined -%}{{ categoryTitle }} - {% endif -%}
                    Matomo
                {%- endblock -%}
            </title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
            <meta name=\"viewport\" content=\"initial-scale=1.0\"/>
            <meta name=\"generator\" content=\"Matomo - free/libre analytics platform\"/>
            <meta name=\"description\" content=\"{% block pageDescription %}{% endblock %}\"/>
            <meta name=\"apple-itunes-app\" content=\"app-id=737216887\" />
            <meta name=\"google\" content=\"notranslate\">
            {% block meta %}
                <meta name=\"robots\" content=\"noindex,nofollow\">
            {% endblock %}

            {% include \"@CoreHome/_favicon.twig\" %}
            {% include \"@CoreHome/_applePinnedTabIcon.twig\" %}
            <meta name=\"theme-color\" content=\"{{ themeStyles.colorHeaderBackground }}\">
            {% include \"_jsGlobalVariables.twig\" %}
            {% include \"_jsCssIncludes.twig\" %}

            {%- if not isCustomLogo %}<link rel=\"manifest\" href=\"plugins/CoreHome/javascripts/manifest.json\">{% endif %}

        {% endblock %}
    </head>
    <body id=\"{{ bodyId|default('') }}\" ng-app=\"app\" class=\"{{ bodyClass|default('') }}\">

    {% block body %}

        {% include \"_iframeBuster.twig\" %}
        {% include \"@CoreHome/_javaScriptDisabled.twig\" %}

        <div id=\"root\">
            {% block root %}
            {% endblock %}
        </div>

        <div piwik-popover-handler></div>

        {% include \"@CoreHome/_shortcuts.twig\" %}

    {% endblock %}

        <div id=\"pageFooter\">
            {{ postEvent('Template.pageFooter') }}
        </div>

        {% include \"@CoreHome/_adblockDetect.twig\" %}
    </body>
</html>
", "layout.twig", "/var/www/zinecat.org/matomo/plugins/Morpheus/templates/layout.twig");
    }
}
