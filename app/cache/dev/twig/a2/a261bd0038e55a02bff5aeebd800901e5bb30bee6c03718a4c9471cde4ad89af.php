<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_055d444ca6fd3d3148320167812e211868b41f22507c3a6fcea8e9db7f499256 extends Twig_Template
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
        $__internal_14704515e1b45f3b63f93596fdc7782570382b5948d9a4184e2f185c5eedd6c2 = $this->env->getExtension("native_profiler");
        $__internal_14704515e1b45f3b63f93596fdc7782570382b5948d9a4184e2f185c5eedd6c2->enter($__internal_14704515e1b45f3b63f93596fdc7782570382b5948d9a4184e2f185c5eedd6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_14704515e1b45f3b63f93596fdc7782570382b5948d9a4184e2f185c5eedd6c2->leave($__internal_14704515e1b45f3b63f93596fdc7782570382b5948d9a4184e2f185c5eedd6c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
