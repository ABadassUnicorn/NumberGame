<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_8dc981c067c83e6034f579a530b2889393a182667ad92cfefa1ea3ccc95ebccc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_dbcf650777dcd9c96c6bbb8995cf3d61adc9d350bd18f6c4d465bdfbc1abfd47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbcf650777dcd9c96c6bbb8995cf3d61adc9d350bd18f6c4d465bdfbc1abfd47->enter($__internal_dbcf650777dcd9c96c6bbb8995cf3d61adc9d350bd18f6c4d465bdfbc1abfd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_4900baf1c288a3ae86d832ab2b0164d67afa598c7cf1a0be375e78c29b460424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4900baf1c288a3ae86d832ab2b0164d67afa598c7cf1a0be375e78c29b460424->enter($__internal_4900baf1c288a3ae86d832ab2b0164d67afa598c7cf1a0be375e78c29b460424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbcf650777dcd9c96c6bbb8995cf3d61adc9d350bd18f6c4d465bdfbc1abfd47->leave($__internal_dbcf650777dcd9c96c6bbb8995cf3d61adc9d350bd18f6c4d465bdfbc1abfd47_prof);

        
        $__internal_4900baf1c288a3ae86d832ab2b0164d67afa598c7cf1a0be375e78c29b460424->leave($__internal_4900baf1c288a3ae86d832ab2b0164d67afa598c7cf1a0be375e78c29b460424_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9037531073143261af181f75c2ecbabd745f19c6289431f53a8890aa51168f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9037531073143261af181f75c2ecbabd745f19c6289431f53a8890aa51168f16->enter($__internal_9037531073143261af181f75c2ecbabd745f19c6289431f53a8890aa51168f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4e81991cfff2f934bce7d0b6c9907216e415f49fcf84e10abb91b6b5bde595fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e81991cfff2f934bce7d0b6c9907216e415f49fcf84e10abb91b6b5bde595fb->enter($__internal_4e81991cfff2f934bce7d0b6c9907216e415f49fcf84e10abb91b6b5bde595fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_4e81991cfff2f934bce7d0b6c9907216e415f49fcf84e10abb91b6b5bde595fb->leave($__internal_4e81991cfff2f934bce7d0b6c9907216e415f49fcf84e10abb91b6b5bde595fb_prof);

        
        $__internal_9037531073143261af181f75c2ecbabd745f19c6289431f53a8890aa51168f16->leave($__internal_9037531073143261af181f75c2ecbabd745f19c6289431f53a8890aa51168f16_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c41887486993fe344156584430e1ee440c6b0b43c93e1b5a13224f6215b58d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c41887486993fe344156584430e1ee440c6b0b43c93e1b5a13224f6215b58d7->enter($__internal_9c41887486993fe344156584430e1ee440c6b0b43c93e1b5a13224f6215b58d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aaf8d2cb9720d488c6f11b5f27fb859ca53bc4cb87ec3a10d7302f109c504035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf8d2cb9720d488c6f11b5f27fb859ca53bc4cb87ec3a10d7302f109c504035->enter($__internal_aaf8d2cb9720d488c6f11b5f27fb859ca53bc4cb87ec3a10d7302f109c504035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_aaf8d2cb9720d488c6f11b5f27fb859ca53bc4cb87ec3a10d7302f109c504035->leave($__internal_aaf8d2cb9720d488c6f11b5f27fb859ca53bc4cb87ec3a10d7302f109c504035_prof);

        
        $__internal_9c41887486993fe344156584430e1ee440c6b0b43c93e1b5a13224f6215b58d7->leave($__internal_9c41887486993fe344156584430e1ee440c6b0b43c93e1b5a13224f6215b58d7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
