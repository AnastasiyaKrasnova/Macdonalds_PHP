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

/* cards.twig */
class __TwigTemplate_ba0beeaf2e64c26b22dd0f58c3195928d20b1e534127e4dae99d30180657e5c0 extends \Twig\Template
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
<div class=\"card\">
\t<a href=\"../Cart.php?name=";
        // line 3
        echo twig_escape_filter($this->env, ($context["card_title"] ?? null), "html", null, true);
        echo "&price=";
        echo twig_escape_filter($this->env, ($context["card_price"] ?? null), "html", null, true);
        echo "&image=";
        echo twig_escape_filter($this->env, ($context["card_image"] ?? null), "html", null, true);
        echo "&type=Add\">
\t\t<div class=\"card__image\">
\t\t\t\t<img src=";
        // line 5
        echo twig_escape_filter($this->env, ($context["card_image"] ?? null), "html", null, true);
        echo " alt=\"This is awesome\">
\t\t</div>
\t\t<div class=\"card__title\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["card_title"] ?? null), "html", null, true);
        echo "</div>
\t\t<div class=\"card__price\">\$";
        // line 8
        echo twig_escape_filter($this->env, ($context["card_price"] ?? null), "html", null, true);
        echo "</div>\t
\t</a>
</div>


";
    }

    public function getTemplateName()
    {
        return "cards.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  55 => 7,  50 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cards.twig", "C:\\WT\\sites\\lab5\\templates\\cards.twig");
    }
}
