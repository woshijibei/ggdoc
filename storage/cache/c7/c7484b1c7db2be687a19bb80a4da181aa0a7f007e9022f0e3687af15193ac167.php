<?php

/* design/layout_plaza_form.twig */
class __TwigTemplate_b0439cf977301e89d7ac342415e55517f52182b9cc3b9c739be260d5189de933 extends Twig_Template
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
        <button type=\"submit\" form=\"form-layout\" data-toggle=\"tooltip\" title=\"";
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
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-layout\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 29
        echo (isset($context["text_route"]) ? $context["text_route"] : null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 31
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 33
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                ";
        // line 34
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 35
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
                ";
        }
        // line 37
        echo "              </div>
            </div>
            <table id=\"route\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 42
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 43
        echo (isset($context["entry_route"]) ? $context["entry_route"] : null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 48
        $context["route_row"] = 0;
        // line 49
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_routes"]) ? $context["layout_routes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_route"]) {
            // line 50
            echo "                <tr id=\"route-row";
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "\">
                  <td class=\"text-left\"><select name=\"layout_route[";
            // line 51
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "][store_id]\" class=\"form-control\">
                      <option value=\"0\">";
            // line 52
            echo (isset($context["text_default"]) ? $context["text_default"] : null);
            echo "</option>
                      ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 54
                echo "                      ";
                if (($this->getAttribute($context["store"], "store_id", array()) == $this->getAttribute($context["layout_route"], "store_id", array()))) {
                    // line 55
                    echo "                      <option value=\"";
                    echo $this->getAttribute($context["store"], "store_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["store"], "name", array());
                    echo "</option>
                      ";
                } else {
                    // line 57
                    echo "                      <option value=\"";
                    echo $this->getAttribute($context["store"], "store_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["store"], "name", array());
                    echo "</option>
                      ";
                }
                // line 59
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                    </select></td>
                  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[";
            // line 61
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "][route]\" value=\"";
            echo $this->getAttribute($context["layout_route"], "route", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_route"]) ? $context["entry_route"] : null);
            echo "\" class=\"form-control\" /></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#route-row";
            // line 62
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                </tr>
                ";
            // line 64
            $context["route_row"] = ((isset($context["route_row"]) ? $context["route_row"] : null) + 1);
            // line 65
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"addRoute();\" data-toggle=\"tooltip\" title=\"";
        // line 70
        echo (isset($context["button_route_add"]) ? $context["button_route_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <fieldset>
            <legend>";
        // line 76
        echo (isset($context["text_module"]) ? $context["text_module"] : null);
        echo "</legend>
            ";
        // line 77
        $context["module_row"] = 0;
        // line 78
        echo "            <div class=\"row\">
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-left\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 83
        echo (isset($context["text_column_left"]) ? $context["text_column_left"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 88
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "column_left")) {
                // line 89
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 91
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 93
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 94
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 95
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 96
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 98
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 100
                        echo "                            ";
                    } else {
                        // line 101
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 102
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 103
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 105
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 107
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 108
                        echo "                            ";
                    }
                    // line 109
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 112
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 113
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 114
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 115
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 119
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 120
                echo "                    ";
            }
            // line 121
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 129
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 130
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 131
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 133
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 134
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "                            ";
            }
            // line 137
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-left');\" data-toggle=\"tooltip\" title=\"";
        // line 141
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-6 col-md-4 col-sm-12\">
\t\t\t\t<table id=\"module-block1\" class=\"table table-striped table-bordered table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<td class=\"text-center\">";
        // line 152
        echo (isset($context["text_block1"]) ? $context["text_block1"] : null);
        echo "</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 157
            echo "\t\t";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "block1")) {
                // line 158
                echo "\t\t\t<tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<select name=\"layout_module[";
                // line 161
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 162
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 163
                    echo "\t\t\t\t\t\t<optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 164
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 165
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 166
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 168
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 170
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 171
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 172
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 173
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 175
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 177
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 178
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 179
                    echo "\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 181
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 182
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 183
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
\t\t\t\t\t\t<div class=\"input-group-btn\"><a href=\"";
                // line 184
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 185
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                // line 190
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 191
                echo "\t\t";
            }
            // line 192
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td class=\"text-left\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 201
            echo "\t\t\t\t\t<optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 202
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 203
                echo "\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 205
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 206
                    echo "\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 209
            echo "\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('block1');\" data-toggle=\"tooltip\" title=\"";
        // line 213
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tfoot>
</table>
                <table id=\"module-content-top\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 223
        echo (isset($context["text_content_top"]) ? $context["text_content_top"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 228
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "content_top")) {
                // line 229
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 231
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 232
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 233
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 234
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 235
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 236
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 238
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 240
                        echo "                            ";
                    } else {
                        // line 241
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 242
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 243
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 245
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 247
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 248
                        echo "                            ";
                    }
                    // line 249
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 251
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 252
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 253
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"> <a href=\"";
                // line 254
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 255
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 259
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 260
                echo "                    ";
            }
            // line 261
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 268
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 269
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 270
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 271
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 273
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 274
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 276
                echo "                            ";
            }
            // line 277
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-top');\" data-toggle=\"tooltip\" title=\"";
        // line 281
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-content-bottom\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 290
        echo (isset($context["text_content_bottom"]) ? $context["text_content_bottom"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 295
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "content_bottom")) {
                // line 296
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 298
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 299
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 300
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 301
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 302
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 303
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 305
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 307
                        echo "                            ";
                    } else {
                        // line 308
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 309
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 310
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 312
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 314
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 315
                        echo "                            ";
                    }
                    // line 316
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 318
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 319
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 320
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 321
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 322
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 326
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 327
                echo "                    ";
            }
            // line 328
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 329
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 335
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 336
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 337
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 338
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 340
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 341
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 343
                echo "                            ";
            }
            // line 344
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 346
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-bottom');\" data-toggle=\"tooltip\" title=\"";
        // line 348
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
\t\t\t\t<table id=\"module-block2\" class=\"table table-striped table-bordered table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<td class=\"text-center\">";
        // line 357
        echo (isset($context["text_block2"]) ? $context["text_block2"] : null);
        echo "</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 361
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 362
            echo "\t\t";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "block2")) {
                // line 363
                echo "\t\t\t<tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<select name=\"layout_module[";
                // line 366
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 367
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 368
                    echo "\t\t\t\t\t\t<optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 369
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 370
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 371
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 373
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 375
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 376
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 377
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 378
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 380
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 382
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 383
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 384
                    echo "\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 386
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 387
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 388
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
\t\t\t\t\t\t<div class=\"input-group-btn\"><a href=\"";
                // line 389
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 390
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                // line 395
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 396
                echo "\t\t";
            }
            // line 397
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 398
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td class=\"text-left\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t";
        // line 405
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 406
            echo "\t\t\t\t\t<optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 407
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 408
                echo "\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 410
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 411
                    echo "\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 413
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 414
            echo "\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 416
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('block2');\" data-toggle=\"tooltip\" title=\"";
        // line 418
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tfoot>
</table>
<table id=\"module-block3\" class=\"table table-striped table-bordered table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<td class=\"text-center\">";
        // line 428
        echo (isset($context["text_block3"]) ? $context["text_block3"] : null);
        echo "</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 432
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 433
            echo "\t\t";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "block3")) {
                // line 434
                echo "\t\t\t<tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<select name=\"layout_module[";
                // line 437
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 438
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 439
                    echo "\t\t\t\t\t\t<optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 440
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 441
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 442
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 444
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 446
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 447
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 448
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 449
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 451
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 453
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 454
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 455
                    echo "\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 457
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 458
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 459
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
\t\t\t\t\t\t<div class=\"input-group-btn\"><a href=\"";
                // line 460
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 461
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                // line 466
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 467
                echo "\t\t";
            }
            // line 468
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 469
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td class=\"text-left\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t";
        // line 476
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 477
            echo "\t\t\t\t\t<optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 478
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 479
                echo "\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 481
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 482
                    echo "\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 484
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 485
            echo "\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 487
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('block3');\" data-toggle=\"tooltip\" title=\"";
        // line 489
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tfoot>
</table>
<table id=\"module-block4\" class=\"table table-striped table-bordered table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<td class=\"text-center\">";
        // line 499
        echo (isset($context["text_block4"]) ? $context["text_block4"] : null);
        echo "</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 503
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 504
            echo "\t\t";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "block4")) {
                // line 505
                echo "\t\t\t<tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<select name=\"layout_module[";
                // line 508
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 509
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 510
                    echo "\t\t\t\t\t\t<optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 511
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 512
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 513
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 515
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 517
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 518
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 519
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 520
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 522
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 524
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 525
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 526
                    echo "\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 528
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 529
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 530
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
\t\t\t\t\t\t<div class=\"input-group-btn\"><a href=\"";
                // line 531
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 532
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                // line 537
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 538
                echo "\t\t";
            }
            // line 539
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 540
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td class=\"text-left\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t";
        // line 547
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 548
            echo "\t\t\t\t\t<optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 549
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 550
                echo "\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 552
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 553
                    echo "\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 555
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 556
            echo "\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 558
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('block4');\" data-toggle=\"tooltip\" title=\"";
        // line 560
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tfoot>
</table>
              </div>
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-right\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 572
        echo (isset($context["text_column_right"]) ? $context["text_column_right"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 576
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 577
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "column_right")) {
                // line 578
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 580
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 581
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 582
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 583
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 584
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 585
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 587
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 589
                        echo "                            ";
                    } else {
                        // line 590
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 591
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 592
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 594
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 596
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 597
                        echo "                            ";
                    }
                    // line 598
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 600
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 601
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 602
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 603
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 604
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 608
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 609
                echo "                    ";
            }
            // line 610
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 611
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 617
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 618
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 619
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 620
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 622
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 623
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 625
                echo "                            ";
            }
            // line 626
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 628
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-right');\" data-toggle=\"tooltip\" title=\"";
        // line 630
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
var route_row = ";
        // line 644
        echo (isset($context["route_row"]) ? $context["route_row"] : null);
        echo ";

