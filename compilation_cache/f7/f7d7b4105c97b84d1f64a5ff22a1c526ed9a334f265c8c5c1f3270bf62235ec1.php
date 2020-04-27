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

/* my_form.twig */
class __TwigTemplate_cc746fc471ecba54c66690d029f40c524e8e4c551e1f16b1eb1903b09c27b76c extends \Twig\Template
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
\t\t<div class=";
        // line 2
        echo twig_escape_filter($this->env, ($context["class_name"] ?? null), "html", null, true);
        echo ">
\t\t\t<div class=\"adv__title\">Love MacDonald's More</div>
\t\t\t<form action=\"\" class=\"subscribe\">
\t\t\t\t<input type=\"text\" class=\"subscribe__input\" placeholder=\"Your email adress\">
\t\t\t\t<input type=\"submit\" class=\"subscribe__button\" value=\"Subscribe\">
\t\t\t</form>
\t\t</div>


";
    }

    public function getTemplateName()
    {
        return "my_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "my_form.twig", "C:\\WT\\sites\\lab3\\templates\\my_form.twig");
    }
}
