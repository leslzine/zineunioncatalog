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

/* @Marketplace/uploadPluginDialog.twig */
class __TwigTemplate_41140f377c82ae70d85c7741ee573266a6ea40f5d80e7afcfcf4068ad6e061fd extends \Twig\Template
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
        echo "<div class=\"ui-confirm\" id=\"installPluginByUpload\" piwik-plugin-upload>
    <h2>";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_TeaserExtendPiwikByUpload"]), "html", null, true);
        echo "</h2>

    ";
        // line 4
        if (($context["isPluginUploadEnabled"] ?? $this->getContext($context, "isPluginUploadEnabled"))) {
            // line 5
            echo "        <p class=\"description\"> ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_AllowedUploadFormats"]), "html", null, true);
            echo " </p>

        <form enctype=\"multipart/form-data\" method=\"post\" id=\"uploadPluginForm\"
              action=\"";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "CorePluginsAdmin", "action" => "uploadPlugin", "nonce" => ($context["installNonce"] ?? $this->getContext($context, "installNonce"))]]), "html", null, true);
            echo "\">
            <input type=\"file\" name=\"pluginZip\">
            <br />
            <div piwik-field uicontrol=\"password\" name=\"confirmPassword\" autocomplete=\"off\"
                 data-title=\"";
            // line 12
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_ConfirmPasswordToContinue"]), "html_attr");
            echo "\"
                 value=\"\">
            </div>

            <input class=\"startUpload btn\" type=\"submit\" value=\"";
            // line 16
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_UploadZipFile"]), "html", null, true);
            echo "\">
        </form>
    ";
        } else {
            // line 19
            echo "        <p class=\"description\"> ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_PluginUploadDisabled"]);
            echo " </p>
        <pre>[General]
enable_plugin_upload = 1</pre>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 22
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Ok"]), "html", null, true);
            echo "\"/>
    ";
        }
        // line 24
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@Marketplace/uploadPluginDialog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  74 => 22,  67 => 19,  61 => 16,  54 => 12,  47 => 8,  40 => 5,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ui-confirm\" id=\"installPluginByUpload\" piwik-plugin-upload>
    <h2>{{ 'Marketplace_TeaserExtendPiwikByUpload'|translate }}</h2>

    {% if isPluginUploadEnabled %}
        <p class=\"description\"> {{ 'Marketplace_AllowedUploadFormats'|translate }} </p>

        <form enctype=\"multipart/form-data\" method=\"post\" id=\"uploadPluginForm\"
              action=\"{{ linkTo({'module':'CorePluginsAdmin', 'action':'uploadPlugin', 'nonce': installNonce}) }}\">
            <input type=\"file\" name=\"pluginZip\">
            <br />
            <div piwik-field uicontrol=\"password\" name=\"confirmPassword\" autocomplete=\"off\"
                 data-title=\"{{ 'Login_ConfirmPasswordToContinue'|translate|e('html_attr') }}\"
                 value=\"\">
            </div>

            <input class=\"startUpload btn\" type=\"submit\" value=\"{{ 'Marketplace_UploadZipFile'|translate }}\">
        </form>
    {% else %}
        <p class=\"description\"> {{ 'Marketplace_PluginUploadDisabled'|translate|raw }} </p>
        <pre>[General]
enable_plugin_upload = 1</pre>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
    {% endif %}
</div>", "@Marketplace/uploadPluginDialog.twig", "/var/www/zinecat.org/matomo/plugins/Marketplace/templates/uploadPluginDialog.twig");
    }
}
