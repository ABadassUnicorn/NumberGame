<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_2f518c3022f88ad9175809bb07caed7ee02b9edcb94c3da9ce3084e82a0cd38f extends Twig_Template
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
        $__internal_1e840c8f29c91cbf14fc15acb1314ae31dbc3e024ba9e9731afda7068eb89446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e840c8f29c91cbf14fc15acb1314ae31dbc3e024ba9e9731afda7068eb89446->enter($__internal_1e840c8f29c91cbf14fc15acb1314ae31dbc3e024ba9e9731afda7068eb89446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_927753af88447717a666c9b92ba7362634e230113d4c7e9e1f4563ea008b7a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927753af88447717a666c9b92ba7362634e230113d4c7e9e1f4563ea008b7a21->enter($__internal_927753af88447717a666c9b92ba7362634e230113d4c7e9e1f4563ea008b7a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1e840c8f29c91cbf14fc15acb1314ae31dbc3e024ba9e9731afda7068eb89446->leave($__internal_1e840c8f29c91cbf14fc15acb1314ae31dbc3e024ba9e9731afda7068eb89446_prof);

        
        $__internal_927753af88447717a666c9b92ba7362634e230113d4c7e9e1f4563ea008b7a21->leave($__internal_927753af88447717a666c9b92ba7362634e230113d4c7e9e1f4563ea008b7a21_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8154b67d02366d57824b4da960c8e343c0368660fd54824df36d4405c421b852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8154b67d02366d57824b4da960c8e343c0368660fd54824df36d4405c421b852->enter($__internal_8154b67d02366d57824b4da960c8e343c0368660fd54824df36d4405c421b852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8a485b092486b996054313dca74bd80e593d7590193ac5409f2359adc108a19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a485b092486b996054313dca74bd80e593d7590193ac5409f2359adc108a19b->enter($__internal_8a485b092486b996054313dca74bd80e593d7590193ac5409f2359adc108a19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8a485b092486b996054313dca74bd80e593d7590193ac5409f2359adc108a19b->leave($__internal_8a485b092486b996054313dca74bd80e593d7590193ac5409f2359adc108a19b_prof);

        
        $__internal_8154b67d02366d57824b4da960c8e343c0368660fd54824df36d4405c421b852->leave($__internal_8154b67d02366d57824b4da960c8e343c0368660fd54824df36d4405c421b852_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
