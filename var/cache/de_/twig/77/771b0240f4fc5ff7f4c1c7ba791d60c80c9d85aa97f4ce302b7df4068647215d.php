<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2a07728a075f817aaadde3816cb9f24d93635e597c7e752f81a5ef29ab3774ed extends Twig_Template
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
        $__internal_1eb5fd71226257cd14d3e2d04ca88319bc7978a8f20e3cfc46e0ce8f89f12e7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb5fd71226257cd14d3e2d04ca88319bc7978a8f20e3cfc46e0ce8f89f12e7d->enter($__internal_1eb5fd71226257cd14d3e2d04ca88319bc7978a8f20e3cfc46e0ce8f89f12e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_39f5295af501b888cbe7c0cf0435691ffd94707e250a507605e6a0314c288c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f5295af501b888cbe7c0cf0435691ffd94707e250a507605e6a0314c288c8c->enter($__internal_39f5295af501b888cbe7c0cf0435691ffd94707e250a507605e6a0314c288c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_1eb5fd71226257cd14d3e2d04ca88319bc7978a8f20e3cfc46e0ce8f89f12e7d->leave($__internal_1eb5fd71226257cd14d3e2d04ca88319bc7978a8f20e3cfc46e0ce8f89f12e7d_prof);

        
        $__internal_39f5295af501b888cbe7c0cf0435691ffd94707e250a507605e6a0314c288c8c->leave($__internal_39f5295af501b888cbe7c0cf0435691ffd94707e250a507605e6a0314c288c8c_prof);

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
", "@Twig/Exception/error.rdf.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
