<?php

/* extension/module/ocblog.twig */
class __TwigTemplate_9a8cb0a359b2075a3c1a0ef15e855afa7cdf9d5302e3a65b21f57771d1fe0348 extends Twig_Template
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
                <a href=\"";
        // line 6
        echo (isset($context["list_action"]) ? $context["list_action"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_article_list"]) ? $context["button_article_list"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-pencil-square-o\"></i></a>
                <button type=\"submit\" form=\"form-blog\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
            </div>
            <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
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
        // line 15
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 24
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 29
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blog\" class=\"form-horizontal\">
                    <fieldset>
                          <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 32
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"name\" value=\"";
        // line 34
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                              ";
        // line 35
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 36
            echo "                              <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
                              ";
        }
        // line 38
        echo "                            </div>
                          </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 41
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                    ";
        // line 44
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 45
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 46
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                    ";
        } else {
            // line 48
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 49
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                    ";
        }
        // line 51
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-list\">";
        // line 55
        echo (isset($context["entry_article_list"]) ? $context["entry_article_list"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"list\" id=\"input-list\" class=\"form-control\">
                                ";
        // line 58
        if ((isset($context["article_lists"]) ? $context["article_lists"] : null)) {
            // line 59
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["article_lists"]) ? $context["article_lists"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article_list"]) {
                // line 60
                echo "                                        ";
                if ((isset($context["list"]) ? $context["list"] : null)) {
                    // line 61
                    echo "                                            ";
                    if (((isset($context["list"]) ? $context["list"] : null) == $this->getAttribute($context["article_list"], "article_list_id", array()))) {
                        // line 62
                        echo "                                                <option value=\"";
                        echo $this->getAttribute($context["article_list"], "article_list_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["article_list"], "name", array());
                        echo "</option>
                                            ";
                    } else {
                        // line 64
                        echo "                                                <option value=\"";
                        echo $this->getAttribute($context["article_list"], "article_list_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["article_list"], "name", array());
                        echo "</option>
                                            ";
                    }
                    // line 66
                    echo "                                        ";
                } else {
                    // line 67
                    echo "                                            <option value=\"";
                    echo $this->getAttribute($context["article_list"], "article_list_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["article_list"], "name", array());
                    echo "</option>
                                        ";
                }
                // line 69
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article_list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                                ";
        }
        // line 71
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 75
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"width\" value=\"";
        // line 77
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                                ";
        // line 78
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            // line 79
            echo "                                <div class=\"text-danger\">";
            echo (isset($context["error_width"]) ? $context["error_width"] : null);
            echo "</div>
                                ";
        }
        // line 81
        echo "                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 85
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"height\" value=\"";
        // line 87
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                                ";
        // line 88
        if ((isset($context["error_height"]) ? $context["error_height"] : null)) {
            // line 89
            echo "                                <div class=\"text-danger\">";
            echo (isset($context["error_height"]) ? $context["error_height"] : null);
            echo "</div>
                                ";
        }
        // line 91
        echo "                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-auto\">";
        // line 95
        echo (isset($context["entry_auto"]) ? $context["entry_auto"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"auto\" id=\"input-auto\" class=\"form-control\">
                                    ";
        // line 98
        if ((isset($context["auto"]) ? $context["auto"] : null)) {
            // line 99
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 100
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                                    ";
        } else {
            // line 102
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 103
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                                    ";
        }
        // line 105
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-items\">";
        // line 110
        echo (isset($context["entry_items"]) ? $context["entry_items"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"items\" value=\"";
        // line 112
        echo (isset($context["items"]) ? $context["items"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_items"]) ? $context["entry_items"] : null);
        echo "\" id=\"input-items\" class=\"form-control\" />
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-speed\">";
        // line 117
        echo (isset($context["entry_speed"]) ? $context["entry_speed"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"speed\" value=\"";
        // line 119
        echo (isset($context["speed"]) ? $context["speed"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_speed"]) ? $context["entry_speed"] : null);
        echo "\" id=\"input-speed\" class=\"form-control\" />
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-rows\">";
        // line 124
        echo (isset($context["entry_rows"]) ? $context["entry_rows"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"rows\" value=\"";
        // line 126
        echo (isset($context["rows"]) ? $context["rows"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_rows"]) ? $context["entry_rows"] : null);
        echo "\" id=\"input-rows\" class=\"form-control\" />
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-navigation\">";
        // line 131
        echo (isset($context["entry_navigation"]) ? $context["entry_navigation"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"navigation\" id=\"input-navigation\" class=\"form-control\">
                                    ";
        // line 134
        if ((isset($context["navigation"]) ? $context["navigation"] : null)) {
            // line 135
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 136
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                                    ";
        } else {
            // line 138
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 139
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                                    ";
        }
        // line 141
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-pagination\">";
        // line 146
        echo (isset($context["entry_pagination"]) ? $context["entry_pagination"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"pagination\" id=\"input-pagination\" class=\"form-control\">
                                    ";
        // line 149
        if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
            // line 150
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 151
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                                    ";
        } else {
            // line 153
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 154
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                                    ";
        }
        // line 156
        echo "                                </select>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 165
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/ocblog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 165,  409 => 156,  404 => 154,  399 => 153,  394 => 151,  389 => 150,  387 => 149,  381 => 146,  374 => 141,  369 => 139,  364 => 138,  359 => 136,  354 => 135,  352 => 134,  346 => 131,  336 => 126,  331 => 124,  321 => 119,  316 => 117,  306 => 112,  301 => 110,  294 => 105,  289 => 103,  284 => 102,  279 => 100,  274 => 99,  272 => 98,  266 => 95,  260 => 91,  254 => 89,  252 => 88,  246 => 87,  241 => 85,  235 => 81,  229 => 79,  227 => 78,  221 => 77,  216 => 75,  210 => 71,  207 => 70,  201 => 69,  193 => 67,  190 => 66,  182 => 64,  174 => 62,  171 => 61,  168 => 60,  163 => 59,  161 => 58,  155 => 55,  149 => 51,  144 => 49,  139 => 48,  134 => 46,  129 => 45,  127 => 44,  121 => 41,  116 => 38,  110 => 36,  108 => 35,  102 => 34,  97 => 32,  91 => 29,  85 => 26,  81 => 24,  73 => 20,  71 => 19,  65 => 15,  54 => 13,  50 => 12,  45 => 10,  38 => 8,  34 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <a href="{{ list_action }}" data-toggle="tooltip" title="{{ button_article_list }}" class="btn btn-default"><i class="fa fa-pencil-square-o"></i></a>*/
/*                 <button type="submit" form="form-blog" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/*             </div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         {% if error_warning %}*/
/*         <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-blog" class="form-horizontal">*/
/*                     <fieldset>*/
/*                           <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*                             <div class="col-sm-10">*/
/*                               <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*                               {% if error_name %}*/
/*                               <div class="text-danger">{{ error_name }}</div>*/
/*                               {% endif %}*/
/*                             </div>*/
/*                           </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="status" id="input-status" class="form-control">*/
/*                                     {% if status %}*/
/*                                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                     <option value="0">{{ text_disabled }}</option>*/
/*                                     {% else %}*/
/*                                     <option value="1">{{ text_enabled }}</option>*/
/*                                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                     {% endif %}*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-list">{{ entry_article_list }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="list" id="input-list" class="form-control">*/
/*                                 {% if article_lists %}*/
/*                                     {% for article_list in article_lists %}*/
/*                                         {% if list %}*/
/*                                             {% if list == article_list.article_list_id %}*/
/*                                                 <option value="{{ article_list.article_list_id }}" selected="selected">{{ article_list.name }}</option>*/
/*                                             {% else %}*/
/*                                                 <option value="{{ article_list.article_list_id }}">{{ article_list.name }}</option>*/
/*                                             {% endif %}*/
/*                                         {% else %}*/
/*                                             <option value="{{ article_list.article_list_id }}">{{ article_list.name }}</option>*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                 {% endif %}*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label" for="input-width">{{ entry_width }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="width" value="{{ width }}" placeholder="{{ entry_width }}" id="input-width" class="form-control" />*/
/*                                 {% if error_width %}*/
/*                                 <div class="text-danger">{{ error_width }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label" for="input-height">{{ entry_height }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="height" value="{{ height }}" placeholder="{{ entry_height }}" id="input-height" class="form-control" />*/
/*                                 {% if error_height %}*/
/*                                 <div class="text-danger">{{ error_height }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-auto">{{ entry_auto }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="auto" id="input-auto" class="form-control">*/
/*                                     {% if auto %}*/
/*                                     <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                                     <option value="0">{{ text_no }}</option>*/
/*                                     {% else %}*/
/*                                     <option value="1">{{ text_yes }}</option>*/
/*                                     <option value="0" selected="selected">{{ text_no }}</option>*/
/*                                     {% endif %}*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-items">{{ entry_items }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="items" value="{{ items }}" placeholder="{{ entry_items }}" id="input-items" class="form-control" />*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-speed">{{ entry_speed }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="speed" value="{{ speed }}" placeholder="{{ entry_speed }}" id="input-speed" class="form-control" />*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-rows">{{ entry_rows }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="rows" value="{{ rows }}" placeholder="{{ entry_rows }}" id="input-rows" class="form-control" />*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-navigation">{{ entry_navigation }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="navigation" id="input-navigation" class="form-control">*/
/*                                     {% if navigation %}*/
/*                                     <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                                     <option value="0">{{ text_no }}</option>*/
/*                                     {% else %}*/
/*                                     <option value="1">{{ text_yes }}</option>*/
/*                                     <option value="0" selected="selected">{{ text_no }}</option>*/
/*                                     {% endif %}*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-pagination">{{ entry_pagination }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="pagination" id="input-pagination" class="form-control">*/
/*                                     {% if pagination %}*/
/*                                     <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                                     <option value="0">{{ text_no }}</option>*/
/*                                     {% else %}*/
/*                                     <option value="1">{{ text_yes }}</option>*/
/*                                     <option value="0" selected="selected">{{ text_no }}</option>*/
/*                                     {% endif %}*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                     </fieldset>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {{ footer }}*/
