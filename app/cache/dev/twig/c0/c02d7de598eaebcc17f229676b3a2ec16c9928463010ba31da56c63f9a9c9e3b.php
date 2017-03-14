<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6cc8264a2b203035c30871af71480e99e94284c8cb7abe819c194cb269eba4d0 extends Twig_Template
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
        $__internal_916a9a108e6a9f0beb72b105e041f0b703792667a91237e21933e42f16651c6f = $this->env->getExtension("native_profiler");
        $__internal_916a9a108e6a9f0beb72b105e041f0b703792667a91237e21933e42f16651c6f->enter($__internal_916a9a108e6a9f0beb72b105e041f0b703792667a91237e21933e42f16651c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_916a9a108e6a9f0beb72b105e041f0b703792667a91237e21933e42f16651c6f->leave($__internal_916a9a108e6a9f0beb72b105e041f0b703792667a91237e21933e42f16651c6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
