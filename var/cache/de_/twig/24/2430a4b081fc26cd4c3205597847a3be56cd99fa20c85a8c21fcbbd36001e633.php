<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f329cd0eff543655e87088681bc5ff040bab296ec8d9e859a85faba505462281 extends Twig_Template
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
        $__internal_17cbcc1d753a5e8a8ffc53b77d4901336508ec627783310b7234293cc1556a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17cbcc1d753a5e8a8ffc53b77d4901336508ec627783310b7234293cc1556a63->enter($__internal_17cbcc1d753a5e8a8ffc53b77d4901336508ec627783310b7234293cc1556a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_996b144927214fbcaf9dbf29e38089b675d70c4f703f315b1fe0ea01f95fa6ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996b144927214fbcaf9dbf29e38089b675d70c4f703f315b1fe0ea01f95fa6ee->enter($__internal_996b144927214fbcaf9dbf29e38089b675d70c4f703f315b1fe0ea01f95fa6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_17cbcc1d753a5e8a8ffc53b77d4901336508ec627783310b7234293cc1556a63->leave($__internal_17cbcc1d753a5e8a8ffc53b77d4901336508ec627783310b7234293cc1556a63_prof);

        
        $__internal_996b144927214fbcaf9dbf29e38089b675d70c4f703f315b1fe0ea01f95fa6ee->leave($__internal_996b144927214fbcaf9dbf29e38089b675d70c4f703f315b1fe0ea01f95fa6ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
