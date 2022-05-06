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

/* @LanguagesManager/getLanguagesSelector.twig */
class __TwigTemplate_aec3a6de1443b6615febc6791b92b46da65437662cae3bdca8a754760d6fbbf3 extends \Twig\Template
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
        echo "<div class=\"languageSelection\"
     ng-cloak
     menu-title=\"";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, ($context["currentLanguageName"] ?? $this->getContext($context, "currentLanguageName")), "html_attr");
        echo "\"
     piwik-menudropdown>
    <a class=\"item\" target=\"_blank\" rel=\"noreferrer noopener\"
        href=\"https://matomo.org/translations/\">";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["LanguagesManager_AboutPiwikTranslations"]), "html", null, true);
        echo "</a>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? $this->getContext($context, "languages")));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 8
            echo "        <a class=\"item ";
            if (($this->getAttribute($context["language"], "code", []) == ($context["currentLanguageCode"] ?? $this->getContext($context, "currentLanguageCode")))) {
                echo "active";
            }
            echo "\"
           value=\"";
            // line 9
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["language"], "code", []), "html", null, true);
            echo "\"
           title=\"";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["language"], "name", []), "html", null, true);
            echo " (";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["language"], "english_name", []), "html", null, true);
            echo ")\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["language"], "name", []), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    <form action=\"index.php?module=LanguagesManager&amp;action=saveLanguage\" method=\"post\">
        <input type=\"hidden\" name=\"language\" id=\"language\">
        ";
        // line 16
        echo "        ";
        if ((isset($context["token_auth"]) || array_key_exists("token_auth", $context))) {
            echo "<input type=\"hidden\" name=\"token_auth\" value=\"";
            echo \Piwik\piwik_escape_filter($this->env, ($context["token_auth"] ?? $this->getContext($context, "token_auth")), "html", null, true);
            echo "\"/>";
        }
        // line 17
        echo "    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@LanguagesManager/getLanguagesSelector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  76 => 16,  71 => 12,  59 => 10,  55 => 9,  48 => 8,  44 => 7,  40 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"languageSelection\"
     ng-cloak
     menu-title=\"{{ currentLanguageName|e('html_attr') }}\"
     piwik-menudropdown>
    <a class=\"item\" target=\"_blank\" rel=\"noreferrer noopener\"
        href=\"https://matomo.org/translations/\">{{ 'LanguagesManager_AboutPiwikTranslations'|translate }}</a>
    {% for language in languages %}
        <a class=\"item {% if language.code == currentLanguageCode %}active{% endif %}\"
           value=\"{{ language.code }}\"
           title=\"{{ language.name }} ({{ language.english_name }})\">{{ language.name }}</a>
    {% endfor %}

    <form action=\"index.php?module=LanguagesManager&amp;action=saveLanguage\" method=\"post\">
        <input type=\"hidden\" name=\"language\" id=\"language\">
        {# During installation token_auth is not set #}
        {% if token_auth is defined %}<input type=\"hidden\" name=\"token_auth\" value=\"{{ token_auth }}\"/>{% endif %}
    </form>
</div>
", "@LanguagesManager/getLanguagesSelector.twig", "/var/www/zinecat.org/pawtucket/matomo/plugins/LanguagesManager/templates/getLanguagesSelector.twig");
    }
}
