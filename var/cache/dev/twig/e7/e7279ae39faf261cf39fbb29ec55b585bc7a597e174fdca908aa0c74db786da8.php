<?php

/* ::base.html.twig */
class __TwigTemplate_984091c4af6d708be1f8256dfc13d9520c7bc9415d36ba62b763a46cafce538b extends Twig_Template
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
        $__internal_a5bc171ef05361c0375c36757766c322a6120a4117a22b6c6f6826f1f6d99f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5bc171ef05361c0375c36757766c322a6120a4117a22b6c6f6826f1f6d99f2e->enter($__internal_a5bc171ef05361c0375c36757766c322a6120a4117a22b6c6f6826f1f6d99f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_820369184c848bbb62415fc0ffb8fe7745744512a9f19e60f8e5198357c8037c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820369184c848bbb62415fc0ffb8fe7745744512a9f19e60f8e5198357c8037c->enter($__internal_820369184c848bbb62415fc0ffb8fe7745744512a9f19e60f8e5198357c8037c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a5bc171ef05361c0375c36757766c322a6120a4117a22b6c6f6826f1f6d99f2e->leave($__internal_a5bc171ef05361c0375c36757766c322a6120a4117a22b6c6f6826f1f6d99f2e_prof);

        
        $__internal_820369184c848bbb62415fc0ffb8fe7745744512a9f19e60f8e5198357c8037c->leave($__internal_820369184c848bbb62415fc0ffb8fe7745744512a9f19e60f8e5198357c8037c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_079f26801eecebf7682aff3e532e5636f62b0041e708a05aca2049e87ce77b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_079f26801eecebf7682aff3e532e5636f62b0041e708a05aca2049e87ce77b7e->enter($__internal_079f26801eecebf7682aff3e532e5636f62b0041e708a05aca2049e87ce77b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d483af70f82a4e08fda831b7ce47852491e386a86a7ec13161b3d1d2fe91e8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d483af70f82a4e08fda831b7ce47852491e386a86a7ec13161b3d1d2fe91e8a6->enter($__internal_d483af70f82a4e08fda831b7ce47852491e386a86a7ec13161b3d1d2fe91e8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d483af70f82a4e08fda831b7ce47852491e386a86a7ec13161b3d1d2fe91e8a6->leave($__internal_d483af70f82a4e08fda831b7ce47852491e386a86a7ec13161b3d1d2fe91e8a6_prof);

        
        $__internal_079f26801eecebf7682aff3e532e5636f62b0041e708a05aca2049e87ce77b7e->leave($__internal_079f26801eecebf7682aff3e532e5636f62b0041e708a05aca2049e87ce77b7e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f957858474b650dc5b5cba44557316d24725164c6e99dbc2f745b21049fb312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f957858474b650dc5b5cba44557316d24725164c6e99dbc2f745b21049fb312->enter($__internal_9f957858474b650dc5b5cba44557316d24725164c6e99dbc2f745b21049fb312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_204fc1aa0e9e8c2476babaa7578d0cb708ab1b81faefa2ba83f69f31a282602d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204fc1aa0e9e8c2476babaa7578d0cb708ab1b81faefa2ba83f69f31a282602d->enter($__internal_204fc1aa0e9e8c2476babaa7578d0cb708ab1b81faefa2ba83f69f31a282602d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_204fc1aa0e9e8c2476babaa7578d0cb708ab1b81faefa2ba83f69f31a282602d->leave($__internal_204fc1aa0e9e8c2476babaa7578d0cb708ab1b81faefa2ba83f69f31a282602d_prof);

        
        $__internal_9f957858474b650dc5b5cba44557316d24725164c6e99dbc2f745b21049fb312->leave($__internal_9f957858474b650dc5b5cba44557316d24725164c6e99dbc2f745b21049fb312_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_430621aff6ddf3a7ae6188efc3aba23c1f8fe1de5377633b15960945d29dbe7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430621aff6ddf3a7ae6188efc3aba23c1f8fe1de5377633b15960945d29dbe7f->enter($__internal_430621aff6ddf3a7ae6188efc3aba23c1f8fe1de5377633b15960945d29dbe7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_036e931bdc4ff259de464dc33ec60377436178e65e565b62e6163964528c4622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036e931bdc4ff259de464dc33ec60377436178e65e565b62e6163964528c4622->enter($__internal_036e931bdc4ff259de464dc33ec60377436178e65e565b62e6163964528c4622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_036e931bdc4ff259de464dc33ec60377436178e65e565b62e6163964528c4622->leave($__internal_036e931bdc4ff259de464dc33ec60377436178e65e565b62e6163964528c4622_prof);

        
        $__internal_430621aff6ddf3a7ae6188efc3aba23c1f8fe1de5377633b15960945d29dbe7f->leave($__internal_430621aff6ddf3a7ae6188efc3aba23c1f8fe1de5377633b15960945d29dbe7f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8a53cd371e91aeedf7084268123040fdfab4840e722430ca77f88d7f2d0d7345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a53cd371e91aeedf7084268123040fdfab4840e722430ca77f88d7f2d0d7345->enter($__internal_8a53cd371e91aeedf7084268123040fdfab4840e722430ca77f88d7f2d0d7345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e1e2380a503af9d2a5e36db4cd4dce213778b9446cbd9f33062fef45051e0e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e2380a503af9d2a5e36db4cd4dce213778b9446cbd9f33062fef45051e0e06->enter($__internal_e1e2380a503af9d2a5e36db4cd4dce213778b9446cbd9f33062fef45051e0e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e1e2380a503af9d2a5e36db4cd4dce213778b9446cbd9f33062fef45051e0e06->leave($__internal_e1e2380a503af9d2a5e36db4cd4dce213778b9446cbd9f33062fef45051e0e06_prof);

        
        $__internal_8a53cd371e91aeedf7084268123040fdfab4840e722430ca77f88d7f2d0d7345->leave($__internal_8a53cd371e91aeedf7084268123040fdfab4840e722430ca77f88d7f2d0d7345_prof);

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
", "::base.html.twig", "C:\\workspaceProjet\\NumberGame\\app/Resources\\views/base.html.twig");
    }
}
