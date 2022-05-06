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

/* @Marketplace/getNewPluginsAdmin.twig */
class __TwigTemplate_7ec0514ca8376c55386202c0cf9e7546fa2367d41f064c5ec841db36879345f0 extends \Twig\Template
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
        echo "<div class=\"getNewPlugins isAdminPage\">
    <div class=\"row\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plugins"] ?? $this->getContext($context, "plugins")));
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 4
            echo "            <div class=\"col s12 m4\">

                <h3 class=\"pluginName\"
                    title=\"";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "description", []), "html_attr");
            echo "\"
                    piwik-plugin-name=\"";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", []), "html_attr");
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "displayName", []), "html", null, true);
            echo "</h3>
                <p class=\"description\"
                   title=\"";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "description", []), "html_attr");
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "description", []), "html", null, true);
            echo "</p>

                ";
            // line 12
            if (($this->getAttribute($context["plugin"], "screenshots", []) && $this->getAttribute($this->getAttribute($context["plugin"], "screenshots", [], "any", false, true), 0, [], "any", true, true))) {
                // line 13
                echo "                    <br />
                    <img piwik-plugin-name=\"";
                // line 14
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", []), "html_attr");
                echo "\"
                         class=\"screenshot\"
                         src=\"";
                // line 16
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "screenshots", []), 0, []), "html", null, true);
                echo "?w=600\" width=\"100%\" alt=\"\">
                ";
            }
            // line 18
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>

    <div class=\"widgetBody\">
        <a href=\"";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "Marketplace", "action" => "overview"]]), "html", null, true);
        echo "\"
            >";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_ViewAllMarketplacePlugins"]), "html", null, true);
        echo "</a>
    </div>

    <script type=\"text/javascript\">
        \$('.getNewPlugins .col .description').dotdotdot({
            watch: 'window'
        });
    </script>
</div>";
    }

    public function getTemplateName()
    {
        return "@Marketplace/getNewPluginsAdmin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  88 => 23,  83 => 20,  76 => 18,  71 => 16,  66 => 14,  63 => 13,  61 => 12,  54 => 10,  47 => 8,  43 => 7,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"getNewPlugins isAdminPage\">
    <div class=\"row\">
        {% for plugin in plugins %}
            <div class=\"col s12 m4\">

                <h3 class=\"pluginName\"
                    title=\"{{ plugin.description|e('html_attr') }}\"
                    piwik-plugin-name=\"{{ plugin.name|e('html_attr') }}\">{{ plugin.displayName }}</h3>
                <p class=\"description\"
                   title=\"{{ plugin.description|e('html_attr') }}\">{{ plugin.description }}</p>

                {% if plugin.screenshots and plugin.screenshots.0 is defined %}
                    <br />
                    <img piwik-plugin-name=\"{{ plugin.name|e('html_attr') }}\"
                         class=\"screenshot\"
                         src=\"{{ plugin.screenshots.0 }}?w=600\" width=\"100%\" alt=\"\">
                {% endif %}
            </div>
        {% endfor %}
    </div>

    <div class=\"widgetBody\">
        <a href=\"{{ linkTo({'module': 'Marketplace', 'action': 'overview'}) }}\"
            >{{ 'CorePluginsAdmin_ViewAllMarketplacePlugins'|translate }}</a>
    </div>

    <script type=\"text/javascript\">
        \$('.getNewPlugins .col .description').dotdotdot({
            watch: 'window'
        });
    </script>
</div>", "@Marketplace/getNewPluginsAdmin.twig", "/var/www/zinecat.org/matomo/plugins/Marketplace/templates/getNewPluginsAdmin.twig");
    }
}
