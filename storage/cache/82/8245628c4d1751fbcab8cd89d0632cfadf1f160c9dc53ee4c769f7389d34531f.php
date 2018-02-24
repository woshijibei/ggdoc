<?php

/* tt_handart2/template/product/product.twig */
class __TwigTemplate_b5d0267034773f439fd1e9c543072cb16d96fc386e31f0531257787591bfb46c extends Twig_Template
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
<div id=\"product-product\" class=\"container\">
  <ul class=\"breadcrumb\">
    <li>—— Have Shopping Your Way.</li>
  </ul>
  <div class=\"row\">";
        // line 6
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 7
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 9
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 13
            echo "    ";
        }
        // line 14
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row\"> ";
        // line 15
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 16
            echo "        ";
            $context["class"] = "col-sm-4";
            // line 17
            echo "        ";
        } else {
            // line 18
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "        ";
        }
        // line 20
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " block-1 owl-style2\"> 
\t\t";
        // line 21
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 22
            echo "\t\t\t<div class=\"thumbnails\">
\t\t\t\t<a class=\"thumbnail\" title=\"";
            // line 23
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\">
\t\t\t\t\t<img data-zoom-image=\"";
            // line 24
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\" src=\"";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" />
\t\t\t\t</a>
\t\t\t</div>\t\t\t
\t\t\t";
            // line 27
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 28
                echo "\t\t\t\t<div id=\"gallery_01\" class=\"thumbnails-additional owl-carousel owl-theme\">
\t\t\t\t\t<a style=\"display: none\" href=\"#\" class=\"thumbnail elevatezoom-gallery current-additional\" data-image=\"";
                // line 29
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" data-zoom-image=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\"  title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\">
\t\t\t\t\t\t<img src=\"";
                // line 30
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" />
\t\t\t\t\t</a>
\t\t\t\t\t";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 33
                    echo "\t\t\t\t\t<a style=\"display: none\" href=\"#\" class=\"thumbnail elevatezoom-gallery\" data-image=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" data-zoom-image=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\">
\t\t\t\t\t\t<img src=\"";
                    // line 34
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" />
\t\t\t\t\t</a>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 39
            echo "\t\t";
        }
        // line 40
        echo "        </div><!-- block-1 -->
        ";
        // line 41
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 42
            echo "        ";
            $context["class"] = "col-sm-8";
            // line 43
            echo "        ";
        } else {
            // line 44
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 45
            echo "        ";
        }
        // line 46
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " block-2\">
          <h1 class=\"heading-title\">";
        // line 47
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t  ";
        // line 48
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 49
            echo "\t\t\t<div class=\"ratings\">
\t\t\t\t<div class=\"rating-box\">
\t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 52
                echo "\t\t\t\t\t";
                if (((isset($context["rating"]) ? $context["rating"] : null) == $context["i"])) {
                    // line 53
                    echo "\t\t\t\t\t";
                    $context["class_r"] = ("rating" . $context["i"]);
                    // line 54
                    echo "\t\t\t\t\t<div class=\"";
                    echo (isset($context["class_r"]) ? $context["class_r"] : null);
                    echo "\">rating</div>
\t\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t\t</div>
\t\t\t\t<a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); \$('body,html').animate({scrollTop: \$('.block-3 .nav-tabs').offset().top}, 800); return false;\">";
            // line 58
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); \$('body,html').animate({scrollTop: \$('.block-3 .nav-tabs').offset().top}, 800); return false;\">";
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a>
\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t            
        ";
        }
        // line 61
        echo "\t\t  ";
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 62
            echo "          <ul class=\"list-unstyled\">
            ";
            // line 63
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 64
                echo "            <li class=\"price\">
              <span>";
                // line 65
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span>
            </li>
            ";
            } else {
                // line 68
                echo "            <li class=\"price\"><span class=\"price-old\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span><span class=\"price-new\">";
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</span></li>
            ";
            }
            // line 70
            echo "            ";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 71
                echo "            <li>";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</li>
            ";
            }
            // line 73
            echo "            ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 74
                echo "            <li>";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</li>
            ";
            }
            // line 76
            echo "            ";
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 77
                echo "            <li>
              <hr>
            </li>
            ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 81
                    echo "            <li>";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "            ";
            }
            // line 84
            echo "          </ul>
          ";
        }
        // line 86
        echo "          <ul class=\"list-unstyled\">
            ";
        // line 87
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 88
            echo "            <li>";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo " <a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\"><span class=\"ex-text\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</span></a></li>
            ";
        }
        // line 90
        echo "            <li>";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " <span class=\"ex-text\">";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</span></li>
            ";
        // line 91
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 92
            echo "            <li>";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " <span class=\"ex-text\">";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</span></li>
            ";
        }
        // line 94
        echo "            <li>";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " <span class=\"ex-text\">";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</span></li>
          </ul>          
\t\t<div id=\"product\"> 
\t\t\t";
        // line 97
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 98
            echo "\t\t\t<div class=\"option-container\">
\t\t\t<h3>";
            // line 99
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
\t\t\t";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 101
                echo "\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 102
                    echo "\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 103
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t<select name=\"option[";
                    // line 104
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"\">";
                    // line 105
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
\t\t\t\t\t\t";
                    // line 106
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 107
                        echo "\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
