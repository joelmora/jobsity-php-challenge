<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_e7a82628c7ab17cd04b6567616439499273a21fe7f1716d795c32216195b90c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ba92e0ccff4f250c8315edc397528ac3fac7c612a80fd32be8631592b78718b7 = $this->env->getExtension("native_profiler");
        $__internal_ba92e0ccff4f250c8315edc397528ac3fac7c612a80fd32be8631592b78718b7->enter($__internal_ba92e0ccff4f250c8315edc397528ac3fac7c612a80fd32be8631592b78718b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba92e0ccff4f250c8315edc397528ac3fac7c612a80fd32be8631592b78718b7->leave($__internal_ba92e0ccff4f250c8315edc397528ac3fac7c612a80fd32be8631592b78718b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a252664863fa1e743d8af428d73458c7ac6b9fd02bef0ef92d157304089cf432 = $this->env->getExtension("native_profiler");
        $__internal_a252664863fa1e743d8af428d73458c7ac6b9fd02bef0ef92d157304089cf432->enter($__internal_a252664863fa1e743d8af428d73458c7ac6b9fd02bef0ef92d157304089cf432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a252664863fa1e743d8af428d73458c7ac6b9fd02bef0ef92d157304089cf432->leave($__internal_a252664863fa1e743d8af428d73458c7ac6b9fd02bef0ef92d157304089cf432_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
