<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_303e28ff35042db5b618315ec5672e55dcf16fcfa2fc6927f4e2350cb1302812 extends Twig_Template
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
        $__internal_8effbda8bf6f5da379bc2f7f16a5f4b226261183cc29859dc68a1283ac8cab58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8effbda8bf6f5da379bc2f7f16a5f4b226261183cc29859dc68a1283ac8cab58->enter($__internal_8effbda8bf6f5da379bc2f7f16a5f4b226261183cc29859dc68a1283ac8cab58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1d612c4905916e61e0c951e2d8870b6d94c95038db1656632e3cc4f8539b096d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d612c4905916e61e0c951e2d8870b6d94c95038db1656632e3cc4f8539b096d->enter($__internal_1d612c4905916e61e0c951e2d8870b6d94c95038db1656632e3cc4f8539b096d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8effbda8bf6f5da379bc2f7f16a5f4b226261183cc29859dc68a1283ac8cab58->leave($__internal_8effbda8bf6f5da379bc2f7f16a5f4b226261183cc29859dc68a1283ac8cab58_prof);

        
        $__internal_1d612c4905916e61e0c951e2d8870b6d94c95038db1656632e3cc4f8539b096d->leave($__internal_1d612c4905916e61e0c951e2d8870b6d94c95038db1656632e3cc4f8539b096d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
