<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a6c638d648c25bbba6849032eb46480cc35df72d85119082b5957a41340a4a06 extends Twig_Template
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
        $__internal_e1ee31230e693dc7ac4dcbce9edae9e936d3b3fc4e2b45486dd16c97ff50cd73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ee31230e693dc7ac4dcbce9edae9e936d3b3fc4e2b45486dd16c97ff50cd73->enter($__internal_e1ee31230e693dc7ac4dcbce9edae9e936d3b3fc4e2b45486dd16c97ff50cd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e999766ba480031e6d48379fcec39431d13cb6bbc457b87b8284eb1d2dbd9364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e999766ba480031e6d48379fcec39431d13cb6bbc457b87b8284eb1d2dbd9364->enter($__internal_e999766ba480031e6d48379fcec39431d13cb6bbc457b87b8284eb1d2dbd9364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e1ee31230e693dc7ac4dcbce9edae9e936d3b3fc4e2b45486dd16c97ff50cd73->leave($__internal_e1ee31230e693dc7ac4dcbce9edae9e936d3b3fc4e2b45486dd16c97ff50cd73_prof);

        
        $__internal_e999766ba480031e6d48379fcec39431d13cb6bbc457b87b8284eb1d2dbd9364->leave($__internal_e999766ba480031e6d48379fcec39431d13cb6bbc457b87b8284eb1d2dbd9364_prof);

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
", "@Framework/Form/submit_widget.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
