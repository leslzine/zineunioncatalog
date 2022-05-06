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

/* @CoreVisualizations/macros.twig */
class __TwigTemplate_f4e7fc7bbac84d83b4a18507a75c75c84630c13ffb64dba4a2ea7439d31f6283 extends \Twig\Template
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
        echo "
";
        // line 21
        echo "
";
    }

    // line 2
    public function getsparklineEvolution($__evolution__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "evolution" => $__evolution__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "    ";
            $context["evolutionPretty"] = $this->getAttribute(($context["evolution"] ?? $this->getContext($context, "evolution")), "percent", []);
            // line 4
            echo "
    ";
            // line 5
            if (($this->getAttribute(($context["evolution"] ?? $this->getContext($context, "evolution")), "percent", []) < 0)) {
                // line 6
                echo "        ";
                $context["evolutionClass"] = "negative-evolution";
                // line 7
                echo "        ";
                $context["evolutionIcon"] = "arrow_down.png";
                // line 8
                echo "    ";
            } elseif (($this->getAttribute(($context["evolution"] ?? $this->getContext($context, "evolution")), "percent", []) == 0)) {
                // line 9
                echo "        ";
                $context["evolutionClass"] = "neutral-evolution";
                // line 10
                echo "        ";
                $context["evolutionIcon"] = "stop.png";
                // line 11
                echo "    ";
            } else {
                // line 12
                echo "        ";
                $context["evolutionClass"] = "positive-evolution";
                // line 13
                echo "        ";
                $context["evolutionIcon"] = "arrow_up.png";
                // line 14
                echo "        ";
                $context["evolutionPretty"] = ("+" . $this->getAttribute(($context["evolution"] ?? $this->getContext($context, "evolution")), "percent", []));
                // line 15
                echo "    ";
            }
            // line 16
            echo "
    <span class=\"metricEvolution\" title=\"";
            // line 17
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute(($context["evolution"] ?? $this->getContext($context, "evolution")), "tooltip", [])]), "html_attr");
            echo "\">
    <img style=\"padding-right:4px\" src=\"plugins/MultiSites/images/";
            // line 18
            echo \Piwik\piwik_escape_filter($this->env, ($context["evolutionIcon"] ?? $this->getContext($context, "evolutionIcon")), "html", null, true);
            echo "\"/>
    <strong class=\"";
            // line 19
            echo \Piwik\piwik_escape_filter($this->env, ($context["evolutionClass"] ?? $this->getContext($context, "evolutionClass")), "html", null, true);
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, ($context["evolutionPretty"] ?? $this->getContext($context, "evolutionPretty")), "html", null, true);
            echo "</strong></span>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getsingleSparkline($__sparkline__ = null, $__allMetricsDocumentation__ = null, $__areSparklinesLinkable__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "sparkline" => $__sparkline__,
            "allMetricsDocumentation" => $__allMetricsDocumentation__,
            "areSparklinesLinkable" => $__areSparklinesLinkable__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 23
            echo "
    <div class=\"sparkline ";
            // line 24
            if (((isset($context["areSparklinesLinkable"]) || array_key_exists("areSparklinesLinkable", $context)) &&  !($context["areSparklinesLinkable"] ?? $this->getContext($context, "areSparklinesLinkable")))) {
                echo "notLinkable";
            }
            echo "\"
         ";
            // line 25
            if ( !twig_test_empty((($this->getAttribute(($context["sparkline"] ?? null), "seriesIndices", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["sparkline"] ?? null), "seriesIndices", []))) : ("")))) {
                echo "data-series-indices=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["sparkline"] ?? $this->getContext($context, "sparkline")), "seriesIndices", [])), "html_attr");
                echo "\"";
            }
            // line 26
            echo "         ";
            if ( !twig_test_empty((($this->getAttribute(($context["sparkline"] ?? null), "graphParams", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["sparkline"] ?? null), "graphParams", []))) : ("")))) {
                echo "data-graph-params=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["sparkline"] ?? $this->getContext($context, "sparkline")), "graphParams", [])), "html_attr");
                echo "\"";
            }
            // line 27
            echo "    >
        <div>
            ";
            // line 29
            if ( !twig_test_empty((($this->getAttribute(($context["sparkline"] ?? null), "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["sparkline"] ?? null), "title", []))) : ("")))) {
                echo "<h6 class=\"sparkline-title\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute(($context["sparkline"] ?? $this->getContext($context, "sparkline")), "title", [])]), "html_attr");
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["sparkline"] ?? $this->getContext($context, "sparkline")), "title", []), "html", null, true);
                echo "</h6>";
            }
            // line 30
            echo "            ";
            if ($this->getAttribute(($context["sparkline"] ?? $this->getContext($context, "sparkline")), "url", [])) {
                echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [$this->getAttribute(($context["sparkline"] ?? $this->getContext($context, "sparkline")), "url", [])]);
            }
            // line 31
            echo "        </div>
