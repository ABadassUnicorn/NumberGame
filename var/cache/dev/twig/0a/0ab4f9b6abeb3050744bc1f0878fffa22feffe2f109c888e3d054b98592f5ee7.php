<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_3695ec7ca6542c8d992bb29594d6e7158508a497dac21aa930788d44c14f820a extends Twig_Template
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
        $__internal_511b1ab76387b60320b4aa7a4482e4225a46f7f0ef18107153e393ec76c91b95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_511b1ab76387b60320b4aa7a4482e4225a46f7f0ef18107153e393ec76c91b95->enter($__internal_511b1ab76387b60320b4aa7a4482e4225a46f7f0ef18107153e393ec76c91b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_90e7d27b28190b3c470037538597b76e1be4cc00647722bf1569ac848b19a190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e7d27b28190b3c470037538597b76e1be4cc00647722bf1569ac848b19a190->enter($__internal_90e7d27b28190b3c470037538597b76e1be4cc00647722bf1569ac848b19a190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_511b1ab76387b60320b4aa7a4482e4225a46f7f0ef18107153e393ec76c91b95->leave($__internal_511b1ab76387b60320b4aa7a4482e4225a46f7f0ef18107153e393ec76c91b95_prof);

        
        $__internal_90e7d27b28190b3c470037538597b76e1be4cc00647722bf1569ac848b19a190->leave($__internal_90e7d27b28190b3c470037538597b76e1be4cc00647722bf1569ac848b19a190_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
