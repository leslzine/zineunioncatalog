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

/* @Login/login.twig */
class __TwigTemplate_3a58ab85977fcd0aae21d49e710b289b32a8a64714a57a92b903057f92a20231 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'loginContent' => [$this, 'block_loginContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Login/loginLayout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@Login/loginLayout.twig", "@Login/login.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_loginContent($context, array $blocks = [])
    {
        // line 5
        echo "    <div class=\"contentForm loginForm\">
        ";
        // line 6
        $this->loadTemplate("@Login/login.twig", "@Login/login.twig", 6, "965604054")->display(twig_array_merge($context, ["title" => call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_LogIn"])]));
        // line 72
        echo "    </div>
    <div class=\"contentForm resetForm\" style=\"display:none;\">
        ";
        // line 74
        $this->loadTemplate("@Login/login.twig", "@Login/login.twig", 74, "1070234179")->display(twig_array_merge($context, ["title" => call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_ChangeYourPassword"])]));
        // line 129
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "@Login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 129,  51 => 74,  47 => 72,  45 => 6,  42 => 5,  39 => 4,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends '@Login/loginLayout.twig' %}

{% block loginContent %}
    <div class=\"contentForm loginForm\">
        {% embed 'contentBlock.twig' with {'title': 'Login_LogIn'|translate} %}
            {% block content %}
                <div class=\"message_container\">

                    {{ include('@Login/_formErrors.twig', {formErrors: form_data.errors } )  }}

                    {% if AccessErrorString %}
                        <div piwik-notification
                             noclear=\"true\"
                             context=\"error\">
                            <strong>{{ 'General_Error'|translate }}</strong>: {{ AccessErrorString|raw }}<br/>
                        </div>
                    {% endif %}

                    {% if infoMessage %}
                        <p class=\"message\">{{ infoMessage|raw }}</p>
                    {% endif %}
                </div>

                <form {{ form_data.attributes|raw }} ng-non-bindable>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"text\" name=\"form_login\" placeholder=\"\" id=\"login_form_login\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"10\" autofocus=\"autofocus\"/>
                            <label for=\"login_form_login\"><i class=\"icon-user icon\"></i> {{ 'Login_LoginOrEmail'|translate }}</label>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"hidden\" name=\"form_nonce\" id=\"login_form_nonce\" value=\"{{ nonce }}\"/>
                            <input type=\"hidden\" name=\"form_redirect\" id=\"login_form_redirect\" value=\"\"/>
                            <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"20\" />
                            <label for=\"login_form_password\"><i class=\"icon-locked icon\"></i> {{ 'General_Password'|translate }}</label>
                        </div>
                    </div>

                    <div class=\"row actions\">
                        <div class=\"col s12\">
                            <input name=\"form_rememberme\" type=\"checkbox\" id=\"login_form_rememberme\" value=\"1\" tabindex=\"90\"
                                   {% if form_data.form_rememberme.value %}checked=\"checked\" {% endif %}/>
                            <label for=\"login_form_rememberme\">{{ 'Login_RememberMe'|translate }}</label>
                            <input class=\"submit btn\" id=\"login_form_submit\" type=\"submit\" value=\"{{ 'Login_LogIn'|translate }}\"
                                   tabindex=\"100\"/>
                        </div>
                    </div>

                </form>
                <p id=\"nav\">
                    {{ postEvent(\"Template.loginNav\", \"top\") }}
                    <a id=\"login_form_nav\" href=\"#\"
                       title=\"{{ 'Login_LostYourPassword'|translate }}\">{{ 'Login_LostYourPassword'|translate }}</a>
                    {{ postEvent(\"Template.loginNav\", \"bottom\") }}
                </p>

                {% if isCustomLogo %}
                    <p id=\"piwik\">
                        <i><a href=\"https://matomo.org/\" rel=\"noreferrer noopener\" target=\"_blank\">{{ linkTitle }}</a></i>
                    </p>
                {% endif %}

            {% endblock %}
        {% endembed %}
    </div>
    <div class=\"contentForm resetForm\" style=\"display:none;\">
        {% embed 'contentBlock.twig' with {'title': 'Login_ChangeYourPassword'|translate} %}
            {% block content %}

                <div class=\"message_container\">
                </div>

                <form id=\"reset_form\" method=\"post\" ng-non-bindable>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"hidden\" name=\"form_nonce\" id=\"reset_form_nonce\" value=\"{{ nonce }}\"/>
                            <input type=\"text\" placeholder=\"\" name=\"form_login\" id=\"reset_form_login\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"10\"/>
                            <label for=\"reset_form_login\"><i class=\"icon-user icon\"></i> {{ 'Login_LoginOrEmail'|translate }}</label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"reset_form_password\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"20\" autocomplete=\"off\"/>
                            <label for=\"reset_form_password\"><i class=\"icon-locked icon\"></i> {{ 'Login_NewPassword'|translate }}</label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"password\" placeholder=\"\" name=\"form_password_bis\" id=\"reset_form_password_bis\" class=\"input\" value=\"\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   size=\"20\" tabindex=\"30\" autocomplete=\"off\"/>
                            <label for=\"reset_form_password_bis\"><i class=\"icon-locked icon\"></i> {{ 'Login_NewPasswordRepeat'|translate }}</label>
                        </div>
                    </div>

                    <div class=\"row actions\">
                        <div class=\"col s12\">
                            <input class=\"submit btn\" id='reset_form_submit' type=\"submit\"
                                   value=\"{{ 'General_ChangePassword'|translate }}\" tabindex=\"100\"/>

                            <span class=\"loadingPiwik\" style=\"display:none;\">
                            <img alt=\"Loading\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                        </span>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"module\" value=\"{{ loginModule }}\"/>
                    <input type=\"hidden\" name=\"action\" value=\"resetPassword\"/>
                </form>
                <p id=\"nav\">
                    <a id=\"reset_form_nav\" href=\"#\"
                       title=\"{{ 'Mobile_NavigationBack'|translate }}\">{{ 'General_Cancel'|translate }}</a>
                    <a id=\"alternate_reset_nav\" href=\"#\" style=\"display:none;\"
                       title=\"{{'Login_LogIn'|translate}}\">{{ 'Login_LogIn'|translate }}</a>
                </p>
            {% endblock %}
        {% endembed %}
    </div>

{% endblock %}", "@Login/login.twig", "/var/www/zinecat.org/matomo/plugins/Login/templates/login.twig");
    }
}


/* @Login/login.twig */
class __TwigTemplate_3a58ab85977fcd0aae21d49e710b289b32a8a64714a57a92b903057f92a20231___965604054 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return "contentBlock.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("contentBlock.twig", "@Login/login.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        // line 8
        echo "                <div class=\"message_container\">

                    ";
        // line 10
        echo twig_include($this->env, $context, "@Login/_formErrors.twig", ["formErrors" => $this->getAttribute(($context["form_data"] ?? $this->getContext($context, "form_data")), "errors", [])]);
        echo "

                    ";
        // line 12
        if (($context["AccessErrorString"] ?? $this->getContext($context, "AccessErrorString"))) {
            // line 13
            echo "                        <div piwik-notification
                             noclear=\"true\"
                             context=\"error\">
                            <strong>";
            // line 16
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Error"]), "html", null, true);
            echo "</strong>: ";
            echo ($context["AccessErrorString"] ?? $this->getContext($context, "AccessErrorString"));
            echo "<br/>
                        </div>
                    ";
        }
        // line 19
        echo "
                    ";
        // line 20
        if (($context["infoMessage"] ?? $this->getContext($context, "infoMessage"))) {
            // line 21
            echo "                        <p class=\"message\">";
            echo ($context["infoMessage"] ?? $this->getContext($context, "infoMessage"));
            echo "</p>
                    ";
        }
        // line 23
        echo "                </div>

                <form ";
        // line 25
        echo $this->getAttribute(($context["form_data"] ?? $this->getContext($context, "form_data")), "attributes", []);
        echo " ng-non-bindable>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"text\" name=\"form_login\" placeholder=\"\" id=\"login_form_login\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"10\" autofocus=\"autofocus\"/>
                            <label for=\"login_form_login\"><i class=\"icon-user icon\"></i> ";
        // line 31
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_LoginOrEmail"]), "html", null, true);
        echo "</label>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"hidden\" name=\"form_nonce\" id=\"login_form_nonce\" value=\"";
        // line 37
        echo \Piwik\piwik_escape_filter($this->env, ($context["nonce"] ?? $this->getContext($context, "nonce")), "html", null, true);
        echo "\"/>
                            <input type=\"hidden\" name=\"form_redirect\" id=\"login_form_redirect\" value=\"\"/>
                            <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"20\" />
                            <label for=\"login_form_password\"><i class=\"icon-locked icon\"></i> ";
        // line 42
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Password"]), "html", null, true);
        echo "</label>
                        </div>
                    </div>

                    <div class=\"row actions\">
                        <div class=\"col s12\">
                            <input name=\"form_rememberme\" type=\"checkbox\" id=\"login_form_rememberme\" value=\"1\" tabindex=\"90\"
                                   ";
        // line 49
        if ($this->getAttribute($this->getAttribute(($context["form_data"] ?? $this->getContext($context, "form_data")), "form_rememberme", []), "value", [])) {
            echo "checked=\"checked\" ";
        }
        echo "/>
                            <label for=\"login_form_rememberme\">";
        // line 50
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_RememberMe"]), "html", null, true);
        echo "</label>
                            <input class=\"submit btn\" id=\"login_form_submit\" type=\"submit\" value=\"";
        // line 51
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_LogIn"]), "html", null, true);
        echo "\"
                                   tabindex=\"100\"/>
                        </div>
                    </div>

                </form>
                <p id=\"nav\">
                    ";
        // line 58
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.loginNav", "top"]);
        echo "
                    <a id=\"login_form_nav\" href=\"#\"
                       title=\"";
        // line 60
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_LostYourPassword"]), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_LostYourPassword"]), "html", null, true);
        echo "</a>
                    ";
        // line 61
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.loginNav", "bottom"]);
        echo "
                </p>

                ";
        // line 64
        if (($context["isCustomLogo"] ?? $this->getContext($context, "isCustomLogo"))) {
            // line 65
            echo "                    <p id=\"piwik\">
                        <i><a href=\"https://matomo.org/\" rel=\"noreferrer noopener\" target=\"_blank\">";
            // line 66
            echo \Piwik\piwik_escape_filter($this->env, ($context["linkTitle"] ?? $this->getContext($context, "linkTitle")), "html", null, true);
            echo "</a></i>
                    </p>
                ";
        }
        // line 69
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "@Login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 69,  363 => 66,  360 => 65,  358 => 64,  352 => 61,  346 => 60,  341 => 58,  331 => 51,  327 => 50,  321 => 49,  311 => 42,  303 => 37,  294 => 31,  285 => 25,  281 => 23,  275 => 21,  273 => 20,  270 => 19,  262 => 16,  257 => 13,  255 => 12,  250 => 10,  246 => 8,  243 => 7,  233 => 6,  53 => 129,  51 => 74,  47 => 72,  45 => 6,  42 => 5,  39 => 4,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends '@Login/loginLayout.twig' %}

{% block loginContent %}
    <div class=\"contentForm loginForm\">
        {% embed 'contentBlock.twig' with {'title': 'Login_LogIn'|translate} %}
            {% block content %}
                <div class=\"message_container\">

                    {{ include('@Login/_formErrors.twig', {formErrors: form_data.errors } )  }}

                    {% if AccessErrorString %}
                        <div piwik-notification
                             noclear=\"true\"
                             context=\"error\">
                            <strong>{{ 'General_Error'|translate }}</strong>: {{ AccessErrorString|raw }}<br/>
                        </div>
                    {% endif %}

                    {% if infoMessage %}
                        <p class=\"message\">{{ infoMessage|raw }}</p>
                    {% endif %}
                </div>

                <form {{ form_data.attributes|raw }} ng-non-bindable>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"text\" name=\"form_login\" placeholder=\"\" id=\"login_form_login\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"10\" autofocus=\"autofocus\"/>
                            <label for=\"login_form_login\"><i class=\"icon-user icon\"></i> {{ 'Login_LoginOrEmail'|translate }}</label>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"hidden\" name=\"form_nonce\" id=\"login_form_nonce\" value=\"{{ nonce }}\"/>
                            <input type=\"hidden\" name=\"form_redirect\" id=\"login_form_redirect\" value=\"\"/>
                            <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"20\" />
                            <label for=\"login_form_password\"><i class=\"icon-locked icon\"></i> {{ 'General_Password'|translate }}</label>
                        </div>
                    </div>

                    <div class=\"row actions\">
                        <div class=\"col s12\">
                            <input name=\"form_rememberme\" type=\"checkbox\" id=\"login_form_rememberme\" value=\"1\" tabindex=\"90\"
                                   {% if form_data.form_rememberme.value %}checked=\"checked\" {% endif %}/>
                            <label for=\"login_form_rememberme\">{{ 'Login_RememberMe'|translate }}</label>
                            <input class=\"submit btn\" id=\"login_form_submit\" type=\"submit\" value=\"{{ 'Login_LogIn'|translate }}\"
                                   tabindex=\"100\"/>
                        </div>
                    </div>

                </form>
                <p id=\"nav\">
                    {{ postEvent(\"Template.loginNav\", \"top\") }}
                    <a id=\"login_form_nav\" href=\"#\"
                       title=\"{{ 'Login_LostYourPassword'|translate }}\">{{ 'Login_LostYourPassword'|translate }}</a>
                    {{ postEvent(\"Template.loginNav\", \"bottom\") }}
                </p>

                {% if isCustomLogo %}
                    <p id=\"piwik\">
                        <i><a href=\"https://matomo.org/\" rel=\"noreferrer noopener\" target=\"_blank\">{{ linkTitle }}</a></i>
                    </p>
                {% endif %}

            {% endblock %}
        {% endembed %}
    </div>
    <div class=\"contentForm resetForm\" style=\"display:none;\">
        {% embed 'contentBlock.twig' with {'title': 'Login_ChangeYourPassword'|translate} %}
            {% block content %}

                <div class=\"message_container\">
                </div>

                <form id=\"reset_form\" method=\"post\" ng-non-bindable>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"hidden\" name=\"form_nonce\" id=\"reset_form_nonce\" value=\"{{ nonce }}\"/>
                            <input type=\"text\" placeholder=\"\" name=\"form_login\" id=\"reset_form_login\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"10\"/>
                            <label for=\"reset_form_login\"><i class=\"icon-user icon\"></i> {{ 'Login_LoginOrEmail'|translate }}</label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"reset_form_password\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"20\" autocomplete=\"off\"/>
                            <label for=\"reset_form_password\"><i class=\"icon-locked icon\"></i> {{ 'Login_NewPassword'|translate }}</label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"password\" placeholder=\"\" name=\"form_password_bis\" id=\"reset_form_password_bis\" class=\"input\" value=\"\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   size=\"20\" tabindex=\"30\" autocomplete=\"off\"/>
                            <label for=\"reset_form_password_bis\"><i class=\"icon-locked icon\"></i> {{ 'Login_NewPasswordRepeat'|translate }}</label>
                        </div>
                    </div>

                    <div class=\"row actions\">
                        <div class=\"col s12\">
                            <input class=\"submit btn\" id='reset_form_submit' type=\"submit\"
                                   value=\"{{ 'General_ChangePassword'|translate }}\" tabindex=\"100\"/>

                            <span class=\"loadingPiwik\" style=\"display:none;\">
                            <img alt=\"Loading\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                        </span>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"module\" value=\"{{ loginModule }}\"/>
                    <input type=\"hidden\" name=\"action\" value=\"resetPassword\"/>
                </form>
                <p id=\"nav\">
                    <a id=\"reset_form_nav\" href=\"#\"
                       title=\"{{ 'Mobile_NavigationBack'|translate }}\">{{ 'General_Cancel'|translate }}</a>
                    <a id=\"alternate_reset_nav\" href=\"#\" style=\"display:none;\"
                       title=\"{{'Login_LogIn'|translate}}\">{{ 'Login_LogIn'|translate }}</a>
                </p>
            {% endblock %}
        {% endembed %}
    </div>

{% endblock %}", "@Login/login.twig", "/var/www/zinecat.org/matomo/plugins/Login/templates/login.twig");
    }
}


/* @Login/login.twig */
class __TwigTemplate_3a58ab85977fcd0aae21d49e710b289b32a8a64714a57a92b903057f92a20231___1070234179 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 74
        return "contentBlock.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("contentBlock.twig", "@Login/login.twig", 74);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 75
    public function block_content($context, array $blocks = [])
    {
        // line 76
        echo "
                <div class=\"message_container\">
                </div>

                <form id=\"reset_form\" method=\"post\" ng-non-bindable>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"hidden\" name=\"form_nonce\" id=\"reset_form_nonce\" value=\"";
        // line 83
        echo \Piwik\piwik_escape_filter($this->env, ($context["nonce"] ?? $this->getContext($context, "nonce")), "html", null, true);
        echo "\"/>
                            <input type=\"text\" placeholder=\"\" name=\"form_login\" id=\"reset_form_login\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"10\"/>
                            <label for=\"reset_form_login\"><i class=\"icon-user icon\"></i> ";
        // line 87
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_LoginOrEmail"]), "html", null, true);
        echo "</label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"reset_form_password\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"20\" autocomplete=\"off\"/>
                            <label for=\"reset_form_password\"><i class=\"icon-locked icon\"></i> ";
        // line 95
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_NewPassword"]), "html", null, true);
        echo "</label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"password\" placeholder=\"\" name=\"form_password_bis\" id=\"reset_form_password_bis\" class=\"input\" value=\"\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   size=\"20\" tabindex=\"30\" autocomplete=\"off\"/>
                            <label for=\"reset_form_password_bis\"><i class=\"icon-locked icon\"></i> ";
        // line 103
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_NewPasswordRepeat"]), "html", null, true);
        echo "</label>
                        </div>
                    </div>

                    <div class=\"row actions\">
                        <div class=\"col s12\">
                            <input class=\"submit btn\" id='reset_form_submit' type=\"submit\"
                                   value=\"";
        // line 110
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ChangePassword"]), "html", null, true);
        echo "\" tabindex=\"100\"/>

                            <span class=\"loadingPiwik\" style=\"display:none;\">
                            <img alt=\"Loading\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                        </span>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"module\" value=\"";
        // line 118
        echo \Piwik\piwik_escape_filter($this->env, ($context["loginModule"] ?? $this->getContext($context, "loginModule")), "html", null, true);
        echo "\"/>
                    <input type=\"hidden\" name=\"action\" value=\"resetPassword\"/>
                </form>
                <p id=\"nav\">
                    <a id=\"reset_form_nav\" href=\"#\"
                       title=\"";
        // line 123
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Mobile_NavigationBack"]), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Cancel"]), "html", null, true);
        echo "</a>
                    <a id=\"alternate_reset_nav\" href=\"#\" style=\"display:none;\"
                       title=\"";
        // line 125
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_LogIn"]), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_LogIn"]), "html", null, true);
        echo "</a>
                </p>
            ";
    }

    public function getTemplateName()
    {
        return "@Login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  635 => 125,  628 => 123,  620 => 118,  609 => 110,  599 => 103,  588 => 95,  577 => 87,  570 => 83,  561 => 76,  558 => 75,  548 => 74,  369 => 69,  363 => 66,  360 => 65,  358 => 64,  352 => 61,  346 => 60,  341 => 58,  331 => 51,  327 => 50,  321 => 49,  311 => 42,  303 => 37,  294 => 31,  285 => 25,  281 => 23,  275 => 21,  273 => 20,  270 => 19,  262 => 16,  257 => 13,  255 => 12,  250 => 10,  246 => 8,  243 => 7,  233 => 6,  53 => 129,  51 => 74,  47 => 72,  45 => 6,  42 => 5,  39 => 4,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends '@Login/loginLayout.twig' %}

{% block loginContent %}
    <div class=\"contentForm loginForm\">
        {% embed 'contentBlock.twig' with {'title': 'Login_LogIn'|translate} %}
            {% block content %}
                <div class=\"message_container\">

                    {{ include('@Login/_formErrors.twig', {formErrors: form_data.errors } )  }}

                    {% if AccessErrorString %}
                        <div piwik-notification
                             noclear=\"true\"
                             context=\"error\">
                            <strong>{{ 'General_Error'|translate }}</strong>: {{ AccessErrorString|raw }}<br/>
                        </div>
                    {% endif %}

                    {% if infoMessage %}
                        <p class=\"message\">{{ infoMessage|raw }}</p>
                    {% endif %}
                </div>

                <form {{ form_data.attributes|raw }} ng-non-bindable>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"text\" name=\"form_login\" placeholder=\"\" id=\"login_form_login\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"10\" autofocus=\"autofocus\"/>
                            <label for=\"login_form_login\"><i class=\"icon-user icon\"></i> {{ 'Login_LoginOrEmail'|translate }}</label>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"hidden\" name=\"form_nonce\" id=\"login_form_nonce\" value=\"{{ nonce }}\"/>
                            <input type=\"hidden\" name=\"form_redirect\" id=\"login_form_redirect\" value=\"\"/>
                            <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"20\" />
                            <label for=\"login_form_password\"><i class=\"icon-locked icon\"></i> {{ 'General_Password'|translate }}</label>
                        </div>
                    </div>

                    <div class=\"row actions\">
                        <div class=\"col s12\">
                            <input name=\"form_rememberme\" type=\"checkbox\" id=\"login_form_rememberme\" value=\"1\" tabindex=\"90\"
                                   {% if form_data.form_rememberme.value %}checked=\"checked\" {% endif %}/>
                            <label for=\"login_form_rememberme\">{{ 'Login_RememberMe'|translate }}</label>
                            <input class=\"submit btn\" id=\"login_form_submit\" type=\"submit\" value=\"{{ 'Login_LogIn'|translate }}\"
                                   tabindex=\"100\"/>
                        </div>
                    </div>

                </form>
                <p id=\"nav\">
                    {{ postEvent(\"Template.loginNav\", \"top\") }}
                    <a id=\"login_form_nav\" href=\"#\"
                       title=\"{{ 'Login_LostYourPassword'|translate }}\">{{ 'Login_LostYourPassword'|translate }}</a>
                    {{ postEvent(\"Template.loginNav\", \"bottom\") }}
                </p>

                {% if isCustomLogo %}
                    <p id=\"piwik\">
                        <i><a href=\"https://matomo.org/\" rel=\"noreferrer noopener\" target=\"_blank\">{{ linkTitle }}</a></i>
                    </p>
                {% endif %}

            {% endblock %}
        {% endembed %}
    </div>
    <div class=\"contentForm resetForm\" style=\"display:none;\">
        {% embed 'contentBlock.twig' with {'title': 'Login_ChangeYourPassword'|translate} %}
            {% block content %}

                <div class=\"message_container\">
                </div>

                <form id=\"reset_form\" method=\"post\" ng-non-bindable>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"hidden\" name=\"form_nonce\" id=\"reset_form_nonce\" value=\"{{ nonce }}\"/>
                            <input type=\"text\" placeholder=\"\" name=\"form_login\" id=\"reset_form_login\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"10\"/>
                            <label for=\"reset_form_login\"><i class=\"icon-user icon\"></i> {{ 'Login_LoginOrEmail'|translate }}</label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"reset_form_password\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"20\" autocomplete=\"off\"/>
                            <label for=\"reset_form_password\"><i class=\"icon-locked icon\"></i> {{ 'Login_NewPassword'|translate }}</label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"password\" placeholder=\"\" name=\"form_password_bis\" id=\"reset_form_password_bis\" class=\"input\" value=\"\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   size=\"20\" tabindex=\"30\" autocomplete=\"off\"/>
                            <label for=\"reset_form_password_bis\"><i class=\"icon-locked icon\"></i> {{ 'Login_NewPasswordRepeat'|translate }}</label>
                        </div>
                    </div>

                    <div class=\"row actions\">
                        <div class=\"col s12\">
                            <input class=\"submit btn\" id='reset_form_submit' type=\"submit\"
                                   value=\"{{ 'General_ChangePassword'|translate }}\" tabindex=\"100\"/>

                            <span class=\"loadingPiwik\" style=\"display:none;\">
                            <img alt=\"Loading\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                        </span>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"module\" value=\"{{ loginModule }}\"/>
                    <input type=\"hidden\" name=\"action\" value=\"resetPassword\"/>
                </form>
                <p id=\"nav\">
                    <a id=\"reset_form_nav\" href=\"#\"
                       title=\"{{ 'Mobile_NavigationBack'|translate }}\">{{ 'General_Cancel'|translate }}</a>
                    <a id=\"alternate_reset_nav\" href=\"#\" style=\"display:none;\"
                       title=\"{{'Login_LogIn'|translate}}\">{{ 'Login_LogIn'|translate }}</a>
                </p>
            {% endblock %}
        {% endembed %}
    </div>

{% endblock %}", "@Login/login.twig", "/var/www/zinecat.org/matomo/plugins/Login/templates/login.twig");
    }
}
