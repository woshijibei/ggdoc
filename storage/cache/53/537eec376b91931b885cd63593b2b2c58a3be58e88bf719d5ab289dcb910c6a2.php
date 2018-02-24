<?php

/* tt_handart2/template/extension/module/octabproducts.twig */
class __TwigTemplate_b18dfeadac3614f5e5056d67497cb362c5f3daf36d8f34f9aebd11813621a653 extends Twig_Template
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
        echo "<div class=\"tt_tabsproduct_module";
        if (($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "row", array()) >= 2)) {
            echo " multi-rows";
        }
        echo "\" id=\"product_module";
        echo $this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "module_id", array());
        echo "\">
\t<div class=\"module-title\">
\t  <h2>
\t\t";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "title_lang", array()), (isset($context["code"]) ? $context["code"] : null), array(), "array"), "title", array())) {
            // line 5
            echo "\t\t  ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "title_lang", array()), (isset($context["code"]) ? $context["code"] : null), array(), "array"), "title", array());
            echo "
\t\t";
        } else {
            // line 7
            echo "\t\t  ";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "
\t\t";
        }
        // line 9
        echo "\t  </h2>
\t  ";
        // line 10
        if ((isset($context["module_description"]) ? $context["module_description"] : null)) {
            // line 11
            echo "\t\t<div class=\"module-description\">
\t\t  ";
            // line 12
            echo (isset($context["module_description"]) ? $context["module_description"] : null);
            echo "
\t\t</div>
\t  ";
        }
        // line 15
        echo "  </div>
  ";
        // line 16
        if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "slider", array())) {
            // line 17
            echo "\t";
            $context["class_slider"] = " owl-carousel owl-theme ";
            // line 18
            echo "  ";
        } else {
            // line 19
            echo "\t";
            $context["class_slider"] = "";
            // line 20
            echo "  ";
        }
        // line 21
        echo "  ";
        if (($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "nrow", array()) == 0)) {
            // line 22
            echo "\t";
            $context["class"] = "two_items col-lg-6 col-md-6 col-sm-6 col-xs-12";
            echo "\t
  ";
        } elseif (($this->getAttribute(        // line 23
(isset($context["config_module"]) ? $context["config_module"] : null), "nrow", array()) == 1)) {
            // line 24
            echo "\t";
            $context["class"] = "three_items col-lg-4 col-md-4 col-sm-4 col-xs-12";
            // line 25
            echo "  ";
        } elseif (($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "nrow", array()) == 2)) {
            // line 26
            echo "\t";
            $context["class"] = "four_items col-lg-3 col-md-3 col-sm-3 col-xs-12";
            // line 27
            echo "  ";
        } else {
            // line 28
            echo "\t";
            $context["class"] = "six_items col-lg-2 col-md-2 col-sm-2 col-xs-12";
            // line 29
            echo "  ";
        }
        // line 30
        echo "  <div class=\"tt-product\">
    <ul class=\"tab-heading nav nav-pills\">
      ";
        // line 32
        $context["i"] = 0;
        // line 33
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["octabs"]) ? $context["octabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["octab"]) {
            // line 34
            echo "        <li><a data-toggle=\"pill\" href=\"#tab-";
            echo (isset($context["i"]) ? $context["i"] : null);
            echo "\">";
            echo $this->getAttribute($context["octab"], "title", array());
            echo "</a></li>
        ";
            // line 35
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 36
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['octab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </ul>
    <div class=\"tab-content\">
\t\t";
        // line 39
        $context["i"] = 0;
        echo "\t  
\t\t";
        // line 40
        if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "row", array())) {
            // line 41
            echo "\t\t\t";
            $context["rows"] = $this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "row", array());
            // line 42
            echo "\t\t";
        } else {
            // line 43
            echo "\t\t\t";
            $context["rows"] = 1;
            // line 44
            echo "\t\t";
        }
        echo "\t\t
\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["octabs"]) ? $context["octabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["octab"]) {
            // line 46
            echo "\t";
            $context["count"] = 0;
            // line 47
            echo "\t<div class=\"tab-container ";
            echo (isset($context["class_slider"]) ? $context["class_slider"] : null);
            echo " tab-pane fade\" id=\"tab-";
            echo (isset($context["i"]) ? $context["i"] : null);
            echo "\">\t\t
\t";
            // line 48
            if ((twig_length_filter($this->env, $this->getAttribute($context["octab"], "products", array())) > 0)) {
                // line 49
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["octab"], "products", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 50
                    echo "            <!-- Grid -->
\t\t\t
\t\t\t";
                    // line 52
                    if ((((isset($context["count"]) ? $context["count"] : null) % (isset($context["rows"]) ? $context["rows"] : null)) == 0)) {
                        // line 53
                        echo "\t\t\t<div class=\"row_items ";
                        if ( !$this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "slider", array())) {
                            echo (isset($context["class"]) ? $context["class"] : null);
                        }
                        echo "\">
\t\t\t";
                    }
                    // line 55
                    echo "\t\t\t";
                    $context["count"] = ((isset($context["count"]) ? $context["count"] : null) + 1);
                    // line 56
                    echo "\t\t\t";
                    if (($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "type", array()) == 0)) {
                        echo "\t\t\t
\t\t\t\t<div class=\"product-layout product-grid\">
\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t<a href=\"";
                        // line 60
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\">
\t\t\t\t\t\t\t\t";
                        // line 61
                        if (($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "rotator", array()) && $this->getAttribute($context["product"], "rotator_image", array()))) {
                            echo "<img class=\"img-r\" src=\"";
                            echo $this->getAttribute($context["product"], "rotator_image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["product"], "name", array());
                            echo "\" />";
                        }
                        // line 62
                        echo "\t\t\t\t\t\t\t\t<img src=\"";
                        echo $this->getAttribute($context["product"], "thumb", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t</a>\t\t\t\t  
\t\t\t\t\t\t\t";
                        // line 64
                        if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "salelabel", array())) {
                            // line 65
                            echo "\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["product"], "special", array())) {
                                // line 66
                                echo "\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                                echo (isset($context["text_label_sale"]) ? $context["text_label_sale"] : null);
                                echo "</div>
\t\t\t\t\t\t\t\t";
                            }
                            // line 68
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 69
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "newlabel", array())) {
                            // line 70
                            echo "\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["product"], "is_new", array())) {
                                // line 71
                                echo "\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                                echo (isset($context["text_label_new"]) ? $context["text_label_new"] : null);
                                echo "</div>
\t\t\t\t\t\t\t\t";
                            }
                            // line 73
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 74
                        echo "
