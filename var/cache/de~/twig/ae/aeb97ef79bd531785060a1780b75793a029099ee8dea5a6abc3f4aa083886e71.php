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
        $__internal_4e8deb2d1fd51115df7672869e4f7cab11220e9ea12cb1f0479ca9651afd2c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e8deb2d1fd51115df7672869e4f7cab11220e9ea12cb1f0479ca9651afd2c01->enter($__internal_4e8deb2d1fd51115df7672869e4f7cab11220e9ea12cb1f0479ca9651afd2c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6877431d7c71b2a3f4c25805f047a065b068ca233f2b25698f2e796b69451e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6877431d7c71b2a3f4c25805f047a065b068ca233f2b25698f2e796b69451e0e->enter($__internal_6877431d7c71b2a3f4c25805f047a065b068ca233f2b25698f2e796b69451e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e8deb2d1fd51115df7672869e4f7cab11220e9ea12cb1f0479ca9651afd2c01->leave($__internal_4e8deb2d1fd51115df7672869e4f7cab11220e9ea12cb1f0479ca9651afd2c01_prof);

        
        $__internal_6877431d7c71b2a3f4c25805f047a065b068ca233f2b25698f2e796b69451e0e->leave($__internal_6877431d7c71b2a3f4c25805f047a065b068ca233f2b25698f2e796b69451e0e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fae82a2f4a3d5513b7c5adede401d14912df9023a19fbfc0b27ee4f296926fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae82a2f4a3d5513b7c5adede401d14912df9023a19fbfc0b27ee4f296926fe5->enter($__internal_fae82a2f4a3d5513b7c5adede401d14912df9023a19fbfc0b27ee4f296926fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_637a3fc717764a638aa808173523e0bf68f4693c9541802b60e5c9a2b3aa62f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637a3fc717764a638aa808173523e0bf68f4693c9541802b60e5c9a2b3aa62f4->enter($__internal_637a3fc717764a638aa808173523e0bf68f4693c9541802b60e5c9a2b3aa62f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_637a3fc717764a638aa808173523e0bf68f4693c9541802b60e5c9a2b3aa62f4->leave($__internal_637a3fc717764a638aa808173523e0bf68f4693c9541802b60e5c9a2b3aa62f4_prof);

        
        $__internal_fae82a2f4a3d5513b7c5adede401d14912df9023a19fbfc0b27ee4f296926fe5->leave($__internal_fae82a2f4a3d5513b7c5adede401d14912df9023a19fbfc0b27ee4f296926fe5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cad216da6513ced118145332a3023805685a41f6450413154fd8654e32177f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cad216da6513ced118145332a3023805685a41f6450413154fd8654e32177f7e->enter($__internal_cad216da6513ced118145332a3023805685a41f6450413154fd8654e32177f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5830f56cb7a4c5630cec2ce1c0471096fbed7995688c374e81f3d20852e5ea54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5830f56cb7a4c5630cec2ce1c0471096fbed7995688c374e81f3d20852e5ea54->enter($__internal_5830f56cb7a4c5630cec2ce1c0471096fbed7995688c374e81f3d20852e5ea54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5830f56cb7a4c5630cec2ce1c0471096fbed7995688c374e81f3d20852e5ea54->leave($__internal_5830f56cb7a4c5630cec2ce1c0471096fbed7995688c374e81f3d20852e5ea54_prof);

        
        $__internal_cad216da6513ced118145332a3023805685a41f6450413154fd8654e32177f7e->leave($__internal_cad216da6513ced118145332a3023805685a41f6450413154fd8654e32177f7e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d4b7e70fa2baaa9fabc4f84acace432d00aa1670be8f5f353f071c82c6add37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d4b7e70fa2baaa9fabc4f84acace432d00aa1670be8f5f353f071c82c6add37->enter($__internal_8d4b7e70fa2baaa9fabc4f84acace432d00aa1670be8f5f353f071c82c6add37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dec28146c46898534b3e9761a2367b25f431c97f10da39388183242dd9a38ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec28146c46898534b3e9761a2367b25f431c97f10da39388183242dd9a38ee7->enter($__internal_dec28146c46898534b3e9761a2367b25f431c97f10da39388183242dd9a38ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dec28146c46898534b3e9761a2367b25f431c97f10da39388183242dd9a38ee7->leave($__internal_dec28146c46898534b3e9761a2367b25f431c97f10da39388183242dd9a38ee7_prof);

        
        $__internal_8d4b7e70fa2baaa9fabc4f84acace432d00aa1670be8f5f353f071c82c6add37->leave($__internal_8d4b7e70fa2baaa9fabc4f84acace432d00aa1670be8f5f353f071c82c6add37_prof);

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
