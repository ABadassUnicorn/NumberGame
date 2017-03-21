<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_ed8c664f3c4489b91e088b489a230fd6fed918da917287d513991e9799dbe40d extends Twig_Template
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
        $__internal_a471898dd1a28e03464afe0b2f847e08eb401b5160cb428cf5035bc3c09304bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a471898dd1a28e03464afe0b2f847e08eb401b5160cb428cf5035bc3c09304bc->enter($__internal_a471898dd1a28e03464afe0b2f847e08eb401b5160cb428cf5035bc3c09304bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_f9aec1ae2aee739bb3da843edc327f16d1ca18d5fd703abe09d8a29e4d1bb8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9aec1ae2aee739bb3da843edc327f16d1ca18d5fd703abe09d8a29e4d1bb8ae->enter($__internal_f9aec1ae2aee739bb3da843edc327f16d1ca18d5fd703abe09d8a29e4d1bb8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a471898dd1a28e03464afe0b2f847e08eb401b5160cb428cf5035bc3c09304bc->leave($__internal_a471898dd1a28e03464afe0b2f847e08eb401b5160cb428cf5035bc3c09304bc_prof);

        
        $__internal_f9aec1ae2aee739bb3da843edc327f16d1ca18d5fd703abe09d8a29e4d1bb8ae->leave($__internal_f9aec1ae2aee739bb3da843edc327f16d1ca18d5fd703abe09d8a29e4d1bb8ae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
