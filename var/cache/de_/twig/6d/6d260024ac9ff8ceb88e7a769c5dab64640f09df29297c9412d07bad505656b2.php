<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_d3c214b560bf6ef8314760ee5a96ba3809c735cef1fe886f19624e5e1c3e457e extends Twig_Template
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
        $__internal_6ce9f1d377cad800fb30a6a3ba74e7e1fcdbd4d87533d46edd048e2d64ea8221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce9f1d377cad800fb30a6a3ba74e7e1fcdbd4d87533d46edd048e2d64ea8221->enter($__internal_6ce9f1d377cad800fb30a6a3ba74e7e1fcdbd4d87533d46edd048e2d64ea8221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_b297f44689ca4f866d57b3fe44c9e9bb3453d449b7f79da37a6f69e719115c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b297f44689ca4f866d57b3fe44c9e9bb3453d449b7f79da37a6f69e719115c16->enter($__internal_b297f44689ca4f866d57b3fe44c9e9bb3453d449b7f79da37a6f69e719115c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_6ce9f1d377cad800fb30a6a3ba74e7e1fcdbd4d87533d46edd048e2d64ea8221->leave($__internal_6ce9f1d377cad800fb30a6a3ba74e7e1fcdbd4d87533d46edd048e2d64ea8221_prof);

        
        $__internal_b297f44689ca4f866d57b3fe44c9e9bb3453d449b7f79da37a6f69e719115c16->leave($__internal_b297f44689ca4f866d57b3fe44c9e9bb3453d449b7f79da37a6f69e719115c16_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
