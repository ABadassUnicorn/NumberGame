<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_0f96c60b3337d075f8bdabc0f9cb6a8ced6d05cbb36ddacaf8c9143845176906 extends Twig_Template
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
        $__internal_d09fc7f9cb588bc352143460acf9d14548b555d2ff94cc8f88576ffa7e6dc8ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d09fc7f9cb588bc352143460acf9d14548b555d2ff94cc8f88576ffa7e6dc8ec->enter($__internal_d09fc7f9cb588bc352143460acf9d14548b555d2ff94cc8f88576ffa7e6dc8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_fe11d3b76d046740a8ae62d0103bd0e14199b77b52c57a7b7f7f37e8f53a26cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe11d3b76d046740a8ae62d0103bd0e14199b77b52c57a7b7f7f37e8f53a26cc->enter($__internal_fe11d3b76d046740a8ae62d0103bd0e14199b77b52c57a7b7f7f37e8f53a26cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d09fc7f9cb588bc352143460acf9d14548b555d2ff94cc8f88576ffa7e6dc8ec->leave($__internal_d09fc7f9cb588bc352143460acf9d14548b555d2ff94cc8f88576ffa7e6dc8ec_prof);

        
        $__internal_fe11d3b76d046740a8ae62d0103bd0e14199b77b52c57a7b7f7f37e8f53a26cc->leave($__internal_fe11d3b76d046740a8ae62d0103bd0e14199b77b52c57a7b7f7f37e8f53a26cc_prof);

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
", "@Twig/Exception/exception.css.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
