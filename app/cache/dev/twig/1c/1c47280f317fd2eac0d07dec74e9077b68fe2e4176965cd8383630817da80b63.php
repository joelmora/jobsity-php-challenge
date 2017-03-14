<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_5966f648c631261659c8b138f5cc157213b9a1548b490f63c2435a08fa9a7df2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_bd3340f02b9ede7d45a95928518dede53d2f2a219deba2f771342e399787e5f1 = $this->env->getExtension("native_profiler");
        $__internal_bd3340f02b9ede7d45a95928518dede53d2f2a219deba2f771342e399787e5f1->enter($__internal_bd3340f02b9ede7d45a95928518dede53d2f2a219deba2f771342e399787e5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd3340f02b9ede7d45a95928518dede53d2f2a219deba2f771342e399787e5f1->leave($__internal_bd3340f02b9ede7d45a95928518dede53d2f2a219deba2f771342e399787e5f1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_50ae932901dc2244c401ca6e76aefb4815c2db9fe9c636fa9a89e0b6f66e64ec = $this->env->getExtension("native_profiler");
        $__internal_50ae932901dc2244c401ca6e76aefb4815c2db9fe9c636fa9a89e0b6f66e64ec->enter($__internal_50ae932901dc2244c401ca6e76aefb4815c2db9fe9c636fa9a89e0b6f66e64ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Login
";
        
        $__internal_50ae932901dc2244c401ca6e76aefb4815c2db9fe9c636fa9a89e0b6f66e64ec->leave($__internal_50ae932901dc2244c401ca6e76aefb4815c2db9fe9c636fa9a89e0b6f66e64ec_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_112f0dbeb6ae2f1fa98786e5872a11fd653a7f4e079073d213635c0367f03664 = $this->env->getExtension("native_profiler");
        $__internal_112f0dbeb6ae2f1fa98786e5872a11fd653a7f4e079073d213635c0367f03664->enter($__internal_112f0dbeb6ae2f1fa98786e5872a11fd653a7f4e079073d213635c0367f03664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <div id=\"login-panel\" class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            Login
        </div>
        <div class=\"panel-body\">
            <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                <div class=\"form-group\">
                    <label for=\"username\">Username</label>
                    <div class=\"input-group\">
                        <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></div>
                        <input type=\"text\" id=\"username\" class=\"form-control\"  name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"off\"/>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"password\">Password</label>
                    <div class=\"input-group\">
                        <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></div>
                        <input type=\"password\" class=\"form-control\"  id=\"password\" name=\"_password\" required=\"required\" />
                    </div>
                </div>

                <div class=\"checkbox\">
                    <label for=\"remember_me\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> Remember Me
                    </label>
                </div>

                <input type=\"submit\" id=\"_submit\" class=\"btn btn-primary\" name=\"_submit\" value=\"Submit\" />
            </form>
        </div>
    </div>


";
        
        $__internal_112f0dbeb6ae2f1fa98786e5872a11fd653a7f4e079073d213635c0367f03664->leave($__internal_112f0dbeb6ae2f1fa98786e5872a11fd653a7f4e079073d213635c0367f03664_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  76 => 20,  72 => 19,  64 => 13,  58 => 11,  55 => 10,  49 => 9,  41 => 6,  35 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block title %}*/
/*     Login*/
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <div id="login-panel" class="panel panel-primary">*/
/*         <div class="panel-heading">*/
/*             Login*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="username">Username</label>*/
/*                     <div class="input-group">*/
/*                         <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>*/
/*                         <input type="text" id="username" class="form-control"  name="_username" value="{{ last_username }}" required="required" autocomplete="off"/>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="password">Password</label>*/
/*                     <div class="input-group">*/
/*                         <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>*/
/*                         <input type="password" class="form-control"  id="password" name="_password" required="required" />*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="checkbox">*/
/*                     <label for="remember_me">*/
/*                         <input type="checkbox" id="remember_me" name="_remember_me" value="on" /> Remember Me*/
/*                     </label>*/
/*                 </div>*/
/* */
/*                 <input type="submit" id="_submit" class="btn btn-primary" name="_submit" value="Submit" />*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
