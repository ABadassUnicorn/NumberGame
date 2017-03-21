<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_4940b8e7e6876c8748bc4986204451bccdc8c8316ac3078ba5bcbaa149390881 extends Twig_Template
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
        $__internal_86365079861b65fe1fec5ba81128f213cacdbe3347e32949e2fb1655692244a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86365079861b65fe1fec5ba81128f213cacdbe3347e32949e2fb1655692244a7->enter($__internal_86365079861b65fe1fec5ba81128f213cacdbe3347e32949e2fb1655692244a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_805d32e0dde600ea4423f9307a3aa033a8265e5a9c4ef5d2d712117775fba307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805d32e0dde600ea4423f9307a3aa033a8265e5a9c4ef5d2d712117775fba307->enter($__internal_805d32e0dde600ea4423f9307a3aa033a8265e5a9c4ef5d2d712117775fba307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_86365079861b65fe1fec5ba81128f213cacdbe3347e32949e2fb1655692244a7->leave($__internal_86365079861b65fe1fec5ba81128f213cacdbe3347e32949e2fb1655692244a7_prof);

        
        $__internal_805d32e0dde600ea4423f9307a3aa033a8265e5a9c4ef5d2d712117775fba307->leave($__internal_805d32e0dde600ea4423f9307a3aa033a8265e5a9c4ef5d2d712117775fba307_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
