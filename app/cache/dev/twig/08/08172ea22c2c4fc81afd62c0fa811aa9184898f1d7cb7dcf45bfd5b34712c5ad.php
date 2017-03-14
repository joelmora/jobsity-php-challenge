<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_03a32b85401f7045aab18ef7fc5362fa27f01fc8ebb7e0dfd2c0cca5687ea159 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a9e4e084a1e13022b99920a5e47a005c3819f99113f9a30f25e650bcbe2e40c = $this->env->getExtension("native_profiler");
        $__internal_2a9e4e084a1e13022b99920a5e47a005c3819f99113f9a30f25e650bcbe2e40c->enter($__internal_2a9e4e084a1e13022b99920a5e47a005c3819f99113f9a30f25e650bcbe2e40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a9e4e084a1e13022b99920a5e47a005c3819f99113f9a30f25e650bcbe2e40c->leave($__internal_2a9e4e084a1e13022b99920a5e47a005c3819f99113f9a30f25e650bcbe2e40c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6402e214ef9ca61a3c3f2e6805e77d2f005ce3ebb8554df7b92bbf6fd427dfca = $this->env->getExtension("native_profiler");
        $__internal_6402e214ef9ca61a3c3f2e6805e77d2f005ce3ebb8554df7b92bbf6fd427dfca->enter($__internal_6402e214ef9ca61a3c3f2e6805e77d2f005ce3ebb8554df7b92bbf6fd427dfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6402e214ef9ca61a3c3f2e6805e77d2f005ce3ebb8554df7b92bbf6fd427dfca->leave($__internal_6402e214ef9ca61a3c3f2e6805e77d2f005ce3ebb8554df7b92bbf6fd427dfca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbd3d1adc927e2f5f69fafcaaf5442775249a1e020a6f2f544613514478acb29 = $this->env->getExtension("native_profiler");
        $__internal_bbd3d1adc927e2f5f69fafcaaf5442775249a1e020a6f2f544613514478acb29->enter($__internal_bbd3d1adc927e2f5f69fafcaaf5442775249a1e020a6f2f544613514478acb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bbd3d1adc927e2f5f69fafcaaf5442775249a1e020a6f2f544613514478acb29->leave($__internal_bbd3d1adc927e2f5f69fafcaaf5442775249a1e020a6f2f544613514478acb29_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1057c3eecc8ba6c2bb9bb82f349e2434eac7c9e6a614c26774acc9254026d87d = $this->env->getExtension("native_profiler");
        $__internal_1057c3eecc8ba6c2bb9bb82f349e2434eac7c9e6a614c26774acc9254026d87d->enter($__internal_1057c3eecc8ba6c2bb9bb82f349e2434eac7c9e6a614c26774acc9254026d87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1057c3eecc8ba6c2bb9bb82f349e2434eac7c9e6a614c26774acc9254026d87d->leave($__internal_1057c3eecc8ba6c2bb9bb82f349e2434eac7c9e6a614c26774acc9254026d87d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
