<?php

/* tt_handart2/template/common/header.twig */
class __TwigTemplate_8e14555a000b229986d89d082260a70279903ca53e90dcf3708bb6b4aed0c85a extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 17
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>

<script src=\"catalog/view/javascript/jquery/jquery-ui.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/opentheme/ocquickview/ocquickview.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/theme/tt_handart2/stylesheet/opentheme/ocquickview/css/ocquickview.css\" rel=\"stylesheet\" type=\"text/css\" />
<script src=\"catalog/view/javascript/jquery/owl-carousel/js/owl.carousel.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/jquery/owl-carousel/css/owl.carousel.min.css\" rel=\"stylesheet\" />
<link href=\"catalog/view/javascript/jquery/owl-carousel/css/owl.theme.green.min.css\" rel=\"stylesheet\" />
<script src=\"catalog/view/javascript/jquery/elevatezoom/jquery.elevatezoom.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/opentheme/countdown/jquery.plugin.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/opentheme/countdown/jquery.countdown.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/opentheme/hozmegamenu/custommenu.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/opentheme/hozmegamenu/mobile_menu.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/theme/tt_handart2/stylesheet/opentheme/countdown/jquery.countdown.css\" rel=\"stylesheet\" />
<link href=\"catalog/view/theme/tt_handart2/stylesheet/opentheme/hozmegamenu/css/custommenu.css\" rel=\"stylesheet\" />
<link href=\"catalog/view/theme/tt_handart2/stylesheet/opentheme/css/animate.css\" rel=\"stylesheet\" />
<link href=\"catalog/view/theme/tt_handart2/stylesheet/opentheme/layoutproducts/layoutproducts.css\" rel=\"stylesheet\" />

<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />

<link href=\"catalog/view/javascript/ionicons/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/googlefonts.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/tt_handart2/stylesheet/stylesheet.css\" rel=\"stylesheet\">
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 46
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 49
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 53
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 56
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        if ($this->getAttribute((isset($context["theme_option_status"]) ? $context["theme_option_status"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array")) {
            // line 59
            echo "  <script src=\"https://ajax.googleapis.com/ajax/libs/webfont/1.5.10/webfont.js\"></script>
  <script>
    WebFont.load({
      google: {
        ";
            // line 63
            if (($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_family", array()) == $this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_family", array()))) {
                // line 64
                echo "\t\tfamilies: ['";
                echo (($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_family", array())) ? ($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_family", array())) : (""));
                echo "']
\t\t";
            } else {
                // line 66
                echo "\t\tfamilies: ['";
                echo (($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_family", array())) ? ($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_family", array())) : (""));
                echo "', '";
                echo (($this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_family", array())) ? ($this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_family", array())) : (""));
                echo "']
\t\t";
            }
            // line 68
            echo "      }
    });
  </script>
  <style>
    ";
            // line 72
            if ((isset($context["a_tag"]) ? $context["a_tag"] : null)) {
                // line 73
                echo "    ";
                echo (($this->getAttribute($this->getAttribute((isset($context["a_tag"]) ? $context["a_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "color", array())) ? ((("a { color: #" . $this->getAttribute($this->getAttribute((isset($context["a_tag"]) ? $context["a_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "color", array())) . "; }")) : (""));
                echo "
    ";
                // line 74
                echo (($this->getAttribute($this->getAttribute((isset($context["a_tag"]) ? $context["a_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "hover_color", array())) ? ((("a:hover { color: #" . $this->getAttribute($this->getAttribute((isset($context["a_tag"]) ? $context["a_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "hover_color", array())) . "; }")) : (""));
                echo "
    ";
            }
            // line 76
            echo "
    ";
            // line 77
            if ((isset($context["header_tag"]) ? $context["header_tag"] : null)) {
                // line 78
                echo "    h1, h2, h3, h4, h5, h6 {
    ";
                // line 79
                echo (($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "color", array())) ? ((("color: #" . $this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "color", array())) . ";")) : (""));
                echo "
    ";
                // line 80
                echo (($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_family", array())) ? ((("font-family: " . $this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_family", array())) . ";")) : (""));
                echo "
    ";
                // line 81
                echo (($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_weight", array())) ? ((("font-weight: " . $this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_weight", array())) . ";")) : (""));
                echo "
    }
    ";
                // line 83
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h1", array()), "font_size", array())) ? ((("h1 { font-size: " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h1", array()), "font_size", array())) . "; }")) : (""));
                echo "
    ";
                // line 84
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h2", array()), "font_size", array())) ? ((("h2 { font-size: " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h2", array()), "font_size", array())) . "; }")) : (""));
                echo "
    ";
                // line 85
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h3", array()), "font_size", array())) ? ((("h3 { font-size: " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h3", array()), "font_size", array())) . "; }")) : (""));
                echo "
    ";
                // line 86
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h4", array()), "font_size", array())) ? ((("h4 { font-size: " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h4", array()), "font_size", array())) . "; }")) : (""));
                echo "
    ";
                // line 87
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h5", array()), "font_size", array())) ? ((("h5 { font-size: " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h5", array()), "font_size", array())) . "; }")) : (""));
                echo "
    ";
                // line 88
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h6", array()), "font_size", array())) ? ((("h6 { font-size: " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h6", array()), "font_size", array())) . "; }")) : (""));
                echo "
    ";
            }
            // line 90
            echo "
    ";
            // line 91
            if ((isset($context["body_css"]) ? $context["body_css"] : null)) {
                // line 92
                echo "    body {
    ";
                // line 93
                echo (($this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "color", array())) ? ((("color: #" . $this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "color", array())) . ";")) : (""));
                echo "
    ";
                // line 94
                echo (($this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_family", array())) ? ((("font-family: " . $this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_family", array())) . ";")) : (""));
                echo "
    ";
                // line 95
                echo (($this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_size", array())) ? ((("font-size: " . $this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_size", array())) . ";")) : (""));
                echo "
    ";
                // line 96
                echo (($this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_weight", array())) ? ((("font-weight: " . $this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_weight", array())) . ";")) : (""));
                echo "
    ";
                // line 97
                echo (($this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "line_height", array())) ? ((("line-height: " . $this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "line_height", array())) . ";")) : (""));
                echo "
    }
    ";
            }
            // line 100
            echo "  </style>
