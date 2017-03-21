<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7c67e796e7ae12867a42b60321fea261588b7c3871069c5c8853cc36f26fe726 extends Twig_Template
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
        $__internal_e54d07edfa33e950a3fd6e6634140ada44502d8686229f9e13f792c46794fdf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e54d07edfa33e950a3fd6e6634140ada44502d8686229f9e13f792c46794fdf1->enter($__internal_e54d07edfa33e950a3fd6e6634140ada44502d8686229f9e13f792c46794fdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_4e0477735e0513b3cef540ead0b038302523947c70773805ca5a7b4202c69373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0477735e0513b3cef540ead0b038302523947c70773805ca5a7b4202c69373->enter($__internal_4e0477735e0513b3cef540ead0b038302523947c70773805ca5a7b4202c69373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e54d07edfa33e950a3fd6e6634140ada44502d8686229f9e13f792c46794fdf1->leave($__internal_e54d07edfa33e950a3fd6e6634140ada44502d8686229f9e13f792c46794fdf1_prof);

        
        $__internal_4e0477735e0513b3cef540ead0b038302523947c70773805ca5a7b4202c69373->leave($__internal_4e0477735e0513b3cef540ead0b038302523947c70773805ca5a7b4202c69373_prof);

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
", "TwigBundle:Exception:error.txt.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
