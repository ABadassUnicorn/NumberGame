<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3b0ba8424182aba890705ed27d63c6ecb3f49ee0f44f6b7bd9a6046bb06f0348 extends Twig_Template
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
        $__internal_7ed088b8433a6cdd404092b894c63140787c4f0ef1e5e658756d4a4cf47037a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed088b8433a6cdd404092b894c63140787c4f0ef1e5e658756d4a4cf47037a5->enter($__internal_7ed088b8433a6cdd404092b894c63140787c4f0ef1e5e658756d4a4cf47037a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_5c9cc29e9d741157d74645cea5181b84b0a323e19fdac38c24c9794d7223d931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9cc29e9d741157d74645cea5181b84b0a323e19fdac38c24c9794d7223d931->enter($__internal_5c9cc29e9d741157d74645cea5181b84b0a323e19fdac38c24c9794d7223d931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7ed088b8433a6cdd404092b894c63140787c4f0ef1e5e658756d4a4cf47037a5->leave($__internal_7ed088b8433a6cdd404092b894c63140787c4f0ef1e5e658756d4a4cf47037a5_prof);

        
        $__internal_5c9cc29e9d741157d74645cea5181b84b0a323e19fdac38c24c9794d7223d931->leave($__internal_5c9cc29e9d741157d74645cea5181b84b0a323e19fdac38c24c9794d7223d931_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