\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t";
                        // line 76
                        if ((isset($context["use_catalog"]) ? $context["use_catalog"] : null)) {
                            // line 77
                            echo "\t\t\t\t\t\t\t\t<button class=\"btn-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                            echo "\" onclick=\"cart.add('";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "');\"><i class=\"ion-bag\"></i><span>";
                            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t";
                        }
                        // line 79
                        echo "\t\t\t\t\t\t\t\t<button class=\"btn-wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "\" onclick=\"wishlist.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"ion-android-favorite-outline\"></i><span>";
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t<button class=\"btn-compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                        // line 80
                        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                        echo "\" onclick=\"compare.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"ion-android-options\"></i><span>";
                        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t";
                        // line 81
                        if ((isset($context["use_quickview"]) ? $context["use_quickview"] : null)) {
                            // line 82
                            echo "\t\t\t\t\t\t\t\t<button class=\"btn-quickview\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                            echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                            echo "\" onclick=\"ocquickview.ajaxView('";
                            echo $this->getAttribute($context["product"], "href", array());
                            echo "')\"><i class=\"ion-android-open\"></i><span>";
                            echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t";
                        }
                        // line 84
                        echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t";
                        // line 88
                        if ($this->getAttribute($context["product"], "manufacturer", array())) {
                            // line 89
                            echo "\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t<a href=\"";
                            // line 90
                            echo $this->getAttribute($context["product"], "manufacturers", array());
                            echo "\">";
                            echo $this->getAttribute($context["product"], "manufacturer", array());
                            echo "</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
                        }
                        // line 93
                        echo "\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "</a></h4>
\t\t\t\t\t\t\t";
                        // line 94
                        if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "description", array())) {
                            // line 95
                            echo "\t\t\t\t\t\t\t<p class=\"product-des\">";
                            echo $this->getAttribute($context["product"], "description", array());
                            echo "</p>
\t\t\t\t\t\t\t";
                        }
                        // line 97
                        echo "\t\t\t\t\t\t\t";
                        if ((isset($context["use_catalog"]) ? $context["use_catalog"] : null)) {
                            // line 98
                            echo "\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["product"], "price", array())) {
                                // line 99
                                echo "\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t";
                                // line 100
                                if ( !$this->getAttribute($context["product"], "special", array())) {
                                    // line 101
                                    echo "\t\t\t\t\t\t\t\t\t";
                                    echo $this->getAttribute($context["product"], "price", array());
                                    echo "
\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 103
                                    echo "\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                    echo $this->getAttribute($context["product"], "price", array());
                                    echo "</span><span class=\"price-new\">";
                                    echo $this->getAttribute($context["product"], "special", array());
                                    echo "</span>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t";
                                }
                                // line 105
                                echo "\t\t\t\t\t\t\t\t";
                                if ($this->getAttribute($context["product"], "tax", array())) {
                                    // line 106
                                    echo "\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                                    echo " ";
                                    echo $this->getAttribute($context["product"], "tax", array());
                                    echo "</span>
\t\t\t\t\t\t\t\t";
                                }
                                // line 108
                                echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
                            }
                            // line 110
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 111
                        echo "\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t";
                        // line 112
                        if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "countdown", array())) {
                            echo "<div id=\"Countdown";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "-";
                            echo (isset($context["i"]) ? $context["i"] : null);
                            echo "\" class=\"box-timer\"></div> ";
                        }
                        // line 113
                        echo "\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t";
                        // line 114
                        if (($this->getAttribute($context["product"], "date_end", array()) && $this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "countdown", array()))) {
                            // line 115
                            echo "\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#Countdown";
                            // line 117
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "-";
                            echo (isset($context["i"]) ? $context["i"] : null);
                            echo "').countdown({
\t\t\t\t\t\tuntil: new Date(";
                            // line 118
                            echo twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date_end", array()), "Y");
                            echo ", ";
                            echo twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date_end", array()), "m");
                            echo "-1, ";
                            echo twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date_end", array()), "d");
                            echo ", ";
                            echo twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date_end", array()), "H");
                            echo ", ";
                            echo twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date_end", array()), "i");
                            echo ", ";
                            echo twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date_end", array()), "s");
                            echo "),
\t\t\t\t\t\tlabels: ['";
                            // line 119
                            echo (isset($context["text_years"]) ? $context["text_years"] : null);
                            echo "', '";
                            echo (isset($context["text_months"]) ? $context["text_months"] : null);
                            echo " ', '";
                            echo (isset($context["text_weeks"]) ? $context["text_weeks"] : null);
                            echo "', '";
                            echo (isset($context["text_days"]) ? $context["text_days"] : null);
                            echo "', '";
                            echo (isset($context["text_hrs"]) ? $context["text_hrs"] : null);
                            echo "', '";
                            echo (isset($context["text_mins"]) ? $context["text_mins"] : null);
                            echo "', '";
                            echo (isset($context["text_secs"]) ? $context["text_secs"] : null);
                            echo "'],
\t\t\t\t\t\tlabels1: ['";
                            // line 120
                            echo (isset($context["text_year"]) ? $context["text_year"] : null);
                            echo "', '";
                            echo (isset($context["text_month"]) ? $context["text_month"] : null);
                            echo " ', '";
                            echo (isset($context["text_week"]) ? $context["text_week"] : null);
                            echo "', '";
                            echo (isset($context["text_day"]) ? $context["text_day"] : null);
                            echo "', '";
                            echo (isset($context["text_hr"]) ? $context["text_hr"] : null);
                            echo "', '";
                            echo (isset($context["text_min"]) ? $context["text_min"] : null);
                            echo "', '";
                            echo (isset($context["text_sec"]) ? $context["text_sec"] : null);
                            echo "'],
\t\t\t\t\t\t});
\t\t\t\t\t\t// \$('#Countdown";
                            // line 122
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "-";
                            echo (isset($context["i"]) ? $context["i"] : null);
                            echo "').countdown('pause');
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                        }
                        // line 126
                        echo "\t\t\t\t</div><!-- product-layout -->

            ";
                    } elseif (($this->getAttribute(                    // line 128
(isset($context["config_module"]) ? $context["config_module"] : null), "type", array()) == 1)) {
                        // line 129
                        echo "            <!-- List -->
\t\t\t\t<div class=\"product-layout list-style\">
\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t<a href=\"";
                        // line 133
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\">
\t\t\t\t\t\t\t\t";
                        // line 134
                        if (($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "rotator", array()) && $this->getAttribute($context["product"], "rotator_image", array()))) {
                            echo "<img class=\"img-r\" src=\"";
                            echo $this->getAttribute($context["product"], "rotator_image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["product"], "name", array());
                            echo "\" />";
                        }
                        // line 135
                        echo "\t\t\t\t\t\t\t\t<img src=\"";
                        echo $this->getAttribute($context["product"], "thumb", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t</a>\t\t\t\t  
\t\t\t\t\t\t\t";
                        // line 137
                        if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "salelabel", array())) {
                            // line 138
                            echo "\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["product"], "special", array())) {
                                // line 139
                                echo "\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                                echo (isset($context["text_label_sale"]) ? $context["text_label_sale"] : null);
                                echo "</div>
\t\t\t\t\t\t\t\t";
                            }
                            // line 141
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 142
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "newlabel", array())) {
                            // line 143
                            echo "\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["product"], "is_new", array())) {
                                // line 144
                                echo "\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                                echo (isset($context["text_label_new"]) ? $context["text_label_new"] : null);
                                echo "</div>
\t\t\t\t\t\t\t\t";
                            }
                            // line 146
                            echo "\t\t\t\t\t\t\t";
                        }
                        echo "\t\t\t\t\t
