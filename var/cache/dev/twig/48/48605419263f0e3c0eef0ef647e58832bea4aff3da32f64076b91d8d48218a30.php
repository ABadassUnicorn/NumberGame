<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_553b9fb05ce57f08a3f71fe7ca5a4e09f59c3b6cb7f02dc711a73ca99c2f0fe3 extends Twig_Template
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
        $__internal_f9ae41b078957148519f08da07c25b5b07df43454237ac21af7ad6511baa077d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ae41b078957148519f08da07c25b5b07df43454237ac21af7ad6511baa077d->enter($__internal_f9ae41b078957148519f08da07c25b5b07df43454237ac21af7ad6511baa077d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_4395d9f3c4e7374521f3450cbfc63c63dbcce7c5cf639acad1e497664abd38ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4395d9f3c4e7374521f3450cbfc63c63dbcce7c5cf639acad1e497664abd38ad->enter($__internal_4395d9f3c4e7374521f3450cbfc63c63dbcce7c5cf639acad1e497664abd38ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f9ae41b078957148519f08da07c25b5b07df43454237ac21af7ad6511baa077d->leave($__internal_f9ae41b078957148519f08da07c25b5b07df43454237ac21af7ad6511baa077d_prof);

        
        $__internal_4395d9f3c4e7374521f3450cbfc63c63dbcce7c5cf639acad1e497664abd38ad->leave($__internal_4395d9f3c4e7374521f3450cbfc63c63dbcce7c5cf639acad1e497664abd38ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