";
        }
        // line 102
        echo "</head>
<body class=\"";
        // line 103
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " home2 group2\">
<div class=\"wrapper\">
<header>
\t<div class=\"container-fix\">
\t<div class=\"container\">\t
\t<div class=\"logo-container pull-left\">
\t\t<div id=\"logo\">
\t\t  ";
        // line 110
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 111
            echo "\t\t\t<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>
\t\t  ";
        } else {
            // line 113
            echo "\t\t\t<h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
\t\t  ";
        }
        // line 115
        echo "\t\t</div>
\t</div>
\t<div class=\"block-left pull-left\">
\t\t<ul class=\"list-unstyled\">
\t\t\t<li>";
        // line 119
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "</li>
\t\t\t<li>";
        // line 120
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "</li>
\t\t</ul>
\t</div>
\t<div class=\"block-right pull-right\">\t\t\t
\t\t<div class=\"setting pull-right\"> 
\t\t\t<button data-toggle=\"dropdown\" type=\"button\"><i class=\"ion-drag\"></i></button>
\t\t\t<nav id=\"top\" class=\"dropdown-menu\">
\t\t\t\t<ul class=\"list-unstyled top-links\">\t\t\t\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t<span class=\"text-ex\">";
        // line 130
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span>
\t\t\t\t\t\t<div id=\"top-links\">
\t\t\t\t\t\t\t";
        // line 132
        if ((isset($context["use_ajax_login"]) ? $context["use_ajax_login"] : null)) {
            // line 133
            echo "\t\t\t\t\t\t\t\t<ul class=\"ul-account list-unstyled\">
\t\t\t\t\t\t\t";
        } else {
            // line 135
            echo "\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
        }
        // line 137
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 138
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 139
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 140
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 141
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>\t
\t\t\t\t\t\t\t<li><a href=\"";
            // line 142
            echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
            echo "\" id=\"wishlist-total\" title=\"";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "\">";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</a></li>\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
            // line 144
            if ((isset($context["use_ajax_login"]) ? $context["use_ajax_login"] : null)) {
                // line 145
                echo "\t\t\t\t\t\t\t\t\t<a id=\"a-logout-link\" href=\"";
                echo (isset($context["logout"]) ? $context["logout"] : null);
                echo "\">";
                echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
                echo "</a>
\t\t\t\t\t\t\t\t";
            } else {
                // line 147
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["logout"]) ? $context["logout"] : null);
                echo "\">";
                echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
                echo "</a>
