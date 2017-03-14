<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_a8d83d1755c18eb0c5e3e97501f4593ee9662a042827d6a79ef460d53312fe27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fe8862b7f26e0102521c699e9d4bb5904606e537410458a420d0d6f84978aaa = $this->env->getExtension("native_profiler");
        $__internal_7fe8862b7f26e0102521c699e9d4bb5904606e537410458a420d0d6f84978aaa->enter($__internal_7fe8862b7f26e0102521c699e9d4bb5904606e537410458a420d0d6f84978aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7fe8862b7f26e0102521c699e9d4bb5904606e537410458a420d0d6f84978aaa->leave($__internal_7fe8862b7f26e0102521c699e9d4bb5904606e537410458a420d0d6f84978aaa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
