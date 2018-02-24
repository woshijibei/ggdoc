<?php

/* tt_handart2/template/extension/module/newslettersubscribe.twig */
class __TwigTemplate_fab68353b18b24a95fde58b7a303cf117194b37b078157183e0df5ce62f89d9a extends Twig_Template
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
        echo "<div class=\"newletter-subscribe-container\">
<div>
<div class=\"newletter-subscribe\">
\t<div id=\"boxes-normal\" class=\"newletter-container\">
\t\t<div style=\"\" id=\"dialog-normal\" class=\"window\">
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"newletter-title\">
\t\t\t\t\t<h6>";
        // line 8
        echo (isset($context["heading_title3"]) ? $context["heading_title3"] : null);
        echo "</h6>
\t\t\t\t\t<h3>";
        // line 9
        echo (isset($context["heading_title2"]) ? $context["heading_title2"] : null);
        echo "</h3>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"box-content newleter-content\">
\t\t\t\t\t<div class=\"des-testimonial\">
\t\t\t\t\t\t";
        // line 13
        echo (isset($context["newletter_des2"]) ? $context["newletter_des2"] : null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"frm_subscribe-normal\">
\t\t\t\t\t\t<form name=\"subscribe\" id=\"subscribe\">
\t\t\t\t\t\t\t<input type=\"text\" value=\"\" name=\"subscribe_email\" id=\"subscribe_email\" placeholder=\"";
        // line 17
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" value=\"\" name=\"subscribe_name\" id=\"subscribe_name\" />
\t\t\t\t\t\t\t<a class=\"btn\" onclick=\"email_subscribe()\"><span>";
        // line 19
        echo (isset($context["entry_button"]) ? $context["entry_button"] : null);
        echo "</span><i class=\"fa-envelope-o fa\"></i></a>
\t\t\t\t\t\t\t";
        // line 20
        if ((isset($context["option_unsubscribe"]) ? $context["option_unsubscribe"] : null)) {
            // line 21
            echo "\t\t\t\t\t\t\t\t<a class=\"btn\" onclick=\"email_unsubscribe()\"><span>";
            echo (isset($context["entry_unbutton"]) ? $context["entry_unbutton"] : null);
            echo "</span><i class=\"fa-envelope-o fa\"></i></a>
\t\t\t\t\t\t\t";
        }
        // line 22
        echo "   
\t\t\t\t\t\t</form>
\t\t\t\t\t</div><!-- /#frm_subscribe -->
\t\t\t\t\t<div id=\"notification-normal\"></div>
\t\t\t\t</div><!-- /.box-content -->
\t\t\t</div>
\t\t</div>
<script type=\"text/javascript\">
function email_subscribe(){
\t\$.ajax({
\t\ttype: 'post',
\t\turl: 'index.php?route=extension/module/newslettersubscribe/subscribe',
\t\tdataType: 'html',
\t\tdata:\$(\"#subscribe\").serialize(),
\t\tsuccess: function (html) {
\t\t\ttry {
\t\t\t\teval(html);
\t\t\t} 
\t\t\tcatch (e) {
\t\t\t}\t\t\t\t
\t\t}});
}
function email_unsubscribe(){
\t\$.ajax({
\t\ttype: 'post',
\t\turl: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
\t\tdataType: 'html',
\t\tdata:\$(\"#subscribe\").serialize(),
\t\tsuccess: function (html) {
\t\t\ttry {
\t\t\t
\t\t\t\teval(html);
\t\t\t
\t\t\t} catch (e) {
\t\t\t}
\t\t}}); 
\t\$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
}
</script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
\t\t\$('#subscribe_email').keypress(function(e) {
            if(e.which == 13) {
                e.preventDefault();
                email_subscribe();
            }
\t\t\tvar name= \$(this).val();
\t\t  \t\$('#subscribe_name').val(name);
        });
\t\t\$('#subscribe_email').change(function() {
\t\t var name= \$(this).val();
\t\t  \t\t\$('#subscribe_name').val(name);
\t\t});
\t
    });
</script>
</div>
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/extension/module/newslettersubscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 22,  57 => 21,  55 => 20,  51 => 19,  46 => 17,  39 => 13,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <div class="newletter-subscribe-container">*/
/* <div>*/
/* <div class="newletter-subscribe">*/
/* 	<div id="boxes-normal" class="newletter-container">*/
/* 		<div style="" id="dialog-normal" class="window">*/
/* 			<div class="box">*/
/* 				<div class="newletter-title">*/
/* 					<h6>{{ heading_title3 }}</h6>*/
/* 					<h3>{{ heading_title2 }}</h3>					*/
/* 				</div>*/
/* 				<div class="box-content newleter-content">*/
/* 					<div class="des-testimonial">*/
/* 						{{ newletter_des2 }}*/
/* 					</div>*/
/* 					<div id="frm_subscribe-normal">*/
/* 						<form name="subscribe" id="subscribe">*/
/* 							<input type="text" value="" name="subscribe_email" id="subscribe_email" placeholder="{{ entry_email }}">*/
/* 							<input type="hidden" value="" name="subscribe_name" id="subscribe_name" />*/
/* 							<a class="btn" onclick="email_subscribe()"><span>{{ entry_button }}</span><i class="fa-envelope-o fa"></i></a>*/
/* 							{% if option_unsubscribe %}*/
/* 								<a class="btn" onclick="email_unsubscribe()"><span>{{ entry_unbutton }}</span><i class="fa-envelope-o fa"></i></a>*/
/* 							{% endif %}   */
/* 						</form>*/
/* 					</div><!-- /#frm_subscribe -->*/
/* 					<div id="notification-normal"></div>*/
/* 				</div><!-- /.box-content -->*/
/* 			</div>*/
/* 		</div>*/
/* <script type="text/javascript">*/
/* function email_subscribe(){*/
/* 	$.ajax({*/
/* 		type: 'post',*/
/* 		url: 'index.php?route=extension/module/newslettersubscribe/subscribe',*/
/* 		dataType: 'html',*/
/* 		data:$("#subscribe").serialize(),*/
/* 		success: function (html) {*/
/* 			try {*/
/* 				eval(html);*/
/* 			} */
/* 			catch (e) {*/
/* 			}				*/
/* 		}});*/
/* }*/
/* function email_unsubscribe(){*/
/* 	$.ajax({*/
/* 		type: 'post',*/
/* 		url: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',*/
/* 		dataType: 'html',*/
/* 		data:$("#subscribe").serialize(),*/
/* 		success: function (html) {*/
/* 			try {*/
/* 			*/
/* 				eval(html);*/
/* 			*/
/* 			} catch (e) {*/
/* 			}*/
/* 		}}); */
/* 	$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); */
/* }*/
/* </script>*/
/* <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/* 		$('#subscribe_email').keypress(function(e) {*/
/*             if(e.which == 13) {*/
/*                 e.preventDefault();*/
/*                 email_subscribe();*/
/*             }*/
/* 			var name= $(this).val();*/
/* 		  	$('#subscribe_name').val(name);*/
/*         });*/
/* 		$('#subscribe_email').change(function() {*/
/* 		 var name= $(this).val();*/
/* 		  		$('#subscribe_name').val(name);*/
/* 		});*/
/* 	*/
/*     });*/
/* </script>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
