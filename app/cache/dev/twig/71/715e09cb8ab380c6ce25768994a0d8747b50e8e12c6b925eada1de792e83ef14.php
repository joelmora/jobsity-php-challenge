<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2be932b87792312fbce7718333c22d1d595cd44a9283051dbeee158f88de24da extends Twig_Template
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
        $__internal_8dbbabffaf6f7050dd4cf874ec044fb7197b75d3a0774798104a5306cf918e3e = $this->env->getExtension("native_profiler");
        $__internal_8dbbabffaf6f7050dd4cf874ec044fb7197b75d3a0774798104a5306cf918e3e->enter($__internal_8dbbabffaf6f7050dd4cf874ec044fb7197b75d3a0774798104a5306cf918e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8dbbabffaf6f7050dd4cf874ec044fb7197b75d3a0774798104a5306cf918e3e->leave($__internal_8dbbabffaf6f7050dd4cf874ec044fb7197b75d3a0774798104a5306cf918e3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
