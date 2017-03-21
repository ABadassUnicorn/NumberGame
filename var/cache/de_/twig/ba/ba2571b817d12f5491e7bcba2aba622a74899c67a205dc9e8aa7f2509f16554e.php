<?php

/* base.html.twig */
class __TwigTemplate_39cbd4da55cc9e04838baa1ce6ea7600862b0fdf5f7954f6875498cf5be511d2 extends Twig_Template
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
        $__internal_53b66b2dca031f017d0fc658e585e047e8f5c386c3cc1e3c01b8f56eb75dacc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b66b2dca031f017d0fc658e585e047e8f5c386c3cc1e3c01b8f56eb75dacc8->enter($__internal_53b66b2dca031f017d0fc658e585e047e8f5c386c3cc1e3c01b8f56eb75dacc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a4f81574e859071c0dae337b048685e232c14d61dc5ae134b391a00ff6bd5d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f81574e859071c0dae337b048685e232c14d61dc5ae134b391a00ff6bd5d53->enter($__internal_a4f81574e859071c0dae337b048685e232c14d61dc5ae134b391a00ff6bd5d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_53b66b2dca031f017d0fc658e585e047e8f5c386c3cc1e3c01b8f56eb75dacc8->leave($__internal_53b66b2dca031f017d0fc658e585e047e8f5c386c3cc1e3c01b8f56eb75dacc8_prof);

        
        $__internal_a4f81574e859071c0dae337b048685e232c14d61dc5ae134b391a00ff6bd5d53->leave($__internal_a4f81574e859071c0dae337b048685e232c14d61dc5ae134b391a00ff6bd5d53_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b4b9d9224beb2693b0cd2c1c794ec40e2381aa2e6fac9f31dca20793267a6e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4b9d9224beb2693b0cd2c1c794ec40e2381aa2e6fac9f31dca20793267a6e1->enter($__internal_0b4b9d9224beb2693b0cd2c1c794ec40e2381aa2e6fac9f31dca20793267a6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d8462bd03b3144bd694db9f64ecf3d2bd198104c25b48842077e39fb5afd6c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8462bd03b3144bd694db9f64ecf3d2bd198104c25b48842077e39fb5afd6c91->enter($__internal_d8462bd03b3144bd694db9f64ecf3d2bd198104c25b48842077e39fb5afd6c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d8462bd03b3144bd694db9f64ecf3d2bd198104c25b48842077e39fb5afd6c91->leave($__internal_d8462bd03b3144bd694db9f64ecf3d2bd198104c25b48842077e39fb5afd6c91_prof);

        
        $__internal_0b4b9d9224beb2693b0cd2c1c794ec40e2381aa2e6fac9f31dca20793267a6e1->leave($__internal_0b4b9d9224beb2693b0cd2c1c794ec40e2381aa2e6fac9f31dca20793267a6e1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8940e9bb2c3b4e00f9dece600a8ee1abc8fbd1a2f2369d0ce01c2759d2650b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8940e9bb2c3b4e00f9dece600a8ee1abc8fbd1a2f2369d0ce01c2759d2650b0->enter($__internal_f8940e9bb2c3b4e00f9dece600a8ee1abc8fbd1a2f2369d0ce01c2759d2650b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e9e3015c45a69495253c70b9c0f4fb2b2b5ef76ec90ad7aa6a231a655bf6f5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e3015c45a69495253c70b9c0f4fb2b2b5ef76ec90ad7aa6a231a655bf6f5e1->enter($__internal_e9e3015c45a69495253c70b9c0f4fb2b2b5ef76ec90ad7aa6a231a655bf6f5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e9e3015c45a69495253c70b9c0f4fb2b2b5ef76ec90ad7aa6a231a655bf6f5e1->leave($__internal_e9e3015c45a69495253c70b9c0f4fb2b2b5ef76ec90ad7aa6a231a655bf6f5e1_prof);

        
        $__internal_f8940e9bb2c3b4e00f9dece600a8ee1abc8fbd1a2f2369d0ce01c2759d2650b0->leave($__internal_f8940e9bb2c3b4e00f9dece600a8ee1abc8fbd1a2f2369d0ce01c2759d2650b0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb5126803d08b92d7618afb7503141faca6a99d4158cebf0cce47e1c5a9d08f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb5126803d08b92d7618afb7503141faca6a99d4158cebf0cce47e1c5a9d08f8->enter($__internal_bb5126803d08b92d7618afb7503141faca6a99d4158cebf0cce47e1c5a9d08f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f05f4197f7380ccd38035a2cefa490f2b85c1185ecf1335bb5ac1114c22e0a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05f4197f7380ccd38035a2cefa490f2b85c1185ecf1335bb5ac1114c22e0a93->enter($__internal_f05f4197f7380ccd38035a2cefa490f2b85c1185ecf1335bb5ac1114c22e0a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f05f4197f7380ccd38035a2cefa490f2b85c1185ecf1335bb5ac1114c22e0a93->leave($__internal_f05f4197f7380ccd38035a2cefa490f2b85c1185ecf1335bb5ac1114c22e0a93_prof);

        
        $__internal_bb5126803d08b92d7618afb7503141faca6a99d4158cebf0cce47e1c5a9d08f8->leave($__internal_bb5126803d08b92d7618afb7503141faca6a99d4158cebf0cce47e1c5a9d08f8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01f5f71bb0a87c9542f2133cfe1d9926ab6e5af1040ccb0730ad4bb450812ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f5f71bb0a87c9542f2133cfe1d9926ab6e5af1040ccb0730ad4bb450812ec7->enter($__internal_01f5f71bb0a87c9542f2133cfe1d9926ab6e5af1040ccb0730ad4bb450812ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7167d6908ff3c0306e0499b59abc7fd10c626c3c64d055676e6df5f51948459b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7167d6908ff3c0306e0499b59abc7fd10c626c3c64d055676e6df5f51948459b->enter($__internal_7167d6908ff3c0306e0499b59abc7fd10c626c3c64d055676e6df5f51948459b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7167d6908ff3c0306e0499b59abc7fd10c626c3c64d055676e6df5f51948459b->leave($__internal_7167d6908ff3c0306e0499b59abc7fd10c626c3c64d055676e6df5f51948459b_prof);

        
        $__internal_01f5f71bb0a87c9542f2133cfe1d9926ab6e5af1040ccb0730ad4bb450812ec7->leave($__internal_01f5f71bb0a87c9542f2133cfe1d9926ab6e5af1040ccb0730ad4bb450812ec7_prof);

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
", "base.html.twig", "E:\\wamp64\\www\\numberGame\\app\\Resources\\views\\base.html.twig");
    }
}
