<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_98e85c69167eddf210c185b9f6fdfc58e7b55b1b047aa2e0deb1512145ed8bdd extends Twig_Template
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
        $__internal_ba2aae4047dc38a88da47bcc2bb72a9732be6d90f0c853a36fdb570743d1117d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba2aae4047dc38a88da47bcc2bb72a9732be6d90f0c853a36fdb570743d1117d->enter($__internal_ba2aae4047dc38a88da47bcc2bb72a9732be6d90f0c853a36fdb570743d1117d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_52a448732e8235f7e3a10e665b6abdebaa6007f1548df6ac877b98b4faf5b4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a448732e8235f7e3a10e665b6abdebaa6007f1548df6ac877b98b4faf5b4e4->enter($__internal_52a448732e8235f7e3a10e665b6abdebaa6007f1548df6ac877b98b4faf5b4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ba2aae4047dc38a88da47bcc2bb72a9732be6d90f0c853a36fdb570743d1117d->leave($__internal_ba2aae4047dc38a88da47bcc2bb72a9732be6d90f0c853a36fdb570743d1117d_prof);

        
        $__internal_52a448732e8235f7e3a10e665b6abdebaa6007f1548df6ac877b98b4faf5b4e4->leave($__internal_52a448732e8235f7e3a10e665b6abdebaa6007f1548df6ac877b98b4faf5b4e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
