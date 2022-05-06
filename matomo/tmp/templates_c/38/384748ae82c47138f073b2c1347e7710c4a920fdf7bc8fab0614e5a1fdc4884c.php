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

/* @CoreVisualizations/_dataTableViz_htmlTable.twig */
class __TwigTemplate_119c1c6cb8ba63a807d91f382ce6c4fb10950be5b53e5808707c2560578b9bd9 extends \Twig\Template
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
        $context["subtablesAreDisabled"] = ((($this->getAttribute(($context["properties"] ?? null), "show_goals_columns", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["properties"] ?? null), "show_goals_columns", []), false)) : (false)) && (($this->getAttribute(        // line 2
($context["properties"] ?? null), "disable_subtable_when_show_goals", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["properties"] ?? null), "disable_subtable_when_show_goals", []), false)) : (false)));
        // line 3
        $context["showingEmbeddedSubtable"] = ( !twig_test_empty($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_embedded_subtable", [])) && ((        // line 4
(isset($context["idSubtable"]) || array_key_exists("idSubtable", $context))) ? (_twig_default_filter(($context["idSubtable"] ?? $this->getContext($context, "idSubtable")), false)) : (false)));
        // line 5
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 6
            echo "    ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", []), "html", null, true);
            echo "
";
        } else {
            // line 8
            if ( !($context["showingEmbeddedSubtable"] ?? $this->getContext($context, "showingEmbeddedSubtable"))) {
                // line 9
                echo "<div class=\"dataTableScroller\">
    <table cellspacing=\"0\" class=\"dataTable\">
        ";
                // line 11
                $this->loadTemplate("@CoreHome/_dataTableHead.twig", "@CoreVisualizations/_dataTableViz_htmlTable.twig", 11)->display($context);
                // line 12
                echo "
        <tbody>";
            }
            // line 15
            if ((($context["showingEmbeddedSubtable"] ?? $this->getContext($context, "showingEmbeddedSubtable")) && ($this->getAttribute(($context["dataTable"] ?? $this->getContext($context, "dataTable")), "getRowsCount", [], "method") == 0))) {
                // line 16
                echo "            ";
                if ((( !(isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context)) ||  !$this->getAttribute(($context["clientSideParameters"] ?? null), "filter_pattern_recursive", [], "any", true, true)) ||  !$this->getAttribute(($context["clientSideParameters"] ?? $this->getContext($context, "clientSideParameters")), "filter_pattern_recursive", []))) {
                    // line 17
                    echo "                <tr class=\"nodata\">
                    <td colspan=\"";
                    // line 18
                    echo \Piwik\piwik_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "columns_to_display", [])), "html", null, true);
                    echo "\">";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_CategoryNoData"]), "html", null, true);
                    echo "</td>
                </tr>
            ";
                }
                // line 21
                echo "        ";
            } else {
                // line 22
                echo "            ";
                $context["rowIndex"] = ((($this->getAttribute(($context["properties"] ?? null), "filter_offset", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["properties"] ?? null), "filter_offset", []), 0)) : (0)) + 1);
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["dataTable"] ?? $this->getContext($context, "dataTable")), "getRows", [], "method"));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["rowId"] => $context["row"]) {
                    // line 24
                    $context["rowHasSubtable"] = (( !($context["subtablesAreDisabled"] ?? $this->getContext($context, "subtablesAreDisabled")) && $this->getAttribute($context["row"], "getIdSubDataTable", [], "method")) &&  !(null === $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "subtable_controller_action", [])));
                    // line 25
                    $context["rowSubtableId"] = (($this->getAttribute($context["row"], "getMetadata", [0 => "idsubdatatable_in_db"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($context["row"], "getMetadata", [0 => "idsubdatatable_in_db"], "method"), $this->getAttribute($context["row"], "getIdSubDataTable", [], "method"))) : ($this->getAttribute($context["row"], "getIdSubDataTable", [], "method")));
                    // line 26
                    $context["isSummaryRow"] = (($context["rowId"] == twig_constant("Piwik\\DataTable::ID_SUMMARY_ROW")) || $this->getAttribute($context["row"], "getMetadata", [0 => "is_summary"], "method"));
                    // line 27
                    $context["shouldHighlightRow"] = (($context["isSummaryRow"] ?? $this->getContext($context, "isSummaryRow")) && $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "highlight_summary_row", []));
                    // line 28
                    $context["dimensions"] = (($this->getAttribute(($context["dataTable"] ?? null), "getMetadata", [0 => "dimensions"], "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["dataTable"] ?? null), "getMetadata", [0 => "dimensions"], "method"), [])) : ([]));
                    // line 29
                    echo "
                ";
                    // line 31
                    $context["showRow"] = (((($context["subtablesAreDisabled"] ?? $this->getContext($context, "subtablesAreDisabled")) ||  !                    // line 32
($context["rowHasSubtable"] ?? $this->getContext($context, "rowHasSubtable"))) ||  !(($this->getAttribute(                    // line 33
($context["properties"] ?? null), "show_expanded", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["properties"] ?? null), "show_expanded", []), false)) : (false))) ||  !(($this->getAttribute(                    // line 34
($context["properties"] ?? null), "replace_row_with_subtable", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["properties"] ?? null), "replace_row_with_subtable", []), false)) : (false)));
                    // line 36
                    if (($context["showRow"] ?? $this->getContext($context, "showRow"))) {
                        // line 37
                        echo "                <tr ";
                        if (($context["rowHasSubtable"] ?? $this->getContext($context, "rowHasSubtable"))) {
                            echo "id=\"";
                            echo \Piwik\piwik_escape_filter($this->env, ($context["rowSubtableId"] ?? $this->getContext($context, "rowSubtableId")), "html", null, true);
                            echo "\"";
                        }
                        // line 38
                        echo "                    ";
                        if ( !call_user_func_array($this->env->getTest('false')->getCallable(), [$this->getAttribute($context["row"], "getMetadata", [0 => "segment"], "method")])) {
                            echo " data-segment-filter=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["row"], "getMetadata", [0 => "segment"], "method"), "html_attr");
                            echo "\"";
                        }
                        // line 39
                        echo "                    ";
                        if ( !call_user_func_array($this->env->getTest('false')->getCallable(), [$this->getAttribute($context["row"], "getMetadata", [0 => "url"], "method")])) {
                            echo " data-url-label=\"";
                            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute($context["row"], "getMetadata", [0 => "url"], "method")]);
                            echo "\"";
                        }
                        // line 40
                        echo "                    data-row-metadata=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["row"], "getMetadata", [])), "html_attr");
                        echo "\"
                    class=\"";
                        // line 41
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["row"], "getMetadata", [0 => "css_class"], "method"), "html", null, true);
                        echo " ";
                        if (($context["rowHasSubtable"] ?? $this->getContext($context, "rowHasSubtable"))) {
                            echo "subDataTable";
                        }
                        if (($context["shouldHighlightRow"] ?? $this->getContext($context, "shouldHighlightRow"))) {
                            echo " highlight";
                        }
                        if (($context["isSummaryRow"] ?? $this->getContext($context, "isSummaryRow"))) {
                            echo " summaryRow";
                        }
                        echo " ";
                        if (($context["isComparing"] ?? $this->getContext($context, "isComparing"))) {
                            echo "parentComparisonRow";
                        }
                        echo "\"
                    ";
                        // line 42
                        if (($context["rowHasSubtable"] ?? $this->getContext($context, "rowHasSubtable"))) {
                            echo "title=\"";
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_ClickRowToExpandOrContract"]), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                    ";
                        // line 43
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "columns_to_display", []));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                            // line 44
                            echo "                        ";
                            $context["cellAttributes"] = $this->getAttribute(($context["visualization"] ?? $this->getContext($context, "visualization")), "getCellHtmlAttributes", [0 => $context["row"], 1 => $context["column"]], "method");
                            // line 45
                            echo "                        <td class=\"";
                            if ((($context["column"] == "label") || twig_in_filter($context["column"], ($context["dimensions"] ?? $this->getContext($context, "dimensions"))))) {
                                echo "label";
                            } else {
                                echo "column";
                            }
                            echo " ";
                            if ($this->getAttribute($context["loop"], "first", [])) {
                                echo "first";
                            }
                            echo " ";
                            echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute(($context["cellAttributes"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellAttributes"] ?? null), "class", []))) : ("")), "html_attr");
                            echo "\"
                            ";
                            // line 46
                            if ( !twig_test_empty(($context["cellAttributes"] ?? $this->getContext($context, "cellAttributes")))) {
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(($context["cellAttributes"] ?? $this->getContext($context, "cellAttributes")));
                                foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                                    echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html");
                                    echo "=\"";
                                    echo \Piwik\piwik_escape_filter($this->env, $context["value"], "html_attr");
                                    echo "\" ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                            }
                            // line 47
                            echo "                        >
                            ";
                            // line 48
                            if ((($context["isComparing"] ?? $this->getContext($context, "isComparing")) && ($context["column"] == "label"))) {
                                // line 49
                                echo "                                <span class=\"prefix-numeral\">";
                                echo \Piwik\piwik_escape_filter($this->env, ($context["rowIndex"] ?? $this->getContext($context, "rowIndex")), "html", null, true);
                                echo ".</span>
                            ";
                            }
                            // line 51
                            echo "
                            ";
                            // line 52
                            $this->loadTemplate("@CoreHome/_dataTableCell.twig", "@CoreVisualizations/_dataTableViz_htmlTable.twig", 52)->display(twig_array_merge($context, ($context["properties"] ?? $this->getContext($context, "properties"))));
                            // line 53
                            echo "                        </td>
                    ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 55
                        echo "                </tr>

                ";
                        // line 57
                        if ($this->getAttribute($context["row"], "getComparisons", [], "method")) {
                            // line 58
                            echo "                ";
                            $this->loadTemplate("@CoreVisualizations/_dataTableViz_htmlTable_comparisons.twig", "@CoreVisualizations/_dataTableViz_htmlTable.twig", 58)->display(twig_array_merge($context, ["comparedRow" =>                             // line 59
$context["row"], "dataTable" => $this->getAttribute(                            // line 60
$context["row"], "getComparisons", [], "method"), "rootDataTable" =>                             // line 61
($context["dataTable"] ?? $this->getContext($context, "dataTable")), "dimensions" =>                             // line 62
($context["dimensions"] ?? $this->getContext($context, "dimensions"))]));
                            // line 64
                            echo "                ";
                        }
                        // line 65
                        echo "                ";
                    }
                    // line 66
                    echo "
                ";
                    // line 68
                    echo "                ";
                    if (((($this->getAttribute(($context["properties"] ?? null), "show_expanded", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["properties"] ?? null), "show_expanded", []), false)) : (false)) && ($context["rowHasSubtable"] ?? $this->getContext($context, "rowHasSubtable")))) {
                        // line 69
                        echo "                    ";
                        $this->loadTemplate("@CoreVisualizations/_dataTableViz_htmlTable.twig", "@CoreVisualizations/_dataTableViz_htmlTable.twig", 69)->display(twig_array_merge($context, ["dataTable" => $this->getAttribute($context["row"], "getSubtable", [], "method"), "idSubtable" => ($context["rowSubtableId"] ?? $this->getContext($context, "rowSubtableId"))]));
                        // line 70
                        echo "                ";
                    }
                    // line 71
                    echo "
                ";
                    // line 72
                    $context["rowIndex"] = (($context["rowIndex"] ?? $this->getContext($context, "rowIndex")) + 1);
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['rowId'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                if (($this->getAttribute(($context["dataTable"] ?? $this->getContext($context, "dataTable")), "getTotalsRow", []) && $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_totals_row", []))) {
                    // line 75
                    echo "                ";
                    $context["row"] = $this->getAttribute(($context["dataTable"] ?? $this->getContext($context, "dataTable")), "getTotalsRow", []);
                    // line 76
                    echo "                ";
                    $context["rowId"] = "totalsRow";
                    // line 77
                    echo "                <tr class=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "getMetadata", [0 => "css_class"], "method"), "html", null, true);
                    echo " totalsRow\"
                        title=\"Total values for this table\">
                    ";
                    // line 79
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "columns_to_display", []));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                        // line 80
                        echo "                        <td class=\"";
                        if (($context["column"] == "label")) {
                            echo "label";
                        } else {
                            echo "column";
                        }
                        echo " ";
                        if ($this->getAttribute($context["loop"], "first", [])) {
                            echo "first";
                        }
                        echo "\">
                            ";
                        // line 81
                        $this->loadTemplate("@CoreHome/_dataTableCell.twig", "@CoreVisualizations/_dataTableViz_htmlTable.twig", 81)->display(twig_array_merge($context, ($context["properties"] ?? $this->getContext($context, "properties"))));
                        // line 82
                        echo "                        </td>
                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 84
                    echo "                </tr>
            ";
                }
                // line 86
                echo "        ";
            }
            // line 87
            if ( !($context["showingEmbeddedSubtable"] ?? $this->getContext($context, "showingEmbeddedSubtable"))) {
                // line 88
                echo "</tbody>
    </table>
    </div>";
            }
        }
    }

    public function getTemplateName()
    {
        return "@CoreVisualizations/_dataTableViz_htmlTable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 88,  363 => 87,  360 => 86,  356 => 84,  341 => 82,  339 => 81,  326 => 80,  309 => 79,  303 => 77,  300 => 76,  297 => 75,  295 => 74,  281 => 72,  278 => 71,  275 => 70,  272 => 69,  269 => 68,  266 => 66,  263 => 65,  260 => 64,  258 => 62,  257 => 61,  256 => 60,  255 => 59,  253 => 58,  251 => 57,  247 => 55,  232 => 53,  230 => 52,  227 => 51,  221 => 49,  219 => 48,  216 => 47,  202 => 46,  187 => 45,  184 => 44,  167 => 43,  159 => 42,  141 => 41,  136 => 40,  129 => 39,  122 => 38,  115 => 37,  113 => 36,  111 => 34,  110 => 33,  109 => 32,  108 => 31,  105 => 29,  103 => 28,  101 => 27,  99 => 26,  97 => 25,  95 => 24,  78 => 23,  75 => 22,  72 => 21,  64 => 18,  61 => 17,  58 => 16,  56 => 15,  52 => 12,  50 => 11,  46 => 9,  44 => 8,  38 => 6,  36 => 5,  34 => 4,  33 => 3,  31 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{%- set subtablesAreDisabled = properties.show_goals_columns|default(false)
                           and properties.disable_subtable_when_show_goals|default(false) -%}
{%- set showingEmbeddedSubtable = properties.show_embedded_subtable is not empty
                              and idSubtable|default(false) -%}
{% if error is defined %}
    {{ error.message }}
{% else %}
    {%- if not showingEmbeddedSubtable -%}
    <div class=\"dataTableScroller\">
    <table cellspacing=\"0\" class=\"dataTable\">
        {% include \"@CoreHome/_dataTableHead.twig\" %}

        <tbody>
    {%- endif -%}
        {% if showingEmbeddedSubtable and dataTable.getRowsCount() == 0 %}
            {% if clientSideParameters is not defined or clientSideParameters.filter_pattern_recursive is not defined or not clientSideParameters.filter_pattern_recursive  %}
                <tr class=\"nodata\">
                    <td colspan=\"{{ properties.columns_to_display|length }}\">{{ 'CoreHome_CategoryNoData'|translate }}</td>
                </tr>
            {% endif %}
        {% else %}
            {% set rowIndex = properties.filter_offset|default(0) + 1 %}
            {%- for rowId, row in dataTable.getRows() -%}
                {%- set rowHasSubtable = not subtablesAreDisabled and row.getIdSubDataTable() and properties.subtable_controller_action is not null -%}
                {%- set rowSubtableId = row.getMetadata('idsubdatatable_in_db')|default(row.getIdSubDataTable()) -%}
                {%- set isSummaryRow = rowId == constant('Piwik\\\\DataTable::ID_SUMMARY_ROW') or row.getMetadata('is_summary') -%}
                {%- set shouldHighlightRow = isSummaryRow and properties.highlight_summary_row -%}
                {% set dimensions = dataTable.getMetadata('dimensions')|default([]) %}

                {# display this row if it doesn't have a subtable or if we don't replace the row with the subtable #}
                {%- set showRow = subtablesAreDisabled
                               or not rowHasSubtable
                               or not properties.show_expanded|default(false)
                               or not properties.replace_row_with_subtable|default(false) -%}

                {% if showRow %}
                <tr {% if rowHasSubtable %}id=\"{{ rowSubtableId }}\"{% endif %}
                    {% if row.getMetadata('segment') is not false %} data-segment-filter=\"{{ row.getMetadata('segment')|e('html_attr') }}\"{% endif %}
                    {% if row.getMetadata('url') is not false %} data-url-label=\"{{ row.getMetadata('url')|rawSafeDecoded }}\"{% endif %}
                    data-row-metadata=\"{{ row.getMetadata|json_encode|e('html_attr') }}\"
                    class=\"{{ row.getMetadata('css_class') }} {% if rowHasSubtable %}subDataTable{% endif %}{% if shouldHighlightRow %} highlight{% endif %}{% if isSummaryRow %} summaryRow{% endif %} {% if isComparing %}parentComparisonRow{% endif %}\"
                    {% if rowHasSubtable %}title=\"{{ 'CoreHome_ClickRowToExpandOrContract'|translate }}\"{% endif %}>
                    {% for column in properties.columns_to_display %}
                        {% set cellAttributes = visualization.getCellHtmlAttributes(row, column) %}
                        <td class=\"{% if column =='label' or column in dimensions %}label{% else %}column{% endif %} {% if loop.first %}first{% endif %} {{ cellAttributes.class|default|e('html_attr') }}\"
                            {% if cellAttributes is not empty %}{% for name, value in cellAttributes %}{{ name|e('html') }}=\"{{ value|e('html_attr') }}\" {% endfor %}{% endif %}
                        >
                            {% if isComparing and column == 'label' %}
                                <span class=\"prefix-numeral\">{{ rowIndex }}.</span>
                            {% endif %}

                            {% include \"@CoreHome/_dataTableCell.twig\" with properties %}
                        </td>
                    {% endfor %}
                </tr>

                {% if row.getComparisons() %}
                {% include \"@CoreVisualizations/_dataTableViz_htmlTable_comparisons.twig\" with {
                    'comparedRow': row,
                    'dataTable': row.getComparisons(),
                    'rootDataTable': dataTable,
                    'dimensions': dimensions,
                } %}
                {% endif %}
                {% endif %}

                {# display subtable if present and showing expanded datatable #}
                {% if properties.show_expanded|default(false) and rowHasSubtable %}
                    {% include \"@CoreVisualizations/_dataTableViz_htmlTable.twig\" with {'dataTable': row.getSubtable(), 'idSubtable': rowSubtableId} %}
                {% endif %}

                {% set rowIndex = rowIndex + 1 %}
            {%- endfor -%}
            {% if dataTable.getTotalsRow and properties.show_totals_row %}
                {% set row = dataTable.getTotalsRow %}
                {% set rowId = 'totalsRow' %}
                <tr class=\"{{ row.getMetadata('css_class') }} totalsRow\"
                        title=\"Total values for this table\">
                    {% for column in properties.columns_to_display %}
                        <td class=\"{% if column =='label' %}label{% else %}column{% endif %} {% if loop.first %}first{% endif %}\">
                            {% include \"@CoreHome/_dataTableCell.twig\" with properties %}
                        </td>
                    {% endfor %}
                </tr>
            {% endif %}
        {% endif %}
    {%- if not showingEmbeddedSubtable -%}
        </tbody>
    </table>
    </div>
    {%- endif -%}
{% endif %}", "@CoreVisualizations/_dataTableViz_htmlTable.twig", "/var/www/zinecat.org/matomo/plugins/CoreVisualizations/templates/_dataTableViz_htmlTable.twig");
    }
}
