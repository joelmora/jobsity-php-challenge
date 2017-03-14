<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_063bfc34266b6700a446067e9d6e1eeff670dec549fb66084d653b60d1e0cc45 extends Twig_Template
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
        $__internal_600fe794f8092fc0e28ec23585db75cea1f8536719e4236c80a13edb02e1646f = $this->env->getExtension("native_profiler");
        $__internal_600fe794f8092fc0e28ec23585db75cea1f8536719e4236c80a13edb02e1646f->enter($__internal_600fe794f8092fc0e28ec23585db75cea1f8536719e4236c80a13edb02e1646f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_600fe794f8092fc0e28ec23585db75cea1f8536719e4236c80a13edb02e1646f->leave($__internal_600fe794f8092fc0e28ec23585db75cea1f8536719e4236c80a13edb02e1646f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d758003fa6bf7b22fa5961c487259afbf8eb97d1653eadc54f0b4666668d0cdd = $this->env->getExtension("native_profiler");
        $__internal_d758003fa6bf7b22fa5961c487259afbf8eb97d1653eadc54f0b4666668d0cdd->enter($__internal_d758003fa6bf7b22fa5961c487259afbf8eb97d1653eadc54f0b4666668d0cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d758003fa6bf7b22fa5961c487259afbf8eb97d1653eadc54f0b4666668d0cdd->leave($__internal_d758003fa6bf7b22fa5961c487259afbf8eb97d1653eadc54f0b4666668d0cdd_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_84190fc671c0cc59a75d9064a22e4d460b1dd275be0eb0031c4a68de61d80cfb = $this->env->getExtension("native_profiler");
        $__internal_84190fc671c0cc59a75d9064a22e4d460b1dd275be0eb0031c4a68de61d80cfb->enter($__internal_84190fc671c0cc59a75d9064a22e4d460b1dd275be0eb0031c4a68de61d80cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_84190fc671c0cc59a75d9064a22e4d460b1dd275be0eb0031c4a68de61d80cfb->leave($__internal_84190fc671c0cc59a75d9064a22e4d460b1dd275be0eb0031c4a68de61d80cfb_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5645cf833ce0d1e4ab02cb49595dbfa1c71c3cdfb6387ad3941260e07c7612fe = $this->env->getExtension("native_profiler");
        $__internal_5645cf833ce0d1e4ab02cb49595dbfa1c71c3cdfb6387ad3941260e07c7612fe->enter($__internal_5645cf833ce0d1e4ab02cb49595dbfa1c71c3cdfb6387ad3941260e07c7612fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5645cf833ce0d1e4ab02cb49595dbfa1c71c3cdfb6387ad3941260e07c7612fe->leave($__internal_5645cf833ce0d1e4ab02cb49595dbfa1c71c3cdfb6387ad3941260e07c7612fe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
