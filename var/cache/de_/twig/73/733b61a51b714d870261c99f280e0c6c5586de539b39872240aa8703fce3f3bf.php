<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3310667984ce0e13835da8d071b07eb0306d53244e57c703e244d008a5432202 extends Twig_Template
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
        $__internal_44f0f077244e950a3547cf7fff7e2b26556bf998950babb1d245685dc8804c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f0f077244e950a3547cf7fff7e2b26556bf998950babb1d245685dc8804c8a->enter($__internal_44f0f077244e950a3547cf7fff7e2b26556bf998950babb1d245685dc8804c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_18660e41f2d136095a4cd723f6666091d27e5fce738d6b1f971e8d8ed858c8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18660e41f2d136095a4cd723f6666091d27e5fce738d6b1f971e8d8ed858c8eb->enter($__internal_18660e41f2d136095a4cd723f6666091d27e5fce738d6b1f971e8d8ed858c8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44f0f077244e950a3547cf7fff7e2b26556bf998950babb1d245685dc8804c8a->leave($__internal_44f0f077244e950a3547cf7fff7e2b26556bf998950babb1d245685dc8804c8a_prof);

        
        $__internal_18660e41f2d136095a4cd723f6666091d27e5fce738d6b1f971e8d8ed858c8eb->leave($__internal_18660e41f2d136095a4cd723f6666091d27e5fce738d6b1f971e8d8ed858c8eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2971ca4fc82901325804b35a914024a6d1680e41e4de374a8f8cc83f88abbaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2971ca4fc82901325804b35a914024a6d1680e41e4de374a8f8cc83f88abbaf->enter($__internal_c2971ca4fc82901325804b35a914024a6d1680e41e4de374a8f8cc83f88abbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a0d8c229a36a670ddd11ce114b96e3be5abbfd7acdde0057660de9c0f5966a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d8c229a36a670ddd11ce114b96e3be5abbfd7acdde0057660de9c0f5966a71->enter($__internal_a0d8c229a36a670ddd11ce114b96e3be5abbfd7acdde0057660de9c0f5966a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a0d8c229a36a670ddd11ce114b96e3be5abbfd7acdde0057660de9c0f5966a71->leave($__internal_a0d8c229a36a670ddd11ce114b96e3be5abbfd7acdde0057660de9c0f5966a71_prof);

        
        $__internal_c2971ca4fc82901325804b35a914024a6d1680e41e4de374a8f8cc83f88abbaf->leave($__internal_c2971ca4fc82901325804b35a914024a6d1680e41e4de374a8f8cc83f88abbaf_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f54c4f4d0da7eb9e1b2f825dcc973473be33cd94fe1cf67e4104875851349abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f54c4f4d0da7eb9e1b2f825dcc973473be33cd94fe1cf67e4104875851349abc->enter($__internal_f54c4f4d0da7eb9e1b2f825dcc973473be33cd94fe1cf67e4104875851349abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56ddb9345f906562cae70d8570e993511dc5d40df959ea836c8d27656ce5ec70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ddb9345f906562cae70d8570e993511dc5d40df959ea836c8d27656ce5ec70->enter($__internal_56ddb9345f906562cae70d8570e993511dc5d40df959ea836c8d27656ce5ec70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_56ddb9345f906562cae70d8570e993511dc5d40df959ea836c8d27656ce5ec70->leave($__internal_56ddb9345f906562cae70d8570e993511dc5d40df959ea836c8d27656ce5ec70_prof);

        
        $__internal_f54c4f4d0da7eb9e1b2f825dcc973473be33cd94fe1cf67e4104875851349abc->leave($__internal_f54c4f4d0da7eb9e1b2f825dcc973473be33cd94fe1cf67e4104875851349abc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fc8b7f8f7f676e01b55cf28e16dfa8c8bdbfdd1e0eae62c9f8233e40deed641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc8b7f8f7f676e01b55cf28e16dfa8c8bdbfdd1e0eae62c9f8233e40deed641->enter($__internal_9fc8b7f8f7f676e01b55cf28e16dfa8c8bdbfdd1e0eae62c9f8233e40deed641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3fb2c87f48cfebb004a5b659060d1ed713713273617c04aa172aca414086be1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb2c87f48cfebb004a5b659060d1ed713713273617c04aa172aca414086be1f->enter($__internal_3fb2c87f48cfebb004a5b659060d1ed713713273617c04aa172aca414086be1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_3fb2c87f48cfebb004a5b659060d1ed713713273617c04aa172aca414086be1f->leave($__internal_3fb2c87f48cfebb004a5b659060d1ed713713273617c04aa172aca414086be1f_prof);

        
        $__internal_9fc8b7f8f7f676e01b55cf28e16dfa8c8bdbfdd1e0eae62c9f8233e40deed641->leave($__internal_9fc8b7f8f7f676e01b55cf28e16dfa8c8bdbfdd1e0eae62c9f8233e40deed641_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
