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

/* @UserCountry/adminIndex.twig */
class __TwigTemplate_220a073103dcc01ca924592abc48fa7c36f3311b61bae4744b1a3738d7382077 extends \Twig\Template
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
        // line 1
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_Geolocation"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@UserCountry/adminIndex.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        $context["piwik"] = $this->loadTemplate("macros.twig", "@UserCountry/adminIndex.twig", 6)->unwrap();
        // line 7
        echo "
<div piwik-content-intro>
    <h2 piwik-enriched-headline
        help-url=\"https://matomo.org/docs/geo-locate/\"
        id=\"location-providers\">";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
    <p>";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_GeolocationPageDesc"]), "html", null, true);
        echo "</p>
</div>
<div piwik-content-block content-title=\"";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_LocationProvider"]), "html_attr");
        echo "\">
<div piwik-location-provider-selection=\"";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, ($context["currentProviderId"] ?? $this->getContext($context, "currentProviderId")), "html_attr");
        echo "\">

    ";
        // line 17
        if ( !($context["isThereWorkingProvider"] ?? $this->getContext($context, "isThereWorkingProvider"))) {
            // line 18
            echo "        <h3 style=\"margin-top:0;\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_HowToSetupGeoIP"]), "html", null, true);
            echo "</h3>
        ";
            // line 19
            if ( !twig_test_empty((((isset($context["dbipLiteUrl"]) || array_key_exists("dbipLiteUrl", $context))) ? (_twig_default_filter(($context["dbipLiteUrl"] ?? $this->getContext($context, "dbipLiteUrl")))) : ("")))) {
                // line 20
                echo "        <p>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_HowToSetupGeoIPIntro"]), "html", null, true);
                echo "</p>
        <ul style=\"list-style:disc !important;margin-left:2em;\">
            <li style=\"list-style-type: disc !important;\">";
                // line 22
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_HowToSetupGeoIP_Step1", (("<a rel=\"noreferrer noopener\" href=\"" . ($context["dbipLiteUrl"] ?? $this->getContext($context, "dbipLiteUrl"))) . "\">"), "</a>", "<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"http://db-ip.com/?refid=mtm\">", "</a>"]);
                echo "</li>
            <li style=\"list-style-type: disc !important;\">";
                // line 23
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_HowToSetupGeoIP_Step2", (("'" . ($context["dbipLiteFilename"] ?? $this->getContext($context, "dbipLiteFilename"))) . "'"), "<strong>", "</strong>", (("<strong>" . ($context["dbipLiteDesiredFilename"] ?? $this->getContext($context, "dbipLiteDesiredFilename"))) . "</strong>")]);
                echo "</li>
            <li style=\"list-style-type: disc !important;\">";
                // line 24
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_HowToSetupGeoIP_Step3", "<strong>", "</strong>", "<span style=\"color:green\"><strong>", "</strong></span>"]);
                echo "</li>
            <li style=\"list-style-type: disc !important;\">";
                // line 25
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_HowToSetupGeoIP_Step4"]), "html", null, true);
                echo "</li>
        </ul>
        ";
            } else {
                // line 28
                echo "        <p>";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_InstallGeoIp2", "<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"http://db-ip.com/?refid=mtm\">", "</a>"]);
                echo "</p>
        ";
            }
            // line 30
            echo "        <p>&nbsp;</p>
    ";
        }
        // line 32
        echo "
    <div class=\"row\">
        <div class=\"col s12 push-m9 m3\">";
        // line 34
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_InfoFor", ($context["thisIP"] ?? $this->getContext($context, "thisIP"))]), "html", null, true);
        echo "</div>
    </div>

    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locationProviders"] ?? $this->getContext($context, "locationProviders")));
        foreach ($context['_seq'] as $context["id"] => $context["provider"]) {
            if ($this->getAttribute($context["provider"], "isVisible", [])) {
                // line 38
                echo "    <div class=\"row form-group provider";
                echo \Piwik\piwik_escape_filter($this->env, $context["id"], "html_attr");
                echo "\">
        <div class=\"col s12 m4 l2\">
            <p>
                <input class=\"location-provider\"
                       name=\"location-provider\"
                       value=\"";
                // line 43
                echo \Piwik\piwik_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\"
                       type=\"radio\"
                       ng-model=\"locationSelector.selectedProvider\"
                       id=\"provider_input_";
                // line 46
                echo \Piwik\piwik_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["provider"], "status", []) != 1)) {
                    echo "disabled=\"disabled\"";
                }
                echo "/>
                <label for=\"provider_input_";
                // line 47
                echo \Piwik\piwik_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), [$this->getAttribute($context["provider"], "title", [])]), "html", null, true);
                echo "</label>
            </p>
            <p class=\"loc-provider-status\">
                ";
                // line 50
                if (($this->getAttribute($context["provider"], "status", []) == 0)) {
                    // line 51
                    echo "                    <span class=\"is-not-installed\">";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_NotInstalled"]), "html", null, true);
                    echo "</span>
                ";
                } elseif (($this->getAttribute(                // line 52
$context["provider"], "status", []) == 1)) {
                    // line 53
                    echo "                    <span class=\"is-installed\">";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Installed"]), "html", null, true);
                    echo "</span>
                ";
                } elseif (($this->getAttribute(                // line 54
$context["provider"], "status", []) == 2)) {
                    // line 55
                    echo "                    <span class=\"is-broken\">";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Broken"]), "html", null, true);
                    echo "</span>
                ";
                }
                // line 57
                echo "            </p>
        </div>
        <div class=\"col s12 m4 l6\">
            <p>";
                // line 60
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), [$this->getAttribute($context["provider"], "description", [])]);
                echo "</p>
            ";
                // line 61
                if ((($this->getAttribute($context["provider"], "status", []) != 1) && $this->getAttribute($context["provider"], "install_docs", [], "any", true, true))) {
                    // line 62
                    echo "                <p>";
                    echo $this->getAttribute($context["provider"], "install_docs", []);
                    echo "</p>
            ";
                }
                // line 64
                echo "        </div>
        <div class=\"col s12 m4 l4\">
            ";
                // line 66
                if (($this->getAttribute($context["provider"], "status", []) == 1)) {
                    // line 67
                    echo "                <div class=\"form-help\">
                    ";
                    // line 68
                    if ((($context["thisIP"] ?? $this->getContext($context, "thisIP")) != "127.0.0.1")) {
                        // line 69
                        echo "                        ";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_CurrentLocationIntro"]), "html", null, true);
                        echo ":
                        <div>
                            <br/>
                            <div style=\"position: absolute;\"
                                 piwik-activity-indicator
                                 loading='locationSelector.updateLoading[";
                        // line 74
                        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($context["id"]), "html", null, true);
                        echo "]'></div>
                            <span class=\"location\"><strong>";
                        // line 75
                        echo $this->getAttribute($context["provider"], "location", []);
                        echo "</strong></span>
                        </div>
                        <div class=\"text-right\">
                            <a href=\"javascript:;\"
                               ng-click='locationSelector.refreshProviderInfo(";
                        // line 79
                        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($context["id"]), "html", null, true);
                        echo ")'>";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Refresh"]), "html", null, true);
                        echo "</a>
                        </div>
                    ";
                    } else {
                        // line 82
                        echo "                        ";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_CannotLocalizeLocalIP", ($context["thisIP"] ?? $this->getContext($context, "thisIP"))]), "html", null, true);
                        echo "
                    ";
                    }
                    // line 84
                    echo "                </div>
            ";
                }
                // line 86
                echo "            ";
                if (($this->getAttribute($context["provider"], "statusMessage", [], "any", true, true) && $this->getAttribute($context["provider"], "statusMessage", []))) {
                    // line 87
                    echo "                <div class=\"form-help\">
                    ";
                    // line 88
                    if (($this->getAttribute($context["provider"], "status", []) == 2)) {
                        echo "<strong>";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Error"]), "html", null, true);
                        echo ":</strong> ";
                    }
                    echo $this->getAttribute($context["provider"], "statusMessage", []);
                    echo "
                </div>
            ";
                }
                // line 91
                echo "            ";
                if (($this->getAttribute($context["provider"], "extra_message", [], "any", true, true) && $this->getAttribute($context["provider"], "extra_message", []))) {
                    // line 92
                    echo "                <div class=\"form-help\">
                    ";
                    // line 93
                    echo $this->getAttribute($context["provider"], "extra_message", []);
                    echo "
                </div>
            ";
                }
                // line 96
                echo "        </div>
    </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
    <div piwik-save-button onconfirm=\"locationSelector.save()\" saving=\"locationSelector.isLoading\"></div>