\t\t\t\t\t\t\t\t";
            }
            // line 149
            echo "\t\t\t\t\t\t\t</li>\t\t\t
\t\t\t\t\t\t\t";
        } else {
            // line 151
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
            // line 152
            if ((isset($context["use_ajax_login"]) ? $context["use_ajax_login"] : null)) {
                // line 153
                echo "\t\t\t\t\t\t\t\t\t<a id=\"a-register-link\" href=\"";
                echo (isset($context["register"]) ? $context["register"] : null);
                echo "\">";
                echo (isset($context["text_register"]) ? $context["text_register"] : null);
                echo "</a>
\t\t\t\t\t\t\t\t";
            } else {
                // line 155
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["register"]) ? $context["register"] : null);
                echo "\">";
                echo (isset($context["text_register"]) ? $context["text_register"] : null);
                echo "</a> 
\t\t\t\t\t\t\t\t";
            }
            // line 157
            echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
            // line 159
            if ((isset($context["use_ajax_login"]) ? $context["use_ajax_login"] : null)) {
                // line 160
                echo "\t\t\t\t\t\t\t\t\t<a id=\"a-login-link\" href=\"";
                echo (isset($context["login"]) ? $context["login"] : null);
                echo "\">";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "</a>
\t\t\t\t\t\t\t\t";
            } else {
                // line 162
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["login"]) ? $context["login"] : null);
                echo "\">";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "</a> 
\t\t\t\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 166
        echo "\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t\t<div class=\"cart-container pull-right\">";
        // line 173
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
\t\t<div class=\"search-containers pull-right\">";
        // line 174
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>\t\t\t
\t</div>\t
\t\t<div class=\"main-menu\">
\t\t\t";
        // line 177
        if ((isset($context["block1"]) ? $context["block1"] : null)) {
            // line 178
            echo "\t\t\t\t";
            echo (isset($context["block1"]) ? $context["block1"] : null);
            echo "
\t\t\t";
        }
        // line 180
        echo "\t\t</div>
