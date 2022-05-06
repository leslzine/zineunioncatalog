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

/* @Live/getLastVisitsStart.twig */
class __TwigTemplate_aeb21f9fe78f0f17d5abf02fe486e3a2108f2a5bd8ae48c2309c864bc7f5991b extends \Twig\Template
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
        // line 2
        $context["maxPagesDisplayedByVisitor"] = 100;
        // line 3
        echo "
";
        // line 4
        if ( !twig_test_empty(($context["error"] ?? $this->getContext($context, "error")))) {
            // line 5
            echo "<div piwik-alert=\"danger\">";
            echo \Piwik\piwik_escape_filter($this->env, ($context["error"] ?? $this->getContext($context, "error")), "html", null, true);
            echo "</div>
";
        } else {
            // line 7
            echo "<ul id=\"visitsLive\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["visitors"] ?? $this->getContext($context, "visitors")), "getRows", [], "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["visitor"]) {
                // line 9
                echo "        <li id=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "idVisit"], "method"), "html", null, true);
                echo "\" class=\"visit\">
            <div style=\"display:none;\" class=\"idvisit\">";
                // line 10
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "idVisit", []), "html", null, true);
                echo "</div>
            <div title=\"";
                // line 11
                echo \Piwik\piwik_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "actionDetails"], "method")), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Actions"]), "html", null, true);
                echo "\" class=\"datetime\">
                <span style=\"display:none;\" class=\"serverTimestamp\">";
                // line 12
                echo $this->getAttribute($context["visitor"], "getColumn", [0 => "serverTimestamp"], "method");
                echo "</span>
                ";
                // line 13
                echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Live.visitorLogWidgetViewBeforeVisitInfo", $context["visitor"]]);
                echo "
                ";
                // line 14
                $context["year"] = twig_date_format_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "serverTimestamp"], "method"), "Y");
                // line 15
                echo "                <span class=\"realTimeWidget_datetime\">";
                echo \Piwik\piwik_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["visitor"], "getColumn", [0 => "serverDatePretty"], "method"), [($context["year"] ?? $this->getContext($context, "year")) => " "]), "html", null, true);
                echo " - ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "serverTimePretty"], "method"), "html", null, true);
                echo " ";
                if (($this->getAttribute($context["visitor"], "getColumn", [0 => "visitDuration"], "method") > 0)) {
                    echo "(";
                    echo $this->getAttribute($context["visitor"], "getColumn", [0 => "visitDurationPretty"], "method");
                    echo ")";
                }
                echo "</span>
                ";
                // line 16
                if ( !twig_test_empty((($this->getAttribute($context["visitor"], "getColumn", [0 => "userId"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($context["visitor"], "getColumn", [0 => "userId"], "method"), false)) : (false)))) {
                    // line 17
                    echo "                  &nbsp;  <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_ViewVisitorProfile"]), "html", null, true);
                    echo " ";
                    if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", [0 => "userId"], "method"))) {
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "userId"], "method"), "html", null, true);
                    }
                    echo "\" data-visitor-id=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "visitorId"], "method"), "html", null, true);
                    echo "\">
                        <span>";
                    // line 18
                    echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute($context["visitor"], "getColumn", [0 => "userId"], "method")]);
                    echo "</span>
                    </a>
                ";
                }
                // line 21
                echo "
                ";
                // line 22
                echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Live.renderVisitorIcons", $context["visitor"]]);
                echo "
                ";
                // line 23
                if ( !($context["userIsAnonymous"] ?? $this->getContext($context, "userIsAnonymous"))) {
                    // line 24
                    echo "                <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_ViewVisitorProfile"]), "html", null, true);
                    echo " ";
                    if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", [0 => "userId"], "method"))) {
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "userId"], "method"), "html", null, true);
                    }
                    echo "\" data-visitor-id=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "visitorId"], "method"), "html", null, true);
                    echo "\">
                    <span class=\"icon-visitor-profile\"></span>
                </a>
                ";
                }
                // line 28
                echo "
                <span class=\"referrer\">
                    ";
                // line 30
                $this->loadTemplate("@Referrers/_visitorDetails.twig", "@Live/getLastVisitsStart.twig", 30)->display(twig_array_merge($context, ["visitInfo" => $context["visitor"]]));
                // line 31
                echo "                 </span>
            </div>
            <div id=\"";
                // line 33
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "idVisit"], "method"), "html_attr");
                echo "_actions\" class=\"settings\">
                <span class=\"pagesTitle\"
                      title=\"";
                // line 35
                echo \Piwik\piwik_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "actionDetails"], "method")), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Actions"]), "html", null, true);
                echo "\"
                      >";
                // line 36
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Actions"]), "html", null, true);
                echo ":</span>&nbsp;
                ";
                // line 37
                $context["col"] = 0;
                // line 38
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["visitor"], "getColumn", [0 => "actionDetails"], "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 39
                    echo "                    ";
                    if (($this->getAttribute($context["loop"], "index", []) <= ($context["maxPagesDisplayedByVisitor"] ?? $this->getContext($context, "maxPagesDisplayedByVisitor")))) {
                        // line 40
                        echo "
                        ";
                        // line 41
                        if ((($this->getAttribute($context["action"], "type", []) == "ecommerceOrder") || ($this->getAttribute($context["action"], "type", []) == "ecommerceAbandonedCart"))) {
                            // line 42
                            echo "                            ";
                            ob_start();
                            // line 43
                            if (($this->getAttribute($context["action"], "type", []) == "ecommerceOrder")) {
                                // line 44
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_EcommerceOrder"]), "html", null, true);
                            } else {
                                // line 46
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_AbandonedCart"]), "html", null, true);
                            }
                            // line 48
                            echo "
 - ";
                            // line 49
                            if (($this->getAttribute($context["action"], "type", []) == "ecommerceOrder")) {
                                // line 50
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ColumnRevenue"]), "html", null, true);
                                echo ":";
                            } else {
                                // line 52
                                ob_start();
                                // line 53
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ColumnRevenue"]), "html", null, true);
                                $context["revenueLeft"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                                // line 55
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_LeftInCart", ($context["revenueLeft"] ?? $this->getContext($context, "revenueLeft"))]), "html", null, true);
                                echo ":";
                            }
                            // line 56
                            echo " ";
                            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [$this->getAttribute($context["action"], "revenue", []), ($context["idSite"] ?? $this->getContext($context, "idSite"))]);
                            // line 58
                            echo "
 - ";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", []), "html", null, true);
                            // line 59
                            echo "
