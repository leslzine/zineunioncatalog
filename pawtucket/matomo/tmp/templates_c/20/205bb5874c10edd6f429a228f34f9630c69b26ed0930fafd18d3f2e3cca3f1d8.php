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

/* @CoreHome/_topBar.twig */
class __TwigTemplate_f14f601f80f8fbc0ae09853d4e9cdf16c3189dfbda162299f0a1d985c4c3719f extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.beforeTopBar", ($context["userAlias"] ?? $this->getContext($context, "userAlias")), ($context["userLogin"] ?? $this->getContext($context, "userLogin")), ($context["topMenu"] ?? $this->getContext($context, "topMenu"))]);
        echo "
<ul class=\"right hide-on-med-and-down\">
    ";
        // line 10
        echo "
    ";
        // line 25
        echo "
    ";
        // line 27
        echo "
    ";
        // line 28
        if ( !(isset($context["topMenuModule"]) || array_key_exists("topMenuModule", $context))) {
            // line 29
            echo "        ";
            $context["topMenuModule"] = ($context["currentModule"] ?? $this->getContext($context, "currentModule"));
            // line 30
            echo "        ";
            $context["topMenuAction"] = ($context["currentAction"] ?? $this->getContext($context, "currentAction"));
            // line 31
            echo "    ";
        }
        // line 32
        echo "
    ";
        // line 33
        ob_start();
        // line 34
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["topMenu"] ?? $this->getContext($context, "topMenu")));
        foreach ($context['_seq'] as $context["label"] => $context["menu"]) {
            // line 35
            echo "            <li role=\"menuitem\" class=\"";
            echo $this->getAttribute($this, "isActiveItem", [0 => $context["menu"], 1 => ($context["topMenuModule"] ?? $this->getContext($context, "topMenuModule")), 2 => ($context["topMenuAction"] ?? $this->getContext($context, "topMenuAction"))], "method");
            echo "\">";
            echo $this->getAttribute($this, "topMenuItem", [0 => $context["label"], 1 => $this->getAttribute($context["menu"], "_icon", []), 2 => $context["menu"]], "method");
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 38
        echo "</ul>
<ul class=\"side-nav hide-on-large-only\" id=\"mobile-top-menu\">
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["topMenu"] ?? $this->getContext($context, "topMenu")));
        foreach ($context['_seq'] as $context["label"] => $context["menu"]) {
            // line 41
            echo "        <li role=\"menuitem\" class=\"";
            echo $this->getAttribute($this, "isActiveItem", [0 => $context["menu"], 1 => ($context["topMenuModule"] ?? $this->getContext($context, "topMenuModule")), 2 => ($context["topMenuAction"] ?? $this->getContext($context, "topMenuAction"))], "method");
            echo "\"
            >";
            // line 42
            echo $this->getAttribute($this, "topMenuItem", [0 => $context["label"], 1 => "", 2 => $context["menu"]], "method");
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</ul>
<a href=\"javascript:;\" data-activates=\"mobile-left-menu\" class=\"activateLeftMenu hide-on-large-only button-collapse\" style=\"display:none;\"><span class=\"icon-menu-hamburger\"></span></a>
<a href=\"javascript:;\" data-activates=\"mobile-top-menu\" class=\"activateTopMenu hide-on-large-only button-collapse\"><span class=\"icon-more-verti\"></span></a>
";
    }

    // line 3
    public function getmenuItemLabel($__label__ = null, $__icon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            echo "        ";
            if ((((isset($context["icon"]) || array_key_exists("icon", $context)) && ($context["icon"] ?? $this->getContext($context, "icon"))) && (is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["icon"] ?? $this->getContext($context, "icon"))) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "icon-") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144))))) {
                // line 5
                echo "            <span class=\"navbar-icon ";
                echo \Piwik\piwik_escape_filter($this->env, strip_tags(($context["icon"] ?? $this->getContext($context, "icon"))), "html", null, true);
                echo "\" aria-label=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), [($context["label"] ?? $this->getContext($context, "label"))]), "html_attr");
                echo "\"></span>
        ";
            } else {
                // line 7
                echo "            ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), [($context["label"] ?? $this->getContext($context, "label"))]), "html", null, true);
                echo "
        ";
            }
            // line 9
            echo "    ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 11
    public function gettopMenuItem($__label__ = null, $__icon__ = null, $__menu__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "menu" => $__menu__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 12
            echo "        ";
            if ($this->getAttribute(($context["menu"] ?? null), "_html", [], "any", true, true)) {
                // line 13
                echo "            ";
                echo $this->getAttribute(($context["menu"] ?? $this->getContext($context, "menu")), "_html", []);
                echo "
        ";
            } else {
                // line 15
                echo "            <a ";
                if ($this->getAttribute(($context["menu"] ?? null), "_tooltip", [], "any", true, true)) {
                    echo "title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["menu"] ?? $this->getContext($context, "menu")), "_tooltip", []), "html", null, true);
                    echo "\"";
                }
                // line 16
                echo "               ";
                if ($this->getAttribute($this->getAttribute(($context["menu"] ?? null), "_url", [], "any", false, true), "module", [], "any", true, true)) {
                    // line 17
                    echo "                  id=\"topmenu-";
                    echo \Piwik\piwik_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute(($context["menu"] ?? $this->getContext($context, "menu")), "_url", []), "module", [])), "html", null, true);
                    echo "\"
                  href=\"index.php";
                    // line 18
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), [$this->getAttribute(($context["menu"] ?? $this->getContext($context, "menu")), "_url", [])]), "html", null, true);
                    echo "\"
               ";
                } else {
                    // line 20
                    echo "                  href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["menu"] ?? $this->getContext($context, "menu")), "_url", []), "html", null, true);
                    echo "\" rel=\"noreferrer noopener\"
               ";
                }
                // line 22
                echo "               target=\"_self\" tabindex=\"3\">";
                echo $this->getAttribute($this, "menuItemLabel", [0 => ($context["label"] ?? $this->getContext($context, "label")), 1 => ($context["icon"] ?? $this->getContext($context, "icon"))], "method");
                echo "</a>
        ";
            }
            // line 24
            echo "    ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 26
    public function getisActiveItem($__menu__ = null, $__currentModule__ = null, $__currentAction__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "menu" => $__menu__,
            "currentModule" => $__currentModule__,
            "currentAction" => $__currentAction__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            if (((((($context["menu"] ?? $this->getContext($context, "menu")) && $this->getAttribute(($context["menu"] ?? $this->getContext($context, "menu")), "_url", [])) && $this->getAttribute($this->getAttribute(($context["menu"] ?? null), "_url", [], "any", false, true), "module", [], "any", true, true)) && ($this->getAttribute($this->getAttribute(($context["menu"] ?? $this->getContext($context, "menu")), "_url", []), "module", []) == ($context["currentModule"] ?? $this->getContext($context, "currentModule")))) && (twig_test_empty($this->getAttribute($this->getAttribute(($context["menu"] ?? $this->getContext($context, "menu")), "_url", []), "action", [])) || ($this->getAttribute($this->getAttribute(($context["menu"] ?? $this->getContext($context, "menu")), "_url", []), "action", []) == ($context["currentAction"] ?? $this->getContext($context, "currentAction")))))) {
                echo "active";
            }
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
        return "@CoreHome/_topBar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 26,  207 => 24,  201 => 22,  195 => 20,  190 => 18,  185 => 17,  182 => 16,  175 => 15,  169 => 13,  166 => 12,  152 => 11,  137 => 9,  131 => 7,  123 => 5,  120 => 4,  107 => 3,  100 => 44,  92 => 42,  87 => 41,  83 => 40,  79 => 38,  76 => 37,  65 => 35,  60 => 34,  58 => 33,  55 => 32,  52 => 31,  49 => 30,  46 => 29,  44 => 28,  41 => 27,  38 => 25,  35 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ postEvent(\"Template.beforeTopBar\", userAlias, userLogin, topMenu) }}
<ul class=\"right hide-on-med-and-down\">
    {% macro menuItemLabel(label, icon) %}
        {% if icon is defined and icon and icon starts with 'icon-' %}
            <span class=\"navbar-icon {{ icon|striptags }}\" aria-label=\"{{ label|translate|e('html_attr') }}\"></span>
        {% else %}
            {{ label|translate }}
        {% endif %}
    {% endmacro %}

    {% macro topMenuItem(label, icon, menu) %}
        {% if menu._html is defined %}
            {{ menu._html|raw }}
        {% else %}
            <a {% if menu._tooltip is defined %}title=\"{{ menu._tooltip }}\"{% endif %}
               {% if menu._url.module is defined %}
                  id=\"topmenu-{{ menu._url.module|lower }}\"
                  href=\"index.php{{ menu._url|urlRewriteWithParameters }}\"
               {% else %}
                  href=\"{{ menu._url }}\" rel=\"noreferrer noopener\"
               {% endif %}
               target=\"_self\" tabindex=\"3\">{{ _self.menuItemLabel(label, icon) }}</a>
        {% endif %}
    {% endmacro %}

    {% macro isActiveItem(menu, currentModule, currentAction) %}{% if (menu and menu._url and menu._url.module is defined and menu._url.module == currentModule and (menu._url.action is empty or menu._url.action == currentAction)) %}active{% endif %}{% endmacro %}

    {% if topMenuModule is not defined %}
        {% set topMenuModule = currentModule %}
        {% set topMenuAction = currentAction %}
    {% endif %}

    {% spaceless %}
        {% for label,menu in topMenu %}
            <li role=\"menuitem\" class=\"{{ _self.isActiveItem(menu, topMenuModule, topMenuAction) }}\">{{ _self.topMenuItem(label, menu._icon, menu) }}</li>
        {% endfor %}
    {% endspaceless %}
</ul>
<ul class=\"side-nav hide-on-large-only\" id=\"mobile-top-menu\">
    {% for label,menu in topMenu %}
        <li role=\"menuitem\" class=\"{{ _self.isActiveItem(menu, topMenuModule, topMenuAction) }}\"
            >{{ _self.topMenuItem(label, '', menu) }}</li>
    {% endfor %}
</ul>
<a href=\"javascript:;\" data-activates=\"mobile-left-menu\" class=\"activateLeftMenu hide-on-large-only button-collapse\" style=\"display:none;\"><span class=\"icon-menu-hamburger\"></span></a>
<a href=\"javascript:;\" data-activates=\"mobile-top-menu\" class=\"activateTopMenu hide-on-large-only button-collapse\"><span class=\"icon-more-verti\"></span></a>
", "@CoreHome/_topBar.twig", "/var/www/zinecat.org/pawtucket/matomo/plugins/CoreHome/templates/_topBar.twig");
    }
}
