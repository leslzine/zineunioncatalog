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

/* @CoreHome/_dataTableHead.twig */
class __TwigTemplate_2940514316a9bd1eadd027e9e232891ac03751ed108963ce009cef9ef7f04574 extends \Twig\Template
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
        $context["dimensions"] = (($this->getAttribute(($context["dataTable"] ?? null), "getMetadata", [0 => "dimensions"], "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["dataTable"] ?? null), "getMetadata", [0 => "dimensions"], "method"), [])) : ([]));
        // line 2
        echo "<thead>
   <tr>
       ";
        // line 4
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
            // line 5
            echo "           <th class=\"";
            if ($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "enable_sort", [])) {
                echo "sortable";
            }
            echo " ";
            if ($this->getAttribute($context["loop"], "first", [])) {
                echo "first";
            } elseif ($this->getAttribute($context["loop"], "last", [])) {
                echo "last";
            }
            echo " ";
            if ((($context["column"] == "label") || twig_in_filter($context["column"], ($context["dimensions"] ?? $this->getContext($context, "dimensions"))))) {
                echo "label";
            }
            echo "\" id=\"";
            echo \Piwik\piwik_escape_filter($this->env, $context["column"], "html", null, true);
            echo "\">
               ";
            // line 6
            if ( !twig_test_empty((($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "metrics_documentation", [], "any", false, true), $context["column"], [], "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "metrics_documentation", [], "any", false, true), $context["column"], [], "array"))) : ("")))) {
                // line 7
                echo "                   <div class=\"columnDocumentation\">
                       <div class=\"columnDocumentationTitle\">
                           <span class=\"icon-help\"></span>
                           ";
                // line 10
                echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [(($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "translations", [], "any", false, true), $context["column"], [], "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "translations", [], "any", false, true), $context["column"], [], "array"), $context["column"])) : ($context["column"]))]);
                echo "
                       </div>
                       ";
                // line 12
                echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "metrics_documentation", []), $context["column"], [], "array")]);
                echo "
                   </div>
               ";
            }
            // line 15
            echo "               <div id=\"thDIV\" class=\"thDIV\">";
            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [(($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "translations", [], "any", false, true), $context["column"], [], "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "translations", [], "any", false, true), $context["column"], [], "array"), $context["column"])) : ($context["column"]))]);
            echo "</div>
           </th>
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
        // line 18
        echo "   </tr>
</thead>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableHead.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 18,  90 => 15,  84 => 12,  79 => 10,  74 => 7,  72 => 6,  53 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set dimensions = dataTable.getMetadata('dimensions')|default([]) %}
<thead>
   <tr>
       {% for column in properties.columns_to_display %}
           <th class=\"{% if properties.enable_sort %}sortable{% endif %} {% if loop.first %}first{% elseif loop.last %}last{% endif %} {% if column == 'label' or column in dimensions %}label{% endif %}\" id=\"{{ column }}\">
               {% if properties.metrics_documentation[column]|default is not empty %}
                   <div class=\"columnDocumentation\">
                       <div class=\"columnDocumentationTitle\">
                           <span class=\"icon-help\"></span>
                           {{ properties.translations[column]|default(column)|rawSafeDecoded }}
                       </div>
                       {{ properties.metrics_documentation[column]|rawSafeDecoded|raw }}
                   </div>
               {% endif %}
               <div id=\"thDIV\" class=\"thDIV\">{{ properties.translations[column]|default(column)|rawSafeDecoded }}</div>
           </th>
       {% endfor %}
   </tr>
</thead>
", "@CoreHome/_dataTableHead.twig", "/var/www/zinecat.org/matomo/plugins/CoreHome/templates/_dataTableHead.twig");
    }
}
