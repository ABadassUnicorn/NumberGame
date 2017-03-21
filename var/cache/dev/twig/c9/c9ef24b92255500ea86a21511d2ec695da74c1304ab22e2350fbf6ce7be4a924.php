<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_be2293c2652753e68cd65edcf30ad09b53a47bb4d9ecb26069fd7d7c8c18d07c extends Twig_Template
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
        $__internal_8e6e9e683288e2c9f377eaeb0f7b0386519f79b5c77c285d5e4c70a30270bd66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6e9e683288e2c9f377eaeb0f7b0386519f79b5c77c285d5e4c70a30270bd66->enter($__internal_8e6e9e683288e2c9f377eaeb0f7b0386519f79b5c77c285d5e4c70a30270bd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_258efccc30d358d10e2c128a24e94394900dff990e710b89df9fb822ed1c50e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258efccc30d358d10e2c128a24e94394900dff990e710b89df9fb822ed1c50e9->enter($__internal_258efccc30d358d10e2c128a24e94394900dff990e710b89df9fb822ed1c50e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8e6e9e683288e2c9f377eaeb0f7b0386519f79b5c77c285d5e4c70a30270bd66->leave($__internal_8e6e9e683288e2c9f377eaeb0f7b0386519f79b5c77c285d5e4c70a30270bd66_prof);

        
        $__internal_258efccc30d358d10e2c128a24e94394900dff990e710b89df9fb822ed1c50e9->leave($__internal_258efccc30d358d10e2c128a24e94394900dff990e710b89df9fb822ed1c50e9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
