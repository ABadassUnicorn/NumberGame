<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_6b02d40902d2e7d8357bf712415764ff8b849626c30b6bf7f4fbbedc54601e5e extends Twig_Template
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
        $__internal_239ea0f677eae4ef1f00efe921ab951c2fa29342b6afe65a6099107e99fe99d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239ea0f677eae4ef1f00efe921ab951c2fa29342b6afe65a6099107e99fe99d4->enter($__internal_239ea0f677eae4ef1f00efe921ab951c2fa29342b6afe65a6099107e99fe99d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_896b1f630b64090eec2c68a27748c5b67a13574115fa17b4b0b57b4632e7e833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896b1f630b64090eec2c68a27748c5b67a13574115fa17b4b0b57b4632e7e833->enter($__internal_896b1f630b64090eec2c68a27748c5b67a13574115fa17b4b0b57b4632e7e833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_239ea0f677eae4ef1f00efe921ab951c2fa29342b6afe65a6099107e99fe99d4->leave($__internal_239ea0f677eae4ef1f00efe921ab951c2fa29342b6afe65a6099107e99fe99d4_prof);

        
        $__internal_896b1f630b64090eec2c68a27748c5b67a13574115fa17b4b0b57b4632e7e833->leave($__internal_896b1f630b64090eec2c68a27748c5b67a13574115fa17b4b0b57b4632e7e833_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
