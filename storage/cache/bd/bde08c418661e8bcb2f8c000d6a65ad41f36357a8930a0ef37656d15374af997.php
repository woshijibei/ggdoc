<?php

/* tt_handart2/template/extension/module/newsletterpopup.twig */
class __TwigTemplate_fbf9548160faa62d7b61992679e3c918663df6de23be09d3cab69dffdcfba181 extends Twig_Template
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
        echo "<div class=\"newletter-popup\">
<div id=\"boxes\" class=\"newletter-container\">
 <div id=\"dialog\" class=\"window\">
 <div id=\"popup2\">
\t<span class=\"b-close\"><span>";
        // line 5
        echo (isset($context["text_colose"]) ? $context["text_colose"] : null);
        echo "</span></span>
</div>
\t<div class=\"box\">
\t  <div class=\"newletter-title\"><h2>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2></div>
\t  <div class=\"box-content newleter-content\">
\t\t\t<label>";
        // line 10
        echo (isset($context["newletter_des"]) ? $context["newletter_des"] : null);
        echo "</label>
\t\t  <div id=\"frm_subscribe\">
\t\t\t  <form name=\"subscribe\" id=\"subscribe_popup\">
\t\t\t\t  <div>
\t\t\t\t\t <!-- <span class=\"required\">*</span><span>";
        // line 14
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</span>-->
\t\t\t\t\t <input type=\"text\" value=\"\" name=\"subscribe_pemail\" id=\"subscribe_pemail\" placeholder=\"";
        // line 15
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\"> 
\t\t\t\t\t <input type=\"hidden\" value=\"\" name=\"subscribe_pname\" id=\"subscribe_pname\" />
\t\t\t\t   <div id=\"notification\"></div>
\t\t\t\t\t<a class=\"button\" onclick=\"email_subscribepopup()\"><span>";
        // line 18
        echo (isset($context["entry_button"]) ? $context["entry_button"] : null);
        echo "</span></a>
\t\t\t\t\t";
        // line 19
        if ((isset($context["option_unsubscribe"]) ? $context["option_unsubscribe"] : null)) {
            // line 20
            echo "\t\t\t\t\t<a class=\"button\" onclick=\"email_unsubscribepopup()\"><span>";
            echo (isset($context["entry_unbutton"]) ? $context["entry_unbutton"] : null);
            echo "</span></a>
\t\t\t\t\t";
        }
        // line 21
        echo " 
\t\t\t\t  </div>
\t\t\t  </form>
\t\t\t  <div class=\"subscribe-bottom\">
\t\t\t\t<input type=\"checkbox\" id=\"newsletter_popup_dont_show_again\">
\t\t\t\t<label for=\"newsletter_popup_dont_show_again\">";
        // line 26
        echo (isset($context["entry_show_again"]) ? $context["entry_show_again"] : null);
        echo "</label>
\t\t\t  </div>
\t\t  </div><!-- /#frm_subscribe -->
\t\t</div><!-- /.box-content -->
 </div>
