<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_35a296c34f18b623d7f2f7b985bd17ac8cefee0400e313310caceb47a38632d2 extends Twig_Template
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
        $__internal_4556eff47e628db5fb5192af4cab53a241526f9deaeba40c15050a9fd52c8465 = $this->env->getExtension("native_profiler");
        $__internal_4556eff47e628db5fb5192af4cab53a241526f9deaeba40c15050a9fd52c8465->enter($__internal_4556eff47e628db5fb5192af4cab53a241526f9deaeba40c15050a9fd52c8465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4556eff47e628db5fb5192af4cab53a241526f9deaeba40c15050a9fd52c8465->leave($__internal_4556eff47e628db5fb5192af4cab53a241526f9deaeba40c15050a9fd52c8465_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
