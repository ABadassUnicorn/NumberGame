<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_98c77b073bcc5f3915d86547cfa71d8f7917e0f7756e6b0a2188306ca9bc05fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_b1f6187048ce07aaf78fbd6e7446dcb08861c36cd169ddb6c0658d9b27fd78cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f6187048ce07aaf78fbd6e7446dcb08861c36cd169ddb6c0658d9b27fd78cf->enter($__internal_b1f6187048ce07aaf78fbd6e7446dcb08861c36cd169ddb6c0658d9b27fd78cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_556d1bad90b71edde678c410cc69cf130186b5b2489061db18162e9f4058e804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556d1bad90b71edde678c410cc69cf130186b5b2489061db18162e9f4058e804->enter($__internal_556d1bad90b71edde678c410cc69cf130186b5b2489061db18162e9f4058e804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1f6187048ce07aaf78fbd6e7446dcb08861c36cd169ddb6c0658d9b27fd78cf->leave($__internal_b1f6187048ce07aaf78fbd6e7446dcb08861c36cd169ddb6c0658d9b27fd78cf_prof);

        
        $__internal_556d1bad90b71edde678c410cc69cf130186b5b2489061db18162e9f4058e804->leave($__internal_556d1bad90b71edde678c410cc69cf130186b5b2489061db18162e9f4058e804_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_247d9247584be5706f7533fde4d1491807d39da83339a451939dacb3900f2062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_247d9247584be5706f7533fde4d1491807d39da83339a451939dacb3900f2062->enter($__internal_247d9247584be5706f7533fde4d1491807d39da83339a451939dacb3900f2062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7fe12a94ad9df637eae182ad1dd83d1163a7edfc7e733eb1563471d3037c2e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe12a94ad9df637eae182ad1dd83d1163a7edfc7e733eb1563471d3037c2e08->enter($__internal_7fe12a94ad9df637eae182ad1dd83d1163a7edfc7e733eb1563471d3037c2e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7fe12a94ad9df637eae182ad1dd83d1163a7edfc7e733eb1563471d3037c2e08->leave($__internal_7fe12a94ad9df637eae182ad1dd83d1163a7edfc7e733eb1563471d3037c2e08_prof);

        
        $__internal_247d9247584be5706f7533fde4d1491807d39da83339a451939dacb3900f2062->leave($__internal_247d9247584be5706f7533fde4d1491807d39da83339a451939dacb3900f2062_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7178f7b164075c38ce6bf516d6f6d69ffcdcc820d5a25741396fca779e29409b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7178f7b164075c38ce6bf516d6f6d69ffcdcc820d5a25741396fca779e29409b->enter($__internal_7178f7b164075c38ce6bf516d6f6d69ffcdcc820d5a25741396fca779e29409b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5f1f65e1b0b89c78e702076d276a471faf540fc60ee136063632f09d7bc6f007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1f65e1b0b89c78e702076d276a471faf540fc60ee136063632f09d7bc6f007->enter($__internal_5f1f65e1b0b89c78e702076d276a471faf540fc60ee136063632f09d7bc6f007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5f1f65e1b0b89c78e702076d276a471faf540fc60ee136063632f09d7bc6f007->leave($__internal_5f1f65e1b0b89c78e702076d276a471faf540fc60ee136063632f09d7bc6f007_prof);

        
        $__internal_7178f7b164075c38ce6bf516d6f6d69ffcdcc820d5a25741396fca779e29409b->leave($__internal_7178f7b164075c38ce6bf516d6f6d69ffcdcc820d5a25741396fca779e29409b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a81cb39c0ce570371f8f01ccea3ae3b5dbd9923489cabeab544993aad722eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a81cb39c0ce570371f8f01ccea3ae3b5dbd9923489cabeab544993aad722eb9->enter($__internal_6a81cb39c0ce570371f8f01ccea3ae3b5dbd9923489cabeab544993aad722eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_78e92cfa7ec3fd3d15f0e670933637c460092d33fc3f8aa0246e7e91731dc2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e92cfa7ec3fd3d15f0e670933637c460092d33fc3f8aa0246e7e91731dc2e1->enter($__internal_78e92cfa7ec3fd3d15f0e670933637c460092d33fc3f8aa0246e7e91731dc2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_78e92cfa7ec3fd3d15f0e670933637c460092d33fc3f8aa0246e7e91731dc2e1->leave($__internal_78e92cfa7ec3fd3d15f0e670933637c460092d33fc3f8aa0246e7e91731dc2e1_prof);

        
        $__internal_6a81cb39c0ce570371f8f01ccea3ae3b5dbd9923489cabeab544993aad722eb9->leave($__internal_6a81cb39c0ce570371f8f01ccea3ae3b5dbd9923489cabeab544993aad722eb9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
