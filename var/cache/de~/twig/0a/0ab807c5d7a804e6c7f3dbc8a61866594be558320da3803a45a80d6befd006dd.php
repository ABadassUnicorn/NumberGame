<?php

/* FrontBundle:Common:base.html.twig */
class __TwigTemplate_7dad2b0d660a53ce1a0e3e32298df7d2b5eb7d94527dd98002866006d033fe39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'additional_stylesheets' => array($this, 'block_additional_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'body' => array($this, 'block_body'),
            'javascripts_body' => array($this, 'block_javascripts_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed4e842538adb7d63e19f1b0a07fa9409be07f564ae0599f55c73d1649f96b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed4e842538adb7d63e19f1b0a07fa9409be07f564ae0599f55c73d1649f96b12->enter($__internal_ed4e842538adb7d63e19f1b0a07fa9409be07f564ae0599f55c73d1649f96b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Common:base.html.twig"));

        $__internal_4c9bb8f74be125e9652212a23101a3e35bb5f910a1f3a8c870c2dbbd38e4b15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9bb8f74be125e9652212a23101a3e35bb5f910a1f3a8c870c2dbbd38e4b15c->enter($__internal_4c9bb8f74be125e9652212a23101a3e35bb5f910a1f3a8c870c2dbbd38e4b15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Common:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" class=\"gt-ie8\">
\t<head>
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base_page_title", array(), "messages"), "html", null, true);
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            <meta name=\"robots\" content=\"noindex, nofollow\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b4dab46_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b4dab46_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b4dab46_bootstrap.min_1.css");
            // line 13
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
            // asset "b4dab46_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b4dab46_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b4dab46_font-awesome.min_2.css");
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        } else {
            // asset "b4dab46"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b4dab46") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b4dab46.css");
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
            ";
        // line 16
        $this->displayBlock('additional_stylesheets', $context, $blocks);
        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/vue/dist/vue.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/vue-resource/dist/vue-resource.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 21
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 22
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/favicon.ico"), "html", null, true);
        echo "\" />
\t</head>
    <body>
        ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "1b37284"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1b37284") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1b37284.js");
            // line 27
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "?v";
            echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 29
        echo "        ";
        $this->displayBlock('javascripts_body', $context, $blocks);
        // line 30
        echo "    </body>
</html>";
        
        $__internal_ed4e842538adb7d63e19f1b0a07fa9409be07f564ae0599f55c73d1649f96b12->leave($__internal_ed4e842538adb7d63e19f1b0a07fa9409be07f564ae0599f55c73d1649f96b12_prof);

        
        $__internal_4c9bb8f74be125e9652212a23101a3e35bb5f910a1f3a8c870c2dbbd38e4b15c->leave($__internal_4c9bb8f74be125e9652212a23101a3e35bb5f910a1f3a8c870c2dbbd38e4b15c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f98ab4630887e670c0c40375e5be39b303ddc286befa5f6d2db871c985853c5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f98ab4630887e670c0c40375e5be39b303ddc286befa5f6d2db871c985853c5c->enter($__internal_f98ab4630887e670c0c40375e5be39b303ddc286befa5f6d2db871c985853c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7d2b63d84c072e880400ac1b8d4141ca1957b8c1ffc066eff621fdf4f9988e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d2b63d84c072e880400ac1b8d4141ca1957b8c1ffc066eff621fdf4f9988e7->enter($__internal_c7d2b63d84c072e880400ac1b8d4141ca1957b8c1ffc066eff621fdf4f9988e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c7d2b63d84c072e880400ac1b8d4141ca1957b8c1ffc066eff621fdf4f9988e7->leave($__internal_c7d2b63d84c072e880400ac1b8d4141ca1957b8c1ffc066eff621fdf4f9988e7_prof);

        
        $__internal_f98ab4630887e670c0c40375e5be39b303ddc286befa5f6d2db871c985853c5c->leave($__internal_f98ab4630887e670c0c40375e5be39b303ddc286befa5f6d2db871c985853c5c_prof);

    }

    // line 16
    public function block_additional_stylesheets($context, array $blocks = array())
    {
        $__internal_f6d8642eb660dae895e2ccf6cf02ddbf452a319791eb2c26077db024d576505d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d8642eb660dae895e2ccf6cf02ddbf452a319791eb2c26077db024d576505d->enter($__internal_f6d8642eb660dae895e2ccf6cf02ddbf452a319791eb2c26077db024d576505d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "additional_stylesheets"));

        $__internal_605fb71ad6dddccf2683ee12969ea696167fd189b2b509582652f6e92810d55c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605fb71ad6dddccf2683ee12969ea696167fd189b2b509582652f6e92810d55c->enter($__internal_605fb71ad6dddccf2683ee12969ea696167fd189b2b509582652f6e92810d55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "additional_stylesheets"));

        
        $__internal_605fb71ad6dddccf2683ee12969ea696167fd189b2b509582652f6e92810d55c->leave($__internal_605fb71ad6dddccf2683ee12969ea696167fd189b2b509582652f6e92810d55c_prof);

        
        $__internal_f6d8642eb660dae895e2ccf6cf02ddbf452a319791eb2c26077db024d576505d->leave($__internal_f6d8642eb660dae895e2ccf6cf02ddbf452a319791eb2c26077db024d576505d_prof);

    }

    // line 21
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_5dc4d87a52ae47fbb33232a5c56dd3292ac8951a2347420b018d75f8364b2887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc4d87a52ae47fbb33232a5c56dd3292ac8951a2347420b018d75f8364b2887->enter($__internal_5dc4d87a52ae47fbb33232a5c56dd3292ac8951a2347420b018d75f8364b2887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_400946fe136a9cdc6c37969b4d09722a32062df68047d1b120fe5df7231b5ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400946fe136a9cdc6c37969b4d09722a32062df68047d1b120fe5df7231b5ac0->enter($__internal_400946fe136a9cdc6c37969b4d09722a32062df68047d1b120fe5df7231b5ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        
        $__internal_400946fe136a9cdc6c37969b4d09722a32062df68047d1b120fe5df7231b5ac0->leave($__internal_400946fe136a9cdc6c37969b4d09722a32062df68047d1b120fe5df7231b5ac0_prof);

        
        $__internal_5dc4d87a52ae47fbb33232a5c56dd3292ac8951a2347420b018d75f8364b2887->leave($__internal_5dc4d87a52ae47fbb33232a5c56dd3292ac8951a2347420b018d75f8364b2887_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_76c6904505a0a3b301fd31d603905af074f62ae63e852f921b345f5a27131ed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76c6904505a0a3b301fd31d603905af074f62ae63e852f921b345f5a27131ed3->enter($__internal_76c6904505a0a3b301fd31d603905af074f62ae63e852f921b345f5a27131ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62d7db3f509aadf0a23cc127a9b9e7e83526b0de0d1decc8e26ec06b17cfd6b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d7db3f509aadf0a23cc127a9b9e7e83526b0de0d1decc8e26ec06b17cfd6b7->enter($__internal_62d7db3f509aadf0a23cc127a9b9e7e83526b0de0d1decc8e26ec06b17cfd6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_62d7db3f509aadf0a23cc127a9b9e7e83526b0de0d1decc8e26ec06b17cfd6b7->leave($__internal_62d7db3f509aadf0a23cc127a9b9e7e83526b0de0d1decc8e26ec06b17cfd6b7_prof);

        
        $__internal_76c6904505a0a3b301fd31d603905af074f62ae63e852f921b345f5a27131ed3->leave($__internal_76c6904505a0a3b301fd31d603905af074f62ae63e852f921b345f5a27131ed3_prof);

    }

    // line 29
    public function block_javascripts_body($context, array $blocks = array())
    {
        $__internal_8940c31d3220c249cacf861f992544a2486f3f66cfc56bf51200714299b3b4d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8940c31d3220c249cacf861f992544a2486f3f66cfc56bf51200714299b3b4d6->enter($__internal_8940c31d3220c249cacf861f992544a2486f3f66cfc56bf51200714299b3b4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

        $__internal_2f08567439df44eaab4a5939422802cf996ceb9d55ae29b19f3e0dc06db259f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f08567439df44eaab4a5939422802cf996ceb9d55ae29b19f3e0dc06db259f1->enter($__internal_2f08567439df44eaab4a5939422802cf996ceb9d55ae29b19f3e0dc06db259f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

        
        $__internal_2f08567439df44eaab4a5939422802cf996ceb9d55ae29b19f3e0dc06db259f1->leave($__internal_2f08567439df44eaab4a5939422802cf996ceb9d55ae29b19f3e0dc06db259f1_prof);

        
        $__internal_8940c31d3220c249cacf861f992544a2486f3f66cfc56bf51200714299b3b4d6->leave($__internal_8940c31d3220c249cacf861f992544a2486f3f66cfc56bf51200714299b3b4d6_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Common:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 29,  181 => 25,  164 => 21,  147 => 16,  130 => 6,  119 => 30,  116 => 29,  107 => 27,  101 => 26,  99 => 25,  92 => 22,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  73 => 17,  71 => 16,  68 => 15,  48 => 13,  44 => 9,  37 => 6,  30 => 1,);
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
<html lang=\"fr\" class=\"gt-ie8\">
\t<head>
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <title>{{ 'base_page_title' |trans({}, 'messages') }}{% block title %}{% endblock %}</title>
            <meta name=\"robots\" content=\"noindex, nofollow\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            {% stylesheets
                    'bundles/front/bower_components/bootstrap/dist/css/bootstrap.min.css'
                    'bundles/front/bower_components/font-awesome/css/font-awesome.min.css'
                    filter='cssrewrite' %}
                    <link rel=\"stylesheet\" href=\"{{ asset_url }}\">
            {% endstylesheets %}
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
            {% block additional_stylesheets %}{% endblock %}
            <script src=\"{{ asset('bundles/front/bower_components/jquery/dist/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/front/bower_components/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/front/js/vue/dist/vue.js') }}\"></script>
            <script src=\"{{ asset('bundles/front/js/vue-resource/dist/vue-resource.js') }}\"></script>
            {% block javascripts_head %}{% endblock %}
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('bundles/front/images/favicon.ico') }}\" />
\t</head>
    <body>
        {% block body %}{% endblock %}
        {% javascripts %}
            <script type=\"text/javascript\" src=\"{{ asset_url }}?v{{ version }}\"></script>
        {% endjavascripts %}
        {% block javascripts_body %}{% endblock %}
    </body>
</html>", "FrontBundle:Common:base.html.twig", "E:\\wamp64\\www\\numberGame\\src\\FrontBundle/Resources/views/Common/base.html.twig");
    }
}
