<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_93ef0a21a509be6fdf30f626d732831d137c29dc29dbe1a022f3f34fbf844f6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1acb7569610da99c989ce00345455d226e24d0f4b08fa6f6fb4a6a8d707fb0e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1acb7569610da99c989ce00345455d226e24d0f4b08fa6f6fb4a6a8d707fb0e5->enter($__internal_1acb7569610da99c989ce00345455d226e24d0f4b08fa6f6fb4a6a8d707fb0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_fc586432e74c5a59761d18e91b2b225a54abee3a471f3801636d9ba8f7cecc91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc586432e74c5a59761d18e91b2b225a54abee3a471f3801636d9ba8f7cecc91->enter($__internal_fc586432e74c5a59761d18e91b2b225a54abee3a471f3801636d9ba8f7cecc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1acb7569610da99c989ce00345455d226e24d0f4b08fa6f6fb4a6a8d707fb0e5->leave($__internal_1acb7569610da99c989ce00345455d226e24d0f4b08fa6f6fb4a6a8d707fb0e5_prof);

        
        $__internal_fc586432e74c5a59761d18e91b2b225a54abee3a471f3801636d9ba8f7cecc91->leave($__internal_fc586432e74c5a59761d18e91b2b225a54abee3a471f3801636d9ba8f7cecc91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_44bef9f9e1e17184b4f2a25e7bd7d8255549cd6ab8f65f69371e1c9c0b68e0e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44bef9f9e1e17184b4f2a25e7bd7d8255549cd6ab8f65f69371e1c9c0b68e0e6->enter($__internal_44bef9f9e1e17184b4f2a25e7bd7d8255549cd6ab8f65f69371e1c9c0b68e0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0d4c9891b27e5bf9739356fd64431f23dcb74ab79166a22abda9452669e63ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4c9891b27e5bf9739356fd64431f23dcb74ab79166a22abda9452669e63ae6->enter($__internal_0d4c9891b27e5bf9739356fd64431f23dcb74ab79166a22abda9452669e63ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0d4c9891b27e5bf9739356fd64431f23dcb74ab79166a22abda9452669e63ae6->leave($__internal_0d4c9891b27e5bf9739356fd64431f23dcb74ab79166a22abda9452669e63ae6_prof);

        
        $__internal_44bef9f9e1e17184b4f2a25e7bd7d8255549cd6ab8f65f69371e1c9c0b68e0e6->leave($__internal_44bef9f9e1e17184b4f2a25e7bd7d8255549cd6ab8f65f69371e1c9c0b68e0e6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ffcaba5a62c12abfbda160fc8f1d64aec576089fa630d001fb7cf67841ac100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ffcaba5a62c12abfbda160fc8f1d64aec576089fa630d001fb7cf67841ac100->enter($__internal_7ffcaba5a62c12abfbda160fc8f1d64aec576089fa630d001fb7cf67841ac100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a84b8d0db0179f190e3c82e1457ce38af5eeab3aeb7b08cdfcdc49c5b45d7b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84b8d0db0179f190e3c82e1457ce38af5eeab3aeb7b08cdfcdc49c5b45d7b70->enter($__internal_a84b8d0db0179f190e3c82e1457ce38af5eeab3aeb7b08cdfcdc49c5b45d7b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a84b8d0db0179f190e3c82e1457ce38af5eeab3aeb7b08cdfcdc49c5b45d7b70->leave($__internal_a84b8d0db0179f190e3c82e1457ce38af5eeab3aeb7b08cdfcdc49c5b45d7b70_prof);

        
        $__internal_7ffcaba5a62c12abfbda160fc8f1d64aec576089fa630d001fb7cf67841ac100->leave($__internal_7ffcaba5a62c12abfbda160fc8f1d64aec576089fa630d001fb7cf67841ac100_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_87e9ffb187cc0bb2b567de533dbc151acb96412217e8aa133ca72ed3114fd269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e9ffb187cc0bb2b567de533dbc151acb96412217e8aa133ca72ed3114fd269->enter($__internal_87e9ffb187cc0bb2b567de533dbc151acb96412217e8aa133ca72ed3114fd269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0b941aeed1cd8cec569da4fbe14c993b7c2b3188b63b6c60a72d30256fd4a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b941aeed1cd8cec569da4fbe14c993b7c2b3188b63b6c60a72d30256fd4a7e->enter($__internal_c0b941aeed1cd8cec569da4fbe14c993b7c2b3188b63b6c60a72d30256fd4a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c0b941aeed1cd8cec569da4fbe14c993b7c2b3188b63b6c60a72d30256fd4a7e->leave($__internal_c0b941aeed1cd8cec569da4fbe14c993b7c2b3188b63b6c60a72d30256fd4a7e_prof);

        
        $__internal_87e9ffb187cc0bb2b567de533dbc151acb96412217e8aa133ca72ed3114fd269->leave($__internal_87e9ffb187cc0bb2b567de533dbc151acb96412217e8aa133ca72ed3114fd269_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
