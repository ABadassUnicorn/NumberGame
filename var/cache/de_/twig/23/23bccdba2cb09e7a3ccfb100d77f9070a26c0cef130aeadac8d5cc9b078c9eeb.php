<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_370eec71c50abe45dbcf99fba3f5deac6c063e3b577323b5199d85f69b0b17e4 extends Twig_Template
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
        $__internal_bbf6f51625f3dd17a7313eb401e7ef879ff056f9c780a3324c68402437fe47da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf6f51625f3dd17a7313eb401e7ef879ff056f9c780a3324c68402437fe47da->enter($__internal_bbf6f51625f3dd17a7313eb401e7ef879ff056f9c780a3324c68402437fe47da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f7fa8f8697dde83f20874d6c91bb891a6a21f3e6769b8ae27ff7021e141c4abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fa8f8697dde83f20874d6c91bb891a6a21f3e6769b8ae27ff7021e141c4abc->enter($__internal_f7fa8f8697dde83f20874d6c91bb891a6a21f3e6769b8ae27ff7021e141c4abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbf6f51625f3dd17a7313eb401e7ef879ff056f9c780a3324c68402437fe47da->leave($__internal_bbf6f51625f3dd17a7313eb401e7ef879ff056f9c780a3324c68402437fe47da_prof);

        
        $__internal_f7fa8f8697dde83f20874d6c91bb891a6a21f3e6769b8ae27ff7021e141c4abc->leave($__internal_f7fa8f8697dde83f20874d6c91bb891a6a21f3e6769b8ae27ff7021e141c4abc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56e2714f8b896fb718e07e19d68a9caf1d7bf87afb51a96838db996a905d885e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e2714f8b896fb718e07e19d68a9caf1d7bf87afb51a96838db996a905d885e->enter($__internal_56e2714f8b896fb718e07e19d68a9caf1d7bf87afb51a96838db996a905d885e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5067b00540922c7fe9ac49170e3d50626520230101290350febb13a2ffc584df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5067b00540922c7fe9ac49170e3d50626520230101290350febb13a2ffc584df->enter($__internal_5067b00540922c7fe9ac49170e3d50626520230101290350febb13a2ffc584df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5067b00540922c7fe9ac49170e3d50626520230101290350febb13a2ffc584df->leave($__internal_5067b00540922c7fe9ac49170e3d50626520230101290350febb13a2ffc584df_prof);

        
        $__internal_56e2714f8b896fb718e07e19d68a9caf1d7bf87afb51a96838db996a905d885e->leave($__internal_56e2714f8b896fb718e07e19d68a9caf1d7bf87afb51a96838db996a905d885e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c968933a56623ce95ec8a502d8707d0fd6f5dba82ea79aeab56b1e923dd20d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c968933a56623ce95ec8a502d8707d0fd6f5dba82ea79aeab56b1e923dd20d56->enter($__internal_c968933a56623ce95ec8a502d8707d0fd6f5dba82ea79aeab56b1e923dd20d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8298bb35fedebc24a7ac19bf9af51f895f2c00aed7f8ddc5111741a9fdc9e82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8298bb35fedebc24a7ac19bf9af51f895f2c00aed7f8ddc5111741a9fdc9e82f->enter($__internal_8298bb35fedebc24a7ac19bf9af51f895f2c00aed7f8ddc5111741a9fdc9e82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8298bb35fedebc24a7ac19bf9af51f895f2c00aed7f8ddc5111741a9fdc9e82f->leave($__internal_8298bb35fedebc24a7ac19bf9af51f895f2c00aed7f8ddc5111741a9fdc9e82f_prof);

        
        $__internal_c968933a56623ce95ec8a502d8707d0fd6f5dba82ea79aeab56b1e923dd20d56->leave($__internal_c968933a56623ce95ec8a502d8707d0fd6f5dba82ea79aeab56b1e923dd20d56_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_218370789abb75e8ae50c2f04374eb07041dbd63d7ff7c7ffa87cff228d344a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218370789abb75e8ae50c2f04374eb07041dbd63d7ff7c7ffa87cff228d344a4->enter($__internal_218370789abb75e8ae50c2f04374eb07041dbd63d7ff7c7ffa87cff228d344a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14467f4d49c48bf271e3b66f292fe513577fcf432d44490a7afbd3400766ad71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14467f4d49c48bf271e3b66f292fe513577fcf432d44490a7afbd3400766ad71->enter($__internal_14467f4d49c48bf271e3b66f292fe513577fcf432d44490a7afbd3400766ad71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_14467f4d49c48bf271e3b66f292fe513577fcf432d44490a7afbd3400766ad71->leave($__internal_14467f4d49c48bf271e3b66f292fe513577fcf432d44490a7afbd3400766ad71_prof);

        
        $__internal_218370789abb75e8ae50c2f04374eb07041dbd63d7ff7c7ffa87cff228d344a4->leave($__internal_218370789abb75e8ae50c2f04374eb07041dbd63d7ff7c7ffa87cff228d344a4_prof);

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
", "@Twig/Exception/exception_full.html.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
