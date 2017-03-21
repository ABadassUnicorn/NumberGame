<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_135ffcfdc01b17988f0c697dfab5457785876242619216b133a3c930a9441c38 extends Twig_Template
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
        $__internal_4b8c31bc5401248c2a283b457e01aaec4a9fef09158f6d951157b7c3313ccc00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8c31bc5401248c2a283b457e01aaec4a9fef09158f6d951157b7c3313ccc00->enter($__internal_4b8c31bc5401248c2a283b457e01aaec4a9fef09158f6d951157b7c3313ccc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_5725321ccd18a7ebab0183d5dd5a6a382c974f9f36d4d5c44508c6bb3e27d447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5725321ccd18a7ebab0183d5dd5a6a382c974f9f36d4d5c44508c6bb3e27d447->enter($__internal_5725321ccd18a7ebab0183d5dd5a6a382c974f9f36d4d5c44508c6bb3e27d447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4b8c31bc5401248c2a283b457e01aaec4a9fef09158f6d951157b7c3313ccc00->leave($__internal_4b8c31bc5401248c2a283b457e01aaec4a9fef09158f6d951157b7c3313ccc00_prof);

        
        $__internal_5725321ccd18a7ebab0183d5dd5a6a382c974f9f36d4d5c44508c6bb3e27d447->leave($__internal_5725321ccd18a7ebab0183d5dd5a6a382c974f9f36d4d5c44508c6bb3e27d447_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
