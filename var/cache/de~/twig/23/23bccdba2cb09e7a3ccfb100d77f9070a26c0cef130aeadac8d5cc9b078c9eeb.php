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
        $__internal_3184106fd8e7a6dd59989debc2f05ff1263d065c688db3b227d473a0d7bc9605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3184106fd8e7a6dd59989debc2f05ff1263d065c688db3b227d473a0d7bc9605->enter($__internal_3184106fd8e7a6dd59989debc2f05ff1263d065c688db3b227d473a0d7bc9605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_79b96bfbdc4e7000a61f048e83f4e8127ad0b311d9f418254ca4febd11b5eee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b96bfbdc4e7000a61f048e83f4e8127ad0b311d9f418254ca4febd11b5eee4->enter($__internal_79b96bfbdc4e7000a61f048e83f4e8127ad0b311d9f418254ca4febd11b5eee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3184106fd8e7a6dd59989debc2f05ff1263d065c688db3b227d473a0d7bc9605->leave($__internal_3184106fd8e7a6dd59989debc2f05ff1263d065c688db3b227d473a0d7bc9605_prof);

        
        $__internal_79b96bfbdc4e7000a61f048e83f4e8127ad0b311d9f418254ca4febd11b5eee4->leave($__internal_79b96bfbdc4e7000a61f048e83f4e8127ad0b311d9f418254ca4febd11b5eee4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a86d732a769d696b95d0e3cfecf5344e665d395d02ca2f793a220ee79dd7316a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a86d732a769d696b95d0e3cfecf5344e665d395d02ca2f793a220ee79dd7316a->enter($__internal_a86d732a769d696b95d0e3cfecf5344e665d395d02ca2f793a220ee79dd7316a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_490f1a1f930b4da5198b9b14ce25a31ed7a704e1efc671fa1c62e2607ba03dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490f1a1f930b4da5198b9b14ce25a31ed7a704e1efc671fa1c62e2607ba03dff->enter($__internal_490f1a1f930b4da5198b9b14ce25a31ed7a704e1efc671fa1c62e2607ba03dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_490f1a1f930b4da5198b9b14ce25a31ed7a704e1efc671fa1c62e2607ba03dff->leave($__internal_490f1a1f930b4da5198b9b14ce25a31ed7a704e1efc671fa1c62e2607ba03dff_prof);

        
        $__internal_a86d732a769d696b95d0e3cfecf5344e665d395d02ca2f793a220ee79dd7316a->leave($__internal_a86d732a769d696b95d0e3cfecf5344e665d395d02ca2f793a220ee79dd7316a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fae32424d81e36f43d2650f29f29f9019b45986b820f106e574c371ce1b9b9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae32424d81e36f43d2650f29f29f9019b45986b820f106e574c371ce1b9b9b4->enter($__internal_fae32424d81e36f43d2650f29f29f9019b45986b820f106e574c371ce1b9b9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_004c0f7e45ce92197cfdffcc4eb99bfa3dec55b1cc112e577985c8d25311d175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004c0f7e45ce92197cfdffcc4eb99bfa3dec55b1cc112e577985c8d25311d175->enter($__internal_004c0f7e45ce92197cfdffcc4eb99bfa3dec55b1cc112e577985c8d25311d175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_004c0f7e45ce92197cfdffcc4eb99bfa3dec55b1cc112e577985c8d25311d175->leave($__internal_004c0f7e45ce92197cfdffcc4eb99bfa3dec55b1cc112e577985c8d25311d175_prof);

        
        $__internal_fae32424d81e36f43d2650f29f29f9019b45986b820f106e574c371ce1b9b9b4->leave($__internal_fae32424d81e36f43d2650f29f29f9019b45986b820f106e574c371ce1b9b9b4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_db28969071d9ea19c2ce23ee157f509c5c70cafb3f91c6d06177de0083a46061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db28969071d9ea19c2ce23ee157f509c5c70cafb3f91c6d06177de0083a46061->enter($__internal_db28969071d9ea19c2ce23ee157f509c5c70cafb3f91c6d06177de0083a46061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c75f088189411b5e96ae7ba6eb7e06351590199f186e10220a0f342a66c4011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c75f088189411b5e96ae7ba6eb7e06351590199f186e10220a0f342a66c4011->enter($__internal_4c75f088189411b5e96ae7ba6eb7e06351590199f186e10220a0f342a66c4011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4c75f088189411b5e96ae7ba6eb7e06351590199f186e10220a0f342a66c4011->leave($__internal_4c75f088189411b5e96ae7ba6eb7e06351590199f186e10220a0f342a66c4011_prof);

        
        $__internal_db28969071d9ea19c2ce23ee157f509c5c70cafb3f91c6d06177de0083a46061->leave($__internal_db28969071d9ea19c2ce23ee157f509c5c70cafb3f91c6d06177de0083a46061_prof);

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