";
                            // line 60
                            if ( !twig_test_empty($this->getAttribute($context["action"], "itemDetails", []))) {
                                // line 61
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["action"], "itemDetails", []));
                                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                    // line 62
                                    echo "
# ";
                                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["product"], "itemSKU", []), "html", null, true);
                                    if ( !twig_test_empty($this->getAttribute($context["product"], "itemName", []))) {
                                        echo ": ";
                                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["product"], "itemName", []), "html", null, true);
                                    }
                                    if ( !twig_test_empty($this->getAttribute($context["product"], "itemCategory", []))) {
                                        echo " (";
                                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["product"], "itemCategory", []), "html", null, true);
                                        echo ")";
                                    }
                                    echo ", ";
                                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Quantity"]), "html", null, true);
                                    echo ": ";
                                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", []), "html", null, true);
                                    echo ", ";
                                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Price"]), "html", null, true);
                                    echo ": ";
                                    echo call_user_func_array($this->env->getFilter('money')->getCallable(), [$this->getAttribute($context["product"], "price", []), ($context["idSite"] ?? $this->getContext($context, "idSite"))]);
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                            }
                            // line 65
                            echo "                            ";
                            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                            // line 66
                            echo "                            <span title=\"";
                            echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
                            echo "\">
\t\t\t\t\t\t        <img class='iconPadding' src=\"";
                            // line 67
                            echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($context["action"], "iconSVG", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "iconSVG", []), $this->getAttribute($context["action"], "icon", []))) : ($this->getAttribute($context["action"], "icon", []))), "html", null, true);
                            echo "\"/>
                                ";
                            // line 68
                            if (($this->getAttribute($context["action"], "type", []) == "ecommerceOrder")) {
                                // line 69
                                echo "                                    ";
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ColumnRevenue"]), "html", null, true);
                                echo ": ";
                                echo call_user_func_array($this->env->getFilter('money')->getCallable(), [$this->getAttribute($context["action"], "revenue", []), ($context["idSite"] ?? $this->getContext($context, "idSite"))]);
                                echo "
                                ";
                            }
                            // line 71
                            echo "                            </span>

                        ";
                        } else {
                            // line 74
                            echo "
                            ";
                            // line 75
                            if (($this->getAttribute($context["action"], "url", [], "any", true, true) &&  !twig_test_empty($this->getAttribute($context["action"], "url", [])))) {
                                // line 76
                                echo "                            <a href=\"";
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('safelink')->getCallable(), [$this->getAttribute($context["action"], "url", [])]), "html_attr");
                                echo "\" target=\"_blank\">
                            ";
                            }
                            // line 78
                            echo "                                ";
                            if (($this->getAttribute($context["action"], "type", []) == "action")) {
                                // line 80
                                ob_start();
                                // line 81
                                if ( !twig_test_empty(twig_trim_filter($this->getAttribute($context["action"], "url", [])))) {
                                    echo "<span class='tooltip-action-url'>";
                                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "url", []), "html", null, true);
                                    echo "</span>";
                                }
                                // line 82
                                echo "
