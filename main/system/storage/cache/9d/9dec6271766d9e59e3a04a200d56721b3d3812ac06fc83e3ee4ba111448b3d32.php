<?php

/* extension/payment/pp_pro.twig */
class __TwigTemplate_01e4e471190df5e1db34f278e7743d0abf2990700749fa8bc799ab8ca0064679 extends Twig_Template
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
        <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"entry-username\">";
        // line 29
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_pp_pro_username\" value=\"";
        // line 31
        echo (isset($context["payment_pp_pro_username"]) ? $context["payment_pp_pro_username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "\" id=\"entry-username\" class=\"form-control\"/>
              ";
        // line 32
        if ((isset($context["error_username"]) ? $context["error_username"] : null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_username"]) ? $context["error_username"] : null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"entry-password\">";
        // line 38
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_pp_pro_password\" value=\"";
        // line 40
        echo (isset($context["payment_pp_pro_password"]) ? $context["payment_pp_pro_password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"entry-password\" class=\"form-control\"/>
              ";
        // line 41
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 42
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
              ";
        }
        // line 44
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"entry-signature\">";
        // line 47
        echo (isset($context["entry_signature"]) ? $context["entry_signature"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_pp_pro_signature\" value=\"";
        // line 49
        echo (isset($context["payment_pp_pro_signature"]) ? $context["payment_pp_pro_signature"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_signature"]) ? $context["entry_signature"] : null);
        echo "\" id=\"entry-signature\" class=\"form-control\"/>
              ";
        // line 50
        if ((isset($context["error_signature"]) ? $context["error_signature"] : null)) {
            // line 51
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_signature"]) ? $context["error_signature"] : null);
            echo "</div>
              ";
        }
        // line 53
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-live-demo\"><span data-toggle=\"tooltip\" title=\"";
        // line 56
        echo (isset($context["help_test"]) ? $context["help_test"] : null);
        echo "\">";
        echo (isset($context["entry_test"]) ? $context["entry_test"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"payment_pp_pro_test\" id=\"input-live-demo\" class=\"form-control\">
                ";
        // line 59
        if ((isset($context["payment_pp_pro_test"]) ? $context["payment_pp_pro_test"] : null)) {
            // line 60
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 61
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                ";
        } else {
            // line 63
            echo "                <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 64
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                ";
        }
        // line 66
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 70
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_pp_pro_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 74
            echo "                ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_pro_order_status_id"]) ? $context["payment_pp_pro_order_status_id"] : null))) {
                // line 75
                echo "                <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                ";
            } else {
                // line 77
                echo "                <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                ";
            }
            // line 79
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-transaction\">";
        // line 84
        echo (isset($context["entry_transaction"]) ? $context["entry_transaction"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_pp_pro_transaction\" id=\"input-transaction\" class=\"form-control\">
                ";
        // line 87
        if ( !(isset($context["payment_pp_pro_transaction"]) ? $context["payment_pp_pro_transaction"] : null)) {
            // line 88
            echo "                <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_authorization"]) ? $context["text_authorization"] : null);
            echo "</option>
                ";
        } else {
            // line 90
            echo "                <option value=\"0\">";
            echo (isset($context["text_authorization"]) ? $context["text_authorization"] : null);
            echo "</option>
                ";
        }
        // line 92
        echo "                ";
        if ((isset($context["payment_pp_pro_transaction"]) ? $context["payment_pp_pro_transaction"] : null)) {
            // line 93
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_sale"]) ? $context["text_sale"] : null);
            echo "</option>
                ";
        } else {
            // line 95
            echo "                <option value=\"1\">";
            echo (isset($context["text_sale"]) ? $context["text_sale"] : null);
            echo "</option>
                ";
        }
        // line 97
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 101
        echo (isset($context["help_total"]) ? $context["help_total"] : null);
        echo "\">";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_pp_pro_total\" value=\"";
        // line 103
        echo (isset($context["payment_pp_pro_total"]) ? $context["payment_pp_pro_total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "\" id=\"input-total\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 107
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_pp_pro_sort_order\" value=\"";
        // line 109
        echo (isset($context["payment_pp_pro_sort_order"]) ? $context["payment_pp_pro_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 113
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_pp_pro_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                <option value=\"0\">";
        // line 116
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 118
            echo "                ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["payment_pp_pro_geo_zone_id"]) ? $context["payment_pp_pro_geo_zone_id"] : null))) {
                // line 119
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            } else {
                // line 121
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            }
            // line 123
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 128
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_pp_pro_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 131
        if ((isset($context["payment_pp_pro_status"]) ? $context["payment_pp_pro_status"] : null)) {
            // line 132
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 133
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 135
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 136
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 138
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 146
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/payment/pp_pro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 146,  382 => 138,  377 => 136,  372 => 135,  367 => 133,  362 => 132,  360 => 131,  354 => 128,  348 => 124,  342 => 123,  334 => 121,  326 => 119,  323 => 118,  319 => 117,  315 => 116,  309 => 113,  300 => 109,  295 => 107,  286 => 103,  279 => 101,  273 => 97,  267 => 95,  261 => 93,  258 => 92,  252 => 90,  246 => 88,  244 => 87,  238 => 84,  232 => 80,  226 => 79,  218 => 77,  210 => 75,  207 => 74,  203 => 73,  197 => 70,  191 => 66,  186 => 64,  181 => 63,  176 => 61,  171 => 60,  169 => 59,  161 => 56,  156 => 53,  150 => 51,  148 => 50,  142 => 49,  137 => 47,  132 => 44,  126 => 42,  124 => 41,  118 => 40,  113 => 38,  108 => 35,  102 => 33,  100 => 32,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-payment" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
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
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-payment" class="form-horizontal">*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="entry-username">{{ entry_username }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_pp_pro_username" value="{{ payment_pp_pro_username }}" placeholder="{{ entry_username }}" id="entry-username" class="form-control"/>*/
/*               {% if error_username %}*/
/*               <div class="text-danger">{{ error_username }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="entry-password">{{ entry_password }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_pp_pro_password" value="{{ payment_pp_pro_password }}" placeholder="{{ entry_password }}" id="entry-password" class="form-control"/>*/
/*               {% if error_password %}*/
/*               <div class="text-danger">{{ error_password }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="entry-signature">{{ entry_signature }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_pp_pro_signature" value="{{ payment_pp_pro_signature }}" placeholder="{{ entry_signature }}" id="entry-signature" class="form-control"/>*/
/*               {% if error_signature %}*/
/*               <div class="text-danger">{{ error_signature }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-live-demo"><span data-toggle="tooltip" title="{{ help_test }}">{{ entry_test }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_pp_pro_test" id="input-live-demo" class="form-control">*/
/*                 {% if payment_pp_pro_test %}*/
/*                 <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                 <option value="0">{{ text_no }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_yes }}</option>*/
/*                 <option value="0" selected="selected">{{ text_no }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-order-status">{{ entry_order_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_pp_pro_order_status_id" id="input-order-status" class="form-control">*/
/*                 {% for order_status in order_statuses %}*/
/*                 {% if order_status.order_status_id == payment_pp_pro_order_status_id %}*/
/*                 <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-transaction">{{ entry_transaction }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_pp_pro_transaction" id="input-transaction" class="form-control">*/
/*                 {% if not payment_pp_pro_transaction %}*/
/*                 <option value="0" selected="selected">{{ text_authorization }}</option>*/
/*                 {% else %}*/
/*                 <option value="0">{{ text_authorization }}</option>*/
/*                 {% endif %}*/
/*                 {% if payment_pp_pro_transaction %}*/
/*                 <option value="1" selected="selected">{{ text_sale }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_sale }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-total"><span data-toggle="tooltip" title="{{ help_total }}">{{ entry_total }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_pp_pro_total" value="{{ payment_pp_pro_total }}" placeholder="{{ entry_total }}" id="input-total" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_pp_pro_sort_order" value="{{ payment_pp_pro_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_pp_pro_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                 <option value="0">{{ text_all_zones }}</option>*/
/*                 {% for geo_zone in geo_zones %}*/
/*                 {% if geo_zone.geo_zone_id == payment_pp_pro_geo_zone_id %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_pp_pro_status" id="input-status" class="form-control">*/
/*                 {% if payment_pp_pro_status %}*/
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
