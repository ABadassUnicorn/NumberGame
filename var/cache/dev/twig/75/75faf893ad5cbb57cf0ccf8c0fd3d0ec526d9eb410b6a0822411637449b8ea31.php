<?php

/* FrontBundle:Common:layout.html.twig */
class __TwigTemplate_5acb9d8df6339ece8e62fef0f55cdd9ccb366be09d275e06dc2a34fa0d2d5534 extends Twig_Template
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
        $__internal_678a5585b0523989e3e0472777554a5cf18f1b4e83c04b4f5f35a0f59f25fdb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678a5585b0523989e3e0472777554a5cf18f1b4e83c04b4f5f35a0f59f25fdb7->enter($__internal_678a5585b0523989e3e0472777554a5cf18f1b4e83c04b4f5f35a0f59f25fdb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Common:layout.html.twig"));

        $__internal_f5544edcfc4ce2a16e46c7834c56b16ebd96ed3946b98f6b88ea6eeb4ccaf5d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5544edcfc4ce2a16e46c7834c56b16ebd96ed3946b98f6b88ea6eeb4ccaf5d0->enter($__internal_f5544edcfc4ce2a16e46c7834c56b16ebd96ed3946b98f6b88ea6eeb4ccaf5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Common:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_678a5585b0523989e3e0472777554a5cf18f1b4e83c04b4f5f35a0f59f25fdb7->leave($__internal_678a5585b0523989e3e0472777554a5cf18f1b4e83c04b4f5f35a0f59f25fdb7_prof);

        
        $__internal_f5544edcfc4ce2a16e46c7834c56b16ebd96ed3946b98f6b88ea6eeb4ccaf5d0->leave($__internal_f5544edcfc4ce2a16e46c7834c56b16ebd96ed3946b98f6b88ea6eeb4ccaf5d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45353f1579a3a14302ffb072374a3d53ba29ad7106341ecd50f86fdeef0d3432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45353f1579a3a14302ffb072374a3d53ba29ad7106341ecd50f86fdeef0d3432->enter($__internal_45353f1579a3a14302ffb072374a3d53ba29ad7106341ecd50f86fdeef0d3432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6a6c7e8c143bb3b8826694103690cf5fef3649566dc5ebd8ce7752f27e88829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a6c7e8c143bb3b8826694103690cf5fef3649566dc5ebd8ce7752f27e88829->enter($__internal_f6a6c7e8c143bb3b8826694103690cf5fef3649566dc5ebd8ce7752f27e88829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f6a6c7e8c143bb3b8826694103690cf5fef3649566dc5ebd8ce7752f27e88829->leave($__internal_f6a6c7e8c143bb3b8826694103690cf5fef3649566dc5ebd8ce7752f27e88829_prof);

        
        $__internal_45353f1579a3a14302ffb072374a3d53ba29ad7106341ecd50f86fdeef0d3432->leave($__internal_45353f1579a3a14302ffb072374a3d53ba29ad7106341ecd50f86fdeef0d3432_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a32d2187c3dc60f2e8890161c3b75577a248d53acd1e7240a68ccd3b0d12e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a32d2187c3dc60f2e8890161c3b75577a248d53acd1e7240a68ccd3b0d12e29->enter($__internal_8a32d2187c3dc60f2e8890161c3b75577a248d53acd1e7240a68ccd3b0d12e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac3a8cf1c09b04099a5a8b3bd3dfecc1a547e8de73f59098822e6357acf7c7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3a8cf1c09b04099a5a8b3bd3dfecc1a547e8de73f59098822e6357acf7c7c9->enter($__internal_ac3a8cf1c09b04099a5a8b3bd3dfecc1a547e8de73f59098822e6357acf7c7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ac3a8cf1c09b04099a5a8b3bd3dfecc1a547e8de73f59098822e6357acf7c7c9->leave($__internal_ac3a8cf1c09b04099a5a8b3bd3dfecc1a547e8de73f59098822e6357acf7c7c9_prof);

        
        $__internal_8a32d2187c3dc60f2e8890161c3b75577a248d53acd1e7240a68ccd3b0d12e29->leave($__internal_8a32d2187c3dc60f2e8890161c3b75577a248d53acd1e7240a68ccd3b0d12e29_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_560ac794dd3a6f0ea5150677a63d233928b65a19c3bfdeea53efc04e4fa32af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560ac794dd3a6f0ea5150677a63d233928b65a19c3bfdeea53efc04e4fa32af7->enter($__internal_560ac794dd3a6f0ea5150677a63d233928b65a19c3bfdeea53efc04e4fa32af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_11de0e39fb7377a95293d4718eebaa7971692061853e847703fb9feede0fa180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11de0e39fb7377a95293d4718eebaa7971692061853e847703fb9feede0fa180->enter($__internal_11de0e39fb7377a95293d4718eebaa7971692061853e847703fb9feede0fa180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_11de0e39fb7377a95293d4718eebaa7971692061853e847703fb9feede0fa180->leave($__internal_11de0e39fb7377a95293d4718eebaa7971692061853e847703fb9feede0fa180_prof);

        
        $__internal_560ac794dd3a6f0ea5150677a63d233928b65a19c3bfdeea53efc04e4fa32af7->leave($__internal_560ac794dd3a6f0ea5150677a63d233928b65a19c3bfdeea53efc04e4fa32af7_prof);

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
{% endblock %}", "FrontBundle:Common:layout.html.twig", "C:\\workspaceProjet\\NumberGame\\src\\FrontBundle\\Resources\\views\\Common\\layout.html.twig");
    }
}