";
                                // line 83
                                if ( !twig_test_empty($this->getAttribute($context["action"], "pageTitle", []))) {
                                    echo "<span class='tooltip-action-page-title'>";
                                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "pageTitle", []), "html", null, true);
                                    echo "</span>";
                                }
                                // line 84
                                echo "
<span class=\"tooltip-action-server-time\">";
                                // line 85
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", []), "html", null, true);
                                echo "</span>
    ";
                                // line 86
                                if ($this->getAttribute($context["action"], "timeSpentPretty", [], "any", true, true)) {
                                    echo "<span class='tooltip-time-on-page'>";
                                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_TimeOnPage"]), "html", null, true);
                                    echo ": ";
                                    echo $this->getAttribute($context["action"], "timeSpentPretty", []);
                                    echo "</span>";
                                }
                                $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                                // line 88
                                echo "                                    <img class='iconPadding' src=\"";
                                echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($context["action"], "iconSVG", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "iconSVG", []), $this->getAttribute($context["action"], "icon", []))) : ($this->getAttribute($context["action"], "icon", []))), "html", null, true);
                                echo "\" title=\"";
                                echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html_attr");
                                echo "\"/>
                                ";
                            } elseif ((($this->getAttribute(                            // line 89
$context["action"], "type", []) == "outlink") || ($this->getAttribute($context["action"], "type", []) == "download"))) {
                                // line 90
                                echo "                                    <img class='iconPadding' src=\"";
                                echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($context["action"], "iconSVG", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "iconSVG", []), $this->getAttribute($context["action"], "icon", []))) : ($this->getAttribute($context["action"], "icon", []))), "html", null, true);
                                echo "\"
                                         title=\"";
                                // line 91
                                if ($this->getAttribute($context["action"], "url", [], "any", true, true)) {
                                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "url", []), "html", null, true);
                                    echo " - ";
                                }
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", []), "html", null, true);
                                echo "\"/>
                                ";
                            } elseif (($this->getAttribute(                            // line 92
$context["action"], "type", []) == "search")) {
                                // line 93
                                echo "                                    <img class='iconPadding' src=\"";
                                echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($context["action"], "iconSVG", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "iconSVG", []), $this->getAttribute($context["action"], "icon", []))) : ($this->getAttribute($context["action"], "icon", []))), "html", null, true);
                                echo "\"
                                         title=\"";
                                // line 94
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Actions_SubmenuSitesearch"]), "html", null, true);
                                echo ": ";
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "siteSearchKeyword", []), "html", null, true);
                                echo " - ";
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", []), "html", null, true);
                                echo "\"/>
                                ";
                            } elseif ( !twig_test_empty((($this->getAttribute(                            // line 95
$context["action"], "eventCategory", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "eventCategory", []), false)) : (false)))) {
                                // line 96
                                echo "                                    <img  class=\"iconPadding\" src='";
                                echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($context["action"], "iconSVG", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "iconSVG", []), $this->getAttribute($context["action"], "icon", []))) : ($this->getAttribute($context["action"], "icon", []))), "html", null, true);
                                echo "'
                                        title=\"";
                                // line 97
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Events_Event"]), "html", null, true);
                                echo " ";
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "eventCategory", []), "html", null, true);
                                echo " - ";
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "eventAction", []), "html", null, true);
                                echo " ";
                                if ($this->getAttribute($context["action"], "eventName", [], "any", true, true)) {
                                    echo "- ";
                                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "eventName", []), "html", null, true);
                                }
                                echo " ";
                                if ($this->getAttribute($context["action"], "eventValue", [], "any", true, true)) {
                                    echo "- ";
                                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "eventValue", []), "html", null, true);
                                }
                                echo "\"/>
                                ";
                            } elseif (((($this->getAttribute(                            // line 98
$context["action"], "type", []) == "goal") || ($this->getAttribute($context["action"], "type", []) == twig_constant("Piwik\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_ORDER"))) || ($this->getAttribute(                            // line 99
$context["action"], "type", []) == twig_constant("Piwik\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_CART")))) {
                                // line 100
                                echo "                                    <img class='iconPadding' src=\"";
                                echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($context["action"], "iconSVG", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "iconSVG", []), $this->getAttribute($context["action"], "icon", []))) : ($this->getAttribute($context["action"], "icon", []))), "html", null, true);
                                echo "\"
                                         title=\"";
                                // line 101
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "goalName", []), "html", null, true);
                                echo " - ";
                                if (($this->getAttribute($context["action"], "revenue", []) > 0)) {
                                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ColumnRevenue"]), "html", null, true);
                                    echo ": ";
                                    echo call_user_func_array($this->env->getFilter('money')->getCallable(), [$this->getAttribute($context["action"], "revenue", []), ($context["idSite"] ?? $this->getContext($context, "idSite"))]);
                                    echo " - ";
                                }
                                echo " ";
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", []), "html", null, true);
                                echo "\"/>
                                ";
                            }
                            // line 103
                            echo "                            ";
                            if (($this->getAttribute($context["action"], "url", [], "any", true, true) &&  !twig_test_empty($this->getAttribute($context["action"], "url", [])))) {
                                // line 104
                                echo "                            </a>
                            ";
                            }
                            // line 106
                            echo "                        ";
                        }
                        // line 107
                        echo "                    ";
                    }
                    // line 108
                    echo "                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "
                ";
                // line 110
                if ((twig_length_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "actionDetails"], "method")) > ($context["maxPagesDisplayedByVisitor"] ?? $this->getContext($context, "maxPagesDisplayedByVisitor")))) {
                    // line 111
                    echo "                    (";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_MorePagesNotDisplayed"]), "html", null, true);
                    echo ")
                ";
                }
                // line 113
                echo "            </div>
        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "</ul>
