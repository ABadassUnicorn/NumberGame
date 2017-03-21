<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_c413768434ae21ce0b2d68d5334d8191089d57b3a89756acb3002a2dbeff06f8 extends Twig_Template
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
        $__internal_ed0dea8b91143c0c5f9d67a9d26f293a3ea5b7bf8fc358fed74702c3ceeafa88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0dea8b91143c0c5f9d67a9d26f293a3ea5b7bf8fc358fed74702c3ceeafa88->enter($__internal_ed0dea8b91143c0c5f9d67a9d26f293a3ea5b7bf8fc358fed74702c3ceeafa88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_62228a6894d5cbba162a68ac9b8b1dea5569d28be4eb1504e2c9762e7c0b2b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62228a6894d5cbba162a68ac9b8b1dea5569d28be4eb1504e2c9762e7c0b2b18->enter($__internal_62228a6894d5cbba162a68ac9b8b1dea5569d28be4eb1504e2c9762e7c0b2b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ed0dea8b91143c0c5f9d67a9d26f293a3ea5b7bf8fc358fed74702c3ceeafa88->leave($__internal_ed0dea8b91143c0c5f9d67a9d26f293a3ea5b7bf8fc358fed74702c3ceeafa88_prof);

        
        $__internal_62228a6894d5cbba162a68ac9b8b1dea5569d28be4eb1504e2c9762e7c0b2b18->leave($__internal_62228a6894d5cbba162a68ac9b8b1dea5569d28be4eb1504e2c9762e7c0b2b18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
