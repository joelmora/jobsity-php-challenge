<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_f6912bef16d1cefd0adf3c2335441a554520eb770c3660323b93e74e03f8696d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_01ab96d37d970f93f1ebb7e8e2455f21f83230c50bc0f41eafa6574052ca6413 = $this->env->getExtension("native_profiler");
        $__internal_01ab96d37d970f93f1ebb7e8e2455f21f83230c50bc0f41eafa6574052ca6413->enter($__internal_01ab96d37d970f93f1ebb7e8e2455f21f83230c50bc0f41eafa6574052ca6413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01ab96d37d970f93f1ebb7e8e2455f21f83230c50bc0f41eafa6574052ca6413->leave($__internal_01ab96d37d970f93f1ebb7e8e2455f21f83230c50bc0f41eafa6574052ca6413_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf043e110a07e0810378541d1f7eb1be8f19758c92b505b857247995d6c20fce = $this->env->getExtension("native_profiler");
        $__internal_bf043e110a07e0810378541d1f7eb1be8f19758c92b505b857247995d6c20fce->enter($__internal_bf043e110a07e0810378541d1f7eb1be8f19758c92b505b857247995d6c20fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_bf043e110a07e0810378541d1f7eb1be8f19758c92b505b857247995d6c20fce->leave($__internal_bf043e110a07e0810378541d1f7eb1be8f19758c92b505b857247995d6c20fce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
