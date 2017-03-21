<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_340f568331e3409b80336d90f51479d4283fb2d6057c0932d76305ae02bdc559 extends Twig_Template
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
        $__internal_7dc282d714859b11459354989d3e3e54536deaea398e1a9cbeb0705dc26f9919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc282d714859b11459354989d3e3e54536deaea398e1a9cbeb0705dc26f9919->enter($__internal_7dc282d714859b11459354989d3e3e54536deaea398e1a9cbeb0705dc26f9919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_385cbecb7eae15f392ffedaa092386d61c7dfeb5fbde727b2bab41de7e89e3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385cbecb7eae15f392ffedaa092386d61c7dfeb5fbde727b2bab41de7e89e3a4->enter($__internal_385cbecb7eae15f392ffedaa092386d61c7dfeb5fbde727b2bab41de7e89e3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_7dc282d714859b11459354989d3e3e54536deaea398e1a9cbeb0705dc26f9919->leave($__internal_7dc282d714859b11459354989d3e3e54536deaea398e1a9cbeb0705dc26f9919_prof);

        
        $__internal_385cbecb7eae15f392ffedaa092386d61c7dfeb5fbde727b2bab41de7e89e3a4->leave($__internal_385cbecb7eae15f392ffedaa092386d61c7dfeb5fbde727b2bab41de7e89e3a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
