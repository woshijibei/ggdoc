<?php

/* default/template/account/order_info.twig */
class __TwigTemplate_ebf4d791016fb4076aff21db6bf3ccd5b8d6f2d58490281c1445b40da85a86a2 extends Twig_Template
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
<div id=\"account-order\" class=\"container\">
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
        echo "  ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 14
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 18
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 19
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 21
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 25
            echo "    ";
        }
        // line 26
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2>";
        // line 27
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" colspan=\"2\">";
        // line 31
        echo (isset($context["text_order_detail"]) ? $context["text_order_detail"] : null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 36
        if ((isset($context["invoice_no"]) ? $context["invoice_no"] : null)) {
            echo " <b>";
            echo (isset($context["text_invoice_no"]) ? $context["text_invoice_no"] : null);
            echo "</b> ";
            echo (isset($context["invoice_no"]) ? $context["invoice_no"] : null);
            echo "<br />
              ";
        }
        // line 37
        echo " <b>";
        echo (isset($context["text_order_id"]) ? $context["text_order_id"] : null);
        echo "</b> #";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "<br />
              <b>";
        // line 38
        echo (isset($context["text_date_added"]) ? $context["text_date_added"] : null);
        echo "</b> ";
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        echo "</td>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 39
        if ((isset($context["payment_method"]) ? $context["payment_method"] : null)) {
            echo " <b>";
            echo (isset($context["text_payment_method"]) ? $context["text_payment_method"] : null);
            echo "</b> ";
            echo (isset($context["payment_method"]) ? $context["payment_method"] : null);
            echo "<br />
              ";
        }
        // line 41
        echo "              ";
        if ((isset($context["shipping_method"]) ? $context["shipping_method"] : null)) {
            echo " <b>";
            echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
            echo "</b> ";
            echo (isset($context["shipping_method"]) ? $context["shipping_method"] : null);
            echo " ";
        }
        echo "</td>
          </tr>
        </tbody>
      </table>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
        // line 48
        echo (isset($context["text_payment_address"]) ? $context["text_payment_address"] : null);
        echo "</td>
            ";
        // line 49
        if ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) {
            // line 50
            echo "            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
            echo (isset($context["text_shipping_address"]) ? $context["text_shipping_address"] : null);
            echo "</td>
            ";
        }
        // line 51
        echo " </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
        // line 55
        echo (isset($context["payment_address"]) ? $context["payment_address"] : null);
        echo "</td>
            ";
        // line 56
        if ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) {
            // line 57
            echo "            <td class=\"text-left\">";
            echo (isset($context["shipping_address"]) ? $context["shipping_address"] : null);
            echo "</td>
            ";
        }
        // line 58
        echo " </tr>
        </tbody>
      </table>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 65
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
              <td class=\"text-left\">";
        // line 66
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 67
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 68
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 69
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
              ";
        // line 70
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 71
            echo "              <td style=\"width: 20px;\"></td>
              ";
        }
        // line 72
        echo " </tr>
          </thead>
          <tbody>
          
          ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 77
            echo "          <tr>
            <td class=\"text-left\">";
            // line 78
            echo $this->getAttribute($context["product"], "name", array());
            echo "
              ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br />
              &nbsp;<small> - ";
                // line 80
                echo $this->getAttribute($context["option"], "name", array());
                echo ": ";
                echo $this->getAttribute($context["option"], "value", array());
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
            <td class=\"text-left\">";
            // line 81
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 82
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 83
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 84
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
            <td class=\"text-right\" style=\"white-space: nowrap;\">";
            // line 85
            if ($this->getAttribute($context["product"], "reorder", array())) {
                echo " <a href=\"";
                echo $this->getAttribute($context["product"], "reorder", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_reorder"]) ? $context["button_reorder"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></a> ";
            }
            echo " <a href=\"";
            echo $this->getAttribute($context["product"], "return", array());
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_return"]) ? $context["button_return"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i></a></td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 89
            echo "          <tr>
            <td class=\"text-left\">";
            // line 90
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</td>
            <td class=\"text-left\"></td>
            <td class=\"text-right\">1</td>
            <td class=\"text-right\">";
            // line 93
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 94
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
            ";
            // line 95
            if ((isset($context["products"]) ? $context["products"] : null)) {
                // line 96
                echo "            <td></td>
            ";
            }
            // line 97
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "            </tbody>
          
          <tfoot>
          
          ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 104
            echo "          <tr>
            <td colspan=\"3\"></td>
            <td class=\"text-right\"><b>";
            // line 106
            echo $this->getAttribute($context["total"], "title", array());
            echo "</b></td>
            <td class=\"text-right\">";
            // line 107
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
            ";
            // line 108
            if ((isset($context["products"]) ? $context["products"] : null)) {
                // line 109
                echo "            <td></td>
            ";
            }
            // line 110
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "            </tfoot>
          
        </table>
      </div>
      ";
        // line 116
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 117
            echo "      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 120
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
            // line 125
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "</td>
          </tr>
        </tbody>
      </table>
      ";
        }
        // line 130
        echo "      ";
        if ((isset($context["histories"]) ? $context["histories"] : null)) {
            // line 131
            echo "      <h3>";
            echo (isset($context["text_history"]) ? $context["text_history"] : null);
            echo "</h3>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 135
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</td>
            <td class=\"text-left\">";
            // line 136
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</td>
            <td class=\"text-left\">";
            // line 137
            echo (isset($context["column_comment"]) ? $context["column_comment"] : null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
        
        ";
            // line 142
            if ((isset($context["histories"]) ? $context["histories"] : null)) {
                // line 143
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["histories"]) ? $context["histories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 144
                    echo "        <tr>
          <td class=\"text-left\">";
                    // line 145
                    echo $this->getAttribute($context["history"], "date_added", array());
                    echo "</td>
          <td class=\"text-left\">";
                    // line 146
                    echo $this->getAttribute($context["history"], "status", array());
                    echo "</td>
          <td class=\"text-left\">";
                    // line 147
                    echo $this->getAttribute($context["history"], "comment", array());
                    echo "</td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "        ";
            } else {
                // line 151
                echo "        <tr>
          <td colspan=\"3\" class=\"text-center\">";
                // line 152
                echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
                echo "</td>
        </tr>
        ";
            }
            // line 155
            echo "          </tbody>
        
      </table>
      ";
        }
        // line 159
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 160
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      ";
        // line 162
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 163
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 165
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/account/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 165,  478 => 163,  474 => 162,  467 => 160,  464 => 159,  458 => 155,  452 => 152,  449 => 151,  446 => 150,  437 => 147,  433 => 146,  429 => 145,  426 => 144,  421 => 143,  419 => 142,  411 => 137,  407 => 136,  403 => 135,  395 => 131,  392 => 130,  384 => 125,  376 => 120,  371 => 117,  369 => 116,  363 => 112,  356 => 110,  352 => 109,  350 => 108,  346 => 107,  342 => 106,  338 => 104,  334 => 103,  328 => 99,  321 => 97,  317 => 96,  315 => 95,  311 => 94,  307 => 93,  301 => 90,  298 => 89,  293 => 88,  274 => 85,  270 => 84,  266 => 83,  262 => 82,  258 => 81,  247 => 80,  241 => 79,  237 => 78,  234 => 77,  230 => 76,  224 => 72,  220 => 71,  218 => 70,  214 => 69,  210 => 68,  206 => 67,  202 => 66,  198 => 65,  189 => 58,  183 => 57,  181 => 56,  177 => 55,  171 => 51,  165 => 50,  163 => 49,  159 => 48,  142 => 41,  133 => 39,  127 => 38,  120 => 37,  111 => 36,  103 => 31,  96 => 27,  89 => 26,  86 => 25,  83 => 24,  80 => 23,  77 => 22,  74 => 21,  71 => 20,  69 => 19,  64 => 18,  56 => 14,  53 => 13,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-order" class="container">*/
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
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
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
/*       <table class="table table-bordered table-hover">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="text-left" colspan="2">{{ text_order_detail }}</td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           <tr>*/
/*             <td class="text-left" style="width: 50%;">{% if invoice_no %} <b>{{ text_invoice_no }}</b> {{ invoice_no }}<br />*/
/*               {% endif %} <b>{{ text_order_id }}</b> #{{ order_id }}<br />*/
/*               <b>{{ text_date_added }}</b> {{ date_added }}</td>*/
/*             <td class="text-left" style="width: 50%;">{% if payment_method %} <b>{{ text_payment_method }}</b> {{ payment_method }}<br />*/
/*               {% endif %}*/
/*               {% if shipping_method %} <b>{{ text_shipping_method }}</b> {{ shipping_method }} {% endif %}</td>*/
/*           </tr>*/
/*         </tbody>*/
/*       </table>*/
/*       <table class="table table-bordered table-hover">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="text-left" style="width: 50%; vertical-align: top;">{{ text_payment_address }}</td>*/
/*             {% if shipping_address %}*/
/*             <td class="text-left" style="width: 50%; vertical-align: top;">{{ text_shipping_address }}</td>*/
/*             {% endif %} </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           <tr>*/
/*             <td class="text-left">{{ payment_address }}</td>*/
/*             {% if shipping_address %}*/
/*             <td class="text-left">{{ shipping_address }}</td>*/
/*             {% endif %} </tr>*/
/*         </tbody>*/
/*       </table>*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-left">{{ column_name }}</td>*/
/*               <td class="text-left">{{ column_model }}</td>*/
/*               <td class="text-right">{{ column_quantity }}</td>*/
/*               <td class="text-right">{{ column_price }}</td>*/
/*               <td class="text-right">{{ column_total }}</td>*/
/*               {% if products %}*/
/*               <td style="width: 20px;"></td>*/
/*               {% endif %} </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*           */
/*           {% for product in products %}*/
/*           <tr>*/
/*             <td class="text-left">{{ product.name }}*/
/*               {% for option in product.option %} <br />*/
/*               &nbsp;<small> - {{ option.name }}: {{ option.value }}</small> {% endfor %}</td>*/
/*             <td class="text-left">{{ product.model }}</td>*/
/*             <td class="text-right">{{ product.quantity }}</td>*/
/*             <td class="text-right">{{ product.price }}</td>*/
/*             <td class="text-right">{{ product.total }}</td>*/
/*             <td class="text-right" style="white-space: nowrap;">{% if product.reorder %} <a href="{{ product.reorder }}" data-toggle="tooltip" title="{{ button_reorder }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></a> {% endif %} <a href="{{ product.return }}" data-toggle="tooltip" title="{{ button_return }}" class="btn btn-danger"><i class="fa fa-reply"></i></a></td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*           {% for voucher in vouchers %}*/
/*           <tr>*/
/*             <td class="text-left">{{ voucher.description }}</td>*/
/*             <td class="text-left"></td>*/
/*             <td class="text-right">1</td>*/
/*             <td class="text-right">{{ voucher.amount }}</td>*/
/*             <td class="text-right">{{ voucher.amount }}</td>*/
/*             {% if products %}*/
/*             <td></td>*/
/*             {% endif %} </tr>*/
/*           {% endfor %}*/
/*             </tbody>*/
/*           */
/*           <tfoot>*/
/*           */
/*           {% for total in totals %}*/
/*           <tr>*/
/*             <td colspan="3"></td>*/
/*             <td class="text-right"><b>{{ total.title }}</b></td>*/
/*             <td class="text-right">{{ total.text }}</td>*/
/*             {% if products %}*/
/*             <td></td>*/
/*             {% endif %} </tr>*/
/*           {% endfor %}*/
/*             </tfoot>*/
/*           */
/*         </table>*/
/*       </div>*/
/*       {% if comment %}*/
/*       <table class="table table-bordered table-hover">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="text-left">{{ text_comment }}</td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           <tr>*/
/*             <td class="text-left">{{ comment }}</td>*/
/*           </tr>*/
/*         </tbody>*/
/*       </table>*/
/*       {% endif %}*/
/*       {% if histories %}*/
/*       <h3>{{ text_history }}</h3>*/
/*       <table class="table table-bordered table-hover">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="text-left">{{ column_date_added }}</td>*/
/*             <td class="text-left">{{ column_status }}</td>*/
/*             <td class="text-left">{{ column_comment }}</td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         */
/*         {% if histories %}*/
/*         {% for history in histories %}*/
/*         <tr>*/
/*           <td class="text-left">{{ history.date_added }}</td>*/
/*           <td class="text-left">{{ history.status }}</td>*/
/*           <td class="text-left">{{ history.comment }}</td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% else %}*/
/*         <tr>*/
/*           <td colspan="3" class="text-center">{{ text_no_results }}</td>*/
/*         </tr>*/
/*         {% endif %}*/
/*           </tbody>*/
/*         */
/*       </table>*/
/*       {% endif %}*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
