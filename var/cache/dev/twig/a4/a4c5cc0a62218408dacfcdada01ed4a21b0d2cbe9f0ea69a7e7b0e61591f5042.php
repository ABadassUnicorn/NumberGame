<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8013ae3cbded7e4310ce14fece8d07fa006e3c8550828a9646b273f51f0e26c9 extends Twig_Template
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
        $__internal_20ec5ea96f8bbb01fd1801d4b2cdc3913cb476265a2e2e602a4aca48dd13aa54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20ec5ea96f8bbb01fd1801d4b2cdc3913cb476265a2e2e602a4aca48dd13aa54->enter($__internal_20ec5ea96f8bbb01fd1801d4b2cdc3913cb476265a2e2e602a4aca48dd13aa54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_0d54222a1fb606075a5dd0b8b87bddbc928a7373d60c779f8e368fe11e60c6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d54222a1fb606075a5dd0b8b87bddbc928a7373d60c779f8e368fe11e60c6b9->enter($__internal_0d54222a1fb606075a5dd0b8b87bddbc928a7373d60c779f8e368fe11e60c6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_20ec5ea96f8bbb01fd1801d4b2cdc3913cb476265a2e2e602a4aca48dd13aa54->leave($__internal_20ec5ea96f8bbb01fd1801d4b2cdc3913cb476265a2e2e602a4aca48dd13aa54_prof);

        
        $__internal_0d54222a1fb606075a5dd0b8b87bddbc928a7373d60c779f8e368fe11e60c6b9->leave($__internal_0d54222a1fb606075a5dd0b8b87bddbc928a7373d60c779f8e368fe11e60c6b9_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
