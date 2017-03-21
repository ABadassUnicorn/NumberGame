<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_b2bc58c1e409084c4dffb8b94ef46529c11d0bbbdda5483ccf19c7726c158e90 extends Twig_Template
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
        $__internal_ddf981a0bf8db020084dce138efa3112b1e2f1b448e4ade1c5d069338d544663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf981a0bf8db020084dce138efa3112b1e2f1b448e4ade1c5d069338d544663->enter($__internal_ddf981a0bf8db020084dce138efa3112b1e2f1b448e4ade1c5d069338d544663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_3c16bcbddb743ed4cc7c0e9c722a3d543270a8ed7e3ee4ec5848a7326fab56a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c16bcbddb743ed4cc7c0e9c722a3d543270a8ed7e3ee4ec5848a7326fab56a7->enter($__internal_3c16bcbddb743ed4cc7c0e9c722a3d543270a8ed7e3ee4ec5848a7326fab56a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ddf981a0bf8db020084dce138efa3112b1e2f1b448e4ade1c5d069338d544663->leave($__internal_ddf981a0bf8db020084dce138efa3112b1e2f1b448e4ade1c5d069338d544663_prof);

        
        $__internal_3c16bcbddb743ed4cc7c0e9c722a3d543270a8ed7e3ee4ec5848a7326fab56a7->leave($__internal_3c16bcbddb743ed4cc7c0e9c722a3d543270a8ed7e3ee4ec5848a7326fab56a7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
