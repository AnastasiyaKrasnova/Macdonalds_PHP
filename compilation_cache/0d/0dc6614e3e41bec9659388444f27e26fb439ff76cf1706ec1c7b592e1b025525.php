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

/* main.twig */
class __TwigTemplate_69e4ba3db4d68a574b10d9e97a8250937b8faa4e58e567b606387c0527b77dd7 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>MacDonalds mazafucka</title>
\t\t<link rel=\"shortcut icon\" href=\"Images/Icon.ico\" type=\"image/x-icon\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"CSS/MainPage.css\">
\t</head>
\t<body>
\t";
        // line 10
        $this->loadTemplate("navigation.twig", "main.twig", 10)->display($context);
        // line 11
        echo "\t<header class=\"header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"header__image\">
\t\t\t\t\t<img src=\"Images/Mac.gif\" alt=\"\">
\t\t\t</div>
\t\t\t";
        // line 16
        $this->loadTemplate("header.twig", "main.twig", 16)->display(twig_array_merge($context, ["header_title" => "Have a nice day, Bitch!", "header_description" => "Present our wonderfull content since 1965"]));
        // line 19
        echo "\t\t\t<a href=\"#\" class=\"header__button\">Start my purchasing</a>
\t\t</div>
\t</header>
\t<div class=\"section\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"title\">Good Choice!!</h2>
\t\t\t<div class=\"subtitle\">Take them as quickly as possible</div>
\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mycards"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 27
            echo "\t\t\t\t\t";
            $this->loadTemplate("cards.twig", "main.twig", 27)->display(twig_array_merge($context, ["card_title" => twig_get_attribute($this->env, $this->source,             // line 28
$context["card"], "card_title", [], "any", false, false, false, 28), "card_image" => twig_get_attribute($this->env, $this->source,             // line 29
$context["card"], "card_image", [], "any", false, false, false, 29), "card_price" => twig_get_attribute($this->env, $this->source,             // line 30
$context["card"], "card_price", [], "any", false, false, false, 30)]));
            // line 31
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t<a href=";
        echo twig_escape_filter($this->env, ($context["link_main"] ?? null), "html", null, true);
        echo " class=\"button-outline\">Browse all items</a>
\t\t</div>
\t</div>
\t";
        // line 35
        $this->loadTemplate("footer.twig", "main.twig", 35)->display($context);
        // line 36
        echo "\t</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 36,  112 => 35,  105 => 32,  91 => 31,  89 => 30,  88 => 29,  87 => 28,  85 => 27,  68 => 26,  59 => 19,  57 => 16,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main.twig", "C:\\WT\\sites\\lab3\\templates\\main.twig");
    }
}
