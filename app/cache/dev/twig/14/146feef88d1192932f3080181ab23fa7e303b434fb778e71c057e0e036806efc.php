<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_bae6547b617e312a0528bc7588dea66a94331bae448b4184e29294cbe42d8330 extends Twig_Template
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
        $__internal_7b74e40b400fa5caab2efb00e339c7abd4d31eaab5272dda6f02a6072a826b98 = $this->env->getExtension("native_profiler");
        $__internal_7b74e40b400fa5caab2efb00e339c7abd4d31eaab5272dda6f02a6072a826b98->enter($__internal_7b74e40b400fa5caab2efb00e339c7abd4d31eaab5272dda6f02a6072a826b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7b74e40b400fa5caab2efb00e339c7abd4d31eaab5272dda6f02a6072a826b98->leave($__internal_7b74e40b400fa5caab2efb00e339c7abd4d31eaab5272dda6f02a6072a826b98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
