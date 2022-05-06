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

/* @CoreHome/_notifications.twig */
class __TwigTemplate_077b93274e411f11006bf93fd301816e35bbf0b83ddad5622de5dff881cda419 extends \Twig\Template
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
        echo "<div id=\"notificationContainer\">
    ";
        // line 2
        if (twig_length_filter($this->env, ($context["notifications"] ?? $this->getContext($context, "notifications")))) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? $this->getContext($context, "notifications")));
            foreach ($context['_seq'] as $context["notificationId"] => $context["n"]) {
                // line 4
                echo "
            ";
                // line 5
                echo call_user_func_array($this->env->getFilter('notification')->getCallable(), [$this->getAttribute($context["n"], "message", []), ["id" => $context["notificationId"], "type" => $this->getAttribute($context["n"], "type", []), "title" => $this->getAttribute($context["n"], "title", []), "noclear" => $this->getAttribute($context["n"], "hasNoClear", []), "context" => $this->getAttribute($context["n"], "context", []), "raw" => $this->getAttribute($context["n"], "raw", [])], false]);
                echo "

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['notificationId'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    ";
        }
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_notifications.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  52 => 8,  43 => 5,  40 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"notificationContainer\">
    {% if notifications|length %}
        {% for notificationId, n in notifications %}

            {{ n.message|notification({'id': notificationId, 'type': n.type, 'title': n.title, 'noclear': n.hasNoClear, 'context': n.context, 'raw': n.raw}, false) }}

        {% endfor %}
    {% endif %}
</div>
", "@CoreHome/_notifications.twig", "/var/www/zinecat.org/matomo/plugins/CoreHome/templates/_notifications.twig");
    }
}
