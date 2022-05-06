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

/* @Annotations/getEvolutionIcons.twig */
class __TwigTemplate_458aef51d2f8bce6fd0cabc1890d7e0d040ab91765226d1697d18fa884796a9f extends \Twig\Template
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
        echo "<div class=\"evolution-annotations\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annotationCounts"] ?? $this->getContext($context, "annotationCounts")));
        foreach ($context['_seq'] as $context["_key"] => $context["dateCountPair"]) {
            // line 3
            echo "        ";
            $context["date"] = $this->getAttribute($context["dateCountPair"], 0, [], "array");
            // line 4
            echo "        ";
            $context["counts"] = $this->getAttribute($context["dateCountPair"], 1, [], "array");
            // line 5
            echo "        <span data-date=\"";
            echo \Piwik\piwik_escape_filter($this->env, ($context["date"] ?? $this->getContext($context, "date")), "html", null, true);
            echo "\" data-count=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["counts"] ?? $this->getContext($context, "counts")), "count", []), "html", null, true);
            echo "\" data-starred=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["counts"] ?? $this->getContext($context, "counts")), "starred", []), "html", null, true);
            echo "\"
              ";
            // line 6
            if (($this->getAttribute(($context["counts"] ?? $this->getContext($context, "counts")), "count", []) == 0)) {
                echo "title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Annotations_AddAnnotationsFor", ($context["date"] ?? $this->getContext($context, "date"))]), "html", null, true);
                echo "\"
              ";
            } elseif (($this->getAttribute(            // line 7
($context["counts"] ?? $this->getContext($context, "counts")), "count", []) == 1)) {
                echo "title=\"";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Annotations_AnnotationOnDate", ($context["date"] ?? $this->getContext($context, "date")), \Piwik\piwik_escape_filter($this->env, $this->getAttribute(                // line 8
($context["counts"] ?? $this->getContext($context, "counts")), "note", []), "html_attr")]);
                echo "
";
                // line 9
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Annotations_ClickToEditOrAdd"]), "html", null, true);
                echo "\"
              ";
            } else {
                // line 10
                echo "}title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Annotations_ViewAndAddAnnotations", ($context["date"] ?? $this->getContext($context, "date"))]), "html", null, true);
                echo "\"";
            }
            echo ">
            <span class=\"icon-annotation ";
            // line 11
            if (($this->getAttribute(($context["counts"] ?? $this->getContext($context, "counts")), "starred", []) > 0)) {
                echo "starred";
            }
            echo "\"/>
        </span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dateCountPair'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@Annotations/getEvolutionIcons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 14,  77 => 11,  70 => 10,  65 => 9,  61 => 8,  58 => 7,  52 => 6,  43 => 5,  40 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"evolution-annotations\">
    {% for dateCountPair in annotationCounts %}
        {% set date=dateCountPair[0] %}
        {% set counts=dateCountPair[1] %}
        <span data-date=\"{{ date }}\" data-count=\"{{ counts.count }}\" data-starred=\"{{ counts.starred }}\"
              {% if counts.count == 0 %}title=\"{{ 'Annotations_AddAnnotationsFor'|translate(date) }}\"
              {% elseif counts.count == 1 %}title=\"{{ 'Annotations_AnnotationOnDate'|translate(date,
                  (counts.note|e('html_attr')))|raw }}
{{ 'Annotations_ClickToEditOrAdd'|translate }}\"
              {% else %}}title=\"{{ 'Annotations_ViewAndAddAnnotations'|translate(date) }}\"{% endif %}>
            <span class=\"icon-annotation {% if counts.starred > 0 %}starred{% endif %}\"/>
        </span>
    {% endfor %}
</div>
", "@Annotations/getEvolutionIcons.twig", "/var/www/zinecat.org/matomo/plugins/Annotations/templates/getEvolutionIcons.twig");
    }
}
