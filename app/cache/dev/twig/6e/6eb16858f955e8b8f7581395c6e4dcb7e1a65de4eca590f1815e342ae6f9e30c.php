<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3321a7b9c7134183723b276a3672c1192cba2969ec1bf5cec31e7271e5d5f581 extends Twig_Template
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
        $__internal_b43ec90f2e78fdeb83b2b98bf1ccf6d755136c81e45edd4410d6d2d22ef0faca = $this->env->getExtension("native_profiler");
        $__internal_b43ec90f2e78fdeb83b2b98bf1ccf6d755136c81e45edd4410d6d2d22ef0faca->enter($__internal_b43ec90f2e78fdeb83b2b98bf1ccf6d755136c81e45edd4410d6d2d22ef0faca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b43ec90f2e78fdeb83b2b98bf1ccf6d755136c81e45edd4410d6d2d22ef0faca->leave($__internal_b43ec90f2e78fdeb83b2b98bf1ccf6d755136c81e45edd4410d6d2d22ef0faca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
