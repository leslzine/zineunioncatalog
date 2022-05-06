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

/* @Live/_actionCommon.twig */
class __TwigTemplate_d276eb12f738fb6ad50efa058381fd09584229485db60015f835ad381351bdc6 extends \Twig\Template
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
        echo "<li class=\"";
        if ($this->getAttribute(($context["action"] ?? null), "goalName", [], "any", true, true)) {
            echo "goal";
        } else {
            echo "action";
        }
        echo "\"
    title=\"";
        // line 2
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Live.renderActionTooltip", ($context["action"] ?? $this->getContext($context, "action")), ($context["visitInfo"] ?? $this->getContext($context, "visitInfo"))]);
        echo "\">
    <div>
        ";
        // line 5
        echo "        ";
        if ( !twig_test_empty((($this->getAttribute(($context["action"] ?? null), "pageTitle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "pageTitle", []), false)) : (false)))) {
            // line 6
            echo "            <span class=\"truncated-text-line\">";
            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "pageTitle", [])]);
            echo "</span>
        ";
        }
        // line 8
        echo "        ";
        if ($this->getAttribute(($context["action"] ?? null), "siteSearchKeyword", [], "any", true, true)) {
            // line 9
            echo "            ";
            if (($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", []) == "search")) {
                // line 10
                echo "                <img src='";
                echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute(($context["action"] ?? null), "iconSVG", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "iconSVG", []), $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", []))) : ($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", []))), "html", null, true);
                echo "' title='";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Actions_SubmenuSitesearch"]), "html", null, true);
                echo "'
                     class=\"action-list-action-icon search\">
            ";
            }
            // line 13
            echo "            <span class=\"truncated-text-line\">";
            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "siteSearchKeyword", [])]);
            echo "</span>
        ";
        }
        // line 15
        echo "        ";
        if ( !twig_test_empty($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", []))) {
            // line 16
            echo "            ";
            if ( !twig_test_empty((($this->getAttribute(($context["action"] ?? null), "iconSVG", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "iconSVG", []), $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", []))) : ($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", []))))) {
                // line 17
                echo "                <img src='";
                echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute(($context["action"] ?? null), "iconSVG", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "iconSVG", []), $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", []))) : ($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", []))), "html", null, true);
                echo "' class=\"action-list-action-icon ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", []), "html", null, true);
                echo "\">
            ";
            }
            // line 19
            echo "            ";
            if ((($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", []) == "action") &&  !twig_test_empty((($this->getAttribute(($context["action"] ?? null), "pageTitle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "pageTitle", []), false)) : (false))))) {
                echo "<p>";
            }
            // line 20
            echo "            ";
            if ((((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_lower_filter($this->env, twig_trim_filter($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", [])))) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "javascript:") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144))) || (is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_lower_filter($this->env, twig_trim_filter($this->getAttribute(            // line 21
($context["action"] ?? $this->getContext($context, "action")), "url", [])))) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "vbscript:") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)))) || (is_string($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_lower_filter($this->env, twig_trim_filter($this->getAttribute(            // line 22
($context["action"] ?? $this->getContext($context, "action")), "url", [])))) && is_string($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = "data:") && ('' === $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 || 0 === strpos($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4, $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666))))) {
                // line 23
                echo "                ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", []), "html", null, true);
                echo "
            ";
            } else {
                // line 25
                echo "                <a href=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('safelink')->getCallable(), [$this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", [])]), "html_attr");
                echo "\" rel=\"noreferrer noopener\" target=\"_blank\"
                   class=\"action-list-url truncated-text-line\">
                    ";
                // line 27
                if ( !twig_length_filter($this->env, ($context["additionalUrls"] ?? $this->getContext($context, "additionalUrls")))) {
                    // line 28
                    echo "                        ";
                    // line 29
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", []), [(($context["mainUrl"] ?? $this->getContext($context, "mainUrl")) . "/") => "/", "http://" => "", "https://" => ""]), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 31
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", []), ["http://" => "", "https://" => ""]), "html", null, true);
                    echo "
                    ";
                }
                // line 33
                echo "                </a>
            ";
            }
            // line 35
            echo "            ";
            if ((($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", []) == "action") &&  !twig_test_empty((($this->getAttribute(($context["action"] ?? null), "pageTitle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "pageTitle", []), false)) : (false))))) {
                echo "</p>";
            }
            // line 36
            echo "        ";
        } elseif (($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", []) != "search")) {
            // line 37
            echo "            <p>
                <span>";
            // line 38
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_NotDefined", call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Actions_ColumnPageURL"])]), "html", null, true);
            echo "</span>
            </p>
        ";
        }
        // line 41
        echo "    </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "@Live/_actionCommon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 41,  141 => 38,  138 => 37,  135 => 36,  130 => 35,  126 => 33,  120 => 31,  114 => 29,  112 => 28,  110 => 27,  104 => 25,  98 => 23,  96 => 22,  95 => 21,  93 => 20,  88 => 19,  80 => 17,  77 => 16,  74 => 15,  68 => 13,  59 => 10,  56 => 9,  53 => 8,  47 => 6,  44 => 5,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"{% if action.goalName is defined %}goal{% else %}action{% endif %}\"
    title=\"{{ postEvent('Live.renderActionTooltip', action, visitInfo) }}\">
    <div>
        {# Page view / Download / Outlink #}
        {% if action.pageTitle|default(false) is not empty %}
            <span class=\"truncated-text-line\">{{ action.pageTitle|rawSafeDecoded }}</span>
        {% endif %}
        {% if action.siteSearchKeyword is defined %}
            {% if action.type == 'search' %}
                <img src='{{ action.iconSVG|default(action.icon) }}' title='{{ 'Actions_SubmenuSitesearch'|translate }}'
                     class=\"action-list-action-icon search\">
            {% endif %}
            <span class=\"truncated-text-line\">{{ action.siteSearchKeyword|rawSafeDecoded }}</span>
        {% endif %}
        {% if action.url is not empty %}
            {% if action.iconSVG|default(action.icon) is not empty %}
                <img src='{{ action.iconSVG|default(action.icon) }}' class=\"action-list-action-icon {{ action.type }}\">
            {% endif %}
            {% if action.type == 'action' and action.pageTitle|default(false) is not empty %}<p>{% endif %}
            {% if action.url|trim|lower starts with 'javascript:' or
            action.url|trim|lower starts with 'vbscript:' or
            action.url|trim|lower starts with 'data:' %}
                {{ action.url }}
            {% else %}
                <a href=\"{{ action.url|safelink|e('html_attr') }}\" rel=\"noreferrer noopener\" target=\"_blank\"
                   class=\"action-list-url truncated-text-line\">
                    {% if not additionalUrls|length %}
                        {# remove main url from urls if site has no additional urls defined #}
                        {{ action.url|replace({(mainUrl~'/'): '/', 'http://': '', 'https://': ''}) }}
                    {% else %}
                        {{ action.url|replace({'http://': '', 'https://': ''}) }}
                    {% endif %}
                </a>
            {% endif %}
            {% if action.type == 'action' and action.pageTitle|default(false) is not empty %}</p>{% endif %}
        {% elseif action.type != 'search' %}
            <p>
                <span>{{ 'General_NotDefined'|translate('Actions_ColumnPageURL'|translate) }}</span>
            </p>
        {% endif %}
    </div>
</li>
", "@Live/_actionCommon.twig", "/var/www/zinecat.org/matomo/plugins/Live/templates/_actionCommon.twig");
    }
}
