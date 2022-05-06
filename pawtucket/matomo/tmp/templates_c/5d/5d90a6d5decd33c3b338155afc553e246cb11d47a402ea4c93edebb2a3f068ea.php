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

/* @Diagnostics/configfile.twig */
class __TwigTemplate_05a86664b44fdcd1ffda56a0773430b3a1f3eff5735b1c80d501404a29211a28 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("admin.twig", "@Diagnostics/configfile.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        // line 21
        echo "<div piwik-content-block
     content-title=\"";
        // line 22
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Diagnostics_ConfigFileTitle"]), "html_attr");
        echo "\" feature=\"true\">
    <p>
        ";
        // line 24
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Diagnostics_ConfigFileIntroduction", "<code>\"config/config.ini.php\"</code>"]);
        echo "
        ";
        // line 25
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Diagnostics_HideUnchanged", "<a ng-click=\"hideGlobalConfigValues=!hideGlobalConfigValues\">", "</a>"]);
        echo "

        <h3>";
        // line 27
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Diagnostics_Sections"]), "html", null, true);
        echo "</h3>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allConfigValues"] ?? $this->getContext($context, "allConfigValues")));
        foreach ($context['_seq'] as $context["category"] => $context["values"]) {
            // line 29
            echo "            <a href=\"#";
            echo \Piwik\piwik_escape_filter($this->env, $context["category"], "html_attr");
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</a><br />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </p>

    <table class=\"diagnostics configfile\" piwik-content-table>
        <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allConfigValues"] ?? $this->getContext($context, "allConfigValues")));
        foreach ($context['_seq'] as $context["category"] => $context["configValues"]) {
            // line 36
            echo "            <tr><td colspan=\"3\"><a name=\"";
            echo \Piwik\piwik_escape_filter($this->env, $context["category"], "html_attr");
            echo "\"></a><h3>";
            echo \Piwik\piwik_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</h3></td></tr>

            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["configValues"]);
            foreach ($context['_seq'] as $context["key"] => $context["configEntry"]) {
                // line 39
                echo "                <tr ";
                if ($this->getAttribute($context["configEntry"], "isCustomValue", [])) {
                    echo "class=\"custom-value\"";
                } else {
                    echo "ng-hide=\"hideGlobalConfigValues\"";
                }
                echo ">
                    <td class=\"name\">";
                // line 40
                echo \Piwik\piwik_escape_filter($this->env, $context["key"], "html", null, true);
                if (twig_test_iterable($this->getAttribute($context["configEntry"], "value", []))) {
                    echo "[]";
                }
                echo "</td>
                    <td class=\"value\">
                        ";
                // line 42
                echo $this->getAttribute($this, "humanReadableValue", [0 => $this->getAttribute($context["configEntry"], "value", [])], "method");
                echo "
                    </td>
                    <td class=\"description\">
                        ";
                // line 45
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["configEntry"], "description", []), "html", null, true);
                echo "

                        ";
                // line 47
                if ((($this->getAttribute($context["configEntry"], "isCustomValue", []) || (null === $this->getAttribute($context["configEntry"], "value", []))) &&  !(null === $this->getAttribute($context["configEntry"], "defaultValue", [])))) {
                    // line 48
                    echo "                            ";
                    if ($this->getAttribute($context["configEntry"], "description", [])) {
                        echo "<br />";
                    }
                    // line 49
                    echo "
                            ";
                    // line 50
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Default"]), "html", null, true);
                    echo ":
                            <span class=\"defaultValue\">";
                    // line 51
                    echo $this->getAttribute($this, "humanReadableValue", [0 => $this->getAttribute($context["configEntry"], "defaultValue", [])], "method");
                    echo "<span>
                        ";
                }
                // line 53
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['configEntry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['configValues'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>

</div>
";
    }

    // line 3
    public function gethumanReadableValue($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            echo "    ";
            if (call_user_func_array($this->env->getTest('false')->getCallable(), [($context["value"] ?? $this->getContext($context, "value"))])) {
                // line 5
                echo "        false
    ";
            } elseif (call_user_func_array($this->env->getTest('true')->getCallable(), [            // line 6
($context["value"] ?? $this->getContext($context, "value"))])) {
                // line 7
                echo "        true
    ";
            } elseif ((null ===             // line 8
($context["value"] ?? $this->getContext($context, "value")))) {
                // line 9
                echo "    ";
            } elseif (call_user_func_array($this->env->getTest('emptyString')->getCallable(), [($context["value"] ?? $this->getContext($context, "value"))])) {
                // line 10
                echo "        ''
    ";
            } elseif (twig_test_empty(            // line 11
($context["value"] ?? $this->getContext($context, "value")))) {
                // line 12
                echo "        []
    ";
            } elseif (twig_test_iterable(            // line 13
($context["value"] ?? $this->getContext($context, "value")))) {
                // line 14
                echo "        <div class=\"pre\">";
                echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["value"] ?? $this->getContext($context, "value")), twig_constant("JSON_PRETTY_PRINT")), "html", null, true);
                echo "</div>
    ";
            } else {
                // line 16
                echo "        ";
                echo \Piwik\piwik_escape_filter($this->env, twig_join_filter(($context["value"] ?? $this->getContext($context, "value")), ", "), "html", null, true);
                echo "
    ";
            }
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
        return "@Diagnostics/configfile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 16,  207 => 14,  205 => 13,  202 => 12,  200 => 11,  197 => 10,  194 => 9,  192 => 8,  189 => 7,  187 => 6,  184 => 5,  181 => 4,  169 => 3,  161 => 57,  155 => 56,  147 => 53,  142 => 51,  138 => 50,  135 => 49,  130 => 48,  128 => 47,  123 => 45,  117 => 42,  109 => 40,  100 => 39,  96 => 38,  88 => 36,  84 => 35,  78 => 31,  67 => 29,  63 => 28,  59 => 27,  54 => 25,  50 => 24,  45 => 22,  42 => 21,  39 => 20,  29 => 1,);
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

