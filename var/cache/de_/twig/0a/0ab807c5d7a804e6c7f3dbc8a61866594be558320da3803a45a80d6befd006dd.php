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
        $__internal_92129bfe09974ed1b5da57a4e898b8cbed88987c1ac4288253d8e399e5e6155d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92129bfe09974ed1b5da57a4e898b8cbed88987c1ac4288253d8e399e5e6155d->enter($__internal_92129bfe09974ed1b5da57a4e898b8cbed88987c1ac4288253d8e399e5e6155d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Common:base.html.twig"));

        $__internal_6213551b88b4946f8857d6f824b8a54704052e8c469bfc8b4e5bf314c0152951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6213551b88b4946f8857d6f824b8a54704052e8c469bfc8b4e5bf314c0152951->enter($__internal_6213551b88b4946f8857d6f824b8a54704052e8c469bfc8b4e5bf314c0152951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Common:base.html.twig"));

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
        
        $__internal_92129bfe09974ed1b5da57a4e898b8cbed88987c1ac4288253d8e399e5e6155d->leave($__internal_92129bfe09974ed1b5da57a4e898b8cbed88987c1ac4288253d8e399e5e6155d_prof);

        
        $__internal_6213551b88b4946f8857d6f824b8a54704052e8c469bfc8b4e5bf314c0152951->leave($__internal_6213551b88b4946f8857d6f824b8a54704052e8c469bfc8b4e5bf314c0152951_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fe3a0760a04fd28c111c9d99fd74ac55a587937fa31dd574ec3e0b99664b5fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe3a0760a04fd28c111c9d99fd74ac55a587937fa31dd574ec3e0b99664b5fa->enter($__internal_0fe3a0760a04fd28c111c9d99fd74ac55a587937fa31dd574ec3e0b99664b5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6dc786b836e0254f2acd403a2c3b30da0471e5bd4d265088723b247a0dc5f3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc786b836e0254f2acd403a2c3b30da0471e5bd4d265088723b247a0dc5f3cc->enter($__internal_6dc786b836e0254f2acd403a2c3b30da0471e5bd4d265088723b247a0dc5f3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6dc786b836e0254f2acd403a2c3b30da0471e5bd4d265088723b247a0dc5f3cc->leave($__internal_6dc786b836e0254f2acd403a2c3b30da0471e5bd4d265088723b247a0dc5f3cc_prof);

        
        $__internal_0fe3a0760a04fd28c111c9d99fd74ac55a587937fa31dd574ec3e0b99664b5fa->leave($__internal_0fe3a0760a04fd28c111c9d99fd74ac55a587937fa31dd574ec3e0b99664b5fa_prof);

    }

    // line 16
    public function block_additional_stylesheets($context, array $blocks = array())
    {
        $__internal_decac11ff1e538ebb55272101b7f78c54a3bd3021961334bb95da9f9af5145bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_decac11ff1e538ebb55272101b7f78c54a3bd3021961334bb95da9f9af5145bf->enter($__internal_decac11ff1e538ebb55272101b7f78c54a3bd3021961334bb95da9f9af5145bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "additional_stylesheets"));

        $__internal_5d93ca42672f12e5b014479b4f5ab228604670d967624ec61854404914e31d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d93ca42672f12e5b014479b4f5ab228604670d967624ec61854404914e31d2e->enter($__internal_5d93ca42672f12e5b014479b4f5ab228604670d967624ec61854404914e31d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "additional_stylesheets"));

        
        $__internal_5d93ca42672f12e5b014479b4f5ab228604670d967624ec61854404914e31d2e->leave($__internal_5d93ca42672f12e5b014479b4f5ab228604670d967624ec61854404914e31d2e_prof);

        
        $__internal_decac11ff1e538ebb55272101b7f78c54a3bd3021961334bb95da9f9af5145bf->leave($__internal_decac11ff1e538ebb55272101b7f78c54a3bd3021961334bb95da9f9af5145bf_prof);

    }

    // line 21
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_8019c2516b7cbf38b3b2e7a7b101b39aa7ad612a73cf00a5afc99644d0fe2d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8019c2516b7cbf38b3b2e7a7b101b39aa7ad612a73cf00a5afc99644d0fe2d7a->enter($__internal_8019c2516b7cbf38b3b2e7a7b101b39aa7ad612a73cf00a5afc99644d0fe2d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_db6d16cbdab277b216da5257af0ef66e6133bcb7ce5cd5b1391f7e9001b1c513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6d16cbdab277b216da5257af0ef66e6133bcb7ce5cd5b1391f7e9001b1c513->enter($__internal_db6d16cbdab277b216da5257af0ef66e6133bcb7ce5cd5b1391f7e9001b1c513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        
        $__internal_db6d16cbdab277b216da5257af0ef66e6133bcb7ce5cd5b1391f7e9001b1c513->leave($__internal_db6d16cbdab277b216da5257af0ef66e6133bcb7ce5cd5b1391f7e9001b1c513_prof);

        
        $__internal_8019c2516b7cbf38b3b2e7a7b101b39aa7ad612a73cf00a5afc99644d0fe2d7a->leave($__internal_8019c2516b7cbf38b3b2e7a7b101b39aa7ad612a73cf00a5afc99644d0fe2d7a_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_3adccf6189da801d058c0b95e079e85b4c594adadbd8b446d42e7d5b302ddcf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3adccf6189da801d058c0b95e079e85b4c594adadbd8b446d42e7d5b302ddcf3->enter($__internal_3adccf6189da801d058c0b95e079e85b4c594adadbd8b446d42e7d5b302ddcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8fa0f623ae0ed04dcd42f639c8536bbcc9fa207e0a32c1791048b577f380d003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa0f623ae0ed04dcd42f639c8536bbcc9fa207e0a32c1791048b577f380d003->enter($__internal_8fa0f623ae0ed04dcd42f639c8536bbcc9fa207e0a32c1791048b577f380d003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8fa0f623ae0ed04dcd42f639c8536bbcc9fa207e0a32c1791048b577f380d003->leave($__internal_8fa0f623ae0ed04dcd42f639c8536bbcc9fa207e0a32c1791048b577f380d003_prof);

        
        $__internal_3adccf6189da801d058c0b95e079e85b4c594adadbd8b446d42e7d5b302ddcf3->leave($__internal_3adccf6189da801d058c0b95e079e85b4c594adadbd8b446d42e7d5b302ddcf3_prof);

    }

    // line 29
    public function block_javascripts_body($context, array $blocks = array())
    {
        $__internal_6b296ae41f6a635838bb5f3cf69204cd26e7dcc57f023d6c96c7fb8aa6ff6977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b296ae41f6a635838bb5f3cf69204cd26e7dcc57f023d6c96c7fb8aa6ff6977->enter($__internal_6b296ae41f6a635838bb5f3cf69204cd26e7dcc57f023d6c96c7fb8aa6ff6977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

        $__internal_2548f40fe4cd09fbd61fc99c20336b78edf340dd9d4dca1dee602e315ba299d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2548f40fe4cd09fbd61fc99c20336b78edf340dd9d4dca1dee602e315ba299d8->enter($__internal_2548f40fe4cd09fbd61fc99c20336b78edf340dd9d4dca1dee602e315ba299d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

        
        $__internal_2548f40fe4cd09fbd61fc99c20336b78edf340dd9d4dca1dee602e315ba299d8->leave($__internal_2548f40fe4cd09fbd61fc99c20336b78edf340dd9d4dca1dee602e315ba299d8_prof);

        
        $__internal_6b296ae41f6a635838bb5f3cf69204cd26e7dcc57f023d6c96c7fb8aa6ff6977->leave($__internal_6b296ae41f6a635838bb5f3cf69204cd26e7dcc57f023d6c96c7fb8aa6ff6977_prof);

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
