<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_fa1a7bc8c474a5bb118ac64771a36b5c90362d8396bc244eb45e66a7006020d8 extends Twig_Template
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
        $__internal_89a15a78cf5e89bd5d8c767fd6e94bc29199a03dce14602888e3349b25f831c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a15a78cf5e89bd5d8c767fd6e94bc29199a03dce14602888e3349b25f831c7->enter($__internal_89a15a78cf5e89bd5d8c767fd6e94bc29199a03dce14602888e3349b25f831c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_eb7e54529918a3870a0fe5ef774ead53ca71e359b68b050a982e7f455f98b570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7e54529918a3870a0fe5ef774ead53ca71e359b68b050a982e7f455f98b570->enter($__internal_eb7e54529918a3870a0fe5ef774ead53ca71e359b68b050a982e7f455f98b570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89a15a78cf5e89bd5d8c767fd6e94bc29199a03dce14602888e3349b25f831c7->leave($__internal_89a15a78cf5e89bd5d8c767fd6e94bc29199a03dce14602888e3349b25f831c7_prof);

        
        $__internal_eb7e54529918a3870a0fe5ef774ead53ca71e359b68b050a982e7f455f98b570->leave($__internal_eb7e54529918a3870a0fe5ef774ead53ca71e359b68b050a982e7f455f98b570_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d61c2b433327c3b9a683f9a118bf7f14caf4c807cb25e862d94129f8ee653ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d61c2b433327c3b9a683f9a118bf7f14caf4c807cb25e862d94129f8ee653ba->enter($__internal_6d61c2b433327c3b9a683f9a118bf7f14caf4c807cb25e862d94129f8ee653ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_35d96b7a2b4a4ea962a9cec005ab744faa34e4132f722f558dac34cbaee0bb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d96b7a2b4a4ea962a9cec005ab744faa34e4132f722f558dac34cbaee0bb6b->enter($__internal_35d96b7a2b4a4ea962a9cec005ab744faa34e4132f722f558dac34cbaee0bb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_35d96b7a2b4a4ea962a9cec005ab744faa34e4132f722f558dac34cbaee0bb6b->leave($__internal_35d96b7a2b4a4ea962a9cec005ab744faa34e4132f722f558dac34cbaee0bb6b_prof);

        
        $__internal_6d61c2b433327c3b9a683f9a118bf7f14caf4c807cb25e862d94129f8ee653ba->leave($__internal_6d61c2b433327c3b9a683f9a118bf7f14caf4c807cb25e862d94129f8ee653ba_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_42bed6312e56d99852b99c292cb0236f1a6761bdcb105786b1ec0a36f3923f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42bed6312e56d99852b99c292cb0236f1a6761bdcb105786b1ec0a36f3923f64->enter($__internal_42bed6312e56d99852b99c292cb0236f1a6761bdcb105786b1ec0a36f3923f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_19d50d064fb08c515df18e48a242813f2cd2796775905dae6612ee80d9af4894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d50d064fb08c515df18e48a242813f2cd2796775905dae6612ee80d9af4894->enter($__internal_19d50d064fb08c515df18e48a242813f2cd2796775905dae6612ee80d9af4894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_19d50d064fb08c515df18e48a242813f2cd2796775905dae6612ee80d9af4894->leave($__internal_19d50d064fb08c515df18e48a242813f2cd2796775905dae6612ee80d9af4894_prof);

        
        $__internal_42bed6312e56d99852b99c292cb0236f1a6761bdcb105786b1ec0a36f3923f64->leave($__internal_42bed6312e56d99852b99c292cb0236f1a6761bdcb105786b1ec0a36f3923f64_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_727050897e28d63d736f2225167efc53def3301938a5b2e6b269cc4a41cae59c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_727050897e28d63d736f2225167efc53def3301938a5b2e6b269cc4a41cae59c->enter($__internal_727050897e28d63d736f2225167efc53def3301938a5b2e6b269cc4a41cae59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a83e941bf4a747d6a61d72d6fef2c658074894e1f93ebf02405ff405ad6a5f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83e941bf4a747d6a61d72d6fef2c658074894e1f93ebf02405ff405ad6a5f91->enter($__internal_a83e941bf4a747d6a61d72d6fef2c658074894e1f93ebf02405ff405ad6a5f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a83e941bf4a747d6a61d72d6fef2c658074894e1f93ebf02405ff405ad6a5f91->leave($__internal_a83e941bf4a747d6a61d72d6fef2c658074894e1f93ebf02405ff405ad6a5f91_prof);

        
        $__internal_727050897e28d63d736f2225167efc53def3301938a5b2e6b269cc4a41cae59c->leave($__internal_727050897e28d63d736f2225167efc53def3301938a5b2e6b269cc4a41cae59c_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
