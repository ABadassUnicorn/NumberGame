<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_5daaa8312a9e5149738b15e1fb0fc1f526ac724e6a98ffc6aea401288c48ed57 extends Twig_Template
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
        $__internal_a640442e6267234966e07cc50e8ba209e4dc07435133443cc67f7f1c026d0a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a640442e6267234966e07cc50e8ba209e4dc07435133443cc67f7f1c026d0a38->enter($__internal_a640442e6267234966e07cc50e8ba209e4dc07435133443cc67f7f1c026d0a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_480500167c3b0bec68c984c725192ba70d1bffe578219679e9418bb5d6f4d797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480500167c3b0bec68c984c725192ba70d1bffe578219679e9418bb5d6f4d797->enter($__internal_480500167c3b0bec68c984c725192ba70d1bffe578219679e9418bb5d6f4d797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a640442e6267234966e07cc50e8ba209e4dc07435133443cc67f7f1c026d0a38->leave($__internal_a640442e6267234966e07cc50e8ba209e4dc07435133443cc67f7f1c026d0a38_prof);

        
        $__internal_480500167c3b0bec68c984c725192ba70d1bffe578219679e9418bb5d6f4d797->leave($__internal_480500167c3b0bec68c984c725192ba70d1bffe578219679e9418bb5d6f4d797_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
