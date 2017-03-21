<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_0598991c1348501136658d34bd9f294657aaed3471e605ef6dfda3056a8e8294 extends Twig_Template
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
        $__internal_f1d16c7af9fa62e2cda0b31e30f111c9b02c02f3054b55b9f1ad892bb429df12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d16c7af9fa62e2cda0b31e30f111c9b02c02f3054b55b9f1ad892bb429df12->enter($__internal_f1d16c7af9fa62e2cda0b31e30f111c9b02c02f3054b55b9f1ad892bb429df12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_b0fa5633ac7e3a7773eb902700b1d71250549cade61e340a66c58f45d3d67d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fa5633ac7e3a7773eb902700b1d71250549cade61e340a66c58f45d3d67d7f->enter($__internal_b0fa5633ac7e3a7773eb902700b1d71250549cade61e340a66c58f45d3d67d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f1d16c7af9fa62e2cda0b31e30f111c9b02c02f3054b55b9f1ad892bb429df12->leave($__internal_f1d16c7af9fa62e2cda0b31e30f111c9b02c02f3054b55b9f1ad892bb429df12_prof);

        
        $__internal_b0fa5633ac7e3a7773eb902700b1d71250549cade61e340a66c58f45d3d67d7f->leave($__internal_b0fa5633ac7e3a7773eb902700b1d71250549cade61e340a66c58f45d3d67d7f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
