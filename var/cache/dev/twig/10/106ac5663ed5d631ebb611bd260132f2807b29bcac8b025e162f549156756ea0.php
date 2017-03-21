<?php

/* base.html.twig */
class __TwigTemplate_18e493eab41a4a6cf4bddf15266de03c5310f72e594fabc9f108b8eae95977d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdb43250c316dad116f5f5f494f5f318e45f509e50d3528e9075d6d3088dfb3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdb43250c316dad116f5f5f494f5f318e45f509e50d3528e9075d6d3088dfb3b->enter($__internal_bdb43250c316dad116f5f5f494f5f318e45f509e50d3528e9075d6d3088dfb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_36e8ef3c97e15b18f6755332edbac7996eab3ad44e65324fe13e728a3f810979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e8ef3c97e15b18f6755332edbac7996eab3ad44e65324fe13e728a3f810979->enter($__internal_36e8ef3c97e15b18f6755332edbac7996eab3ad44e65324fe13e728a3f810979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bdb43250c316dad116f5f5f494f5f318e45f509e50d3528e9075d6d3088dfb3b->leave($__internal_bdb43250c316dad116f5f5f494f5f318e45f509e50d3528e9075d6d3088dfb3b_prof);

        
        $__internal_36e8ef3c97e15b18f6755332edbac7996eab3ad44e65324fe13e728a3f810979->leave($__internal_36e8ef3c97e15b18f6755332edbac7996eab3ad44e65324fe13e728a3f810979_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_478fd6cb5eacebf15cc16f0ae86cf61bafc3a9791d37c796fd6c10c2c57a8fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478fd6cb5eacebf15cc16f0ae86cf61bafc3a9791d37c796fd6c10c2c57a8fe8->enter($__internal_478fd6cb5eacebf15cc16f0ae86cf61bafc3a9791d37c796fd6c10c2c57a8fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e9df1109563cfe9a430cf5cbb5bc39e7541bbbaa3f91dfc38969cb3f1952af1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9df1109563cfe9a430cf5cbb5bc39e7541bbbaa3f91dfc38969cb3f1952af1f->enter($__internal_e9df1109563cfe9a430cf5cbb5bc39e7541bbbaa3f91dfc38969cb3f1952af1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e9df1109563cfe9a430cf5cbb5bc39e7541bbbaa3f91dfc38969cb3f1952af1f->leave($__internal_e9df1109563cfe9a430cf5cbb5bc39e7541bbbaa3f91dfc38969cb3f1952af1f_prof);

        
        $__internal_478fd6cb5eacebf15cc16f0ae86cf61bafc3a9791d37c796fd6c10c2c57a8fe8->leave($__internal_478fd6cb5eacebf15cc16f0ae86cf61bafc3a9791d37c796fd6c10c2c57a8fe8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_210246018e2c30e29d2496803bf35d6bb96511882fc3a6260a0fc27e7e38b540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_210246018e2c30e29d2496803bf35d6bb96511882fc3a6260a0fc27e7e38b540->enter($__internal_210246018e2c30e29d2496803bf35d6bb96511882fc3a6260a0fc27e7e38b540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_846eba97ef7bc67d191f5f715da86cd0f5b149fd14e3e48f80aae5a05b24b286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846eba97ef7bc67d191f5f715da86cd0f5b149fd14e3e48f80aae5a05b24b286->enter($__internal_846eba97ef7bc67d191f5f715da86cd0f5b149fd14e3e48f80aae5a05b24b286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_846eba97ef7bc67d191f5f715da86cd0f5b149fd14e3e48f80aae5a05b24b286->leave($__internal_846eba97ef7bc67d191f5f715da86cd0f5b149fd14e3e48f80aae5a05b24b286_prof);

        
        $__internal_210246018e2c30e29d2496803bf35d6bb96511882fc3a6260a0fc27e7e38b540->leave($__internal_210246018e2c30e29d2496803bf35d6bb96511882fc3a6260a0fc27e7e38b540_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_47892c566c36104fac63243541c3320a38c937f00cd4a60b1eb6229f002f562f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47892c566c36104fac63243541c3320a38c937f00cd4a60b1eb6229f002f562f->enter($__internal_47892c566c36104fac63243541c3320a38c937f00cd4a60b1eb6229f002f562f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85e6df94e7fa07b34a480107785ffb1253d886918cd93df837cf9f4d25fa198f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e6df94e7fa07b34a480107785ffb1253d886918cd93df837cf9f4d25fa198f->enter($__internal_85e6df94e7fa07b34a480107785ffb1253d886918cd93df837cf9f4d25fa198f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_85e6df94e7fa07b34a480107785ffb1253d886918cd93df837cf9f4d25fa198f->leave($__internal_85e6df94e7fa07b34a480107785ffb1253d886918cd93df837cf9f4d25fa198f_prof);

        
        $__internal_47892c566c36104fac63243541c3320a38c937f00cd4a60b1eb6229f002f562f->leave($__internal_47892c566c36104fac63243541c3320a38c937f00cd4a60b1eb6229f002f562f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8e6c86824bd13605c5ab3fa4da22675140521ddf27cfd54fffd13bc74744186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e6c86824bd13605c5ab3fa4da22675140521ddf27cfd54fffd13bc74744186->enter($__internal_b8e6c86824bd13605c5ab3fa4da22675140521ddf27cfd54fffd13bc74744186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0bd4d6f6fad134aa1c0f7b867d74fc395fe77f50048194520a5ae241860c3ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd4d6f6fad134aa1c0f7b867d74fc395fe77f50048194520a5ae241860c3ff5->enter($__internal_0bd4d6f6fad134aa1c0f7b867d74fc395fe77f50048194520a5ae241860c3ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0bd4d6f6fad134aa1c0f7b867d74fc395fe77f50048194520a5ae241860c3ff5->leave($__internal_0bd4d6f6fad134aa1c0f7b867d74fc395fe77f50048194520a5ae241860c3ff5_prof);

        
        $__internal_b8e6c86824bd13605c5ab3fa4da22675140521ddf27cfd54fffd13bc74744186->leave($__internal_b8e6c86824bd13605c5ab3fa4da22675140521ddf27cfd54fffd13bc74744186_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\workspaceProjet\\NumberGame\\app\\Resources\\views\\base.html.twig");
    }
}
