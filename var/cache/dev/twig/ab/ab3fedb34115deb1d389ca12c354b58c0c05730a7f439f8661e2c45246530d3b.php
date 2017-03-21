<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_8ae2d06dbad2f1a34270295975fc089384e4925ba3f535f06563705c0e530b46 extends Twig_Template
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
        $__internal_a88434800e9daf8bd8f9b7763ac2f0ff50d081db4bf8fb2e56ad9f34224292cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88434800e9daf8bd8f9b7763ac2f0ff50d081db4bf8fb2e56ad9f34224292cd->enter($__internal_a88434800e9daf8bd8f9b7763ac2f0ff50d081db4bf8fb2e56ad9f34224292cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_cc30c6b5b884b48392111b76b8edb209a3cbc4718bc527a4dfb90c4b1981e282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc30c6b5b884b48392111b76b8edb209a3cbc4718bc527a4dfb90c4b1981e282->enter($__internal_cc30c6b5b884b48392111b76b8edb209a3cbc4718bc527a4dfb90c4b1981e282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_a88434800e9daf8bd8f9b7763ac2f0ff50d081db4bf8fb2e56ad9f34224292cd->leave($__internal_a88434800e9daf8bd8f9b7763ac2f0ff50d081db4bf8fb2e56ad9f34224292cd_prof);

        
        $__internal_cc30c6b5b884b48392111b76b8edb209a3cbc4718bc527a4dfb90c4b1981e282->leave($__internal_cc30c6b5b884b48392111b76b8edb209a3cbc4718bc527a4dfb90c4b1981e282_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