<script type=\"text/javascript\">
\$(function () {
    \$('#visitsLive').on('click', '.visits-live-launch-visitor-profile', function (e) {
        e.preventDefault();
        broadcast.propagateNewPopoverParameter('visitorProfile', \$(this).attr('data-visitor-id'));
        return false;
    }).tooltip({
        track: true,
        content: function() {
            var title = \$(this).attr('title');
            return piwikHelper.escape(title.replace(/\\n/g, '<br />'));
        },
        show: {delay: 100, duration: 0},
        hide: false
    });
});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@Live/getLastVisitsStart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 116,  463 => 113,  457 => 111,  455 => 110,  452 => 109,  438 => 108,  435 => 107,  432 => 106,  428 => 104,  425 => 103,  411 => 101,  406 => 100,  404 => 99,  403 => 98,  385 => 97,  380 => 96,  378 => 95,  370 => 94,  365 => 93,  363 => 92,  355 => 91,  350 => 90,  348 => 89,  341 => 88,  332 => 86,  328 => 85,  325 => 84,  319 => 83,  316 => 82,  310 => 81,  308 => 80,  305 => 78,  299 => 76,  297 => 75,  294 => 74,  289 => 71,  281 => 69,  279 => 68,  275 => 67,  270 => 66,  267 => 65,  241 => 62,  237 => 61,  235 => 60,  232 => 59,  228 => 58,  225 => 56,  221 => 55,  218 => 53,  216 => 52,  212 => 50,  210 => 49,  207 => 48,  204 => 46,  201 => 44,  199 => 43,  196 => 42,  194 => 41,  191 => 40,  188 => 39,  170 => 38,  168 => 37,  164 => 36,  158 => 35,  153 => 33,  149 => 31,  147 => 30,  143 => 28,  129 => 24,  127 => 23,  123 => 22,  120 => 21,  114 => 18,  103 => 17,  101 => 16,  88 => 15,  86 => 14,  82 => 13,  78 => 12,  72 => 11,  68 => 10,  63 => 9,  46 => 8,  43 => 7,  37 => 5,  35 => 4,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# some users view thousands of pages which can crash the browser viewing Live! #}
{% set maxPagesDisplayedByVisitor=100 %}

