<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_1ec5689eb25d7474988fed4f0835a5f60ef9ee881195ddbd18d658f0bb463353 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_8b3c0a007c8fdb32c50e7d65ccee84d18fd76b90754f08de06837b3d9e5d04c4 = $this->env->getExtension("native_profiler");
        $__internal_8b3c0a007c8fdb32c50e7d65ccee84d18fd76b90754f08de06837b3d9e5d04c4->enter($__internal_8b3c0a007c8fdb32c50e7d65ccee84d18fd76b90754f08de06837b3d9e5d04c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b3c0a007c8fdb32c50e7d65ccee84d18fd76b90754f08de06837b3d9e5d04c4->leave($__internal_8b3c0a007c8fdb32c50e7d65ccee84d18fd76b90754f08de06837b3d9e5d04c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa741dcdd9e228b29b123136aa84b6eee9f94fafd79de6f3ec1440a0c60a1c8c = $this->env->getExtension("native_profiler");
        $__internal_aa741dcdd9e228b29b123136aa84b6eee9f94fafd79de6f3ec1440a0c60a1c8c->enter($__internal_aa741dcdd9e228b29b123136aa84b6eee9f94fafd79de6f3ec1440a0c60a1c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_aa741dcdd9e228b29b123136aa84b6eee9f94fafd79de6f3ec1440a0c60a1c8c->leave($__internal_aa741dcdd9e228b29b123136aa84b6eee9f94fafd79de6f3ec1440a0c60a1c8c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
