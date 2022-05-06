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

/* _sparklineFooter.twig */
class __TwigTemplate_a6b301d336d61ce0996318b0445318fa8364af1aa349f7ec6cc231cc7ec0ac76 extends \Twig\Template
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
        echo "<script type=\"text/javascript\">
    \$(function () {
        initializeSparklines();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "_sparklineFooter.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
    \$(function () {
        initializeSparklines();
    });
</script>
", "_sparklineFooter.twig", "/var/www/zinecat.org/matomo/plugins/Morpheus/templates/_sparklineFooter.twig");
    }
}
