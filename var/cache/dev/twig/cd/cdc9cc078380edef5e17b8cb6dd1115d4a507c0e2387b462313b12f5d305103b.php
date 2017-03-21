<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_147edb04a83e2d8c3099cb76ae43320f4baf6cff0154092ed136b08992bd463d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecd816b61c6e3fdb52c75a0f5a7131e840b9c61601bb11d9c94d421c1fdd7fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd816b61c6e3fdb52c75a0f5a7131e840b9c61601bb11d9c94d421c1fdd7fcf->enter($__internal_ecd816b61c6e3fdb52c75a0f5a7131e840b9c61601bb11d9c94d421c1fdd7fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7c9576b8106190003ababdb663d8457da629c642dbad5a1e6af8fa2ebf1c5a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9576b8106190003ababdb663d8457da629c642dbad5a1e6af8fa2ebf1c5a1a->enter($__internal_7c9576b8106190003ababdb663d8457da629c642dbad5a1e6af8fa2ebf1c5a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecd816b61c6e3fdb52c75a0f5a7131e840b9c61601bb11d9c94d421c1fdd7fcf->leave($__internal_ecd816b61c6e3fdb52c75a0f5a7131e840b9c61601bb11d9c94d421c1fdd7fcf_prof);

        
        $__internal_7c9576b8106190003ababdb663d8457da629c642dbad5a1e6af8fa2ebf1c5a1a->leave($__internal_7c9576b8106190003ababdb663d8457da629c642dbad5a1e6af8fa2ebf1c5a1a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ace1087728942d775786fcd7ee6c6f3e46704ff4c23040f59484947323a807ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ace1087728942d775786fcd7ee6c6f3e46704ff4c23040f59484947323a807ab->enter($__internal_ace1087728942d775786fcd7ee6c6f3e46704ff4c23040f59484947323a807ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ef6e734d86c224735293ddd1b5ec84d134a03f934aa25a0d0d55cb2c761ba56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6e734d86c224735293ddd1b5ec84d134a03f934aa25a0d0d55cb2c761ba56a->enter($__internal_ef6e734d86c224735293ddd1b5ec84d134a03f934aa25a0d0d55cb2c761ba56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ef6e734d86c224735293ddd1b5ec84d134a03f934aa25a0d0d55cb2c761ba56a->leave($__internal_ef6e734d86c224735293ddd1b5ec84d134a03f934aa25a0d0d55cb2c761ba56a_prof);

        
        $__internal_ace1087728942d775786fcd7ee6c6f3e46704ff4c23040f59484947323a807ab->leave($__internal_ace1087728942d775786fcd7ee6c6f3e46704ff4c23040f59484947323a807ab_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
