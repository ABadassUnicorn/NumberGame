<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5d71054bfae9b12379aacae5e9f9aaf397c8957568969fa917c558ae6b821af8 extends Twig_Template
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
        $__internal_0cbe2dc23f027b60666cc9544fdff8ed3db9a9c0751fe7608cc4f424aa8b192f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cbe2dc23f027b60666cc9544fdff8ed3db9a9c0751fe7608cc4f424aa8b192f->enter($__internal_0cbe2dc23f027b60666cc9544fdff8ed3db9a9c0751fe7608cc4f424aa8b192f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_429e3912823e3b5ebc109f84f9683ece44111d452d6bbb3fbe3147a35b9b147a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429e3912823e3b5ebc109f84f9683ece44111d452d6bbb3fbe3147a35b9b147a->enter($__internal_429e3912823e3b5ebc109f84f9683ece44111d452d6bbb3fbe3147a35b9b147a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0cbe2dc23f027b60666cc9544fdff8ed3db9a9c0751fe7608cc4f424aa8b192f->leave($__internal_0cbe2dc23f027b60666cc9544fdff8ed3db9a9c0751fe7608cc4f424aa8b192f_prof);

        
        $__internal_429e3912823e3b5ebc109f84f9683ece44111d452d6bbb3fbe3147a35b9b147a->leave($__internal_429e3912823e3b5ebc109f84f9683ece44111d452d6bbb3fbe3147a35b9b147a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
