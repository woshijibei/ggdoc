<?php

/* tt_handart2/template/extension/module/ocajaxlogin/ajaxlogin.twig */
class __TwigTemplate_41e5c78155619bcbc6856f2f4f53c7c56570ec8ce2907989bcfec3e476a5c507 extends Twig_Template
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
        echo "<div class=\"ajax-container\">
    <div class=\"login-form-content\">
        <h2>";
        // line 3
        echo (isset($context["text_returning_customer"]) ? $context["text_returning_customer"] : null);
        echo "</h2>
        <p><strong>";
        // line 4
        echo (isset($context["text_i_am_returning_customer"]) ? $context["text_i_am_returning_customer"] : null);
        echo "</strong></p>
        <form action=\"#\" method=\"post\" id=\"ajax-login-form\" enctype=\"multipart/form-data\">
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 7
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 8
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 11
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 12
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <a class=\"forgotten\" href=\"";
        // line 13
        echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
        echo "\">";
        echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
        echo "</a>
            </div>
            <div class=\"action\">
                <button class=\"button\" type=\"button\" onclick=\"ocajaxlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value)\"><span>";
        // line 16
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "</span></button>
                <button class=\"button\" type=\"button\" onclick=\"ocajaxlogin.appendRegisterForm()\"><span>";
        // line 17
        echo (isset($context["button_register_link"]) ? $context["button_register_link"] : null);
        echo "</span></button>
                <img class=\"ajax-load-img\" alt=\"\" src=\"";
        // line 18
        echo (isset($context["loader_img"]) ? $context["loader_img"] : null);
        echo "\" width=\"30\" height=\"30\" />
            </div>
            ";
        // line 20
        if ((isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 21
            echo "            <input type=\"hidden\" name=\"redirect\" value=\"";
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
            ";
        }
        // line 23
        echo "        </form>
    </div>
</div>

<script type=\"text/javascript\">
    \$(document).ready(function () {
        var keycode = '';

        \$('#input-email').keypress(function (e) {
            keycode = (e.keyCode ? e.keyCode : e.which);
            if(keycode == '13') {
                ocajaxlogin.loginAction(ocajaxlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value));
            }
        });

        \$('#input-password').keypress(function (e) {
            keycode = (e.keyCode ? e.keyCode : e.which);
            if(keycode == '13') {
                ocajaxlogin.loginAction(ocajaxlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value));
            }
        });
    });

</script>

";
    }

    public function getTemplateName()
    {
        return "tt_handart2/template/extension/module/ocajaxlogin/ajaxlogin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  78 => 21,  76 => 20,  71 => 18,  67 => 17,  63 => 16,  55 => 13,  49 => 12,  45 => 11,  37 => 8,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="ajax-container">*/
/*     <div class="login-form-content">*/
/*         <h2>{{ text_returning_customer }}</h2>*/
/*         <p><strong>{{ text_i_am_returning_customer }}</strong></p>*/
/*         <form action="#" method="post" id="ajax-login-form" enctype="multipart/form-data">*/
/*             <div class="form-group">*/
/*                 <label class="control-label" for="input-email">{{ entry_email }}</label>*/
/*                 <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="control-label" for="input-password">{{ entry_password }}</label>*/
/*                 <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control" />*/
/*                 <a class="forgotten" href="{{ forgotten }}">{{ text_forgotten }}</a>*/
/*             </div>*/
/*             <div class="action">*/
/*                 <button class="button" type="button" onclick="ocajaxlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value)"><span>{{ button_login }}</span></button>*/
/*                 <button class="button" type="button" onclick="ocajaxlogin.appendRegisterForm()"><span>{{ button_register_link }}</span></button>*/
/*                 <img class="ajax-load-img" alt="" src="{{ loader_img }}" width="30" height="30" />*/
/*             </div>*/
/*             {% if redirect %}*/
/*             <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/*             {% endif %}*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/*     $(document).ready(function () {*/
/*         var keycode = '';*/
/* */
/*         $('#input-email').keypress(function (e) {*/
/*             keycode = (e.keyCode ? e.keyCode : e.which);*/
/*             if(keycode == '13') {*/
/*                 ocajaxlogin.loginAction(ocajaxlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value));*/
/*             }*/
/*         });*/
/* */
/*         $('#input-password').keypress(function (e) {*/
/*             keycode = (e.keyCode ? e.keyCode : e.which);*/
/*             if(keycode == '13') {*/
/*                 ocajaxlogin.loginAction(ocajaxlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value));*/
/*             }*/
/*         });*/
/*     });*/
/* */
/* </script>*/
/* */
/* */
