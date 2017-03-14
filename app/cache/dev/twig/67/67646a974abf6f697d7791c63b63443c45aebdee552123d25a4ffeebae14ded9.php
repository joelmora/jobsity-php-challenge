<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5f3c5637a93a40e2b7e891a470d63a0d5ce8ab490f751df1414b246e867fd4c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_cbfb75f056090f160b81e41ad7ac0b7308a6838b958ca6b03070c783281076ca = $this->env->getExtension("native_profiler");
        $__internal_cbfb75f056090f160b81e41ad7ac0b7308a6838b958ca6b03070c783281076ca->enter($__internal_cbfb75f056090f160b81e41ad7ac0b7308a6838b958ca6b03070c783281076ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbfb75f056090f160b81e41ad7ac0b7308a6838b958ca6b03070c783281076ca->leave($__internal_cbfb75f056090f160b81e41ad7ac0b7308a6838b958ca6b03070c783281076ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8760de347bcd283533193945c5f4b69f419ef1875c6be9ba88aec5302fe2a00 = $this->env->getExtension("native_profiler");
        $__internal_d8760de347bcd283533193945c5f4b69f419ef1875c6be9ba88aec5302fe2a00->enter($__internal_d8760de347bcd283533193945c5f4b69f419ef1875c6be9ba88aec5302fe2a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d8760de347bcd283533193945c5f4b69f419ef1875c6be9ba88aec5302fe2a00->leave($__internal_d8760de347bcd283533193945c5f4b69f419ef1875c6be9ba88aec5302fe2a00_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f340f0882a93e7d88d9ea33ee8d00dd659f2ff8031bd126166a7741bac9b3a2 = $this->env->getExtension("native_profiler");
        $__internal_1f340f0882a93e7d88d9ea33ee8d00dd659f2ff8031bd126166a7741bac9b3a2->enter($__internal_1f340f0882a93e7d88d9ea33ee8d00dd659f2ff8031bd126166a7741bac9b3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1f340f0882a93e7d88d9ea33ee8d00dd659f2ff8031bd126166a7741bac9b3a2->leave($__internal_1f340f0882a93e7d88d9ea33ee8d00dd659f2ff8031bd126166a7741bac9b3a2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
