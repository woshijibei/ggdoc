<?php

/* extension/module/ocslideshow/ocslideshow_form.twig */
class __TwigTemplate_95440b646fa41986e91f721f53646d3bec28c6c9aecf745f14eb2b5466d11744 extends Twig_Template
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
\t";
        // line 2
        $context["token_random"] = twig_random($this->env);
        // line 3
        echo "<div id=\"content\">
     <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-html\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
              <ul class=\"breadcrumb\">
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "\t\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t  </ul>
        </div>
    </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 28
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          
\t\t   <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 31
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t  <input type=\"text\" name=\"name\" value=\"";
        // line 33
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t  ";
        // line 34
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 35
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
\t\t\t\t  ";
        }
        // line 37
        echo "\t\t\t\t</div>
\t\t\t  </div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-effect\">";
        // line 40
        echo (isset($context["entry_effect"]) ? $context["entry_effect"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"effect\" id=\"input-effect\" class=\"form-control\">
\t\t\t\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["effect_option"]) ? $context["effect_option"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["effect1"]) {
            // line 44
            echo "\t\t\t\t\t\t\t\t\t<option  ";
            if ((trim($this->getAttribute($context["effect1"], "value", array(), "array")) == trim((isset($context["effect"]) ? $context["effect"] : null)))) {
                echo "  selected =\"selected\"  ";
            }
            echo "  value=\"";
            if ($this->getAttribute($context["effect1"], "value", array(), "array")) {
                echo "  ";
                echo $this->getAttribute($context["effect1"], "label", array(), "array");
                echo "  ";
            }
            echo "\">";
            if ($this->getAttribute($context["effect1"], "value", array(), "array")) {
                echo "  ";
                echo $this->getAttribute($context["effect1"], "label", array(), "array");
                echo "  ";
            }
            echo " </option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['effect1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-delay\">";
        // line 52
        echo (isset($context["entry_delay"]) ? $context["entry_delay"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"text\" name=\"delay\" value=\"";
        // line 54
        echo (isset($context["delay"]) ? $context["delay"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_delay"]) ? $context["entry_delay"] : null);
        echo "\" id=\"input-delay\" class=\"form-control\" />
\t\t\t\t\t<?php if (\$error_delay) { ?>
\t\t\t\t\t<div class=\"text-danger\">";
        // line 56
        echo (isset($context["error_delay"]) ? $context["error_delay"] : null);
        echo "</div>
\t\t\t\t\t<?php } ?>
\t\t\t\t</div>
\t\t\t</div>



                 \t<div class=\"form-group\" >
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-auto\">";
        // line 64
        echo (isset($context["entry_auto"]) ? $context["entry_auto"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t  <select name=\"auto\" id=\"input-auto\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 67
        if ((isset($context["auto"]) ? $context["auto"] : null)) {
            // line 68
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 69
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 71
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 72
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t\t  </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

                  \t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-hover\">";
        // line 79
        echo (isset($context["entry_hover"]) ? $context["entry_hover"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t  <select name=\"hover\" id=\"input-hover\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 82
        if ((isset($context["hover"]) ? $context["hover"] : null)) {
            // line 83
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 84
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 86
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 87
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t\t  </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t    
\t\t\t\t\t <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-nextback\">";
        // line 94
        echo (isset($context["entry_nextback"]) ? $context["entry_nextback"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t  <select name=\"nextback\" id=\"input-nextback\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 97
        if ((isset($context["nextback"]) ? $context["nextback"] : null)) {
            // line 98
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 99
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 101
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 102
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t\t\t  </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t\t
 \t\t\t\t\t <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-contrl\">";
        // line 109
        echo (isset($context["entry_contrl"]) ? $context["entry_contrl"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t  <select name=\"contrl\" id=\"input-contrl\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 112
        if ((isset($context["contrl"]) ? $context["contrl"] : null)) {
            // line 113
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 114
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 116
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 117
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 119
        echo "\t\t\t\t\t\t  </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  
\t\t\t\t\t\t
\t\t\t\t\t <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 125
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t  <select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 128
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 129
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 130
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 132
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 133
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 135
        echo "\t\t\t\t\t\t  </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t    <div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"module\">
\t\t\t\t\t\t\t\t\t\t";
        // line 141
        $context["module_row"] = 0;
        // line 142
        echo "\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ocslideshow_images"]) ? $context["ocslideshow_images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ocslideshow_image"]) {
            // line 143
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-module";
            echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-module";
            echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
            echo "\\']').parent().remove(); \$('#tab-module";
            echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
            echo "').remove(); \$('#module a:first').tab('show');\"></i> ";
            echo (isset($context["tab_banner"]) ? $context["tab_banner"] : null);
            echo "  ";
            echo (isset($context["module_row"]) ? $context["module_row"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
            // line 144
            $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
            // line 145
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocslideshow_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "\t\t\t\t\t\t\t\t\t\t<li id=\"module-add\"><a onclick=\"addModule();\"><i class=\"fa fa-plus-circle\"></i> ";
        echo (isset($context["button_add_banner"]) ? $context["button_add_banner"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
                            <div class=\"tab-content\">
\t\t\t\t\t\t\t";
        // line 151
        $context["image_row"] = 0;
        // line 152
        echo "                               ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ocslideshow_images"]) ? $context["ocslideshow_images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ocslideshow_image"]) {
            // line 153
            echo "\t\t\t\t\t\t\t\t\t <div class=\"tab-pane\" id=\"tab-module";
            echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
            echo "\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language";
            // line 154
            echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 156
                echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-module";
                echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
                echo "-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo "/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t   <div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 163
                echo "                                        <div class=\"tab-pane\" id=\"tab-module";
                echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
                echo "-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\">

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\" for=\"input-title";
                // line 166
                echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
                echo "-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\">";
                echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
                echo "</label>

                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\" id=\"input-title";
                // line 169
                echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
                echo "-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\" name=\"ocslideshow_image[";
                echo (isset($context["image_row"]) ? $context["image_row"] : null);
                echo "][ocslideshow_image_description][";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "][title]\" value=\"";
                if ($this->getAttribute($this->getAttribute($context["ocslideshow_image"], "ocslideshow_image_description", array(), "array"), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) {
                    echo " ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["ocslideshow_image"], "ocslideshow_image_description", array(), "array"), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array"), "title", array(), "array");
                    echo " ";
                } else {
                    echo "  ";
                }
                echo "\" placeholder=\"";
                echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
                echo "\" class=\"form-control\" />
                                                </div>
                                            </div>

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\" for=\"input-subtitle";
                // line 174
                echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
                echo "-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\">";
                echo (isset($context["entry_subtitle"]) ? $context["entry_subtitle"] : null);
                echo "</label>

                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\" id=\"input-subtitle";
                // line 177
                echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
                echo "-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\" name=\"ocslideshow_image[";
                echo (isset($context["image_row"]) ? $context["image_row"] : null);
                echo "][ocslideshow_image_description][";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "][sub_title]\" value=\"";
                if ($this->getAttribute($this->getAttribute($context["ocslideshow_image"], "ocslideshow_image_description", array(), "array"), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) {
                    echo " ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["ocslideshow_image"], "ocslideshow_image_description", array(), "array"), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array"), "sub_title", array(), "array");
                    echo " ";
                } else {
                    echo "  ";
                }
                echo "\" placeholder=\"";
                echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
                echo "\" class=\"form-control\" />
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\" for=\"input-description";
                // line 181
                echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
                echo "-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\">";
                echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
                echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <textarea data-toggle=\"summernote\" data-lang=\"";
                // line 183
                echo (isset($context["summernote"]) ? $context["summernote"] : null);
                echo "\" name=\"ocslideshow_image[";
                echo (isset($context["image_row"]) ? $context["image_row"] : null);
                echo "][ocslideshow_image_description][";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "][description]\" placeholder=\"";
                echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
                echo "\" id=\"input-description";
                echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
                echo "-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\" class=\"form-control\">";
                if ($this->getAttribute($this->getAttribute($context["ocslideshow_image"], "ocslideshow_image_description", array(), "array"), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) {
                    echo " ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["ocslideshow_image"], "ocslideshow_image_description", array(), "array"), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array"), "description", array(), "array");
                    echo " ";
                } else {
                    echo "  ";
                }
                echo "</textarea>
                                                </div>
                                            </div>

                                        </div>

                                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t     <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-link";
            // line 192
            echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
            echo "-language";
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "language_id", array(), "array");
            echo "\">";
            echo (isset($context["entry_link"]) ? $context["entry_link"] : null);
            echo "</label>

                                            <div class=\"col-sm-10\">
                                                <input type=\"text\" id=\"input-link";
            // line 195
            echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
            echo "-language";
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "language_id", array(), "array");
            echo "\" name=\"ocslideshow_image[";
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][link]\" value=\"";
            if ($this->getAttribute($context["ocslideshow_image"], "link", array(), "array")) {
                echo "  ";
                echo $this->getAttribute($context["ocslideshow_image"], "link", array(), "array");
                echo " ";
            }
            echo "\" placeholder=\"";
            echo (isset($context["entry_link"]) ? $context["entry_link"] : null);
            echo "\" class=\"form-control\" />
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"thumb-image-";
            // line 199
            echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
            echo "-";
            echo (isset($context["token_random"]) ? $context["token_random"] : null);
            echo "\">";
            echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <a href=\"\" id=\"thumb-image-";
            // line 201
            echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
            echo "-";
            echo (isset($context["token_random"]) ? $context["token_random"] : null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            if ($this->getAttribute($context["ocslideshow_image"], "thumb", array(), "array")) {
                echo " ";
                echo $this->getAttribute($context["ocslideshow_image"], "thumb", array(), "array");
                echo " ";
            } else {
                echo "  ";
                echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
                echo " ";
            }
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" /></a>
                                                <input type=\"hidden\"  name=\"ocslideshow_image[";
            // line 202
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][image]\"  value=\"";
            echo $this->getAttribute($context["ocslideshow_image"], "image", array(), "array");
            echo "\" id=\"input-image";
            echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
            echo "-";
            echo (isset($context["token_random"]) ? $context["token_random"] : null);
            echo "\" />
                                            </div>
                                        </div>

                                        <div class=\"form-group\" style=\"display: none\">
                                            <label class=\"col-sm-2 control-label\" for=\"thumb-image-";
            // line 207
            echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
            echo "-";
            echo ((isset($context["token_random"]) ? $context["token_random"] : null) + 1);
            echo "\">";
            echo (isset($context["entry_small_image"]) ? $context["entry_small_image"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <a href=\"\" id=\"thumb-image-";
            // line 209
            echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
            echo "-";
            echo ((isset($context["token_random"]) ? $context["token_random"] : null) + 1);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            if ($this->getAttribute($context["ocslideshow_image"], "small_thumb", array(), "array")) {
                echo " ";
                echo $this->getAttribute($context["ocslideshow_image"], "small_thumb", array(), "array");
                echo " ";
            } else {
                echo "  ";
                echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
                echo " ";
            }
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" /></a>
                                                <input type=\"hidden\"  name=\"ocslideshow_image[";
            // line 210
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][small_image]\"  value=\"";
            echo $this->getAttribute($context["ocslideshow_image"], "small_image", array(), "array");
            echo "\" id=\"input-image";
            echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
            echo "-";
            echo ((isset($context["token_random"]) ? $context["token_random"] : null) + 1);
            echo "\" />
                                            </div>
                                        </div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-type\">";
            // line 216
            echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <select name=\"ocslideshow_image[";
            // line 218
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][type]\" id=\"input-type\" class=\"form-control\">
                                                    ";
            // line 219
            if ($this->getAttribute($context["ocslideshow_image"], "type", array(), "array")) {
                // line 220
                echo "                                                    ";
                if (($this->getAttribute($context["ocslideshow_image"], "type", array(), "array") == 1)) {
                    // line 221
                    echo "                                                    <option selected=\"selected\" value=\"1\">Type 1</option>
                                                    ";
                } else {
                    // line 223
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                    <option value=\"1\">Type 1</option>
                                                    ";
                }
                // line 226
                echo "                                                    ";
                if (($this->getAttribute($context["ocslideshow_image"], "type", array(), "array") == 2)) {
                    // line 227
                    echo "                                                    <option selected=\"selected\" value=\"2\">Type 2</option>
                                                     ";
                } else {
                    // line 229
                    echo "                                                    <option value=\"2\">Type 2</option>
                                                    ";
                }
                // line 231
                echo "                                                    ";
                if (($this->getAttribute($context["ocslideshow_image"], "type", array(), "array") == 3)) {
                    // line 232
                    echo "                                                    <option selected=\"selected\" value=\"3\">Type 3</option>
                                                    ";
                } else {
                    // line 234
                    echo "                                                    <option value=\"3\">Type 3</option>
                                                     ";
                }
                // line 236
                echo "                                                     ";
            } else {
                // line 237
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Type 1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Type 2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Type 3</option>
                                                     ";
            }
            // line 241
            echo "                                                </select>
                                            </div>
                                        </div>

\t\t\t\t\t\t\t\t\t   \t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
            // line 246
            echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 249
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 250
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"banner_store[]\" value=\"";
                // line 252
                echo $this->getAttribute($context["store"], "store_id", array(), "array");
                echo "\" ";
                if (twig_in_filter($this->getAttribute($context["store"], "store_id", array(), "array"), $this->getAttribute($context["ocslideshow_image"], "banner_store", array(), "array"))) {
                    echo "  checked=\"checked\" ";
                }
                echo "  />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 253
                echo $this->getAttribute($context["store"], "name", array(), "array");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 257
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t   ";
            // line 262
            $context["image_row"] = ((isset($context["image_row"]) ? $context["image_row"] : null) + 1);
            // line 263
            echo "\t\t\t\t\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocslideshow_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t     \t
\t\t\t\t\t\t
\t\t  
        </form>
      </div>
    </div>
  </div>
</div>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
    <script type=\"text/javascript\"><!--
    var module_row = ";
        // line 280
        echo (isset($context["module_row"]) ? $context["module_row"] : null);
        echo ";

    function addModule() {
        var token = Math.random().toString(36).substr(2);

        html  = '<div class=\"tab-pane\" id=\"tab-module' + token + '\">';
        html += '  <ul class=\"nav nav-tabs\" id=\"language' + token + '\">';
    \t";
        // line 287
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 288
            echo "            html += '    <li><a href=\"#tab-module' + token + '-language";
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array(), "array");
            echo "/";
            echo $this->getAttribute($context["language"], "code", array(), "array");
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array(), "array");
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array(), "array");
            echo "</a></li>';
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        echo "        html += '  </ul>';

        html += '  <div class=\"tab-content\">';


    \t";
        // line 295
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 296
            echo "            html += '    <div class=\"tab-pane\" id=\"tab-module' + token + '-language";
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\">';

            html += '      <div class=\"form-group\">';
            html += '        <label class=\"col-sm-2 control-label\" for=\"input-title' + token + '-language";
            // line 299
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\">";
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "</label>';
            html += '        <div class=\"col-sm-10\"><input type =\"text\" name=\"ocslideshow_image[' + token + '][ocslideshow_image_description][";
            // line 300
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "][title]\"placeholder=\"";
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "\" class=\"form-control\" id=\"input-title' + token + '-language";
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\"/></div>';
            html += '      </div>';

            html += '      <div class=\"form-group\">';
            html += '        <label class=\"col-sm-2 control-label\" for=\"input-subtitle' + token + '-language";
            // line 304
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\">";
            echo (isset($context["entry_subtitle"]) ? $context["entry_subtitle"] : null);
            echo "</label>';
            html += '        <div class=\"col-sm-10\"><input class=\"form-control\" type =\"text\" name=\"ocslideshow_image[' + token + '][ocslideshow_image_description][";
            // line 305
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "][sub_title]\" placeholder=\"";
            echo (isset($context["entry_subtitle"]) ? $context["entry_subtitle"] : null);
            echo "\" id=\"input-subtitle' + token + '-language";
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\"/></div>';
            html += '      </div>';



            html += '      <div class=\"form-group\">';
            html += '        <label class=\"col-sm-2 control-label\" for=\"input-description' + token + '-language";
            // line 311
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>';
            html += '        <div class=\"col-sm-10\"><textarea class=\"form-control summernote\" name=\"ocslideshow_image[' + token + '][ocslideshow_image_description][";
            // line 312
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "][description]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-description' + token + '-language";
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\"></textarea></div>';
            html += '      </div>';
            html += '    </div>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        echo "
        html += '      <div class=\"form-group\">';
        html += '        <label class=\"col-sm-2 control-label\" for=\"input-link' + token + '-language";
        // line 318
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "language_id", array(), "array");
        echo "\">";
        echo (isset($context["entry_link"]) ? $context["entry_link"] : null);
        echo "</label>';
        html += '        <div class=\"col-sm-10\"><input class=\"form-control\" type=\"text\" name=\"ocslideshow_image[' + token + '][link]\" placeholder=\"";
        // line 319
        echo (isset($context["entry_link"]) ? $context["entry_link"] : null);
        echo "\" id=\"input-link' + token + '-language";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "language_id", array(), "array");
        echo "\"/></div>';
        html += '      </div>';

        html += '      <div class=\"form-group\">';
        html += '        <label class=\"col-sm-2 control-label\" for=\"input-image' + token + '-language";
        // line 323
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "language_id", array(), "array");
        echo "\">";
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>';

        html += '<div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image' + token + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 325
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a><input type=\"hidden\" name=\"ocslideshow_image[' + token + '][image]\" value=\"\" id=\"input-image' + token + '\" /></div>';
        html += '      </div>';

        html += '<div class=\"form-group\" style=\"display: none;\">';
        html += '<label class=\"col-sm-2 control-label\" for=\"input-image\">'+'";
        // line 329
        echo (isset($context["entry_small_image"]) ? $context["entry_small_image"] : null);
        echo "'+'</label>';

        html += '<div class=\"col-sm-10\">';
        html += '<a href=\"\" id=\"thumb-image-'+'";
        // line 332
        echo ((isset($context["token_random"]) ? $context["token_random"] : null) + 1);
        echo "'+'\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>';
        html += '<input type=\"hidden\"  name=\"ocslideshow_image['+ token +'][small_image]\"  value=\"\" id=\"input-image'+'";
        // line 333
        echo ((isset($context["token_random"]) ? $context["token_random"] : null) + 1);
        echo "'+'\" />';

        html += '</div>';
        html += '</div>';

        html +='  <div class=\"form-group\">';
        html+='<label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 339
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo "</label>';
        html +='<div class=\"col-sm-10\">';
        html +='<select name=\"ocslideshow_image[' + token + '][type]\" id=\"input-type\" class=\"form-control\">';
        html +='<option value=\"1\" >Type 1</option><option value=\"2\">Type 2</option><option value=\"3\">Type 3</option>';
        html +='</select>'
        html +='</div></div>'

        html +='<div class=\"form-group\">';
        html +='<label class=\"col-sm-2 control-label\">";
        // line 347
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>';
        html +='<div class=\"col-sm-10\">'
        html +='<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">';
\t\t";
        // line 350
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 351
            echo "\t\t
            html +='<div class=\"checkbox\">';
            html +='<label>';
            html +='<input type=\"checkbox\" name=\"ocslideshow_image[' + token + '][banner_store][]\" value=\"";
            // line 354
            echo $this->getAttribute($context["store"], "store_id", array(), "array");
            echo "\"  />";
            echo $this->getAttribute($context["store"], "name", array(), "array");
            echo " ';
            html +='</label>';
            html +='</div>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 358
        echo "        html +='</div>';
        html +='</div>';
        html +='</div>';




        html += '  </div>';
        html += '</div>';

        \$('.tab-content:first-child').prepend(html);

\t\t";
        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 371
            echo "            \$('#input-description' + token + '-language";
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "').summernote({
                height: 300
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 375
        echo "
        \$('#module-add').before('<li><a href=\"#tab-module' + token + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'a[href=\\\\\\'#tab-module' + token + '\\\\\\']\\').parent().remove(); \$(\\'#tab-module' + token + '\\').remove(); \$(\\'#module a:first\\').tab(\\'show\\');\"></i> ";
        // line 376
        echo (isset($context["tab_banner"]) ? $context["tab_banner"] : null);
        echo " ' + module_row + '</a></li>');

        \$('#module a[href=\\'#tab-module' + token + '\\']').tab('show');

        \$('#language' + token + ' li:first-child a').tab('show');

        module_row++;
    }
    //--></script>
    <script type=\"text/javascript\"><!--
    \$('#module li:first-child a').tab('show');
    \t";
        // line 387
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ocslideshow_images"]) ? $context["ocslideshow_images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ocslideshow_image"]) {
            // line 388
            echo "        \$('#language";
            echo $this->getAttribute($context["ocslideshow_image"], "key", array(), "array");
            echo " li:first-child a').tab('show');
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocslideshow_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 390
        echo "    //--></script>
<style type=\"text/css\">
    #module-add img {display:none!important;}
</style>
";
        // line 394
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/ocslideshow/ocslideshow_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1069 => 394,  1063 => 390,  1054 => 388,  1050 => 387,  1036 => 376,  1033 => 375,  1022 => 371,  1018 => 370,  1004 => 358,  992 => 354,  987 => 351,  983 => 350,  977 => 347,  966 => 339,  957 => 333,  949 => 332,  943 => 329,  934 => 325,  927 => 323,  918 => 319,  912 => 318,  908 => 316,  894 => 312,  888 => 311,  875 => 305,  869 => 304,  858 => 300,  852 => 299,  845 => 296,  841 => 295,  834 => 290,  817 => 288,  813 => 287,  803 => 280,  785 => 264,  779 => 263,  777 => 262,  770 => 257,  760 => 253,  752 => 252,  748 => 250,  744 => 249,  738 => 246,  731 => 241,  725 => 237,  722 => 236,  718 => 234,  714 => 232,  711 => 231,  707 => 229,  703 => 227,  700 => 226,  695 => 223,  691 => 221,  688 => 220,  686 => 219,  682 => 218,  677 => 216,  662 => 210,  644 => 209,  635 => 207,  621 => 202,  603 => 201,  594 => 199,  575 => 195,  565 => 192,  561 => 190,  530 => 183,  521 => 181,  498 => 177,  488 => 174,  464 => 169,  454 => 166,  445 => 163,  441 => 162,  435 => 158,  416 => 156,  412 => 155,  408 => 154,  403 => 153,  398 => 152,  396 => 151,  387 => 146,  381 => 145,  379 => 144,  366 => 143,  361 => 142,  359 => 141,  351 => 135,  346 => 133,  341 => 132,  336 => 130,  331 => 129,  329 => 128,  323 => 125,  315 => 119,  310 => 117,  305 => 116,  300 => 114,  295 => 113,  293 => 112,  287 => 109,  280 => 104,  275 => 102,  270 => 101,  265 => 99,  260 => 98,  258 => 97,  252 => 94,  245 => 89,  240 => 87,  235 => 86,  230 => 84,  225 => 83,  223 => 82,  217 => 79,  210 => 74,  205 => 72,  200 => 71,  195 => 69,  190 => 68,  188 => 67,  182 => 64,  171 => 56,  164 => 54,  159 => 52,  151 => 46,  128 => 44,  124 => 43,  118 => 40,  113 => 37,  107 => 35,  105 => 34,  99 => 33,  94 => 31,  88 => 28,  82 => 25,  78 => 23,  70 => 19,  68 => 18,  62 => 14,  51 => 12,  47 => 11,  42 => 9,  36 => 8,  32 => 7,  26 => 3,  24 => 2,  19 => 1,);
    }
}
/* {{header}}{{column_left}}*/
/* 	{% set token_random = random() %}*/
/* <div id="content">*/
/*      <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-html" data-toggle="tooltip" title="{{button_save}}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{cancel}}" data-toggle="tooltip" title="{{button_cancel}}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*             <h1>{{heading_title}}</h1>*/
/*               <ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 				<li><a href="{{breadcrumb.href}}">{{breadcrumb.text}}</a></li>*/
/* 				{% endfor %}*/
/* 			  </ul>*/
/*         </div>*/
/*     </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{error_warning}}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{text_edit}}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{action}}" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal">*/
/*           */
/* 		   <div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-name">{{entry_name}}</label>*/
/* 				<div class="col-sm-10">*/
/* 				  <input type="text" name="name" value="{{name}}" placeholder="{{entry_name}}" id="input-name" class="form-control" />*/
/* 				  {% if error_name %}*/
/* 				  <div class="text-danger">{{error_name}}</div>*/
/* 				  {% endif %}*/
/* 				</div>*/
/* 			  </div>*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-effect">{{entry_effect}}</label>*/
/* 				<div class="col-sm-10">*/
/* 					<select name="effect" id="input-effect" class="form-control">*/
/* 						{% for effect1 in effect_option %}*/
/* 									<option  {% if  effect1['value'] | trim == effect | trim %}  selected ="selected"  {% endif %}  value="{% if  effect1['value'] %}  {{effect1['label']}}  {% endif %}">{% if  effect1['value'] %}  {{effect1['label']}}  {% endif %} </option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			*/
/* 			<div class="form-group required">*/
/* 				<label class="col-sm-2 control-label" for="input-delay">{{entry_delay}}</label>*/
/* 				<div class="col-sm-10">*/
/* 					<input type="text" name="delay" value="{{delay}}" placeholder="{{entry_delay}}" id="input-delay" class="form-control" />*/
/* 					<?php if ($error_delay) { ?>*/
/* 					<div class="text-danger">{{error_delay}}</div>*/
/* 					<?php } ?>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* */
/* */
/*                  	<div class="form-group" >*/
/* 						<label class="col-sm-2 control-label" for="input-auto">{{entry_auto}}</label>*/
/* 						<div class="col-sm-10">*/
/* 						  <select name="auto" id="input-auto" class="form-control">*/
/* 							{% if auto %}*/
/* 							<option value="1" selected="selected">{{text_enabled}}</option>*/
/* 							<option value="0">{{text_disabled}}</option>*/
/* 							{% else %}*/
/* 							<option value="1">{{text_enabled}}</option>*/
/* 							<option value="0" selected="selected">{{text_disabled}}</option>*/
/* 							{% endif %}*/
/* 						  </select>*/
/* 						</div>*/
/* 					</div>*/
/* */
/*                   	<div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-hover">{{entry_hover}}</label>*/
/* 						<div class="col-sm-10">*/
/* 						  <select name="hover" id="input-hover" class="form-control">*/
/* 							{% if hover %}*/
/* 							<option value="1" selected="selected">{{text_enabled}}</option>*/
/* 							<option value="0">{{text_disabled}}</option>*/
/* 							{% else %}*/
/* 							<option value="1">{{text_enabled}}</option>*/
/* 							<option value="0" selected="selected">{{text_disabled}}</option>*/
/* 							{% endif %}*/
/* 						  </select>*/
/* 						</div>*/
/* 					  </div>*/
/* 					    */
/* 					 <div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-nextback">{{entry_nextback}}</label>*/
/* 						<div class="col-sm-10">*/
/* 						  <select name="nextback" id="input-nextback" class="form-control">*/
/* 							{% if nextback %}*/
/* 							<option value="1" selected="selected">{{text_enabled}}</option>*/
/* 							<option value="0">{{text_disabled}}</option>*/
/* 							{% else %}*/
/* 							<option value="1">{{text_enabled}}</option>*/
/* 							<option value="0" selected="selected">{{text_disabled}}</option>*/
/* 							{% endif %}*/
/* 						  </select>*/
/* 						</div>*/
/* 					  </div>*/
/* 						*/
/*  					 <div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-contrl">{{entry_contrl}}</label>*/
/* 						<div class="col-sm-10">*/
/* 						  <select name="contrl" id="input-contrl" class="form-control">*/
/* 							{% if contrl %}*/
/* 							<option value="1" selected="selected">{{text_enabled}}</option>*/
/* 							<option value="0">{{text_disabled}}</option>*/
/* 							{% else %}*/
/* 							<option value="1">{{text_enabled}}</option>*/
/* 							<option value="0" selected="selected">{{text_disabled}}</option>*/
/* 							{% endif %}*/
/* 						  </select>*/
/* 						</div>*/
/* 					  </div>*/
/* 					  */
/* 						*/
/* 					 <div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-status">{{entry_status}}</label>*/
/* 						<div class="col-sm-10">*/
/* 						  <select name="status" id="input-status" class="form-control">*/
/* 							{% if status %}*/
/* 							<option value="1" selected="selected">{{text_enabled}}</option>*/
/* 							<option value="0">{{text_disabled}}</option>*/
/* 							{% else %}*/
/* 							<option value="1">{{text_enabled}}</option>*/
/* 							<option value="0" selected="selected">{{text_disabled}}</option>*/
/* 							{% endif %}*/
/* 						  </select>*/
/* 						</div>*/
/* 					  </div>*/
/* 					    <div class="row">*/
/* 								<div class="col-sm-2">*/
/* 									<ul class="nav nav-pills nav-stacked" id="module">*/
/* 										{% set module_row = 0 %}*/
/* 										{% for ocslideshow_image in  ocslideshow_images %}*/
/* 										<li><a href="#tab-module{{ocslideshow_image['key']}}" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$('a[href=\'#tab-module{{ocslideshow_image['key']}}\']').parent().remove(); $('#tab-module{{ocslideshow_image['key']}}').remove(); $('#module a:first').tab('show');"></i> {{tab_banner}}  {{module_row}}</a></li>*/
/* 										{% set module_row = module_row +1 %}*/
/* 										{% endfor %}*/
/* 										<li id="module-add"><a onclick="addModule();"><i class="fa fa-plus-circle"></i> {{button_add_banner}}</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 								<div class="col-sm-10">*/
/*                             <div class="tab-content">*/
/* 							{% set  image_row = 0 %}*/
/*                                {% for ocslideshow_image in  ocslideshow_images %}*/
/* 									 <div class="tab-pane" id="tab-module{{ocslideshow_image['key']}}">*/
/* 										<ul class="nav nav-tabs" id="language{{ocslideshow_image['key']}}">*/
/* 											{% for language in  languages %}*/
/* 											<li><a href="#tab-module{{ocslideshow_image['key']}}-language{{language['language_id']}}" data-toggle="tab"><img src="language/{{language['code']}}/{{language['code']}}.png" title="{{language['name']}}" /> {{language['name']}}</a></li>*/
/* 												{% endfor %}*/
/* 										</ul>*/
/* 								*/
/* 								   <div class="tab-content">*/
/* 										*/
/* 										{% for language in  languages %}*/
/*                                         <div class="tab-pane" id="tab-module{{ocslideshow_image['key']}}-language{{language['language_id']}}">*/
/* */
/*                                             <div class="form-group">*/
/*                                                 <label class="col-sm-2 control-label" for="input-title{{ocslideshow_image['key']}}-language{{language['language_id']}}">{{entry_title}}</label>*/
/* */
/*                                                 <div class="col-sm-10">*/
/*                                                     <input type="text" id="input-title{{ocslideshow_image['key']}}-language{{language['language_id']}}" name="ocslideshow_image[{{image_row}}][ocslideshow_image_description][{{language['language_id']}}][title]" value="{% if ocslideshow_image['ocslideshow_image_description'][language['language_id']] %} {{ocslideshow_image['ocslideshow_image_description'][language['language_id']]['title']}} {% else %}  {% endif %}" placeholder="{{entry_title}}" class="form-control" />*/
/*                                                 </div>*/
/*                                             </div>*/
/* */
/*                                             <div class="form-group">*/
/*                                                 <label class="col-sm-2 control-label" for="input-subtitle{{ocslideshow_image['key']}}-language{{language['language_id']}}">{{entry_subtitle}}</label>*/
/* */
/*                                                 <div class="col-sm-10">*/
/*                                                     <input type="text" id="input-subtitle{{ocslideshow_image['key']}}-language{{language['language_id']}}" name="ocslideshow_image[{{image_row}}][ocslideshow_image_description][{{language['language_id']}}][sub_title]" value="{% if ocslideshow_image['ocslideshow_image_description'][language['language_id']] %} {{ocslideshow_image['ocslideshow_image_description'][language['language_id']]['sub_title']}} {% else %}  {% endif %}" placeholder="{{entry_title}}" class="form-control" />*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="form-group">*/
/*                                                 <label class="col-sm-2 control-label" for="input-description{{ocslideshow_image['key']}}-language{{language['language_id']}}">{{entry_description}}</label>*/
/*                                                 <div class="col-sm-10">*/
/*                                                     <textarea data-toggle="summernote" data-lang="{{summernote}}" name="ocslideshow_image[{{image_row}}][ocslideshow_image_description][{{language['language_id']}}][description]" placeholder="{{entry_description}}" id="input-description{{ocslideshow_image['key']}}-language{{language['language_id']}}" class="form-control">{% if ocslideshow_image['ocslideshow_image_description'][language['language_id']] %} {{ocslideshow_image['ocslideshow_image_description'][language['language_id']]['description']}} {% else %}  {% endif %}</textarea>*/
/*                                                 </div>*/
/*                                             </div>*/
/* */
/*                                         </div>*/
/* */
/*                                        {% endfor %}*/
/* 									   */
/* 									     <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label" for="input-link{{ocslideshow_image['key']}}-language{{language['language_id']}}">{{entry_link}}</label>*/
/* */
/*                                             <div class="col-sm-10">*/
/*                                                 <input type="text" id="input-link{{ocslideshow_image['key']}}-language{{language['language_id']}}" name="ocslideshow_image[{{image_row}}][link]" value="{% if  ocslideshow_image['link'] %}  {{ocslideshow_image['link']}} {% endif %}" placeholder="{{entry_link}}" class="form-control" />*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label" for="thumb-image-{{ocslideshow_image['key']}}-{{token_random}}">{{entry_image}}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <a href="" id="thumb-image-{{ocslideshow_image['key']}}-{{token_random}}" data-toggle="image" class="img-thumbnail"><img src="{% if ocslideshow_image['thumb'] %} {{ocslideshow_image['thumb']}} {% else %}  {{placeholder}} {% endif %}" alt="" title="" data-placeholder="{{placeholder}}" /></a>*/
/*                                                 <input type="hidden"  name="ocslideshow_image[{{image_row}}][image]"  value="{{ocslideshow_image['image']}}" id="input-image{{ocslideshow_image['key']}}-{{token_random}}" />*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                         <div class="form-group" style="display: none">*/
/*                                             <label class="col-sm-2 control-label" for="thumb-image-{{ocslideshow_image['key']}}-{{token_random +1}}">{{entry_small_image}}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <a href="" id="thumb-image-{{ocslideshow_image['key']}}-{{token_random +1}}" data-toggle="image" class="img-thumbnail"><img src="{% if ocslideshow_image['small_thumb'] %} {{ocslideshow_image['small_thumb']}} {% else %}  {{placeholder}} {% endif %}" alt="" title="" data-placeholder="{{placeholder}}" /></a>*/
/*                                                 <input type="hidden"  name="ocslideshow_image[{{image_row}}][small_image]"  value="{{ocslideshow_image['small_image']}}" id="input-image{{ocslideshow_image['key']}}-{{token_random +1}}" />*/
/*                                             </div>*/
/*                                         </div>*/
/* 										*/
/* 										*/
/* 										  <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label" for="input-type">{{entry_type}}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <select name="ocslideshow_image[{{image_row}}][type]" id="input-type" class="form-control">*/
/*                                                     {% if ocslideshow_image['type'] %}*/
/*                                                     {% if ocslideshow_image['type'] == 1 %}*/
/*                                                     <option selected="selected" value="1">Type 1</option>*/
/*                                                     {% else %}*/
/* 													*/
/*                                                     <option value="1">Type 1</option>*/
/*                                                     {% endif %}*/
/*                                                     {% if ocslideshow_image['type'] == 2 %}*/
/*                                                     <option selected="selected" value="2">Type 2</option>*/
/*                                                      {% else %}*/
/*                                                     <option value="2">Type 2</option>*/
/*                                                     {% endif %}*/
/*                                                     {% if ocslideshow_image['type'] == 3 %}*/
/*                                                     <option selected="selected" value="3">Type 3</option>*/
/*                                                     {% else %}*/
/*                                                     <option value="3">Type 3</option>*/
/*                                                      {% endif %}*/
/*                                                      {% else %}*/
/* 														<option value="1">Type 1</option>*/
/* 														<option value="2">Type 2</option>*/
/* 														<option value="3">Type 3</option>*/
/*                                                      {% endif %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/* 									   	<div class="form-group">*/
/* 										<label class="col-sm-2 control-label">{{entry_store }}</label>*/
/* 										<div class="col-sm-10">*/
/* 											<div class="well well-sm" style="height: 150px; overflow: auto;"> */
/* 													{% for store in stores %}*/
/* 												<div class="checkbox">*/
/* 													<label>*/
/* 														<input type="checkbox" name="banner_store[]" value="{{store['store_id'] }}" {% if store['store_id'] in ocslideshow_image['banner_store'] %}  checked="checked" {% endif %}  />*/
/* 														{{store['name'] }}*/
/* 													</label>*/
/* 												</div>*/
/* 												{% endfor %}*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								   </div>*/
/* 								   </div>*/
/* 							   {%set image_row = image_row+1%}*/
/* 							   {% endfor %}*/
/* 							</div>*/
/* 						</div>*/
/* 						</div>*/
/* 					     	*/
/* 						*/
/* 		  */
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/*   <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*   <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/*     <script type="text/javascript"><!--*/
/*     var module_row = {{module_row}};*/
/* */
/*     function addModule() {*/
/*         var token = Math.random().toString(36).substr(2);*/
/* */
/*         html  = '<div class="tab-pane" id="tab-module' + token + '">';*/
/*         html += '  <ul class="nav nav-tabs" id="language' + token + '">';*/
/*     	{% for language in  languages %}*/
/*             html += '    <li><a href="#tab-module' + token + '-language{{language['language_id']}}" data-toggle="tab"><img src="language/{{language['code']}}/{{language['code']}}.png" title="{{language['name']}}" /> {{language['name']}}</a></li>';*/
/* 		{% endfor %}*/
/*         html += '  </ul>';*/
/* */
/*         html += '  <div class="tab-content">';*/
/* */
/* */
/*     	{% for language in  languages %}*/
/*             html += '    <div class="tab-pane" id="tab-module' + token + '-language{{language['language_id']}}">';*/
/* */
/*             html += '      <div class="form-group">';*/
/*             html += '        <label class="col-sm-2 control-label" for="input-title' + token + '-language{{language['language_id']}}">{{entry_title}}</label>';*/
/*             html += '        <div class="col-sm-10"><input type ="text" name="ocslideshow_image[' + token + '][ocslideshow_image_description][{{language['language_id']}}][title]"placeholder="{{entry_title}}" class="form-control" id="input-title' + token + '-language{{language['language_id']}}"/></div>';*/
/*             html += '      </div>';*/
/* */
/*             html += '      <div class="form-group">';*/
/*             html += '        <label class="col-sm-2 control-label" for="input-subtitle' + token + '-language{{language['language_id']}}">{{entry_subtitle}}</label>';*/
/*             html += '        <div class="col-sm-10"><input class="form-control" type ="text" name="ocslideshow_image[' + token + '][ocslideshow_image_description][{{language['language_id']}}][sub_title]" placeholder="{{entry_subtitle}}" id="input-subtitle' + token + '-language{{language['language_id']}}"/></div>';*/
/*             html += '      </div>';*/
/* */
/* */
/* */
/*             html += '      <div class="form-group">';*/
/*             html += '        <label class="col-sm-2 control-label" for="input-description' + token + '-language{{language['language_id']}}">{{entry_description}}</label>';*/
/*             html += '        <div class="col-sm-10"><textarea class="form-control summernote" name="ocslideshow_image[' + token + '][ocslideshow_image_description][{{language['language_id']}}][description]" placeholder="{{entry_description}}" id="input-description' + token + '-language{{language['language_id']}}"></textarea></div>';*/
/*             html += '      </div>';*/
/*             html += '    </div>';*/
/*         {% endfor %}*/
/* */
/*         html += '      <div class="form-group">';*/
/*         html += '        <label class="col-sm-2 control-label" for="input-link' + token + '-language{{language['language_id']}}">{{entry_link}}</label>';*/
/*         html += '        <div class="col-sm-10"><input class="form-control" type="text" name="ocslideshow_image[' + token + '][link]" placeholder="{{entry_link}}" id="input-link' + token + '-language{{language['language_id']}}"/></div>';*/
/*         html += '      </div>';*/
/* */
/*         html += '      <div class="form-group">';*/
/*         html += '        <label class="col-sm-2 control-label" for="input-image' + token + '-language{{language['language_id']}}">{{entry_image}}</label>';*/
/* */
/*         html += '<div class="col-sm-10"><a href="" id="thumb-image' + token + '" data-toggle="image" class="img-thumbnail"><img src="{{placeholder}}" alt="" title="" data-placeholder="{{placeholder}}" /></a><input type="hidden" name="ocslideshow_image[' + token + '][image]" value="" id="input-image' + token + '" /></div>';*/
/*         html += '      </div>';*/
/* */
/*         html += '<div class="form-group" style="display: none;">';*/
/*         html += '<label class="col-sm-2 control-label" for="input-image">'+'{{entry_small_image}}'+'</label>';*/
/* */
/*         html += '<div class="col-sm-10">';*/
/*         html += '<a href="" id="thumb-image-'+'{{token_random+1}}'+'" data-toggle="image" class="img-thumbnail"><img src="{{placeholder}}" alt="" title="" data-placeholder="{{placeholder}}" /></a>';*/
/*         html += '<input type="hidden"  name="ocslideshow_image['+ token +'][small_image]"  value="" id="input-image'+'{{token_random+1}}'+'" />';*/
/* */
/*         html += '</div>';*/
/*         html += '</div>';*/
/* */
/*         html +='  <div class="form-group">';*/
/*         html+='<label class="col-sm-2 control-label" for="input-image">{{entry_type}}</label>';*/
/*         html +='<div class="col-sm-10">';*/
/*         html +='<select name="ocslideshow_image[' + token + '][type]" id="input-type" class="form-control">';*/
/*         html +='<option value="1" >Type 1</option><option value="2">Type 2</option><option value="3">Type 3</option>';*/
/*         html +='</select>'*/
/*         html +='</div></div>'*/
/* */
/*         html +='<div class="form-group">';*/
/*         html +='<label class="col-sm-2 control-label">{{entry_store}}</label>';*/
/*         html +='<div class="col-sm-10">'*/
/*         html +='<div class="well well-sm" style="height: 150px; overflow: auto;">';*/
/* 		{% for store in stores %}*/
/* 		*/
/*             html +='<div class="checkbox">';*/
/*             html +='<label>';*/
/*             html +='<input type="checkbox" name="ocslideshow_image[' + token + '][banner_store][]" value="{{store['store_id']}}"  />{{store['name']}} ';*/
/*             html +='</label>';*/
/*             html +='</div>';*/
/*         {% endfor %}*/
/*         html +='</div>';*/
/*         html +='</div>';*/
/*         html +='</div>';*/
/* */
/* */
/* */
/* */
/*         html += '  </div>';*/
/*         html += '</div>';*/
/* */
/*         $('.tab-content:first-child').prepend(html);*/
/* */
/* 		{% for language in  languages %}*/
/*             $('#input-description' + token + '-language{{language['language_id']}}').summernote({*/
/*                 height: 300*/
/*             });*/
/*         {% endfor %}*/
/* */
/*         $('#module-add').before('<li><a href="#tab-module' + token + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$(\'a[href=\\\'#tab-module' + token + '\\\']\').parent().remove(); $(\'#tab-module' + token + '\').remove(); $(\'#module a:first\').tab(\'show\');"></i> {{tab_banner}} ' + module_row + '</a></li>');*/
/* */
/*         $('#module a[href=\'#tab-module' + token + '\']').tab('show');*/
/* */
/*         $('#language' + token + ' li:first-child a').tab('show');*/
/* */
/*         module_row++;*/
/*     }*/
/*     //--></script>*/
/*     <script type="text/javascript"><!--*/
/*     $('#module li:first-child a').tab('show');*/
/*     	{% for ocslideshow_image in  ocslideshow_images %}*/
/*         $('#language{{ocslideshow_image['key']}} li:first-child a').tab('show');*/
/*     {% endfor %}*/
/*     //--></script>*/
/* <style type="text/css">*/
/*     #module-add img {display:none!important;}*/
/* </style>*/
/* {{footer}}*/
