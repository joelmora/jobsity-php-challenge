<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_430b2e75cd855699721931ae213d5bbba359787318d1c63d7677983a27697dab extends Twig_Template
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
        $__internal_102136e6435759717df2bd4ba3dc3c513e7f12dbe22db0a3d7490cd76b235fa0 = $this->env->getExtension("native_profiler");
        $__internal_102136e6435759717df2bd4ba3dc3c513e7f12dbe22db0a3d7490cd76b235fa0->enter($__internal_102136e6435759717df2bd4ba3dc3c513e7f12dbe22db0a3d7490cd76b235fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_102136e6435759717df2bd4ba3dc3c513e7f12dbe22db0a3d7490cd76b235fa0->leave($__internal_102136e6435759717df2bd4ba3dc3c513e7f12dbe22db0a3d7490cd76b235fa0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
