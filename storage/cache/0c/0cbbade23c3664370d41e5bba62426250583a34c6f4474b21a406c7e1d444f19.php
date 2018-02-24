<?php

/* tt_handart2/template/extension/module/ocajaxlogin/success.twig */
class __TwigTemplate_0766f1d34f2d571a1e2a53f17759a27f68d04ebf9950934b367b2da928d9e6f2 extends Twig_Template
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
        echo "<div class=\"ajax-container\">
  <div class=\"success-content\">
    <div class=\"page-title\"><h1>";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1></div>
    ";
        // line 4
        echo (isset($context["text_message"]) ? $context["text_message"] : null);
        echo "
    <div class=\"buttons\">
      <div class=\"pull-right\"><button class=\"button\" onclick=\"window.location.href='";
        // line 6
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "'\"><span>";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</span></button></div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/extension/module/ocajaxlogin/success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="ajax-container">*/
/*   <div class="success-content">*/
/*     <div class="page-title"><h1>{{ heading_title }}</h1></div>*/
/*     {{ text_message }}*/
/*     <div class="buttons">*/
/*       <div class="pull-right"><button class="button" onclick="window.location.href='{{ continue }}'"><span>{{ button_continue }}</span></button></div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
