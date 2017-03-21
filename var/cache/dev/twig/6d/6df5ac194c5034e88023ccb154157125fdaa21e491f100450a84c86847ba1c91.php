<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_aa6df809cb808cb788cba5ab4cec1d0dc215c614086ee5df6bef8769dd930b52 extends Twig_Template
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
        $__internal_0367bd811beef7afda7f07fd45fb669b32e175fe13e8a631cc86a7b564c44bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0367bd811beef7afda7f07fd45fb669b32e175fe13e8a631cc86a7b564c44bc6->enter($__internal_0367bd811beef7afda7f07fd45fb669b32e175fe13e8a631cc86a7b564c44bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8aad363c183fc08448e7e2ebad7903a8e6c6c5a11f35537db4ea26f46d890231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aad363c183fc08448e7e2ebad7903a8e6c6c5a11f35537db4ea26f46d890231->enter($__internal_8aad363c183fc08448e7e2ebad7903a8e6c6c5a11f35537db4ea26f46d890231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0367bd811beef7afda7f07fd45fb669b32e175fe13e8a631cc86a7b564c44bc6->leave($__internal_0367bd811beef7afda7f07fd45fb669b32e175fe13e8a631cc86a7b564c44bc6_prof);

        
        $__internal_8aad363c183fc08448e7e2ebad7903a8e6c6c5a11f35537db4ea26f46d890231->leave($__internal_8aad363c183fc08448e7e2ebad7903a8e6c6c5a11f35537db4ea26f46d890231_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
