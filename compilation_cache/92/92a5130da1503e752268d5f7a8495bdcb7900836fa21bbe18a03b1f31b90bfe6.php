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

/* section.twig */
class __TwigTemplate_7e7ab8aaa9e0cb04dabb11021321e7c1c039f300922da75f4f15befe8ee1b81f extends \Twig\Template
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
\t\t\t";
        // line 2
        $this->loadTemplate("cards.twig", "section.twig", 2)->display(twig_array_merge($context, ["card_title" => "Big Mac", "card_image" => "Images/Big-Mac.jpg", "card_price" => "\$2.1"]));
        // line 5
        echo "\t
\t\t\t";
        // line 6
        $this->loadTemplate("cards.twig", "section.twig", 6)->display(twig_array_merge($context, ["card_title" => "Potato Free", "card_image" => "Images/Potato-Free.jpg", "card_price" => "\$1.2"]));
        // line 9
        echo "\t
\t\t\t";
        // line 10
        $this->loadTemplate("cards.twig", "section.twig", 10)->display(twig_array_merge($context, ["card_title" => "Shamrock-shake", "card_image" => "Images/shamrock-shake.jpg", "card_price" => "\$1.5"]));
        // line 13
        echo "\t
\t\t\t";
        // line 14
        $this->loadTemplate("cards.twig", "section.twig", 14)->display(twig_array_merge($context, ["card_title" => "Double Cheese Combo", "card_image" => "Images/CheeseCombo.jpg", "card_price" => "\$5.5"]));
        // line 17
        echo "\t
\t\t\t";
        // line 18
        $this->loadTemplate("cards.twig", "section.twig", 18)->display(twig_array_merge($context, ["card_title" => "Crispy Slad", "card_image" => "Images/Salad.jpg", "card_price" => "\$3.8"]));
        // line 21
        echo "\t
\t\t\t";
        // line 22
        $this->loadTemplate("cards.twig", "section.twig", 22)->display(twig_array_merge($context, ["card_title" => "Austrian Combo", "card_image" => "Images/GreenMeals.jpg", "card_price" => "\$6.0"]));
        // line 25
        echo "\t
\t\t\t";
        // line 26
        $this->loadTemplate("cards.twig", "section.twig", 26)->display(twig_array_merge($context, ["card_title" => "Egg MacMaffin", "card_image" => "Images/McMuffin.jpg", "card_price" => "\$1.5"]));
        // line 29
        echo "\t
\t\t\t";
        // line 30
        $this->loadTemplate("cards.twig", "section.twig", 30)->display(twig_array_merge($context, ["card_title" => "Deluxe Burger", "card_image" => "Images/deluxe-burger.jpg", "card_price" => "\$2.9"]));
        // line 34
        echo "\t\t<a href=";
        echo twig_escape_filter($this->env, ($context["link_main"] ?? null), "html", null, true);
        echo " class=\"button-outline\">";
        echo twig_escape_filter($this->env, ($context["button_name"] ?? null), "html", null, true);
        echo "</a>

";
    }

    public function getTemplateName()
    {
        return "section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 34,  75 => 30,  72 => 29,  70 => 26,  67 => 25,  65 => 22,  62 => 21,  60 => 18,  57 => 17,  55 => 14,  52 => 13,  50 => 10,  47 => 9,  45 => 6,  42 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "section.twig", "C:\\WT\\sites\\lab3\\templates\\section.twig");
    }
}
