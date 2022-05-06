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

/* @CoreAdminHome/home.twig */
class __TwigTemplate_0563ccefef0ccda5ccaad91f72b4149451368f8cf09664f6057d716c2531e4de extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_MenuGeneralSettings"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@CoreAdminHome/home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        <div piwik-content-block content-title=\"Need help?\">
            <div>
                There are different ways you can get help. There is free support via the Matomo Community and paid support
                provided by the Matomo team and partners of Matomo. Or maybe do you have a bug to report or want to suggest a new
                feature?
                <br />
                <br />
                <a href=\"";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "Feedback", "action" => "index"]]), "html", null, true);
        echo "\">Learn more</a>
            </div>
        </div>
    ";
        $context["feedbackHelp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        echo "
    ";
        // line 19
        if (($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser"))) {
            // line 20
            echo "        <div class=\"row\">
            ";
            // line 21
            if ((($context["hasQuickLinks"] ?? $this->getContext($context, "hasQuickLinks")) || ($context["hasSystemSummary"] ?? $this->getContext($context, "hasSystemSummary")))) {
                // line 22
                echo "                <div class=\"col s12 ";
                if (($context["isFeedbackEnabled"] ?? $this->getContext($context, "isFeedbackEnabled"))) {
                    echo "m4";
                } else {
                    echo "m6";
                }
                echo "\">
                    ";
                // line 23
                if (($context["hasQuickLinks"] ?? $this->getContext($context, "hasQuickLinks"))) {
                    echo "<div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"quickLinks\"}'></div>";
                }
                // line 24
                echo "                    ";
                if (($context["hasSystemSummary"] ?? $this->getContext($context, "hasSystemSummary"))) {
                    echo "<div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getSystemSummary\"}'></div>";
                }
                // line 25
                echo "                </div>
            ";
            }
            // line 27
            echo "            ";
            if ((($context["hasDiagnostics"] ?? $this->getContext($context, "hasDiagnostics")) || ($context["hasTrackingFailures"] ?? $this->getContext($context, "hasTrackingFailures")))) {
                // line 28
                echo "                <div class=\"col s12 ";
                if (($context["isFeedbackEnabled"] ?? $this->getContext($context, "isFeedbackEnabled"))) {
                    echo "m4";
                } else {
                    echo "m6";
                }
                echo "\">
                    ";
                // line 29
                if (($context["hasDiagnostics"] ?? $this->getContext($context, "hasDiagnostics"))) {
                    // line 30
                    echo "                    <div piwik-widget-loader='{\"module\":\"Installation\",\"action\":\"getSystemCheck\"}'></div>
                    ";
                }
                // line 32
                echo "                    ";
                if (($context["hasTrackingFailures"] ?? $this->getContext($context, "hasTrackingFailures"))) {
                    // line 33
                    echo "                    <div piwik-widget-loader='{\"module\":\"CoreAdminHome\",\"action\":\"getTrackingFailures\"}'></div>
                    ";
                }
                // line 35
                echo "                </div>
            ";
            }
            // line 37
            echo "            <div class=\"col s12 m4\">
            ";
            // line 38
            if (($context["isFeedbackEnabled"] ?? $this->getContext($context, "isFeedbackEnabled"))) {
                // line 39
                echo "                ";
                echo ($context["feedbackHelp"] ?? $this->getContext($context, "feedbackHelp"));
                echo "
            ";
            }
            // line 41
            echo "            </div>
        </div>
    ";
        } elseif (        // line 43
($context["isFeedbackEnabled"] ?? $this->getContext($context, "isFeedbackEnabled"))) {
            // line 44
            echo "        ";
            echo ($context["feedbackHelp"] ?? $this->getContext($context, "feedbackHelp"));
            echo "
    ";
        }
        // line 46
        echo "
    ";
        // line 47
        if (((($context["hasPremiumFeatures"] ?? $this->getContext($context, "hasPremiumFeatures")) && ($context["isMarketplaceEnabled"] ?? $this->getContext($context, "isMarketplaceEnabled"))) && ($context["isInternetEnabled"] ?? $this->getContext($context, "isInternetEnabled")))) {
            // line 48
            echo "        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getPremiumFeatures\"}'></div>
    ";
        }
        // line 50
        echo "    ";
        if (((($context["hasNewPlugins"] ?? $this->getContext($context, "hasNewPlugins")) && ($context["isMarketplaceEnabled"] ?? $this->getContext($context, "isMarketplaceEnabled"))) && ($context["isInternetEnabled"] ?? $this->getContext($context, "isInternetEnabled")))) {
            // line 51
            echo "        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getNewPlugins\", \"isAdminPage\": \"1\"}'></div>
    ";
        }
        // line 53
        echo "
    ";
        // line 54
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.adminHome"]);
        echo "

    <style type=\"text/css\">
        #content .piwik-donate-call {
            padding: 0;
            border: 0;
            max-width: none;
        }
        .theWidgetContent .rss {
            margin: -10px -15px;
        }
    </style>

    ";
        // line 67
        if ((($context["hasDonateForm"] ?? $this->getContext($context, "hasDonateForm")) || ($context["hasPiwikBlog"] ?? $this->getContext($context, "hasPiwikBlog")))) {
            // line 68
            echo "        <div class=\"row\">
            ";
            // line 69
            if (($context["hasDonateForm"] ?? $this->getContext($context, "hasDonateForm"))) {
                // line 70
                echo "                <div class=\"col s12 ";
                if (($context["hasPiwikBlog"] ?? $this->getContext($context, "hasPiwikBlog"))) {
                    echo "m6";
                }
                echo "\">
                    <div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getDonateForm\",\"widget\": \"0\"}'></div>
                </div>
            ";
            }
            // line 74
            echo "            ";
            if ((($context["hasPiwikBlog"] ?? $this->getContext($context, "hasPiwikBlog")) && ($context["isInternetEnabled"] ?? $this->getContext($context, "isInternetEnabled")))) {
                // line 75
                echo "                <div class=\"col s12 ";
                if (($context["hasDonateForm"] ?? $this->getContext($context, "hasDonateForm"))) {
                    echo "m6";
                }
                echo "\">
                    <div piwik-widget-loader='{\"module\":\"RssWidget\",\"action\":\"rssPiwik\"}'></div>
                </div>
            ";
            }
            // line 79
            echo "        </div>
    ";
        }
        // line 81
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 81,  215 => 79,  205 => 75,  202 => 74,  192 => 70,  190 => 69,  187 => 68,  185 => 67,  169 => 54,  166 => 53,  162 => 51,  159 => 50,  155 => 48,  153 => 47,  150 => 46,  144 => 44,  142 => 43,  138 => 41,  132 => 39,  130 => 38,  127 => 37,  123 => 35,  119 => 33,  116 => 32,  112 => 30,  110 => 29,  101 => 28,  98 => 27,  94 => 25,  89 => 24,  85 => 23,  76 => 22,  74 => 21,  71 => 20,  69 => 19,  66 => 18,  59 => 14,  50 => 7,  47 => 6,  44 => 5,  39 => 1,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'CoreAdminHome_MenuGeneralSettings'|translate }}{% endset %}

