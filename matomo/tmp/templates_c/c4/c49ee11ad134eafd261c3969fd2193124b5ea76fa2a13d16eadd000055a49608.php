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

/* @CoreHome/_dataTableCell.twig */
class __TwigTemplate_fb35a2e3bc9d7125bebc00b0788f670ecaaa27840ae73a7f1209984ea060b227 extends \Twig\Template
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
        ob_start();
        // line 2
        $context["tooltipIndex"] = (($context["column"] ?? $this->getContext($context, "column")) . "_tooltip");
        // line 3
        if ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => ($context["tooltipIndex"] ?? $this->getContext($context, "tooltipIndex"))], "method")) {
            echo "<span class=\"cell-tooltip\" data-tooltip=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => ($context["tooltipIndex"] ?? $this->getContext($context, "tooltipIndex"))], "method"), "html", null, true);
            echo "\">";
        }
        // line 4
        if ((( !$this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getIdSubDataTable", [], "method") && (($context["column"] ?? $this->getContext($context, "column")) == "label")) && $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "url"], "method"))) {
            // line 5
            echo "    <a rel=\"noreferrer noopener\"
       target=\"_blank\"
       href='";
            // line 7
            if (!twig_in_filter(twig_slice($this->env, $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "url"], "method"), 0, 4), [0 => "http", 1 => "ftp:"])) {
                echo "http://";
            }
            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "url"], "method")]);
            echo "'>
    ";
            // line 8
            if ( !$this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "logo"], "method")) {
                // line 9
                echo "        <img class=\"link\" width=\"10\" height=\"9\"
             src=\"plugins/Morpheus/images/link.png\"/>
    ";
            }
        }
        // line 13
        echo "
";
        // line 14
        $context["totals"] = $this->getAttribute(($context["dataTable"] ?? $this->getContext($context, "dataTable")), "getMetadata", [0 => "totals"], "method");
        // line 15
        $context["labelColumn"] = twig_first($this->env, ($context["columns_to_display"] ?? $this->getContext($context, "columns_to_display")));
        // line 16
        $context["reportLabel"] = call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [call_user_func_array($this->env->getFilter('truncate')->getCallable(), [$this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", [0 => ($context["labelColumn"] ?? $this->getContext($context, "labelColumn"))], "method"), 40])]);
        // line 17
        $this->loadTemplate("@CoreVisualizations/_dataTableViz_htmlTable_ratio.twig", "@CoreHome/_dataTableCell.twig", 17)->display(twig_array_merge($context, ["label" =>         // line 18
($context["reportLabel"] ?? $this->getContext($context, "reportLabel")), "labelColumn" =>         // line 19
($context["labelColumn"] ?? $this->getContext($context, "labelColumn")), "translations" => $this->getAttribute(        // line 20
($context["properties"] ?? $this->getContext($context, "properties")), "translations", [])]));
        // line 22
        echo "
";
        // line 23
        $context["dimensions"] = (($this->getAttribute(($context["dataTable"] ?? null), "getMetadata", [0 => "dimensions"], "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["dataTable"] ?? null), "getMetadata", [0 => "dimensions"], "method"), [])) : ([]));
        // line 24
        if (((($context["column"] ?? $this->getContext($context, "column")) == "label") || twig_in_filter(($context["column"] ?? $this->getContext($context, "column")), ($context["dimensions"] ?? $this->getContext($context, "dimensions"))))) {
            // line 25
            echo "    ";
            $context["piwik"] = $this->loadTemplate("macros.twig", "@CoreHome/_dataTableCell.twig", 25)->unwrap();
            // line 26
            echo "
    <span class='label";
            // line 27
            if ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "is_aggregate"], "method")) {
                echo " highlighted";
            }
            echo "'
    ";
            // line 28
            if (((isset($context["properties"]) || array_key_exists("properties", $context)) &&  !twig_test_empty($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "tooltip_metadata_name", [])))) {
                echo "title=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "tooltip_metadata_name", [])], "method"), "html", null, true);
                echo "\"";
            }
            echo ">
        ";
            // line 29
            if ((($context["column"] ?? $this->getContext($context, "column")) == "label")) {
                echo $context["piwik"]->getlogoHtml($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [], "method"), $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", [0 => "label"], "method"));
            }
            // line 30
            echo "        ";
            if ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "html_label_prefix"], "method")) {
                echo "<span class='label-prefix'>";
                echo $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "html_label_prefix"], "method");
                echo "&nbsp;</span>";
            }
        }
        // line 31
        echo "<span class=\"value\">";
        // line 32
        if (($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", [0 => ($context["column"] ?? $this->getContext($context, "column"))], "method") || ((($context["column"] ?? $this->getContext($context, "column")) == "label") && ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", [0 => ($context["column"] ?? $this->getContext($context, "column"))], "method") === "0")))) {
            if ((($context["column"] ?? $this->getContext($context, "column")) == "label")) {
                echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", [0 => ($context["column"] ?? $this->getContext($context, "column"))], "method")]);
            } else {
                if ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => (("html_column_" . ($context["column"] ?? $this->getContext($context, "column"))) . "_prefix")], "method")) {
                    echo "<span class='column-prefix'>";
                    echo $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => (("html_column_" . ($context["column"] ?? $this->getContext($context, "column"))) . "_prefix")], "method");
                    echo "</span>";
                }
                echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [call_user_func_array($this->env->getFilter('number')->getCallable(), [$this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getColumn", [0 => ($context["column"] ?? $this->getContext($context, "column"))], "method"), 2, 0])]);
                if ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => (("html_column_" . ($context["column"] ?? $this->getContext($context, "column"))) . "_suffix")], "method")) {
                    echo "<span class='column-suffix'>";
                    echo $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => (("html_column_" . ($context["column"] ?? $this->getContext($context, "column"))) . "_suffix")], "method");
                    echo "</span>";
                }
            }
        } else {
            // line 33
            echo "-";
        }
        // line 34
        echo "</span>
