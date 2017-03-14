<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_5beff6b9454fd7e73d8b03a6ee2992894614626ceac50fa1d70c9b6efc4863a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ed59ddb33c0bc72395062bd7c07636fe636fdfc8196d71973b28ff21faae0c7 = $this->env->getExtension("native_profiler");
        $__internal_7ed59ddb33c0bc72395062bd7c07636fe636fdfc8196d71973b28ff21faae0c7->enter($__internal_7ed59ddb33c0bc72395062bd7c07636fe636fdfc8196d71973b28ff21faae0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7ed59ddb33c0bc72395062bd7c07636fe636fdfc8196d71973b28ff21faae0c7->leave($__internal_7ed59ddb33c0bc72395062bd7c07636fe636fdfc8196d71973b28ff21faae0c7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5ff281fe61e02c148953cdc025f322903c2c3e0136beb1718718d01ce0df990f = $this->env->getExtension("native_profiler");
        $__internal_5ff281fe61e02c148953cdc025f322903c2c3e0136beb1718718d01ce0df990f->enter($__internal_5ff281fe61e02c148953cdc025f322903c2c3e0136beb1718718d01ce0df990f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_5ff281fe61e02c148953cdc025f322903c2c3e0136beb1718718d01ce0df990f->leave($__internal_5ff281fe61e02c148953cdc025f322903c2c3e0136beb1718718d01ce0df990f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1f11be94d313ed26578d4217525d2e50e37488290d3f548224d6295120e6e2bd = $this->env->getExtension("native_profiler");
        $__internal_1f11be94d313ed26578d4217525d2e50e37488290d3f548224d6295120e6e2bd->enter($__internal_1f11be94d313ed26578d4217525d2e50e37488290d3f548224d6295120e6e2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1f11be94d313ed26578d4217525d2e50e37488290d3f548224d6295120e6e2bd->leave($__internal_1f11be94d313ed26578d4217525d2e50e37488290d3f548224d6295120e6e2bd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_897453af0d9697ed52c0e53449a99ee45c2b0dd132faf524cd87f1f586be89b1 = $this->env->getExtension("native_profiler");
        $__internal_897453af0d9697ed52c0e53449a99ee45c2b0dd132faf524cd87f1f586be89b1->enter($__internal_897453af0d9697ed52c0e53449a99ee45c2b0dd132faf524cd87f1f586be89b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_897453af0d9697ed52c0e53449a99ee45c2b0dd132faf524cd87f1f586be89b1->leave($__internal_897453af0d9697ed52c0e53449a99ee45c2b0dd132faf524cd87f1f586be89b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
