<?php

/* tt_handart2/template/extension/module/ocajaxlogin/ajaxregister.twig */
class __TwigTemplate_f2a792639849e516c8279640230f964558c9fa7838c81ee3c20a0d26990e62ba extends Twig_Template
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
        echo "<div class=\"ajax-container\">
    <div class=\"register-form-content\">
        <h1>";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
        <p>";
        // line 4
        echo (isset($context["text_account_already"]) ? $context["text_account_already"] : null);
        echo "</p>
        <form action=\"";
        // line 5
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" id=\"ajax-register-form\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
            <fieldset id=\"account\">
                <legend>";
        // line 7
        echo (isset($context["text_your_details"]) ? $context["text_your_details"] : null);
        echo "</legend>
                <div class=\"form-group required\" style=\"display: ";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
                    <label class=\"col-sm-2 control-label\">";
        // line 9
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 12
            echo "                        ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 13
                echo "                        <div class=\"radio\">
                            <label>
                                <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 15
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" />
                                ";
                // line 16
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
                        </div>
                        ";
            } else {
                // line 19
                echo "                        <div class=\"radio\">
                            <label>
                                <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 21
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" />
                                ";
                // line 22
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
                        </div>
                        ";
            }
            // line 25
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                    </div>
                </div>
                <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 29
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"firstname\" value=\"";
        // line 31
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                        <!-- Error First Name -->
                        <div class=\"for-error error-firstname\"></div>
                    </div>
                </div>
                <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 37
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"lastname\" value=\"";
        // line 39
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                        <!-- Error Last Name -->
                        <div class=\"for-error error-lastname\"></div>
                    </div>
                </div>
                <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-register-email\">";
        // line 45
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"email\" name=\"email\" value=\"";
        // line 47
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-register-email\" class=\"form-control\" />
                        <!-- Error Email -->
                        <div class=\"for-error error-email\"></div>
                    </div>
                </div>
                <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 53
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"tel\" name=\"telephone\" value=\"";
        // line 55
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                        <!-- Error Phone -->
                        <div class=\"for-error error-telephone\"></div>
                    </div>
                </div>
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 61
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 62
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 63
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                    <div class=\"col-sm-10\">
                        <select name=\"custom_field[";
                // line 65
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">
                            <option value=\"\">";
                // line 66
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
                            ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 68
                    echo "                            ";
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 69
                        echo "                            <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
                            ";
                    } else {
                        // line 71
                        echo "                            <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
                            ";
                    }
                    // line 73
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                        </select>
                        <!-- Error Custom -->
                        <div class=\"for-error error-custom\"></div>
                    </div>
                </div>
                ";
            }
            // line 80
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 81
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <label class=\"col-sm-2 control-label\">";
                // line 82
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                    <div class=\"col-sm-10\">
                        <div>
                            ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 86
                    echo "                            <div class=\"radio\">
                                ";
                    // line 87
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 88
                        echo "                                <label>
                                    <input type=\"radio\" name=\"custom_field[";
                        // line 89
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\" />
                                    ";
                        // line 90
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                                ";
                    } else {
                        // line 92
                        echo "                                <label>
                                    <input type=\"radio\" name=\"custom_field[";
                        // line 93
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
                                    ";
                        // line 94
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                                ";
                    }
                    // line 96
                    echo "                            </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "                        </div>
                        <!-- Error Custom -->
                        <div class=\"for-error error-custom\"></div>
                    </div>
                </div>
                ";
            }
            // line 104
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 105
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <label class=\"col-sm-2 control-label\">";
                // line 106
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                    <div class=\"col-sm-10\">
                        <div>
                            ";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 110
                    echo "                            <div class=\"checkbox\">
                                ";
                    // line 111
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 112
                        echo "                                    <label>
                                        <input type=\"checkbox\" name=\"custom_field[";
                        // line 113
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\" />
                                        ";
                        // line 114
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
                                    </label>
                                ";
                    } else {
                        // line 117
                        echo "                                    <label>
                                        <input type=\"checkbox\" name=\"custom_field[";
                        // line 118
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
                                        ";
                        // line 119
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
                                    </label>
                                ";
                    }
                    // line 122
                    echo "                            </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "                        </div>
                        <!-- Error Custom -->
                        <div class=\"for-error error-custom\"></div>
                    </div>
                </div>
                ";
            }
            // line 130
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 131
                echo "                    <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 132
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"custom_field[";
                // line 134
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />

                            <!-- Error Custom -->
                            <div class=\"for-error error-custom\"></div>
                        </div>
                    </div>
                ";
            }
            // line 141
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 142
                echo "                    <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 143
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                        <div class=\"col-sm-10\">
                            <textarea name=\"custom_field[";
                // line 145
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" rows=\"5\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "</textarea>

                            <!-- Error Custom -->
                            <div class=\"for-error error-custom\"></div>
                        </div>
                    </div>
                ";
            }
            // line 152
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 153
                echo "                    <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                        <label class=\"col-sm-2 control-label\">";
                // line 154
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                        <div class=\"col-sm-10\">
                            <button type=\"button\" id=\"button-custom-field";
                // line 156
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
                            <input type=\"hidden\" name=\"custom_field[";
                // line 157
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo "  ";
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo " ";
                }
                echo "\" />

                            <!-- Error Custom -->
                            <div class=\"for-error error-custom\"></div>
                        </div>
                    </div>
                ";
            }
            // line 164
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 165
                echo "                    <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 166
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                        <div class=\"col-sm-10\">
                            <div class=\"input-group date\">
                                <input type=\"text\" name=\"custom_field[";
                // line 169
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
                                <span class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                </span>
                            </div>

                            <!-- Error Custom -->
                            <div class=\"for-error error-custom\"></div>
                        </div>
                    </div>
                ";
            }
            // line 180
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 181
                echo "                    <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 182
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                        <div class=\"col-sm-10\">
                            <div class=\"input-group time\">
                                <input type=\"text\" name=\"custom_field[";
                // line 185
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
                                <span class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                </span>
                            </div>

                            <!-- Error Custom -->
                            <div class=\"for-error error-custom\"></div>
                        </div>
                    </div>
                ";
            }
            // line 196
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                // line 197
                echo "                    <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 198
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                        <div class=\"col-sm-10\">
                            <div class=\"input-group datetime\">
                                <input type=\"text\" name=\"custom_field[";
                // line 201
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
                                <span class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                </span>
                            </div>

                            <!-- Error Custom -->
                            <div class=\"for-error error-custom\"></div>
                        </div>
                    </div>
                ";
            }
            // line 212
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "            </fieldset>
            <fieldset>
                <legend>";
        // line 215
        echo (isset($context["text_your_password"]) ? $context["text_your_password"] : null);
        echo "</legend>
                <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-register-password\">";
        // line 217
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"password\" name=\"password\" value=\"";
        // line 219
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-register-password\" class=\"form-control\" />
                        <!-- Error Password -->
                        <div class=\"for-error error-password\"></div>
                    </div>
                </div>
                <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 225
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"password\" name=\"confirm\" value=\"";
        // line 227
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
                        <!-- Error Confirm Password -->
                        <div class=\"for-error error-confirm\"></div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>";
        // line 234
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</legend>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">";
        // line 236
        echo (isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 238
        if ((isset($context["newsletter"]) ? $context["newsletter"] : null)) {
            // line 239
            echo "                        <label class=\"radio-inline\">
                            <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\" />
                            ";
            // line 241
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"radio-inline\">
                            <input type=\"radio\" name=\"newsletter\" value=\"0\" />
                            ";
            // line 244
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                        ";
        } else {
            // line 246
            echo "                        <label class=\"radio-inline\">
                            <input type=\"radio\" name=\"newsletter\" value=\"1\" />
                            ";
            // line 248
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"radio-inline\">
                            <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\" />
                            ";
            // line 251
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                        ";
        }
        // line 253
        echo "                    </div>
                </div>
            </fieldset>
            ";
        // line 256
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
            ";
        // line 257
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 258
            echo "            <div class=\"buttons\">
                <div class=\"pull-right\">";
            // line 259
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "
                    ";
            // line 260
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 261
                echo "                        <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
                    ";
            } else {
                // line 263
                echo "                        <input type=\"checkbox\" name=\"agree\" value=\"1\" />
                    ";
            }
            // line 265
            echo "                    &nbsp;
                    <input type=\"button\" onclick=\"ocajaxlogin.registerAction();\" value=\"";
            // line 266
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" class=\"btn btn-primary\" />
                    <img class=\"ajax-load-img\" alt=\"\" src=\"";
            // line 267
            echo (isset($context["loader_img"]) ? $context["loader_img"] : null);
            echo "\" width=\"30\" height=\"30\" />
                </div>
            </div>
            ";
        } else {
            // line 271
            echo "            <div class=\"buttons\">
                <div class=\"pull-right\">
                    <button type=\"button\" onclick=\"ocajaxlogin.registerAction();\"  class=\"button\"><span>";
            // line 273
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</span></button>
                    <img class=\"ajax-load-img\" alt=\"\" src=\"";
            // line 274
            echo (isset($context["loader_img"]) ? $context["loader_img"] : null);
            echo "\" width=\"30\" height=\"30\" />
                </div>
            </div>
            ";
        }
        // line 278
        echo "        </form>
    </div>
    <div class=\"alert alert-danger for-error error-warning\"><i class=\"fa fa-exclamation-circle\"></i><span></span></div>
