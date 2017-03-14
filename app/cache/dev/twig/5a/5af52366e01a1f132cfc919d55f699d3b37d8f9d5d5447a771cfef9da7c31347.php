<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4d26d969be43ec30bf68240c8d319de6b69ae76c95413e121d79851a4c9e07f5 extends Twig_Template
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
        $__internal_6574148792baa16f4ea5d5a49ebf031fd626664985473f7468590d9652a9649a = $this->env->getExtension("native_profiler");
        $__internal_6574148792baa16f4ea5d5a49ebf031fd626664985473f7468590d9652a9649a->enter($__internal_6574148792baa16f4ea5d5a49ebf031fd626664985473f7468590d9652a9649a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6574148792baa16f4ea5d5a49ebf031fd626664985473f7468590d9652a9649a->leave($__internal_6574148792baa16f4ea5d5a49ebf031fd626664985473f7468590d9652a9649a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
