<?php

/* tt_handart2/template/extension/module/octestimonial.twig */
class __TwigTemplate_6336e9d7a7376891e89e7157f846769008cbe4494ec78afd7c1f4b9a1331db7d extends Twig_Template
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
        echo "<div class=\"testimonial-container\">
<div class=\"container\">
\t<div class=\"module-title\">
\t\t<h2>
\t\t\t";
        // line 5
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "
\t\t</h2>
\t</div>
\t";
        // line 8
        $context["count"] = 0;
        // line 9
        echo "\t";
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            echo "\t\t
\t\t";
            // line 10
            $context["rows"] = $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "rows", array());
            // line 11
            echo "\t";
        } else {
            // line 12
            echo "\t\t";
            $context["rows"] = 1;
            // line 13
            echo "\t";
        }
        // line 14
        echo "\t";
        if ((isset($context["testimonials"]) ? $context["testimonials"] : null)) {
            // line 15
            echo "\t\t<div class=\"block-content\">
\t\t\t<div id=\"slides\" class=\"owl-carousel owl-theme\">
\t\t\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["testimonials"]) ? $context["testimonials"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 18
                echo "\t\t\t\t\t";
                if ((((isset($context["count"]) ? $context["count"] : null) % (isset($context["rows"]) ? $context["rows"] : null)) == 0)) {
                    // line 19
                    echo "\t\t\t\t\t<div class=\"row_items\">
\t\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t\t";
                $context["count"] = ((isset($context["count"]) ? $context["count"] : null) + 1);
                // line 22
                echo "\t\t\t\t\t<div class=\"testimonial-content\">
\t\t\t\t\t\t<div class=\"testimonial-images\">
\t\t\t\t\t\t\t<img src=\"";
                // line 24
                echo $this->getAttribute($context["testimonial"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["testimonial"], "customer_name", array());
                echo "\">\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"testimonial-box\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"";
                // line 27
                echo (isset($context["more"]) ? $context["more"] : null);
                echo "\">";
                echo $this->getAttribute($context["testimonial"], "content", array());
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<i class=\"fa fa-quote-right\"></i>
\t\t\t\t\t\t<h4 class=\"testimonial-author\">";
                // line 30
                echo $this->getAttribute($context["testimonial"], "customer_name", array());
                echo "</h4>
\t\t\t\t\t</div><!--testimonial-content-->
\t\t\t\t\t";
                // line 32
                if (((((isset($context["count"]) ? $context["count"] : null) % (isset($context["rows"]) ? $context["rows"] : null)) == 0) || ((isset($context["count"]) ? $context["count"] : null) == twig_length_filter($this->env, (isset($context["testimonials"]) ? $context["testimonials"] : null))))) {
                    // line 33
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t\t</div>
\t\t\t
\t\t</div><!--block-content-->
\t";
        } else {
            // line 40
            echo "\t\t<p class=\"text_empty\">";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t";
        }
        // line 42
        echo "</div>
</div><!--testimonial-container-->\t\t\t\t\t
<script type=\"text/javascript\">
\$(document).ready(function() {
    \$(\"#slides\").owlCarousel({
\t\tautoPlay : ";
        // line 47
        if ($this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "auto", array(), "array")) {
            echo " ";
            echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "auto", array(), "array");
            echo " ";
        } else {
            echo " false ";
        }
        echo ",
\t\titems : ";
        // line 48
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "items", array(), "array");
        echo ",\t
\t\tloop: true,
\t\tmargin: 30,
\t\tnavSpeed : ";
        // line 51
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "speed", array(), "array");
        echo ",
\t\tdotsSpeed : ";
        // line 52
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "speed", array(), "array");
        echo ",
\t\tautoplaySpeed : ";
        // line 53
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "speed", array(), "array");
        echo ",
\t\tnav : ";
        // line 54
        if ($this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "navigation", array(), "array")) {
            echo " true  ";
        } else {
            echo " false ";
        }
        echo ",
\t\tdots :";
        // line 55
        if ($this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "pagination", array(), "array")) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
