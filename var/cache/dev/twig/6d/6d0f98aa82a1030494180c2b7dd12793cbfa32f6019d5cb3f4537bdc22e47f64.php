<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_31160a65bc56bde7bb6e70d2af0e04805402f339213cff54929fff97d2e159f7 extends Twig_Template
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
        $__internal_3edb35d5a0c195b1a07de9a5fc476ccbaa6b7aac5aee57e2890c7873610d051f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3edb35d5a0c195b1a07de9a5fc476ccbaa6b7aac5aee57e2890c7873610d051f->enter($__internal_3edb35d5a0c195b1a07de9a5fc476ccbaa6b7aac5aee57e2890c7873610d051f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_0c103000eeec2a425d39211be4ce7dbc594a475ad0afadfa78ba8ff8b8d6008c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c103000eeec2a425d39211be4ce7dbc594a475ad0afadfa78ba8ff8b8d6008c->enter($__internal_0c103000eeec2a425d39211be4ce7dbc594a475ad0afadfa78ba8ff8b8d6008c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_3edb35d5a0c195b1a07de9a5fc476ccbaa6b7aac5aee57e2890c7873610d051f->leave($__internal_3edb35d5a0c195b1a07de9a5fc476ccbaa6b7aac5aee57e2890c7873610d051f_prof);

        
        $__internal_0c103000eeec2a425d39211be4ce7dbc594a475ad0afadfa78ba8ff8b8d6008c->leave($__internal_0c103000eeec2a425d39211be4ce7dbc594a475ad0afadfa78ba8ff8b8d6008c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
