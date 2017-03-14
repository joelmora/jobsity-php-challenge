<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6fe51651694b0d22e35a824f5342989310fad6c115a1f465ece9c9db623d7a2f extends Twig_Template
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
        $__internal_284a0cf6f29db864eccde282aa27d72ef60155cc2df1794987c0425db8651c3e = $this->env->getExtension("native_profiler");
        $__internal_284a0cf6f29db864eccde282aa27d72ef60155cc2df1794987c0425db8651c3e->enter($__internal_284a0cf6f29db864eccde282aa27d72ef60155cc2df1794987c0425db8651c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_284a0cf6f29db864eccde282aa27d72ef60155cc2df1794987c0425db8651c3e->leave($__internal_284a0cf6f29db864eccde282aa27d72ef60155cc2df1794987c0425db8651c3e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
