<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_886925f07e9a9fd2f2baa0817b7c98e167c1e9124434e0b5ff625ce4e28b2b2c extends Twig_Template
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
        $__internal_5ba08490c7b236eaf92d9c05b4b3b96903e626ffd66314bc32dbe658616d66df = $this->env->getExtension("native_profiler");
        $__internal_5ba08490c7b236eaf92d9c05b4b3b96903e626ffd66314bc32dbe658616d66df->enter($__internal_5ba08490c7b236eaf92d9c05b4b3b96903e626ffd66314bc32dbe658616d66df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5ba08490c7b236eaf92d9c05b4b3b96903e626ffd66314bc32dbe658616d66df->leave($__internal_5ba08490c7b236eaf92d9c05b4b3b96903e626ffd66314bc32dbe658616d66df_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
