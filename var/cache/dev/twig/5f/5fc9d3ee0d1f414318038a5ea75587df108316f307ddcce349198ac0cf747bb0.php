<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_9f165a5000e013749c3974a76c95462226030582712a628b26f3331ad49a5b67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_f89bc13a088efbd5919fb443021435d7733afe531829abefbdafad154b68da2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89bc13a088efbd5919fb443021435d7733afe531829abefbdafad154b68da2e->enter($__internal_f89bc13a088efbd5919fb443021435d7733afe531829abefbdafad154b68da2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_39b5a2bbf310ca4f05fd267e647cc36f462eb2527184a1090b28c80719d9d87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b5a2bbf310ca4f05fd267e647cc36f462eb2527184a1090b28c80719d9d87e->enter($__internal_39b5a2bbf310ca4f05fd267e647cc36f462eb2527184a1090b28c80719d9d87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f89bc13a088efbd5919fb443021435d7733afe531829abefbdafad154b68da2e->leave($__internal_f89bc13a088efbd5919fb443021435d7733afe531829abefbdafad154b68da2e_prof);

        
        $__internal_39b5a2bbf310ca4f05fd267e647cc36f462eb2527184a1090b28c80719d9d87e->leave($__internal_39b5a2bbf310ca4f05fd267e647cc36f462eb2527184a1090b28c80719d9d87e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e164bfc97d64717b5b8fba0811740f57eeb963c39657e217d1adfc806c653bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e164bfc97d64717b5b8fba0811740f57eeb963c39657e217d1adfc806c653bc->enter($__internal_1e164bfc97d64717b5b8fba0811740f57eeb963c39657e217d1adfc806c653bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0e1f978d982f9cc221869618a7875cb9855f2b325b047b5b0ea6a353bcbd3221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1f978d982f9cc221869618a7875cb9855f2b325b047b5b0ea6a353bcbd3221->enter($__internal_0e1f978d982f9cc221869618a7875cb9855f2b325b047b5b0ea6a353bcbd3221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0e1f978d982f9cc221869618a7875cb9855f2b325b047b5b0ea6a353bcbd3221->leave($__internal_0e1f978d982f9cc221869618a7875cb9855f2b325b047b5b0ea6a353bcbd3221_prof);

        
        $__internal_1e164bfc97d64717b5b8fba0811740f57eeb963c39657e217d1adfc806c653bc->leave($__internal_1e164bfc97d64717b5b8fba0811740f57eeb963c39657e217d1adfc806c653bc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d1229fca401b3a8dca32c3ba751115524ccb9d1fcca407c2c2884dbad30f61b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1229fca401b3a8dca32c3ba751115524ccb9d1fcca407c2c2884dbad30f61b->enter($__internal_0d1229fca401b3a8dca32c3ba751115524ccb9d1fcca407c2c2884dbad30f61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a198bfb460f6c5f8f91b6d4dd14fdce3b4c58b8ae7f06f7aad46401931e5ec50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a198bfb460f6c5f8f91b6d4dd14fdce3b4c58b8ae7f06f7aad46401931e5ec50->enter($__internal_a198bfb460f6c5f8f91b6d4dd14fdce3b4c58b8ae7f06f7aad46401931e5ec50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a198bfb460f6c5f8f91b6d4dd14fdce3b4c58b8ae7f06f7aad46401931e5ec50->leave($__internal_a198bfb460f6c5f8f91b6d4dd14fdce3b4c58b8ae7f06f7aad46401931e5ec50_prof);

        
        $__internal_0d1229fca401b3a8dca32c3ba751115524ccb9d1fcca407c2c2884dbad30f61b->leave($__internal_0d1229fca401b3a8dca32c3ba751115524ccb9d1fcca407c2c2884dbad30f61b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