\t\t\t\t\t\t";
                        // line 108
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 109
                            echo "\t\t\t\t\t\t\t(";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
\t\t\t\t\t\t";
                        }
                        // line 111
                        echo "\t\t\t\t\t\t</option>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 113
                    echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 116
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 117
                    echo "                    <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                        <label class=\"control-label\">";
                    // line 118
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                        <div id=\"input-option";
                    // line 119
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">
                            ";
                    // line 120
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 121
                        echo "                                <label class=\"radioggd\">
                                    <input type=\"radio\" name=\"option[";
                        // line 122
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                  <span>
                    ";
                        // line 124
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            // line 125
                            echo "                        <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" />";
                        } else {
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                        }
                        // line 126
                        echo "
                      ";
                        // line 127
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 128
                            echo "                          (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                      ";
                        }
                        // line 130
                        echo "                  </span>
                                </label>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 133
                    echo "                        </div>
                    </div>
                ";
                }
                // line 136
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 137
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 138
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t<div id=\"input-option";
                    // line 139
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 140
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 141
                        echo "\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 143
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
\t\t\t\t\t\t\t\t\t";
                        // line 144
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 145
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 146
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 147
                            echo "\t\t\t\t\t\t\t\t\t\t(";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 149
                        echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 152
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 155
                echo "\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 156
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 157
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 158
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 161
                echo "\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 162
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 163
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t<textarea name=\"option[";
                    // line 164
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 167
                echo "\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 168
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 169
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 170
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 171
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 174
                echo "\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 175
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 176
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 178
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 185
                echo "\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 186
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 187
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 189
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 196
                echo "\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 197
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 198
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 200
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 207
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 210
        echo "\t\t\t";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 211
            echo "\t\t\t<hr>
\t\t\t<h3>";
            // line 212
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
\t\t\t<div class=\"form-group required\">
\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t<option value=\"\">";
            // line 215
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
\t\t\t\t\t";
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 217
                echo "\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "\t\t\t\t</select>
\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t</div>
\t\t\t";
        }
        // line 223
        echo "            <div class=\"form-group\">
\t\t\t\t<label class=\"control-label\" for=\"input-quantity\">";
        // line 224
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label>
\t\t\t\t<div class=\"quantity-box\">
\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
        // line 226
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
\t\t\t\t\t<input type=\"button\" id=\"plus\" value=\"&#43;\" class=\"form-control\"/>
\t\t\t\t\t<input type=\"button\" id=\"minus\" value=\"-\" class=\"form-control\" />\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 230
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />              
\t\t\t\t<button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 231
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn\"><i class=\"ion-bag\"></i>";
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</button>
\t\t\t\t<div class=\"btn-actions\">
\t\t\t\t\t<button class=\"btn-wishlist\" type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 233
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "\" onclick=\"wishlist.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"ion-android-favorite-outline\"></i></button>
\t\t\t\t\t<button class=\"btn-compare\" type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 234
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "\" onclick=\"compare.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"ion-android-options\"></i></button>
\t\t\t\t</div>
            </div>
            ";
        // line 237
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 238
            echo "\t\t\t<div class=\"clearfix\"></div>
            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            // line 239
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
            ";
        }
        // line 241
        echo "\t\t</div><!-- #product -->
\t\t<div class=\"clearfix\"></div>
\t\t<!-- AddThis Button BEGIN -->
\t\t<div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
        // line 244
        echo (isset($context["share"]) ? $context["share"] : null);
        echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
\t\t<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
\t\t<!-- AddThis Button END --> 
\t\t";
        // line 247
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 248
            echo "\t\t\t<p>";
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
\t\t\t\t";
            // line 249
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 250
                echo "\t\t\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " 
\t\t\t\t\t\t<a href=\"";
                    // line 251
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
\t\t\t\t\t";
                } else {
                    // line 252
                    echo " 
\t\t\t\t\t\t<a href=\"";
                    // line 253
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a> 
\t\t\t\t\t";
                }
                // line 255
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 256
            echo "\t\t\t</p>
\t\t";
        }
        // line 258
        echo "\t  </div><!-- block-2 -->      
\t  <div class=\"block-3 col-sm-12\">
\t\t\t<ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 261
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
            ";
        // line 262
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 263
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
            ";
        }
        // line 265
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 266
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
            ";
        }
        // line 268
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 270
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
            ";
        // line 271
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 272
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 274
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 275
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 277
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 281
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 282
                    echo "                <tr>
                  <td>";
                    // line 283
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                  <td>";
                    // line 284
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 287
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "              </table>
            </div>
            ";
        }
        // line 292
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 293
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 296
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
                ";
            // line 297
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 298
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 300
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 301
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 306
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 308
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 313
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 314
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 324
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                </div>
                ";
                // line 326
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 329
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 333
                echo "                ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                ";
            }
            // line 335
            echo "              </form>
            </div>
            ";
        }
        // line 338
        echo "\t\t\t</div>
\t\t </div><!-- block-3 -->
\t\t ";
        // line 340
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t </div><!-- .row -->\t\t 
      </div><!-- #content -->
    ";
        // line 343
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
      ";
        // line 344
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 345
            echo "\t\t<div class=\"related-products\">
