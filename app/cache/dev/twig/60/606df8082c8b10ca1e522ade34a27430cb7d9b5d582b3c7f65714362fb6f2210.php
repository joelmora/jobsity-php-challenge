<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f65c9201f2b790859cac85d7725ed66e011f0e28a3396a61e8ef0fb36c57bbbe extends Twig_Template
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
        $__internal_68a6e83d104d7a45eb442559d4227500df8d93b9d578aa21e4d9a057cbcf55b4 = $this->env->getExtension("native_profiler");
        $__internal_68a6e83d104d7a45eb442559d4227500df8d93b9d578aa21e4d9a057cbcf55b4->enter($__internal_68a6e83d104d7a45eb442559d4227500df8d93b9d578aa21e4d9a057cbcf55b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_68a6e83d104d7a45eb442559d4227500df8d93b9d578aa21e4d9a057cbcf55b4->leave($__internal_68a6e83d104d7a45eb442559d4227500df8d93b9d578aa21e4d9a057cbcf55b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
