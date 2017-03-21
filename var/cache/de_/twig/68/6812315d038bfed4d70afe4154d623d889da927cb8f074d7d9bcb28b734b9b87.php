<?php

/* @Front/Common/base.html.twig */
class __TwigTemplate_a1e5d3b91c2d3346fe52622c1b40d8ac87e02e83de5795357f111d5adaf077a1 extends Twig_Template
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
        $__internal_90f508cd8ac2421cca56c8ca39fbc074f869336f5f7919e257e5fb5f44e8e6ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f508cd8ac2421cca56c8ca39fbc074f869336f5f7919e257e5fb5f44e8e6ff->enter($__internal_90f508cd8ac2421cca56c8ca39fbc074f869336f5f7919e257e5fb5f44e8e6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/Common/base.html.twig"));

        $__internal_fc26093965a8ac30b41a626f2718a9c462e15130b465426c0da17665babebcb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc26093965a8ac30b41a626f2718a9c462e15130b465426c0da17665babebcb1->enter($__internal_fc26093965a8ac30b41a626f2718a9c462e15130b465426c0da17665babebcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/Common/base.html.twig"));

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
        
        $__internal_90f508cd8ac2421cca56c8ca39fbc074f869336f5f7919e257e5fb5f44e8e6ff->leave($__internal_90f508cd8ac2421cca56c8ca39fbc074f869336f5f7919e257e5fb5f44e8e6ff_prof);

        
        $__internal_fc26093965a8ac30b41a626f2718a9c462e15130b465426c0da17665babebcb1->leave($__internal_fc26093965a8ac30b41a626f2718a9c462e15130b465426c0da17665babebcb1_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_887ebe1ef5e9bea913fdba8fd658f5d51a35bd5c1850f3227b6c28bc3a58d537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887ebe1ef5e9bea913fdba8fd658f5d51a35bd5c1850f3227b6c28bc3a58d537->enter($__internal_887ebe1ef5e9bea913fdba8fd658f5d51a35bd5c1850f3227b6c28bc3a58d537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a3843b367ed9d55454f6798aa9cf023461ebbc2db947147adbdaf9a70c63c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3843b367ed9d55454f6798aa9cf023461ebbc2db947147adbdaf9a70c63c0a->enter($__internal_4a3843b367ed9d55454f6798aa9cf023461ebbc2db947147adbdaf9a70c63c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4a3843b367ed9d55454f6798aa9cf023461ebbc2db947147adbdaf9a70c63c0a->leave($__internal_4a3843b367ed9d55454f6798aa9cf023461ebbc2db947147adbdaf9a70c63c0a_prof);

        
        $__internal_887ebe1ef5e9bea913fdba8fd658f5d51a35bd5c1850f3227b6c28bc3a58d537->leave($__internal_887ebe1ef5e9bea913fdba8fd658f5d51a35bd5c1850f3227b6c28bc3a58d537_prof);

    }

    // line 16
    public function block_additional_stylesheets($context, array $blocks = array())
    {
        $__internal_bd1491da8be20d1caac059b54798fa0319edb444c121815e35692a98b74699ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1491da8be20d1caac059b54798fa0319edb444c121815e35692a98b74699ad->enter($__internal_bd1491da8be20d1caac059b54798fa0319edb444c121815e35692a98b74699ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "additional_stylesheets"));

        $__internal_0924b3659acb997f9ceb7fe698aef74d087b36e694285adb0c173deadefda94f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0924b3659acb997f9ceb7fe698aef74d087b36e694285adb0c173deadefda94f->enter($__internal_0924b3659acb997f9ceb7fe698aef74d087b36e694285adb0c173deadefda94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "additional_stylesheets"));

        
        $__internal_0924b3659acb997f9ceb7fe698aef74d087b36e694285adb0c173deadefda94f->leave($__internal_0924b3659acb997f9ceb7fe698aef74d087b36e694285adb0c173deadefda94f_prof);

        
        $__internal_bd1491da8be20d1caac059b54798fa0319edb444c121815e35692a98b74699ad->leave($__internal_bd1491da8be20d1caac059b54798fa0319edb444c121815e35692a98b74699ad_prof);

    }

    // line 21
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_f11e12f0202913d9aa1899b6e64ecbfede2a6f3cdfc0f9e18b2e37f0bd829064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f11e12f0202913d9aa1899b6e64ecbfede2a6f3cdfc0f9e18b2e37f0bd829064->enter($__internal_f11e12f0202913d9aa1899b6e64ecbfede2a6f3cdfc0f9e18b2e37f0bd829064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_e3637ac1eccf1a12862c8e513ae11a79e48f49ea36f6b52e28a697f5f8a60db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3637ac1eccf1a12862c8e513ae11a79e48f49ea36f6b52e28a697f5f8a60db7->enter($__internal_e3637ac1eccf1a12862c8e513ae11a79e48f49ea36f6b52e28a697f5f8a60db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        
        $__internal_e3637ac1eccf1a12862c8e513ae11a79e48f49ea36f6b52e28a697f5f8a60db7->leave($__internal_e3637ac1eccf1a12862c8e513ae11a79e48f49ea36f6b52e28a697f5f8a60db7_prof);

        
        $__internal_f11e12f0202913d9aa1899b6e64ecbfede2a6f3cdfc0f9e18b2e37f0bd829064->leave($__internal_f11e12f0202913d9aa1899b6e64ecbfede2a6f3cdfc0f9e18b2e37f0bd829064_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f789a70daee919761d86175c9266ac14c79de49a82807454b8220bad48ddc04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f789a70daee919761d86175c9266ac14c79de49a82807454b8220bad48ddc04->enter($__internal_0f789a70daee919761d86175c9266ac14c79de49a82807454b8220bad48ddc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5749894ab3fe46ec5a81b1f4fb307a69fc0a37d1c4538e4b3292bc183ffc7a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5749894ab3fe46ec5a81b1f4fb307a69fc0a37d1c4538e4b3292bc183ffc7a6f->enter($__internal_5749894ab3fe46ec5a81b1f4fb307a69fc0a37d1c4538e4b3292bc183ffc7a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5749894ab3fe46ec5a81b1f4fb307a69fc0a37d1c4538e4b3292bc183ffc7a6f->leave($__internal_5749894ab3fe46ec5a81b1f4fb307a69fc0a37d1c4538e4b3292bc183ffc7a6f_prof);

        
        $__internal_0f789a70daee919761d86175c9266ac14c79de49a82807454b8220bad48ddc04->leave($__internal_0f789a70daee919761d86175c9266ac14c79de49a82807454b8220bad48ddc04_prof);

    }

    // line 29
    public function block_javascripts_body($context, array $blocks = array())
    {
        $__internal_75089e3e13d44c936b6b90ddd986f17b31443c5b12cde5df2553c04847a71602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75089e3e13d44c936b6b90ddd986f17b31443c5b12cde5df2553c04847a71602->enter($__internal_75089e3e13d44c936b6b90ddd986f17b31443c5b12cde5df2553c04847a71602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

        $__internal_9c40daf5d1dac0cd2762703908e13793409f1bc904d30626b7bef6d96806bfa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c40daf5d1dac0cd2762703908e13793409f1bc904d30626b7bef6d96806bfa5->enter($__internal_9c40daf5d1dac0cd2762703908e13793409f1bc904d30626b7bef6d96806bfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

        
        $__internal_9c40daf5d1dac0cd2762703908e13793409f1bc904d30626b7bef6d96806bfa5->leave($__internal_9c40daf5d1dac0cd2762703908e13793409f1bc904d30626b7bef6d96806bfa5_prof);

        
        $__internal_75089e3e13d44c936b6b90ddd986f17b31443c5b12cde5df2553c04847a71602->leave($__internal_75089e3e13d44c936b6b90ddd986f17b31443c5b12cde5df2553c04847a71602_prof);

    }

    public function getTemplateName()
    {
        return "@Front/Common/base.html.twig";
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
</html>", "@Front/Common/base.html.twig", "E:\\wamp64\\www\\numberGame\\src\\FrontBundle\\Resources\\views\\Common\\base.html.twig");
    }
}
