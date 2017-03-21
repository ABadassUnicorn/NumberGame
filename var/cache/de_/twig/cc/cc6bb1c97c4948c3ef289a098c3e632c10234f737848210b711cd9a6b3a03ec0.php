<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5d3d74439d9b2acc53263b7405dfc7048bae657c9bb1d450823f78474fbafc8c extends Twig_Template
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
        $__internal_3583c3adea2f7856bfa3e565abe74a86aa2c4f70ce0b9d7241a3525f43e40bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3583c3adea2f7856bfa3e565abe74a86aa2c4f70ce0b9d7241a3525f43e40bf9->enter($__internal_3583c3adea2f7856bfa3e565abe74a86aa2c4f70ce0b9d7241a3525f43e40bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_c5a4d109ef58d495274bc8b6a3a188a3a0787761a42b2caadda429d8de2cebf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a4d109ef58d495274bc8b6a3a188a3a0787761a42b2caadda429d8de2cebf2->enter($__internal_c5a4d109ef58d495274bc8b6a3a188a3a0787761a42b2caadda429d8de2cebf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3583c3adea2f7856bfa3e565abe74a86aa2c4f70ce0b9d7241a3525f43e40bf9->leave($__internal_3583c3adea2f7856bfa3e565abe74a86aa2c4f70ce0b9d7241a3525f43e40bf9_prof);

        
        $__internal_c5a4d109ef58d495274bc8b6a3a188a3a0787761a42b2caadda429d8de2cebf2->leave($__internal_c5a4d109ef58d495274bc8b6a3a188a3a0787761a42b2caadda429d8de2cebf2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
