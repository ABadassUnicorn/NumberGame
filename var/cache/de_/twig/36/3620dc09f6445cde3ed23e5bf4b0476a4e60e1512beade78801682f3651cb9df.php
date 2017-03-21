<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c2d6fd93a903544d879cd3f3126a7116ca0e5e1a2ee54887e6c9ee3f882a97f9 extends Twig_Template
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
        $__internal_9fe2764e1ee1c38ba69391812492f07ca997a6f2e3b6c7ad9afcf58975c9cf5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe2764e1ee1c38ba69391812492f07ca997a6f2e3b6c7ad9afcf58975c9cf5f->enter($__internal_9fe2764e1ee1c38ba69391812492f07ca997a6f2e3b6c7ad9afcf58975c9cf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_884ce132cf523490c0085548b0f4bb9994170c8023607b8ef29733f47743e77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884ce132cf523490c0085548b0f4bb9994170c8023607b8ef29733f47743e77c->enter($__internal_884ce132cf523490c0085548b0f4bb9994170c8023607b8ef29733f47743e77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_9fe2764e1ee1c38ba69391812492f07ca997a6f2e3b6c7ad9afcf58975c9cf5f->leave($__internal_9fe2764e1ee1c38ba69391812492f07ca997a6f2e3b6c7ad9afcf58975c9cf5f_prof);

        
        $__internal_884ce132cf523490c0085548b0f4bb9994170c8023607b8ef29733f47743e77c->leave($__internal_884ce132cf523490c0085548b0f4bb9994170c8023607b8ef29733f47743e77c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
