<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f063472202edb1b7081e2685d178b6b1b10cbbed130880954dcf6218a29c3297 extends Twig_Template
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
        $__internal_e2681359d2dec03c00dd42bb46199e32296fbdf636271fce3c2efcfa7c2a0525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2681359d2dec03c00dd42bb46199e32296fbdf636271fce3c2efcfa7c2a0525->enter($__internal_e2681359d2dec03c00dd42bb46199e32296fbdf636271fce3c2efcfa7c2a0525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_92eedc13c9e77ccf495e03eeaa1370059a5ad3e7b64e49d9c4c6a6c7e52ae52d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92eedc13c9e77ccf495e03eeaa1370059a5ad3e7b64e49d9c4c6a6c7e52ae52d->enter($__internal_92eedc13c9e77ccf495e03eeaa1370059a5ad3e7b64e49d9c4c6a6c7e52ae52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2681359d2dec03c00dd42bb46199e32296fbdf636271fce3c2efcfa7c2a0525->leave($__internal_e2681359d2dec03c00dd42bb46199e32296fbdf636271fce3c2efcfa7c2a0525_prof);

        
        $__internal_92eedc13c9e77ccf495e03eeaa1370059a5ad3e7b64e49d9c4c6a6c7e52ae52d->leave($__internal_92eedc13c9e77ccf495e03eeaa1370059a5ad3e7b64e49d9c4c6a6c7e52ae52d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3270b866836a22495d45e170ef27935b044a664964d3b5ebe431286dc06fb204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3270b866836a22495d45e170ef27935b044a664964d3b5ebe431286dc06fb204->enter($__internal_3270b866836a22495d45e170ef27935b044a664964d3b5ebe431286dc06fb204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9bd8aa855d96555b77d7f0cef72d473a388199fa1fe55ab0a3d75afa613b7120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd8aa855d96555b77d7f0cef72d473a388199fa1fe55ab0a3d75afa613b7120->enter($__internal_9bd8aa855d96555b77d7f0cef72d473a388199fa1fe55ab0a3d75afa613b7120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9bd8aa855d96555b77d7f0cef72d473a388199fa1fe55ab0a3d75afa613b7120->leave($__internal_9bd8aa855d96555b77d7f0cef72d473a388199fa1fe55ab0a3d75afa613b7120_prof);

        
        $__internal_3270b866836a22495d45e170ef27935b044a664964d3b5ebe431286dc06fb204->leave($__internal_3270b866836a22495d45e170ef27935b044a664964d3b5ebe431286dc06fb204_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0514e564000ba7b2d70735b43bd5ecd2a1778fc9d1174e4360d6b5fde1a2a10a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0514e564000ba7b2d70735b43bd5ecd2a1778fc9d1174e4360d6b5fde1a2a10a->enter($__internal_0514e564000ba7b2d70735b43bd5ecd2a1778fc9d1174e4360d6b5fde1a2a10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_76024ed311575c22f0d1709c52c9f87178ecbd164143949fa4347bcef29fb0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76024ed311575c22f0d1709c52c9f87178ecbd164143949fa4347bcef29fb0f6->enter($__internal_76024ed311575c22f0d1709c52c9f87178ecbd164143949fa4347bcef29fb0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_76024ed311575c22f0d1709c52c9f87178ecbd164143949fa4347bcef29fb0f6->leave($__internal_76024ed311575c22f0d1709c52c9f87178ecbd164143949fa4347bcef29fb0f6_prof);

        
        $__internal_0514e564000ba7b2d70735b43bd5ecd2a1778fc9d1174e4360d6b5fde1a2a10a->leave($__internal_0514e564000ba7b2d70735b43bd5ecd2a1778fc9d1174e4360d6b5fde1a2a10a_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
