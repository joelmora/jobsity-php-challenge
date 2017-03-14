<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_89abf183d15377d0ca5c9238e70e312e2675b23beab0c5f7b385a633b003c9ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_9a98d011ff906e08d64af51c1f0f9bd9d82bd0a351e9970134d82aa2bde044c4 = $this->env->getExtension("native_profiler");
        $__internal_9a98d011ff906e08d64af51c1f0f9bd9d82bd0a351e9970134d82aa2bde044c4->enter($__internal_9a98d011ff906e08d64af51c1f0f9bd9d82bd0a351e9970134d82aa2bde044c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a98d011ff906e08d64af51c1f0f9bd9d82bd0a351e9970134d82aa2bde044c4->leave($__internal_9a98d011ff906e08d64af51c1f0f9bd9d82bd0a351e9970134d82aa2bde044c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5032218d3ceff101f359b293b8132565f386b46f0820c33ab1a8075ed4eeaac4 = $this->env->getExtension("native_profiler");
        $__internal_5032218d3ceff101f359b293b8132565f386b46f0820c33ab1a8075ed4eeaac4->enter($__internal_5032218d3ceff101f359b293b8132565f386b46f0820c33ab1a8075ed4eeaac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_5032218d3ceff101f359b293b8132565f386b46f0820c33ab1a8075ed4eeaac4->leave($__internal_5032218d3ceff101f359b293b8132565f386b46f0820c33ab1a8075ed4eeaac4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
