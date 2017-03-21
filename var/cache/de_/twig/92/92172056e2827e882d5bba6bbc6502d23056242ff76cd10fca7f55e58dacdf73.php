<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_68a1e5f81016773360a12238c175a494e72ea41e3b5778a2db29a39bad36ada8 extends Twig_Template
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
        $__internal_29640864f3af75ff4edd40763e46047662828bdeca6e3bbc73a933690cde905d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29640864f3af75ff4edd40763e46047662828bdeca6e3bbc73a933690cde905d->enter($__internal_29640864f3af75ff4edd40763e46047662828bdeca6e3bbc73a933690cde905d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_27fdb8f17f2723b564896cd9889ba8131be144168cd3e62d6673867f57f4bf0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27fdb8f17f2723b564896cd9889ba8131be144168cd3e62d6673867f57f4bf0e->enter($__internal_27fdb8f17f2723b564896cd9889ba8131be144168cd3e62d6673867f57f4bf0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_29640864f3af75ff4edd40763e46047662828bdeca6e3bbc73a933690cde905d->leave($__internal_29640864f3af75ff4edd40763e46047662828bdeca6e3bbc73a933690cde905d_prof);

        
        $__internal_27fdb8f17f2723b564896cd9889ba8131be144168cd3e62d6673867f57f4bf0e->leave($__internal_27fdb8f17f2723b564896cd9889ba8131be144168cd3e62d6673867f57f4bf0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
