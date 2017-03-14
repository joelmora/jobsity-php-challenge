<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_75f0b2f6394162e2a9764709e67e585c6db3baccabf8463e1e275573c7203563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_1d01f81fecbbd7564bf05bded2b72b39f0d33f2ee553bd72407614f1797062ec = $this->env->getExtension("native_profiler");
        $__internal_1d01f81fecbbd7564bf05bded2b72b39f0d33f2ee553bd72407614f1797062ec->enter($__internal_1d01f81fecbbd7564bf05bded2b72b39f0d33f2ee553bd72407614f1797062ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d01f81fecbbd7564bf05bded2b72b39f0d33f2ee553bd72407614f1797062ec->leave($__internal_1d01f81fecbbd7564bf05bded2b72b39f0d33f2ee553bd72407614f1797062ec_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e33b69c2cba2d615aee9cf0273f2b8573bf0f6299d95e4d45f2ea722b01e8aa3 = $this->env->getExtension("native_profiler");
        $__internal_e33b69c2cba2d615aee9cf0273f2b8573bf0f6299d95e4d45f2ea722b01e8aa3->enter($__internal_e33b69c2cba2d615aee9cf0273f2b8573bf0f6299d95e4d45f2ea722b01e8aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e33b69c2cba2d615aee9cf0273f2b8573bf0f6299d95e4d45f2ea722b01e8aa3->leave($__internal_e33b69c2cba2d615aee9cf0273f2b8573bf0f6299d95e4d45f2ea722b01e8aa3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
