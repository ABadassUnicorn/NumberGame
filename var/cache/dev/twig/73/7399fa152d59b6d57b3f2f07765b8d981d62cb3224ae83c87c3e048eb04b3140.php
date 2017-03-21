<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ecefa1cc08d0dbe61ce192ba01c9a7e05be950f86aff277da15f81ad067a3f72 extends Twig_Template
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
        $__internal_4b1cba55cc43db28004aae4e88fbe2bcc1b67c45de11c0dcd586810635b15cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b1cba55cc43db28004aae4e88fbe2bcc1b67c45de11c0dcd586810635b15cdd->enter($__internal_4b1cba55cc43db28004aae4e88fbe2bcc1b67c45de11c0dcd586810635b15cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_bb7df76aa1e26086b5ff28d567201f8981d54206d3ff5b79838f20d54f74f5d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7df76aa1e26086b5ff28d567201f8981d54206d3ff5b79838f20d54f74f5d3->enter($__internal_bb7df76aa1e26086b5ff28d567201f8981d54206d3ff5b79838f20d54f74f5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b1cba55cc43db28004aae4e88fbe2bcc1b67c45de11c0dcd586810635b15cdd->leave($__internal_4b1cba55cc43db28004aae4e88fbe2bcc1b67c45de11c0dcd586810635b15cdd_prof);

        
        $__internal_bb7df76aa1e26086b5ff28d567201f8981d54206d3ff5b79838f20d54f74f5d3->leave($__internal_bb7df76aa1e26086b5ff28d567201f8981d54206d3ff5b79838f20d54f74f5d3_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f3bc226b197111b20f5cfea88908fc697bbe159a27d5bcfadb5aaa2dd7c79e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3bc226b197111b20f5cfea88908fc697bbe159a27d5bcfadb5aaa2dd7c79e8b->enter($__internal_f3bc226b197111b20f5cfea88908fc697bbe159a27d5bcfadb5aaa2dd7c79e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_96cf5484ed90dff15b9c5a26cee40e7a3b9e0213e669be01f749138f7bb90ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cf5484ed90dff15b9c5a26cee40e7a3b9e0213e669be01f749138f7bb90ea2->enter($__internal_96cf5484ed90dff15b9c5a26cee40e7a3b9e0213e669be01f749138f7bb90ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_96cf5484ed90dff15b9c5a26cee40e7a3b9e0213e669be01f749138f7bb90ea2->leave($__internal_96cf5484ed90dff15b9c5a26cee40e7a3b9e0213e669be01f749138f7bb90ea2_prof);

        
        $__internal_f3bc226b197111b20f5cfea88908fc697bbe159a27d5bcfadb5aaa2dd7c79e8b->leave($__internal_f3bc226b197111b20f5cfea88908fc697bbe159a27d5bcfadb5aaa2dd7c79e8b_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7024438d83cd390d46736fd402a5d52f4fcfee2fc854f72538fdcb4a93fa61dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7024438d83cd390d46736fd402a5d52f4fcfee2fc854f72538fdcb4a93fa61dc->enter($__internal_7024438d83cd390d46736fd402a5d52f4fcfee2fc854f72538fdcb4a93fa61dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_65590a2650b027cfb7d6e85e522104355fa0e91f8bc5b9ff0f9046e1099b2b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65590a2650b027cfb7d6e85e522104355fa0e91f8bc5b9ff0f9046e1099b2b6a->enter($__internal_65590a2650b027cfb7d6e85e522104355fa0e91f8bc5b9ff0f9046e1099b2b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_65590a2650b027cfb7d6e85e522104355fa0e91f8bc5b9ff0f9046e1099b2b6a->leave($__internal_65590a2650b027cfb7d6e85e522104355fa0e91f8bc5b9ff0f9046e1099b2b6a_prof);

        
        $__internal_7024438d83cd390d46736fd402a5d52f4fcfee2fc854f72538fdcb4a93fa61dc->leave($__internal_7024438d83cd390d46736fd402a5d52f4fcfee2fc854f72538fdcb4a93fa61dc_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
