<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_09e59e6d894d6de6950bfedfd22a9eb1c90386a6eba841cf557d625111b2c342 extends Twig_Template
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
        $__internal_54b207d3259e0e955a22846f97c7e161eeb9265879aee03ea5222affb4124deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b207d3259e0e955a22846f97c7e161eeb9265879aee03ea5222affb4124deb->enter($__internal_54b207d3259e0e955a22846f97c7e161eeb9265879aee03ea5222affb4124deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_050b340cc45deed421bc35c0f0ad0437975e49bad15f95920d55980fce8894e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_050b340cc45deed421bc35c0f0ad0437975e49bad15f95920d55980fce8894e5->enter($__internal_050b340cc45deed421bc35c0f0ad0437975e49bad15f95920d55980fce8894e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54b207d3259e0e955a22846f97c7e161eeb9265879aee03ea5222affb4124deb->leave($__internal_54b207d3259e0e955a22846f97c7e161eeb9265879aee03ea5222affb4124deb_prof);

        
        $__internal_050b340cc45deed421bc35c0f0ad0437975e49bad15f95920d55980fce8894e5->leave($__internal_050b340cc45deed421bc35c0f0ad0437975e49bad15f95920d55980fce8894e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ceac25b140992b314841e16601aaa6c82794211979e18be1d9a490524c6ddaac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceac25b140992b314841e16601aaa6c82794211979e18be1d9a490524c6ddaac->enter($__internal_ceac25b140992b314841e16601aaa6c82794211979e18be1d9a490524c6ddaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6b86bedfbc92f22d63a490957fea9594db74d7023e5b59dc825e75116b58f560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b86bedfbc92f22d63a490957fea9594db74d7023e5b59dc825e75116b58f560->enter($__internal_6b86bedfbc92f22d63a490957fea9594db74d7023e5b59dc825e75116b58f560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6b86bedfbc92f22d63a490957fea9594db74d7023e5b59dc825e75116b58f560->leave($__internal_6b86bedfbc92f22d63a490957fea9594db74d7023e5b59dc825e75116b58f560_prof);

        
        $__internal_ceac25b140992b314841e16601aaa6c82794211979e18be1d9a490524c6ddaac->leave($__internal_ceac25b140992b314841e16601aaa6c82794211979e18be1d9a490524c6ddaac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_11b8cbee668d6f15ed9a4f4d02b6724ea22c950be9c58726964443e27a00c660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11b8cbee668d6f15ed9a4f4d02b6724ea22c950be9c58726964443e27a00c660->enter($__internal_11b8cbee668d6f15ed9a4f4d02b6724ea22c950be9c58726964443e27a00c660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ad6d6e2c89a2297a78f62acc899be676fe485947d18d4799190a4403c6a1fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad6d6e2c89a2297a78f62acc899be676fe485947d18d4799190a4403c6a1fcf->enter($__internal_6ad6d6e2c89a2297a78f62acc899be676fe485947d18d4799190a4403c6a1fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6ad6d6e2c89a2297a78f62acc899be676fe485947d18d4799190a4403c6a1fcf->leave($__internal_6ad6d6e2c89a2297a78f62acc899be676fe485947d18d4799190a4403c6a1fcf_prof);

        
        $__internal_11b8cbee668d6f15ed9a4f4d02b6724ea22c950be9c58726964443e27a00c660->leave($__internal_11b8cbee668d6f15ed9a4f4d02b6724ea22c950be9c58726964443e27a00c660_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
