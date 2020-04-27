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

/* base.html */
class __TwigTemplate_3b400cb630c82da91b653413ba3c84e4d0b497370dee37ff78bafe1f48ad59fb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"ru\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"/>
</head>
<body>
\t<div id=\"content\">
\t\t";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "\t</div>
</body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Серия романов о Гарри Поттере";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "\t\t<h1>";
        echo twig_escape_filter($this->env, ($context["hui"] ?? null), "html", null, true);
        echo "</h1>
\t\t<div id=\"books\">
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["books"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 13
            echo "\t\t\t<div class=\"book\">
\t\t\t\t<strong>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "number", [], "any", false, false, false, 14), "html", null, true);
            echo "</strong>. \"<em>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 14), "html", null, true);
            echo "\"</em> - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "date", [], "any", false, false, false, 14), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t</div>
\t\t";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  98 => 17,  85 => 14,  82 => 13,  78 => 12,  72 => 10,  68 => 9,  61 => 4,  54 => 19,  52 => 9,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html", "C:\\WT\\sites\\lab3\\templates\\base.html");
    }
}
