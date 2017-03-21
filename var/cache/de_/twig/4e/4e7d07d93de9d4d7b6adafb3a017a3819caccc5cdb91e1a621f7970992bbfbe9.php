<?php

/* ::base.html.twig */
class __TwigTemplate_1c443716c5e8fd583fdb1048f4d3e829f3b6dec3f04873ecc326a0c55b78e7e5 extends Twig_Template
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
        $__internal_373eb757509a700f1a33e31c05021213d204564c495a074866f56303ba3adde2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_373eb757509a700f1a33e31c05021213d204564c495a074866f56303ba3adde2->enter($__internal_373eb757509a700f1a33e31c05021213d204564c495a074866f56303ba3adde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_028654fe519cfc58700c9eff03d3496be033940d2eff39c29a5fa55ca8ac05ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028654fe519cfc58700c9eff03d3496be033940d2eff39c29a5fa55ca8ac05ac->enter($__internal_028654fe519cfc58700c9eff03d3496be033940d2eff39c29a5fa55ca8ac05ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_373eb757509a700f1a33e31c05021213d204564c495a074866f56303ba3adde2->leave($__internal_373eb757509a700f1a33e31c05021213d204564c495a074866f56303ba3adde2_prof);

        
        $__internal_028654fe519cfc58700c9eff03d3496be033940d2eff39c29a5fa55ca8ac05ac->leave($__internal_028654fe519cfc58700c9eff03d3496be033940d2eff39c29a5fa55ca8ac05ac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9555118682fb3171f5836b6307ff2bb1fea342e5aa3ef0772bd18d540842526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9555118682fb3171f5836b6307ff2bb1fea342e5aa3ef0772bd18d540842526->enter($__internal_c9555118682fb3171f5836b6307ff2bb1fea342e5aa3ef0772bd18d540842526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a77c58abf8edf5bcb834359c97da78fffc67ac4ea28b81aa273834f18aaf0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a77c58abf8edf5bcb834359c97da78fffc67ac4ea28b81aa273834f18aaf0b2->enter($__internal_1a77c58abf8edf5bcb834359c97da78fffc67ac4ea28b81aa273834f18aaf0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1a77c58abf8edf5bcb834359c97da78fffc67ac4ea28b81aa273834f18aaf0b2->leave($__internal_1a77c58abf8edf5bcb834359c97da78fffc67ac4ea28b81aa273834f18aaf0b2_prof);

        
        $__internal_c9555118682fb3171f5836b6307ff2bb1fea342e5aa3ef0772bd18d540842526->leave($__internal_c9555118682fb3171f5836b6307ff2bb1fea342e5aa3ef0772bd18d540842526_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c05fa547730a1c3f004ee5c69dd791ecf145481dda29539753107f80249fd217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05fa547730a1c3f004ee5c69dd791ecf145481dda29539753107f80249fd217->enter($__internal_c05fa547730a1c3f004ee5c69dd791ecf145481dda29539753107f80249fd217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_346ad4665af2027cd5c99a8a94345ac86c51021b2d6e4e63a56e0d169ba99875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346ad4665af2027cd5c99a8a94345ac86c51021b2d6e4e63a56e0d169ba99875->enter($__internal_346ad4665af2027cd5c99a8a94345ac86c51021b2d6e4e63a56e0d169ba99875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_346ad4665af2027cd5c99a8a94345ac86c51021b2d6e4e63a56e0d169ba99875->leave($__internal_346ad4665af2027cd5c99a8a94345ac86c51021b2d6e4e63a56e0d169ba99875_prof);

        
        $__internal_c05fa547730a1c3f004ee5c69dd791ecf145481dda29539753107f80249fd217->leave($__internal_c05fa547730a1c3f004ee5c69dd791ecf145481dda29539753107f80249fd217_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c755df45c089e76eb5c85a9862bf0388285f04a4084eae255bc7c3782f5f1669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c755df45c089e76eb5c85a9862bf0388285f04a4084eae255bc7c3782f5f1669->enter($__internal_c755df45c089e76eb5c85a9862bf0388285f04a4084eae255bc7c3782f5f1669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5574709529e89f75b5fa5ba7874d9750a44588dce26c2466be07d6eca4599c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5574709529e89f75b5fa5ba7874d9750a44588dce26c2466be07d6eca4599c0d->enter($__internal_5574709529e89f75b5fa5ba7874d9750a44588dce26c2466be07d6eca4599c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5574709529e89f75b5fa5ba7874d9750a44588dce26c2466be07d6eca4599c0d->leave($__internal_5574709529e89f75b5fa5ba7874d9750a44588dce26c2466be07d6eca4599c0d_prof);

        
        $__internal_c755df45c089e76eb5c85a9862bf0388285f04a4084eae255bc7c3782f5f1669->leave($__internal_c755df45c089e76eb5c85a9862bf0388285f04a4084eae255bc7c3782f5f1669_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97b0a4b3ccd2375c39a5f6d3f5f2e2a379cf8d711646006f0c4c6b13f84e81be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b0a4b3ccd2375c39a5f6d3f5f2e2a379cf8d711646006f0c4c6b13f84e81be->enter($__internal_97b0a4b3ccd2375c39a5f6d3f5f2e2a379cf8d711646006f0c4c6b13f84e81be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c59fa95935bbd4a3323a01a25c8f40b73fc9023313394d6a9dc332d4232204e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59fa95935bbd4a3323a01a25c8f40b73fc9023313394d6a9dc332d4232204e4->enter($__internal_c59fa95935bbd4a3323a01a25c8f40b73fc9023313394d6a9dc332d4232204e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c59fa95935bbd4a3323a01a25c8f40b73fc9023313394d6a9dc332d4232204e4->leave($__internal_c59fa95935bbd4a3323a01a25c8f40b73fc9023313394d6a9dc332d4232204e4_prof);

        
        $__internal_97b0a4b3ccd2375c39a5f6d3f5f2e2a379cf8d711646006f0c4c6b13f84e81be->leave($__internal_97b0a4b3ccd2375c39a5f6d3f5f2e2a379cf8d711646006f0c4c6b13f84e81be_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "E:\\wamp64\\www\\numberGame\\app/Resources\\views/base.html.twig");
    }
}
