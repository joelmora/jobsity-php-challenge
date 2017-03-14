<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_5db5f4abe3dedae7af5fb8bd2a643f01073da3f6695944677dc4cdaf8cb3ff2e extends Twig_Template
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
        $__internal_c25ae75988d5ddc9d4f946b0d4712f24a1112618c6cd1626a37f85b4b2a2b944 = $this->env->getExtension("native_profiler");
        $__internal_c25ae75988d5ddc9d4f946b0d4712f24a1112618c6cd1626a37f85b4b2a2b944->enter($__internal_c25ae75988d5ddc9d4f946b0d4712f24a1112618c6cd1626a37f85b4b2a2b944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c25ae75988d5ddc9d4f946b0d4712f24a1112618c6cd1626a37f85b4b2a2b944->leave($__internal_c25ae75988d5ddc9d4f946b0d4712f24a1112618c6cd1626a37f85b4b2a2b944_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
