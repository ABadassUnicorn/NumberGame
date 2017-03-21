<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a66631fd3f7a05e504a0d11006b491893e09e73ccc7efbe1f247717d9d135ebc extends Twig_Template
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
        $__internal_909e0a4744fb8ecaad0fcf8c4417cc0152909d4e11707fa901471e0c785a037e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_909e0a4744fb8ecaad0fcf8c4417cc0152909d4e11707fa901471e0c785a037e->enter($__internal_909e0a4744fb8ecaad0fcf8c4417cc0152909d4e11707fa901471e0c785a037e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_a35809508554529e236e0b1814273e58806a0e0d2f16e2756fa035a7ac7fbdcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35809508554529e236e0b1814273e58806a0e0d2f16e2756fa035a7ac7fbdcd->enter($__internal_a35809508554529e236e0b1814273e58806a0e0d2f16e2756fa035a7ac7fbdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_909e0a4744fb8ecaad0fcf8c4417cc0152909d4e11707fa901471e0c785a037e->leave($__internal_909e0a4744fb8ecaad0fcf8c4417cc0152909d4e11707fa901471e0c785a037e_prof);

        
        $__internal_a35809508554529e236e0b1814273e58806a0e0d2f16e2756fa035a7ac7fbdcd->leave($__internal_a35809508554529e236e0b1814273e58806a0e0d2f16e2756fa035a7ac7fbdcd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
