<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9e497c589c6dc528bd5185f7b96664f5c349c6d286fd84521604a8f1623022f3 extends Twig_Template
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
        $__internal_57a7b5d97fca61923aabbf88637485a11fbdc6d3eed8df3dfdd71aa5eb626be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a7b5d97fca61923aabbf88637485a11fbdc6d3eed8df3dfdd71aa5eb626be9->enter($__internal_57a7b5d97fca61923aabbf88637485a11fbdc6d3eed8df3dfdd71aa5eb626be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_cf8e9d470a04c1399176bb22cc78420c9b1d57415f0a85a61100a6687bb219c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8e9d470a04c1399176bb22cc78420c9b1d57415f0a85a61100a6687bb219c5->enter($__internal_cf8e9d470a04c1399176bb22cc78420c9b1d57415f0a85a61100a6687bb219c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_57a7b5d97fca61923aabbf88637485a11fbdc6d3eed8df3dfdd71aa5eb626be9->leave($__internal_57a7b5d97fca61923aabbf88637485a11fbdc6d3eed8df3dfdd71aa5eb626be9_prof);

        
        $__internal_cf8e9d470a04c1399176bb22cc78420c9b1d57415f0a85a61100a6687bb219c5->leave($__internal_cf8e9d470a04c1399176bb22cc78420c9b1d57415f0a85a61100a6687bb219c5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
