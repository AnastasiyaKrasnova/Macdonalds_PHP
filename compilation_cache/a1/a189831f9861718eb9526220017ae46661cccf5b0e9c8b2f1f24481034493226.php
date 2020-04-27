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

/* cart_items.twig */
class __TwigTemplate_fb5d6a526a633c8884d2a8d0b730b5944e218778aef79f87b6d249184844a4a7 extends \Twig\Template
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
        echo "
\t<div class=\"card__image\">
\t\t<img src=";
        // line 3
        echo twig_escape_filter($this->env, ($context["card_image"] ?? null), "html", null, true);
        echo " alt=\"This is awesome\">
\t</div>
\t<div class=\"card__title\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["card_title"] ?? null), "html", null, true);
        echo "</div>
\t<div class=\"card__price\">\$";
        // line 6
        echo twig_escape_filter($this->env, ($context["card_price"] ?? null), "html", null, true);
        echo "</div>\t
\t<div class=\"card__price\">X";
        // line 7
        echo twig_escape_filter($this->env, ($context["card_num"] ?? null), "html", null, true);
        echo "</div>\t
\t<div class=\"card__price\">\$";
        // line 8
        echo twig_escape_filter($this->env, ($context["total_price"] ?? null), "html", null, true);
        echo "</div>\t
\t<a href=\"../Cart.php?name=";
        // line 9
        echo twig_escape_filter($this->env, ($context["card_title"] ?? null), "html", null, true);
        echo "&price=";
        echo twig_escape_filter($this->env, ($context["card_price"] ?? null), "html", null, true);
        echo "&image=";
        echo twig_escape_filter($this->env, ($context["card_image"] ?? null), "html", null, true);
        echo "&type=Add\" class=\"button-add_item\">+</a>
\t<a href=\"../Cart.php?name=";
        // line 10
        echo twig_escape_filter($this->env, ($context["card_title"] ?? null), "html", null, true);
        echo "&price=";
        echo twig_escape_filter($this->env, ($context["card_price"] ?? null), "html", null, true);
        echo "&image=";
        echo twig_escape_filter($this->env, ($context["card_image"] ?? null), "html", null, true);
        echo "&type=Delete\" class=\"button-add_item\">-</a>
";
    }

    public function getTemplateName()
    {
        return "cart_items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart_items.twig", "C:\\WT\\sites\\lab5\\templates\\cart_items.twig");
    }
}
