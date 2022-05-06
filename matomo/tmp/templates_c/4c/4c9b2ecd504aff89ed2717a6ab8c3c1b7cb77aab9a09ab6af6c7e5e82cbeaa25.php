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

/* @Live/_actionsList.twig */
class __TwigTemplate_70cddd974bb84ac60c327e67658f0102a6a9878967d54ac696ebb0eed4b1d8cc extends \Twig\Template
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
        $context["previousAction"] = false;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actionGroups"] ?? $this->getContext($context, "actionGroups")));
        foreach ($context['_seq'] as $context["_key"] => $context["actionGroup"]) {
            // line 3
            echo "    ";
            if ( !twig_test_empty($this->getAttribute($context["actionGroup"], "pageviewAction", []))) {
                // line 4
                echo "    ";
                echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Live.renderAction", $this->getAttribute($context["actionGroup"], "pageviewAction", []), ($context["previousAction"] ?? $this->getContext($context, "previousAction")), ($context["visitInfo"] ?? $this->getContext($context, "visitInfo"))]);
                echo "

    ";
                // line 6
                $context["previousAction"] = $this->getAttribute($context["actionGroup"], "pageviewAction", []);
                // line 7
                echo "    ";
            }
            // line 8
            echo "
    ";
            // line 9
            if (( !twig_test_empty($this->getAttribute($context["actionGroup"], "actionsOnPage", [])) ||  !twig_test_empty($this->getAttribute($context["actionGroup"], "refreshActions", [])))) {
                // line 10
                echo "    ";
                if ( !twig_test_empty($this->getAttribute($context["actionGroup"], "pageviewAction", []))) {
                    // line 11
                    echo "    <li class=\"pageviewActions\" data-view-count=\"";
                    echo \Piwik\piwik_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($context["actionGroup"], "refreshActions", [])) + 1), "html", null, true);
                    echo "\" data-actions-on-page=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["actionGroup"], "actionsOnPage", [])), "html", null, true);
                    echo "\">
        <ol class=\"actionList\">
    ";
                }
                // line 14
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["actionGroup"], "refreshActions", []));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 15
                    echo "
            ";
                    // line 16
                    echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Live.renderAction", $context["action"], ($context["previousAction"] ?? $this->getContext($context, "previousAction")), ($context["visitInfo"] ?? $this->getContext($context, "visitInfo"))]);
                    echo "

            ";
                    // line 18
                    $context["previousAction"] = $context["action"];
                    // line 19
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "        <li class=\"refresh-divider\"></li>
        ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["actionGroup"], "actionsOnPage", []));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 22
                    echo "
            ";
                    // line 23
                    echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Live.renderAction", $context["action"], ($context["previousAction"] ?? $this->getContext($context, "previousAction")), ($context["visitInfo"] ?? $this->getContext($context, "visitInfo"))]);
                    echo "

        ";
                    // line 25
                    $context["previousAction"] = $context["action"];
                    // line 26
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "    ";
                if ( !twig_test_empty($this->getAttribute($context["actionGroup"], "pageviewAction", []))) {
                    // line 28
                    echo "        <li class=\"actionsForPageExpander expanded\" style=\"display:none;\">
            <span>
                <a class=\"show-more-actions\" href=\"javascript:\" style=\"display:none;\">Show <span class=\"show-actions-count\"></span> more actions that occurred on this page...</a>
                <a class=\"show-less-actions\" href=\"javascript:\">Show less actions...</a>
            </span>
        </li>
        </ol>
    </li>
    ";
                }
                // line 37
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actionGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
";
        // line 40
        if ($this->getAttribute(($context["visitInfo"] ?? null), "truncatedActionsCount", [], "any", true, true)) {
            // line 41
            echo "    <li class=\"more\">
        <span class=\"icon-info\"></span>
        ";
            // line 43
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_MorePagesNotDisplayed"]), "html", null, true);
            echo "
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "@Live/_actionsList.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 43,  137 => 41,  135 => 40,  132 => 39,  125 => 37,  114 => 28,  111 => 27,  105 => 26,  103 => 25,  98 => 23,  95 => 22,  91 => 21,  88 => 20,  82 => 19,  80 => 18,  75 => 16,  72 => 15,  67 => 14,  58 => 11,  55 => 10,  53 => 9,  50 => 8,  47 => 7,  45 => 6,  39 => 4,  36 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set previousAction = false %}
{% for actionGroup in actionGroups %}
    {% if actionGroup.pageviewAction is not empty %}
    {{ postEvent('Live.renderAction', actionGroup.pageviewAction, previousAction, visitInfo) }}

    {% set previousAction = actionGroup.pageviewAction %}
    {% endif %}

    {% if actionGroup.actionsOnPage is not empty or actionGroup.refreshActions is not empty %}
    {% if actionGroup.pageviewAction is not empty %}
    <li class=\"pageviewActions\" data-view-count=\"{{ actionGroup.refreshActions|length + 1 }}\" data-actions-on-page=\"{{ actionGroup.actionsOnPage|length }}\">
        <ol class=\"actionList\">
    {% endif %}
        {% for action in actionGroup.refreshActions %}

            {{ postEvent('Live.renderAction', action, previousAction, visitInfo) }}

            {% set previousAction = action %}
        {% endfor %}
        <li class=\"refresh-divider\"></li>
        {% for action in actionGroup.actionsOnPage %}

            {{ postEvent('Live.renderAction', action, previousAction, visitInfo) }}

        {% set previousAction = action %}
        {% endfor %}
    {% if actionGroup.pageviewAction is not empty %}
        <li class=\"actionsForPageExpander expanded\" style=\"display:none;\">
            <span>
                <a class=\"show-more-actions\" href=\"javascript:\" style=\"display:none;\">Show <span class=\"show-actions-count\"></span> more actions that occurred on this page...</a>
                <a class=\"show-less-actions\" href=\"javascript:\">Show less actions...</a>
            </span>
        </li>
        </ol>
    </li>
    {% endif %}
    {% endif %}
{% endfor %}

{% if visitInfo.truncatedActionsCount is defined %}
    <li class=\"more\">
        <span class=\"icon-info\"></span>
        {{ 'Live_MorePagesNotDisplayed'|translate }}
    </li>
{% endif %}", "@Live/_actionsList.twig", "/var/www/zinecat.org/matomo/plugins/Live/templates/_actionsList.twig");
    }
}
