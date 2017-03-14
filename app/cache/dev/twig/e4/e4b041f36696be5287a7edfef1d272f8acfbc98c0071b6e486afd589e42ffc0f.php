<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f6c97d21c441a4ca21329e4df48c4018ea7f5f401c8a303c2e7ec7b1330800fd extends Twig_Template
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
        $__internal_f9401c391b414d89b5f9c889e833805b34a5c4e5f514cd74ab43f58649a74931 = $this->env->getExtension("native_profiler");
        $__internal_f9401c391b414d89b5f9c889e833805b34a5c4e5f514cd74ab43f58649a74931->enter($__internal_f9401c391b414d89b5f9c889e833805b34a5c4e5f514cd74ab43f58649a74931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f9401c391b414d89b5f9c889e833805b34a5c4e5f514cd74ab43f58649a74931->leave($__internal_f9401c391b414d89b5f9c889e833805b34a5c4e5f514cd74ab43f58649a74931_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
