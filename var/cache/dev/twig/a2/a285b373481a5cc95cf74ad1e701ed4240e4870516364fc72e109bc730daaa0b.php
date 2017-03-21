<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d523a645974dd705628c86c092abefc4d49dd9c97c3f58f63acc9b660d522726 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_890d7d1c5cde7e74e9a23be5d4e9900f6544300bd009aecfe1bfcf5d343ef7bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_890d7d1c5cde7e74e9a23be5d4e9900f6544300bd009aecfe1bfcf5d343ef7bf->enter($__internal_890d7d1c5cde7e74e9a23be5d4e9900f6544300bd009aecfe1bfcf5d343ef7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_dce8d820da0b1798ccce260066215c855459a9a93071bec38f546bafaabd408b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce8d820da0b1798ccce260066215c855459a9a93071bec38f546bafaabd408b->enter($__internal_dce8d820da0b1798ccce260066215c855459a9a93071bec38f546bafaabd408b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_890d7d1c5cde7e74e9a23be5d4e9900f6544300bd009aecfe1bfcf5d343ef7bf->leave($__internal_890d7d1c5cde7e74e9a23be5d4e9900f6544300bd009aecfe1bfcf5d343ef7bf_prof);

        
        $__internal_dce8d820da0b1798ccce260066215c855459a9a93071bec38f546bafaabd408b->leave($__internal_dce8d820da0b1798ccce260066215c855459a9a93071bec38f546bafaabd408b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fdcbd5d01883fc8d797050a7b0d624d9a3d654fdf497561acc127fd702725a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdcbd5d01883fc8d797050a7b0d624d9a3d654fdf497561acc127fd702725a69->enter($__internal_fdcbd5d01883fc8d797050a7b0d624d9a3d654fdf497561acc127fd702725a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6ef864796a2811d67d3fe80f6b4092591bcf9fd95d1d559aa71d8f279e64b053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef864796a2811d67d3fe80f6b4092591bcf9fd95d1d559aa71d8f279e64b053->enter($__internal_6ef864796a2811d67d3fe80f6b4092591bcf9fd95d1d559aa71d8f279e64b053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6ef864796a2811d67d3fe80f6b4092591bcf9fd95d1d559aa71d8f279e64b053->leave($__internal_6ef864796a2811d67d3fe80f6b4092591bcf9fd95d1d559aa71d8f279e64b053_prof);

        
        $__internal_fdcbd5d01883fc8d797050a7b0d624d9a3d654fdf497561acc127fd702725a69->leave($__internal_fdcbd5d01883fc8d797050a7b0d624d9a3d654fdf497561acc127fd702725a69_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_280d1568fab40264377f4752958e5f56dc149b4a2537cd70a28a27c4193c6a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_280d1568fab40264377f4752958e5f56dc149b4a2537cd70a28a27c4193c6a64->enter($__internal_280d1568fab40264377f4752958e5f56dc149b4a2537cd70a28a27c4193c6a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3a59f5b0218907764183b822b1a00573f9385d92422a88c1d2d48dc5654bda0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a59f5b0218907764183b822b1a00573f9385d92422a88c1d2d48dc5654bda0e->enter($__internal_3a59f5b0218907764183b822b1a00573f9385d92422a88c1d2d48dc5654bda0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a59f5b0218907764183b822b1a00573f9385d92422a88c1d2d48dc5654bda0e->leave($__internal_3a59f5b0218907764183b822b1a00573f9385d92422a88c1d2d48dc5654bda0e_prof);

        
        $__internal_280d1568fab40264377f4752958e5f56dc149b4a2537cd70a28a27c4193c6a64->leave($__internal_280d1568fab40264377f4752958e5f56dc149b4a2537cd70a28a27c4193c6a64_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6f261788e5086fe33cd4472891829f6ac06853da1edb8d52da01216987a40a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f261788e5086fe33cd4472891829f6ac06853da1edb8d52da01216987a40a8->enter($__internal_c6f261788e5086fe33cd4472891829f6ac06853da1edb8d52da01216987a40a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_206d4b70b088eebbc3b959ad2e1a2f2930d032e86b76642f2d6b8ed6d032ec29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206d4b70b088eebbc3b959ad2e1a2f2930d032e86b76642f2d6b8ed6d032ec29->enter($__internal_206d4b70b088eebbc3b959ad2e1a2f2930d032e86b76642f2d6b8ed6d032ec29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_206d4b70b088eebbc3b959ad2e1a2f2930d032e86b76642f2d6b8ed6d032ec29->leave($__internal_206d4b70b088eebbc3b959ad2e1a2f2930d032e86b76642f2d6b8ed6d032ec29_prof);

        
        $__internal_c6f261788e5086fe33cd4472891829f6ac06853da1edb8d52da01216987a40a8->leave($__internal_c6f261788e5086fe33cd4472891829f6ac06853da1edb8d52da01216987a40a8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
