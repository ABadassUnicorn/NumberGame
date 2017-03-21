<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_59f7093ccf30a16291e955c495d656f05dbbad8903d9be5d9adf26e1e1fb8c41 extends Twig_Template
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
        $__internal_2ec7387654419d58eff4e492c6a68dc31747afc374c4d7fe8fcd649c5aaeab09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec7387654419d58eff4e492c6a68dc31747afc374c4d7fe8fcd649c5aaeab09->enter($__internal_2ec7387654419d58eff4e492c6a68dc31747afc374c4d7fe8fcd649c5aaeab09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_08ac819a95b652937721cdd73487eebdf6ff1cb0d3a606e17962cb32e85afca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ac819a95b652937721cdd73487eebdf6ff1cb0d3a606e17962cb32e85afca5->enter($__internal_08ac819a95b652937721cdd73487eebdf6ff1cb0d3a606e17962cb32e85afca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2ec7387654419d58eff4e492c6a68dc31747afc374c4d7fe8fcd649c5aaeab09->leave($__internal_2ec7387654419d58eff4e492c6a68dc31747afc374c4d7fe8fcd649c5aaeab09_prof);

        
        $__internal_08ac819a95b652937721cdd73487eebdf6ff1cb0d3a606e17962cb32e85afca5->leave($__internal_08ac819a95b652937721cdd73487eebdf6ff1cb0d3a606e17962cb32e85afca5_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
