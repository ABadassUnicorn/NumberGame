<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4891742041f18b4113fdc6a4e2f54e6cb6ab16c4e17b9f5d4aa464f5e420c330 extends Twig_Template
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
        $__internal_ffa53663c56c250217d057248739b58b7f3ebbba3f09c06c2a259fc9f5b5f8da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa53663c56c250217d057248739b58b7f3ebbba3f09c06c2a259fc9f5b5f8da->enter($__internal_ffa53663c56c250217d057248739b58b7f3ebbba3f09c06c2a259fc9f5b5f8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8ca9c1d880670e2b9675f7542f085750ba9c90d417921f24bd03f5a3dff2cf9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca9c1d880670e2b9675f7542f085750ba9c90d417921f24bd03f5a3dff2cf9a->enter($__internal_8ca9c1d880670e2b9675f7542f085750ba9c90d417921f24bd03f5a3dff2cf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ffa53663c56c250217d057248739b58b7f3ebbba3f09c06c2a259fc9f5b5f8da->leave($__internal_ffa53663c56c250217d057248739b58b7f3ebbba3f09c06c2a259fc9f5b5f8da_prof);

        
        $__internal_8ca9c1d880670e2b9675f7542f085750ba9c90d417921f24bd03f5a3dff2cf9a->leave($__internal_8ca9c1d880670e2b9675f7542f085750ba9c90d417921f24bd03f5a3dff2cf9a_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
