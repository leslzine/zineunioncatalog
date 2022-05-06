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

/* @CorePluginsAdmin/macros.twig */
class __TwigTemplate_8ab87a8f7b6b1b33f071898157b913ee67f176e5ea04e089d05b33b57a49e397 extends \Twig\Template
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
        echo "
";
        // line 112
        echo "
";
        // line 122
        echo "
";
        // line 143
        echo "
";
    }

    // line 2
    public function gettablePluginUpdates($__pluginsHavingUpdate__ = null, $__updateNonce__ = null, $__isMultiServerEnvironment__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "pluginsHavingUpdate" => $__pluginsHavingUpdate__,
            "updateNonce" => $__updateNonce__,
            "isMultiServerEnvironment" => $__isMultiServerEnvironment__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "    ";
            $context["marketplaceMacro"] = $this->loadTemplate("@Marketplace/macros.twig", "@CorePluginsAdmin/macros.twig", 3)->unwrap();
            // line 4
            echo "
    <div>
        <a id=\"update-selected-plugins\" href=\"javascript:\" class=\"btn disabled\">";
            // line 6
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_UpdateSelected"]), "html", null, true);
            echo "</a>
    </div>
    <table piwik-content-table>
        <thead>
        <tr>
            <th>
                <span class=\"checkbox-container\">
                    <input type=\"checkbox\" id=\"select-plugin-all\"/>
                    <label for=\"select-plugin-all\"></label>
                </span>
            </th>
            <th>";
            // line 17
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Plugin"]), "html", null, true);
            echo "</th>
            <th class=\"num\">";
            // line 18
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Version"]), "html", null, true);
            echo "</th>
            <th>";
            // line 19
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Description"]), "html", null, true);
            echo "</th>
            <th class=\"status\">";
            // line 20
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Status"]), "html", null, true);
            echo "</th>
            <th class=\"action-links\">";
            // line 21
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Action"]), "html", null, true);
            echo "</th>
        </tr>
        </thead>
        <tbody id=\"plugins\">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pluginsHavingUpdate"] ?? $this->getContext($context, "pluginsHavingUpdate")));
            foreach ($context['_seq'] as $context["name"] => $context["plugin"]) {
                // line 26
                echo "            <tr ";
                if ((($this->getAttribute($context["plugin"], "isActivated", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["plugin"], "isActivated", []), false)) : (false))) {
                    echo "class=\"active-plugin\"";
                } else {
                    echo "class=\"inactive-plugin\"";
                }
                echo ">
                <td class=\"select-cell\">
                    <span class=\"checkbox-container\">
                        <input type=\"checkbox\" id=\"select-plugin-";
                // line 29
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", []), "html_attr");
                echo "\" ";
                if (($this->getAttribute($context["plugin"], "isDownloadable", [], "any", true, true) &&  !$this->getAttribute($context["plugin"], "isDownloadable", []))) {
                    echo "disabled=\"disabled\"";
                }
                echo " />
                        <label for=\"select-plugin-";
                // line 30
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", []), "html_attr");
                echo "\"></label>
                    </span>
                </td>
                <td class=\"name\">
                    <a href=\"javascript:void(0);\" piwik-plugin-name=\"";
                // line 34
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", []), "html_attr");
                echo "\" class=\"plugin-details\">
                        ";
                // line 35
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", []), "html", null, true);
                echo "
                    </a>
                </td>
                <td class=\"vers\">
                    ";
                // line 39
                if (((($this->getAttribute($context["plugin"], "changelog", [], "any", true, true) && $this->getAttribute($context["plugin"], "changelog", [])) && $this->getAttribute($this->getAttribute($context["plugin"], "changelog", [], "any", false, true), "url", [], "any", true, true)) && $this->getAttribute($this->getAttribute($context["plugin"], "changelog", []), "url", []))) {
                    // line 40
                    echo "                        <a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "changelog", []), "url", []), "html_attr");
                    echo "\" title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Changelog"]), "html", null, true);
                    echo "\"
                           target=\"_blank\" rel=\"noreferrer noopener\"
                        >";
                    // line 42
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "currentVersion", []), "html", null, true);
                    echo " => ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "latestVersion", []), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 44
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "currentVersion", []), "html", null, true);
                    echo " => ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "latestVersion", []), "html", null, true);
                    echo "
                    ";
                }
                // line 46
                echo "                </td>
                <td class=\"desc\">
                    ";
                // line 48
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "description", []), "html", null, true);
                echo "
                    ";
                // line 49
                echo $context["marketplaceMacro"]->getmissingRequirementsPleaseUpdateNotice($context["plugin"]);
                echo "
                </td>
                <td class=\"status\">
                    ";
                // line 52
                if ($this->getAttribute($context["plugin"], "isActivated", [])) {
                    // line 53
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Active"]), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 55
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Inactive"]), "html", null, true);
                    echo "
                    ";
                }
                // line 57
                echo "                </td>
                <td class=\"togl action-links\">
                    ";
                // line 59
                if (($this->getAttribute($context["plugin"], "isDownloadable", [], "any", true, true) &&  !$this->getAttribute($context["plugin"], "isDownloadable", []))) {
                    // line 60
                    echo "                        <span title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_PluginNotDownloadable"]), "html_attr");
                    echo " ";
                    if ($this->getAttribute($context["plugin"], "isPaid", [])) {
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_PluginNotDownloadablePaidReason"]), "html_attr");
                    }
                    echo "\"
                          >";
                    // line 61
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_NotDownloadable"]), "html_attr");
                    echo "</span>
                    ";
                } elseif (                // line 62
($context["isMultiServerEnvironment"] ?? $this->getContext($context, "isMultiServerEnvironment"))) {
                    // line 63
                    echo "                        <a onclick=\"\$(this).css('display', 'none')\" href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["action" => "download", "module" => "Marketplace", "pluginName" => $this->getAttribute($context["plugin"], "name", []), "nonce" => Piwik\Nonce::getNonce($this->getAttribute($context["plugin"], "name", []))]]), "html", null, true);
                    echo "\">";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Download"]), "html", null, true);
                    echo "</a>
                    ";
                } elseif ((0 == twig_length_filter($this->env, $this->getAttribute(                // line 64
$context["plugin"], "missingRequirements", [])))) {
                    // line 65
                    echo "                        <a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["action" => "updatePlugin", "module" => "Marketplace", "pluginName" => $this->getAttribute($context["plugin"], "name", []), "nonce" => ($context["updateNonce"] ?? $this->getContext($context, "updateNonce"))]]), "html", null, true);
                    echo "\">";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreUpdater_UpdateTitle"]), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 67
                    echo "                        -
                    ";
                }
                // line 69
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "        </tbody>
    </table>

    <script>
        \$(function () {
            \$('span.checkbox-container').on('change', function() {
                var isAtLeastOneChecked = \$('span.checkbox-container > input:checked').length >= 1;
                isAtLeastOneChecked ? \$('#update-selected-plugins').removeClass('disabled') : \$('#update-selected-plugins').addClass('disabled');
            });

            \$('#update-selected-plugins').on('click', function () {
                var pluginsToUpdate = [];
                \$('tbody#plugins td.select-cell input').each(function () {
                    if (!this.checked) {
                        return;
                    }

                    var pluginName = \$(this).closest('tr').find('.name .plugin-details').attr('piwik-plugin-name');
                    pluginsToUpdate.push(pluginName);
                });

                var url = '";
            // line 93
            echo call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "Marketplace", "action" => "updatePlugin", "nonce" => ($context["updateNonce"] ?? $this->getContext($context, "updateNonce"))]]);
            echo "&pluginName=' + encodeURIComponent(pluginsToUpdate.join(','));
                window.location.href = url;

                \$(this).prop('disabled', true);
            });

            \$('#select-plugin-all').on('change', function () {
                var self = this;
                \$('tbody#plugins td.select-cell input[type=checkbox]').each(function () {
                    if (\$(this).prop('disabled')) {
                        return;
                    }
                    \$(this).prop('checked', self.checked);
                });
            });
        });
    </script>

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

    // line 113
    public function getpluginActivateDeactivateAction($__name__ = null, $__isActivated__ = null, $__missingRequirements__ = null, $__deactivateNonce__ = null, $__activateNonce__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "isActivated" => $__isActivated__,
            "missingRequirements" => $__missingRequirements__,
            "deactivateNonce" => $__deactivateNonce__,
            "activateNonce" => $__activateNonce__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 114
            if (($context["isActivated"] ?? $this->getContext($context, "isActivated"))) {
                // line 115
                echo "<a href='index.php?module=CorePluginsAdmin&action=deactivate&pluginName=";
                echo \Piwik\piwik_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
                echo "&nonce=";
                echo \Piwik\piwik_escape_filter($this->env, ($context["deactivateNonce"] ?? $this->getContext($context, "deactivateNonce")), "html", null, true);
                echo "&redirectTo=referrer'>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Deactivate"]), "html", null, true);
                echo "</a>";
            } elseif (            // line 116
($context["missingRequirements"] ?? $this->getContext($context, "missingRequirements"))) {
                // line 117
                echo "        -
    ";
            } else {
                // line 119
                echo "<a href='index.php?module=CorePluginsAdmin&action=activate&pluginName=";
                echo \Piwik\piwik_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
                echo "&nonce=";
                echo \Piwik\piwik_escape_filter($this->env, ($context["activateNonce"] ?? $this->getContext($context, "activateNonce")), "html", null, true);
                echo "&redirectTo=referrer'>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Activate"]), "html", null, true);
                echo "</a>";
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

    // line 123
    public function getpluginsFilter(...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 124
            echo "
    <p class=\"row pluginsFilter\" piwik-plugin-filter>
        <span class=\"origin\">
            <strong>";
            // line 127
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Origin"]), "html", null, true);
            echo "</strong>
            <a data-filter-origin=\"all\" href=\"#\" class=\"active\">";
            // line 128
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_All"]), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-origin=\"core\" href=\"#\">";
            // line 129
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_OriginCore"]), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-origin=\"official\" href=\"#\">";
            // line 130
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_OriginOfficial"]), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-origin=\"thirdparty\" href=\"#\">";
            // line 131
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_OriginThirdParty"]), "html", null, true);
            echo "<span class=\"counter\"></span></a>
        </span>

        <span class=\"status\">
            <strong>";
            // line 135
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Status"]), "html", null, true);
            echo "</strong>
            <a data-filter-status=\"all\" href=\"#\" class=\"active\">";
            // line 136
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_All"]), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-status=\"active\" href=\"#\">";
            // line 137
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Active"]), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-status=\"inactive\" href=\"#\">";
            // line 138
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Inactive"]), "html", null, true);
            echo "<span class=\"counter\"></span></a>
        </span>
    </p>

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

    // line 144
    public function gettablePlugins($__pluginsInfo__ = null, $__pluginNamesHavingSettings__ = null, $__activateNonce__ = null, $__deactivateNonce__ = null, $__uninstallNonce__ = null, $__isTheme__ = null, $__marketplacePluginNames__ = null, $__displayAdminLinks__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "pluginsInfo" => $__pluginsInfo__,
            "pluginNamesHavingSettings" => $__pluginNamesHavingSettings__,
            "activateNonce" => $__activateNonce__,
            "deactivateNonce" => $__deactivateNonce__,
            "uninstallNonce" => $__uninstallNonce__,
            "isTheme" => $__isTheme__,
            "marketplacePluginNames" => $__marketplacePluginNames__,
            "displayAdminLinks" => $__displayAdminLinks__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 145
            echo "
    <div id=\"confirmUninstallPlugin\" class=\"ui-confirm\">

        <h2 id=\"uninstallPluginConfirm\">";
            // line 148
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_UninstallConfirm"]), "html", null, true);
            echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 149
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Yes"]), "html", null, true);
            echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
            // line 150
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_No"]), "html", null, true);
            echo "\"/>

    </div>

    <table piwik-content-table>
        <thead>
        <tr>
            <th>";
            // line 157
            if (($context["isTheme"] ?? $this->getContext($context, "isTheme"))) {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Theme"]), "html", null, true);
            } else {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Plugin"]), "html", null, true);
            }
            echo "</th>
            <th>";
            // line 158
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Description"]), "html", null, true);
            echo "</th>
            <th class=\"status\">";
            // line 159
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Status"]), "html", null, true);
            echo "</th>
            ";
            // line 160
            if (($context["displayAdminLinks"] ?? $this->getContext($context, "displayAdminLinks"))) {
                // line 161
                echo "                <th class=\"action-links\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Action"]), "html", null, true);
                echo "</th>
            ";
            }
            // line 163
            echo "        </tr>
        </thead>
        <tbody id=\"plugins\">
        ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pluginsInfo"] ?? $this->getContext($context, "pluginsInfo")));
            foreach ($context['_seq'] as $context["name"] => $context["plugin"]) {
                // line 167
                echo "            ";
                $context["isDefaultTheme"] = (($context["isTheme"] ?? $this->getContext($context, "isTheme")) && ($context["name"] == "Morpheus"));
                // line 168
                echo "            ";
                if ((($this->getAttribute($context["plugin"], "alwaysActivated", [], "any", true, true) &&  !$this->getAttribute($context["plugin"], "alwaysActivated", [])) || ($context["isTheme"] ?? $this->getContext($context, "isTheme")))) {
                    // line 169
                    echo "                <tr ";
                    if ($this->getAttribute($context["plugin"], "activated", [])) {
                        echo "class=\"active-plugin\"";
                    } else {
                        echo "class=\"inactive-plugin\"";
                    }
                    echo " data-filter-status=\"";
                    if ($this->getAttribute($context["plugin"], "activated", [])) {
                        echo "active";
                    } else {
                        echo "inactive";
                    }
                    echo "\" data-filter-origin=\"";
                    if ($this->getAttribute($context["plugin"], "isCorePlugin", [])) {
                        echo "core";
                    } elseif ($this->getAttribute($context["plugin"], "isOfficialPlugin", [])) {
                        echo "official";
                    } else {
                        echo "thirdparty";
                    }
                    echo "\">
                    <td class=\"name\">
                        <a name=\"";
                    // line 171
                    echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html_attr");
                    echo "\"></a>
                        ";
                    // line 172
                    if (( !$this->getAttribute($context["plugin"], "isCorePlugin", []) && twig_in_filter($context["name"], ($context["marketplacePluginNames"] ?? $this->getContext($context, "marketplacePluginNames"))))) {
                        // line 173
                        echo "<a href=\"javascript:void(0);\"
                               piwik-plugin-name=\"";
                        // line 174
                        echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html_attr");
                        echo "\"
                            >";
                        // line 175
                        echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "</a>";
                    } else {
                        // line 177
                        echo "                            ";
                        echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "
                        ";
                    }
                    // line 179
                    echo "                        <span class=\"plugin-version\" ";
                    if ($this->getAttribute($context["plugin"], "isCorePlugin", [])) {
                        echo "title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_CorePluginTooltip"]), "html", null, true);
                        echo "\"";
                    }
                    echo ">(";
                    if ($this->getAttribute($context["plugin"], "isCorePlugin", [])) {
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_OriginCore"]), "html", null, true);
                    } else {
                        echo "v";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "info", []), "version", []), "html", null, true);
                    }
                    echo ")</span>

                        ";
                    // line 181
                    if (twig_in_filter($context["name"], ($context["pluginNamesHavingSettings"] ?? $this->getContext($context, "pluginNamesHavingSettings")))) {
                        // line 182
                        echo "                            <br /><br />
                            <a href=\"";
                        // line 183
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "CoreAdminHome", "action" => "generalSettings"]]), "html", null, true);
                        echo "#";
                        echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html_attr");
                        echo "\" class=\"settingsLink\">";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Settings"]), "html", null, true);
                        echo "</a>
                        ";
                    }
                    // line 185
                    echo "                    </td>
                    <td class=\"desc\">
                        <div class=\"plugin-desc-missingrequirements\">
                            ";
                    // line 188
                    if (($this->getAttribute($context["plugin"], "missingRequirements", [], "any", true, true) && $this->getAttribute($context["plugin"], "missingRequirements", []))) {
                        // line 189
                        echo "                                ";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "missingRequirements", []), "html", null, true);
                        echo "
                                <br />
                            ";
                    }
                    // line 192
                    echo "                        </div>
                        <div class=\"plugin-desc-text\">

                            ";
                    // line 195
                    echo nl2br(\Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "info", []), "description", []), "html", null, true));
                    echo "

                            ";
                    // line 197
                    if (( !twig_test_empty((($this->getAttribute($this->getAttribute($context["plugin"], "info", [], "any", false, true), "homepage", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["plugin"], "info", [], "any", false, true), "homepage", []))) : (""))) && !twig_in_filter($this->getAttribute($this->getAttribute($context["plugin"], "info", []), "homepage", []), [0 => "http://piwik.org", 1 => "http://www.piwik.org", 2 => "http://piwik.org/", 3 => "http://www.piwik.org/", 4 => "https://piwik.org", 5 => "https://www.piwik.org", 6 => "https://piwik.org/", 7 => "https://www.piwik.org/", 8 => "http://matomo.org", 9 => "http://www.matomo.org", 10 => "http://matomo.org/", 11 => "http://www.matomo.org/", 12 => "https://matomo.org", 13 => "https://www.matomo.org", 14 => "https://matomo.org/", 15 => "https://www.matomo.org/"]))) {
                        // line 203
                        echo "                                <span class=\"plugin-homepage\">
                            <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
                        // line 204
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "info", []), "homepage", []), "html_attr");
                        echo "\">(";
                        echo twig_replace_filter(call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_PluginHomepage"]), [" " => "&nbsp;"]);
                        echo ")</a>
                        </span>
                            ";
                    }
                    // line 207
                    echo "
                            ";
                    // line 208
                    if (($this->getAttribute($this->getAttribute($context["plugin"], "info", [], "any", false, true), "donate", [], "any", true, true) && twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "info", []), "donate", [])))) {
                        // line 209
                        echo "                                <div class=\"plugin-donation\">
                                    ";
                        // line 210
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_LikeThisPlugin"]), "html", null, true);
                        echo " <a href=\"javascript:;\" class=\"plugin-donation-link\" data-overlay-id=\"overlay-";
                        echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html_attr");
                        echo "\">";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_ConsiderDonating"]), "html", null, true);
                        echo "</a>
                                    <div id=\"overlay-";
                        // line 211
                        echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html_attr");
                        echo "\" class=\"donation-overlay ui-confirm\" title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_LikeThisPlugin"]), "html", null, true);
                        echo "\">
                                        <p>";
                        // line 212
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_CommunityContributedPlugin"]), "html", null, true);
                        echo "</p>
                                        <p>";
                        // line 213
                        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_ConsiderDonatingCreatorOf", (("<b>" . $context["name"]) . "</b>")]);
                        echo "</p>
                                        <div class=\"donation-links\">
                                            ";
                        // line 215
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", [], "any", false, true), "donate", [], "any", false, true), "paypal", [], "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", []), "donate", []), "paypal", []))) {
                            // line 216
                            echo "                                                <a class=\"donation-link paypal\" target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.paypal.com/cgi-bin/webscr?cmd=_donations&item_name=Matomo%20Plugin%20";
                            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $context["name"], "url"), "html", null, true);
                            echo "&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted&business=";
                            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", []), "donate", []), "paypal", []), "url"), "html", null, true);
                            echo "\"><img src=\"plugins/CorePluginsAdmin/images/paypal_donate.png\" height=\"30\"/></a>
                                            ";
                        }
                        // line 218
                        echo "                                            ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", [], "any", false, true), "donate", [], "any", false, true), "flattr", [], "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", []), "donate", []), "flattr", []))) {
                            // line 219
                            echo "                                                <a class=\"donation-link flattr\" target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", []), "donate", []), "flattr", []), "html", null, true);
                            echo "\"><img class=\"alignnone\" title=\"Flattr\" alt=\"\" src=\"plugins/CorePluginsAdmin/images/flattr.png\" height=\"29\" /></a>
                                            ";
                        }
                        // line 221
                        echo "                                            ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", [], "any", false, true), "donate", [], "any", false, true), "bitcoin", [], "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", []), "donate", []), "bitcoin", []))) {
                            // line 222
                            echo "                                                <div class=\"donation-link bitcoin\">
                                                    <span>Donate Bitcoins to:</span>
                                                    <a href=\"bitcoin:";
                            // line 224
                            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", []), "donate", []), "bitcoin", []), "url"), "html", null, true);
                            echo "\">";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", []), "donate", []), "bitcoin", []), "html", null, true);
                            echo "</a>
                                                </div>
                                            ";
                        }
                        // line 227
                        echo "                                        </div>
                                        <input role=\"no\" type=\"button\" value=\"";
                        // line 228
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Close"]), "html", null, true);
                        echo "\"/>
                                    </div>
                                </div>
                            ";
                    }
                    // line 232
                    echo "                        </div>
                        ";
                    // line 233
                    if ($this->getAttribute($this->getAttribute($context["plugin"], "info", [], "any", false, true), "license", [], "any", true, true)) {
                        // line 234
                        echo "                            <div class=\"plugin-license\">
                                ";
                        // line 235
                        if ($this->getAttribute($this->getAttribute($context["plugin"], "info", [], "any", false, true), "license_file", [], "any", true, true)) {
                            echo "<a title=\"";
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_LicenseHomepage"]), "html", null, true);
                            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=showLicense&pluginName=";
                            echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html", null, true);
                            echo "\">";
                        }
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "info", []), "license", []), "html", null, true);
                        if ($this->getAttribute($this->getAttribute($context["plugin"], "info", [], "any", false, true), "license_file", [], "any", true, true)) {
                            echo "</a>";
                        }
                        // line 236
                        echo "                            </div>
                        ";
                    }
                    // line 238
                    echo "                        ";
                    if ($this->getAttribute($this->getAttribute($context["plugin"], "info", [], "any", false, true), "authors", [], "any", true, true)) {
                        // line 239
                        echo "                            <div class=\"plugin-author\">
                                By
                                    ";
                        // line 241
                        if ($this->getAttribute($this->getAttribute($context["plugin"], "info", [], "any", false, true), "authors", [], "any", true, true)) {
                            // line 242
                            ob_start();
                            // line 243
                            echo "                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["plugin"], "info", []), "authors", []));
                            $context['loop'] = [
                              'parent' => $context['_parent'],
                              'index0' => 0,
                              'index'  => 1,
                              'first'  => true,
                            ];
                            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                                if ($this->getAttribute($context["author"], "name", [])) {
                                    // line 244
                                    echo "                                            ";
                                    if ($this->getAttribute($context["author"], "homepage", [], "any", true, true)) {
                                        // line 245
                                        echo "                                                <a title=\"";
                                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_AuthorHomepage"]), "html", null, true);
                                        echo "\" href=\"";
                                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "homepage", []), "html", null, true);
                                        echo "\" rel=\"noreferrer noopener\" target=\"_blank\">";
                                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "name", []), "html", null, true);
                                        echo "</a>
                                            ";
                                    } else {
                                        // line 247
                                        echo "                                                ";
                                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "name", []), "html", null, true);
                                        echo "
                                            ";
                                    }
                                    // line 249
                                    echo "                                            ";
                                    if (($this->getAttribute($context["loop"], "index", []) < twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "info", []), "authors", [])))) {
                                        // line 250
                                        echo "                                                ,
                                            ";
                                    }
                                    // line 252
                                    echo "                                        ";
                                    ++$context['loop']['index0'];
                                    ++$context['loop']['index'];
                                    $context['loop']['first'] = false;
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 253
                            echo "                                    ";
                            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                        }
                        // line 254
                        echo ".
                            </div>
                        ";
                    }
                    // line 257
                    echo "                    </td>
                    <td class=\"status\" ";
                    // line 258
                    if (($context["isDefaultTheme"] ?? $this->getContext($context, "isDefaultTheme"))) {
                        echo "style=\"border-left-width:0px;\"";
                    }
                    echo ">
                        ";
                    // line 259
                    if ( !($context["isDefaultTheme"] ?? $this->getContext($context, "isDefaultTheme"))) {
                        // line 261
                        if ($this->getAttribute($context["plugin"], "activated", [])) {
                            // line 262
                            echo "                                ";
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Active"]), "html", null, true);
                            echo "
                            ";
                        } else {
                            // line 264
                            echo "                                ";
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Inactive"]), "html", null, true);
                            echo "
                                ";
                            // line 265
                            if (($this->getAttribute($context["plugin"], "uninstallable", []) && ($context["displayAdminLinks"] ?? $this->getContext($context, "displayAdminLinks")))) {
                                echo " <br/> - <a data-plugin-name=\"";
                                echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html_attr");
                                echo "\" class=\"uninstall\" href='index.php?module=CorePluginsAdmin&action=uninstall&pluginName=";
                                echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html", null, true);
                                echo "&nonce=";
                                echo \Piwik\piwik_escape_filter($this->env, ($context["uninstallNonce"] ?? $this->getContext($context, "uninstallNonce")), "html", null, true);
                                echo "'>";
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_ActionUninstall"]), "html", null, true);
                                echo "</a>";
                            }
                            // line 266
                            echo "                            ";
                        }
                    }
                    // line 269
                    echo "                    </td>

                    ";
                    // line 271
                    if (($context["displayAdminLinks"] ?? $this->getContext($context, "displayAdminLinks"))) {
                        // line 272
                        echo "                        <td class=\"togl action-links\" ";
                        if (($context["isDefaultTheme"] ?? $this->getContext($context, "isDefaultTheme"))) {
                            echo "style=\"border-left-width:0px;\"";
                        }
                        echo ">
                            ";
                        // line 273
                        if ( !($context["isDefaultTheme"] ?? $this->getContext($context, "isDefaultTheme"))) {
                            // line 275
                            if (($this->getAttribute($context["plugin"], "invalid", [], "any", true, true) || $this->getAttribute($context["plugin"], "alwaysActivated", []))) {
                                // line 276
                                echo "                                    -
                                ";
                            } else {
                                // line 278
                                echo "                                    ";
                                echo $this->getAttribute($this, "pluginActivateDeactivateAction", [0 => $context["name"], 1 => $this->getAttribute($context["plugin"], "activated", []), 2 => $this->getAttribute($context["plugin"], "missingRequirements", []), 3 => ($context["deactivateNonce"] ?? $this->getContext($context, "deactivateNonce")), 4 => ($context["activateNonce"] ?? $this->getContext($context, "activateNonce"))], "method");
                                echo "
                                ";
                            }
                        }
                        // line 282
                        echo "                        </td>
                    ";
                    }
                    // line 284
                    echo "                </tr>
            ";
                }
                // line 286
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 287
            echo "        </tbody>
    </table>

    ";
            // line 290
            if (($context["displayAdminLinks"] ?? $this->getContext($context, "displayAdminLinks"))) {
                // line 291
                echo "    <div class=\"tableActionBar\">
        ";
                // line 292
                if (($context["isTheme"] ?? $this->getContext($context, "isTheme"))) {
                    // line 293
                    echo "            <a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["action" => "browseThemes", "sort" => ""]]), "html", null, true);
                    echo "\"><span class=\"icon-add\"></span> ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_InstallNewThemes"]), "html", null, true);
                    echo "</a>
        ";
                } else {
                    // line 295
                    echo "            <a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["action" => "browsePlugins", "sort" => ""]]), "html", null, true);
                    echo "\"><span class=\"icon-add\"></span> ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_InstallNewPlugins"]), "html", null, true);
                    echo "</a>
        ";
                }
                // line 297
                echo "    </div>
    ";
            }
            // line 299
            echo "
    <div class=\"footer-message\">
        ";
            // line 301
            ob_start();
            // line 302
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pluginsInfo"] ?? $this->getContext($context, "pluginsInfo")));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["plugin"]) {
                // line 303
                echo "                ";
                if (($this->getAttribute($context["plugin"], "alwaysActivated", [], "any", true, true) && $this->getAttribute($context["plugin"], "alwaysActivated", []))) {
                    // line 304
                    echo "                    ";
                    echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html", null, true);
                    if ( !$this->getAttribute($context["loop"], "last", [])) {
                        echo ", ";
                    }
                    // line 305
                    echo "                 ";
                }
                // line 306
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 307
            echo "        ";
            $context["pluginsAlwaysActivated"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 308
            echo "        ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_AlwaysActivatedPluginsList", ($context["pluginsAlwaysActivated"] ?? $this->getContext($context, "pluginsAlwaysActivated"))]), "html", null, true);
            echo "
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
        return "@CorePluginsAdmin/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  958 => 308,  955 => 307,  941 => 306,  938 => 305,  932 => 304,  929 => 303,  911 => 302,  909 => 301,  905 => 299,  901 => 297,  893 => 295,  885 => 293,  883 => 292,  880 => 291,  878 => 290,  873 => 287,  867 => 286,  863 => 284,  859 => 282,  852 => 278,  848 => 276,  846 => 275,  844 => 273,  837 => 272,  835 => 271,  831 => 269,  827 => 266,  815 => 265,  810 => 264,  804 => 262,  802 => 261,  800 => 259,  794 => 258,  791 => 257,  786 => 254,  782 => 253,  772 => 252,  768 => 250,  765 => 249,  759 => 247,  749 => 245,  746 => 244,  734 => 243,  732 => 242,  730 => 241,  726 => 239,  723 => 238,  719 => 236,  707 => 235,  704 => 234,  702 => 233,  699 => 232,  692 => 228,  689 => 227,  681 => 224,  677 => 222,  674 => 221,  668 => 219,  665 => 218,  657 => 216,  655 => 215,  650 => 213,  646 => 212,  640 => 211,  632 => 210,  629 => 209,  627 => 208,  624 => 207,  616 => 204,  613 => 203,  611 => 197,  606 => 195,  601 => 192,  594 => 189,  592 => 188,  587 => 185,  578 => 183,  575 => 182,  573 => 181,  556 => 179,  550 => 177,  546 => 175,  542 => 174,  539 => 173,  537 => 172,  533 => 171,  509 => 169,  506 => 168,  503 => 167,  499 => 166,  494 => 163,  488 => 161,  486 => 160,  482 => 159,  478 => 158,  470 => 157,  460 => 150,  456 => 149,  452 => 148,  447 => 145,  428 => 144,  408 => 138,  404 => 137,  400 => 136,  396 => 135,  389 => 131,  385 => 130,  381 => 129,  377 => 128,  373 => 127,  368 => 124,  357 => 123,  335 => 119,  331 => 117,  329 => 116,  321 => 115,  319 => 114,  303 => 113,  269 => 93,  246 => 72,  238 => 69,  234 => 67,  226 => 65,  224 => 64,  217 => 63,  215 => 62,  211 => 61,  202 => 60,  200 => 59,  196 => 57,  190 => 55,  184 => 53,  182 => 52,  176 => 49,  172 => 48,  168 => 46,  160 => 44,  153 => 42,  145 => 40,  143 => 39,  136 => 35,  132 => 34,  125 => 30,  117 => 29,  106 => 26,  102 => 25,  95 => 21,  91 => 20,  87 => 19,  83 => 18,  79 => 17,  65 => 6,  61 => 4,  58 => 3,  44 => 2,  39 => 143,  36 => 122,  33 => 112,  30 => 1,);
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
{% macro tablePluginUpdates(pluginsHavingUpdate, updateNonce, isMultiServerEnvironment) %}
    {% import '@Marketplace/macros.twig' as marketplaceMacro %}

    <div>
        <a id=\"update-selected-plugins\" href=\"javascript:\" class=\"btn disabled\">{{ 'CorePluginsAdmin_UpdateSelected'|translate }}</a>
    </div>
    <table piwik-content-table>
        <thead>
        <tr>
            <th>
                <span class=\"checkbox-container\">
                    <input type=\"checkbox\" id=\"select-plugin-all\"/>
                    <label for=\"select-plugin-all\"></label>
                </span>
            </th>
            <th>{{ 'General_Plugin'|translate }}</th>
            <th class=\"num\">{{ 'CorePluginsAdmin_Version'|translate }}</th>
            <th>{{ 'General_Description'|translate }}</th>
            <th class=\"status\">{{ 'CorePluginsAdmin_Status'|translate }}</th>
            <th class=\"action-links\">{{ 'General_Action'|translate }}</th>
        </tr>
        </thead>
        <tbody id=\"plugins\">
        {% for name,plugin in pluginsHavingUpdate %}
            <tr {% if plugin.isActivated|default(false) %}class=\"active-plugin\"{% else %}class=\"inactive-plugin\"{% endif %}>
                <td class=\"select-cell\">
                    <span class=\"checkbox-container\">
                        <input type=\"checkbox\" id=\"select-plugin-{{ plugin.name|e('html_attr') }}\" {% if plugin.isDownloadable is defined and not plugin.isDownloadable %}disabled=\"disabled\"{% endif %} />
                        <label for=\"select-plugin-{{ plugin.name|e('html_attr') }}\"></label>
                    </span>
                </td>
                <td class=\"name\">
                    <a href=\"javascript:void(0);\" piwik-plugin-name=\"{{ plugin.name|e('html_attr') }}\" class=\"plugin-details\">
                        {{ plugin.name }}
                    </a>
                </td>
                <td class=\"vers\">
                    {% if plugin.changelog is defined and plugin.changelog and plugin.changelog.url is defined and plugin.changelog.url %}
                        <a href=\"{{ plugin.changelog.url|e('html_attr') }}\" title=\"{{ 'CorePluginsAdmin_Changelog'|translate }}\"
                           target=\"_blank\" rel=\"noreferrer noopener\"
                        >{{ plugin.currentVersion }} => {{ plugin.latestVersion }}</a>
                    {% else %}
                        {{ plugin.currentVersion }} => {{ plugin.latestVersion }}
                    {% endif %}
                </td>
                <td class=\"desc\">
                    {{ plugin.description }}
                    {{ marketplaceMacro.missingRequirementsPleaseUpdateNotice(plugin) }}
                </td>
                <td class=\"status\">
                    {% if plugin.isActivated %}
                        {{ 'CorePluginsAdmin_Active'|translate }}
                    {% else %}
                        {{ 'CorePluginsAdmin_Inactive'|translate }}
                    {% endif %}
                </td>
                <td class=\"togl action-links\">
                    {% if plugin.isDownloadable is defined and not plugin.isDownloadable %}
                        <span title=\"{{ 'CorePluginsAdmin_PluginNotDownloadable'|translate|e('html_attr') }} {% if plugin.isPaid %}{{ 'CorePluginsAdmin_PluginNotDownloadablePaidReason'|translate|e('html_attr') }}{% endif %}\"
                          >{{ 'CorePluginsAdmin_NotDownloadable'|translate|e('html_attr') }}</span>
                    {% elseif isMultiServerEnvironment %}
                        <a onclick=\"\$(this).css('display', 'none')\" href=\"{{ linkTo({'action':'download', 'module': 'Marketplace', 'pluginName': plugin.name, 'nonce': (plugin.name|nonce)}) }}\">{{ 'General_Download'|translate }}</a>
                    {% elseif 0 == plugin.missingRequirements|length %}
                        <a href=\"{{ linkTo({'action':'updatePlugin', 'module': 'Marketplace', 'pluginName': plugin.name, 'nonce': updateNonce}) }}\">{{ 'CoreUpdater_UpdateTitle'|translate }}</a>
                    {% else %}
                        -
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <script>
        \$(function () {
            \$('span.checkbox-container').on('change', function() {
                var isAtLeastOneChecked = \$('span.checkbox-container > input:checked').length >= 1;
                isAtLeastOneChecked ? \$('#update-selected-plugins').removeClass('disabled') : \$('#update-selected-plugins').addClass('disabled');
            });

            \$('#update-selected-plugins').on('click', function () {
                var pluginsToUpdate = [];
                \$('tbody#plugins td.select-cell input').each(function () {
                    if (!this.checked) {
                        return;
                    }

                    var pluginName = \$(this).closest('tr').find('.name .plugin-details').attr('piwik-plugin-name');
                    pluginsToUpdate.push(pluginName);
                });

                var url = '{{ linkTo({'module':'Marketplace','action':'updatePlugin','nonce':updateNonce})|raw }}&pluginName=' + encodeURIComponent(pluginsToUpdate.join(','));
                window.location.href = url;

                \$(this).prop('disabled', true);
            });

            \$('#select-plugin-all').on('change', function () {
                var self = this;
                \$('tbody#plugins td.select-cell input[type=checkbox]').each(function () {
                    if (\$(this).prop('disabled')) {
                        return;
                    }
                    \$(this).prop('checked', self.checked);
                });
            });
        });
    </script>