{% block content %}
    {% set feedbackHelp %}
        <div piwik-content-block content-title=\"Need help?\">
            <div>
                There are different ways you can get help. There is free support via the Matomo Community and paid support
                provided by the Matomo team and partners of Matomo. Or maybe do you have a bug to report or want to suggest a new
                feature?
                <br />
                <br />
                <a href=\"{{ linkTo({'module': 'Feedback', 'action': 'index'}) }}\">Learn more</a>
            </div>
        </div>
    {% endset %}

    {% if isSuperUser %}
        <div class=\"row\">
            {% if hasQuickLinks or hasSystemSummary %}
                <div class=\"col s12 {% if isFeedbackEnabled %}m4{% else %}m6{% endif %}\">
                    {% if hasQuickLinks %}<div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"quickLinks\"}'></div>{% endif %}
                    {% if hasSystemSummary %}<div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getSystemSummary\"}'></div>{% endif %}
                </div>
            {% endif %}
            {% if hasDiagnostics or hasTrackingFailures %}
                <div class=\"col s12 {% if isFeedbackEnabled %}m4{% else %}m6{% endif %}\">
                    {% if hasDiagnostics %}
                    <div piwik-widget-loader='{\"module\":\"Installation\",\"action\":\"getSystemCheck\"}'></div>
                    {% endif %}
                    {% if hasTrackingFailures %}
                    <div piwik-widget-loader='{\"module\":\"CoreAdminHome\",\"action\":\"getTrackingFailures\"}'></div>
                    {% endif %}
                </div>
            {% endif %}
            <div class=\"col s12 m4\">
            {% if isFeedbackEnabled %}
                {{ feedbackHelp|raw }}
            {% endif %}
            </div>
        </div>
    {% elseif isFeedbackEnabled %}
        {{ feedbackHelp|raw }}
    {% endif %}

    {% if hasPremiumFeatures and isMarketplaceEnabled and isInternetEnabled %}
        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getPremiumFeatures\"}'></div>
    {% endif %}
    {% if hasNewPlugins and isMarketplaceEnabled and isInternetEnabled %}
        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getNewPlugins\", \"isAdminPage\": \"1\"}'></div>
    {% endif %}

    {{ postEvent('Template.adminHome') }}

    <style type=\"text/css\">
        #content .piwik-donate-call {
            padding: 0;
            border: 0;
            max-width: none;
        }
        .theWidgetContent .rss {
            margin: -10px -15px;
        }
    </style>

    {% if hasDonateForm or hasPiwikBlog %}
        <div class=\"row\">
            {% if hasDonateForm %}
                <div class=\"col s12 {% if hasPiwikBlog %}m6{% endif %}\">
                    <div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getDonateForm\",\"widget\": \"0\"}'></div>
                </div>
            {% endif %}
            {% if hasPiwikBlog and isInternetEnabled %}
                <div class=\"col s12 {% if hasDonateForm %}m6{% endif %}\">
                    <div piwik-widget-loader='{\"module\":\"RssWidget\",\"action\":\"rssPiwik\"}'></div>
                </div>
            {% endif %}
        </div>
    {% endif %}

{% endblock %}
", "@CoreAdminHome/home.twig", "/var/www/zinecat.org/matomo/plugins/CoreAdminHome/templates/home.twig");
    }
}