</div>
</div>

";
        // line 105
        if ((((isset($context["geoIPLegacyLocUrl"]) || array_key_exists("geoIPLegacyLocUrl", $context)) && ($context["geoIPLegacyLocUrl"] ?? $this->getContext($context, "geoIPLegacyLocUrl"))) && ($context["isInternetEnabled"] ?? $this->getContext($context, "isInternetEnabled")))) {
            // line 106
            echo "    ";
            // line 107
            echo "    <div piwik-content-block content-title=\"Automatic Updates for GeoIP Legacy\">

        <p>Setting up automatic updates for GeoIP Legacy is no longer supported.</p>

        <div class=\"notification system notification-warning\">
            ";
            // line 112
            if (twig_in_filter("GeoLite", ($context["geoIPLegacyLocUrl"] ?? $this->getContext($context, "geoIPLegacyLocUrl")))) {
                // line 113
                echo "                <div>Maxmind announced to discontinue updates to the GeoLite Legacy databases as of April 1, 2018.</div>
            ";
            }
            // line 115
            echo "            <strong>Please consider switching to GeoIP 2 soon! GeoIP Legacy Support is deprecated and will be removed in one of the next major releases.</strong>
        </div>

        ";
            // line 118
            if (((($context["geoIPLegacyLocUrl"] ?? $this->getContext($context, "geoIPLegacyLocUrl")) || ($context["geoIPLegacyIspUrl"] ?? $this->getContext($context, "geoIPLegacyIspUrl"))) || ($context["geoIPLegacyOrgUrl"] ?? $this->getContext($context, "geoIPLegacyOrgUrl")))) {
                // line 119
                echo "            <h3>GeoIP Legacy Auto Update</h3>

            <p>Your previous configuration for automatic updates for GeoIP legacy databases is still up and running. It will be automatically disabled and removed after switching to GeoIP2.</p>

            <p>Below you can find the current configuration:</p>

            ";
                // line 125
                if (($context["geoIPLegacyLocUrl"] ?? $this->getContext($context, "geoIPLegacyLocUrl"))) {
                    echo "<p>";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_LocationDatabase"]), "html_attr");
                    echo ": ";
                    echo \Piwik\piwik_escape_filter($this->env, ($context["geoIPLegacyLocUrl"] ?? $this->getContext($context, "geoIPLegacyLocUrl")), "html", null, true);
                    echo "</p>";
                }
                // line 126
                echo "            ";
                if (($context["geoIPLegacyIspUrl"] ?? $this->getContext($context, "geoIPLegacyIspUrl"))) {
                    echo "<p>";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_ISPDatabase"]), "html_attr");
                    echo ": ";
                    echo \Piwik\piwik_escape_filter($this->env, ($context["geoIPLegacyIspUrl"] ?? $this->getContext($context, "geoIPLegacyIspUrl")), "html", null, true);
                    echo "</p>";
                }
                // line 127
                echo "            ";
                if (($context["geoIPLegacyOrgUrl"] ?? $this->getContext($context, "geoIPLegacyOrgUrl"))) {
                    echo "<p>";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_OrgDatabase"]), "html_attr");
                    echo ": ";
                    echo \Piwik\piwik_escape_filter($this->env, ($context["geoIPLegacyOrgUrl"] ?? $this->getContext($context, "geoIPLegacyOrgUrl")), "html", null, true);
                    echo "</p>";
                }
                // line 128
                echo "            ";
                if (($context["geoIPLegacyUpdatePeriod"] ?? $this->getContext($context, "geoIPLegacyUpdatePeriod"))) {
                    echo "<p>";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_DownloadNewDatabasesEvery"]), "html_attr");
                    echo ": ";
                    echo \Piwik\piwik_escape_filter($this->env, ($context["geoIPLegacyUpdatePeriod"] ?? $this->getContext($context, "geoIPLegacyUpdatePeriod")), "html", null, true);
                    echo "</p>";
                }
                // line 129
                echo "
        ";
            }
            // line 131
            echo "    </div>
";
        }
        // line 133
        echo "
