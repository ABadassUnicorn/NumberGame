<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_d432389dce63338ca513e075fb53e7b0e862aa0fb623469eb861e465ce9b693a extends Twig_Template
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
        $__internal_7b72d65b27fdf3cd849ea4d56406a9e7fc03153668229335f20c4093183633f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b72d65b27fdf3cd849ea4d56406a9e7fc03153668229335f20c4093183633f4->enter($__internal_7b72d65b27fdf3cd849ea4d56406a9e7fc03153668229335f20c4093183633f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_dc5389e3b49b4d8e38ce8ed781c59e4a8943632a01133f0b936b270a8792a1fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5389e3b49b4d8e38ce8ed781c59e4a8943632a01133f0b936b270a8792a1fe->enter($__internal_dc5389e3b49b4d8e38ce8ed781c59e4a8943632a01133f0b936b270a8792a1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_7b72d65b27fdf3cd849ea4d56406a9e7fc03153668229335f20c4093183633f4->leave($__internal_7b72d65b27fdf3cd849ea4d56406a9e7fc03153668229335f20c4093183633f4_prof);

        
        $__internal_dc5389e3b49b4d8e38ce8ed781c59e4a8943632a01133f0b936b270a8792a1fe->leave($__internal_dc5389e3b49b4d8e38ce8ed781c59e4a8943632a01133f0b936b270a8792a1fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
