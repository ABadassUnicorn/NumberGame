<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b7625cd43281e9f3a3ebb4a8066da020a13ec1694abbe68aa45d3904080926ac extends Twig_Template
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
        $__internal_2a72381a566f1053fabe906d29598935819a5ae9fd96bc2797f680bdc27b932f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a72381a566f1053fabe906d29598935819a5ae9fd96bc2797f680bdc27b932f->enter($__internal_2a72381a566f1053fabe906d29598935819a5ae9fd96bc2797f680bdc27b932f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_923563551708a80fe9235e3edf82019825ac22e3becb5fdf7a59e20561089202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923563551708a80fe9235e3edf82019825ac22e3becb5fdf7a59e20561089202->enter($__internal_923563551708a80fe9235e3edf82019825ac22e3becb5fdf7a59e20561089202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2a72381a566f1053fabe906d29598935819a5ae9fd96bc2797f680bdc27b932f->leave($__internal_2a72381a566f1053fabe906d29598935819a5ae9fd96bc2797f680bdc27b932f_prof);

        
        $__internal_923563551708a80fe9235e3edf82019825ac22e3becb5fdf7a59e20561089202->leave($__internal_923563551708a80fe9235e3edf82019825ac22e3becb5fdf7a59e20561089202_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
