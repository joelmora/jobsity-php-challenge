<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a9f60f3a41894c5e0cc87651c7fecaf7389fc331b6a8ba6283adfcd6b7a55daa extends Twig_Template
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
        $__internal_a48cb0648fdb341341d96a8f168ab45dffdcf49d171c9468aa18e7cd2b160530 = $this->env->getExtension("native_profiler");
        $__internal_a48cb0648fdb341341d96a8f168ab45dffdcf49d171c9468aa18e7cd2b160530->enter($__internal_a48cb0648fdb341341d96a8f168ab45dffdcf49d171c9468aa18e7cd2b160530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_a48cb0648fdb341341d96a8f168ab45dffdcf49d171c9468aa18e7cd2b160530->leave($__internal_a48cb0648fdb341341d96a8f168ab45dffdcf49d171c9468aa18e7cd2b160530_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
