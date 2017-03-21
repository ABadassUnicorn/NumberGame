<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_64ae9faacef244e44fdf18a8ae73d4bdaf54eec69044755097104d5991949202 extends Twig_Template
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
        $__internal_3bab99329401a3eedf7250db60f2c48f1ae34e91cd133d2355fb9ca38fd1c89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bab99329401a3eedf7250db60f2c48f1ae34e91cd133d2355fb9ca38fd1c89e->enter($__internal_3bab99329401a3eedf7250db60f2c48f1ae34e91cd133d2355fb9ca38fd1c89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_0ac2b486901b07d7c711a6f6f86134d5932785a31adf280bf5d3a814a1f54bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac2b486901b07d7c711a6f6f86134d5932785a31adf280bf5d3a814a1f54bbf->enter($__internal_0ac2b486901b07d7c711a6f6f86134d5932785a31adf280bf5d3a814a1f54bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3bab99329401a3eedf7250db60f2c48f1ae34e91cd133d2355fb9ca38fd1c89e->leave($__internal_3bab99329401a3eedf7250db60f2c48f1ae34e91cd133d2355fb9ca38fd1c89e_prof);

        
        $__internal_0ac2b486901b07d7c711a6f6f86134d5932785a31adf280bf5d3a814a1f54bbf->leave($__internal_0ac2b486901b07d7c711a6f6f86134d5932785a31adf280bf5d3a814a1f54bbf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
