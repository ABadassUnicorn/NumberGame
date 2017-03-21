<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_cd21b9371a78ec8e77148ba0a8cec526152975869787d4f921385dcdaf46f9ec extends Twig_Template
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
        $__internal_10918036270f4d44e723b7d4aa2469c106dbda4765a8cf2d4c6a3ad663bbf73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10918036270f4d44e723b7d4aa2469c106dbda4765a8cf2d4c6a3ad663bbf73a->enter($__internal_10918036270f4d44e723b7d4aa2469c106dbda4765a8cf2d4c6a3ad663bbf73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_1a2060bd123055aa0eb1af4523825bb67546ac444ba9bda042fc5e0d59291475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2060bd123055aa0eb1af4523825bb67546ac444ba9bda042fc5e0d59291475->enter($__internal_1a2060bd123055aa0eb1af4523825bb67546ac444ba9bda042fc5e0d59291475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_10918036270f4d44e723b7d4aa2469c106dbda4765a8cf2d4c6a3ad663bbf73a->leave($__internal_10918036270f4d44e723b7d4aa2469c106dbda4765a8cf2d4c6a3ad663bbf73a_prof);

        
        $__internal_1a2060bd123055aa0eb1af4523825bb67546ac444ba9bda042fc5e0d59291475->leave($__internal_1a2060bd123055aa0eb1af4523825bb67546ac444ba9bda042fc5e0d59291475_prof);

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
", "TwigBundle:Exception:exception.js.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
