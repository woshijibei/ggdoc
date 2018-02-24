<?php

/* extension/module/occmsblock/cmsblock_list.twig */
class __TwigTemplate_102b87a65281d1d28a40fbc6abbfb6aa0634222a3bf701e839edde978c83cdeb extends Twig_Template
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
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-cmsblock').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
\t  
      <h1>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
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
        // line 14
        echo "      </ul>
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
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 24
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 30
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 33
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-cmsblock\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 39
        if (((isset($context["sort"]) ? $context["sort"] : null) == "name")) {
            // line 40
            echo "                    <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                    ";
        } else {
            // line 42
            echo "                    <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                    ";
        }
        // line 43
        echo "</td>
                  <td class=\"text-left\">";
        // line 44
        if (((isset($context["sort"]) ? $context["sort"] : null) == "status")) {
            // line 45
            echo "                    <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                    ";
        } else {
            // line 47
            echo "                    <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                    ";
        }
        // line 48
        echo "</td>
                  <td class=\"text-right\">";
        // line 49
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 53
        if ((isset($context["cmsblocks"]) ? $context["cmsblocks"] : null)) {
            // line 54
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cmsblocks"]) ? $context["cmsblocks"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cmsblock"]) {
                // line 55
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 56
                if (twig_in_filter($this->getAttribute($context["cmsblock"], "cmsblock_id", array(), "array"), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 57
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["cmsblock"], "cmsblock_id", array(), "array");
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 59
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["cmsblock"], "cmsblock_id", array(), "array");
                    echo "\" />
                    ";
                }
                // line 60
                echo "</td>
                  <td class=\"text-left\">";
                // line 61
                echo $this->getAttribute($context["cmsblock"], "title", array(), "array");
                echo "</td>
                  <td class=\"text-left\">";
                // line 62
                echo $this->getAttribute($context["cmsblock"], "status", array(), "array");
                echo "</td>
                  <td class=\"text-right\">
\t\t\t\t  ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cmsblock"], "action", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 65
                    echo "\t\t\t\t\t <a href=\"";
                    echo $this->getAttribute($context["action"], "href", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["action"], "text", array(), "array");
                    echo "</a> 
\t\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "\t\t\t\t</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmsblock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                ";
        } else {
            // line 71
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 72
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>
                ";
        }
        // line 75
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 80
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 81
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 87
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/occmsblock/cmsblock_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 87,  242 => 81,  238 => 80,  231 => 75,  225 => 72,  222 => 71,  219 => 70,  211 => 67,  200 => 65,  196 => 64,  191 => 62,  187 => 61,  184 => 60,  178 => 59,  172 => 57,  170 => 56,  167 => 55,  162 => 54,  160 => 53,  153 => 49,  150 => 48,  142 => 47,  132 => 45,  130 => 44,  127 => 43,  119 => 42,  109 => 40,  107 => 39,  98 => 33,  92 => 30,  88 => 28,  80 => 24,  77 => 23,  69 => 19,  67 => 18,  61 => 14,  50 => 12,  46 => 11,  41 => 9,  33 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ insert }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-cmsblock').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/* 	  */
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
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-cmsblock">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                   <td class="text-left">{% if sort == 'name' %}*/
/*                     <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_name }}">{{ column_name }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'status' %}*/
/*                     <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_status }}">{{ column_status }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{{ column_action }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if cmsblocks %}*/
/*                 {% for cmsblock in cmsblocks %}*/
/*                 <tr>*/
/*                   <td class="text-center">{% if cmsblock['cmsblock_id'] in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ cmsblock['cmsblock_id'] }}" checked="checked" />*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ cmsblock['cmsblock_id'] }}" />*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{{ cmsblock['title'] }}</td>*/
/*                   <td class="text-left">{{ cmsblock['status'] }}</td>*/
/*                   <td class="text-right">*/
/* 				  {% for  action in cmsblock['action'] %}*/
/* 					 <a href="{{ action['href'] }}">{{ action['text'] }}</a> */
/* 				  {% endfor %}*/
/* 				</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="4">{{ text_no_results }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*         </form>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
