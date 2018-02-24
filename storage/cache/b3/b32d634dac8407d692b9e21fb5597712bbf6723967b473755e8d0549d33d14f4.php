<?php

/* tt_handart2/template/blog/blog_home.twig */
class __TwigTemplate_1d4b6afb29acc75970d84d3107e3baba22f189b22b2572251dcb43a7734e629e extends Twig_Template
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
        echo "<div id=\"blog_home\" class=\"menu-recent owl-style3\">
\t<div>
\t\t<div class=\"blog-title module-title\">
\t\t   <h2>";
        // line 4
        echo (isset($context["text_headingtitle"]) ? $context["text_headingtitle"] : null);
        echo "</h2>
\t\t    <p class=\"module-description\">";
        // line 5
        echo (isset($context["text_subtitle"]) ? $context["text_subtitle"] : null);
        echo "</p>
\t\t</div>
\t \t";
        // line 7
        list($context["count"], $context["rows"]) =         array(0, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "rows", array()));
        // line 8
        echo "\t\t";
        if ( !(isset($context["rows"]) ? $context["rows"] : null)) {
            // line 9
            echo "\t\t\t";
            $context["rows"] = 1;
            // line 10
            echo "\t\t";
        }
        // line 11
        echo "
\t\t";
        // line 12
        if ((isset($context["articles"]) ? $context["articles"] : null)) {
            // line 13
            echo "\t\t\t<div class=\"articles-container owl-carousel owl-theme\">
\t\t\t";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 15
                echo "\t\t\t\t";
                if ((((isset($context["count"]) ? $context["count"] : null) % (isset($context["rows"]) ? $context["rows"] : null)) == 0)) {
                    // line 16
                    echo "\t\t\t\t<div class=\"row_items\">
\t\t\t\t";
                }
                // line 18
                echo "\t\t\t\t";
                $context["count"] = ((isset($context["count"]) ? $context["count"] : null) + 1);
                // line 19
                echo "\t\t\t\t\t<div class=\"articles-inner item-inner\">
\t\t\t\t\t\t<div class=\"articles-image\">
\t\t\t\t\t\t\t<img src=\"";
                // line 21
                echo $this->getAttribute($context["article"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["article"], "name", array());
                echo "\"/>
\t\t\t\t\t\t\t<div class=\"articles-date\">
\t\t\t\t\t\t\t\t";
                // line 23
                echo $this->getAttribute($context["article"], "date_added_m", array());
                echo "
\t\t\t\t\t\t\t\t<span>";
                // line 24
                echo $this->getAttribute($context["article"], "date_added_d", array());
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"aritcles-content\">
\t\t\t\t\t\t\t<a class=\"articles-name\" href=\"";
                // line 28
                echo $this->getAttribute($context["article"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["article"], "name", array());
                echo "</a>
\t\t\t\t\t\t\t";
                // line 29
                if ($this->getAttribute($context["article"], "author", array())) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t";
                    echo (isset($context["text_post_by"]) ? $context["text_post_by"] : null);
                    echo "
\t\t\t\t\t\t\t\t<span>";
                    // line 31
                    echo $this->getAttribute($context["article"], "author", array());
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"articles-intro\">";
                // line 33
                echo $this->getAttribute($context["article"], "intro_text", array());
                echo "</div>
\t\t\t\t\t\t\t<div class=\"readmore\"><a href=\"";
                // line 34
                echo $this->getAttribute($context["article"], "href", array());
                echo "\">";
                echo (isset($context["button_read_more"]) ? $context["button_read_more"] : null);
                echo "</a></div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t";
                // line 37
                if (((((isset($context["count"]) ? $context["count"] : null) % (isset($context["rows"]) ? $context["rows"] : null)) == 0) || ((isset($context["count"]) ? $context["count"] : null) == twig_length_filter($this->env, (isset($context["articles"]) ? $context["articles"] : null))))) {
                    // line 38
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 40
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t</div>
\t\t";
        } else {
            // line 43
            echo "\t\t\t<p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t";
        }
        // line 45
        echo "\t</div>

</div>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$(\".articles-container\").owlCarousel({
            autoPlay : ";
        // line 51
        if ($this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "auto", array())) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
        \titems : ";
        // line 52
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "items", array(), "array");
        echo ",
\t\t\tmargin: 30,
\t\t\tloop: true,\t\t\t
\t\t\tnavSpeed : ";
        // line 55
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "speed", array(), "array");
        echo ",
\t\t\tdotsSpeed : ";
        // line 56
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "speed", array(), "array");
        echo ",
\t\t\tautoplaySpeed : ";
        // line 57
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "speed", array(), "array");
        echo ",
\t\t\tnav : ";
        // line 58
        if ($this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "navigation", array())) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
