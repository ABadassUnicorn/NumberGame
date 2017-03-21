<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_ff9a9b98840513bb1518ed10962f766188fe1d9ee040fc9040201f1697110426 extends Twig_Template
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
        $__internal_2a6b0aad7704111f48fb16855e0a6988ecea1aa1fb4734fe1009d6fcf7097688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6b0aad7704111f48fb16855e0a6988ecea1aa1fb4734fe1009d6fcf7097688->enter($__internal_2a6b0aad7704111f48fb16855e0a6988ecea1aa1fb4734fe1009d6fcf7097688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_65a15cbbc4a9ac55dca569c1abac6716764f6db6100fe94fc0ac93e2497fce3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a15cbbc4a9ac55dca569c1abac6716764f6db6100fe94fc0ac93e2497fce3e->enter($__internal_65a15cbbc4a9ac55dca569c1abac6716764f6db6100fe94fc0ac93e2497fce3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_2a6b0aad7704111f48fb16855e0a6988ecea1aa1fb4734fe1009d6fcf7097688->leave($__internal_2a6b0aad7704111f48fb16855e0a6988ecea1aa1fb4734fe1009d6fcf7097688_prof);

        
        $__internal_65a15cbbc4a9ac55dca569c1abac6716764f6db6100fe94fc0ac93e2497fce3e->leave($__internal_65a15cbbc4a9ac55dca569c1abac6716764f6db6100fe94fc0ac93e2497fce3e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
