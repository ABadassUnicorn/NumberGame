<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f215865462ce88efb7cad63caa9a805b1a8707541693ba4e644ce23850d2a7b6 extends Twig_Template
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
        $__internal_4006112e9fa60303679d815103db6a270e3192fb865b8f72c12da49196b32816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4006112e9fa60303679d815103db6a270e3192fb865b8f72c12da49196b32816->enter($__internal_4006112e9fa60303679d815103db6a270e3192fb865b8f72c12da49196b32816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_d6785e6bca1d1c96f5bed8f7104fe6d9a35fbd1684476161f59702ea4dca0b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6785e6bca1d1c96f5bed8f7104fe6d9a35fbd1684476161f59702ea4dca0b5e->enter($__internal_d6785e6bca1d1c96f5bed8f7104fe6d9a35fbd1684476161f59702ea4dca0b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4006112e9fa60303679d815103db6a270e3192fb865b8f72c12da49196b32816->leave($__internal_4006112e9fa60303679d815103db6a270e3192fb865b8f72c12da49196b32816_prof);

        
        $__internal_d6785e6bca1d1c96f5bed8f7104fe6d9a35fbd1684476161f59702ea4dca0b5e->leave($__internal_d6785e6bca1d1c96f5bed8f7104fe6d9a35fbd1684476161f59702ea4dca0b5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
