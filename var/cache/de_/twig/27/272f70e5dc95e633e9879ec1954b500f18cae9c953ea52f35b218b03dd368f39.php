<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_19cc094348e3997f384c68a4f2c54ee7a5c907985ec5881dd4354f53cc850f5e extends Twig_Template
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
        $__internal_d8502b9ad804143aed17f6311f474ce9e997566a7def3d2bf79d55285569a3a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8502b9ad804143aed17f6311f474ce9e997566a7def3d2bf79d55285569a3a8->enter($__internal_d8502b9ad804143aed17f6311f474ce9e997566a7def3d2bf79d55285569a3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_2d2efa549b1236019bbb1d1e37a91a026561140ae8829fe2f67836d789c8ea58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2efa549b1236019bbb1d1e37a91a026561140ae8829fe2f67836d789c8ea58->enter($__internal_2d2efa549b1236019bbb1d1e37a91a026561140ae8829fe2f67836d789c8ea58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_d8502b9ad804143aed17f6311f474ce9e997566a7def3d2bf79d55285569a3a8->leave($__internal_d8502b9ad804143aed17f6311f474ce9e997566a7def3d2bf79d55285569a3a8_prof);

        
        $__internal_2d2efa549b1236019bbb1d1e37a91a026561140ae8829fe2f67836d789c8ea58->leave($__internal_2d2efa549b1236019bbb1d1e37a91a026561140ae8829fe2f67836d789c8ea58_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
