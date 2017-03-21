<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_e4d448095ba039b94b95ba09c3158f224777207c736fd2f14663526b35d4560b extends Twig_Template
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
        $__internal_647c0b9da24f706ff3216fd3bf0ca160ef6e4faa7513c3466092e20a1eeb51db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_647c0b9da24f706ff3216fd3bf0ca160ef6e4faa7513c3466092e20a1eeb51db->enter($__internal_647c0b9da24f706ff3216fd3bf0ca160ef6e4faa7513c3466092e20a1eeb51db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_c87ae47744a360ba83d8f5a01013e3744dfef691a9c58039c337d0cfb7b56ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87ae47744a360ba83d8f5a01013e3744dfef691a9c58039c337d0cfb7b56ba8->enter($__internal_c87ae47744a360ba83d8f5a01013e3744dfef691a9c58039c337d0cfb7b56ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_647c0b9da24f706ff3216fd3bf0ca160ef6e4faa7513c3466092e20a1eeb51db->leave($__internal_647c0b9da24f706ff3216fd3bf0ca160ef6e4faa7513c3466092e20a1eeb51db_prof);

        
        $__internal_c87ae47744a360ba83d8f5a01013e3744dfef691a9c58039c337d0cfb7b56ba8->leave($__internal_c87ae47744a360ba83d8f5a01013e3744dfef691a9c58039c337d0cfb7b56ba8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f75fd1b1a72b6fdf0a851bdf17eb41a0cc96e82aaa4016638f6a5e4fb0ffe7b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f75fd1b1a72b6fdf0a851bdf17eb41a0cc96e82aaa4016638f6a5e4fb0ffe7b1->enter($__internal_f75fd1b1a72b6fdf0a851bdf17eb41a0cc96e82aaa4016638f6a5e4fb0ffe7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_84fc00119ccadc78c98c598e3324923b7e3cbe5de4707ae47864ab97938f67dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fc00119ccadc78c98c598e3324923b7e3cbe5de4707ae47864ab97938f67dc->enter($__internal_84fc00119ccadc78c98c598e3324923b7e3cbe5de4707ae47864ab97938f67dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_84fc00119ccadc78c98c598e3324923b7e3cbe5de4707ae47864ab97938f67dc->leave($__internal_84fc00119ccadc78c98c598e3324923b7e3cbe5de4707ae47864ab97938f67dc_prof);

        
        $__internal_f75fd1b1a72b6fdf0a851bdf17eb41a0cc96e82aaa4016638f6a5e4fb0ffe7b1->leave($__internal_f75fd1b1a72b6fdf0a851bdf17eb41a0cc96e82aaa4016638f6a5e4fb0ffe7b1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ee1b83640c4bc5b89e45014d2656c3f25c09f7fd3554760a243cd3b6dfe06a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ee1b83640c4bc5b89e45014d2656c3f25c09f7fd3554760a243cd3b6dfe06a3->enter($__internal_9ee1b83640c4bc5b89e45014d2656c3f25c09f7fd3554760a243cd3b6dfe06a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd7e75a3649be09fd7044bd27db0d4a81cad0d208f3947105ff125f044c5b5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7e75a3649be09fd7044bd27db0d4a81cad0d208f3947105ff125f044c5b5c4->enter($__internal_fd7e75a3649be09fd7044bd27db0d4a81cad0d208f3947105ff125f044c5b5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_fd7e75a3649be09fd7044bd27db0d4a81cad0d208f3947105ff125f044c5b5c4->leave($__internal_fd7e75a3649be09fd7044bd27db0d4a81cad0d208f3947105ff125f044c5b5c4_prof);

        
        $__internal_9ee1b83640c4bc5b89e45014d2656c3f25c09f7fd3554760a243cd3b6dfe06a3->leave($__internal_9ee1b83640c4bc5b89e45014d2656c3f25c09f7fd3554760a243cd3b6dfe06a3_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