{% if error is not empty %}
<div piwik-alert=\"danger\">{{ error }}</div>
{% else %}
<ul id=\"visitsLive\">
    {% for visitor in visitors.getRows() %}
        <li id=\"{{ visitor.getColumn('idVisit') }}\" class=\"visit\">
            <div style=\"display:none;\" class=\"idvisit\">{{ visitor.idVisit }}</div>
            <div title=\"{{ visitor.getColumn('actionDetails')|length }} {{ 'General_Actions'|translate }}\" class=\"datetime\">
                <span style=\"display:none;\" class=\"serverTimestamp\">{{ visitor.getColumn('serverTimestamp')|raw }}</span>
                {{ postEvent('Live.visitorLogWidgetViewBeforeVisitInfo', visitor) }}
                {% set year = visitor.getColumn('serverTimestamp')|date('Y') %}
                <span class=\"realTimeWidget_datetime\">{{ visitor.getColumn('serverDatePretty')|replace({(year): ' '}) }} - {{ visitor.getColumn('serverTimePretty') }} {% if visitor.getColumn('visitDuration') > 0 %}({{ visitor.getColumn('visitDurationPretty')|raw }}){% endif %}</span>
                {% if visitor.getColumn('userId')|default(false) is not empty %}
                  &nbsp;  <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"{{ 'Live_ViewVisitorProfile'|translate }} {% if visitor.getColumn('userId') is not empty %}{{ visitor.getColumn('userId') }}{% endif %}\" data-visitor-id=\"{{ visitor.getColumn('visitorId') }}\">
                        <span>{{ visitor.getColumn('userId')|rawSafeDecoded}}</span>
                    </a>
                {% endif %}

                {{ postEvent('Live.renderVisitorIcons', visitor) }}
                {% if not userIsAnonymous %}
                <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"{{ 'Live_ViewVisitorProfile'|translate }} {% if visitor.getColumn('userId') is not empty %}{{ visitor.getColumn('userId') }}{% endif %}\" data-visitor-id=\"{{ visitor.getColumn('visitorId') }}\">
                    <span class=\"icon-visitor-profile\"></span>
                </a>
                {% endif %}

                <span class=\"referrer\">
                    {% include \"@Referrers/_visitorDetails.twig\" with {'visitInfo': visitor} %}
                 </span>
            </div>
            <div id=\"{{ visitor.getColumn('idVisit')|e('html_attr') }}_actions\" class=\"settings\">
                <span class=\"pagesTitle\"
                      title=\"{{ visitor.getColumn('actionDetails')|length }} {{ 'General_Actions'|translate }}\"
                      >{{ 'General_Actions'|translate }}:</span>&nbsp;
                {% set col = 0 %}
                {% for action in visitor.getColumn('actionDetails') %}
                    {% if loop.index <= maxPagesDisplayedByVisitor %}

                        {% if action.type == 'ecommerceOrder' or action.type == 'ecommerceAbandonedCart' %}
                            {% set title %}
                                {%- if action.type == 'ecommerceOrder' %}
                                    {{- 'Goals_EcommerceOrder'|translate -}}
                                {% else %}
                                    {{- 'Goals_AbandonedCart'|translate -}}
                                {% endif %}
                                {{- \"\\n - \" -}}
                                {%- if action.type == 'ecommerceOrder' -%}
                                    {{- 'General_ColumnRevenue'|translate -}}:
                                  {%- else -%}
                                    {%- set revenueLeft -%}
                                        {{- 'General_ColumnRevenue'|translate -}}
                                    {%- endset -%}
                                    {{- 'Goals_LeftInCart'|translate(revenueLeft) -}}:
                                {%- endif %} {{ action.revenue|money(idSite)|raw -}}

                                {{- \"\\n - \" -}}{{- action.serverTimePretty -}}
                                {{- \"\\n\" -}}
                                {% if action.itemDetails is not empty -%}
                                    {% for product in action.itemDetails -%}
                                        {{- \"\\n# \" -}}{{ product.itemSKU }}{% if product.itemName is not empty %}: {{ product.itemName }}{% endif %}{% if product.itemCategory is not empty %} ({{ product.itemCategory }}){% endif %}, {{ 'General_Quantity'|translate }}: {{ product.quantity }}, {{ 'General_Price'|translate }}: {{ product.price|money(idSite)|raw }}
                                    {%- endfor %}
                                {%- endif %}
                            {% endset %}
                            <span title=\"{{- title -}}\">
\t\t\t\t\t\t        <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\"/>
                                {% if action.type == 'ecommerceOrder' %}
                                    {{ 'General_ColumnRevenue'|translate }}: {{ action.revenue|money(idSite)|raw }}
                                {% endif %}
                            </span>

                        {% else %}

                            {% if action.url is defined and action.url is not empty %}
                            <a href=\"{{ action.url|safelink|e('html_attr') }}\" target=\"_blank\">
                            {% endif %}
                                {% if action.type == 'action' %}
{# white spacing matters as Chrome tooltip display whitespaces #}
{% set title %}
{% if action.url|trim is not empty %}<span class='tooltip-action-url'>{{ action.url }}</span>{% endif %}

{% if action.pageTitle is not empty %}<span class='tooltip-action-page-title'>{{ action.pageTitle }}</span>{% endif %}

<span class=\"tooltip-action-server-time\">{{ action.serverTimePretty }}</span>
    {% if action.timeSpentPretty is defined %}<span class='tooltip-time-on-page'>{{ 'General_TimeOnPage'|translate }}: {{ action.timeSpentPretty|raw }}</span>{% endif %}
{%- endset %}
                                    <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\" title=\"{{- title|e('html_attr') -}}\"/>
                                {% elseif action.type == 'outlink' or action.type == 'download' %}
                                    <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\"
                                         title=\"{% if action.url is defined %}{{ action.url }} - {% endif %}{{ action.serverTimePretty }}\"/>
                                {% elseif action.type == 'search' %}
                                    <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\"
                                         title=\"{{ 'Actions_SubmenuSitesearch'|translate }}: {{ action.siteSearchKeyword }} - {{ action.serverTimePretty }}\"/>
                                {% elseif action.eventCategory|default(false) is not empty %}
                                    <img  class=\"iconPadding\" src='{{ action.iconSVG|default(action.icon) }}'
                                        title=\"{{ 'Events_Event'|translate }} {{ action.eventCategory }} - {{ action.eventAction }} {% if action.eventName is defined %}- {{ action.eventName }}{% endif %} {% if action.eventValue is defined %}- {{ action.eventValue }}{% endif %}\"/>
                                {% elseif action.type == 'goal' or action.type == constant('Piwik\\\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_ORDER') or
                                          action.type == constant('Piwik\\\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_CART') %}
                                    <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\"
                                         title=\"{{ action.goalName }} - {% if action.revenue > 0 %}{{ 'General_ColumnRevenue'|translate }}: {{ action.revenue|money(idSite)|raw }} - {% endif %} {{ action.serverTimePretty }}\"/>
                                {% endif %}
                            {% if action.url is defined and action.url is not empty %}
                            </a>
                            {% endif %}
                        {% endif %}
                    {% endif %}
                {% endfor %}

                {% if visitor.getColumn('actionDetails')|length > maxPagesDisplayedByVisitor %}
                    ({{ 'Live_MorePagesNotDisplayed'|translate }})
                {% endif %}
            </div>
        </li>
    {% endfor %}
</ul>
<script type=\"text/javascript\">
\$(function () {
    \$('#visitsLive').on('click', '.visits-live-launch-visitor-profile', function (e) {
        e.preventDefault();
        broadcast.propagateNewPopoverParameter('visitorProfile', \$(this).attr('data-visitor-id'));
        return false;
    }).tooltip({
        track: true,
        content: function() {
            var title = \$(this).attr('title');
            return piwikHelper.escape(title.replace(/\\n/g, '<br />'));
        },
        show: {delay: 100, duration: 0},
        hide: false
    });
});
</script>
{% endif %}", "@Live/getLastVisitsStart.twig", "/var/www/zinecat.org/matomo/plugins/Live/templates/getLastVisitsStart.twig");
    }
}
