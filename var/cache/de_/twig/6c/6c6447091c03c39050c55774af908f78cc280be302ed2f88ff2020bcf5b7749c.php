<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_06eca1c38e905c56b2b5c942617f94d33f2c8a966fdc78fd2cac3535ab8ca396 extends Twig_Template
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
        $__internal_830697c6e991dc4f087cc5231a1e5ca330cfaadfdb2a8cd4718a1c103827ca58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830697c6e991dc4f087cc5231a1e5ca330cfaadfdb2a8cd4718a1c103827ca58->enter($__internal_830697c6e991dc4f087cc5231a1e5ca330cfaadfdb2a8cd4718a1c103827ca58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_f231711a99165858a8df2823023a57001f71d01904c93d3a109a527ce6147ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f231711a99165858a8df2823023a57001f71d01904c93d3a109a527ce6147ea7->enter($__internal_f231711a99165858a8df2823023a57001f71d01904c93d3a109a527ce6147ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_830697c6e991dc4f087cc5231a1e5ca330cfaadfdb2a8cd4718a1c103827ca58->leave($__internal_830697c6e991dc4f087cc5231a1e5ca330cfaadfdb2a8cd4718a1c103827ca58_prof);

        
        $__internal_f231711a99165858a8df2823023a57001f71d01904c93d3a109a527ce6147ea7->leave($__internal_f231711a99165858a8df2823023a57001f71d01904c93d3a109a527ce6147ea7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
