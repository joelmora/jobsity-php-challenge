<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3f3b20a615e5ea0317053f3ec43995510e025171d6f67fab56890ebd98cc6fc8 extends Twig_Template
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
        $__internal_99f53a85c7bd64c3605f500e5f475bb72d155e3a3f90ac49a43c578854befa2c = $this->env->getExtension("native_profiler");
        $__internal_99f53a85c7bd64c3605f500e5f475bb72d155e3a3f90ac49a43c578854befa2c->enter($__internal_99f53a85c7bd64c3605f500e5f475bb72d155e3a3f90ac49a43c578854befa2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_99f53a85c7bd64c3605f500e5f475bb72d155e3a3f90ac49a43c578854befa2c->leave($__internal_99f53a85c7bd64c3605f500e5f475bb72d155e3a3f90ac49a43c578854befa2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
