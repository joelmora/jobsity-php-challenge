<?php

/* AppBundle:entry:show.html.twig */
class __TwigTemplate_76899f0176a049224b4e70a82f2d0b40c060799974fa72569da687ad17c97c27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:entry:show.html.twig", 1);
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
        $__internal_d13f69a5e6d933cae435f003b75739f7be979fc79a387c8a98e0285e86037bc7 = $this->env->getExtension("native_profiler");
        $__internal_d13f69a5e6d933cae435f003b75739f7be979fc79a387c8a98e0285e86037bc7->enter($__internal_d13f69a5e6d933cae435f003b75739f7be979fc79a387c8a98e0285e86037bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:entry:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d13f69a5e6d933cae435f003b75739f7be979fc79a387c8a98e0285e86037bc7->leave($__internal_d13f69a5e6d933cae435f003b75739f7be979fc79a387c8a98e0285e86037bc7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b48225eb2dc49a74ffdcaaa2359fcd2a7d85f4430fba7eb35bcb8f235ced7261 = $this->env->getExtension("native_profiler");
        $__internal_b48225eb2dc49a74ffdcaaa2359fcd2a7d85f4430fba7eb35bcb8f235ced7261->enter($__internal_b48225eb2dc49a74ffdcaaa2359fcd2a7d85f4430fba7eb35bcb8f235ced7261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Show Entry
";
        
        $__internal_b48225eb2dc49a74ffdcaaa2359fcd2a7d85f4430fba7eb35bcb8f235ced7261->leave($__internal_b48225eb2dc49a74ffdcaaa2359fcd2a7d85f4430fba7eb35bcb8f235ced7261_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_77257e87cad2a5926b59cfda884395f5f151cc4aabbd1797d8dcdc0c0265ea3a = $this->env->getExtension("native_profiler");
        $__internal_77257e87cad2a5926b59cfda884395f5f151cc4aabbd1797d8dcdc0c0265ea3a->enter($__internal_77257e87cad2a5926b59cfda884395f5f151cc4aabbd1797d8dcdc0c0265ea3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h3>Entry <i>'";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title", array()), "html", null, true);
        echo "'</i></h3>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Title</th>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Author</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Content</th>
            <td>
                <p>
                    ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "content", array()), "html", null, true);
        echo "
                </p>
            </td>
        </tr>
        <tr>
            <th>Creation Date</th>
            <td>";
        // line 30
        if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "creationDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "creationDate", array()), "m/d/Y h:i A"), "html", null, true);
        }
        echo "</td>
        </tr>
        </tbody>
    </table>

    <a class=\"action-button btn btn-default btn-sm\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("entry_index");
        echo "\">Back to the list</a>
    <a class=\"action-button btn btn-info btn-sm\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entry_edit", array("id" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id", array()))), "html", null, true);
        echo "\">Edit</a>

    <div class=\"action-button\">
        ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <button class=\"btn btn-danger btn-sm\" type=\"submit\">Delete</button>
        ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_77257e87cad2a5926b59cfda884395f5f151cc4aabbd1797d8dcdc0c0265ea3a->leave($__internal_77257e87cad2a5926b59cfda884395f5f151cc4aabbd1797d8dcdc0c0265ea3a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:entry:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 41,  110 => 39,  104 => 36,  100 => 35,  90 => 30,  81 => 24,  72 => 18,  65 => 14,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Show Entry*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h3>Entry <i>'{{ entry.title }}'</i></h3>*/
/* */
/*     <table class="table">*/
/*         <tbody>*/
/*         <tr>*/
/*             <th>Title</th>*/
/*             <td>{{ entry.title }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Author</th>*/
/*             <td>{{ entry.user.username }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Content</th>*/
/*             <td>*/
/*                 <p>*/
/*                     {{ entry.content }}*/
/*                 </p>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Creation Date</th>*/
/*             <td>{% if entry.creationDate %}{{ entry.creationDate|date('m/d/Y h:i A') }}{% endif %}</td>*/
/*         </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <a class="action-button btn btn-default btn-sm" href="{{ path('entry_index') }}">Back to the list</a>*/
/*     <a class="action-button btn btn-info btn-sm" href="{{ path('entry_edit', { 'id': entry.id }) }}">Edit</a>*/
/* */
/*     <div class="action-button">*/
/*         {{ form_start(delete_form) }}*/
/*         <button class="btn btn-danger btn-sm" type="submit">Delete</button>*/
/*         {{ form_end(delete_form) }}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
