<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_98f91e3a463823bab103d0eda67756eba36684854cc0510bf70785c58989a647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_187fbd32aff38d58ecdb975f0d9d97938964a999f5bdc5d88b637147adbbdd37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187fbd32aff38d58ecdb975f0d9d97938964a999f5bdc5d88b637147adbbdd37->enter($__internal_187fbd32aff38d58ecdb975f0d9d97938964a999f5bdc5d88b637147adbbdd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_4fb05a30068f59bc6860425684c7d08941bddc505cbd67604176306c9c6e598e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb05a30068f59bc6860425684c7d08941bddc505cbd67604176306c9c6e598e->enter($__internal_4fb05a30068f59bc6860425684c7d08941bddc505cbd67604176306c9c6e598e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_187fbd32aff38d58ecdb975f0d9d97938964a999f5bdc5d88b637147adbbdd37->leave($__internal_187fbd32aff38d58ecdb975f0d9d97938964a999f5bdc5d88b637147adbbdd37_prof);

        
        $__internal_4fb05a30068f59bc6860425684c7d08941bddc505cbd67604176306c9c6e598e->leave($__internal_4fb05a30068f59bc6860425684c7d08941bddc505cbd67604176306c9c6e598e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a29440044460457a9c3fe4956129f5b42d4b332bd998544b67240a475261223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a29440044460457a9c3fe4956129f5b42d4b332bd998544b67240a475261223->enter($__internal_4a29440044460457a9c3fe4956129f5b42d4b332bd998544b67240a475261223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ad68cbb854e7762d7eb3e5990561d489f52c5da42d93a6edca310f83c55e9da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad68cbb854e7762d7eb3e5990561d489f52c5da42d93a6edca310f83c55e9da0->enter($__internal_ad68cbb854e7762d7eb3e5990561d489f52c5da42d93a6edca310f83c55e9da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ad68cbb854e7762d7eb3e5990561d489f52c5da42d93a6edca310f83c55e9da0->leave($__internal_ad68cbb854e7762d7eb3e5990561d489f52c5da42d93a6edca310f83c55e9da0_prof);

        
        $__internal_4a29440044460457a9c3fe4956129f5b42d4b332bd998544b67240a475261223->leave($__internal_4a29440044460457a9c3fe4956129f5b42d4b332bd998544b67240a475261223_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
