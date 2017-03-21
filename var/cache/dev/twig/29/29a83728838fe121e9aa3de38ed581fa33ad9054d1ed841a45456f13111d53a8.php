<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_5349c176e97a8ceaa32bd12d45d8f3777be08b8004638878d918f29c361d8550 extends Twig_Template
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
        $__internal_d7dba31e54322d2425862af19e058067ce3a25274b5a1ab07205c8393f25884c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7dba31e54322d2425862af19e058067ce3a25274b5a1ab07205c8393f25884c->enter($__internal_d7dba31e54322d2425862af19e058067ce3a25274b5a1ab07205c8393f25884c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_dd1d5363ce5bf0375023a99b9eedb0343346610e28aefe84a383367411b22b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1d5363ce5bf0375023a99b9eedb0343346610e28aefe84a383367411b22b04->enter($__internal_dd1d5363ce5bf0375023a99b9eedb0343346610e28aefe84a383367411b22b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d7dba31e54322d2425862af19e058067ce3a25274b5a1ab07205c8393f25884c->leave($__internal_d7dba31e54322d2425862af19e058067ce3a25274b5a1ab07205c8393f25884c_prof);

        
        $__internal_dd1d5363ce5bf0375023a99b9eedb0343346610e28aefe84a383367411b22b04->leave($__internal_dd1d5363ce5bf0375023a99b9eedb0343346610e28aefe84a383367411b22b04_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
