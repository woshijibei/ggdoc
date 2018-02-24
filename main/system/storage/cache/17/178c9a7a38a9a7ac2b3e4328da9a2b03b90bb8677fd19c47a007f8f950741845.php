<?php

/* default/template/account/reward.twig */
class __TwigTemplate_54477322f671d76adbcaddff356f8c6bb22f142022883db076a0822f13521031 extends Twig_Template
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
        echo "
<div id=\"account-reward\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <p>";
        // line 18
        echo (isset($context["text_total"]) ? $context["text_total"] : null);
        echo " <b>";
        echo (isset($context["total"]) ? $context["total"] : null);
        echo "</b>.</p>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 23
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
              <td class=\"text-left\">";
        // line 24
        echo (isset($context["column_description"]) ? $context["column_description"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 25
        echo (isset($context["column_points"]) ? $context["column_points"] : null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
        // line 30
        if ((isset($context["rewards"]) ? $context["rewards"] : null)) {
            // line 31
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rewards"]) ? $context["rewards"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
                // line 32
                echo "          <tr>
            <td class=\"text-left\">";
                // line 33
                echo $this->getAttribute($context["reward"], "date_added", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 34
                if ($this->getAttribute($context["reward"], "order_id", array())) {
                    echo " <a href=\"";
                    echo $this->getAttribute($context["reward"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["reward"], "description", array());
                    echo "</a> ";
                } else {
                    // line 35
                    echo "              ";
                    echo $this->getAttribute($context["reward"], "description", array());
                    echo "
              ";
                }
                // line 36
                echo "</td>
            <td class=\"text-right\">";
                // line 37
                echo $this->getAttribute($context["reward"], "points", array());
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reward'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "          ";
        } else {
            // line 41
            echo "          <tr>
            <td class=\"text-center\" colspan=\"3\">";
            // line 42
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</td>
          </tr>
          ";
        }
        // line 45
        echo "            </tbody>
          
        </table>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
        // line 50
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
        <div class=\"col-sm-6 text-right\">";
        // line 51
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 54
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      ";
        // line 56
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 57
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 59
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/account/reward.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 59,  184 => 57,  180 => 56,  173 => 54,  167 => 51,  163 => 50,  156 => 45,  150 => 42,  147 => 41,  144 => 40,  135 => 37,  132 => 36,  126 => 35,  118 => 34,  114 => 33,  111 => 32,  106 => 31,  104 => 30,  96 => 25,  92 => 24,  88 => 23,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-reward" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <p>{{ text_total }} <b>{{ total }}</b>.</p>*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-left">{{ column_date_added }}</td>*/
/*               <td class="text-left">{{ column_description }}</td>*/
/*               <td class="text-right">{{ column_points }}</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*           */
/*           {% if rewards %}*/
/*           {% for reward in rewards %}*/
/*           <tr>*/
/*             <td class="text-left">{{ reward.date_added }}</td>*/
/*             <td class="text-left">{% if reward.order_id %} <a href="{{ reward.href }}">{{ reward.description }}</a> {% else %}*/
/*               {{ reward.description }}*/
/*               {% endif %}</td>*/
/*             <td class="text-right">{{ reward.points }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*           {% else %}*/
/*           <tr>*/
/*             <td class="text-center" colspan="3">{{ text_empty }}</td>*/
/*           </tr>*/
/*           {% endif %}*/
/*             </tbody>*/
/*           */
/*         </table>*/
/*       </div>*/
/*       <div class="row">*/
/*         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*         <div class="col-sm-6 text-right">{{ results }}</div>*/
/*       </div>*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
