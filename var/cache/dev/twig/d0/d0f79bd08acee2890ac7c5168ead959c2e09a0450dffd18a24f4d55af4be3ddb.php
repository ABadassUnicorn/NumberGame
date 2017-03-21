<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0dd6209dd35fbd354d91e560161ebd6f87251c523bf8b33bd82c6662d48ebb5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_3e7fde570f3d048d64ca036f33efd28ed5d289a8c7374008f5f83e6c78639a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e7fde570f3d048d64ca036f33efd28ed5d289a8c7374008f5f83e6c78639a7b->enter($__internal_3e7fde570f3d048d64ca036f33efd28ed5d289a8c7374008f5f83e6c78639a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_532b3d0c99159f8da5fee682369fc753f637a93d1e7947370a9f1a0da5ee6e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532b3d0c99159f8da5fee682369fc753f637a93d1e7947370a9f1a0da5ee6e41->enter($__internal_532b3d0c99159f8da5fee682369fc753f637a93d1e7947370a9f1a0da5ee6e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e7fde570f3d048d64ca036f33efd28ed5d289a8c7374008f5f83e6c78639a7b->leave($__internal_3e7fde570f3d048d64ca036f33efd28ed5d289a8c7374008f5f83e6c78639a7b_prof);

        
        $__internal_532b3d0c99159f8da5fee682369fc753f637a93d1e7947370a9f1a0da5ee6e41->leave($__internal_532b3d0c99159f8da5fee682369fc753f637a93d1e7947370a9f1a0da5ee6e41_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_34676692e9a9014ef9b912b9d6241607fe25f078d83e2e7ecb9eeadc2dce11f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34676692e9a9014ef9b912b9d6241607fe25f078d83e2e7ecb9eeadc2dce11f8->enter($__internal_34676692e9a9014ef9b912b9d6241607fe25f078d83e2e7ecb9eeadc2dce11f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec044c03fdfc8497cc14144e241850f56c354537da043495149a0c5bf56c8340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec044c03fdfc8497cc14144e241850f56c354537da043495149a0c5bf56c8340->enter($__internal_ec044c03fdfc8497cc14144e241850f56c354537da043495149a0c5bf56c8340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ec044c03fdfc8497cc14144e241850f56c354537da043495149a0c5bf56c8340->leave($__internal_ec044c03fdfc8497cc14144e241850f56c354537da043495149a0c5bf56c8340_prof);

        
        $__internal_34676692e9a9014ef9b912b9d6241607fe25f078d83e2e7ecb9eeadc2dce11f8->leave($__internal_34676692e9a9014ef9b912b9d6241607fe25f078d83e2e7ecb9eeadc2dce11f8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ff7beb30f05d7974875e7b9648f1cf7ecb69ce3e229c94678ad4161d2205fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff7beb30f05d7974875e7b9648f1cf7ecb69ce3e229c94678ad4161d2205fd7->enter($__internal_0ff7beb30f05d7974875e7b9648f1cf7ecb69ce3e229c94678ad4161d2205fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0189d9c10f2372cc525371a7c379f2ef0633bdf8f1fd7a24565fd68a1b457378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0189d9c10f2372cc525371a7c379f2ef0633bdf8f1fd7a24565fd68a1b457378->enter($__internal_0189d9c10f2372cc525371a7c379f2ef0633bdf8f1fd7a24565fd68a1b457378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0189d9c10f2372cc525371a7c379f2ef0633bdf8f1fd7a24565fd68a1b457378->leave($__internal_0189d9c10f2372cc525371a7c379f2ef0633bdf8f1fd7a24565fd68a1b457378_prof);

        
        $__internal_0ff7beb30f05d7974875e7b9648f1cf7ecb69ce3e229c94678ad4161d2205fd7->leave($__internal_0ff7beb30f05d7974875e7b9648f1cf7ecb69ce3e229c94678ad4161d2205fd7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