\t</div>
\t</div>
</header>";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 180,  480 => 178,  478 => 177,  472 => 174,  468 => 173,  459 => 166,  455 => 164,  447 => 162,  439 => 160,  437 => 159,  433 => 157,  425 => 155,  417 => 153,  415 => 152,  412 => 151,  408 => 149,  400 => 147,  392 => 145,  390 => 144,  381 => 142,  375 => 141,  369 => 140,  363 => 139,  356 => 138,  353 => 137,  349 => 135,  345 => 133,  343 => 132,  338 => 130,  325 => 120,  321 => 119,  315 => 115,  307 => 113,  295 => 111,  293 => 110,  283 => 103,  280 => 102,  276 => 100,  270 => 97,  266 => 96,  262 => 95,  258 => 94,  254 => 93,  251 => 92,  249 => 91,  246 => 90,  241 => 88,  237 => 87,  233 => 86,  229 => 85,  225 => 84,  221 => 83,  216 => 81,  212 => 80,  208 => 79,  205 => 78,  203 => 77,  200 => 76,  195 => 74,  190 => 73,  188 => 72,  182 => 68,  174 => 66,  168 => 64,  166 => 63,  160 => 59,  158 => 58,  150 => 56,  146 => 55,  135 => 53,  131 => 52,  128 => 51,  119 => 49,  115 => 48,  102 => 46,  98 => 45,  71 => 20,  65 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* */
/* <script src="catalog/view/javascript/jquery/jquery-ui.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/opentheme/ocquickview/ocquickview.js" type="text/javascript"></script>*/
/* <link href="catalog/view/theme/tt_handart2/stylesheet/opentheme/ocquickview/css/ocquickview.css" rel="stylesheet" type="text/css" />*/
/* <script src="catalog/view/javascript/jquery/owl-carousel/js/owl.carousel.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/jquery/owl-carousel/css/owl.carousel.min.css" rel="stylesheet" />*/
/* <link href="catalog/view/javascript/jquery/owl-carousel/css/owl.theme.green.min.css" rel="stylesheet" />*/
/* <script src="catalog/view/javascript/jquery/elevatezoom/jquery.elevatezoom.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/opentheme/countdown/jquery.plugin.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/opentheme/countdown/jquery.countdown.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/opentheme/hozmegamenu/custommenu.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/opentheme/hozmegamenu/mobile_menu.js" type="text/javascript"></script>*/
/* <link href="catalog/view/theme/tt_handart2/stylesheet/opentheme/countdown/jquery.countdown.css" rel="stylesheet" />*/
/* <link href="catalog/view/theme/tt_handart2/stylesheet/opentheme/hozmegamenu/css/custommenu.css" rel="stylesheet" />*/
/* <link href="catalog/view/theme/tt_handart2/stylesheet/opentheme/css/animate.css" rel="stylesheet" />*/
/* <link href="catalog/view/theme/tt_handart2/stylesheet/opentheme/layoutproducts/layoutproducts.css" rel="stylesheet" />*/
/* */
/* <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* */
/* <link href="catalog/view/javascript/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/theme/default/stylesheet/googlefonts.css" rel="stylesheet">*/
/* <link href="catalog/view/theme/tt_handart2/stylesheet/stylesheet.css" rel="stylesheet">*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* {% if theme_option_status[store_id] %}*/
/*   <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.10/webfont.js"></script>*/
/*   <script>*/
/*     WebFont.load({*/
/*       google: {*/
/*         {% if header_tag[store_id].font_family == header_tag[store_id].font_family %}*/
/* 		families: ['{{ header_tag[store_id].font_family ? header_tag[store_id].font_family }}']*/
/* 		{% else %}*/
/* 		families: ['{{ header_tag[store_id].font_family ? header_tag[store_id].font_family }}', '{{ body_css[store_id].font_family ? body_css[store_id].font_family }}']*/
/* 		{% endif %}*/
/*       }*/
/*     });*/
/*   </script>*/
/*   <style>*/
/*     {% if a_tag %}*/
/*     {{ a_tag[store_id].color ? 'a { color: #' ~ a_tag[store_id].color ~ '; }' : '' }}*/
/*     {{ a_tag[store_id].hover_color ? 'a:hover { color: #' ~ a_tag[store_id].hover_color ~ '; }' : '' }}*/
/*     {% endif %}*/
/* */
/*     {% if header_tag %}*/
/*     h1, h2, h3, h4, h5, h6 {*/
/*     {{ header_tag[store_id].color ? 'color: #' ~ header_tag[store_id].color ~ ';' : '' }}*/
/*     {{ header_tag[store_id].font_family ? 'font-family: ' ~ header_tag[store_id].font_family ~ ';' : '' }}*/
/*     {{ header_tag[store_id].font_weight ? 'font-weight: ' ~ header_tag[store_id].font_weight ~ ';' : ''}}*/
/*     }*/
/*     {{ header_tag[store_id].h1.font_size ? 'h1 { font-size: ' ~ header_tag[store_id].h1.font_size ~ '; }' : '' }}*/
/*     {{ header_tag[store_id].h2.font_size ? 'h2 { font-size: ' ~ header_tag[store_id].h2.font_size ~ '; }' : '' }}*/
/*     {{ header_tag[store_id].h3.font_size ? 'h3 { font-size: ' ~ header_tag[store_id].h3.font_size ~ '; }' : '' }}*/
/*     {{ header_tag[store_id].h4.font_size ? 'h4 { font-size: ' ~ header_tag[store_id].h4.font_size ~ '; }' : '' }}*/
/*     {{ header_tag[store_id].h5.font_size ? 'h5 { font-size: ' ~ header_tag[store_id].h5.font_size ~ '; }' : '' }}*/
/*     {{ header_tag[store_id].h6.font_size ? 'h6 { font-size: ' ~ header_tag[store_id].h6.font_size ~ '; }' : '' }}*/
/*     {% endif %}*/
/* */
/*     {% if body_css %}*/
/*     body {*/
/*     {{ body_css[store_id].color ? 'color: #' ~ body_css[store_id].color ~ ';' : '' }}*/
/*     {{ body_css[store_id].font_family ? 'font-family: ' ~ body_css[store_id].font_family ~ ';' : '' }}*/
/*     {{ body_css[store_id].font_size ? 'font-size: ' ~ body_css[store_id].font_size ~ ';' : '' }}*/
/*     {{ body_css[store_id].font_weight ? 'font-weight: ' ~ body_css[store_id].font_weight ~ ';' : '' }}*/
/*     {{ body_css[store_id].line_height ? 'line-height: ' ~ body_css[store_id].line_height ~ ';' : '' }}*/
/*     }*/
/*     {% endif %}*/
/*   </style>*/
/* {% endif %}*/
/* </head>*/
/* <body class="{{ class }} home2 group2">*/
/* <div class="wrapper">*/
/* <header>*/
/* 	<div class="container-fix">*/
/* 	<div class="container">	*/
/* 	<div class="logo-container pull-left">*/
/* 		<div id="logo">*/
/* 		  {% if logo %}*/
/* 			<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>*/
/* 		  {% else %}*/
/* 			<h1><a href="{{ home }}">{{ name }}</a></h1>*/
/* 		  {% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="block-left pull-left">*/
/* 		<ul class="list-unstyled">*/
/* 			<li>{{ currency }}</li>*/
/* 			<li>{{ language }}</li>*/
/* 		</ul>*/
/* 	</div>*/
/* 	<div class="block-right pull-right">			*/
/* 		<div class="setting pull-right"> */
/* 			<button data-toggle="dropdown" type="button"><i class="ion-drag"></i></button>*/
/* 			<nav id="top" class="dropdown-menu">*/
/* 				<ul class="list-unstyled top-links">							*/
/* 					<li>*/
/* 						<div>*/
/* 						<span class="text-ex">{{ text_account }}</span>*/
/* 						<div id="top-links">*/
/* 							{% if use_ajax_login %}*/
/* 								<ul class="ul-account list-unstyled">*/
/* 							{% else %}*/
/* 								<ul class="list-unstyled">*/
/* 							{% endif %}*/
/* 							{% if logged %}*/
/* 							<li><a href="{{ account }}">{{ text_account }}</a></li>*/
/* 							<li><a href="{{ order }}">{{ text_order }}</a></li>*/
/* 							<li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/* 							<li><a href="{{ download }}">{{ text_download }}</a></li>	*/
/* 							<li><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}">{{ text_wishlist }}</a></li>			*/
/* 							<li>*/
/* 								{% if use_ajax_login %}*/
/* 									<a id="a-logout-link" href="{{ logout }}">{{ text_logout }}</a>*/
/* 								{% else %}*/
/* 									<a href="{{ logout }}">{{ text_logout }}</a>*/
/* 								{% endif %}*/
/* 							</li>			*/
/* 							{% else %}*/
/* 							<li>*/
/* 								{% if use_ajax_login %}*/
/* 									<a id="a-register-link" href="{{ register }}">{{ text_register }}</a>*/
/* 								{% else %}*/
/* 									<a href="{{ register }}">{{ text_register }}</a> */
/* 								{% endif %}*/
/* 							</li>*/
/* 							<li>*/
/* 								{% if use_ajax_login %}*/
/* 									<a id="a-login-link" href="{{ login }}">{{ text_login }}</a>*/
/* 								{% else %}*/
/* 									<a href="{{ login }}">{{ text_login }}</a> */
/* 								{% endif %}*/
/* 							</li>*/
/* 							{% endif %}*/
/* 						  </ul>*/
/* 						</div>*/
/* 						</div>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</nav>*/
/* 		</div>*/
/* 		<div class="cart-container pull-right">{{ cart }}</div>*/
/* 		<div class="search-containers pull-right">{{ search }}</div>			*/
/* 	</div>	*/
/* 		<div class="main-menu">*/
/* 			{% if block1 %}*/
/* 				{{ block1 }}*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* 	</div>*/
/* </header>*/
