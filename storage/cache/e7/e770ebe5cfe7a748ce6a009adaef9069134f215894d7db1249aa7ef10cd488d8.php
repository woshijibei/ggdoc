<?php

/* tt_handart2/template/blog/article.twig */
class __TwigTemplate_57250e8ffcfcfefae31474e5015533ddebf8c79b32ef98eb49ad5fd27ff9f36a extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"container\">
    <ul class=\"breadcrumb\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
</div>
  <div class=\"container\">
        <div class=\"main\">
  <div class=\"row\">";
        // line 11
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
      ";
        // line 12
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "          ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "      ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "          ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "      ";
        } else {
            // line 17
            echo "          ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "      ";
        }
        // line 19
        echo "      <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      
        <div class=\"article-container\">
          <div class=\"article-title\">
              <h3>";
        // line 23
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
            </div>
            <span class=\"article-date\">";
        // line 25
        echo (isset($context["date"]) ? $context["date"] : null);
        if ((isset($context["author"]) ? $context["author"] : null)) {
            echo (" | " . (isset($context["author"]) ? $context["author"] : null));
        }
        echo "</span>
            
            <div class=\"article-subtitle\">
                <!-- AddThis Button BEGIN -->
                <!--<div class=\"addthis_toolbox addthis_default_style\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
                <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script>-->
                <!-- AddThis Button END -->
            </div>
            
            <div class=\"article-description\">
                <img src=\"";
        // line 35
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" alt=\"";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "\"/>
                <p>";
        // line 36
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</p>
            </div>
            
        </div>
      
      ";
        // line 41
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 42
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div></div>
";
        // line 44
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/blog/article.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  119 => 42,  115 => 41,  107 => 36,  101 => 35,  85 => 25,  80 => 23,  70 => 19,  67 => 18,  64 => 17,  61 => 16,  58 => 15,  55 => 14,  52 => 13,  50 => 12,  46 => 11,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*     <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*             <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* </div>*/
/*   <div class="container">*/
/*         <div class="main">*/
/*   <div class="row">{{ column_left }}*/
/*       {% if column_left and column_right %}*/
/*           {% set class = 'col-sm-6' %}*/
/*       {% elseif column_left or column_right %}*/
/*           {% set class = 'col-sm-9' %}*/
/*       {% else %}*/
/*           {% set class = 'col-sm-12' %}*/
/*       {% endif %}*/
/*       <div id="content" class="{{ class }}">{{ content_top }}*/
/*       */
/*         <div class="article-container">*/
/*           <div class="article-title">*/
/*               <h3>{{ heading_title }}</h3>*/
/*             </div>*/
/*             <span class="article-date">{{ date }}{% if author %}{{ ' | ' ~ author }}{% endif %}</span>*/
/*             */
/*             <div class="article-subtitle">*/
/*                 <!-- AddThis Button BEGIN -->*/
/*                 <!--<div class="addthis_toolbox addthis_default_style"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>*/
/*                 <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>-->*/
/*                 <!-- AddThis Button END -->*/
/*             </div>*/
/*             */
/*             <div class="article-description">*/
/*                 <img src="{{ image }}" alt="{{ heading_title }}"/>*/
/*                 <p>{{ description }}</p>*/
/*             </div>*/
/*             */
/*         </div>*/
/*       */
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div></div>*/
/* {{ footer }}*/
/* */