{% macro humanReadableValue(value) %}
    {% if value is false %}
        false
    {% elseif value is true %}
        true
    {% elseif value is null %}
    {% elseif value is emptyString %}
        ''
    {% elseif value is empty %}
        []
    {% elseif value is iterable %}
        <div class=\"pre\">{{ value|json_encode(constant('JSON_PRETTY_PRINT')) }}</div>
    {% else %}
        {{ value|join(', ') }}
    {% endif %}
{% endmacro %}

{% block content %}
<div piwik-content-block
     content-title=\"{{ 'Diagnostics_ConfigFileTitle'|translate|e('html_attr') }}\" feature=\"true\">
    <p>
        {{ 'Diagnostics_ConfigFileIntroduction'|translate('<code>\"config/config.ini.php\"</code>')|raw }}
        {{ 'Diagnostics_HideUnchanged'|translate('<a ng-click=\"hideGlobalConfigValues=!hideGlobalConfigValues\">', '</a>')|raw }}

        <h3>{{ 'Diagnostics_Sections'|translate }}</h3>
        {% for category, values in allConfigValues %}
            <a href=\"#{{ category|e('html_attr') }}\">{{ category }}</a><br />
        {% endfor %}
    </p>

    <table class=\"diagnostics configfile\" piwik-content-table>
        <tbody>
        {% for category, configValues in allConfigValues %}
            <tr><td colspan=\"3\"><a name=\"{{ category|e('html_attr') }}\"></a><h3>{{ category }}</h3></td></tr>

            {% for key, configEntry in configValues %}
                <tr {% if configEntry.isCustomValue %}class=\"custom-value\"{% else %}ng-hide=\"hideGlobalConfigValues\"{% endif %}>
                    <td class=\"name\">{{ key }}{% if configEntry.value is iterable %}[]{% endif %}</td>
                    <td class=\"value\">
                        {{ _self.humanReadableValue(configEntry.value) }}
                    </td>
                    <td class=\"description\">
                        {{ configEntry.description }}

                        {% if (configEntry.isCustomValue or configEntry.value is null) and configEntry.defaultValue is not null %}
                            {% if configEntry.description %}<br />{% endif %}

                            {{ 'General_Default'|translate }}:
                            <span class=\"defaultValue\">{{ _self.humanReadableValue(configEntry.defaultValue) }}<span>
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
        {% endfor %}
        </tbody>
    </table>

</div>
{% endblock %}
", "@Diagnostics/configfile.twig", "/var/www/zinecat.org/pawtucket/matomo/plugins/Diagnostics/templates/configfile.twig");
    }
}
