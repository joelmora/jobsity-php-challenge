<?php

/* AppBundle:user:show.html.twig */
class __TwigTemplate_e7eddd57731dfb36fd63b8bb372922e1447b0ce1aa09d29033e902edaf97059e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:user:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_174250d8bb8ee0ef9b0f2e67d3bac4e51954ead6f712e6891b9a0f611f278265 = $this->env->getExtension("native_profiler");
        $__internal_174250d8bb8ee0ef9b0f2e67d3bac4e51954ead6f712e6891b9a0f611f278265->enter($__internal_174250d8bb8ee0ef9b0f2e67d3bac4e51954ead6f712e6891b9a0f611f278265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_174250d8bb8ee0ef9b0f2e67d3bac4e51954ead6f712e6891b9a0f611f278265->leave($__internal_174250d8bb8ee0ef9b0f2e67d3bac4e51954ead6f712e6891b9a0f611f278265_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccae12c40b330f2224ffca3e73c1d95d85ce889c1b0c1fd817d11e732245d5fe = $this->env->getExtension("native_profiler");
        $__internal_ccae12c40b330f2224ffca3e73c1d95d85ce889c1b0c1fd817d11e732245d5fe->enter($__internal_ccae12c40b330f2224ffca3e73c1d95d85ce889c1b0c1fd817d11e732245d5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h3>User <i>'";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "'</i></h3>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Username</th>
            <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Twitter</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "twitter", array()), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>

    <a class=\"action-button btn btn-default btn-sm\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>

";
        
        $__internal_ccae12c40b330f2224ffca3e73c1d95d85ce889c1b0c1fd817d11e732245d5fe->leave($__internal_ccae12c40b330f2224ffca3e73c1d95d85ce889c1b0c1fd817d11e732245d5fe_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  64 => 18,  57 => 14,  50 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h3>User <i>'{{ user.username}}'</i></h3>*/
/* */
/*     <table class="table">*/
/*         <tbody>*/
/*         <tr>*/
/*             <th>Username</th>*/
/*             <td>{{ user.username }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Email</th>*/
/*             <td>{{ user.email }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Twitter</th>*/
/*             <td>{{ user.twitter }}</td>*/
/*         </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <a class="action-button btn btn-default btn-sm" href="{{ path('user_index') }}">Back to the list</a>*/
/* */
/* {% endblock %}*/
/* */
/* */
