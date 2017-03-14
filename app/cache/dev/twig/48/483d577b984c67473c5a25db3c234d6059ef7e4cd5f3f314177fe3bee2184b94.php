<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c982c4bffa8ed51d2c686339a3c6fac46bac128e5e328b53773aa6ec6fa7d329 extends Twig_Template
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
        $__internal_4346d4a826627bea6712eb76ef6300335bc572ba7eb7a632f428a9cd691ca507 = $this->env->getExtension("native_profiler");
        $__internal_4346d4a826627bea6712eb76ef6300335bc572ba7eb7a632f428a9cd691ca507->enter($__internal_4346d4a826627bea6712eb76ef6300335bc572ba7eb7a632f428a9cd691ca507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4346d4a826627bea6712eb76ef6300335bc572ba7eb7a632f428a9cd691ca507->leave($__internal_4346d4a826627bea6712eb76ef6300335bc572ba7eb7a632f428a9cd691ca507_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
