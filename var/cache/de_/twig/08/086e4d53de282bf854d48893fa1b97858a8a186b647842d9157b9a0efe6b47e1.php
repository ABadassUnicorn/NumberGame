<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_661fb4d513f7c62ce646cd177032ee267987dcb19b6c4333cfa6374ba8b2d577 extends Twig_Template
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
        $__internal_a6ccd0cf600be473b3c553188a59f267e36371068f36def4f875d16b40455e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6ccd0cf600be473b3c553188a59f267e36371068f36def4f875d16b40455e3d->enter($__internal_a6ccd0cf600be473b3c553188a59f267e36371068f36def4f875d16b40455e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_e3e37d64f6cef3158f53504f1663ea5bf47fff3186c3c7c7da738aa7e57f2d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e37d64f6cef3158f53504f1663ea5bf47fff3186c3c7c7da738aa7e57f2d46->enter($__internal_e3e37d64f6cef3158f53504f1663ea5bf47fff3186c3c7c7da738aa7e57f2d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a6ccd0cf600be473b3c553188a59f267e36371068f36def4f875d16b40455e3d->leave($__internal_a6ccd0cf600be473b3c553188a59f267e36371068f36def4f875d16b40455e3d_prof);

        
        $__internal_e3e37d64f6cef3158f53504f1663ea5bf47fff3186c3c7c7da738aa7e57f2d46->leave($__internal_e3e37d64f6cef3158f53504f1663ea5bf47fff3186c3c7c7da738aa7e57f2d46_prof);

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
", "@Twig/Exception/exception.json.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