\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t";
                        // line 149
                        if ($this->getAttribute($context["product"], "manufacturer", array())) {
                            // line 150
                            echo "\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t<a href=\"";
                            // line 151
                            echo $this->getAttribute($context["product"], "manufacturers", array());
                            echo "\">";
                            echo $this->getAttribute($context["product"], "manufacturer", array());
                            echo "</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
                        }
                        // line 154
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["product"], "rating", array())) {
                            // line 155
                            echo "\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t";
                            // line 157
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 158
                                echo "\t\t\t\t\t\t\t\t\t";
                                if (($this->getAttribute($context["product"], "rating", array()) == $context["i"])) {
                                    // line 159
                                    echo "\t\t\t\t\t\t\t\t\t";
                                    $context["class_r"] = ("rating" . $context["i"]);
                                    // line 160
                                    echo "\t\t\t\t\t\t\t\t\t<div class=\"";
                                    echo (isset($context["class_r"]) ? $context["class_r"] : null);
                                    echo "\">rating</div>
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 162
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 163
                            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t";
                        }
                        // line 166
                        echo "\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "</a></h4>                  
\t\t\t\t\t\t\t";
                        // line 167
                        if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "description", array())) {
                            // line 168
                            echo "\t\t\t\t\t\t\t<p class=\"product-des\">";
                            echo $this->getAttribute($context["product"], "description", array());
                            echo "</p>
\t\t\t\t\t\t\t";
                        }
                        // line 170
                        echo "\t\t\t\t\t\t\t";
                        if ((isset($context["use_catalog"]) ? $context["use_catalog"] : null)) {
                            // line 171
                            echo "\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["product"], "price", array())) {
                                // line 172
                                echo "\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t";
                                // line 173
                                if ( !$this->getAttribute($context["product"], "special", array())) {
                                    // line 174
                                    echo "\t\t\t\t\t\t\t\t\t";
                                    echo $this->getAttribute($context["product"], "price", array());
                                    echo "
\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 176
                                    echo "\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                    echo $this->getAttribute($context["product"], "price", array());
                                    echo "</span><span class=\"price-new\">";
                                    echo $this->getAttribute($context["product"], "special", array());
                                    echo "</span>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t";
                                }
                                // line 178
                                echo "\t\t\t\t\t\t\t\t";
                                if ($this->getAttribute($context["product"], "tax", array())) {
                                    // line 179
                                    echo "\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                                    echo " ";
                                    echo $this->getAttribute($context["product"], "tax", array());
                                    echo "</span>
\t\t\t\t\t\t\t\t";
                                }
                                // line 181
                                echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
                            }
                            // line 183
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 184
                        echo "\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t";
                        // line 185
                        if ((isset($context["use_catalog"]) ? $context["use_catalog"] : null)) {
                            // line 186
                            echo "\t\t\t\t\t\t\t\t<button class=\"btn-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                            echo "\" onclick=\"cart.add('";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "');\"><i class=\"ion-bag\"></i><span>";
                            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t";
                        }
                        // line 188
                        echo "\t\t\t\t\t\t\t\t<button class=\"btn-wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "\" onclick=\"wishlist.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"ion-android-favorite-outline\"></i><span>";
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t<button class=\"btn-compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                        // line 189
                        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                        echo "\" onclick=\"compare.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"ion-android-options\"></i><span>";
                        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t";
                        // line 190
                        if ((isset($context["use_quickview"]) ? $context["use_quickview"] : null)) {
                            // line 191
                            echo "\t\t\t\t\t\t\t\t<button class=\"btn-quickview\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                            echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                            echo "\" onclick=\"ocquickview.ajaxView('";
                            echo $this->getAttribute($context["product"], "href", array());
                            echo "')\"><i class=\"ion-android-open\"></i><span>";
                            echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t";
                        }
                        // line 193
                        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t";
                        // line 195
                        if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "countdown", array())) {
                            echo "<div id=\"Countdown";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "-";
                            echo (isset($context["i"]) ? $context["i"] : null);
                            echo "\" class=\"box-timer\"></div> ";
                        }
                        // line 196
                        echo "\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t";
                        // line 197
                        if (($this->getAttribute($context["product"], "date_end", array()) && $this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "countdown", array()))) {
                            // line 198
                            echo "\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#Countdown";
                            // line 200
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "-";
                            echo (isset($context["i"]) ? $context["i"] : null);
                            echo "').countdown({
\t\t\t\t\t\tuntil: new Date(";
                            // line 201
                            echo twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date_end", array()), "Y");
                            echo ", ";
                            echo twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date_end", array()), "m");
                            echo "-1, ";
                            echo twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date_end", array()), "d");
                            echo ", ";
                            echo twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date_end", array()), "H");
                            echo ", ";
                            echo twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date_end", array()), "i");
                            echo ", ";
                            echo twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date_end", array()), "s");
                            echo "),
\t\t\t\t\t\tlabels: ['";
                            // line 202
                            echo (isset($context["text_years"]) ? $context["text_years"] : null);
                            echo "', '";
                            echo (isset($context["text_months"]) ? $context["text_months"] : null);
                            echo " ', '";
                            echo (isset($context["text_weeks"]) ? $context["text_weeks"] : null);
                            echo "', '";
                            echo (isset($context["text_days"]) ? $context["text_days"] : null);
                            echo "', '";
                            echo (isset($context["text_hrs"]) ? $context["text_hrs"] : null);
                            echo "', '";
                            echo (isset($context["text_mins"]) ? $context["text_mins"] : null);
                            echo "', '";
                            echo (isset($context["text_secs"]) ? $context["text_secs"] : null);
                            echo "'],
\t\t\t\t\t\tlabels1: ['";
                            // line 203
                            echo (isset($context["text_year"]) ? $context["text_year"] : null);
                            echo "', '";
                            echo (isset($context["text_month"]) ? $context["text_month"] : null);
                            echo " ', '";
                            echo (isset($context["text_week"]) ? $context["text_week"] : null);
                            echo "', '";
                            echo (isset($context["text_day"]) ? $context["text_day"] : null);
                            echo "', '";
                            echo (isset($context["text_hr"]) ? $context["text_hr"] : null);
                            echo "', '";
                            echo (isset($context["text_min"]) ? $context["text_min"] : null);
                            echo "', '";
                            echo (isset($context["text_sec"]) ? $context["text_sec"] : null);
                            echo "'],
\t\t\t\t\t\t});
\t\t\t\t\t\t// \$('#Countdown";
                            // line 205
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "-";
                            echo (isset($context["i"]) ? $context["i"] : null);
                            echo "').countdown('pause');
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                        }
                        // line 209
                        echo "\t\t\t\t</div><!-- product-layout -->
            ";
                    } else {
                        // line 211
                        echo "            <!-- other type -->
\t\t\t\t<div class=\"product-layout product-customize\">
\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t<a href=\"";
                        // line 215
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\">
\t\t\t\t\t\t\t\t";
                        // line 216
                        if (($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "rotator", array()) && $this->getAttribute($context["product"], "rotator_image", array()))) {
                            echo "<img class=\"img-r\" src=\"";
                            echo $this->getAttribute($context["product"], "rotator_image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["product"], "name", array());
                            echo "\" />";
                        }
                        // line 217
                        echo "\t\t\t\t\t\t\t\t<img src=\"";
                        echo $this->getAttribute($context["product"], "thumb", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t</a>\t\t\t\t  
\t\t\t\t\t\t\t";
                        // line 219
                        if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "salelabel", array())) {
                            // line 220
                            echo "\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["product"], "special", array())) {
                                // line 221
                                echo "\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                                echo (isset($context["text_label_sale"]) ? $context["text_label_sale"] : null);
                                echo "</div>
\t\t\t\t\t\t\t\t";
                            }
                            // line 223
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 224
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "newlabel", array())) {
                            // line 225
                            echo "\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["product"], "is_new", array())) {
                                // line 226
                                echo "\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                                echo (isset($context["text_label_new"]) ? $context["text_label_new"] : null);
                                echo "</div>
\t\t\t\t\t\t\t\t";
                            }
                            // line 228
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 229
                        echo "
