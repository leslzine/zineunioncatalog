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

/* @Live/_dataTableViz_visitorLog.twig */
class __TwigTemplate_1590099755b32b6f1e6b8bf98d79c5ba0015264c15fdc318e40ccc63fd8f2b35 extends \Twig\Template
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
        $context["displayVisitorsInOwnColumn"] = ((($context["isWidget"] ?? $this->getContext($context, "isWidget"))) ? (false) : (true));
        // line 2
        echo "
";
        // line 3
        $context["cycleIndex"] = 0;
        // line 4
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
        foreach ($context['_seq'] as $context["_key"] => $context["visitor"]) {
            // line 5
            echo "    ";
            ob_start();
            // line 6
            echo "        <div class=\"card row hoverable\">

            ";
            // line 8
            if (( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", [0 => "visitorId"], "method")) &&  !$this->getAttribute(($context["clientSideParameters"] ?? $this->getContext($context, "clientSideParameters")), "hideProfileLink", []))) {
                // line 9
                echo "                <a class=\"visitor-log-visitor-profile-link visitorLogTooltip\" data-visitor-id=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "visitorId"], "method"), "html", null, true);
                echo "\">
                    <img src=\"plugins/Live/images/visitorProfileLaunch.png\"/> <span>";
                // line 10
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_ViewVisitorProfile"]), "html", null, true);
                // line 11
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", [0 => "userId"], "method"))) {
                    echo ": ";
                    echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute($context["visitor"], "getColumn", [0 => "userId"], "method")]);
                }
                echo "</span>
                </a>
            ";
            }
            // line 14
            echo "
        ";
            // line 15
            $context["cycleIndex"] = (($context["cycleIndex"] ?? $this->getContext($context, "cycleIndex")) + 1);
            // line 16
            echo "            <div class=\"col s12 m";
            if (($context["displayVisitorsInOwnColumn"] ?? $this->getContext($context, "displayVisitorsInOwnColumn"))) {
                echo "3";
            } else {
                echo "4";
            }
            echo "\">
                ";
            // line 17
            echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Live.renderVisitorDetails", $context["visitor"]]);
            echo "
            </div>

            ";
            // line 20
            if (($context["displayVisitorsInOwnColumn"] ?? $this->getContext($context, "displayVisitorsInOwnColumn"))) {
                // line 21
                echo "                <div class=\"col s12 m2 own-visitor-column\">
                    ";
                // line 22
                echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Live.renderVisitorIcons", $context["visitor"]]);
                echo "
                </div>
            ";
            }
            // line 25
            echo "
            <div class=\"col s12 m";
            // line 26
            if (($context["displayVisitorsInOwnColumn"] ?? $this->getContext($context, "displayVisitorsInOwnColumn"))) {
                echo "7";
            } else {
                echo "8";
            }
            echo " column ";
            if (($this->getAttribute($context["visitor"], "getColumn", [0 => "visitConverted"], "method") &&  !($context["isWidget"] ?? $this->getContext($context, "isWidget")))) {
                echo "highlightField";
            }
            echo "\">
                ";
            // line 27
            echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Live.visitorLogViewBeforeActionsInfo", $context["visitor"]]);
            echo "

                <strong>
                    ";
            // line 30
            $context["actionCount"] = twig_length_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", [0 => "actionDetails"], "method"));
            // line 31
            echo "                    ";
            if ($this->getAttribute($context["visitor"], "truncatedActionsCount", [], "any", true, true)) {
                // line 32
                echo "                        ";
                $context["actionCount"] = (($context["actionCount"] ?? $this->getContext($context, "actionCount")) + $this->getAttribute($context["visitor"], "truncatedActionsCount", []));
                // line 33
                echo "                    ";
            }
            // line 34
            echo "                    ";
            echo \Piwik\piwik_escape_filter($this->env, ($context["actionCount"] ?? $this->getContext($context, "actionCount")), "html", null, true);
            echo "
                    ";
            // line 35
            if ((($context["actionCount"] ?? $this->getContext($context, "actionCount")) <= 1)) {
                // line 36
                echo "                        ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Action"]), "html", null, true);
                echo "
                    ";
            } else {
                // line 38
                echo "                        ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Actions"]), "html", null, true);
                echo "
                    ";
            }
            // line 40
            echo "                    ";
            if (($this->getAttribute($context["visitor"], "getColumn", [0 => "visitDuration"], "method") > 0)) {
                echo "- ";
                echo $this->getAttribute($context["visitor"], "getColumn", [0 => "visitDurationPretty"], "method");
            }
            // line 41
            echo "                </strong>

                <div class=\"visitor-log-page-list\">
                    <ol class='visitorLog actionList'>
                        ";
            // line 45
            $this->loadTemplate("@Live/_actionsList.twig", "@Live/_dataTableViz_visitorLog.twig", 45)->display(twig_array_merge($context, ["actionGroups" => $this->getAttribute($context["visitor"], "getColumn", [0 => "actionGroups"], "method"), "visitInfo" => $context["visitor"]]));
            // line 46
            echo "                    </ol>
                </div>
                ";
            // line 48
            echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Live.visitorLogViewAfterActionsInfo", $context["visitor"]]);
            echo "
            </div>
        </div>
    ";
            $context["visitorRow"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 52
            echo "
    ";
            // line 53
            echo \Piwik\piwik_escape_filter($this->env, ($context["visitorRow"] ?? $this->getContext($context, "visitorRow")), "html", null, true);
            echo "
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
    }

    public function getTemplateName()
    {
        return "@Live/_dataTableViz_visitorLog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 53,  186 => 52,  179 => 48,  175 => 46,  173 => 45,  167 => 41,  161 => 40,  155 => 38,  149 => 36,  147 => 35,  142 => 34,  139 => 33,  136 => 32,  133 => 31,  131 => 30,  125 => 27,  113 => 26,  110 => 25,  104 => 22,  101 => 21,  99 => 20,  93 => 17,  84 => 16,  82 => 15,  79 => 14,  70 => 11,  68 => 10,  63 => 9,  61 => 8,  57 => 6,  54 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set displayVisitorsInOwnColumn = (isWidget ? false : true) %}

{% set cycleIndex=0 %}
{% for visitor in dataTable.getRows() %}
    {% set visitorRow %}
        <div class=\"card row hoverable\">

            {% if visitor.getColumn('visitorId') is not empty and not clientSideParameters.hideProfileLink %}
                <a class=\"visitor-log-visitor-profile-link visitorLogTooltip\" data-visitor-id=\"{{ visitor.getColumn(\"visitorId\") }}\">
                    <img src=\"plugins/Live/images/visitorProfileLaunch.png\"/> <span>{{ 'Live_ViewVisitorProfile'|translate }}
                        {%- if visitor.getColumn('userId') is not empty %}: {{ visitor.getColumn('userId')|rawSafeDecoded }}{% endif %}</span>
                </a>
            {% endif %}

        {% set cycleIndex=cycleIndex+1 %}
            <div class=\"col s12 m{% if displayVisitorsInOwnColumn %}3{% else %}4{% endif %}\">
                {{ postEvent('Live.renderVisitorDetails', visitor) }}
            </div>

            {% if displayVisitorsInOwnColumn %}
                <div class=\"col s12 m2 own-visitor-column\">
                    {{ postEvent('Live.renderVisitorIcons', visitor) }}
                </div>
            {% endif %}

            <div class=\"col s12 m{% if displayVisitorsInOwnColumn %}7{% else %}8{% endif %} column {% if visitor.getColumn('visitConverted') and not isWidget %}highlightField{% endif %}\">
                {{ postEvent('Live.visitorLogViewBeforeActionsInfo', visitor) }}

                <strong>
                    {% set actionCount = visitor.getColumn('actionDetails')|length %}
                    {% if visitor.truncatedActionsCount is defined %}
                        {% set actionCount = actionCount + visitor.truncatedActionsCount %}
                    {% endif %}
                    {{ actionCount }}
                    {% if actionCount <= 1 %}
                        {{ 'General_Action'|translate }}
                    {% else %}
                        {{ 'General_Actions'|translate }}
                    {% endif %}
                    {% if visitor.getColumn('visitDuration') > 0 %}- {{ visitor.getColumn('visitDurationPretty')|raw }}{% endif %}
                </strong>

                <div class=\"visitor-log-page-list\">
                    <ol class='visitorLog actionList'>
                        {% include \"@Live/_actionsList.twig\" with {'actionGroups': visitor.getColumn('actionGroups'), 'visitInfo': visitor} %}
                    </ol>
                </div>
                {{ postEvent('Live.visitorLogViewAfterActionsInfo', visitor) }}
            </div>
        </div>
    {% endset %}

    {{ visitorRow }}
{% endfor %}
", "@Live/_dataTableViz_visitorLog.twig", "/var/www/zinecat.org/matomo/plugins/Live/templates/_dataTableViz_visitorLog.twig");
    }
}
