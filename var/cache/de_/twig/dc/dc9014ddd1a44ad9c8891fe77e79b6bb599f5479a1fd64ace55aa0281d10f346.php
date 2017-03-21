<?php

/* @Front/Common/layout.html.twig */
class __TwigTemplate_3a62352c389c27777a790ab8c325d357bb53ccda62d82539e027d7ab01e07026 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle:Common:base.html.twig", "@Front/Common/layout.html.twig", 1);
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
        $__internal_88f6795da018c59b01b5d3431759ef22ccd7f68804eccfb27df643a1ebe4d4fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f6795da018c59b01b5d3431759ef22ccd7f68804eccfb27df643a1ebe4d4fa->enter($__internal_88f6795da018c59b01b5d3431759ef22ccd7f68804eccfb27df643a1ebe4d4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/Common/layout.html.twig"));

        $__internal_b893acf9b7435c9e4561fb112b2081711d2dc02d865e37688351eeda00e5ce23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b893acf9b7435c9e4561fb112b2081711d2dc02d865e37688351eeda00e5ce23->enter($__internal_b893acf9b7435c9e4561fb112b2081711d2dc02d865e37688351eeda00e5ce23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/Common/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88f6795da018c59b01b5d3431759ef22ccd7f68804eccfb27df643a1ebe4d4fa->leave($__internal_88f6795da018c59b01b5d3431759ef22ccd7f68804eccfb27df643a1ebe4d4fa_prof);

        
        $__internal_b893acf9b7435c9e4561fb112b2081711d2dc02d865e37688351eeda00e5ce23->leave($__internal_b893acf9b7435c9e4561fb112b2081711d2dc02d865e37688351eeda00e5ce23_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1288aa304fd4142555d43c6b444d41a5993351d642e8e25fe98538101f98686a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1288aa304fd4142555d43c6b444d41a5993351d642e8e25fe98538101f98686a->enter($__internal_1288aa304fd4142555d43c6b444d41a5993351d642e8e25fe98538101f98686a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ba473c44f6570523a50e907d6ec3186a5acba4f32c08c16b10131a54bf6bbf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba473c44f6570523a50e907d6ec3186a5acba4f32c08c16b10131a54bf6bbf1->enter($__internal_2ba473c44f6570523a50e907d6ec3186a5acba4f32c08c16b10131a54bf6bbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2ba473c44f6570523a50e907d6ec3186a5acba4f32c08c16b10131a54bf6bbf1->leave($__internal_2ba473c44f6570523a50e907d6ec3186a5acba4f32c08c16b10131a54bf6bbf1_prof);

        
        $__internal_1288aa304fd4142555d43c6b444d41a5993351d642e8e25fe98538101f98686a->leave($__internal_1288aa304fd4142555d43c6b444d41a5993351d642e8e25fe98538101f98686a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a8f5e58dd3907787997e71b71254c178736c3e8faf99fe599331766030439d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a8f5e58dd3907787997e71b71254c178736c3e8faf99fe599331766030439d4->enter($__internal_0a8f5e58dd3907787997e71b71254c178736c3e8faf99fe599331766030439d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6734ff4ccae0172d65a8e1dce75d995aea0e72013a488979c3476162e9946ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6734ff4ccae0172d65a8e1dce75d995aea0e72013a488979c3476162e9946ee9->enter($__internal_6734ff4ccae0172d65a8e1dce75d995aea0e72013a488979c3476162e9946ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6734ff4ccae0172d65a8e1dce75d995aea0e72013a488979c3476162e9946ee9->leave($__internal_6734ff4ccae0172d65a8e1dce75d995aea0e72013a488979c3476162e9946ee9_prof);

        
        $__internal_0a8f5e58dd3907787997e71b71254c178736c3e8faf99fe599331766030439d4->leave($__internal_0a8f5e58dd3907787997e71b71254c178736c3e8faf99fe599331766030439d4_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_34d251f90ee948fec053bcc74bf1f78b1f5b64751a92c3e47b8dc96bc7aed542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d251f90ee948fec053bcc74bf1f78b1f5b64751a92c3e47b8dc96bc7aed542->enter($__internal_34d251f90ee948fec053bcc74bf1f78b1f5b64751a92c3e47b8dc96bc7aed542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f84ff7908587b2a64014902b0337a6292cb025517d8b0ed476cd647fe21dc4bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84ff7908587b2a64014902b0337a6292cb025517d8b0ed476cd647fe21dc4bb->enter($__internal_f84ff7908587b2a64014902b0337a6292cb025517d8b0ed476cd647fe21dc4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f84ff7908587b2a64014902b0337a6292cb025517d8b0ed476cd647fe21dc4bb->leave($__internal_f84ff7908587b2a64014902b0337a6292cb025517d8b0ed476cd647fe21dc4bb_prof);

        
        $__internal_34d251f90ee948fec053bcc74bf1f78b1f5b64751a92c3e47b8dc96bc7aed542->leave($__internal_34d251f90ee948fec053bcc74bf1f78b1f5b64751a92c3e47b8dc96bc7aed542_prof);

    }

    public function getTemplateName()
    {
        return "@Front/Common/layout.html.twig";
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
{% endblock %}", "@Front/Common/layout.html.twig", "E:\\wamp64\\www\\numberGame\\src\\FrontBundle\\Resources\\views\\Common\\layout.html.twig");
    }
}