\t<div>
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["sparkline"] ?? $this->getContext($context, "sparkline")), "metrics", []));
            foreach ($context['_seq'] as $context["groupName"] => $context["group"]) {
                // line 34
                echo "            ";
                if ( !twig_test_empty($context["groupName"])) {
                    echo "<span class=\"metric-group-title\">";
                    echo \Piwik\piwik_escape_filter($this->env, $context["groupName"], "html", null, true);
                    echo "</span>";
                }
                // line 35
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["group"]);
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
                foreach ($context['_seq'] as $context["_key"] => $context["metric"]) {
                    // line 36
                    echo "                <span class=\"sparkline-metrics\" ";
                    if (($this->getAttribute(($context["allMetricsDocumentation"] ?? null), $this->getAttribute($context["metric"], "column", []), [], "array", true, true) && $this->getAttribute(($context["allMetricsDocumentation"] ?? $this->getContext($context, "allMetricsDocumentation")), $this->getAttribute($context["metric"], "column", []), [], "array"))) {
                        echo "title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["allMetricsDocumentation"] ?? $this->getContext($context, "allMetricsDocumentation")), $this->getAttribute($context["metric"], "column", []), [], "array"), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                ";
                    // line 37
                    if (twig_in_filter("%s", $this->getAttribute($context["metric"], "description", []))) {
                        // line 38
                        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), [$this->getAttribute($context["metric"], "description", []), (("<strong>" . call_user_func_array($this->env->getFilter('number')->getCallable(), [$this->getAttribute($context["metric"], "value", []), 2])) . "</strong>")]);
                    } else {
                        // line 40
                        echo "                    <strong>";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), [$this->getAttribute($context["metric"], "value", []), 2]), "html", null, true);
                        echo "</strong> ";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["metric"], "description", []), "html", null, true);
                    }
                    // line 41
                    if ( !$this->getAttribute($context["loop"], "last", [])) {
                        echo ", ";
                    }
                    // line 42
                    echo "                </span>
                ";
                    // line 43
                    if ($this->getAttribute($context["metric"], "evolution", [], "any", true, true)) {
                        // line 44
                        echo "                    ";
                        echo $this->getAttribute($this, "sparklineEvolution", [0 => $this->getAttribute($context["metric"], "evolution", [])], "method");
                        echo "
                ";
                    }
                    // line 46
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metric'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['groupName'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        ";
            if ($this->getAttribute(($context["sparkline"] ?? null), "evolution", [], "any", true, true)) {
                // line 49
                echo "            ";
                echo $this->getAttribute($this, "sparklineEvolution", [0 => $this->getAttribute(($context["sparkline"] ?? $this->getContext($context, "sparkline")), "evolution", [])], "method");
                echo "
        ";
            }
            // line 51
            echo "\t</div>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@CoreVisualizations/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 51,  262 => 49,  259 => 48,  253 => 47,  239 => 46,  233 => 44,  231 => 43,  228 => 42,  224 => 41,  218 => 40,  215 => 38,  213 => 37,  204 => 36,  186 => 35,  179 => 34,  175 => 33,  171 => 31,  166 => 30,  158 => 29,  154 => 27,  147 => 26,  141 => 25,  135 => 24,  132 => 23,  118 => 22,  99 => 19,  95 => 18,  91 => 17,  88 => 16,  85 => 15,  82 => 14,  79 => 13,  76 => 12,  73 => 11,  70 => 10,  67 => 9,  64 => 8,  61 => 7,  58 => 6,  56 => 5,  53 => 4,  50 => 3,  38 => 2,  33 => 21,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% macro sparklineEvolution(evolution) %}
    {% set evolutionPretty = evolution.percent %}

    {% if evolution.percent < 0 %}
        {% set evolutionClass = 'negative-evolution' %}
        {% set evolutionIcon  = 'arrow_down.png' %}
    {% elseif evolution.percent == 0 %}
        {% set evolutionClass = 'neutral-evolution' %}
        {% set evolutionIcon  = 'stop.png' %}
    {% else %}
        {% set evolutionClass  = 'positive-evolution' %}
        {% set evolutionIcon   = 'arrow_up.png' %}
        {% set evolutionPretty = '+' ~ evolution.percent %}
    {% endif %}

    <span class=\"metricEvolution\" title=\"{{ evolution.tooltip|rawSafeDecoded|e('html_attr') }}\">
    <img style=\"padding-right:4px\" src=\"plugins/MultiSites/images/{{ evolutionIcon }}\"/>
    <strong class=\"{{ evolutionClass }}\">{{ evolutionPretty }}</strong></span>
{% endmacro %}

