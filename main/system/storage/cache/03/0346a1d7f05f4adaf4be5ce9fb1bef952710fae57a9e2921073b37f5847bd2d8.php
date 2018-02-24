<?php

/* default/template/extension/payment/pp_standard.twig */
class __TwigTemplate_563365d19aa11e6bbdbf771c70350604b8cfd49ec5d68768d471fc05f9ddddbf extends Twig_Template
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
        if ((isset($context["testmode"]) ? $context["testmode"] : null)) {
            // line 2
            echo "<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["text_testmode"]) ? $context["text_testmode"] : null);
            echo "</div>
";
        }
        // line 4
        echo "<form action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\">
  <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
  <input type=\"hidden\" name=\"upload\" value=\"1\" />
  <input type=\"hidden\" name=\"business\" value=\"";
        // line 7
        echo (isset($context["business"]) ? $context["business"] : null);
        echo "\" />
  ";
        // line 8
        $context["i"] = 1;
        // line 9
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo "  <input type=\"hidden\" name=\"item_name_";
            echo (isset($context["i"]) ? $context["i"] : null);
            echo "\" value=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" />
  <input type=\"hidden\" name=\"item_number_";
            // line 11
            echo (isset($context["i"]) ? $context["i"] : null);
            echo "\" value=\"";
            echo $this->getAttribute($context["product"], "model", array());
            echo "\" />
  <input type=\"hidden\" name=\"amount_";
            // line 12
            echo (isset($context["i"]) ? $context["i"] : null);
            echo "\" value=\"";
            echo $this->getAttribute($context["product"], "price", array());
            echo "\" />
  <input type=\"hidden\" name=\"quantity_";
            // line 13
            echo (isset($context["i"]) ? $context["i"] : null);
            echo "\" value=\"";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "\" />
  <input type=\"hidden\" name=\"weight_";
            // line 14
            echo (isset($context["i"]) ? $context["i"] : null);
            echo "\" value=\"";
            echo $this->getAttribute($context["product"], "weight", array());
            echo "\" />
  ";
            // line 15
            $context["j"] = 0;
            // line 16
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 17
                echo "  <input type=\"hidden\" name=\"on";
                echo (isset($context["j"]) ? $context["j"] : null);
                echo "_";
                echo (isset($context["i"]) ? $context["i"] : null);
                echo "\" value=\"";
                echo $this->getAttribute($context["option"], "name", array());
                echo "\" />
  <input type=\"hidden\" name=\"os";
                // line 18
                echo (isset($context["j"]) ? $context["j"] : null);
                echo "_";
                echo (isset($context["i"]) ? $context["i"] : null);
                echo "\" value=\"";
                echo $this->getAttribute($context["option"], "value", array());
                echo "\" />
  ";
                // line 19
                $context["j"] = ((isset($context["j"]) ? $context["j"] : null) + 1);
                // line 20
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "  ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 22
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  ";
        if ((isset($context["discount_amount_cart"]) ? $context["discount_amount_cart"] : null)) {
            // line 24
            echo "  <input type=\"hidden\" name=\"discount_amount_cart\" value=\"";
            echo (isset($context["discount_amount_cart"]) ? $context["discount_amount_cart"] : null);
            echo "\" />
  ";
        }
        // line 26
        echo "  <input type=\"hidden\" name=\"currency_code\" value=\"";
        echo (isset($context["currency_code"]) ? $context["currency_code"] : null);
        echo "\" />
  <input type=\"hidden\" name=\"first_name\" value=\"";
        // line 27
        echo (isset($context["first_name"]) ? $context["first_name"] : null);
        echo "\" />
  <input type=\"hidden\" name=\"last_name\" value=\"";
        // line 28
        echo (isset($context["last_name"]) ? $context["last_name"] : null);
        echo "\" />
  <input type=\"hidden\" name=\"address1\" value=\"";
        // line 29
        echo (isset($context["address1"]) ? $context["address1"] : null);
        echo "\" />
  <input type=\"hidden\" name=\"address2\" value=\"";
        // line 30
        echo (isset($context["address2"]) ? $context["address2"] : null);
        echo "\" />
  <input type=\"hidden\" name=\"city\" value=\"";
        // line 31
        echo (isset($context["city"]) ? $context["city"] : null);
        echo "\" />
  <input type=\"hidden\" name=\"zip\" value=\"";
        // line 32
        echo (isset($context["zip"]) ? $context["zip"] : null);
        echo "\" />
  <input type=\"hidden\" name=\"country\" value=\"";
        // line 33
        echo (isset($context["country"]) ? $context["country"] : null);
        echo "\" />
  <input type=\"hidden\" name=\"address_override\" value=\"0\" />
  <input type=\"hidden\" name=\"email\" value=\"";
        // line 35
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" />
  <input type=\"hidden\" name=\"invoice\" value=\"";
        // line 36
        echo (isset($context["invoice"]) ? $context["invoice"] : null);
        echo "\" />
  <input type=\"hidden\" name=\"lc\" value=\"";
        // line 37
        echo (isset($context["lc"]) ? $context["lc"] : null);
        echo "\" />
  <input type=\"hidden\" name=\"rm\" value=\"2\" />
  <input type=\"hidden\" name=\"no_note\" value=\"1\" />
  <input type=\"hidden\" name=\"no_shipping\" value=\"1\" />
  <input type=\"hidden\" name=\"charset\" value=\"utf-8\" />
  <input type=\"hidden\" name=\"return\" value=\"";
        // line 42
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\" />
  <input type=\"hidden\" name=\"notify_url\" value=\"";
        // line 43
        echo (isset($context["notify_url"]) ? $context["notify_url"] : null);
        echo "\" />
  <input type=\"hidden\" name=\"cancel_return\" value=\"";
        // line 44
        echo (isset($context["cancel_return"]) ? $context["cancel_return"] : null);
        echo "\" />
  <input type=\"hidden\" name=\"paymentaction\" value=\"";
        // line 45
        echo (isset($context["paymentaction"]) ? $context["paymentaction"] : null);
        echo "\" />
  <input type=\"hidden\" name=\"custom\" value=\"";
        // line 46
        echo (isset($context["custom"]) ? $context["custom"] : null);
        echo "\" />
  <input type=\"hidden\" name=\"bn\" value=\"OpenCart_2.0_WPS\" />
  <div class=\"buttons\">
    <div class=\"pull-right\">
      <input type=\"submit\" value=\"";
        // line 50
        echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
        echo "\" class=\"btn btn-primary\" />
    </div>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/pp_standard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 50,  192 => 46,  188 => 45,  184 => 44,  180 => 43,  176 => 42,  168 => 37,  164 => 36,  160 => 35,  155 => 33,  151 => 32,  147 => 31,  143 => 30,  139 => 29,  135 => 28,  131 => 27,  126 => 26,  120 => 24,  117 => 23,  111 => 22,  108 => 21,  102 => 20,  100 => 19,  92 => 18,  83 => 17,  78 => 16,  76 => 15,  70 => 14,  64 => 13,  58 => 12,  52 => 11,  45 => 10,  40 => 9,  38 => 8,  34 => 7,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if testmode %}*/
