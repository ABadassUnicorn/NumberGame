<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_632e80d4072a5d972e8b7f3aaf3b35b5e46c7124b0864d973e3abea4250063b6 extends Twig_Template
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
        $__internal_3f2f32c00fe41c694fa623fe4ee4d42be4421d6ba54401ee35514b70554c4f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f2f32c00fe41c694fa623fe4ee4d42be4421d6ba54401ee35514b70554c4f67->enter($__internal_3f2f32c00fe41c694fa623fe4ee4d42be4421d6ba54401ee35514b70554c4f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_9fcc874d4759d6203c759ba0b39b07aa689abf8d79c66b23009239688d4ef5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fcc874d4759d6203c759ba0b39b07aa689abf8d79c66b23009239688d4ef5d8->enter($__internal_9fcc874d4759d6203c759ba0b39b07aa689abf8d79c66b23009239688d4ef5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3f2f32c00fe41c694fa623fe4ee4d42be4421d6ba54401ee35514b70554c4f67->leave($__internal_3f2f32c00fe41c694fa623fe4ee4d42be4421d6ba54401ee35514b70554c4f67_prof);

        
        $__internal_9fcc874d4759d6203c759ba0b39b07aa689abf8d79c66b23009239688d4ef5d8->leave($__internal_9fcc874d4759d6203c759ba0b39b07aa689abf8d79c66b23009239688d4ef5d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
