<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ef6dd6b8f6cfc86bc3ad45d71b8b21eac7804b77734c3864b5e96398a2f7ff41 extends Twig_Template
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
        $__internal_beb8a3a42a29911f66112c6fc53ecdd3cc1536d06f2a4ed68d98be02619af57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb8a3a42a29911f66112c6fc53ecdd3cc1536d06f2a4ed68d98be02619af57c->enter($__internal_beb8a3a42a29911f66112c6fc53ecdd3cc1536d06f2a4ed68d98be02619af57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a410163f166d902bbfcd52a32542e8e5d0a575d4feb6028a0353cb9cef54ea53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a410163f166d902bbfcd52a32542e8e5d0a575d4feb6028a0353cb9cef54ea53->enter($__internal_a410163f166d902bbfcd52a32542e8e5d0a575d4feb6028a0353cb9cef54ea53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_beb8a3a42a29911f66112c6fc53ecdd3cc1536d06f2a4ed68d98be02619af57c->leave($__internal_beb8a3a42a29911f66112c6fc53ecdd3cc1536d06f2a4ed68d98be02619af57c_prof);

        
        $__internal_a410163f166d902bbfcd52a32542e8e5d0a575d4feb6028a0353cb9cef54ea53->leave($__internal_a410163f166d902bbfcd52a32542e8e5d0a575d4feb6028a0353cb9cef54ea53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
