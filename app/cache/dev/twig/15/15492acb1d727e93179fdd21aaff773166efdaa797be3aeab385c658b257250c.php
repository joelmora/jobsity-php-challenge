<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_759bf370c34f7c9b7f20e8d54b5c4e60663b592705a4df2fce1bc277bcac0755 extends Twig_Template
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
        $__internal_3620064d22c69da9a0733b00565c8904bbf238fd3d6ad1d3740855e03373140b = $this->env->getExtension("native_profiler");
        $__internal_3620064d22c69da9a0733b00565c8904bbf238fd3d6ad1d3740855e03373140b->enter($__internal_3620064d22c69da9a0733b00565c8904bbf238fd3d6ad1d3740855e03373140b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3620064d22c69da9a0733b00565c8904bbf238fd3d6ad1d3740855e03373140b->leave($__internal_3620064d22c69da9a0733b00565c8904bbf238fd3d6ad1d3740855e03373140b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
