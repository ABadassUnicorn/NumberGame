<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_aec9743b2e9f82745d9328681a11b9e1a8e75e2d9ec0ddc86cd8c83a1d238169 extends Twig_Template
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
        $__internal_0b1870998f006343755a770d7853f0f2245bf14346baf340ace46b50265269a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b1870998f006343755a770d7853f0f2245bf14346baf340ace46b50265269a0->enter($__internal_0b1870998f006343755a770d7853f0f2245bf14346baf340ace46b50265269a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_a47dedd065983a7c15a90ed62aaa7c42870ccacd9b10c7f7b62cc23e26689000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47dedd065983a7c15a90ed62aaa7c42870ccacd9b10c7f7b62cc23e26689000->enter($__internal_a47dedd065983a7c15a90ed62aaa7c42870ccacd9b10c7f7b62cc23e26689000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_0b1870998f006343755a770d7853f0f2245bf14346baf340ace46b50265269a0->leave($__internal_0b1870998f006343755a770d7853f0f2245bf14346baf340ace46b50265269a0_prof);

        
        $__internal_a47dedd065983a7c15a90ed62aaa7c42870ccacd9b10c7f7b62cc23e26689000->leave($__internal_a47dedd065983a7c15a90ed62aaa7c42870ccacd9b10c7f7b62cc23e26689000_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
