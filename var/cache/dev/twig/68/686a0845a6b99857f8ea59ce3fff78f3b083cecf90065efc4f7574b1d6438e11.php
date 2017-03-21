<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d6146d694fa42bb249d3a76a1281a5ffe46a2919cf87c9b675e79fb1d15e4e70 extends Twig_Template
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
        $__internal_cbdc3cc9f5bd985ab41eea1dc43dd4236e238a47635173876180a6b9fecb9e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbdc3cc9f5bd985ab41eea1dc43dd4236e238a47635173876180a6b9fecb9e42->enter($__internal_cbdc3cc9f5bd985ab41eea1dc43dd4236e238a47635173876180a6b9fecb9e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ec4d043032544f345c651d2ee044cadf69b263d8c7eb38af7d88667ef7f921b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4d043032544f345c651d2ee044cadf69b263d8c7eb38af7d88667ef7f921b9->enter($__internal_ec4d043032544f345c651d2ee044cadf69b263d8c7eb38af7d88667ef7f921b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cbdc3cc9f5bd985ab41eea1dc43dd4236e238a47635173876180a6b9fecb9e42->leave($__internal_cbdc3cc9f5bd985ab41eea1dc43dd4236e238a47635173876180a6b9fecb9e42_prof);

        
        $__internal_ec4d043032544f345c651d2ee044cadf69b263d8c7eb38af7d88667ef7f921b9->leave($__internal_ec4d043032544f345c651d2ee044cadf69b263d8c7eb38af7d88667ef7f921b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
