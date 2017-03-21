<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_94bc9c4f27d334d34808d5e57b03600688626706f936594731074de731392347 extends Twig_Template
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
        $__internal_17900c0c9ddbc739dfdb51736ad32496e81d1ed1adea4ba18c67f621dc5d1268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17900c0c9ddbc739dfdb51736ad32496e81d1ed1adea4ba18c67f621dc5d1268->enter($__internal_17900c0c9ddbc739dfdb51736ad32496e81d1ed1adea4ba18c67f621dc5d1268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_6f7fcbb4822b6061be9dd1cbc16e37b60c8763cf1d828f86de4f2e3df31b41a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7fcbb4822b6061be9dd1cbc16e37b60c8763cf1d828f86de4f2e3df31b41a9->enter($__internal_6f7fcbb4822b6061be9dd1cbc16e37b60c8763cf1d828f86de4f2e3df31b41a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_17900c0c9ddbc739dfdb51736ad32496e81d1ed1adea4ba18c67f621dc5d1268->leave($__internal_17900c0c9ddbc739dfdb51736ad32496e81d1ed1adea4ba18c67f621dc5d1268_prof);

        
        $__internal_6f7fcbb4822b6061be9dd1cbc16e37b60c8763cf1d828f86de4f2e3df31b41a9->leave($__internal_6f7fcbb4822b6061be9dd1cbc16e37b60c8763cf1d828f86de4f2e3df31b41a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
