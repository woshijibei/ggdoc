<?php

/* default/template/account/recurring_list.twig */
class __TwigTemplate_d2ade51c87916a356f4116dc19cb09c316aad12d97853e677871ee6d35744c93 extends Twig_Template
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
<div id=\"account-recurring\" class=\"container\">
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
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 19
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-right\">";
            // line 23
            echo (isset($context["column_order_recurring_id"]) ? $context["column_order_recurring_id"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 24
            echo (isset($context["column_product"]) ? $context["column_product"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 25
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 26
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</td>
              <td class=\"text-right\"></td>
            </tr>
          </thead>
          <tbody>
          
          ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 33
                echo "          <tr>
            <td class=\"text-right\">#";
                // line 34
                echo $this->getAttribute($context["recurring"], "order_recurring_id", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 35
                echo $this->getAttribute($context["recurring"], "product", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 36
                echo $this->getAttribute($context["recurring"], "status", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 37
                echo $this->getAttribute($context["recurring"], "date_added", array());
                echo "</td>
            <td class=\"text-right\"><a href=\"";
                // line 38
                echo $this->getAttribute($context["recurring"], "view", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_view"]) ? $context["button_view"] : null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "          
          </tbody>
        </table>
      </div>
      <div class=\"text-right\">";
            // line 45
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
      ";
        } else {
            // line 47
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      ";
        }
        // line 49
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 50
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      ";
        // line 52
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 53
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 55
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/account/recurring_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 55,  172 => 53,  168 => 52,  161 => 50,  158 => 49,  152 => 47,  147 => 45,  141 => 41,  130 => 38,  126 => 37,  122 => 36,  118 => 35,  114 => 34,  111 => 33,  107 => 32,  98 => 26,  94 => 25,  90 => 24,  86 => 23,  80 => 19,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-recurring" class="container">*/
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
/*       {% if recurrings %}*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-right">{{ column_order_recurring_id }}</td>*/
/*               <td class="text-left">{{ column_product }}</td>*/
/*               <td class="text-left">{{ column_status }}</td>*/
/*               <td class="text-left">{{ column_date_added }}</td>*/
/*               <td class="text-right"></td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*           */
/*           {% for recurring in recurrings %}*/
/*           <tr>*/
/*             <td class="text-right">#{{ recurring.order_recurring_id }}</td>*/
/*             <td class="text-left">{{ recurring.product }}</td>*/
/*             <td class="text-left">{{ recurring.status }}</td>*/
/*             <td class="text-left">{{ recurring.date_added }}</td>*/
/*             <td class="text-right"><a href="{{ recurring.view }}" data-toggle="tooltip" title="{{ button_view }}" class="btn btn-info"><i class="fa fa-eye"></i></a></td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*           */
/*           </tbody>*/
/*         </table>*/
/*       </div>*/
/*       <div class="text-right">{{ pagination }}</div>*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       {% endif %}*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
