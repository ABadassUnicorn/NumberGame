<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4d315c312e5f17ff7e226b27a750f4f16c7e075aa508ba60b611970f99909b41 extends Twig_Template
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
        $__internal_bbc2ab87536845fda7a5168ca7de1df833f2ea778134f00f84867b228bc03dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc2ab87536845fda7a5168ca7de1df833f2ea778134f00f84867b228bc03dee->enter($__internal_bbc2ab87536845fda7a5168ca7de1df833f2ea778134f00f84867b228bc03dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_60957abfc7544c8cf7c59e824e58e7f59c5e60d1cb43776173d6ff17b12cb299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60957abfc7544c8cf7c59e824e58e7f59c5e60d1cb43776173d6ff17b12cb299->enter($__internal_60957abfc7544c8cf7c59e824e58e7f59c5e60d1cb43776173d6ff17b12cb299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bbc2ab87536845fda7a5168ca7de1df833f2ea778134f00f84867b228bc03dee->leave($__internal_bbc2ab87536845fda7a5168ca7de1df833f2ea778134f00f84867b228bc03dee_prof);

        
        $__internal_60957abfc7544c8cf7c59e824e58e7f59c5e60d1cb43776173d6ff17b12cb299->leave($__internal_60957abfc7544c8cf7c59e824e58e7f59c5e60d1cb43776173d6ff17b12cb299_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
