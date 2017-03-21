<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ec680efd6c8abbe65b73592ef6a871a2b2c344530b0628fc99960dd714daad82 extends Twig_Template
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
        $__internal_5a33b176fef1b65222666f5004ecd3cb1cb058ae591a83648e445a891a26ac4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a33b176fef1b65222666f5004ecd3cb1cb058ae591a83648e445a891a26ac4a->enter($__internal_5a33b176fef1b65222666f5004ecd3cb1cb058ae591a83648e445a891a26ac4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_22f37f51eaf497cbb8bc6d127085e37ebff070149373354f1f30e5c0535b3b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f37f51eaf497cbb8bc6d127085e37ebff070149373354f1f30e5c0535b3b90->enter($__internal_22f37f51eaf497cbb8bc6d127085e37ebff070149373354f1f30e5c0535b3b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a33b176fef1b65222666f5004ecd3cb1cb058ae591a83648e445a891a26ac4a->leave($__internal_5a33b176fef1b65222666f5004ecd3cb1cb058ae591a83648e445a891a26ac4a_prof);

        
        $__internal_22f37f51eaf497cbb8bc6d127085e37ebff070149373354f1f30e5c0535b3b90->leave($__internal_22f37f51eaf497cbb8bc6d127085e37ebff070149373354f1f30e5c0535b3b90_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c4b46384a444c8cbde524f345f1d3747b7b231f97f8ff78bda91b61770d31702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b46384a444c8cbde524f345f1d3747b7b231f97f8ff78bda91b61770d31702->enter($__internal_c4b46384a444c8cbde524f345f1d3747b7b231f97f8ff78bda91b61770d31702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2f95157002d12b20e3cae9801f2e427a8bef8872318bc809c8bcffe0e4b3fc81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f95157002d12b20e3cae9801f2e427a8bef8872318bc809c8bcffe0e4b3fc81->enter($__internal_2f95157002d12b20e3cae9801f2e427a8bef8872318bc809c8bcffe0e4b3fc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2f95157002d12b20e3cae9801f2e427a8bef8872318bc809c8bcffe0e4b3fc81->leave($__internal_2f95157002d12b20e3cae9801f2e427a8bef8872318bc809c8bcffe0e4b3fc81_prof);

        
        $__internal_c4b46384a444c8cbde524f345f1d3747b7b231f97f8ff78bda91b61770d31702->leave($__internal_c4b46384a444c8cbde524f345f1d3747b7b231f97f8ff78bda91b61770d31702_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7133e6de3dc65c3bcc63e248bf875894c0035cd768f950e8c0c03fb83dd8331c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7133e6de3dc65c3bcc63e248bf875894c0035cd768f950e8c0c03fb83dd8331c->enter($__internal_7133e6de3dc65c3bcc63e248bf875894c0035cd768f950e8c0c03fb83dd8331c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_33a3175cd999286518db5f48aeee0153a8113753ef8026f72df05ce29b135380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a3175cd999286518db5f48aeee0153a8113753ef8026f72df05ce29b135380->enter($__internal_33a3175cd999286518db5f48aeee0153a8113753ef8026f72df05ce29b135380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_33a3175cd999286518db5f48aeee0153a8113753ef8026f72df05ce29b135380->leave($__internal_33a3175cd999286518db5f48aeee0153a8113753ef8026f72df05ce29b135380_prof);

        
        $__internal_7133e6de3dc65c3bcc63e248bf875894c0035cd768f950e8c0c03fb83dd8331c->leave($__internal_7133e6de3dc65c3bcc63e248bf875894c0035cd768f950e8c0c03fb83dd8331c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed850c993e73a2ea7d0e1b6f1c52a53eb8baa46778760ca7fd2d286c2c262409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed850c993e73a2ea7d0e1b6f1c52a53eb8baa46778760ca7fd2d286c2c262409->enter($__internal_ed850c993e73a2ea7d0e1b6f1c52a53eb8baa46778760ca7fd2d286c2c262409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_514c1444850b0a51419b6228af07124950c1411df3fc4cebb4b11f2c8145b516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514c1444850b0a51419b6228af07124950c1411df3fc4cebb4b11f2c8145b516->enter($__internal_514c1444850b0a51419b6228af07124950c1411df3fc4cebb4b11f2c8145b516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_514c1444850b0a51419b6228af07124950c1411df3fc4cebb4b11f2c8145b516->leave($__internal_514c1444850b0a51419b6228af07124950c1411df3fc4cebb4b11f2c8145b516_prof);

        
        $__internal_ed850c993e73a2ea7d0e1b6f1c52a53eb8baa46778760ca7fd2d286c2c262409->leave($__internal_ed850c993e73a2ea7d0e1b6f1c52a53eb8baa46778760ca7fd2d286c2c262409_prof);

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
", "@WebProfiler/Collector/router.html.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
