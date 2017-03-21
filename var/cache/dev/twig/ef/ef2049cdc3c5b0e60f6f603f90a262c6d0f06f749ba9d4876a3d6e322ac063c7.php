<?php

/* FrontBundle:Common:layout.html.twig */
class __TwigTemplate_24b2292cc4a41378aa6aa204dbd63046562b38e1c238a92126e812290ae71076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle:Common:base.html.twig", "FrontBundle:Common:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle:Common:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f72c49e31213600539a131d0e1f3fa0ee367e1db8ac7a8abc9470d2c776c5a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72c49e31213600539a131d0e1f3fa0ee367e1db8ac7a8abc9470d2c776c5a8c->enter($__internal_f72c49e31213600539a131d0e1f3fa0ee367e1db8ac7a8abc9470d2c776c5a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Common:layout.html.twig"));

        $__internal_edf2eef412ab075449b56240ac49e23107fb94882d5047124bd2d2ea5be25cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf2eef412ab075449b56240ac49e23107fb94882d5047124bd2d2ea5be25cdf->enter($__internal_edf2eef412ab075449b56240ac49e23107fb94882d5047124bd2d2ea5be25cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Common:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f72c49e31213600539a131d0e1f3fa0ee367e1db8ac7a8abc9470d2c776c5a8c->leave($__internal_f72c49e31213600539a131d0e1f3fa0ee367e1db8ac7a8abc9470d2c776c5a8c_prof);

        
        $__internal_edf2eef412ab075449b56240ac49e23107fb94882d5047124bd2d2ea5be25cdf->leave($__internal_edf2eef412ab075449b56240ac49e23107fb94882d5047124bd2d2ea5be25cdf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d444af661ba2ced39d2d821a5e34b792d2ca0b0ff057514d7332e74d0c499318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d444af661ba2ced39d2d821a5e34b792d2ca0b0ff057514d7332e74d0c499318->enter($__internal_d444af661ba2ced39d2d821a5e34b792d2ca0b0ff057514d7332e74d0c499318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dea3cfcba6225854c367c938b519ffae37a8758212b21a248fe188c9dc9b2347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea3cfcba6225854c367c938b519ffae37a8758212b21a248fe188c9dc9b2347->enter($__internal_dea3cfcba6225854c367c938b519ffae37a8758212b21a248fe188c9dc9b2347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_dea3cfcba6225854c367c938b519ffae37a8758212b21a248fe188c9dc9b2347->leave($__internal_dea3cfcba6225854c367c938b519ffae37a8758212b21a248fe188c9dc9b2347_prof);

        
        $__internal_d444af661ba2ced39d2d821a5e34b792d2ca0b0ff057514d7332e74d0c499318->leave($__internal_d444af661ba2ced39d2d821a5e34b792d2ca0b0ff057514d7332e74d0c499318_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09967857d36a2f40dcfcedb57a5e11fd6f729081b487371f61c808eef274d2da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09967857d36a2f40dcfcedb57a5e11fd6f729081b487371f61c808eef274d2da->enter($__internal_09967857d36a2f40dcfcedb57a5e11fd6f729081b487371f61c808eef274d2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23bfc9864d5cdb3d752a0d5fbe1cfc818febdd5cbad078fb3c01062a9e661666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23bfc9864d5cdb3d752a0d5fbe1cfc818febdd5cbad078fb3c01062a9e661666->enter($__internal_23bfc9864d5cdb3d752a0d5fbe1cfc818febdd5cbad078fb3c01062a9e661666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <header>
    </header>
    <main>
        <div class=\"wrapper\">           
            ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "        </div>
    </main>
    <footer>
        <div class=\"wrapper text-center\">
            <!-- legal mentions copyright and blablabla -->
        </div>
    </footer>
";
        
        $__internal_23bfc9864d5cdb3d752a0d5fbe1cfc818febdd5cbad078fb3c01062a9e661666->leave($__internal_23bfc9864d5cdb3d752a0d5fbe1cfc818febdd5cbad078fb3c01062a9e661666_prof);

        
        $__internal_09967857d36a2f40dcfcedb57a5e11fd6f729081b487371f61c808eef274d2da->leave($__internal_09967857d36a2f40dcfcedb57a5e11fd6f729081b487371f61c808eef274d2da_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_db232f7b7f719d47e08f55c7b8ffa0169c68d823ecc7f274fa64559e6007d6d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db232f7b7f719d47e08f55c7b8ffa0169c68d823ecc7f274fa64559e6007d6d6->enter($__internal_db232f7b7f719d47e08f55c7b8ffa0169c68d823ecc7f274fa64559e6007d6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7e41bb883c3e09524591a950203e256cbc439e157e369212ca3a35d1c7a5472a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e41bb883c3e09524591a950203e256cbc439e157e369212ca3a35d1c7a5472a->enter($__internal_7e41bb883c3e09524591a950203e256cbc439e157e369212ca3a35d1c7a5472a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7e41bb883c3e09524591a950203e256cbc439e157e369212ca3a35d1c7a5472a->leave($__internal_7e41bb883c3e09524591a950203e256cbc439e157e369212ca3a35d1c7a5472a_prof);

        
        $__internal_db232f7b7f719d47e08f55c7b8ffa0169c68d823ecc7f274fa64559e6007d6d6->leave($__internal_db232f7b7f719d47e08f55c7b8ffa0169c68d823ecc7f274fa64559e6007d6d6_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Common:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 10,  76 => 11,  74 => 10,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FrontBundle:Common:base.html.twig\" %}

{% block title %}{% endblock %}

{% block body %}
    <header>
    </header>
    <main>
        <div class=\"wrapper\">           
            {% block content %}{% endblock %}
        </div>
    </main>
    <footer>
        <div class=\"wrapper text-center\">
            <!-- legal mentions copyright and blablabla -->
        </div>
    </footer>
{% endblock %}", "FrontBundle:Common:layout.html.twig", "C:\\workspaceProjet\\NumberGame\\src\\FrontBundle/Resources/views/Common/layout.html.twig");
    }
}
