<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0de3d1120128c0170aa3b7349baa37b2362bdfa617b586d1bc5c5739079fb4fe extends Twig_Template
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
        $__internal_563b6ec135b7105ec49783e179ff0e7eb66e6528da057e7494e2613633d6b51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563b6ec135b7105ec49783e179ff0e7eb66e6528da057e7494e2613633d6b51a->enter($__internal_563b6ec135b7105ec49783e179ff0e7eb66e6528da057e7494e2613633d6b51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_58a8e04a6d272a0542bc5821dc52a1b20cd76a958de9c14ac7495b64258aab8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a8e04a6d272a0542bc5821dc52a1b20cd76a958de9c14ac7495b64258aab8e->enter($__internal_58a8e04a6d272a0542bc5821dc52a1b20cd76a958de9c14ac7495b64258aab8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_563b6ec135b7105ec49783e179ff0e7eb66e6528da057e7494e2613633d6b51a->leave($__internal_563b6ec135b7105ec49783e179ff0e7eb66e6528da057e7494e2613633d6b51a_prof);

        
        $__internal_58a8e04a6d272a0542bc5821dc52a1b20cd76a958de9c14ac7495b64258aab8e->leave($__internal_58a8e04a6d272a0542bc5821dc52a1b20cd76a958de9c14ac7495b64258aab8e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dfe5bf31bf7d5e927545cda354a99852054cd877749884dee82ae00490a1bce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe5bf31bf7d5e927545cda354a99852054cd877749884dee82ae00490a1bce9->enter($__internal_dfe5bf31bf7d5e927545cda354a99852054cd877749884dee82ae00490a1bce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_742976fe415e0964303a5a306cbc09adbe7d94773bbafcd193d624d37d0a1851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742976fe415e0964303a5a306cbc09adbe7d94773bbafcd193d624d37d0a1851->enter($__internal_742976fe415e0964303a5a306cbc09adbe7d94773bbafcd193d624d37d0a1851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_742976fe415e0964303a5a306cbc09adbe7d94773bbafcd193d624d37d0a1851->leave($__internal_742976fe415e0964303a5a306cbc09adbe7d94773bbafcd193d624d37d0a1851_prof);

        
        $__internal_dfe5bf31bf7d5e927545cda354a99852054cd877749884dee82ae00490a1bce9->leave($__internal_dfe5bf31bf7d5e927545cda354a99852054cd877749884dee82ae00490a1bce9_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