</div>\t
<script type=\"text/javascript\">
function email_subscribepopup(){
\t\$.ajax({
\t\t\ttype: 'post',
\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/subscribepopup',
\t\t\tdataType: 'html',
            data:\$(\"#subscribe_popup\").serialize(),
\t\t\tsuccess: function (html) {
\t\t\t\t// \$.cookie('shownewsletter', '1');
\t\t\t\ttry {
\t\t\t\t\teval(html);
\t\t\t\t} 
\t\t\t\tcatch (e) {
\t\t\t\t}
\t\t\t}}); 
}
function email_unsubscribepopup(){
\t\$.ajax({
\t\t\ttype: 'post',
\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
\t\t\tdataType: 'html',
            data:\$(\"#subscribe_popup\").serialize(),
\t\t\tsuccess: function (html) {
\t\t\t\ttry {
\t\t\t\t\teval(html);
\t\t\t\t} 
\t\t\t\tcatch (e) {
\t\t\t\t}
\t\t\t}}); 
\t\$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
}
</script>
<script type=\"text/javascript\">
    \$(document).ready(function() {

\t\tif(\$.cookie('shownewsletter')==1) \$('.newletter-popup').hide();
\t\t\$('#subscribe_pemail').keypress(function(e) {
            if(e.which == 13) {
                e.preventDefault();
                email_subscribepopup();
            }
\t\t\tvar name= \$(this).val();
\t\t  \t\$('#subscribe_pname').val(name);
        });
\t\t\$('#subscribe_pemail').change(function() {
\t\t var name= \$(this).val();
\t\t  \t\t\$('#subscribe_pname').val(name);
\t\t});
        //transition effect
        if(\$.cookie(\"shownewsletter\") != 1){
\t\t\t\$('.newletter-popup').bPopup();
        }
\t\t\$('#newsletter_popup_dont_show_again').on('change', function(){
\t\t\tif(\$.cookie(\"shownewsletter\") != 1){   
\t\t\t\t\$.cookie(\"shownewsletter\",'1')
\t\t\t}else{
\t\t\t\t\$.cookie(\"shownewsletter\",'0')
\t\t\t}
\t\t}); 
    });
</script>
</div><!-- /.box -->
</div>";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/extension/module/newsletterpopup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 26,  65 => 21,  59 => 20,  57 => 19,  53 => 18,  47 => 15,  43 => 14,  36 => 10,  31 => 8,  25 => 5,  19 => 1,);
    }
}
/* <div class="newletter-popup">*/
/* <div id="boxes" class="newletter-container">*/
/*  <div id="dialog" class="window">*/
/*  <div id="popup2">*/
/* 	<span class="b-close"><span>{{ text_colose }}</span></span>*/
/* </div>*/
/* 	<div class="box">*/
/* 	  <div class="newletter-title"><h2>{{ heading_title }}</h2></div>*/
/* 	  <div class="box-content newleter-content">*/
/* 			<label>{{ newletter_des }}</label>*/
/* 		  <div id="frm_subscribe">*/
/* 			  <form name="subscribe" id="subscribe_popup">*/
/* 				  <div>*/
/* 					 <!-- <span class="required">*</span><span>{{ entry_email }}</span>-->*/
/* 					 <input type="text" value="" name="subscribe_pemail" id="subscribe_pemail" placeholder="{{ entry_email }}"> */
/* 					 <input type="hidden" value="" name="subscribe_pname" id="subscribe_pname" />*/
/* 				   <div id="notification"></div>*/
/* 					<a class="button" onclick="email_subscribepopup()"><span>{{ entry_button }}</span></a>*/
/* 					{% if option_unsubscribe %}*/
/* 					<a class="button" onclick="email_unsubscribepopup()"><span>{{ entry_unbutton }}</span></a>*/
/* 					{% endif %} */
/* 				  </div>*/
/* 			  </form>*/
/* 			  <div class="subscribe-bottom">*/
/* 				<input type="checkbox" id="newsletter_popup_dont_show_again">*/
/* 				<label for="newsletter_popup_dont_show_again">{{ entry_show_again }}</label>*/
/* 			  </div>*/
/* 		  </div><!-- /#frm_subscribe -->*/
/* 		</div><!-- /.box-content -->*/
/*  </div>*/
/* </div>	*/
/* <script type="text/javascript">*/
/* function email_subscribepopup(){*/
/* 	$.ajax({*/
/* 			type: 'post',*/
/* 			url: 'index.php?route=extension/module/newslettersubscribe/subscribepopup',*/
/* 			dataType: 'html',*/
/*             data:$("#subscribe_popup").serialize(),*/
/* 			success: function (html) {*/
/* 				// $.cookie('shownewsletter', '1');*/
/* 				try {*/
/* 					eval(html);*/
/* 				} */
/* 				catch (e) {*/
/* 				}*/
/* 			}}); */
/* }*/
/* function email_unsubscribepopup(){*/
/* 	$.ajax({*/
/* 			type: 'post',*/
/* 			url: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',*/
/* 			dataType: 'html',*/
/*             data:$("#subscribe_popup").serialize(),*/
/* 			success: function (html) {*/
/* 				try {*/
/* 					eval(html);*/
/* 				} */
/* 				catch (e) {*/
/* 				}*/
/* 			}}); */
/* 	$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); */
/* }*/
/* </script>*/
/* <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/* */
/* 		if($.cookie('shownewsletter')==1) $('.newletter-popup').hide();*/
/* 		$('#subscribe_pemail').keypress(function(e) {*/
/*             if(e.which == 13) {*/
/*                 e.preventDefault();*/
/*                 email_subscribepopup();*/
/*             }*/
/* 			var name= $(this).val();*/
/* 		  	$('#subscribe_pname').val(name);*/
/*         });*/
/* 		$('#subscribe_pemail').change(function() {*/
/* 		 var name= $(this).val();*/
/* 		  		$('#subscribe_pname').val(name);*/
/* 		});*/
/*         //transition effect*/
/*         if($.cookie("shownewsletter") != 1){*/
/* 			$('.newletter-popup').bPopup();*/
/*         }*/
/* 		$('#newsletter_popup_dont_show_again').on('change', function(){*/
/* 			if($.cookie("shownewsletter") != 1){   */
/* 				$.cookie("shownewsletter",'1')*/
/* 			}else{*/
/* 				$.cookie("shownewsletter",'0')*/
/* 			}*/
/* 		}); */
/*     });*/
/* </script>*/
/* </div><!-- /.box -->*/
/* </div>*/
