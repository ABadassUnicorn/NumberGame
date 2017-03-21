<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_3276dda9940e1565b80e266c67af939f79042f0c18e4dd441e0660af5d731b75 extends Twig_Template
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
        $__internal_f5caeb9abfc62e16615a84ecaec097365a52f76ea6779566793251fa31a694d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5caeb9abfc62e16615a84ecaec097365a52f76ea6779566793251fa31a694d4->enter($__internal_f5caeb9abfc62e16615a84ecaec097365a52f76ea6779566793251fa31a694d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_e5ff67c72a9c9a05c86a54d5fa4c20a234885cff95d4608711a14141532b06e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ff67c72a9c9a05c86a54d5fa4c20a234885cff95d4608711a14141532b06e8->enter($__internal_e5ff67c72a9c9a05c86a54d5fa4c20a234885cff95d4608711a14141532b06e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_f5caeb9abfc62e16615a84ecaec097365a52f76ea6779566793251fa31a694d4->leave($__internal_f5caeb9abfc62e16615a84ecaec097365a52f76ea6779566793251fa31a694d4_prof);

        
        $__internal_e5ff67c72a9c9a05c86a54d5fa4c20a234885cff95d4608711a14141532b06e8->leave($__internal_e5ff67c72a9c9a05c86a54d5fa4c20a234885cff95d4608711a14141532b06e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
