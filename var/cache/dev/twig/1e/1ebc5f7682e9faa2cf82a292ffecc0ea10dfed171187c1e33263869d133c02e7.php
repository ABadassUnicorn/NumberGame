<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c86cdd679856fa75d06fcb3730b1db27923f8209a9fd3967842f37e23ca2c03a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6ab4d929e448cf7b66479787b24e114a6cef163d33afa6b3d96aabb4034f09f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab4d929e448cf7b66479787b24e114a6cef163d33afa6b3d96aabb4034f09f2->enter($__internal_6ab4d929e448cf7b66479787b24e114a6cef163d33afa6b3d96aabb4034f09f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_09091ecc684956ca6e3ecfcaf11f9955ca2e9a477e0c6624fa7b7dd61d882fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09091ecc684956ca6e3ecfcaf11f9955ca2e9a477e0c6624fa7b7dd61d882fbe->enter($__internal_09091ecc684956ca6e3ecfcaf11f9955ca2e9a477e0c6624fa7b7dd61d882fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ab4d929e448cf7b66479787b24e114a6cef163d33afa6b3d96aabb4034f09f2->leave($__internal_6ab4d929e448cf7b66479787b24e114a6cef163d33afa6b3d96aabb4034f09f2_prof);

        
        $__internal_09091ecc684956ca6e3ecfcaf11f9955ca2e9a477e0c6624fa7b7dd61d882fbe->leave($__internal_09091ecc684956ca6e3ecfcaf11f9955ca2e9a477e0c6624fa7b7dd61d882fbe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f253458a2f0cd058460c110942dc8d8470662b2a1ee85fb78a9c0c57f7f8e1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f253458a2f0cd058460c110942dc8d8470662b2a1ee85fb78a9c0c57f7f8e1c->enter($__internal_3f253458a2f0cd058460c110942dc8d8470662b2a1ee85fb78a9c0c57f7f8e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_63a157bb871cca6ed9f06fb866c09ad903a7b6f775b1845cab6f1139551459ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a157bb871cca6ed9f06fb866c09ad903a7b6f775b1845cab6f1139551459ea->enter($__internal_63a157bb871cca6ed9f06fb866c09ad903a7b6f775b1845cab6f1139551459ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_63a157bb871cca6ed9f06fb866c09ad903a7b6f775b1845cab6f1139551459ea->leave($__internal_63a157bb871cca6ed9f06fb866c09ad903a7b6f775b1845cab6f1139551459ea_prof);

        
        $__internal_3f253458a2f0cd058460c110942dc8d8470662b2a1ee85fb78a9c0c57f7f8e1c->leave($__internal_3f253458a2f0cd058460c110942dc8d8470662b2a1ee85fb78a9c0c57f7f8e1c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_79d1670dd6fbaa38490e4b3d21602280269efceb93016e6637291479389c6258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d1670dd6fbaa38490e4b3d21602280269efceb93016e6637291479389c6258->enter($__internal_79d1670dd6fbaa38490e4b3d21602280269efceb93016e6637291479389c6258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_95a41399e9bb4e0422ec14a79bd0ca4207eb6448c1f3559e05ac0278799fb400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a41399e9bb4e0422ec14a79bd0ca4207eb6448c1f3559e05ac0278799fb400->enter($__internal_95a41399e9bb4e0422ec14a79bd0ca4207eb6448c1f3559e05ac0278799fb400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_95a41399e9bb4e0422ec14a79bd0ca4207eb6448c1f3559e05ac0278799fb400->leave($__internal_95a41399e9bb4e0422ec14a79bd0ca4207eb6448c1f3559e05ac0278799fb400_prof);

        
        $__internal_79d1670dd6fbaa38490e4b3d21602280269efceb93016e6637291479389c6258->leave($__internal_79d1670dd6fbaa38490e4b3d21602280269efceb93016e6637291479389c6258_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9bd7ada9a823eb280f5f0a4481b76c9215ac9ef50aa0d16d257a8ff01670e6a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd7ada9a823eb280f5f0a4481b76c9215ac9ef50aa0d16d257a8ff01670e6a0->enter($__internal_9bd7ada9a823eb280f5f0a4481b76c9215ac9ef50aa0d16d257a8ff01670e6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_beb9907251c34150141e18e6d4b2b1017555431a0b558b2a41060565e7fefb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb9907251c34150141e18e6d4b2b1017555431a0b558b2a41060565e7fefb6b->enter($__internal_beb9907251c34150141e18e6d4b2b1017555431a0b558b2a41060565e7fefb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_beb9907251c34150141e18e6d4b2b1017555431a0b558b2a41060565e7fefb6b->leave($__internal_beb9907251c34150141e18e6d4b2b1017555431a0b558b2a41060565e7fefb6b_prof);

        
        $__internal_9bd7ada9a823eb280f5f0a4481b76c9215ac9ef50aa0d16d257a8ff01670e6a0->leave($__internal_9bd7ada9a823eb280f5f0a4481b76c9215ac9ef50aa0d16d257a8ff01670e6a0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