/* <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ text_testmode }}</div>*/
/* {% endif %}*/
/* <form action="{{ action }}" method="post">*/
/*   <input type="hidden" name="cmd" value="_cart" />*/
/*   <input type="hidden" name="upload" value="1" />*/
/*   <input type="hidden" name="business" value="{{ business }}" />*/
/*   {% set i = 1 %}*/
/*   {% for product in products %}*/
/*   <input type="hidden" name="item_name_{{ i }}" value="{{ product.name }}" />*/
/*   <input type="hidden" name="item_number_{{ i }}" value="{{ product.model }}" />*/
/*   <input type="hidden" name="amount_{{ i }}" value="{{ product.price }}" />*/
/*   <input type="hidden" name="quantity_{{ i }}" value="{{ product.quantity }}" />*/
/*   <input type="hidden" name="weight_{{ i }}" value="{{ product.weight }}" />*/
/*   {% set j = 0 %}*/
/*   {% for option in product.option %}*/
/*   <input type="hidden" name="on{{ j }}_{{ i }}" value="{{ option.name }}" />*/
/*   <input type="hidden" name="os{{ j }}_{{ i }}" value="{{ option.value }}" />*/
/*   {% set j = j + 1 %}*/
/*   {% endfor %}*/
/*   {% set i = i + 1 %}*/
/*   {% endfor %}*/
/*   {% if discount_amount_cart %}*/
/*   <input type="hidden" name="discount_amount_cart" value="{{ discount_amount_cart }}" />*/
/*   {% endif %}*/
/*   <input type="hidden" name="currency_code" value="{{ currency_code }}" />*/
/*   <input type="hidden" name="first_name" value="{{ first_name }}" />*/
/*   <input type="hidden" name="last_name" value="{{ last_name }}" />*/
/*   <input type="hidden" name="address1" value="{{ address1 }}" />*/
/*   <input type="hidden" name="address2" value="{{ address2 }}" />*/
/*   <input type="hidden" name="city" value="{{ city }}" />*/
/*   <input type="hidden" name="zip" value="{{ zip }}" />*/
/*   <input type="hidden" name="country" value="{{ country }}" />*/
/*   <input type="hidden" name="address_override" value="0" />*/
/*   <input type="hidden" name="email" value="{{ email }}" />*/
/*   <input type="hidden" name="invoice" value="{{ invoice }}" />*/
/*   <input type="hidden" name="lc" value="{{ lc }}" />*/
/*   <input type="hidden" name="rm" value="2" />*/
/*   <input type="hidden" name="no_note" value="1" />*/
/*   <input type="hidden" name="no_shipping" value="1" />*/
/*   <input type="hidden" name="charset" value="utf-8" />*/
/*   <input type="hidden" name="return" value="{{ return }}" />*/
/*   <input type="hidden" name="notify_url" value="{{ notify_url }}" />*/
/*   <input type="hidden" name="cancel_return" value="{{ cancel_return }}" />*/
/*   <input type="hidden" name="paymentaction" value="{{ paymentaction }}" />*/
/*   <input type="hidden" name="custom" value="{{ custom }}" />*/
/*   <input type="hidden" name="bn" value="OpenCart_2.0_WPS" />*/
/*   <div class="buttons">*/
/*     <div class="pull-right">*/
/*       <input type="submit" value="{{ button_confirm }}" class="btn btn-primary" />*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/* */
