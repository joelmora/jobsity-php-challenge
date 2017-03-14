<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_0f53e67b5df10780f235a269d7ffab4133c5bc4e3d50d6f0eb78067ef7016808 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a392ae5799c7d471fe56e0d9467311ad4e9bee22109da82de53329dcc84a12d = $this->env->getExtension("native_profiler");
        $__internal_2a392ae5799c7d471fe56e0d9467311ad4e9bee22109da82de53329dcc84a12d->enter($__internal_2a392ae5799c7d471fe56e0d9467311ad4e9bee22109da82de53329dcc84a12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a392ae5799c7d471fe56e0d9467311ad4e9bee22109da82de53329dcc84a12d->leave($__internal_2a392ae5799c7d471fe56e0d9467311ad4e9bee22109da82de53329dcc84a12d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_426e72f61fdf5ee409ec33a2ef211601d4ece13699caaec2f1f296cc98bc0a94 = $this->env->getExtension("native_profiler");
        $__internal_426e72f61fdf5ee409ec33a2ef211601d4ece13699caaec2f1f296cc98bc0a94->enter($__internal_426e72f61fdf5ee409ec33a2ef211601d4ece13699caaec2f1f296cc98bc0a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_426e72f61fdf5ee409ec33a2ef211601d4ece13699caaec2f1f296cc98bc0a94->leave($__internal_426e72f61fdf5ee409ec33a2ef211601d4ece13699caaec2f1f296cc98bc0a94_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% endblock fos_user_content %}*/
/* */
