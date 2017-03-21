<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_538711ca56b23fbf842cf79e19a6906cb24672781568566482548b7e6bdb0733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_899b59c8a1c9c2908ee9168d918a2f68dae233b169fa7e654775a5bd1b95be24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_899b59c8a1c9c2908ee9168d918a2f68dae233b169fa7e654775a5bd1b95be24->enter($__internal_899b59c8a1c9c2908ee9168d918a2f68dae233b169fa7e654775a5bd1b95be24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7338879c40e310f8a1c0843e8c0905b1da8ee9b0a5528df7671af80ff40c1e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7338879c40e310f8a1c0843e8c0905b1da8ee9b0a5528df7671af80ff40c1e1c->enter($__internal_7338879c40e310f8a1c0843e8c0905b1da8ee9b0a5528df7671af80ff40c1e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_899b59c8a1c9c2908ee9168d918a2f68dae233b169fa7e654775a5bd1b95be24->leave($__internal_899b59c8a1c9c2908ee9168d918a2f68dae233b169fa7e654775a5bd1b95be24_prof);

        
        $__internal_7338879c40e310f8a1c0843e8c0905b1da8ee9b0a5528df7671af80ff40c1e1c->leave($__internal_7338879c40e310f8a1c0843e8c0905b1da8ee9b0a5528df7671af80ff40c1e1c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79d758b06075390cacdc424e6586a0adbaa8957841785aca71dd9c245b133e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d758b06075390cacdc424e6586a0adbaa8957841785aca71dd9c245b133e66->enter($__internal_79d758b06075390cacdc424e6586a0adbaa8957841785aca71dd9c245b133e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f25a539f170f9aa29e69fcb00b0e2288cc99f81ca816294c73b240fa9a175da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25a539f170f9aa29e69fcb00b0e2288cc99f81ca816294c73b240fa9a175da4->enter($__internal_f25a539f170f9aa29e69fcb00b0e2288cc99f81ca816294c73b240fa9a175da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f25a539f170f9aa29e69fcb00b0e2288cc99f81ca816294c73b240fa9a175da4->leave($__internal_f25a539f170f9aa29e69fcb00b0e2288cc99f81ca816294c73b240fa9a175da4_prof);

        
        $__internal_79d758b06075390cacdc424e6586a0adbaa8957841785aca71dd9c245b133e66->leave($__internal_79d758b06075390cacdc424e6586a0adbaa8957841785aca71dd9c245b133e66_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fefbd7021dcab98673a29aec47e375da22a5669cbdaa101ea787ff6a53c67d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fefbd7021dcab98673a29aec47e375da22a5669cbdaa101ea787ff6a53c67d99->enter($__internal_fefbd7021dcab98673a29aec47e375da22a5669cbdaa101ea787ff6a53c67d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_098680dc7f88a1ce525150af30f9822b499da3a15df0591ddbf588f6e1dfc5f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098680dc7f88a1ce525150af30f9822b499da3a15df0591ddbf588f6e1dfc5f1->enter($__internal_098680dc7f88a1ce525150af30f9822b499da3a15df0591ddbf588f6e1dfc5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_098680dc7f88a1ce525150af30f9822b499da3a15df0591ddbf588f6e1dfc5f1->leave($__internal_098680dc7f88a1ce525150af30f9822b499da3a15df0591ddbf588f6e1dfc5f1_prof);

        
        $__internal_fefbd7021dcab98673a29aec47e375da22a5669cbdaa101ea787ff6a53c67d99->leave($__internal_fefbd7021dcab98673a29aec47e375da22a5669cbdaa101ea787ff6a53c67d99_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf964cf4a1f978229c8f656bc099d8ed040d242b041fd3d9ce534d80a5fb6b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf964cf4a1f978229c8f656bc099d8ed040d242b041fd3d9ce534d80a5fb6b38->enter($__internal_cf964cf4a1f978229c8f656bc099d8ed040d242b041fd3d9ce534d80a5fb6b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f2a70f9624f603d80266ea3609c155c04038b73e362e3de713774d629258e3d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a70f9624f603d80266ea3609c155c04038b73e362e3de713774d629258e3d9->enter($__internal_f2a70f9624f603d80266ea3609c155c04038b73e362e3de713774d629258e3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f2a70f9624f603d80266ea3609c155c04038b73e362e3de713774d629258e3d9->leave($__internal_f2a70f9624f603d80266ea3609c155c04038b73e362e3de713774d629258e3d9_prof);

        
        $__internal_cf964cf4a1f978229c8f656bc099d8ed040d242b041fd3d9ce534d80a5fb6b38->leave($__internal_cf964cf4a1f978229c8f656bc099d8ed040d242b041fd3d9ce534d80a5fb6b38_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
