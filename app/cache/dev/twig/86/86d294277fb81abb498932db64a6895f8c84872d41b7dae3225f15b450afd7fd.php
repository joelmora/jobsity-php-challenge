<?php

/* AppBundle:entry:index.html.twig */
class __TwigTemplate_86b9faef46892031bfd7fdd0973dfc64d5242017dd08555542589116a2d31b7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:entry:index.html.twig", 1);
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
        $__internal_f7cf32c4290f0e78585b3c06df47103805c8547fef69aa0ef67f70186303364c = $this->env->getExtension("native_profiler");
        $__internal_f7cf32c4290f0e78585b3c06df47103805c8547fef69aa0ef67f70186303364c->enter($__internal_f7cf32c4290f0e78585b3c06df47103805c8547fef69aa0ef67f70186303364c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:entry:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7cf32c4290f0e78585b3c06df47103805c8547fef69aa0ef67f70186303364c->leave($__internal_f7cf32c4290f0e78585b3c06df47103805c8547fef69aa0ef67f70186303364c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_58e8cf48e7a1c8fc1a65c6c3723c5c1c36ef41e771fffd3b4b9ab711c0232640 = $this->env->getExtension("native_profiler");
        $__internal_58e8cf48e7a1c8fc1a65c6c3723c5c1c36ef41e771fffd3b4b9ab711c0232640->enter($__internal_58e8cf48e7a1c8fc1a65c6c3723c5c1c36ef41e771fffd3b4b9ab711c0232640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Latest Entries
";
        
        $__internal_58e8cf48e7a1c8fc1a65c6c3723c5c1c36ef41e771fffd3b4b9ab711c0232640->leave($__internal_58e8cf48e7a1c8fc1a65c6c3723c5c1c36ef41e771fffd3b4b9ab711c0232640_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fc41d6e1112335e0c15a10423c844c8f1a85680dfce57d4c43f13c67dd0d424 = $this->env->getExtension("native_profiler");
        $__internal_8fc41d6e1112335e0c15a10423c844c8f1a85680dfce57d4c43f13c67dd0d424->enter($__internal_8fc41d6e1112335e0c15a10423c844c8f1a85680dfce57d4c43f13c67dd0d424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h3>Latest Entries</h3>

    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>Author</th>
            <th>Title</th>
            <th>Content</th>
            <th>Creation Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : $this->getContext($context, "entries")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 22
            echo "            <tr>
                <td>
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entries_by_user", array("username" => $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "username", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "user", array()), "html", null, true);
            echo "</a>
                </td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["entry"], "content", array()), 0, 100) . "..."), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["entry"], "creationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "creationDate", array()), "m/d/Y h:i A"), "html", null, true);
            }
            echo "</td>
                <td>
                    <a class=\"btn btn-default btn-xs\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entry_show", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
            echo "\">Show</a>
                    ";
            // line 31
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                // line 32
                echo "                        <a class=\"btn btn-info btn-xs\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entry_edit", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\">Edit</a>
                    ";
            }
            // line 34
            echo "                    <a class=\"btn btn-default btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entries_by_user", array("username" => $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "username", array()))), "html", null, true);
            echo "\">User Entries</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    ";
        // line 41
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["entries"]) ? $context["entries"] : $this->getContext($context, "entries")));
        echo "

";
        
        $__internal_8fc41d6e1112335e0c15a10423c844c8f1a85680dfce57d4c43f13c67dd0d424->leave($__internal_8fc41d6e1112335e0c15a10423c844c8f1a85680dfce57d4c43f13c67dd0d424_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:entry:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 41,  123 => 38,  112 => 34,  106 => 32,  104 => 31,  100 => 30,  93 => 28,  89 => 27,  85 => 26,  78 => 24,  74 => 22,  70 => 21,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Latest Entries*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h3>Latest Entries</h3>*/
/* */
/*     <table class="table table-striped">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>Author</th>*/
/*             <th>Title</th>*/
/*             <th>Content</th>*/
/*             <th>Creation Date</th>*/
/*             <th>Actions</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entry in entries %}*/
/*             <tr>*/
/*                 <td>*/
/*                     <a href="{{ path('entries_by_user', { 'username': entry.user.username }) }}">{{ entry.user }}</a>*/
/*                 </td>*/
/*                 <td>{{ entry.title }}</td>*/
/*                 <td>{{ entry.content | slice(0,100) ~ '...'  }}</td>*/
/*                 <td>{% if entry.creationDate %}{{ entry.creationDate|date('m/d/Y h:i A') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <a class="btn btn-default btn-xs" href="{{ path('entry_show', { 'id': entry.id }) }}">Show</a>*/
/*                     {% if app.user %}*/
/*                         <a class="btn btn-info btn-xs" href="{{ path('entry_edit', { 'id': entry.id }) }}">Edit</a>*/
/*                     {% endif %}*/
/*                     <a class="btn btn-default btn-xs" href="{{ path('entries_by_user', { 'username': entry.user.username }) }}">User Entries</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     {{ knp_pagination_render(entries) }}*/
/* */
/* {% endblock %}*/
/* */
