<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_8fbc0e5ae4da9ca6b9a3fc1eff9c2f5e5ba8e5a7bb4cde3997a2f1dfeb85493b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_555363f62a879915d02f4963014e2cab7580f3f1bda174ef4edecdfb9b6e2083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_555363f62a879915d02f4963014e2cab7580f3f1bda174ef4edecdfb9b6e2083->enter($__internal_555363f62a879915d02f4963014e2cab7580f3f1bda174ef4edecdfb9b6e2083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_19585a6ff4352db910deba717553e90de320d2d74862baebbc3f136c0db63d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19585a6ff4352db910deba717553e90de320d2d74862baebbc3f136c0db63d51->enter($__internal_19585a6ff4352db910deba717553e90de320d2d74862baebbc3f136c0db63d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_555363f62a879915d02f4963014e2cab7580f3f1bda174ef4edecdfb9b6e2083->leave($__internal_555363f62a879915d02f4963014e2cab7580f3f1bda174ef4edecdfb9b6e2083_prof);

        
        $__internal_19585a6ff4352db910deba717553e90de320d2d74862baebbc3f136c0db63d51->leave($__internal_19585a6ff4352db910deba717553e90de320d2d74862baebbc3f136c0db63d51_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_daebe950f5a5819977bdce160230b0f70865e69159a350bdbe91abf1d5d1e654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daebe950f5a5819977bdce160230b0f70865e69159a350bdbe91abf1d5d1e654->enter($__internal_daebe950f5a5819977bdce160230b0f70865e69159a350bdbe91abf1d5d1e654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_adef26873a6dd31756345a2af2dd94b1fa0ddad076332966d92ac967a061bafc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adef26873a6dd31756345a2af2dd94b1fa0ddad076332966d92ac967a061bafc->enter($__internal_adef26873a6dd31756345a2af2dd94b1fa0ddad076332966d92ac967a061bafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_adef26873a6dd31756345a2af2dd94b1fa0ddad076332966d92ac967a061bafc->leave($__internal_adef26873a6dd31756345a2af2dd94b1fa0ddad076332966d92ac967a061bafc_prof);

        
        $__internal_daebe950f5a5819977bdce160230b0f70865e69159a350bdbe91abf1d5d1e654->leave($__internal_daebe950f5a5819977bdce160230b0f70865e69159a350bdbe91abf1d5d1e654_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
