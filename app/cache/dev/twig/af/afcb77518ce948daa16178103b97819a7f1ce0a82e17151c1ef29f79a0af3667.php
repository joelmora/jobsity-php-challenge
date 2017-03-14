<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8c1ec6e9ac010e26a3868b41d54b3e7f69498b230728aa4fd27ee611c2430c0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f05cf293fa45179796fe82124a42f40c380b3b636510364f84e8569b7b7e2488 = $this->env->getExtension("native_profiler");
        $__internal_f05cf293fa45179796fe82124a42f40c380b3b636510364f84e8569b7b7e2488->enter($__internal_f05cf293fa45179796fe82124a42f40c380b3b636510364f84e8569b7b7e2488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f05cf293fa45179796fe82124a42f40c380b3b636510364f84e8569b7b7e2488->leave($__internal_f05cf293fa45179796fe82124a42f40c380b3b636510364f84e8569b7b7e2488_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_911f07a2327c0195b9838d446b5f23bce1b93f5bd55d3b36171ee8590bf80a26 = $this->env->getExtension("native_profiler");
        $__internal_911f07a2327c0195b9838d446b5f23bce1b93f5bd55d3b36171ee8590bf80a26->enter($__internal_911f07a2327c0195b9838d446b5f23bce1b93f5bd55d3b36171ee8590bf80a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Register
";
        
        $__internal_911f07a2327c0195b9838d446b5f23bce1b93f5bd55d3b36171ee8590bf80a26->leave($__internal_911f07a2327c0195b9838d446b5f23bce1b93f5bd55d3b36171ee8590bf80a26_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f69b854db9c9e45e32fd7598841956ecb82b97d6196e884cb27c29062d6ee48 = $this->env->getExtension("native_profiler");
        $__internal_1f69b854db9c9e45e32fd7598841956ecb82b97d6196e884cb27c29062d6ee48->enter($__internal_1f69b854db9c9e45e32fd7598841956ecb82b97d6196e884cb27c29062d6ee48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "    <div id=\"register-panel\" class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            Register
        </div>
        <div class=\"panel-body\">
            <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" method=\"post\">

                <div class=\"form-group\">
                    <label for=\"email\">Email</label>
                    <div class=\"input-group\">
                        <div class=\"input-group-addon\"><span><strong>@</strong></span></div>
                        <input type=\"email\" id=\"email\" class=\"form-control\"  name=\"fos_user_registration_form[email]\" value=\"\" placeholder=\"email@domain.com\" required=\"required\" />
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"username\">Username</label>
                    <div class=\"input-group\">
                        <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></div>
                        <input type=\"text\" id=\"username\" class=\"form-control\"  name=\"fos_user_registration_form[username]\" pattern=\".{2,}\" maxlength=\"255\" value=\"\" required=\"required\" />
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"password\">Password</label>
                    <div class=\"input-group\">
                        <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></div>
                        <input type=\"password\" class=\"form-control\"  id=\"password\" name=\"fos_user_registration_form[plainPassword][first]\" required=\"required\" />
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"confirmation_password\">Password Confirmation</label>
                    <div class=\"input-group\">
                        <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></div>
                        <input type=\"password\" class=\"form-control\"  id=\"confirmation_password\" name=\"fos_user_registration_form[plainPassword][second]\" required=\"required\" />
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"twitter\">Twitter</label>
                    <div class=\"input-group\">
                        <div class=\"input-group-addon\"><span><strong>@</strong></span></div>
                        <input type=\"text\" class=\"form-control\" id=\"twitter\" name=\"fos_user_registration_form[twitter]\"  required=\"required\" />
                    </div>
                </div>

                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

                <input type=\"submit\" id=\"_submit\" class=\"btn btn-primary\" name=\"_submit\" value=\"Submit\" />
            </form>
        </div>
    </div>

";
        
        $__internal_1f69b854db9c9e45e32fd7598841956ecb82b97d6196e884cb27c29062d6ee48->leave($__internal_1f69b854db9c9e45e32fd7598841956ecb82b97d6196e884cb27c29062d6ee48_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 57,  62 => 15,  55 => 10,  49 => 9,  41 => 6,  35 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block title %}*/
/*     Register*/
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/*     <div id="register-panel" class="panel panel-primary">*/
/*         <div class="panel-heading">*/
/*             Register*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <form action="{{ path("fos_user_registration_register") }}" method="post">*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="email">Email</label>*/
/*                     <div class="input-group">*/
/*                         <div class="input-group-addon"><span><strong>@</strong></span></div>*/
/*                         <input type="email" id="email" class="form-control"  name="fos_user_registration_form[email]" value="" placeholder="email@domain.com" required="required" />*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="username">Username</label>*/
/*                     <div class="input-group">*/
/*                         <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>*/
/*                         <input type="text" id="username" class="form-control"  name="fos_user_registration_form[username]" pattern=".{2,}" maxlength="255" value="" required="required" />*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="password">Password</label>*/
/*                     <div class="input-group">*/
/*                         <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>*/
/*                         <input type="password" class="form-control"  id="password" name="fos_user_registration_form[plainPassword][first]" required="required" />*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="confirmation_password">Password Confirmation</label>*/
/*                     <div class="input-group">*/
/*                         <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>*/
/*                         <input type="password" class="form-control"  id="confirmation_password" name="fos_user_registration_form[plainPassword][second]" required="required" />*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="twitter">Twitter</label>*/
/*                     <div class="input-group">*/
/*                         <div class="input-group-addon"><span><strong>@</strong></span></div>*/
/*                         <input type="text" class="form-control" id="twitter" name="fos_user_registration_form[twitter]"  required="required" />*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 {{ form_widget(form._token) }}*/
/* */
/*                 <input type="submit" id="_submit" class="btn btn-primary" name="_submit" value="Submit" />*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock fos_user_content %}*/
/* */