{% macro singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) %}

    <div class=\"sparkline {% if areSparklinesLinkable is defined and not areSparklinesLinkable %}notLinkable{% endif %}\"
         {% if sparkline.seriesIndices|default is not empty %}data-series-indices=\"{{ sparkline.seriesIndices|json_encode|e('html_attr') }}\"{% endif %}
         {% if sparkline.graphParams|default is not empty %}data-graph-params=\"{{ sparkline.graphParams|json_encode|e('html_attr') }}\"{% endif %}
    >
        <div>
            {% if sparkline.title|default is not empty %}<h6 class=\"sparkline-title\" title=\"{{ sparkline.title|rawSafeDecoded|e('html_attr') }}\">{{ sparkline.title }}</h6>{% endif %}
            {% if sparkline.url %}{{ sparkline(sparkline.url)|raw }}{% endif %}
        </div>
\t<div>
        {% for groupName, group in sparkline.metrics %}
            {% if groupName is not empty %}<span class=\"metric-group-title\">{{ groupName }}</span>{% endif %}
            {% for metric in group %}
                <span class=\"sparkline-metrics\" {% if allMetricsDocumentation[metric.column] is defined and allMetricsDocumentation[metric.column] %}title=\"{{ allMetricsDocumentation[metric.column] }}\"{% endif %}>
                {% if '%s' in metric.description -%}
                    {{ metric.description|translate(\"<strong>\"~metric.value|number(2)~\"</strong>\")|raw }}
                {%- else %}
                    <strong>{{ metric.value|number(2) }}</strong> {{ metric.description }}
                {%- endif %}{% if not loop.last %}, {% endif %}
                </span>
                {% if metric.evolution is defined %}
                    {{ _self.sparklineEvolution(metric.evolution) }}
                {% endif %}
            {% endfor %}
        {% endfor %}
        {% if sparkline.evolution is defined %}
            {{ _self.sparklineEvolution(sparkline.evolution) }}
        {% endif %}
\t</div>
    </div>
{% endmacro %}
", "@CoreVisualizations/macros.twig", "/var/www/zinecat.org/matomo/plugins/CoreVisualizations/templates/macros.twig");
    }
}