{% endmacro %}

{% macro pluginActivateDeactivateAction(name, isActivated, missingRequirements, deactivateNonce, activateNonce) -%}
    {%- if isActivated -%}
        <a href='index.php?module=CorePluginsAdmin&action=deactivate&pluginName={{ name }}&nonce={{ deactivateNonce }}&redirectTo=referrer'>{{ 'CorePluginsAdmin_Deactivate'|translate }}</a>
    {%- elseif missingRequirements %}
        -
    {% else -%}
        <a href='index.php?module=CorePluginsAdmin&action=activate&pluginName={{ name }}&nonce={{  activateNonce }}&redirectTo=referrer'>{{ 'CorePluginsAdmin_Activate'|translate }}</a>
    {%- endif -%}
{%- endmacro %}

{% macro pluginsFilter() %}

    <p class=\"row pluginsFilter\" piwik-plugin-filter>
        <span class=\"origin\">
            <strong>{{ 'CorePluginsAdmin_Origin'|translate }}</strong>
            <a data-filter-origin=\"all\" href=\"#\" class=\"active\">{{ 'General_All'|translate }}<span class=\"counter\"></span></a> |
            <a data-filter-origin=\"core\" href=\"#\">{{ 'CorePluginsAdmin_OriginCore'|translate }}<span class=\"counter\"></span></a> |
            <a data-filter-origin=\"official\" href=\"#\">{{ 'CorePluginsAdmin_OriginOfficial'|translate }}<span class=\"counter\"></span></a> |
            <a data-filter-origin=\"thirdparty\" href=\"#\">{{ 'CorePluginsAdmin_OriginThirdParty'|translate }}<span class=\"counter\"></span></a>
        </span>

        <span class=\"status\">
            <strong>{{ 'CorePluginsAdmin_Status'|translate }}</strong>
            <a data-filter-status=\"all\" href=\"#\" class=\"active\">{{ 'General_All'|translate }}<span class=\"counter\"></span></a> |
            <a data-filter-status=\"active\" href=\"#\">{{ 'CorePluginsAdmin_Active'|translate }}<span class=\"counter\"></span></a> |
            <a data-filter-status=\"inactive\" href=\"#\">{{ 'CorePluginsAdmin_Inactive'|translate }}<span class=\"counter\"></span></a>
        </span>
    </p>

