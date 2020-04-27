<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* header.twig */
class __TwigTemplate_35bcaa1693bae19ab46f90ac76dc105eee70ab857d45562e927c793212831bd9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"header__content\">
\t<div class=\"header__title\">";
        // line 2
        echo twig_escape_filter($this->env, ($context["header_title"] ?? null), "html", null, true);
        echo "</div>
\t<div class=\"header__description\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["header_description"] ?? null), "html", null, true);
        echo "</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.twig", "C:\\WT\\sites\\lab3\\templates\\header.twig");
    }
}
