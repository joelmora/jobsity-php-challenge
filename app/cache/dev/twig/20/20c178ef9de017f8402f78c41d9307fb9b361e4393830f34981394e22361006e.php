<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_42b20eda880f58ffeb59d203ec07b607ed197cba5ecdd13a70fce24222d939bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_78de7d38898f2ac4b9678831ae8cd52383320e9709423729bda8ddf398d81ad4 = $this->env->getExtension("native_profiler");
        $__internal_78de7d38898f2ac4b9678831ae8cd52383320e9709423729bda8ddf398d81ad4->enter($__internal_78de7d38898f2ac4b9678831ae8cd52383320e9709423729bda8ddf398d81ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78de7d38898f2ac4b9678831ae8cd52383320e9709423729bda8ddf398d81ad4->leave($__internal_78de7d38898f2ac4b9678831ae8cd52383320e9709423729bda8ddf398d81ad4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7926826c7957be98a6ebc7caeecdd2889c68096385d31c26066988f6c8d6be14 = $this->env->getExtension("native_profiler");
        $__internal_7926826c7957be98a6ebc7caeecdd2889c68096385d31c26066988f6c8d6be14->enter($__internal_7926826c7957be98a6ebc7caeecdd2889c68096385d31c26066988f6c8d6be14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_7926826c7957be98a6ebc7caeecdd2889c68096385d31c26066988f6c8d6be14->leave($__internal_7926826c7957be98a6ebc7caeecdd2889c68096385d31c26066988f6c8d6be14_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
