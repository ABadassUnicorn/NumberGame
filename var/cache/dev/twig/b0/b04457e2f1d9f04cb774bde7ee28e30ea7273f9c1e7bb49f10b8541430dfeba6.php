<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3ef9d952930916fe1ca33e5696665dfcf61757086255e7c5a6833acafdab8917 extends Twig_Template
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
        $__internal_ced6534074c002d0c525c170ec275d2547148bf0b771dd4b563a805313d4b89a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced6534074c002d0c525c170ec275d2547148bf0b771dd4b563a805313d4b89a->enter($__internal_ced6534074c002d0c525c170ec275d2547148bf0b771dd4b563a805313d4b89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_7565ee201bc3bc90063fc7420967dd75dd24c931d8efc1c82b38f8b8b0a05148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7565ee201bc3bc90063fc7420967dd75dd24c931d8efc1c82b38f8b8b0a05148->enter($__internal_7565ee201bc3bc90063fc7420967dd75dd24c931d8efc1c82b38f8b8b0a05148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ced6534074c002d0c525c170ec275d2547148bf0b771dd4b563a805313d4b89a->leave($__internal_ced6534074c002d0c525c170ec275d2547148bf0b771dd4b563a805313d4b89a_prof);

        
        $__internal_7565ee201bc3bc90063fc7420967dd75dd24c931d8efc1c82b38f8b8b0a05148->leave($__internal_7565ee201bc3bc90063fc7420967dd75dd24c931d8efc1c82b38f8b8b0a05148_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
