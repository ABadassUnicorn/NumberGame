<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_66aa60b4e3e3a66dd7ec27586512d97166e3b8efac4b83ea14b5e4d1a2cd3eef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d11ab1036ad9ddf35ec6ed2b59622965f20094fe5ce75ea71efc73dfec4597e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11ab1036ad9ddf35ec6ed2b59622965f20094fe5ce75ea71efc73dfec4597e6->enter($__internal_d11ab1036ad9ddf35ec6ed2b59622965f20094fe5ce75ea71efc73dfec4597e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e294dce93835600e8f4c2d482e2b945c7a5679d2506f7eadcdf2a34772ee3574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e294dce93835600e8f4c2d482e2b945c7a5679d2506f7eadcdf2a34772ee3574->enter($__internal_e294dce93835600e8f4c2d482e2b945c7a5679d2506f7eadcdf2a34772ee3574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d11ab1036ad9ddf35ec6ed2b59622965f20094fe5ce75ea71efc73dfec4597e6->leave($__internal_d11ab1036ad9ddf35ec6ed2b59622965f20094fe5ce75ea71efc73dfec4597e6_prof);

        
        $__internal_e294dce93835600e8f4c2d482e2b945c7a5679d2506f7eadcdf2a34772ee3574->leave($__internal_e294dce93835600e8f4c2d482e2b945c7a5679d2506f7eadcdf2a34772ee3574_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
