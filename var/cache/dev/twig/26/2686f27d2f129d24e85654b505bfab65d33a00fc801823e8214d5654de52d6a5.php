<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_1407a30ed667c5cf9e77e35e153084f4fb0d573a34900eef15893844167c6273 extends Twig_Template
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
        $__internal_bf9dd927a6cab85060c9969b6c2b3aa5615536243f02d77675cd434d06627c32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9dd927a6cab85060c9969b6c2b3aa5615536243f02d77675cd434d06627c32->enter($__internal_bf9dd927a6cab85060c9969b6c2b3aa5615536243f02d77675cd434d06627c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_9ef3585f90330d8458df1ddf71316bca90103c85daaf90e7359748ac7dc6b75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef3585f90330d8458df1ddf71316bca90103c85daaf90e7359748ac7dc6b75f->enter($__internal_9ef3585f90330d8458df1ddf71316bca90103c85daaf90e7359748ac7dc6b75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_bf9dd927a6cab85060c9969b6c2b3aa5615536243f02d77675cd434d06627c32->leave($__internal_bf9dd927a6cab85060c9969b6c2b3aa5615536243f02d77675cd434d06627c32_prof);

        
        $__internal_9ef3585f90330d8458df1ddf71316bca90103c85daaf90e7359748ac7dc6b75f->leave($__internal_9ef3585f90330d8458df1ddf71316bca90103c85daaf90e7359748ac7dc6b75f_prof);

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
", "@Twig/Exception/error.css.twig", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
