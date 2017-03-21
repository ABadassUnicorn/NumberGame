<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_24b981a7545d7d2016fc70f70544b591b4080db48c234867b03e01559eae03fe extends Twig_Template
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
        $__internal_675c486104429b0cbca2837101d174878b31a2970addd92112e4e2e43cfed9e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_675c486104429b0cbca2837101d174878b31a2970addd92112e4e2e43cfed9e8->enter($__internal_675c486104429b0cbca2837101d174878b31a2970addd92112e4e2e43cfed9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_385800e0acd6c6e6e1e5b01bad4c3dee965e90b540a3fb0969e3f058c20aee14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385800e0acd6c6e6e1e5b01bad4c3dee965e90b540a3fb0969e3f058c20aee14->enter($__internal_385800e0acd6c6e6e1e5b01bad4c3dee965e90b540a3fb0969e3f058c20aee14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_675c486104429b0cbca2837101d174878b31a2970addd92112e4e2e43cfed9e8->leave($__internal_675c486104429b0cbca2837101d174878b31a2970addd92112e4e2e43cfed9e8_prof);

        
        $__internal_385800e0acd6c6e6e1e5b01bad4c3dee965e90b540a3fb0969e3f058c20aee14->leave($__internal_385800e0acd6c6e6e1e5b01bad4c3dee965e90b540a3fb0969e3f058c20aee14_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
