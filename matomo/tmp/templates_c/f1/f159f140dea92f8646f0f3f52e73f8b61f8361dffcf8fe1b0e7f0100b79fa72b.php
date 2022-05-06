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

/* @CoreVisualizations/_dataTableViz_htmlTable_ratio.twig */
class __TwigTemplate_a71d0545dc34ddbc970213ed64471abed25799ccd2b2cf24e847fb8816bff511 extends \Twig\Template
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
        if ((twig_in_filter(($context["column"] ?? $this->getContext($context, "column")), $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "report_ratio_columns", [])) && (twig_in_filter(($context["column"] ?? $this->getContext($context, "column")), twig_get_array_keys_filter(($context["totals"] ?? $this->getContext($context, "totals")))) || (((isset($context["forceZero"]) || array_key_exists("forceZero", $context))) ? (_twig_default_filter(($context["forceZero"] ?? $this->getContext($context, "forceZero")))) : (""))))) {
            // line 2
            $context["reportTotal"] = (($this->getAttribute(($context["totals"] ?? null), ($context["column"] ?? $this->getContext($context, "column")), [], "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["totals"] ?? null), ($context["column"] ?? $this->getContext($context, "column")), [], "array"), 0)) : (0));
            // line 3
            echo "
    ";
            // line 4
            if (((isset($context["siteTotalRow"]) || array_key_exists("siteTotalRow", $context)) &&  !twig_test_empty(($context["siteTotalRow"] ?? $this->getContext($context, "siteTotalRow"))))) {
                // line 5
                echo "        ";
                $context["siteTotal"] = $this->getAttribute(($context["siteTotalRow"] ?? $this->getContext($context, "siteTotalRow")), "getColumn", [0 => ($context["column"] ?? $this->getContext($context, "column"))], "method");
                // line 6
                echo "    ";
            } else {
                // line 7
                echo "        ";
                $context["siteTotal"] = 0;
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    ";
            // line 10
            if (twig_test_empty((((isset($context["rowPercentage"]) || array_key_exists("rowPercentage", $context))) ? (_twig_default_filter(($context["rowPercentage"] ?? $this->getContext($context, "rowPercentage")))) : ("")))) {
                // line 11
                echo "        ";
                if (($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => (($context["column"] ?? $this->getContext($context, "column")) . "_row_percentage")], "method") != false)) {
                    // line 12
                    echo "            ";
                    $context["rowPercentage"] = $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => (($context["column"] ?? $this->getContext($context, "column")) . "_row_percentage")], "method");
                    // line 13
                    echo "        ";
                } elseif ((call_user_func_array($this->env->getTest('numeric')->getCallable(), [(($this->getAttribute(($context["row"] ?? null), "getColumn", [0 => ($context["column"] ?? $this->getContext($context, "column"))], "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["row"] ?? null), "getColumn", [0 => ($context["column"] ?? $this->getContext($context, "column"))], "method"), 0)) : (0))]) && call_user_func_array($this->env->getTest('numeric')->getCallable(), [($context["reportTotal"] ?? $this->getContext($context, "reportTotal"))]))) {
                    // line 14
                    echo "            ";
                    $context["rowPercentage"] = call_user_func_array($this->env->getFilter('percentage')->getCallable(), [$this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", [0 => ($context["column"] ?? $this->getContext($context, "column"))], "method"), ($context["reportTotal"] ?? $this->getContext($context, "reportTotal")), 1]);
                    // line 15
                    echo "        ";
                } else {
                    // line 16
                    echo "            ";
                    $context["rowPercentage"] = "";
                    echo " ";
                    // line 17
                    echo "        ";
                }
                // line 18
                echo "    ";
            }
            // line 19
            echo "
    ";
            // line 20
            $context["metricTitle"] = (($this->getAttribute(($context["translations"] ?? null), ($context["column"] ?? $this->getContext($context, "column")), [], "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["translations"] ?? null), ($context["column"] ?? $this->getContext($context, "column")), [], "array"), ($context["column"] ?? $this->getContext($context, "column")))) : (($context["column"] ?? $this->getContext($context, "column"))));
            // line 21
            echo "
    ";
            // line 22
            $context["reportRatioTooltip"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ReportRatioTooltip", ($context["label"] ?? $this->getContext($context, "label")), \Piwik\piwik_escape_filter($this->env, ($context["rowPercentage"] ?? $this->getContext($context, "rowPercentage")), "html_attr"), \Piwik\piwik_escape_filter($this->env, ($context["reportTotal"] ?? $this->getContext($context, "reportTotal")), "html_attr"), \Piwik\piwik_escape_filter($this->env, ($context["metricTitle"] ?? $this->getContext($context, "metricTitle")), "html_attr"), (("\"" . ($context["segmentTitlePretty"] ?? $this->getContext($context, "segmentTitlePretty"))) . "\""), \Piwik\piwik_escape_filter($this->env, (($this->getAttribute(($context["translations"] ?? null), ($context["labelColumn"] ?? $this->getContext($context, "labelColumn")), [], "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["translations"] ?? null), ($context["labelColumn"] ?? $this->getContext($context, "labelColumn")), [], "array"), ($context["labelColumn"] ?? $this->getContext($context, "labelColumn")))) : (($context["labelColumn"] ?? $this->getContext($context, "labelColumn")))), "html_attr")]);
            // line 23
            echo "
    ";
            // line 24
            if (twig_test_empty((((isset($context["totalPercentage"]) || array_key_exists("totalPercentage", $context))) ? (_twig_default_filter(($context["totalPercentage"] ?? $this->getContext($context, "totalPercentage")))) : ("")))) {
                // line 25
                echo "        ";
                if (($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => (($context["column"] ?? $this->getContext($context, "column")) . "_site_total_percentage")], "method") != false)) {
                    // line 26
                    echo "            ";
                    $context["totalPercentage"] = $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => (($context["column"] ?? $this->getContext($context, "column")) . "_site_total_percentage")], "method");
                    // line 27
                    echo "        ";
                } elseif ((call_user_func_array($this->env->getTest('numeric')->getCallable(), [(($this->getAttribute(($context["row"] ?? null), "getColumn", [0 => ($context["column"] ?? $this->getContext($context, "column"))], "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["row"] ?? null), "getColumn", [0 => ($context["column"] ?? $this->getContext($context, "column"))], "method"), 0)) : (0))]) && call_user_func_array($this->env->getTest('numeric')->getCallable(), [($context["siteTotal"] ?? $this->getContext($context, "siteTotal"))]))) {
                    // line 28
                    echo "            ";
                    $context["totalPercentage"] = call_user_func_array($this->env->getFilter('percentage')->getCallable(), [$this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", [0 => ($context["column"] ?? $this->getContext($context, "column"))], "method"), ($context["siteTotal"] ?? $this->getContext($context, "siteTotal")), 1]);
                    // line 29
                    echo "        ";
                }
                // line 30
                echo "    ";
            }
            // line 31
            echo "
    ";
            // line 32
            if ( !twig_test_empty((((isset($context["totalPercentage"]) || array_key_exists("totalPercentage", $context))) ? (_twig_default_filter(($context["totalPercentage"] ?? $this->getContext($context, "totalPercentage")))) : ("")))) {
                // line 33
                echo "        ";
                $context["totalRatioTooltip"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_TotalRatioTooltip", ($context["totalPercentage"] ?? $this->getContext($context, "totalPercentage")), call_user_func_array($this->env->getFilter('number')->getCallable(), [($context["siteTotal"] ?? $this->getContext($context, "siteTotal")), 2, 0]), ($context["metricTitle"] ?? $this->getContext($context, "metricTitle")), ($context["periodTitlePretty"] ?? $this->getContext($context, "periodTitlePretty"))]);
                // line 34
                echo "    ";
            } else {
                // line 35
                echo "        ";
                $context["totalRatioTooltip"] = "";
                // line 36
                echo "    ";
            }
            // line 37
            echo "
    <span class=\"ratio\"
          title=\"";
            // line 39
            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [($context["reportRatioTooltip"] ?? $this->getContext($context, "reportRatioTooltip"))]);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [($context["totalRatioTooltip"] ?? $this->getContext($context, "totalRatioTooltip"))]), "html_attr");
            if ( !twig_test_empty((((isset($context["tooltipSuffix"]) || array_key_exists("tooltipSuffix", $context))) ? (_twig_default_filter(($context["tooltipSuffix"] ?? $this->getContext($context, "tooltipSuffix")))) : ("")))) {
                echo "<br/><br/> ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [($context["tooltipSuffix"] ?? $this->getContext($context, "tooltipSuffix"))]), "html_attr");
            }
            echo "\"
    >&nbsp;";
            // line 40
            echo \Piwik\piwik_escape_filter($this->env, ($context["rowPercentage"] ?? $this->getContext($context, "rowPercentage")), "html", null, true);
            echo " ";
            if ( !twig_test_empty((((isset($context["changePercentage"]) || array_key_exists("changePercentage", $context))) ? (_twig_default_filter(($context["changePercentage"] ?? $this->getContext($context, "changePercentage")))) : ("")))) {
                echo "(";
                echo \Piwik\piwik_escape_filter($this->env, ($context["changePercentage"] ?? $this->getContext($context, "changePercentage")), "html", null, true);
                echo ")";
            }
            echo "</span>";
        }
    }

    public function getTemplateName()
    {
        return "@CoreVisualizations/_dataTableViz_htmlTable_ratio.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 40,  135 => 39,  131 => 37,  128 => 36,  125 => 35,  122 => 34,  119 => 33,  117 => 32,  114 => 31,  111 => 30,  108 => 29,  105 => 28,  102 => 27,  99 => 26,  96 => 25,  94 => 24,  91 => 23,  89 => 22,  86 => 21,  84 => 20,  81 => 19,  78 => 18,  75 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  54 => 10,  51 => 9,  48 => 8,  45 => 7,  42 => 6,  39 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if column in properties.report_ratio_columns and (column in totals|keys or forceZero|default) -%}
    {% set reportTotal   = totals[column]|default(0) %}

    {% if siteTotalRow is defined and siteTotalRow is not empty %}
        {% set siteTotal = siteTotalRow.getColumn(column) %}
    {% else %}
        {% set siteTotal = 0 %}
    {% endif %}

    {% if rowPercentage|default is empty %}
        {% if row.getMetadata(column ~ '_row_percentage') != false %}
            {% set rowPercentage = row.getMetadata(column ~ '_row_percentage') %}
        {% elseif row.getColumn(column)|default(0) is numeric and reportTotal is numeric %}
            {% set rowPercentage = row.getColumn(column)|percentage(reportTotal, 1) %}
        {% else %}
            {% set rowPercentage = '' %} {# should not happen #}
        {% endif %}
    {% endif %}

    {% set metricTitle   = translations[column]|default(column) %}

    {% set reportRatioTooltip = 'General_ReportRatioTooltip'|translate(label, rowPercentage|e('html_attr'), reportTotal|e('html_attr'), metricTitle|e('html_attr'), '\"' ~ segmentTitlePretty ~ '\"', translations[labelColumn]|default(labelColumn)|e('html_attr')) %}

    {% if totalPercentage|default is empty %}
        {% if row.getMetadata(column ~ '_site_total_percentage') != false %}
            {% set totalPercentage = row.getMetadata(column ~ '_site_total_percentage') %}
        {% elseif row.getColumn(column)|default(0) is numeric and siteTotal is numeric %}
            {% set totalPercentage = row.getColumn(column)|percentage(siteTotal, 1) %}
        {% endif %}
    {% endif %}

    {% if totalPercentage|default is not empty %}
        {% set totalRatioTooltip = 'General_TotalRatioTooltip'|translate(totalPercentage, siteTotal|number(2,0), metricTitle, periodTitlePretty) %}
    {% else %}
        {% set totalRatioTooltip = '' %}
    {% endif %}

    <span class=\"ratio\"
          title=\"{{ reportRatioTooltip|rawSafeDecoded|raw }} {{ totalRatioTooltip|rawSafeDecoded|e('html_attr') }}{% if tooltipSuffix|default is not empty %}<br/><br/> {{ tooltipSuffix|rawSafeDecoded|e('html_attr') }}{% endif %}\"
    >&nbsp;{{ rowPercentage }} {% if changePercentage|default is not empty %}({{ changePercentage }}){% endif %}</span>
{%- endif %}
", "@CoreVisualizations/_dataTableViz_htmlTable_ratio.twig", "/var/www/zinecat.org/matomo/plugins/CoreVisualizations/templates/_dataTableViz_htmlTable_ratio.twig");
    }
}
