<?php

/* tt_handart2/template/common/cart.twig */
class __TwigTemplate_43671cf5fed7fdbb091fbbe9dedefe663dfd5aa750160604adaf04ce2bfea1f6 extends Twig_Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
  <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 2
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn dropdown-toggle\"><i class=\"ion-bag\"></i> <span id=\"cart-total\">";
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</span></button>
  <ul class=\"dropdown-menu pull-right\">
    ";
        // line 4
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 5
            echo "    <li class=\"has-scroll\">
      <table class=\"table\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 8
                echo "        <tr>
          <td class=\"text-center\">";
                // line 9
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " <a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img class=\"cart-image\" src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" /></a> ";
                }
                echo "</td>
          <td class=\"text-left info-item\"><a href=\"";
                // line 10
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a> ";
                if ($this->getAttribute($context["product"], "option", array())) {
                    // line 11
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 12
                        echo $this->getAttribute($context["option"], "name", array());
                        echo " ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    echo "            ";
                }
                // line 14
                echo "            ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    echo " <br />
            - <small>";
                    // line 15
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small> ";
                }
                // line 16
                echo "\t\t\t<p class=\"cart-quantity\">&times;";
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</p>
\t\t\t<p class=\"cart-price\">";
                // line 17
                echo $this->getAttribute($context["product"], "total", array());
                echo "</p>
\t\t</td>          
          <td class=\"text-center cart-close\"><button type=\"button\" onclick=\"cart.remove('";
                // line 19
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"ion-android-close\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 23
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 25
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 27
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 28
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"ion-android-close\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "      </table>
    </li>
    <li>
        <table class=\"table\">
          ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 36
                echo "          <tr>
            <td class=\"text-left\">";
                // line 37
                echo ($this->getAttribute($context["total"], "title", array()) . " :");
                echo "</td>
            <td class=\"text-right\">";
                // line 38
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </table>
        <p class=\"text-center cart-button\"><a href=\"";
            // line 42
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\">";
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "</a><a href=\"";
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a></p>      
    </li>
    ";
        } else {
            // line 45
            echo "    <li>
      <p class=\"text-center cart-empty\">";
            // line 46
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
    </li>
    ";
        }
        // line 49
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 49,  186 => 46,  183 => 45,  171 => 42,  168 => 41,  159 => 38,  155 => 37,  152 => 36,  148 => 35,  142 => 31,  131 => 28,  127 => 27,  122 => 25,  118 => 23,  113 => 22,  102 => 19,  97 => 17,  92 => 16,  86 => 15,  81 => 14,  78 => 13,  69 => 12,  62 => 11,  56 => 10,  42 => 9,  39 => 8,  35 => 7,  31 => 5,  29 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div id="cart" class="btn-group btn-block">*/
/*   <button type="button" data-toggle="dropdown" data-loading-text="{{ text_loading }}" class="btn dropdown-toggle"><i class="ion-bag"></i> <span id="cart-total">{{ text_items }}</span></button>*/
/*   <ul class="dropdown-menu pull-right">*/
/*     {% if products or vouchers %}*/
/*     <li class="has-scroll">*/
/*       <table class="table">*/
/*         {% for product in products %}*/
/*         <tr>*/
/*           <td class="text-center">{% if product.thumb %} <a href="{{ product.href }}"><img class="cart-image" src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" /></a> {% endif %}</td>*/
/*           <td class="text-left info-item"><a href="{{ product.href }}">{{ product.name }}</a> {% if product.option %}*/
/*             {% for option in product.option %} <br />*/
/*             - <small>{{ option.name }} {{ option.value }}</small> {% endfor %}*/
/*             {% endif %}*/
/*             {% if product.recurring %} <br />*/
/*             - <small>{{ text_recurring }} {{ product.recurring }}</small> {% endif %}*/
/* 			<p class="cart-quantity">&times;{{ product.quantity }}</p>*/
/* 			<p class="cart-price">{{ product.total }}</p>*/
/* 		</td>          */
/*           <td class="text-center cart-close"><button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="ion-android-close"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% for voucher in vouchers %}*/
/*         <tr>*/
/*           <td class="text-center"></td>*/
/*           <td class="text-left">{{ voucher.description }}</td>*/
/*           <td class="text-right">x&nbsp;1</td>*/
/*           <td class="text-right">{{ voucher.amount }}</td>*/
/*           <td class="text-center text-danger"><button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="ion-android-close"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </li>*/
/*     <li>*/
/*         <table class="table">*/
/*           {% for total in totals %}*/
/*           <tr>*/
/*             <td class="text-left">{{ total.title ~ " :" }}</td>*/
/*             <td class="text-right">{{ total.text }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*         </table>*/
/*         <p class="text-center cart-button"><a href="{{ cart }}">{{ text_cart }}</a><a href="{{ checkout }}">{{ text_checkout }}</a></p>      */
/*     </li>*/
/*     {% else %}*/
/*     <li>*/
/*       <p class="text-center cart-empty">{{ text_empty }}</p>*/
/*     </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
/* */
