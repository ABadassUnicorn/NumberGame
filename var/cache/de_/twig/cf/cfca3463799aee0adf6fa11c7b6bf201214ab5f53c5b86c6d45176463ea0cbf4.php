<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_a261338bea14f1fac330af28b13b0574db0d521b1577cec991934d3e3453b334 extends Twig_Template
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
        $__internal_626b056adb051600e5b5e9d1968881a77b611a4cfa4034733877528cc8734633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626b056adb051600e5b5e9d1968881a77b611a4cfa4034733877528cc8734633->enter($__internal_626b056adb051600e5b5e9d1968881a77b611a4cfa4034733877528cc8734633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_84685dfe5c27da17e3a6c841acd635ad4613d1959a4f864571318749ad98cfc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84685dfe5c27da17e3a6c841acd635ad4613d1959a4f864571318749ad98cfc5->enter($__internal_84685dfe5c27da17e3a6c841acd635ad4613d1959a4f864571318749ad98cfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_626b056adb051600e5b5e9d1968881a77b611a4cfa4034733877528cc8734633->leave($__internal_626b056adb051600e5b5e9d1968881a77b611a4cfa4034733877528cc8734633_prof);

        
        $__internal_84685dfe5c27da17e3a6c841acd635ad4613d1959a4f864571318749ad98cfc5->leave($__internal_84685dfe5c27da17e3a6c841acd635ad4613d1959a4f864571318749ad98cfc5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
