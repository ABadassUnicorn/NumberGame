<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_f31f2c7e098f9a9c4060bbf8c45311a953c4ab07c2df4c8f8142d5d203ac686d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_586ac2d3e892dddb001b96c3a9cd91f1b2a3f148a14cbf59ef991c663b153cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586ac2d3e892dddb001b96c3a9cd91f1b2a3f148a14cbf59ef991c663b153cc2->enter($__internal_586ac2d3e892dddb001b96c3a9cd91f1b2a3f148a14cbf59ef991c663b153cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_42f329f445d276e3712e3951ba14d48665fcc7f22edd48c6df8e86c107462319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f329f445d276e3712e3951ba14d48665fcc7f22edd48c6df8e86c107462319->enter($__internal_42f329f445d276e3712e3951ba14d48665fcc7f22edd48c6df8e86c107462319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_586ac2d3e892dddb001b96c3a9cd91f1b2a3f148a14cbf59ef991c663b153cc2->leave($__internal_586ac2d3e892dddb001b96c3a9cd91f1b2a3f148a14cbf59ef991c663b153cc2_prof);

        
        $__internal_42f329f445d276e3712e3951ba14d48665fcc7f22edd48c6df8e86c107462319->leave($__internal_42f329f445d276e3712e3951ba14d48665fcc7f22edd48c6df8e86c107462319_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_90dfcc6cc658fe16251982c2b5307a32521d708800f0fa1084ed96b7db810bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90dfcc6cc658fe16251982c2b5307a32521d708800f0fa1084ed96b7db810bf4->enter($__internal_90dfcc6cc658fe16251982c2b5307a32521d708800f0fa1084ed96b7db810bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_cc8b672b35a2825de7cf5d0134cbac5ed52ab6b9438168419af657387d18869d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8b672b35a2825de7cf5d0134cbac5ed52ab6b9438168419af657387d18869d->enter($__internal_cc8b672b35a2825de7cf5d0134cbac5ed52ab6b9438168419af657387d18869d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_cc8b672b35a2825de7cf5d0134cbac5ed52ab6b9438168419af657387d18869d->leave($__internal_cc8b672b35a2825de7cf5d0134cbac5ed52ab6b9438168419af657387d18869d_prof);

        
        $__internal_90dfcc6cc658fe16251982c2b5307a32521d708800f0fa1084ed96b7db810bf4->leave($__internal_90dfcc6cc658fe16251982c2b5307a32521d708800f0fa1084ed96b7db810bf4_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9277b1eb588ac7ed333c1463aa088dc6b0b5520919280a5e2b1811f0ed9bd61f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9277b1eb588ac7ed333c1463aa088dc6b0b5520919280a5e2b1811f0ed9bd61f->enter($__internal_9277b1eb588ac7ed333c1463aa088dc6b0b5520919280a5e2b1811f0ed9bd61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5fef329338fb1a71bf9b990055f39ecbd9ddaae10f9e3fad994fce78fd3c46a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fef329338fb1a71bf9b990055f39ecbd9ddaae10f9e3fad994fce78fd3c46a1->enter($__internal_5fef329338fb1a71bf9b990055f39ecbd9ddaae10f9e3fad994fce78fd3c46a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_5fef329338fb1a71bf9b990055f39ecbd9ddaae10f9e3fad994fce78fd3c46a1->leave($__internal_5fef329338fb1a71bf9b990055f39ecbd9ddaae10f9e3fad994fce78fd3c46a1_prof);

        
        $__internal_9277b1eb588ac7ed333c1463aa088dc6b0b5520919280a5e2b1811f0ed9bd61f->leave($__internal_9277b1eb588ac7ed333c1463aa088dc6b0b5520919280a5e2b1811f0ed9bd61f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
