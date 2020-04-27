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

/* filters.twig */
class __TwigTemplate_aa6fdff0eb9ebe0e02412db9b2ab91ec15a1e9193f3ad4a95cbbd3abf2ace7fb extends \Twig\Template
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
        echo "<nav class=\"filter-wraper\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"filter-navigation\">
\t\t\t\t\t\t<a href=\"Menu.php?types=Burgers\" class=\"filter_link\">Burgers</a>
\t\t\t\t\t\t<a href=\"Menu.php?types=Snacks\" class=\"filter_link\">Snacks</a>
\t\t\t\t\t\t<a href=\"Menu.php?types=Garneers\" class=\"filter_link\">Garneers</a>
\t\t\t\t\t\t<a href=\"Menu.php?types=Deserts\" class=\"filter_link\">Deserts</a>
\t\t\t\t\t\t<a href=\"Menu.php?types=Drinks\" class=\"filter_link\">Drinks</a>
\t\t\t\t\t\t<a href=\"Menu.php?types=Combo\" class=\"filter_link\">Combo</a>
\t\t\t\t\t\t<a href=\"Menu.php?types=Addings\" class=\"filter_link\">Addings</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>


";
    }

    public function getTemplateName()
    {
        return "filters.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "filters.twig", "C:\\WT\\sites\\lab5\\templates\\filters.twig");
    }
}
