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

/* contentBlock.twig */
class __TwigTemplate_4f8b7aa1204ba9f819ba9076cc1d23a51d9ce9c85a9f6a3cd22998a2a81de0a7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'helpText' => [$this, 'block_helpText'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"card\">
    <div class=\"card-content\">
        ";
        // line 3
        if (((isset($context["title"]) || array_key_exists("title", $context)) && ($context["title"] ?? $this->getContext($context, "title")))) {
            // line 4
            echo "            <h2 class=\"card-title\"
                  ";
            // line 5
            if ((((isset($context["rate"]) || array_key_exists("rate", $context)) && ($context["rate"] ?? $this->getContext($context, "rate"))) && call_user_func_array($this->env->getTest('true')->getCallable(), [($context["rate"] ?? $this->getContext($context, "rate"))]))) {
                echo "piwik-enriched-headline=\"";
                echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html_attr");
                echo "\"
                  ";
            } elseif (((            // line 6
(isset($context["rate"]) || array_key_exists("rate", $context)) && ($context["rate"] ?? $this->getContext($context, "rate"))) && ($context["rate"] ?? $this->getContext($context, "rate")))) {
                echo "piwik-enriched-headline=\"";
                echo \Piwik\piwik_escape_filter($this->env, ($context["rate"] ?? $this->getContext($context, "rate")), "html_attr");
                echo "\"";
            }
            // line 7
            echo "            >";
            $this->displayBlock('helpText', $context, $blocks);
            echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "</h2>
        ";
        }
        // line 9
        echo "
        ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
</div>";
    }

    // line 7
    public function block_helpText($context, array $blocks = [])
    {
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        // line 11
        echo "        ";
    }

    public function getTemplateName()
    {
        return "contentBlock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 11,  75 => 10,  70 => 7,  65 => 12,  63 => 10,  60 => 9,  53 => 7,  47 => 6,  41 => 5,  38 => 4,  36 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
    <div class=\"card-content\">
        {% if title is defined and title %}
            <h2 class=\"card-title\"
                  {% if rate is defined and rate and rate is true %}piwik-enriched-headline=\"{{ title|e('html_attr') }}\"
                  {% elseif rate is defined and rate and rate %}piwik-enriched-headline=\"{{ rate|e('html_attr') }}\"{% endif %}
            >{% block helpText %}{% endblock %}{{ title }}</h2>
        {% endif %}

        {% block content %}
        {% endblock %}
    </div>
</div>", "contentBlock.twig", "/var/www/zinecat.org/matomo/plugins/Morpheus/templates/contentBlock.twig");
    }
}
