<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8ce7f5a6bf58a6cf3002c122498ff51cf248a8fe4dbf14cb30a4b75bec7a2237 extends Twig_Template
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
        $__internal_a5fdba3c8a2b8440117487595f1c196dbbb096aae804c58d6e758fb00b019fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5fdba3c8a2b8440117487595f1c196dbbb096aae804c58d6e758fb00b019fcc->enter($__internal_a5fdba3c8a2b8440117487595f1c196dbbb096aae804c58d6e758fb00b019fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_15866133645236f8a43acf6f3b0ca5570f072894da3dff48746f817c01821b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15866133645236f8a43acf6f3b0ca5570f072894da3dff48746f817c01821b3f->enter($__internal_15866133645236f8a43acf6f3b0ca5570f072894da3dff48746f817c01821b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a5fdba3c8a2b8440117487595f1c196dbbb096aae804c58d6e758fb00b019fcc->leave($__internal_a5fdba3c8a2b8440117487595f1c196dbbb096aae804c58d6e758fb00b019fcc_prof);

        
        $__internal_15866133645236f8a43acf6f3b0ca5570f072894da3dff48746f817c01821b3f->leave($__internal_15866133645236f8a43acf6f3b0ca5570f072894da3dff48746f817c01821b3f_prof);

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
", "TwigBundle:Exception:error.json.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
