<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_80822025569d0035d91e9476b5c7e6c823bb19bfaa7ef4db727bd515284cf222 extends Twig_Template
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
        $__internal_5c0a7f9f3d58ecf4218449c43ce79546179372be2b3a97f1582654f10c8bd622 = $this->env->getExtension("native_profiler");
        $__internal_5c0a7f9f3d58ecf4218449c43ce79546179372be2b3a97f1582654f10c8bd622->enter($__internal_5c0a7f9f3d58ecf4218449c43ce79546179372be2b3a97f1582654f10c8bd622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5c0a7f9f3d58ecf4218449c43ce79546179372be2b3a97f1582654f10c8bd622->leave($__internal_5c0a7f9f3d58ecf4218449c43ce79546179372be2b3a97f1582654f10c8bd622_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
