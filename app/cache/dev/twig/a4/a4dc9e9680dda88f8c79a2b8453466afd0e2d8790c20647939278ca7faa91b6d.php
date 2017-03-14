<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_b0ecd64f9af05b9e1a1de4b3163ddbec84210a6c92635c90a90b40c6be8c070c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_0b7aa2c5a1d469a2cf89fd8c03b5c7b013f9f8997e1fe7afae849a2d9fb66f2b = $this->env->getExtension("native_profiler");
        $__internal_0b7aa2c5a1d469a2cf89fd8c03b5c7b013f9f8997e1fe7afae849a2d9fb66f2b->enter($__internal_0b7aa2c5a1d469a2cf89fd8c03b5c7b013f9f8997e1fe7afae849a2d9fb66f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b7aa2c5a1d469a2cf89fd8c03b5c7b013f9f8997e1fe7afae849a2d9fb66f2b->leave($__internal_0b7aa2c5a1d469a2cf89fd8c03b5c7b013f9f8997e1fe7afae849a2d9fb66f2b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15f78e791f016ed6ac4772f2f12dd80edc77d745630df73b74ac9504fa81e756 = $this->env->getExtension("native_profiler");
        $__internal_15f78e791f016ed6ac4772f2f12dd80edc77d745630df73b74ac9504fa81e756->enter($__internal_15f78e791f016ed6ac4772f2f12dd80edc77d745630df73b74ac9504fa81e756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_15f78e791f016ed6ac4772f2f12dd80edc77d745630df73b74ac9504fa81e756->leave($__internal_15f78e791f016ed6ac4772f2f12dd80edc77d745630df73b74ac9504fa81e756_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