\t\t\t<div class=\"module-title\">
\t\t\t\t<h2>";
            // line 347
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</h2>
\t\t\t\t<div class=\"module-description\">
\t\t\t\t  ";
            // line 349
            echo (isset($context["module_description"]) ? $context["module_description"] : null);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"related-container owl-carousel owl-theme\">
\t\t\t";
            // line 353
            $context["rows"] = 1;
            // line 354
            echo "\t\t\t";
            $context["count"] = 0;
            // line 355
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 356
                echo "\t\t\t\t";
                if ((((isset($context["count"]) ? $context["count"] : null) % (isset($context["rows"]) ? $context["rows"] : null)) == 0)) {
                    // line 357
                    echo "\t\t\t\t<div class=\"row_items\">
\t\t\t\t";
                }
                // line 359
                echo "\t\t\t\t";
                $context["count"] = ((isset($context["count"]) ? $context["count"] : null) + 1);
                // line 360
                echo "\t\t\t\t<div class=\"product-layout product-grid\">
\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t<a href=\"";
                // line 363
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 364
                if (($this->getAttribute((isset($context["config_module"]) ? $context["config_module"] : null), "rotator", array()) && $this->getAttribute($context["product"], "rotator_image", array()))) {
                    echo "<img class=\"img-r\" src=\"";
                    echo $this->getAttribute($context["product"], "rotator_image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />";
                }
                // line 365
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t</a>\t\t\t\t  
\t\t\t\t\t\t\t";
                // line 367
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 368
                    echo "\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                    echo (isset($context["text_label_sale"]) ? $context["text_label_sale"] : null);
                    echo "</div>
\t\t\t\t\t\t\t";
                }
                // line 370
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "is_new", array())) {
                    // line 371
                    echo "\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                    echo (isset($context["text_label_new"]) ? $context["text_label_new"] : null);
                    echo "</div>
\t\t\t\t\t\t\t";
                }
                // line 373
                echo "
\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t<button class=\"btn-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 375
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\" onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"ion-bag\"></i><span>";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t<button class=\"btn-wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 376
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"ion-android-favorite-outline\"></i><span>";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t<button class=\"btn-compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 377
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"ion-android-options\"></i><span>";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t";
                // line 378
                if ((isset($context["use_quickview"]) ? $context["use_quickview"] : null)) {
                    // line 379
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn-quickview\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                    echo "\" onclick=\"ocquickview.ajaxView('";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "')\"><i class=\"ion-android-open\"></i><span>";
                    echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 381
                echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t";
                // line 385
                if ($this->getAttribute($context["product"], "manufacturer", array())) {
                    // line 386
                    echo "\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 387
                    echo $this->getAttribute($context["product"], "manufacturers", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "manufacturer", array());
                    echo "</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
                }
                // line 390
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 391
                    echo "\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t";
                    // line 393
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 394
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["product"], "rating", array()) == $context["i"])) {
                            // line 395
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["class_r"] = ("rating" . $context["i"]);
                            // line 396
                            echo "\t\t\t\t\t\t\t\t\t<div class=\"";
                            echo (isset($context["class_r"]) ? $context["class_r"] : null);
                            echo "\">rating</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 398
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 399
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t";
                }
                // line 402
                echo "\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>                  \t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 403
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 404
                    echo "\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t";
                    // line 405
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 406
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 408
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span><span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t";
                    }
                    // line 410
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 411
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 413
                    echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
                }
                // line 415
                echo "\t\t\t\t\t\t</div><!-- caption -->\t\t\t\t\t\t
\t\t\t\t\t</div><!-- product-thumb -->\t\t\t\t\t\t
\t\t\t\t</div><!-- product-layout -->        
\t\t\t\t";
                // line 418
                if (((((isset($context["count"]) ? $context["count"] : null) % (isset($context["rows"]) ? $context["rows"] : null)) == 0) || ((isset($context["count"]) ? $context["count"] : null) == twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null))))) {
                    // line 419
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 421
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 422
            echo "\t\t\t</div>
\t\t\t</div>
        ";
        }
        // line 424
        echo "              
