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

/* Cart.twig */
class __TwigTemplate_969350afa15736b9cdf5ee196aa670dd4fdd7fb56deccf4e95644284d866ebba extends \Twig\Template
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
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"CSS/Cart.css\">
\t</head>
\t<body>
\t";
        // line 10
        $this->loadTemplate("navigation.twig", "Cart.twig", 10)->display($context);
        // line 11
        echo "\t<header class=\"header\">
\t\t<div class=\"container\">
\t\t\t\t";
        // line 13
        $this->loadTemplate("header.twig", "Cart.twig", 13)->display(twig_array_merge($context, ["header_title" => "Yeee, Good choice", "header_description" => "Get more and more"]));
        // line 15
        echo "\t
\t\t</div>
\t</header>
\t<div class=\"section\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"title\">Total order sum: \$";
        // line 20
        echo twig_escape_filter($this->env, ($context["Sum"] ?? null), "html", null, true);
        echo " </h2>
\t\t\t";
        // line 21
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
            // line 22
            echo "\t\t\t\t\t";
            $this->loadTemplate("cart_items.twig", "Cart.twig", 22)->display(twig_array_merge($context, ["card_title" => twig_get_attribute($this->env, $this->source,             // line 23
$context["card"], "card_title", [], "any", false, false, false, 23), "card_image" => twig_get_attribute($this->env, $this->source,             // line 24
$context["card"], "card_image", [], "any", false, false, false, 24), "card_num" => twig_get_attribute($this->env, $this->source,             // line 25
$context["card"], "card_num", [], "any", false, false, false, 25), "total_price" => twig_get_attribute($this->env, $this->source,             // line 26
$context["card"], "total_price", [], "any", false, false, false, 26), "card_price" => twig_get_attribute($this->env, $this->source,             // line 27
$context["card"], "card_price", [], "any", false, false, false, 27)]));
            // line 28
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
        // line 29
        echo "\t\t</div>
\t\t<div class=\"container\">
\t\t\t<a href=";
        // line 31
        echo twig_escape_filter($this->env, ($context["link_location"] ?? null), "html", null, true);
        echo " class=\"button-outline\">Purchase</a>
\t\t\t<a href=";
        // line 32
        echo twig_escape_filter($this->env, ($context["link_main"] ?? null), "html", null, true);
        echo " class=\"button-outline\">Get more</a>
\t\t</div>
\t</div>
\t
\t";
        // line 36
        $this->loadTemplate("footer.twig", "Cart.twig", 36)->display($context);
        // line 37
        echo "\t</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "Cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 37,  121 => 36,  114 => 32,  110 => 31,  106 => 29,  92 => 28,  90 => 27,  89 => 26,  88 => 25,  87 => 24,  86 => 23,  84 => 22,  67 => 21,  63 => 20,  56 => 15,  54 => 13,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Cart.twig", "C:\\WT\\sites\\lab5\\templates\\Cart.twig");
    }
}
