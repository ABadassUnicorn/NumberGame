<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_8ac1d949955108eafb36eae4c9b59d9c2a9667a318de9353e25fecb9249c2e00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2dab08ddf3455a9eeb2bb86ea3962ac8d080bdfdd0ab56acec63b13de785897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2dab08ddf3455a9eeb2bb86ea3962ac8d080bdfdd0ab56acec63b13de785897->enter($__internal_b2dab08ddf3455a9eeb2bb86ea3962ac8d080bdfdd0ab56acec63b13de785897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_10fbd9e09ea10ac4afbe561d56ef2529f2d0c3012cb48b33220fc0cb77682a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10fbd9e09ea10ac4afbe561d56ef2529f2d0c3012cb48b33220fc0cb77682a48->enter($__internal_10fbd9e09ea10ac4afbe561d56ef2529f2d0c3012cb48b33220fc0cb77682a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2dab08ddf3455a9eeb2bb86ea3962ac8d080bdfdd0ab56acec63b13de785897->leave($__internal_b2dab08ddf3455a9eeb2bb86ea3962ac8d080bdfdd0ab56acec63b13de785897_prof);

        
        $__internal_10fbd9e09ea10ac4afbe561d56ef2529f2d0c3012cb48b33220fc0cb77682a48->leave($__internal_10fbd9e09ea10ac4afbe561d56ef2529f2d0c3012cb48b33220fc0cb77682a48_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d947ed183d22ea2927cc1b9f95e27f50505b656ff64e3cbf4127b294bb6c733a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d947ed183d22ea2927cc1b9f95e27f50505b656ff64e3cbf4127b294bb6c733a->enter($__internal_d947ed183d22ea2927cc1b9f95e27f50505b656ff64e3cbf4127b294bb6c733a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_77bae04356b344e7663882a7bb2fc910d29bb473dea806e7964c9548340b167f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77bae04356b344e7663882a7bb2fc910d29bb473dea806e7964c9548340b167f->enter($__internal_77bae04356b344e7663882a7bb2fc910d29bb473dea806e7964c9548340b167f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_77bae04356b344e7663882a7bb2fc910d29bb473dea806e7964c9548340b167f->leave($__internal_77bae04356b344e7663882a7bb2fc910d29bb473dea806e7964c9548340b167f_prof);

        
        $__internal_d947ed183d22ea2927cc1b9f95e27f50505b656ff64e3cbf4127b294bb6c733a->leave($__internal_d947ed183d22ea2927cc1b9f95e27f50505b656ff64e3cbf4127b294bb6c733a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4561f758dccc40e01a5c14530babd4be244743022312ec2e0db149786c96e3b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4561f758dccc40e01a5c14530babd4be244743022312ec2e0db149786c96e3b8->enter($__internal_4561f758dccc40e01a5c14530babd4be244743022312ec2e0db149786c96e3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d37c8ed50aad7550d62c9528cad0024d69ad88abab6a4da9cab22001ae7d4cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37c8ed50aad7550d62c9528cad0024d69ad88abab6a4da9cab22001ae7d4cea->enter($__internal_d37c8ed50aad7550d62c9528cad0024d69ad88abab6a4da9cab22001ae7d4cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d37c8ed50aad7550d62c9528cad0024d69ad88abab6a4da9cab22001ae7d4cea->leave($__internal_d37c8ed50aad7550d62c9528cad0024d69ad88abab6a4da9cab22001ae7d4cea_prof);

        
        $__internal_4561f758dccc40e01a5c14530babd4be244743022312ec2e0db149786c96e3b8->leave($__internal_4561f758dccc40e01a5c14530babd4be244743022312ec2e0db149786c96e3b8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca24fe29487b03a334ef4c4e0e7e0a44f065d842e709145be563cd8881618010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca24fe29487b03a334ef4c4e0e7e0a44f065d842e709145be563cd8881618010->enter($__internal_ca24fe29487b03a334ef4c4e0e7e0a44f065d842e709145be563cd8881618010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5dba8d28e83ad8fb2d98fdd492323216b4607820770edc0aea19cb214ba5a2a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dba8d28e83ad8fb2d98fdd492323216b4607820770edc0aea19cb214ba5a2a2->enter($__internal_5dba8d28e83ad8fb2d98fdd492323216b4607820770edc0aea19cb214ba5a2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5dba8d28e83ad8fb2d98fdd492323216b4607820770edc0aea19cb214ba5a2a2->leave($__internal_5dba8d28e83ad8fb2d98fdd492323216b4607820770edc0aea19cb214ba5a2a2_prof);

        
        $__internal_ca24fe29487b03a334ef4c4e0e7e0a44f065d842e709145be563cd8881618010->leave($__internal_ca24fe29487b03a334ef4c4e0e7e0a44f065d842e709145be563cd8881618010_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
