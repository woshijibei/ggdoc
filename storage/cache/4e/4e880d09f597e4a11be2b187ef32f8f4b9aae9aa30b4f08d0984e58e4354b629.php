<?php

/* tt_handart2/template/common/search.twig */
class __TwigTemplate_2f34efe9f7e87efaac4c31520628c5922a3d65e3d6ccfe4b28c81b77dca532d7 extends Twig_Template
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
        echo "<div class=\"search-container\">
\t<i class=\"ion-ios-search-strong\"></i>
\t<div class=\"search-content\">
\t<div class=\"container\">
\t<div id=\"search\">
\t\t\t<h1>";
        // line 6
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "</h1>
\t\t\t<input type=\"text\" name=\"search\" value=\"";
        // line 7
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control input-lg\" />
\t\t\t<button type=\"button\" class=\"btn btn-default btn-lg\"><i class=\"ion-ios-search-strong\"></i></button>
\t\t</div>
\t</div>
\t</div>
</div>
<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\t\$('.search-container > i').click(function(){
\t\t\t\$(\".search-content\").slideToggle();
\t\t\t\$(this).toggleClass(\"ion-ios-search-strong ion-android-close\")
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="search-container">*/
/* 	<i class="ion-ios-search-strong"></i>*/
/* 	<div class="search-content">*/
/* 	<div class="container">*/
/* 	<div id="search">*/
/* 			<h1>{{ text_search }}</h1>*/
/* 			<input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control input-lg" />*/
/* 			<button type="button" class="btn btn-default btn-lg"><i class="ion-ios-search-strong"></i></button>*/
/* 		</div>*/
/* 	</div>*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* 	$(document).ready(function() {*/
/* 		$('.search-container > i').click(function(){*/
/* 			$(".search-content").slideToggle();*/
/* 			$(this).toggleClass("ion-ios-search-strong ion-android-close")*/
/* 		});*/
/* 	});*/
/* </script>*/
