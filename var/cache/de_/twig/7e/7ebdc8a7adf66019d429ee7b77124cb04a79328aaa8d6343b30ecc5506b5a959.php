<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c10372c3892f271f842d27a50cbc72aeb126c75583ab4c3967b962f52ef1938f extends Twig_Template
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
        $__internal_3dbc0f0020bc2d22c63483c9f231b589c0d3dfa98108c09647483144d07b2d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dbc0f0020bc2d22c63483c9f231b589c0d3dfa98108c09647483144d07b2d0a->enter($__internal_3dbc0f0020bc2d22c63483c9f231b589c0d3dfa98108c09647483144d07b2d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_a47b9213158a55d2498d4fd5da757f672d85e6bb4d7ab7224aff20fc5aa71ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47b9213158a55d2498d4fd5da757f672d85e6bb4d7ab7224aff20fc5aa71ce4->enter($__internal_a47b9213158a55d2498d4fd5da757f672d85e6bb4d7ab7224aff20fc5aa71ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_3dbc0f0020bc2d22c63483c9f231b589c0d3dfa98108c09647483144d07b2d0a->leave($__internal_3dbc0f0020bc2d22c63483c9f231b589c0d3dfa98108c09647483144d07b2d0a_prof);

        
        $__internal_a47b9213158a55d2498d4fd5da757f672d85e6bb4d7ab7224aff20fc5aa71ce4->leave($__internal_a47b9213158a55d2498d4fd5da757f672d85e6bb4d7ab7224aff20fc5aa71ce4_prof);

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
", "@Framework/Form/datetime_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
