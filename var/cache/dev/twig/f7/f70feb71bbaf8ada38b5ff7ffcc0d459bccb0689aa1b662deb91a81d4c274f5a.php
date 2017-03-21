<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ad603a250da4221485b85f1ff0d6da17da33e439ab72e80abd0042538d5a6467 extends Twig_Template
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
        $__internal_bbe25f1902512a6889345a5d421d2ec47a068a0aa9c15746013ddc9b30e56f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe25f1902512a6889345a5d421d2ec47a068a0aa9c15746013ddc9b30e56f36->enter($__internal_bbe25f1902512a6889345a5d421d2ec47a068a0aa9c15746013ddc9b30e56f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_76067c3da2e176f71ec3bdb5cd4f9e6d50577b159d4601474610cf2c5481edb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76067c3da2e176f71ec3bdb5cd4f9e6d50577b159d4601474610cf2c5481edb2->enter($__internal_76067c3da2e176f71ec3bdb5cd4f9e6d50577b159d4601474610cf2c5481edb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_bbe25f1902512a6889345a5d421d2ec47a068a0aa9c15746013ddc9b30e56f36->leave($__internal_bbe25f1902512a6889345a5d421d2ec47a068a0aa9c15746013ddc9b30e56f36_prof);

        
        $__internal_76067c3da2e176f71ec3bdb5cd4f9e6d50577b159d4601474610cf2c5481edb2->leave($__internal_76067c3da2e176f71ec3bdb5cd4f9e6d50577b159d4601474610cf2c5481edb2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
