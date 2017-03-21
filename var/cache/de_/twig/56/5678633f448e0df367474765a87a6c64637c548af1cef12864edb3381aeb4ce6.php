<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_86336aee012be1902d724261bb53600bfcb6b7f27255b106ea8ce7eae4b7604b extends Twig_Template
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
        $__internal_c04c5b76a05955824bbf0d48b21ebdbb82feff2f5f3872bd9f075d545b8a96dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c04c5b76a05955824bbf0d48b21ebdbb82feff2f5f3872bd9f075d545b8a96dd->enter($__internal_c04c5b76a05955824bbf0d48b21ebdbb82feff2f5f3872bd9f075d545b8a96dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_3f07193345e8df5594d06cb4eb20970c19715a8f17f62d8a340887670e995617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f07193345e8df5594d06cb4eb20970c19715a8f17f62d8a340887670e995617->enter($__internal_3f07193345e8df5594d06cb4eb20970c19715a8f17f62d8a340887670e995617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c04c5b76a05955824bbf0d48b21ebdbb82feff2f5f3872bd9f075d545b8a96dd->leave($__internal_c04c5b76a05955824bbf0d48b21ebdbb82feff2f5f3872bd9f075d545b8a96dd_prof);

        
        $__internal_3f07193345e8df5594d06cb4eb20970c19715a8f17f62d8a340887670e995617->leave($__internal_3f07193345e8df5594d06cb4eb20970c19715a8f17f62d8a340887670e995617_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
