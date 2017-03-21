<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_bd9b56e9d14e5cf8fcbd41deb15ec8c034ec79fd84ec68393e2105955adc6a29 extends Twig_Template
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
        $__internal_ef2c07c019e3cdb0d9c0feae26306e2a750aee045d7b44c41d773a974d7002f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef2c07c019e3cdb0d9c0feae26306e2a750aee045d7b44c41d773a974d7002f0->enter($__internal_ef2c07c019e3cdb0d9c0feae26306e2a750aee045d7b44c41d773a974d7002f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_052dae1e18b9ac1db2a6499ca10dd2d3bfa20e144c86bb6719ec5264c396f49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_052dae1e18b9ac1db2a6499ca10dd2d3bfa20e144c86bb6719ec5264c396f49a->enter($__internal_052dae1e18b9ac1db2a6499ca10dd2d3bfa20e144c86bb6719ec5264c396f49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ef2c07c019e3cdb0d9c0feae26306e2a750aee045d7b44c41d773a974d7002f0->leave($__internal_ef2c07c019e3cdb0d9c0feae26306e2a750aee045d7b44c41d773a974d7002f0_prof);

        
        $__internal_052dae1e18b9ac1db2a6499ca10dd2d3bfa20e144c86bb6719ec5264c396f49a->leave($__internal_052dae1e18b9ac1db2a6499ca10dd2d3bfa20e144c86bb6719ec5264c396f49a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
