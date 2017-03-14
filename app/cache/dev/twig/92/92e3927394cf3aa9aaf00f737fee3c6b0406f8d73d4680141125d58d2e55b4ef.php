<?php

/* base.html.twig */
class __TwigTemplate_e7bd394a95f4e17e9f9731dfd4e245d9e4f97a330ac79d7f4adeeda06ef222bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c05f0c67d9180ed5cd461a95e56b0bd0c16e8bd991ed75e567c412b6d0ae4ce9 = $this->env->getExtension("native_profiler");
        $__internal_c05f0c67d9180ed5cd461a95e56b0bd0c16e8bd991ed75e567c412b6d0ae4ce9->enter($__internal_c05f0c67d9180ed5cd461a95e56b0bd0c16e8bd991ed75e567c412b6d0ae4ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>J.M. Challenge - ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b8de35c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b8de35c_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app__bootstrap_1.css");
            // line 12
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/waitMe.min.css"), "html", null, true);
            echo "\" />
    <link rel=\"stylesheet\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "b8de35c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b8de35c_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_entry_2.css");
            // line 12
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/waitMe.min.css"), "html", null, true);
            echo "\" />
    <link rel=\"stylesheet\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "b8de35c_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b8de35c_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_general_3.css");
            // line 12
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/waitMe.min.css"), "html", null, true);
            echo "\" />
    <link rel=\"stylesheet\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "b8de35c_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b8de35c_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_security_4.css");
            // line 12
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/waitMe.min.css"), "html", null, true);
            echo "\" />
    <link rel=\"stylesheet\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "b8de35c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b8de35c") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app.css");
            // line 12
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/waitMe.min.css"), "html", null, true);
            echo "\" />
    <link rel=\"stylesheet\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<div>
    <div id=\"top-bar\" class=\"row\">
        <div class=\"col-lg-4\">
            <img id=\"jobsity-logo\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/iconLogoJobsitySmall.png"), "html", null, true);
        echo "\">
        </div>
        <div class=\"col-lg-8\" style=\"text-align: right\">
            ";
        // line 25
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 26
            echo "                <a class=\"btn btn-success btn-xs\" href=\"";
            echo $this->env->getExtension('routing')->getPath("entry_new");
            echo "\">
                    <span class=\"glyphicon glyphicon-plus\"></span> New Entry
                </a>
                <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    <span class=\"glyphicon glyphicon-log-out\"></span> Log Out
                </a>
            ";
        } else {
            // line 33
            echo "                <a class=\"btn btn-primary btn-xs\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
                    <span class=\"glyphicon glyphicon-log-in\"></span> Log In
                </a>
                <a class=\"btn btn-default btn-xs\" href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">
                    <span class=\"glyphicon glyphicon-user\"></span> Register
                </a>
            ";
        }
        // line 40
        echo "
            ";
        // line 41
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 42
            echo "                <div id=\"avatar-container\">
                    <img id=\"avatar-logged-user\" src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.jpg"), "html", null, true);
            echo "\" class=\"profile-image img-circle\">
                    <span id=\"logged-username\">Welcome ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 47
        echo "        </div>
    </div>

    <hr id=\"hr\">

</div>

<div class=\"container-fluid\">
    ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "</div>

";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        $this->displayBlock('javascript', $context, $blocks);
        // line 69
        echo "
