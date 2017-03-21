<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6cf2154bce0e3498c80a50c22d36288d2aea0cd063b1856f2ea220ef67f9339c extends Twig_Template
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
        $__internal_922c51f962baaaf179e51d542fbfa3305ae07d1bcc80c72550c2733953b6a548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_922c51f962baaaf179e51d542fbfa3305ae07d1bcc80c72550c2733953b6a548->enter($__internal_922c51f962baaaf179e51d542fbfa3305ae07d1bcc80c72550c2733953b6a548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_60b2a37289698c8ba899eb4010df5a75d2a1d2e68488aec2bc7835f653bc885f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b2a37289698c8ba899eb4010df5a75d2a1d2e68488aec2bc7835f653bc885f->enter($__internal_60b2a37289698c8ba899eb4010df5a75d2a1d2e68488aec2bc7835f653bc885f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_922c51f962baaaf179e51d542fbfa3305ae07d1bcc80c72550c2733953b6a548->leave($__internal_922c51f962baaaf179e51d542fbfa3305ae07d1bcc80c72550c2733953b6a548_prof);

        
        $__internal_60b2a37289698c8ba899eb4010df5a75d2a1d2e68488aec2bc7835f653bc885f->leave($__internal_60b2a37289698c8ba899eb4010df5a75d2a1d2e68488aec2bc7835f653bc885f_prof);

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
", "TwigBundle:Exception:exception.json.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
