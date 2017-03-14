<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0f11e80fee96a1dff53ffc1126d4bdd65947ae13fca2939bb366eec7396d1498 extends Twig_Template
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
        $__internal_564b913906f9acb4acafd6bb0e450af154e8dfc264b53cf9328bf018dff9256a = $this->env->getExtension("native_profiler");
        $__internal_564b913906f9acb4acafd6bb0e450af154e8dfc264b53cf9328bf018dff9256a->enter($__internal_564b913906f9acb4acafd6bb0e450af154e8dfc264b53cf9328bf018dff9256a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_564b913906f9acb4acafd6bb0e450af154e8dfc264b53cf9328bf018dff9256a->leave($__internal_564b913906f9acb4acafd6bb0e450af154e8dfc264b53cf9328bf018dff9256a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
