<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_85672fdaae04f7d7b2e8666ae6cfec830e465c66c95180aa45b2fadf3add7dda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b3394fd5adca1a8166517ad87e2b0895f0c7bd86a35cf97d567956bb7c785ab = $this->env->getExtension("native_profiler");
        $__internal_4b3394fd5adca1a8166517ad87e2b0895f0c7bd86a35cf97d567956bb7c785ab->enter($__internal_4b3394fd5adca1a8166517ad87e2b0895f0c7bd86a35cf97d567956bb7c785ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b3394fd5adca1a8166517ad87e2b0895f0c7bd86a35cf97d567956bb7c785ab->leave($__internal_4b3394fd5adca1a8166517ad87e2b0895f0c7bd86a35cf97d567956bb7c785ab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ed969d0f9a2bb561a9150b8704a8be41ce1c9a9e5719270c27611c65bbcd6a7 = $this->env->getExtension("native_profiler");
        $__internal_0ed969d0f9a2bb561a9150b8704a8be41ce1c9a9e5719270c27611c65bbcd6a7->enter($__internal_0ed969d0f9a2bb561a9150b8704a8be41ce1c9a9e5719270c27611c65bbcd6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_0ed969d0f9a2bb561a9150b8704a8be41ce1c9a9e5719270c27611c65bbcd6a7->leave($__internal_0ed969d0f9a2bb561a9150b8704a8be41ce1c9a9e5719270c27611c65bbcd6a7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
