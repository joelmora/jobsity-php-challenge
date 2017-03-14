<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5d41a63ee12e0145a028a35393cfc304b368a17aeca5adefd90a965c07a1661c extends Twig_Template
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
        $__internal_7691c29318fcf62c44b28df99742bdd67f11e39f383fa7dc402fde12e888a88b = $this->env->getExtension("native_profiler");
        $__internal_7691c29318fcf62c44b28df99742bdd67f11e39f383fa7dc402fde12e888a88b->enter($__internal_7691c29318fcf62c44b28df99742bdd67f11e39f383fa7dc402fde12e888a88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7691c29318fcf62c44b28df99742bdd67f11e39f383fa7dc402fde12e888a88b->leave($__internal_7691c29318fcf62c44b28df99742bdd67f11e39f383fa7dc402fde12e888a88b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
