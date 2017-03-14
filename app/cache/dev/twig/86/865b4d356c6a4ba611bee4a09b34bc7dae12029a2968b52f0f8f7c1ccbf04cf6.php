<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9cad3260b3257de308322dc6831af611cf9d536a676b7895b42f3d83579fd13f extends Twig_Template
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
        $__internal_249a539f4e430378f3e2a48d1ac532af12856b62a93ddc7e3921deae0d2fe0d9 = $this->env->getExtension("native_profiler");
        $__internal_249a539f4e430378f3e2a48d1ac532af12856b62a93ddc7e3921deae0d2fe0d9->enter($__internal_249a539f4e430378f3e2a48d1ac532af12856b62a93ddc7e3921deae0d2fe0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_249a539f4e430378f3e2a48d1ac532af12856b62a93ddc7e3921deae0d2fe0d9->leave($__internal_249a539f4e430378f3e2a48d1ac532af12856b62a93ddc7e3921deae0d2fe0d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
