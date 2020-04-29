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

/* Location.twig */
class __TwigTemplate_37765d3e2313d1b2d093467567c8d1efd916a0f52de68ebdb00be6b8e1848844 extends \Twig\Template
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
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"CSS/My_Location.css\">
\t</head>
\t<body>
\t";
        // line 10
        $this->loadTemplate("navigation.twig", "Location.twig", 10)->display($context);
        // line 11
        echo "\t<header class=\"header\">
\t\t<div class=\"container\">
\t\t\t\t";
        // line 13
        $this->loadTemplate("header.twig", "Location.twig", 13)->display(twig_array_merge($context, ["header_title" => "Who are you?", "header_description" => ""]));
        // line 15
        echo "\t
\t\t</div>
\t</header>
\t<div class=\"container\">
\t\t<div class=\"data_form\">
\t\t\t\t<div class=\"adv__title\">";
        // line 20
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</div>
\t\t\t\t<form action=\"Location.php\" method=\"post\" class=\"subscribe\">
\t\t\t\t\t<input type=\"text\" name=\"client_adress\" class=\"subscribe__input\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["res_adress"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t<input type=\"text\" name=\"client_phone\" class=\"subscribe__input\" placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["res_phone"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t<input type=\"text\" name=\"client_name\" class=\"subscribe__input\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["res_name"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t<input type=\"text\" name=\"client_email\" class=\"subscribe__input\" placeholder=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["res_email"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t<input type=\"submit\" class=\"subscribe__button\" value=\"PURCHASE\">
\t\t\t\t</form>
\t\t</div>
\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37577.17650166144!2d27.5627099690246!3d53.9393201074275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcf84a9511139%3A0x3be3534f5f48775e!2z0JrQvtC80LDRgNC-0LLRgdC60LjQuSDRgNGL0L3QvtC6!5e0!3m2!1sru!2sby!4v1584222767349!5m2!1sru!2sby\" width=\"700\" height=\"500\" frameborder=\"2\" style=\"border:4;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
\t</div>
\t";
        // line 31
        $this->loadTemplate("footer.twig", "Location.twig", 31)->display($context);
        // line 32
        echo "\t</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "Location.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 32,  89 => 31,  80 => 25,  76 => 24,  72 => 23,  68 => 22,  63 => 20,  56 => 15,  54 => 13,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Location.twig", "C:\\WT\\sites\\lab5\\templates\\Location.twig");
    }
}