";
        // line 134
        if ((($context["isInternetEnabled"] ?? $this->getContext($context, "isInternetEnabled")) &&  !($context["notUsingGeoIpPlugin"] ?? $this->getContext($context, "notUsingGeoIpPlugin")))) {
            // line 135
            echo "    <div piwik-content-block
         content-title=\"";
            // line 136
            if ( !($context["geoIPDatabasesInstalled"] ?? $this->getContext($context, "geoIPDatabasesInstalled"))) {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_GeoIPDatabases"]), "html_attr");
            } else {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_SetupAutomaticUpdatesOfGeoIP"]), "html_attr");
            }
            echo "\"
         id=\"geoip-db-mangement\">

        <div piwik-location-provider-updater
             geoip-database-installed=\"";
            // line 140
            if (($context["geoIPDatabasesInstalled"] ?? $this->getContext($context, "geoIPDatabasesInstalled"))) {
                echo "1";
            } else {
                echo "0";
            }
            echo "\">

            ";
            // line 142
            if (($context["showGeoIPUpdateSection"] ?? $this->getContext($context, "showGeoIPUpdateSection"))) {
                // line 143
                echo "                ";
                if ( !($context["geoIPDatabasesInstalled"] ?? $this->getContext($context, "geoIPDatabasesInstalled"))) {
                    // line 144
                    echo "                    <div ng-show=\"!locationUpdater.geoipDatabaseInstalled\">
                        <div ng-show=\"locationUpdater.showPiwikNotManagingInfo\">
                            <h3>";
                    // line 146
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_PiwikNotManagingGeoIPDBs"]), "html_attr");
                    echo "</h3>
                            <div id=\"manage-geoip-dbs\">
                                <div class=\"row\" id=\"geoipdb-screen1\">
                                    <div class=\"geoipdb-column-1 col s6\">
                                        <p>";
                    // line 150
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_IWantToDownloadFreeGeoIP"]);
                    echo "</p>
                                    </div>
                                    <div class=\"geoipdb-column-2 col s6\">
                                        <p>";
                    // line 153
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_IPurchasedGeoIPDBs", "<a rel=\"noreferrer noopener\" href=\"http://www.maxmind.com/en/geolocation_landing?rId=piwik\">", "</a>", "<a rel=\"noreferrer noopener\" href=\"https://db-ip.com/db/?refid=mtm\">", "</a>"]);
                    echo "</p>
                                    </div>
                                    <div class=\"geoipdb-column-1 col s6\">
                                        <input type=\"button\" class=\"btn\"
                                               ng-click=\"locationUpdater.startDownloadFreeGeoIp()\"
                                               value=\"";
                    // line 158
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_GetStarted"]), "html", null, true);
                    echo "...\"/>
                                    </div>
                                    <div class=\"geoipdb-column-2 col s6\">
                                        <input type=\"button\" class=\"btn\"
                                               ng-click=\"locationUpdater.startAutomaticUpdateGeoIp()\"
                                               value=\"";
                    // line 163
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_GetStarted"]), "html", null, true);
                    echo "...\" id=\"start-automatic-update-geoip\"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
                    // line 168
                    if ( !twig_test_empty((((isset($context["dbipLiteUrl"]) || array_key_exists("dbipLiteUrl", $context))) ? (_twig_default_filter(($context["dbipLiteUrl"] ?? $this->getContext($context, "dbipLiteUrl")))) : ("")))) {
                        // line 169
                        echo "                        ";
                        ob_start();
                        echo "<a href=\"";
                        echo \Piwik\piwik_escape_filter($this->env, ($context["dbipLiteUrl"] ?? $this->getContext($context, "dbipLiteUrl")), "html_attr");
                        echo "\">";
                        echo \Piwik\piwik_escape_filter($this->env, ($context["dbipLiteFilename"] ?? $this->getContext($context, "dbipLiteFilename")), "html", null, true);
                        echo "</a>";
                        $context["downloadingDbLink"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 170
                        echo "                        ";
                    } else {
                        // line 171
                        echo "                        ";
                        $context["downloadingDbLink"] = "";
                        // line 172
                        echo "                        ";
                    }
                    // line 173
                    echo "                        <div id=\"geoipdb-screen2-download\" ng-show=\"locationUpdater.showFreeDownload\">
                            <div piwik-progressbar
                                 label=\"";
                    // line 175
                    echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_DownloadingDb", ($context["downloadingDbLink"] ?? $this->getContext($context, "downloadingDbLink"))]) . "...")), "html", null, true);
                    echo "\"
                                 progress=\"locationUpdater.progressFreeDownload\">
                            </div>
                        </div>
                    </div>
                ";
                }
                // line 181
                echo "
                ";
                // line 182
                $this->loadTemplate("@UserCountry/_updaterManage.twig", "@UserCountry/adminIndex.twig", 182)->display($context);
                // line 183
                echo "            ";
            } else {
                // line 184
                echo "                <p class=\"form-description\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_CannotSetupGeoIPAutoUpdating"]), "html", null, true);
                echo "</p>
            ";
            }
            // line 186
            echo "        </div>
    </div>
