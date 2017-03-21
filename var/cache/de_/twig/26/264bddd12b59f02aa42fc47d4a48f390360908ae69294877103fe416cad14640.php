<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_943408a63b17447638f3541f415731d85fc2bc827d6b17b51a949005a55948ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d4e631b09d2bd5d9fe95d76d981b8251fcd2118be56c5e7b41a2c8d08b0e833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4e631b09d2bd5d9fe95d76d981b8251fcd2118be56c5e7b41a2c8d08b0e833->enter($__internal_5d4e631b09d2bd5d9fe95d76d981b8251fcd2118be56c5e7b41a2c8d08b0e833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_b8c256c938e36b49d433de4abc4a8476421d0d9dfae77777551d0b2100c161f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c256c938e36b49d433de4abc4a8476421d0d9dfae77777551d0b2100c161f3->enter($__internal_b8c256c938e36b49d433de4abc4a8476421d0d9dfae77777551d0b2100c161f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d4e631b09d2bd5d9fe95d76d981b8251fcd2118be56c5e7b41a2c8d08b0e833->leave($__internal_5d4e631b09d2bd5d9fe95d76d981b8251fcd2118be56c5e7b41a2c8d08b0e833_prof);

        
        $__internal_b8c256c938e36b49d433de4abc4a8476421d0d9dfae77777551d0b2100c161f3->leave($__internal_b8c256c938e36b49d433de4abc4a8476421d0d9dfae77777551d0b2100c161f3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b48f1634c664585b5c0cf9df0f5bbe46ca376a9fb7e4c8b76e669bfe8e2773c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b48f1634c664585b5c0cf9df0f5bbe46ca376a9fb7e4c8b76e669bfe8e2773c->enter($__internal_0b48f1634c664585b5c0cf9df0f5bbe46ca376a9fb7e4c8b76e669bfe8e2773c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a4155018642feb4ac6a713de5e453bd3fe64e68576f5f4dfbd7648c33d3b7ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4155018642feb4ac6a713de5e453bd3fe64e68576f5f4dfbd7648c33d3b7ca6->enter($__internal_a4155018642feb4ac6a713de5e453bd3fe64e68576f5f4dfbd7648c33d3b7ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a4155018642feb4ac6a713de5e453bd3fe64e68576f5f4dfbd7648c33d3b7ca6->leave($__internal_a4155018642feb4ac6a713de5e453bd3fe64e68576f5f4dfbd7648c33d3b7ca6_prof);

        
        $__internal_0b48f1634c664585b5c0cf9df0f5bbe46ca376a9fb7e4c8b76e669bfe8e2773c->leave($__internal_0b48f1634c664585b5c0cf9df0f5bbe46ca376a9fb7e4c8b76e669bfe8e2773c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_998ad5e9825c65a3f59955f9e0928a30035d30b29b79ac7a5e7d96025e51b994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_998ad5e9825c65a3f59955f9e0928a30035d30b29b79ac7a5e7d96025e51b994->enter($__internal_998ad5e9825c65a3f59955f9e0928a30035d30b29b79ac7a5e7d96025e51b994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ecf8373ba0295dd804cb1192859fa5ead3e52d7edcf54f2e359a6d5d534885e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf8373ba0295dd804cb1192859fa5ead3e52d7edcf54f2e359a6d5d534885e0->enter($__internal_ecf8373ba0295dd804cb1192859fa5ead3e52d7edcf54f2e359a6d5d534885e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_ecf8373ba0295dd804cb1192859fa5ead3e52d7edcf54f2e359a6d5d534885e0->leave($__internal_ecf8373ba0295dd804cb1192859fa5ead3e52d7edcf54f2e359a6d5d534885e0_prof);

        
        $__internal_998ad5e9825c65a3f59955f9e0928a30035d30b29b79ac7a5e7d96025e51b994->leave($__internal_998ad5e9825c65a3f59955f9e0928a30035d30b29b79ac7a5e7d96025e51b994_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
