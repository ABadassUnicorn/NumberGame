<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_68668927ba1a40a41a676b17069cdc0986eebe02bdfc3b3dc8f5e653b805b7e8 extends Twig_Template
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
        $__internal_e783410eed2d1bd621398601f9a76708fb2978546920325db07c6066bd4a50c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e783410eed2d1bd621398601f9a76708fb2978546920325db07c6066bd4a50c5->enter($__internal_e783410eed2d1bd621398601f9a76708fb2978546920325db07c6066bd4a50c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_27884763f34eda2dbc2d1a8543afd63c8318089acbef18320214980cf82bcd8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27884763f34eda2dbc2d1a8543afd63c8318089acbef18320214980cf82bcd8f->enter($__internal_27884763f34eda2dbc2d1a8543afd63c8318089acbef18320214980cf82bcd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e783410eed2d1bd621398601f9a76708fb2978546920325db07c6066bd4a50c5->leave($__internal_e783410eed2d1bd621398601f9a76708fb2978546920325db07c6066bd4a50c5_prof);

        
        $__internal_27884763f34eda2dbc2d1a8543afd63c8318089acbef18320214980cf82bcd8f->leave($__internal_27884763f34eda2dbc2d1a8543afd63c8318089acbef18320214980cf82bcd8f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ce6f11eee033c4994e71d5cef53baf66de7f3f685f0aae352edfc48bddb76f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce6f11eee033c4994e71d5cef53baf66de7f3f685f0aae352edfc48bddb76f5e->enter($__internal_ce6f11eee033c4994e71d5cef53baf66de7f3f685f0aae352edfc48bddb76f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_da256bf765d0fa48704d8186907095a04cfa51c2f5b8f4839b7de51a9c22ae0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da256bf765d0fa48704d8186907095a04cfa51c2f5b8f4839b7de51a9c22ae0a->enter($__internal_da256bf765d0fa48704d8186907095a04cfa51c2f5b8f4839b7de51a9c22ae0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_da256bf765d0fa48704d8186907095a04cfa51c2f5b8f4839b7de51a9c22ae0a->leave($__internal_da256bf765d0fa48704d8186907095a04cfa51c2f5b8f4839b7de51a9c22ae0a_prof);

        
        $__internal_ce6f11eee033c4994e71d5cef53baf66de7f3f685f0aae352edfc48bddb76f5e->leave($__internal_ce6f11eee033c4994e71d5cef53baf66de7f3f685f0aae352edfc48bddb76f5e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e2fa7c49c4dfb9d9a221a1f52565e86168e3fe9579fd6318771110f2d27d2587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2fa7c49c4dfb9d9a221a1f52565e86168e3fe9579fd6318771110f2d27d2587->enter($__internal_e2fa7c49c4dfb9d9a221a1f52565e86168e3fe9579fd6318771110f2d27d2587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7230888c691cafce240ff1879dd00f9dd2f65ab7d1b7dd375b3da7f244a1e093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7230888c691cafce240ff1879dd00f9dd2f65ab7d1b7dd375b3da7f244a1e093->enter($__internal_7230888c691cafce240ff1879dd00f9dd2f65ab7d1b7dd375b3da7f244a1e093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7230888c691cafce240ff1879dd00f9dd2f65ab7d1b7dd375b3da7f244a1e093->leave($__internal_7230888c691cafce240ff1879dd00f9dd2f65ab7d1b7dd375b3da7f244a1e093_prof);

        
        $__internal_e2fa7c49c4dfb9d9a221a1f52565e86168e3fe9579fd6318771110f2d27d2587->leave($__internal_e2fa7c49c4dfb9d9a221a1f52565e86168e3fe9579fd6318771110f2d27d2587_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6bb7d3ca3f09d2f1d60a30cc0ec98d56b9272996018e7cc1e4322d5e1692ced6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb7d3ca3f09d2f1d60a30cc0ec98d56b9272996018e7cc1e4322d5e1692ced6->enter($__internal_6bb7d3ca3f09d2f1d60a30cc0ec98d56b9272996018e7cc1e4322d5e1692ced6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_366a76561e58e99272f47668dad9e84148bfe4e89b7f1147b37346e261f5a137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366a76561e58e99272f47668dad9e84148bfe4e89b7f1147b37346e261f5a137->enter($__internal_366a76561e58e99272f47668dad9e84148bfe4e89b7f1147b37346e261f5a137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_366a76561e58e99272f47668dad9e84148bfe4e89b7f1147b37346e261f5a137->leave($__internal_366a76561e58e99272f47668dad9e84148bfe4e89b7f1147b37346e261f5a137_prof);

        
        $__internal_6bb7d3ca3f09d2f1d60a30cc0ec98d56b9272996018e7cc1e4322d5e1692ced6->leave($__internal_6bb7d3ca3f09d2f1d60a30cc0ec98d56b9272996018e7cc1e4322d5e1692ced6_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
