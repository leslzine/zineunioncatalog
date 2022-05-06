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

/* @Dashboard/embeddedIndex.twig */
class __TwigTemplate_2284d4e80e82bae5c369b8d19d3eba36ec9ac21f6f715d87f704bdbf2994dc35 extends \Twig\Template
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
        echo "<div id=\"dashboard\" piwik-dashboard dashboardid=\"";
        echo \Piwik\piwik_escape_filter($this->env, ($context["dashboardId"] ?? $this->getContext($context, "dashboardId")), "html", null, true);
        echo "\">
    <div class=\"ui-confirm\" id=\"confirm\">
        <h2>";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_DeleteWidgetConfirm"]), "html", null, true);
        echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Yes"]), "html", null, true);
        echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_No"]), "html", null, true);
        echo "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"setAsDefaultWidgetsConfirm\">
        <h2>";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_SetAsDefaultWidgetsConfirm"]), "html", null, true);
        echo "</h2>
        ";
        // line 10
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_ResetDashboard"]), "html", null, true);
        $context["resetDashboard"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        echo "        <div class=\"popoverSubMessage\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_SetAsDefaultWidgetsConfirmHelp", ($context["resetDashboard"] ?? $this->getContext($context, "resetDashboard"))]), "html", null, true);
        echo "</div>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Yes"]), "html", null, true);
        echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_No"]), "html", null, true);
        echo "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"resetDashboardConfirm\">
        <h2>";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_ResetDashboardConfirm"]), "html", null, true);
        echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Yes"]), "html", null, true);
        echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_No"]), "html", null, true);
        echo "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"dashboardEmptyNotification\">
        <h2>";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_DashboardEmptyNotification"]), "html", null, true);
        echo "</h2>
        <input role=\"addWidget\" type=\"button\" value=\"";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_AddAWidget"]), "html", null, true);
        echo "\"/>
        <input role=\"resetDashboard\" type=\"button\" value=\"";
        // line 25
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_ResetDashboard"]), "html", null, true);
        echo "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"changeDashboardLayout\">
        <h2>";
        // line 29
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_SelectDashboardLayout"]), "html", null, true);
        echo "</h2>

        <div id=\"columnPreview\">
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["availableLayouts"] ?? $this->getContext($context, "availableLayouts")));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 33
            echo "            <div>
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["layout"]);
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 35
                echo "                <div class=\"width-";
                echo \Piwik\piwik_escape_filter($this->env, $context["column"], "html", null, true);
                echo "\"><span></span></div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            <br class=\"clearfix\" />
        </div>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 41
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Save"]), "html", null, true);
        echo "\"/>
        <input role=\"cancel\" type=\"button\" value=\"";
        // line 42
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Cancel"]), "html", null, true);
        echo "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"renameDashboardConfirm\">
        <h2>";
        // line 46
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_RenameDashboard"]), "html", null, true);
        echo "</h2>

        <div id=\"newDashboardNameInput\">
            <label for=\"newDashboardName\">";
        // line 49
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_DashboardName"]), "html", null, true);
        echo " </label>
            <input type=\"text\" name=\"newDashboardName\" id=\"newDashboardName\" value=\"\"/>
        </div>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 52
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Save"]), "html", null, true);
        echo "\"/>
        <input role=\"cancel\" type=\"button\" value=\"";
        // line 53
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Cancel"]), "html", null, true);
        echo "\"/>
    </div>

    ";
        // line 56
        if (($context["hasSomeAdminAccess"] ?? $this->getContext($context, "hasSomeAdminAccess"))) {
            // line 57
            echo "        <div class=\"ui-confirm\" id=\"copyDashboardToUserConfirm\">
            <h2>";
            // line 58
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_CopyDashboardToUser"]), "html", null, true);
            echo "</h2>

            <div class=\"inputs\">
                <div class=\"row\">
                    <div class=\"col s12 m6\"><label for=\"copyDashboardName\">";
            // line 62
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_DashboardName"]), "html", null, true);
            echo " </label></div>
                    <div class=\"col s12 m6\"><input type=\"text\" name=\"copyDashboardName\" id=\"copyDashboardName\" value=\"\"/></div>
                </div>
                <div class=\"row\">
                    <div class=\"col s12 m6\"><label for=\"copyDashboardUser\">";
            // line 66
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Username"]), "html", null, true);
            echo " </label></div>
                    <div class=\"col s12 m6\"><select class=\"browser-default\" name=\"copyDashboardUser\" id=\"copyDashboardUser\">
                            <option>";
            // line 68
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_LoadingData"]), "html", null, true);
            echo "</option></select></div>
                </div>
            </div>

            <input role=\"yes\" type=\"button\" value=\"";
            // line 72
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Ok"]), "html", null, true);
            echo "\"/>
            <input role=\"cancel\" type=\"button\" value=\"";
            // line 73
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Cancel"]), "html", null, true);
            echo "\"/>
        </div>
    ";
        }
        // line 76
        echo "
    <div class=\"ui-confirm\" id=\"createDashboardConfirm\">
        <h2>";
        // line 78
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_CreateNewDashboard"]), "html", null, true);
        echo "</h2>

        <div id=\"createDashboardNameInput\">
            <p>
                <label>";
        // line 82
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_DashboardName"]), "html", null, true);
        echo " </label>
                <input type=\"text\" name=\"newDashboardName\" id=\"createDashboardName\" value=\"\"/>
            </p>
            <p>
                <input type=\"radio\" checked=\"checked\" name=\"type\" value=\"default\" id=\"dashboard_type_default\" />
                <label for=\"dashboard_type_default\">";
        // line 87
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_DefaultDashboard"]), "html", null, true);
        echo "</label>
            </p>
            <p>
                <input type=\"radio\" name=\"type\" value=\"empty\" id=\"dashboard_type_empty\" />
                <label for=\"dashboard_type_empty\">";
        // line 91
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_EmptyDashboard"]), "html", null, true);
        echo "</label>
            </p>

        </div>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 95
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Ok"]), "html", null, true);
        echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 96
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Cancel"]), "html", null, true);
        echo "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"removeDashboardConfirm\">
        <h2>";
        // line 100
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_RemoveDashboardConfirm", "<span></span>"]);
        echo "</h2>

        <div class=\"popoverSubMessage\">";
        // line 102
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_NotUndo", ($context["resetDashboard"] ?? $this->getContext($context, "resetDashboard"))]), "html", null, true);
        echo "</div>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 103
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Yes"]), "html", null, true);
        echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 104
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_No"]), "html", null, true);
        echo "\"/>
    </div>

    ";
        // line 107
        $this->loadTemplate("@Dashboard/_widgetFactoryTemplate.twig", "@Dashboard/embeddedIndex.twig", 107)->display($context);
        // line 108
        echo "
    <div id=\"dashboardWidgetsArea\" class=\"row\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Dashboard/embeddedIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 108,  279 => 107,  273 => 104,  269 => 103,  265 => 102,  260 => 100,  253 => 96,  249 => 95,  242 => 91,  235 => 87,  227 => 82,  220 => 78,  216 => 76,  210 => 73,  206 => 72,  199 => 68,  194 => 66,  187 => 62,  180 => 58,  177 => 57,  175 => 56,  169 => 53,  165 => 52,  159 => 49,  153 => 46,  146 => 42,  142 => 41,  138 => 39,  131 => 37,  122 => 35,  118 => 34,  115 => 33,  111 => 32,  105 => 29,  98 => 25,  94 => 24,  90 => 23,  83 => 19,  79 => 18,  75 => 17,  68 => 13,  64 => 12,  59 => 11,  55 => 10,  51 => 9,  44 => 5,  40 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"dashboard\" piwik-dashboard dashboardid=\"{{ dashboardId }}\">
    <div class=\"ui-confirm\" id=\"confirm\">
        <h2>{{ 'Dashboard_DeleteWidgetConfirm'|translate }}</h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"setAsDefaultWidgetsConfirm\">
        <h2>{{ 'Dashboard_SetAsDefaultWidgetsConfirm'|translate }}</h2>
        {% set resetDashboard %}{{ 'Dashboard_ResetDashboard'|translate }}{% endset %}
        <div class=\"popoverSubMessage\">{{ 'Dashboard_SetAsDefaultWidgetsConfirmHelp'|translate(resetDashboard) }}</div>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"resetDashboardConfirm\">
        <h2>{{ 'Dashboard_ResetDashboardConfirm'|translate }}</h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"dashboardEmptyNotification\">
        <h2>{{ 'Dashboard_DashboardEmptyNotification'|translate }}</h2>
        <input role=\"addWidget\" type=\"button\" value=\"{{ 'Dashboard_AddAWidget'|translate }}\"/>
        <input role=\"resetDashboard\" type=\"button\" value=\"{{ 'Dashboard_ResetDashboard'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"changeDashboardLayout\">
        <h2>{{ 'Dashboard_SelectDashboardLayout'|translate }}</h2>

        <div id=\"columnPreview\">
            {% for layout in availableLayouts %}
            <div>
                {% for column in layout %}
                <div class=\"width-{{ column }}\"><span></span></div>
                {% endfor %}
            </div>
            {% endfor %}
            <br class=\"clearfix\" />
        </div>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Save'|translate }}\"/>
        <input role=\"cancel\" type=\"button\" value=\"{{ 'General_Cancel'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"renameDashboardConfirm\">
        <h2>{{ 'Dashboard_RenameDashboard'|translate }}</h2>

        <div id=\"newDashboardNameInput\">
            <label for=\"newDashboardName\">{{ 'Dashboard_DashboardName'|translate }} </label>
            <input type=\"text\" name=\"newDashboardName\" id=\"newDashboardName\" value=\"\"/>
        </div>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Save'|translate }}\"/>
        <input role=\"cancel\" type=\"button\" value=\"{{ 'General_Cancel'|translate }}\"/>
    </div>

    {% if hasSomeAdminAccess %}
        <div class=\"ui-confirm\" id=\"copyDashboardToUserConfirm\">
            <h2>{{ 'Dashboard_CopyDashboardToUser'|translate }}</h2>

            <div class=\"inputs\">
                <div class=\"row\">
                    <div class=\"col s12 m6\"><label for=\"copyDashboardName\">{{ 'Dashboard_DashboardName'|translate }} </label></div>
                    <div class=\"col s12 m6\"><input type=\"text\" name=\"copyDashboardName\" id=\"copyDashboardName\" value=\"\"/></div>
                </div>
                <div class=\"row\">
                    <div class=\"col s12 m6\"><label for=\"copyDashboardUser\">{{ 'General_Username'|translate }} </label></div>
                    <div class=\"col s12 m6\"><select class=\"browser-default\" name=\"copyDashboardUser\" id=\"copyDashboardUser\">
                            <option>{{ 'General_LoadingData'|translate }}</option></select></div>
                </div>
            </div>

            <input role=\"yes\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
            <input role=\"cancel\" type=\"button\" value=\"{{ 'General_Cancel'|translate }}\"/>
        </div>
    {% endif %}

    <div class=\"ui-confirm\" id=\"createDashboardConfirm\">
        <h2>{{ 'Dashboard_CreateNewDashboard'|translate }}</h2>

        <div id=\"createDashboardNameInput\">
            <p>
                <label>{{ 'Dashboard_DashboardName'|translate }} </label>
                <input type=\"text\" name=\"newDashboardName\" id=\"createDashboardName\" value=\"\"/>
            </p>
            <p>
                <input type=\"radio\" checked=\"checked\" name=\"type\" value=\"default\" id=\"dashboard_type_default\" />
                <label for=\"dashboard_type_default\">{{ 'Dashboard_DefaultDashboard'|translate }}</label>
            </p>
            <p>
                <input type=\"radio\" name=\"type\" value=\"empty\" id=\"dashboard_type_empty\" />
                <label for=\"dashboard_type_empty\">{{ 'Dashboard_EmptyDashboard'|translate }}</label>
            </p>

        </div>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_Cancel'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"removeDashboardConfirm\">
        <h2>{{ 'Dashboard_RemoveDashboardConfirm'|translate('<span></span>')|raw }}</h2>

        <div class=\"popoverSubMessage\">{{ 'Dashboard_NotUndo'|translate(resetDashboard) }}</div>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>

    {% include \"@Dashboard/_widgetFactoryTemplate.twig\" %}

    <div id=\"dashboardWidgetsArea\" class=\"row\"></div>
</div>
", "@Dashboard/embeddedIndex.twig", "/var/www/zinecat.org/matomo/plugins/Dashboard/templates/embeddedIndex.twig");
    }
}
