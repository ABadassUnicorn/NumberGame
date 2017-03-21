<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_09f9ff678acb408626932cf2de9f742cda2b9fa2721a0e68c32646921238713e extends Twig_Template
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
        $__internal_fbcccf781e8dac63a2be252ce0663fe7da3363d169f1d9bb59bca56ac3adb47f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbcccf781e8dac63a2be252ce0663fe7da3363d169f1d9bb59bca56ac3adb47f->enter($__internal_fbcccf781e8dac63a2be252ce0663fe7da3363d169f1d9bb59bca56ac3adb47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_29b35b8b474e3019e3eb0bbfd041a99510ad513b6811d574d2d07855c5c4ec64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b35b8b474e3019e3eb0bbfd041a99510ad513b6811d574d2d07855c5c4ec64->enter($__internal_29b35b8b474e3019e3eb0bbfd041a99510ad513b6811d574d2d07855c5c4ec64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_fbcccf781e8dac63a2be252ce0663fe7da3363d169f1d9bb59bca56ac3adb47f->leave($__internal_fbcccf781e8dac63a2be252ce0663fe7da3363d169f1d9bb59bca56ac3adb47f_prof);

        
        $__internal_29b35b8b474e3019e3eb0bbfd041a99510ad513b6811d574d2d07855c5c4ec64->leave($__internal_29b35b8b474e3019e3eb0bbfd041a99510ad513b6811d574d2d07855c5c4ec64_prof);

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
", "@Framework/Form/choice_options.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
