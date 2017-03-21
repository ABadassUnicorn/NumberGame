<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_3932a07b270760664e60908fb69e6307e32f27adc74666e398e269b5318a00ba extends Twig_Template
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
        $__internal_7a82c47cf2fd998bc5bd2a43ad435d8ed391cc3808a8d07c6fd3bb1dbab366f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a82c47cf2fd998bc5bd2a43ad435d8ed391cc3808a8d07c6fd3bb1dbab366f0->enter($__internal_7a82c47cf2fd998bc5bd2a43ad435d8ed391cc3808a8d07c6fd3bb1dbab366f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_b309a784732354b11342975647effcef6a3a3a2b5c13b77f1916da7a9f39b1c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b309a784732354b11342975647effcef6a3a3a2b5c13b77f1916da7a9f39b1c3->enter($__internal_b309a784732354b11342975647effcef6a3a3a2b5c13b77f1916da7a9f39b1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_7a82c47cf2fd998bc5bd2a43ad435d8ed391cc3808a8d07c6fd3bb1dbab366f0->leave($__internal_7a82c47cf2fd998bc5bd2a43ad435d8ed391cc3808a8d07c6fd3bb1dbab366f0_prof);

        
        $__internal_b309a784732354b11342975647effcef6a3a3a2b5c13b77f1916da7a9f39b1c3->leave($__internal_b309a784732354b11342975647effcef6a3a3a2b5c13b77f1916da7a9f39b1c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
