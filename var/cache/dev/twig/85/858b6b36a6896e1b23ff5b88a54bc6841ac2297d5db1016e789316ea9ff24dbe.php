<?php

/* FrontBundle:Common:base.html.twig */
class __TwigTemplate_8b4d7bd0e69d99a4bc43e51a83e16ecde3693104410bf1b4d82e06f9f864a0e9 extends Twig_Template
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
        $__internal_918611d13ade99487445b6112be32a320e85f6b6157ec5e10f23aff915afb462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_918611d13ade99487445b6112be32a320e85f6b6157ec5e10f23aff915afb462->enter($__internal_918611d13ade99487445b6112be32a320e85f6b6157ec5e10f23aff915afb462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Common:base.html.twig"));

        $__internal_39b4574c1c44371fdf139e8a381e2619dd100353b7581266b2f08ac456d96cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b4574c1c44371fdf139e8a381e2619dd100353b7581266b2f08ac456d96cbc->enter($__internal_39b4574c1c44371fdf139e8a381e2619dd100353b7581266b2f08ac456d96cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Common:base.html.twig"));

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
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
            // asset "b4dab46_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b4dab46_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b4dab46_font-awesome.min_2.css");
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        } else {
            // asset "b4dab46"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b4dab46") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b4dab46.css");
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
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
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "?v";
            echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
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
        
        $__internal_918611d13ade99487445b6112be32a320e85f6b6157ec5e10f23aff915afb462->leave($__internal_918611d13ade99487445b6112be32a320e85f6b6157ec5e10f23aff915afb462_prof);

        
        $__internal_39b4574c1c44371fdf139e8a381e2619dd100353b7581266b2f08ac456d96cbc->leave($__internal_39b4574c1c44371fdf139e8a381e2619dd100353b7581266b2f08ac456d96cbc_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f462d3dd811ab132d09607936b4216f63fc709e35435aee6d75991a69f65b1f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f462d3dd811ab132d09607936b4216f63fc709e35435aee6d75991a69f65b1f7->enter($__internal_f462d3dd811ab132d09607936b4216f63fc709e35435aee6d75991a69f65b1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8c566e8ef77707b6a30008b41a126f944df7e6a8b82ae4adf8fd3d20465597bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c566e8ef77707b6a30008b41a126f944df7e6a8b82ae4adf8fd3d20465597bd->enter($__internal_8c566e8ef77707b6a30008b41a126f944df7e6a8b82ae4adf8fd3d20465597bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8c566e8ef77707b6a30008b41a126f944df7e6a8b82ae4adf8fd3d20465597bd->leave($__internal_8c566e8ef77707b6a30008b41a126f944df7e6a8b82ae4adf8fd3d20465597bd_prof);

        
        $__internal_f462d3dd811ab132d09607936b4216f63fc709e35435aee6d75991a69f65b1f7->leave($__internal_f462d3dd811ab132d09607936b4216f63fc709e35435aee6d75991a69f65b1f7_prof);

    }

    // line 16
    public function block_additional_stylesheets($context, array $blocks = array())
    {
        $__internal_b6929dfe194c7341e817f94aa984ea2b957cc2808d85e557a325bd0cc87a9ccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6929dfe194c7341e817f94aa984ea2b957cc2808d85e557a325bd0cc87a9ccf->enter($__internal_b6929dfe194c7341e817f94aa984ea2b957cc2808d85e557a325bd0cc87a9ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "additional_stylesheets"));

        $__internal_83dba7375c5944b5a63de45892e8dc22aaef64909059240d8b2aeaa17ff1a613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83dba7375c5944b5a63de45892e8dc22aaef64909059240d8b2aeaa17ff1a613->enter($__internal_83dba7375c5944b5a63de45892e8dc22aaef64909059240d8b2aeaa17ff1a613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "additional_stylesheets"));

        
        $__internal_83dba7375c5944b5a63de45892e8dc22aaef64909059240d8b2aeaa17ff1a613->leave($__internal_83dba7375c5944b5a63de45892e8dc22aaef64909059240d8b2aeaa17ff1a613_prof);

        
        $__internal_b6929dfe194c7341e817f94aa984ea2b957cc2808d85e557a325bd0cc87a9ccf->leave($__internal_b6929dfe194c7341e817f94aa984ea2b957cc2808d85e557a325bd0cc87a9ccf_prof);

    }

    // line 21
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_81a7f1c4ef100700d4862a2a978116b6122e8b96c34f0b079a7eefa29edd28cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a7f1c4ef100700d4862a2a978116b6122e8b96c34f0b079a7eefa29edd28cf->enter($__internal_81a7f1c4ef100700d4862a2a978116b6122e8b96c34f0b079a7eefa29edd28cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_c257c76b2db6634b28bd3039bd054061fc4932b194b49a61020ce753b3224ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c257c76b2db6634b28bd3039bd054061fc4932b194b49a61020ce753b3224ac5->enter($__internal_c257c76b2db6634b28bd3039bd054061fc4932b194b49a61020ce753b3224ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        
        $__internal_c257c76b2db6634b28bd3039bd054061fc4932b194b49a61020ce753b3224ac5->leave($__internal_c257c76b2db6634b28bd3039bd054061fc4932b194b49a61020ce753b3224ac5_prof);

        
        $__internal_81a7f1c4ef100700d4862a2a978116b6122e8b96c34f0b079a7eefa29edd28cf->leave($__internal_81a7f1c4ef100700d4862a2a978116b6122e8b96c34f0b079a7eefa29edd28cf_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e435468febefb797df12ab72fe02e5194cbcdd49993ac87ce7396f50ec887dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e435468febefb797df12ab72fe02e5194cbcdd49993ac87ce7396f50ec887dc->enter($__internal_1e435468febefb797df12ab72fe02e5194cbcdd49993ac87ce7396f50ec887dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_51290ff70f8c6557dbe5cf1352a105f74656e874675ad26c9f39e3d032b68b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51290ff70f8c6557dbe5cf1352a105f74656e874675ad26c9f39e3d032b68b50->enter($__internal_51290ff70f8c6557dbe5cf1352a105f74656e874675ad26c9f39e3d032b68b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_51290ff70f8c6557dbe5cf1352a105f74656e874675ad26c9f39e3d032b68b50->leave($__internal_51290ff70f8c6557dbe5cf1352a105f74656e874675ad26c9f39e3d032b68b50_prof);

        
        $__internal_1e435468febefb797df12ab72fe02e5194cbcdd49993ac87ce7396f50ec887dc->leave($__internal_1e435468febefb797df12ab72fe02e5194cbcdd49993ac87ce7396f50ec887dc_prof);

    }

    // line 29
    public function block_javascripts_body($context, array $blocks = array())
    {
        $__internal_9472125220ee09b8dda1abad87f55cea048fa108d61f763fb4082129526372e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9472125220ee09b8dda1abad87f55cea048fa108d61f763fb4082129526372e6->enter($__internal_9472125220ee09b8dda1abad87f55cea048fa108d61f763fb4082129526372e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

        $__internal_b254f94602d740e77c4d650d87c09038b0e52ba6f9707c5f42fab89d28aba02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b254f94602d740e77c4d650d87c09038b0e52ba6f9707c5f42fab89d28aba02b->enter($__internal_b254f94602d740e77c4d650d87c09038b0e52ba6f9707c5f42fab89d28aba02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

        
        $__internal_b254f94602d740e77c4d650d87c09038b0e52ba6f9707c5f42fab89d28aba02b->leave($__internal_b254f94602d740e77c4d650d87c09038b0e52ba6f9707c5f42fab89d28aba02b_prof);

        
        $__internal_9472125220ee09b8dda1abad87f55cea048fa108d61f763fb4082129526372e6->leave($__internal_9472125220ee09b8dda1abad87f55cea048fa108d61f763fb4082129526372e6_prof);

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
</html>", "FrontBundle:Common:base.html.twig", "C:\\workspaceProjet\\NumberGame\\src\\FrontBundle/Resources/views/Common/base.html.twig");
    }
}
