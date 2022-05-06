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

/* @Referrers/_visitorDetails.twig */
class __TwigTemplate_f27a696fd2136efa8910ecf7ff77bcf238195c8f9ffa6f744df028c3571dcb50 extends \Twig\Template
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
        echo "<div class=\"visitorReferrer ";
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerType"], "method"), "html", null, true);
        echo "\">
    ";
        // line 2
        if (($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerType"], "method") == "website")) {
            // line 3
            echo "        <span>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Referrers_ColumnWebsite"]), "html", null, true);
            echo ":</span>
        <a href=\"";
            // line 4
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('safelink')->getCallable(), [$this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerUrl"], "method")]), "html_attr");
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" class=\"visitorLogTooltip\" title=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerUrl"], "method"), "html", null, true);
            echo "\"
           style=\"text-decoration:underline;\">
            ";
            // line 6
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerName"], "method"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 9
        echo "    ";
        if (($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerType"], "method") == "campaign")) {
            // line 10
            echo "        <span>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Referrers_ColumnCampaign"]), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerName"], "method"), "html", null, true);
            echo "
            ";
            // line 11
            if ( !twig_test_empty($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerKeyword"], "method"))) {
                echo " - ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerKeyword"], "method"), "html", null, true);
            }
            echo "</span>
    ";
        }
        // line 13
        echo "    ";
        if (($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerType"], "method") == "social")) {
            // line 14
            echo "        <span>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Referrers_ColumnSocial"]), "html", null, true);
            echo ":</span>
        ";
            // line 15
            if ($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerSearchEngineIcon"], "method")) {
                // line 16
                echo "            <img width=\"16\" src=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerSocialNetworkIcon"], "method"), "html", null, true);
                echo "\" alt=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerName"], "method"), "html", null, true);
                echo "\"/>
        ";
            }
            // line 18
            echo "        <a href=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('safelink')->getCallable(), [$this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerUrl"], "method")]), "html_attr");
            echo "\" rel=\"noreferrer\" target=\"_blank\" class=\"visitorLogTooltip\" title=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerUrl"], "method"), "html", null, true);
            echo "\"
           style=\"text-decoration:underline;\">
            ";
            // line 20
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerName"], "method"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 23
        echo "    ";
        if (($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerType"], "method") == "search")) {
            // line 24
            $context["keywordNotDefined"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_NotDefined", call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ColumnKeyword"])]);
            // line 25
            $context["showKeyword"] = ( !twig_test_empty($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerKeyword"], "method")) && ($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerKeyword"], "method") != ($context["keywordNotDefined"] ?? $this->getContext($context, "keywordNotDefined"))));
            // line 26
            echo "<span ";
            if ( !($context["showKeyword"] ?? $this->getContext($context, "showKeyword"))) {
                echo "title=\"";
                echo \Piwik\piwik_escape_filter($this->env, ($context["keywordNotDefined"] ?? $this->getContext($context, "keywordNotDefined")), "html", null, true);
                echo "\"";
            }
            echo ">
        ";
            // line 27
            if ($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerSearchEngineIcon"], "method")) {
                // line 28
                echo "            <img width=\"16\" src=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerSearchEngineIcon"], "method"), "html", null, true);
                echo "\" alt=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerName"], "method"), "html", null, true);
                echo "\"/>
        ";
            }
            // line 30
            echo "            <span>";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerName"], "method"), "html", null, true);
            echo "</span>";
            // line 31
            if (($context["showKeyword"] ?? $this->getContext($context, "showKeyword"))) {
                echo "<span>, ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Referrers_Keywords"]), "html", null, true);
                echo ":</span>
            <a href=\"";
                // line 32
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('safelink')->getCallable(), [$this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerUrl"], "method")]), "html_attr");
                echo "\" rel=\"noreferrer noopener\" target=\"_blank\" style=\"text-decoration:underline;\">
                \"";
                // line 33
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerKeyword"], "method"), "html", null, true);
                echo "\"</a>
        ";
            }
            // line 35
            echo "        ";
            ob_start();
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerKeyword"], "method"), "html", null, true);
            $context["keyword"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 36
            echo "        ";
            ob_start();
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerName"], "method"), "html", null, true);
            $context["searchName"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 37
            echo "        ";
            ob_start();
            echo "#";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerKeywordPosition"], "method"), "html", null, true);
            $context["position"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 38
            echo "        ";
            if ($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerKeywordPosition"], "method")) {
                // line 39
                echo "            <span title='";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_KeywordRankedOnSearchResultForThisVisitor", ($context["keyword"] ?? $this->getContext($context, "keyword")), ($context["position"] ?? $this->getContext($context, "position")), ($context["searchName"] ?? $this->getContext($context, "searchName"))]), "html", null, true);
                echo "' class='visitorRank visitorLogTooltip'>
                            <span class='hash'>#</span>
                ";
                // line 41
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerKeywordPosition"], "method"), "html", null, true);
                echo "
                        </span>
        ";
            }
            // line 44
            echo "        </span>
    ";
        }
        // line 46
        echo "    ";
        if (($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", [0 => "referrerType"], "method") == "direct")) {
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Referrers_DirectEntry"]), "html", null, true);
        }
        // line 47
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@Referrers/_visitorDetails.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 47,  185 => 46,  181 => 44,  175 => 41,  169 => 39,  166 => 38,  160 => 37,  155 => 36,  150 => 35,  145 => 33,  141 => 32,  135 => 31,  131 => 30,  123 => 28,  121 => 27,  112 => 26,  110 => 25,  108 => 24,  105 => 23,  99 => 20,  91 => 18,  83 => 16,  81 => 15,  76 => 14,  73 => 13,  65 => 11,  58 => 10,  55 => 9,  49 => 6,  42 => 4,  37 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"visitorReferrer {{ visitInfo.getColumn('referrerType') }}\">
    {% if visitInfo.getColumn('referrerType') == 'website' %}
        <span>{{ 'Referrers_ColumnWebsite'|translate }}:</span>
        <a href=\"{{ visitInfo.getColumn('referrerUrl')|safelink|e('html_attr') }}\" rel=\"noreferrer noopener\" target=\"_blank\" class=\"visitorLogTooltip\" title=\"{{ visitInfo.getColumn('referrerUrl') }}\"
           style=\"text-decoration:underline;\">
            {{ visitInfo.getColumn('referrerName') }}
        </a>
    {% endif %}
    {% if visitInfo.getColumn('referrerType') == 'campaign' %}
        <span>{{ 'Referrers_ColumnCampaign'|translate }}: {{ visitInfo.getColumn('referrerName') }}
            {% if visitInfo.getColumn('referrerKeyword') is not empty %} - {{ visitInfo.getColumn('referrerKeyword') }}{% endif %}</span>
    {% endif %}
    {% if visitInfo.getColumn('referrerType') == 'social' %}
        <span>{{ 'Referrers_ColumnSocial'|translate }}:</span>
        {% if visitInfo.getColumn('referrerSearchEngineIcon') %}
            <img width=\"16\" src=\"{{ visitInfo.getColumn('referrerSocialNetworkIcon') }}\" alt=\"{{ visitInfo.getColumn('referrerName') }}\"/>
        {% endif %}
        <a href=\"{{ visitInfo.getColumn('referrerUrl')|safelink|e('html_attr') }}\" rel=\"noreferrer\" target=\"_blank\" class=\"visitorLogTooltip\" title=\"{{ visitInfo.getColumn('referrerUrl') }}\"
           style=\"text-decoration:underline;\">
            {{ visitInfo.getColumn('referrerName') }}
        </a>
    {% endif %}
    {% if visitInfo.getColumn('referrerType') == 'search' %}
        {%- set keywordNotDefined = 'General_NotDefined'|translate('General_ColumnKeyword'|translate) -%}
        {%- set showKeyword = visitInfo.getColumn('referrerKeyword') is not empty and visitInfo.getColumn('referrerKeyword') != keywordNotDefined -%}
        <span {% if not showKeyword %}title=\"{{ keywordNotDefined }}\"{% endif %}>
        {% if visitInfo.getColumn('referrerSearchEngineIcon') %}
            <img width=\"16\" src=\"{{ visitInfo.getColumn('referrerSearchEngineIcon') }}\" alt=\"{{ visitInfo.getColumn('referrerName') }}\"/>
        {% endif %}
            <span>{{ visitInfo.getColumn('referrerName') }}</span>
        {%- if showKeyword %}<span>, {{ 'Referrers_Keywords'|translate }}:</span>
            <a href=\"{{ visitInfo.getColumn('referrerUrl')|safelink|e('html_attr') }}\" rel=\"noreferrer noopener\" target=\"_blank\" style=\"text-decoration:underline;\">
                \"{{ visitInfo.getColumn('referrerKeyword') }}\"</a>
        {% endif %}
        {% set keyword %}{{ visitInfo.getColumn('referrerKeyword') }}{% endset %}
        {% set searchName %}{{ visitInfo.getColumn('referrerName') }}{% endset %}
        {% set position %}#{{ visitInfo.getColumn('referrerKeywordPosition') }}{% endset %}
        {% if visitInfo.getColumn('referrerKeywordPosition') %}
            <span title='{{ 'Live_KeywordRankedOnSearchResultForThisVisitor'|translate(keyword,position,searchName) }}' class='visitorRank visitorLogTooltip'>
                            <span class='hash'>#</span>
                {{ visitInfo.getColumn('referrerKeywordPosition') }}
                        </span>
        {% endif %}
        </span>
    {% endif %}
    {% if visitInfo.getColumn('referrerType') == 'direct' %}{{ 'Referrers_DirectEntry'|translate }}{% endif %}
</div>
", "@Referrers/_visitorDetails.twig", "/var/www/zinecat.org/matomo/plugins/Referrers/templates/_visitorDetails.twig");
    }
}
