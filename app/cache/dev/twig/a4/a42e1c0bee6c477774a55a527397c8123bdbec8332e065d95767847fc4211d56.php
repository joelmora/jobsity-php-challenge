<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c44cc71f54065e682969969b0994fb1520a8a2b915a70b292b8cced8bf01d8fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31a41027c4a511342b40d9212c38570f9380985eea15f9a5fdbc3abfff834699 = $this->env->getExtension("native_profiler");
        $__internal_31a41027c4a511342b40d9212c38570f9380985eea15f9a5fdbc3abfff834699->enter($__internal_31a41027c4a511342b40d9212c38570f9380985eea15f9a5fdbc3abfff834699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_31a41027c4a511342b40d9212c38570f9380985eea15f9a5fdbc3abfff834699->leave($__internal_31a41027c4a511342b40d9212c38570f9380985eea15f9a5fdbc3abfff834699_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_767426a5b70e08f585adf17466adb03bb827949fb5010b561f18371851703bdb = $this->env->getExtension("native_profiler");
        $__internal_767426a5b70e08f585adf17466adb03bb827949fb5010b561f18371851703bdb->enter($__internal_767426a5b70e08f585adf17466adb03bb827949fb5010b561f18371851703bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_767426a5b70e08f585adf17466adb03bb827949fb5010b561f18371851703bdb->leave($__internal_767426a5b70e08f585adf17466adb03bb827949fb5010b561f18371851703bdb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
