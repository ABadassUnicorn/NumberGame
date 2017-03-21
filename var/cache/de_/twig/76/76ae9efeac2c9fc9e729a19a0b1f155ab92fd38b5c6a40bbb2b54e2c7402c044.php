<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_777713ef315c14ecf44031fd3bddfde049f6f1224030a59108bddbd70a202bcb extends Twig_Template
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
        $__internal_e4a97e7401662feccb29631f11fb0ac7516f06d72774749d6abc244b3c7f4ba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a97e7401662feccb29631f11fb0ac7516f06d72774749d6abc244b3c7f4ba6->enter($__internal_e4a97e7401662feccb29631f11fb0ac7516f06d72774749d6abc244b3c7f4ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_6d3b492c54752f93b6447f1a241ecb41678e221dc17b08d3f5e92c74a13a04a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3b492c54752f93b6447f1a241ecb41678e221dc17b08d3f5e92c74a13a04a2->enter($__internal_6d3b492c54752f93b6447f1a241ecb41678e221dc17b08d3f5e92c74a13a04a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e4a97e7401662feccb29631f11fb0ac7516f06d72774749d6abc244b3c7f4ba6->leave($__internal_e4a97e7401662feccb29631f11fb0ac7516f06d72774749d6abc244b3c7f4ba6_prof);

        
        $__internal_6d3b492c54752f93b6447f1a241ecb41678e221dc17b08d3f5e92c74a13a04a2->leave($__internal_6d3b492c54752f93b6447f1a241ecb41678e221dc17b08d3f5e92c74a13a04a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
