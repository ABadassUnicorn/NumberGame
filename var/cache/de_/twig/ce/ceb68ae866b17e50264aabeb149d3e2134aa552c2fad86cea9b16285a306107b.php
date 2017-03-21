<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_651b8586c6b4c057f5cf52c341ad7302f28d869f0332b6e310e3001bb5b2b108 extends Twig_Template
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
        $__internal_dd081ff90ee607644142ff65ce303473ae18848960caf92ac700d67bbb8c8e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd081ff90ee607644142ff65ce303473ae18848960caf92ac700d67bbb8c8e6e->enter($__internal_dd081ff90ee607644142ff65ce303473ae18848960caf92ac700d67bbb8c8e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_38214e4cdaa87f1f8bd8e6c7035539f73030784266809d08b019143ba08856f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38214e4cdaa87f1f8bd8e6c7035539f73030784266809d08b019143ba08856f6->enter($__internal_38214e4cdaa87f1f8bd8e6c7035539f73030784266809d08b019143ba08856f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_dd081ff90ee607644142ff65ce303473ae18848960caf92ac700d67bbb8c8e6e->leave($__internal_dd081ff90ee607644142ff65ce303473ae18848960caf92ac700d67bbb8c8e6e_prof);

        
        $__internal_38214e4cdaa87f1f8bd8e6c7035539f73030784266809d08b019143ba08856f6->leave($__internal_38214e4cdaa87f1f8bd8e6c7035539f73030784266809d08b019143ba08856f6_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
