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

/* @CoreHome/_menu.twig */
class __TwigTemplate_4aafdebc8ab73e87c51dc736c742aab71cdb59306d628795e0ddd0713285c0cf extends \Twig\Template
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
    }

    // line 1
    public function getmenu($__menu__ = null, $__anchorlink__ = null, $__cssClass__ = null, $__currentModule__ = null, $__currentAction__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "menu" => $__menu__,
            "anchorlink" => $__anchorlink__,
            "cssClass" => $__cssClass__,
            "currentModule" => $__currentModule__,
            "currentAction" => $__currentAction__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    <div id=\"secondNavBar\" class=\"";
            echo \Piwik\piwik_escape_filter($this->env, ($context["cssClass"] ?? $this->getContext($context, "cssClass")), "html", null, true);
            echo " z-depth-1\">
        <ul class=\"navbar hide-on-med-and-down\" aria-label=\"";
            // line 3
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_MainNavigation"]), "html_attr");
            echo "\" role=\"menu\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? $this->getContext($context, "menu")));
            foreach ($context['_seq'] as $context["level1"] => $context["level2"]) {
                // line 5
                echo "
                ";
                // line 6
                $context["hasSubmenuItem"] = false;
                // line 7
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["level2"]);
                foreach ($context['_seq'] as $context["name"] => $context["urlParameters"]) {
                    // line 8
                    echo "                    ";
                    if ((twig_slice($this->env, $context["name"], 0, 1) != "_")) {
                        // line 9
                        echo "                        ";
                        $context["hasSubmenuItem"] = true;
                        // line 10
                        echo "                    ";
                    }
                    // line 11
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['urlParameters'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "
                ";
                // line 13
                if (($context["hasSubmenuItem"] ?? $this->getContext($context, "hasSubmenuItem"))) {
                    // line 14
                    echo "                    <li class=\"menuTab\" role=\"menuitem\">

                        <a class=\"item\" tabindex=\"5\">
                            <span class=\"menu-icon ";
                    // line 17
                    echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($context["level2"], "_icon", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["level2"], "_icon", []), "icon-arrow-right")) : ("icon-arrow-right")), "html", null, true);
                    echo "\"></span>";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), [$context["level1"]]), "html", null, true);
                    echo "
                            <span class=\"hidden\">
                             ";
                    // line 19
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_Menu"]), "html", null, true);
                    echo "
                           </span>
                        </a>
                        <ul role=\"menu\">
                            ";
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["level2"]);
                    foreach ($context['_seq'] as $context["name"] => $context["urlParameters"]) {
                        // line 24
                        echo "                                ";
                        if ((twig_slice($this->env, $context["name"], 0, 1) != "_")) {
                            // line 25
                            echo "                                    <li ";
                            if (((($this->getAttribute($this->getAttribute($context["urlParameters"], "_url", [], "any", false, true), "module", [], "any", true, true) && ($this->getAttribute($this->getAttribute($context["urlParameters"], "_url", []), "module", []) == ($context["currentModule"] ?? $this->getContext($context, "currentModule")))) && $this->getAttribute($this->getAttribute($context["urlParameters"], "_url", [], "any", false, true), "action", [], "any", true, true)) && ($this->getAttribute($this->getAttribute($context["urlParameters"], "_url", []), "action", []) == ($context["currentAction"] ?? $this->getContext($context, "currentAction"))))) {
                                echo "class=\"active\"";
                            }
                            // line 26
                            echo "                                        role=\"menuitem\"
                                    >
                                        <a class=\"item\" tabindex=\"5\" target=\"_self\"
                                           title=\"";
                            // line 29
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), [(($this->getAttribute($context["urlParameters"], "_tooltip", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["urlParameters"], "_tooltip", []), "")) : (""))]), "html_attr");
                            echo "\"
                                            ";
                            // line 30
                            if (($this->getAttribute($context["urlParameters"], "_onclick", [], "any", true, true) && $this->getAttribute($context["urlParameters"], "_onclick", []))) {
                                // line 31
                                echo "                                                onclick=\"";
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["urlParameters"], "_onclick", []), "html_attr");
                                echo ";return false;\"
                                            ";
                            }
                            // line 33
                            echo "                                            ";
                            if ($this->getAttribute($context["urlParameters"], "_url", [])) {
                                // line 34
                                echo "                                                href=\"index.php?";
                                echo \Piwik\piwik_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), [$this->getAttribute($context["urlParameters"], "_url", [])]), 1), "html", null, true);
                                echo "\"
                                            ";
                            }
                            // line 35
                            echo ">
                                            ";
                            // line 36
                            if (($this->getAttribute($context["urlParameters"], "_icon", [], "any", true, true) && $this->getAttribute($context["urlParameters"], "_icon", []))) {
                                echo "<span class=\"icon ";
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["urlParameters"], "_icon", []), "html_attr");
                                echo "\" style=\"margin-right: 5px;\"></span>";
                            }
                            // line 37
                            echo "                                            ";
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), [$context["name"]]), "html", null, true);
                            echo "
                                        </a>
                                    </li>
                                ";
                        }
                        // line 41
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['urlParameters'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "                        </ul>
                    </li>
                ";
                }
                // line 45
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['level1'], $context['level2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        </ul>
        <ul id=\"mobile-left-menu\" class=\"side-nav hide-on-large-only\">
            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? $this->getContext($context, "menu")));
            foreach ($context['_seq'] as $context["level1"] => $context["level2"]) {
                // line 49
                echo "
            ";
                // line 50
                $context["hasSubmenuItem"] = false;
                // line 51
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["level2"]);
                foreach ($context['_seq'] as $context["name"] => $context["urlParameters"]) {
                    // line 52
                    echo "                ";
                    if ((twig_slice($this->env, $context["name"], 0, 1) != "_")) {
                        // line 53
                        echo "                    ";
                        $context["hasSubmenuItem"] = true;
                        // line 54
                        echo "                ";
                    }
                    // line 55
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['urlParameters'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "
            ";
                // line 57
                if (($context["hasSubmenuItem"] ?? $this->getContext($context, "hasSubmenuItem"))) {
                    // line 58
                    echo "            <li class=\"no-padding\">
                <ul class=\"collapsible collapsible-accordion\" piwik-side-nav=\"nav .activateLeftMenu\">
                    <li>
                        <a class=\"collapsible-header\">";
                    // line 61
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), [$context["level1"]]), "html", null, true);
                    echo "<i class=\"";
                    echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($context["level2"], "_icon", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["level2"], "_icon", []), "icon-arrow-down")) : ("icon-arrow-down")), "html", null, true);
                    echo "\"></i></a>
                        <div class=\"collapsible-body\">
                            <ul>
                                ";
                    // line 64
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["level2"]);
                    foreach ($context['_seq'] as $context["name"] => $context["urlParameters"]) {
                        // line 65
                        echo "                                    ";
                        if ((twig_slice($this->env, $context["name"], 0, 1) != "_")) {
                            // line 66
                            echo "                                        <li>
                                            <a title=\"";
                            // line 67
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), [(($this->getAttribute($context["urlParameters"], "_tooltip", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["urlParameters"], "_tooltip", []), "")) : (""))]), "html_attr");
                            echo "\" target=\"_self\"
                                               href=\"index.php?";
                            // line 68
                            echo \Piwik\piwik_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), [$this->getAttribute($context["urlParameters"], "_url", [])]), 1), "html", null, true);
                            echo "\">";
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), [$context["name"]]), "html", null, true);
                            echo "</a>
                                        </li>
                                    ";
                        }
                        // line 71
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['urlParameters'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 72
                    echo "                            </ul>
                        </div>
                    </li>
                </ul>
                ";
                }
                // line 77
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['level1'], $context['level2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "            </li>
        </ul>
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@CoreHome/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 78,  268 => 77,  261 => 72,  255 => 71,  247 => 68,  243 => 67,  240 => 66,  237 => 65,  233 => 64,  225 => 61,  220 => 58,  218 => 57,  215 => 56,  209 => 55,  206 => 54,  203 => 53,  200 => 52,  195 => 51,  193 => 50,  190 => 49,  186 => 48,  182 => 46,  176 => 45,  171 => 42,  165 => 41,  157 => 37,  151 => 36,  148 => 35,  142 => 34,  139 => 33,  133 => 31,  131 => 30,  127 => 29,  122 => 26,  117 => 25,  114 => 24,  110 => 23,  103 => 19,  96 => 17,  91 => 14,  89 => 13,  86 => 12,  80 => 11,  77 => 10,  74 => 9,  71 => 8,  66 => 7,  64 => 6,  61 => 5,  57 => 4,  53 => 3,  48 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro menu(menu, anchorlink, cssClass, currentModule, currentAction) %}
    <div id=\"secondNavBar\" class=\"{{ cssClass }} z-depth-1\">
        <ul class=\"navbar hide-on-med-and-down\" aria-label=\"{{ 'CoreHome_MainNavigation'|translate|e('html_attr') }}\" role=\"menu\">
            {% for level1,level2 in menu %}

                {% set hasSubmenuItem = false %}
                {% for name,urlParameters in level2 %}
                    {% if name|slice(0,1) != '_' %}
                        {% set hasSubmenuItem = true %}
                    {% endif %}
                {% endfor %}

                {% if hasSubmenuItem %}
                    <li class=\"menuTab\" role=\"menuitem\">

                        <a class=\"item\" tabindex=\"5\">
                            <span class=\"menu-icon {{ level2._icon|default('icon-arrow-right') }}\"></span>{{ level1|translate }}
                            <span class=\"hidden\">
                             {{ 'CoreHome_Menu'|translate }}
                           </span>
                        </a>
                        <ul role=\"menu\">
                            {% for name,urlParameters in level2 %}
                                {% if name|slice(0,1) != '_' %}
                                    <li {% if urlParameters._url.module is defined and urlParameters._url.module == currentModule and urlParameters._url.action is defined and urlParameters._url.action == currentAction %}class=\"active\"{% endif %}
                                        role=\"menuitem\"
                                    >
                                        <a class=\"item\" tabindex=\"5\" target=\"_self\"
                                           title=\"{{ urlParameters._tooltip|default('')|translate|e('html_attr') }}\"
                                            {% if urlParameters._onclick is defined and urlParameters._onclick %}
                                                onclick=\"{{ urlParameters._onclick|e('html_attr') }};return false;\"
                                            {% endif %}
                                            {% if urlParameters._url %}
                                                href=\"index.php?{{ urlParameters._url|urlRewriteWithParameters|slice(1) }}\"
                                            {% endif %}>
                                            {% if urlParameters._icon is defined and urlParameters._icon %}<span class=\"icon {{ urlParameters._icon|e('html_attr') }}\" style=\"margin-right: 5px;\"></span>{% endif %}
                                            {{ name|translate }}
                                        </a>
                                    </li>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    </li>
                {% endif %}
            {% endfor %}
        </ul>
        <ul id=\"mobile-left-menu\" class=\"side-nav hide-on-large-only\">
            {% for level1,level2 in menu %}

            {% set hasSubmenuItem = false %}
            {% for name,urlParameters in level2 %}
                {% if name|slice(0,1) != '_' %}
                    {% set hasSubmenuItem = true %}
                {% endif %}
            {% endfor %}

            {% if hasSubmenuItem %}
            <li class=\"no-padding\">
                <ul class=\"collapsible collapsible-accordion\" piwik-side-nav=\"nav .activateLeftMenu\">
                    <li>
                        <a class=\"collapsible-header\">{{ level1|translate }}<i class=\"{{ level2._icon|default('icon-arrow-down') }}\"></i></a>
                        <div class=\"collapsible-body\">
                            <ul>
                                {% for name,urlParameters in level2 %}
                                    {% if name|slice(0,1) != '_' %}
                                        <li>
                                            <a title=\"{{ urlParameters._tooltip|default('')|translate|e('html_attr') }}\" target=\"_self\"
                                               href=\"index.php?{{ urlParameters._url|urlRewriteWithParameters|slice(1) }}\">{{ name|translate }}</a>
                                        </li>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        </div>
                    </li>
                </ul>
                {% endif %}
                {% endfor %}
            </li>
        </ul>
    </div>
{% endmacro %}
", "@CoreHome/_menu.twig", "/var/www/zinecat.org/matomo/plugins/CoreHome/templates/_menu.twig");
    }
}
