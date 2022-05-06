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

/* @CoreHome/_adblockDetect.twig */
class __TwigTemplate_81fa1162b5b5e1f306a20ff196f2050defe57e84b42443c4939b15838a4c7166 extends \Twig\Template
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
        echo "<div id=\"bottomAd\" style=\"font-size: 2px;\">&nbsp;</div>
<script type=\"text/javascript\">
    if ('undefined' === (typeof hasBlockedContent) || hasBlockedContent !== false) {
        ";
        // line 5
        echo "        (function () {
            ";
        // line 7
        echo "            var body = document.getElementsByTagName('body');

            if (!body || !body[0]) {
                return;
            }

            var bottomAd = document.getElementById('bottomAd');
            var wasMostLikelyCausedByAdblock = false;

            if (!bottomAd) {
                wasMostLikelyCausedByAdblock = true;
            } else if (bottomAd.style && bottomAd.style.display === 'none') {
                wasMostLikelyCausedByAdblock = true;
            } else if ('undefined' !== (typeof bottomAd.clientHeight) && bottomAd.clientHeight === 0) {
                wasMostLikelyCausedByAdblock = true;
            }

            if (wasMostLikelyCausedByAdblock) {
                var shouldGetHiddenElement = document.getElementById(\"should-get-hidden\");
                var warning = document.createElement('p');
                warning.innerText = '";
        // line 27
        echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_AdblockIsMaybeUsed"]), "js"), "html", null, true);
        echo "';

                if (shouldGetHiddenElement) {
                    shouldGetHiddenElement.appendChild(warning);
                } else {
                    body[0].insertBefore(warning, body[0].firstChild);
                    warning.style.color = 'red';
                    warning.style.fontWeight = 'bold';
                    warning.style.marginLeft = '16px';
                    warning.style.marginBottom = '16px';
                    warning.style.fontSize = '20px';
                }
            }
        })();
    }
</script>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_adblockDetect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 27,  38 => 7,  35 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"bottomAd\" style=\"font-size: 2px;\">&nbsp;</div>
<script type=\"text/javascript\">
    if ('undefined' === (typeof hasBlockedContent) || hasBlockedContent !== false) {
        {# if hasBlockedContent was \"false\" most likely nothing was blocked #}
        (function () {
            {# most likely jQuery is not available, have to use vanilla JS here #}
            var body = document.getElementsByTagName('body');

            if (!body || !body[0]) {
                return;
            }

            var bottomAd = document.getElementById('bottomAd');
            var wasMostLikelyCausedByAdblock = false;

            if (!bottomAd) {
                wasMostLikelyCausedByAdblock = true;
            } else if (bottomAd.style && bottomAd.style.display === 'none') {
                wasMostLikelyCausedByAdblock = true;
            } else if ('undefined' !== (typeof bottomAd.clientHeight) && bottomAd.clientHeight === 0) {
                wasMostLikelyCausedByAdblock = true;
            }

            if (wasMostLikelyCausedByAdblock) {
                var shouldGetHiddenElement = document.getElementById(\"should-get-hidden\");
                var warning = document.createElement('p');
                warning.innerText = '{{ 'CoreHome_AdblockIsMaybeUsed'|translate|e('js') }}';

                if (shouldGetHiddenElement) {
                    shouldGetHiddenElement.appendChild(warning);
                } else {
                    body[0].insertBefore(warning, body[0].firstChild);
                    warning.style.color = 'red';
                    warning.style.fontWeight = 'bold';
                    warning.style.marginLeft = '16px';
                    warning.style.marginBottom = '16px';
                    warning.style.fontSize = '20px';
                }
            }
        })();
    }
</script>", "@CoreHome/_adblockDetect.twig", "/var/www/zinecat.org/matomo/plugins/CoreHome/templates/_adblockDetect.twig");
    }
}
