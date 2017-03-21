<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_76f015754e7ad0fc1c1d666262539fc382fc587b740dfb380a6154d9bd2c30c7 extends Twig_Template
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
        $__internal_31a51d60afc752ec86bd2628ff2b5b4c5d0d21fd7a4cce84bfa6b69361032305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a51d60afc752ec86bd2628ff2b5b4c5d0d21fd7a4cce84bfa6b69361032305->enter($__internal_31a51d60afc752ec86bd2628ff2b5b4c5d0d21fd7a4cce84bfa6b69361032305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_afccbaadc7115f4812feddda3ddab34c82219cae356ec7d6cbe24e461f5b9984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afccbaadc7115f4812feddda3ddab34c82219cae356ec7d6cbe24e461f5b9984->enter($__internal_afccbaadc7115f4812feddda3ddab34c82219cae356ec7d6cbe24e461f5b9984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_31a51d60afc752ec86bd2628ff2b5b4c5d0d21fd7a4cce84bfa6b69361032305->leave($__internal_31a51d60afc752ec86bd2628ff2b5b4c5d0d21fd7a4cce84bfa6b69361032305_prof);

        
        $__internal_afccbaadc7115f4812feddda3ddab34c82219cae356ec7d6cbe24e461f5b9984->leave($__internal_afccbaadc7115f4812feddda3ddab34c82219cae356ec7d6cbe24e461f5b9984_prof);

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
", "@Twig/Exception/exception.rdf.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