function addRoute() {
\thtml  = '<tr id=\"route-row' + route_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"layout_route[' + route_row + '][store_id]\" class=\"form-control\">';
\thtml += '  <option value=\"0\">";
        // line 649
        echo (isset($context["text_default"]) ? $context["text_default"] : null);
        echo "</option>';
\t";
        // line 650
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 651
            echo "\thtml += '<option value=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["store"], "name", array()), "js");
            echo "</option>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 653
        echo "\thtml += '  </select></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[' + route_row + '][route]\" value=\"\" placeholder=\"";
        // line 654
        echo (isset($context["entry_route"]) ? $context["entry_route"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#route-row' + route_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 655
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#route tbody').append(html);
\t
\troute_row++;
}

var module_row = ";
        // line 663
        echo (isset($context["module_row"]) ? $context["module_row"] : null);
        echo ";

function addModule(type) {
\thtml  = '<tr id=\"module-row' + module_row + '\">';
    html += '  <td class=\"text-left\"><div class=\"input-group\"><select name=\"layout_module[' + module_row + '][code]\" class=\"form-control input-sm\">';
\t";
        // line 668
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 669
            echo "\thtml += '    <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["extension"], "name", array()), "js");
            echo "\">';
\t";
            // line 670
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 671
                echo "\thtml += '      <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["extension"], "name", array()), "js");
                echo "</option>';
\t";
            } else {
                // line 673
                echo "\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 674
                    echo "\thtml += '      <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "js");
                    echo "</option>';
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 676
                echo "\t";
            }
            // line 677
            echo "\thtml += '    </optgroup>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 679
        echo "\thtml += '  </select>';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][position]\" value=\"' + type.replace('-', '_') + '\" />';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" />';
\thtml += '  <div class=\"input-group-btn\"><a href=\"\" target=\"_blank\" type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 682
        echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a><button type=\"button\" onclick=\"\$(\\'#module-row' + module_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button></div></div></td>';
\thtml += '</tr>';
\t
\t\$('#module-' + type + ' tbody').append(html);
\t
\t\$('#module-' + type + ' tbody select[name=\\'layout_module[' + module_row + '][code]\\']').val(\$('#module-' + type + ' tfoot select').val());
\t
\t\$('#module-' + type + ' select[name*=\\'code\\']').trigger('change');
\t\t
\t\$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function(i, element) {
\t\t\$(element).val(i);
\t});
\t
\tmodule_row++;
}

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom, #module-block1, #module-block2, #module-block3, #module-block4').delegate('select[name*=\\'code\\']', 'change', function() {
\tvar part = this.value.split('.');
\t
\tif (!part[1]) {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 702
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
\t} else {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 704
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&module_id=' + part[1]);
\t}
});

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom, #module-block1, #module-block2, #module-block3, #module-block4').trigger('change');
//--></script> 
</div>
";
        // line 711
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "design/layout_plaza_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2059 => 711,  2049 => 704,  2044 => 702,  2019 => 682,  2014 => 679,  2007 => 677,  2004 => 676,  1993 => 674,  1988 => 673,  1980 => 671,  1978 => 670,  1973 => 669,  1969 => 668,  1961 => 663,  1950 => 655,  1946 => 654,  1943 => 653,  1932 => 651,  1928 => 650,  1924 => 649,  1916 => 644,  1899 => 630,  1895 => 628,  1888 => 626,  1885 => 625,  1874 => 623,  1869 => 622,  1861 => 620,  1859 => 619,  1854 => 618,  1850 => 617,  1842 => 611,  1836 => 610,  1833 => 609,  1831 => 608,  1822 => 604,  1816 => 603,  1810 => 602,  1804 => 601,  1801 => 600,  1794 => 598,  1791 => 597,  1785 => 596,  1777 => 594,  1769 => 592,  1766 => 591,  1761 => 590,  1758 => 589,  1750 => 587,  1742 => 585,  1739 => 584,  1737 => 583,  1732 => 582,  1728 => 581,  1724 => 580,  1718 => 578,  1715 => 577,  1711 => 576,  1704 => 572,  1689 => 560,  1685 => 558,  1678 => 556,  1675 => 555,  1664 => 553,  1659 => 552,  1651 => 550,  1649 => 549,  1644 => 548,  1640 => 547,  1631 => 540,  1625 => 539,  1622 => 538,  1620 => 537,  1610 => 532,  1604 => 531,  1598 => 530,  1592 => 529,  1589 => 528,  1582 => 526,  1579 => 525,  1573 => 524,  1565 => 522,  1557 => 520,  1554 => 519,  1549 => 518,  1546 => 517,  1538 => 515,  1530 => 513,  1527 => 512,  1525 => 511,  1520 => 510,  1516 => 509,  1512 => 508,  1505 => 505,  1502 => 504,  1498 => 503,  1491 => 499,  1478 => 489,  1474 => 487,  1467 => 485,  1464 => 484,  1453 => 482,  1448 => 481,  1440 => 479,  1438 => 478,  1433 => 477,  1429 => 476,  1420 => 469,  1414 => 468,  1411 => 467,  1409 => 466,  1399 => 461,  1393 => 460,  1387 => 459,  1381 => 458,  1378 => 457,  1371 => 455,  1368 => 454,  1362 => 453,  1354 => 451,  1346 => 449,  1343 => 448,  1338 => 447,  1335 => 446,  1327 => 444,  1319 => 442,  1316 => 441,  1314 => 440,  1309 => 439,  1305 => 438,  1301 => 437,  1294 => 434,  1291 => 433,  1287 => 432,  1280 => 428,  1267 => 418,  1263 => 416,  1256 => 414,  1253 => 413,  1242 => 411,  1237 => 410,  1229 => 408,  1227 => 407,  1222 => 406,  1218 => 405,  1209 => 398,  1203 => 397,  1200 => 396,  1198 => 395,  1188 => 390,  1182 => 389,  1176 => 388,  1170 => 387,  1167 => 386,  1160 => 384,  1157 => 383,  1151 => 382,  1143 => 380,  1135 => 378,  1132 => 377,  1127 => 376,  1124 => 375,  1116 => 373,  1108 => 371,  1105 => 370,  1103 => 369,  1098 => 368,  1094 => 367,  1090 => 366,  1083 => 363,  1080 => 362,  1076 => 361,  1069 => 357,  1057 => 348,  1053 => 346,  1046 => 344,  1043 => 343,  1032 => 341,  1027 => 340,  1019 => 338,  1017 => 337,  1012 => 336,  1008 => 335,  1000 => 329,  994 => 328,  991 => 327,  989 => 326,  980 => 322,  974 => 321,  968 => 320,  962 => 319,  959 => 318,  952 => 316,  949 => 315,  943 => 314,  935 => 312,  927 => 310,  924 => 309,  919 => 308,  916 => 307,  908 => 305,  900 => 303,  897 => 302,  895 => 301,  890 => 300,  886 => 299,  882 => 298,  876 => 296,  873 => 295,  869 => 294,  862 => 290,  850 => 281,  846 => 279,  839 => 277,  836 => 276,  825 => 274,  820 => 273,  812 => 271,  810 => 270,  805 => 269,  801 => 268,  793 => 262,  787 => 261,  784 => 260,  782 => 259,  773 => 255,  767 => 254,  761 => 253,  755 => 252,  752 => 251,  745 => 249,  742 => 248,  736 => 247,  728 => 245,  720 => 243,  717 => 242,  712 => 241,  709 => 240,  701 => 238,  693 => 236,  690 => 235,  688 => 234,  683 => 233,  679 => 232,  675 => 231,  669 => 229,  666 => 228,  662 => 227,  655 => 223,  642 => 213,  638 => 211,  631 => 209,  628 => 208,  617 => 206,  612 => 205,  604 => 203,  602 => 202,  597 => 201,  593 => 200,  584 => 193,  578 => 192,  575 => 191,  573 => 190,  563 => 185,  557 => 184,  551 => 183,  545 => 182,  542 => 181,  535 => 179,  532 => 178,  526 => 177,  518 => 175,  510 => 173,  507 => 172,  502 => 171,  499 => 170,  491 => 168,  483 => 166,  480 => 165,  478 => 164,  473 => 163,  469 => 162,  465 => 161,  458 => 158,  455 => 157,  451 => 156,  444 => 152,  430 => 141,  426 => 139,  419 => 137,  416 => 136,  405 => 134,  400 => 133,  392 => 131,  390 => 130,  385 => 129,  381 => 128,  373 => 122,  367 => 121,  364 => 120,  362 => 119,  353 => 115,  347 => 114,  341 => 113,  335 => 112,  332 => 111,  325 => 109,  322 => 108,  316 => 107,  308 => 105,  300 => 103,  297 => 102,  292 => 101,  289 => 100,  281 => 98,  273 => 96,  270 => 95,  268 => 94,  263 => 93,  259 => 92,  255 => 91,  249 => 89,  246 => 88,  242 => 87,  235 => 83,  228 => 78,  226 => 77,  222 => 76,  213 => 70,  207 => 66,  201 => 65,  199 => 64,  192 => 62,  184 => 61,  181 => 60,  175 => 59,  167 => 57,  159 => 55,  156 => 54,  152 => 53,  148 => 52,  144 => 51,  139 => 50,  134 => 49,  132 => 48,  124 => 43,  120 => 42,  113 => 37,  107 => 35,  105 => 34,  99 => 33,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-layout" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
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
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-layout" class="form-horizontal">*/
/*           <fieldset>*/
/*             <legend>{{ text_route }}</legend>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*                 {% if error_name %}*/
/*                 <div class="text-danger">{{ error_name }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <table id="route" class="table table-striped table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td class="text-left">{{ entry_store }}</td>*/
/*                   <td class="text-left">{{ entry_route }}</td>*/
/*                   <td></td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% set route_row = 0 %}*/
/*                 {% for layout_route in layout_routes %}*/
/*                 <tr id="route-row{{ route_row }}">*/
/*                   <td class="text-left"><select name="layout_route[{{ route_row }}][store_id]" class="form-control">*/
/*                       <option value="0">{{ text_default }}</option>*/
/*                       {% for store in stores %}*/
/*                       {% if store.store_id == layout_route.store_id %}*/
/*                       <option value="{{ store.store_id }}" selected="selected">{{ store.name }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ store.store_id }}">{{ store.name }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select></td>*/
/*                   <td class="text-left"><input type="text" name="layout_route[{{ route_row }}][route]" value="{{ layout_route.route }}" placeholder="{{ entry_route }}" class="form-control" /></td>*/
/*                   <td class="text-left"><button type="button" onclick="$('#route-row{{ route_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                 </tr>*/
/*                 {% set route_row = route_row + 1 %}*/
/*                 {% endfor %}*/
/*               </tbody>*/
/*               <tfoot>*/
/*                 <tr>*/
/*                   <td colspan="2"></td>*/
/*                   <td class="text-left"><button type="button" onclick="addRoute();" data-toggle="tooltip" title="{{ button_route_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                 </tr>*/
/*               </tfoot>*/
/*             </table>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_module }}</legend>*/
/*             {% set module_row = 0 %}*/
/*             <div class="row">*/
/*               <div class="col-lg-3 col-md-4 col-sm-12">*/
/*                 <table id="module-column-left" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_column_left }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'column_left' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             <option value=""></option>*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('column-left');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*               <div class="col-lg-6 col-md-4 col-sm-12">*/
/* 				<table id="module-block1" class="table table-striped table-bordered table-hover">*/
/* 	<thead>*/
/* 		<tr>*/
/* 			<td class="text-center">{{ text_block1}}</td>*/
/* 		</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 		{% for layout_module in layout_modules %}*/
/* 		{% if layout_module.position == 'block1' %}*/
/* 			<tr id="module-row{{ module_row }}">*/
/* 				<td class="text-left">*/
/* 					<div class="input-group">*/
/* 						<select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/* 									{% for extension in extensions %}*/
/* 						<optgroup label="{{ extension.name }}">*/
/* 									{% if not extension.module %}*/
/* 									{% if extension.code == layout_module.code %}*/
/* 						<option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/* 									{% else %}*/
/* 						<option value="{{ extension.code }}">{{ extension.name }}</option>*/
/* 									{% endif %}*/
/* 									{% else %}*/
/* 									{% for module in extension.module %}*/
/* 									{% if module.code == layout_module.code %}*/
/* 						<option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/* 									{% else %}*/
/* 						<option value="{{ module.code }}">{{ module.name }}</option>*/
/* 									{% endif %}*/
/* 									{% endfor %}*/
/* 									{% endif %}*/
/* 						</optgroup>*/
/* 									{% endfor %}*/
/* 						</select>*/
/* 						<input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/* 						<input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/* 						<div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/* 							<button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</td>*/
/* 			</tr>*/
/* 		{% set module_row = module_row + 1 %}*/
/* 		{% endif %}*/
/* 		{% endfor %}*/
/* 	</tbody>*/
/* 	<tfoot>*/
/* 		<tr>*/
/* 			<td class="text-left">*/
/* 				<div class="input-group">*/
/* 					<select class="form-control input-sm">*/
/* 					<option value=""></option>*/
/* 								{% for extension in extensions %}*/
/* 					<optgroup label="{{ extension.name }}">*/
/* 								{% if not extension.module %}*/
/* 					<option value="{{ extension.code }}">{{ extension.name }}</option>*/
/* 								{% else %}*/
/* 								{% for module in extension.module %}*/
/* 					<option value="{{ module.code }}">{{ module.name }}</option>*/
/* 								{% endfor %}*/
/* 								{% endif %}*/
/* 					</optgroup>*/
/* 								{% endfor %}*/
/* 					</select>*/
/* 					<div class="input-group-btn">*/
/* 						<button type="button" onclick="addModule('block1');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</td>*/
/* 		</tr>*/
/* 	</tfoot>*/
/* </table>*/
/*                 <table id="module-content-top" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_content_top }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'content_top' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"> <a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             <option value=""></option>*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('content-top');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*                 <table id="module-content-bottom" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_content_bottom }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'content_bottom' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             <option value=""></option>*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('content-bottom');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/* 				<table id="module-block2" class="table table-striped table-bordered table-hover">*/
/* 	<thead>*/
/* 		<tr>*/
/* 			<td class="text-center">{{ text_block2}}</td>*/
/* 		</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 		{% for layout_module in layout_modules %}*/
/* 		{% if layout_module.position == 'block2' %}*/
/* 			<tr id="module-row{{ module_row }}">*/
/* 				<td class="text-left">*/
/* 					<div class="input-group">*/
/* 						<select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/* 									{% for extension in extensions %}*/
/* 						<optgroup label="{{ extension.name }}">*/
/* 									{% if not extension.module %}*/
/* 									{% if extension.code == layout_module.code %}*/
/* 						<option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/* 									{% else %}*/
/* 						<option value="{{ extension.code }}">{{ extension.name }}</option>*/
/* 									{% endif %}*/
/* 									{% else %}*/
/* 									{% for module in extension.module %}*/
/* 									{% if module.code == layout_module.code %}*/
/* 						<option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/* 									{% else %}*/
/* 						<option value="{{ module.code }}">{{ module.name }}</option>*/
/* 									{% endif %}*/
/* 									{% endfor %}*/
/* 									{% endif %}*/
/* 						</optgroup>*/
/* 									{% endfor %}*/
/* 						</select>*/
/* 						<input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/* 						<input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/* 						<div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/* 							<button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</td>*/
/* 			</tr>*/
/* 		{% set module_row = module_row + 1 %}*/
/* 		{% endif %}*/
/* 		{% endfor %}*/
/* 	</tbody>*/
/* 	<tfoot>*/
/* 		<tr>*/
/* 			<td class="text-left">*/
/* 				<div class="input-group">*/
/* 					<select class="form-control input-sm">*/
/* 					<option value=""></option>*/
/* 								{% for extension in extensions %}*/
/* 					<optgroup label="{{ extension.name }}">*/
/* 								{% if not extension.module %}*/
/* 					<option value="{{ extension.code }}">{{ extension.name }}</option>*/
/* 								{% else %}*/
/* 								{% for module in extension.module %}*/
/* 					<option value="{{ module.code }}">{{ module.name }}</option>*/
/* 								{% endfor %}*/
/* 								{% endif %}*/
/* 					</optgroup>*/
/* 								{% endfor %}*/
/* 					</select>*/
/* 					<div class="input-group-btn">*/
/* 						<button type="button" onclick="addModule('block2');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</td>*/
/* 		</tr>*/
/* 	</tfoot>*/
/* </table>*/
/* <table id="module-block3" class="table table-striped table-bordered table-hover">*/
/* 	<thead>*/
/* 		<tr>*/
/* 			<td class="text-center">{{ text_block3}}</td>*/
/* 		</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 		{% for layout_module in layout_modules %}*/
/* 		{% if layout_module.position == 'block3' %}*/
/* 			<tr id="module-row{{ module_row }}">*/
/* 				<td class="text-left">*/
/* 					<div class="input-group">*/
/* 						<select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/* 									{% for extension in extensions %}*/
/* 						<optgroup label="{{ extension.name }}">*/
/* 									{% if not extension.module %}*/
/* 									{% if extension.code == layout_module.code %}*/
/* 						<option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/* 									{% else %}*/
/* 						<option value="{{ extension.code }}">{{ extension.name }}</option>*/
/* 									{% endif %}*/
/* 									{% else %}*/
/* 									{% for module in extension.module %}*/
/* 									{% if module.code == layout_module.code %}*/
/* 						<option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/* 									{% else %}*/
/* 						<option value="{{ module.code }}">{{ module.name }}</option>*/
/* 									{% endif %}*/
/* 									{% endfor %}*/
/* 									{% endif %}*/
/* 						</optgroup>*/
/* 									{% endfor %}*/
/* 						</select>*/
/* 						<input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/* 						<input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/* 						<div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/* 							<button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</td>*/
/* 			</tr>*/
/* 		{% set module_row = module_row + 1 %}*/
/* 		{% endif %}*/
/* 		{% endfor %}*/
/* 	</tbody>*/
/* 	<tfoot>*/
/* 		<tr>*/
/* 			<td class="text-left">*/
/* 				<div class="input-group">*/
/* 					<select class="form-control input-sm">*/
/* 					<option value=""></option>*/
/* 								{% for extension in extensions %}*/
/* 					<optgroup label="{{ extension.name }}">*/
/* 								{% if not extension.module %}*/
/* 					<option value="{{ extension.code }}">{{ extension.name }}</option>*/
/* 								{% else %}*/
/* 								{% for module in extension.module %}*/
/* 					<option value="{{ module.code }}">{{ module.name }}</option>*/
/* 								{% endfor %}*/
/* 								{% endif %}*/
/* 					</optgroup>*/
/* 								{% endfor %}*/
/* 					</select>*/
/* 					<div class="input-group-btn">*/
/* 						<button type="button" onclick="addModule('block3');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</td>*/
/* 		</tr>*/
/* 	</tfoot>*/
/* </table>*/
/* <table id="module-block4" class="table table-striped table-bordered table-hover">*/
/* 	<thead>*/
/* 		<tr>*/
/* 			<td class="text-center">{{ text_block4}}</td>*/
/* 		</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 		{% for layout_module in layout_modules %}*/
/* 		{% if layout_module.position == 'block4' %}*/
/* 			<tr id="module-row{{ module_row }}">*/
/* 				<td class="text-left">*/
/* 					<div class="input-group">*/
/* 						<select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/* 									{% for extension in extensions %}*/
/* 						<optgroup label="{{ extension.name }}">*/
/* 									{% if not extension.module %}*/
/* 									{% if extension.code == layout_module.code %}*/
/* 						<option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/* 									{% else %}*/
/* 						<option value="{{ extension.code }}">{{ extension.name }}</option>*/
/* 									{% endif %}*/
/* 									{% else %}*/
/* 									{% for module in extension.module %}*/
/* 									{% if module.code == layout_module.code %}*/
/* 						<option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/* 									{% else %}*/
/* 						<option value="{{ module.code }}">{{ module.name }}</option>*/
/* 									{% endif %}*/
/* 									{% endfor %}*/
/* 									{% endif %}*/
/* 						</optgroup>*/
/* 									{% endfor %}*/
/* 						</select>*/
/* 						<input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/* 						<input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/* 						<div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/* 							<button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</td>*/
/* 			</tr>*/
/* 		{% set module_row = module_row + 1 %}*/
/* 		{% endif %}*/
/* 		{% endfor %}*/
/* 	</tbody>*/
/* 	<tfoot>*/
/* 		<tr>*/
/* 			<td class="text-left">*/
/* 				<div class="input-group">*/
/* 					<select class="form-control input-sm">*/
/* 					<option value=""></option>*/
/* 								{% for extension in extensions %}*/
/* 					<optgroup label="{{ extension.name }}">*/
/* 								{% if not extension.module %}*/
/* 					<option value="{{ extension.code }}">{{ extension.name }}</option>*/
/* 								{% else %}*/
/* 								{% for module in extension.module %}*/
/* 					<option value="{{ module.code }}">{{ module.name }}</option>*/
/* 								{% endfor %}*/
/* 								{% endif %}*/
/* 					</optgroup>*/
/* 								{% endfor %}*/
/* 					</select>*/
/* 					<div class="input-group-btn">*/
/* 						<button type="button" onclick="addModule('block4');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</td>*/
/* 		</tr>*/
/* 	</tfoot>*/
/* </table>*/
/*               </div>*/
/*               <div class="col-lg-3 col-md-4 col-sm-12">*/
/*                 <table id="module-column-right" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_column_right }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'column_right' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"><a href="{{ layout_module.edit }}" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             <option value=""></option>*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('column-right');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* var route_row = {{ route_row }};*/
/* */
/* function addRoute() {*/
/* 	html  = '<tr id="route-row' + route_row + '">';*/
/* 	html += '  <td class="text-left"><select name="layout_route[' + route_row + '][store_id]" class="form-control">';*/
/* 	html += '  <option value="0">{{ text_default }}</option>';*/
/* 	{% for store in stores %}*/
/* 	html += '<option value="{{ store.store_id }}">{{ store.name|escape('js') }}</option>';*/
/* 	{% endfor %}*/
/* 	html += '  </select></td>';*/
/* 	html += '  <td class="text-left"><input type="text" name="layout_route[' + route_row + '][route]" value="" placeholder="{{ entry_route }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#route-row' + route_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* 	*/
/* 	$('#route tbody').append(html);*/
/* 	*/
/* 	route_row++;*/
/* }*/
/* */
/* var module_row = {{ module_row }};*/
/* */
/* function addModule(type) {*/
/* 	html  = '<tr id="module-row' + module_row + '">';*/
/*     html += '  <td class="text-left"><div class="input-group"><select name="layout_module[' + module_row + '][code]" class="form-control input-sm">';*/
/* 	{% for extension in extensions %}*/
/* 	html += '    <optgroup label="{{ extension.name|escape('js') }}">';*/
/* 	{% if not extension.module %}*/
/* 	html += '      <option value="{{ extension.code }}">{{ extension.name|escape('js') }}</option>';*/
/* 	{% else %}*/
/* 	{% for module in extension.module %}*/
/* 	html += '      <option value="{{ module.code }}">{{ module.name|escape('js') }}</option>';*/
/* 	{% endfor %}*/
/* 	{% endif %}*/
/* 	html += '    </optgroup>';*/
/* 	{% endfor %}*/
/* 	html += '  </select>';*/
/*     html += '  <input type="hidden" name="layout_module[' + module_row + '][position]" value="' + type.replace('-', '_') + '" />';*/
/*     html += '  <input type="hidden" name="layout_module[' + module_row + '][sort_order]" value="" />';*/
/* 	html += '  <div class="input-group-btn"><a href="" target="_blank" type="button" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a><button type="button" onclick="$(\'#module-row' + module_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button></div></div></td>';*/
/* 	html += '</tr>';*/
/* 	*/
/* 	$('#module-' + type + ' tbody').append(html);*/
/* 	*/
/* 	$('#module-' + type + ' tbody select[name=\'layout_module[' + module_row + '][code]\']').val($('#module-' + type + ' tfoot select').val());*/
/* 	*/
/* 	$('#module-' + type + ' select[name*=\'code\']').trigger('change');*/
/* 		*/
/* 	$('#module-' + type + ' tbody input[name*=\'sort_order\']').each(function(i, element) {*/
/* 		$(element).val(i);*/
/* 	});*/
/* 	*/
/* 	module_row++;*/
/* }*/
/* */
/* $('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom, #module-block1, #module-block2, #module-block3, #module-block4').delegate('select[name*=\'code\']', 'change', function() {*/
/* 	var part = this.value.split('.');*/
/* 	*/
/* 	if (!part[1]) {*/
/* 		$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token={{ user_token }}');*/
/* 	} else {*/
/* 		$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token={{ user_token }}&module_id=' + part[1]);*/
/* 	}*/
/* });*/
/* */
/* $('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom, #module-block1, #module-block2, #module-block3, #module-block4').trigger('change');*/
/* //--></script> */
/* </div>*/
/* {{ footer }}*/
