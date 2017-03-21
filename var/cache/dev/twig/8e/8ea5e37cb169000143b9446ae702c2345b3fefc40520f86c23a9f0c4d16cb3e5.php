<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d08c3dddeb95a0393759a9ea1b98f0fe705516cfa70ccac2c0b5f9fd66baff13 extends Twig_Template
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
        $__internal_e13326732ce39e97877f4f55c4b1c6f0d49ab6f8aad856cd0b3b78d84caaad27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e13326732ce39e97877f4f55c4b1c6f0d49ab6f8aad856cd0b3b78d84caaad27->enter($__internal_e13326732ce39e97877f4f55c4b1c6f0d49ab6f8aad856cd0b3b78d84caaad27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_d2ec51cc86efa0f77859bf98bfcfbadf8468962472032fe2547786d2d2383f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ec51cc86efa0f77859bf98bfcfbadf8468962472032fe2547786d2d2383f51->enter($__internal_d2ec51cc86efa0f77859bf98bfcfbadf8468962472032fe2547786d2d2383f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_e13326732ce39e97877f4f55c4b1c6f0d49ab6f8aad856cd0b3b78d84caaad27->leave($__internal_e13326732ce39e97877f4f55c4b1c6f0d49ab6f8aad856cd0b3b78d84caaad27_prof);

        
        $__internal_d2ec51cc86efa0f77859bf98bfcfbadf8468962472032fe2547786d2d2383f51->leave($__internal_d2ec51cc86efa0f77859bf98bfcfbadf8468962472032fe2547786d2d2383f51_prof);

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
", "@Framework/Form/attributes.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
