<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ff5b379acc615d13e42a52647ecad625e3af22cfa281758333c93c17d0941e04 extends Twig_Template
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
        $__internal_b28f0265625111674df7c9f45b81893b701c449f4996d19918fb3dc857d81102 = $this->env->getExtension("native_profiler");
        $__internal_b28f0265625111674df7c9f45b81893b701c449f4996d19918fb3dc857d81102->enter($__internal_b28f0265625111674df7c9f45b81893b701c449f4996d19918fb3dc857d81102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b28f0265625111674df7c9f45b81893b701c449f4996d19918fb3dc857d81102->leave($__internal_b28f0265625111674df7c9f45b81893b701c449f4996d19918fb3dc857d81102_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
