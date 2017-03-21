<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_6d1c0162becec3f92c886a43f27bf024e8dfd201d99015ae615c72d926b695ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d036533ed5417723f477f4d66004c307f4d53df5efbbc542cc36abca13a59fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d036533ed5417723f477f4d66004c307f4d53df5efbbc542cc36abca13a59fd->enter($__internal_1d036533ed5417723f477f4d66004c307f4d53df5efbbc542cc36abca13a59fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_6e4ff16785521ee2b1a008937ffa0b252be01c746aedf9add5cd1db6079c370a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4ff16785521ee2b1a008937ffa0b252be01c746aedf9add5cd1db6079c370a->enter($__internal_6e4ff16785521ee2b1a008937ffa0b252be01c746aedf9add5cd1db6079c370a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1d036533ed5417723f477f4d66004c307f4d53df5efbbc542cc36abca13a59fd->leave($__internal_1d036533ed5417723f477f4d66004c307f4d53df5efbbc542cc36abca13a59fd_prof);

        
        $__internal_6e4ff16785521ee2b1a008937ffa0b252be01c746aedf9add5cd1db6079c370a->leave($__internal_6e4ff16785521ee2b1a008937ffa0b252be01c746aedf9add5cd1db6079c370a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
