<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1a34d5a7eaaa563e6c9590f2809ae103c20a8bf35ec5e8ef13dec2d3607511f6 extends Twig_Template
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
        $__internal_88c3a2f9e6567013b4f467b69a9408d27e1c2c717c9f1f71d50c4f7908cbd16c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c3a2f9e6567013b4f467b69a9408d27e1c2c717c9f1f71d50c4f7908cbd16c->enter($__internal_88c3a2f9e6567013b4f467b69a9408d27e1c2c717c9f1f71d50c4f7908cbd16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_78ad881f3469575eafcd475ee7eba336621665069148968b28fe23567cb4c63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ad881f3469575eafcd475ee7eba336621665069148968b28fe23567cb4c63d->enter($__internal_78ad881f3469575eafcd475ee7eba336621665069148968b28fe23567cb4c63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_88c3a2f9e6567013b4f467b69a9408d27e1c2c717c9f1f71d50c4f7908cbd16c->leave($__internal_88c3a2f9e6567013b4f467b69a9408d27e1c2c717c9f1f71d50c4f7908cbd16c_prof);

        
        $__internal_78ad881f3469575eafcd475ee7eba336621665069148968b28fe23567cb4c63d->leave($__internal_78ad881f3469575eafcd475ee7eba336621665069148968b28fe23567cb4c63d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
