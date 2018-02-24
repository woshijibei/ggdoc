<?php

/* extension/module/occmsblock/cmsblock_form.twig */
class __TwigTemplate_1478f3b2c88829d14c189d1863cb1789bdc3ec8cacf2845e4ca78f826a95eb73 extends Twig_Template
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
        <button type=\"submit\" form=\"form-banner\" data-toggle=\"tooltip\" title=\"";
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
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-banner\" class=\"form-horizontal\">
\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 30
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<select name=\"type\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 33
        if ((isset($context["type"]) ? $context["type"] : null)) {
            // line 34
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_description"]) ? $context["text_description"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 35
            echo (isset($context["text_link"]) ? $context["text_link"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_description"]) ? $context["text_description"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 38
            echo (isset($context["text_link"]) ? $context["text_link"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 44
        echo (isset($context["entry_identify"]) ? $context["entry_identify"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"identify\" value=\"";
        // line 46
        echo (isset($context["identify"]) ? $context["identify"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group entry_link\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 51
        echo (isset($context["entry_link"]) ? $context["entry_link"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"link\" value=\"";
        // line 53
        echo (isset($context["link"]) ? $context["link"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 58
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<select name=\"status\" class=\"form-control\">
\t\t\t\t\t\t";
        // line 61
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 62
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 63
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 65
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 66
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 72
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"sort_order\" value=\"";
        // line 74
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 79
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 83
            echo "\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"banner_store[]\" value=\"";
            // line 85
            echo $this->getAttribute($context["store"], "store_id", array(), "array");
            echo "\" ";
            if (twig_in_filter($this->getAttribute($context["store"], "store_id", array(), "array"), (isset($context["banner_store"]) ? $context["banner_store"] : null))) {
                echo "  checked=\"checked\" ";
            }
            echo "  />
\t\t\t\t\t\t\t\t\t";
            // line 86
            echo $this->getAttribute($context["store"], "name", array(), "array");
            echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"tab-pane active\" id=\"tab-general\">
\t\t\t\t   <ul class=\"nav nav-tabs\" id=\"languages\">
\t\t\t\t   ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 97
            echo "\t\t\t\t\t   <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array(), "array");
            echo "/";
            echo $this->getAttribute($context["language"], "code", array(), "array");
            echo ".png\" title=\" ";
            echo $this->getAttribute($context["language"], "name", array(), "array");
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array(), "array");
            echo "</a></li>
\t\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "\t\t\t\t  </ul>

\t\t\t\t  <div class =\"tab-content\">
\t\t\t\t\t    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 103
            echo "\t\t\t\t\t\t<div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
            // line 105
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input  class=\"form-control\" type=\"text\" name=\"cmsblock_description[";
            // line 107
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "][title]\" size=\"100\" value=\"";
            if ($this->getAttribute((isset($context["cmsblock_description"]) ? $context["cmsblock_description"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) {
                echo $this->getAttribute($this->getAttribute((isset($context["cmsblock_description"]) ? $context["cmsblock_description"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array"), "title", array(), "array");
                echo " ";
            } else {
                echo "  ";
            }
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 108
            if ($this->getAttribute((isset($context["error_title"]) ? $context["error_title"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) {
                // line 109
                echo "\t\t\t\t\t\t\t\t\t  <span class=\"error\"> ";
                echo $this->getAttribute((isset($context["error_title"]) ? $context["error_title"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array");
                echo "</span>
\t\t\t\t\t\t\t\t\t  ";
            }
            // line 111
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group entry_des\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 116
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" data-toggle=\"summernote\" data-lang=\"";
            // line 118
            echo (isset($context["summernote"]) ? $context["summernote"] : null);
            echo "\" name=\"cmsblock_description[";
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "][description]\" id=\"input-description";
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 119
            if ($this->getAttribute((isset($context["cmsblock_description"]) ? $context["cmsblock_description"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) {
                echo "  ";
                echo $this->getAttribute($this->getAttribute((isset($context["cmsblock_description"]) ? $context["cmsblock_description"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array"), "description", array(), "array");
                echo " ";
            } else {
                echo "  ";
            }
            // line 120
            echo "\t\t\t\t\t\t\t\t\t</textarea>
\t\t\t\t\t\t\t\t\t";
            // line 121
            if ($this->getAttribute((isset($context["error_description"]) ? $context["error_description"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"error\">";
                echo $this->getAttribute((isset($context["error_description"]) ? $context["error_description"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array");
                echo "</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 124
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "\t\t\t\t  </div>
\t\t\t\t</div>

        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>

<script type=\"text/javascript\"><!--
\t
\t";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 143
            echo "\t\t\t\$('#languages li:first-child a').tab('show');
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "
\tvar type_cur = ";
        // line 146
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "
\t\tif(type_cur == 0) {
\t\t\t\$('.entry_des').hide();
\t\t\t\$('.entry_link').show();
\t\t} else {
\t\t\t\$('.entry_link').hide();
\t\t\t\$('.entry_des').show();
\t\t}
\t\$('select[name=\"type\"]').bind('change', function() {
\t\tvar type = \$(this).val();
\t\tif(type == 0) {
\t\t\t\$('.entry_des').hide();
\t\t\t\$('.entry_link').show();
\t\t} else {
\t\t\t\$('.entry_link').hide();
\t\t\t\$('.entry_des').show();
\t\t}
\t});
//--></script> 
</div>
";
        // line 166
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/module/occmsblock/cmsblock_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 166,  377 => 146,  374 => 145,  367 => 143,  363 => 142,  347 => 128,  338 => 124,  332 => 122,  330 => 121,  327 => 120,  319 => 119,  311 => 118,  304 => 116,  297 => 111,  291 => 109,  289 => 108,  278 => 107,  273 => 105,  267 => 103,  263 => 102,  258 => 99,  241 => 97,  237 => 96,  229 => 90,  219 => 86,  211 => 85,  207 => 83,  203 => 82,  197 => 79,  189 => 74,  184 => 72,  178 => 68,  173 => 66,  168 => 65,  163 => 63,  158 => 62,  156 => 61,  150 => 58,  142 => 53,  137 => 51,  129 => 46,  124 => 44,  118 => 40,  113 => 38,  108 => 37,  103 => 35,  98 => 34,  96 => 33,  90 => 30,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{header}}{{column_left}}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-banner" data-toggle="tooltip" title="{{button_save}}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{cancel}}" data-toggle="tooltip" title="{{button_cancel}}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{heading_title}}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{breadcrumb.href}}">{{breadcrumb.text}}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
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
/*         <form action="{{action}}" method="post" enctype="multipart/form-data" id="form-banner" class="form-horizontal">*/
/* 		*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" for="input-status">{{entry_type}}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<select name="type" class="form-control">*/
/* 							{% if type %}*/
/* 							<option value="1" selected="selected">{{text_description}}</option>*/
/* 							<option value="0">{{text_link}}</option>*/
/* 							{% else %}*/
/* 							<option value="1">{{text_description}}</option>*/
/* 							<option value="0" selected="selected">{{text_link}}</option>*/
/* 							{% endif %}*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" for="input-status">{{entry_identify}}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<input type="text" name="identify" value="{{identify}}" class="form-control" />*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="form-group entry_link">*/
/* 					<label class="col-sm-2 control-label" for="input-status">{{entry_link}}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<input type="text" name="link" value="{{link}}" class="form-control" />*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" for="input-status">{{entry_status}}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<select name="status" class="form-control">*/
/* 						{% if status %}*/
/* 							<option value="1" selected="selected">{{text_enabled}}</option>*/
/* 							<option value="0">{{text_disabled}}</option>*/
/* 								{% else %}*/
/* 							<option value="1">{{text_enabled}}</option>*/
/* 							<option value="0" selected="selected">{{text_disabled}}</option>*/
/* 								{% endif %}*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-status">{{entry_sort_order}}</label>*/
/* 						<div class="col-sm-10">*/
/* 							<input type="text" name="sort_order" value="{{sort_order}}" class="form-control" />*/
/* 						</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label">{{entry_store }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<div class="well well-sm" style="height: 150px; overflow: auto;">*/
/* 							    {% for store in stores %}*/
/* 							<div class="checkbox">*/
/* 								<label>*/
/* 									<input type="checkbox" name="banner_store[]" value="{{store['store_id'] }}" {% if store['store_id'] in banner_store %}  checked="checked" {% endif %}  />*/
/* 									{{store['name'] }}*/
/* 								</label>*/
/* 							</div>*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="tab-pane active" id="tab-general">*/
/* 				   <ul class="nav nav-tabs" id="languages">*/
/* 				   {% for language in languages %}*/
/* 					   <li><a href="#language{{language['language_id']}}" data-toggle="tab"><img src="language/{{language['code']}}/{{language['code']}}.png" title=" {{language['name']}}" /> {{language['name']}}</a></li>*/
/* 				   {% endfor %}*/
/* 				  </ul>*/
/* */
/* 				  <div class ="tab-content">*/
/* 					    {% for language in languages %}*/
/* 						<div class="tab-pane" id="language{{language['language_id']}}">*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-status">{{entry_title}}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<input  class="form-control" type="text" name="cmsblock_description[{{language['language_id']}}][title]" size="100" value="{% if cmsblock_description[language['language_id']] %}{{cmsblock_description[language['language_id']]['title']}} {% else %}  {% endif %}" />*/
/* 										{% if error_title[language['language_id']] %}*/
/* 									  <span class="error"> {{error_title[language['language_id']]}}</span>*/
/* 									  {% endif %}*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 							*/
/* 							<div class="form-group entry_des">*/
/* 								<label class="col-sm-2 control-label" for="input-description{{language['language_id']}}">{{entry_description}}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<textarea class="form-control" data-toggle="summernote" data-lang="{{summernote}}" name="cmsblock_description[{{language['language_id']}}][description]" id="input-description{{language['language_id']}}">*/
/* 										{% if cmsblock_description[language['language_id']] %}  {{cmsblock_description[language['language_id']]['description']}} {% else %}  {% endif %}*/
/* 									</textarea>*/
/* 									{% if error_description[language['language_id']] %}*/
/* 										<span class="error">{{error_description[language['language_id']]}}</span>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endfor %}*/
/* 				  </div>*/
/* 				</div>*/
/* */
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*   <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/* */
/* <script type="text/javascript"><!--*/
/* 	*/
/* 	{% for  language  in  languages %}*/
/* 			$('#languages li:first-child a').tab('show');*/
/* 	{% endfor %}*/
/* */
/* 	var type_cur = {{type}}*/
/* 		if(type_cur == 0) {*/
/* 			$('.entry_des').hide();*/
/* 			$('.entry_link').show();*/
/* 		} else {*/
/* 			$('.entry_link').hide();*/
/* 			$('.entry_des').show();*/
/* 		}*/
/* 	$('select[name="type"]').bind('change', function() {*/
/* 		var type = $(this).val();*/
/* 		if(type == 0) {*/
/* 			$('.entry_des').hide();*/
/* 			$('.entry_link').show();*/
/* 		} else {*/
/* 			$('.entry_link').hide();*/
/* 			$('.entry_des').show();*/
/* 		}*/
/* 	});*/
/* //--></script> */
/* </div>*/
/* {{footer}} */
