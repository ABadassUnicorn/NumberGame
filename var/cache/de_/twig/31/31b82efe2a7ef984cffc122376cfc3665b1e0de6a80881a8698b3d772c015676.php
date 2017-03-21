<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_820ed195b03278b2ecbdd25045f4ec3a434583b7f17535864c3a52743f35e75a extends Twig_Template
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
        $__internal_8e5581b84ce8042b4790ee7df05a3306c6264badcf6ece35c25da5d5e9dcc78d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5581b84ce8042b4790ee7df05a3306c6264badcf6ece35c25da5d5e9dcc78d->enter($__internal_8e5581b84ce8042b4790ee7df05a3306c6264badcf6ece35c25da5d5e9dcc78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_4015216c6b791881fc92e20f8036f9e1fff0a749c95f6fbd7040071c5c4337ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4015216c6b791881fc92e20f8036f9e1fff0a749c95f6fbd7040071c5c4337ed->enter($__internal_4015216c6b791881fc92e20f8036f9e1fff0a749c95f6fbd7040071c5c4337ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8e5581b84ce8042b4790ee7df05a3306c6264badcf6ece35c25da5d5e9dcc78d->leave($__internal_8e5581b84ce8042b4790ee7df05a3306c6264badcf6ece35c25da5d5e9dcc78d_prof);

        
        $__internal_4015216c6b791881fc92e20f8036f9e1fff0a749c95f6fbd7040071c5c4337ed->leave($__internal_4015216c6b791881fc92e20f8036f9e1fff0a749c95f6fbd7040071c5c4337ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