\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t";
                        // line 231
                        if ((isset($context["use_catalog"]) ? $context["use_catalog"] : null)) {
                            // line 232
                            echo "\t\t\t\t\t\t\t\t<button class=\"btn-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                            echo "\" onclick=\"cart.add('";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "');\"><i class=\"ion-bag\"></i><span>";
                            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t";
                        }
                        // line 234
                        echo "\t\t\t\t\t\t\t\t<button class=\"btn-wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "\" onclick=\"wishlist.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"ion-android-favorite-outline\"></i><span>";
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t<button class=\"btn-compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                        // line 235
                        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                        echo "\" onclick=\"compare.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"ion-android-options\"></i><span>";
                        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t";
                        // line 236
                        if ((isset($context["use_quickview"]) ? $context["use_quickview"] : null)) {
                            // line 237
                            echo "\t\t\t\t\t\t\t\t<button class=\"btn-quickview\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                            echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                            echo "\" onclick=\"ocquickview.ajaxView('";
                            echo $this->getAttribute($context["product"], "href", array());
                            echo "')\"><i class=\"ion-android-open\"></i><span>";
                            echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t";
                        }
                        // line 239
                        echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t";
                        // line 243
                        if ($this->getAttribute($context["product"], "manufacturer", array())) {
                            // line 244
                            echo "\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t<a href=\"";
                            // line 245
                            echo $this->getAttribute($context["product"], "manufacturers", array());
                            echo "\">";
                            echo $this->getAttribute($context["product"], "manufacturer", array());
                            echo "</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
                        }
                        // line 248
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["product"], "rating", array())) {
                            // line 249
                            echo "\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t";
                            // line 251
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 252
                                echo "\t\t\t\t\t\t\t\t\t";
                                if (($this->getAttribute($context["product"], "rating", array()) == $context["i"])) {
                                    // line 253
                                    echo "\t\t\t\t\t\t\t\t\t";
                                    $context["class_r"] = ("rating" . $context["i"]);
                                    // line 254
                                    echo "\t\t\t\t\t\t\t\t\t<div class=\"";
                                    echo (isset($context["class_r"]) ? $context["class_r"] : null);
                                    echo "\">rating</div>
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 256
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 257
                            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t";
                        }
                        // line 260
                        echo "\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "</a></h4>                  
\t\t\t\t\t\t\t";
                        // line 261
                        if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "description", array())) {
                            // line 262
                            echo "\t\t\t\t\t\t\t<p class=\"product-des\">";
                            echo $this->getAttribute($context["product"], "description", array());
                            echo "</p>
\t\t\t\t\t\t\t";
                        }
                        // line 264
                        echo "\t\t\t\t\t\t\t";
                        if ((isset($context["use_catalog"]) ? $context["use_catalog"] : null)) {
                            // line 265
                            echo "\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["product"], "price", array())) {
                                // line 266
                                echo "\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t";
                                // line 267
                                if ( !$this->getAttribute($context["product"], "special", array())) {
                                    // line 268
                                    echo "\t\t\t\t\t\t\t\t\t";
                                    echo $this->getAttribute($context["product"], "price", array());
                                    echo "
\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 270
                                    echo "\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                    echo $this->getAttribute($context["product"], "price", array());
                                    echo "</span><span class=\"price-new\">";
                                    echo $this->getAttribute($context["product"], "special", array());
                                    echo "</span>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t";
                                }
                                // line 272
                                echo "\t\t\t\t\t\t\t\t";
                                if ($this->getAttribute($context["product"], "tax", array())) {
                                    // line 273
                                    echo "\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                                    echo " ";
                                    echo $this->getAttribute($context["product"], "tax", array());
                                    echo "</span>
\t\t\t\t\t\t\t\t";
                                }
                                // line 275
                                echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
                            }
                            // line 277
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 278
                        echo "\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t";
                        // line 279
                        if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "countdown", array())) {
                            echo "<div id=\"Countdown";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "-";
                            echo (isset($context["i"]) ? $context["i"] : null);
                            echo "\" class=\"box-timer\"></div> ";
                        }
                        // line 280
                        echo "\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t";
                        // line 281
                        if (($this->getAttribute($context["product"], "date_end", array()) && $this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "countdown", array()))) {
                            // line 282
                            echo "\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#Countdown";
                            // line 284
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "-";
                            echo (isset($context["i"]) ? $context["i"] : null);
                            echo "').countdown({
\t\t\t\t\t\tuntil: new Date(";
                            // line 285
                            echo twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date_end", array()), "Y");
                            echo ", ";
                            echo twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date_end", array()), "m");
                            echo "-1, ";
                            echo twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date_end", array()), "d");
                            echo ", ";
                            echo twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date_end", array()), "H");
                            echo ", ";
                            echo twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date_end", array()), "i");
                            echo ", ";
                            echo twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date_end", array()), "s");
                            echo "),
\t\t\t\t\t\tlabels: ['";
                            // line 286
                            echo (isset($context["text_years"]) ? $context["text_years"] : null);
                            echo "', '";
                            echo (isset($context["text_months"]) ? $context["text_months"] : null);
                            echo " ', '";
                            echo (isset($context["text_weeks"]) ? $context["text_weeks"] : null);
                            echo "', '";
                            echo (isset($context["text_days"]) ? $context["text_days"] : null);
                            echo "', '";
                            echo (isset($context["text_hrs"]) ? $context["text_hrs"] : null);
                            echo "', '";
                            echo (isset($context["text_mins"]) ? $context["text_mins"] : null);
                            echo "', '";
                            echo (isset($context["text_secs"]) ? $context["text_secs"] : null);
                            echo "'],
\t\t\t\t\t\tlabels1: ['";
                            // line 287
                            echo (isset($context["text_year"]) ? $context["text_year"] : null);
                            echo "', '";
                            echo (isset($context["text_month"]) ? $context["text_month"] : null);
                            echo " ', '";
                            echo (isset($context["text_week"]) ? $context["text_week"] : null);
                            echo "', '";
                            echo (isset($context["text_day"]) ? $context["text_day"] : null);
                            echo "', '";
                            echo (isset($context["text_hr"]) ? $context["text_hr"] : null);
                            echo "', '";
                            echo (isset($context["text_min"]) ? $context["text_min"] : null);
                            echo "', '";
                            echo (isset($context["text_sec"]) ? $context["text_sec"] : null);
                            echo "'],
\t\t\t\t\t\t});
\t\t\t\t\t\t// \$('#Countdown";
                            // line 289
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "-";
                            echo (isset($context["i"]) ? $context["i"] : null);
                            echo "').countdown('pause');
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                        }
                        // line 293
                        echo "\t\t\t\t</div><!-- product-layout -->
            ";
                    }
                    // line 295
                    echo "\t\t\t\t";
                    if (((((isset($context["count"]) ? $context["count"] : null) % (isset($context["rows"]) ? $context["rows"] : null)) == 0) || ((isset($context["count"]) ? $context["count"] : null) == twig_length_filter($this->env, $this->getAttribute($context["octab"], "products", array()))))) {
                        // line 296
                        echo "\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 298
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\t\t  \t\t  
\t\t";
            } else {
                // line 300
                echo "\t\t\t<p class=\"text_empty\">";
                echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
                echo "</p>
\t\t";
            }
            // line 302
            echo "        </div>
