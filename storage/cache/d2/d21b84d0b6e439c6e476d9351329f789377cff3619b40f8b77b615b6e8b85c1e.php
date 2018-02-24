<?php

/* tt_handart2/template/extension/module/occmsblock.twig */
class __TwigTemplate_43fde0b7bbbe93cc68dacf789e409cd0af78f61c4fcc6e58e76500213dfcfdec extends Twig_Template
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
        echo "<div id=\"cmsblock-";
        echo $this->getAttribute($this->getAttribute((isset($context["cmsblocks"]) ? $context["cmsblocks"] : null), 0, array(), "array"), "id_cmsblock", array(), "array");
        echo "\"  class=\"cmsblock\">
\t<div class='description'>";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["cmsblocks"]) ? $context["cmsblocks"] : null), 0, array(), "array"), "description", array(), "array");
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/extension/module/occmsblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
/* <div id="cmsblock-{{ cmsblocks[0]['id_cmsblock'] }}"  class="cmsblock">*/
/* 	<div class='description'>{{ cmsblocks[0]['description']  }}</div>*/
/* </div>*/
/* */
