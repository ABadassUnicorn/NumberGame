<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_486402cb851a9943042b707438f866270193985bb22a382be737802adb91c7ed extends Twig_Template
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
        $__internal_7b3638bbfb710317471b52b8734aef3b18b0ba7b19f081302e836d7e7a08a248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b3638bbfb710317471b52b8734aef3b18b0ba7b19f081302e836d7e7a08a248->enter($__internal_7b3638bbfb710317471b52b8734aef3b18b0ba7b19f081302e836d7e7a08a248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_90b0933002fa47a5949fb9c49b307b25407568ae7d1e359961332c40f07ce9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b0933002fa47a5949fb9c49b307b25407568ae7d1e359961332c40f07ce9d7->enter($__internal_90b0933002fa47a5949fb9c49b307b25407568ae7d1e359961332c40f07ce9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7b3638bbfb710317471b52b8734aef3b18b0ba7b19f081302e836d7e7a08a248->leave($__internal_7b3638bbfb710317471b52b8734aef3b18b0ba7b19f081302e836d7e7a08a248_prof);

        
        $__internal_90b0933002fa47a5949fb9c49b307b25407568ae7d1e359961332c40f07ce9d7->leave($__internal_90b0933002fa47a5949fb9c49b307b25407568ae7d1e359961332c40f07ce9d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
