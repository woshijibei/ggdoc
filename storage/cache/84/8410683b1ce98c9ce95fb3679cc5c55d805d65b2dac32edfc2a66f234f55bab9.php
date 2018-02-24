<?php

/* catalog/octestimonial_list.twig */
class __TwigTemplate_7d2758ad629e5e409db5708a7170b3270fbfab6b745306126c3ee9c9981c8985 extends Twig_Template
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
        echo "') ? \$('#form-information').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
            </div>
            <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
             <ul class=\"breadcrumb\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
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
        // line 13
        echo "\t\t\t  </ul>
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
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-information\">
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
\t\t\t\t\t\t<td class=\"text-left\">";
        // line 33
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</td>
\t\t\t\t\t\t<td class=\"text-right\">";
        // line 34
        echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
        echo "</td>
\t\t\t\t\t\t<td class=\"text-right\">";
        // line 35
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
\t\t\t\t\t\t<td class=\"text-right\">";
        // line 36
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 40
        if ((isset($context["testimonials"]) ? $context["testimonials"] : null)) {
            // line 41
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["testimonials"]) ? $context["testimonials"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 42
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\">\t";
                // line 43
                if ($this->getAttribute($context["testimonial"], "selected", array(), "array")) {
                    // line 44
                    echo "\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["testimonial"], "testimonial_id", array(), "array");
                    echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t";
                } else {
                    // line 46
                    echo "\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["testimonial"], "testimonial_id", array(), "array");
                    echo "\" />
\t\t\t\t\t\t\t";
                }
                // line 47
                echo "</td>
\t\t\t\t\t\t<td class=\"text-left\">";
                // line 48
                echo $this->getAttribute($context["testimonial"], "customer_name", array(), "array");
                echo "</td>
\t\t\t\t\t\t<td class=\"text-right\">";
                // line 49
                echo $this->getAttribute($context["testimonial"], "sort_order", array(), "array");
                echo "</td>
\t\t\t\t\t\t<td class=\"text-right\">";
                // line 50
                echo $this->getAttribute($context["testimonial"], "status", array(), "array");
                echo "</td>

\t\t\t\t\t\t<td class=\"text-right\">";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["testimonial"], "action", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 53
                    echo "\t\t\t\t\t\t\t <a href=\"";
                    echo $this->getAttribute($context["action"], "href", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["action"], "text", array(), "array");
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\" colspan=\"4\">";
            // line 59
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        // line 62
        echo "
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</form>
      </div>
    </div>
  </div>
</div>
";
        // line 71
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "catalog/octestimonial_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 71,  189 => 62,  183 => 59,  180 => 58,  177 => 57,  169 => 54,  158 => 53,  154 => 52,  149 => 50,  145 => 49,  141 => 48,  138 => 47,  132 => 46,  126 => 44,  124 => 43,  121 => 42,  116 => 41,  114 => 40,  107 => 36,  103 => 35,  99 => 34,  95 => 33,  86 => 27,  80 => 24,  76 => 22,  68 => 18,  66 => 17,  60 => 13,  49 => 11,  45 => 10,  40 => 8,  33 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right"><a href="{{ insert }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*                 <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-information').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*             </div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*              <ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 				<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 				{% endfor %}*/
/* 			  </ul>*/
/*         </div>*/
/*     </div>*/
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
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-information">*/
/* 			<div class="table-responsive">*/
/* 				<table class="table table-bordered table-hover">*/
/* 					<thead>*/
/* 					<tr>*/
/* 						<td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/* 						<td class="text-left">{{ entry_name }}</td>*/
/* 						<td class="text-right">{{ column_sort_order }}</td>*/
/* 						<td class="text-right">{{ column_status }}</td>*/
/* 						<td class="text-right">{{ column_action }}</td>*/
/* 					</tr>*/
/* 					</thead>*/
/* 					<tbody>*/
/* 					{% if testimonials %}*/
/* 							{% for testimonial in testimonials %}*/
/* 					<tr>*/
/* 						<td class="text-center">	{% if testimonial['selected'] %}*/
/* 							<input type="checkbox" name="selected[]" value="{{ testimonial['testimonial_id'] }}" checked="checked" />*/
/* 							{% else %}*/
/* 							<input type="checkbox" name="selected[]" value="{{ testimonial['testimonial_id'] }}" />*/
/* 							{% endif %}</td>*/
/* 						<td class="text-left">{{ testimonial['customer_name'] }}</td>*/
/* 						<td class="text-right">{{ testimonial['sort_order'] }}</td>*/
/* 						<td class="text-right">{{ testimonial['status'] }}</td>*/
/* */
/* 						<td class="text-right">{% for action in testimonial['action'] %}*/
/* 							 <a href="{{ action['href'] }}">{{ action['text'] }}</a>*/
/* 							{% endfor %}</td>*/
/* 					</tr>*/
/* 					{% endfor %}*/
/* 					{% else %}*/
/* 					<tr>*/
/* 						<td class="text-center" colspan="4">{{ text_no_results }}</td>*/
/* 					</tr>*/
/* 					{% endif %}*/
/* */
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 		</form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
