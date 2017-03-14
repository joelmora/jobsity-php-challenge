<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_c8be2ebddd39e101bc4979e756a444380cfc3e18a6fbc611be3dd4732ef25caa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_d548ad22a91c84556188cd043941df4f756a59ba2891576ef34a273025cd246d = $this->env->getExtension("native_profiler");
        $__internal_d548ad22a91c84556188cd043941df4f756a59ba2891576ef34a273025cd246d->enter($__internal_d548ad22a91c84556188cd043941df4f756a59ba2891576ef34a273025cd246d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d548ad22a91c84556188cd043941df4f756a59ba2891576ef34a273025cd246d->leave($__internal_d548ad22a91c84556188cd043941df4f756a59ba2891576ef34a273025cd246d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82c2265d02c0b4ea65bc2bad3952e93bbc9f275c38561b5fb1a2f525b4558ef5 = $this->env->getExtension("native_profiler");
        $__internal_82c2265d02c0b4ea65bc2bad3952e93bbc9f275c38561b5fb1a2f525b4558ef5->enter($__internal_82c2265d02c0b4ea65bc2bad3952e93bbc9f275c38561b5fb1a2f525b4558ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_82c2265d02c0b4ea65bc2bad3952e93bbc9f275c38561b5fb1a2f525b4558ef5->leave($__internal_82c2265d02c0b4ea65bc2bad3952e93bbc9f275c38561b5fb1a2f525b4558ef5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
