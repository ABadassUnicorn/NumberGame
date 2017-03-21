<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_6cdce42d0692f5dc06f321748268a793fab17a9097e5ac5cf61e483e0cc937a8 extends Twig_Template
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
        $__internal_7277737b2ab66d14bcc7728defa8c257c7f2795f4f97925a826f7c822bc65ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7277737b2ab66d14bcc7728defa8c257c7f2795f4f97925a826f7c822bc65ef5->enter($__internal_7277737b2ab66d14bcc7728defa8c257c7f2795f4f97925a826f7c822bc65ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_6fe48cf70c1d52d0e48d7abddfebd550034fd6c5b190d73297a117060cbea5ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe48cf70c1d52d0e48d7abddfebd550034fd6c5b190d73297a117060cbea5ef->enter($__internal_6fe48cf70c1d52d0e48d7abddfebd550034fd6c5b190d73297a117060cbea5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_7277737b2ab66d14bcc7728defa8c257c7f2795f4f97925a826f7c822bc65ef5->leave($__internal_7277737b2ab66d14bcc7728defa8c257c7f2795f4f97925a826f7c822bc65ef5_prof);

        
        $__internal_6fe48cf70c1d52d0e48d7abddfebd550034fd6c5b190d73297a117060cbea5ef->leave($__internal_6fe48cf70c1d52d0e48d7abddfebd550034fd6c5b190d73297a117060cbea5ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
