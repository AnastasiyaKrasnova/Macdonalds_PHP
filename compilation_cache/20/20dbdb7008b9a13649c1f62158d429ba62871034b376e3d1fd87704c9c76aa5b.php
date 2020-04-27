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

/* Menu.twig */
class __TwigTemplate_a747655d33c752365f4819c9c636806624c90853723c4525e4df5e58e17a47ef extends \Twig\Template
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
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"CSS/Menu.css\">
\t</head>
\t<body>
\t";
        // line 10
        $this->loadTemplate("navigation.twig", "Menu.twig", 10)->display($context);
        // line 11
        echo "\t<header class=\"header\">
\t\t<div class=\"container\">
\t\t\t\t";
        // line 13
        $this->loadTemplate("header.twig", "Menu.twig", 13)->display(twig_array_merge($context, ["header_title" => "Only the Freshiest Ingridients", "header_description" => "Present our wonderfull content since 1965"]));
        // line 15
        echo "\t
\t\t</div>
\t</header>
\t<div class=\"section\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"title\">";
        // line 20
        echo twig_escape_filter($this->env, ($context["menu_header"] ?? null), "html", null, true);
        echo "</h2>
\t\t\t<div class=\"subtitle\">Take them as quickly as possible</div>
\t\t\t";
        // line 22
        $this->loadTemplate("filters.twig", "Menu.twig", 22)->display($context);
        // line 23
        echo "\t\t\t<div class=\"card-wrapper\">
\t\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 25
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
            // line 26
            echo "\t\t\t\t\t";
            $this->loadTemplate("cards.twig", "Menu.twig", 26)->display(twig_array_merge($context, ["card_title" => twig_get_attribute($this->env, $this->source,             // line 27
$context["card"], "card_title", [], "any", false, false, false, 27), "card_image" => twig_get_attribute($this->env, $this->source,             // line 28
$context["card"], "card_image", [], "any", false, false, false, 28), "card_price" => twig_get_attribute($this->env, $this->source,             // line 29
$context["card"], "card_price", [], "any", false, false, false, 29)]));
            echo "\t
\t\t\t\t";
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
        // line 31
        echo "\t\t\t\t<a href=";
        echo twig_escape_filter($this->env, ($context["link_main"] ?? null), "html", null, true);
        echo " class=\"button-outline\">Return to the Main Menu</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 36
        $this->loadTemplate("footer.twig", "Menu.twig", 36)->display($context);
        // line 37
        echo "\t</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "Menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 37,  120 => 36,  111 => 31,  95 => 29,  94 => 28,  93 => 27,  91 => 26,  74 => 25,  70 => 23,  68 => 22,  63 => 20,  56 => 15,  54 => 13,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Menu.twig", "C:\\WT\\sites\\lab5\\templates\\Menu.twig");
    }
}
