<?php

/* tt_handart2/template/blog/blog.twig */
class __TwigTemplate_950940fb02979aba5eb20fc5ef63f5d041eeefbabc284106c6f6bc8236211119 extends Twig_Template
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
      <div class=\"article-titles\"><h1>";
        // line 20
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1></div>
      ";
        // line 21
        if ((isset($context["articles"]) ? $context["articles"] : null)) {
            // line 22
            echo "          <div class=\"article-page\">
            ";
            // line 23
            $context["i"] = 0;
            // line 24
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 25
                echo "              ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 26
                echo "            <div class=\"article-layout article-list\">
                <div class=\"article-item ";
                // line 27
                echo (((((isset($context["i"]) ? $context["i"] : null) % 2) == 0)) ? ("even") : ("odd"));
                echo "\">
                <div class=\"article-item-inner\">

                  <div class=\"article-intro\">
                    <div class=\"article-name\"><h4><a href=\"";
                // line 31
                echo $this->getAttribute($context["article"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["article"], "name", array());
                echo "</a></h4></div>
                    <p class=\"articledate\">";
                // line 32
                echo $this->getAttribute($context["article"], "date_added", array());
                if ($this->getAttribute($context["article"], "author", array())) {
                    echo (" | " . $this->getAttribute($context["article"], "author", array()));
                }
                echo "</p>

                    <div class=\"intro-content\">
\t\t\t\t\t<div class=\"col-sm-2 text-center\">
\t\t\t\t\t\t<img src=\"";
                // line 36
                echo $this->getAttribute($context["article"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["article"], "name", array());
                echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<p>";
                // line 39
                echo $this->getAttribute($context["article"], "intro_text", array());
                echo "</p>
\t\t\t\t\t\t<a class=\"btn readmore-page\" href=\"";
                // line 40
                echo $this->getAttribute($context["article"], "href", array());
                echo "\">";
                echo (isset($context["button_read_more"]) ? $context["button_read_more"] : null);
                echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
                  </div>                  
                </div>
              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
          </div>
          <div class=\"toolbar4\">
            <div class=\"col-sm-6 show-page\">";
            // line 51
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
            <div class=\"col-sm-6 text-right\">";
            // line 52
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
          </div>
      ";
        } else {
            // line 55
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      ";
        }
        // line 57
        echo "          ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
      ";
        // line 58
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div></div>
";
        // line 60
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/blog/blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 60,  176 => 58,  171 => 57,  165 => 55,  159 => 52,  155 => 51,  150 => 48,  134 => 40,  130 => 39,  122 => 36,  112 => 32,  106 => 31,  99 => 27,  96 => 26,  93 => 25,  88 => 24,  86 => 23,  83 => 22,  81 => 21,  77 => 20,  70 => 19,  67 => 18,  64 => 17,  61 => 16,  58 => 15,  55 => 14,  52 => 13,  50 => 12,  46 => 11,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
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
/*       <div class="article-titles"><h1>{{ heading_title }}</h1></div>*/
/*       {% if articles %}*/
/*           <div class="article-page">*/
/*             {% set i = 0 %}*/
/*             {% for article in articles %}*/
/*               {% set i = i + 1 %}*/
/*             <div class="article-layout article-list">*/
/*                 <div class="article-item {{ (i % 2 == 0) ? 'even' : 'odd' }}">*/
/*                 <div class="article-item-inner">*/
/* */
/*                   <div class="article-intro">*/
/*                     <div class="article-name"><h4><a href="{{ article.href }}">{{ article.name }}</a></h4></div>*/
/*                     <p class="articledate">{{ article.date_added }}{% if article.author %}{{ " | " ~ article.author }}{% endif %}</p>*/
/* */
/*                     <div class="intro-content">*/
/* 					<div class="col-sm-2 text-center">*/
/* 						<img src="{{ article.image }}" alt="{{ article.name }}"/>*/
/* 					</div>*/
/* 					<div class="col-sm-10">*/
/* 						<p>{{ article.intro_text }}</p>*/
/* 						<a class="btn readmore-page" href="{{ article.href }}">{{ button_read_more }}</a>*/
/* 					</div>*/
/* 					</div>*/
/*                   </div>                  */
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             {% endfor %}*/
/* */
/*           </div>*/
/*           <div class="toolbar4">*/
/*             <div class="col-sm-6 show-page">{{ pagination }}</div>*/
/*             <div class="col-sm-6 text-right">{{ results }}</div>*/
/*           </div>*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       {% endif %}*/
/*           {{ content_bottom }}</div>*/
/*       {{ column_right }}</div>*/
/* </div></div>*/
/* {{ footer }}*/
/* */
