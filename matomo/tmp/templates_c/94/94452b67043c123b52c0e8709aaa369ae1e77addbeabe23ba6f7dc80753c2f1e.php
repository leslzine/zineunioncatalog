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

/* @CoreHome/_dataTableFooter.twig */
class __TwigTemplate_d0c38555d9e75bcb2c1c8cd44113fab3d53c282980fe468610cd01a4410e444a extends \Twig\Template
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
        echo "<div class=\"dataTableFeatures\">
    <div class=\"dataTableFooterNavigation\">

        ";
        // line 4
        if (( !($context["isDataTableEmpty"] ?? $this->getContext($context, "isDataTableEmpty")) && ($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_offset_information", []) || $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_pagination_control", [])))) {
            // line 5
            echo "            <div class=\"row dataTablePaginationControl\">
                ";
            // line 6
            if ($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_pagination_control", [])) {
                // line 7
                echo "                    <span class=\"dataTablePrevious\">&lsaquo; ";
                if ($this->getAttribute(($context["clientSideParameters"] ?? null), "dataTablePreviousIsFirst", [], "any", true, true)) {
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_First"]), "html", null, true);
                } else {
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Previous"]), "html", null, true);
                }
                echo "</span>
                    &nbsp;
                ";
            }
            // line 10
            echo "                ";
            if ($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_offset_information", [])) {
                // line 11
                echo "                    <span class=\"dataTablePages\"></span>
                ";
            }
            // line 13
            echo "                ";
            if ($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_pagination_control", [])) {
                // line 14
                echo "                    &nbsp;<span class=\"dataTableNext\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Next"]), "html", null, true);
                echo " &rsaquo;</span>
                ";
            }
            // line 16
            echo "            </div>
        ";
        }
        // line 18
        echo "
        <div class=\"row\">
            <div class=\"col s9 m9 dataTableControls\">
                ";
        // line 21
        $this->loadTemplate("@CoreHome/_dataTableActions.twig", "@CoreHome/_dataTableFooter.twig", 21)->display($context);
        // line 22
        echo "            </div>

            ";
        // line 24
        if (( !($context["isDataTableEmpty"] ?? $this->getContext($context, "isDataTableEmpty")) && (($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_footer_icons", []) && $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_pagination_control", [])) || $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_limit_control", [])))) {
            // line 25
            echo "                <div class=\"col s3 m3 limitSelection\"></div>
            ";
        }
        // line 27
        echo "        </div>

        ";
        // line 29
        if (( !twig_test_empty($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "related_reports", [])) && $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_related_reports", []))) {
            // line 30
            echo "            <div class=\"row datatableRelatedReports\">
                ";
            // line 31
            echo $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "related_reports_title", []);
            echo "
                <ul style=\"list-style:none;";
            // line 32
            if ((twig_length_filter($this->env, $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "related_reports", [])) == 1)) {
                echo "display:inline-block;";
            }
            echo "}\">
                    <li><span href=\"";
            // line 33
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "self_url", []), "html", null, true);
            echo "\" style=\"display:none;\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "title", []), "html", null, true);
            echo "</span></li>

                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "related_reports", []));
            foreach ($context['_seq'] as $context["reportUrl"] => $context["reportTitle"]) {
                // line 36
                echo "                        <li><span href=\"";
                echo \Piwik\piwik_escape_filter($this->env, $context["reportUrl"], "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $context["reportTitle"], "html", null, true);
                echo "</span></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['reportUrl'], $context['reportTitle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                </ul>
            </div>
        ";
        }
        // line 41
        echo "    </div>

    <span class=\"loadingPiwik\" style=\"display:none;\"><img src=\"plugins/Morpheus/images/loading-blue.gif\"/> ";
        // line 43
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_LoadingData"]), "html", null, true);
        echo "</span>

    ";
        // line 45
        if (($this->getAttribute(($context["properties"] ?? null), "show_footer_message", [], "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_footer_message", [])))) {
            // line 46
            echo "        <div class='datatableFooterMessage'>";
            echo $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "show_footer_message", []);
            echo "</div>
    ";
        }
        // line 48
        echo "
</div>

<span class=\"loadingPiwikBelow\" style=\"display:none;\"><img src=\"plugins/Morpheus/images/loading-blue.gif\"/> ";
        // line 51
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_LoadingData"]), "html", null, true);
        echo "</span>

<div class=\"dataTableSpacer\"></div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableFooter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 51,  153 => 48,  147 => 46,  145 => 45,  140 => 43,  136 => 41,  131 => 38,  120 => 36,  116 => 35,  109 => 33,  103 => 32,  99 => 31,  96 => 30,  94 => 29,  90 => 27,  86 => 25,  84 => 24,  80 => 22,  78 => 21,  73 => 18,  69 => 16,  63 => 14,  60 => 13,  56 => 11,  53 => 10,  42 => 7,  40 => 6,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"dataTableFeatures\">
    <div class=\"dataTableFooterNavigation\">

        {% if not isDataTableEmpty and (properties.show_offset_information or properties.show_pagination_control) %}
            <div class=\"row dataTablePaginationControl\">
                {% if properties.show_pagination_control %}
                    <span class=\"dataTablePrevious\">&lsaquo; {% if clientSideParameters.dataTablePreviousIsFirst is defined %}{{ 'General_First'|translate }}{% else %}{{ 'General_Previous'|translate }}{% endif %}</span>
                    &nbsp;
                {% endif %}
                {% if properties.show_offset_information %}
                    <span class=\"dataTablePages\"></span>
                {% endif %}
                {% if properties.show_pagination_control %}
                    &nbsp;<span class=\"dataTableNext\">{{ 'General_Next'|translate }} &rsaquo;</span>
                {% endif %}
            </div>
        {% endif %}

        <div class=\"row\">
            <div class=\"col s9 m9 dataTableControls\">
                {% include \"@CoreHome/_dataTableActions.twig\" %}
            </div>

            {% if not isDataTableEmpty and (properties.show_footer_icons and properties.show_pagination_control or properties.show_limit_control) %}
                <div class=\"col s3 m3 limitSelection\"></div>
            {% endif %}
        </div>

        {% if (properties.related_reports is not empty) and properties.show_related_reports %}
            <div class=\"row datatableRelatedReports\">
                {{ properties.related_reports_title|raw }}
                <ul style=\"list-style:none;{% if properties.related_reports|length == 1 %}display:inline-block;{% endif %}}\">
                    <li><span href=\"{{ properties.self_url }}\" style=\"display:none;\">{{ properties.title }}</span></li>

                    {% for reportUrl,reportTitle in properties.related_reports %}
                        <li><span href=\"{{ reportUrl }}\">{{ reportTitle }}</span></li>
                    {% endfor %}
                </ul>
            </div>
        {% endif %}
    </div>

    <span class=\"loadingPiwik\" style=\"display:none;\"><img src=\"plugins/Morpheus/images/loading-blue.gif\"/> {{ 'General_LoadingData'|translate }}</span>

    {% if properties.show_footer_message is defined and properties.show_footer_message is not empty %}
        <div class='datatableFooterMessage'>{{ properties.show_footer_message | raw }}</div>
    {% endif %}

</div>

<span class=\"loadingPiwikBelow\" style=\"display:none;\"><img src=\"plugins/Morpheus/images/loading-blue.gif\"/> {{ 'General_LoadingData'|translate }}</span>

<div class=\"dataTableSpacer\"></div>
", "@CoreHome/_dataTableFooter.twig", "/var/www/zinecat.org/matomo/plugins/CoreHome/templates/_dataTableFooter.twig");
    }
}