{% endmacro %}

{% macro tablePlugins(pluginsInfo, pluginNamesHavingSettings, activateNonce, deactivateNonce, uninstallNonce, isTheme, marketplacePluginNames, displayAdminLinks) %}

    <div id=\"confirmUninstallPlugin\" class=\"ui-confirm\">

        <h2 id=\"uninstallPluginConfirm\">{{ 'CorePluginsAdmin_UninstallConfirm'|translate }}</h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>

    </div>

    <table piwik-content-table>
        <thead>
        <tr>
            <th>{% if isTheme %}{{ 'CorePluginsAdmin_Theme'|translate }}{% else %}{{ 'General_Plugin'|translate }}{% endif %}</th>
            <th>{{ 'General_Description'|translate }}</th>
            <th class=\"status\">{{ 'CorePluginsAdmin_Status'|translate }}</th>
            {% if (displayAdminLinks) %}
                <th class=\"action-links\">{{ 'General_Action'|translate }}</th>
            {% endif %}
        </tr>
        </thead>
        <tbody id=\"plugins\">
        {% for name,plugin in pluginsInfo %}
            {% set isDefaultTheme = isTheme and name == 'Morpheus' %}
            {% if (plugin.alwaysActivated is defined and not plugin.alwaysActivated) or isTheme %}
                <tr {% if plugin.activated %}class=\"active-plugin\"{% else %}class=\"inactive-plugin\"{% endif %} data-filter-status=\"{% if plugin.activated %}active{% else %}inactive{% endif %}\" data-filter-origin=\"{% if plugin.isCorePlugin %}core{% elseif plugin.isOfficialPlugin %}official{% else %}thirdparty{% endif %}\">
                    <td class=\"name\">
                        <a name=\"{{ name|e('html_attr') }}\"></a>
                        {% if not plugin.isCorePlugin and name in marketplacePluginNames -%}
                            <a href=\"javascript:void(0);\"
                               piwik-plugin-name=\"{{ name|e('html_attr') }}\"
                            >{{ name }}</a>
                        {%- else %}
                            {{ name }}
                        {% endif %}
                        <span class=\"plugin-version\" {% if plugin.isCorePlugin %}title=\"{{ 'CorePluginsAdmin_CorePluginTooltip'|translate }}\"{% endif %}>({% if plugin.isCorePlugin %}{{ 'CorePluginsAdmin_OriginCore'|translate }}{% else %}v{{ plugin.info.version }}{% endif %})</span>

                        {% if name in pluginNamesHavingSettings %}
                            <br /><br />
                            <a href=\"{{ linkTo({'module':'CoreAdminHome', 'action': 'generalSettings'}) }}#{{ name|e('html_attr') }}\" class=\"settingsLink\">{{ 'General_Settings'|translate }}</a>
                        {% endif %}
                    </td>
                    <td class=\"desc\">
                        <div class=\"plugin-desc-missingrequirements\">
                            {% if plugin.missingRequirements is defined and plugin.missingRequirements %}
                                {{  plugin.missingRequirements }}
                                <br />
                            {% endif %}
                        </div>
                        <div class=\"plugin-desc-text\">

                            {{ plugin.info.description|nl2br }}

                            {% if plugin.info.homepage|default is not empty and plugin.info.homepage not in [
                            'http://piwik.org', 'http://www.piwik.org', 'http://piwik.org/', 'http://www.piwik.org/',
                            'https://piwik.org', 'https://www.piwik.org', 'https://piwik.org/', 'https://www.piwik.org/',
                                'http://matomo.org', 'http://www.matomo.org', 'http://matomo.org/', 'http://www.matomo.org/',
                                'https://matomo.org', 'https://www.matomo.org', 'https://matomo.org/', 'https://www.matomo.org/'
                            ] %}
                                <span class=\"plugin-homepage\">
                            <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ plugin.info.homepage|e('html_attr') }}\">({{ 'CorePluginsAdmin_PluginHomepage'|translate|replace({' ': '&nbsp;'})|raw }})</a>
                        </span>
                            {% endif %}

                            {% if plugin.info.donate is defined and plugin.info.donate|length %}
                                <div class=\"plugin-donation\">
                                    {{ 'CorePluginsAdmin_LikeThisPlugin'|translate }} <a href=\"javascript:;\" class=\"plugin-donation-link\" data-overlay-id=\"overlay-{{ name|escape('html_attr') }}\">{{ 'CorePluginsAdmin_ConsiderDonating'|translate }}</a>
                                    <div id=\"overlay-{{ name|escape('html_attr') }}\" class=\"donation-overlay ui-confirm\" title=\"{{ 'CorePluginsAdmin_LikeThisPlugin'|translate }}\">
                                        <p>{{ 'CorePluginsAdmin_CommunityContributedPlugin'|translate }}</p>
                                        <p>{{ 'CorePluginsAdmin_ConsiderDonatingCreatorOf'|translate(\"<b>\" ~ name ~ \"</b>\")|raw }}</p>
                                        <div class=\"donation-links\">
                                            {% if plugin.info.donate.paypal is defined and plugin.info.donate.paypal %}
                                                <a class=\"donation-link paypal\" target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.paypal.com/cgi-bin/webscr?cmd=_donations&item_name=Matomo%20Plugin%20{{ name|escape('url') }}&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted&business={{ plugin.info.donate.paypal|escape('url') }}\"><img src=\"plugins/CorePluginsAdmin/images/paypal_donate.png\" height=\"30\"/></a>
                                            {% endif %}
                                            {% if plugin.info.donate.flattr is defined and plugin.info.donate.flattr %}
                                                <a class=\"donation-link flattr\" target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ plugin.info.donate.flattr }}\"><img class=\"alignnone\" title=\"Flattr\" alt=\"\" src=\"plugins/CorePluginsAdmin/images/flattr.png\" height=\"29\" /></a>
                                            {% endif %}
                                            {% if plugin.info.donate.bitcoin is defined and plugin.info.donate.bitcoin %}
                                                <div class=\"donation-link bitcoin\">
                                                    <span>Donate Bitcoins to:</span>
                                                    <a href=\"bitcoin:{{ plugin.info.donate.bitcoin|escape('url') }}\">{{ plugin.info.donate.bitcoin }}</a>
                                                </div>
                                            {% endif %}
                                        </div>
                                        <input role=\"no\" type=\"button\" value=\"{{ 'General_Close'|translate }}\"/>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                        {% if plugin.info.license is defined %}
                            <div class=\"plugin-license\">
                                {% if plugin.info.license_file is defined %}<a title=\"{{ 'CorePluginsAdmin_LicenseHomepage'|translate }}\" rel=\"noreferrer noopener\" target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=showLicense&pluginName={{ name }}\">{% endif %}{{ plugin.info.license }}{% if plugin.info.license_file is defined %}</a>{% endif %}
                            </div>
                        {% endif %}
                        {% if plugin.info.authors is defined %}
                            <div class=\"plugin-author\">
                                By
                                    {% if plugin.info.authors is defined -%}
                                    {% spaceless %}
                                        {% for author in plugin.info.authors if author.name %}
                                            {% if author.homepage is defined %}
                                                <a title=\"{{ 'CorePluginsAdmin_AuthorHomepage'|translate }}\" href=\"{{ author.homepage }}\" rel=\"noreferrer noopener\" target=\"_blank\">{{ author.name }}</a>
                                            {% else %}
                                                {{ author.name }}
                                            {% endif %}
                                            {% if loop.index < plugin.info.authors|length %}
                                                ,
                                            {% endif %}
                                        {% endfor %}
                                    {% endspaceless %}
                                    {%- endif %}.
                            </div>
                        {% endif %}
                    </td>
                    <td class=\"status\" {% if isDefaultTheme %}style=\"border-left-width:0px;\"{% endif %}>
                        {% if not isDefaultTheme -%}

                            {% if plugin.activated %}
                                {{ 'CorePluginsAdmin_Active'|translate }}
                            {% else %}
                                {{ 'CorePluginsAdmin_Inactive'|translate }}
                                {% if plugin.uninstallable and displayAdminLinks %} <br/> - <a data-plugin-name=\"{{ name|escape('html_attr') }}\" class=\"uninstall\" href='index.php?module=CorePluginsAdmin&action=uninstall&pluginName={{ name }}&nonce={{ uninstallNonce }}'>{{ 'CorePluginsAdmin_ActionUninstall'|translate }}</a>{% endif %}
                            {% endif %}

                        {%- endif %}
                    </td>

                    {% if displayAdminLinks %}
                        <td class=\"togl action-links\" {% if isDefaultTheme %}style=\"border-left-width:0px;\"{% endif %}>
                            {% if not isDefaultTheme -%}

                                {% if plugin.invalid is defined or plugin.alwaysActivated %}
                                    -
                                {% else %}
                                    {{ _self.pluginActivateDeactivateAction(name, plugin.activated, plugin.missingRequirements, deactivateNonce, activateNonce) }}
                                {% endif %}

                            {%- endif %}
                        </td>
                    {% endif %}
                </tr>
            {% endif %}
        {% endfor %}
        </tbody>
    </table>

    {% if displayAdminLinks %}
    <div class=\"tableActionBar\">
        {% if isTheme %}
            <a href=\"{{ linkTo({'action':'browseThemes', 'sort': ''}) }}\"><span class=\"icon-add\"></span> {{ 'CorePluginsAdmin_InstallNewThemes'|translate }}</a>
        {% else %}
            <a href=\"{{ linkTo({'action':'browsePlugins', 'sort': ''}) }}\"><span class=\"icon-add\"></span> {{ 'CorePluginsAdmin_InstallNewPlugins'|translate }}</a>
        {% endif %}
    </div>
    {% endif %}

    <div class=\"footer-message\">
        {% set pluginsAlwaysActivated %}
            {% for name,plugin in pluginsInfo %}
                {% if plugin.alwaysActivated is defined and plugin.alwaysActivated %}
                    {{ name }}{% if not loop.last %}, {% endif %}
                 {% endif %}
            {% endfor %}
        {% endset %}
        {{ 'CorePluginsAdmin_AlwaysActivatedPluginsList'|translate(pluginsAlwaysActivated) }}
    </div>

{% endmacro %}
", "@CorePluginsAdmin/macros.twig", "/var/www/zinecat.org/matomo/plugins/CorePluginsAdmin/templates/macros.twig");
    }
}
