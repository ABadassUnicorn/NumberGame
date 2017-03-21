<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_61f67eb394e3664bca6d3440abb68d1de09e96dfda0aac4ea03bea3f9674e715 extends Twig_Template
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
        $__internal_58919a2f8725f95b7532608af5b8246f780dbcb348d8b0cb8f39c945fae862b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58919a2f8725f95b7532608af5b8246f780dbcb348d8b0cb8f39c945fae862b7->enter($__internal_58919a2f8725f95b7532608af5b8246f780dbcb348d8b0cb8f39c945fae862b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_7175371ff244efb8ad47075b1bd9071abfd25be8f042673f3e00a2c828b75cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7175371ff244efb8ad47075b1bd9071abfd25be8f042673f3e00a2c828b75cf9->enter($__internal_7175371ff244efb8ad47075b1bd9071abfd25be8f042673f3e00a2c828b75cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_58919a2f8725f95b7532608af5b8246f780dbcb348d8b0cb8f39c945fae862b7->leave($__internal_58919a2f8725f95b7532608af5b8246f780dbcb348d8b0cb8f39c945fae862b7_prof);

        
        $__internal_7175371ff244efb8ad47075b1bd9071abfd25be8f042673f3e00a2c828b75cf9->leave($__internal_7175371ff244efb8ad47075b1bd9071abfd25be8f042673f3e00a2c828b75cf9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
