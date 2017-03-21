<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4b2d68d2effa88e537db6ad72f9a529dc56269245f047c4706d0ba4d7dea3a6a extends Twig_Template
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
        $__internal_78f9413809a7614ceab2ceaa501033591fd2b9ee132d47aa6c998105811fe94b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f9413809a7614ceab2ceaa501033591fd2b9ee132d47aa6c998105811fe94b->enter($__internal_78f9413809a7614ceab2ceaa501033591fd2b9ee132d47aa6c998105811fe94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_3c82a4dcd11184d06096745d8d867c6a01fd799d68c700ff0701838d10951c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c82a4dcd11184d06096745d8d867c6a01fd799d68c700ff0701838d10951c20->enter($__internal_3c82a4dcd11184d06096745d8d867c6a01fd799d68c700ff0701838d10951c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_78f9413809a7614ceab2ceaa501033591fd2b9ee132d47aa6c998105811fe94b->leave($__internal_78f9413809a7614ceab2ceaa501033591fd2b9ee132d47aa6c998105811fe94b_prof);

        
        $__internal_3c82a4dcd11184d06096745d8d867c6a01fd799d68c700ff0701838d10951c20->leave($__internal_3c82a4dcd11184d06096745d8d867c6a01fd799d68c700ff0701838d10951c20_prof);

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
", "TwigBundle:Exception:error.atom.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
