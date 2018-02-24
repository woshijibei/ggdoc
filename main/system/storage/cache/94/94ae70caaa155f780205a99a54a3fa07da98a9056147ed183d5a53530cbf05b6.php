<?php

/* default/template/account/wishlist.twig */
class __TwigTemplate_ad46988a41841d7862a8e2fae0a247158cf8c99252957929aa6fcb830694ac43 extends Twig_Template
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
<div id=\"account-wishlist\" class=\"container\">
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
  ";
        // line 8
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 14
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2>";
        // line 22
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
      ";
        // line 23
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 24
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-center\">";
            // line 28
            echo (isset($context["column_image"]) ? $context["column_image"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 29
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 30
            echo (isset($context["column_model"]) ? $context["column_model"] : null);
            echo "</td>
              <td class=\"text-right\">";
            // line 31
            echo (isset($context["column_stock"]) ? $context["column_stock"] : null);
            echo "</td>
              <td class=\"text-right\">";
            // line 32
            echo (isset($context["column_price"]) ? $context["column_price"] : null);
            echo "</td>
              <td class=\"text-right\">";
            // line 33
            echo (isset($context["column_action"]) ? $context["column_action"] : null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 39
                echo "          <tr>
            <td class=\"text-center\">";
                // line 40
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" /></a>";
                }
                echo "</td>
            <td class=\"text-left\"><a href=\"";
                // line 41
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></td>
            <td class=\"text-left\">";
                // line 42
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
            <td class=\"text-right\">";
                // line 43
                echo $this->getAttribute($context["product"], "stock", array());
                echo "</td>
            <td class=\"text-right\">";
                // line 44
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 45
                    echo "              <div class=\"price\"> ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 46
                        echo "                ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                ";
                    } else {
                        // line 47
                        echo " <b>";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</b> <s>";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</s> ";
                    }
                    echo " </div>
              ";
                }
                // line 48
                echo "</td>
            <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('";
                // line 49
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
              <a href=\"";
                // line 50
                echo $this->getAttribute($context["product"], "remove", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            </tbody>
          
        </table>
      </div>
      ";
        } else {
            // line 58
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      ";
        }
        // line 60
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 61
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      ";
        // line 63
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 64
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 66
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 66,  228 => 64,  224 => 63,  217 => 61,  214 => 60,  208 => 58,  201 => 53,  190 => 50,  184 => 49,  181 => 48,  171 => 47,  165 => 46,  162 => 45,  160 => 44,  156 => 43,  152 => 42,  146 => 41,  132 => 40,  129 => 39,  125 => 38,  117 => 33,  113 => 32,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  91 => 24,  89 => 23,  85 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  58 => 14,  53 => 13,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-wishlist" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h2>{{ heading_title }}</h2>*/
/*       {% if products %}*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-center">{{ column_image }}</td>*/
/*               <td class="text-left">{{ column_name }}</td>*/
/*               <td class="text-left">{{ column_model }}</td>*/
/*               <td class="text-right">{{ column_stock }}</td>*/
/*               <td class="text-right">{{ column_price }}</td>*/
/*               <td class="text-right">{{ column_action }}</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*           */
/*           {% for product in products %}*/
/*           <tr>*/
/*             <td class="text-center">{% if product.thumb %}<a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" /></a>{% endif %}</td>*/
/*             <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a></td>*/
/*             <td class="text-left">{{ product.model }}</td>*/
/*             <td class="text-right">{{ product.stock }}</td>*/
/*             <td class="text-right">{% if product.price %}*/
/*               <div class="price"> {% if not product.special %}*/
/*                 {{ product.price }}*/
/*                 {% else %} <b>{{ product.special }}</b> <s>{{ product.price }}</s> {% endif %} </div>*/
/*               {% endif %}</td>*/
/*             <td class="text-right"><button type="button" onclick="cart.add('{{ product.product_id }}');" data-toggle="tooltip" title="{{ button_cart }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></button>*/
/*               <a href="{{ product.remove }}" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-times"></i></a></td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*             </tbody>*/
/*           */
/*         </table>*/
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
/* {{ footer }}*/
