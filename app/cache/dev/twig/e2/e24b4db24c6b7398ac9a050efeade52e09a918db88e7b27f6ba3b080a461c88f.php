<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1018a85c75aca947bf1fc72ab3325ec021236a511004e9b70c5e0a24da5a5b86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f63cc770431bc0a40e1aa657372acdc7f18924f430c6a8cf4c1df6d99a6acab = $this->env->getExtension("native_profiler");
        $__internal_2f63cc770431bc0a40e1aa657372acdc7f18924f430c6a8cf4c1df6d99a6acab->enter($__internal_2f63cc770431bc0a40e1aa657372acdc7f18924f430c6a8cf4c1df6d99a6acab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f63cc770431bc0a40e1aa657372acdc7f18924f430c6a8cf4c1df6d99a6acab->leave($__internal_2f63cc770431bc0a40e1aa657372acdc7f18924f430c6a8cf4c1df6d99a6acab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7833985393eba4d4e94d8c9e13666cbb3bfdff43b0e6ebb117e82e7ff2b6d36c = $this->env->getExtension("native_profiler");
        $__internal_7833985393eba4d4e94d8c9e13666cbb3bfdff43b0e6ebb117e82e7ff2b6d36c->enter($__internal_7833985393eba4d4e94d8c9e13666cbb3bfdff43b0e6ebb117e82e7ff2b6d36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7833985393eba4d4e94d8c9e13666cbb3bfdff43b0e6ebb117e82e7ff2b6d36c->leave($__internal_7833985393eba4d4e94d8c9e13666cbb3bfdff43b0e6ebb117e82e7ff2b6d36c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc994cb5c1279a274acd2bcd8ddde4c52578f85386badafe3f465877b1f94ee5 = $this->env->getExtension("native_profiler");
        $__internal_cc994cb5c1279a274acd2bcd8ddde4c52578f85386badafe3f465877b1f94ee5->enter($__internal_cc994cb5c1279a274acd2bcd8ddde4c52578f85386badafe3f465877b1f94ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cc994cb5c1279a274acd2bcd8ddde4c52578f85386badafe3f465877b1f94ee5->leave($__internal_cc994cb5c1279a274acd2bcd8ddde4c52578f85386badafe3f465877b1f94ee5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60178d1ff444d7f5bc7500b9b6bb219b51f64f23f61aafd71d983be2d035efda = $this->env->getExtension("native_profiler");
        $__internal_60178d1ff444d7f5bc7500b9b6bb219b51f64f23f61aafd71d983be2d035efda->enter($__internal_60178d1ff444d7f5bc7500b9b6bb219b51f64f23f61aafd71d983be2d035efda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_60178d1ff444d7f5bc7500b9b6bb219b51f64f23f61aafd71d983be2d035efda->leave($__internal_60178d1ff444d7f5bc7500b9b6bb219b51f64f23f61aafd71d983be2d035efda_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
