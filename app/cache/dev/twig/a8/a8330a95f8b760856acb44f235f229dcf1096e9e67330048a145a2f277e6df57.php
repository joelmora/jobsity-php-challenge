<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_89a4166e4898fe772f21b65228e50c53fef0e21d705cc20a3278cf70cd3761e0 extends Twig_Template
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
        $__internal_7b65124d8cf0b35f88208afd7eb32c27f793e6558e660bb430f51592d2c1dbfa = $this->env->getExtension("native_profiler");
        $__internal_7b65124d8cf0b35f88208afd7eb32c27f793e6558e660bb430f51592d2c1dbfa->enter($__internal_7b65124d8cf0b35f88208afd7eb32c27f793e6558e660bb430f51592d2c1dbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7b65124d8cf0b35f88208afd7eb32c27f793e6558e660bb430f51592d2c1dbfa->leave($__internal_7b65124d8cf0b35f88208afd7eb32c27f793e6558e660bb430f51592d2c1dbfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
