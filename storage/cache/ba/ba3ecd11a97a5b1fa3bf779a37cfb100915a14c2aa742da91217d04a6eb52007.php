<?php

/* tt_handart2/template/extension/module/ochozmegamenu.twig */
class __TwigTemplate_ed265c1fa64a7399b3fbff8d700486f97179b9fc8f80833f43b5ef75da3fee0c extends Twig_Template
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
        echo "<div class=\"hozmenu-container\">
\t<div class=\"ma-nav-mobile-container\">
\t\t<div class=\"hozmenu\">
\t\t\t<div class=\"navbar\">
\t\t\t\t<div id=\"navbar-inner\" class=\"navbar-inner navbar-inactive\">
\t\t\t\t\t\t<div class=\"menu-mobile\">
\t\t\t\t\t\t\t<a class=\"btn btn-navbar navbar-toggle\">
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</a>
                        ";
        // line 12
        if ((isset($context["mobile_menu"]) ? $context["mobile_menu"] : null)) {
            // line 13
            echo "                        \t<span class=\"brand navbar-brand\">";
            echo (isset($context["menu_title"]) ? $context["menu_title"] : null);
            echo "</span>
                        ";
        } else {
            // line 15
            echo "                        \t<span class=\"brand navbar-brand\">";
            echo (isset($context["category_title"]) ? $context["category_title"] : null);
            echo "</span>
                        ";
        }
        // line 17
        echo "                    </div>
\t\t\t\t
\t\t\t\t\t";
        // line 19
        echo (isset($context["_menu"]) ? $context["_menu"] : null);
        echo " 
\t\t\t\t
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
<div class=\"nav-container visible-lg visible-md\">\t\t
\t\t<div id=\"pt_custommenu\" class=\"pt_custommenu\">
\t\t\t<!-- <div class=\"container\"> -->
\t\t\t\t";
        // line 28
        echo (isset($context["hozmegamenu"]) ? $context["hozmegamenu"] : null);
        echo "
\t\t\t<!-- </div> -->
\t\t</div>
\t</div>
</div>
<div id=\"sticky-menu\" data-sticky=\"";
        // line 33
        echo (isset($context["sticky_menu"]) ? $context["sticky_menu"] : null);
        echo "\"></div>
<script type=\"text/javascript\">
//<![CDATA[
\tvar body_class = \$('body').attr('class'); 
\tif(body_class.search('common-home') != -1) {
\t\t\$('#pt_menu_home').addClass('act');
\t}\t
var CUSTOMMENU_POPUP_EFFECT =";
        // line 40
        echo (isset($context["effect"]) ? $context["effect"] : null);
        echo "
var CUSTOMMENU_POPUP_TOP_OFFSET = ";
        // line 41
        echo (isset($context["top_offset"]) ? $context["top_offset"] : null);
        echo "
//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/extension/module/ochozmegamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 41,  80 => 40,  70 => 33,  62 => 28,  50 => 19,  46 => 17,  40 => 15,  34 => 13,  32 => 12,  19 => 1,);
    }
}
/* <div class="hozmenu-container">*/
/* 	<div class="ma-nav-mobile-container">*/
/* 		<div class="hozmenu">*/
/* 			<div class="navbar">*/
/* 				<div id="navbar-inner" class="navbar-inner navbar-inactive">*/
/* 						<div class="menu-mobile">*/
/* 							<a class="btn btn-navbar navbar-toggle">*/
/* 									<span class="icon-bar"></span>*/
/* 									<span class="icon-bar"></span>*/
/* 									<span class="icon-bar"></span>*/
/* 							</a>*/
/*                         {% if mobile_menu %}*/
/*                         	<span class="brand navbar-brand">{{ menu_title }}</span>*/
/*                         {% else %}*/
/*                         	<span class="brand navbar-brand">{{ category_title }}</span>*/
/*                         {% endif %}*/
/*                     </div>*/
/* 				*/
/* 					{{ _menu }} */
/* 				*/
/* 			</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* <div class="nav-container visible-lg visible-md">		*/
/* 		<div id="pt_custommenu" class="pt_custommenu">*/
/* 			<!-- <div class="container"> -->*/
/* 				{{ hozmegamenu }}*/
/* 			<!-- </div> -->*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div id="sticky-menu" data-sticky="{{ sticky_menu }}"></div>*/
/* <script type="text/javascript">*/
/* //<![CDATA[*/
/* 	var body_class = $('body').attr('class'); */
/* 	if(body_class.search('common-home') != -1) {*/
/* 		$('#pt_menu_home').addClass('act');*/
/* 	}	*/
/* var CUSTOMMENU_POPUP_EFFECT ={{ effect }}*/
/* var CUSTOMMENU_POPUP_TOP_OFFSET = {{ top_offset }}*/
/* //]]>*/
/* </script>*/
