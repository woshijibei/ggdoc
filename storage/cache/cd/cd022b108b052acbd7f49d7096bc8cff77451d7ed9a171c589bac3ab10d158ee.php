<?php

/* catalog/occategorythumbnail_list.twig */
class __TwigTemplate_8cc33883dbad5e46dd4af0412d907ee07a88e1e7359d17eb30408b809d3d5e5d extends Twig_Template
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
            <h1>";
        // line 5
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
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
        // line 10
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 14
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 15
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 19
        echo "        ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 20
            echo "        <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 24
        echo "        ";
        if ((isset($context["information"]) ? $context["information"] : null)) {
            // line 25
            echo "        <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["information"]) ? $context["information"] : null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 29
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 31
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <td class=\"table-responsive\">
                    <table class=\"table table-bordered table-hover\">
                        <thead>
                        <tr>
                            <td class=\"text-left\">";
        // line 38
        if (((isset($context["sort"]) ? $context["sort"] : null) == "name")) {
            // line 39
            echo "                                <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                                ";
        } else {
            // line 41
            echo "                                <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                                ";
        }
        // line 42
        echo "</td>
                            <td class=\"text-center\">";
        // line 43
        echo (isset($context["column_thumbnail"]) ? $context["column_thumbnail"] : null);
        echo "</td>
                            <td class=\"text-center\">";
        // line 44
        echo (isset($context["column_homethumb"]) ? $context["column_homethumb"] : null);
        echo "</td>
                            <td class=\"text-center\">";
        // line 45
        echo (isset($context["column_featured"]) ? $context["column_featured"] : null);
        echo "</td>
                            <td class=\"text-right\">";
        // line 46
        if (((isset($context["sort"]) ? $context["sort"] : null) == "sort_order")) {
            // line 47
            echo "                                <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
                                ";
        } else {
            // line 49
            echo "                                <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
                                ";
        }
        // line 50
        echo "</td>
                            <td class=\"text-right\">";
        // line 51
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 55
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 56
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 57
                echo "                            <tr>
                                <td class=\"text-left\">";
                // line 58
                echo $this->getAttribute($context["category"], "name", array());
                echo "</td>
                                <td class=\"text-center\">";
                // line 59
                if ($this->getAttribute($context["category"], "thumbnail_image", array())) {
                    // line 60
                    echo "                                    <img src=\"";
                    echo $this->getAttribute($context["category"], "thumbnail_image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\" class=\"img-thumbnail\" />
                                    ";
                } else {
                    // line 62
                    echo "                                    <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span>
                                    ";
                }
                // line 63
                echo "</td>
                                <td class=\"text-center\">";
                // line 64
                if ($this->getAttribute($context["category"], "homethumb_image", array())) {
                    // line 65
                    echo "                                    <img src=\"";
                    echo $this->getAttribute($context["category"], "homethumb_image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\" class=\"img-thumbnail\" />
                                    ";
                } else {
                    // line 67
                    echo "                                    <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span>
                                    ";
                }
                // line 68
                echo "</td>
                                <td class=\"text-center\">
                                    ";
                // line 70
                if (($this->getAttribute($context["category"], "featured", array()) == 1)) {
                    // line 71
                    echo "                                        <span>";
                    echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                    echo "</span>
                                    ";
                } else {
                    // line 73
                    echo "                                        <span>";
                    echo (isset($context["text_no"]) ? $context["text_no"] : null);
                    echo "</span>
                                    ";
                }
                // line 75
                echo "                                </td>
                                <td class=\"text-right\">";
                // line 76
                echo $this->getAttribute($context["category"], "sort_order", array());
                echo "</td>
                                <td class=\"text-right\"><a href=\"";
                // line 77
                echo $this->getAttribute($context["category"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                        ";
        } else {
            // line 81
            echo "                        <tr>
                            <td class=\"text-center\" colspan=\"4\">";
            // line 82
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                        </tr>
                        ";
        }
        // line 85
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 89
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 90
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 96
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "catalog/occategorythumbnail_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 96,  267 => 90,  263 => 89,  257 => 85,  251 => 82,  248 => 81,  245 => 80,  234 => 77,  230 => 76,  227 => 75,  221 => 73,  215 => 71,  213 => 70,  209 => 68,  205 => 67,  197 => 65,  195 => 64,  192 => 63,  188 => 62,  180 => 60,  178 => 59,  174 => 58,  171 => 57,  166 => 56,  164 => 55,  157 => 51,  154 => 50,  146 => 49,  136 => 47,  134 => 46,  130 => 45,  126 => 44,  122 => 43,  119 => 42,  111 => 41,  101 => 39,  99 => 38,  89 => 31,  85 => 29,  77 => 25,  74 => 24,  66 => 20,  63 => 19,  55 => 15,  53 => 14,  47 => 10,  36 => 8,  32 => 7,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
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
/*             <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if success %}*/
/*         <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if information %}*/
/*         <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ information }}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <td class="table-responsive">*/
/*                     <table class="table table-bordered table-hover">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <td class="text-left">{% if sort == 'name' %}*/
/*                                 <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>*/
/*                                 {% else %}*/
/*                                 <a href="{{ sort_name }}">{{ column_name }}</a>*/
/*                                 {% endif %}</td>*/
/*                             <td class="text-center">{{ column_thumbnail }}</td>*/
/*                             <td class="text-center">{{ column_homethumb }}</td>*/
/*                             <td class="text-center">{{ column_featured }}</td>*/
/*                             <td class="text-right">{% if sort == 'sort_order' %}*/
/*                                 <a href="{{ sort_sort_order }}" class="{{ order|lower }}">{{ column_sort_order }}</a>*/
/*                                 {% else %}*/
/*                                 <a href="{{ sort_sort_order }}">{{ column_sort_order }}</a>*/
/*                                 {% endif %}</td>*/
/*                             <td class="text-right">{{ column_action }}</td>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% if categories %}*/
/*                             {% for category in categories %}*/
/*                             <tr>*/
/*                                 <td class="text-left">{{ category.name }}</td>*/
/*                                 <td class="text-center">{% if category.thumbnail_image %}*/
/*                                     <img src="{{ category.thumbnail_image }}" alt="{{ category.name }}" class="img-thumbnail" />*/
/*                                     {% else %}*/
/*                                     <span class="img-thumbnail list"><i class="fa fa-camera fa-2x"></i></span>*/
/*                                     {% endif %}</td>*/
/*                                 <td class="text-center">{% if category.homethumb_image %}*/
/*                                     <img src="{{ category.homethumb_image }}" alt="{{ category.name }}" class="img-thumbnail" />*/
/*                                     {% else %}*/
/*                                     <span class="img-thumbnail list"><i class="fa fa-camera fa-2x"></i></span>*/
/*                                     {% endif %}</td>*/
/*                                 <td class="text-center">*/
/*                                     {% if category.featured == 1 %}*/
/*                                         <span>{{ text_yes }}</span>*/
/*                                     {% else %}*/
/*                                         <span>{{ text_no }}</span>*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                                 <td class="text-right">{{ category.sort_order }}</td>*/
/*                                 <td class="text-right"><a href="{{ category.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                             </tr>*/
/*                             {% endfor %}*/
/*                         {% else %}*/
/*                         <tr>*/
/*                             <td class="text-center" colspan="4">{{ text_no_results }}</td>*/
/*                         </tr>*/
/*                         {% endif %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*                     <div class="col-sm-6 text-right">{{ results }}</div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {{ footer }}*/
