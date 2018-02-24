<?php

/* blog/article_list.twig */
class __TwigTemplate_643bc47e68163cee1537bc145e53b2d15542cd96173e28393fb1bcc5924f2612 extends Twig_Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\" onclick=\"\$('#filter-article').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-article\" formaction=\"";
        // line 8
        echo (isset($context["copy"]) ? $context["copy"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_copy"]) ? $context["button_copy"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-article').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 11
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "          <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 20
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 21
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 26
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 30
        echo "    <div class=\"row\">
      <div id=\"filter-article\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 34
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 38
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 39
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 42
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 45
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "1")) {
            // line 46
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                ";
        } else {
            // line 48
            echo "                  <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                ";
        }
        // line 50
        echo "                ";
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "0")) {
            // line 51
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 53
            echo "                  <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 55
        echo "              </select>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 58
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 66
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 69
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-article\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                  <tr>
                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                    <td class=\"text-left\">
                      ";
        // line 76
        if (((isset($context["sort"]) ? $context["sort"] : null) == "ad.name")) {
            // line 77
            echo "                      <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                      ";
        } else {
            // line 79
            echo "                      <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                      ";
        }
        // line 81
        echo "                    </td>
                    <td class=\"text-left\">";
        // line 82
        echo (isset($context["column_author"]) ? $context["column_author"] : null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 83
        if (((isset($context["sort"]) ? $context["sort"] : null) == "a.status")) {
            // line 84
            echo "                      <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                      ";
        } else {
            // line 86
            echo "                      <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                      ";
        }
        // line 87
        echo "</td>
                    <td class=\"text-right\">";
        // line 88
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                  </tr>
                  </thead>
                  <tbody>
                  ";
        // line 92
        if ((isset($context["articles"]) ? $context["articles"] : null)) {
            // line 93
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 94
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 95
                if (twig_in_filter($this->getAttribute($context["article"], "article_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 96
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["article"], "article_id", array());
                    echo "\" checked=\"checked\" />
                        ";
                } else {
                    // line 98
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["article"], "article_id", array());
                    echo "\" />
                        ";
                }
                // line 99
                echo "</td>
                      <td class=\"text-left\">";
                // line 100
                echo $this->getAttribute($context["article"], "name", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 101
                echo $this->getAttribute($context["article"], "author", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 102
                echo $this->getAttribute($context["article"], "status", array());
                echo "</td>
                      <td class=\"text-right\"><a href=\"";
                // line 103
                echo $this->getAttribute($context["article"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                  ";
        } else {
            // line 107
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"8\">";
            // line 108
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 111
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 116
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 117
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = 'index.php?route=blog/article&user_token=";
        // line 126
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status != '*') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tlocation = url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=blog/article/autocomplete&user_token=";
        // line 147
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['article_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});
//--></script></div>
";
        // line 164
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "blog/article_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 164,  356 => 147,  332 => 126,  320 => 117,  316 => 116,  309 => 111,  303 => 108,  300 => 107,  297 => 106,  286 => 103,  282 => 102,  278 => 101,  274 => 100,  271 => 99,  265 => 98,  259 => 96,  257 => 95,  254 => 94,  249 => 93,  247 => 92,  240 => 88,  237 => 87,  229 => 86,  219 => 84,  217 => 83,  213 => 82,  210 => 81,  202 => 79,  192 => 77,  190 => 76,  180 => 69,  174 => 66,  163 => 58,  158 => 55,  152 => 53,  146 => 51,  143 => 50,  137 => 48,  131 => 46,  129 => 45,  123 => 42,  115 => 39,  111 => 38,  104 => 34,  98 => 30,  90 => 26,  87 => 25,  79 => 21,  77 => 20,  71 => 16,  60 => 14,  56 => 13,  51 => 11,  44 => 9,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-article').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*         <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="submit" form="form-article" formaction="{{ copy }}" data-toggle="tooltip" title="{{ button_copy }}" class="btn btn-default"><i class="fa fa-copy"></i></button>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-article').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*           <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
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
/*     {% if success %}*/
/*     <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="row">*/
/*       <div id="filter-article" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*               <input type="text" name="filter_name" value="{{ filter_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-status">{{ entry_status }}</label>*/
/*               <select name="filter_status" id="input-status" class="form-control">*/
/*                 <option value=""></option>*/
/*                 {% if filter_status == '1' %}*/
/*                   <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 {% else %}*/
/*                   <option value="1">{{ text_enabled }}</option>*/
/*                 {% endif %}*/
/*                 {% if filter_status == '0' %}*/
/*                   <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                   <option value="0">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*             <div class="form-group text-right">*/
/*               <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-article">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                   <tr>*/
/*                     <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                     <td class="text-left">*/
/*                       {% if sort == 'ad.name' %}*/
/*                       <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>*/
/*                       {% else %}*/
/*                       <a href="{{ sort_name }}">{{ column_name }}</a>*/
/*                       {% endif %}*/
/*                     </td>*/
/*                     <td class="text-left">{{ column_author }}</td>*/
/*                     <td class="text-left">{% if sort == 'a.status' %}*/
/*                       <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a>*/
/*                       {% else %}*/
/*                       <a href="{{ sort_status }}">{{ column_status }}</a>*/
/*                       {% endif %}</td>*/
/*                     <td class="text-right">{{ column_action }}</td>*/
/*                   </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% if articles %}*/
/*                     {% for article in articles %}*/
/*                     <tr>*/
/*                       <td class="text-center">{% if article.article_id in selected %}*/
/*                         <input type="checkbox" name="selected[]" value="{{ article.article_id }}" checked="checked" />*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="selected[]" value="{{ article.article_id }}" />*/
/*                         {% endif %}</td>*/
/*                       <td class="text-left">{{ article.name }}</td>*/
/*                       <td class="text-left">{{ article.author }}</td>*/
/*                       <td class="text-left">{{ article.status }}</td>*/
/*                       <td class="text-right"><a href="{{ article.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                   {% else %}*/
/*                   <tr>*/
/*                     <td class="text-center" colspan="8">{{ text_no_results }}</td>*/
/*                   </tr>*/
/*                   {% endif %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*               <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	var url = 'index.php?route=blog/article&user_token={{ user_token }}';*/
/* */
/* 	var filter_name = $('input[name=\'filter_name\']').val();*/
/* */
/* 	if (filter_name) {*/
/* 		url += '&filter_name=' + encodeURIComponent(filter_name);*/
/* 	}*/
/* */
/* 	var filter_status = $('select[name=\'filter_status\']').val();*/
/* */
/* 	if (filter_status != '*') {*/
/* 		url += '&filter_status=' + encodeURIComponent(filter_status);*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('input[name=\'filter_name\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=blog/article/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['article_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter_name\']').val(item['label']);*/
/* 	}*/
/* });*/
/* //--></script></div>*/
/* {{ footer }}*/
