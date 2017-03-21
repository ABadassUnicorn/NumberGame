<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c5e0daabbaada485572522434ad041768800e76d053e51af0a991bd46f71dc79 extends Twig_Template
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
        $__internal_17a14677cb6b607e6745ec73d81addbb98cbf82d9f06af956df261a8697f1a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a14677cb6b607e6745ec73d81addbb98cbf82d9f06af956df261a8697f1a99->enter($__internal_17a14677cb6b607e6745ec73d81addbb98cbf82d9f06af956df261a8697f1a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b4661e91e4bfd6dd1d9b63dee592d4994e91fb996d7bb3066e4e447df726af1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4661e91e4bfd6dd1d9b63dee592d4994e91fb996d7bb3066e4e447df726af1f->enter($__internal_b4661e91e4bfd6dd1d9b63dee592d4994e91fb996d7bb3066e4e447df726af1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_17a14677cb6b607e6745ec73d81addbb98cbf82d9f06af956df261a8697f1a99->leave($__internal_17a14677cb6b607e6745ec73d81addbb98cbf82d9f06af956df261a8697f1a99_prof);

        
        $__internal_b4661e91e4bfd6dd1d9b63dee592d4994e91fb996d7bb3066e4e447df726af1f->leave($__internal_b4661e91e4bfd6dd1d9b63dee592d4994e91fb996d7bb3066e4e447df726af1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
