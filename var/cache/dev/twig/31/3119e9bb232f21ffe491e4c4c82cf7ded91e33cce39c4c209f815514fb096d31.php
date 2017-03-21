<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a09ab1b98397e6305ec304c896ca6cab0f6339a64e0ca04484f50e5fb27f3574 extends Twig_Template
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
        $__internal_322a8e76d89f48ecdd7654825dee3201118e818f994cabbe0ca9880ff1e8a380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_322a8e76d89f48ecdd7654825dee3201118e818f994cabbe0ca9880ff1e8a380->enter($__internal_322a8e76d89f48ecdd7654825dee3201118e818f994cabbe0ca9880ff1e8a380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_37d1acc0725274aa192ca020bfe2f939000c5bb32939c09adf974f208f2bb055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37d1acc0725274aa192ca020bfe2f939000c5bb32939c09adf974f208f2bb055->enter($__internal_37d1acc0725274aa192ca020bfe2f939000c5bb32939c09adf974f208f2bb055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_322a8e76d89f48ecdd7654825dee3201118e818f994cabbe0ca9880ff1e8a380->leave($__internal_322a8e76d89f48ecdd7654825dee3201118e818f994cabbe0ca9880ff1e8a380_prof);

        
        $__internal_37d1acc0725274aa192ca020bfe2f939000c5bb32939c09adf974f208f2bb055->leave($__internal_37d1acc0725274aa192ca020bfe2f939000c5bb32939c09adf974f208f2bb055_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
