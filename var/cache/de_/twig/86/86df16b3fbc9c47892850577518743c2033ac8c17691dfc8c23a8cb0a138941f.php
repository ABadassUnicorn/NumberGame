<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c5a96695c8c5a2a15ab4996d98113aa3f2c2c9db36753f3d6ae8f40d2702ce7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbe7760b2931e1ff73a5adc83f5a035bc818f9ec71fc2ff5be106ac1d9b3b58a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe7760b2931e1ff73a5adc83f5a035bc818f9ec71fc2ff5be106ac1d9b3b58a->enter($__internal_bbe7760b2931e1ff73a5adc83f5a035bc818f9ec71fc2ff5be106ac1d9b3b58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d634aa234d589cd1400ee7fb32cc86a9941e7e24b185856735f0841644345c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d634aa234d589cd1400ee7fb32cc86a9941e7e24b185856735f0841644345c59->enter($__internal_d634aa234d589cd1400ee7fb32cc86a9941e7e24b185856735f0841644345c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bbe7760b2931e1ff73a5adc83f5a035bc818f9ec71fc2ff5be106ac1d9b3b58a->leave($__internal_bbe7760b2931e1ff73a5adc83f5a035bc818f9ec71fc2ff5be106ac1d9b3b58a_prof);

        
        $__internal_d634aa234d589cd1400ee7fb32cc86a9941e7e24b185856735f0841644345c59->leave($__internal_d634aa234d589cd1400ee7fb32cc86a9941e7e24b185856735f0841644345c59_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e0e320bb2c7ed882d654cbb564ec2cb599dd7c8ce5f5265d566f6dff873e216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e0e320bb2c7ed882d654cbb564ec2cb599dd7c8ce5f5265d566f6dff873e216->enter($__internal_4e0e320bb2c7ed882d654cbb564ec2cb599dd7c8ce5f5265d566f6dff873e216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_66999a8f0d03cdc3f45e2a51f86aede1d3b23dbb596f9919e4137eb39ac6c0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66999a8f0d03cdc3f45e2a51f86aede1d3b23dbb596f9919e4137eb39ac6c0cd->enter($__internal_66999a8f0d03cdc3f45e2a51f86aede1d3b23dbb596f9919e4137eb39ac6c0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_66999a8f0d03cdc3f45e2a51f86aede1d3b23dbb596f9919e4137eb39ac6c0cd->leave($__internal_66999a8f0d03cdc3f45e2a51f86aede1d3b23dbb596f9919e4137eb39ac6c0cd_prof);

        
        $__internal_4e0e320bb2c7ed882d654cbb564ec2cb599dd7c8ce5f5265d566f6dff873e216->leave($__internal_4e0e320bb2c7ed882d654cbb564ec2cb599dd7c8ce5f5265d566f6dff873e216_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
