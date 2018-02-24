<?php

/* tt_handart2/template/common/layout_content_built.twig */
class __TwigTemplate_8e52809b2306097976fa5f8f92b77ce95e01edf2b0248f0f76b2b83f54ac1579 extends Twig_Template
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
        if ((isset($context["widgets"]) ? $context["widgets"] : null)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widgets"]) ? $context["widgets"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
                // line 3
                echo "    <div class=\"main-row ";
                echo $this->getAttribute($context["rows"], "class", array());
                echo "\">
        <div class=\"container\">
            <div class=\"row\">
                ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["rows"], "main_cols", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["main_col"]) {
                    // line 7
                    echo "                <div class=\"main-col col-sm-12 col-md-";
                    echo $this->getAttribute($context["main_col"], "format", array());
                    echo "\">
                    ";
                    // line 8
                    if ($this->getAttribute($context["main_col"], "sub_rows", array())) {
                        // line 9
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["main_col"], "sub_rows", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["sub_row"]) {
                            // line 10
                            echo "                        <div class=\"row sub-row\">
                            ";
                            // line 11
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["sub_row"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["sub_col"]) {
                                // line 12
                                echo "                                <div class=\"sub-col col-sm-12 col-md-";
                                echo $this->getAttribute($context["sub_col"], "format", array());
                                echo "\">
                                    ";
                                // line 13
                                if ($this->getAttribute($context["sub_col"], "info", array())) {
                                    // line 14
                                    echo "                                        ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sub_col"], "info", array()));
                                    foreach ($context['_seq'] as $context["_key"] => $context["modules"]) {
                                        // line 15
                                        echo "                                            ";
                                        echo $context["modules"];
                                        echo "
                                        ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modules'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 17
                                    echo "                                    ";
                                }
                                // line 18
                                echo "                                </div>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_col'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 20
                            echo "                        </div>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_row'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 22
                        echo "                    ";
                    }
                    // line 23
                    echo "                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['main_col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "            </div>
        </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/common/layout_content_built.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  97 => 23,  94 => 22,  87 => 20,  80 => 18,  77 => 17,  68 => 15,  63 => 14,  61 => 13,  56 => 12,  52 => 11,  49 => 10,  44 => 9,  42 => 8,  37 => 7,  33 => 6,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if widgets %}*/
/*     {% for rows in widgets %}*/
/*     <div class="main-row {{ rows.class }}">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 {% for main_col in rows.main_cols %}*/
/*                 <div class="main-col col-sm-12 col-md-{{ main_col.format }}">*/
/*                     {% if main_col.sub_rows %}*/
/*                         {% for sub_row in main_col.sub_rows %}*/
/*                         <div class="row sub-row">*/
/*                             {% for sub_col in sub_row %}*/
/*                                 <div class="sub-col col-sm-12 col-md-{{ sub_col.format }}">*/
/*                                     {% if sub_col.info %}*/
/*                                         {% for modules in sub_col.info %}*/
/*                                             {{ modules }}*/
/*                                         {% endfor %}*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endfor %}*/
/* {% endif %}*/
