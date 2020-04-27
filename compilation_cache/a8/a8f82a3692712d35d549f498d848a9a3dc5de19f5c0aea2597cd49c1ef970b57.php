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

/* navigation.twig */
class __TwigTemplate_da78beade22864dc2f94d9c69d2880e8c521c4f46f4f4748106b9f73d98888c7 extends \Twig\Template
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
        echo "<nav class=\"nav-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"logo\">MacDonalds</div>
\t\t\t<div class=\"navigation\">
\t\t\t\t<a href=\"../Menu.php\"?types=Burgers\" class=\"navigation_link\">Menu</a>
\t\t\t\t<a href=";
        // line 6
        echo twig_escape_filter($this->env, ($context["link_sales"] ?? null), "html", null, true);
        echo " class=\"navigation_link\">Sales</a>
\t\t\t\t<a href=\"#\" class=\"navigation_link\">About Us</a>
\t\t\t</div>
\t\t\t<a href=\"../Cart.php\">
\t\t\t\t<div class=\"cart\">
\t\t\t\t\t<i class=\"fas fa-shopping-cart\"></i>
\t\t\t\t\t<div class=\"cart__number\">";
        // line 12
        echo twig_escape_filter($this->env, ($context["cart_number"] ?? null), "html", null, true);
        echo "</div>
\t\t\t\t</div>\t
\t\t\t</a>
\t\t</div>
\t</nav>\t


";
    }

    public function getTemplateName()
    {
        return "navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navigation.twig", "C:\\WT\\sites\\lab5\\templates\\navigation.twig");
    }
}
