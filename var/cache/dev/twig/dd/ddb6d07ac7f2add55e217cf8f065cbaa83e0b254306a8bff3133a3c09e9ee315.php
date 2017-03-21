<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2d9a59788b87fc46c79f9d98c993a3d3f4170764cb5804b4b960a468b8817742 extends Twig_Template
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
        $__internal_f5371b1fbae1175de8aadb84e9cb8157c5f4096fcd42696f8f1245ce6a9f6559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5371b1fbae1175de8aadb84e9cb8157c5f4096fcd42696f8f1245ce6a9f6559->enter($__internal_f5371b1fbae1175de8aadb84e9cb8157c5f4096fcd42696f8f1245ce6a9f6559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f4caaa3bae7eecab58376c1facad4190e50b018329953869d41d58d421d22839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4caaa3bae7eecab58376c1facad4190e50b018329953869d41d58d421d22839->enter($__internal_f4caaa3bae7eecab58376c1facad4190e50b018329953869d41d58d421d22839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f5371b1fbae1175de8aadb84e9cb8157c5f4096fcd42696f8f1245ce6a9f6559->leave($__internal_f5371b1fbae1175de8aadb84e9cb8157c5f4096fcd42696f8f1245ce6a9f6559_prof);

        
        $__internal_f4caaa3bae7eecab58376c1facad4190e50b018329953869d41d58d421d22839->leave($__internal_f4caaa3bae7eecab58376c1facad4190e50b018329953869d41d58d421d22839_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
