<?php

/* blog/article_form.twig */
class __TwigTemplate_cac90639ad237ce8814e8f4f9637eaae3333bc4f35bc3e57a2dfb912a54bc504 extends Twig_Template
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
        <button type=\"submit\" form=\"form-article\" data-toggle=\"tooltip\" title=\"";
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
            echo "              <li><a href=\"";
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
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
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
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-article\" class=\"form-horizontal\">
          <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 29
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t";
        // line 32
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 33
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 34
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 36
            echo "\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 37
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t  </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 43
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 47
            echo "                <div class=\"checkbox\">
                  <label>
                    ";
            // line 49
            if (twig_in_filter($this->getAttribute($context["store"], "store_id", array()), (isset($context["article_store"]) ? $context["article_store"] : null))) {
                // line 50
                echo "                    <input type=\"checkbox\" name=\"article_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" checked=\"checked\" />
                    ";
                // line 51
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                    ";
            } else {
                // line 53
                echo "                    <input type=\"checkbox\" name=\"article_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" />
                    ";
                // line 54
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                    ";
            }
            // line 56
            echo "                  </label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "              </div>
            </div>
          </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 63
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"sort_order\" value=\"";
        // line 65
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t  <div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\" for=\"blog-image\">";
        // line 70
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t  <a href=\"javascript:void(0);\" id=\"blog-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 72
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
\t\t\t\t  <input type=\"hidden\" name=\"image\" value=\"";
        // line 73
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"input-image\" />
\t\t\t  </div>
\t\t  </div>
\t\t  
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-author\">";
        // line 78
        echo (isset($context["entry_author"]) ? $context["entry_author"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <input type=\"text\" name=\"author\" value=\"";
        // line 80
        echo (isset($context["author"]) ? $context["author"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_author"]) ? $context["entry_author"] : null);
        echo "\" id=\"input-author\" class=\"form-control\" />
\t\t\t</div>
\t\t  </div>
          <div class=\"tab-content\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 86
            echo "                <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 91
            echo "                <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 93
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"article_description[";
            // line 95
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"";
            echo (($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" id=\"input-name";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                      ";
            // line 96
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 97
                echo "                      <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                      ";
            }
            // line 99
            echo "                    </div>
                  </div>

                  <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-intro-text";
            // line 103
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_intro_text"]) ? $context["entry_intro_text"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                            <textarea class=\"form-control\" data-toggle=\"summernote\" name=\"article_description[";
            // line 105
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][intro_text]\" placeholder=\"";
            echo (isset($context["entry_intro_text"]) ? $context["entry_intro_text"] : null);
            echo "\" id=\"input-intro-text";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "intro_text", array())) : (""));
            echo "</textarea>
                        </div>
                  </div>


                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 111
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea class=\"form-control\" data-toggle=\"summernote\" name=\"article_description[";
            // line 113
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 117
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"article_description[";
            // line 119
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_title]\" value=\"";
            echo (($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_title", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "\" id=\"input-meta-title";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                      ";
            // line 120
            if ($this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 121
                echo "                      <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                      ";
            }
            // line 123
            echo "                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 126
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"article_description[";
            // line 128
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "\" id=\"input-meta-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 132
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"article_description[";
            // line 134
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "\" id=\"input-meta-keyword";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-keyword\"><span data-toggle=\"tooltip\" title=\"";
            // line 138
            echo (isset($context["help_keyword"]) ? $context["help_keyword"] : null);
            echo "\">";
            echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"keyword\" value=\"";
            // line 140
            echo (isset($context["keyword"]) ? $context["keyword"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
            echo "\" id=\"input-keyword\" class=\"form-control\" />
                      ";
            // line 141
            if ((isset($context["error_keyword"]) ? $context["error_keyword"] : null)) {
                // line 142
                echo "                      <div class=\"text-danger\">";
                echo (isset($context["error_keyword"]) ? $context["error_keyword"] : null);
                echo "</div>
                      ";
            }
            // line 144
            echo "                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "              </div>


          </div>
        </form>
      </div>
    </div>
  </div>
    <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
    <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
    <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
    <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
</div>
<script type=\"text/javascript\"><!--

    \$('#language a:first').tab('show');

    //--></script>
";
        // line 171
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "blog/article_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 171,  430 => 148,  421 => 144,  415 => 142,  413 => 141,  407 => 140,  400 => 138,  387 => 134,  380 => 132,  367 => 128,  360 => 126,  355 => 123,  349 => 121,  347 => 120,  337 => 119,  330 => 117,  317 => 113,  310 => 111,  295 => 105,  288 => 103,  282 => 99,  276 => 97,  274 => 96,  264 => 95,  257 => 93,  251 => 91,  247 => 90,  243 => 88,  226 => 86,  222 => 85,  212 => 80,  207 => 78,  199 => 73,  193 => 72,  188 => 70,  178 => 65,  173 => 63,  167 => 59,  159 => 56,  154 => 54,  149 => 53,  144 => 51,  139 => 50,  137 => 49,  133 => 47,  129 => 46,  123 => 43,  117 => 39,  112 => 37,  107 => 36,  102 => 34,  97 => 33,  95 => 32,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-article" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*         <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*           {% for breadcrumb in breadcrumbs %}*/
/*               <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*           {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*       <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*           <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-article" class="form-horizontal">*/
/*           <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<select name="status" id="input-status" class="form-control">*/
/* 					{% if status %}*/
/* 					<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 					<option value="0">{{ text_disabled }}</option>*/
/* 					{% else %}*/
/* 					<option value="1">{{ text_enabled }}</option>*/
/* 					<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 					{% endif %}*/
/* 				</select>*/
/* 			</div>*/
/* 		  </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">{{ entry_store }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                 {% for store in stores %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     {% if store.store_id in article_store %}*/
/*                     <input type="checkbox" name="article_store[]" value="{{ store.store_id }}" checked="checked" />*/
/*                     {{ store.name }}*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="article_store[]" value="{{ store.store_id }}" />*/
/*                     {{ store.name }}*/
/*                     {% endif %}*/
/*                   </label>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/* 		  <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/* 			<div class="col-sm-10">*/
/* 				<input type="text" name="sort_order" value="{{ sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		  <div class="form-group">*/
/* 			  <label class="col-sm-2 control-label" for="blog-image">{{ entry_image }}</label>*/
/* 			  <div class="col-sm-10">*/
/* 				  <a href="javascript:void(0);" id="blog-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/* 				  <input type="hidden" name="image" value="{{ image }}" id="input-image" />*/
/* 			  </div>*/
/* 		  </div>*/
/* 		  */
/* 		  <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="input-author">{{ entry_author }}</label>*/
/* 			<div class="col-sm-10">*/
/* 			  <input type="text" name="author" value="{{ author }}" placeholder="{{ entry_author }}" id="input-author" class="form-control" />*/
/* 			</div>*/
/* 		  </div>*/
/*           <div class="tab-content">*/
/*               <ul class="nav nav-tabs" id="language">*/
/*                 {% for language in languages %}*/
/*                 <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               <div class="tab-content">*/
/*                 {% for language in languages %}*/
/*                 <div class="tab-pane" id="language{{ language.language_id }}">*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-name{{ language.language_id }}">{{ entry_name }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="article_description[{{ language.language_id }}][name]" value="{{ article_description[language.language_id] ? article_description[language.language_id].name : '' }}" placeholder="{{ entry_name }}" id="input-name{{ language.language_id }}" class="form-control" />*/
/*                       {% if error_name[language.language_id] %}*/
/*                       <div class="text-danger">{{ error_name[language.language_id] }}</div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/* */
/*                   <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-intro-text{{ language.language_id }}">{{ entry_intro_text }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <textarea class="form-control" data-toggle="summernote" name="article_description[{{ language.language_id }}][intro_text]" placeholder="{{ entry_intro_text }}" id="input-intro-text{{ language.language_id }}">{{ article_description[language.language_id] ? article_description[language.language_id].intro_text : '' }}</textarea>*/
/*                         </div>*/
/*                   </div>*/
/* */
/* */
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-description{{ language.language_id }}">{{ entry_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea class="form-control" data-toggle="summernote" name="article_description[{{ language.language_id }}][description]" placeholder="{{ entry_description }}" id="input-description{{ language.language_id }}">{{ article_description[language.language_id] ? article_description[language.language_id].description : '' }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-title{{ language.language_id }}">{{ entry_meta_title }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="article_description[{{ language.language_id }}][meta_title]" value="{{ article_description[language.language_id] ? article_description[language.language_id].meta_title : '' }}" placeholder="{{ entry_meta_title }}" id="input-meta-title{{ language.language_id }}" class="form-control" />*/
/*                       {% if error_meta_title[language.language_id] %}*/
/*                       <div class="text-danger">{{ error_meta_title[language.language_id] }}</div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-description{{ language.language_id }}">{{ entry_meta_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="article_description[{{ language.language_id }}][meta_description]" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description{{ language.language_id }}" class="form-control">{{ article_description[language.language_id] ? article_description[language.language_id].meta_description : '' }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-keyword{{ language.language_id }}">{{ entry_meta_keyword }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="article_description[{{ language.language_id }}][meta_keyword]" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword{{ language.language_id }}" class="form-control">{{ article_description[language.language_id] ? article_description[language.language_id].meta_keyword : '' }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-keyword"><span data-toggle="tooltip" title="{{ help_keyword }}">{{ entry_keyword }}</span></label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="keyword" value="{{ keyword }}" placeholder="{{ entry_keyword }}" id="input-keyword" class="form-control" />*/
/*                       {% if error_keyword %}*/
/*                       <div class="text-danger">{{ error_keyword }}</div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/* */
/* */
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*     <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet" />*/
/*     <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet" />*/
/*     <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script>*/
/*     <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script>*/
/*     <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script>*/
/*     <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*     <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/*     <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script>*/
/*     <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* */
/*     $('#language a:first').tab('show');*/
/* */
/*     //--></script>*/
/* {{ footer }}*/
