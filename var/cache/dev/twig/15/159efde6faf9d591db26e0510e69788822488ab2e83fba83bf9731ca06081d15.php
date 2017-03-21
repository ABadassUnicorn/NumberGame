<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_33cad77c013ecbdd3ef1da8a5e38037c663668c1a82e91333d8ee33f202d6b58 extends Twig_Template
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
        $__internal_687255bfd79144084748f6d28cad569b30cfb680a26b308607049dbacde04313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_687255bfd79144084748f6d28cad569b30cfb680a26b308607049dbacde04313->enter($__internal_687255bfd79144084748f6d28cad569b30cfb680a26b308607049dbacde04313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_491faa05dae8aca4eeb608f53f80f0e0cd80fbc278c30afe778df701a7b79816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491faa05dae8aca4eeb608f53f80f0e0cd80fbc278c30afe778df701a7b79816->enter($__internal_491faa05dae8aca4eeb608f53f80f0e0cd80fbc278c30afe778df701a7b79816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_687255bfd79144084748f6d28cad569b30cfb680a26b308607049dbacde04313->leave($__internal_687255bfd79144084748f6d28cad569b30cfb680a26b308607049dbacde04313_prof);

        
        $__internal_491faa05dae8aca4eeb608f53f80f0e0cd80fbc278c30afe778df701a7b79816->leave($__internal_491faa05dae8aca4eeb608f53f80f0e0cd80fbc278c30afe778df701a7b79816_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
", "TwigBundle:Exception:error.xml.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
