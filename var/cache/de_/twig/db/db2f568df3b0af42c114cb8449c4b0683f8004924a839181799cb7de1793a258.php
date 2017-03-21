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
        $__internal_a02b746da7a5f8b14c61f3fb696ecb593a7c60b2f1bad55b533ccebb63cad3de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02b746da7a5f8b14c61f3fb696ecb593a7c60b2f1bad55b533ccebb63cad3de->enter($__internal_a02b746da7a5f8b14c61f3fb696ecb593a7c60b2f1bad55b533ccebb63cad3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Common:layout.html.twig"));

        $__internal_f0462d431a346cfdb46380f1d56dc7fe9506575dae060c251718b2f0287e4ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0462d431a346cfdb46380f1d56dc7fe9506575dae060c251718b2f0287e4ff9->enter($__internal_f0462d431a346cfdb46380f1d56dc7fe9506575dae060c251718b2f0287e4ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Common:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a02b746da7a5f8b14c61f3fb696ecb593a7c60b2f1bad55b533ccebb63cad3de->leave($__internal_a02b746da7a5f8b14c61f3fb696ecb593a7c60b2f1bad55b533ccebb63cad3de_prof);

        
        $__internal_f0462d431a346cfdb46380f1d56dc7fe9506575dae060c251718b2f0287e4ff9->leave($__internal_f0462d431a346cfdb46380f1d56dc7fe9506575dae060c251718b2f0287e4ff9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fb06fd1a1cf7926ae38224cefd5e1c901995c7b13613dd01661b002b9d907b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb06fd1a1cf7926ae38224cefd5e1c901995c7b13613dd01661b002b9d907b4->enter($__internal_6fb06fd1a1cf7926ae38224cefd5e1c901995c7b13613dd01661b002b9d907b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b44ce2700ed655eb6ec9bc94dbef45ffea752c88606a34ea9bfd0f83822f11fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44ce2700ed655eb6ec9bc94dbef45ffea752c88606a34ea9bfd0f83822f11fb->enter($__internal_b44ce2700ed655eb6ec9bc94dbef45ffea752c88606a34ea9bfd0f83822f11fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b44ce2700ed655eb6ec9bc94dbef45ffea752c88606a34ea9bfd0f83822f11fb->leave($__internal_b44ce2700ed655eb6ec9bc94dbef45ffea752c88606a34ea9bfd0f83822f11fb_prof);

        
        $__internal_6fb06fd1a1cf7926ae38224cefd5e1c901995c7b13613dd01661b002b9d907b4->leave($__internal_6fb06fd1a1cf7926ae38224cefd5e1c901995c7b13613dd01661b002b9d907b4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a8909b4b77ea9c9384cbbe556d09294575bcb41db6de36c65cd1d80a9b8439e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8909b4b77ea9c9384cbbe556d09294575bcb41db6de36c65cd1d80a9b8439e->enter($__internal_3a8909b4b77ea9c9384cbbe556d09294575bcb41db6de36c65cd1d80a9b8439e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e4be43411a8e241e9c72db2c02c7c05dfd9b7ee77d29658c16a29680939efff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4be43411a8e241e9c72db2c02c7c05dfd9b7ee77d29658c16a29680939efff->enter($__internal_2e4be43411a8e241e9c72db2c02c7c05dfd9b7ee77d29658c16a29680939efff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2e4be43411a8e241e9c72db2c02c7c05dfd9b7ee77d29658c16a29680939efff->leave($__internal_2e4be43411a8e241e9c72db2c02c7c05dfd9b7ee77d29658c16a29680939efff_prof);

        
        $__internal_3a8909b4b77ea9c9384cbbe556d09294575bcb41db6de36c65cd1d80a9b8439e->leave($__internal_3a8909b4b77ea9c9384cbbe556d09294575bcb41db6de36c65cd1d80a9b8439e_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_ad58e5f34dc035af58d007a992572554b4f68f25d615b8f9af7cf7969c5bd5f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad58e5f34dc035af58d007a992572554b4f68f25d615b8f9af7cf7969c5bd5f2->enter($__internal_ad58e5f34dc035af58d007a992572554b4f68f25d615b8f9af7cf7969c5bd5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_84699e3d2b48bfe66630c4e422a3adc9fa9ce73eec02960dc7dd9d985a6b1448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84699e3d2b48bfe66630c4e422a3adc9fa9ce73eec02960dc7dd9d985a6b1448->enter($__internal_84699e3d2b48bfe66630c4e422a3adc9fa9ce73eec02960dc7dd9d985a6b1448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_84699e3d2b48bfe66630c4e422a3adc9fa9ce73eec02960dc7dd9d985a6b1448->leave($__internal_84699e3d2b48bfe66630c4e422a3adc9fa9ce73eec02960dc7dd9d985a6b1448_prof);

        
        $__internal_ad58e5f34dc035af58d007a992572554b4f68f25d615b8f9af7cf7969c5bd5f2->leave($__internal_ad58e5f34dc035af58d007a992572554b4f68f25d615b8f9af7cf7969c5bd5f2_prof);

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
