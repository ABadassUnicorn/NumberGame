<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_ea39bfff4e9f6d6bf150eb41ab52f97d2d5f4ee8294865a4a0a952e1eaa34fe5 extends Twig_Template
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
        $__internal_f547a992477e3ed7dff2c4c388c524b4678740f18b8316faa70b8b45d0d33a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f547a992477e3ed7dff2c4c388c524b4678740f18b8316faa70b8b45d0d33a90->enter($__internal_f547a992477e3ed7dff2c4c388c524b4678740f18b8316faa70b8b45d0d33a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_71fadc592fc3ac6879155849dd68064279eed695e8fae92eb36a0fedfc0500f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71fadc592fc3ac6879155849dd68064279eed695e8fae92eb36a0fedfc0500f8->enter($__internal_71fadc592fc3ac6879155849dd68064279eed695e8fae92eb36a0fedfc0500f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f547a992477e3ed7dff2c4c388c524b4678740f18b8316faa70b8b45d0d33a90->leave($__internal_f547a992477e3ed7dff2c4c388c524b4678740f18b8316faa70b8b45d0d33a90_prof);

        
        $__internal_71fadc592fc3ac6879155849dd68064279eed695e8fae92eb36a0fedfc0500f8->leave($__internal_71fadc592fc3ac6879155849dd68064279eed695e8fae92eb36a0fedfc0500f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_246c8771e85090cff31aad4a9caa1279ae59ac57f5e433137a2c8b7aa0e63f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_246c8771e85090cff31aad4a9caa1279ae59ac57f5e433137a2c8b7aa0e63f3d->enter($__internal_246c8771e85090cff31aad4a9caa1279ae59ac57f5e433137a2c8b7aa0e63f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9a2e877885642eb08269ec13dce16d36ca9721f59e22c5c3fbd2aa232ef19cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2e877885642eb08269ec13dce16d36ca9721f59e22c5c3fbd2aa232ef19cf8->enter($__internal_9a2e877885642eb08269ec13dce16d36ca9721f59e22c5c3fbd2aa232ef19cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9a2e877885642eb08269ec13dce16d36ca9721f59e22c5c3fbd2aa232ef19cf8->leave($__internal_9a2e877885642eb08269ec13dce16d36ca9721f59e22c5c3fbd2aa232ef19cf8_prof);

        
        $__internal_246c8771e85090cff31aad4a9caa1279ae59ac57f5e433137a2c8b7aa0e63f3d->leave($__internal_246c8771e85090cff31aad4a9caa1279ae59ac57f5e433137a2c8b7aa0e63f3d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b755db2c713e54ea97895dbd99b8c6f87aa051be1d09e9e4fca40b27cc203124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b755db2c713e54ea97895dbd99b8c6f87aa051be1d09e9e4fca40b27cc203124->enter($__internal_b755db2c713e54ea97895dbd99b8c6f87aa051be1d09e9e4fca40b27cc203124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e12738908cfcd447515aa79373f294521e8676e8e855a46b6b7e1aba6d6862fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12738908cfcd447515aa79373f294521e8676e8e855a46b6b7e1aba6d6862fc->enter($__internal_e12738908cfcd447515aa79373f294521e8676e8e855a46b6b7e1aba6d6862fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e12738908cfcd447515aa79373f294521e8676e8e855a46b6b7e1aba6d6862fc->leave($__internal_e12738908cfcd447515aa79373f294521e8676e8e855a46b6b7e1aba6d6862fc_prof);

        
        $__internal_b755db2c713e54ea97895dbd99b8c6f87aa051be1d09e9e4fca40b27cc203124->leave($__internal_b755db2c713e54ea97895dbd99b8c6f87aa051be1d09e9e4fca40b27cc203124_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
