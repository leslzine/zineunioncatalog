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

/* @SegmentEditor/_segmentSelector.twig */
class __TwigTemplate_584a9fb3e572a8b252f10c4ff42f8dfc179c79f7412c5b2874bac5c0174ce290 extends \Twig\Template
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
        echo "<div class=\"SegmentEditor\" style=\"display:none;\">
    <div class=\"segmentationContainer listHtml\" title=\"";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_ChooseASegment"]), "html_attr");
        echo ". ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_CurrentlySelectedSegment", ($context["segmentDescription"] ?? $this->getContext($context, "segmentDescription"))]), "html_attr");
        echo "\">
        <a class=\"title\" tabindex=\"4\"><span class=\"icon icon-segment\"></span><span class=\"segmentationTitle\"></span></a>
        <div class=\"dropdown dropdown-body\">
            <div class=\"segmentFilterContainer\">
                <input class=\"segmentFilter browser-default\" type=\"text\" tabindex=\"4\" value=\"";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Search"]), "html", null, true);
        echo "\"/>
                <span></span>
            </div>
            <ul class=\"submenu\">
                <li>";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_SelectSegmentOfVisits"]), "html", null, true);
        echo "
                    <div class=\"segmentList\">
                        <ul>
                        </ul>
                    </div>
                </li>
            </ul>

            ";
        // line 18
        if (($context["authorizedToCreateSegments"] ?? $this->getContext($context, "authorizedToCreateSegments"))) {
            // line 19
            echo "                <a tabindex=\"4\" class=\"add_new_segment btn\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_AddNewSegment"]), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 21
            echo "                <hr/>
                <ul class=\"submenu\">
                <li>
                    ";
            // line 24
            if (($context["isUserAnonymous"] ?? $this->getContext($context, "isUserAnonymous"))) {
                // line 25
                echo "                        <span class='youMustBeLoggedIn'>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_YouMustBeLoggedInToCreateSegments"]), "html", null, true);
                echo "
                        <br/>&rsaquo; <a href='index.php?module=";
                // line 26
                echo \Piwik\piwik_escape_filter($this->env, ($context["loginModule"] ?? $this->getContext($context, "loginModule")), "html", null, true);
                echo "'>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_LogIn"]), "html", null, true);
                echo "</a> </span>
                    ";
            }
            // line 28
            echo "                </li>
                </ul>
                <br/><br/>
            ";
        }
        // line 32
        echo "        </div>
    </div>

    <div class=\"segment-element borderedControl expanded\">

        <div class=\"segment-content\">
            <div class=\"segment-top\" ";
        // line 38
        if ( !($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser"))) {
            echo "style=\"display:none\"";
        }
        echo ">

                <span class=\"icon-segment\"></span><span class=\"available_segments\"><strong>
                <select class=\"available_segments_select browser-default\"></select>
            </strong></span>

                ";
        // line 44
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_ThisSegmentIsVisibleTo"]), "html", null, true);
        echo " <span class=\"enable_all_users\"><strong>
                        <select class=\"enable_all_users_select\">
                            <option selected=\"1\" value=\"0\">";
        // line 46
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_VisibleToMe"]), "html", null, true);
        echo "</option>
                            <option value=\"1\">";
        // line 47
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_VisibleToAllUsers"]), "html", null, true);
        echo "</option>
                        </select>
                    </strong></span>

                ";
        // line 51
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_SegmentIsDisplayedForWebsite"]), "html", null, true);
        echo "<span class=\"visible_to_website\"><strong>
                        <select class=\"visible_to_website_select\">
                            <option selected=\"\" value=\"";
        // line 53
        echo \Piwik\piwik_escape_filter($this->env, ($context["idSite"] ?? $this->getContext($context, "idSite")), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_SegmentDisplayedThisWebsiteOnly"]), "html", null, true);
        echo "</option>
                            ";
        // line 54
        if (($context["isAddingSegmentsForAllWebsitesEnabled"] ?? $this->getContext($context, "isAddingSegmentsForAllWebsitesEnabled"))) {
            echo "<option value=\"0\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_SegmentDisplayedAllWebsites"]), "html", null, true);
            echo "</option>";
        }
        // line 55
        echo "                        </select>
                    </strong></span>
                ";
        // line 57
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_And"]), "html", null, true);
        echo " <span class=\"auto_archive\"><strong>
                        <select class=\"auto_archive_select\">
                            ";
        // line 59
        if (($context["createRealTimeSegmentsIsEnabled"] ?? $this->getContext($context, "createRealTimeSegmentsIsEnabled"))) {
            // line 60
            echo "                            <option selected=\"1\" value=\"0\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_AutoArchiveRealTime"]), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_DefaultAppended"]), "html", null, true);
            echo "</option>
                            ";
        }
        // line 62
        echo "                            <option ";
        if ( !($context["createRealTimeSegmentsIsEnabled"] ?? $this->getContext($context, "createRealTimeSegmentsIsEnabled"))) {
            echo "selected=\"1\"";
        }
        echo " value=\"1\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_AutoArchivePreProcessed"]), "html", null, true);
        echo " </option>
                        </select>
                    </strong></span>

            </div>
            <h3 style=\"margin: 12px 6px;\">";
        // line 67
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Name"]), "html", null, true);
        echo ": <span  class=\"segmentName\"></span> <a class=\"editSegmentName\" href=\"#\">";
        echo \Piwik\piwik_escape_filter($this->env, twig_lower_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Edit"])), "html", null, true);
        echo "</a></h3>
        </div>
        <div class=\"segment-footer\">
            <div piwik-rate-feature title=\"Segment Editor\" style=\"display:inline-block;float: left;margin-top: 2px;margin-right: 10px;\"></div>
            <a class=\"btn-flat delete\" href=\"#\">";
        // line 71
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Delete"]), "html", null, true);
        echo "</a>
            <a class=\"btn-flat close\" href=\"#\">";
        // line 72
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Close"]), "html", null, true);
        echo "</a>
            <a class=\"btn-flat testSegment\">";
        // line 73
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_Test"]), "html", null, true);
        echo "</a>
            <button class=\"btn saveAndApply\">";
        // line 74
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_SaveAndApply"]), "html", null, true);
        echo "</button>
        </div>
    </div>
</div>
<div class=\"segmentListContainer\">
<div class=\"ui-confirm\" id=\"segment-delete-confirm\">
    <h2>";
        // line 80
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_AreYouSureDeleteSegment"]), "html", null, true);
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 81
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Yes"]), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 82
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_No"]), "html", null, true);
        echo "\"/>
</div>
<div class=\"ui-confirm segment-definition-change-confirm\" data-segment-processed-on-request=\"";
        // line 84
        echo \Piwik\piwik_escape_filter($this->env, twig_number_format_filter($this->env, ($context["segmentProcessedOnRequest"] ?? $this->getContext($context, "segmentProcessedOnRequest"))), "html", null, true);
        echo "\" data-hide-message=\"";
        echo \Piwik\piwik_escape_filter($this->env, ($context["hideSegmentDefinitionChangeMessage"] ?? $this->getContext($context, "hideSegmentDefinitionChangeMessage")), "html", null, true);
        echo "\">
    <h2>
        <span class=\"process-on-request\">
            ";
        // line 87
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_ChangingSegmentDefinitionConfirmationProcessedOnRequest"]), "html", null, true);
        echo "
        </span>
        <span class=\"no-process-on-request\">
            ";
        // line 90
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_ChangingSegmentDefinitionConfirmationNotProcessedOnRequest"]), "html", null, true);
        echo "
        </span>
    </h2>
    <p class=\"description\">
        <span>
            <input type=\"checkbox\" id=\"hideSegmentMessage\" name=\"hideSegmentMessage\" />
            <label for=\"hideSegmentMessage\">";
        // line 96
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_HideMessageInFuture"]), "html", null, true);
        echo "</label>
        </span>
    </p>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 99
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Yes"]), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 100
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_No"]), "html", null, true);
        echo "\"/>
</div>
<div class=\"ui-confirm pleaseChangeBrowserAchivingDisabledSetting\">
    <h2>";
        // line 103
        echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_SegmentNotApplied", ($context["nameOfCurrentSegment"] ?? $this->getContext($context, "nameOfCurrentSegment"))])]);
        echo "</h2>
    ";
        // line 104
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_AutoArchivePreProcessed"]), "html", null, true);
        $context["segmentSetting"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 105
        echo "    <p class=\"description\">
        ";
        // line 106
        echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_SegmentNotAppliedMessage", ($context["nameOfCurrentSegment"] ?? $this->getContext($context, "nameOfCurrentSegment"))])]);
        echo "
        <br/>
        ";
        // line 108
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_DataAvailableAtLaterDate"]), "html", null, true);
        echo "
        ";
        // line 109
        if (($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser"))) {
            // line 110
            echo "            <br/> <br/> ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_YouMayChangeSetting", "browser_archiving_disabled_enforce", ($context["segmentSetting"] ?? $this->getContext($context, "segmentSetting"))]), "html", null, true);
            echo "
        ";
        }
        // line 112
        echo "    </p>

    <input role=\"yes\" type=\"button\" value=\"";
        // line 114
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Ok"]), "html", null, true);
        echo "\"/>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SegmentEditor/_segmentSelector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 114,  287 => 112,  281 => 110,  279 => 109,  275 => 108,  270 => 106,  267 => 105,  263 => 104,  259 => 103,  253 => 100,  249 => 99,  243 => 96,  234 => 90,  228 => 87,  220 => 84,  215 => 82,  211 => 81,  207 => 80,  198 => 74,  194 => 73,  190 => 72,  186 => 71,  177 => 67,  164 => 62,  156 => 60,  154 => 59,  149 => 57,  145 => 55,  139 => 54,  133 => 53,  128 => 51,  121 => 47,  117 => 46,  112 => 44,  101 => 38,  93 => 32,  87 => 28,  80 => 26,  75 => 25,  73 => 24,  68 => 21,  62 => 19,  60 => 18,  49 => 10,  42 => 6,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"SegmentEditor\" style=\"display:none;\">
    <div class=\"segmentationContainer listHtml\" title=\"{{ 'SegmentEditor_ChooseASegment'|translate|e('html_attr') }}. {{ 'SegmentEditor_CurrentlySelectedSegment'|translate(segmentDescription)|e('html_attr') }}\">
        <a class=\"title\" tabindex=\"4\"><span class=\"icon icon-segment\"></span><span class=\"segmentationTitle\"></span></a>
        <div class=\"dropdown dropdown-body\">
            <div class=\"segmentFilterContainer\">
                <input class=\"segmentFilter browser-default\" type=\"text\" tabindex=\"4\" value=\"{{ 'General_Search'|translate }}\"/>
                <span></span>
            </div>
            <ul class=\"submenu\">
                <li>{{ 'SegmentEditor_SelectSegmentOfVisits'|translate }}
                    <div class=\"segmentList\">
                        <ul>
                        </ul>
                    </div>
                </li>
            </ul>

            {% if authorizedToCreateSegments %}
                <a tabindex=\"4\" class=\"add_new_segment btn\">{{ 'SegmentEditor_AddNewSegment'|translate }}</a>
            {% else %}
                <hr/>
                <ul class=\"submenu\">
                <li>
                    {% if isUserAnonymous %}
                        <span class='youMustBeLoggedIn'>{{ 'SegmentEditor_YouMustBeLoggedInToCreateSegments'|translate }}
                        <br/>&rsaquo; <a href='index.php?module={{ loginModule }}'>{{ 'Login_LogIn'|translate }}</a> </span>
                    {% endif %}
                </li>
                </ul>
                <br/><br/>
            {% endif %}
        </div>
    </div>

    <div class=\"segment-element borderedControl expanded\">

        <div class=\"segment-content\">
            <div class=\"segment-top\" {% if not isSuperUser %}style=\"display:none\"{% endif %}>

                <span class=\"icon-segment\"></span><span class=\"available_segments\"><strong>
                <select class=\"available_segments_select browser-default\"></select>
            </strong></span>

                {{ 'SegmentEditor_ThisSegmentIsVisibleTo'|translate }} <span class=\"enable_all_users\"><strong>
                        <select class=\"enable_all_users_select\">
                            <option selected=\"1\" value=\"0\">{{ 'SegmentEditor_VisibleToMe'|translate }}</option>
                            <option value=\"1\">{{ 'SegmentEditor_VisibleToAllUsers'|translate }}</option>
                        </select>
                    </strong></span>

                {{ 'SegmentEditor_SegmentIsDisplayedForWebsite'|translate }}<span class=\"visible_to_website\"><strong>
                        <select class=\"visible_to_website_select\">
                            <option selected=\"\" value=\"{{ idSite }}\">{{ 'SegmentEditor_SegmentDisplayedThisWebsiteOnly'|translate }}</option>
                            {% if isAddingSegmentsForAllWebsitesEnabled %}<option value=\"0\">{{ 'SegmentEditor_SegmentDisplayedAllWebsites'|translate }}</option>{% endif %}
                        </select>
                    </strong></span>
                {{ 'General_And'|translate }} <span class=\"auto_archive\"><strong>
                        <select class=\"auto_archive_select\">
                            {% if createRealTimeSegmentsIsEnabled %}
                            <option selected=\"1\" value=\"0\">{{ 'SegmentEditor_AutoArchiveRealTime'|translate }} {{ 'General_DefaultAppended'|translate }}</option>
                            {% endif %}
                            <option {% if not createRealTimeSegmentsIsEnabled %}selected=\"1\"{% endif %} value=\"1\">{{ 'SegmentEditor_AutoArchivePreProcessed'|translate }} </option>
                        </select>
                    </strong></span>

            </div>
            <h3 style=\"margin: 12px 6px;\">{{ 'General_Name'|translate }}: <span  class=\"segmentName\"></span> <a class=\"editSegmentName\" href=\"#\">{{ 'General_Edit'|translate|lower }}</a></h3>
        </div>
        <div class=\"segment-footer\">
            <div piwik-rate-feature title=\"Segment Editor\" style=\"display:inline-block;float: left;margin-top: 2px;margin-right: 10px;\"></div>
            <a class=\"btn-flat delete\" href=\"#\">{{ 'General_Delete'|translate }}</a>
            <a class=\"btn-flat close\" href=\"#\">{{ 'General_Close'|translate }}</a>
            <a class=\"btn-flat testSegment\">{{ 'SegmentEditor_Test'|translate }}</a>
            <button class=\"btn saveAndApply\">{{ 'SegmentEditor_SaveAndApply'|translate }}</button>
        </div>
    </div>