</body>
</html>
";
        
        $__internal_c05f0c67d9180ed5cd461a95e56b0bd0c16e8bd991ed75e567c412b6d0ae4ce9->leave($__internal_c05f0c67d9180ed5cd461a95e56b0bd0c16e8bd991ed75e567c412b6d0ae4ce9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ada7cc4f039f34c68c5b1ee2eda62f6382b776c35925c0dfdcbf6176af34462 = $this->env->getExtension("native_profiler");
        $__internal_6ada7cc4f039f34c68c5b1ee2eda62f6382b776c35925c0dfdcbf6176af34462->enter($__internal_6ada7cc4f039f34c68c5b1ee2eda62f6382b776c35925c0dfdcbf6176af34462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6ada7cc4f039f34c68c5b1ee2eda62f6382b776c35925c0dfdcbf6176af34462->leave($__internal_6ada7cc4f039f34c68c5b1ee2eda62f6382b776c35925c0dfdcbf6176af34462_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_51953054a7869a060adc187f8adcababe686ad6c5c22c85bc32abe220a02a049 = $this->env->getExtension("native_profiler");
        $__internal_51953054a7869a060adc187f8adcababe686ad6c5c22c85bc32abe220a02a049->enter($__internal_51953054a7869a060adc187f8adcababe686ad6c5c22c85bc32abe220a02a049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 58
        echo "    ";
        
        $__internal_51953054a7869a060adc187f8adcababe686ad6c5c22c85bc32abe220a02a049->leave($__internal_51953054a7869a060adc187f8adcababe686ad6c5c22c85bc32abe220a02a049_prof);

    }

    // line 56
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f46d705d54d35fa64a1449bd524aeb470a018ad3be33c6ddefa9ed34be1aca68 = $this->env->getExtension("native_profiler");
        $__internal_f46d705d54d35fa64a1449bd524aeb470a018ad3be33c6ddefa9ed34be1aca68->enter($__internal_f46d705d54d35fa64a1449bd524aeb470a018ad3be33c6ddefa9ed34be1aca68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 57
        echo "        ";
        
        $__internal_f46d705d54d35fa64a1449bd524aeb470a018ad3be33c6ddefa9ed34be1aca68->leave($__internal_f46d705d54d35fa64a1449bd524aeb470a018ad3be33c6ddefa9ed34be1aca68_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c6f3b3a26cb7c2c2382a714fd4712697d058018e30d85fdfc5a537b034b3e467 = $this->env->getExtension("native_profiler");
        $__internal_c6f3b3a26cb7c2c2382a714fd4712697d058018e30d85fdfc5a537b034b3e467->enter($__internal_c6f3b3a26cb7c2c2382a714fd4712697d058018e30d85fdfc5a537b034b3e467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/waitMe.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c6f3b3a26cb7c2c2382a714fd4712697d058018e30d85fdfc5a537b034b3e467->leave($__internal_c6f3b3a26cb7c2c2382a714fd4712697d058018e30d85fdfc5a537b034b3e467_prof);

    }

    // line 67
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9af1683492b84565fa4299a90ba80cbed5b687221a938efe4596da0ce325ee54 = $this->env->getExtension("native_profiler");
        $__internal_9af1683492b84565fa4299a90ba80cbed5b687221a938efe4596da0ce325ee54->enter($__internal_9af1683492b84565fa4299a90ba80cbed5b687221a938efe4596da0ce325ee54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_9af1683492b84565fa4299a90ba80cbed5b687221a938efe4596da0ce325ee54->leave($__internal_9af1683492b84565fa4299a90ba80cbed5b687221a938efe4596da0ce325ee54_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 67,  251 => 65,  247 => 64,  243 => 63,  238 => 62,  232 => 61,  225 => 57,  219 => 56,  212 => 58,  209 => 56,  203 => 55,  192 => 5,  182 => 69,  180 => 67,  178 => 61,  174 => 59,  172 => 55,  162 => 47,  156 => 44,  152 => 43,  149 => 42,  147 => 41,  144 => 40,  137 => 36,  130 => 33,  123 => 29,  116 => 26,  114 => 25,  108 => 22,  97 => 15,  91 => 13,  86 => 12,  79 => 13,  74 => 12,  68 => 13,  63 => 12,  57 => 13,  52 => 12,  46 => 13,  41 => 12,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>J.M. Challenge - {% block title %}{% endblock %}</title>*/
/*     {% stylesheets filter="scssphp" output="css/app.css"*/
/*     "scss/_bootstrap.scss"*/
/*     "scss/entry.scss"*/
/*     "scss/general.scss"*/
/*     "scss/security.scss"*/
/*     %}*/
/*     <link rel="stylesheet" href="{{ asset('css/waitMe.min.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* */
/* <div>*/
/*     <div id="top-bar" class="row">*/
/*         <div class="col-lg-4">*/
/*             <img id="jobsity-logo" src="{{ asset('images/iconLogoJobsitySmall.png') }}">*/
/*         </div>*/
/*         <div class="col-lg-8" style="text-align: right">*/
/*             {% if app.user %}*/
/*                 <a class="btn btn-success btn-xs" href="{{ path('entry_new') }}">*/
/*                     <span class="glyphicon glyphicon-plus"></span> New Entry*/
/*                 </a>*/
/*                 <a class="btn btn-danger btn-xs" href="{{ path('fos_user_security_logout') }}">*/
/*                     <span class="glyphicon glyphicon-log-out"></span> Log Out*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a class="btn btn-primary btn-xs" href="{{ path('fos_user_security_login') }}">*/
/*                     <span class="glyphicon glyphicon-log-in"></span> Log In*/
/*                 </a>*/
/*                 <a class="btn btn-default btn-xs" href="{{ path('fos_user_registration_register') }}">*/
/*                     <span class="glyphicon glyphicon-user"></span> Register*/
/*                 </a>*/
/*             {% endif %}*/
/* */
/*             {% if app.user %}*/
/*                 <div id="avatar-container">*/
/*                     <img id="avatar-logged-user" src="{{ asset('images/avatar.jpg') }}" class="profile-image img-circle">*/
/*                     <span id="logged-username">Welcome {{ app.user.username}}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <hr id="hr">*/
/* */
/* </div>*/
/* */
/* <div class="container-fluid">*/
/*     {% block body %}*/
/*         {% block fos_user_content %}*/
/*         {% endblock fos_user_content %}*/
/*     {% endblock %}*/
/* </div>*/
/* */
/* {% block javascripts %}*/
/*     <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('js/waitMe.min.js') }}"></script>*/
/*     <script src="{{ asset('js/bootbox.min.js') }}"></script>*/
/* {% endblock %}*/
/* {% block javascript %}*/
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */
