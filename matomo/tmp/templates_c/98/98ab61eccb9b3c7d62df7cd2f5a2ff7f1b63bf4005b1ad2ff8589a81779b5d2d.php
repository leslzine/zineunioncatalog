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

/* @CoreHome/_dataTableActions.twig */
class __TwigTemplate_5336db5326812697feefe3109283ac12eca871ddee4b619ad73ac48e87db54b7 extends \Twig\Template
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
        echo " ";
        $context["randomIdForDropdown"] = twig_random($this->env, 999999);
        // line 2
        echo "
    ";
        // line 3
        if (($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_footer", []) && $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_footer_icons", []))) {
            // line 4
            echo "
        <a class='dropdown-button dropdownConfigureIcon dataTableAction'
           href='javascript:;'
           data-activates='dropdownConfigure";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, ($context["randomIdForDropdown"] ?? $this->getContext($context, "randomIdForDropdown")), "html", null, true);
            echo "'><span class=\"icon-configure\"></span></a>

        ";
            // line 9
            $context["activeFooterIcon"] = "";
            // line 10
            echo "        ";
            $context["numIcons"] = 0;
            // line 11
            echo "        ";
            ob_start();
            // line 12
            echo "            <ul id='dropdownVisualizations";
            echo \Piwik\piwik_escape_filter($this->env, ($context["randomIdForDropdown"] ?? $this->getContext($context, "randomIdForDropdown")), "html", null, true);
            echo "' class='dropdown-content dataTableFooterIcons'>
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["footerIcons"] ?? $this->getContext($context, "footerIcons")));
            foreach ($context['_seq'] as $context["_key"] => $context["footerIconGroup"]) {
                // line 14
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["footerIconGroup"], "buttons", []));
                foreach ($context['_seq'] as $context["_key"] => $context["footerIcon"]) {
                    if ($this->getAttribute($context["footerIcon"], "icon", [])) {
                        // line 15
                        echo "                        <li>
                            ";
                        // line 16
                        $context["numIcons"] = (($context["numIcons"] ?? $this->getContext($context, "numIcons")) + 1);
                        // line 17
                        echo "                            ";
                        $context["isActiveEcommerceView"] = ($this->getAttribute(($context["clientSideParameters"] ?? null), "abandonedCarts", [], "any", true, true) && ((($this->getAttribute(                        // line 18
$context["footerIcon"], "id", []) == "ecommerceOrder") && ($this->getAttribute(($context["clientSideParameters"] ?? $this->getContext($context, "clientSideParameters")), "abandonedCarts", []) == 0)) || (($this->getAttribute(                        // line 19
$context["footerIcon"], "id", []) == "ecommerceAbandonedCart") && ($this->getAttribute(($context["clientSideParameters"] ?? $this->getContext($context, "clientSideParameters")), "abandonedCarts", []) == 1))));
                        // line 20
                        echo "                            <a class=\"";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["footerIconGroup"], "class", []), "html", null, true);
                        echo " tableIcon ";
                        if ((($this->getAttribute(($context["clientSideParameters"] ?? $this->getContext($context, "clientSideParameters")), "viewDataTable", []) == $this->getAttribute($context["footerIcon"], "id", [])) || ($context["isActiveEcommerceView"] ?? $this->getContext($context, "isActiveEcommerceView")))) {
                            echo "activeIcon";
                            $context["activeFooterIcon"] = $this->getAttribute($context["footerIcon"], "icon", []);
                        }
                        echo "\"
                               data-footer-icon-id=\"";
                        // line 21
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["footerIcon"], "id", []), "html", null, true);
                        echo "\">
                                ";
                        // line 22
                        if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $this->getAttribute($context["footerIcon"], "icon", [])) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "icon-") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
                            // line 23
                            echo "                                    <span title=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["footerIcon"], "title", []), "html", null, true);
                            echo "\" class=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["footerIcon"], "icon", []), "html", null, true);
                            echo "\"></span>
                                ";
                        } else {
                            // line 25
                            echo "                                    <img width=\"16\" height=\"16\" title=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["footerIcon"], "title", []), "html", null, true);
                            echo "\" src=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["footerIcon"], "icon", []), "html", null, true);
                            echo "\"/>
                                ";
                        }
                        // line 27
                        echo "                                ";
                        if ($this->getAttribute($context["footerIcon"], "title", [], "any", true, true)) {
                            echo "<span>";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["footerIcon"], "title", []), "html", null, true);
                            echo "</span>";
                        }
                        // line 28
                        echo "                            </a>
                        </li>
                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerIcon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                    <li class=\"divider\"></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerIconGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ul>
        ";
            $context["visualizationIcons"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 35
            echo "
        ";
            // line 36
            if ($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_periods", [])) {
                // line 37
                echo "            <a class=\"dropdown-button dataTableAction activatePeriodsSelection\"
               href=\"javascript:;\"
               title=\"";
                // line 39
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_ChangePeriod"]), "html_attr");
                echo "\"
               data-activates=\"dropdownPeriods";
                // line 40
                echo \Piwik\piwik_escape_filter($this->env, ($context["randomIdForDropdown"] ?? $this->getContext($context, "randomIdForDropdown")), "html", null, true);
                echo "\">
                <span class=\"icon-calendar\"></span>
            </a>
            <ul id='dropdownPeriods";
                // line 43
                echo \Piwik\piwik_escape_filter($this->env, ($context["randomIdForDropdown"] ?? $this->getContext($context, "randomIdForDropdown")), "html", null, true);
                echo "' class='dropdown-content dataTablePeriods'>
                ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "selectable_periods", []));
                foreach ($context['_seq'] as $context["_key"] => $context["selectablePeriod"]) {
                    // line 45
                    echo "                    <li>
                        <a data-period=\"";
                    // line 46
                    echo \Piwik\piwik_escape_filter($this->env, $context["selectablePeriod"], "html", null, true);
                    echo "\" class=\"tableIcon ";
                    if (((($this->getAttribute(($context["clientSideParameters"] ?? null), "period", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["clientSideParameters"] ?? null), "period", []), "")) : ("")) == $context["selectablePeriod"])) {
                        echo "activeIcon";
                    }
                    echo "\">
                            <span>";
                    // line 47
                    echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "translations", [], "any", false, true), $context["selectablePeriod"], [], "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "translations", [], "any", false, true), $context["selectablePeriod"], [], "array"), $context["selectablePeriod"])) : ($context["selectablePeriod"])), "html", null, true);
                    echo "</span>
                        </a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selectablePeriod'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "            </ul>
        ";
            }
            // line 53
            echo "
        ";
            // line 54
            if ((($context["activeFooterIcon"] ?? $this->getContext($context, "activeFooterIcon")) && (($context["numIcons"] ?? $this->getContext($context, "numIcons")) > 1))) {
                // line 55
                echo "            <a class=\"dropdown-button dataTableAction activateVisualizationSelection\"
               href=\"javascript:;\"
               data-activates=\"dropdownVisualizations";
                // line 57
                echo \Piwik\piwik_escape_filter($this->env, ($context["randomIdForDropdown"] ?? $this->getContext($context, "randomIdForDropdown")), "html", null, true);
                echo "\">
                ";
                // line 58
                if ((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["activeFooterIcon"] ?? $this->getContext($context, "activeFooterIcon"))) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "icon-") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)))) {
                    // line 59
                    echo "                    <span title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_ChangeVisualization"]), "html_attr");
                    echo "\" class=\"";
                    echo \Piwik\piwik_escape_filter($this->env, ($context["activeFooterIcon"] ?? $this->getContext($context, "activeFooterIcon")), "html", null, true);
                    echo "\"></span>
                ";
                } else {
                    // line 61
                    echo "                    <img title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_ChangeVisualization"]), "html_attr");
                    echo "\" width=\"16\" height=\"16\" src=\"";
                    echo \Piwik\piwik_escape_filter($this->env, ($context["activeFooterIcon"] ?? $this->getContext($context, "activeFooterIcon")), "html", null, true);
                    echo "\"/>
                ";
                }
                // line 63
                echo "            </a>
            ";
                // line 64
                echo ($context["visualizationIcons"] ?? $this->getContext($context, "visualizationIcons"));
                echo "
        ";
            }
            // line 66
            echo "
        ";
            // line 67
            if ($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_export", [])) {
                // line 68
                echo "            ";
                $context["requestParams"] = twig_jsonencode_filter($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "request_parameters_to_modify", []));
                // line 69
                echo "
            ";
                // line 70
                $context["formats"] = ["CSV" => "CSV", "TSV" => "TSV (Excel)", "XML" => "XML", "JSON" => "Json", "PHP" => "PHP", "HTML" => "HTML"];
                // line 71
                echo "            ";
                if ($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_export_as_rss_feed", [])) {
                    // line 72
                    echo "                ";
                    $context["formats"] = twig_array_merge(($context["formats"] ?? $this->getContext($context, "formats")), ["RSS" => "RSS"]);
                    // line 73
                    echo "            ";
                }
                // line 74
                echo "
            <a class=\"dataTableAction activateExportSelection\" piwik-report-export
               report-title=\"";
                // line 76
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "title", []), "html_attr");
                echo "\" request-params=\"";
                echo \Piwik\piwik_escape_filter($this->env, ($context["requestParams"] ?? $this->getContext($context, "requestParams")), "html_attr");
                echo "\"
               api-method=\"";
                // line 77
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "apiMethodToRequestDataTable", []), "html", null, true);
                echo "\" report-formats=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["formats"] ?? $this->getContext($context, "formats"))), "html_attr");
                echo "\"
               href='javascript:;' title=\"";
                // line 78
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ExportThisReport"]), "html_attr");
                echo "\"
               max-filter-limit=\"";
                // line 79
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "max_export_filter_limit", []), "html_attr");
                echo "\"
               ><span class=\"icon-export\"></span></a>
        ";
            }
            // line 82
            echo "
        ";
            // line 83
            if ($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_export_as_image_icon", [])) {
                // line 84
                echo "            <a class=\"dataTableAction tableIcon\" href=\"javascript:;\" id=\"dataTableFooterExportAsImageIcon\"
               onclick=\"\$(this).closest('.dataTable').find('div.jqplot-target').trigger('piwikExportAsImage'); return false;\"
               title=\"";
                // line 86
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ExportAsImage"]), "html", null, true);
                echo "\">
                <span class=\"icon-image\"></span>
            </a>
        ";
            }
            // line 90
            echo "
        ";
            // line 91
            if ((call_user_func_array($this->env->getFunction('isPluginLoaded')->getCallable(), ["Annotations"]) &&  !$this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "hide_annotations_view", []))) {
                // line 92
                echo "            <a class='dataTableAction annotationView'
               href='javascript:;' title=\"";
                // line 93
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Annotations_Annotations"]), "html_attr");
                echo "\"
            ><span class=\"icon-annotation\"></span></a>
        ";
            }
            // line 96
            echo "
        ";
            // line 97
            if ($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_search", [])) {
                // line 98
                echo "            <a class='dropdown-button dataTableAction searchAction'
               href='javascript:;' title=\"";
                // line 99
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Search"]), "html_attr");
                echo "\"
               ><span class=\"icon-search\"></span>
                <span class=\"icon-close\" title=\"";
                // line 101
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_CloseSearch"]), "html_attr");
                echo "\"></span>
                <input id=\"widgetSearch_";
                // line 102
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "report_id", []), "html", null, true);
                echo "\"
                       title=\"";
                // line 103
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_DataTableHowToSearch"]), "html_attr");
                echo "\"
                       type=\"text\"
                       class=\"dataTableSearchInput browser-default\" />
            </a>
        ";
            }
            // line 108
            echo "
        ";
            // line 109
            if ( !twig_test_empty((($this->getAttribute(($context["properties"] ?? null), "datatable_actions", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["properties"] ?? null), "datatable_actions", []))) : ("")))) {
                // line 110
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "datatable_actions", []));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 111
                    echo "            <a class='dataTableAction ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "id", []), "html_attr");
                    echo "'
               href='javascript:;' title=\"";
                    // line 112
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "title", []), "html_attr");
                    echo "\"
            >
                ";
                    // line 114
                    if ((is_string($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $this->getAttribute($context["action"], "icon", [])) && is_string($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = "icon-") && ('' === $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 || 0 === strpos($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4, $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666)))) {
                        // line 115
                        echo "                    <span class=\"";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "icon", []), "html", null, true);
                        echo "\"></span>
                ";
                    } else {
                        // line 117
                        echo "                    <img width=\"16\" height=\"16\" title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "title", []), "html", null, true);
                        echo "\" src=\"";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "icon", []), "html", null, true);
                        echo "\"/>
                ";
                    }
                    // line 119
                    echo "            </a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "        ";
            }
            // line 122
            echo "
        <ul id='dropdownConfigure";
            // line 123
            echo \Piwik\piwik_escape_filter($this->env, ($context["randomIdForDropdown"] ?? $this->getContext($context, "randomIdForDropdown")), "html", null, true);
            echo "' class='dropdown-content tableConfiguration'>
            ";
            // line 124
            if ($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_flatten_table", [])) {
                // line 125
                echo "                <li>
                    <div class=\"configItem dataTableFlatten\"></div>
                </li>
                ";
                // line 128
                if (($this->getAttribute(($context["clientSideParameters"] ?? null), "flat", [], "any", true, true) && ($this->getAttribute(($context["clientSideParameters"] ?? $this->getContext($context, "clientSideParameters")), "flat", []) == 1))) {
                    // line 129
                    echo "                    ";
                    if ((((isset($context["hasMultipleDimensions"]) || array_key_exists("hasMultipleDimensions", $context))) ? (_twig_default_filter(($context["hasMultipleDimensions"] ?? $this->getContext($context, "hasMultipleDimensions")))) : (""))) {
                        // line 130
                        echo "                        <li>
                            <div class=\"configItem dataTableShowDimensions\"></div>
                        </li>
                    ";
                    }
                    // line 134
                    echo "                    <li>
                        <div class=\"configItem dataTableIncludeAggregateRows\"></div>
                    </li>
                ";
                }
                // line 138
                echo "            ";
            }
            // line 139
            echo "            ";
            if (( !($context["isDataTableEmpty"] ?? $this->getContext($context, "isDataTableEmpty")) && (($this->getAttribute(($context["properties"] ?? null), "show_totals_row", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["properties"] ?? null), "show_totals_row", []), 0)) : (0)))) {
                // line 140
                echo "                <li>
                    <div class=\"configItem dataTableShowTotalsRow\"></div>
                </li>
            ";
            }
            // line 144
            echo "            ";
            if ($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_exclude_low_population", [])) {
                // line 145
                echo "                <li>
                    <div class=\"configItem dataTableExcludeLowPopulation\"></div>
                </li>
            ";
            }
            // line 149
            echo "            ";
            if (( !twig_test_empty((($this->getAttribute(($context["properties"] ?? null), "show_pivot_by_subtable", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["properties"] ?? null), "show_pivot_by_subtable", []))) : (""))) &&  !(((isset($context["isComparing"]) || array_key_exists("isComparing", $context))) ? (_twig_default_filter(($context["isComparing"] ?? $this->getContext($context, "isComparing")), false)) : (false)))) {
                // line 150
                echo "                <li>
                    <div class=\"configItem dataTablePivotBySubtable\"></div>
                </li>
            ";
            }
            // line 154
            echo "        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableActions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 154,  439 => 150,  436 => 149,  430 => 145,  427 => 144,  421 => 140,  418 => 139,  415 => 138,  409 => 134,  403 => 130,  400 => 129,  398 => 128,  393 => 125,  391 => 124,  387 => 123,  384 => 122,  381 => 121,  374 => 119,  366 => 117,  360 => 115,  358 => 114,  353 => 112,  348 => 111,  343 => 110,  341 => 109,  338 => 108,  330 => 103,  326 => 102,  322 => 101,  317 => 99,  314 => 98,  312 => 97,  309 => 96,  303 => 93,  300 => 92,  298 => 91,  295 => 90,  288 => 86,  284 => 84,  282 => 83,  279 => 82,  273 => 79,  269 => 78,  263 => 77,  257 => 76,  253 => 74,  250 => 73,  247 => 72,  244 => 71,  242 => 70,  239 => 69,  236 => 68,  234 => 67,  231 => 66,  226 => 64,  223 => 63,  215 => 61,  207 => 59,  205 => 58,  201 => 57,  197 => 55,  195 => 54,  192 => 53,  188 => 51,  178 => 47,  170 => 46,  167 => 45,  163 => 44,  159 => 43,  153 => 40,  149 => 39,  145 => 37,  143 => 36,  140 => 35,  136 => 33,  129 => 31,  120 => 28,  113 => 27,  105 => 25,  97 => 23,  95 => 22,  91 => 21,  81 => 20,  79 => 19,  78 => 18,  76 => 17,  74 => 16,  71 => 15,  65 => 14,  61 => 13,  56 => 12,  53 => 11,  50 => 10,  48 => 9,  43 => 7,  38 => 4,  36 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source(" {% set randomIdForDropdown = random(999999) %}

    {% if properties.show_footer and properties.show_footer_icons %}

        <a class='dropdown-button dropdownConfigureIcon dataTableAction'
           href='javascript:;'
           data-activates='dropdownConfigure{{ randomIdForDropdown }}'><span class=\"icon-configure\"></span></a>

        {% set activeFooterIcon = '' %}
        {% set numIcons = 0 %}
        {% set visualizationIcons %}
            <ul id='dropdownVisualizations{{ randomIdForDropdown }}' class='dropdown-content dataTableFooterIcons'>
                {% for footerIconGroup in footerIcons %}
                    {% for footerIcon in footerIconGroup.buttons if footerIcon.icon %}
                        <li>
                            {% set numIcons = numIcons + 1 %}
                            {% set isActiveEcommerceView = clientSideParameters.abandonedCarts is defined and
                            ((footerIcon.id == 'ecommerceOrder' and clientSideParameters.abandonedCarts == 0) or
                            (footerIcon.id == 'ecommerceAbandonedCart' and clientSideParameters.abandonedCarts == 1)) %}
                            <a class=\"{{ footerIconGroup.class }} tableIcon {% if clientSideParameters.viewDataTable == footerIcon.id or isActiveEcommerceView %}activeIcon{% set activeFooterIcon = footerIcon.icon %}{% endif %}\"
                               data-footer-icon-id=\"{{ footerIcon.id }}\">
                                {% if footerIcon.icon starts with 'icon-' %}
                                    <span title=\"{{ footerIcon.title }}\" class=\"{{ footerIcon.icon }}\"></span>
                                {% else %}
                                    <img width=\"16\" height=\"16\" title=\"{{ footerIcon.title }}\" src=\"{{ footerIcon.icon }}\"/>
                                {% endif %}
                                {% if footerIcon.title is defined %}<span>{{ footerIcon.title }}</span>{% endif %}
                            </a>
                        </li>
                    {% endfor %}
                    <li class=\"divider\"></li>
                {% endfor %}
            </ul>
        {% endset %}

        {% if properties.show_periods %}
            <a class=\"dropdown-button dataTableAction activatePeriodsSelection\"
               href=\"javascript:;\"
               title=\"{{ 'CoreHome_ChangePeriod'|translate|e('html_attr') }}\"
               data-activates=\"dropdownPeriods{{ randomIdForDropdown }}\">
                <span class=\"icon-calendar\"></span>
            </a>
            <ul id='dropdownPeriods{{ randomIdForDropdown }}' class='dropdown-content dataTablePeriods'>
                {% for selectablePeriod in properties.selectable_periods %}
                    <li>
                        <a data-period=\"{{ selectablePeriod }}\" class=\"tableIcon {% if (clientSideParameters.period|default('')) == selectablePeriod %}activeIcon{% endif %}\">
                            <span>{{ properties.translations[selectablePeriod]|default(selectablePeriod) }}</span>
                        </a>
                    </li>
                {% endfor %}
            </ul>
        {% endif %}

        {% if activeFooterIcon and numIcons > 1 %}
            <a class=\"dropdown-button dataTableAction activateVisualizationSelection\"
               href=\"javascript:;\"
               data-activates=\"dropdownVisualizations{{ randomIdForDropdown }}\">
                {% if activeFooterIcon starts with 'icon-' %}
                    <span title=\"{{ 'CoreHome_ChangeVisualization'|translate|e('html_attr') }}\" class=\"{{ activeFooterIcon }}\"></span>
                {% else %}
                    <img title=\"{{ 'CoreHome_ChangeVisualization'|translate|e('html_attr') }}\" width=\"16\" height=\"16\" src=\"{{ activeFooterIcon }}\"/>
                {% endif %}
            </a>
            {{ visualizationIcons|raw }}
        {% endif %}

        {% if properties.show_export %}
            {% set requestParams = properties.request_parameters_to_modify|json_encode %}

            {% set formats = {\"CSV\":\"CSV\",\"TSV\":\"TSV (Excel)\",\"XML\":\"XML\",\"JSON\":\"Json\",\"PHP\":\"PHP\",\"HTML\":\"HTML\"} %}
            {% if properties.show_export_as_rss_feed %}
                {% set formats = formats|merge({\"RSS\": \"RSS\"}) %}
            {% endif %}

            <a class=\"dataTableAction activateExportSelection\" piwik-report-export
               report-title=\"{{ properties.title|e('html_attr') }}\" request-params=\"{{ requestParams|e('html_attr') }}\"
               api-method=\"{{ properties.apiMethodToRequestDataTable }}\" report-formats=\"{{ formats|json_encode|e('html_attr') }}\"
               href='javascript:;' title=\"{{ 'General_ExportThisReport'|translate|e('html_attr') }}\"
               max-filter-limit=\"{{ properties.max_export_filter_limit|e('html_attr') }}\"
               ><span class=\"icon-export\"></span></a>
        {% endif %}

        {% if properties.show_export_as_image_icon %}
            <a class=\"dataTableAction tableIcon\" href=\"javascript:;\" id=\"dataTableFooterExportAsImageIcon\"
               onclick=\"\$(this).closest('.dataTable').find('div.jqplot-target').trigger('piwikExportAsImage'); return false;\"
               title=\"{{ 'General_ExportAsImage'|translate }}\">
                <span class=\"icon-image\"></span>
            </a>
        {% endif %}

        {% if isPluginLoaded('Annotations') and not properties.hide_annotations_view %}
            <a class='dataTableAction annotationView'
               href='javascript:;' title=\"{{ 'Annotations_Annotations'|translate|e('html_attr') }}\"
            ><span class=\"icon-annotation\"></span></a>
        {% endif %}

        {% if properties.show_search %}
            <a class='dropdown-button dataTableAction searchAction'
               href='javascript:;' title=\"{{ 'General_Search'|translate|e('html_attr') }}\"
               ><span class=\"icon-search\"></span>
                <span class=\"icon-close\" title=\"{{ 'CoreHome_CloseSearch'|translate|e('html_attr') }}\"></span>
                <input id=\"widgetSearch_{{ properties.report_id }}\"
                       title=\"{{ 'CoreHome_DataTableHowToSearch'|translate|e('html_attr') }}\"
                       type=\"text\"
                       class=\"dataTableSearchInput browser-default\" />
            </a>
        {% endif %}

        {% if properties.datatable_actions|default is not empty %}
        {% for action in properties.datatable_actions %}
            <a class='dataTableAction {{ action.id|e('html_attr') }}'
               href='javascript:;' title=\"{{ action.title|e('html_attr') }}\"
            >
                {% if action.icon starts with 'icon-' %}
                    <span class=\"{{ action.icon }}\"></span>
                {% else %}
                    <img width=\"16\" height=\"16\" title=\"{{ action.title }}\" src=\"{{ action.icon }}\"/>
                {% endif %}
            </a>
        {% endfor %}
        {% endif %}

        <ul id='dropdownConfigure{{ randomIdForDropdown }}' class='dropdown-content tableConfiguration'>
            {% if properties.show_flatten_table %}
                <li>
                    <div class=\"configItem dataTableFlatten\"></div>
                </li>
                {% if clientSideParameters.flat is defined and clientSideParameters.flat == 1 %}
                    {% if hasMultipleDimensions|default %}
                        <li>
                            <div class=\"configItem dataTableShowDimensions\"></div>
                        </li>
                    {% endif %}
                    <li>
                        <div class=\"configItem dataTableIncludeAggregateRows\"></div>
                    </li>
                {% endif %}
            {% endif %}
            {% if not isDataTableEmpty and properties.show_totals_row|default(0) %}
                <li>
                    <div class=\"configItem dataTableShowTotalsRow\"></div>
                </li>
            {% endif %}
            {% if properties.show_exclude_low_population %}
                <li>
                    <div class=\"configItem dataTableExcludeLowPopulation\"></div>
                </li>
            {% endif %}
            {% if properties.show_pivot_by_subtable|default is not empty and not isComparing|default(false) %}
                <li>
                    <div class=\"configItem dataTablePivotBySubtable\"></div>
                </li>
            {% endif %}
        </ul>
    {% endif %}", "@CoreHome/_dataTableActions.twig", "/var/www/zinecat.org/matomo/plugins/CoreHome/templates/_dataTableActions.twig");
    }
}
