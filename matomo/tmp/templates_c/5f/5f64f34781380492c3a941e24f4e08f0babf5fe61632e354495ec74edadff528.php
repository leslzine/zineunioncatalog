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

/* @Live/index.twig */
class __TwigTemplate_3812b09a1d25356e0da2ba67f59296f4ca3d18472316c78c735e9d540045d290 extends \Twig\Template
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
        if ( !($context["isWidgetized"] ?? $this->getContext($context, "isWidgetized"))) {
            echo "<div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_VisitorsInRealTime"]), "html_attr");
            echo "\">";
        }
        // line 2
        echo "
<div piwik-live-widget-refresh live-refresh-after-ms=\"";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, ($context["liveRefreshAfterMs"] ?? $this->getContext($context, "liveRefreshAfterMs")), "html_attr");
        echo "\">
    ";
        // line 4
        $this->loadTemplate("@Live/_totalVisitors.twig", "@Live/index.twig", 4)->display($context);
        // line 5
        echo "
    ";
        // line 6
        echo ($context["visitors"] ?? $this->getContext($context, "visitors"));
        echo "
</div>

";
        // line 9
        ob_start();
        // line 10
        echo "<div class=\"visitsLiveFooter\">
    <a title=\"";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_OnClickPause", call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_VisitorsInRealTime"])]), "html", null, true);
        echo "\" href=\"javascript:void(0);\" onclick=\"onClickPause();\">
        <img id=\"pauseImage\" border=\"0\" src=\"plugins/Live/images/pause.png\" />
    </a>
    <a title=\"";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_OnClickStart", call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_VisitorsInRealTime"])]), "html", null, true);
        echo "\" href=\"javascript:void(0);\" onclick=\"onClickPlay();\">
        <img id=\"playImage\" style=\"display: none;\" border=\"0\" src=\"plugins/Live/images/play.png\" />
    </a>
    ";
        // line 17
        if ( !($context["disableLink"] ?? $this->getContext($context, "disableLink"))) {
            // line 18
            echo "        &nbsp;
        <a class=\"rightLink\" href=\"#\" onclick=\"this.href=broadcast.buildReportingUrl('category=General_Visitors&subcategory=Live_VisitorLog')\">";
            // line 19
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_LinkVisitorLog"]), "html", null, true);
            echo "</a>
    ";
        }
        // line 21
        echo "</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "
";
        // line 24
        if ( !($context["isWidgetized"] ?? $this->getContext($context, "isWidgetized"))) {
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "@Live/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  85 => 23,  81 => 21,  76 => 19,  73 => 18,  71 => 17,  65 => 14,  59 => 11,  56 => 10,  54 => 9,  48 => 6,  45 => 5,  43 => 4,  39 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if not isWidgetized %}<div piwik-content-block content-title=\"{{ 'Live_VisitorsInRealTime'|translate|e('html_attr') }}\">{% endif %}

<div piwik-live-widget-refresh live-refresh-after-ms=\"{{ liveRefreshAfterMs|e('html_attr') }}\">
    {% include \"@Live/_totalVisitors.twig\" %}

    {{ visitors|raw }}
</div>

{% spaceless %}
<div class=\"visitsLiveFooter\">
    <a title=\"{{ 'Live_OnClickPause'|translate('Live_VisitorsInRealTime'|translate) }}\" href=\"javascript:void(0);\" onclick=\"onClickPause();\">
        <img id=\"pauseImage\" border=\"0\" src=\"plugins/Live/images/pause.png\" />
    </a>
    <a title=\"{{ 'Live_OnClickStart'|translate('Live_VisitorsInRealTime'|translate) }}\" href=\"javascript:void(0);\" onclick=\"onClickPlay();\">
        <img id=\"playImage\" style=\"display: none;\" border=\"0\" src=\"plugins/Live/images/play.png\" />
    </a>
    {% if not disableLink %}
        &nbsp;
        <a class=\"rightLink\" href=\"#\" onclick=\"this.href=broadcast.buildReportingUrl('category=General_Visitors&subcategory=Live_VisitorLog')\">{{ 'Live_LinkVisitorLog'|translate }}</a>
    {% endif %}
</div>
{% endspaceless %}

{% if not isWidgetized %}</div>{% endif %}", "@Live/index.twig", "/var/www/zinecat.org/matomo/plugins/Live/templates/index.twig");
    }
}