</div>
<div class=\"segmentListContainer\">
<div class=\"ui-confirm\" id=\"segment-delete-confirm\">
    <h2>{{ 'SegmentEditor_AreYouSureDeleteSegment'|translate }}</h2>
    <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
    <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
</div>
<div class=\"ui-confirm segment-definition-change-confirm\" data-segment-processed-on-request=\"{{ segmentProcessedOnRequest|number_format }}\" data-hide-message=\"{{ hideSegmentDefinitionChangeMessage }}\">
    <h2>
        <span class=\"process-on-request\">
            {{ 'SegmentEditor_ChangingSegmentDefinitionConfirmationProcessedOnRequest'|translate }}
        </span>
        <span class=\"no-process-on-request\">
            {{ 'SegmentEditor_ChangingSegmentDefinitionConfirmationNotProcessedOnRequest'|translate }}
        </span>
    </h2>
    <p class=\"description\">
        <span>
            <input type=\"checkbox\" id=\"hideSegmentMessage\" name=\"hideSegmentMessage\" />
            <label for=\"hideSegmentMessage\">{{ 'SegmentEditor_HideMessageInFuture'|translate }}</label>
        </span>
    </p>
    <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
    <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
</div>
<div class=\"ui-confirm pleaseChangeBrowserAchivingDisabledSetting\">
    <h2>{{ 'SegmentEditor_SegmentNotApplied'|translate(nameOfCurrentSegment)|rawSafeDecoded|raw }}</h2>
    {% set segmentSetting %}{{ 'SegmentEditor_AutoArchivePreProcessed'|translate }}{% endset %}
    <p class=\"description\">
        {{ 'SegmentEditor_SegmentNotAppliedMessage'|translate(nameOfCurrentSegment)|rawSafeDecoded|raw }}
        <br/>
        {{ 'SegmentEditor_DataAvailableAtLaterDate'|translate }}
        {% if isSuperUser %}
            <br/> <br/> {{ 'SegmentEditor_YouMayChangeSetting'|translate('browser_archiving_disabled_enforce', segmentSetting) }}
        {% endif %}
    </p>

    <input role=\"yes\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
</div>
</div>
", "@SegmentEditor/_segmentSelector.twig", "/var/www/zinecat.org/matomo/plugins/SegmentEditor/templates/_segmentSelector.twig");
    }
}
