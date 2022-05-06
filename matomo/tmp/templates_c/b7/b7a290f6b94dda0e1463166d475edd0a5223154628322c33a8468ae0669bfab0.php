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

/* @CoreVisualizations/_dataTableViz_sparklines.twig */
class __TwigTemplate_aa5db51e729421cc976b3ca320f5b307a5f8ffd2d43bf1f1575b3c7115d042c7 extends \Twig\Template
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
        $context["macros"] = $this->loadTemplate("@CoreVisualizations/macros.twig", "@CoreVisualizations/_dataTableViz_sparklines.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if ( !($context["isWidget"] ?? $this->getContext($context, "isWidget"))) {
            // line 4
            echo "    <div class=\"card\"><div class=\"card-content\">
";
        }
        // line 6
        echo "    ";
        if ( !twig_test_empty(($context["title"] ?? $this->getContext($context, "title")))) {
            echo "<h2 class=\"card-title\"
                                    ";
            // line 7
            if ( !twig_test_empty(($context["titleAttributes"] ?? $this->getContext($context, "titleAttributes")))) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["titleAttributes"] ?? $this->getContext($context, "titleAttributes")));
                foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                    echo \Piwik\piwik_escape_filter($this->env, $context["attribute"], "html", null, true);
                    echo "=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 8
            echo "                                >";
            echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "</h2>";
        }
        // line 9
        echo "    ";
        if ( !($context["isWidget"] ?? $this->getContext($context, "isWidget"))) {
            // line 10
            echo "    <div class=\"row\">
        <div class=\"col m6\">
    ";
        }
        // line 13
        echo "            ";
        if ((twig_length_filter($this->env, ($context["sparklines"] ?? $this->getContext($context, "sparklines"))) == 1)) {
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_first($this->env, ($context["sparklines"] ?? $this->getContext($context, "sparklines"))));
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
            foreach ($context['_seq'] as $context["key"] => $context["sparkline"]) {
                // line 15
                echo "                ";
                if (($this->getAttribute($context["loop"], "index0", []) % 2 == 0)) {
                    // line 16
                    echo "                    ";
                    echo $context["macros"]->getsingleSparkline($context["sparkline"], ($context["allMetricsDocumentation"] ?? $this->getContext($context, "allMetricsDocumentation")), ($context["areSparklinesLinkable"] ?? $this->getContext($context, "areSparklinesLinkable")));
                    echo "
                ";
                }
                // line 18
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sparkline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            ";
        } else {
            // line 20
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sparklines"] ?? $this->getContext($context, "sparklines")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 21
                echo "                    ";
                if (($this->getAttribute($context["loop"], "index0", []) % 2 == 0)) {
                    // line 22
                    echo "                        <div>
                            ";
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["group"]);
                    foreach ($context['_seq'] as $context["key"] => $context["sparkline"]) {
                        // line 24
                        echo "                                ";
                        echo $context["macros"]->getsingleSparkline($context["sparkline"], ($context["allMetricsDocumentation"] ?? $this->getContext($context, "allMetricsDocumentation")), ($context["areSparklinesLinkable"] ?? $this->getContext($context, "areSparklinesLinkable")));
                        echo "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['sparkline'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "                        </div>
                    ";
                }
                // line 28
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            ";
        }
        // line 30
        echo "
    ";
        // line 31
        if ( !($context["isWidget"] ?? $this->getContext($context, "isWidget"))) {
            // line 32
            echo "            <br style=\"clear:left\"/>
        </div>
        <div class=\"col m6\">
    ";
        }
        // line 36
        echo "
            ";
        // line 37
        if ((twig_length_filter($this->env, ($context["sparklines"] ?? $this->getContext($context, "sparklines"))) == 1)) {
            // line 38
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sparklines"] ?? $this->getContext($context, "sparklines")));
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
            foreach ($context['_seq'] as $context["key"] => $context["sparkline"]) {
                // line 39
                echo "                ";
                if (($this->getAttribute($context["loop"], "index0", []) % 2 == 1)) {
                    // line 40
                    echo "                    ";
                    echo $context["macros"]->getsingleSparkline($context["sparkline"], ($context["allMetricsDocumentation"] ?? $this->getContext($context, "allMetricsDocumentation")), ($context["areSparklinesLinkable"] ?? $this->getContext($context, "areSparklinesLinkable")));
                    echo "
                ";
                }
                // line 42
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sparkline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            ";
        } else {
            // line 44
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sparklines"] ?? $this->getContext($context, "sparklines")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 45
                echo "                    ";
                if (($this->getAttribute($context["loop"], "index0", []) % 2 == 1)) {
                    // line 46
                    echo "                        <div>
                            ";
                    // line 47
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["group"]);
                    foreach ($context['_seq'] as $context["key"] => $context["sparkline"]) {
                        // line 48
                        echo "                                ";
                        echo $context["macros"]->getsingleSparkline($context["sparkline"], ($context["allMetricsDocumentation"] ?? $this->getContext($context, "allMetricsDocumentation")), ($context["areSparklinesLinkable"] ?? $this->getContext($context, "areSparklinesLinkable")));
                        echo "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['sparkline'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "                        </div>
                    ";
                }
                // line 52
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            ";
        }
        // line 54
        echo "
            <br style=\"clear:left\"/>

    ";
        // line 57
        if ( !($context["isWidget"] ?? $this->getContext($context, "isWidget"))) {
            // line 58
            echo "        </div>
    </div>
    ";
        }
        // line 61
        echo "
    ";
        // line 62
        if (($context["areSparklinesLinkable"] ?? $this->getContext($context, "areSparklinesLinkable"))) {
            // line 63
            echo "        ";
            $this->loadTemplate("_sparklineFooter.twig", "@CoreVisualizations/_dataTableViz_sparklines.twig", 63)->display($context);
            // line 64
            echo "    ";
        }
        // line 65
        echo "
    ";
        // line 66
        if ( !twig_test_empty(($context["footerMessage"] ?? $this->getContext($context, "footerMessage")))) {
            // line 67
            echo "        <div class='datatableFooterMessage'>";
            echo ($context["footerMessage"] ?? $this->getContext($context, "footerMessage"));
            echo "</div>
    ";
        }
        // line 69
        if ( !($context["isWidget"] ?? $this->getContext($context, "isWidget"))) {
            // line 70
            echo "        </div></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreVisualizations/_dataTableViz_sparklines.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 70,  330 => 69,  324 => 67,  322 => 66,  319 => 65,  316 => 64,  313 => 63,  311 => 62,  308 => 61,  303 => 58,  301 => 57,  296 => 54,  293 => 53,  279 => 52,  275 => 50,  266 => 48,  262 => 47,  259 => 46,  256 => 45,  238 => 44,  235 => 43,  221 => 42,  215 => 40,  212 => 39,  194 => 38,  192 => 37,  189 => 36,  183 => 32,  181 => 31,  178 => 30,  175 => 29,  161 => 28,  157 => 26,  148 => 24,  144 => 23,  141 => 22,  138 => 21,  120 => 20,  117 => 19,  103 => 18,  97 => 16,  94 => 15,  76 => 14,  73 => 13,  68 => 10,  65 => 9,  60 => 8,  46 => 7,  41 => 6,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import '@CoreVisualizations/macros.twig' as macros %}

{% if not isWidget %}
    <div class=\"card\"><div class=\"card-content\">
{% endif %}
    {% if title is not empty %}<h2 class=\"card-title\"
                                    {% if titleAttributes is not empty %}{% for attribute, value in titleAttributes %}{{ attribute }}=\"{{ value }}\"{% endfor %}{% endif %}
                                >{{ title }}</h2>{% endif %}
    {% if not isWidget %}
    <div class=\"row\">
        <div class=\"col m6\">
    {% endif %}
            {% if sparklines|length == 1 %}
            {% for key, sparkline in sparklines|first %}
                {% if loop.index0 is even %}
                    {{ macros.singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) }}
                {% endif %}
            {% endfor %}
            {% else %}
                {% for group in sparklines %}
                    {% if loop.index0 is even %}
                        <div>
                            {% for key, sparkline in group %}
                                {{ macros.singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) }}
                            {% endfor %}
                        </div>
                    {% endif %}
                {% endfor %}
            {% endif %}

    {% if not isWidget %}
            <br style=\"clear:left\"/>
        </div>
        <div class=\"col m6\">
    {% endif %}

            {% if sparklines|length == 1 %}
            {% for key, sparkline in sparklines %}
                {% if loop.index0 is odd %}
                    {{ macros.singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) }}
                {% endif %}
            {% endfor %}
            {% else %}
                {% for group in sparklines %}
                    {% if loop.index0 is odd %}
                        <div>
                            {% for key, sparkline in group %}
                                {{ macros.singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) }}
                            {% endfor %}
                        </div>
                    {% endif %}
                {% endfor %}
            {% endif %}

            <br style=\"clear:left\"/>

    {% if not isWidget %}
        </div>
    </div>
    {% endif %}

    {%  if areSparklinesLinkable %}
        {% include \"_sparklineFooter.twig\" %}
    {% endif %}

    {% if footerMessage is not empty %}
        <div class='datatableFooterMessage'>{{ footerMessage | raw }}</div>
    {% endif %}
{% if not isWidget %}
        </div></div>
{% endif %}", "@CoreVisualizations/_dataTableViz_sparklines.twig", "/var/www/zinecat.org/matomo/plugins/CoreVisualizations/templates/_dataTableViz_sparklines.twig");
    }
}
