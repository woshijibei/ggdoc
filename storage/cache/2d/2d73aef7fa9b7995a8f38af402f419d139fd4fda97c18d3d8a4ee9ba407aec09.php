<?php

/* tt_handart2/template/common/language.twig */
class __TwigTemplate_5aa9be083d582ef612dd5c274fcb1766a6817250d2abbe5e9903d64b0eb6dbf0 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) >= 1)) {
            // line 2
            echo "  <form action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
    <div>
      <button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">      
      <span class=\"text-ex\">";
            // line 5
            echo (isset($context["text_language2"]) ? $context["text_language2"] : null);
            echo "</span><i class=\"ion-chevron-down\"></i></button>
      <ul class=\"dropdown-menu\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 8
                echo "\t\t ";
                if (($this->getAttribute($context["language"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                    // line 9
                    echo "\t\t\t<li><button class=\"btn btn-link btn-block language-select item-selected\" type=\"button\" name=\"";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "\"><img src=\"catalog/language/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo ".png\" alt=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" /> ";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "</button></li>
\t\t";
                } else {
                    // line 11
                    echo "\t\t\t<li><button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "\"><img src=\"catalog/language/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo ".png\" alt=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" /> ";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "</button></li>
\t\t";
                }
                // line 13
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 17
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
  </form>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  78 => 14,  72 => 13,  56 => 11,  40 => 9,  37 => 8,  33 => 7,  28 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if languages|length >= 1 %}*/
/*   <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-language">*/
/*     <div>*/
/*       <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">      */
/*       <span class="text-ex">{{ text_language2 }}</span><i class="ion-chevron-down"></i></button>*/
/*       <ul class="dropdown-menu">*/
/*         {% for language in languages %}*/
/* 		 {% if language.code == code %}*/
/* 			<li><button class="btn btn-link btn-block language-select item-selected" type="button" name="{{ language.code }}"><img src="catalog/language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" title="{{ language.name }}" /> {{ language.name }}</button></li>*/
/* 		{% else %}*/
/* 			<li><button class="btn btn-link btn-block language-select" type="button" name="{{ language.code }}"><img src="catalog/language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" title="{{ language.name }}" /> {{ language.name }}</button></li>*/
/* 		{% endif %}*/
/*       {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*     <input type="hidden" name="code" value="" />*/
/*     <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/*   </form>*/
/* {% endif %}*/
/* */
