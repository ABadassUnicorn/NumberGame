<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_087d2eeeb9e545a887a196af4ad13722587aadac82a4684804c9ba69019b0e61 extends Twig_Template
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
        $__internal_acd2caae93e0324b8b8d6c3cd75bcb58e40a4d2d7b507a61cf9089ed3fcf72b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd2caae93e0324b8b8d6c3cd75bcb58e40a4d2d7b507a61cf9089ed3fcf72b6->enter($__internal_acd2caae93e0324b8b8d6c3cd75bcb58e40a4d2d7b507a61cf9089ed3fcf72b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_9b3884a4cad71670d4d9ed960199baca066286a3a16dc7f676dda5de88f838db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3884a4cad71670d4d9ed960199baca066286a3a16dc7f676dda5de88f838db->enter($__internal_9b3884a4cad71670d4d9ed960199baca066286a3a16dc7f676dda5de88f838db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_acd2caae93e0324b8b8d6c3cd75bcb58e40a4d2d7b507a61cf9089ed3fcf72b6->leave($__internal_acd2caae93e0324b8b8d6c3cd75bcb58e40a4d2d7b507a61cf9089ed3fcf72b6_prof);

        
        $__internal_9b3884a4cad71670d4d9ed960199baca066286a3a16dc7f676dda5de88f838db->leave($__internal_9b3884a4cad71670d4d9ed960199baca066286a3a16dc7f676dda5de88f838db_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
", "@Twig/Exception/error.xml.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