</div>
<script type=\"text/javascript\"><!--
    // Sort the custom fields
    \$('#account .form-group[data-sort]').detach().each(function() {
        if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
            \$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
        }

        if (\$(this).attr('data-sort') > \$('#account .form-group').length) {
            \$('#account .form-group:last').after(this);
        }

        if (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
            \$('#account .form-group:first').before(this);
        }
    });

    \$('#address .form-group[data-sort]').detach().each(function() {
        if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#address .form-group').length) {
            \$('#address .form-group').eq(\$(this).attr('data-sort')).before(this);
        }

        if (\$(this).attr('data-sort') > \$('#address .form-group').length) {
            \$('#address .form-group:last').after(this);
        }

        if (\$(this).attr('data-sort') < -\$('#address .form-group').length) {
            \$('#address .form-group:first').before(this);
        }
    });

    \$('input[name=\\'customer_group_id\\']').on('change', function() {
        \$.ajax({
            url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
            dataType: 'json',
            success: function(json) {
                \$('.custom-field').hide();
                \$('.custom-field').removeClass('required');

                for (i = 0; i < json.length; i++) {
                    custom_field = json[i];

                    \$('#custom-field' + custom_field['custom_field_id']).show();

                    if (custom_field['required']) {
                        \$('#custom-field' + custom_field['custom_field_id']).addClass('required');
                    }
                }


            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$('input[name=\\'customer_group_id\\']:checked').trigger('change');
    //--></script>
<script type=\"text/javascript\"><!--
    \$('button[id^=\\'button-custom-field\\']').on('click', function() {
        var element = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function() {
            if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        \$(element).button('loading');
                    },
                    complete: function() {
                        \$(element).button('reset');
                    },
                    success: function(json) {
                        \$(element).parent().find('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(element).parent().find('input').val(json['code']);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: document.cookie.match(new RegExp('language=([^;]+)'))[1],
        pickTime: false
    });

    \$('.time').datetimepicker({
        language: document.cookie.match(new RegExp('language=([^;]+)'))[1],
        pickDate: false
    });

    \$('.datetime').datetimepicker({
        language: document.cookie.match(new RegExp('language=([^;]+)'))[1],
        pickDate: true,
        pickTime: true
    });
    //--></script>";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/extension/module/ocajaxlogin/ajaxregister.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  754 => 278,  747 => 274,  743 => 273,  739 => 271,  732 => 267,  728 => 266,  725 => 265,  721 => 263,  717 => 261,  715 => 260,  711 => 259,  708 => 258,  706 => 257,  702 => 256,  697 => 253,  692 => 251,  686 => 248,  682 => 246,  677 => 244,  671 => 241,  667 => 239,  665 => 238,  660 => 236,  655 => 234,  643 => 227,  638 => 225,  627 => 219,  622 => 217,  617 => 215,  613 => 213,  607 => 212,  583 => 201,  575 => 198,  568 => 197,  565 => 196,  541 => 185,  533 => 182,  526 => 181,  523 => 180,  499 => 169,  491 => 166,  484 => 165,  481 => 164,  465 => 157,  457 => 156,  452 => 154,  445 => 153,  442 => 152,  422 => 145,  415 => 143,  408 => 142,  405 => 141,  385 => 134,  378 => 132,  371 => 131,  368 => 130,  360 => 124,  353 => 122,  347 => 119,  341 => 118,  338 => 117,  332 => 114,  326 => 113,  323 => 112,  321 => 111,  318 => 110,  314 => 109,  308 => 106,  301 => 105,  298 => 104,  290 => 98,  283 => 96,  278 => 94,  272 => 93,  269 => 92,  264 => 90,  258 => 89,  255 => 88,  253 => 87,  250 => 86,  246 => 85,  240 => 82,  233 => 81,  230 => 80,  222 => 74,  216 => 73,  208 => 71,  200 => 69,  197 => 68,  193 => 67,  189 => 66,  183 => 65,  176 => 63,  169 => 62,  166 => 61,  162 => 60,  152 => 55,  147 => 53,  136 => 47,  131 => 45,  120 => 39,  115 => 37,  104 => 31,  99 => 29,  94 => 26,  88 => 25,  82 => 22,  78 => 21,  74 => 19,  68 => 16,  64 => 15,  60 => 13,  57 => 12,  53 => 11,  48 => 9,  40 => 8,  36 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="ajax-container">*/
/*     <div class="register-form-content">*/
/*         <h1>{{ heading_title }}</h1>*/
/*         <p>{{ text_account_already }}</p>*/
/*         <form action="{{ action }}" method="post" id="ajax-register-form" enctype="multipart/form-data" class="form-horizontal">*/
/*             <fieldset id="account">*/
/*                 <legend>{{ text_your_details }}</legend>*/
/*                 <div class="form-group required" style="display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};">*/
/*                     <label class="col-sm-2 control-label">{{ entry_customer_group }}</label>*/
/*                     <div class="col-sm-10">*/
/*                         {% for customer_group in customer_groups %}*/
/*                         {% if customer_group.customer_group_id == customer_group_id %}*/
/*                         <div class="radio">*/
/*                             <label>*/
/*                                 <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" checked="checked" />*/
/*                                 {{ customer_group.name }}</label>*/
/*                         </div>*/
/*                         {% else %}*/
/*                         <div class="radio">*/
/*                             <label>*/
/*                                 <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" />*/
/*                                 {{ customer_group.name }}</label>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*                     <div class="col-sm-10">*/
/*                         <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control" />*/
/*                         <!-- Error First Name -->*/
/*                         <div class="for-error error-firstname"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*                     <div class="col-sm-10">*/
/*                         <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control" />*/
/*                         <!-- Error Last Name -->*/
/*                         <div class="for-error error-lastname"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-register-email">{{ entry_email }}</label>*/
/*                     <div class="col-sm-10">*/
/*                         <input type="email" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-register-email" class="form-control" />*/
/*                         <!-- Error Email -->*/
/*                         <div class="for-error error-email"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                     <div class="col-sm-10">*/
/*                         <input type="tel" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*                         <!-- Error Phone -->*/
/*                         <div class="for-error error-telephone"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% for custom_field in custom_fields %}*/
/*                 {% if custom_field.type == 'select' %}*/
/*                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                     <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                     <div class="col-sm-10">*/
/*                         <select name="custom_field[{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                             <option value="">{{ text_select }}</option>*/
/*                             {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             {% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/*                             <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                             {% endif %}*/
/*                             {%  endfor %}*/
/*                         </select>*/
/*                         <!-- Error Custom -->*/
/*                         <div class="for-error error-custom"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'radio' %}*/
/*                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                     <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                     <div class="col-sm-10">*/
/*                         <div>*/
/*                             {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             <div class="radio">*/
/*                                 {% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/*                                 <label>*/
/*                                     <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                                     {{ custom_field_value.name }}</label>*/
/*                                 {% else %}*/
/*                                 <label>*/
/*                                     <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                                     {{ custom_field_value.name }}</label>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                         <!-- Error Custom -->*/
/*                         <div class="for-error error-custom"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'checkbox' %}*/
/*                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                     <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                     <div class="col-sm-10">*/
/*                         <div>*/
/*                             {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             <div class="checkbox">*/
/*                                 {% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in register_custom_field[custom_field.custom_field_id] %}*/
/*                                     <label>*/
/*                                         <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                                         {{ custom_field_value.name }}*/
/*                                     </label>*/
/*                                 {% else %}*/
/*                                     <label>*/
/*                                         <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                                         {{ custom_field_value.name }}*/
/*                                     </label>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                         <!-- Error Custom -->*/
/*                         <div class="for-error error-custom"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'text' %}*/
/*                     <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                         <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/* */
/*                             <!-- Error Custom -->*/
/*                             <div class="for-error error-custom"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'textarea' %}*/
/*                     <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                         <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <textarea name="custom_field[{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/* */
/*                             <!-- Error Custom -->*/
/*                             <div class="for-error error-custom"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'file' %}*/
/*                     <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                         <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                             <input type="hidden" name="custom_field[{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}  {{ register_custom_field[custom_field.custom_field_id] }} {% endif %}" />*/
/* */
/*                             <!-- Error Custom -->*/
/*                             <div class="for-error error-custom"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'date' %}*/
/*                     <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                         <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <div class="input-group date">*/
/*                                 <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                                 <span class="input-group-btn">*/
/*                                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                                 </span>*/
/*                             </div>*/
/* */
/*                             <!-- Error Custom -->*/
/*                             <div class="for-error error-custom"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'time' %}*/
/*                     <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                         <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <div class="input-group time">*/
/*                                 <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                                 <span class="input-group-btn">*/
/*                                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                                 </span>*/
/*                             </div>*/
/* */
/*                             <!-- Error Custom -->*/
/*                             <div class="for-error error-custom"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'datetime' %}*/
/*                     <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                         <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <div class="input-group datetime">*/
/*                                 <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                                 <span class="input-group-btn">*/
/*                                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                                 </span>*/
/*                             </div>*/
/* */
/*                             <!-- Error Custom -->*/
/*                             <div class="for-error error-custom"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*             </fieldset>*/
/*             <fieldset>*/
/*                 <legend>{{ text_your_password }}</legend>*/
/*                 <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-register-password">{{ entry_password }}</label>*/
/*                     <div class="col-sm-10">*/
/*                         <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-register-password" class="form-control" />*/
/*                         <!-- Error Password -->*/
/*                         <div class="for-error error-password"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-confirm">{{ entry_confirm }}</label>*/
/*                     <div class="col-sm-10">*/
/*                         <input type="password" name="confirm" value="{{ confirm }}" placeholder="{{ entry_confirm }}" id="input-confirm" class="form-control" />*/
/*                         <!-- Error Confirm Password -->*/
/*                         <div class="for-error error-confirm"></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </fieldset>*/
/*             <fieldset>*/
/*                 <legend>{{ text_newsletter }}</legend>*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-2 control-label">{{ entry_newsletter }}</label>*/
/*                     <div class="col-sm-10">*/
/*                         {% if newsletter %}*/
/*                         <label class="radio-inline">*/
/*                             <input type="radio" name="newsletter" value="1" checked="checked" />*/
/*                             {{ text_yes }}</label>*/
/*                         <label class="radio-inline">*/
/*                             <input type="radio" name="newsletter" value="0" />*/
/*                             {{ text_no }}</label>*/
/*                         {% else %}*/
/*                         <label class="radio-inline">*/
/*                             <input type="radio" name="newsletter" value="1" />*/
/*                             {{ text_yes }}</label>*/
/*                         <label class="radio-inline">*/
/*                             <input type="radio" name="newsletter" value="0" checked="checked" />*/
/*                             {{ text_no }}</label>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </fieldset>*/
/*             {{ captcha }}*/
/*             {% if text_agree %}*/
/*             <div class="buttons">*/
/*                 <div class="pull-right">{{ text_agree }}*/
/*                     {% if agree %}*/
/*                         <input type="checkbox" name="agree" value="1" checked="checked" />*/
/*                     {% else %}*/
/*                         <input type="checkbox" name="agree" value="1" />*/
/*                     {% endif %}*/
/*                     &nbsp;*/
/*                     <input type="button" onclick="ocajaxlogin.registerAction();" value="{{ button_continue }}" class="btn btn-primary" />*/
/*                     <img class="ajax-load-img" alt="" src="{{ loader_img }}" width="30" height="30" />*/
/*                 </div>*/
/*             </div>*/
/*             {% else %}*/
/*             <div class="buttons">*/
/*                 <div class="pull-right">*/
/*                     <button type="button" onclick="ocajaxlogin.registerAction();"  class="button"><span>{{ button_continue }}</span></button>*/
/*                     <img class="ajax-load-img" alt="" src="{{ loader_img }}" width="30" height="30" />*/
/*                 </div>*/
/*             </div>*/
/*             {% endif %}*/
/*         </form>*/
/*     </div>*/
/*     <div class="alert alert-danger for-error error-warning"><i class="fa fa-exclamation-circle"></i><span></span></div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*     // Sort the custom fields*/
/*     $('#account .form-group[data-sort]').detach().each(function() {*/
/*         if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#account .form-group').length) {*/
/*             $('#account .form-group').eq($(this).attr('data-sort')).before(this);*/
/*         }*/
/* */
/*         if ($(this).attr('data-sort') > $('#account .form-group').length) {*/
/*             $('#account .form-group:last').after(this);*/
/*         }*/
/* */
/*         if ($(this).attr('data-sort') < -$('#account .form-group').length) {*/
/*             $('#account .form-group:first').before(this);*/
/*         }*/
/*     });*/
/* */
/*     $('#address .form-group[data-sort]').detach().each(function() {*/
/*         if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#address .form-group').length) {*/
/*             $('#address .form-group').eq($(this).attr('data-sort')).before(this);*/
/*         }*/
/* */
/*         if ($(this).attr('data-sort') > $('#address .form-group').length) {*/
/*             $('#address .form-group:last').after(this);*/
/*         }*/
/* */
/*         if ($(this).attr('data-sort') < -$('#address .form-group').length) {*/
/*             $('#address .form-group:first').before(this);*/
/*         }*/
/*     });*/
/* */
/*     $('input[name=\'customer_group_id\']').on('change', function() {*/
/*         $.ajax({*/
/*             url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,*/
/*             dataType: 'json',*/
/*             success: function(json) {*/
/*                 $('.custom-field').hide();*/
/*                 $('.custom-field').removeClass('required');*/
/* */
/*                 for (i = 0; i < json.length; i++) {*/
/*                     custom_field = json[i];*/
/* */
/*                     $('#custom-field' + custom_field['custom_field_id']).show();*/
/* */
/*                     if (custom_field['required']) {*/
/*                         $('#custom-field' + custom_field['custom_field_id']).addClass('required');*/
/*                     }*/
/*                 }*/
/* */
/* */
/*             },*/
/*             error: function(xhr, ajaxOptions, thrownError) {*/
/*                 console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     $('input[name=\'customer_group_id\']:checked').trigger('change');*/
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     $('button[id^=\'button-custom-field\']').on('click', function() {*/
/*         var element = this;*/
/* */
/*         $('#form-upload').remove();*/
/* */
/*         $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/*         $('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/*         if (typeof timer != 'undefined') {*/
/*             clearInterval(timer);*/
/*         }*/
/* */
/*         timer = setInterval(function() {*/
/*             if ($('#form-upload input[name=\'file\']').val() != '') {*/
/*                 clearInterval(timer);*/
/* */
/*                 $.ajax({*/
/*                     url: 'index.php?route=tool/upload',*/
/*                     type: 'post',*/
/*                     dataType: 'json',*/
/*                     data: new FormData($('#form-upload')[0]),*/
/*                     cache: false,*/
/*                     contentType: false,*/
/*                     processData: false,*/
/*                     beforeSend: function() {*/
/*                         $(element).button('loading');*/
/*                     },*/
/*                     complete: function() {*/
/*                         $(element).button('reset');*/
/*                     },*/
/*                     success: function(json) {*/
/*                         $(element).parent().find('.text-danger').remove();*/
/* */
/*                         if (json['error']) {*/
/*                             $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*                         }*/
/* */
/*                         if (json['success']) {*/
/*                             alert(json['success']);*/
/* */
/*                             $(element).parent().find('input').val(json['code']);*/
/*                         }*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         }, 500);*/
/*     });*/
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     $('.date').datetimepicker({*/
/*         language: document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*         pickTime: false*/
/*     });*/
/* */
/*     $('.time').datetimepicker({*/
/*         language: document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*         pickDate: false*/
/*     });*/
/* */
/*     $('.datetime').datetimepicker({*/
/*         language: document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*         pickDate: true,*/
/*         pickTime: true*/
/*     });*/
/*     //--></script>*/
