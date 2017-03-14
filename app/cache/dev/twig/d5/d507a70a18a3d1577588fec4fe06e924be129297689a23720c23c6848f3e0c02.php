<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_95ce887160fcf1a0b3db0bd17065646252f290c7a25e41e4b16106e3666f5072 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_a5edb23beb885c99b97d07d696a192513db37ac9a1732d7d8382b139ce406460 = $this->env->getExtension("native_profiler");
        $__internal_a5edb23beb885c99b97d07d696a192513db37ac9a1732d7d8382b139ce406460->enter($__internal_a5edb23beb885c99b97d07d696a192513db37ac9a1732d7d8382b139ce406460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5edb23beb885c99b97d07d696a192513db37ac9a1732d7d8382b139ce406460->leave($__internal_a5edb23beb885c99b97d07d696a192513db37ac9a1732d7d8382b139ce406460_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b9201d30ae5087e6332b3d4da86102b34ccfe64510427b8cb9861756255bdde = $this->env->getExtension("native_profiler");
        $__internal_9b9201d30ae5087e6332b3d4da86102b34ccfe64510427b8cb9861756255bdde->enter($__internal_9b9201d30ae5087e6332b3d4da86102b34ccfe64510427b8cb9861756255bdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_9b9201d30ae5087e6332b3d4da86102b34ccfe64510427b8cb9861756255bdde->leave($__internal_9b9201d30ae5087e6332b3d4da86102b34ccfe64510427b8cb9861756255bdde_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
