<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_dd9ae3bebfed8da7dfb904f48e219c77a1d38eb636a1c20e4a5714a4f54299d8 extends Twig_Template
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
        $__internal_3585becbfd818f33e6a5c35f352065eb51b18e0b185d43e8e8b750befea05283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3585becbfd818f33e6a5c35f352065eb51b18e0b185d43e8e8b750befea05283->enter($__internal_3585becbfd818f33e6a5c35f352065eb51b18e0b185d43e8e8b750befea05283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_65bd39a4126e16ec806e5a9fb51c058a3b66f10defe554cb79d46266dc8fd309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65bd39a4126e16ec806e5a9fb51c058a3b66f10defe554cb79d46266dc8fd309->enter($__internal_65bd39a4126e16ec806e5a9fb51c058a3b66f10defe554cb79d46266dc8fd309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_3585becbfd818f33e6a5c35f352065eb51b18e0b185d43e8e8b750befea05283->leave($__internal_3585becbfd818f33e6a5c35f352065eb51b18e0b185d43e8e8b750befea05283_prof);

        
        $__internal_65bd39a4126e16ec806e5a9fb51c058a3b66f10defe554cb79d46266dc8fd309->leave($__internal_65bd39a4126e16ec806e5a9fb51c058a3b66f10defe554cb79d46266dc8fd309_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