</div><!-- #product-product -->
<script type=\"text/javascript\"><!--
\$('#product-product select[name=\\'recurring_id\\'], #product-product input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('#product-product input[name=\\'product_id\\'], #product-product input[name=\\'quantity\\'], #product-product select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#product-product #recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#product-product #recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product-product #product input[type=\\'text\\'], #product-product #product input[type=\\'hidden\\'], #product-product #product input[type=\\'radio\\']:checked, #product-product #product input[type=\\'checkbox\\']:checked, #product-product #product select, #product-product #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#product-product #button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#product-product #button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#product-product #input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('#product-product select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('body').before('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<i class=\"ion-bag\"></i><span id=\"cart-total\">' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 502
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 507
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 513
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('#product-product button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#product-product #form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#product-product #form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#product-product #form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#product-product #form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 580
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 584
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.related-container').owlCarousel({
\t\titems: 4,
\t\tnav: true,
\t\tdots: false,
\t\tnavSpeed: 1000,
\t\tmargin: 20,
\t\tresponsive:{
\t\t\t0:{
\t\t\t\titems: 1
\t\t\t},
\t\t\t481:{
\t\t\t\titems: 2
\t\t\t},
\t\t\t769:{
\t\t\t\titems: 2
\t\t\t},
\t\t\t1024:{
\t\t\t\titems: 3
\t\t\t},
\t\t\t1200:{
\t\t\t\titems: 4
\t\t\t},
        },
\t\tnavText : ['<i class=\"ion-chevron-left\"></i>','<i class=\"ion-chevron-right\"></i>'],
\t});
\tvar thumbnails_owl = \$('#product-product .thumbnails-additional');\t
\tthumbnails_owl.on('initialize.owl.carousel initialized.owl.carousel ' +
\t\t'initialize.owl.carousel initialize.owl.carousel ',
\t\tfunction(e) {
\t\t  \$(\"#product-product #gallery_01 .thumbnail\").show();
\t\t});
\tthumbnails_owl.owlCarousel({
\t\titems: 4,
\t\tnav: true,
\t\tdots: false,
\t\tnavSpeed: 1000,
\t\tmargin: 10,\t
\t\tnavText : ['<i class=\"ion-chevron-left\"></i>','<i class=\"ion-chevron-right\"></i>'],\t\t\t\t
\t});\t
\t\$(\"#product-product .thumbnails img\").elevateZoom({\t\t
\t\tgallery : \"gallery_01\",
        galleryActiveClass: \"active\",
\t\tborderColour: \"#ee3333\",
\t});
\tvar thumbnails_additional = \$('#product-product .thumbnails-additional .thumbnail');
\tthumbnails_additional.each(function(){
\t\t\$(this).click(function(){
\t\t\tthumbnails_additional.removeClass('current-additional');
\t\t\t\$(this).addClass('current-additional');
\t\t});
\t});
\tvar minimum = ";
        // line 664
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo ";
\t\$(\"#product-product #input-quantity\").change(function(){
\t\tif (\$(this).val() < minimum) {
\t\t  alert(\"Minimum Quantity: \"+minimum);
\t\t  \$(\"#product-product #input-quantity\").val(minimum);
\t\t}
\t});
\t  // increase number of product
\tfunction minus(minimum){
\t\tvar currentval = parseInt(\$(\"#product-product #input-quantity\").val());
\t\t\$(\"#product-product #input-quantity\").val(currentval-1);
\t\tif(\$(\"#product-product #input-quantity\").val() <= 0 || \$(\"#product-product #input-quantity\").val() < minimum){
\t\t  alert(\"Minimum Quantity: \"+minimum);
\t\t  \$(\"#product-product #input-quantity\").val(minimum);
\t\t}
\t  };
\t  // decrease of product
\tfunction plus(){
\t\tvar currentval = parseInt(\$(\"#product-product #input-quantity\").val());
\t\t\$(\"#product-product #input-quantity\").val(currentval+1);
\t};
\t\$('#product-product #minus').click(function(){
\t\tminus(minimum);
\t});
\t\$('#product-product #plus').click(function(){
\t\tplus();
\t});
});
//--></script> 
";
        // line 693
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1610 => 693,  1578 => 664,  1495 => 584,  1488 => 580,  1418 => 513,  1409 => 507,  1401 => 502,  1321 => 424,  1316 => 422,  1310 => 421,  1306 => 419,  1304 => 418,  1299 => 415,  1295 => 413,  1287 => 411,  1284 => 410,  1276 => 408,  1270 => 406,  1268 => 405,  1265 => 404,  1263 => 403,  1256 => 402,  1251 => 399,  1245 => 398,  1239 => 396,  1236 => 395,  1233 => 394,  1229 => 393,  1225 => 391,  1222 => 390,  1214 => 387,  1211 => 386,  1209 => 385,  1203 => 381,  1193 => 379,  1191 => 378,  1183 => 377,  1175 => 376,  1167 => 375,  1163 => 373,  1157 => 371,  1154 => 370,  1148 => 368,  1146 => 367,  1136 => 365,  1128 => 364,  1124 => 363,  1119 => 360,  1116 => 359,  1112 => 357,  1109 => 356,  1104 => 355,  1101 => 354,  1099 => 353,  1092 => 349,  1087 => 347,  1083 => 345,  1081 => 344,  1077 => 343,  1071 => 340,  1067 => 338,  1062 => 335,  1056 => 333,  1047 => 329,  1041 => 326,  1036 => 324,  1023 => 314,  1019 => 313,  1011 => 308,  1006 => 306,  998 => 301,  994 => 300,  990 => 298,  988 => 297,  984 => 296,  979 => 293,  976 => 292,  971 => 289,  964 => 287,  955 => 284,  951 => 283,  948 => 282,  944 => 281,  937 => 277,  933 => 275,  929 => 274,  925 => 272,  923 => 271,  919 => 270,  915 => 268,  909 => 266,  906 => 265,  900 => 263,  898 => 262,  894 => 261,  889 => 258,  885 => 256,  879 => 255,  872 => 253,  869 => 252,  862 => 251,  857 => 250,  853 => 249,  848 => 248,  846 => 247,  840 => 244,  835 => 241,  830 => 239,  827 => 238,  825 => 237,  817 => 234,  811 => 233,  804 => 231,  800 => 230,  793 => 226,  788 => 224,  785 => 223,  779 => 219,  768 => 217,  764 => 216,  760 => 215,  754 => 212,  751 => 211,  748 => 210,  744 => 208,  738 => 207,  724 => 200,  717 => 198,  710 => 197,  707 => 196,  693 => 189,  686 => 187,  679 => 186,  676 => 185,  662 => 178,  655 => 176,  648 => 175,  645 => 174,  637 => 171,  629 => 170,  625 => 169,  618 => 168,  615 => 167,  603 => 164,  597 => 163,  590 => 162,  587 => 161,  575 => 158,  569 => 157,  562 => 156,  559 => 155,  554 => 152,  546 => 149,  539 => 147,  537 => 146,  532 => 145,  516 => 144,  510 => 143,  506 => 141,  502 => 140,  498 => 139,  494 => 138,  487 => 137,  484 => 136,  479 => 133,  471 => 130,  464 => 128,  462 => 127,  459 => 126,  441 => 125,  439 => 124,  432 => 122,  429 => 121,  425 => 120,  421 => 119,  417 => 118,  410 => 117,  407 => 116,  402 => 113,  395 => 111,  388 => 109,  386 => 108,  379 => 107,  375 => 106,  371 => 105,  365 => 104,  359 => 103,  352 => 102,  349 => 101,  345 => 100,  341 => 99,  338 => 98,  336 => 97,  327 => 94,  319 => 92,  317 => 91,  310 => 90,  300 => 88,  298 => 87,  295 => 86,  291 => 84,  288 => 83,  277 => 81,  273 => 80,  268 => 77,  265 => 76,  257 => 74,  254 => 73,  246 => 71,  243 => 70,  235 => 68,  229 => 65,  226 => 64,  224 => 63,  221 => 62,  218 => 61,  210 => 58,  207 => 57,  201 => 56,  195 => 54,  192 => 53,  189 => 52,  185 => 51,  181 => 49,  179 => 48,  175 => 47,  170 => 46,  167 => 45,  164 => 44,  161 => 43,  158 => 42,  156 => 41,  153 => 40,  150 => 39,  146 => 37,  133 => 34,  124 => 33,  120 => 32,  111 => 30,  103 => 29,  100 => 28,  98 => 27,  86 => 24,  82 => 23,  79 => 22,  77 => 21,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  58 => 15,  51 => 14,  48 => 13,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  33 => 8,  31 => 7,  27 => 6,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-product" class="container">*/
/*   <ul class="breadcrumb">*/
/*     <li>—— Have Shopping Your Way.</li>*/
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
/*       <div class="row"> {% if column_left or column_right %}*/
/*         {% set class = 'col-sm-4' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }} block-1 owl-style2"> */
/* 		{% if thumb %}*/
/* 			<div class="thumbnails">*/
/* 				<a class="thumbnail" title="{{ heading_title }}">*/
/* 					<img data-zoom-image="{{ popup }}" src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" />*/
/* 				</a>*/
/* 			</div>			*/
/* 			{% if images %}*/
/* 				<div id="gallery_01" class="thumbnails-additional owl-carousel owl-theme">*/
/* 					<a style="display: none" href="#" class="thumbnail elevatezoom-gallery current-additional" data-image="{{ thumb }}" data-zoom-image="{{ popup }}"  title="{{ heading_title }}">*/
/* 						<img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" />*/
/* 					</a>*/
/* 					{% for image in images %}*/
/* 					<a style="display: none" href="#" class="thumbnail elevatezoom-gallery" data-image="{{ image.thumb }}" data-zoom-image="{{ image.popup }}" title="{{ heading_title }}">*/
/* 						<img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" />*/
/* 					</a>*/
/* 					{% endfor %}*/
/* 				</div>*/
/* 			{% endif %}*/
/* 		{% endif %}*/
/*         </div><!-- block-1 -->*/
/*         {% if column_left or column_right %}*/
/*         {% set class = 'col-sm-8' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }} block-2">*/
/*           <h1 class="heading-title">{{ heading_title }}</h1>*/
/* 		  {% if review_status %}*/
/* 			<div class="ratings">*/
/* 				<div class="rating-box">*/
/* 				{% for i in 1..5 %}*/
/* 					{% if rating == i %}*/
/* 					{% set class_r = "rating"~i %}*/
/* 					<div class="{{ class_r }}">rating</div>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 				</div>*/
/* 				<a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); $('body,html').animate({scrollTop: $('.block-3 .nav-tabs').offset().top}, 800); return false;">{{ reviews }}</a> / <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); $('body,html').animate({scrollTop: $('.block-3 .nav-tabs').offset().top}, 800); return false;">{{ text_write }}</a>*/
/* 			</div>												            */
/*         {% endif %}*/
/* 		  {% if price %}*/
/*           <ul class="list-unstyled">*/
/*             {% if not special %}*/
/*             <li class="price">*/
/*               <span>{{ price }}</span>*/
/*             </li>*/
/*             {% else %}*/
/*             <li class="price"><span class="price-old">{{ price }}</span><span class="price-new">{{ special }}</span></li>*/
/*             {% endif %}*/
/*             {% if tax %}*/
/*             <li>{{ text_tax }} {{ tax }}</li>*/
/*             {% endif %}*/
/*             {% if points %}*/
/*             <li>{{ text_points }} {{ points }}</li>*/
/*             {% endif %}*/
/*             {% if discounts %}*/
/*             <li>*/
/*               <hr>*/
/*             </li>*/
/*             {% for discount in discounts %}*/
/*             <li>{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </ul>*/
/*           {% endif %}*/
/*           <ul class="list-unstyled">*/
/*             {% if manufacturer %}*/
/*             <li>{{ text_manufacturer }} <a href="{{ manufacturers }}"><span class="ex-text">{{ manufacturer }}</span></a></li>*/
/*             {% endif %}*/
/*             <li>{{ text_model }} <span class="ex-text">{{ model }}</span></li>*/
/*             {% if reward %}*/
/*             <li>{{ text_reward }} <span class="ex-text">{{ reward }}</span></li>*/
/*             {% endif %}*/
/*             <li>{{ text_stock }} <span class="ex-text">{{ stock }}</span></li>*/
/*           </ul>          */
/* 		<div id="product"> */
/* 			{% if options %}*/
/* 			<div class="option-container">*/
/* 			<h3>{{ text_option }}</h3>*/
/* 			{% for option in options %}*/
/* 				{% if option.type == 'select' %}*/
/* 				<div class="form-group{% if option.required %} required {% endif %}">*/
/* 					<label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 					<select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/* 						<option value="">{{ text_select }}</option>*/
/* 						{% for option_value in option.product_option_value %}*/
/* 						<option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/* 						{% if option_value.price %}*/
/* 							({{ option_value.price_prefix }}{{ option_value.price }})*/
/* 						{% endif %}*/
/* 						</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 				</div>*/
/* 				{% endif %}*/
/*                 {% if option.type == 'radio' %}*/
/*                     <div class="form-group{% if option.required %} required {% endif %}">*/
/*                         <label class="control-label">{{ option.name }}</label>*/
/*                         <div id="input-option{{ option.product_option_id }}">*/
/*                             {% for option_value in option.product_option_value %}*/
/*                                 <label class="radioggd">*/
/*                                     <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                   <span>*/
/*                     {% if option_value.image %}*/
/*                         <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" />{% else %}{{ option_value.name }} {% endif %}*/
/* */
/*                       {% if option_value.price %}*/
/*                           ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                       {% endif %}*/
/*                   </span>*/
/*                                 </label>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'checkbox' %}*/
/* 					<div class="form-group{% if option.required %} required {% endif %}">*/
/* 						<label class="control-label">{{ option.name }}</label>*/
/* 						<div id="input-option{{ option.product_option_id }}">*/
/* 						{% for option_value in option.product_option_value %}*/
/* 							<div class="checkbox">*/
/* 								<label>*/
/* 									<input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/* 									{% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}*/
/* 									{{ option_value.name }}*/
/* 									{% if option_value.price %}*/
/* 										({{ option_value.price_prefix }}{{ option_value.price }})*/
/* 									{% endif %}*/
/* 								</label>*/
/* 							</div>*/
/* 						{% endfor %}*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if option.type == 'text' %}*/
/* 					<div class="form-group{% if option.required %} required {% endif %}">*/
/* 						<label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 						<input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if option.type == 'textarea' %}*/
/* 					<div class="form-group{% if option.required %} required {% endif %}">*/
/* 						<label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 						<textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if option.type == 'file' %}*/
/* 					<div class="form-group{% if option.required %} required {% endif %}">*/
/* 						<label class="control-label">{{ option.name }}</label>*/
/* 						<button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/* 						<input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if option.type == 'date' %}*/
/* 					<div class="form-group{% if option.required %} required {% endif %}">*/
/* 						<label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 						<div class="input-group date">*/
/* 							<input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/* 							<span class="input-group-btn">*/
/* 								<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/* 							</span>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if option.type == 'datetime' %}*/
/* 					<div class="form-group{% if option.required %} required {% endif %}">*/
/* 						<label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 						<div class="input-group datetime">*/
/* 							<input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/* 							<span class="input-group-btn">*/
/* 								<button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/* 							</span>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if option.type == 'time' %}*/
/* 					<div class="form-group{% if option.required %} required {% endif %}">*/
/* 						<label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 						<div class="input-group time">*/
/* 							<input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/* 							<span class="input-group-btn">*/
/* 								<button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/* 							</span>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if recurrings %}*/
/* 			<hr>*/
/* 			<h3>{{ text_payment_recurring }}</h3>*/
/* 			<div class="form-group required">*/
/* 				<select name="recurring_id" class="form-control">*/
/* 					<option value="">{{ text_select }}</option>*/
/* 					{% for recurring in recurrings %}*/
/* 					<option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/* 					{% endfor %}*/
/* 				</select>*/
/* 				<div class="help-block" id="recurring-description"></div>*/
/* 			</div>*/
/* 			{% endif %}*/
/*             <div class="form-group">*/
/* 				<label class="control-label" for="input-quantity">{{ entry_qty }}</label>*/
/* 				<div class="quantity-box">*/
/* 					<input type="text" name="quantity" value="{{ minimum }}" size="2" id="input-quantity" class="form-control" />*/
/* 					<input type="button" id="plus" value="&#43;" class="form-control"/>*/
/* 					<input type="button" id="minus" value="-" class="form-control" />					*/
/* 				</div>*/
/* 				<input type="hidden" name="product_id" value="{{ product_id }}" />              */
/* 				<button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="btn"><i class="ion-bag"></i>{{ button_cart }}</button>*/
/* 				<div class="btn-actions">*/
/* 					<button class="btn-wishlist" type="button" data-toggle="tooltip" class="btn btn-default" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product_id }}');"><i class="ion-android-favorite-outline"></i></button>*/
/* 					<button class="btn-compare" type="button" data-toggle="tooltip" class="btn btn-default" title="{{ button_compare }}" onclick="compare.add('{{ product_id }}');"><i class="ion-android-options"></i></button>*/
/* 				</div>*/
/*             </div>*/
/*             {% if minimum > 1 %}*/
/* 			<div class="clearfix"></div>*/
/*             <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*             {% endif %}*/
/* 		</div><!-- #product -->*/
/* 		<div class="clearfix"></div>*/
/* 		<!-- AddThis Button BEGIN -->*/
/* 		<div class="addthis_toolbox addthis_default_style" data-url="{{ share }}"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>*/
/* 		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script> */
/* 		<!-- AddThis Button END --> */
/* 		{% if tags %}*/
/* 			<p>{{ text_tags }}*/
/* 				{% for i in 0..tags|length %}*/
/* 					{% if i < (tags|length - 1) %} */
/* 						<a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>,*/
/* 					{% else %} */
/* 						<a href="{{ tags[i].href }}">{{ tags[i].tag }}</a> */
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			</p>*/
/* 		{% endif %}*/
/* 	  </div><!-- block-2 -->      */
/* 	  <div class="block-3 col-sm-12">*/
/* 			<ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*             {% if attribute_groups %}*/
/*             <li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*             <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-description">{{ description }}</div>*/
/*             {% if attribute_groups %}*/
/*             <div class="tab-pane" id="tab-specification">*/
/*               <table class="table table-bordered">*/
/*                 {% for attribute_group in attribute_groups %}*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for attribute in attribute_group.attribute %}*/
/*                 <tr>*/
/*                   <td>{{ attribute.name }}</td>*/
/*                   <td>{{ attribute.text }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                   </tbody>*/
/*                 {% endfor %}*/
/*               </table>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*             <div class="tab-pane" id="tab-review">*/
/*               <form class="form-horizontal" id="form-review">*/
/*                 <div id="review"></div>*/
/*                 <h2>{{ text_write }}</h2>*/
/*                 {% if review_guest %}*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                     <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/*                     <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                     <div class="help-block">{{ text_note }}</div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label">{{ entry_rating }}</label>*/
/*                     &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                     <input type="radio" name="rating" value="1" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="2" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="3" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="4" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="5" />*/
/*                     &nbsp;{{ entry_good }}</div>*/
/*                 </div>*/
/*                 {{ captcha }}*/
/*                 <div class="buttons clearfix">*/
/*                   <div class="pull-right">*/
/*                     <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% else %}*/
/*                 {{ text_login }}*/
/*                 {% endif %}*/
/*               </form>*/
/*             </div>*/
/*             {% endif %}*/
/* 			</div>*/
/* 		 </div><!-- block-3 -->*/
/* 		 {{ content_bottom }}*/
/* 		 </div><!-- .row -->		 */
/*       </div><!-- #content -->*/
/*     {{ column_right }}</div>*/
/*       {% if products %}*/
/* 		<div class="related-products">*/
/* 			<div class="module-title">*/
/* 				<h2>{{ text_related }}</h2>*/
/* 				<div class="module-description">*/
/* 				  {{ module_description }}*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="related-container owl-carousel owl-theme">*/
/* 			{% set rows = 1 %}*/
/* 			{% set count = 0 %}*/
/* 			{% for product in products %}*/
/* 				{% if count % rows == 0 %}*/
/* 				<div class="row_items">*/
/* 				{% endif %}*/
/* 				{% set count = count + 1 %}*/
/* 				<div class="product-layout product-grid">*/
/* 					<div class="product-thumb transition">*/
/* 						<div class="image">*/
/* 							<a href="{{ product.href }}">*/
/* 								{% if config_module.rotator and product.rotator_image %}<img class="img-r" src="{{ product.rotator_image }}" alt="{{ product.name }}" />{% endif %}*/
/* 								<img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/* 							</a>				  */
/* 							{% if product.special %}*/
/* 							<div class="label-product label_sale">{{ text_label_sale }}</div>*/
/* 							{% endif %}*/
/* 							{% if product.is_new %}*/
/* 							<div class="label-product label_new">{{ text_label_new }}</div>*/
/* 							{% endif %}*/
/* */
/* 							<div class="action-links">*/
/* 								<button class="btn-cart" type="button" data-toggle="tooltip" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}');"><i class="ion-bag"></i><span>{{ button_cart }}</span></button>*/
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
/* 							<h4 class="product-name"><a href="{{ product.href }}">{{ product.name }}</a></h4>                  							*/
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
/* 						</div><!-- caption -->						*/
/* 					</div><!-- product-thumb -->						*/
/* 				</div><!-- product-layout -->        */
/* 				{% if (count % rows == 0) or (count == products|length ) %}*/
/* 				</div>*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 			</div>*/
/* 			</div>*/
/*         {% endif %}              */
/* </div><!-- #product-product -->*/
/* <script type="text/javascript"><!--*/
/* $('#product-product select[name=\'recurring_id\'], #product-product input[name="quantity"]').change(function(){*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('#product-product input[name=\'product_id\'], #product-product input[name=\'quantity\'], #product-product select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#product-product #recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#product-product #recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#button-cart').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/cart/add',*/
/* 		type: 'post',*/
/* 		data: $('#product-product #product input[type=\'text\'], #product-product #product input[type=\'hidden\'], #product-product #product input[type=\'radio\']:checked, #product-product #product input[type=\'checkbox\']:checked, #product-product #product select, #product-product #product textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#product-product #button-cart').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#product-product #button-cart').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['option']) {*/
/* 					for (i in json['error']['option']) {*/
/* 						var element = $('#product-product #input-option' + i.replace('_', '-'));*/
/* */
/* 						if (element.parent().hasClass('input-group')) {*/
/* 							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						} else {*/
/* 							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				if (json['error']['recurring']) {*/
/* 					$('#product-product select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('body').before('<div class="alert alert-success alert-dismissible">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$('#cart > button').html('<i class="ion-bag"></i><span id="cart-total">' + json['total'] + '</span>');*/
/* */
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 				$('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/* 			}*/
/* 		},*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('#product-product button[id^=\'button-upload\']').on('click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#product-product #form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#product-product #form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#product-product #form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#product-product #form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/* });*/
/* */
/* $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/* $('#button-review').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: $("#form-review").serialize(),*/
/* 		beforeSend: function() {*/
/* 			$('#button-review').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-review').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('input[name=\'name\']').val('');*/
/* 				$('textarea[name=\'text\']').val('');*/
/* 				$('input[name=\'rating\']:checked').prop('checked', false);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).ready(function() {*/
/* 	$('.related-container').owlCarousel({*/
/* 		items: 4,*/
/* 		nav: true,*/
/* 		dots: false,*/
/* 		navSpeed: 1000,*/
/* 		margin: 20,*/
/* 		responsive:{*/
/* 			0:{*/
/* 				items: 1*/
/* 			},*/
/* 			481:{*/
/* 				items: 2*/
/* 			},*/
/* 			769:{*/
/* 				items: 2*/
/* 			},*/
/* 			1024:{*/
/* 				items: 3*/
/* 			},*/
/* 			1200:{*/
/* 				items: 4*/
/* 			},*/
/*         },*/
/* 		navText : ['<i class="ion-chevron-left"></i>','<i class="ion-chevron-right"></i>'],*/
/* 	});*/
/* 	var thumbnails_owl = $('#product-product .thumbnails-additional');	*/
/* 	thumbnails_owl.on('initialize.owl.carousel initialized.owl.carousel ' +*/
/* 		'initialize.owl.carousel initialize.owl.carousel ',*/
/* 		function(e) {*/
/* 		  $("#product-product #gallery_01 .thumbnail").show();*/
/* 		});*/
/* 	thumbnails_owl.owlCarousel({*/
/* 		items: 4,*/
/* 		nav: true,*/
/* 		dots: false,*/
/* 		navSpeed: 1000,*/
/* 		margin: 10,	*/
/* 		navText : ['<i class="ion-chevron-left"></i>','<i class="ion-chevron-right"></i>'],				*/
/* 	});	*/
/* 	$("#product-product .thumbnails img").elevateZoom({		*/
/* 		gallery : "gallery_01",*/
/*         galleryActiveClass: "active",*/
/* 		borderColour: "#ee3333",*/
/* 	});*/
/* 	var thumbnails_additional = $('#product-product .thumbnails-additional .thumbnail');*/
/* 	thumbnails_additional.each(function(){*/
/* 		$(this).click(function(){*/
/* 			thumbnails_additional.removeClass('current-additional');*/
/* 			$(this).addClass('current-additional');*/
/* 		});*/
/* 	});*/
/* 	var minimum = {{ minimum }};*/
/* 	$("#product-product #input-quantity").change(function(){*/
/* 		if ($(this).val() < minimum) {*/
/* 		  alert("Minimum Quantity: "+minimum);*/
/* 		  $("#product-product #input-quantity").val(minimum);*/
/* 		}*/
/* 	});*/
/* 	  // increase number of product*/
/* 	function minus(minimum){*/
/* 		var currentval = parseInt($("#product-product #input-quantity").val());*/
/* 		$("#product-product #input-quantity").val(currentval-1);*/
/* 		if($("#product-product #input-quantity").val() <= 0 || $("#product-product #input-quantity").val() < minimum){*/
/* 		  alert("Minimum Quantity: "+minimum);*/
/* 		  $("#product-product #input-quantity").val(minimum);*/
/* 		}*/
/* 	  };*/
/* 	  // decrease of product*/
/* 	function plus(){*/
/* 		var currentval = parseInt($("#product-product #input-quantity").val());*/
/* 		$("#product-product #input-quantity").val(currentval+1);*/
/* 	};*/
/* 	$('#product-product #minus').click(function(){*/
/* 		minus(minimum);*/
/* 	});*/
/* 	$('#product-product #plus').click(function(){*/
/* 		plus();*/
/* 	});*/
/* });*/
/* //--></script> */
/* {{ footer }} */
/* */
