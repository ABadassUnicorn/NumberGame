<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e49995d984bff5434823d7fd1fde680b6a62f8eb3e7c75830dc405522489d9f9 extends Twig_Template
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
        $__internal_11328acaac0161af80d7cb1230ed3485e802a5eac98309b02d9265ba12b76685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11328acaac0161af80d7cb1230ed3485e802a5eac98309b02d9265ba12b76685->enter($__internal_11328acaac0161af80d7cb1230ed3485e802a5eac98309b02d9265ba12b76685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_7d5c5f5dc34b8d092797086eb337488331ede4de6b360da0164ff7e6deb95f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5c5f5dc34b8d092797086eb337488331ede4de6b360da0164ff7e6deb95f04->enter($__internal_7d5c5f5dc34b8d092797086eb337488331ede4de6b360da0164ff7e6deb95f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_11328acaac0161af80d7cb1230ed3485e802a5eac98309b02d9265ba12b76685->leave($__internal_11328acaac0161af80d7cb1230ed3485e802a5eac98309b02d9265ba12b76685_prof);

        
        $__internal_7d5c5f5dc34b8d092797086eb337488331ede4de6b360da0164ff7e6deb95f04->leave($__internal_7d5c5f5dc34b8d092797086eb337488331ede4de6b360da0164ff7e6deb95f04_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
