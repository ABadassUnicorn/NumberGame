<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_07a856fa5ae472f6ca0eb490dfb3c825a21bbd40c688390432031f138c82e0f6 extends Twig_Template
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
        $__internal_11e8e03b8951f2e236605c781c31dd09fbfca17e7c2592959bafb454d1d644e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11e8e03b8951f2e236605c781c31dd09fbfca17e7c2592959bafb454d1d644e9->enter($__internal_11e8e03b8951f2e236605c781c31dd09fbfca17e7c2592959bafb454d1d644e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_0f90c6e7a13e30d7a6443ebab9e8b77088d25f5b7398c2d4cee09c5de6aeb342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f90c6e7a13e30d7a6443ebab9e8b77088d25f5b7398c2d4cee09c5de6aeb342->enter($__internal_0f90c6e7a13e30d7a6443ebab9e8b77088d25f5b7398c2d4cee09c5de6aeb342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_11e8e03b8951f2e236605c781c31dd09fbfca17e7c2592959bafb454d1d644e9->leave($__internal_11e8e03b8951f2e236605c781c31dd09fbfca17e7c2592959bafb454d1d644e9_prof);

        
        $__internal_0f90c6e7a13e30d7a6443ebab9e8b77088d25f5b7398c2d4cee09c5de6aeb342->leave($__internal_0f90c6e7a13e30d7a6443ebab9e8b77088d25f5b7398c2d4cee09c5de6aeb342_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
