<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4af2c7cc08996be19dcb509552e9dd095128667f0785950707b61efcf2a6a74c extends Twig_Template
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
        $__internal_ad5782e38081ef619fa1195df41e501b5dd2e48a989b5c1a6fb3d3d516abd5fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5782e38081ef619fa1195df41e501b5dd2e48a989b5c1a6fb3d3d516abd5fb->enter($__internal_ad5782e38081ef619fa1195df41e501b5dd2e48a989b5c1a6fb3d3d516abd5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_dd430b28fd0cf1ad29a5720dd68ff9e5cfde70f9d8c78dd2bc5b1dcbf482e651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd430b28fd0cf1ad29a5720dd68ff9e5cfde70f9d8c78dd2bc5b1dcbf482e651->enter($__internal_dd430b28fd0cf1ad29a5720dd68ff9e5cfde70f9d8c78dd2bc5b1dcbf482e651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_ad5782e38081ef619fa1195df41e501b5dd2e48a989b5c1a6fb3d3d516abd5fb->leave($__internal_ad5782e38081ef619fa1195df41e501b5dd2e48a989b5c1a6fb3d3d516abd5fb_prof);

        
        $__internal_dd430b28fd0cf1ad29a5720dd68ff9e5cfde70f9d8c78dd2bc5b1dcbf482e651->leave($__internal_dd430b28fd0cf1ad29a5720dd68ff9e5cfde70f9d8c78dd2bc5b1dcbf482e651_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
", "TwigBundle:Exception:error.txt.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