";
        }
        // line 189
        echo "
";
    }

    public function getTemplateName()
    {
        return "@UserCountry/adminIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 189,  492 => 186,  486 => 184,  483 => 183,  481 => 182,  478 => 181,  469 => 175,  465 => 173,  462 => 172,  459 => 171,  456 => 170,  447 => 169,  445 => 168,  437 => 163,  429 => 158,  421 => 153,  415 => 150,  408 => 146,  404 => 144,  401 => 143,  399 => 142,  390 => 140,  379 => 136,  376 => 135,  374 => 134,  371 => 133,  367 => 131,  363 => 129,  354 => 128,  345 => 127,  336 => 126,  328 => 125,  320 => 119,  318 => 118,  313 => 115,  309 => 113,  307 => 112,  300 => 107,  298 => 106,  296 => 105,  288 => 99,  279 => 96,  273 => 93,  270 => 92,  267 => 91,  256 => 88,  253 => 87,  250 => 86,  246 => 84,  240 => 82,  232 => 79,  225 => 75,  221 => 74,  212 => 69,  210 => 68,  207 => 67,  205 => 66,  201 => 64,  195 => 62,  193 => 61,  189 => 60,  184 => 57,  178 => 55,  176 => 54,  171 => 53,  169 => 52,  164 => 51,  162 => 50,  154 => 47,  146 => 46,  140 => 43,  131 => 38,  126 => 37,  120 => 34,  116 => 32,  112 => 30,  106 => 28,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  82 => 20,  80 => 19,  75 => 18,  73 => 17,  68 => 15,  64 => 14,  59 => 12,  55 => 11,  49 => 7,  47 => 6,  44 => 5,  39 => 1,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'UserCountry_Geolocation'|translate }}{% endset %}

{% block content %}
{% import 'macros.twig' as piwik %}

<div piwik-content-intro>
    <h2 piwik-enriched-headline
        help-url=\"https://matomo.org/docs/geo-locate/\"
        id=\"location-providers\">{{ title }}</h2>
    <p>{{ 'UserCountry_GeolocationPageDesc'|translate }}</p>
</div>
<div piwik-content-block content-title=\"{{ 'UserCountry_LocationProvider'|translate|e('html_attr') }}\">
<div piwik-location-provider-selection=\"{{ currentProviderId|e('html_attr') }}\">

    {% if not isThereWorkingProvider %}
        <h3 style=\"margin-top:0;\">{{ 'UserCountry_HowToSetupGeoIP'|translate }}</h3>
        {% if dbipLiteUrl|default is not empty %}
        <p>{{ 'UserCountry_HowToSetupGeoIPIntro'|translate }}</p>
        <ul style=\"list-style:disc !important;margin-left:2em;\">
            <li style=\"list-style-type: disc !important;\">{{ 'UserCountry_HowToSetupGeoIP_Step1'|translate('<a rel=\"noreferrer noopener\" href=\"'~dbipLiteUrl~'\">','</a>','<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"http://db-ip.com/?refid=mtm\">','</a>')|raw }}</li>
            <li style=\"list-style-type: disc !important;\">{{ 'UserCountry_HowToSetupGeoIP_Step2'|translate(\"'\"~dbipLiteFilename~\"'\",'<strong>','</strong>','<strong>'~dbipLiteDesiredFilename~'</strong>')|raw }}</li>
            <li style=\"list-style-type: disc !important;\">{{ 'UserCountry_HowToSetupGeoIP_Step3'|translate('<strong>','</strong>','<span style=\"color:green\"><strong>','</strong></span>')|raw }}</li>
            <li style=\"list-style-type: disc !important;\">{{ 'UserCountry_HowToSetupGeoIP_Step4'|translate }}</li>
        </ul>
        {% else %}
        <p>{{ 'UserCountry_InstallGeoIp2'|translate('<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"http://db-ip.com/?refid=mtm\">','</a>')|raw }}</p>
        {% endif %}
        <p>&nbsp;</p>
    {% endif %}

    <div class=\"row\">
        <div class=\"col s12 push-m9 m3\">{{ 'General_InfoFor'|translate(thisIP) }}</div>
    </div>

    {% for id,provider in locationProviders if provider.isVisible %}
    <div class=\"row form-group provider{{ id|e('html_attr') }}\">
        <div class=\"col s12 m4 l2\">
            <p>
                <input class=\"location-provider\"
                       name=\"location-provider\"
                       value=\"{{ id }}\"
                       type=\"radio\"
                       ng-model=\"locationSelector.selectedProvider\"
                       id=\"provider_input_{{ id }}\" {% if provider.status != 1 %}disabled=\"disabled\"{% endif %}/>
                <label for=\"provider_input_{{ id }}\">{{ provider.title|translate }}</label>
            </p>
            <p class=\"loc-provider-status\">
                {% if provider.status == 0 %}
                    <span class=\"is-not-installed\">{{ 'General_NotInstalled'|translate}}</span>
                {% elseif provider.status == 1 %}
                    <span class=\"is-installed\">{{ 'General_Installed'|translate }}</span>
                {% elseif provider.status == 2 %}
                    <span class=\"is-broken\">{{ 'General_Broken'|translate }}</span>
                {% endif %}
            </p>
        </div>
        <div class=\"col s12 m4 l6\">
            <p>{{ provider.description|translate|raw }}</p>
            {% if provider.status != 1 and provider.install_docs is defined %}
                <p>{{ provider.install_docs|raw }}</p>
            {% endif %}
        </div>
        <div class=\"col s12 m4 l4\">
            {% if provider.status == 1 %}
                <div class=\"form-help\">
                    {% if thisIP != '127.0.0.1' %}
                        {{ 'UserCountry_CurrentLocationIntro'|translate }}:
                        <div>
                            <br/>
                            <div style=\"position: absolute;\"
                                 piwik-activity-indicator
                                 loading='locationSelector.updateLoading[{{ id|json_encode }}]'></div>
                            <span class=\"location\"><strong>{{ provider.location|raw }}</strong></span>
                        </div>
                        <div class=\"text-right\">
                            <a href=\"javascript:;\"
                               ng-click='locationSelector.refreshProviderInfo({{ id|json_encode }})'>{{ 'General_Refresh'|translate }}</a>
                        </div>
                    {% else %}
                        {{ 'UserCountry_CannotLocalizeLocalIP'|translate(thisIP) }}
                    {% endif %}
                </div>
            {% endif %}
            {% if provider.statusMessage is defined and provider.statusMessage %}
                <div class=\"form-help\">
                    {% if provider.status == 2 %}<strong>{{ 'General_Error'|translate }}:</strong> {% endif %}{{ provider.statusMessage|raw }}
                </div>
            {% endif %}
            {% if provider.extra_message is defined and provider.extra_message %}
                <div class=\"form-help\">
                    {{ provider.extra_message|raw }}
                </div>
            {% endif %}
        </div>
    </div>
    {% endfor %}

    <div piwik-save-button onconfirm=\"locationSelector.save()\" saving=\"locationSelector.isLoading\"></div>

</div>
</div>

{% if geoIPLegacyLocUrl is defined and geoIPLegacyLocUrl and isInternetEnabled %}
    {# The text in this part is not translatable on purpose, as it will be removed again soon #}
    <div piwik-content-block content-title=\"Automatic Updates for GeoIP Legacy\">

        <p>Setting up automatic updates for GeoIP Legacy is no longer supported.</p>

        <div class=\"notification system notification-warning\">
            {% if 'GeoLite' in geoIPLegacyLocUrl %}
                <div>Maxmind announced to discontinue updates to the GeoLite Legacy databases as of April 1, 2018.</div>
            {% endif %}
            <strong>Please consider switching to GeoIP 2 soon! GeoIP Legacy Support is deprecated and will be removed in one of the next major releases.</strong>
        </div>

        {% if geoIPLegacyLocUrl or geoIPLegacyIspUrl or geoIPLegacyOrgUrl %}
            <h3>GeoIP Legacy Auto Update</h3>

            <p>Your previous configuration for automatic updates for GeoIP legacy databases is still up and running. It will be automatically disabled and removed after switching to GeoIP2.</p>

            <p>Below you can find the current configuration:</p>

            {% if geoIPLegacyLocUrl %}<p>{{ 'UserCountry_LocationDatabase'|translate|e('html_attr') }}: {{ geoIPLegacyLocUrl }}</p>{% endif %}
            {% if geoIPLegacyIspUrl %}<p>{{ 'UserCountry_ISPDatabase'|translate|e('html_attr') }}: {{ geoIPLegacyIspUrl }}</p>{% endif %}
            {% if geoIPLegacyOrgUrl %}<p>{{ 'UserCountry_OrgDatabase'|translate|e('html_attr') }}: {{ geoIPLegacyOrgUrl }}</p>{% endif %}
            {% if geoIPLegacyUpdatePeriod %}<p>{{ 'UserCountry_DownloadNewDatabasesEvery'|translate|e('html_attr') }}: {{ geoIPLegacyUpdatePeriod }}</p>{% endif %}

        {% endif %}
    </div>
{% endif %}

{% if isInternetEnabled and not notUsingGeoIpPlugin %}
    <div piwik-content-block
         content-title=\"{% if not geoIPDatabasesInstalled %}{{ 'UserCountry_GeoIPDatabases'|translate|e('html_attr') }}{% else %}{{ 'UserCountry_SetupAutomaticUpdatesOfGeoIP'|translate|e('html_attr') }}{% endif %}\"
         id=\"geoip-db-mangement\">

        <div piwik-location-provider-updater
             geoip-database-installed=\"{% if geoIPDatabasesInstalled %}1{% else %}0{% endif %}\">

            {% if showGeoIPUpdateSection %}
                {% if not geoIPDatabasesInstalled %}
                    <div ng-show=\"!locationUpdater.geoipDatabaseInstalled\">
                        <div ng-show=\"locationUpdater.showPiwikNotManagingInfo\">
                            <h3>{{ 'UserCountry_PiwikNotManagingGeoIPDBs'|translate|e('html_attr') }}</h3>
                            <div id=\"manage-geoip-dbs\">
                                <div class=\"row\" id=\"geoipdb-screen1\">
                                    <div class=\"geoipdb-column-1 col s6\">
                                        <p>{{ 'UserCountry_IWantToDownloadFreeGeoIP'|translate|raw }}</p>
                                    </div>
                                    <div class=\"geoipdb-column-2 col s6\">
                                        <p>{{ 'UserCountry_IPurchasedGeoIPDBs'|translate('<a rel=\"noreferrer noopener\" href=\"http://www.maxmind.com/en/geolocation_landing?rId=piwik\">','</a>','<a rel=\"noreferrer noopener\" href=\"https://db-ip.com/db/?refid=mtm\">','</a>')|raw }}</p>
                                    </div>
                                    <div class=\"geoipdb-column-1 col s6\">
                                        <input type=\"button\" class=\"btn\"
                                               ng-click=\"locationUpdater.startDownloadFreeGeoIp()\"
                                               value=\"{{ 'General_GetStarted'|translate }}...\"/>
                                    </div>
                                    <div class=\"geoipdb-column-2 col s6\">
                                        <input type=\"button\" class=\"btn\"
                                               ng-click=\"locationUpdater.startAutomaticUpdateGeoIp()\"
                                               value=\"{{ 'General_GetStarted'|translate }}...\" id=\"start-automatic-update-geoip\"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% if dbipLiteUrl|default is not empty %}
                        {% set downloadingDbLink %}<a href=\"{{ dbipLiteUrl|e('html_attr') }}\">{{ dbipLiteFilename }}</a>{% endset %}
                        {% else %}
                        {% set downloadingDbLink = '' %}
                        {% endif %}
                        <div id=\"geoipdb-screen2-download\" ng-show=\"locationUpdater.showFreeDownload\">
                            <div piwik-progressbar
                                 label=\"{{ ('UserCountry_DownloadingDb'|translate(downloadingDbLink) ~ '...')|json_encode }}\"
                                 progress=\"locationUpdater.progressFreeDownload\">
                            </div>
                        </div>
                    </div>
                {% endif %}

                {% include \"@UserCountry/_updaterManage.twig\" %}
            {% else %}
                <p class=\"form-description\">{{ 'UserCountry_CannotSetupGeoIPAutoUpdating'|translate }}</p>
            {% endif %}
        </div>
    </div>
{% endif %}

{% endblock %}

", "@UserCountry/adminIndex.twig", "/var/www/zinecat.org/matomo/plugins/UserCountry/templates/adminIndex.twig");
    }
}
