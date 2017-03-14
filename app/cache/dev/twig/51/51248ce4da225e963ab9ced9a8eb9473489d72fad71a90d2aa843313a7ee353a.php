<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8cc4c4c10aafb3f93d77610652152a411688d823966093a1554dde6a9e832236 extends Twig_Template
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
        $__internal_d6271544419c72afed70da5f72384d9366f0b98925c7e8424f3c01b723205053 = $this->env->getExtension("native_profiler");
        $__internal_d6271544419c72afed70da5f72384d9366f0b98925c7e8424f3c01b723205053->enter($__internal_d6271544419c72afed70da5f72384d9366f0b98925c7e8424f3c01b723205053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d6271544419c72afed70da5f72384d9366f0b98925c7e8424f3c01b723205053->leave($__internal_d6271544419c72afed70da5f72384d9366f0b98925c7e8424f3c01b723205053_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
