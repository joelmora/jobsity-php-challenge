<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d645e0b23f8e921bbac26ae63d63610a0737fbb0171d0568bb9be854c38339c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b814b0af18739fd3238ea826e655edf37d49c4aacd9a5bbeecea3374b2c7eec1 = $this->env->getExtension("native_profiler");
        $__internal_b814b0af18739fd3238ea826e655edf37d49c4aacd9a5bbeecea3374b2c7eec1->enter($__internal_b814b0af18739fd3238ea826e655edf37d49c4aacd9a5bbeecea3374b2c7eec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b814b0af18739fd3238ea826e655edf37d49c4aacd9a5bbeecea3374b2c7eec1->leave($__internal_b814b0af18739fd3238ea826e655edf37d49c4aacd9a5bbeecea3374b2c7eec1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef42b408c69b724de6acbe71132644840d0045d6b3606bc0bcde0fde4b27f3ab = $this->env->getExtension("native_profiler");
        $__internal_ef42b408c69b724de6acbe71132644840d0045d6b3606bc0bcde0fde4b27f3ab->enter($__internal_ef42b408c69b724de6acbe71132644840d0045d6b3606bc0bcde0fde4b27f3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ef42b408c69b724de6acbe71132644840d0045d6b3606bc0bcde0fde4b27f3ab->leave($__internal_ef42b408c69b724de6acbe71132644840d0045d6b3606bc0bcde0fde4b27f3ab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
