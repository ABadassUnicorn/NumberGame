<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_dcd2031f10ea4a06f3ad0574a474ac578c104f96d211282034d4af7dc213dca5 extends Twig_Template
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
        $__internal_34c98b1a2e475e5fe889ac62ea32d6f0f5d4212b28e51481d8f35434e194dc2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c98b1a2e475e5fe889ac62ea32d6f0f5d4212b28e51481d8f35434e194dc2d->enter($__internal_34c98b1a2e475e5fe889ac62ea32d6f0f5d4212b28e51481d8f35434e194dc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_0672dae29b0623ba594520831953e2b9a586d86777eaa82b56dd8f9d3064f882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0672dae29b0623ba594520831953e2b9a586d86777eaa82b56dd8f9d3064f882->enter($__internal_0672dae29b0623ba594520831953e2b9a586d86777eaa82b56dd8f9d3064f882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_34c98b1a2e475e5fe889ac62ea32d6f0f5d4212b28e51481d8f35434e194dc2d->leave($__internal_34c98b1a2e475e5fe889ac62ea32d6f0f5d4212b28e51481d8f35434e194dc2d_prof);

        
        $__internal_0672dae29b0623ba594520831953e2b9a586d86777eaa82b56dd8f9d3064f882->leave($__internal_0672dae29b0623ba594520831953e2b9a586d86777eaa82b56dd8f9d3064f882_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