\t\t";
            // line 303
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            echo "\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['octab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 304
        echo "\t\t
    </div>
  </div>
</div>
<script type=\"text/javascript\">
\$('a[href=\"#tab-0').trigger( \"click\" );
";
        // line 310
        if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "slider", array())) {
            // line 311
            echo "    \$(document).ready(function() {
      \$(\".tab-container\").owlCarousel({
\t\titems: ";
            // line 313
            echo $this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "items", array());
            echo ",
        loop: ";
            // line 314
            if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "loop", array())) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
        margin: ";
            // line 315
            if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "margin", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "margin", array());
                echo " ";
            } else {
                echo " 20 ";
            }
            echo ",
        nav: ";
            // line 316
            if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "navigation", array())) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
        dots: ";
            // line 317
            if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "pagination", array())) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
        autoplay:  ";
            // line 318
            if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "auto", array())) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
        autoplayTimeout: ";
            // line 319
            if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "time", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "time", array());
                echo " ";
            } else {
                echo " 2000 ";
            }
            echo ",
        autoplayHoverPause: true,
        autoplaySpeed: ";
            // line 321
            if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "speed", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "speed", array());
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
        navSpeed: ";
            // line 322
            if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "speed", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "speed", array());
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
        dotsSpeed: ";
            // line 323
            if ($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "speed", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "speed", array());
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
\t\tlazyLoad: true,
\t\tnavText : ['<i class=\"ion-chevron-left\"></i>','<i class=\"ion-chevron-right\"></i>'],
        responsive:{
\t\t\t0:{
\t\t\t\titems: ";
            // line 328
            echo $this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "smobile", array());
            echo "
\t\t\t},
\t\t\t481:{
\t\t\t\titems: ";
            // line 331
            echo $this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "mobile", array());
            echo "
\t\t\t},
\t\t\t769:{
\t\t\t\titems: ";
            // line 334
            echo $this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "tablet", array());
            echo "
\t\t\t},
\t\t\t1024:{
\t\t\t\titems: ";
            // line 337
            echo $this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "desktop", array());
            echo "
\t\t\t},
\t\t\t1200:{
\t\t\t\titems: ";
            // line 340
            echo $this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "items", array());
            echo "
\t\t\t},
        }
      });

    });
