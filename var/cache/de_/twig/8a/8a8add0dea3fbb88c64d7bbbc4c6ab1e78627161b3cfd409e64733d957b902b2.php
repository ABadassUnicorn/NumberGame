<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9968440b2d93115f1a02a199e19813ba7e7ac348ae8cc065329edb930183f4ed extends Twig_Template
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
        $__internal_a62f8185a6d5247e977e83be6a46145159f47279a5ecc9827e4366fb307c856d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62f8185a6d5247e977e83be6a46145159f47279a5ecc9827e4366fb307c856d->enter($__internal_a62f8185a6d5247e977e83be6a46145159f47279a5ecc9827e4366fb307c856d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_b75f608ab662401082177c3f1885ad85beaf7343cd1942c7b7e02f26295c96e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75f608ab662401082177c3f1885ad85beaf7343cd1942c7b7e02f26295c96e0->enter($__internal_b75f608ab662401082177c3f1885ad85beaf7343cd1942c7b7e02f26295c96e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_a62f8185a6d5247e977e83be6a46145159f47279a5ecc9827e4366fb307c856d->leave($__internal_a62f8185a6d5247e977e83be6a46145159f47279a5ecc9827e4366fb307c856d_prof);

        
        $__internal_b75f608ab662401082177c3f1885ad85beaf7343cd1942c7b7e02f26295c96e0->leave($__internal_b75f608ab662401082177c3f1885ad85beaf7343cd1942c7b7e02f26295c96e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
