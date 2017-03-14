<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d1182d3a0b0e2ffb4316a164a47bb60481b7e988cefbb5d4b5a256d1f8813514 extends Twig_Template
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
        $__internal_1a42d104eba84ab2dd63a900280932946a83c7409eb6d253c48258bb7a124187 = $this->env->getExtension("native_profiler");
        $__internal_1a42d104eba84ab2dd63a900280932946a83c7409eb6d253c48258bb7a124187->enter($__internal_1a42d104eba84ab2dd63a900280932946a83c7409eb6d253c48258bb7a124187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1a42d104eba84ab2dd63a900280932946a83c7409eb6d253c48258bb7a124187->leave($__internal_1a42d104eba84ab2dd63a900280932946a83c7409eb6d253c48258bb7a124187_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
