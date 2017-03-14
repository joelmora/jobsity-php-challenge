<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_07ae4fc3008af9678e4be861474a579a12d7b48376f9b1262ff8d176084f0f23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_7464bfd5b0a266b0bf3fd26f2fd846538129c5bba04ace6ef5c5b43648b2a262 = $this->env->getExtension("native_profiler");
        $__internal_7464bfd5b0a266b0bf3fd26f2fd846538129c5bba04ace6ef5c5b43648b2a262->enter($__internal_7464bfd5b0a266b0bf3fd26f2fd846538129c5bba04ace6ef5c5b43648b2a262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7464bfd5b0a266b0bf3fd26f2fd846538129c5bba04ace6ef5c5b43648b2a262->leave($__internal_7464bfd5b0a266b0bf3fd26f2fd846538129c5bba04ace6ef5c5b43648b2a262_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5dce450f1829c28d50a50627da60e29e8a633b7fed54c5b54b0ec6dba0332b63 = $this->env->getExtension("native_profiler");
        $__internal_5dce450f1829c28d50a50627da60e29e8a633b7fed54c5b54b0ec6dba0332b63->enter($__internal_5dce450f1829c28d50a50627da60e29e8a633b7fed54c5b54b0ec6dba0332b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5dce450f1829c28d50a50627da60e29e8a633b7fed54c5b54b0ec6dba0332b63->leave($__internal_5dce450f1829c28d50a50627da60e29e8a633b7fed54c5b54b0ec6dba0332b63_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
