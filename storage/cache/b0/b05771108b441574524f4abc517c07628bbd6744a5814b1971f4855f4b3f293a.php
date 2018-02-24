<?php

/* tt_handart2/template/common/currency.twig */
class __TwigTemplate_30785485b7731dfc5337f167d80b37fbe8ae798778879222b50793832e6d3bbb extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 2
            echo "<form action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
\t<div>
\t  <button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">\t\t
\t  <span class=\"text-ex\">";
            // line 5
            echo (isset($context["text_currency2"]) ? $context["text_currency2"] : null);
            echo "</span><i class=\"ion-chevron-down\"></i>
\t  </button>
\t  <ul class=\"dropdown-menu\">
\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 9
                echo "\t\t";
                if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                    // line 10
                    echo "\t\t<li>
\t\t  <button class=\"item-selected currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 11
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">
\t\t\t";
                    // line 12
                    if ($this->getAttribute($context["currency"], "symbol_left", array())) {
                        echo " 
\t\t\t\t";
                        // line 13
                        echo $this->getAttribute($context["currency"], "symbol_left", array());
                        echo "
\t\t\t";
                    }
                    // line 14
                    echo "\t\t\t
\t\t\t";
                    // line 15
                    echo $this->getAttribute($context["currency"], "title", array());
                    echo "
\t\t\t";
                    // line 16
                    if ($this->getAttribute($context["currency"], "symbol_right", array())) {
                        echo " 
\t\t\t\t";
                        // line 17
                        echo $this->getAttribute($context["currency"], "symbol_right", array());
                        echo "
\t\t\t";
                    }
                    // line 19
                    echo "\t\t</button>
\t\t</li>
\t\t";
                } else {
                    // line 22
                    echo "\t\t<li>
\t\t  <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 23
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">
\t\t\t";
                    // line 24
                    if ($this->getAttribute($context["currency"], "symbol_left", array())) {
                        echo " 
\t\t\t\t";
                        // line 25
                        echo $this->getAttribute($context["currency"], "symbol_left", array());
                        echo "
\t\t\t";
                    }
                    // line 26
                    echo "\t\t\t
\t\t\t";
                    // line 27
                    echo $this->getAttribute($context["currency"], "title", array());
                    echo "
\t\t\t";
                    // line 28
                    if ($this->getAttribute($context["currency"], "symbol_right", array())) {
                        echo " 
\t\t\t\t";
                        // line 29
                        echo $this->getAttribute($context["currency"], "symbol_right", array());
                        echo "
\t\t\t";
                    }
                    // line 31
                    echo "\t\t  </button>
\t\t</li>
\t\t";
                }
                // line 34
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t  </ul>
\t</div>
\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 38
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
</form>
";
        }
        // line 40
        echo " ";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 40,  126 => 38,  121 => 35,  115 => 34,  110 => 31,  105 => 29,  101 => 28,  97 => 27,  94 => 26,  89 => 25,  85 => 24,  81 => 23,  78 => 22,  73 => 19,  68 => 17,  64 => 16,  60 => 15,  57 => 14,  52 => 13,  48 => 12,  44 => 11,  41 => 10,  38 => 9,  34 => 8,  28 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if currencies|length > 1 %}*/
/* <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-currency">*/
/* 	<div>*/
/* 	  <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">		*/
/* 	  <span class="text-ex">{{ text_currency2 }}</span><i class="ion-chevron-down"></i>*/
/* 	  </button>*/
/* 	  <ul class="dropdown-menu">*/
/* 		{% for currency in currencies %}*/
/* 		{% if currency.code == code %}*/
/* 		<li>*/
/* 		  <button class="item-selected currency-select btn btn-link btn-block" type="button" name="{{ currency.code }}">*/
/* 			{% if currency.symbol_left %} */
/* 				{{ currency.symbol_left }}*/
/* 			{% endif %}			*/
/* 			{{ currency.title }}*/
/* 			{% if currency.symbol_right %} */
/* 				{{ currency.symbol_right }}*/
/* 			{% endif %}*/
/* 		</button>*/
/* 		</li>*/
/* 		{% else %}*/
/* 		<li>*/
/* 		  <button class="currency-select btn btn-link btn-block" type="button" name="{{ currency.code }}">*/
/* 			{% if currency.symbol_left %} */
/* 				{{ currency.symbol_left }}*/
/* 			{% endif %}			*/
/* 			{{ currency.title }}*/
/* 			{% if currency.symbol_right %} */
/* 				{{ currency.symbol_right }}*/
/* 			{% endif %}*/
/* 		  </button>*/
/* 		</li>*/
/* 		{% endif %}*/
/* 		{% endfor %}*/
/* 	  </ul>*/
/* 	</div>*/
/* 	<input type="hidden" name="code" value="" />*/
/* 	<input type="hidden" name="redirect" value="{{ redirect }}" />*/
/* </form>*/
/* {% endif %} */
