<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_53e762bd1860787b0da6c5ad68c1f668d67491d2b649ef3e44812892a2cf1e59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_6096c6e83b5fbe453ec3fa957164eea95836db2e6b8b4c6a8482ff0b90065bf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6096c6e83b5fbe453ec3fa957164eea95836db2e6b8b4c6a8482ff0b90065bf0->enter($__internal_6096c6e83b5fbe453ec3fa957164eea95836db2e6b8b4c6a8482ff0b90065bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_f2f9678e5d22713392cbb611a8fce8730a8888de7a01f6d18aa06ada90de8697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f9678e5d22713392cbb611a8fce8730a8888de7a01f6d18aa06ada90de8697->enter($__internal_f2f9678e5d22713392cbb611a8fce8730a8888de7a01f6d18aa06ada90de8697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6096c6e83b5fbe453ec3fa957164eea95836db2e6b8b4c6a8482ff0b90065bf0->leave($__internal_6096c6e83b5fbe453ec3fa957164eea95836db2e6b8b4c6a8482ff0b90065bf0_prof);

        
        $__internal_f2f9678e5d22713392cbb611a8fce8730a8888de7a01f6d18aa06ada90de8697->leave($__internal_f2f9678e5d22713392cbb611a8fce8730a8888de7a01f6d18aa06ada90de8697_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0379ec616ff8d15a1699a9fb8c103529b579a26343667f99cf281bbe61f89340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0379ec616ff8d15a1699a9fb8c103529b579a26343667f99cf281bbe61f89340->enter($__internal_0379ec616ff8d15a1699a9fb8c103529b579a26343667f99cf281bbe61f89340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5f8074ae8632f76ff19a63c66eb6de29c62034ac6df76517503749f28b51c60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8074ae8632f76ff19a63c66eb6de29c62034ac6df76517503749f28b51c60e->enter($__internal_5f8074ae8632f76ff19a63c66eb6de29c62034ac6df76517503749f28b51c60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5f8074ae8632f76ff19a63c66eb6de29c62034ac6df76517503749f28b51c60e->leave($__internal_5f8074ae8632f76ff19a63c66eb6de29c62034ac6df76517503749f28b51c60e_prof);

        
        $__internal_0379ec616ff8d15a1699a9fb8c103529b579a26343667f99cf281bbe61f89340->leave($__internal_0379ec616ff8d15a1699a9fb8c103529b579a26343667f99cf281bbe61f89340_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bb0773eb9692f36f2faa6699b8ce7efece7c566f8149506c8a2887a793822f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb0773eb9692f36f2faa6699b8ce7efece7c566f8149506c8a2887a793822f8->enter($__internal_0bb0773eb9692f36f2faa6699b8ce7efece7c566f8149506c8a2887a793822f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d23021c9d31676f9aa95e8d54f7541e48971261361d743cd0e0416af645991d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23021c9d31676f9aa95e8d54f7541e48971261361d743cd0e0416af645991d8->enter($__internal_d23021c9d31676f9aa95e8d54f7541e48971261361d743cd0e0416af645991d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d23021c9d31676f9aa95e8d54f7541e48971261361d743cd0e0416af645991d8->leave($__internal_d23021c9d31676f9aa95e8d54f7541e48971261361d743cd0e0416af645991d8_prof);

        
        $__internal_0bb0773eb9692f36f2faa6699b8ce7efece7c566f8149506c8a2887a793822f8->leave($__internal_0bb0773eb9692f36f2faa6699b8ce7efece7c566f8149506c8a2887a793822f8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f4ce6378e83183e78d63ea23031aa0bbd0efaf0cabb7faae2da2526426d415e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f4ce6378e83183e78d63ea23031aa0bbd0efaf0cabb7faae2da2526426d415e->enter($__internal_8f4ce6378e83183e78d63ea23031aa0bbd0efaf0cabb7faae2da2526426d415e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4daec61c3a0924780a4e0e3faff5bef90554661eab543062d6f5a20f17cb1453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4daec61c3a0924780a4e0e3faff5bef90554661eab543062d6f5a20f17cb1453->enter($__internal_4daec61c3a0924780a4e0e3faff5bef90554661eab543062d6f5a20f17cb1453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_4daec61c3a0924780a4e0e3faff5bef90554661eab543062d6f5a20f17cb1453->leave($__internal_4daec61c3a0924780a4e0e3faff5bef90554661eab543062d6f5a20f17cb1453_prof);

        
        $__internal_8f4ce6378e83183e78d63ea23031aa0bbd0efaf0cabb7faae2da2526426d415e->leave($__internal_8f4ce6378e83183e78d63ea23031aa0bbd0efaf0cabb7faae2da2526426d415e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
