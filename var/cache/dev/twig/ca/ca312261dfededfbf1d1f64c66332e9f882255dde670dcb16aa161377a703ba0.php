<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_750505ec8a93786c74d3bde9e49a0e777bd261f69bd3f6cee3188932ab73e9f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_739318385ef3d50001285f358ded01f464cedef9a7c0a2eec6e72edb12e697a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739318385ef3d50001285f358ded01f464cedef9a7c0a2eec6e72edb12e697a2->enter($__internal_739318385ef3d50001285f358ded01f464cedef9a7c0a2eec6e72edb12e697a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_6873b92923f44b7200ee33df8a3af9851fbac9b5eec7dd2ebafa14c4f5218074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6873b92923f44b7200ee33df8a3af9851fbac9b5eec7dd2ebafa14c4f5218074->enter($__internal_6873b92923f44b7200ee33df8a3af9851fbac9b5eec7dd2ebafa14c4f5218074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_739318385ef3d50001285f358ded01f464cedef9a7c0a2eec6e72edb12e697a2->leave($__internal_739318385ef3d50001285f358ded01f464cedef9a7c0a2eec6e72edb12e697a2_prof);

        
        $__internal_6873b92923f44b7200ee33df8a3af9851fbac9b5eec7dd2ebafa14c4f5218074->leave($__internal_6873b92923f44b7200ee33df8a3af9851fbac9b5eec7dd2ebafa14c4f5218074_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2ef7ddbb7faf89bffe9c57476ae6b6d8db552ed26911d5621c60a124f4865ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef7ddbb7faf89bffe9c57476ae6b6d8db552ed26911d5621c60a124f4865ac0->enter($__internal_2ef7ddbb7faf89bffe9c57476ae6b6d8db552ed26911d5621c60a124f4865ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_750c4caf13ca9a7f5b2453537986105eec4b61f895e79f16f8179e6a818cdf19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750c4caf13ca9a7f5b2453537986105eec4b61f895e79f16f8179e6a818cdf19->enter($__internal_750c4caf13ca9a7f5b2453537986105eec4b61f895e79f16f8179e6a818cdf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_750c4caf13ca9a7f5b2453537986105eec4b61f895e79f16f8179e6a818cdf19->leave($__internal_750c4caf13ca9a7f5b2453537986105eec4b61f895e79f16f8179e6a818cdf19_prof);

        
        $__internal_2ef7ddbb7faf89bffe9c57476ae6b6d8db552ed26911d5621c60a124f4865ac0->leave($__internal_2ef7ddbb7faf89bffe9c57476ae6b6d8db552ed26911d5621c60a124f4865ac0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
