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

/* @Tour/engagement.twig */
class __TwigTemplate_e1753adc4c965a13165bb4b0ee71eabcd93c9d9623de7ba17d38009fa1d0c2e3 extends \Twig\Template
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
        echo "<div class=\"widgetBody tourEngagement\">
    <p title=\"";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Tour_StatusLevel", $this->getAttribute(($context["level"] ?? $this->getContext($context, "level")), "currentLevelName", []), $this->getAttribute(($context["level"] ?? $this->getContext($context, "level")), "challengesNeededForNextLevel", []), $this->getAttribute(($context["level"] ?? $this->getContext($context, "level")), "nextLevelName", [])]), "html_attr");
        echo "\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute(($context["level"] ?? $this->getContext($context, "level")), "numLevelsTotal", [])));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "        <span class=\"icon-star ";
            if (($this->getAttribute(($context["level"] ?? $this->getContext($context, "level")), "currentLevel", []) >= $context["i"])) {
                echo "successStar";
            } else {
                echo "upgradeStar";
            }
            echo "\"></span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </p>

    ";
        // line 8
        if (($context["isCompleted"] ?? $this->getContext($context, "isCompleted"))) {
            // line 9
            echo "       <p><strong class=\"completed\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Tour_CompletionTitle"]), "html", null, true);
            echo "</strong>
           ";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Tour_CompletionMessage"]), "html", null, true);
            echo "
            <br />
            <br />
           ";
            // line 13
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Tour_YouCanCallYourselfExpert", "<strong class=\"successStar\">", "</strong>"]);
            echo "<br /><br />
           ";
            // line 14
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Tour_ShareYourAchievementOn", (((("<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"http://twitter.com/share?text=" . \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Tour_ShareAllChallengesCompleted", $this->getAttribute(($context["level"] ?? $this->getContext($context, "level")), "currentLevelName", [])]), "url")) . "&url=") . \Piwik\piwik_escape_filter($this->env, "https://matomo.org", "url")) . "\">Twitter</a>")]);
            echo "
       </p>
    ";
        } else {
            // line 17
            echo "        ";
            if ($this->getAttribute(($context["level"] ?? $this->getContext($context, "level")), "description", [])) {
                echo "<p>";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["level"] ?? $this->getContext($context, "level")), "description", []), "html", null, true);
                echo "</p>";
            }
            // line 18
            echo "
        <p>
            ";
            // line 20
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Tour_StatusLevel", (("<strong>" . $this->getAttribute(($context["level"] ?? $this->getContext($context, "level")), "currentLevelName", [])) . "</strong>"), $this->getAttribute(($context["level"] ?? $this->getContext($context, "level")), "challengesNeededForNextLevel", []), (("<strong>" . $this->getAttribute(($context["level"] ?? $this->getContext($context, "level")), "nextLevelName", [])) . "</strong>")]);
            echo "
        </p>

        <ul>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["challenges"] ?? $this->getContext($context, "challenges")));
            foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
                // line 25
                echo "                <li class=\"tourChallenge ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["challenge"], "id", []), "html_attr");
                echo "\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["challenge"], "description", []), "html_attr");
                echo "\">";
                // line 26
                if (($this->getAttribute($context["challenge"], "isCompleted", []) || $this->getAttribute($context["challenge"], "isSkipped", []))) {
                    // line 27
                    echo "                        <span class=\"icon-ok\" title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Tour_ChallengeCompleted"]), "html_attr");
                    echo "\"></span>
                    ";
                } else {
                    // line 29
                    echo "                        <a href=\"javascript:void 0;\" onclick=\"tourEngagement.skipChallenge('";
                    echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["challenge"], "id", []), "js"), "html", null, true);
                    echo "')\" title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Tour_SkipThisChallenge"]), "html_attr");
                    echo "\"><span class=\"icon-hide\"></span></a>
                    ";
                }
                // line 31
                echo "                    ";
                if ( !twig_test_empty($this->getAttribute($context["challenge"], "url", []))) {
                    // line 32
                    echo "                        <a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('safelink')->getCallable(), [$this->getAttribute($context["challenge"], "url", [])]), "html_attr");
                    echo "\" target=\"_blank\" rel=\"noreferrer noopener\">";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["challenge"], "name", []), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 34
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["challenge"], "name", []), "html", null, true);
                    echo "
                    ";
                }
                // line 36
                echo "                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </ul>
        <hr />
        <p style=\"text-align: center;padding-bottom: 0;\">
        ";
            // line 41
            if ( !(null === ($context["previousPage"] ?? $this->getContext($context, "previousPage")))) {
                // line 42
                echo "            <a class=\"previousChallenges\" onclick=\"tourEngagement.goToPage(";
                echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, ($context["previousPage"] ?? $this->getContext($context, "previousPage")), "js"), "html", null, true);
                echo ")\">&lsaquo; ";
                if (($context["nextPage"] ?? $this->getContext($context, "nextPage"))) {
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Previous"]), "html", null, true);
                } else {
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Tour_PreviousChallenges"]), "html", null, true);
                }
                echo "</a>
        ";
            }
            // line 44
            echo "        ";
            if (($context["nextPage"] ?? $this->getContext($context, "nextPage"))) {
                // line 45
                echo "            ";
                if ( !(null === ($context["previousPage"] ?? $this->getContext($context, "previousPage")))) {
                    echo " | ";
                }
                // line 46
                echo "            <a class=\"nextChallenges\" onclick=\"tourEngagement.goToPage(";
                echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, ($context["nextPage"] ?? $this->getContext($context, "nextPage")), "js"), "html", null, true);
                echo ")\">";
                if ( !(null === ($context["previousPage"] ?? $this->getContext($context, "previousPage")))) {
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Next"]), "html", null, true);
                } else {
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Tour_NextChallenges"]), "html", null, true);
                }
                echo " &rsaquo;</a>
        ";
            }
            // line 48
            echo "        </p>
        <hr />
        <p class=\"tourSuperUserNote\">";
            // line 50
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Tour_OnlyVisibleToSuperUser", "<a href=\"https://matomo.org/faq/general/faq_35/\" target=\"_blank\" rel=\"noreferrer noopener\">", "</a>"]);
            echo "</p>
        <script>
            jQuery(window).off('focus.tourEngagement').on('focus.tourEngagement', function () {
                if (jQuery('#widgetTourgetEngagement').size()) {
                    tourEngagement.goToPage(";
            // line 54
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, ($context["currentPage"] ?? $this->getContext($context, "currentPage")), "js"), "html", null, true);
            echo ");
                }
            });
        </script>
    ";
        }
        // line 59
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@Tour/engagement.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 59,  199 => 54,  192 => 50,  188 => 48,  176 => 46,  171 => 45,  168 => 44,  156 => 42,  154 => 41,  149 => 38,  142 => 36,  136 => 34,  128 => 32,  125 => 31,  117 => 29,  111 => 27,  109 => 26,  103 => 25,  99 => 24,  92 => 20,  88 => 18,  81 => 17,  75 => 14,  71 => 13,  65 => 10,  60 => 9,  58 => 8,  54 => 6,  41 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widgetBody tourEngagement\">
    <p title=\"{{ 'Tour_StatusLevel'|translate(level.currentLevelName, level.challengesNeededForNextLevel, level.nextLevelName)|e('html_attr') }}\">
    {% for i in 1..level.numLevelsTotal %}
        <span class=\"icon-star {% if level.currentLevel >= i %}successStar{% else %}upgradeStar{% endif %}\"></span>
    {% endfor %}
    </p>

    {% if isCompleted %}
       <p><strong class=\"completed\">{{ 'Tour_CompletionTitle'|translate }}</strong>
           {{ 'Tour_CompletionMessage'|translate }}
            <br />
            <br />
           {{ 'Tour_YouCanCallYourselfExpert'|translate('<strong class=\"successStar\">', '</strong>')|raw }}<br /><br />
           {{ 'Tour_ShareYourAchievementOn'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"http://twitter.com/share?text='~ \"Tour_ShareAllChallengesCompleted\"|translate(level.currentLevelName)|e('url') ~ '&url=' ~ \"https://matomo.org\"|e('url') ~ '\">Twitter</a>')|raw }}
       </p>
    {% else %}
        {% if level.description %}<p>{{ level.description }}</p>{% endif %}

        <p>
            {{ 'Tour_StatusLevel'|translate('<strong>'~ level.currentLevelName ~'</strong>', level.challengesNeededForNextLevel, '<strong>'~ level.nextLevelName ~'</strong>')|raw }}
        </p>

        <ul>
            {% for challenge in challenges %}
                <li class=\"tourChallenge {{ challenge.id|e('html_attr') }}\" title=\"{{ challenge.description|e('html_attr') }}\">
                    {%- if challenge.isCompleted or challenge.isSkipped %}
                        <span class=\"icon-ok\" title=\"{{ 'Tour_ChallengeCompleted'|translate|e('html_attr') }}\"></span>
                    {% else %}
                        <a href=\"javascript:void 0;\" onclick=\"tourEngagement.skipChallenge('{{ challenge.id|e('js') }}')\" title=\"{{ 'Tour_SkipThisChallenge'|translate|e('html_attr') }}\"><span class=\"icon-hide\"></span></a>
                    {% endif %}
                    {% if challenge.url is not empty %}
                        <a href=\"{{ challenge.url|safelink|e('html_attr') }}\" target=\"_blank\" rel=\"noreferrer noopener\">{{ challenge.name }}</a>
                    {% else %}
                        {{ challenge.name }}
                    {% endif %}
                </li>
            {% endfor %}
        </ul>
        <hr />
        <p style=\"text-align: center;padding-bottom: 0;\">
        {% if previousPage is not null %}
            <a class=\"previousChallenges\" onclick=\"tourEngagement.goToPage({{ previousPage|e('js') }})\">&lsaquo; {% if nextPage %}{{ 'General_Previous'|translate }}{% else %}{{ 'Tour_PreviousChallenges'|translate }}{% endif %}</a>
        {% endif %}
        {% if nextPage %}
            {% if previousPage is not null %} | {% endif %}
            <a class=\"nextChallenges\" onclick=\"tourEngagement.goToPage({{ nextPage|e('js') }})\">{% if previousPage is not null %}{{ 'General_Next'|translate }}{% else %}{{ 'Tour_NextChallenges'|translate }}{% endif %} &rsaquo;</a>
        {% endif %}
        </p>
        <hr />
        <p class=\"tourSuperUserNote\">{{ 'Tour_OnlyVisibleToSuperUser'|translate('<a href=\"https://matomo.org/faq/general/faq_35/\" target=\"_blank\" rel=\"noreferrer noopener\">', '</a>')|raw }}</p>
        <script>
            jQuery(window).off('focus.tourEngagement').on('focus.tourEngagement', function () {
                if (jQuery('#widgetTourgetEngagement').size()) {
                    tourEngagement.goToPage({{ currentPage|e('js') }});
                }
            });
        </script>
    {% endif %}

</div>
", "@Tour/engagement.twig", "/var/www/zinecat.org/matomo/plugins/Tour/templates/engagement.twig");
    }
}
