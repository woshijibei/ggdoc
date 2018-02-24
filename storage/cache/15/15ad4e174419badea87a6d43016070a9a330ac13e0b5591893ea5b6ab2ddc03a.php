<?php

/* extension/module/ocproduct.twig */
class __TwigTemplate_4723742dbc76ebe4855724ec4210948e14a5d0cf85d2809e6747c2e45cc8f41d extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default tt-panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal tt-module\">
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-name\">";
        // line 29
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"control-option width-4\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-status\">";
        // line 39
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"control-option\">
            <div class=\"switch tt-switch\">
              <input type=\"radio\" name=\"status\" class=\"switch-input\" id=\"status-on\" value=\"1\" ";
        // line 42
        if (((isset($context["status"]) ? $context["status"] : null) == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "/>
              <label for=\"status-on\" class=\"switch-label switch-label-on\">";
        // line 43
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</label>
              <input type=\"radio\" name=\"status\" class=\"switch-input\" id=\"status-off\" value=\"0\" ";
        // line 44
        if (((isset($context["status"]) ? $context["status"] : null) == 0)) {
            echo " checked=\"checked\" ";
        }
        echo "/>
              <label for=\"status-off\" class=\"switch-label switch-label-off\">";
        // line 45
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</label>
              <span class=\"switch-selection\"></span>
                  </div>
            </div>
          </div>
      
          <div class=\"form-group parent-form\">
            <label class=\"control-label\" for=\"input-option\">";
        // line 52
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo "</label>
            <div class=\"control-option\">
              <div class=\"switch switch-long switch-multi3\">
                <input type=\"radio\" name=\"option\" class=\"switch-input\" id=\"option-all\" value=\"0\" onClick=\"GetOptionsSelect();\" ";
        // line 55
        if (((isset($context["option"]) ? $context["option"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
                <label for=\"option-all\" class=\"switch-label switch-label-1\">";
        // line 56
        echo (isset($context["entry_type_all"]) ? $context["entry_type_all"] : null);
        echo "</label>
                <input type=\"radio\" name=\"option\" class=\"switch-input\" id=\"option-cate\" value=\"1\" onClick=\"GetOptionsSelect();\" ";
        // line 57
        if (((isset($context["option"]) ? $context["option"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
                <label for=\"option-cate\" class=\"switch-label switch-label-2\">";
        // line 58
        echo (isset($context["entry_type_cate"]) ? $context["entry_type_cate"] : null);
        echo "</label>
                 <input type=\"radio\" name=\"option\" class=\"switch-input\" id=\"option-auto\" value=\"2\" onClick=\"GetOptionsSelect();\" ";
        // line 59
        if (((isset($context["option"]) ? $context["option"] : null) == 2)) {
            echo " checked=\"checked\"";
        }
        echo "/>
                <label for=\"option-auto\" class=\"switch-label switch-label-3\">";
        // line 60
        echo (isset($context["entry_type_auto"]) ? $context["entry_type_auto"] : null);
        echo "</label>
                <span class=\"switch-selection\"></span>
              </div>
            </div>
          </div>
       
          ";
        // line 67
        echo "          <div class=\"option-all-selected select-options\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-product\">";
        // line 69
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>
              <div class=\"control-option width-4\">
                <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 71
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                <div id=\"featured-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                  ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 74
            echo "          
                  <div id=\"featured-product";
            // line 75
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "\" class=\"tt-product\">
                  <i class=\"fa fa-times\"></i>
                  <img src=\"";
            // line 77
            echo $this->getAttribute($context["product"], "image", array());
            echo "\" alt=\"\" />
                  ";
            // line 78
            echo $this->getAttribute($context["product"], "name", array());
            echo "
            
                  <input type=\"hidden\" name=\"product[]\" value=\"";
            // line 80
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "\" />
                  </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </div>
              </div>
            </div>
          </div>
          ";
        // line 88
        echo "          <div class=\"option-cate-selected select-options\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-cate_id\">";
        // line 90
        echo (isset($context["entry_cate_select"]) ? $context["entry_cate_select"] : null);
        echo "</label>
              <div class=\"control-option width-3\">
                <input type=\"text\" name=\"cate_name\" value=\"";
        // line 92
        echo $this->getAttribute((isset($context["cate_ids"]) ? $context["cate_ids"] : null), "name", array());
        echo "\" placeholder=\"Search category\" id=\"input-cate_name\" class=\"form-control\" /><i class=\"fa fa-times\"></i>
                 <input type=\"hidden\" name=\"cate_id\" value=\"";
        // line 93
        echo $this->getAttribute((isset($context["cate_ids"]) ? $context["cate_ids"] : null), "category_id", array());
        echo "\" id=\"input-cate_id\" />
               </div>
               ";
        // line 95
        if ((isset($context["error_category"]) ? $context["error_category"] : null)) {
            // line 96
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_category"]) ? $context["error_category"] : null);
            echo "</div>
               ";
        }
        // line 98
        echo "             </div>
            <div class=\"form-group parent-form\">
              <label class=\"control-label\" for=\"input-productfrom\">";
        // line 100
        echo (isset($context["entry_pfrom"]) ? $context["entry_pfrom"] : null);
        echo "</label>
              <div class=\"control-option width-3\">            
                <div class=\"switch switch-long switch-multi3\">
                  <input type=\"radio\" name=\"productfrom\" class=\"switch-input\" id=\"productfrom-all\" value=\"1\" onClick=\"GetOptionsSelect();\" ";
        // line 103
        if (((isset($context["productfrom"]) ? $context["productfrom"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
                  <label for=\"productfrom-all\" class=\"switch-label switch-label-1\">";
        // line 104
        echo (isset($context["entry_pfrom_all"]) ? $context["entry_pfrom_all"] : null);
        echo "</label>
                  <input type=\"radio\" name=\"productfrom\" class=\"switch-input\" id=\"productfrom-select\" value=\"0\" onClick=\"GetOptionsSelect();\" ";
        // line 105
        if (((isset($context["productfrom"]) ? $context["productfrom"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
                  <label for=\"productfrom-select\" class=\"switch-label switch-label-2\">";
        // line 106
        echo (isset($context["entry_pfrom_select"]) ? $context["entry_pfrom_select"] : null);
        echo "</label>
                  <input type=\"radio\" name=\"productfrom\" class=\"switch-input\" id=\"specific-product\" value=\"2\" onClick=\"GetOptionsSelect();\" ";
        // line 107
        if (((isset($context["productfrom"]) ? $context["productfrom"] : null) == 2)) {
            echo " checked=\"checked\"";
        }
        echo "/>
                  <label for=\"specific-product\" class=\"switch-label switch-label-3\">";
        // line 108
        echo (isset($context["entry_specificproduct"]) ? $context["entry_specificproduct"] : null);
        echo "</label>
                  <span class=\"switch-selection\"></span>
                </div>
              </div>
            </div>
            <div class=\"productfrom-all-selected select-options\">
            </div>
            <div class=\"productfrom-select-selected select-options\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-productcate\">";
        // line 117
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>
                <div class=\"control-option width-4\">
                  <input type=\"text\" name=\"productcate\" value=\"\" placeholder=\"";
        // line 119
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-productcate\" class=\"form-control\" />
                  <div id=\"category-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productcates"]) ? $context["productcates"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["productcate"]) {
            // line 122
            echo "                    <div id=\"category-product";
            echo $this->getAttribute($context["productcate"], "product_id", array());
            echo "\" class=\"tt-product\">          
                      <img src=\"";
            // line 123
            echo $this->getAttribute($context["productcate"], "image", array());
            echo "\" alt=\"\" />
                      ";
            // line 124
            echo $this->getAttribute($context["productcate"], "name", array());
            echo "            
                      <input type=\"hidden\" name=\"productcate[]\" value=\"";
            // line 125
            echo $this->getAttribute($context["productcate"], "product_id", array());
            echo "\" />
                      <i class=\"fa fa-times\"></i>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productcate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                  </div>
                </div>
              </div>
            </div>
            <div class=\"specific-product-selected select-options\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-specific-product\">";
        // line 135
        echo (isset($context["entry_selectspecificproduct"]) ? $context["entry_selectspecificproduct"] : null);
        echo "</label>
                <div class=\"control-option width-3\">
                  <small class=\"text-for-specificproducts\" style=\"padding: 0 0 10px 0; float: left;\">";
        // line 137
        echo (isset($context["entry_selectspecificproduct_small"]) ? $context["entry_selectspecificproduct_small"] : null);
        echo "</small>
                  <select name=\"input_specific_product\" id=\"input-specific-product\" class=\"form-control\">
                    ";
        // line 139
        if (((isset($context["input_specific_product"]) ? $context["input_specific_product"] : null) == 0)) {
            // line 140
            echo "                      <option value=\"0\" selected=\"selected\">";
            echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
            echo "</option>
                      <option value=\"1\">";
            // line 141
            echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
            echo "</option>
                      <option value=\"2\">";
            // line 142
            echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
            echo "</option>
                      <option value=\"3\">";
            // line 143
            echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
            echo "</option>
                      <option value=\"4\">";
            // line 144
            echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
            echo "</option>
                     ";
        } elseif ((        // line 145
(isset($context["input_specific_product"]) ? $context["input_specific_product"] : null) == 1)) {
            // line 146
            echo "                      <option value=\"0\">";
            echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
            echo "</option>
                      <option value=\"1\" selected=\"selected\">";
            // line 147
            echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
            echo "</option>
                      <option value=\"2\">";
            // line 148
            echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
            echo "</option>
                      <option value=\"3\">";
            // line 149
            echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
            echo "</option>
                      <option value=\"4\">";
            // line 150
            echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
            echo "</option>
                     ";
        } elseif ((        // line 151
(isset($context["input_specific_product"]) ? $context["input_specific_product"] : null) == 2)) {
            // line 152
            echo "                      <option value=\"0\">";
            echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
            echo "</option>
                      <option value=\"1\">";
            // line 153
            echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
            echo "</option>
                      <option value=\"2\" selected=\"selected\">";
            // line 154
            echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
            echo "</option>
                      <option value=\"3\">";
            // line 155
            echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
            echo "</option>
                      <option value=\"4\">";
            // line 156
            echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
            echo "</option>
                    ";
        } elseif ((        // line 157
(isset($context["input_specific_product"]) ? $context["input_specific_product"] : null) == 3)) {
            // line 158
            echo "                      <option value=\"0\">";
            echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
            echo "</option>
                      <option value=\"1\">";
            // line 159
            echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
            echo "</option>
                      <option value=\"2\">";
            // line 160
            echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
            echo "</option>
                      <option value=\"3\" selected=\"selected\">";
            // line 161
            echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
            echo "</option>
                      <option value=\"4\">";
            // line 162
            echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
            echo "</option>
                    ";
        } else {
            // line 164
            echo "                      <option value=\"0\">";
            echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
            echo "</option>
                      <option value=\"1\">";
            // line 165
            echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
            echo "</option>
                      <option value=\"2\">";
            // line 166
            echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
            echo "</option>
                      <option value=\"3\">";
            // line 167
            echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
            echo "</option>
                      <option value=\"4\" selected=\"selected\">";
            // line 168
            echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
            echo "</option>
                    ";
        }
        // line 170
        echo "                  </select>
                </div>
              </div>
            </div>
          </div>";
        // line 177
        echo "          <div class=\"option-auto-selected select-options\">
            <div class=\"form-group auto-select\">
              <label class=\"control-label\" for=\"input-autoproduct\">";
        // line 179
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>
              <div class=\"control-option width-2\">
                <select name=\"autoproduct\" id=\"input-select\" class=\"form-control\">
                  ";
        // line 182
        if (((isset($context["autoproduct"]) ? $context["autoproduct"] : null) == 0)) {
            // line 183
            echo "                    <option value=\"0\" selected=\"selected\">";
            echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
            echo "</option>
                    <option value=\"1\">";
            // line 184
            echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
            echo "</option>
                    <option value=\"2\">";
            // line 185
            echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
            echo "</option>
                    <option value=\"3\">";
            // line 186
            echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
            echo "</option>
                    <option value=\"4\">";
            // line 187
            echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
            echo "</option>
                   ";
        } elseif ((        // line 188
(isset($context["autoproduct"]) ? $context["autoproduct"] : null) == 1)) {
            // line 189
            echo "                    <option value=\"0\">";
            echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
            echo "</option>
                    <option value=\"1\" selected=\"selected\">";
            // line 190
            echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
            echo "</option>
                    <option value=\"2\">";
            // line 191
            echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
            echo "</option>
                    <option value=\"3\">";
            // line 192
            echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
            echo "</option>
                    <option value=\"4\">";
            // line 193
            echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
            echo "</option>
                   ";
        } elseif ((        // line 194
(isset($context["autoproduct"]) ? $context["autoproduct"] : null) == 2)) {
            // line 195
            echo "                    <option value=\"0\">";
            echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
            echo "</option>
                    <option value=\"1\">";
            // line 196
            echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
            echo "</option>
                    <option value=\"2\" selected=\"selected\">";
            // line 197
            echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
            echo "</option>
                    <option value=\"3\">";
            // line 198
            echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
            echo "</option>
                    <option value=\"4\">";
            // line 199
            echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
            echo "</option>
                  ";
        } elseif ((        // line 200
(isset($context["autoproduct"]) ? $context["autoproduct"] : null) == 3)) {
            // line 201
            echo "                    <option value=\"0\">";
            echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
            echo "</option>
                    <option value=\"1\">";
            // line 202
            echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
            echo "</option>
                    <option value=\"2\">";
            // line 203
            echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
            echo "</option>
                    <option value=\"3\" selected=\"selected\">";
            // line 204
            echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
            echo "</option>
                    <option value=\"4\">";
            // line 205
            echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
            echo "</option>
                  ";
        } else {
            // line 207
            echo "                    <option value=\"0\">";
            echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
            echo "</option>
                    <option value=\"1\">";
            // line 208
            echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
            echo "</option>
                    <option value=\"2\">";
            // line 209
            echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
            echo "</option>
                    <option value=\"3\">";
            // line 210
            echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
            echo "</option>
                    <option value=\"4\" selected=\"selected\">";
            // line 211
            echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
            echo "</option>
                  ";
        }
        // line 213
        echo "                </select>
              </div>
            </div>
          </div>
     
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-row\">";
        // line 219
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "</label>
            <div class=\"control-option width-4\">
              ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 222
            echo "                <div class=\"input-group\">
                  <span class=\"input-group-addon\">";
            // line 223
            echo $this->getAttribute($context["language"], "name", array());
            echo "</span>
                  <input type=\"text\" name=\"title_lang[";
            // line 224
            echo $this->getAttribute($context["language"], "code", array());
            echo "][title]\" value=\"";
            echo (($this->getAttribute($this->getAttribute((isset($context["title_lang"]) ? $context["title_lang"] : null), $this->getAttribute($context["language"], "code", array()), array(), "array"), "title", array())) ? ($this->getAttribute($this->getAttribute((isset($context["title_lang"]) ? $context["title_lang"] : null), $this->getAttribute($context["language"], "code", array()), array(), "array"), "title", array())) : (""));
            echo "\" placeholder=\"\" id=\"input-title";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "            </div>
          </div>
      ";
        // line 230
        echo "      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-description";
        // line 231
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "language_id", array());
        echo "\">";
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "</label>
          <div class=\"control-control\">
            <div class=\"tab-content\" style=\"margin: 10px;\">
              ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 235
            echo "              <div id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                  <a href=\"javascript:void(0)\" class=\"language-label\"><span>";
            // line 236
            echo $this->getAttribute($context["language"], "name", array());
            echo "</span><i class=\"fa fa-angle-down\"></i></a>
                  <div class=\"html-content\">
                     <textarea name=\"module_description[";
            // line 238
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control summernote\">";
            echo (($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                  </div>
              </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "          </div>
        </div>
      </div>
      ";
        // line 246
        echo "      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-type\">";
        // line 247
        echo (isset($context["entry_product_type"]) ? $context["entry_product_type"] : null);
        echo "</label>
        <div class=\"control-option width-1\">
          <div class=\"switch switch-long switch-multi3\">
            <input type=\"radio\" name=\"type\" class=\"switch-input\" id=\"type-grid\" value=\"0\" ";
        // line 250
        if (((isset($context["type"]) ? $context["type"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"type-grid\" class=\"switch-label switch-label-1\">";
        // line 251
        echo (isset($context["entry_grid"]) ? $context["entry_grid"] : null);
        echo "</label>
            <input type=\"radio\" name=\"type\" class=\"switch-input\" id=\"type-list\" value=\"1\" ";
        // line 252
        if (((isset($context["type"]) ? $context["type"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"type-list\" class=\"switch-label switch-label-2\">";
        // line 253
        echo (isset($context["entry_list"]) ? $context["entry_list"] : null);
        echo "</label>
            <input type=\"radio\" name=\"type\" class=\"switch-input\" id=\"type-other\" value=\"2\" ";
        // line 254
        if (((isset($context["type"]) ? $context["type"] : null) == 2)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"type-other\" class=\"switch-label switch-label-3\">";
        // line 255
        echo (isset($context["entry_other"]) ? $context["entry_other"] : null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group parent-form\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 261
        echo (isset($context["entry_slider"]) ? $context["entry_slider"] : null);
        echo "</label>
        <div class=\"control-option\">    
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"slider\" class=\"switch-input\" id=\"slider-on\" value=\"1\" onClick=\"GetOptionsSelect();\" ";
        // line 264
        if (((isset($context["slider"]) ? $context["slider"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"slider-on\" class=\"switch-label switch-label-on\">";
        // line 265
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
            <input type=\"radio\" name=\"slider\" class=\"switch-input\" id=\"slider-off\" value=\"0\" onClick=\"GetOptionsSelect();\" ";
        // line 266
        if (((isset($context["slider"]) ? $context["slider"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"slider-off\" class=\"switch-label switch-label-off\">";
        // line 267
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"slider-on-selected select-options\">
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-items\">";
        // line 274
        echo (isset($context["entry_item"]) ? $context["entry_item"] : null);
        echo "</label>
          <div class=\"control-option width-1\">
            <input type=\"text\" name=\"items\" value=\"";
        // line 276
        echo (isset($context["items"]) ? $context["items"] : null);
        echo "\" placeholder=\"\" id=\"input-items\" class=\"tt-number-field\" />
          </div>
        </div>  
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-auto\">";
        // line 280
        echo (isset($context["entry_auto"]) ? $context["entry_auto"] : null);
        echo "</label>
          <div class=\"control-option\">
            <div class=\"switch switch-bol\">
              <input type=\"radio\" name=\"auto\" class=\"switch-input\" id=\"auto-on\" value=\"1\" ";
        // line 283
        if (((isset($context["auto"]) ? $context["auto"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
              <label for=\"auto-on\" class=\"switch-label switch-label-on\">";
        // line 284
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
              <input type=\"radio\" name=\"auto\" class=\"switch-input\" id=\"auto-off\" value=\"0\" ";
        // line 285
        if (((isset($context["auto"]) ? $context["auto"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
              <label for=\"auto-off\" class=\"switch-label switch-label-off\">";
        // line 286
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
              <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-time\">";
        // line 292
        echo (isset($context["entry_time"]) ? $context["entry_time"] : null);
        echo "</label>
          <div class=\"control-option width-2\">
            <input type=\"text\" name=\"time\" value=\"";
        // line 294
        echo (isset($context["time"]) ? $context["time"] : null);
        echo "\" placeholder=\"\" id=\"input-time\" class=\"tt-number-field\" />
            <span class=\"suffix\">miliseconds</span>
          </div>
        </div>  
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-time\">";
        // line 299
        echo (isset($context["entry_speed"]) ? $context["entry_speed"] : null);
        echo "</label>
          <div class=\"control-option width-2\">
            <input type=\"text\" name=\"speed\" value=\"";
        // line 301
        echo (isset($context["speed"]) ? $context["speed"] : null);
        echo "\" placeholder=\"\" id=\"input-speed\" class=\"tt-number-field\" />
            <span class=\"suffix\">miliseconds</span>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-row\">";
        // line 306
        echo (isset($context["entry_rows"]) ? $context["entry_rows"] : null);
        echo "</label>
          <div class=\"control-option width-1\">
            <input type=\"text\" name=\"row\" value=\"";
        // line 308
        echo (isset($context["row"]) ? $context["row"] : null);
        echo "\" placeholder=\"\" id=\"input-row\" class=\"tt-number-field\" />
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-loop\">";
        // line 312
        echo (isset($context["entry_loop"]) ? $context["entry_loop"] : null);
        echo "</label>
          <div class=\"control-option\">
            <div class=\"switch switch-bol\">
              <input type=\"radio\" name=\"loop\" class=\"switch-input\" id=\"loop-on\" value=\"1\" ";
        // line 315
        if (((isset($context["loop"]) ? $context["loop"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
              <label for=\"loop-on\" class=\"switch-label switch-label-on\">";
        // line 316
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
              <input type=\"radio\" name=\"loop\" class=\"switch-input\" id=\"loop-off\" value=\"0\" ";
        // line 317
        if (((isset($context["loop"]) ? $context["loop"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
              <label for=\"loop-off\" class=\"switch-label switch-label-off\">";
        // line 318
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
              <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-time\">";
        // line 324
        echo (isset($context["entry_margin"]) ? $context["entry_margin"] : null);
        echo "</label>
          <div class=\"control-option width-2\">
            <input type=\"text\" name=\"margin\" value=\"";
        // line 326
        echo (isset($context["margin"]) ? $context["margin"] : null);
        echo "\" placeholder=\"\" id=\"input-margin\" class=\"tt-number-field\" />
            <span class=\"suffix\">pixels</span>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-navigation\">";
        // line 331
        echo (isset($context["entry_navigation"]) ? $context["entry_navigation"] : null);
        echo "</label>
          <div class=\"control-option\">           
            <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"navigation\" class=\"switch-input\" id=\"navigation-on\" value=\"1\" ";
        // line 334
        if (((isset($context["navigation"]) ? $context["navigation"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"navigation-on\" class=\"switch-label switch-label-on\">";
        // line 335
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
            <input type=\"radio\" name=\"navigation\" class=\"switch-input\" id=\"navigation-off\" value=\"0\" ";
        // line 336
        if (((isset($context["navigation"]) ? $context["navigation"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"navigation-off\" class=\"switch-label switch-label-off\">";
        // line 337
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
            <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-pagination\">";
        // line 343
        echo (isset($context["entry_pagination"]) ? $context["entry_pagination"] : null);
        echo "</label>
          <div class=\"control-option\">       
            <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"pagination\" class=\"switch-input\" id=\"pagination-on\" value=\"1\" ";
        // line 346
        if (((isset($context["pagination"]) ? $context["pagination"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"pagination-on\" class=\"switch-label switch-label-on\">";
        // line 347
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
            <input type=\"radio\" name=\"pagination\" class=\"switch-input\" id=\"pagination-off\" value=\"0\" ";
        // line 348
        if (((isset($context["pagination"]) ? $context["pagination"] : null) == 0)) {
            echo "  checked=\"checked\"";
        }
        echo "/>
            <label for=\"pagination-off\" class=\"switch-label switch-label-off\">";
        // line 349
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
            <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-width\">";
        // line 355
        echo (isset($context["entry_responsive"]) ? $context["entry_responsive"] : null);
        echo "</label>
          <div class=\"control-option width-6\">
           <i class=\"fa fa-desktop\"></i> ";
        // line 357
        echo (isset($context["entry_desktop"]) ? $context["entry_desktop"] : null);
        echo "
           <input type=\"text\" name=\"desktop\" value=\"";
        // line 358
        echo (isset($context["desktop"]) ? $context["desktop"] : null);
        echo "\" placeholder=\"\" id=\"responsive-desktop\" class=\"tt-number-field\" />
            ";
        // line 359
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            // line 360
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_responsive"]) ? $context["error_responsive"] : null);
            echo "</div>
            ";
        }
        // line 362
        echo "            <i class=\"fa fa-laptop\"></i> ";
        echo (isset($context["entry_sdesktop"]) ? $context["entry_sdesktop"] : null);
        echo "
            <input type=\"text\" name=\"tablet\" value=\"";
        // line 363
        echo (isset($context["tablet"]) ? $context["tablet"] : null);
        echo "\" placeholder=\"\" id=\"responsive-tablet\" class=\"tt-number-field\" />
            ";
        // line 364
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            // line 365
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_responsive"]) ? $context["error_responsive"] : null);
            echo "</div>
            ";
        }
        // line 367
        echo "            <i class=\"fa fa-tablet\"></i> ";
        echo (isset($context["entry_tablet"]) ? $context["entry_tablet"] : null);
        echo "
            <input type=\"text\" name=\"mobile\" value=\"";
        // line 368
        echo (isset($context["mobile"]) ? $context["mobile"] : null);
        echo "\" placeholder=\"\" id=\"responsive-mobile\" class=\"tt-number-field\" />
            ";
        // line 369
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            // line 370
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_responsive"]) ? $context["error_responsive"] : null);
            echo "</div>
            ";
        }
        // line 372
        echo "             <i class=\"fa fa-mobile\"></i> ";
        echo (isset($context["entry_mobile"]) ? $context["entry_mobile"] : null);
        echo "
            <input type=\"text\" name=\"smobile\" value=\"";
        // line 373
        echo (isset($context["smobile"]) ? $context["smobile"] : null);
        echo "\" placeholder=\"\" id=\"responsive-smobile\" class=\"tt-number-field\" />
            ";
        // line 374
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            // line 375
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_responsive"]) ? $context["error_responsive"] : null);
            echo "</div>
            ";
        }
        // line 377
        echo "          </div>
        </div>
      </div>
      <div class=\"slider-off-selected select-options\">
        <div class=\"form-group\">";
        // line 382
        echo "          <label class=\"control-label\" for=\"input-row\">";
        echo (isset($context["entry_pprow"]) ? $context["entry_pprow"] : null);
        echo "</label>
          <div class=\"control-option width-1\">
            <select name=\"nrow\" id=\"input-nrow\" class=\"form-control\">
              ";
        // line 385
        if (((isset($context["nrow"]) ? $context["nrow"] : null) == 0)) {
            // line 386
            echo "                <option value=\"0\" selected=\"selected\">2</option>
                <option value=\"1\">3</option>
                <option value=\"2\">4</option>
                <option value=\"3\">6</option>
              ";
        } elseif ((        // line 390
(isset($context["nrow"]) ? $context["nrow"] : null) == 1)) {
            // line 391
            echo "                <option value=\"0\">2</option>
                <option value=\"1\" selected=\"selected\">3</option>
                <option value=\"2\">4</option>
                <option value=\"3\">6</option>
              ";
        } elseif ((        // line 395
(isset($context["nrow"]) ? $context["nrow"] : null) == 2)) {
            // line 396
            echo "                <option value=\"0\">2</option>
                <option value=\"1\">3</option>
                <option value=\"2\" selected=\"selected\">4</option>
                <option value=\"3\">6</option>
              ";
        } else {
            // line 401
            echo "                <option value=\"0\">2</option>
                <option value=\"1\">3</option>
                <option value=\"2\">4</option>
                <option value=\"3\" selected=\"selected\">6</option>
              ";
        }
        // line 406
        echo "            </select>
          </div>
        </div>
      </div>
      ";
        // line 411
        echo "      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 412
        echo (isset($context["entry_show_description"]) ? $context["entry_show_description"] : null);
        echo "</label>
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"description\" class=\"switch-input\" id=\"description-on\" value=\"1\" ";
        // line 415
        if (((isset($context["description"]) ? $context["description"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"description-on\" class=\"switch-label switch-label-on\">";
        // line 416
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
            <input type=\"radio\" name=\"description\" class=\"switch-input\" id=\"description-off\" value=\"0\" <";
        // line 417
        if (((isset($context["description"]) ? $context["description"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"description-off\" class=\"switch-label switch-label-off\">";
        // line 418
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 424
        echo (isset($context["entry_countdown"]) ? $context["entry_countdown"] : null);
        echo "<small>";
        echo (isset($context["entry_countdown_small"]) ? $context["entry_countdown_small"] : null);
        echo "</small></label>
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"countdown\" class=\"switch-input\" id=\"countdown-on\" value=\"1\" ";
        // line 427
        if (((isset($context["countdown"]) ? $context["countdown"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"countdown-on\" class=\"switch-label switch-label-on\">";
        // line 428
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
            <input type=\"radio\" name=\"countdown\" class=\"switch-input\" id=\"countdown-off\" value=\"0\" ";
        // line 429
        if (((isset($context["countdown"]) ? $context["countdown"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"countdown-off\" class=\"switch-label switch-label-off\">";
        // line 430
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 436
        echo (isset($context["entry_rotator"]) ? $context["entry_rotator"] : null);
        echo "</label>   
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"rotator\" class=\"switch-input\" id=\"rotator-on\" value=\"1\" ";
        // line 439
        if (((isset($context["rotator"]) ? $context["rotator"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"rotator-on\" class=\"switch-label switch-label-on\">";
        // line 440
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
            <input type=\"radio\" name=\"rotator\" class=\"switch-input\" id=\"rotator-off\" value=\"0\" ";
        // line 441
        if (((isset($context["rotator"]) ? $context["rotator"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"rotator-off\" class=\"switch-label switch-label-off\">";
        // line 442
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 448
        echo (isset($context["entry_newlabel"]) ? $context["entry_newlabel"] : null);
        echo "</label>    
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"newlabel\" class=\"switch-input\" id=\"newlabel-on\" value=\"1\" ";
        // line 451
        if (((isset($context["newlabel"]) ? $context["newlabel"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"newlabel-on\" class=\"switch-label switch-label-on\">";
        // line 452
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
            <input type=\"radio\" name=\"newlabel\" class=\"switch-input\" id=\"newlabel-off\" value=\"0\" ";
        // line 453
        if (((isset($context["newlabel"]) ? $context["newlabel"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"newlabel-off\" class=\"switch-label switch-label-off\">";
        // line 454
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 460
        echo (isset($context["entry_salelabel"]) ? $context["entry_salelabel"] : null);
        echo "</label>   
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"salelabel\" class=\"switch-input\" id=\"salelabel-on\" value=\"1\" ";
        // line 463
        if (((isset($context["salelabel"]) ? $context["salelabel"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"salelabel-on\" class=\"switch-label switch-label-on\">";
        // line 464
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
            <input type=\"radio\" name=\"salelabel\" class=\"switch-input\" id=\"salelabel-off\" value=\"0\" ";
        // line 465
        if (((isset($context["salelabel"]) ? $context["salelabel"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"salelabel-off\" class=\"switch-label switch-label-off\">";
        // line 466
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-limit\">";
        // line 472
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "</label>
        <div class=\"control-option width-1\">
          <input type=\"text\" name=\"limit\" value=\"";
        // line 474
        echo (isset($context["limit"]) ? $context["limit"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "\" id=\"input-limit\" class=\"tt-number-field\" />
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-width\">";
        // line 478
        echo (isset($context["entry_size"]) ? $context["entry_size"] : null);
        echo "<small>";
        echo (isset($context["entry_dessize"]) ? $context["entry_dessize"] : null);
        echo "</small></label>
        <div class=\"control-option width-2\">
          <input type=\"text\" name=\"width\" value=\"";
        // line 480
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\" placeholder=\"\" id=\"input-width\" class=\"tt-number-field\" />
          ";
        // line 481
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            // line 482
            echo "          <div class=\"text-danger\">";
            echo (isset($context["error_width"]) ? $context["error_width"] : null);
            echo "</div>
          ";
        }
        // line 484
        echo "           x
          <input type=\"text\" name=\"height\" value=\"";
        // line 485
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\" placeholder=\"\" id=\"input-height\" class=\"tt-number-field\" />
          ";
        // line 486
        if ((isset($context["error_height"]) ? $context["error_height"] : null)) {
            // line 487
            echo "          <div class=\"text-danger\">";
            echo (isset($context["error_height"]) ? $context["error_height"] : null);
            echo "</div>
          ";
        }
        // line 489
        echo "        </div>
      </div>

    </form>
    </div>
  </div>
</div>
<link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
    
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
  var category_id;
\$('input[name=\\'product\\']').autocomplete({
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=extension/module/ocproduct/autocomplete&user_token=";
        // line 511
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            image: item['image'],
            label: item['name'],
            value: item['product_id'] 
          }
        }));
      }
    });
  },
  select: function(item) {
    \$('input[name=\\'product\\']').val('');
    
    \$('#featured-product' + item['value']).remove();
    
    \$('#featured-product').append('<div id=\"featured-product' + item['value'] + '\" class=\"tt-product\"><i class=\"fa fa-times\"></i> ' + '<img src=\"' +item['image']+ '\" alt=\"\"/>' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\" /></div>');  
    
    \$('#featured-product').scrollTop(1000);
  }
});
\$('#featured-product').delegate('.fa-times', 'click', function() {
  \$(this).parent().remove();
});
// Search category
\$('input[name=\\'cate_name\\']').autocomplete({
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=extension/module/ocproduct/autocompleteCategory&user_token=";
        // line 541
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['category_id']
          }
        }));
      }
    });
  },
  select: function(item) {  
    document.getElementById(\"input-cate_name\").value= item['label'];  
    document.getElementById(\"input-cate_id\").value= item['value'];  
    \$('#featured-productcate').children().remove();
    }
});
\$('#input-cate_name').parent().delegate('.fa-times', 'click', function() {
  document.getElementById(\"input-cate_name\").value= '';
  document.getElementById(\"input-cate_id\").value= '';
  \$('#category-product').children().remove();
});

// Search product from category
\$('input[name=\\'productcate\\']').autocomplete({
  source: function( request, response) {
    \$.ajax({
      url: 'index.php?route=extension/module/ocproduct/getProductCategory&user_token=";
        // line 569
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&category_id=' + \$(\"#input-cate_id\").val()+ '&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      data: {
      },
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            image: item['image'],
            label: item['name'],
            value: item['product_id'] 
          }
        }));
        
      }
    });
  },
  select: function(item) {
    \$('input[name=\\'productcate\\']').val('');
    
    \$('#category-product' + item['value']).remove();
    
    \$('#category-product').append('<div id=\"category-product' + item['value'] + '\" class=\"tt-product\"><i class=\"fa fa-times\"></i> ' + '<img src=\"' +item['image']+ '\" alt=\"\"/>' + item['label'] + '<input type=\"hidden\" name=\"productcate[]\" value=\"' + item['value'] + '\" /></div>');  
    
    \$('#category-product').scrollTop(1000);
  }
});
  
\$('#category-product').delegate('.fa-times', 'click', function() {
  \$(this).parent().remove();
});

function GetOptionsSelect() {
    \$('.select-options').hide();
    var ParentForms = document.getElementsByClassName('parent-form');
    for (var j = 0; j < ParentForms.length; j ++){
      var InputChilds = ParentForms[j].getElementsByTagName('input');
      for (var i = 0; i < InputChilds.length; i++) {
            if (InputChilds[i].checked) {
              console.log(id);
              var id = InputChilds[i].id;
              var test = \$('.'+id+'-selected');
              \$(test).show();

            } //end if
 
      } // end for
    };
    
} //end

\$(document).ready(function(){
  GetOptionsSelect(); 
  \$('.list-selection label').on('click',function(){
      \$(this).parent().find('.active').removeClass('active');
      \$(this).addClass('active');
  });

})
";
        // line 627
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 628
            echo "\$('#input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "').summernote({height: 300});
\$('#language";
            // line 629
            echo $this->getAttribute($context["language"], "language_id", array());
            echo " .html-content').hide();
\$('#language";
            // line 630
            echo $this->getAttribute($context["language"], "language_id", array());
            echo " a').click(function(){
  \$('#language";
            // line 631
            echo $this->getAttribute($context["language"], "language_id", array());
            echo " .html-content').slideToggle();
});
\$('#input-title";
            // line 633
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "').parent().parent().parent().css('border-top','2px solid #279CBB');
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 635
        echo "//--></script>
</div>
";
        // line 637
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/ocproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1476 => 637,  1472 => 635,  1464 => 633,  1459 => 631,  1455 => 630,  1451 => 629,  1446 => 628,  1442 => 627,  1381 => 569,  1350 => 541,  1317 => 511,  1293 => 489,  1287 => 487,  1285 => 486,  1281 => 485,  1278 => 484,  1272 => 482,  1270 => 481,  1266 => 480,  1259 => 478,  1250 => 474,  1245 => 472,  1236 => 466,  1230 => 465,  1226 => 464,  1220 => 463,  1214 => 460,  1205 => 454,  1199 => 453,  1195 => 452,  1189 => 451,  1183 => 448,  1174 => 442,  1168 => 441,  1164 => 440,  1158 => 439,  1152 => 436,  1143 => 430,  1137 => 429,  1133 => 428,  1127 => 427,  1119 => 424,  1110 => 418,  1104 => 417,  1100 => 416,  1094 => 415,  1088 => 412,  1085 => 411,  1079 => 406,  1072 => 401,  1065 => 396,  1063 => 395,  1057 => 391,  1055 => 390,  1049 => 386,  1047 => 385,  1040 => 382,  1034 => 377,  1028 => 375,  1026 => 374,  1022 => 373,  1017 => 372,  1011 => 370,  1009 => 369,  1005 => 368,  1000 => 367,  994 => 365,  992 => 364,  988 => 363,  983 => 362,  977 => 360,  975 => 359,  971 => 358,  967 => 357,  962 => 355,  953 => 349,  947 => 348,  943 => 347,  937 => 346,  931 => 343,  922 => 337,  916 => 336,  912 => 335,  906 => 334,  900 => 331,  892 => 326,  887 => 324,  878 => 318,  872 => 317,  868 => 316,  862 => 315,  856 => 312,  849 => 308,  844 => 306,  836 => 301,  831 => 299,  823 => 294,  818 => 292,  809 => 286,  803 => 285,  799 => 284,  793 => 283,  787 => 280,  780 => 276,  775 => 274,  765 => 267,  759 => 266,  755 => 265,  749 => 264,  743 => 261,  734 => 255,  728 => 254,  724 => 253,  718 => 252,  714 => 251,  708 => 250,  702 => 247,  699 => 246,  694 => 242,  678 => 238,  673 => 236,  668 => 235,  664 => 234,  656 => 231,  653 => 230,  649 => 227,  636 => 224,  632 => 223,  629 => 222,  625 => 221,  620 => 219,  612 => 213,  607 => 211,  603 => 210,  599 => 209,  595 => 208,  590 => 207,  585 => 205,  581 => 204,  577 => 203,  573 => 202,  568 => 201,  566 => 200,  562 => 199,  558 => 198,  554 => 197,  550 => 196,  545 => 195,  543 => 194,  539 => 193,  535 => 192,  531 => 191,  527 => 190,  522 => 189,  520 => 188,  516 => 187,  512 => 186,  508 => 185,  504 => 184,  499 => 183,  497 => 182,  491 => 179,  487 => 177,  481 => 170,  476 => 168,  472 => 167,  468 => 166,  464 => 165,  459 => 164,  454 => 162,  450 => 161,  446 => 160,  442 => 159,  437 => 158,  435 => 157,  431 => 156,  427 => 155,  423 => 154,  419 => 153,  414 => 152,  412 => 151,  408 => 150,  404 => 149,  400 => 148,  396 => 147,  391 => 146,  389 => 145,  385 => 144,  381 => 143,  377 => 142,  373 => 141,  368 => 140,  366 => 139,  361 => 137,  356 => 135,  348 => 129,  338 => 125,  334 => 124,  330 => 123,  325 => 122,  321 => 121,  316 => 119,  311 => 117,  299 => 108,  293 => 107,  289 => 106,  283 => 105,  279 => 104,  273 => 103,  267 => 100,  263 => 98,  257 => 96,  255 => 95,  250 => 93,  246 => 92,  241 => 90,  237 => 88,  231 => 83,  222 => 80,  217 => 78,  213 => 77,  208 => 75,  205 => 74,  201 => 73,  196 => 71,  191 => 69,  187 => 67,  178 => 60,  172 => 59,  168 => 58,  162 => 57,  158 => 56,  152 => 55,  146 => 52,  136 => 45,  130 => 44,  126 => 43,  120 => 42,  114 => 39,  108 => 35,  102 => 33,  100 => 32,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-module" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default tt-panel">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal tt-module">*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="control-option width-4">*/
/*               <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*               {% if error_name %}*/
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="control-option">*/
/*             <div class="switch tt-switch">*/
/*               <input type="radio" name="status" class="switch-input" id="status-on" value="1" {% if status == 1 %} checked="checked" {% endif %}/>*/
/*               <label for="status-on" class="switch-label switch-label-on">{{ text_enabled }}</label>*/
/*               <input type="radio" name="status" class="switch-input" id="status-off" value="0" {% if status == 0 %} checked="checked" {% endif %}/>*/
/*               <label for="status-off" class="switch-label switch-label-off">{{ text_disabled }}</label>*/
/*               <span class="switch-selection"></span>*/
/*                   </div>*/
/*             </div>*/
/*           </div>*/
/*       */
/*           <div class="form-group parent-form">*/
/*             <label class="control-label" for="input-option">{{ entry_type }}</label>*/
/*             <div class="control-option">*/
/*               <div class="switch switch-long switch-multi3">*/
/*                 <input type="radio" name="option" class="switch-input" id="option-all" value="0" onClick="GetOptionsSelect();" {% if option == 0 %} checked="checked"{% endif %}/>*/
/*                 <label for="option-all" class="switch-label switch-label-1">{{ entry_type_all }}</label>*/
/*                 <input type="radio" name="option" class="switch-input" id="option-cate" value="1" onClick="GetOptionsSelect();" {% if option == 1 %} checked="checked"{% endif %}/>*/
/*                 <label for="option-cate" class="switch-label switch-label-2">{{ entry_type_cate }}</label>*/
/*                  <input type="radio" name="option" class="switch-input" id="option-auto" value="2" onClick="GetOptionsSelect();" {% if option == 2 %} checked="checked"{% endif %}/>*/
/*                 <label for="option-auto" class="switch-label switch-label-3">{{ entry_type_auto }}</label>*/
/*                 <span class="switch-selection"></span>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*        */
/*           {# -- All product select  #}*/
/*           <div class="option-all-selected select-options">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-product">{{ entry_product }}</label>*/
/*               <div class="control-option width-4">*/
/*                 <input type="text" name="product" value="" placeholder="{{ entry_product }}" id="input-product" class="form-control" />*/
/*                 <div id="featured-product" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                   {% for product in products %}*/
/*           */
/*                   <div id="featured-product{{ product.product_id }}" class="tt-product">*/
/*                   <i class="fa fa-times"></i>*/
/*                   <img src="{{ product.image }}" alt="" />*/
/*                   {{ product.name }}*/
/*             */
/*                   <input type="hidden" name="product[]" value="{{ product.product_id }}" />*/
/*                   </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           {# --------------------------- Categories tab-------------------------- #}*/
/*           <div class="option-cate-selected select-options">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-cate_id">{{ entry_cate_select }}</label>*/
/*               <div class="control-option width-3">*/
/*                 <input type="text" name="cate_name" value="{{ cate_ids.name }}" placeholder="Search category" id="input-cate_name" class="form-control" /><i class="fa fa-times"></i>*/
/*                  <input type="hidden" name="cate_id" value="{{ cate_ids.category_id }}" id="input-cate_id" />*/
/*                </div>*/
/*                {% if error_category %}*/
/*                   <div class="text-danger">{{ error_category }}</div>*/
/*                {% endif %}*/
/*              </div>*/
/*             <div class="form-group parent-form">*/
/*               <label class="control-label" for="input-productfrom">{{ entry_pfrom }}</label>*/
/*               <div class="control-option width-3">            */
/*                 <div class="switch switch-long switch-multi3">*/
/*                   <input type="radio" name="productfrom" class="switch-input" id="productfrom-all" value="1" onClick="GetOptionsSelect();" {% if productfrom == 1 %} checked="checked"{% endif %}/>*/
/*                   <label for="productfrom-all" class="switch-label switch-label-1">{{ entry_pfrom_all }}</label>*/
/*                   <input type="radio" name="productfrom" class="switch-input" id="productfrom-select" value="0" onClick="GetOptionsSelect();" {% if productfrom == 0 %} checked="checked"{% endif %}/>*/
/*                   <label for="productfrom-select" class="switch-label switch-label-2">{{ entry_pfrom_select }}</label>*/
/*                   <input type="radio" name="productfrom" class="switch-input" id="specific-product" value="2" onClick="GetOptionsSelect();" {% if productfrom == 2 %} checked="checked"{% endif %}/>*/
/*                   <label for="specific-product" class="switch-label switch-label-3">{{ entry_specificproduct }}</label>*/
/*                   <span class="switch-selection"></span>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="productfrom-all-selected select-options">*/
/*             </div>*/
/*             <div class="productfrom-select-selected select-options">*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-productcate">{{ entry_product }}</label>*/
/*                 <div class="control-option width-4">*/
/*                   <input type="text" name="productcate" value="" placeholder="{{ entry_product }}" id="input-productcate" class="form-control" />*/
/*                   <div id="category-product" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                     {% for productcate in productcates %}*/
/*                     <div id="category-product{{ productcate.product_id }}" class="tt-product">          */
/*                       <img src="{{ productcate.image }}" alt="" />*/
/*                       {{ productcate.name }}            */
/*                       <input type="hidden" name="productcate[]" value="{{ productcate.product_id }}" />*/
/*                       <i class="fa fa-times"></i>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="specific-product-selected select-options">*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-specific-product">{{ entry_selectspecificproduct }}</label>*/
/*                 <div class="control-option width-3">*/
/*                   <small class="text-for-specificproducts" style="padding: 0 0 10px 0; float: left;">{{ entry_selectspecificproduct_small }}</small>*/
/*                   <select name="input_specific_product" id="input-specific-product" class="form-control">*/
/*                     {% if input_specific_product == 0 %}*/
/*                       <option value="0" selected="selected">{{ entry_new }}</option>*/
/*                       <option value="1">{{ entry_sale }}</option>*/
/*                       <option value="2">{{ entry_bestseller }}</option>*/
/*                       <option value="3">{{ entry_mostview }}</option>*/
/*                       <option value="4">{{ entry_dealproducts }}</option>*/
/*                      {% elseif input_specific_product == 1 %}*/
/*                       <option value="0">{{ entry_new }}</option>*/
/*                       <option value="1" selected="selected">{{ entry_sale }}</option>*/
/*                       <option value="2">{{ entry_bestseller }}</option>*/
/*                       <option value="3">{{ entry_mostview }}</option>*/
/*                       <option value="4">{{ entry_dealproducts }}</option>*/
/*                      {% elseif input_specific_product == 2 %}*/
/*                       <option value="0">{{ entry_new }}</option>*/
/*                       <option value="1">{{ entry_sale }}</option>*/
/*                       <option value="2" selected="selected">{{ entry_bestseller }}</option>*/
/*                       <option value="3">{{ entry_mostview }}</option>*/
/*                       <option value="4">{{ entry_dealproducts }}</option>*/
/*                     {% elseif input_specific_product == 3 %}*/
/*                       <option value="0">{{ entry_new }}</option>*/
/*                       <option value="1">{{ entry_sale }}</option>*/
/*                       <option value="2">{{ entry_bestseller }}</option>*/
/*                       <option value="3" selected="selected">{{ entry_mostview }}</option>*/
/*                       <option value="4">{{ entry_dealproducts }}</option>*/
/*                     {% else %}*/
/*                       <option value="0">{{ entry_new }}</option>*/
/*                       <option value="1">{{ entry_sale }}</option>*/
/*                       <option value="2">{{ entry_bestseller }}</option>*/
/*                       <option value="3">{{ entry_mostview }}</option>*/
/*                       <option value="4" selected="selected">{{ entry_dealproducts }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*      */
/*           {#--------------------------- Auto tab ----------------------- #}*/
/*           <div class="option-auto-selected select-options">*/
/*             <div class="form-group auto-select">*/
/*               <label class="control-label" for="input-autoproduct">{{ entry_product }}</label>*/
/*               <div class="control-option width-2">*/
/*                 <select name="autoproduct" id="input-select" class="form-control">*/
/*                   {% if autoproduct == 0 %}*/
/*                     <option value="0" selected="selected">{{ entry_new }}</option>*/
/*                     <option value="1">{{ entry_sale }}</option>*/
/*                     <option value="2">{{ entry_bestseller }}</option>*/
/*                     <option value="3">{{ entry_mostview }}</option>*/
/*                     <option value="4">{{ entry_dealproducts }}</option>*/
/*                    {% elseif autoproduct == 1 %}*/
/*                     <option value="0">{{ entry_new }}</option>*/
/*                     <option value="1" selected="selected">{{ entry_sale }}</option>*/
/*                     <option value="2">{{ entry_bestseller }}</option>*/
/*                     <option value="3">{{ entry_mostview }}</option>*/
/*                     <option value="4">{{ entry_dealproducts }}</option>*/
/*                    {% elseif autoproduct == 2 %}*/
/*                     <option value="0">{{ entry_new }}</option>*/
/*                     <option value="1">{{ entry_sale }}</option>*/
/*                     <option value="2" selected="selected">{{ entry_bestseller }}</option>*/
/*                     <option value="3">{{ entry_mostview }}</option>*/
/*                     <option value="4">{{ entry_dealproducts }}</option>*/
/*                   {% elseif  autoproduct == 3  %}*/
/*                     <option value="0">{{ entry_new }}</option>*/
/*                     <option value="1">{{ entry_sale }}</option>*/
/*                     <option value="2">{{ entry_bestseller }}</option>*/
/*                     <option value="3" selected="selected">{{ entry_mostview }}</option>*/
/*                     <option value="4">{{ entry_dealproducts }}</option>*/
/*                   {% else %}*/
/*                     <option value="0">{{ entry_new }}</option>*/
/*                     <option value="1">{{ entry_sale }}</option>*/
/*                     <option value="2">{{ entry_bestseller }}</option>*/
/*                     <option value="3">{{ entry_mostview }}</option>*/
/*                     <option value="4" selected="selected">{{ entry_dealproducts }}</option>*/
/*                   {% endif %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*      */
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-row">{{ entry_title }}</label>*/
/*             <div class="control-option width-4">*/
/*               {% for language in languages %}*/
/*                 <div class="input-group">*/
/*                   <span class="input-group-addon">{{ language.name }}</span>*/
/*                   <input type="text" name="title_lang[{{ language.code }}][title]" value="{{ title_lang[language.code].title ? title_lang[language.code].title }}" placeholder="" id="input-title{{ language.language_id }}" class="form-control" />*/
/*                 </div>*/
/*               {% endfor %}*/
/*             </div>*/
/*           </div>*/
/*       {# -----Description------ #}*/
/*       <div class="form-group">*/
/*         <label class="control-label" for="input-description{{ language.language_id }}">{{ entry_description }}</label>*/
/*           <div class="control-control">*/
/*             <div class="tab-content" style="margin: 10px;">*/
/*               {% for language in languages %}*/
/*               <div id="language{{ language.language_id }}">*/
/*                   <a href="javascript:void(0)" class="language-label"><span>{{ language.name }}</span><i class="fa fa-angle-down"></i></a>*/
/*                   <div class="html-content">*/
/*                      <textarea name="module_description[{{ language.language_id }}][description]" placeholder="{{ entry_description }}" id="input-description{{ language.language_id }}" class="form-control summernote">{{ module_description[language.language_id] ? module_description[language.language_id].description }}</textarea>*/
/*                   </div>*/
/*               </div>*/
/*               {% endfor %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {# ----End Description----- #}*/
/*       <div class="form-group">*/
/*         <label class="control-label" for="input-type">{{ entry_product_type }}</label>*/
/*         <div class="control-option width-1">*/
/*           <div class="switch switch-long switch-multi3">*/
/*             <input type="radio" name="type" class="switch-input" id="type-grid" value="0" {% if type == 0 %} checked="checked"{% endif %}/>*/
/*             <label for="type-grid" class="switch-label switch-label-1">{{ entry_grid }}</label>*/
/*             <input type="radio" name="type" class="switch-input" id="type-list" value="1" {% if type == 1 %} checked="checked"{% endif %}/>*/
/*             <label for="type-list" class="switch-label switch-label-2">{{ entry_list }}</label>*/
/*             <input type="radio" name="type" class="switch-input" id="type-other" value="2" {% if type == 2 %} checked="checked"{% endif %}/>*/
/*             <label for="type-other" class="switch-label switch-label-3">{{ entry_other }}</label>*/
/*             <span class="switch-selection"></span>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="form-group parent-form">*/
/*         <label class="control-label" for="input-navigation">{{ entry_slider }}</label>*/
/*         <div class="control-option">    */
/*           <div class="switch switch-bol">*/
/*             <input type="radio" name="slider" class="switch-input" id="slider-on" value="1" onClick="GetOptionsSelect();" {% if slider == 1 %} checked="checked"{% endif %}/>*/
/*             <label for="slider-on" class="switch-label switch-label-on">{{ entry_yes }}</label>*/
/*             <input type="radio" name="slider" class="switch-input" id="slider-off" value="0" onClick="GetOptionsSelect();" {% if slider == 0 %} checked="checked"{% endif %}/>*/
/*             <label for="slider-off" class="switch-label switch-label-off">{{ entry_no }}</label>*/
/*             <span class="switch-selection"></span>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="slider-on-selected select-options">*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-items">{{ entry_item }}</label>*/
/*           <div class="control-option width-1">*/
/*             <input type="text" name="items" value="{{ items }}" placeholder="" id="input-items" class="tt-number-field" />*/
/*           </div>*/
/*         </div>  */
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-auto">{{ entry_auto }}</label>*/
/*           <div class="control-option">*/
/*             <div class="switch switch-bol">*/
/*               <input type="radio" name="auto" class="switch-input" id="auto-on" value="1" {% if auto == 1 %} checked="checked"{% endif %}/>*/
/*               <label for="auto-on" class="switch-label switch-label-on">{{ entry_yes }}</label>*/
/*               <input type="radio" name="auto" class="switch-input" id="auto-off" value="0" {% if auto == 0 %} checked="checked"{% endif %}/>*/
/*               <label for="auto-off" class="switch-label switch-label-off">{{ entry_no }}</label>*/
/*               <span class="switch-selection"></span>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-time">{{ entry_time }}</label>*/
/*           <div class="control-option width-2">*/
/*             <input type="text" name="time" value="{{ time }}" placeholder="" id="input-time" class="tt-number-field" />*/
/*             <span class="suffix">miliseconds</span>*/
/*           </div>*/
/*         </div>  */
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-time">{{ entry_speed }}</label>*/
/*           <div class="control-option width-2">*/
/*             <input type="text" name="speed" value="{{ speed }}" placeholder="" id="input-speed" class="tt-number-field" />*/
/*             <span class="suffix">miliseconds</span>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-row">{{ entry_rows }}</label>*/
/*           <div class="control-option width-1">*/
/*             <input type="text" name="row" value="{{ row }}" placeholder="" id="input-row" class="tt-number-field" />*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-loop">{{ entry_loop }}</label>*/
/*           <div class="control-option">*/
/*             <div class="switch switch-bol">*/
/*               <input type="radio" name="loop" class="switch-input" id="loop-on" value="1" {% if loop == 1 %} checked="checked"{% endif %}/>*/
/*               <label for="loop-on" class="switch-label switch-label-on">{{ entry_yes }}</label>*/
/*               <input type="radio" name="loop" class="switch-input" id="loop-off" value="0" {% if loop == 0 %} checked="checked"{% endif %}/>*/
/*               <label for="loop-off" class="switch-label switch-label-off">{{ entry_no }}</label>*/
/*               <span class="switch-selection"></span>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-time">{{ entry_margin }}</label>*/
/*           <div class="control-option width-2">*/
/*             <input type="text" name="margin" value="{{ margin }}" placeholder="" id="input-margin" class="tt-number-field" />*/
/*             <span class="suffix">pixels</span>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-navigation">{{ entry_navigation }}</label>*/
/*           <div class="control-option">           */
/*             <div class="switch switch-bol">*/
/*             <input type="radio" name="navigation" class="switch-input" id="navigation-on" value="1" {% if navigation == 1 %} checked="checked"{% endif %}/>*/
/*             <label for="navigation-on" class="switch-label switch-label-on">{{ entry_yes }}</label>*/
/*             <input type="radio" name="navigation" class="switch-input" id="navigation-off" value="0" {% if navigation == 0 %} checked="checked"{% endif %}/>*/
/*             <label for="navigation-off" class="switch-label switch-label-off">{{ entry_no }}</label>*/
/*             <span class="switch-selection"></span>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-pagination">{{ entry_pagination }}</label>*/
/*           <div class="control-option">       */
/*             <div class="switch switch-bol">*/
/*             <input type="radio" name="pagination" class="switch-input" id="pagination-on" value="1" {% if pagination == 1 %} checked="checked"{% endif %}/>*/
/*             <label for="pagination-on" class="switch-label switch-label-on">{{ entry_yes }}</label>*/
/*             <input type="radio" name="pagination" class="switch-input" id="pagination-off" value="0" {% if pagination == 0 %}  checked="checked"{% endif %}/>*/
/*             <label for="pagination-off" class="switch-label switch-label-off">{{ entry_no }}</label>*/
/*             <span class="switch-selection"></span>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-width">{{ entry_responsive }}</label>*/
/*           <div class="control-option width-6">*/
/*            <i class="fa fa-desktop"></i> {{ entry_desktop }}*/
/*            <input type="text" name="desktop" value="{{ desktop }}" placeholder="" id="responsive-desktop" class="tt-number-field" />*/
/*             {% if error_width %}*/
/*             <div class="text-danger">{{ error_responsive }}</div>*/
/*             {% endif %}*/
/*             <i class="fa fa-laptop"></i> {{ entry_sdesktop }}*/
/*             <input type="text" name="tablet" value="{{ tablet }}" placeholder="" id="responsive-tablet" class="tt-number-field" />*/
/*             {% if error_width %}*/
/*             <div class="text-danger">{{ error_responsive }}</div>*/
/*             {% endif %}*/
/*             <i class="fa fa-tablet"></i> {{ entry_tablet }}*/
/*             <input type="text" name="mobile" value="{{ mobile }}" placeholder="" id="responsive-mobile" class="tt-number-field" />*/
/*             {% if error_width %}*/
/*             <div class="text-danger">{{ error_responsive }}</div>*/
/*             {% endif %}*/
/*              <i class="fa fa-mobile"></i> {{ entry_mobile }}*/
/*             <input type="text" name="smobile" value="{{ smobile }}" placeholder="" id="responsive-smobile" class="tt-number-field" />*/
/*             {% if error_width %}*/
/*             <div class="text-danger">{{ error_responsive }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="slider-off-selected select-options">*/
/*         <div class="form-group">{# if "Using slider" is false #}*/
/*           <label class="control-label" for="input-row">{{ entry_pprow }}</label>*/
/*           <div class="control-option width-1">*/
/*             <select name="nrow" id="input-nrow" class="form-control">*/
/*               {% if nrow == 0 %}*/
/*                 <option value="0" selected="selected">2</option>*/
/*                 <option value="1">3</option>*/
/*                 <option value="2">4</option>*/
/*                 <option value="3">6</option>*/
/*               {% elseif nrow == 1 %}*/
/*                 <option value="0">2</option>*/
/*                 <option value="1" selected="selected">3</option>*/
/*                 <option value="2">4</option>*/
/*                 <option value="3">6</option>*/
/*               {% elseif nrow == 2 %}*/
/*                 <option value="0">2</option>*/
/*                 <option value="1">3</option>*/
/*                 <option value="2" selected="selected">4</option>*/
/*                 <option value="3">6</option>*/
/*               {% else %}*/
/*                 <option value="0">2</option>*/
/*                 <option value="1">3</option>*/
/*                 <option value="2">4</option>*/
/*                 <option value="3" selected="selected">6</option>*/
/*               {% endif %}*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {# ------------------ #}*/
/*       <div class="form-group">*/
/*         <label class="control-label" for="input-navigation">{{ entry_show_description }}</label>*/
/*         <div class="control-option">*/
/*           <div class="switch switch-bol">*/
/*             <input type="radio" name="description" class="switch-input" id="description-on" value="1" {% if description == 1 %} checked="checked"{% endif %}/>*/
/*             <label for="description-on" class="switch-label switch-label-on">{{ entry_yes }}</label>*/
/*             <input type="radio" name="description" class="switch-input" id="description-off" value="0" <{% if description == 0 %} checked="checked"{% endif %}/>*/
/*             <label for="description-off" class="switch-label switch-label-off">{{ entry_no }}</label>*/
/*             <span class="switch-selection"></span>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label class="control-label" for="input-navigation">{{ entry_countdown }}<small>{{ entry_countdown_small }}</small></label>*/
/*         <div class="control-option">*/
/*           <div class="switch switch-bol">*/
/*             <input type="radio" name="countdown" class="switch-input" id="countdown-on" value="1" {% if countdown == 1 %} checked="checked"{% endif %}/>*/
/*             <label for="countdown-on" class="switch-label switch-label-on">{{ entry_yes }}</label>*/
/*             <input type="radio" name="countdown" class="switch-input" id="countdown-off" value="0" {% if countdown == 0 %} checked="checked"{% endif %}/>*/
/*             <label for="countdown-off" class="switch-label switch-label-off">{{ entry_no }}</label>*/
/*             <span class="switch-selection"></span>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label class="control-label" for="input-navigation">{{ entry_rotator }}</label>   */
/*         <div class="control-option">*/
/*           <div class="switch switch-bol">*/
/*             <input type="radio" name="rotator" class="switch-input" id="rotator-on" value="1" {% if rotator == 1 %} checked="checked"{% endif %}/>*/
/*             <label for="rotator-on" class="switch-label switch-label-on">{{ entry_yes }}</label>*/
/*             <input type="radio" name="rotator" class="switch-input" id="rotator-off" value="0" {% if rotator == 0 %} checked="checked"{% endif %}/>*/
/*             <label for="rotator-off" class="switch-label switch-label-off">{{ entry_no }}</label>*/
/*             <span class="switch-selection"></span>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label class="control-label" for="input-navigation">{{ entry_newlabel }}</label>    */
/*         <div class="control-option">*/
/*           <div class="switch switch-bol">*/
/*             <input type="radio" name="newlabel" class="switch-input" id="newlabel-on" value="1" {% if newlabel == 1 %} checked="checked"{% endif %}/>*/
/*             <label for="newlabel-on" class="switch-label switch-label-on">{{ entry_yes }}</label>*/
/*             <input type="radio" name="newlabel" class="switch-input" id="newlabel-off" value="0" {% if newlabel == 0 %} checked="checked"{% endif %}/>*/
/*             <label for="newlabel-off" class="switch-label switch-label-off">{{ entry_no }}</label>*/
/*             <span class="switch-selection"></span>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label class="control-label" for="input-navigation">{{ entry_salelabel }}</label>   */
/*         <div class="control-option">*/
/*           <div class="switch switch-bol">*/
/*             <input type="radio" name="salelabel" class="switch-input" id="salelabel-on" value="1" {% if salelabel == 1 %} checked="checked"{% endif %}/>*/
/*             <label for="salelabel-on" class="switch-label switch-label-on">{{ entry_yes }}</label>*/
/*             <input type="radio" name="salelabel" class="switch-input" id="salelabel-off" value="0" {% if salelabel == 0 %} checked="checked"{% endif %}/>*/
/*             <label for="salelabel-off" class="switch-label switch-label-off">{{ entry_no }}</label>*/
/*             <span class="switch-selection"></span>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label class="control-label" for="input-limit">{{ entry_limit }}</label>*/
/*         <div class="control-option width-1">*/
/*           <input type="text" name="limit" value="{{ limit }}" placeholder="{{ entry_limit }}" id="input-limit" class="tt-number-field" />*/
/*         </div>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label class="control-label" for="input-width">{{ entry_size }}<small>{{ entry_dessize }}</small></label>*/
/*         <div class="control-option width-2">*/
/*           <input type="text" name="width" value="{{ width }}" placeholder="" id="input-width" class="tt-number-field" />*/
/*           {% if error_width %}*/
/*           <div class="text-danger">{{ error_width }}</div>*/
/*           {% endif %}*/
/*            x*/
/*           <input type="text" name="height" value="{{ height }}" placeholder="" id="input-height" class="tt-number-field" />*/
/*           {% if error_height %}*/
/*           <div class="text-danger">{{ error_height }}</div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/* */
/*     </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet" />*/
/*   <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script> */
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script> */
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script> */
/*     */
/*   <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*   <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/*   <script type="text/javascript"><!--*/
/*   var category_id;*/
/* $('input[name=\'product\']').autocomplete({*/
/*   source: function(request, response) {*/
/*     $.ajax({*/
/*       url: 'index.php?route=extension/module/ocproduct/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/*       dataType: 'json',*/
/*       success: function(json) {*/
/*         response($.map(json, function(item) {*/
/*           return {*/
/*             image: item['image'],*/
/*             label: item['name'],*/
/*             value: item['product_id'] */
/*           }*/
/*         }));*/
/*       }*/
/*     });*/
/*   },*/
/*   select: function(item) {*/
/*     $('input[name=\'product\']').val('');*/
/*     */
/*     $('#featured-product' + item['value']).remove();*/
/*     */
/*     $('#featured-product').append('<div id="featured-product' + item['value'] + '" class="tt-product"><i class="fa fa-times"></i> ' + '<img src="' +item['image']+ '" alt=""/>' + item['label'] + '<input type="hidden" name="product[]" value="' + item['value'] + '" /></div>');  */
/*     */
/*     $('#featured-product').scrollTop(1000);*/
/*   }*/
/* });*/
/* $('#featured-product').delegate('.fa-times', 'click', function() {*/
/*   $(this).parent().remove();*/
/* });*/
/* // Search category*/
/* $('input[name=\'cate_name\']').autocomplete({*/
/*   source: function(request, response) {*/
/*     $.ajax({*/
/*       url: 'index.php?route=extension/module/ocproduct/autocompleteCategory&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/*       dataType: 'json',*/
/*       success: function(json) {*/
/*         response($.map(json, function(item) {*/
/*           return {*/
/*             label: item['name'],*/
/*             value: item['category_id']*/
/*           }*/
/*         }));*/
/*       }*/
/*     });*/
/*   },*/
/*   select: function(item) {  */
/*     document.getElementById("input-cate_name").value= item['label'];  */
/*     document.getElementById("input-cate_id").value= item['value'];  */
/*     $('#featured-productcate').children().remove();*/
/*     }*/
/* });*/
/* $('#input-cate_name').parent().delegate('.fa-times', 'click', function() {*/
/*   document.getElementById("input-cate_name").value= '';*/
/*   document.getElementById("input-cate_id").value= '';*/
/*   $('#category-product').children().remove();*/
/* });*/
/* */
/* // Search product from category*/
/* $('input[name=\'productcate\']').autocomplete({*/
/*   source: function( request, response) {*/
/*     $.ajax({*/
/*       url: 'index.php?route=extension/module/ocproduct/getProductCategory&user_token={{ user_token }}&category_id=' + $("#input-cate_id").val()+ '&filter_name=' +  encodeURIComponent(request),*/
/*       dataType: 'json',*/
/*       data: {*/
/*       },*/
/*       success: function(json) {*/
/*         response($.map(json, function(item) {*/
/*           return {*/
/*             image: item['image'],*/
/*             label: item['name'],*/
/*             value: item['product_id'] */
/*           }*/
/*         }));*/
/*         */
/*       }*/
/*     });*/
/*   },*/
/*   select: function(item) {*/
/*     $('input[name=\'productcate\']').val('');*/
/*     */
/*     $('#category-product' + item['value']).remove();*/
/*     */
/*     $('#category-product').append('<div id="category-product' + item['value'] + '" class="tt-product"><i class="fa fa-times"></i> ' + '<img src="' +item['image']+ '" alt=""/>' + item['label'] + '<input type="hidden" name="productcate[]" value="' + item['value'] + '" /></div>');  */
/*     */
/*     $('#category-product').scrollTop(1000);*/
/*   }*/
/* });*/
/*   */
/* $('#category-product').delegate('.fa-times', 'click', function() {*/
/*   $(this).parent().remove();*/
/* });*/
/* */
/* function GetOptionsSelect() {*/
/*     $('.select-options').hide();*/
/*     var ParentForms = document.getElementsByClassName('parent-form');*/
/*     for (var j = 0; j < ParentForms.length; j ++){*/
/*       var InputChilds = ParentForms[j].getElementsByTagName('input');*/
/*       for (var i = 0; i < InputChilds.length; i++) {*/
/*             if (InputChilds[i].checked) {*/
/*               console.log(id);*/
/*               var id = InputChilds[i].id;*/
/*               var test = $('.'+id+'-selected');*/
/*               $(test).show();*/
/* */
/*             } //end if*/
/*  */
/*       } // end for*/
/*     };*/
/*     */
/* } //end*/
/* */
/* $(document).ready(function(){*/
/*   GetOptionsSelect(); */
/*   $('.list-selection label').on('click',function(){*/
/*       $(this).parent().find('.active').removeClass('active');*/
/*       $(this).addClass('active');*/
/*   });*/
/* */
/* })*/
/* {% for language in languages %}*/
/* $('#input-description{{ language.language_id }}').summernote({height: 300});*/
/* $('#language{{ language.language_id }} .html-content').hide();*/
/* $('#language{{ language.language_id }} a').click(function(){*/
/*   $('#language{{ language.language_id }} .html-content').slideToggle();*/
/* });*/
/* $('#input-title{{ language.language_id }}').parent().parent().parent().css('border-top','2px solid #279CBB');*/
/* {% endfor %}*/
/* //--></script>*/
/* </div>*/
/* {{ footer }}*/
