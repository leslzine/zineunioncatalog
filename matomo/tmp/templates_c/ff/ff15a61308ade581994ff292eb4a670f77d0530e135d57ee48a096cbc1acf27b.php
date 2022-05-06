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

/* @Installation/_systemCheckSection.twig */
class __TwigTemplate_53163a0d3d5642fb699f35e7e7536c11035a33cb35613ae0c812005208ffa33a extends \Twig\Template
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
        $context["local"] = $this;
        // line 2
        echo "
<table class=\"entityTable system-check\" id=\"systemCheckRequired\" piwik-content-table>
    ";
        // line 4
        echo $context["local"]->getdiagnosticTable($this->getAttribute(($context["diagnosticReport"] ?? $this->getContext($context, "diagnosticReport")), "getMandatoryDiagnosticResults", [], "method"));
        echo "
</table>

<h3>";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_Optional"]), "html", null, true);
        echo "</h3>

<table class=\"entityTable system-check\" id=\"systemCheckOptional\" piwik-content-table>
    ";
        // line 10
        echo $context["local"]->getdiagnosticTable($this->getAttribute(($context["diagnosticReport"] ?? $this->getContext($context, "diagnosticReport")), "getOptionalDiagnosticResults", [], "method"));
        echo "
</table>

";
    }

    // line 13
    public function getdiagnosticTable($__results__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "results" => $__results__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 14
            echo "
    ";
            // line 15
            $context["error"] = twig_constant("Piwik\\Plugins\\Diagnostics\\Diagnostic\\DiagnosticResult::STATUS_ERROR");
            // line 16
            echo "    ";
            $context["warning"] = twig_constant("Piwik\\Plugins\\Diagnostics\\Diagnostic\\DiagnosticResult::STATUS_WARNING");
            // line 17
            echo "
    ";
            // line 18
            $context["errorIcon"] = ('' === $tmp = " <span class=\"icon-error\"></span> ") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 19
            echo "    ";
            $context["warningIcon"] = ('' === $tmp = " <span class=\"icon-warning\"></span> ") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 20
            echo "    ";
            $context["okIcon"] = ('' === $tmp = " <span class=\"icon-ok\"></span> ") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 21
            echo "
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["results"] ?? $this->getContext($context, "results")));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 23
                echo "        <tr>
            <td>";
                // line 24
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["result"], "label", []), "html", null, true);
                echo "</td>
            <td>
                ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["result"], "items", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 27
                    echo "
                    ";
                    // line 28
                    if (($this->getAttribute($context["item"], "status", []) == ($context["error"] ?? $this->getContext($context, "error")))) {
                        // line 29
                        echo "                        ";
                        echo \Piwik\piwik_escape_filter($this->env, ($context["errorIcon"] ?? $this->getContext($context, "errorIcon")), "html", null, true);
                        echo " <span class=\"err\">";
                        echo $this->getAttribute($context["item"], "comment", []);
                        echo "</span>
                    ";
                    } elseif (($this->getAttribute(                    // line 30
$context["item"], "status", []) == ($context["warning"] ?? $this->getContext($context, "warning")))) {
                        // line 31
                        echo "                        ";
                        echo \Piwik\piwik_escape_filter($this->env, ($context["warningIcon"] ?? $this->getContext($context, "warningIcon")), "html", null, true);
                        echo " ";
                        echo $this->getAttribute($context["item"], "comment", []);
                        echo "
                    ";
                    } else {
                        // line 33
                        echo "                        ";
                        echo \Piwik\piwik_escape_filter($this->env, ($context["okIcon"] ?? $this->getContext($context, "okIcon")), "html", null, true);
                        echo " ";
                        echo $this->getAttribute($context["item"], "comment", []);
                        echo "
                    ";
                    }
                    // line 35
                    echo "
                    <br/>

                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "            </td>
        </tr>
        ";
                // line 41
                if ($this->getAttribute($context["result"], "longErrorMessage", [])) {
                    // line 42
                    echo "            <tr>
                <td colspan=\"2\" class=\"error\" style=\"font-size: small;\">
                    ";
                    // line 44
                    echo $this->getAttribute($context["result"], "longErrorMessage", []);
                    echo "
                </td>
            </tr>
        ";
                }
                // line 48
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "
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
        return "@Installation/_systemCheckSection.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 49,  162 => 48,  155 => 44,  151 => 42,  149 => 41,  145 => 39,  136 => 35,  128 => 33,  120 => 31,  118 => 30,  111 => 29,  109 => 28,  106 => 27,  102 => 26,  97 => 24,  94 => 23,  90 => 22,  87 => 21,  84 => 20,  81 => 19,  79 => 18,  76 => 17,  73 => 16,  71 => 15,  68 => 14,  56 => 13,  48 => 10,  42 => 7,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as local %}

<table class=\"entityTable system-check\" id=\"systemCheckRequired\" piwik-content-table>
    {{ local.diagnosticTable(diagnosticReport.getMandatoryDiagnosticResults()) }}
</table>

<h3>{{ 'Installation_Optional'|translate }}</h3>

<table class=\"entityTable system-check\" id=\"systemCheckOptional\" piwik-content-table>
    {{ local.diagnosticTable(diagnosticReport.getOptionalDiagnosticResults()) }}
</table>

{% macro diagnosticTable(results) %}

    {% set error = constant('Piwik\\\\Plugins\\\\Diagnostics\\\\Diagnostic\\\\DiagnosticResult::STATUS_ERROR') %}
    {% set warning = constant('Piwik\\\\Plugins\\\\Diagnostics\\\\Diagnostic\\\\DiagnosticResult::STATUS_WARNING') %}

    {% set errorIcon %} <span class=\"icon-error\"></span> {% endset %}
    {% set warningIcon %} <span class=\"icon-warning\"></span> {% endset %}
    {% set okIcon %} <span class=\"icon-ok\"></span> {% endset %}

    {% for result in results %}
        <tr>
            <td>{{ result.label }}</td>
            <td>
                {% for item in result.items %}

                    {% if item.status == error %}
                        {{ errorIcon }} <span class=\"err\">{{ item.comment|raw }}</span>
                    {% elseif item.status == warning %}
                        {{ warningIcon }} {{ item.comment|raw }}
                    {% else %}
                        {{ okIcon }} {{ item.comment|raw }}
                    {% endif %}

                    <br/>

                {% endfor %}
            </td>
        </tr>
        {% if result.longErrorMessage %}
            <tr>
                <td colspan=\"2\" class=\"error\" style=\"font-size: small;\">
                    {{ result.longErrorMessage|raw }}
                </td>
            </tr>
        {% endif %}
    {% endfor %}

{% endmacro %}
", "@Installation/_systemCheckSection.twig", "/var/www/zinecat.org/matomo/plugins/Installation/templates/_systemCheckSection.twig");
    }
}
