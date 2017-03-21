<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c5fffb8a9256ed26eca3a7d4015ce0542c09f6f7560b2ed2162fdd3b3b378c62 extends Twig_Template
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
        $__internal_e07afe4eeddf41ff90f659aa638d42be3c9551d6131d72e6e453b38e1f4d3e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e07afe4eeddf41ff90f659aa638d42be3c9551d6131d72e6e453b38e1f4d3e85->enter($__internal_e07afe4eeddf41ff90f659aa638d42be3c9551d6131d72e6e453b38e1f4d3e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_d0f85ef68086448405e5e80d363c7b1db10a0e40326159a9242c90667c1c78bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f85ef68086448405e5e80d363c7b1db10a0e40326159a9242c90667c1c78bf->enter($__internal_d0f85ef68086448405e5e80d363c7b1db10a0e40326159a9242c90667c1c78bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e07afe4eeddf41ff90f659aa638d42be3c9551d6131d72e6e453b38e1f4d3e85->leave($__internal_e07afe4eeddf41ff90f659aa638d42be3c9551d6131d72e6e453b38e1f4d3e85_prof);

        
        $__internal_d0f85ef68086448405e5e80d363c7b1db10a0e40326159a9242c90667c1c78bf->leave($__internal_d0f85ef68086448405e5e80d363c7b1db10a0e40326159a9242c90667c1c78bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
