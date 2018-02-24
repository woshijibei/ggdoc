<?php

/* default/template/account/return_list.twig */
class __TwigTemplate_e5696289e833fa7ae7046d4603438ffabbc923eed9c7ccbeab6aa35f4ecbf45d extends Twig_Template
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
<div id=\"account-return\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
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
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 18
        if ((isset($context["returns"]) ? $context["returns"] : null)) {
            // line 19
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-right\">";
            // line 23
            echo (isset($context["column_return_id"]) ? $context["column_return_id"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 24
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 25
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</td>
              <td class=\"text-right\">";
            // line 26
            echo (isset($context["column_order_id"]) ? $context["column_order_id"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 27
            echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
            echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
          
          ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["returns"]) ? $context["returns"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
                // line 34
                echo "          <tr>
            <td class=\"text-right\">#";
                // line 35
                echo $this->getAttribute($context["return"], "return_id", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 36
                echo $this->getAttribute($context["return"], "status", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 37
                echo $this->getAttribute($context["return"], "date_added", array());
                echo "</td>
            <td class=\"text-right\">";
                // line 38
                echo $this->getAttribute($context["return"], "order_id", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 39
                echo $this->getAttribute($context["return"], "name", array());
                echo "</td>
            <td class=\"text-right\"><a href=\"";
                // line 40
                echo $this->getAttribute($context["return"], "href", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_view"]) ? $context["button_view"] : null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </tbody>
          
        </table>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 48
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 49
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
      </div>
      ";
        } else {
            // line 52
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      ";
        }
        // line 54
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 55
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      ";
        // line 57
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 58
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 60
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/account/return_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 60,  186 => 58,  182 => 57,  175 => 55,  172 => 54,  166 => 52,  160 => 49,  156 => 48,  149 => 43,  138 => 40,  134 => 39,  130 => 38,  126 => 37,  122 => 36,  118 => 35,  115 => 34,  111 => 33,  102 => 27,  98 => 26,  94 => 25,  90 => 24,  86 => 23,  80 => 19,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-return" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       {% if returns %}*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-right">{{ column_return_id }}</td>*/
/*               <td class="text-left">{{ column_status }}</td>*/
/*               <td class="text-left">{{ column_date_added }}</td>*/
/*               <td class="text-right">{{ column_order_id }}</td>*/
/*               <td class="text-left">{{ column_customer }}</td>*/
/*               <td></td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*           */
/*           {% for return in returns %}*/
/*           <tr>*/
/*             <td class="text-right">#{{ return.return_id }}</td>*/
/*             <td class="text-left">{{ return.status }}</td>*/
/*             <td class="text-left">{{ return.date_added }}</td>*/
/*             <td class="text-right">{{ return.order_id }}</td>*/
/*             <td class="text-left">{{ return.name }}</td>*/
/*             <td class="text-right"><a href="{{ return.href }}" data-toggle="tooltip" title="{{ button_view }}" class="btn btn-info"><i class="fa fa-eye"></i></a></td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*             </tbody>*/
/*           */
/*         </table>*/
/*       </div>*/
/*       <div class="row">*/
/*         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*         <div class="col-sm-6 text-right">{{ results }}</div>*/
/*       </div>*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       {% endif %}*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
