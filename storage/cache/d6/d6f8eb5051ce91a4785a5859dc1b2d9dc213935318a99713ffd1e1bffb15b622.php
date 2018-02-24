<?php

/* tt_handart2/template/common/home.twig */
class __TwigTemplate_81df8801e60af84941b48f880100a363349106e8d52acdfb1566942145243eb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
\t<div id=\"content\">
\t\t";
        // line 3
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "\t\t
\t\t";
        // line 4
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "\t\t
\t\t";
        // line 5
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "\t\t
\t\t";
        // line 6
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "\t\t
\t</div>
";
        // line 8
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  36 => 6,  32 => 5,  28 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* 	<div id="content">*/
/* 		{{ column_left }}		*/
/* 		{{ content_top }}		*/
/* 		{{ content_bottom }}		*/
/* 		{{ column_right }}		*/
/* 	</div>*/
/* {{ footer }}*/
