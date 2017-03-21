<?php

/* FrontBundle:Common:base.html.twig */
class __TwigTemplate_4f7b3a63723483f375a65f727be021b3081179928e88185c861028a31eb33cc9 extends Twig_Template
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
        $__internal_d00de934879ea478c2c78fe0c723c7812f0231ec829bfb891b61fe48fe14c04d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d00de934879ea478c2c78fe0c723c7812f0231ec829bfb891b61fe48fe14c04d->enter($__internal_d00de934879ea478c2c78fe0c723c7812f0231ec829bfb891b61fe48fe14c04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Common:base.html.twig"));

        $__internal_2da36ac8646d510c4abc57ba83ba5d57708db739eeb6f33c5d364416ae0da6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da36ac8646d510c4abc57ba83ba5d57708db739eeb6f33c5d364416ae0da6ff->enter($__internal_2da36ac8646d510c4abc57ba83ba5d57708db739eeb6f33c5d364416ae0da6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Common:base.html.twig"));

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
        
        $__internal_d00de934879ea478c2c78fe0c723c7812f0231ec829bfb891b61fe48fe14c04d->leave($__internal_d00de934879ea478c2c78fe0c723c7812f0231ec829bfb891b61fe48fe14c04d_prof);

        
        $__internal_2da36ac8646d510c4abc57ba83ba5d57708db739eeb6f33c5d364416ae0da6ff->leave($__internal_2da36ac8646d510c4abc57ba83ba5d57708db739eeb6f33c5d364416ae0da6ff_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c270bf5c3b578f11c8423bb6cd0e44d304d0fb63ca2650003fcb21b0ea679716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c270bf5c3b578f11c8423bb6cd0e44d304d0fb63ca2650003fcb21b0ea679716->enter($__internal_c270bf5c3b578f11c8423bb6cd0e44d304d0fb63ca2650003fcb21b0ea679716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47a211adc7461cb05134a3cf94637d0e4754b0229f8e0bf191fc03de39ba6759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a211adc7461cb05134a3cf94637d0e4754b0229f8e0bf191fc03de39ba6759->enter($__internal_47a211adc7461cb05134a3cf94637d0e4754b0229f8e0bf191fc03de39ba6759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_47a211adc7461cb05134a3cf94637d0e4754b0229f8e0bf191fc03de39ba6759->leave($__internal_47a211adc7461cb05134a3cf94637d0e4754b0229f8e0bf191fc03de39ba6759_prof);

        
        $__internal_c270bf5c3b578f11c8423bb6cd0e44d304d0fb63ca2650003fcb21b0ea679716->leave($__internal_c270bf5c3b578f11c8423bb6cd0e44d304d0fb63ca2650003fcb21b0ea679716_prof);

    }

    // line 16
    public function block_additional_stylesheets($context, array $blocks = array())
    {
        $__internal_5222cf0d2772c2c634512b9985d59037f674b969d0856e90f28508179e8b10cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5222cf0d2772c2c634512b9985d59037f674b969d0856e90f28508179e8b10cc->enter($__internal_5222cf0d2772c2c634512b9985d59037f674b969d0856e90f28508179e8b10cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "additional_stylesheets"));

        $__internal_acb5e546473dbb48142046cd46487c3921d5410415242b4e75f6b9bec1018fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb5e546473dbb48142046cd46487c3921d5410415242b4e75f6b9bec1018fcb->enter($__internal_acb5e546473dbb48142046cd46487c3921d5410415242b4e75f6b9bec1018fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "additional_stylesheets"));

        
        $__internal_acb5e546473dbb48142046cd46487c3921d5410415242b4e75f6b9bec1018fcb->leave($__internal_acb5e546473dbb48142046cd46487c3921d5410415242b4e75f6b9bec1018fcb_prof);

        
        $__internal_5222cf0d2772c2c634512b9985d59037f674b969d0856e90f28508179e8b10cc->leave($__internal_5222cf0d2772c2c634512b9985d59037f674b969d0856e90f28508179e8b10cc_prof);

    }

    // line 21
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_399b58dc8b67dc7986696275412ccbd98efca1db9c5748f4ebdae52e23e44acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399b58dc8b67dc7986696275412ccbd98efca1db9c5748f4ebdae52e23e44acd->enter($__internal_399b58dc8b67dc7986696275412ccbd98efca1db9c5748f4ebdae52e23e44acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_c080085ceb61d2819f70c597269f84fcd8fe7bc6dd46e6cf6fb38ab02c809b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c080085ceb61d2819f70c597269f84fcd8fe7bc6dd46e6cf6fb38ab02c809b72->enter($__internal_c080085ceb61d2819f70c597269f84fcd8fe7bc6dd46e6cf6fb38ab02c809b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        
        $__internal_c080085ceb61d2819f70c597269f84fcd8fe7bc6dd46e6cf6fb38ab02c809b72->leave($__internal_c080085ceb61d2819f70c597269f84fcd8fe7bc6dd46e6cf6fb38ab02c809b72_prof);

        
        $__internal_399b58dc8b67dc7986696275412ccbd98efca1db9c5748f4ebdae52e23e44acd->leave($__internal_399b58dc8b67dc7986696275412ccbd98efca1db9c5748f4ebdae52e23e44acd_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_d159f811c239dae40c5cbf814a12deebee66f59569597247deda579fd0407187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d159f811c239dae40c5cbf814a12deebee66f59569597247deda579fd0407187->enter($__internal_d159f811c239dae40c5cbf814a12deebee66f59569597247deda579fd0407187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b6b5a38a661ff3b30f4644425fed9972ac5fbec18681e405e5da73153ee8680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6b5a38a661ff3b30f4644425fed9972ac5fbec18681e405e5da73153ee8680->enter($__internal_8b6b5a38a661ff3b30f4644425fed9972ac5fbec18681e405e5da73153ee8680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8b6b5a38a661ff3b30f4644425fed9972ac5fbec18681e405e5da73153ee8680->leave($__internal_8b6b5a38a661ff3b30f4644425fed9972ac5fbec18681e405e5da73153ee8680_prof);

        
        $__internal_d159f811c239dae40c5cbf814a12deebee66f59569597247deda579fd0407187->leave($__internal_d159f811c239dae40c5cbf814a12deebee66f59569597247deda579fd0407187_prof);

    }

    // line 29
    public function block_javascripts_body($context, array $blocks = array())
    {
        $__internal_566a38beb128fd0d8f09ea51336d54e590c3ad4a54ad17dabccb0dfa4d5315aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566a38beb128fd0d8f09ea51336d54e590c3ad4a54ad17dabccb0dfa4d5315aa->enter($__internal_566a38beb128fd0d8f09ea51336d54e590c3ad4a54ad17dabccb0dfa4d5315aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

        $__internal_618aa86e82f090b8cd4489a4f434647e5e837426715f8b5655cb264e558fee64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618aa86e82f090b8cd4489a4f434647e5e837426715f8b5655cb264e558fee64->enter($__internal_618aa86e82f090b8cd4489a4f434647e5e837426715f8b5655cb264e558fee64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

        
        $__internal_618aa86e82f090b8cd4489a4f434647e5e837426715f8b5655cb264e558fee64->leave($__internal_618aa86e82f090b8cd4489a4f434647e5e837426715f8b5655cb264e558fee64_prof);

        
        $__internal_566a38beb128fd0d8f09ea51336d54e590c3ad4a54ad17dabccb0dfa4d5315aa->leave($__internal_566a38beb128fd0d8f09ea51336d54e590c3ad4a54ad17dabccb0dfa4d5315aa_prof);

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
</html>", "FrontBundle:Common:base.html.twig", "C:\\workspaceProjet\\NumberGame\\src\\FrontBundle\\Resources\\views\\Common\\base.html.twig");
    }
}
