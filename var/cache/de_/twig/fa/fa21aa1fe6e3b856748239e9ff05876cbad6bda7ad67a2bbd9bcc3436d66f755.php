<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_2d7181c21682e74145e17e136da7d5d00bf9b97afbf9545a40292faf6c20aacd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_931379380ecf428d50ce299f14d6b6f9ce9584e3dea9f971aad30f71ab677b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931379380ecf428d50ce299f14d6b6f9ce9584e3dea9f971aad30f71ab677b4a->enter($__internal_931379380ecf428d50ce299f14d6b6f9ce9584e3dea9f971aad30f71ab677b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_f3e611828735b08a90b33932d7c1c45f6c178981111ea1bc07ed22afbab46213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e611828735b08a90b33932d7c1c45f6c178981111ea1bc07ed22afbab46213->enter($__internal_f3e611828735b08a90b33932d7c1c45f6c178981111ea1bc07ed22afbab46213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_931379380ecf428d50ce299f14d6b6f9ce9584e3dea9f971aad30f71ab677b4a->leave($__internal_931379380ecf428d50ce299f14d6b6f9ce9584e3dea9f971aad30f71ab677b4a_prof);

        
        $__internal_f3e611828735b08a90b33932d7c1c45f6c178981111ea1bc07ed22afbab46213->leave($__internal_f3e611828735b08a90b33932d7c1c45f6c178981111ea1bc07ed22afbab46213_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_083be4c793a4fe5c8336873bca5e0f4824bdfac816527bbf9db5d206b73ef5e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_083be4c793a4fe5c8336873bca5e0f4824bdfac816527bbf9db5d206b73ef5e6->enter($__internal_083be4c793a4fe5c8336873bca5e0f4824bdfac816527bbf9db5d206b73ef5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f20cb995de4cd4b910e2fd9533ca321085918241cbd608c4008736cecd71998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f20cb995de4cd4b910e2fd9533ca321085918241cbd608c4008736cecd71998->enter($__internal_4f20cb995de4cd4b910e2fd9533ca321085918241cbd608c4008736cecd71998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4f20cb995de4cd4b910e2fd9533ca321085918241cbd608c4008736cecd71998->leave($__internal_4f20cb995de4cd4b910e2fd9533ca321085918241cbd608c4008736cecd71998_prof);

        
        $__internal_083be4c793a4fe5c8336873bca5e0f4824bdfac816527bbf9db5d206b73ef5e6->leave($__internal_083be4c793a4fe5c8336873bca5e0f4824bdfac816527bbf9db5d206b73ef5e6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3492f46684543c410cef0affcce0f25f3885e70891292f3af9d140fc6611555f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3492f46684543c410cef0affcce0f25f3885e70891292f3af9d140fc6611555f->enter($__internal_3492f46684543c410cef0affcce0f25f3885e70891292f3af9d140fc6611555f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f919f9d32e10e190acb9c159d8dc9683437e62b987b3aae1c2aa14d4c49b5634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f919f9d32e10e190acb9c159d8dc9683437e62b987b3aae1c2aa14d4c49b5634->enter($__internal_f919f9d32e10e190acb9c159d8dc9683437e62b987b3aae1c2aa14d4c49b5634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f919f9d32e10e190acb9c159d8dc9683437e62b987b3aae1c2aa14d4c49b5634->leave($__internal_f919f9d32e10e190acb9c159d8dc9683437e62b987b3aae1c2aa14d4c49b5634_prof);

        
        $__internal_3492f46684543c410cef0affcce0f25f3885e70891292f3af9d140fc6611555f->leave($__internal_3492f46684543c410cef0affcce0f25f3885e70891292f3af9d140fc6611555f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
