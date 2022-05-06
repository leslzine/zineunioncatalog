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

/* @CoreHome/quickLinks.twig */
class __TwigTemplate_122c16d325a8e98a197945dccc22b245e05d671de3ede8afa857666bad56512c extends \Twig\Template
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
        echo "<div class=\"widgetBody quickLinks\">
    ";
        // line 2
        if (($context["hasSitesAdmin"] ?? $this->getContext($context, "hasSitesAdmin"))) {
            // line 3
            echo "    <div class=\"quickLink\">
        <span class=\"icon icon-open-source\">&nbsp;</span>
        <a href=\"";
            // line 5
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "SitesManager", "action" => "index", "showaddsite" => "1"]]), "html", null, true);
            echo "\" class=\"itemLabel\">
            ";
            // line 6
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_AddSite"]));
            echo "
        </a>
    </div>
    ";
        }
        // line 10
        echo "    ";
        if (($context["hasUsersAdmin"] ?? $this->getContext($context, "hasUsersAdmin"))) {
            // line 11
            echo "    <div class=\"quickLink\">
        <span class=\"icon icon-user-add\">&nbsp;</span>
        <a href=\"";
            // line 13
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "UsersManager", "action" => "index", "showadduser" => "1"]]), "html", null, true);
            echo "\" class=\"itemLabel\">
            ";
            // line 14
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_AddUser"]));
            echo "
        </a>
    </div>
    ";
        }
        // line 18
        echo "    <br />
</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/quickLinks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  61 => 14,  57 => 13,  53 => 11,  50 => 10,  43 => 6,  39 => 5,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widgetBody quickLinks\">
    {% if hasSitesAdmin %}
    <div class=\"quickLink\">
        <span class=\"icon icon-open-source\">&nbsp;</span>
        <a href=\"{{ linkTo({'module': 'SitesManager', 'action': 'index', 'showaddsite': '1'}) }}\" class=\"itemLabel\">
            {{ 'SitesManager_AddSite'|translate|e }}
        </a>
    </div>
    {% endif %}
    {% if hasUsersAdmin %}
    <div class=\"quickLink\">
        <span class=\"icon icon-user-add\">&nbsp;</span>
        <a href=\"{{ linkTo({'module': 'UsersManager', 'action': 'index', 'showadduser': '1'}) }}\" class=\"itemLabel\">
            {{ 'UsersManager_AddUser'|translate|e }}
        </a>
    </div>
    {% endif %}
    <br />
</div>
", "@CoreHome/quickLinks.twig", "/var/www/zinecat.org/matomo/plugins/CoreHome/templates/quickLinks.twig");
    }
}
