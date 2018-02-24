<?php

/* tt_handart2/template/common/footer.twig */
class __TwigTemplate_dfa2bfc665d3c1d933a61355cf1624f360d3d997b61ead1efa1e5bc269f7e585 extends Twig_Template
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
        if ((isset($context["block2"]) ? $context["block2"] : null)) {
            // line 2
            echo "\t<div class=\"container\">
\t\t";
            // line 3
            echo (isset($context["block2"]) ? $context["block2"] : null);
            echo "
\t</div>
";
        }
        // line 6
        echo "<footer>
\t<div class=\"container\">
\t\t<div id=\"back-top\">";
        // line 8
        echo (isset($context["text_backtop"]) ? $context["text_backtop"] : null);
        echo "</div>
\t\t";
        // line 9
        if ((isset($context["block3"]) ? $context["block3"] : null)) {
            // line 10
            echo "\t\t\t";
            echo (isset($context["block3"]) ? $context["block3"] : null);
            echo "
\t\t";
        }
        // line 12
        echo "\t\t<p class=\"copyright-text\">";
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</p>
\t\t";
        // line 13
        if ((isset($context["block4"]) ? $context["block4"] : null)) {
            // line 14
            echo "\t\t\t";
            echo (isset($context["block4"]) ? $context["block4"] : null);
            echo "
\t\t";
        }
        // line 16
        echo "\t</div>
</footer>
<script type=\"text/javascript\">
\$(document).ready(function(){
\t// hide #back-top first
\t\$(\"#back-top\").hide();
\t// fade in #back-top
\t\$(function () {
\t\t\$(window).scroll(function () {
\t\t\tif (\$(this).scrollTop() > (\$('header').height()+\$('header').offset().top)) {
\t\t\t\t\$('#back-top').fadeIn();
\t\t\t} else {
\t\t\t\t\$('#back-top').fadeOut();
\t\t\t}
\t\t});
\t\t// scroll body to 0px on click
\t\t\$('#back-top').click(function () {
\t\t\t\$('body,html').animate({scrollTop: 0}, 800);
\t\t\treturn false;
\t\t});
\t});
});
</script>
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</div><!-- wrapper -->
</body></html>";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  53 => 14,  51 => 13,  46 => 12,  40 => 10,  38 => 9,  34 => 8,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if block2 %}*/
/* 	<div class="container">*/
/* 		{{ block2 }}*/
/* 	</div>*/
/* {% endif %}*/
/* <footer>*/
/* 	<div class="container">*/
/* 		<div id="back-top">{{ text_backtop }}</div>*/
/* 		{% if block3 %}*/
/* 			{{ block3 }}*/
/* 		{% endif %}*/
/* 		<p class="copyright-text">{{ powered }}</p>*/
/* 		{% if block4 %}*/
/* 			{{ block4 }}*/
/* 		{% endif %}*/
/* 	</div>*/
/* </footer>*/
/* <script type="text/javascript">*/
/* $(document).ready(function(){*/
/* 	// hide #back-top first*/
/* 	$("#back-top").hide();*/
/* 	// fade in #back-top*/
/* 	$(function () {*/
/* 		$(window).scroll(function () {*/
/* 			if ($(this).scrollTop() > ($('header').height()+$('header').offset().top)) {*/
/* 				$('#back-top').fadeIn();*/
/* 			} else {*/
/* 				$('#back-top').fadeOut();*/
/* 			}*/
/* 		});*/
/* 		// scroll body to 0px on click*/
/* 		$('#back-top').click(function () {*/
/* 			$('body,html').animate({scrollTop: 0}, 800);*/
/* 			return false;*/
/* 		});*/
/* 	});*/
/* });*/
/* </script>*/
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //-->*/
/* </div><!-- wrapper -->*/
/* </body></html>*/
