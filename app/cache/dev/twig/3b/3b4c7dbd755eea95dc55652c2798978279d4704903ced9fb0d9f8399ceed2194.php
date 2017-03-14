<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_f910dd70cda6e521dbc8b6fcbe4be354d843b686310748455baac84562dd79f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb5490fa34d0cccbeb32a8cd1d41a459f6c3100839097a7dccaca215ac060e6e = $this->env->getExtension("native_profiler");
        $__internal_cb5490fa34d0cccbeb32a8cd1d41a459f6c3100839097a7dccaca215ac060e6e->enter($__internal_cb5490fa34d0cccbeb32a8cd1d41a459f6c3100839097a7dccaca215ac060e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb5490fa34d0cccbeb32a8cd1d41a459f6c3100839097a7dccaca215ac060e6e->leave($__internal_cb5490fa34d0cccbeb32a8cd1d41a459f6c3100839097a7dccaca215ac060e6e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2418c196000686b40f24c02bf5cba0c8fe045b4a2b325e4e8e2a08c7500fa8d8 = $this->env->getExtension("native_profiler");
        $__internal_2418c196000686b40f24c02bf5cba0c8fe045b4a2b325e4e8e2a08c7500fa8d8->enter($__internal_2418c196000686b40f24c02bf5cba0c8fe045b4a2b325e4e8e2a08c7500fa8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Confirmation
";
        
        $__internal_2418c196000686b40f24c02bf5cba0c8fe045b4a2b325e4e8e2a08c7500fa8d8->leave($__internal_2418c196000686b40f24c02bf5cba0c8fe045b4a2b325e4e8e2a08c7500fa8d8_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81eaf7c192109645c0c9519e169cd841f5b9b24c192754ba35b5782e27b351a0 = $this->env->getExtension("native_profiler");
        $__internal_81eaf7c192109645c0c9519e169cd841f5b9b24c192754ba35b5782e27b351a0->enter($__internal_81eaf7c192109645c0c9519e169cd841f5b9b24c192754ba35b5782e27b351a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "    <div id=\"confirmation-container\">
        <div class=\"message\">
            <span class=\"glyphicon glyphicon-check\"></span> Successful Registration
        </div>

        <p>
            <a class=\"btn btn-primary btn-xs\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                <span class=\"glyphicon glyphicon-home\"></span> Go to Home Page
            </a>
        </p>
    </div>
";
        
        $__internal_81eaf7c192109645c0c9519e169cd841f5b9b24c192754ba35b5782e27b351a0->leave($__internal_81eaf7c192109645c0c9519e169cd841f5b9b24c192754ba35b5782e27b351a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  55 => 10,  49 => 9,  41 => 6,  35 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block title %}*/
/*     Confirmation*/
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/*     <div id="confirmation-container">*/
/*         <div class="message">*/
/*             <span class="glyphicon glyphicon-check"></span> Successful Registration*/
/*         </div>*/
/* */
/*         <p>*/
/*             <a class="btn btn-primary btn-xs" href="{{ path('homepage') }}">*/
/*                 <span class="glyphicon glyphicon-home"></span> Go to Home Page*/
/*             </a>*/
/*         </p>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
