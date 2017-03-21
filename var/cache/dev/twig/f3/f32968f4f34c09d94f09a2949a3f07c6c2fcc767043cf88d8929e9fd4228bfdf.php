<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_cd4bee1ecb1cd6a8b484a5a8a663d4b91c93ac342766a8d4852fa1a39f717e5d extends Twig_Template
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
        $__internal_b580777076656df7ce6d9a01c9ec7d7945eebf8ac3d32fdd9096f14209e211e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b580777076656df7ce6d9a01c9ec7d7945eebf8ac3d32fdd9096f14209e211e7->enter($__internal_b580777076656df7ce6d9a01c9ec7d7945eebf8ac3d32fdd9096f14209e211e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_05bba6c6db00197a35c3d0c2e6f370157565e82d7ea62f65ed45f2a23adc3844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05bba6c6db00197a35c3d0c2e6f370157565e82d7ea62f65ed45f2a23adc3844->enter($__internal_05bba6c6db00197a35c3d0c2e6f370157565e82d7ea62f65ed45f2a23adc3844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b580777076656df7ce6d9a01c9ec7d7945eebf8ac3d32fdd9096f14209e211e7->leave($__internal_b580777076656df7ce6d9a01c9ec7d7945eebf8ac3d32fdd9096f14209e211e7_prof);

        
        $__internal_05bba6c6db00197a35c3d0c2e6f370157565e82d7ea62f65ed45f2a23adc3844->leave($__internal_05bba6c6db00197a35c3d0c2e6f370157565e82d7ea62f65ed45f2a23adc3844_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
