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

/* footer.twig */
class __TwigTemplate_5b388525f56e1e27f498a77458e784b277a739f3885e961f24437e8125200b8b extends \Twig\Template
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
        echo "<div class=\"adv-wrapper adv-wrapper--bg-1\">
\t\t<div class=\"container adv-content-centre\">
\t\t\t<div class=\"adv__title\">Love MacDonald's More</div>
\t\t\t<form action=\"\" class=\"subscribe\">
\t\t\t\t<input type=\"text\" class=\"subscribe__input\" placeholder=\"Your email adress\">
\t\t\t\t<input type=\"submit\" class=\"subscribe__button\" value=\"Subscribe\">
\t\t\t</form>
\t\t</div>
</div>
<script src=\"https://kit.fontawesome.com/090f762d61.js\" crossorigin=\"anonymous\"></script>\t


";
    }

    public function getTemplateName()
    {
        return "footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.twig", "C:\\WT\\sites\\lab3\\templates\\footer.twig");
    }
}
