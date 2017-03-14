<?php

/* AppBundle:entry:new.html.twig */
class __TwigTemplate_b8e187e3da17efdf16dba4ecfbced0208bd07f543be70a55825bc31135847327 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:entry:new.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8f413c9ad8daa2410202993b9c180a281b8c877553bdacaeeed425f4126723e = $this->env->getExtension("native_profiler");
        $__internal_c8f413c9ad8daa2410202993b9c180a281b8c877553bdacaeeed425f4126723e->enter($__internal_c8f413c9ad8daa2410202993b9c180a281b8c877553bdacaeeed425f4126723e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:entry:new.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8f413c9ad8daa2410202993b9c180a281b8c877553bdacaeeed425f4126723e->leave($__internal_c8f413c9ad8daa2410202993b9c180a281b8c877553bdacaeeed425f4126723e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9a6c6e464df41ad9ecea1dcdeb11cef791b0bb46ec483a0959b6cdaa2f43532 = $this->env->getExtension("native_profiler");
        $__internal_e9a6c6e464df41ad9ecea1dcdeb11cef791b0bb46ec483a0959b6cdaa2f43532->enter($__internal_e9a6c6e464df41ad9ecea1dcdeb11cef791b0bb46ec483a0959b6cdaa2f43532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    New Entry
";
        
        $__internal_e9a6c6e464df41ad9ecea1dcdeb11cef791b0bb46ec483a0959b6cdaa2f43532->leave($__internal_e9a6c6e464df41ad9ecea1dcdeb11cef791b0bb46ec483a0959b6cdaa2f43532_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_edd9838ee79806353b821628b7376f117c7e50a3894069cd519121439c20209e = $this->env->getExtension("native_profiler");
        $__internal_edd9838ee79806353b821628b7376f117c7e50a3894069cd519121439c20209e->enter($__internal_edd9838ee79806353b821628b7376f117c7e50a3894069cd519121439c20209e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-sm-2\">
        </div>
        <div class=\"col-sm-10\">
            <h3>New Entry</h3>
        </div>
    </div>

    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'row');
        echo "

    <a class=\"action-button btn btn-default btn-sm\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("entry_index");
        echo "\">Back to the list</a>

    <div class=\"action-button\">
        <button class=\"btn btn-success btn-sm\" type=\"submit\">Create</button>
    </div>

";
        
        $__internal_edd9838ee79806353b821628b7376f117c7e50a3894069cd519121439c20209e->leave($__internal_edd9838ee79806353b821628b7376f117c7e50a3894069cd519121439c20209e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:entry:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 24,  85 => 22,  81 => 21,  77 => 20,  72 => 18,  68 => 17,  58 => 9,  52 => 8,  44 => 5,  38 => 4,  31 => 2,  29 => 1,  11 => 2,);
    }
}
/* {% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     New Entry*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-sm-2">*/
/*         </div>*/
/*         <div class="col-sm-10">*/
/*             <h3>New Entry</h3>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/* */
/*     {{ form_row(form._token) }}*/
/*     {{ form_row(form.title) }}*/
/*     {{ form_row(form.content) }}*/
/* */
/*     <a class="action-button btn btn-default btn-sm" href="{{ path('entry_index') }}">Back to the list</a>*/
/* */
/*     <div class="action-button">*/
/*         <button class="btn btn-success btn-sm" type="submit">Create</button>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
