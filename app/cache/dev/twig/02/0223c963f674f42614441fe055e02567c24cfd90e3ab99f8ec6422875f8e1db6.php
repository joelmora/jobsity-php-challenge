<?php

/* AppBundle:entry:edit.html.twig */
class __TwigTemplate_b8573cc287df6cf0d113a2465d871e990567e2bacc89a9d56be4c0aeff6b5a78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:entry:edit.html.twig", 2);
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
        $__internal_52b0fac724109bf5961355e75a3b7a8e39bc2a5ebd421a6936de90d684e302b8 = $this->env->getExtension("native_profiler");
        $__internal_52b0fac724109bf5961355e75a3b7a8e39bc2a5ebd421a6936de90d684e302b8->enter($__internal_52b0fac724109bf5961355e75a3b7a8e39bc2a5ebd421a6936de90d684e302b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:entry:edit.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52b0fac724109bf5961355e75a3b7a8e39bc2a5ebd421a6936de90d684e302b8->leave($__internal_52b0fac724109bf5961355e75a3b7a8e39bc2a5ebd421a6936de90d684e302b8_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6038060f882a9dc8bd8b1b2a8cbb141132e4e8667d7e33f465f93a04b41fff5 = $this->env->getExtension("native_profiler");
        $__internal_b6038060f882a9dc8bd8b1b2a8cbb141132e4e8667d7e33f465f93a04b41fff5->enter($__internal_b6038060f882a9dc8bd8b1b2a8cbb141132e4e8667d7e33f465f93a04b41fff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Edit Entry
";
        
        $__internal_b6038060f882a9dc8bd8b1b2a8cbb141132e4e8667d7e33f465f93a04b41fff5->leave($__internal_b6038060f882a9dc8bd8b1b2a8cbb141132e4e8667d7e33f465f93a04b41fff5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a727dde51fd9da0726946f69eaa5e7e5a4c990875b3dcb39d9bf4ef8b7075b1 = $this->env->getExtension("native_profiler");
        $__internal_6a727dde51fd9da0726946f69eaa5e7e5a4c990875b3dcb39d9bf4ef8b7075b1->enter($__internal_6a727dde51fd9da0726946f69eaa5e7e5a4c990875b3dcb39d9bf4ef8b7075b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-sm-2\">
        </div>
        <div class=\"col-sm-10\">
            <h3>Edit Entry</h3>
        </div>
    </div>

    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'row');
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "content", array()), 'row');
        echo "

    <a class=\"action-button btn btn-default btn-sm\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("entry_index");
        echo "\">Back to the list</a>

    <div class=\"action-button\">
        ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        <button class=\"btn btn-info btn-sm\" type=\"submit\">Edit</button>
        ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>

    <div class=\"action-button\">
        ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <button class=\"btn btn-danger btn-sm\" type=\"submit\">Delete</button>
        ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_6a727dde51fd9da0726946f69eaa5e7e5a4c990875b3dcb39d9bf4ef8b7075b1->leave($__internal_6a727dde51fd9da0726946f69eaa5e7e5a4c990875b3dcb39d9bf4ef8b7075b1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:entry:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 34,  104 => 32,  97 => 28,  92 => 26,  86 => 23,  81 => 21,  77 => 20,  72 => 18,  68 => 17,  58 => 9,  52 => 8,  44 => 5,  38 => 4,  31 => 2,  29 => 1,  11 => 2,);
    }
}
/* {% form_theme edit_form 'bootstrap_3_horizontal_layout.html.twig' %}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Edit Entry*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-sm-2">*/
/*         </div>*/
/*         <div class="col-sm-10">*/
/*             <h3>Edit Entry</h3>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*     {{ form_errors(edit_form) }}*/
/* */
/*     {{ form_row(edit_form.title) }}*/
/*     {{ form_row(edit_form.content) }}*/
/* */
/*     <a class="action-button btn btn-default btn-sm" href="{{ path('entry_index') }}">Back to the list</a>*/
/* */
/*     <div class="action-button">*/
/*         {{ form_start(edit_form) }}*/
/*         <button class="btn btn-info btn-sm" type="submit">Edit</button>*/
/*         {{ form_end(edit_form) }}*/
/*     </div>*/
/* */
/*     <div class="action-button">*/
/*         {{ form_start(delete_form) }}*/
/*         <button class="btn btn-danger btn-sm" type="submit">Delete</button>*/
/*         {{ form_end(delete_form) }}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
