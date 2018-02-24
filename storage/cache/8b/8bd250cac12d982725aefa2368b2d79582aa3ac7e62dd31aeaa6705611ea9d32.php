<?php

/* extension/module/ochozmegamenu.twig */
class __TwigTemplate_4e240d70e3b13f50eae05be9df0abf84a499bcc3042fa66e255c44152aeb0dd0 extends Twig_Template
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
        <button type=\"submit\" form=\"form-slideshow\" data-toggle=\"tooltip\" title=\"";
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
        <?php foreach (\$breadcrumbs as \$breadcrumb) { ?>
        <li><a href=\"";
        // line 11
        echo $this->getAttribute((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "href", array(), "array");
        echo "\">";
        echo $this->getAttribute((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "text", array(), "array");
        echo "</a></li>
        <?php } ?>
      </ul>
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 30
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 32
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 33
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 34
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
              ";
        }
        // line 36
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 39
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 42
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 43
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 44
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 46
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 47
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 49
        echo "              </select>
            </div>
          </div>
\t\t  
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 54
        echo (isset($context["text_homepage"]) ? $context["text_homepage"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"hhome\" id=\"input-status\" class=\"form-control\">
                ";
        // line 57
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 58
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 59
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 61
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 62
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 64
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sticky\">";
        // line 68
        echo (isset($context["text_sticky"]) ? $context["text_sticky"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"sticky\" id=\"input-sticky\" class=\"form-control\">
                ";
        // line 71
        if ((isset($context["sticky"]) ? $context["sticky"] : null)) {
            // line 72
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 73
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 75
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 76
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 78
        echo "              </select>
            </div>
          </div>
\t\t   <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 82
        echo (isset($context["text_depth"]) ? $context["text_depth"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
        \t  \t<input class=\"form-control\" type=\"text\" name=\"hdepth\" value=\"";
        // line 84
        if ((isset($context["hdepth"]) ? $context["hdepth"] : null)) {
            echo " ";
            echo (isset($context["hdepth"]) ? $context["hdepth"] : null);
            echo " ";
        } else {
            echo " 4 ";
        }
        echo "\">
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 88
        echo (isset($context["text_level"]) ? $context["text_level"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
        \t  <input class=\"form-control\" type=\"text\" name=\"hlevel\" value=\"";
        // line 90
        if ((isset($context["hlevel"]) ? $context["hlevel"] : null)) {
            echo " ";
            echo (isset($context["hlevel"]) ? $context["hlevel"] : null);
            echo " ";
        } else {
            echo " 4 ";
        }
        echo "\">
            </div>
          </div>
\t\t  \t<div style=\"display: none\">
\t\t\t\t<div class=\"margin-form\">
\t\t\t\t\t<input type=\"text\" name=\"hactive\" id=\"itemsInput\" value=\"";
        // line 95
        if ((isset($context["hcate"]) ? $context["hcate"] : null)) {
            echo " ";
            echo (isset($context["hcate"]) ? $context["hcate"] : null);
            echo " ";
        }
        echo " \" size=\"70\">
\t\t\t\t</div>
\t\t\t</div>
\t\t  <div class=\"form-group\">
\t\t\t\t  <table id=\"setting\" class=\"table table-striped table-bordered table-hover\" style='text-align:center;'>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<select multiple=\"multiple\"   id=\"availableItems\" style=\"width: 320px; height: 260px;\">
\t\t\t\t\t\t\t\t<optgroup label=\"Infomations\">
\t\t\t\t\t\t\t\t";
        // line 105
        echo (isset($context["cms_option"]) ? $context["cms_option"] : null);
        echo " 
\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t<optgroup label=\"Category\">
\t\t\t\t\t\t\t\t";
        // line 108
        echo (isset($context["cate_option"]) ? $context["cate_option"] : null);
        echo "
\t\t\t\t\t\t\t\t</optgroup>\t
\t\t\t\t\t\t\t\t<optgroup label=\"Cms Links\">
\t\t\t\t\t\t\t\t";
        // line 111
        echo (isset($context["link_option"]) ? $context["link_option"] : null);
        echo " 
\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<select multiple=\"multiple\"  id=\"hactive\" style=\"width: 320px; height: 260px;\">
\t\t\t\t\t\t\t\t";
        // line 119
        echo (isset($context["option_active"]) ? $context["option_active"] : null);
        echo " 
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"#\" id=\"addItem\" >Add</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"#\" id=\"removeItem\" >Remove</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td >
\t\t\t\t\t\t\t\t<a href=\"#\" id=\"menuOrderUp\" class=\"button\" >&uarr;</a><br/>
\t\t\t\t\t\t\t\t<a href=\"#\" id=\"menuOrderDown\" class=\"button\">&darr;</a><br/>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\tfunction add()
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\$(\"#availableItems option:selected\").each(function(i){
\t\t\t\t\t\t\t\tvar val = \$(this).val();
\t\t\t\t\t\t\t\tvar text = \$(this).text();
\t\t\t\t\t\t\t\ttext = text.replace(/(^\\s*)|(\\s*\$)/gi,\"\");
\t\t\t\t\t\t\t\t\$(\"#hactive\").append(\"<option value=\\\"\"+val+\"\\\">\"+text+\"</option>\");
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tserialize();
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction remove()
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\$(\"#hactive option:selected\").each(function(i){
\t\t\t\t\t\t\t\t\$(this).remove();
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tserialize();
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction serialize()
\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar options = \"\";
\t\t\t\t\t\t\t\$(\"#hactive option\").each(function(i){
\t\t\t\t\t\t\t\toptions += \$(this).val() + \",\";
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\$(\"#itemsInput\").val(options.substr(0, options.length - 1));
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction move(up)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar tomove = \$(\"#hactive option:selected\");
\t\t\t\t\t\t\tif (tomove.length >1)
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\talert('Please select just one item');
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (up)
\t\t\t\t\t\t\t\ttomove.prev().insertAfter(tomove);
\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\ttomove.next().insertBefore(tomove);
\t\t\t\t\t\t\tserialize();
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}

\t\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t\t\$(\"#addItem\").click(add);
\t\t\t\t\t\t\t\$(\"#availableItems\").dblclick(add);
\t\t\t\t\t\t\t\$(\"#removeItem\").click(remove);
\t\t\t\t\t\t\t\$(\"#hactive\").dblclick(remove);
\t\t\t\t\t\t\t\$(\"#menuOrderUp\").click(function(e){
\t\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\t\tmove(true);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\$(\"#menuOrderDown\").click(function(e){
\t\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\t\tmove();
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t</table>
\t\t    </div>
\t\t  \t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-mobile\">";
        // line 203
        echo (isset($context["text_mobile"]) ? $context["text_mobile"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"mobile\" id=\"input-mobile\" class=\"form-control\">
                ";
        // line 206
        if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
            // line 207
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_original"]) ? $context["text_original"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 208
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</option>
                ";
        } else {
            // line 210
            echo "                <option value=\"1\">";
            echo (isset($context["text_original"]) ? $context["text_original"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 211
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</option>
                ";
        }
        // line 213
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 221
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/ochozmegamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 221,  400 => 213,  395 => 211,  390 => 210,  385 => 208,  380 => 207,  378 => 206,  372 => 203,  285 => 119,  274 => 111,  268 => 108,  262 => 105,  245 => 95,  231 => 90,  226 => 88,  213 => 84,  208 => 82,  202 => 78,  197 => 76,  192 => 75,  187 => 73,  182 => 72,  180 => 71,  174 => 68,  168 => 64,  163 => 62,  158 => 61,  153 => 59,  148 => 58,  146 => 57,  140 => 54,  133 => 49,  128 => 47,  123 => 46,  118 => 44,  113 => 43,  111 => 42,  105 => 39,  100 => 36,  94 => 34,  92 => 33,  86 => 32,  81 => 30,  75 => 27,  69 => 24,  65 => 22,  57 => 18,  55 => 17,  44 => 11,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-slideshow" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         <?php foreach ($breadcrumbs as $breadcrumb) { ?>*/
/*         <li><a href="{{ breadcrumb['href'] }}">{{ breadcrumb['text'] }}</a></li>*/
/*         <?php } ?>*/
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
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal">*/
/*           */
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*               {% if error_name %}*/
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="status" id="input-status" class="form-control">*/
/*                 {% if status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/* 		  */
/* 		  <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ text_homepage }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="hhome" id="input-status" class="form-control">*/
/*                 {% if status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/* 		  <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-sticky">{{ text_sticky }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="sticky" id="input-sticky" class="form-control">*/
/*                 {% if sticky %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/* 		   <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ text_depth  }}</label>*/
/*             <div class="col-sm-10">*/
/*         	  	<input class="form-control" type="text" name="hdepth" value="{% if hdepth %} {{ hdepth }} {% else %} 4 {% endif %}">*/
/*             </div>*/
/*           </div>*/
/* 		  <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ text_level  }}</label>*/
/*             <div class="col-sm-10">*/
/*         	  <input class="form-control" type="text" name="hlevel" value="{% if hlevel %} {{ hlevel }} {% else %} 4 {% endif %}">*/
/*             </div>*/
/*           </div>*/
/* 		  	<div style="display: none">*/
/* 				<div class="margin-form">*/
/* 					<input type="text" name="hactive" id="itemsInput" value="{% if hcate %} {{ hcate }} {% endif %} " size="70">*/
/* 				</div>*/
/* 			</div>*/
/* 		  <div class="form-group">*/
/* 				  <table id="setting" class="table table-striped table-bordered table-hover" style='text-align:center;'>*/
/* 					<tr>*/
/* 						<td>*/
/* 							*/
/* 								<select multiple="multiple"   id="availableItems" style="width: 320px; height: 260px;">*/
/* 								<optgroup label="Infomations">*/
/* 								{{ cms_option }} */
/* 								</optgroup>*/
/* 								<optgroup label="Category">*/
/* 								{{ cate_option }}*/
/* 								</optgroup>	*/
/* 								<optgroup label="Cms Links">*/
/* 								{{ link_option }} */
/* 								</optgroup>*/
/* 								</select>*/
/* 						*/
/* 						</td>*/
/* 						<td>*/
/* 							*/
/* 								<select multiple="multiple"  id="hactive" style="width: 320px; height: 260px;">*/
/* 								{{ option_active }} */
/* 								</select>*/
/* 							*/
/* 						</td>*/
/* 					</tr>*/
/* 					<tr>*/
/* 						<td>*/
/* 						*/
/* 							<a href="#" id="addItem" >Add</a>*/
/* 							*/
/* 						</td>*/
/* 						<td>*/
/* 							<a href="#" id="removeItem" >Remove</a>*/
/* 						</td>*/
/* 						<td >*/
/* 								<a href="#" id="menuOrderUp" class="button" >&uarr;</a><br/>*/
/* 								<a href="#" id="menuOrderDown" class="button">&darr;</a><br/>*/
/* 						</td>*/
/* 					</tr>*/
/* 					<script type="text/javascript">*/
/* 						function add()*/
/* 						{*/
/* 							$("#availableItems option:selected").each(function(i){*/
/* 								var val = $(this).val();*/
/* 								var text = $(this).text();*/
/* 								text = text.replace(/(^\s*)|(\s*$)/gi,"");*/
/* 								$("#hactive").append("<option value=\""+val+"\">"+text+"</option>");*/
/* 							});*/
/* 							serialize();*/
/* 							return false;*/
/* 						}*/
/* */
/* 						function remove()*/
/* 						{*/
/* 							$("#hactive option:selected").each(function(i){*/
/* 								$(this).remove();*/
/* 							});*/
/* 							serialize();*/
/* 							return false;*/
/* 						}*/
/* */
/* 						function serialize()*/
/* 						{*/
/* 							var options = "";*/
/* 							$("#hactive option").each(function(i){*/
/* 								options += $(this).val() + ",";*/
/* 							});*/
/* 							$("#itemsInput").val(options.substr(0, options.length - 1));*/
/* 						}*/
/* */
/* 						function move(up)*/
/* 						{*/
/* 							var tomove = $("#hactive option:selected");*/
/* 							if (tomove.length >1)*/
/* 							{*/
/* 								alert('Please select just one item');*/
/* 								return false;*/
/* 							}*/
/* 							if (up)*/
/* 								tomove.prev().insertAfter(tomove);*/
/* 							else*/
/* 								tomove.next().insertBefore(tomove);*/
/* 							serialize();*/
/* 							return false;*/
/* 						}*/
/* */
/* 						$(document).ready(function(){*/
/* 							$("#addItem").click(add);*/
/* 							$("#availableItems").dblclick(add);*/
/* 							$("#removeItem").click(remove);*/
/* 							$("#hactive").dblclick(remove);*/
/* 							$("#menuOrderUp").click(function(e){*/
/* 								e.preventDefault();*/
/* 								move(true);*/
/* 							});*/
/* 							$("#menuOrderDown").click(function(e){*/
/* 								e.preventDefault();*/
/* 								move();*/
/* 							});*/
/* 						});*/
/* 						</script>*/
/* 				</table>*/
/* 		    </div>*/
/* 		  	<div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-mobile">{{ text_mobile }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="mobile" id="input-mobile" class="form-control">*/
/*                 {% if mobile %}*/
/*                 <option value="1" selected="selected">{{ text_original }}</option>*/
/*                 <option value="0">{{ text_category }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_original }}</option>*/
/*                 <option value="0" selected="selected">{{ text_category }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
