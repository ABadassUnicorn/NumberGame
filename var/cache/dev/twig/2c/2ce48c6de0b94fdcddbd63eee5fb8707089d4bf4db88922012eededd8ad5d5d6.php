<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_0ee1a1952c201d5383df54f425bbbd062a405dcdbc3d0160e916244fd9577298 extends Twig_Template
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
        $__internal_83e2c6aec50e05bb16e6eb2f2c901ee2ecccec8b4522ca41b114e02e4281f2d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e2c6aec50e05bb16e6eb2f2c901ee2ecccec8b4522ca41b114e02e4281f2d5->enter($__internal_83e2c6aec50e05bb16e6eb2f2c901ee2ecccec8b4522ca41b114e02e4281f2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_069485b78d7ce1a243ba54ce241c683051cc64ce0ff1e6a00288adb623e0814c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_069485b78d7ce1a243ba54ce241c683051cc64ce0ff1e6a00288adb623e0814c->enter($__internal_069485b78d7ce1a243ba54ce241c683051cc64ce0ff1e6a00288adb623e0814c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_83e2c6aec50e05bb16e6eb2f2c901ee2ecccec8b4522ca41b114e02e4281f2d5->leave($__internal_83e2c6aec50e05bb16e6eb2f2c901ee2ecccec8b4522ca41b114e02e4281f2d5_prof);

        
        $__internal_069485b78d7ce1a243ba54ce241c683051cc64ce0ff1e6a00288adb623e0814c->leave($__internal_069485b78d7ce1a243ba54ce241c683051cc64ce0ff1e6a00288adb623e0814c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
