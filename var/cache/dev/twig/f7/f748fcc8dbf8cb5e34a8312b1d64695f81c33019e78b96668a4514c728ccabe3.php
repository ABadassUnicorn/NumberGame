<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_851653944c9dfcea7b6835b1f58e76e44475aedf5191a1c73d96943cd5713cf4 extends Twig_Template
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
        $__internal_84f2bd7d2f6042eee6d2f88e121ce45ded7edfc25530ded788c6b3640875086b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f2bd7d2f6042eee6d2f88e121ce45ded7edfc25530ded788c6b3640875086b->enter($__internal_84f2bd7d2f6042eee6d2f88e121ce45ded7edfc25530ded788c6b3640875086b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_59be88e39b99fe5dcce1feed16638ea8229405542213bc65f15f6d4d389a3628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59be88e39b99fe5dcce1feed16638ea8229405542213bc65f15f6d4d389a3628->enter($__internal_59be88e39b99fe5dcce1feed16638ea8229405542213bc65f15f6d4d389a3628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_84f2bd7d2f6042eee6d2f88e121ce45ded7edfc25530ded788c6b3640875086b->leave($__internal_84f2bd7d2f6042eee6d2f88e121ce45ded7edfc25530ded788c6b3640875086b_prof);

        
        $__internal_59be88e39b99fe5dcce1feed16638ea8229405542213bc65f15f6d4d389a3628->leave($__internal_59be88e39b99fe5dcce1feed16638ea8229405542213bc65f15f6d4d389a3628_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
