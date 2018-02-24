<?php

/* extension/module/ocslideshow/ocslideshow_list.twig */
class __TwigTemplate_cd22fc4f0c9fcafd3ef0d308c398a39864d30d16a00f14439278c2b284b645c7 extends Twig_Template
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
       <div class=\"pull-right\"><a href=\"";
        // line 5
        echo (isset($context["insert"]) ? $context["insert"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_insert"]) ? $context["button_insert"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_copy"]) ? $context["button_copy"] : null);
        echo "\" class=\"btn btn-default\" onclick=\"\$('#form-ocslideshows').attr('action', '";
        echo (isset($context["copy"]) ? $context["copy"] : null);
        echo "').submit()\"><i class=\"fa fa-copy\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-ocslideshows').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
        <ul class=\"breadcrumb\">
\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t  </ul>

    </div>
  </div>
  <div class=\"container-fluid\">
  ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 29
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ocslideshows\" class=\"form-horizontal\">
\t\t\t\t <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\"> ";
        // line 35
        if (((isset($context["sort"]) ? $context["sort"] : null) == "name")) {
            // line 36
            echo "                    <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 38
            echo "                    <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 39
        echo "</td>
                  <td class=\"text-left\">";
        // line 40
        if (((isset($context["sort"]) ? $context["sort"] : null) == "status")) {
            // line 41
            echo "                    <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                   ";
        } else {
            // line 43
            echo "                    <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                    ";
        }
        // line 44
        echo "</td>
                  <td class=\"text-right\">";
        // line 45
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
\t\t\t  ";
        // line 49
        if ((isset($context["ocslideshows"]) ? $context["ocslideshows"] : null)) {
            // line 50
            echo "\t\t\t\t  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ocslideshows"]) ? $context["ocslideshows"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ocslideshow"]) {
                // line 51
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t  <td class=\"text-center\"> ";
                // line 52
                if (twig_in_filter($this->getAttribute($context["ocslideshow"], "ocslideshow_id", array(), "array"), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 53
                    echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["ocslideshow"], "ocslideshow_id", array(), "array");
                    echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t";
                } else {
                    // line 55
                    echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["ocslideshow"], "ocslideshow_id", array(), "array");
                    echo "\" />
\t\t\t\t\t\t\t";
                }
                // line 56
                echo " </td>
\t\t\t\t\t  <td class=\"text-left\">";
                // line 57
                echo $this->getAttribute($context["ocslideshow"], "name", array(), "array");
                echo "</td>
\t\t\t\t\t  <td class=\"text-left\">";
                // line 58
                echo $this->getAttribute($context["ocslideshow"], "status", array(), "array");
                echo "</td>
\t\t\t\t\t  <td class=\"text-right\"><a href=\"";
                // line 59
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["ocslideshow"], "action", array(), "array"), 0, array(), "array"), "href", array(), "array");
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocslideshow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t\t";
        }
        // line 63
        echo "              </tbody>
            </table>
          </div>
        </form>
\t\t <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 68
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 69
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
 </div>
";
        // line 75
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/ocslideshow/ocslideshow_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 75,  215 => 69,  211 => 68,  204 => 63,  201 => 62,  190 => 59,  186 => 58,  182 => 57,  179 => 56,  173 => 55,  167 => 53,  165 => 52,  162 => 51,  157 => 50,  155 => 49,  148 => 45,  145 => 44,  137 => 43,  127 => 41,  125 => 40,  122 => 39,  114 => 38,  104 => 36,  102 => 35,  93 => 29,  87 => 26,  83 => 24,  75 => 20,  73 => 19,  66 => 14,  55 => 12,  51 => 11,  46 => 9,  39 => 7,  33 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*        <div class="pull-right"><a href="{{ insert }}" data-toggle="tooltip" title="{{ button_insert }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_copy }}" class="btn btn-default" onclick="$('#form-ocslideshows').attr('action', '{{ copy }}').submit()"><i class="fa fa-copy"></i></button>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-ocslideshows').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*         <ul class="breadcrumb">*/
/* 			{% for breadcrumb in breadcrumbs %}*/
/* 			<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 			{% endfor %}*/
/* 		  </ul>*/
/* */
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*   {% if error_warning %}*/
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-ocslideshows" class="form-horizontal">*/
/* 				 <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                   <td class="text-left"> {% if sort == 'name' %}*/
/*                     <a href="{{ sort_name }}" class="{{ order }}">{{ column_name }}</a>*/
/* 						{% else %}*/
/*                     <a href="{{ sort_name }}">{{ column_name }}</a>*/
/* 						{% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'status' %}*/
/*                     <a href="{{ sort_status }}" class="{{ order }}">{{ column_status }}</a>*/
/*                    {% else %}*/
/*                     <a href="{{ sort_status }}">{{ column_status }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{{ column_action }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/* 			  {% if ocslideshows %}*/
/* 				  {% for ocslideshow in ocslideshows %}*/
/* 					<tr>*/
/* 					  <td class="text-center"> {% if ocslideshow['ocslideshow_id'] in selected %}*/
/* 						<input type="checkbox" name="selected[]" value="{{ ocslideshow['ocslideshow_id'] }}" checked="checked" />*/
/* 							{% else %}*/
/* 						<input type="checkbox" name="selected[]" value="{{ ocslideshow['ocslideshow_id'] }}" />*/
/* 							{% endif %} </td>*/
/* 					  <td class="text-left">{{ ocslideshow['name'] }}</td>*/
/* 					  <td class="text-left">{{ ocslideshow['status'] }}</td>*/
/* 					  <td class="text-right"><a href="{{ ocslideshow['action'][0]['href'] }}" data-toggle="tooltip" title="{{ text_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/* 					</tr>*/
/* 				{% endfor %}*/
/* 			{% endif %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*         </form>*/
/* 		 <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*  </div>*/
/* {{ footer }}*/
