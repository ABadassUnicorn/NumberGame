<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_884c59b1d391f80db4221f2fd926dd860d5c2e187226999c82aa56d6b09ca4f1 extends Twig_Template
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
        $__internal_4132c2cc8d952f635818bb8a78547f446aeb57e28cb8557f1927ffef2a8e88fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4132c2cc8d952f635818bb8a78547f446aeb57e28cb8557f1927ffef2a8e88fa->enter($__internal_4132c2cc8d952f635818bb8a78547f446aeb57e28cb8557f1927ffef2a8e88fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_8e866ebf957278446901d3f7ec066d6136a1ec57fd4f9b8a285bf8456a2ab446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e866ebf957278446901d3f7ec066d6136a1ec57fd4f9b8a285bf8456a2ab446->enter($__internal_8e866ebf957278446901d3f7ec066d6136a1ec57fd4f9b8a285bf8456a2ab446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4132c2cc8d952f635818bb8a78547f446aeb57e28cb8557f1927ffef2a8e88fa->leave($__internal_4132c2cc8d952f635818bb8a78547f446aeb57e28cb8557f1927ffef2a8e88fa_prof);

        
        $__internal_8e866ebf957278446901d3f7ec066d6136a1ec57fd4f9b8a285bf8456a2ab446->leave($__internal_8e866ebf957278446901d3f7ec066d6136a1ec57fd4f9b8a285bf8456a2ab446_prof);

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
", "@Framework/Form/number_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