";
        // line 35
        if ((($context["column"] ?? $this->getContext($context, "column")) == "label")) {
            if ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "html_label_suffix"], "method")) {
                echo "<span class='label-suffix'>";
                echo $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "html_label_suffix"], "method");
                echo "</span>";
            }
            echo "</span>";
        }
        // line 36
        if ((( !$this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getIdSubDataTable", [], "method") && (($context["column"] ?? $this->getContext($context, "column")) == "label")) && $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "url"], "method"))) {
            // line 37
            echo "    </a>
";
        }
        // line 39
        if ($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => ($context["tooltipIndex"] ?? $this->getContext($context, "tooltipIndex"))], "method")) {
            echo "</span>";
        }
        // line 40
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableCell.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 40,  155 => 39,  151 => 37,  149 => 36,  140 => 35,  137 => 34,  134 => 33,  116 => 32,  114 => 31,  106 => 30,  102 => 29,  94 => 28,  88 => 27,  85 => 26,  82 => 25,  80 => 24,  78 => 23,  75 => 22,  73 => 20,  72 => 19,  71 => 18,  70 => 17,  68 => 16,  66 => 15,  64 => 14,  61 => 13,  55 => 9,  53 => 8,  46 => 7,  42 => 5,  40 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% spaceless %}
{% set tooltipIndex = column ~ '_tooltip' %}
{% if row.getMetadata(tooltipIndex) %}<span class=\"cell-tooltip\" data-tooltip=\"{{ row.getMetadata(tooltipIndex) }}\">{% endif %}
{% if not row.getIdSubDataTable() and column=='label' and row.getMetadata('url') %}
    <a rel=\"noreferrer noopener\"
       target=\"_blank\"
       href='{% if row.getMetadata('url')|slice(0,4) not in ['http','ftp:'] %}http://{% endif %}{{ row.getMetadata('url')|rawSafeDecoded }}'>
    {% if not row.getMetadata('logo') %}
        <img class=\"link\" width=\"10\" height=\"9\"
             src=\"plugins/Morpheus/images/link.png\"/>
    {% endif %}
{% endif %}

{% set totals = dataTable.getMetadata('totals') %}
{% set labelColumn   = columns_to_display|first %}
{% set reportLabel   = row.getColumn(labelColumn)|truncate(40)|rawSafeDecoded %}
{% include \"@CoreVisualizations/_dataTableViz_htmlTable_ratio.twig\" with {
    'label': reportLabel,
    'labelColumn': labelColumn,
    'translations': properties.translations
} %}

{% set dimensions = dataTable.getMetadata('dimensions')|default([]) %}
{% if column=='label' or column in dimensions %}
    {% import 'macros.twig' as piwik %}

    <span class='label{% if row.getMetadata('is_aggregate') %} highlighted{% endif %}'
    {% if properties is defined and properties.tooltip_metadata_name is not empty %}title=\"{{ row.getMetadata(properties.tooltip_metadata_name) }}\"{% endif %}>
        {% if column=='label' %}{{ piwik.logoHtml(row.getMetadata(), row.getColumn('label')) }}{% endif %}
        {% if row.getMetadata('html_label_prefix') %}<span class='label-prefix'>{{ row.getMetadata('html_label_prefix') | raw }}&nbsp;</span>{% endif -%}
{% endif %}<span class=\"value\">
    {%- if row.getColumn(column) or (column=='label' and row.getColumn(column) is same as(\"0\")) %}{% if column=='label' %}{{- row.getColumn(column)|rawSafeDecoded -}}{% else %}{% if row.getMetadata('html_column_' ~ column ~ '_prefix') %}<span class='column-prefix'>{{ row.getMetadata('html_column_' ~ column ~ '_prefix') | raw }}</span>{% endif -%}{{- row.getColumn(column)|number(2,0)|rawSafeDecoded -}}{% if row.getMetadata('html_column_' ~ column ~ '_suffix') %}<span class='column-suffix'>{{ row.getMetadata('html_column_' ~ column ~ '_suffix') | raw }}</span>{% endif -%}{% endif %}
    {%- else -%}-
    {%- endif -%}</span>
{% if column=='label' %}{%- if row.getMetadata('html_label_suffix') %}<span class='label-suffix'>{{ row.getMetadata('html_label_suffix') | raw }}</span>{% endif -%}</span>{% endif %}
{% if not row.getIdSubDataTable() and column=='label' and row.getMetadata('url') %}
    </a>
{% endif %}
{% if row.getMetadata(tooltipIndex) %}</span>{% endif %}

{% endspaceless %}
", "@CoreHome/_dataTableCell.twig", "/var/www/zinecat.org/matomo/plugins/CoreHome/templates/_dataTableCell.twig");
    }
}