\t\tlazyLoad: true,
\t\tnavText : ['<i class=\"ion-ios-arrow-left\"></i>','<i class=\"ion-ios-arrow-right\"></i>'],
\t\tresponsive:{
\t\t\t0:{
\t\t\t\titems: 1
\t\t\t},
\t\t\t480:{
\t\t\t\titems: 1
\t\t\t},
\t\t\t768:{
\t\t\t\titems: 1
\t\t\t},
\t\t\t980:{
\t\t\t\titems: 1
\t\t\t}
\t\t}
    });
});
</script>";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/extension/module/octestimonial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 55,  154 => 54,  150 => 53,  146 => 52,  142 => 51,  136 => 48,  126 => 47,  119 => 42,  113 => 40,  107 => 36,  101 => 35,  97 => 33,  95 => 32,  90 => 30,  82 => 27,  74 => 24,  70 => 22,  67 => 21,  63 => 19,  60 => 18,  56 => 17,  52 => 15,  49 => 14,  46 => 13,  43 => 12,  40 => 11,  38 => 10,  33 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }
}
/* <div class="testimonial-container">*/
/* <div class="container">*/
/* 	<div class="module-title">*/
/* 		<h2>*/
/* 			{{ title }}*/
/* 		</h2>*/
/* 	</div>*/
/* 	{% set count = 0 %}*/
/* 	{% if rows %}		*/
/* 		{% set rows = slide.rows %}*/
/* 	{% else %}*/
/* 		{% set rows = 1 %}*/
/* 	{% endif %}*/
/* 	{% if testimonials %}*/
/* 		<div class="block-content">*/
/* 			<div id="slides" class="owl-carousel owl-theme">*/
/* 				{% for testimonial in testimonials %}*/
/* 					{% if count % rows == 0 %}*/
/* 					<div class="row_items">*/
/* 					{% endif %}*/
/* 					{% set count = count + 1 %}*/
/* 					<div class="testimonial-content">*/
/* 						<div class="testimonial-images">*/
/* 							<img src="{{ testimonial.image }}" alt="{{ testimonial.customer_name }}">							*/
/* 						</div>*/
/* 						<div class="testimonial-box">							*/
/* 							<a href="{{ more }}">{{ testimonial.content }}</a>*/
/* 						</div>*/
/* 						<i class="fa fa-quote-right"></i>*/
/* 						<h4 class="testimonial-author">{{ testimonial.customer_name }}</h4>*/
/* 					</div><!--testimonial-content-->*/
/* 					{% if count % rows == 0 or count == testimonials|length %}*/
/* 						</div>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 			*/
/* 		</div><!--block-content-->*/
/* 	{% else %}*/
/* 		<p class="text_empty">{{ text_empty }}</p>*/
/* 	{% endif %}*/
/* </div>*/
/* </div><!--testimonial-container-->					*/
/* <script type="text/javascript">*/
/* $(document).ready(function() {*/
/*     $("#slides").owlCarousel({*/
/* 		autoPlay : {% if slide['auto'] %} {{ slide['auto'] }} {% else %} false {% endif %},*/
/* 		items : {{ slide['items'] }},	*/
/* 		loop: true,*/
/* 		margin: 30,*/
/* 		navSpeed : {{ slide['speed'] }},*/
/* 		dotsSpeed : {{ slide['speed'] }},*/
/* 		autoplaySpeed : {{ slide['speed'] }},*/
/* 		nav : {% if slide['navigation'] %} true  {% else %} false {% endif %},*/
/* 		dots :{% if slide['pagination'] %} true {% else %} false {% endif %},*/
/* 		lazyLoad: true,*/
/* 		navText : ['<i class="ion-ios-arrow-left"></i>','<i class="ion-ios-arrow-right"></i>'],*/
/* 		responsive:{*/
/* 			0:{*/
/* 				items: 1*/
/* 			},*/
/* 			480:{*/
/* 				items: 1*/
/* 			},*/
/* 			768:{*/
/* 				items: 1*/
/* 			},*/
/* 			980:{*/
/* 				items: 1*/
/* 			}*/
/* 		}*/
/*     });*/
/* });*/
/* </script>*/