";
        }
        // line 347
        echo "</script>";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/extension/module/octabproducts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1228 => 347,  1218 => 340,  1212 => 337,  1206 => 334,  1200 => 331,  1194 => 328,  1180 => 323,  1170 => 322,  1160 => 321,  1149 => 319,  1141 => 318,  1133 => 317,  1125 => 316,  1115 => 315,  1107 => 314,  1103 => 313,  1099 => 311,  1097 => 310,  1089 => 304,  1081 => 303,  1078 => 302,  1072 => 300,  1063 => 298,  1059 => 296,  1056 => 295,  1052 => 293,  1043 => 289,  1026 => 287,  1010 => 286,  996 => 285,  990 => 284,  986 => 282,  984 => 281,  981 => 280,  973 => 279,  970 => 278,  967 => 277,  963 => 275,  955 => 273,  952 => 272,  944 => 270,  938 => 268,  936 => 267,  933 => 266,  930 => 265,  927 => 264,  921 => 262,  919 => 261,  912 => 260,  907 => 257,  901 => 256,  895 => 254,  892 => 253,  889 => 252,  885 => 251,  881 => 249,  878 => 248,  870 => 245,  867 => 244,  865 => 243,  859 => 239,  849 => 237,  847 => 236,  839 => 235,  830 => 234,  820 => 232,  818 => 231,  814 => 229,  811 => 228,  805 => 226,  802 => 225,  799 => 224,  796 => 223,  790 => 221,  787 => 220,  785 => 219,  775 => 217,  767 => 216,  763 => 215,  757 => 211,  753 => 209,  744 => 205,  727 => 203,  711 => 202,  697 => 201,  691 => 200,  687 => 198,  685 => 197,  682 => 196,  674 => 195,  670 => 193,  660 => 191,  658 => 190,  650 => 189,  641 => 188,  631 => 186,  629 => 185,  626 => 184,  623 => 183,  619 => 181,  611 => 179,  608 => 178,  600 => 176,  594 => 174,  592 => 173,  589 => 172,  586 => 171,  583 => 170,  577 => 168,  575 => 167,  568 => 166,  563 => 163,  557 => 162,  551 => 160,  548 => 159,  545 => 158,  541 => 157,  537 => 155,  534 => 154,  526 => 151,  523 => 150,  521 => 149,  514 => 146,  508 => 144,  505 => 143,  502 => 142,  499 => 141,  493 => 139,  490 => 138,  488 => 137,  478 => 135,  470 => 134,  466 => 133,  460 => 129,  458 => 128,  454 => 126,  445 => 122,  428 => 120,  412 => 119,  398 => 118,  392 => 117,  388 => 115,  386 => 114,  383 => 113,  375 => 112,  372 => 111,  369 => 110,  365 => 108,  357 => 106,  354 => 105,  346 => 103,  340 => 101,  338 => 100,  335 => 99,  332 => 98,  329 => 97,  323 => 95,  321 => 94,  314 => 93,  306 => 90,  303 => 89,  301 => 88,  295 => 84,  285 => 82,  283 => 81,  275 => 80,  266 => 79,  256 => 77,  254 => 76,  250 => 74,  247 => 73,  241 => 71,  238 => 70,  235 => 69,  232 => 68,  226 => 66,  223 => 65,  221 => 64,  211 => 62,  203 => 61,  199 => 60,  191 => 56,  188 => 55,  180 => 53,  178 => 52,  174 => 50,  169 => 49,  167 => 48,  160 => 47,  157 => 46,  153 => 45,  148 => 44,  145 => 43,  142 => 42,  139 => 41,  137 => 40,  133 => 39,  129 => 37,  123 => 36,  121 => 35,  114 => 34,  109 => 33,  107 => 32,  103 => 30,  100 => 29,  97 => 28,  94 => 27,  91 => 26,  88 => 25,  85 => 24,  83 => 23,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  61 => 16,  58 => 15,  52 => 12,  49 => 11,  47 => 10,  44 => 9,  38 => 7,  32 => 5,  30 => 4,  19 => 1,);
    }
}
/* <div class="tt_tabsproduct_module{% if config_module.row >=2 %}{{' multi-rows'}}{% endif %}" id="product_module{{ config_module.module_id }}">*/
/* 	<div class="module-title">*/
/* 	  <h2>*/
/* 		{% if config_module.title_lang[code].title %}*/
/* 		  {{ config_module.title_lang[code].title }}*/
/* 		{% else %}*/
/* 		  {{ heading_title }}*/
/* 		{% endif %}*/
/* 	  </h2>*/
/* 	  {% if module_description %}*/
/* 		<div class="module-description">*/
/* 		  {{ module_description }}*/
/* 		</div>*/
/* 	  {% endif %}*/
/*   </div>*/
/*   {% if config_module.slider %}*/
/* 	{% set class_slider = ' owl-carousel owl-theme '%}*/
/*   {% else %}*/
/* 	{% set class_slider = ''%}*/
/*   {% endif %}*/
/*   {% if config_module.nrow == 0 %}*/
/* 	{% set class = 'two_items col-lg-6 col-md-6 col-sm-6 col-xs-12' %}	*/
/*   {% elseif config_module.nrow == 1 %}*/
/* 	{% set class = 'three_items col-lg-4 col-md-4 col-sm-4 col-xs-12' %}*/
/*   {% elseif config_module.nrow == 2 %}*/
/* 	{% set class = 'four_items col-lg-3 col-md-3 col-sm-3 col-xs-12' %}*/
/*   {% else %}*/
/* 	{% set class = 'six_items col-lg-2 col-md-2 col-sm-2 col-xs-12' %}*/
/*   {% endif %}*/
/*   <div class="tt-product">*/
/*     <ul class="tab-heading nav nav-pills">*/
/*       {% set i= 0 %}*/
/*       {% for octab in octabs %}*/
/*         <li><a data-toggle="pill" href="#tab-{{ i }}">{{ octab.title }}</a></li>*/
/*         {% set i= i +1  %}*/
/*       {% endfor %}*/
/*     </ul>*/
/*     <div class="tab-content">*/
/* 		{% set i= 0 %}	  */
/* 		{% if config_module.row %}*/
/* 			{% set rows = config_module.row %}*/
/* 		{% else %}*/
/* 			{% set rows = 1 %}*/
/* 		{% endif %}		*/
/* 	{% for octab in octabs %}*/
/* 	{% set count = 0 %}*/
/* 	<div class="tab-container {{ class_slider }} tab-pane fade" id="tab-{{ i }}">		*/
/* 	{% if octab.products|length > 0 %}*/
/*         {% for product in octab.products %}*/
/*             <!-- Grid -->*/
/* 			*/
/* 			{% if count % rows == 0 %}*/
/* 			<div class="row_items {% if not config_module.slider %}{{ class }}{% endif %}">*/
/* 			{% endif %}*/
/* 			{% set count = count + 1 %}*/
/* 			{% if config_module.type == 0 %}			*/
/* 				<div class="product-layout product-grid">*/
/* 					<div class="product-thumb transition">*/
/* 						<div class="image">*/
/* 							<a href="{{ product.href }}">*/
/* 								{% if config_module.rotator and product.rotator_image %}<img class="img-r" src="{{ product.rotator_image }}" alt="{{ product.name }}" />{% endif %}*/
/* 								<img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/* 							</a>				  */
/* 							{% if config_module.salelabel %}*/
/* 								{% if product.special %}*/
/* 								<div class="label-product label_sale">{{ text_label_sale }}</div>*/
/* 								{% endif %}*/
/* 							{% endif %}*/
/* 							{% if config_module.newlabel %}*/
/* 								{% if product.is_new %}*/
/* 								<div class="label-product label_new">{{ text_label_new }}</div>*/
/* 								{% endif %}*/
/* 							{% endif %}*/
/* */
/* 							<div class="action-links">*/
/* 								{% if use_catalog %}*/
/* 								<button class="btn-cart" type="button" data-toggle="tooltip" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}');"><i class="ion-bag"></i><span>{{ button_cart }}</span></button>*/
/* 								{% endif %}*/
/* 								<button class="btn-wishlist" type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="ion-android-favorite-outline"></i><span>{{ button_wishlist }}</span></button>*/
/* 								<button class="btn-compare" type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="ion-android-options"></i><span>{{ button_compare }}</span></button>*/
/* 								{% if use_quickview %}*/
/* 								<button class="btn-quickview" type="button" data-toggle="tooltip" title="{{ button_quickview }}" onclick="ocquickview.ajaxView('{{ product.href }}')"><i class="ion-android-open"></i><span>{{ button_quickview }}</span></button>*/
/* 								{% endif %}*/
/* 							</div>*/
/* */
/* 						</div><!-- image -->*/
/* 						<div class="caption">*/
/* 							{% if product.manufacturer %}*/
/* 							<p class="manufacture-product">*/
/* 								<a href="{{ product.manufacturers }}">{{ product.manufacturer }}</a>*/
/* 							</p>*/
/* 							{% endif %}*/
/* 							<h4 class="product-name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 							{% if config_module.description %}*/
/* 							<p class="product-des">{{ product.description }}</p>*/
/* 							{% endif %}*/
/* 							{% if use_catalog %}*/
/* 							{% if product.price %}*/
/* 								<p class="price">*/
/* 								{% if not product.special %}*/
/* 									{{ product.price }}*/
/* 								{% else %}*/
/* 									<span class="price-old">{{ product.price }}</span><span class="price-new">{{ product.special }}</span>						  */
/* 								{% endif %}*/
/* 								{% if product.tax %}*/
/* 									<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 								{% endif %}*/
/* 								</p>*/
/* 							{% endif %}*/
/* 							{% endif %}*/
/* 						</div><!-- caption -->*/
/* 						{% if config_module.countdown %}<div id="Countdown{{ product.product_id }}-{{ i }}" class="box-timer"></div> {% endif %}*/
/* 					</div><!-- product-thumb -->*/
/* 						{% if product.date_end and config_module.countdown %}*/
/* 						<script type="text/javascript">*/
/* 						$(document).ready(function () {*/
/* 						$('#Countdown{{ product.product_id }}-{{ i }}').countdown({*/
/* 						until: new Date({{ product.date_end|date("Y") }}, {{ product.date_end|date("m") }}-1, {{ product.date_end|date("d") }}, {{ product.date_end|date("H") }}, {{ product.date_end|date("i") }}, {{ product.date_end|date("s") }}),*/
/* 						labels: ['{{ text_years }}', '{{ text_months }} ', '{{ text_weeks }}', '{{ text_days }}', '{{ text_hrs }}', '{{ text_mins }}', '{{ text_secs }}'],*/
/* 						labels1: ['{{ text_year }}', '{{ text_month }} ', '{{ text_week }}', '{{ text_day }}', '{{ text_hr }}', '{{ text_min }}', '{{ text_sec }}'],*/
/* 						});*/
/* 						// $('#Countdown{{ product.product_id }}-{{ i }}').countdown('pause');*/
/* 						});*/
/* 						</script>*/
/* 						{% endif %}*/
/* 				</div><!-- product-layout -->*/
/* */
/*             {% elseif config_module.type == 1 %}*/
/*             <!-- List -->*/
/* 				<div class="product-layout list-style">*/
/* 					<div class="product-thumb transition">*/
/* 						<div class="image">*/
/* 							<a href="{{ product.href }}">*/
/* 								{% if config_module.rotator and product.rotator_image %}<img class="img-r" src="{{ product.rotator_image }}" alt="{{ product.name }}" />{% endif %}*/
/* 								<img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/* 							</a>				  */
/* 							{% if config_module.salelabel %}*/
/* 								{% if product.special %}*/
/* 								<div class="label-product label_sale">{{ text_label_sale }}</div>*/
/* 								{% endif %}*/
/* 							{% endif %}*/
/* 							{% if config_module.newlabel %}*/
/* 								{% if product.is_new %}*/
/* 								<div class="label-product label_new">{{ text_label_new }}</div>*/
/* 								{% endif %}*/
/* 							{% endif %}					*/
/* 						</div><!-- image -->*/
/* 						<div class="caption">*/
/* 							{% if product.manufacturer %}*/
/* 							<p class="manufacture-product">*/
/* 								<a href="{{ product.manufacturers }}">{{ product.manufacturer }}</a>*/
/* 							</p>*/
/* 							{% endif %}*/
/* 							{% if product.rating %}*/
/* 							<div class="ratings">*/
/* 								<div class="rating-box">*/
/* 								{% for i in 1..5 %}*/
/* 									{% if product.rating == i %}*/
/* 									{% set class_r = "rating"~i %}*/
/* 									<div class="{{ class_r }}">rating</div>*/
/* 									{% endif %}*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>					*/
/* 							{% endif %}*/
/* 							<h4 class="product-name"><a href="{{ product.href }}">{{ product.name }}</a></h4>                  */
/* 							{% if config_module.description %}*/
/* 							<p class="product-des">{{ product.description }}</p>*/
/* 							{% endif %}*/
/* 							{% if use_catalog %}*/
/* 							{% if product.price %}*/
/* 								<p class="price">*/
/* 								{% if not product.special %}*/
/* 									{{ product.price }}*/
/* 								{% else %}*/
/* 									<span class="price-old">{{ product.price }}</span><span class="price-new">{{ product.special }}</span>						  */
/* 								{% endif %}*/
/* 								{% if product.tax %}*/
/* 									<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 								{% endif %}*/
/* 								</p>*/
/* 							{% endif %}*/
/* 							{% endif %}*/
/* 							<div class="action-links">*/
/* 								{% if use_catalog %}*/
/* 								<button class="btn-cart" type="button" data-toggle="tooltip" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}');"><i class="ion-bag"></i><span>{{ button_cart }}</span></button>*/
/* 								{% endif %}*/
/* 								<button class="btn-wishlist" type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="ion-android-favorite-outline"></i><span>{{ button_wishlist }}</span></button>*/
/* 								<button class="btn-compare" type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="ion-android-options"></i><span>{{ button_compare }}</span></button>*/
/* 								{% if use_quickview %}*/
/* 								<button class="btn-quickview" type="button" data-toggle="tooltip" title="{{ button_quickview }}" onclick="ocquickview.ajaxView('{{ product.href }}')"><i class="ion-android-open"></i><span>{{ button_quickview }}</span></button>*/
/* 								{% endif %}*/
/* 							</div>*/
/* 						</div><!-- caption -->*/
/* 						{% if config_module.countdown %}<div id="Countdown{{ product.product_id }}-{{ i }}" class="box-timer"></div> {% endif %}*/
/* 					</div><!-- product-thumb -->*/
/* 						{% if product.date_end and config_module.countdown %}*/
/* 						<script type="text/javascript">*/
/* 						$(document).ready(function () {*/
/* 						$('#Countdown{{ product.product_id }}-{{ i }}').countdown({*/
/* 						until: new Date({{ product.date_end|date("Y") }}, {{ product.date_end|date("m") }}-1, {{ product.date_end|date("d") }}, {{ product.date_end|date("H") }}, {{ product.date_end|date("i") }}, {{ product.date_end|date("s") }}),*/
/* 						labels: ['{{ text_years }}', '{{ text_months }} ', '{{ text_weeks }}', '{{ text_days }}', '{{ text_hrs }}', '{{ text_mins }}', '{{ text_secs }}'],*/
/* 						labels1: ['{{ text_year }}', '{{ text_month }} ', '{{ text_week }}', '{{ text_day }}', '{{ text_hr }}', '{{ text_min }}', '{{ text_sec }}'],*/
/* 						});*/
/* 						// $('#Countdown{{ product.product_id }}-{{ i }}').countdown('pause');*/
/* 						});*/
/* 						</script>*/
/* 						{% endif %}*/
/* 				</div><!-- product-layout -->*/
/*             {% else %}*/
/*             <!-- other type -->*/
/* 				<div class="product-layout product-customize">*/
/* 					<div class="product-thumb transition">*/
/* 						<div class="image">*/
/* 							<a href="{{ product.href }}">*/
/* 								{% if config_module.rotator and product.rotator_image %}<img class="img-r" src="{{ product.rotator_image }}" alt="{{ product.name }}" />{% endif %}*/
/* 								<img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/* 							</a>				  */
/* 							{% if config_module.salelabel %}*/
/* 								{% if product.special %}*/
/* 								<div class="label-product label_sale">{{ text_label_sale }}</div>*/
/* 								{% endif %}*/
/* 							{% endif %}*/
/* 							{% if config_module.newlabel %}*/
/* 								{% if product.is_new %}*/
/* 								<div class="label-product label_new">{{ text_label_new }}</div>*/
/* 								{% endif %}*/
/* 							{% endif %}*/
/* */
/* 							<div class="action-links">*/
/* 								{% if use_catalog %}*/
/* 								<button class="btn-cart" type="button" data-toggle="tooltip" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}');"><i class="ion-bag"></i><span>{{ button_cart }}</span></button>*/
/* 								{% endif %}*/
/* 								<button class="btn-wishlist" type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="ion-android-favorite-outline"></i><span>{{ button_wishlist }}</span></button>*/
/* 								<button class="btn-compare" type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="ion-android-options"></i><span>{{ button_compare }}</span></button>*/
/* 								{% if use_quickview %}*/
/* 								<button class="btn-quickview" type="button" data-toggle="tooltip" title="{{ button_quickview }}" onclick="ocquickview.ajaxView('{{ product.href }}')"><i class="ion-android-open"></i><span>{{ button_quickview }}</span></button>*/
/* 								{% endif %}*/
/* 							</div>*/
/* */
/* 						</div><!-- image -->*/
/* 						<div class="caption">*/
/* 							{% if product.manufacturer %}*/
/* 							<p class="manufacture-product">*/
/* 								<a href="{{ product.manufacturers }}">{{ product.manufacturer }}</a>*/
/* 							</p>*/
/* 							{% endif %}*/
/* 							{% if product.rating %}*/
/* 							<div class="ratings">*/
/* 								<div class="rating-box">*/
/* 								{% for i in 1..5 %}*/
/* 									{% if product.rating == i %}*/
/* 									{% set class_r = "rating"~i %}*/
/* 									<div class="{{ class_r }}">rating</div>*/
/* 									{% endif %}*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>					*/
/* 							{% endif %}*/
/* 							<h4 class="product-name"><a href="{{ product.href }}">{{ product.name }}</a></h4>                  */
/* 							{% if config_module.description %}*/
/* 							<p class="product-des">{{ product.description }}</p>*/
/* 							{% endif %}*/
/* 							{% if use_catalog %}*/
/* 							{% if product.price %}*/
/* 								<p class="price">*/
/* 								{% if not product.special %}*/
/* 									{{ product.price }}*/
/* 								{% else %}*/
/* 									<span class="price-old">{{ product.price }}</span><span class="price-new">{{ product.special }}</span>						  */
/* 								{% endif %}*/
/* 								{% if product.tax %}*/
/* 									<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 								{% endif %}*/
/* 								</p>*/
/* 							{% endif %}*/
/* 							{% endif %}*/
/* 						</div><!-- caption -->*/
/* 						{% if config_module.countdown %}<div id="Countdown{{ product.product_id }}-{{ i }}" class="box-timer"></div> {% endif %}*/
/* 					</div><!-- product-thumb -->*/
/* 						{% if product.date_end and config_module.countdown %}*/
/* 						<script type="text/javascript">*/
/* 						$(document).ready(function () {*/
/* 						$('#Countdown{{ product.product_id }}-{{ i }}').countdown({*/
/* 						until: new Date({{ product.date_end|date("Y") }}, {{ product.date_end|date("m") }}-1, {{ product.date_end|date("d") }}, {{ product.date_end|date("H") }}, {{ product.date_end|date("i") }}, {{ product.date_end|date("s") }}),*/
/* 						labels: ['{{ text_years }}', '{{ text_months }} ', '{{ text_weeks }}', '{{ text_days }}', '{{ text_hrs }}', '{{ text_mins }}', '{{ text_secs }}'],*/
/* 						labels1: ['{{ text_year }}', '{{ text_month }} ', '{{ text_week }}', '{{ text_day }}', '{{ text_hr }}', '{{ text_min }}', '{{ text_sec }}'],*/
/* 						});*/
/* 						// $('#Countdown{{ product.product_id }}-{{ i }}').countdown('pause');*/
/* 						});*/
/* 						</script>*/
/* 						{% endif %}*/
/* 				</div><!-- product-layout -->*/
/*             {% endif %}*/
/* 				{% if (count % rows == 0) or (count == octab.products|length) %}*/
/* 				</div>*/
/* 				{% endif %}*/
/*           {% endfor %}		  		  */
/* 		{% else %}*/
/* 			<p class="text_empty">{{ text_empty }}</p>*/
/* 		{% endif %}*/
/*         </div>*/
/* 		{% set i= i+1 %}		*/
/* 		{% endfor %}		*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* $('a[href="#tab-0').trigger( "click" );*/
/* {% if config_module.slider %}*/
/*     $(document).ready(function() {*/
/*       $(".tab-container").owlCarousel({*/
/* 		items: {{ config_module.items }},*/
/*         loop: {% if config_module.loop %} true {% else %} false {% endif %},*/
/*         margin: {% if config_module.margin %} {{ config_module.margin }} {% else %} 20 {% endif %},*/
/*         nav: {% if config_module.navigation %} true {% else %} false {% endif %},*/
/*         dots: {% if config_module.pagination %} true {% else %} false {% endif %},*/
/*         autoplay:  {% if config_module.auto %} true {% else %} false {% endif %},*/
/*         autoplayTimeout: {% if config_module.time %} {{ config_module.time }} {% else %} 2000 {% endif %},*/
/*         autoplayHoverPause: true,*/
/*         autoplaySpeed: {% if config_module.speed %} {{ config_module.speed }} {% else %} 3000 {% endif %},*/
/*         navSpeed: {% if config_module.speed %} {{ config_module.speed }} {% else %} 3000 {% endif %},*/
/*         dotsSpeed: {% if config_module.speed %} {{ config_module.speed }} {% else %} 3000 {% endif %},*/
/* 		lazyLoad: true,*/
/* 		navText : ['<i class="ion-chevron-left"></i>','<i class="ion-chevron-right"></i>'],*/
/*         responsive:{*/
/* 			0:{*/
/* 				items: {{ config_module.smobile }}*/
/* 			},*/
/* 			481:{*/
/* 				items: {{ config_module.mobile }}*/
/* 			},*/
/* 			769:{*/
/* 				items: {{ config_module.tablet }}*/
/* 			},*/
/* 			1024:{*/
/* 				items: {{ config_module.desktop }}*/
/* 			},*/
/* 			1200:{*/
/* 				items: {{ config_module.items }}*/
/* 			},*/
/*         }*/
/*       });*/
/* */
/*     });*/
/* {% endif %}*/
/* </script>*/
