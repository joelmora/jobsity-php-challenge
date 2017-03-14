<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_733632d4af253a03182720a858e2866bf950474006cd2c9c52e650517c6d7a74 extends Twig_Template
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
        $__internal_acde6460010024de964ad44b570bc99ed5195b1f84ba760e6532ceeeaf0c96d3 = $this->env->getExtension("native_profiler");
        $__internal_acde6460010024de964ad44b570bc99ed5195b1f84ba760e6532ceeeaf0c96d3->enter($__internal_acde6460010024de964ad44b570bc99ed5195b1f84ba760e6532ceeeaf0c96d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_acde6460010024de964ad44b570bc99ed5195b1f84ba760e6532ceeeaf0c96d3->leave($__internal_acde6460010024de964ad44b570bc99ed5195b1f84ba760e6532ceeeaf0c96d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
