<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_64d4687ebc8c7aa2df69af9eec28d1970b99d7c44d6b998514cc478b2d580f59 extends Twig_Template
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
        $__internal_60dbc4dc68b1b97710ce80c70f5e61dd2e9fd32d0b4cc5fc3713e8dad601bd3b = $this->env->getExtension("native_profiler");
        $__internal_60dbc4dc68b1b97710ce80c70f5e61dd2e9fd32d0b4cc5fc3713e8dad601bd3b->enter($__internal_60dbc4dc68b1b97710ce80c70f5e61dd2e9fd32d0b4cc5fc3713e8dad601bd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_60dbc4dc68b1b97710ce80c70f5e61dd2e9fd32d0b4cc5fc3713e8dad601bd3b->leave($__internal_60dbc4dc68b1b97710ce80c70f5e61dd2e9fd32d0b4cc5fc3713e8dad601bd3b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
