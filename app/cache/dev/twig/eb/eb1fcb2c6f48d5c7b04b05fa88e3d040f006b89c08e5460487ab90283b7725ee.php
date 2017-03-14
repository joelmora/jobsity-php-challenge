<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_56ad9e4d832f782c64ea3ef06602002663725b79ff1a2880b2c03314f6fab2dc extends Twig_Template
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
        $__internal_eb82e93e945bd466139668b0817c91028d3905459aebd6b6aab50318c52b6d95 = $this->env->getExtension("native_profiler");
        $__internal_eb82e93e945bd466139668b0817c91028d3905459aebd6b6aab50318c52b6d95->enter($__internal_eb82e93e945bd466139668b0817c91028d3905459aebd6b6aab50318c52b6d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_eb82e93e945bd466139668b0817c91028d3905459aebd6b6aab50318c52b6d95->leave($__internal_eb82e93e945bd466139668b0817c91028d3905459aebd6b6aab50318c52b6d95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
