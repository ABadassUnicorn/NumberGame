<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e051d90edf47bde3f52a6da6296fb414f6cdf93cb6b29d3dc25a4f951df91483 extends Twig_Template
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
        $__internal_2da7fc0eaee3ca0a26dde57adc4126748c9505d4822827298463fc73f76091c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2da7fc0eaee3ca0a26dde57adc4126748c9505d4822827298463fc73f76091c9->enter($__internal_2da7fc0eaee3ca0a26dde57adc4126748c9505d4822827298463fc73f76091c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_bc67db2945a671114889bc8fe51e121ed825bbec8c9eff3e7bd8a6f321f43c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc67db2945a671114889bc8fe51e121ed825bbec8c9eff3e7bd8a6f321f43c9c->enter($__internal_bc67db2945a671114889bc8fe51e121ed825bbec8c9eff3e7bd8a6f321f43c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2da7fc0eaee3ca0a26dde57adc4126748c9505d4822827298463fc73f76091c9->leave($__internal_2da7fc0eaee3ca0a26dde57adc4126748c9505d4822827298463fc73f76091c9_prof);

        
        $__internal_bc67db2945a671114889bc8fe51e121ed825bbec8c9eff3e7bd8a6f321f43c9c->leave($__internal_bc67db2945a671114889bc8fe51e121ed825bbec8c9eff3e7bd8a6f321f43c9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
