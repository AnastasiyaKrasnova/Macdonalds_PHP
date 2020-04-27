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

/* Sales.twig */
class __TwigTemplate_694c41603c74ae054f5dd33a35e1afcac91dd1d0917ade5ec75fad1a467432be extends \Twig\Template
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
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"CSS/Sales.css\">
\t</head>
\t<body>
\t";
        // line 10
        $this->loadTemplate("navigation.twig", "Sales.twig", 10)->display($context);
        // line 11
        echo "\t<header class=\"header\">
\t\t<div class=\"container\">
\t\t\t\t";
        // line 13
        $this->loadTemplate("header.twig", "Sales.twig", 13)->display(twig_array_merge($context, ["header_title" => "Get all of this almoust for free", "header_description" => "Our bestsellers"]));
        // line 15
        echo "\t
\t\t</div>
\t</header>
\t<div class=\"section\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"title\">Good Choice!!</h2>
\t\t\t<div class=\"subtitle\">Take them as quickly as possible</div>
\t\t\t";
        // line 22
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
            // line 23
            echo "\t\t\t\t\t";
            $this->loadTemplate("cards.twig", "Sales.twig", 23)->display(twig_array_merge($context, ["card_title" => twig_get_attribute($this->env, $this->source,             // line 24
$context["card"], "card_title", [], "any", false, false, false, 24), "card_image" => twig_get_attribute($this->env, $this->source,             // line 25
$context["card"], "card_image", [], "any", false, false, false, 25), "card_price" => twig_get_attribute($this->env, $this->source,             // line 26
$context["card"], "card_price", [], "any", false, false, false, 26)]));
            // line 27
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
        // line 28
        echo "\t\t\t<a href=";
        echo twig_escape_filter($this->env, ($context["link_main"] ?? null), "html", null, true);
        echo " class=\"button-outline\">Return to the main menu</a>
\t\t</div>
\t</div>
\t";
        // line 31
        $this->loadTemplate("footer.twig", "Sales.twig", 31)->display($context);
        // line 32
        echo "\t</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "Sales.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 32,  109 => 31,  102 => 28,  88 => 27,  86 => 26,  85 => 25,  84 => 24,  82 => 23,  65 => 22,  56 => 15,  54 => 13,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Sales.twig", "C:\\WT\\sites\\lab3\\templates\\Sales.twig");
    }
}
