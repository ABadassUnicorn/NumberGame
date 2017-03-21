<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_138921f56149fde002aa77ffe8d5942a13a62bd6f98ce1b0bea57135ebc906b6 extends Twig_Template
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
        $__internal_cd58cd8ebca23cfba520c6eaa721c8afbfb03630c0eecfb19d5bfcf7666edf2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd58cd8ebca23cfba520c6eaa721c8afbfb03630c0eecfb19d5bfcf7666edf2d->enter($__internal_cd58cd8ebca23cfba520c6eaa721c8afbfb03630c0eecfb19d5bfcf7666edf2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_0b3a2b81f2a293478733be4b82dd48f1bc40150d6099c1771ac78e0b12155be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3a2b81f2a293478733be4b82dd48f1bc40150d6099c1771ac78e0b12155be6->enter($__internal_0b3a2b81f2a293478733be4b82dd48f1bc40150d6099c1771ac78e0b12155be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cd58cd8ebca23cfba520c6eaa721c8afbfb03630c0eecfb19d5bfcf7666edf2d->leave($__internal_cd58cd8ebca23cfba520c6eaa721c8afbfb03630c0eecfb19d5bfcf7666edf2d_prof);

        
        $__internal_0b3a2b81f2a293478733be4b82dd48f1bc40150d6099c1771ac78e0b12155be6->leave($__internal_0b3a2b81f2a293478733be4b82dd48f1bc40150d6099c1771ac78e0b12155be6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
