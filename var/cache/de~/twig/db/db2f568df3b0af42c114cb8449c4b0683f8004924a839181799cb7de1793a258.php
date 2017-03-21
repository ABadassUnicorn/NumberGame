<?php

/* FrontBundle:Common:layout.html.twig */
class __TwigTemplate_be64ab0cd9d0370e1b86db68af2f0b4abf7fd6260264e1e42d9753c024a3534e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle:Common:base.html.twig", "FrontBundle:Common:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle:Common:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8afc3f2c04f5015528901da3d8a58a5b4b483a02550e4db04619c648a542d066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8afc3f2c04f5015528901da3d8a58a5b4b483a02550e4db04619c648a542d066->enter($__internal_8afc3f2c04f5015528901da3d8a58a5b4b483a02550e4db04619c648a542d066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Common:layout.html.twig"));

        $__internal_4b0dcdd16270a30712c968dfa9f1a4dd22c77c7b12fdb82147e0e217bfc6108a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0dcdd16270a30712c968dfa9f1a4dd22c77c7b12fdb82147e0e217bfc6108a->enter($__internal_4b0dcdd16270a30712c968dfa9f1a4dd22c77c7b12fdb82147e0e217bfc6108a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Common:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8afc3f2c04f5015528901da3d8a58a5b4b483a02550e4db04619c648a542d066->leave($__internal_8afc3f2c04f5015528901da3d8a58a5b4b483a02550e4db04619c648a542d066_prof);

        
        $__internal_4b0dcdd16270a30712c968dfa9f1a4dd22c77c7b12fdb82147e0e217bfc6108a->leave($__internal_4b0dcdd16270a30712c968dfa9f1a4dd22c77c7b12fdb82147e0e217bfc6108a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a779619b5f53a144144593510e852395c18256f731438df6c24649f9e14a4e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a779619b5f53a144144593510e852395c18256f731438df6c24649f9e14a4e11->enter($__internal_a779619b5f53a144144593510e852395c18256f731438df6c24649f9e14a4e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_afcf428112691ce65b9bb2e58ba468a027fe25782a9a6a9e981bad3a43ebf4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afcf428112691ce65b9bb2e58ba468a027fe25782a9a6a9e981bad3a43ebf4e5->enter($__internal_afcf428112691ce65b9bb2e58ba468a027fe25782a9a6a9e981bad3a43ebf4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_afcf428112691ce65b9bb2e58ba468a027fe25782a9a6a9e981bad3a43ebf4e5->leave($__internal_afcf428112691ce65b9bb2e58ba468a027fe25782a9a6a9e981bad3a43ebf4e5_prof);

        
        $__internal_a779619b5f53a144144593510e852395c18256f731438df6c24649f9e14a4e11->leave($__internal_a779619b5f53a144144593510e852395c18256f731438df6c24649f9e14a4e11_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a15599cab750d8c6a48880e9954bb8ee0a19f6d72dc8e215d7a680634fac53cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15599cab750d8c6a48880e9954bb8ee0a19f6d72dc8e215d7a680634fac53cc->enter($__internal_a15599cab750d8c6a48880e9954bb8ee0a19f6d72dc8e215d7a680634fac53cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d0cc0a69819fd9117741e55f72b376880ffd0596c446cf342031fad4b49e805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0cc0a69819fd9117741e55f72b376880ffd0596c446cf342031fad4b49e805->enter($__internal_4d0cc0a69819fd9117741e55f72b376880ffd0596c446cf342031fad4b49e805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <header>
    </header>
    <main>
        <div class=\"wrapper\">           
            ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "        </div>
    </main>
    <footer>
        <div class=\"wrapper text-center\">
            <!-- legal mentions copyright and blablabla -->
        </div>
    </footer>
";
        
        $__internal_4d0cc0a69819fd9117741e55f72b376880ffd0596c446cf342031fad4b49e805->leave($__internal_4d0cc0a69819fd9117741e55f72b376880ffd0596c446cf342031fad4b49e805_prof);

        
        $__internal_a15599cab750d8c6a48880e9954bb8ee0a19f6d72dc8e215d7a680634fac53cc->leave($__internal_a15599cab750d8c6a48880e9954bb8ee0a19f6d72dc8e215d7a680634fac53cc_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_dbf49aef8a5ad96013f79d1e5d0c381dba16dbd610270d02abf2cee4e560ffe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf49aef8a5ad96013f79d1e5d0c381dba16dbd610270d02abf2cee4e560ffe5->enter($__internal_dbf49aef8a5ad96013f79d1e5d0c381dba16dbd610270d02abf2cee4e560ffe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_93b2e7156e5439d5f5f53c06d61b8cd2eb0d892f682969c00c90479e2e92d4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b2e7156e5439d5f5f53c06d61b8cd2eb0d892f682969c00c90479e2e92d4c1->enter($__internal_93b2e7156e5439d5f5f53c06d61b8cd2eb0d892f682969c00c90479e2e92d4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_93b2e7156e5439d5f5f53c06d61b8cd2eb0d892f682969c00c90479e2e92d4c1->leave($__internal_93b2e7156e5439d5f5f53c06d61b8cd2eb0d892f682969c00c90479e2e92d4c1_prof);

        
        $__internal_dbf49aef8a5ad96013f79d1e5d0c381dba16dbd610270d02abf2cee4e560ffe5->leave($__internal_dbf49aef8a5ad96013f79d1e5d0c381dba16dbd610270d02abf2cee4e560ffe5_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Common:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 10,  76 => 11,  74 => 10,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FrontBundle:Common:base.html.twig\" %}

{% block title %}{% endblock %}

{% block body %}
    <header>
    </header>
    <main>
        <div class=\"wrapper\">           
            {% block content %}{% endblock %}
        </div>
    </main>
    <footer>
        <div class=\"wrapper text-center\">
            <!-- legal mentions copyright and blablabla -->
        </div>
    </footer>
{% endblock %}", "FrontBundle:Common:layout.html.twig", "E:\\wamp64\\www\\numberGame\\src\\FrontBundle/Resources/views/Common/layout.html.twig");
    }
}
