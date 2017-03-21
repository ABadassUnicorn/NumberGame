<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_b72c8b09091d68b3816bcc05ef14e9121476946cd89d9f7657facc58819dbf3c extends Twig_Template
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
        $__internal_0e43a33bf0b71705f84e7b99d3512a48ac1c811fff687d1436812567928aa88b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e43a33bf0b71705f84e7b99d3512a48ac1c811fff687d1436812567928aa88b->enter($__internal_0e43a33bf0b71705f84e7b99d3512a48ac1c811fff687d1436812567928aa88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_0a6e3ca983c6426d13a6f37b1e92c6dfb19a0758b63606b2dffbe8605d63bd6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6e3ca983c6426d13a6f37b1e92c6dfb19a0758b63606b2dffbe8605d63bd6c->enter($__internal_0a6e3ca983c6426d13a6f37b1e92c6dfb19a0758b63606b2dffbe8605d63bd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_0e43a33bf0b71705f84e7b99d3512a48ac1c811fff687d1436812567928aa88b->leave($__internal_0e43a33bf0b71705f84e7b99d3512a48ac1c811fff687d1436812567928aa88b_prof);

        
        $__internal_0a6e3ca983c6426d13a6f37b1e92c6dfb19a0758b63606b2dffbe8605d63bd6c->leave($__internal_0a6e3ca983c6426d13a6f37b1e92c6dfb19a0758b63606b2dffbe8605d63bd6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
