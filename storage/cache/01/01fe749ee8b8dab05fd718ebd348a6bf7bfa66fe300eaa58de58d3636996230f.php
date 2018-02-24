<?php

/* extension/module/octabproducts.twig */
class __TwigTemplate_38ae5c8d87f3e06a559542d99c868c2818806332927674a68e1a732327da17bf extends Twig_Template
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
          
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-row\">";
        // line 52
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "</label>
            <div class=\"control-option width-4\">
              ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 55
            echo "                <div class=\"input-group\">
                  <span class=\"input-group-addon\">";
            // line 56
            echo $this->getAttribute($context["language"], "name", array());
            echo "</span>
                  <input type=\"text\" name=\"title_lang[";
            // line 57
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
        // line 60
        echo "            </div>
          </div>
      ";
        // line 63
        echo "      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-description";
        // line 64
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "language_id", array());
        echo "\">";
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "</label>
          <div class=\"control-control\">
            <div class=\"tabdes-content\" style=\"margin: 10px;\">
              ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 68
            echo "              <div id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                  <a href=\"javascript:void(0)\" class=\"language-label\"><span>";
            // line 69
            echo $this->getAttribute($context["language"], "name", array());
            echo "</span><i class=\"fa fa-angle-down\"></i></a>
                  <div class=\"html-content\">
                     <textarea name=\"module_description[";
            // line 71
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
        // line 75
        echo "          </div>
        </div>
      </div>
      ";
        // line 79
        echo "      <div class=\"form-group\" style=\"border-top: 2px solid #279CBB;\">
        <label class=\"control-label\" for=\"input-type\">";
        // line 80
        echo (isset($context["entry_product_type"]) ? $context["entry_product_type"] : null);
        echo "</label>
        <div class=\"control-option width-1\">
          <div class=\"switch switch-long switch-multi3\">
            <input type=\"radio\" name=\"type\" class=\"switch-input\" id=\"type-grid\" value=\"0\" ";
        // line 83
        if (((isset($context["type"]) ? $context["type"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"type-grid\" class=\"switch-label switch-label-1\">";
        // line 84
        echo (isset($context["entry_grid"]) ? $context["entry_grid"] : null);
        echo "</label>
            <input type=\"radio\" name=\"type\" class=\"switch-input\" id=\"type-list\" value=\"1\" ";
        // line 85
        if (((isset($context["type"]) ? $context["type"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"type-list\" class=\"switch-label switch-label-2\">";
        // line 86
        echo (isset($context["entry_list"]) ? $context["entry_list"] : null);
        echo "</label>
            <input type=\"radio\" name=\"type\" class=\"switch-input\" id=\"type-other\" value=\"2\" ";
        // line 87
        if (((isset($context["type"]) ? $context["type"] : null) == 2)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"type-other\" class=\"switch-label switch-label-3\">";
        // line 88
        echo (isset($context["entry_other"]) ? $context["entry_other"] : null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group parent-form\"  style=\"border-top: 2px solid #279CBB;\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 94
        echo (isset($context["entry_slider"]) ? $context["entry_slider"] : null);
        echo "</label>
        <div class=\"control-option\">    
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"slider\" class=\"switch-input\" id=\"slider-on\" value=\"1\" onClick=\"GetOptionsSelect();\" ";
        // line 97
        if (((isset($context["slider"]) ? $context["slider"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"slider-on\" class=\"switch-label switch-label-on\">";
        // line 98
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
            <input type=\"radio\" name=\"slider\" class=\"switch-input\" id=\"slider-off\" value=\"0\" onClick=\"GetOptionsSelect();\" ";
        // line 99
        if (((isset($context["slider"]) ? $context["slider"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"slider-off\" class=\"switch-label switch-label-off\">";
        // line 100
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"slider-on-selected select-options\">
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-items\">";
        // line 107
        echo (isset($context["entry_item"]) ? $context["entry_item"] : null);
        echo "</label>
          <div class=\"control-option width-1\">
            <input type=\"text\" name=\"items\" value=\"";
        // line 109
        echo (isset($context["items"]) ? $context["items"] : null);
        echo "\" placeholder=\"\" id=\"input-items\" class=\"tt-number-field\" />
          </div>
        </div>  
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-row\">";
        // line 113
        echo (isset($context["entry_rows"]) ? $context["entry_rows"] : null);
        echo "</label>
          <div class=\"control-option width-1\">
            <input type=\"text\" name=\"row\" value=\"";
        // line 115
        echo (isset($context["row"]) ? $context["row"] : null);
        echo "\" placeholder=\"\" id=\"input-row\" class=\"tt-number-field\" />
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-loop\">";
        // line 119
        echo (isset($context["entry_loop"]) ? $context["entry_loop"] : null);
        echo "</label>
          <div class=\"control-option\">
            <div class=\"switch switch-bol\">
              <input type=\"radio\" name=\"loop\" class=\"switch-input\" id=\"loop-on\" value=\"1\" ";
        // line 122
        if (((isset($context["loop"]) ? $context["loop"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
              <label for=\"loop-on\" class=\"switch-label switch-label-on\">";
        // line 123
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
              <input type=\"radio\" name=\"loop\" class=\"switch-input\" id=\"loop-off\" value=\"0\" ";
        // line 124
        if (((isset($context["loop"]) ? $context["loop"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
              <label for=\"loop-off\" class=\"switch-label switch-label-off\">";
        // line 125
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
              <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-time\">";
        // line 131
        echo (isset($context["entry_margin"]) ? $context["entry_margin"] : null);
        echo "</label>
          <div class=\"control-option width-2\">
            <input type=\"text\" name=\"margin\" value=\"";
        // line 133
        echo (isset($context["margin"]) ? $context["margin"] : null);
        echo "\" placeholder=\"\" id=\"input-margin\" class=\"tt-number-field\" />
            <span class=\"suffix\">pixels</span>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-auto\">";
        // line 138
        echo (isset($context["entry_auto"]) ? $context["entry_auto"] : null);
        echo "</label>
          <div class=\"control-option\">
            <div class=\"switch switch-bol\">
              <input type=\"radio\" name=\"auto\" class=\"switch-input\" id=\"auto-on\" value=\"1\" ";
        // line 141
        if (((isset($context["auto"]) ? $context["auto"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
              <label for=\"auto-on\" class=\"switch-label switch-label-on\">";
        // line 142
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
              <input type=\"radio\" name=\"auto\" class=\"switch-input\" id=\"auto-off\" value=\"0\" ";
        // line 143
        if (((isset($context["auto"]) ? $context["auto"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
              <label for=\"auto-off\" class=\"switch-label switch-label-off\">";
        // line 144
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
              <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-time\">";
        // line 150
        echo (isset($context["entry_time"]) ? $context["entry_time"] : null);
        echo "</label>
          <div class=\"control-option width-2\">
            <input type=\"text\" name=\"time\" value=\"";
        // line 152
        echo (isset($context["time"]) ? $context["time"] : null);
        echo "\" placeholder=\"\" id=\"input-time\" class=\"tt-number-field\" />
            <span class=\"suffix\">miliseconds</span>
          </div>
        </div>  
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-time\">";
        // line 157
        echo (isset($context["entry_speed"]) ? $context["entry_speed"] : null);
        echo "</label>
          <div class=\"control-option width-2\">
            <input type=\"text\" name=\"speed\" value=\"";
        // line 159
        echo (isset($context["speed"]) ? $context["speed"] : null);
        echo "\" placeholder=\"\" id=\"input-speed\" class=\"tt-number-field\" />
            <span class=\"suffix\">miliseconds</span>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-navigation\">";
        // line 164
        echo (isset($context["entry_navigation"]) ? $context["entry_navigation"] : null);
        echo "</label>
          <div class=\"control-option\">           
            <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"navigation\" class=\"switch-input\" id=\"navigation-on\" value=\"1\" ";
        // line 167
        if (((isset($context["navigation"]) ? $context["navigation"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"navigation-on\" class=\"switch-label switch-label-on\">";
        // line 168
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
            <input type=\"radio\" name=\"navigation\" class=\"switch-input\" id=\"navigation-off\" value=\"0\" ";
        // line 169
        if (((isset($context["navigation"]) ? $context["navigation"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"navigation-off\" class=\"switch-label switch-label-off\">";
        // line 170
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
            <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-pagination\">";
        // line 176
        echo (isset($context["entry_pagination"]) ? $context["entry_pagination"] : null);
        echo "</label>
          <div class=\"control-option\">       
            <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"pagination\" class=\"switch-input\" id=\"pagination-on\" value=\"1\" ";
        // line 179
        if (((isset($context["pagination"]) ? $context["pagination"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"pagination-on\" class=\"switch-label switch-label-on\">";
        // line 180
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
            <input type=\"radio\" name=\"pagination\" class=\"switch-input\" id=\"pagination-off\" value=\"0\" ";
        // line 181
        if (((isset($context["pagination"]) ? $context["pagination"] : null) == 0)) {
            echo "  checked=\"checked\"";
        }
        echo "/>
            <label for=\"pagination-off\" class=\"switch-label switch-label-off\">";
        // line 182
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
            <span class=\"switch-selection\"></span>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-width\">";
        // line 188
        echo (isset($context["entry_responsive"]) ? $context["entry_responsive"] : null);
        echo "</label>
          <div class=\"control-option width-6\">
           <i class=\"fa fa-desktop\"></i> ";
        // line 190
        echo (isset($context["entry_desktop"]) ? $context["entry_desktop"] : null);
        echo "
           <input type=\"text\" name=\"desktop\" value=\"";
        // line 191
        echo (isset($context["desktop"]) ? $context["desktop"] : null);
        echo "\" placeholder=\"\" id=\"responsive-desktop\" class=\"tt-number-field\" />
            ";
        // line 192
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            // line 193
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_responsive"]) ? $context["error_responsive"] : null);
            echo "</div>
            ";
        }
        // line 195
        echo "            <i class=\"fa fa-laptop\"></i> ";
        echo (isset($context["entry_sdesktop"]) ? $context["entry_sdesktop"] : null);
        echo "
            <input type=\"text\" name=\"tablet\" value=\"";
        // line 196
        echo (isset($context["tablet"]) ? $context["tablet"] : null);
        echo "\" placeholder=\"\" id=\"responsive-tablet\" class=\"tt-number-field\" />
            ";
        // line 197
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            // line 198
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_responsive"]) ? $context["error_responsive"] : null);
            echo "</div>
            ";
        }
        // line 200
        echo "            <i class=\"fa fa-tablet\"></i> ";
        echo (isset($context["entry_tablet"]) ? $context["entry_tablet"] : null);
        echo "
            <input type=\"text\" name=\"mobile\" value=\"";
        // line 201
        echo (isset($context["mobile"]) ? $context["mobile"] : null);
        echo "\" placeholder=\"\" id=\"responsive-mobile\" class=\"tt-number-field\" />
            ";
        // line 202
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            // line 203
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_responsive"]) ? $context["error_responsive"] : null);
            echo "</div>
            ";
        }
        // line 205
        echo "             <i class=\"fa fa-mobile\"></i> ";
        echo (isset($context["entry_mobile"]) ? $context["entry_mobile"] : null);
        echo "
            <input type=\"text\" name=\"smobile\" value=\"";
        // line 206
        echo (isset($context["smobile"]) ? $context["smobile"] : null);
        echo "\" placeholder=\"\" id=\"responsive-smobile\" class=\"tt-number-field\" />
          </div>
        </div>
      </div>
      <div class=\"slider-off-selected select-options\">
        <div class=\"form-group\">";
        // line 212
        echo "          <label class=\"control-label\" for=\"input-row\">";
        echo (isset($context["entry_pprow"]) ? $context["entry_pprow"] : null);
        echo "</label>
          <div class=\"control-option width-1\">
            <select name=\"nrow\" id=\"input-nrow\" class=\"form-control\">
              ";
        // line 215
        if (((isset($context["nrow"]) ? $context["nrow"] : null) == 0)) {
            // line 216
            echo "                <option value=\"0\" selected=\"select-options\">2</option>
                <option value=\"1\">3</option>
                <option value=\"2\">4</option>
                <option value=\"3\">6</option>
              ";
        } elseif ((        // line 220
(isset($context["nrow"]) ? $context["nrow"] : null) == 1)) {
            // line 221
            echo "                <option value=\"0\">2</option>
                <option value=\"1\" selected=\"select-options\">3</option>
                <option value=\"2\">4</option>
                <option value=\"3\">6</option>
              ";
        } elseif ((        // line 225
(isset($context["nrow"]) ? $context["nrow"] : null) == 2)) {
            // line 226
            echo "                <option value=\"0\">2</option>
                <option value=\"1\">3</option>
                <option value=\"2\" selected=\"select-options\">4</option>
                <option value=\"3\">6</option>
              ";
        } else {
            // line 231
            echo "                <option value=\"0\">2</option>
                <option value=\"1\">3</option>
                <option value=\"2\">4</option>
                <option value=\"3\" selected=\"select-options\">6</option>
              ";
        }
        // line 236
        echo "            </select>
          </div>
        </div>
      </div>
      ";
        // line 241
        echo "      <div class=\"form-group\"  style=\"border-top: 2px solid #279CBB;\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 242
        echo (isset($context["entry_show_description"]) ? $context["entry_show_description"] : null);
        echo "</label>
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"description\" class=\"switch-input\" id=\"description-on\" value=\"1\" ";
        // line 245
        if (((isset($context["description"]) ? $context["description"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"description-on\" class=\"switch-label switch-label-on\">";
        // line 246
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
            <input type=\"radio\" name=\"description\" class=\"switch-input\" id=\"description-off\" value=\"0\" <";
        // line 247
        if (((isset($context["description"]) ? $context["description"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"description-off\" class=\"switch-label switch-label-off\">";
        // line 248
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 254
        echo (isset($context["entry_countdown"]) ? $context["entry_countdown"] : null);
        echo "<small>";
        echo (isset($context["entry_countdown_small"]) ? $context["entry_countdown_small"] : null);
        echo "</small></label>
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"countdown\" class=\"switch-input\" id=\"countdown-on\" value=\"1\" ";
        // line 257
        if (((isset($context["countdown"]) ? $context["countdown"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"countdown-on\" class=\"switch-label switch-label-on\">";
        // line 258
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
            <input type=\"radio\" name=\"countdown\" class=\"switch-input\" id=\"countdown-off\" value=\"0\" ";
        // line 259
        if (((isset($context["countdown"]) ? $context["countdown"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"countdown-off\" class=\"switch-label switch-label-off\">";
        // line 260
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 266
        echo (isset($context["entry_rotator"]) ? $context["entry_rotator"] : null);
        echo "</label>   
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"rotator\" class=\"switch-input\" id=\"rotator-on\" value=\"1\" ";
        // line 269
        if (((isset($context["rotator"]) ? $context["rotator"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"rotator-on\" class=\"switch-label switch-label-on\">";
        // line 270
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
            <input type=\"radio\" name=\"rotator\" class=\"switch-input\" id=\"rotator-off\" value=\"0\" ";
        // line 271
        if (((isset($context["rotator"]) ? $context["rotator"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"rotator-off\" class=\"switch-label switch-label-off\">";
        // line 272
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 278
        echo (isset($context["entry_newlabel"]) ? $context["entry_newlabel"] : null);
        echo "</label>    
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"newlabel\" class=\"switch-input\" id=\"newlabel-on\" value=\"1\" ";
        // line 281
        if (((isset($context["newlabel"]) ? $context["newlabel"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"newlabel-on\" class=\"switch-label switch-label-on\">";
        // line 282
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
            <input type=\"radio\" name=\"newlabel\" class=\"switch-input\" id=\"newlabel-off\" value=\"0\" ";
        // line 283
        if (((isset($context["newlabel"]) ? $context["newlabel"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"newlabel-off\" class=\"switch-label switch-label-off\">";
        // line 284
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-navigation\">";
        // line 290
        echo (isset($context["entry_salelabel"]) ? $context["entry_salelabel"] : null);
        echo "</label>   
        <div class=\"control-option\">
          <div class=\"switch switch-bol\">
            <input type=\"radio\" name=\"salelabel\" class=\"switch-input\" id=\"salelabel-on\" value=\"1\" ";
        // line 293
        if (((isset($context["salelabel"]) ? $context["salelabel"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"salelabel-on\" class=\"switch-label switch-label-on\">";
        // line 294
        echo (isset($context["entry_yes"]) ? $context["entry_yes"] : null);
        echo "</label>
            <input type=\"radio\" name=\"salelabel\" class=\"switch-input\" id=\"salelabel-off\" value=\"0\" ";
        // line 295
        if (((isset($context["salelabel"]) ? $context["salelabel"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
            <label for=\"salelabel-off\" class=\"switch-label switch-label-off\">";
        // line 296
        echo (isset($context["entry_no"]) ? $context["entry_no"] : null);
        echo "</label>
            <span class=\"switch-selection\"></span>
          </div>
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-limit\">";
        // line 302
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "</label>
        <div class=\"control-option width-1\">
          <input type=\"text\" name=\"limit\" value=\"";
        // line 304
        echo (isset($context["limit"]) ? $context["limit"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "\" id=\"input-limit\" class=\"tt-number-field\" />
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-width\">";
        // line 308
        echo (isset($context["entry_size"]) ? $context["entry_size"] : null);
        echo "<small>";
        echo (isset($context["entry_dessize"]) ? $context["entry_dessize"] : null);
        echo "</small></label>
        <div class=\"control-option width-2\">
          <input type=\"text\" name=\"width\" value=\"";
        // line 310
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\" placeholder=\"\" id=\"input-width\" class=\"tt-number-field\" />
          ";
        // line 311
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            // line 312
            echo "          <div class=\"text-danger\">";
            echo (isset($context["error_width"]) ? $context["error_width"] : null);
            echo "</div>
          ";
        }
        // line 314
        echo "           x
          <input type=\"text\" name=\"height\" value=\"";
        // line 315
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\" placeholder=\"\" id=\"input-height\" class=\"tt-number-field\" />
          ";
        // line 316
        if ((isset($context["error_height"]) ? $context["error_height"] : null)) {
            // line 317
            echo "          <div class=\"text-danger\">";
            echo (isset($context["error_height"]) ? $context["error_height"] : null);
            echo "</div>
          ";
        }
        // line 319
        echo "        </div>
      </div>



      <div class=\"tabs-container\">
          ";
        // line 325
        $context["tab_id"] = 0;
        // line 326
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["octabs"]) ? $context["octabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["octab"]) {
            // line 327
            echo "          <div class=\"tab-container\">
          <div class=\"tab-heading\">Tab-";
            // line 328
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "<span class=\"delete_tab\"><i class=\"fa fa-times\"></i>";
            echo (isset($context["entry_deletetab"]) ? $context["entry_deletetab"] : null);
            echo "</span></div>
          <div class=\"tab-content\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-row\">";
            // line 331
            echo (isset($context["entry_overwritetitle"]) ? $context["entry_overwritetitle"] : null);
            echo "</label>
              <div class=\"control-option width-4\">
                ";
            // line 333
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 334
                echo "                  <div class=\"input-group\">
                    <span class=\"input-group-addon\">";
                // line 335
                echo $this->getAttribute($context["language"], "name", array());
                echo "</span>
                    <input type=\"text\" name=\"octab[";
                // line 336
                echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
                echo "][tab_name][";
                echo $this->getAttribute($context["language"], "code", array());
                echo "][title]\" value=\"";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($context["octab"], "tab_name", array()), $this->getAttribute($context["language"], "code", array()), array(), "array"), "title", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["octab"], "tab_name", array()), $this->getAttribute($context["language"], "code", array()), array(), "array"), "title", array())) : (""));
                echo "\" placeholder=\"\" id=\"input-title";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "-";
                echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
                echo "\" class=\"form-control\" />
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 339
            echo "              </div>
            </div>
            <div class=\"form-group parent-form\">
              <label class=\"control-label\" for=\"input-option\">";
            // line 342
            echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
            echo "</label>
              <div class=\"control-option\">
              <div class=\"switch switch-long switch-multi3\">
                <input type=\"radio\" name=\"octab[";
            // line 345
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "][option]\" class=\"switch-input switch-input-1\" id=\"option-all-";
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" onClick=\"GetOptionsSelect();\" value=\"0\" ";
            if (($this->getAttribute($context["octab"], "option", array()) == 0)) {
                echo "checked=\"checked\"";
            }
            echo "/>
                <label for=\"option-all-";
            // line 346
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" class=\"switch-label switch-label-1\" >";
            echo (isset($context["entry_type_all"]) ? $context["entry_type_all"] : null);
            echo "</label>
                <input type=\"radio\" name=\"octab[";
            // line 347
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "][option]\" class=\"switch-input switch-input-2\" onClick=\"GetOptionsSelect();\" id=\"option-cate-";
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["octab"], "option", array()) == 1)) {
                echo "checked=\"checked\"";
            }
            echo "/>
                <label for=\"option-cate-";
            // line 348
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" class=\"switch-label switch-label-2\">";
            echo (isset($context["entry_type_cate"]) ? $context["entry_type_cate"] : null);
            echo "</label>
                <input type=\"radio\" name=\"octab[";
            // line 349
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "][option]\" class=\"switch-input switch-input-3\" onClick=\"GetOptionsSelect();\" id=\"option-auto-";
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" value=\"2\" ";
            if (($this->getAttribute($context["octab"], "option", array()) == 2)) {
                echo "checked=\"checked\"";
            }
            echo "/>
                <label for=\"option-auto-";
            // line 350
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" class=\"switch-label switch-label-3\">";
            echo (isset($context["entry_type_auto"]) ? $context["entry_type_auto"] : null);
            echo "</label>
                <span class=\"switch-selection\"></span>
              </div>
              </div>
            </div>

            <div class=\"option-all-";
            // line 356
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "-selected select-options\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-productall-";
            // line 358
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\">";
            echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
            echo "</label>
              <div class=\"control-option width-4\">
                <input type=\"text\" name=\"octab[";
            // line 360
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "][productall]\" value=\"\" placeholder=\"";
            echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
            echo "\" id=\"input-productall-";
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" class=\"form-control\" />
                <div id=\"featured-product-";
            // line 361
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                  ";
            // line 362
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["octab"], "productalls", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo " 
                  <div id=\"featured-product";
                // line 363
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "\" class=\"tt-product\">
                  <i class=\"fa fa-times\"></i>
                  <img src=\"";
                // line 365
                echo $this->getAttribute($context["product"], "image", array());
                echo "\" alt=\"\" />
                  ";
                // line 366
                echo $this->getAttribute($context["product"], "name", array());
                echo "     
                  <input type=\"hidden\" name=\"octab[";
                // line 367
                echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
                echo "][productall][]\" value=\"";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "  \" />
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 370
            echo "                </div>
              </div>
            </div>
          </div>
          <!--------------------------- Categories tab-------------------------->
          <div class=\"option-cate-";
            // line 375
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "-selected select-options\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-cate_id-";
            // line 377
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\">";
            echo (isset($context["entry_cate_select"]) ? $context["entry_cate_select"] : null);
            echo "</label>
              <div class=\"control-option width-3\">
                <input type=\"text\" name=\"octab[";
            // line 379
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "][cate_name]\" value=\"";
            echo $this->getAttribute($context["octab"], "cate_name", array());
            echo "\" placeholder=\"Search category\" id=\"input-cate_name-";
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" class=\"form-control input-cate_name\" /><i class=\"fa fa-times\"></i>
              <input type=\"hidden\" name=\"octab[";
            // line 380
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "][cate_id]\" value=\"";
            echo $this->getAttribute($context["octab"], "cate_id", array());
            echo "\" id=\"input-cate_id-";
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" />
            </div>
            </div>
             <div class=\"form-group parent-form\">
              <label class=\"control-label\" for=\"input-productfrom-";
            // line 384
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\">";
            echo (isset($context["entry_pfrom"]) ? $context["entry_pfrom"] : null);
            echo "</label>
              <div class=\"control-option width-3\">            
                <div class=\"switch switch-long switch-multi3\">
                <input type=\"radio\" name=\"octab[";
            // line 387
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "][productfrom]\" class=\"switch-input\" id=\"productfrom-all-";
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" value=\"1\" onClick=\"GetOptionsSelect();\" ";
            if (($this->getAttribute($context["octab"], "productfrom", array()) == 1)) {
                echo "checked=\"checked\"";
            }
            echo "/>
                <label for=\"productfrom-all-";
            // line 388
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" class=\"switch-label switch-label-1\">";
            echo (isset($context["entry_pfrom_all"]) ? $context["entry_pfrom_all"] : null);
            echo "</label>
                <input type=\"radio\" name=\"octab[";
            // line 389
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "][productfrom]\" class=\"switch-input\" id=\"productfrom-select-";
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" value=\"0\" onClick=\"GetOptionsSelect();\" ";
            if (($this->getAttribute($context["octab"], "productfrom", array()) == 0)) {
                echo "checked=\"checked\"";
            }
            echo "/>
                <label for=\"productfrom-select-";
            // line 390
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" class=\"switch-label switch-label-2\">";
            echo (isset($context["entry_pfrom_select"]) ? $context["entry_pfrom_select"] : null);
            echo "</label>
                <input type=\"radio\" name=\"octab[";
            // line 391
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "][productfrom]\" class=\"switch-input\" id=\"productfrom-specific-";
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" value=\"2\" onClick=\"GetOptionsSelect();\" ";
            if (($this->getAttribute($context["octab"], "productfrom", array()) == 2)) {
                echo "checked=\"checked\"";
            }
            echo "/>
                <label for=\"productfrom-specific-";
            // line 392
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" class=\"switch-label switch-label-3\">";
            echo (isset($context["entry_specificproduct"]) ? $context["entry_specificproduct"] : null);
            echo "</label>
                <span class=\"switch-selection\"></span>
                 
              </div>
              </div>
            </div>
            <div class=\"productfrom-all-";
            // line 398
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "-selected select-options\">
              <!-- <small class=\"text-for-allproducts\" style=\"padding: 10px 0; float: left;\"><?php echo \$entry_textall; ?></small> -->
            </div>
            <div class=\"productfrom-select-";
            // line 401
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "-selected select-options\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-productcate-";
            // line 403
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\">";
            echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
            echo "</label>
                <div class=\"control-option width-4\">
                  <input type=\"text\" name=\"octab[";
            // line 405
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "][productcate]\" value=\"\" placeholder=\"";
            echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
            echo "\" id=\"input-productcate-";
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" class=\"form-control\" />
                  <div id=\"category-product-";
            // line 406
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
            // line 407
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["octab"], "productcates", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["productcate"]) {
                echo "   
                    <div id=\"category-product";
                // line 408
                echo $this->getAttribute($context["productcate"], "product_id", array());
                echo "\" class=\"tt-product\">       
                    <img src=\"";
                // line 409
                echo $this->getAttribute($context["productcate"], "image", array());
                echo "\" alt=\"\" /> 
                    ";
                // line 410
                echo $this->getAttribute($context["productcate"], "name", array());
                echo "      
                    <input type=\"hidden\" name=\"octab[";
                // line 411
                echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
                echo "][productcate][]\" value=\"";
                echo $this->getAttribute($context["productcate"], "product_id", array());
                echo "\" />
                    <i class=\"fa fa-times\"></i>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productcate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 415
            echo "                  </div>
                </div>
              </div>
            </div>
            <div class=\"productfrom-specific-";
            // line 419
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "-selected select-options\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-specific-product-";
            // line 421
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\">";
            echo (isset($context["entry_selectspecificproduct"]) ? $context["entry_selectspecificproduct"] : null);
            echo "</label>
                <div class=\"control-option width-3\">
                 <small class=\"text-for-specificproducts\" style=\"padding: 0 0 10px 0; float: left;\">";
            // line 423
            echo (isset($context["entry_selectspecificproduct_small"]) ? $context["entry_selectspecificproduct_small"] : null);
            echo "</small>
                  <select name=\"octab[";
            // line 424
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "][input_specific_product]\" id=\"input-specific-product-";
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" class=\"form-control\">
                    ";
            // line 425
            if (($this->getAttribute($context["octab"], "input_specific_product", array()) == 0)) {
                // line 426
                echo "                    <option value=\"0\" selected=\"select-options\">";
                echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
                echo "</option>
                    <option value=\"1\">";
                // line 427
                echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
                echo "</option>
                    <option value=\"2\">";
                // line 428
                echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
                echo "</option>
                    <option value=\"3\">";
                // line 429
                echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
                echo "</option>
                    <option value=\"4\">";
                // line 430
                echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
                echo "</option>
                    ";
            } elseif (($this->getAttribute(            // line 431
$context["octab"], "input_specific_product", array()) == 1)) {
                // line 432
                echo "                    <option value=\"0\">";
                echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
                echo "</option>
                    <option value=\"1\" selected=\"select-options\">";
                // line 433
                echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
                echo "</option>
                    <option value=\"2\">";
                // line 434
                echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
                echo "</option>
                    <option value=\"3\">";
                // line 435
                echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
                echo "</option>
                    <option value=\"4\">";
                // line 436
                echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
                echo "</option>
                    ";
            } elseif (($this->getAttribute(            // line 437
$context["octab"], "input_specific_product", array()) == 2)) {
                // line 438
                echo "                    <option value=\"0\">";
                echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
                echo "</option>
                    <option value=\"1\">";
                // line 439
                echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
                echo "</option>
                    <option value=\"2\" selected=\"select-options\">";
                // line 440
                echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
                echo "</option>
                    <option value=\"3\">";
                // line 441
                echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
                echo "</option>
                    <option value=\"4\">";
                // line 442
                echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
                echo "</option>
                    ";
            } elseif (($this->getAttribute(            // line 443
$context["octab"], "input_specific_product", array()) == 3)) {
                // line 444
                echo "                    <option value=\"0\">";
                echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
                echo "</option>
                    <option value=\"1\">";
                // line 445
                echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
                echo "</option>
                    <option value=\"2\">";
                // line 446
                echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
                echo "</option>
                    <option value=\"3\" selected=\"select-options\">";
                // line 447
                echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
                echo "</option>
                    <option value=\"4\">";
                // line 448
                echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
                echo "</option>
                    ";
            } else {
                // line 450
                echo "                    <option value=\"0\">";
                echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
                echo "</option>
                    <option value=\"1\">";
                // line 451
                echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
                echo "</option>
                    <option value=\"2\">";
                // line 452
                echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
                echo "</option>
                    <option value=\"3\">";
                // line 453
                echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
                echo "</option>
                    <option value=\"4\" selected=\"select-options\">";
                // line 454
                echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
                echo "</option>
                    ";
            }
            // line 456
            echo "                  </select>
                </div>
              </div>
            </div>
          </div>
          <!--------------------------- Auto tab ----------------------- -->
          <div class=\"option-auto-";
            // line 462
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "-selected select-options\">
            <div class=\"form-group auto-select\">
              <label class=\"control-label\" for=\"input-autoproduct-";
            // line 464
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\">";
            echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
            echo "</label>
              <div class=\"control-option width-2\">
                <select name=\"octab[";
            // line 466
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "][autoproduct]\" id=\"input-autoproduct-";
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "\" class=\"form-control\">
                  ";
            // line 467
            if (($this->getAttribute($context["octab"], "autoproduct", array()) == 0)) {
                // line 468
                echo "                  <option value=\"0\" selected=\"select-options\">";
                echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
                echo "</option>
                  <option value=\"1\">";
                // line 469
                echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
                echo "</option>
                  <option value=\"2\">";
                // line 470
                echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
                echo "</option>
                  <option value=\"3\">";
                // line 471
                echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
                echo "</option>
                  <option value=\"4\">";
                // line 472
                echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
                echo "</option>
                  ";
            } elseif (($this->getAttribute(            // line 473
$context["octab"], "autoproduct", array()) == 1)) {
                // line 474
                echo "                  <option value=\"0\">";
                echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
                echo "</option>
                  <option value=\"1\" selected=\"select-options\">";
                // line 475
                echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
                echo "</option>
                  <option value=\"2\">";
                // line 476
                echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
                echo "</option>
                  <option value=\"3\">";
                // line 477
                echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
                echo "</option>
                  <option value=\"4\">";
                // line 478
                echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
                echo "</option>
                  ";
            } elseif (($this->getAttribute(            // line 479
$context["octab"], "autoproduct", array()) == 2)) {
                // line 480
                echo "                  <option value=\"0\">";
                echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
                echo "</option>
                  <option value=\"1\">";
                // line 481
                echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
                echo "</option>
                  <option value=\"2\" selected=\"select-options\">";
                // line 482
                echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
                echo "</option>
                  <option value=\"3\">";
                // line 483
                echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
                echo "</option>
                  <option value=\"4\">";
                // line 484
                echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
                echo "</option>
                  ";
            } elseif (($this->getAttribute(            // line 485
$context["octab"], "autoproduct", array()) == 3)) {
                // line 486
                echo "                  <option value=\"0\">";
                echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
                echo "</option>
                  <option value=\"1\">";
                // line 487
                echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
                echo "</option>
                  <option value=\"2\">";
                // line 488
                echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
                echo "</option>
                  <option value=\"3\" selected=\"select-options\">";
                // line 489
                echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
                echo "</option>
                  <option value=\"4\">";
                // line 490
                echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
                echo "</option>
                  ";
            } else {
                // line 492
                echo "                  <option value=\"0\">";
                echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
                echo "</option>
                  <option value=\"1\">";
                // line 493
                echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
                echo "</option>
                  <option value=\"2\">";
                // line 494
                echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
                echo "</option>
                  <option value=\"3\">";
                // line 495
                echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
                echo "</option>
                  <option value=\"4\" selected=\"select-options\">";
                // line 496
                echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
                echo "</option>
                  ";
            }
            // line 498
            echo "                </select>
              </div>
            </div>
          </div>
        </div>
        </div>
      ";
            // line 504
            $context["tab_id"] = ((isset($context["tab_id"]) ? $context["tab_id"] : null) + 1);
            // line 505
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['octab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 506
        echo "      </div>
      <button class=\"button-addnew\" type=\"button\" onClick=\"addTabs();\">";
        // line 507
        echo (isset($context["entry_addnewtab"]) ? $context["entry_addnewtab"] : null);
        echo "</button>
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
  var tab_id = ";
        // line 524
        echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
        echo ";
function loadAutocomplete(i){
  \$(\"input[name=\\'octab[\"+i+\"][productall]\\']\").autocomplete({
    source: function(request, response) {
      \$.ajax({
        url: 'index.php?route=extension/module/ocproduct/autocomplete&user_token=";
        // line 529
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
      \$(\"input[name=\\'octab[\"+i+\"][productall]\\']\").val('');
      
      \$('#featured-product-'+ i+ + item['value']).remove();
      \$('#featured-product-'+ i).append('<div id=\"featured-product-'+i + item['value'] + '\" class=\"tt-product\"><i class=\"fa fa-times\"></i> ' + '<img src=\"' +item['image']+ '\" alt=\"\"/>' + item['label'] + '<input type=\"hidden\" name=\"octab['+i+'][productall][]\" value=\"' + item['value'] + '\" /></div>');  
      
      \$('#featured-product-'+i).scrollTop(1000);
    }
  });
  \$('#featured-product-'+i).delegate('.fa-times', 'click', function() {
    \$(this).parent().remove();
  });

  // Search category
  \$(\"input[name=\\'octab[\"+i+\"][cate_name]\\']\").autocomplete({
    source: function(request, response) {
      \$.ajax({
        url: 'index.php?route=extension/module/ocproduct/autocompleteCategory&user_token=";
        // line 559
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
      document.getElementById(\"input-cate_name-\"+i).value= item['label'];  
      document.getElementById(\"input-cate_id-\"+i).value= item['value'];  
      \$('#category-product-'+i).children().remove();
      }
  });
  \$('#input-cate_name-'+i).parent().delegate('.fa-times', 'click', function() {
    document.getElementById(\"input-cate_name-\"+i).value= '';
    document.getElementById(\"input-cate_id-\"+i).value= '';
    \$('#category-product-'+i).children().remove();
  });

  // Search product from category
  \$(\"input[name=\\'octab[\"+i+\"][productcate]\\']\").autocomplete({
    source: function( request, response) {
      \$.ajax({
        url: 'index.php?route=extension/module/ocproduct/getProductCategory&user_token=";
        // line 587
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&category_id=' + \$(\"#input-cate_id-\"+i).val()+ '&filter_name=' +  encodeURIComponent(request),
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
      
      \$('#category-product-' + i + item['value']).remove();
      
      \$('#category-product-' +i).append('<div id=\"category-product-' + i + item['value'] + '\" class=\"tt-product\"><i class=\"fa fa-times\"></i> ' + '<img src=\"' +item['image']+ '\" alt=\"\"/>' + item['label'] + '<input type=\"hidden\" name=\"octab['+i+'][productcate][]\" value=\"' + item['value'] + '\" /></div>');  
      
      \$('#category-product'+i).scrollTop(1000);
    }
  });
    
  \$('#category-product-'+i).delegate('.fa-times', 'click', function() {
    \$(this).parent().remove();
  });
}
function GetOptionsSelect() {
    \$('.select-options').hide();
    var ParentForms = document.getElementsByClassName('parent-form');
    for (var j = 0; j < ParentForms.length; j ++){
      var InputChilds = ParentForms[j].getElementsByTagName('input');
      for (var i = 0; i < InputChilds.length; i++) {
            if (InputChilds[i].checked) {
              var id = InputChilds[i].id;
              var test = \$('.'+id+'-selected');
              \$(test).show();

            } //end if
 
      } // end for
    };
    
} //end

\$(document).ready(function(){
  GetOptionsSelect(); 
  afterAdd();
  \$('.list-selection label').on('click',function(){
      \$(this).parent().find('.active').removeClass('active');
      \$(this).addClass('active');
  });
  for(i=0; i <= tab_id; i++){
    loadAutocomplete(i);
  }
  \$('.tab-content').hide(); 
})
";
        // line 648
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 649
            echo "  \$('#input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "').summernote({height: 300});
  \$('#language";
            // line 650
            echo $this->getAttribute($context["language"], "language_id", array());
            echo " .html-content').hide();
  \$('#language";
            // line 651
            echo $this->getAttribute($context["language"], "language_id", array());
            echo " a').click(function(){
    \$('#language";
            // line 652
            echo $this->getAttribute($context["language"], "language_id", array());
            echo " .html-content').slideToggle();
  });
  \$('#input-title";
            // line 654
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "').parent().parent().parent().css('border-top','2px solid #279CBB');
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 656
        echo "

function afterAdd(){
  \$('.tab-heading').on('click', function(){    
    \$(this).next('.tab-content').slideToggle();
\tevent.stoppropagation();
  })
  \$('.delete_tab').click(function(){
    \$(this).parent().parent().remove();
  })
}
function addTabs() {
  html  = '<div class=\"tab-container\"><div class=\"tab-heading\">Tab-'+tab_id+'<span class=\"delete_tab\"><i class=\"fa fa-times\"></i>";
        // line 668
        echo (isset($context["entry_deletetab"]) ? $context["entry_deletetab"] : null);
        echo "</span></div><div class=\"tab-content\">';
    html += '<div class=\"form-group\">';
    html += '<label class=\"control-label\" for=\"input-row\">";
        // line 670
        echo (isset($context["entry_overwritetitle"]) ? $context["entry_overwritetitle"] : null);
        echo "</label>';
    html += '<div class=\"control-option width-4\">';
    ";
        // line 672
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 673
            echo "    html += '<div class=\"input-group\">';
    html += '<span class=\"input-group-addon\">";
            // line 674
            echo $this->getAttribute($context["language"], "name", array());
            echo "</span>';
    html += '<input type=\"text\" name=\"octab[' + tab_id + '][tab_name][";
            // line 675
            echo $this->getAttribute($context["language"], "code", array());
            echo "][title]\" value=\"\" placeholder=\"\" id=\"input-tabname";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "-'+ tab_id +'\" class=\"form-control\" />';
    html += '</div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 678
        echo "    html += '</div></div>';
    html += '<div class=\"form-group parent-form\">';
    html += '<label class=\"control-label\" for=\"input-option\">";
        // line 680
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo "</label>';
    html += '<div class=\"control-option\"><div class=\"switch switch-long switch-multi3\">';
    html += '<input type=\"radio\" name=\"octab[' + tab_id + '][option]\" class=\"switch-input switch-input-1\" id=\"option-all-' + tab_id + '\" onClick=\"GetOptionsSelect();\" value=\"0\" checked=\"checked\"/>';
      html += '<label for=\"option-all-' + tab_id + '\" class=\"switch-label switch-label-1\" >";
        // line 683
        echo (isset($context["entry_type_all"]) ? $context["entry_type_all"] : null);
        echo "</label>';
    html += '<input type=\"radio\" name=\"octab[' + tab_id + '][option]\" class=\"switch-input switch-input-2\" onClick=\"GetOptionsSelect();\" id=\"option-cate-' + tab_id + '\" value=\"1\"/>';
    html += '<label for=\"option-cate-' + tab_id + '\" class=\"switch-label switch-label-2\">";
        // line 685
        echo (isset($context["entry_type_cate"]) ? $context["entry_type_cate"] : null);
        echo "</label>';
    html += '<input type=\"radio\" name=\"octab[' + tab_id + '][option]\" class=\"switch-input switch-input-3\" onClick=\"GetOptionsSelect();\" id=\"option-auto-' + tab_id + '\" value=\"2\"/>';
    html += '<label for=\"option-auto-' + tab_id + '\" class=\"switch-label switch-label-3\">";
        // line 687
        echo (isset($context["entry_type_auto"]) ? $context["entry_type_auto"] : null);
        echo "</label>';
    html += '<span class=\"switch-selection\"></span>';
    html += '</div></div>';
    html += '</div>';

    /////////////////////////////////

    html += '<div class=\"option-all-' + tab_id + '-selected select-options\">';
        html += '<div class=\"form-group\">';
        html += '<label class=\"control-label\" for=\"input-product\">";
        // line 696
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>';
        html += '<div class=\"control-option width-4\">';
        html += '<input type=\"text\" name=\"octab[' + tab_id + '][productall]\" value=\"\" placeholder=\"";
        // line 698
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-product-' + tab_id + '\" class=\"form-control\" />';
        html += '<div id=\"featured-product-' + tab_id + '\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">';
        html += '</div></div></div></div>'; 

        ////////////////////////////////////

        html += '<div class=\"option-cate-' + tab_id + '-selected select-options\">';
        html += '<div class=\"form-group\">';
        html += '<label class=\"control-label\" for=\"input-cate_id\">";
        // line 706
        echo (isset($context["entry_cate_select"]) ? $context["entry_cate_select"] : null);
        echo "</label>';
        html += '<div class=\"control-option width-3\">';
        html += '<input type=\"text\" name=\"octab[' + tab_id + '][cate_name]\" value=\"\" placeholder=\"Search category\" id=\"input-cate_name-' + tab_id + '\" class=\"form-control input-cate_name\" /><i class=\"fa fa-times\"></i>';
        html += '<input type=\"hidden\" name=\"octab[' + tab_id + '][cate_id]\" value=\"\" id=\"input-cate_id-' + tab_id + '\" />';
        html += '</div></div>';

        html += '<div class=\"form-group parent-form\">';
        html += '<label class=\"control-label\" for=\"input-productfrom\">";
        // line 713
        echo (isset($context["entry_pfrom"]) ? $context["entry_pfrom"] : null);
        echo "</label>';
        html += '<div class=\"control-option width-3\">';             
        html += '<div class=\"switch switch-long switch-multi3\">';
        html += '<input type=\"radio\" name=\"octab[' + tab_id + '][productfrom]\" class=\"switch-input\" id=\"productfrom-all-' + tab_id + '\" value=\"1\" checked=\"checked\"  onClick=\"GetOptionsSelect();\"/>';
        html += '<label for=\"productfrom-all-' + tab_id + '\" class=\"switch-label switch-label-1\">";
        // line 717
        echo (isset($context["entry_pfrom_all"]) ? $context["entry_pfrom_all"] : null);
        echo "</label>';
        html += '<input type=\"radio\" name=\"octab[' + tab_id + '][productfrom]\" class=\"switch-input\" id=\"productfrom-select-' + tab_id + '\" value=\"0\" onClick=\"GetOptionsSelect();\"/>';
        html += '<label for=\"productfrom-select-' + tab_id + '\" class=\"switch-label switch-label-2\">";
        // line 719
        echo (isset($context["entry_pfrom_select"]) ? $context["entry_pfrom_select"] : null);
        echo "</label>';
        html += '<input type=\"radio\" name=\"octab[' + tab_id + '][productfrom]\" class=\"switch-input\" id=\"productfrom-specific-' + tab_id + '\" value=\"2\" onClick=\"GetOptionsSelect();\"/>';
        html += '<label for=\"productfrom-specific-' + tab_id + '\" class=\"switch-label switch-label-3\">";
        // line 721
        echo (isset($context["entry_specificproduct"]) ? $context["entry_specificproduct"] : null);
        echo "</label>';
        html += '<span class=\"switch-selection\"></span>';                 
        html += '</div></div></div>';

        html += '<div class=\"productfrom-all-' + tab_id + '-selected select-options\"></div>';

        html += '<div class=\"productfrom-select-' + tab_id + '-selected select-options\">';
        html += '<div class=\"form-group\">';
        html += '<label class=\"control-label\" for=\"input-productcate-' + tab_id + '\">";
        // line 729
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>';
        html += '<div class=\"control-option width-4\">';
        html += '<input type=\"text\" name=\"octab[' + tab_id + '][productcate]\" value=\"\" placeholder=\"";
        // line 731
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-productcate-' + tab_id + '\" class=\"form-control\" />';
        html += '<div id=\"category-product-' + tab_id + '\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">';
        html += '</div></div></div></div>';


        html += '<div class=\"productfrom-specific-' + tab_id + '-selected select-options\">';
        html += '<div class=\"form-group\">';
        html += '<label class=\"control-label\" for=\"input-specific-product-' + tab_id + '\">";
        // line 738
        echo (isset($context["entry_selectspecificproduct"]) ? $context["entry_selectspecificproduct"] : null);
        echo "</label>';
        html += '<div class=\"control-option width-3\">';
        html += '<small class=\"text-for-specificproducts\" style=\"padding: 0 0 10px 0; float: left;\">";
        // line 740
        echo (isset($context["entry_selectspecificproduct_small"]) ? $context["entry_selectspecificproduct_small"] : null);
        echo "</small>';
        html += '<select name=\"octab[' + tab_id + '][input_specific_product]\" id=\"input-specific-product-' + tab_id + '\" class=\"form-control\">';
        html += '<option value=\"0\">";
        // line 742
        echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
        echo "</option>';
        html += '<option value=\"1\">";
        // line 743
        echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
        echo "</option>';
        html += '<option value=\"2\">";
        // line 744
        echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
        echo "</option>';
        html += '<option value=\"3\">";
        // line 745
        echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
        echo "</option>';
        html += '<option value=\"4\">";
        // line 746
        echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
        echo "</option>';
        html += '</select></div></div></div></div>';

        html += '<div class=\"option-auto-' + tab_id + '-selected select-options\">';
        html += '<div class=\"form-group auto-select\">';
        html += '<label class=\"control-label\" for=\"input-autoproduct-' + tab_id + '\">";
        // line 751
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>';
        html += '<div class=\"control-option width-2\">';
        html += '<select name=\"octab[' + tab_id + '][autoproduct]\" id=\"input-select-' + tab_id + '\" class=\"form-control\">';
        html += '<option value=\"0\">";
        // line 754
        echo (isset($context["entry_new"]) ? $context["entry_new"] : null);
        echo "</option>';
        html += '<option value=\"1\">";
        // line 755
        echo (isset($context["entry_sale"]) ? $context["entry_sale"] : null);
        echo "</option>';
        html += '<option value=\"2\">";
        // line 756
        echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
        echo "</option>';
        html += '<option value=\"3\">";
        // line 757
        echo (isset($context["entry_mostview"]) ? $context["entry_mostview"] : null);
        echo "</option>';
        html += '<option value=\"4\">";
        // line 758
        echo (isset($context["entry_dealproducts"]) ? $context["entry_dealproducts"] : null);
        echo "</option>';
        html += '</select></div></div></div>';
    html += '</div></div>';
  
  \$('.tabs-container').append(html); 
  GetOptionsSelect(); 
  afterAdd();
  loadAutocomplete(tab_id);
  tab_id++;
  \$('body').scrollTop(10000);
}
//--></script>
</div>
";
        // line 771
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/octabproducts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1853 => 771,  1837 => 758,  1833 => 757,  1829 => 756,  1825 => 755,  1821 => 754,  1815 => 751,  1807 => 746,  1803 => 745,  1799 => 744,  1795 => 743,  1791 => 742,  1786 => 740,  1781 => 738,  1771 => 731,  1766 => 729,  1755 => 721,  1750 => 719,  1745 => 717,  1738 => 713,  1728 => 706,  1717 => 698,  1712 => 696,  1700 => 687,  1695 => 685,  1690 => 683,  1684 => 680,  1680 => 678,  1669 => 675,  1665 => 674,  1662 => 673,  1658 => 672,  1653 => 670,  1648 => 668,  1634 => 656,  1626 => 654,  1621 => 652,  1617 => 651,  1613 => 650,  1608 => 649,  1604 => 648,  1540 => 587,  1509 => 559,  1476 => 529,  1468 => 524,  1448 => 507,  1445 => 506,  1439 => 505,  1437 => 504,  1429 => 498,  1424 => 496,  1420 => 495,  1416 => 494,  1412 => 493,  1407 => 492,  1402 => 490,  1398 => 489,  1394 => 488,  1390 => 487,  1385 => 486,  1383 => 485,  1379 => 484,  1375 => 483,  1371 => 482,  1367 => 481,  1362 => 480,  1360 => 479,  1356 => 478,  1352 => 477,  1348 => 476,  1344 => 475,  1339 => 474,  1337 => 473,  1333 => 472,  1329 => 471,  1325 => 470,  1321 => 469,  1316 => 468,  1314 => 467,  1308 => 466,  1301 => 464,  1296 => 462,  1288 => 456,  1283 => 454,  1279 => 453,  1275 => 452,  1271 => 451,  1266 => 450,  1261 => 448,  1257 => 447,  1253 => 446,  1249 => 445,  1244 => 444,  1242 => 443,  1238 => 442,  1234 => 441,  1230 => 440,  1226 => 439,  1221 => 438,  1219 => 437,  1215 => 436,  1211 => 435,  1207 => 434,  1203 => 433,  1198 => 432,  1196 => 431,  1192 => 430,  1188 => 429,  1184 => 428,  1180 => 427,  1175 => 426,  1173 => 425,  1167 => 424,  1163 => 423,  1156 => 421,  1151 => 419,  1145 => 415,  1133 => 411,  1129 => 410,  1125 => 409,  1121 => 408,  1115 => 407,  1111 => 406,  1103 => 405,  1096 => 403,  1091 => 401,  1085 => 398,  1074 => 392,  1064 => 391,  1058 => 390,  1048 => 389,  1042 => 388,  1032 => 387,  1024 => 384,  1013 => 380,  1005 => 379,  998 => 377,  993 => 375,  986 => 370,  975 => 367,  971 => 366,  967 => 365,  962 => 363,  956 => 362,  952 => 361,  944 => 360,  937 => 358,  932 => 356,  921 => 350,  911 => 349,  905 => 348,  895 => 347,  889 => 346,  879 => 345,  873 => 342,  868 => 339,  851 => 336,  847 => 335,  844 => 334,  840 => 333,  835 => 331,  827 => 328,  824 => 327,  819 => 326,  817 => 325,  809 => 319,  803 => 317,  801 => 316,  797 => 315,  794 => 314,  788 => 312,  786 => 311,  782 => 310,  775 => 308,  766 => 304,  761 => 302,  752 => 296,  746 => 295,  742 => 294,  736 => 293,  730 => 290,  721 => 284,  715 => 283,  711 => 282,  705 => 281,  699 => 278,  690 => 272,  684 => 271,  680 => 270,  674 => 269,  668 => 266,  659 => 260,  653 => 259,  649 => 258,  643 => 257,  635 => 254,  626 => 248,  620 => 247,  616 => 246,  610 => 245,  604 => 242,  601 => 241,  595 => 236,  588 => 231,  581 => 226,  579 => 225,  573 => 221,  571 => 220,  565 => 216,  563 => 215,  556 => 212,  548 => 206,  543 => 205,  537 => 203,  535 => 202,  531 => 201,  526 => 200,  520 => 198,  518 => 197,  514 => 196,  509 => 195,  503 => 193,  501 => 192,  497 => 191,  493 => 190,  488 => 188,  479 => 182,  473 => 181,  469 => 180,  463 => 179,  457 => 176,  448 => 170,  442 => 169,  438 => 168,  432 => 167,  426 => 164,  418 => 159,  413 => 157,  405 => 152,  400 => 150,  391 => 144,  385 => 143,  381 => 142,  375 => 141,  369 => 138,  361 => 133,  356 => 131,  347 => 125,  341 => 124,  337 => 123,  331 => 122,  325 => 119,  318 => 115,  313 => 113,  306 => 109,  301 => 107,  291 => 100,  285 => 99,  281 => 98,  275 => 97,  269 => 94,  260 => 88,  254 => 87,  250 => 86,  244 => 85,  240 => 84,  234 => 83,  228 => 80,  225 => 79,  220 => 75,  204 => 71,  199 => 69,  194 => 68,  190 => 67,  182 => 64,  179 => 63,  175 => 60,  162 => 57,  158 => 56,  155 => 55,  151 => 54,  146 => 52,  136 => 45,  130 => 44,  126 => 43,  120 => 42,  114 => 39,  108 => 35,  102 => 33,  100 => 32,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
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
/*           */
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
/*             <div class="tabdes-content" style="margin: 10px;">*/
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
/*       <div class="form-group" style="border-top: 2px solid #279CBB;">*/
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
/*       <div class="form-group parent-form"  style="border-top: 2px solid #279CBB;">*/
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
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="slider-off-selected select-options">*/
/*         <div class="form-group">{# if "Using slider" is false #}*/
/*           <label class="control-label" for="input-row">{{ entry_pprow }}</label>*/
/*           <div class="control-option width-1">*/
/*             <select name="nrow" id="input-nrow" class="form-control">*/
/*               {% if nrow == 0 %}*/
/*                 <option value="0" selected="select-options">2</option>*/
/*                 <option value="1">3</option>*/
/*                 <option value="2">4</option>*/
/*                 <option value="3">6</option>*/
/*               {% elseif nrow == 1 %}*/
/*                 <option value="0">2</option>*/
/*                 <option value="1" selected="select-options">3</option>*/
/*                 <option value="2">4</option>*/
/*                 <option value="3">6</option>*/
/*               {% elseif nrow == 2 %}*/
/*                 <option value="0">2</option>*/
/*                 <option value="1">3</option>*/
/*                 <option value="2" selected="select-options">4</option>*/
/*                 <option value="3">6</option>*/
/*               {% else %}*/
/*                 <option value="0">2</option>*/
/*                 <option value="1">3</option>*/
/*                 <option value="2">4</option>*/
/*                 <option value="3" selected="select-options">6</option>*/
/*               {% endif %}*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {# ------------------ #}*/
/*       <div class="form-group"  style="border-top: 2px solid #279CBB;">*/
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
/* */
/* */
/*       <div class="tabs-container">*/
/*           {% set tab_id = 0 %}*/
/*           {% for octab in octabs %}*/
/*           <div class="tab-container">*/
/*           <div class="tab-heading">Tab-{{ tab_id }}<span class="delete_tab"><i class="fa fa-times"></i>{{ entry_deletetab }}</span></div>*/
/*           <div class="tab-content">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-row">{{ entry_overwritetitle }}</label>*/
/*               <div class="control-option width-4">*/
/*                 {% for language in languages %}*/
/*                   <div class="input-group">*/
/*                     <span class="input-group-addon">{{ language.name }}</span>*/
/*                     <input type="text" name="octab[{{ tab_id }}][tab_name][{{ language.code }}][title]" value="{{ octab.tab_name[language.code].title ? octab.tab_name[language.code].title }}" placeholder="" id="input-title{{ language.language_id }}-{{ tab_id }}" class="form-control" />*/
/*                   </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group parent-form">*/
/*               <label class="control-label" for="input-option">{{ entry_type }}</label>*/
/*               <div class="control-option">*/
/*               <div class="switch switch-long switch-multi3">*/
/*                 <input type="radio" name="octab[{{ tab_id }}][option]" class="switch-input switch-input-1" id="option-all-{{ tab_id }}" onClick="GetOptionsSelect();" value="0" {% if octab.option == 0 %}checked="checked"{% endif %}/>*/
/*                 <label for="option-all-{{ tab_id }}" class="switch-label switch-label-1" >{{ entry_type_all }}</label>*/
/*                 <input type="radio" name="octab[{{ tab_id }}][option]" class="switch-input switch-input-2" onClick="GetOptionsSelect();" id="option-cate-{{ tab_id }}" value="1" {% if octab.option == 1 %}checked="checked"{% endif %}/>*/
/*                 <label for="option-cate-{{ tab_id }}" class="switch-label switch-label-2">{{ entry_type_cate }}</label>*/
/*                 <input type="radio" name="octab[{{ tab_id }}][option]" class="switch-input switch-input-3" onClick="GetOptionsSelect();" id="option-auto-{{ tab_id }}" value="2" {% if octab.option == 2 %}checked="checked"{% endif %}/>*/
/*                 <label for="option-auto-{{ tab_id }}" class="switch-label switch-label-3">{{ entry_type_auto }}</label>*/
/*                 <span class="switch-selection"></span>*/
/*               </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="option-all-{{ tab_id }}-selected select-options">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-productall-{{ tab_id }}">{{ entry_product }}</label>*/
/*               <div class="control-option width-4">*/
/*                 <input type="text" name="octab[{{ tab_id }}][productall]" value="" placeholder="{{ entry_product }}" id="input-productall-{{ tab_id }}" class="form-control" />*/
/*                 <div id="featured-product-{{ tab_id }}" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                   {% for product in octab.productalls %} */
/*                   <div id="featured-product{{ product.product_id }}" class="tt-product">*/
/*                   <i class="fa fa-times"></i>*/
/*                   <img src="{{ product.image }}" alt="" />*/
/*                   {{ product.name }}     */
/*                   <input type="hidden" name="octab[{{ tab_id }}][productall][]" value="{{ product.product_id }}  " />*/
/*                   </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           <!--------------------------- Categories tab-------------------------->*/
/*           <div class="option-cate-{{ tab_id }}-selected select-options">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-cate_id-{{ tab_id }}">{{ entry_cate_select }}</label>*/
/*               <div class="control-option width-3">*/
/*                 <input type="text" name="octab[{{ tab_id }}][cate_name]" value="{{ octab.cate_name }}" placeholder="Search category" id="input-cate_name-{{ tab_id }}" class="form-control input-cate_name" /><i class="fa fa-times"></i>*/
/*               <input type="hidden" name="octab[{{ tab_id }}][cate_id]" value="{{ octab.cate_id }}" id="input-cate_id-{{ tab_id }}" />*/
/*             </div>*/
/*             </div>*/
/*              <div class="form-group parent-form">*/
/*               <label class="control-label" for="input-productfrom-{{ tab_id }}">{{ entry_pfrom }}</label>*/
/*               <div class="control-option width-3">            */
/*                 <div class="switch switch-long switch-multi3">*/
/*                 <input type="radio" name="octab[{{ tab_id }}][productfrom]" class="switch-input" id="productfrom-all-{{ tab_id }}" value="1" onClick="GetOptionsSelect();" {% if octab.productfrom == 1 %}checked="checked"{% endif %}/>*/
/*                 <label for="productfrom-all-{{ tab_id }}" class="switch-label switch-label-1">{{ entry_pfrom_all }}</label>*/
/*                 <input type="radio" name="octab[{{ tab_id }}][productfrom]" class="switch-input" id="productfrom-select-{{ tab_id }}" value="0" onClick="GetOptionsSelect();" {% if octab.productfrom == 0 %}checked="checked"{% endif %}/>*/
/*                 <label for="productfrom-select-{{ tab_id }}" class="switch-label switch-label-2">{{ entry_pfrom_select }}</label>*/
/*                 <input type="radio" name="octab[{{ tab_id }}][productfrom]" class="switch-input" id="productfrom-specific-{{ tab_id }}" value="2" onClick="GetOptionsSelect();" {% if octab.productfrom == 2 %}checked="checked"{% endif %}/>*/
/*                 <label for="productfrom-specific-{{ tab_id }}" class="switch-label switch-label-3">{{ entry_specificproduct }}</label>*/
/*                 <span class="switch-selection"></span>*/
/*                  */
/*               </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="productfrom-all-{{ tab_id }}-selected select-options">*/
/*               <!-- <small class="text-for-allproducts" style="padding: 10px 0; float: left;"><?php echo $entry_textall; ?></small> -->*/
/*             </div>*/
/*             <div class="productfrom-select-{{ tab_id }}-selected select-options">*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-productcate-{{ tab_id }}">{{ entry_product }}</label>*/
/*                 <div class="control-option width-4">*/
/*                   <input type="text" name="octab[{{ tab_id }}][productcate]" value="" placeholder="{{ entry_product }}" id="input-productcate-{{ tab_id }}" class="form-control" />*/
/*                   <div id="category-product-{{ tab_id }}" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                     {% for productcate in octab.productcates %}   */
/*                     <div id="category-product{{ productcate.product_id }}" class="tt-product">       */
/*                     <img src="{{ productcate.image }}" alt="" /> */
/*                     {{ productcate.name }}      */
/*                     <input type="hidden" name="octab[{{ tab_id }}][productcate][]" value="{{ productcate.product_id }}" />*/
/*                     <i class="fa fa-times"></i>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="productfrom-specific-{{ tab_id }}-selected select-options">*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-specific-product-{{ tab_id }}">{{ entry_selectspecificproduct }}</label>*/
/*                 <div class="control-option width-3">*/
/*                  <small class="text-for-specificproducts" style="padding: 0 0 10px 0; float: left;">{{ entry_selectspecificproduct_small }}</small>*/
/*                   <select name="octab[{{ tab_id }}][input_specific_product]" id="input-specific-product-{{ tab_id }}" class="form-control">*/
/*                     {% if octab.input_specific_product == 0 %}*/
/*                     <option value="0" selected="select-options">{{ entry_new }}</option>*/
/*                     <option value="1">{{ entry_sale }}</option>*/
/*                     <option value="2">{{ entry_bestseller }}</option>*/
/*                     <option value="3">{{ entry_mostview }}</option>*/
/*                     <option value="4">{{ entry_dealproducts }}</option>*/
/*                     {% elseif octab.input_specific_product == 1 %}*/
/*                     <option value="0">{{ entry_new }}</option>*/
/*                     <option value="1" selected="select-options">{{ entry_sale }}</option>*/
/*                     <option value="2">{{ entry_bestseller }}</option>*/
/*                     <option value="3">{{ entry_mostview }}</option>*/
/*                     <option value="4">{{ entry_dealproducts }}</option>*/
/*                     {% elseif octab.input_specific_product == 2 %}*/
/*                     <option value="0">{{ entry_new }}</option>*/
/*                     <option value="1">{{ entry_sale }}</option>*/
/*                     <option value="2" selected="select-options">{{ entry_bestseller }}</option>*/
/*                     <option value="3">{{ entry_mostview }}</option>*/
/*                     <option value="4">{{ entry_dealproducts }}</option>*/
/*                     {% elseif octab.input_specific_product == 3 %}*/
/*                     <option value="0">{{ entry_new }}</option>*/
/*                     <option value="1">{{ entry_sale }}</option>*/
/*                     <option value="2">{{ entry_bestseller }}</option>*/
/*                     <option value="3" selected="select-options">{{ entry_mostview }}</option>*/
/*                     <option value="4">{{ entry_dealproducts }}</option>*/
/*                     {% else %}*/
/*                     <option value="0">{{ entry_new }}</option>*/
/*                     <option value="1">{{ entry_sale }}</option>*/
/*                     <option value="2">{{ entry_bestseller }}</option>*/
/*                     <option value="3">{{ entry_mostview }}</option>*/
/*                     <option value="4" selected="select-options">{{ entry_dealproducts }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           <!--------------------------- Auto tab ----------------------- -->*/
/*           <div class="option-auto-{{ tab_id }}-selected select-options">*/
/*             <div class="form-group auto-select">*/
/*               <label class="control-label" for="input-autoproduct-{{ tab_id }}">{{ entry_product }}</label>*/
/*               <div class="control-option width-2">*/
/*                 <select name="octab[{{ tab_id }}][autoproduct]" id="input-autoproduct-{{ tab_id }}" class="form-control">*/
/*                   {% if octab.autoproduct == 0 %}*/
/*                   <option value="0" selected="select-options">{{ entry_new }}</option>*/
/*                   <option value="1">{{ entry_sale }}</option>*/
/*                   <option value="2">{{ entry_bestseller }}</option>*/
/*                   <option value="3">{{ entry_mostview }}</option>*/
/*                   <option value="4">{{ entry_dealproducts }}</option>*/
/*                   {% elseif octab.autoproduct == 1 %}*/
/*                   <option value="0">{{ entry_new }}</option>*/
/*                   <option value="1" selected="select-options">{{ entry_sale }}</option>*/
/*                   <option value="2">{{ entry_bestseller }}</option>*/
/*                   <option value="3">{{ entry_mostview }}</option>*/
/*                   <option value="4">{{ entry_dealproducts }}</option>*/
/*                   {% elseif octab.autoproduct == 2 %}*/
/*                   <option value="0">{{ entry_new }}</option>*/
/*                   <option value="1">{{ entry_sale }}</option>*/
/*                   <option value="2" selected="select-options">{{ entry_bestseller }}</option>*/
/*                   <option value="3">{{ entry_mostview }}</option>*/
/*                   <option value="4">{{ entry_dealproducts }}</option>*/
/*                   {% elseif octab.autoproduct == 3 %}*/
/*                   <option value="0">{{ entry_new }}</option>*/
/*                   <option value="1">{{ entry_sale }}</option>*/
/*                   <option value="2">{{ entry_bestseller }}</option>*/
/*                   <option value="3" selected="select-options">{{ entry_mostview }}</option>*/
/*                   <option value="4">{{ entry_dealproducts }}</option>*/
/*                   {% else %}*/
/*                   <option value="0">{{ entry_new }}</option>*/
/*                   <option value="1">{{ entry_sale }}</option>*/
/*                   <option value="2">{{ entry_bestseller }}</option>*/
/*                   <option value="3">{{ entry_mostview }}</option>*/
/*                   <option value="4" selected="select-options">{{ entry_dealproducts }}</option>*/
/*                   {% endif %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         </div>*/
/*       {% set tab_id = tab_id + 1 %}*/
/*       {% endfor %}*/
/*       </div>*/
/*       <button class="button-addnew" type="button" onClick="addTabs();">{{ entry_addnewtab }}</button>*/
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
/*   var tab_id = {{ tab_id }};*/
/* function loadAutocomplete(i){*/
/*   $("input[name=\'octab["+i+"][productall]\']").autocomplete({*/
/*     source: function(request, response) {*/
/*       $.ajax({*/
/*         url: 'index.php?route=extension/module/ocproduct/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/*         dataType: 'json',*/
/*         success: function(json) {*/
/*           response($.map(json, function(item) {*/
/*             return {*/
/*               image: item['image'],*/
/*               label: item['name'],*/
/*               value: item['product_id'] */
/*             }*/
/*           }));*/
/*         }*/
/*       });*/
/*     },*/
/*     select: function(item) {*/
/*       $("input[name=\'octab["+i+"][productall]\']").val('');*/
/*       */
/*       $('#featured-product-'+ i+ + item['value']).remove();*/
/*       $('#featured-product-'+ i).append('<div id="featured-product-'+i + item['value'] + '" class="tt-product"><i class="fa fa-times"></i> ' + '<img src="' +item['image']+ '" alt=""/>' + item['label'] + '<input type="hidden" name="octab['+i+'][productall][]" value="' + item['value'] + '" /></div>');  */
/*       */
/*       $('#featured-product-'+i).scrollTop(1000);*/
/*     }*/
/*   });*/
/*   $('#featured-product-'+i).delegate('.fa-times', 'click', function() {*/
/*     $(this).parent().remove();*/
/*   });*/
/* */
/*   // Search category*/
/*   $("input[name=\'octab["+i+"][cate_name]\']").autocomplete({*/
/*     source: function(request, response) {*/
/*       $.ajax({*/
/*         url: 'index.php?route=extension/module/ocproduct/autocompleteCategory&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/*         dataType: 'json',*/
/*         success: function(json) {*/
/*           response($.map(json, function(item) {*/
/*             return {*/
/*               label: item['name'],*/
/*               value: item['category_id']*/
/*             }*/
/*           }));*/
/*         }*/
/*       });*/
/*     },*/
/*     select: function(item) {  */
/*       document.getElementById("input-cate_name-"+i).value= item['label'];  */
/*       document.getElementById("input-cate_id-"+i).value= item['value'];  */
/*       $('#category-product-'+i).children().remove();*/
/*       }*/
/*   });*/
/*   $('#input-cate_name-'+i).parent().delegate('.fa-times', 'click', function() {*/
/*     document.getElementById("input-cate_name-"+i).value= '';*/
/*     document.getElementById("input-cate_id-"+i).value= '';*/
/*     $('#category-product-'+i).children().remove();*/
/*   });*/
/* */
/*   // Search product from category*/
/*   $("input[name=\'octab["+i+"][productcate]\']").autocomplete({*/
/*     source: function( request, response) {*/
/*       $.ajax({*/
/*         url: 'index.php?route=extension/module/ocproduct/getProductCategory&user_token={{ user_token }}&category_id=' + $("#input-cate_id-"+i).val()+ '&filter_name=' +  encodeURIComponent(request),*/
/*         dataType: 'json',*/
/*         data: {*/
/*         },*/
/*         success: function(json) {*/
/*           response($.map(json, function(item) {*/
/*             return {*/
/*               image: item['image'],*/
/*               label: item['name'],*/
/*               value: item['product_id'] */
/*             }*/
/*           }));*/
/*           */
/*         }*/
/*       });*/
/*     },*/
/*     select: function(item) {*/
/*       $('input[name=\'productcate\']').val('');*/
/*       */
/*       $('#category-product-' + i + item['value']).remove();*/
/*       */
/*       $('#category-product-' +i).append('<div id="category-product-' + i + item['value'] + '" class="tt-product"><i class="fa fa-times"></i> ' + '<img src="' +item['image']+ '" alt=""/>' + item['label'] + '<input type="hidden" name="octab['+i+'][productcate][]" value="' + item['value'] + '" /></div>');  */
/*       */
/*       $('#category-product'+i).scrollTop(1000);*/
/*     }*/
/*   });*/
/*     */
/*   $('#category-product-'+i).delegate('.fa-times', 'click', function() {*/
/*     $(this).parent().remove();*/
/*   });*/
/* }*/
/* function GetOptionsSelect() {*/
/*     $('.select-options').hide();*/
/*     var ParentForms = document.getElementsByClassName('parent-form');*/
/*     for (var j = 0; j < ParentForms.length; j ++){*/
/*       var InputChilds = ParentForms[j].getElementsByTagName('input');*/
/*       for (var i = 0; i < InputChilds.length; i++) {*/
/*             if (InputChilds[i].checked) {*/
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
/*   afterAdd();*/
/*   $('.list-selection label').on('click',function(){*/
/*       $(this).parent().find('.active').removeClass('active');*/
/*       $(this).addClass('active');*/
/*   });*/
/*   for(i=0; i <= tab_id; i++){*/
/*     loadAutocomplete(i);*/
/*   }*/
/*   $('.tab-content').hide(); */
/* })*/
/* {% for language in languages %}*/
/*   $('#input-description{{ language.language_id }}').summernote({height: 300});*/
/*   $('#language{{ language.language_id }} .html-content').hide();*/
/*   $('#language{{ language.language_id }} a').click(function(){*/
/*     $('#language{{ language.language_id }} .html-content').slideToggle();*/
/*   });*/
/*   $('#input-title{{ language.language_id }}').parent().parent().parent().css('border-top','2px solid #279CBB');*/
/* {% endfor %}*/
/* */
/* */
/* function afterAdd(){*/
/*   $('.tab-heading').on('click', function(){    */
/*     $(this).next('.tab-content').slideToggle();*/
/* 	event.stoppropagation();*/
/*   })*/
/*   $('.delete_tab').click(function(){*/
/*     $(this).parent().parent().remove();*/
/*   })*/
/* }*/
/* function addTabs() {*/
/*   html  = '<div class="tab-container"><div class="tab-heading">Tab-'+tab_id+'<span class="delete_tab"><i class="fa fa-times"></i>{{ entry_deletetab }}</span></div><div class="tab-content">';*/
/*     html += '<div class="form-group">';*/
/*     html += '<label class="control-label" for="input-row">{{entry_overwritetitle}}</label>';*/
/*     html += '<div class="control-option width-4">';*/
/*     {% for language in languages %}*/
/*     html += '<div class="input-group">';*/
/*     html += '<span class="input-group-addon">{{ language.name }}</span>';*/
/*     html += '<input type="text" name="octab[' + tab_id + '][tab_name][{{ language.code }}][title]" value="" placeholder="" id="input-tabname{{ language.language_id }}-'+ tab_id +'" class="form-control" />';*/
/*     html += '</div>';*/
/*     {% endfor %}*/
/*     html += '</div></div>';*/
/*     html += '<div class="form-group parent-form">';*/
/*     html += '<label class="control-label" for="input-option">{{ entry_type }}</label>';*/
/*     html += '<div class="control-option"><div class="switch switch-long switch-multi3">';*/
/*     html += '<input type="radio" name="octab[' + tab_id + '][option]" class="switch-input switch-input-1" id="option-all-' + tab_id + '" onClick="GetOptionsSelect();" value="0" checked="checked"/>';*/
/*       html += '<label for="option-all-' + tab_id + '" class="switch-label switch-label-1" >{{ entry_type_all }}</label>';*/
/*     html += '<input type="radio" name="octab[' + tab_id + '][option]" class="switch-input switch-input-2" onClick="GetOptionsSelect();" id="option-cate-' + tab_id + '" value="1"/>';*/
/*     html += '<label for="option-cate-' + tab_id + '" class="switch-label switch-label-2">{{ entry_type_cate }}</label>';*/
/*     html += '<input type="radio" name="octab[' + tab_id + '][option]" class="switch-input switch-input-3" onClick="GetOptionsSelect();" id="option-auto-' + tab_id + '" value="2"/>';*/
/*     html += '<label for="option-auto-' + tab_id + '" class="switch-label switch-label-3">{{ entry_type_auto }}</label>';*/
/*     html += '<span class="switch-selection"></span>';*/
/*     html += '</div></div>';*/
/*     html += '</div>';*/
/* */
/*     /////////////////////////////////*/
/* */
/*     html += '<div class="option-all-' + tab_id + '-selected select-options">';*/
/*         html += '<div class="form-group">';*/
/*         html += '<label class="control-label" for="input-product">{{ entry_product }}</label>';*/
/*         html += '<div class="control-option width-4">';*/
/*         html += '<input type="text" name="octab[' + tab_id + '][productall]" value="" placeholder="{{ entry_product }}" id="input-product-' + tab_id + '" class="form-control" />';*/
/*         html += '<div id="featured-product-' + tab_id + '" class="well well-sm" style="height: 150px; overflow: auto;">';*/
/*         html += '</div></div></div></div>'; */
/* */
/*         ////////////////////////////////////*/
/* */
/*         html += '<div class="option-cate-' + tab_id + '-selected select-options">';*/
/*         html += '<div class="form-group">';*/
/*         html += '<label class="control-label" for="input-cate_id">{{ entry_cate_select }}</label>';*/
/*         html += '<div class="control-option width-3">';*/
/*         html += '<input type="text" name="octab[' + tab_id + '][cate_name]" value="" placeholder="Search category" id="input-cate_name-' + tab_id + '" class="form-control input-cate_name" /><i class="fa fa-times"></i>';*/
/*         html += '<input type="hidden" name="octab[' + tab_id + '][cate_id]" value="" id="input-cate_id-' + tab_id + '" />';*/
/*         html += '</div></div>';*/
/* */
/*         html += '<div class="form-group parent-form">';*/
/*         html += '<label class="control-label" for="input-productfrom">{{ entry_pfrom }}</label>';*/
/*         html += '<div class="control-option width-3">';             */
/*         html += '<div class="switch switch-long switch-multi3">';*/
/*         html += '<input type="radio" name="octab[' + tab_id + '][productfrom]" class="switch-input" id="productfrom-all-' + tab_id + '" value="1" checked="checked"  onClick="GetOptionsSelect();"/>';*/
/*         html += '<label for="productfrom-all-' + tab_id + '" class="switch-label switch-label-1">{{ entry_pfrom_all }}</label>';*/
/*         html += '<input type="radio" name="octab[' + tab_id + '][productfrom]" class="switch-input" id="productfrom-select-' + tab_id + '" value="0" onClick="GetOptionsSelect();"/>';*/
/*         html += '<label for="productfrom-select-' + tab_id + '" class="switch-label switch-label-2">{{ entry_pfrom_select }}</label>';*/
/*         html += '<input type="radio" name="octab[' + tab_id + '][productfrom]" class="switch-input" id="productfrom-specific-' + tab_id + '" value="2" onClick="GetOptionsSelect();"/>';*/
/*         html += '<label for="productfrom-specific-' + tab_id + '" class="switch-label switch-label-3">{{ entry_specificproduct }}</label>';*/
/*         html += '<span class="switch-selection"></span>';                 */
/*         html += '</div></div></div>';*/
/* */
/*         html += '<div class="productfrom-all-' + tab_id + '-selected select-options"></div>';*/
/* */
/*         html += '<div class="productfrom-select-' + tab_id + '-selected select-options">';*/
/*         html += '<div class="form-group">';*/
/*         html += '<label class="control-label" for="input-productcate-' + tab_id + '">{{ entry_product }}</label>';*/
/*         html += '<div class="control-option width-4">';*/
/*         html += '<input type="text" name="octab[' + tab_id + '][productcate]" value="" placeholder="{{ entry_product }}" id="input-productcate-' + tab_id + '" class="form-control" />';*/
/*         html += '<div id="category-product-' + tab_id + '" class="well well-sm" style="height: 150px; overflow: auto;">';*/
/*         html += '</div></div></div></div>';*/
/* */
/* */
/*         html += '<div class="productfrom-specific-' + tab_id + '-selected select-options">';*/
/*         html += '<div class="form-group">';*/
/*         html += '<label class="control-label" for="input-specific-product-' + tab_id + '">{{ entry_selectspecificproduct }}</label>';*/
/*         html += '<div class="control-option width-3">';*/
/*         html += '<small class="text-for-specificproducts" style="padding: 0 0 10px 0; float: left;">{{ entry_selectspecificproduct_small }}</small>';*/
/*         html += '<select name="octab[' + tab_id + '][input_specific_product]" id="input-specific-product-' + tab_id + '" class="form-control">';*/
/*         html += '<option value="0">{{ entry_new }}</option>';*/
/*         html += '<option value="1">{{ entry_sale }}</option>';*/
/*         html += '<option value="2">{{ entry_bestseller }}</option>';*/
/*         html += '<option value="3">{{ entry_mostview }}</option>';*/
/*         html += '<option value="4">{{ entry_dealproducts }}</option>';*/
/*         html += '</select></div></div></div></div>';*/
/* */
/*         html += '<div class="option-auto-' + tab_id + '-selected select-options">';*/
/*         html += '<div class="form-group auto-select">';*/
/*         html += '<label class="control-label" for="input-autoproduct-' + tab_id + '">{{ entry_product }}</label>';*/
/*         html += '<div class="control-option width-2">';*/
/*         html += '<select name="octab[' + tab_id + '][autoproduct]" id="input-select-' + tab_id + '" class="form-control">';*/
/*         html += '<option value="0">{{ entry_new }}</option>';*/
/*         html += '<option value="1">{{ entry_sale }}</option>';*/
/*         html += '<option value="2">{{ entry_bestseller }}</option>';*/
/*         html += '<option value="3">{{ entry_mostview }}</option>';*/
/*         html += '<option value="4">{{ entry_dealproducts }}</option>';*/
/*         html += '</select></div></div></div>';*/
/*     html += '</div></div>';*/
/*   */
/*   $('.tabs-container').append(html); */
/*   GetOptionsSelect(); */
/*   afterAdd();*/
/*   loadAutocomplete(tab_id);*/
/*   tab_id++;*/
/*   $('body').scrollTop(10000);*/
/* }*/
/* //--></script>*/
/* </div>*/
/* {{ footer }}*/
