<?php

/* extension/module/occmsblock/config.twig */
class __TwigTemplate_c44ccfaafad6abc21dad6ca327ce3e2dbd2e7c001bff88d5e708459f8b228cf9 extends Twig_Template
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
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
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
        echo "\t\t<li><a href=\"";
        echo (isset($context["cms_link"]) ? $context["cms_link"] : null);
        echo "\"><span class=\"icon-banner\"></span><span>";
        echo (isset($context["text_cmsblock_slide"]) ? $context["text_cmsblock_slide"] : null);
        echo "</span></a></li>
      </ul>
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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 28
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
            <label class=\"col-sm-2 control-label\" for=\"input-cmsblock\">";
        // line 39
        echo (isset($context["entry_cmsblock"]) ? $context["entry_cmsblock"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"cmsblock_id\" id=\"input-cmsblock\" class=\"form-control\">
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cmsblocks"]) ? $context["cmsblocks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 43
            echo "                ";
            if (($this->getAttribute($context["block"], "cmsblock_id", array()) == (isset($context["cmsblock_id"]) ? $context["cmsblock_id"] : null))) {
                // line 44
                echo "                <option value=\"";
                echo $this->getAttribute($context["block"], "cmsblock_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["block"], "title", array());
                echo "</option>
                ";
            } else {
                // line 46
                echo "                <option value=\"";
                echo $this->getAttribute($context["block"], "cmsblock_id", array());
                echo "\">";
                echo $this->getAttribute($context["block"], "title", array());
                echo "</option>
                ";
            }
            // line 48
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "              </select>
            </div>
          </div>
 
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 54
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
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
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 72
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/occmsblock/config.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 72,  188 => 64,  183 => 62,  178 => 61,  173 => 59,  168 => 58,  166 => 57,  160 => 54,  153 => 49,  147 => 48,  139 => 46,  131 => 44,  128 => 43,  124 => 42,  118 => 39,  113 => 36,  107 => 34,  105 => 33,  99 => 32,  94 => 30,  89 => 28,  83 => 25,  79 => 23,  71 => 19,  69 => 18,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-module" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/* 		<li><a href="{{ cms_link }}"><span class="icon-banner"></span><span>{{ text_cmsblock_slide }}</span></a></li>*/
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
/*             <label class="col-sm-2 control-label" for="input-cmsblock">{{ entry_cmsblock }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="cmsblock_id" id="input-cmsblock" class="form-control">*/
/*                 {% for block in cmsblocks %}*/
/*                 {% if block.cmsblock_id == cmsblock_id %}*/
/*                 <option value="{{ block.cmsblock_id }}" selected="selected">{{ block.title }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ block.cmsblock_id }}">{{ block.title }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*  */
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
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
