<?php

/* extension/module/ocpagebuilder/oc_page_builder.twig */
class __TwigTemplate_715fa8524417049c671ad5230402ab3a0d4b23552ee78e3e67df1c2fa5374e25 extends Twig_Template
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
                <button type=\"submit\" form=\"form-page-builder\" data-toggle=\"tooltip\" title=\"";
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
        echo (isset($context["page_title"]) ? $context["page_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                    <li><a href=\"";
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
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 19
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
            </div>
        </div>
        <div class=\"panel-body\">
            <form action=\"";
        // line 23
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-page-builder\" class=\"form-horizontal\">
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 25
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"name\" value=\"";
        // line 27
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                        ";
        // line 28
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 29
            echo "                            <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
                        ";
        }
        // line 31
        echo "                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 35
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <select name=\"status\" id=\"input-status\" class=\"form-control\">
                            ";
        // line 38
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 39
            echo "                                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                <option value=\"0\">";
            // line 40
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                            ";
        } else {
            // line 42
            echo "                                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                <option value=\"0\" selected=\"selected\">";
            // line 43
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                            ";
        }
        // line 45
        echo "                        </select>
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"widget-container col-sm-12\">
                        ";
        // line 51
        if ((isset($context["widgets"]) ? $context["widgets"] : null)) {
            // line 52
            echo "                            ";
            $context["widget_row"] = 0;
            // line 53
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widgets"]) ? $context["widgets"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["main_row"]) {
                // line 54
                echo "                                ";
                list($context["cols_format"], $context["main_col_count"]) =                 array("", 0);
                // line 55
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["main_row"], "main_cols", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["main_col"]) {
                    // line 56
                    echo "                                    ";
                    $context["main_col_count"] = ((isset($context["main_col_count"]) ? $context["main_col_count"] : null) + 1);
                    // line 57
                    echo "                                    ";
                    if (($context["main_col"] == twig_last($this->env, $this->getAttribute($context["main_row"], "main_cols", array())))) {
                        // line 58
                        echo "                                        ";
                        $context["cols_format"] = ((isset($context["cols_format"]) ? $context["cols_format"] : null) . $this->getAttribute($context["main_col"], "format", array()));
                        // line 59
                        echo "                                    ";
                    } else {
                        // line 60
                        echo "                                        ";
                        $context["cols_format"] = (((isset($context["cols_format"]) ? $context["cols_format"] : null) . $this->getAttribute($context["main_col"], "format", array())) . " + ");
                        // line 61
                        echo "                                    ";
                    }
                    // line 62
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['main_col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                                <div class=\"widget-row col-sm-12\">
                                    <div class=\"row-action\">
                                        <div class=\"action-group\">
                                            <input type=\"text\" class=\"form-control input-class-name\" name=\"widget[";
                // line 66
                echo (isset($context["widget_row"]) ? $context["widget_row"] : null);
                echo "][class]\" value=\"";
                echo $this->getAttribute($context["main_row"], "class", array());
                echo "\" placeholder=\"";
                echo (isset($context["text_custom_classname"]) ? $context["text_custom_classname"] : null);
                echo "\" />
                                            <span class=\"row-identify\">";
                // line 67
                echo (isset($context["text_columns"]) ? $context["text_columns"] : null);
                echo "</span>
                                            <div class=\"col-count\">
                                                <a href=\"javascript:void(0);\" onclick=\"builder.plusMainColumn(\$(this));\" rel=\"1\" class=\"col-plus\"></a>
                                                <span class=\"count\">";
                // line 70
                echo (isset($context["main_col_count"]) ? $context["main_col_count"] : null);
                echo "</span>
                                                <a href=\"javascript:void(0);\" onclick=\"builder.minusMainColumn(\$(this));\" rel=\"1\" class=\"col-minus\"></a>
                                            </div>
                                            <div class=\"a-group\">
                                                <a class=\"a-column-custom\" title=\"";
                // line 74
                echo (isset($context["text_custom_columns"]) ? $context["text_custom_columns"] : null);
                echo "\" onclick=\"builder.customMainColumns(\$(this));\" href=\"javascript:void(0);\"></a>
                                                <a class=\"a-row-delete\" onclick=\"builder.removeRow(\$(this));\" href=\"javascript:void(0);\"></a>
                                            </div>
                                        </div>
                                        <input type=\"hidden\" class=\"cols-format\" value=\"";
                // line 78
                echo (isset($context["cols_format"]) ? $context["cols_format"] : null);
                echo "\" />
                                    </div>
                                    <div class=\"row-content row-";
                // line 80
                echo (isset($context["widget_row"]) ? $context["widget_row"] : null);
                echo "\">
                                        ";
                // line 81
                $context["main_col_count"] = 0;
                // line 82
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["main_row"], "main_cols", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["main_col"]) {
                    // line 83
                    echo "                                            <div class=\"col-sm-";
                    echo $this->getAttribute($context["main_col"], "format", array());
                    echo " main-column\">
                                                <input type=\"hidden\" class=\"main-col-pos\" value=\"";
                    // line 84
                    echo (isset($context["main_col_count"]) ? $context["main_col_count"] : null);
                    echo "\" />
                                                <input type=\"hidden\" class=\"main-col-format\" name=\"widget[";
                    // line 85
                    echo (isset($context["widget_row"]) ? $context["widget_row"] : null);
                    echo "][main_cols][";
                    echo (isset($context["main_col_count"]) ? $context["main_col_count"] : null);
                    echo "][format]\" value=\"";
                    echo $this->getAttribute($context["main_col"], "format", array());
                    echo "\" />
                                                <a class=\"a-sub-row-add\" href=\"javascript:void(0);\" onclick=\"builder.drawSubRow(\$(this))\">";
                    // line 86
                    echo (isset($context["text_add_sub_row"]) ? $context["text_add_sub_row"] : null);
                    echo "</a>
                                                <div class=\"main-col-content main-col-";
                    // line 87
                    echo (isset($context["main_col_count"]) ? $context["main_col_count"] : null);
                    echo "\">
                                                    ";
                    // line 88
                    $context["widget_sub_row"] = 0;
                    // line 89
                    echo "                                                    ";
                    if ($this->getAttribute($context["main_col"], "sub_rows", array())) {
                        // line 90
                        echo "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["main_col"], "sub_rows", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["sub_row"]) {
                            // line 91
                            echo "                                                            ";
                            list($context["sub_cols_format"], $context["sub_col_count"]) =                             array("", 0);
                            // line 92
                            echo "                                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sub_row"], "sub_cols", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["sub_col"]) {
                                // line 93
                                echo "                                                                ";
                                $context["sub_col_count"] = ((isset($context["sub_col_count"]) ? $context["sub_col_count"] : null) + 1);
                                // line 94
                                echo "                                                                ";
                                if (($context["sub_col"] == twig_last($this->env, $this->getAttribute($context["sub_row"], "sub_cols", array())))) {
                                    // line 95
                                    echo "                                                                    ";
                                    $context["sub_cols_format"] = ((isset($context["sub_cols_format"]) ? $context["sub_cols_format"] : null) . $this->getAttribute($context["sub_col"], "format", array()));
                                    // line 96
                                    echo "                                                                ";
                                } else {
                                    // line 97
                                    echo "                                                                    ";
                                    $context["sub_cols_format"] = (((isset($context["sub_cols_format"]) ? $context["sub_cols_format"] : null) . $this->getAttribute($context["sub_col"], "format", array())) . " + ");
                                    // line 98
                                    echo "                                                                ";
                                }
                                // line 99
                                echo "                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_col'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 100
                            echo "                                                            <div class=\"sub-row sub-row-";
                            echo (isset($context["widget_sub_row"]) ? $context["widget_sub_row"] : null);
                            echo "\">
                                                                <div class=\"sub-row-action\">
                                                                    <div class=\"action-group\">
                                                                        <span class=\"row-identify\">";
                            // line 103
                            echo (isset($context["text_columns"]) ? $context["text_columns"] : null);
                            echo "</span>
                                                                        <div class=\"sub-col-count\">
                                                                            <a href=\"javascript:void(0);\" onclick=\"builder.plusSubColumn(\$(this))\" rel=\"1\" class=\"col-plus\"></a>
                                                                            <span class=\"count\">";
                            // line 106
                            echo (isset($context["sub_col_count"]) ? $context["sub_col_count"] : null);
                            echo "</span>
                                                                            <a href=\"javascript:void(0);\" onclick=\"builder.minusSubColumn(\$(this))\" rel=\"1\" class=\"col-minus\"></a>
                                                                        </div>
                                                                        <div class=\"a-group\">
                                                                            <a class=\"a-column-custom\" title=\"";
                            // line 110
                            echo (isset($context["text_custom_columns"]) ? $context["text_custom_columns"] : null);
                            echo "\" onclick=\"builder.customSubColumns(\$(this))\" href=\"javascript:void(0);\"></a>
                                                                            <a class=\"a-row-delete\" onclick=\"builder.removeSubRow(\$(this))\" href=\"javascript:void(0);\"></a>
                                                                        </div>
                                                                    </div>
                                                                    <input type=\"hidden\" class=\"sub-cols-format\" value=\"";
                            // line 114
                            echo (isset($context["sub_cols_format"]) ? $context["sub_cols_format"] : null);
                            echo "\" />
                                                                </div>
                                                                <div class=\"sub-row-content\">
                                                                    ";
                            // line 117
                            $context["sub_col_count"] = 0;
                            // line 118
                            echo "                                                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sub_row"], "sub_cols", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["sub_col"]) {
                                // line 119
                                echo "                                                                        <div class=\"col-sm-";
                                echo $this->getAttribute($context["sub_col"], "format", array());
                                echo " column-area\">
                                                                            <div class=\"module-area droparea ui-droppable ui-sortable sub-col-";
                                // line 120
                                echo (isset($context["sub_col_count"]) ? $context["sub_col_count"] : null);
                                echo "\">
                                                                                <div class=\"text-insert-module\"><span class=\"\">";
                                // line 121
                                echo (isset($context["text_insert_module"]) ? $context["text_insert_module"] : null);
                                echo "</span></div>
                                                                                ";
                                // line 122
                                if ($this->getAttribute($context["sub_col"], "info", array())) {
                                    // line 123
                                    echo "                                                                                    ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sub_col"], "info", array()));
                                    foreach ($context['_seq'] as $context["_key"] => $context["modules"]) {
                                        // line 124
                                        echo "                                                                                        ";
                                        $context["position"] = 0;
                                        // line 125
                                        echo "                                                                                        ";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable($context["modules"]);
                                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                                            // line 126
                                            echo "                                                                                            ";
                                            $context["module_name"] = "";
                                            // line 127
                                            echo "                                                                                            ";
                                            $context["module_url"] = "";
                                            // line 128
                                            echo "                                                                                            ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                                            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                                                // line 129
                                                echo "                                                                                                ";
                                                if (( !$this->getAttribute($context["extension"], "modules", array()) && ($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["module"], "code", array())))) {
                                                    // line 130
                                                    echo "                                                                                                    ";
                                                    $context["module_url"] = $this->getAttribute($context["extension"], "url", array());
                                                    // line 131
                                                    echo "                                                                                                    ";
                                                    $context["module_name"] = $this->getAttribute($context["extension"], "name", array());
                                                    // line 132
                                                    echo "                                                                                                ";
                                                } else {
                                                    // line 133
                                                    echo "                                                                                                    ";
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "modules", array()));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                                                        // line 134
                                                        echo "                                                                                                        ";
                                                        if (($this->getAttribute($context["m"], "code", array()) == $this->getAttribute($context["module"], "code", array()))) {
                                                            // line 135
                                                            echo "                                                                                                            ";
                                                            $context["module_url"] = $this->getAttribute($context["m"], "url", array());
                                                            // line 136
                                                            echo "                                                                                                            ";
                                                            $context["module_name"] = $this->getAttribute($context["m"], "name", array());
                                                            // line 137
                                                            echo "                                                                                                        ";
                                                        }
                                                        // line 138
                                                        echo "                                                                                                    ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 139
                                                    echo "                                                                                                ";
                                                }
                                                // line 140
                                                echo "                                                                                            ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 141
                                            echo "                                                                                            <div class=\"layout-module-info moveable\">
                                                                                                <div class=\"top\">
                                                                                                    <div class=\"module-info\">
                                                                                                        <p>";
                                            // line 144
                                            echo (isset($context["module_name"]) ? $context["module_name"] : null);
                                            echo "</p>
                                                                                                        <a class=\"btn-edit\" href=\"javascript:void(0);\" onclick=\"loadModule('";
                                            // line 145
                                            echo (isset($context["module_url"]) ? $context["module_url"] : null);
                                            echo "')\"></a>
                                                                                                        <a class=\"btn-remove\" href=\"javascript:void(0);\" onclick=\"builder.removeModule(\$(this))\"></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <input type=\"hidden\" class=\"module-in-main-row\" value=\"";
                                            // line 149
                                            echo (isset($context["widget_row"]) ? $context["widget_row"] : null);
                                            echo "\" />
                                                                                                <input type=\"hidden\" class=\"module-in-main-col\" value=\"";
                                            // line 150
                                            echo (isset($context["main_col_count"]) ? $context["main_col_count"] : null);
                                            echo "\" />
                                                                                                <input type=\"hidden\" class=\"module-in-sub-row\" value=\"";
                                            // line 151
                                            echo (isset($context["widget_sub_row"]) ? $context["widget_sub_row"] : null);
                                            echo "\" />
                                                                                                <input type=\"hidden\" class=\"module-in-sub-col\" value=\"";
                                            // line 152
                                            echo (isset($context["sub_col_count"]) ? $context["sub_col_count"] : null);
                                            echo "\" />
                                                                                                <input type=\"hidden\" class=\"module-code\" name=\"widget[";
                                            // line 153
                                            echo (isset($context["widget_row"]) ? $context["widget_row"] : null);
                                            echo "][main_cols][";
                                            echo (isset($context["main_col_count"]) ? $context["main_col_count"] : null);
                                            echo "][sub_rows][";
                                            echo (isset($context["widget_sub_row"]) ? $context["widget_sub_row"] : null);
                                            echo "][sub_cols][";
                                            echo (isset($context["sub_col_count"]) ? $context["sub_col_count"] : null);
                                            echo "][info][module][";
                                            echo (isset($context["position"]) ? $context["position"] : null);
                                            echo "][code]\" value=\"";
                                            echo $this->getAttribute($context["module"], "code", array());
                                            echo "\" />
                                                                                                <input type=\"hidden\" class=\"module-name\" name=\"widget[";
                                            // line 154
                                            echo (isset($context["widget_row"]) ? $context["widget_row"] : null);
                                            echo "][main_cols][";
                                            echo (isset($context["main_col_count"]) ? $context["main_col_count"] : null);
                                            echo "][sub_rows][";
                                            echo (isset($context["widget_sub_row"]) ? $context["widget_sub_row"] : null);
                                            echo "][sub_cols][";
                                            echo (isset($context["sub_col_count"]) ? $context["sub_col_count"] : null);
                                            echo "][info][module][";
                                            echo (isset($context["position"]) ? $context["position"] : null);
                                            echo "][name]\" value=\"";
                                            echo $this->getAttribute($context["module"], "name", array());
                                            echo "\" />
                                                                                                <input type=\"hidden\" class=\"module-url\"  name=\"widget[";
                                            // line 155
                                            echo (isset($context["widget_row"]) ? $context["widget_row"] : null);
                                            echo "][main_cols][";
                                            echo (isset($context["main_col_count"]) ? $context["main_col_count"] : null);
                                            echo "][sub_rows][";
                                            echo (isset($context["widget_sub_row"]) ? $context["widget_sub_row"] : null);
                                            echo "][sub_cols][";
                                            echo (isset($context["sub_col_count"]) ? $context["sub_col_count"] : null);
                                            echo "][info][module][";
                                            echo (isset($context["position"]) ? $context["position"] : null);
                                            echo "][url]\"  value=\"";
                                            echo $this->getAttribute($context["module"], "url", array());
                                            echo "\" />
                                                                                            </div>
                                                                                            ";
                                            // line 157
                                            $context["position"] = ((isset($context["position"]) ? $context["position"] : null) + 1);
                                            // line 158
                                            echo "                                                                                        ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 159
                                        echo "                                                                                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modules'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 160
                                    echo "                                                                                ";
                                }
                                // line 161
                                echo "                                                                            </div>
                                                                            <div class=\"col-action\">
                                                                                <div class=\"action-group\">
                                                                                    <a class=\"a-module-add\" onclick=\"builder.showAllModules(\$(this))\" href=\"javascript:void(0);\"><i class=\"fa fa-plus\"></i> ";
                                // line 164
                                echo (isset($context["text_add_module"]) ? $context["text_add_module"] : null);
                                echo "</a>
                                                                                </div>
                                                                            </div>
                                                                            <input type=\"hidden\" class=\"sub-col-pos\" value=\"";
                                // line 167
                                echo (isset($context["sub_col_count"]) ? $context["sub_col_count"] : null);
                                echo "\" />
                                                                            <input type=\"hidden\" class=\"sub-col-format\" name=\"widget[";
                                // line 168
                                echo (isset($context["widget_row"]) ? $context["widget_row"] : null);
                                echo "][main_cols][";
                                echo (isset($context["main_col_count"]) ? $context["main_col_count"] : null);
                                echo "][sub_rows][";
                                echo (isset($context["widget_sub_row"]) ? $context["widget_sub_row"] : null);
                                echo "][sub_cols][";
                                echo (isset($context["sub_col_count"]) ? $context["sub_col_count"] : null);
                                echo "][format]\" value=\"";
                                echo $this->getAttribute($context["sub_col"], "format", array());
                                echo "\" />
                                                                        </div>
                                                                        ";
                                // line 170
                                $context["sub_col_count"] = ((isset($context["sub_col_count"]) ? $context["sub_col_count"] : null) + 1);
                                // line 171
                                echo "                                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_col'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 172
                            echo "                                                                </div>
                                                                <input type=\"hidden\" class=\"sub-row-pos\" value=\"";
                            // line 173
                            echo (isset($context["widget_sub_row"]) ? $context["widget_sub_row"] : null);
                            echo "\" />
                                                            </div>
                                                            ";
                            // line 175
                            $context["widget_sub_row"] = ((isset($context["widget_sub_row"]) ? $context["widget_sub_row"] : null) + 1);
                            // line 176
                            echo "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_row'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 177
                        echo "                                                    ";
                    } else {
                        // line 178
                        echo "                                                        <div class=\"sub-row sub-row-";
                        echo (isset($context["widget_sub_row"]) ? $context["widget_sub_row"] : null);
                        echo "\">
                                                            <div class=\"sub-row-action\">
                                                                <div class=\"action-group\">
                                                                    <span class=\"row-identify\">";
                        // line 181
                        echo (isset($context["text_columns"]) ? $context["text_columns"] : null);
                        echo "</span>
                                                                    <div class=\"sub-col-count\">
                                                                        <a href=\"javascript:void(0);\" onclick=\"builder.plusSubColumn(\$(this))\" rel=\"1\" class=\"col-plus\"></a>
                                                                        <span class=\"count\">1</span>
                                                                        <a href=\"javascript:void(0);\" onclick=\"builder.minusSubColumn(\$(this))\" rel=\"1\" class=\"col-minus\"></a>
                                                                    </div>
                                                                    <div class=\"a-group\">
                                                                        <a class=\"a-column-custom\" title=\"";
                        // line 188
                        echo (isset($context["text_custom_columns"]) ? $context["text_custom_columns"] : null);
                        echo "\" onclick=\"builder.customSubColumns(\$(this))\" href=\"javascript:void(0);\"></a>
                                                                        <a class=\"a-row-delete\" onclick=\"builder.removeSubRow(\$(this))\" href=\"javascript:void(0);\"></a>
                                                                    </div>
                                                                </div>
                                                                <input type=\"hidden\" class=\"sub-cols-format\" value=\"12\" />
                                                            </div>
                                                            <div class=\"sub-row-content\">
                                                                <div class=\"col-sm-12 column-area\">
                                                                    <div class=\"module-area droparea ui-droppable ui-sortable sub-col-";
                        // line 196
                        echo (isset($context["sub_col_count"]) ? $context["sub_col_count"] : null);
                        echo "\">
                                                                        <div class=\"text-insert-module\"><span class=\"\">";
                        // line 197
                        echo (isset($context["text_insert_module"]) ? $context["text_insert_module"] : null);
                        echo "</span></div>
                                                                    </div>
                                                                    <div class=\"col-action\">
                                                                        <div class=\"action-group\">
                                                                            <a class=\"a-module-add\" onclick=\"builder.showAllModules(\$(this))\" href=\"javascript:void(0);\"><i class=\"fa fa-plus\"></i> ";
                        // line 201
                        echo (isset($context["text_add_module"]) ? $context["text_add_module"] : null);
                        echo "</a>
                                                                        </div>
                                                                    </div>
                                                                    <input type=\"hidden\" class=\"sub-col-pos\" value=\"";
                        // line 204
                        echo (isset($context["sub_col_count"]) ? $context["sub_col_count"] : null);
                        echo "\" />
                                                                    <input type=\"hidden\" class=\"sub-col-format\" name=\"widget[0][main_cols][0][sub_rows][0][sub_cols][0][format]\" value=\"12\" />
                                                                </div>
                                                            </div>
                                                            <input type=\"hidden\" class=\"sub-row-pos\" value=\"";
                        // line 208
                        echo (isset($context["widget_sub_row"]) ? $context["widget_sub_row"] : null);
                        echo "\" />
                                                        </div>
                                                    ";
                    }
                    // line 211
                    echo "                                                </div>
                                            </div>
                                            ";
                    // line 213
                    $context["main_col_count"] = ((isset($context["main_col_count"]) ? $context["main_col_count"] : null) + 1);
                    // line 214
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['main_col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 215
                echo "                                    </div>
                                    <input type=\"hidden\" class=\"main-row-pos\" value=\"";
                // line 216
                echo (isset($context["widget_row"]) ? $context["widget_row"] : null);
                echo "\" />
                                </div>
                                ";
                // line 218
                $context["widget_row"] = ((isset($context["widget_row"]) ? $context["widget_row"] : null) + 1);
                // line 219
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['main_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "                        ";
        } else {
            // line 221
            echo "                            ";
            $context["widget_row"] = 0;
            // line 222
            echo "                            <div class=\"widget-row col-sm-12\">
                                <div class=\"row-action\">
                                    <div class=\"action-group\">
                                        <input type=\"text\" class=\"form-control input-class-name\" name=\"widget[0][class]\" value=\"\" placeholder=\"";
            // line 225
            echo (isset($context["text_custom_classname"]) ? $context["text_custom_classname"] : null);
            echo "\" />
                                        <span class=\"row-identify\">";
            // line 226
            echo (isset($context["text_columns"]) ? $context["text_columns"] : null);
            echo "</span>
                                        <div class=\"col-count\">
                                            <a href=\"javascript:void(0);\" onclick=\"builder.plusMainColumn(\$(this));\" rel=\"1\" class=\"col-plus\"></a>
                                            <span class=\"count\">1</span>
                                            <a href=\"javascript:void(0);\" onclick=\"builder.minusMainColumn(\$(this));\" rel=\"1\" class=\"col-minus\"></a>
                                        </div>
                                        <div class=\"a-group\">
                                            <a class=\"a-column-custom\" title=\"";
            // line 233
            echo (isset($context["text_custom_columns"]) ? $context["text_custom_columns"] : null);
            echo "\" onclick=\"builder.customMainColumns(\$(this));\" href=\"javascript:void(0);\"></a>
                                            <a class=\"a-row-delete\" onclick=\"builder.removeRow(\$(this));\" href=\"javascript:void(0);\"></a>
                                        </div>
                                    </div>
                                    <input type=\"hidden\" class=\"cols-format\" value=\"12\" />
                                </div>
                                <div class=\"row-content row-";
            // line 239
            echo (isset($context["widget_row"]) ? $context["widget_row"] : null);
            echo "\">
                                    ";
            // line 240
            $context["main_col_count"] = 0;
            // line 241
            echo "                                    ";
            $context["sub_col_count"] = 0;
            // line 242
            echo "                                    <div class=\"col-sm-12 main-column\">
                                        <input type=\"hidden\" class=\"main-col-pos\" value=\"";
            // line 243
            echo (isset($context["main_col_count"]) ? $context["main_col_count"] : null);
            echo "\" />
                                        <input type=\"hidden\" class=\"main-col-format\" name=\"widget[0][main_cols][0][format]\" value=\"12\" />
                                        <a class=\"a-sub-row-add\" href=\"javascript:void(0);\" onclick=\"builder.drawSubRow(\$(this))\">";
            // line 245
            echo (isset($context["text_add_sub_row"]) ? $context["text_add_sub_row"] : null);
            echo "</a>
                                        <div class=\"main-col-content main-col-";
            // line 246
            echo (isset($context["main_col_count"]) ? $context["main_col_count"] : null);
            echo "\">
                                            ";
            // line 247
            $context["widget_sub_row"] = 0;
            // line 248
            echo "                                            <div class=\"sub-row sub-row-";
            echo (isset($context["widget_sub_row"]) ? $context["widget_sub_row"] : null);
            echo "\">
                                                <div class=\"sub-row-action\">
                                                    <div class=\"action-group\">
                                                        <span class=\"row-identify\">";
            // line 251
            echo (isset($context["text_columns"]) ? $context["text_columns"] : null);
            echo "</span>
                                                        <div class=\"sub-col-count\">
                                                            <a href=\"javascript:void(0);\" onclick=\"builder.plusSubColumn(\$(this))\" rel=\"1\" class=\"col-plus\"></a>
                                                            <span class=\"count\">1</span>
                                                            <a href=\"javascript:void(0);\" onclick=\"builder.minusSubColumn(\$(this))\" rel=\"1\" class=\"col-minus\"></a>
                                                        </div>
                                                        <div class=\"a-group\">
                                                            <a class=\"a-column-custom\" title=\"";
            // line 258
            echo (isset($context["text_custom_columns"]) ? $context["text_custom_columns"] : null);
            echo "\" onclick=\"builder.customSubColumns(\$(this))\" href=\"javascript:void(0);\"></a>
                                                            <a class=\"a-row-delete\" onclick=\"builder.removeSubRow(\$(this))\" href=\"javascript:void(0);\"></a>
                                                        </div>
                                                    </div>
                                                    <input type=\"hidden\" class=\"sub-cols-format\" value=\"12\" />
                                                </div>
                                                <div class=\"sub-row-content\">
                                                    <div class=\"col-sm-12 column-area\">
                                                        <div class=\"module-area droparea ui-droppable ui-sortable sub-col-";
            // line 266
            echo (isset($context["sub_col_count"]) ? $context["sub_col_count"] : null);
            echo "\">
                                                            <div class=\"text-insert-module\"><span class=\"\">";
            // line 267
            echo (isset($context["text_insert_module"]) ? $context["text_insert_module"] : null);
            echo "</span></div>
                                                        </div>
                                                        <div class=\"col-action\">
                                                            <div class=\"action-group\">
                                                                <a class=\"a-module-add\" onclick=\"builder.showAllModules(\$(this))\" href=\"javascript:void(0);\"><i class=\"fa fa-plus\"></i> ";
            // line 271
            echo (isset($context["text_add_module"]) ? $context["text_add_module"] : null);
            echo "</a>
                                                            </div>
                                                        </div>
                                                        <input type=\"hidden\" class=\"sub-col-pos\" value=\"";
            // line 274
            echo (isset($context["sub_col_count"]) ? $context["sub_col_count"] : null);
            echo "\" />
                                                        <input type=\"hidden\" class=\"sub-col-format\" name=\"widget[0][main_cols][0][sub_rows][0][sub_cols][0][format]\" value=\"12\" />
                                                    </div>
                                                </div>
                                                <input type=\"hidden\" class=\"sub-row-pos\" value=\"";
            // line 278
            echo (isset($context["widget_sub_row"]) ? $context["widget_sub_row"] : null);
            echo "\" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"hidden\" class=\"main-row-pos\" value=\"";
            // line 283
            echo (isset($context["widget_row"]) ? $context["widget_row"] : null);
            echo "\" />
                            </div>
                        ";
        }
        // line 286
        echo "                    </div>
                    <div class=\"widget-info-group col-sm-12\">
                        <button type=\"button\" class=\"btn-insert btn\">
                            <i class=\"fa fa-plus\"></i>
                            <span>";
        // line 290
        echo (isset($context["text_add_row"]) ? $context["text_add_row"] : null);
        echo "</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class=\"all-modules-container row\">
            <div class=\"modules-container\">
                ";
        // line 298
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 299
            echo "                    ";
            if ( !$this->getAttribute($context["extension"], "modules", array())) {
                // line 300
                echo "                        ";
                $context["extension_url"] = $this->getAttribute($context["extension"], "url", array());
                // line 301
                echo "                        ";
                $context["extension_code"] = $this->getAttribute($context["extension"], "code", array());
                // line 302
                echo "                        ";
                $context["extension_name"] = $this->getAttribute($context["extension"], "name", array());
                // line 303
                echo "                        <div class=\"col-sm-4\">
                            <button type=\"button\" onclick=\"builder.addModule('";
                // line 304
                echo (isset($context["extension_name"]) ? $context["extension_name"] : null);
                echo "', '";
                echo (isset($context["extension_code"]) ? $context["extension_code"] : null);
                echo "', '";
                echo (isset($context["extension_url"]) ? $context["extension_url"] : null);
                echo "')\" class=\"btn-choose-module btn btn-default\" value=\"";
                echo (isset($context["extension_code"]) ? $context["extension_code"] : null);
                echo "\">
                                <span>
                                    ";
                // line 306
                echo (isset($context["extension_name"]) ? $context["extension_name"] : null);
                echo "
                                </span>
                            </button>
                        </div>
                    ";
            } else {
                // line 311
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "modules", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 312
                    echo "                            ";
                    $context["module_url"] = $this->getAttribute($context["module"], "url", array());
                    // line 313
                    echo "                            ";
                    $context["module_code"] = $this->getAttribute($context["module"], "code", array());
                    // line 314
                    echo "                            ";
                    $context["module_name"] = $this->getAttribute($context["module"], "name", array());
                    // line 315
                    echo "                            <div class=\"col-sm-4\">
                                <button type=\"button\" onclick=\"builder.addModule('";
                    // line 316
                    echo (isset($context["module_name"]) ? $context["module_name"] : null);
                    echo "', '";
                    echo (isset($context["module_code"]) ? $context["module_code"] : null);
                    echo "', '";
                    echo (isset($context["module_url"]) ? $context["module_url"] : null);
                    echo "')\" class=\"btn-choose-module btn btn-default\" value=\"";
                    echo (isset($context["module_code"]) ? $context["module_code"] : null);
                    echo "\">
                                    <span>
                                        ";
                    // line 318
                    echo (isset($context["module_name"]) ? $context["module_name"] : null);
                    echo "
                                    </span>
                                </button>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 323
                echo "                    ";
            }
            // line 324
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "            </div>
            <input type=\"hidden\" id=\"module-row\" value=\"0\" />
            <input type=\"hidden\" id=\"module-col\" value=\"0\" />
            <input type=\"hidden\" id=\"module-sub-row\" value=\"0\" />
            <input type=\"hidden\" id=\"module-sub-col\" value=\"0\" />
            <div class=\"modules-btn-group\">
                <button type=\"button\" class=\"btn-close btn-default pull-right\" onclick=\"builder.closeAllModules();\">Close</button>
            </div>
        </div>
    </div>
</div>

<input type=\"hidden\" id=\"text-columns\" value=\"";
        // line 337
        echo (isset($context["text_columns"]) ? $context["text_columns"] : null);
        echo "\" />
<input type=\"hidden\" id=\"text-insert-module\" value=\"";
        // line 338
        echo (isset($context["text_insert_module"]) ? $context["text_insert_module"] : null);
        echo "\" />
<input type=\"hidden\" id=\"text-add-module\" value=\"";
        // line 339
        echo (isset($context["text_add_module"]) ? $context["text_add_module"] : null);
        echo "\" />
<input type=\"hidden\" id=\"text-custom-columns\" value=\"";
        // line 340
        echo (isset($context["text_custom_columns"]) ? $context["text_custom_columns"] : null);
        echo "\" />
<input type=\"hidden\" id=\"text-custom-classname\" value=\"";
        // line 341
        echo (isset($context["text_custom_classname"]) ? $context["text_custom_classname"] : null);
        echo "\" />
<input type=\"hidden\" id=\"text-number-min-over\" value=\"";
        // line 342
        echo (isset($context["text_number_min_over"]) ? $context["text_number_min_over"] : null);
        echo "\" />
<input type=\"hidden\" id=\"text-number-max-over\" value=\"";
        // line 343
        echo (isset($context["text_number_max_over"]) ? $context["text_number_max_over"] : null);
        echo "\" />
<input type=\"hidden\" id=\"text-columns-error-format\" value=\"";
        // line 344
        echo (isset($context["text_columns_error_format"]) ? $context["text_columns_error_format"] : null);
        echo "\" />

<div class=\"popup-background\"></div>
    <div class=\"popup-loader-img\">
    </div>
    <div class=\"popup-container\">
        <div class=\"popup-content\">
            <iframe src=\"\" id=\"module-frame\" scrolling=\"yes\"></iframe>
        </div>
        <div class=\"popup-btn-group\">
            <button type=\"button\" class=\"btn-close btn-default pull-right\" onclick=\"closePopup();\">Close</button>
        </div>
    </div>
";
        // line 357
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "

<script type=\"text/javascript\">
    \$('.btn-insert').click(function () {
        var row_number = \$('.widget-row:last .main-row-pos').val();
        if(row_number == null) {
            row_number = 0;
        } else {
            row_number++;
        }
        builder.drawMainRow(row_number);
    });

    var module_edit_frame = \$('#module-frame');

    function closePopup() {
        \$('.popup-background').hide();
        \$('.popup-loader-img').hide();
        \$('.popup-container').hide();
        module_edit_frame.attr('src', \"\");
    }

    function loadModule(url) {
        module_edit_frame.attr('src', url);
        \$('.popup-background').show();
        \$('.popup-loader-img').show();
    }

    module_edit_frame.on('load', function(event) {
        var current_url = document.getElementById(\"module-frame\").contentWindow.location.href;

        if(module_edit_frame.attr('src') != \"\" && current_url.search('route=extension/module') > -1) {
            module_edit_frame.contents().find('#header,#content .page-header .breadcrumb,#column-left,#footer').hide();
            module_edit_frame.contents().find('#column-left + #content').css('margin', '0px');
            module_edit_frame.contents().find('#content').css('padding', '20px 0 0');
            \$('.popup-container').show();
        } else {
            \$('.popup-background').hide();
            \$('.popup-loader-img').hide();
            \$('.popup-container').hide();
        }
    });

    \$('.popup-background').on('click', function(){
        closePopup();
        builder.closeAllModules();
    });
</script>";
    }

    public function getTemplateName()
    {
        return "extension/module/ocpagebuilder/oc_page_builder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  941 => 357,  925 => 344,  921 => 343,  917 => 342,  913 => 341,  909 => 340,  905 => 339,  901 => 338,  897 => 337,  883 => 325,  877 => 324,  874 => 323,  863 => 318,  852 => 316,  849 => 315,  846 => 314,  843 => 313,  840 => 312,  835 => 311,  827 => 306,  816 => 304,  813 => 303,  810 => 302,  807 => 301,  804 => 300,  801 => 299,  797 => 298,  786 => 290,  780 => 286,  774 => 283,  766 => 278,  759 => 274,  753 => 271,  746 => 267,  742 => 266,  731 => 258,  721 => 251,  714 => 248,  712 => 247,  708 => 246,  704 => 245,  699 => 243,  696 => 242,  693 => 241,  691 => 240,  687 => 239,  678 => 233,  668 => 226,  664 => 225,  659 => 222,  656 => 221,  653 => 220,  647 => 219,  645 => 218,  640 => 216,  637 => 215,  631 => 214,  629 => 213,  625 => 211,  619 => 208,  612 => 204,  606 => 201,  599 => 197,  595 => 196,  584 => 188,  574 => 181,  567 => 178,  564 => 177,  558 => 176,  556 => 175,  551 => 173,  548 => 172,  542 => 171,  540 => 170,  527 => 168,  523 => 167,  517 => 164,  512 => 161,  509 => 160,  503 => 159,  497 => 158,  495 => 157,  480 => 155,  466 => 154,  452 => 153,  448 => 152,  444 => 151,  440 => 150,  436 => 149,  429 => 145,  425 => 144,  420 => 141,  414 => 140,  411 => 139,  405 => 138,  402 => 137,  399 => 136,  396 => 135,  393 => 134,  388 => 133,  385 => 132,  382 => 131,  379 => 130,  376 => 129,  371 => 128,  368 => 127,  365 => 126,  360 => 125,  357 => 124,  352 => 123,  350 => 122,  346 => 121,  342 => 120,  337 => 119,  332 => 118,  330 => 117,  324 => 114,  317 => 110,  310 => 106,  304 => 103,  297 => 100,  291 => 99,  288 => 98,  285 => 97,  282 => 96,  279 => 95,  276 => 94,  273 => 93,  268 => 92,  265 => 91,  260 => 90,  257 => 89,  255 => 88,  251 => 87,  247 => 86,  239 => 85,  235 => 84,  230 => 83,  225 => 82,  223 => 81,  219 => 80,  214 => 78,  207 => 74,  200 => 70,  194 => 67,  186 => 66,  181 => 63,  175 => 62,  172 => 61,  169 => 60,  166 => 59,  163 => 58,  160 => 57,  157 => 56,  152 => 55,  149 => 54,  144 => 53,  141 => 52,  139 => 51,  131 => 45,  126 => 43,  121 => 42,  116 => 40,  111 => 39,  109 => 38,  103 => 35,  97 => 31,  91 => 29,  89 => 28,  83 => 27,  78 => 25,  73 => 23,  66 => 19,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-page-builder" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*             <h1>{{ page_title }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-pencil"></i>{{ text_edit }}</h3>*/
/*             </div>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-page-builder" class="form-horizontal">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*                     <div class="col-sm-10">*/
/*                         <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*                         {% if error_name %}*/
/*                             <div class="text-danger">{{ error_name }}</div>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                     <div class="col-sm-10">*/
/*                         <select name="status" id="input-status" class="form-control">*/
/*                             {% if status %}*/
/*                                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                 <option value="0">{{ text_disabled }}</option>*/
/*                             {% else %}*/
/*                                 <option value="1">{{ text_enabled }}</option>*/
/*                                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                             {% endif %}*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <div class="widget-container col-sm-12">*/
/*                         {% if widgets %}*/
/*                             {% set widget_row = 0 %}*/
/*                             {% for main_row in widgets %}*/
/*                                 {% set cols_format, main_col_count = "", 0 %}*/
/*                                 {% for main_col in main_row.main_cols %}*/
/*                                     {% set main_col_count = main_col_count + 1 %}*/
/*                                     {% if main_col == main_row.main_cols|last %}*/
/*                                         {% set cols_format = cols_format ~ main_col.format %}*/
/*                                     {% else %}*/
/*                                         {% set cols_format = cols_format ~ main_col.format ~ ' + ' %}*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                                 <div class="widget-row col-sm-12">*/
/*                                     <div class="row-action">*/
/*                                         <div class="action-group">*/
/*                                             <input type="text" class="form-control input-class-name" name="widget[{{ widget_row }}][class]" value="{{ main_row.class }}" placeholder="{{ text_custom_classname }}" />*/
/*                                             <span class="row-identify">{{ text_columns }}</span>*/
/*                                             <div class="col-count">*/
/*                                                 <a href="javascript:void(0);" onclick="builder.plusMainColumn($(this));" rel="1" class="col-plus"></a>*/
/*                                                 <span class="count">{{ main_col_count }}</span>*/
/*                                                 <a href="javascript:void(0);" onclick="builder.minusMainColumn($(this));" rel="1" class="col-minus"></a>*/
/*                                             </div>*/
/*                                             <div class="a-group">*/
/*                                                 <a class="a-column-custom" title="{{ text_custom_columns }}" onclick="builder.customMainColumns($(this));" href="javascript:void(0);"></a>*/
/*                                                 <a class="a-row-delete" onclick="builder.removeRow($(this));" href="javascript:void(0);"></a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <input type="hidden" class="cols-format" value="{{ cols_format }}" />*/
/*                                     </div>*/
/*                                     <div class="row-content row-{{ widget_row }}">*/
/*                                         {% set main_col_count = 0 %}*/
/*                                         {% for main_col in main_row.main_cols %}*/
/*                                             <div class="col-sm-{{ main_col.format }} main-column">*/
/*                                                 <input type="hidden" class="main-col-pos" value="{{ main_col_count }}" />*/
/*                                                 <input type="hidden" class="main-col-format" name="widget[{{ widget_row }}][main_cols][{{ main_col_count }}][format]" value="{{ main_col.format }}" />*/
/*                                                 <a class="a-sub-row-add" href="javascript:void(0);" onclick="builder.drawSubRow($(this))">{{ text_add_sub_row }}</a>*/
/*                                                 <div class="main-col-content main-col-{{ main_col_count }}">*/
/*                                                     {% set widget_sub_row = 0 %}*/
/*                                                     {% if main_col.sub_rows %}*/
/*                                                         {% for sub_row in main_col.sub_rows %}*/
/*                                                             {% set sub_cols_format, sub_col_count = "", 0 %}*/
/*                                                             {% for sub_col in sub_row.sub_cols %}*/
/*                                                                 {% set sub_col_count = sub_col_count + 1 %}*/
/*                                                                 {% if sub_col == sub_row.sub_cols|last %}*/
/*                                                                     {% set sub_cols_format = sub_cols_format ~ sub_col.format %}*/
/*                                                                 {% else %}*/
/*                                                                     {% set sub_cols_format = sub_cols_format ~ sub_col.format ~ ' + '%}*/
/*                                                                 {% endif %}*/
/*                                                             {% endfor %}*/
/*                                                             <div class="sub-row sub-row-{{ widget_sub_row }}">*/
/*                                                                 <div class="sub-row-action">*/
/*                                                                     <div class="action-group">*/
/*                                                                         <span class="row-identify">{{ text_columns }}</span>*/
/*                                                                         <div class="sub-col-count">*/
/*                                                                             <a href="javascript:void(0);" onclick="builder.plusSubColumn($(this))" rel="1" class="col-plus"></a>*/
/*                                                                             <span class="count">{{ sub_col_count }}</span>*/
/*                                                                             <a href="javascript:void(0);" onclick="builder.minusSubColumn($(this))" rel="1" class="col-minus"></a>*/
/*                                                                         </div>*/
/*                                                                         <div class="a-group">*/
/*                                                                             <a class="a-column-custom" title="{{ text_custom_columns }}" onclick="builder.customSubColumns($(this))" href="javascript:void(0);"></a>*/
/*                                                                             <a class="a-row-delete" onclick="builder.removeSubRow($(this))" href="javascript:void(0);"></a>*/
/*                                                                         </div>*/
/*                                                                     </div>*/
/*                                                                     <input type="hidden" class="sub-cols-format" value="{{ sub_cols_format }}" />*/
/*                                                                 </div>*/
/*                                                                 <div class="sub-row-content">*/
/*                                                                     {% set sub_col_count = 0 %}*/
/*                                                                     {% for sub_col in sub_row.sub_cols %}*/
/*                                                                         <div class="col-sm-{{ sub_col.format }} column-area">*/
/*                                                                             <div class="module-area droparea ui-droppable ui-sortable sub-col-{{ sub_col_count }}">*/
/*                                                                                 <div class="text-insert-module"><span class="">{{ text_insert_module }}</span></div>*/
/*                                                                                 {% if sub_col.info %}*/
/*                                                                                     {% for modules in sub_col.info %}*/
/*                                                                                         {% set position = 0 %}*/
/*                                                                                         {% for module in modules %}*/
/*                                                                                             {% set module_name = '' %}*/
/*                                                                                             {% set module_url = '' %}*/
/*                                                                                             {% for extension in extensions %}*/
/*                                                                                                 {% if not extension.modules and (extension.code == module.code) %}*/
/*                                                                                                     {% set module_url = extension.url %}*/
/*                                                                                                     {% set module_name = extension.name %}*/
/*                                                                                                 {% else %}*/
/*                                                                                                     {% for m in extension.modules %}*/
/*                                                                                                         {% if m.code == module.code %}*/
/*                                                                                                             {% set module_url = m.url %}*/
/*                                                                                                             {% set module_name = m.name %}*/
/*                                                                                                         {% endif %}*/
/*                                                                                                     {% endfor %}*/
/*                                                                                                 {% endif %}*/
/*                                                                                             {% endfor %}*/
/*                                                                                             <div class="layout-module-info moveable">*/
/*                                                                                                 <div class="top">*/
/*                                                                                                     <div class="module-info">*/
/*                                                                                                         <p>{{ module_name }}</p>*/
/*                                                                                                         <a class="btn-edit" href="javascript:void(0);" onclick="loadModule('{{ module_url }}')"></a>*/
/*                                                                                                         <a class="btn-remove" href="javascript:void(0);" onclick="builder.removeModule($(this))"></a>*/
/*                                                                                                     </div>*/
/*                                                                                                 </div>*/
/*                                                                                                 <input type="hidden" class="module-in-main-row" value="{{ widget_row }}" />*/
/*                                                                                                 <input type="hidden" class="module-in-main-col" value="{{ main_col_count }}" />*/
/*                                                                                                 <input type="hidden" class="module-in-sub-row" value="{{ widget_sub_row }}" />*/
/*                                                                                                 <input type="hidden" class="module-in-sub-col" value="{{ sub_col_count }}" />*/
/*                                                                                                 <input type="hidden" class="module-code" name="widget[{{ widget_row }}][main_cols][{{ main_col_count }}][sub_rows][{{ widget_sub_row }}][sub_cols][{{ sub_col_count }}][info][module][{{ position }}][code]" value="{{ module.code }}" />*/
/*                                                                                                 <input type="hidden" class="module-name" name="widget[{{ widget_row }}][main_cols][{{ main_col_count }}][sub_rows][{{ widget_sub_row }}][sub_cols][{{ sub_col_count }}][info][module][{{ position }}][name]" value="{{ module.name }}" />*/
/*                                                                                                 <input type="hidden" class="module-url"  name="widget[{{ widget_row }}][main_cols][{{ main_col_count }}][sub_rows][{{ widget_sub_row }}][sub_cols][{{ sub_col_count }}][info][module][{{ position }}][url]"  value="{{ module.url }}" />*/
/*                                                                                             </div>*/
/*                                                                                             {% set position = position + 1 %}*/
/*                                                                                         {% endfor %}*/
/*                                                                                     {% endfor %}*/
/*                                                                                 {% endif %}*/
/*                                                                             </div>*/
/*                                                                             <div class="col-action">*/
/*                                                                                 <div class="action-group">*/
/*                                                                                     <a class="a-module-add" onclick="builder.showAllModules($(this))" href="javascript:void(0);"><i class="fa fa-plus"></i> {{ text_add_module }}</a>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                             <input type="hidden" class="sub-col-pos" value="{{ sub_col_count }}" />*/
/*                                                                             <input type="hidden" class="sub-col-format" name="widget[{{ widget_row }}][main_cols][{{ main_col_count }}][sub_rows][{{ widget_sub_row }}][sub_cols][{{ sub_col_count }}][format]" value="{{ sub_col.format }}" />*/
/*                                                                         </div>*/
/*                                                                         {% set sub_col_count = sub_col_count + 1 %}*/
/*                                                                     {% endfor %}*/
/*                                                                 </div>*/
/*                                                                 <input type="hidden" class="sub-row-pos" value="{{ widget_sub_row }}" />*/
/*                                                             </div>*/
/*                                                             {% set widget_sub_row = widget_sub_row + 1 %}*/
/*                                                         {% endfor %}*/
/*                                                     {% else %}*/
/*                                                         <div class="sub-row sub-row-{{ widget_sub_row }}">*/
/*                                                             <div class="sub-row-action">*/
/*                                                                 <div class="action-group">*/
/*                                                                     <span class="row-identify">{{ text_columns }}</span>*/
/*                                                                     <div class="sub-col-count">*/
/*                                                                         <a href="javascript:void(0);" onclick="builder.plusSubColumn($(this))" rel="1" class="col-plus"></a>*/
/*                                                                         <span class="count">1</span>*/
/*                                                                         <a href="javascript:void(0);" onclick="builder.minusSubColumn($(this))" rel="1" class="col-minus"></a>*/
/*                                                                     </div>*/
/*                                                                     <div class="a-group">*/
/*                                                                         <a class="a-column-custom" title="{{ text_custom_columns }}" onclick="builder.customSubColumns($(this))" href="javascript:void(0);"></a>*/
/*                                                                         <a class="a-row-delete" onclick="builder.removeSubRow($(this))" href="javascript:void(0);"></a>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                                 <input type="hidden" class="sub-cols-format" value="12" />*/
/*                                                             </div>*/
/*                                                             <div class="sub-row-content">*/
/*                                                                 <div class="col-sm-12 column-area">*/
/*                                                                     <div class="module-area droparea ui-droppable ui-sortable sub-col-{{ sub_col_count }}">*/
/*                                                                         <div class="text-insert-module"><span class="">{{ text_insert_module }}</span></div>*/
/*                                                                     </div>*/
/*                                                                     <div class="col-action">*/
/*                                                                         <div class="action-group">*/
/*                                                                             <a class="a-module-add" onclick="builder.showAllModules($(this))" href="javascript:void(0);"><i class="fa fa-plus"></i> {{ text_add_module }}</a>*/
/*                                                                         </div>*/
/*                                                                     </div>*/
/*                                                                     <input type="hidden" class="sub-col-pos" value="{{ sub_col_count }}" />*/
/*                                                                     <input type="hidden" class="sub-col-format" name="widget[0][main_cols][0][sub_rows][0][sub_cols][0][format]" value="12" />*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                             <input type="hidden" class="sub-row-pos" value="{{ widget_sub_row }}" />*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             {% set main_col_count = main_col_count + 1 %}*/
/*                                         {% endfor %}*/
/*                                     </div>*/
/*                                     <input type="hidden" class="main-row-pos" value="{{ widget_row }}" />*/
/*                                 </div>*/
/*                                 {% set widget_row = widget_row + 1 %}*/
/*                             {% endfor %}*/
/*                         {% else %}*/
/*                             {% set widget_row = 0 %}*/
/*                             <div class="widget-row col-sm-12">*/
/*                                 <div class="row-action">*/
/*                                     <div class="action-group">*/
/*                                         <input type="text" class="form-control input-class-name" name="widget[0][class]" value="" placeholder="{{ text_custom_classname }}" />*/
/*                                         <span class="row-identify">{{ text_columns }}</span>*/
/*                                         <div class="col-count">*/
/*                                             <a href="javascript:void(0);" onclick="builder.plusMainColumn($(this));" rel="1" class="col-plus"></a>*/
/*                                             <span class="count">1</span>*/
/*                                             <a href="javascript:void(0);" onclick="builder.minusMainColumn($(this));" rel="1" class="col-minus"></a>*/
/*                                         </div>*/
/*                                         <div class="a-group">*/
/*                                             <a class="a-column-custom" title="{{ text_custom_columns }}" onclick="builder.customMainColumns($(this));" href="javascript:void(0);"></a>*/
/*                                             <a class="a-row-delete" onclick="builder.removeRow($(this));" href="javascript:void(0);"></a>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <input type="hidden" class="cols-format" value="12" />*/
/*                                 </div>*/
/*                                 <div class="row-content row-{{ widget_row }}">*/
/*                                     {% set main_col_count = 0 %}*/
/*                                     {% set sub_col_count = 0 %}*/
/*                                     <div class="col-sm-12 main-column">*/
/*                                         <input type="hidden" class="main-col-pos" value="{{ main_col_count }}" />*/
/*                                         <input type="hidden" class="main-col-format" name="widget[0][main_cols][0][format]" value="12" />*/
/*                                         <a class="a-sub-row-add" href="javascript:void(0);" onclick="builder.drawSubRow($(this))">{{ text_add_sub_row }}</a>*/
/*                                         <div class="main-col-content main-col-{{ main_col_count }}">*/
/*                                             {% set widget_sub_row = 0 %}*/
/*                                             <div class="sub-row sub-row-{{ widget_sub_row }}">*/
/*                                                 <div class="sub-row-action">*/
/*                                                     <div class="action-group">*/
/*                                                         <span class="row-identify">{{ text_columns }}</span>*/
/*                                                         <div class="sub-col-count">*/
/*                                                             <a href="javascript:void(0);" onclick="builder.plusSubColumn($(this))" rel="1" class="col-plus"></a>*/
/*                                                             <span class="count">1</span>*/
/*                                                             <a href="javascript:void(0);" onclick="builder.minusSubColumn($(this))" rel="1" class="col-minus"></a>*/
/*                                                         </div>*/
/*                                                         <div class="a-group">*/
/*                                                             <a class="a-column-custom" title="{{ text_custom_columns }}" onclick="builder.customSubColumns($(this))" href="javascript:void(0);"></a>*/
/*                                                             <a class="a-row-delete" onclick="builder.removeSubRow($(this))" href="javascript:void(0);"></a>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <input type="hidden" class="sub-cols-format" value="12" />*/
/*                                                 </div>*/
/*                                                 <div class="sub-row-content">*/
/*                                                     <div class="col-sm-12 column-area">*/
/*                                                         <div class="module-area droparea ui-droppable ui-sortable sub-col-{{ sub_col_count }}">*/
/*                                                             <div class="text-insert-module"><span class="">{{ text_insert_module }}</span></div>*/
/*                                                         </div>*/
/*                                                         <div class="col-action">*/
/*                                                             <div class="action-group">*/
/*                                                                 <a class="a-module-add" onclick="builder.showAllModules($(this))" href="javascript:void(0);"><i class="fa fa-plus"></i> {{ text_add_module }}</a>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <input type="hidden" class="sub-col-pos" value="{{ sub_col_count }}" />*/
/*                                                         <input type="hidden" class="sub-col-format" name="widget[0][main_cols][0][sub_rows][0][sub_cols][0][format]" value="12" />*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <input type="hidden" class="sub-row-pos" value="{{ widget_sub_row }}" />*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <input type="hidden" class="main-row-pos" value="{{ widget_row }}" />*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <div class="widget-info-group col-sm-12">*/
/*                         <button type="button" class="btn-insert btn">*/
/*                             <i class="fa fa-plus"></i>*/
/*                             <span>{{ text_add_row }}</span>*/
/*                         </button>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*         <div class="all-modules-container row">*/
/*             <div class="modules-container">*/
/*                 {% for extension in extensions %}*/
/*                     {% if not extension.modules %}*/
/*                         {% set extension_url = extension.url %}*/
/*                         {% set extension_code = extension.code %}*/
/*                         {% set extension_name = extension.name %}*/
/*                         <div class="col-sm-4">*/
/*                             <button type="button" onclick="builder.addModule('{{ extension_name }}', '{{ extension_code }}', '{{ extension_url }}')" class="btn-choose-module btn btn-default" value="{{ extension_code }}">*/
/*                                 <span>*/
/*                                     {{ extension_name }}*/
/*                                 </span>*/
/*                             </button>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         {% for module in extension.modules %}*/
/*                             {% set module_url = module.url %}*/
/*                             {% set module_code = module.code %}*/
/*                             {% set module_name = module.name %}*/
/*                             <div class="col-sm-4">*/
/*                                 <button type="button" onclick="builder.addModule('{{ module_name }}', '{{ module_code }}', '{{ module_url }}')" class="btn-choose-module btn btn-default" value="{{ module_code }}">*/
/*                                     <span>*/
/*                                         {{ module_name }}*/
/*                                     </span>*/
/*                                 </button>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <input type="hidden" id="module-row" value="0" />*/
/*             <input type="hidden" id="module-col" value="0" />*/
/*             <input type="hidden" id="module-sub-row" value="0" />*/
/*             <input type="hidden" id="module-sub-col" value="0" />*/
/*             <div class="modules-btn-group">*/
/*                 <button type="button" class="btn-close btn-default pull-right" onclick="builder.closeAllModules();">Close</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <input type="hidden" id="text-columns" value="{{ text_columns }}" />*/
/* <input type="hidden" id="text-insert-module" value="{{ text_insert_module }}" />*/
/* <input type="hidden" id="text-add-module" value="{{ text_add_module }}" />*/
/* <input type="hidden" id="text-custom-columns" value="{{ text_custom_columns }}" />*/
/* <input type="hidden" id="text-custom-classname" value="{{ text_custom_classname }}" />*/
/* <input type="hidden" id="text-number-min-over" value="{{ text_number_min_over }}" />*/
/* <input type="hidden" id="text-number-max-over" value="{{ text_number_max_over }}" />*/
/* <input type="hidden" id="text-columns-error-format" value="{{ text_columns_error_format }}" />*/
/* */
/* <div class="popup-background"></div>*/
/*     <div class="popup-loader-img">*/
/*     </div>*/
/*     <div class="popup-container">*/
/*         <div class="popup-content">*/
/*             <iframe src="" id="module-frame" scrolling="yes"></iframe>*/
/*         </div>*/
/*         <div class="popup-btn-group">*/
/*             <button type="button" class="btn-close btn-default pull-right" onclick="closePopup();">Close</button>*/
/*         </div>*/
/*     </div>*/
/* {{ footer }}*/
/* */
/* <script type="text/javascript">*/
/*     $('.btn-insert').click(function () {*/
/*         var row_number = $('.widget-row:last .main-row-pos').val();*/
/*         if(row_number == null) {*/
/*             row_number = 0;*/
/*         } else {*/
/*             row_number++;*/
/*         }*/
/*         builder.drawMainRow(row_number);*/
/*     });*/
/* */
/*     var module_edit_frame = $('#module-frame');*/
/* */
/*     function closePopup() {*/
/*         $('.popup-background').hide();*/
/*         $('.popup-loader-img').hide();*/
/*         $('.popup-container').hide();*/
/*         module_edit_frame.attr('src', "");*/
/*     }*/
/* */
/*     function loadModule(url) {*/
/*         module_edit_frame.attr('src', url);*/
/*         $('.popup-background').show();*/
/*         $('.popup-loader-img').show();*/
/*     }*/
/* */
/*     module_edit_frame.on('load', function(event) {*/
/*         var current_url = document.getElementById("module-frame").contentWindow.location.href;*/
/* */
/*         if(module_edit_frame.attr('src') != "" && current_url.search('route=extension/module') > -1) {*/
/*             module_edit_frame.contents().find('#header,#content .page-header .breadcrumb,#column-left,#footer').hide();*/
/*             module_edit_frame.contents().find('#column-left + #content').css('margin', '0px');*/
/*             module_edit_frame.contents().find('#content').css('padding', '20px 0 0');*/
/*             $('.popup-container').show();*/
/*         } else {*/
/*             $('.popup-background').hide();*/
/*             $('.popup-loader-img').hide();*/
/*             $('.popup-container').hide();*/
/*         }*/
/*     });*/
/* */
/*     $('.popup-background').on('click', function(){*/
/*         closePopup();*/
/*         builder.closeAllModules();*/
/*     });*/
/* </script>*/