\t\t\tdots : ";
        // line 59
        if ($this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "pagination", array())) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
\t\t\tnavText : ['<i class=\"ion-chevron-left\"></i>','<i class=\"ion-chevron-right\"></i>'],
\t\t\tresponsive:{
\t\t\t\t0:{
\t\t\t\t\titems: 1
\t\t\t\t},
\t\t\t\t480:{
\t\t\t\t\titems: 1
\t\t\t\t},
\t\t\t\t640:{
\t\t\t\t\titems: 2
\t\t\t\t},
\t\t\t\t991:{
\t\t\t\t\titems: 2
\t\t\t\t},
\t\t\t\t1200:{
\t\t\t\t\titems: ";
        // line 75
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "items", array(), "array");
        echo "
\t\t\t\t}
\t\t\t}
    \t});
    });
</script>";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/blog/blog_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 75,  185 => 59,  177 => 58,  173 => 57,  169 => 56,  165 => 55,  159 => 52,  151 => 51,  143 => 45,  137 => 43,  133 => 41,  127 => 40,  123 => 38,  121 => 37,  113 => 34,  109 => 33,  106 => 32,  101 => 31,  96 => 30,  94 => 29,  88 => 28,  81 => 24,  77 => 23,  70 => 21,  66 => 19,  63 => 18,  59 => 16,  56 => 15,  52 => 14,  49 => 13,  47 => 12,  44 => 11,  41 => 10,  38 => 9,  35 => 8,  33 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div id="blog_home" class="menu-recent owl-style3">*/
/* 	<div>*/
/* 		<div class="blog-title module-title">*/
/* 		   <h2>{{ text_headingtitle }}</h2>*/
/* 		    <p class="module-description">{{ text_subtitle }}</p>*/
/* 		</div>*/
/* 	 	{% set count, rows = 0, slide.rows %}*/
/* 		{% if not rows %}*/
/* 			{% set rows = 1 %}*/
/* 		{% endif %}*/
/* */
/* 		{% if articles %}*/
/* 			<div class="articles-container owl-carousel owl-theme">*/
/* 			{% for article in articles %}*/
/* 				{% if count % rows == 0 %}*/
/* 				<div class="row_items">*/
/* 				{% endif %}*/
/* 				{% set count = count + 1 %}*/
/* 					<div class="articles-inner item-inner">*/
/* 						<div class="articles-image">*/
/* 							<img src="{{ article.image }}" alt="{{ article.name }}"/>*/
/* 							<div class="articles-date">*/
/* 								{{ article.date_added_m }}*/
/* 								<span>{{ article.date_added_d }}</span>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="aritcles-content">*/
/* 							<a class="articles-name" href="{{ article.href }}">{{ article.name }}</a>*/
/* 							{% if article.author %}*/
/* 								{{ text_post_by }}*/
/* 								<span>{{ article.author }}</span>*/
/* 							{% endif %}							*/
/* 							<div class="articles-intro">{{ article.intro_text }}</div>*/
/* 							<div class="readmore"><a href="{{ article.href }}">{{ button_read_more }}</a></div>*/
/* 						</div>												*/
/* 					</div>*/
/* 				{% if (count % rows == 0) or (count == articles|length ) %}*/
/* 				</div>*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 			</div>*/
/* 		{% else %}*/
/* 			<p>{{ text_empty }}</p>*/
/* 		{% endif %}*/
/* 	</div>*/
/* */
/* </div>*/
/* <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/*         $(".articles-container").owlCarousel({*/
/*             autoPlay : {% if slide.auto %} true {% else %} false {% endif %},*/
/*         	items : {{ slide['items'] }},*/
/* 			margin: 30,*/
/* 			loop: true,			*/
/* 			navSpeed : {{ slide['speed'] }},*/
/* 			dotsSpeed : {{ slide['speed'] }},*/
/* 			autoplaySpeed : {{ slide['speed'] }},*/
/* 			nav : {% if slide.navigation %} true {% else %} false {% endif %},*/
/* 			dots : {% if slide.pagination %} true {% else %} false {% endif %},*/
/* 			navText : ['<i class="ion-chevron-left"></i>','<i class="ion-chevron-right"></i>'],*/
/* 			responsive:{*/
/* 				0:{*/
/* 					items: 1*/
/* 				},*/
/* 				480:{*/
/* 					items: 1*/
/* 				},*/
/* 				640:{*/
/* 					items: 2*/
/* 				},*/
/* 				991:{*/
/* 					items: 2*/
/* 				},*/
/* 				1200:{*/
/* 					items: {{ slide['items'] }}*/
/* 				}*/
/* 			}*/
/*     	});*/
/*     });*/
/* </script>*/
