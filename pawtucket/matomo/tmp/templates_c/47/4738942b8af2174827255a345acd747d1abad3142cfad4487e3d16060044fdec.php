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

/* @CoreHome/getSystemSummary.twig */
class __TwigTemplate_23445f3ea35c1c3f5a0a929a9cbdf281481a8b5025b7951c9d49f9c4d4a2ff7b extends \Twig\Template
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
        echo "<div class=\"widgetBody systemSummary\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        ";
            if ( !twig_test_empty($context["item"])) {
                // line 4
                echo "            <div class=\"systemSummaryItem ";
                if ($this->getAttribute($context["item"], "getKey", [])) {
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["item"], "getKey", []), "html", null, true);
                }
                echo "\">
                ";
                // line 5
                if ($this->getAttribute($context["item"], "getIcon", [])) {
                    echo "<span class=\"icon ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["item"], "getIcon", []), "html", null, true);
                    echo "\"></span>";
                }
                // line 6
                echo "
                ";
                // line 7
                if ($this->getAttribute($context["item"], "getUrlParams", [])) {
                    // line 8
                    echo "<a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [$this->getAttribute($context["item"], "getUrlParams", [])]), "html", null, true);
                    echo "\" class=\"itemLabel\">
                ";
                } else {
                    // line 10
                    echo "<span class=\"itemLabel\">
                ";
                }
                // line 13
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["item"], "getLabel", []), "html", null, true);
                if ($this->getAttribute($context["item"], "getValue", [])) {
                    echo ":";
                }
                // line 15
                if ($this->getAttribute($context["item"], "getUrlParams", [])) {
                    // line 16
                    echo "                    </a>";
                } else {
                    // line 18
                    echo "                    </span>";
                }
                // line 20
                echo "
                ";
                // line 21
                if ($this->getAttribute($context["item"], "getValue", [])) {
                    echo "<span class=\"itemValue\">";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["item"], "getValue", []), "html", null, true);
                    echo "</span>";
                }
                // line 22
                echo "            </div>
        ";
            }
            // line 24
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    <br />
</div>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/getSystemSummary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  94 => 24,  90 => 22,  84 => 21,  81 => 20,  78 => 18,  75 => 16,  73 => 15,  68 => 13,  64 => 10,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  40 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widgetBody systemSummary\">
    {% for item in items %}
        {% if item is not empty %}
            <div class=\"systemSummaryItem {% if item.getKey %}{{ item.getKey }}{% endif %}\">
                {% if item.getIcon %}<span class=\"icon {{ item.getIcon }}\"></span>{% endif %}

                {% if item.getUrlParams -%}
                    <a href=\"{{ linkTo(item.getUrlParams) }}\" class=\"itemLabel\">
                {% else -%}
                    <span class=\"itemLabel\">
                {% endif -%}

                {{ item.getLabel }}{% if item.getValue %}:{% endif %}

                {%- if item.getUrlParams %}
                    </a>
                {%- else %}
                    </span>
                {%- endif %}

                {% if item.getValue %}<span class=\"itemValue\">{{ item.getValue }}</span>{% endif %}
            </div>
        {% endif %}
    {% endfor %}
    <br />
</div>", "@CoreHome/getSystemSummary.twig", "/var/www/zinecat.org/pawtucket/matomo/plugins/CoreHome/templates/getSystemSummary.twig");
    }
}
