<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_a2463b2a68db09a2eec56a40be03f27bd25e98742f758ce200e4bd0b783591ec extends Twig_Template
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
        $__internal_ffeb18f8cf16603b86e8a7f53703461f2b0507bfea9a06546400413f5ec84bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffeb18f8cf16603b86e8a7f53703461f2b0507bfea9a06546400413f5ec84bff->enter($__internal_ffeb18f8cf16603b86e8a7f53703461f2b0507bfea9a06546400413f5ec84bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_f8e69f0480ff58cb6da40643c8772f01623d073b1b0ec9da2a6fbca5e73db7f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e69f0480ff58cb6da40643c8772f01623d073b1b0ec9da2a6fbca5e73db7f7->enter($__internal_f8e69f0480ff58cb6da40643c8772f01623d073b1b0ec9da2a6fbca5e73db7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffeb18f8cf16603b86e8a7f53703461f2b0507bfea9a06546400413f5ec84bff->leave($__internal_ffeb18f8cf16603b86e8a7f53703461f2b0507bfea9a06546400413f5ec84bff_prof);

        
        $__internal_f8e69f0480ff58cb6da40643c8772f01623d073b1b0ec9da2a6fbca5e73db7f7->leave($__internal_f8e69f0480ff58cb6da40643c8772f01623d073b1b0ec9da2a6fbca5e73db7f7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_044b0c1a0e645df5890c242982a445b581e3cbbaefe930f21238fdb672b75657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_044b0c1a0e645df5890c242982a445b581e3cbbaefe930f21238fdb672b75657->enter($__internal_044b0c1a0e645df5890c242982a445b581e3cbbaefe930f21238fdb672b75657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5480beadfb5abfeccc5e8a917598d961068acb5b4420ab91cb5334117c41b10c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5480beadfb5abfeccc5e8a917598d961068acb5b4420ab91cb5334117c41b10c->enter($__internal_5480beadfb5abfeccc5e8a917598d961068acb5b4420ab91cb5334117c41b10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_5480beadfb5abfeccc5e8a917598d961068acb5b4420ab91cb5334117c41b10c->leave($__internal_5480beadfb5abfeccc5e8a917598d961068acb5b4420ab91cb5334117c41b10c_prof);

        
        $__internal_044b0c1a0e645df5890c242982a445b581e3cbbaefe930f21238fdb672b75657->leave($__internal_044b0c1a0e645df5890c242982a445b581e3cbbaefe930f21238fdb672b75657_prof);

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
", "WebProfilerBundle:Collector:ajax.html.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
