<?php

/* AppBundle:user:index.html.twig */
class __TwigTemplate_687410300982e76c62524937d070aa4677ae53adb62cea037c9534d298ce67cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:user:index.html.twig", 1);
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
        $__internal_c6f7007b87cd69292e29929a841a632f40bdcab2b54d21525f997af21f8d6537 = $this->env->getExtension("native_profiler");
        $__internal_c6f7007b87cd69292e29929a841a632f40bdcab2b54d21525f997af21f8d6537->enter($__internal_c6f7007b87cd69292e29929a841a632f40bdcab2b54d21525f997af21f8d6537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6f7007b87cd69292e29929a841a632f40bdcab2b54d21525f997af21f8d6537->leave($__internal_c6f7007b87cd69292e29929a841a632f40bdcab2b54d21525f997af21f8d6537_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44b22fa5ec61ada43c01be38668a1e2e2c3a7e33401941fb0b431e7e294a21ad = $this->env->getExtension("native_profiler");
        $__internal_44b22fa5ec61ada43c01be38668a1e2e2c3a7e33401941fb0b431e7e294a21ad->enter($__internal_44b22fa5ec61ada43c01be38668a1e2e2c3a7e33401941fb0b431e7e294a21ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h3>User list</h3>

    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Twitter</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "twitter", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-default btn-xs\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">Show</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>

";
        
        $__internal_44b22fa5ec61ada43c01be38668a1e2e2c3a7e33401941fb0b431e7e294a21ad->leave($__internal_44b22fa5ec61ada43c01be38668a1e2e2c3a7e33401941fb0b431e7e294a21ad_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  74 => 22,  69 => 20,  65 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h3>User list</h3>*/
/* */
/*     <table class="table table-striped">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>Username</th>*/
/*             <th>Email</th>*/
/*             <th>Twitter</th>*/
/*             <th>Actions</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for user in users %}*/
/*             <tr>*/
/*                 <td>{{ user.username }}</td>*/
/*                 <td>{{ user.email }}</td>*/
/*                 <td>{{ user.twitter }}</td>*/
/*                 <td>*/
/*                     <a class="btn btn-default btn-xs" href="{{ path('user_show', { 'id': user.id }) }}">Show</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* {% endblock %}*/
/* */
