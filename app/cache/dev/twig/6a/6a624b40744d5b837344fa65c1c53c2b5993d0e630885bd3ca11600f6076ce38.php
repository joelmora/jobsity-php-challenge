<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4d34625651752c1e9f1360f22fc8f522c24a4fe29ec31244bf27376867720fe1 extends Twig_Template
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
        $__internal_e28dfaa4d1445d430bedac4de4881522bc3b53b3bcc80ee9c154b9577b0e378c = $this->env->getExtension("native_profiler");
        $__internal_e28dfaa4d1445d430bedac4de4881522bc3b53b3bcc80ee9c154b9577b0e378c->enter($__internal_e28dfaa4d1445d430bedac4de4881522bc3b53b3bcc80ee9c154b9577b0e378c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e28dfaa4d1445d430bedac4de4881522bc3b53b3bcc80ee9c154b9577b0e378c->leave($__internal_e28dfaa4d1445d430bedac4de4881522bc3b53b3bcc80ee9c154b9577b0e378c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
