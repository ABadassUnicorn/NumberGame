<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_084bc374aea5dc5ea858bf7d4c45140cf7d47e3aaa157f16cf3c358f15d1b64f extends Twig_Template
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
        $__internal_932ea49df5eb58d2fb104af4ec544a4947c139e6104f5c6935610bee1cadd4ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_932ea49df5eb58d2fb104af4ec544a4947c139e6104f5c6935610bee1cadd4ba->enter($__internal_932ea49df5eb58d2fb104af4ec544a4947c139e6104f5c6935610bee1cadd4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_b8913494687e0eb73675488b430a50d89a06cb8ea401991daf526d7798a4b8f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8913494687e0eb73675488b430a50d89a06cb8ea401991daf526d7798a4b8f7->enter($__internal_b8913494687e0eb73675488b430a50d89a06cb8ea401991daf526d7798a4b8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_932ea49df5eb58d2fb104af4ec544a4947c139e6104f5c6935610bee1cadd4ba->leave($__internal_932ea49df5eb58d2fb104af4ec544a4947c139e6104f5c6935610bee1cadd4ba_prof);

        
        $__internal_b8913494687e0eb73675488b430a50d89a06cb8ea401991daf526d7798a4b8f7->leave($__internal_b8913494687e0eb73675488b430a50d89a06cb8ea401991daf526d7798a4b8f7_prof);

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
", "@Twig/Exception/exception.atom.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
