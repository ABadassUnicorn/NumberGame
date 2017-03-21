<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_8fe2cd7b59338751b4202eefa1e2174620a4b582226438543c556817a417c0ef extends Twig_Template
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
        $__internal_c666c388b0d144931c2ae28504487ae0b9b7fd93ac5b7f6571b689d257d7343b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c666c388b0d144931c2ae28504487ae0b9b7fd93ac5b7f6571b689d257d7343b->enter($__internal_c666c388b0d144931c2ae28504487ae0b9b7fd93ac5b7f6571b689d257d7343b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_5b7aa7de6d041d82ff64707ab46a35f21a88d64a33fa2e3d2d673a0e2ccc58e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7aa7de6d041d82ff64707ab46a35f21a88d64a33fa2e3d2d673a0e2ccc58e2->enter($__internal_5b7aa7de6d041d82ff64707ab46a35f21a88d64a33fa2e3d2d673a0e2ccc58e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c666c388b0d144931c2ae28504487ae0b9b7fd93ac5b7f6571b689d257d7343b->leave($__internal_c666c388b0d144931c2ae28504487ae0b9b7fd93ac5b7f6571b689d257d7343b_prof);

        
        $__internal_5b7aa7de6d041d82ff64707ab46a35f21a88d64a33fa2e3d2d673a0e2ccc58e2->leave($__internal_5b7aa7de6d041d82ff64707ab46a35f21a88d64a33fa2e3d2d673a0e2ccc58e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
