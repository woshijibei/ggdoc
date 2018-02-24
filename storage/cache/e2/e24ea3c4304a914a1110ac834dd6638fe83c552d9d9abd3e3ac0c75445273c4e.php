<?php

/* tt_handart2/template/extension/module/ocajaxlogin/ocajaxlogin.twig */
class __TwigTemplate_a0d86d9fd3110c9ab777d791faacdc04ed47e3be54373a4695a666dd2ff1f2ec extends Twig_Template
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
        echo "<div id=\"ajax-login-block\">
</div>
<div id=\"ajax-loader\">
    <img src=\"";
        // line 4
        echo (isset($context["loader_img"]) ? $context["loader_img"] : null);
        echo "\" alt=\"\" />
</div>
<div class=\"ajax-body-login\">
    <div class=\"account-login\">
        <div class=\"page-title\">
            <h1>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <a href=\"javascript:void(0);\" class=\"a-close-frm\" onclick=\"ocajaxlogin.closeForm();\"><span>Close</span></a>
        </div>
        <div class=\"ajax-content\">
            ";
        // line 13
        echo (isset($context["ajax_login_content"]) ? $context["ajax_login_content"] : null);
        echo "
        </div>
    </div>
    <div class=\"account-register\">
        <div class=\"page-title\">
            <h1>";
        // line 18
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <a href=\"javascript:void(0);\" class=\"a-close-frm\" onclick=\"ocajaxlogin.closeForm();\"><span>Close</span></a>
        </div>
        <div class=\"ajax-content\">
            ";
        // line 22
        echo (isset($context["ajax_register_content"]) ? $context["ajax_register_content"] : null);
        echo "
        </div>
    </div>
    <div class=\"account-success\">
        <div class=\"ajax-content\">
            ";
        // line 27
        echo (isset($context["ajax_success_content"]) ? $context["ajax_success_content"] : null);
        echo "
        </div>
    </div>
    <div class=\"logout-success\">
        <div class=\"ajax-content\">
            ";
        // line 32
        echo (isset($context["ajax_logoutsuccess_content"]) ? $context["ajax_logoutsuccess_content"] : null);
        echo "
        </div>
    </div>
</div>
<div class=\"opc-hidden\">
    ";
        // line 37
        if ((isset($context["enable_status"]) ? $context["enable_status"] : null)) {
            // line 38
            echo "        <input type=\"hidden\" id=\"input-opc-status\" value=\"1\" />
    ";
        } else {
            // line 40
            echo "        <input type=\"hidden\" id=\"input-opc-status\" value=\"0\" />
    ";
        }
        // line 42
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/extension/module/ocajaxlogin/ocajaxlogin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 42,  84 => 40,  80 => 38,  78 => 37,  70 => 32,  62 => 27,  54 => 22,  47 => 18,  39 => 13,  32 => 9,  24 => 4,  19 => 1,);
    }
}
/* <div id="ajax-login-block">*/
/* </div>*/
/* <div id="ajax-loader">*/
/*     <img src="{{ loader_img }}" alt="" />*/
/* </div>*/
/* <div class="ajax-body-login">*/
/*     <div class="account-login">*/
/*         <div class="page-title">*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <a href="javascript:void(0);" class="a-close-frm" onclick="ocajaxlogin.closeForm();"><span>Close</span></a>*/
/*         </div>*/
/*         <div class="ajax-content">*/
/*             {{ ajax_login_content }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="account-register">*/
/*         <div class="page-title">*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <a href="javascript:void(0);" class="a-close-frm" onclick="ocajaxlogin.closeForm();"><span>Close</span></a>*/
/*         </div>*/
/*         <div class="ajax-content">*/
/*             {{ ajax_register_content }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="account-success">*/
/*         <div class="ajax-content">*/
/*             {{ ajax_success_content }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="logout-success">*/
/*         <div class="ajax-content">*/
/*             {{ ajax_logoutsuccess_content }}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="opc-hidden">*/
/*     {% if enable_status %}*/
/*         <input type="hidden" id="input-opc-status" value="1" />*/
/*     {% else %}*/
/*         <input type="hidden" id="input-opc-status" value="0" />*/
/*     {% endif %}*/
/* </div>*/
/* */
