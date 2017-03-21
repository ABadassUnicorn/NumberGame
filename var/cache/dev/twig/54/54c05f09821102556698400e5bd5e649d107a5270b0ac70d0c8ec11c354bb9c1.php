<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_d30469e3917bf3bcbe89aa5e5c5c7d2e8f8f9a37b8e70d8f5be545e5e9a429ff extends Twig_Template
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
        $__internal_892d88f66ca358538c89eed4d2c0539eb59a3bd8bb05d0c5cffe4063e915cbb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892d88f66ca358538c89eed4d2c0539eb59a3bd8bb05d0c5cffe4063e915cbb0->enter($__internal_892d88f66ca358538c89eed4d2c0539eb59a3bd8bb05d0c5cffe4063e915cbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_0ccc203db1ccf360a6c0da4cfc5c48d787c6d81daffa3baf4ba33eca9e6c33e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ccc203db1ccf360a6c0da4cfc5c48d787c6d81daffa3baf4ba33eca9e6c33e4->enter($__internal_0ccc203db1ccf360a6c0da4cfc5c48d787c6d81daffa3baf4ba33eca9e6c33e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_892d88f66ca358538c89eed4d2c0539eb59a3bd8bb05d0c5cffe4063e915cbb0->leave($__internal_892d88f66ca358538c89eed4d2c0539eb59a3bd8bb05d0c5cffe4063e915cbb0_prof);

        
        $__internal_0ccc203db1ccf360a6c0da4cfc5c48d787c6d81daffa3baf4ba33eca9e6c33e4->leave($__internal_0ccc203db1ccf360a6c0da4cfc5c48d787c6d81daffa3baf4ba33eca9e6c33e4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
