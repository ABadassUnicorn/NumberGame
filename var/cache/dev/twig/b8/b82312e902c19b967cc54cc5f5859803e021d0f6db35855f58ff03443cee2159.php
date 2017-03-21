<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b19c7ae51a48cb99f383fb2c1b2ef27ca885d3e48ca971ea42cc8a35fcb77e52 extends Twig_Template
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
        $__internal_35ecb20b524d2121b2dd53d89081412a667a70e8408d9aaf0050e6ddc54c8556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ecb20b524d2121b2dd53d89081412a667a70e8408d9aaf0050e6ddc54c8556->enter($__internal_35ecb20b524d2121b2dd53d89081412a667a70e8408d9aaf0050e6ddc54c8556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_70bcf54d291652ba59b6e1b34ae5fefa019772827505aeef0ecd5ce75fdcf956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70bcf54d291652ba59b6e1b34ae5fefa019772827505aeef0ecd5ce75fdcf956->enter($__internal_70bcf54d291652ba59b6e1b34ae5fefa019772827505aeef0ecd5ce75fdcf956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_35ecb20b524d2121b2dd53d89081412a667a70e8408d9aaf0050e6ddc54c8556->leave($__internal_35ecb20b524d2121b2dd53d89081412a667a70e8408d9aaf0050e6ddc54c8556_prof);

        
        $__internal_70bcf54d291652ba59b6e1b34ae5fefa019772827505aeef0ecd5ce75fdcf956->leave($__internal_70bcf54d291652ba59b6e1b34ae5fefa019772827505aeef0ecd5ce75fdcf956_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
