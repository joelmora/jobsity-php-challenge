<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_1cae12d087a4c80253d4369729ed3cf6a10c567f6bbcade5241466930b32f441 extends Twig_Template
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
        $__internal_34d96f16de7983abcd571399b48f3d09b4f75cad2d7cabc090a53cdbd0765f1e = $this->env->getExtension("native_profiler");
        $__internal_34d96f16de7983abcd571399b48f3d09b4f75cad2d7cabc090a53cdbd0765f1e->enter($__internal_34d96f16de7983abcd571399b48f3d09b4f75cad2d7cabc090a53cdbd0765f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_34d96f16de7983abcd571399b48f3d09b4f75cad2d7cabc090a53cdbd0765f1e->leave($__internal_34d96f16de7983abcd571399b48f3d09b4f75cad2d7cabc090a53cdbd0765f1e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
