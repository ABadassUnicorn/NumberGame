<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_ec57cc17cdc3eda2203ed0e4c94ceacfe6116e07fa901075b9936712b646d85f extends Twig_Template
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
        $__internal_ddc6fcc825331a5e8224bad11311c2248a5af4c856e1b1c0d7304b81556e4a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc6fcc825331a5e8224bad11311c2248a5af4c856e1b1c0d7304b81556e4a88->enter($__internal_ddc6fcc825331a5e8224bad11311c2248a5af4c856e1b1c0d7304b81556e4a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_1676d37efe2d41f6dd3bdd66a47f89c909ca816f04fc437f36f44d836feea681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1676d37efe2d41f6dd3bdd66a47f89c909ca816f04fc437f36f44d836feea681->enter($__internal_1676d37efe2d41f6dd3bdd66a47f89c909ca816f04fc437f36f44d836feea681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ddc6fcc825331a5e8224bad11311c2248a5af4c856e1b1c0d7304b81556e4a88->leave($__internal_ddc6fcc825331a5e8224bad11311c2248a5af4c856e1b1c0d7304b81556e4a88_prof);

        
        $__internal_1676d37efe2d41f6dd3bdd66a47f89c909ca816f04fc437f36f44d836feea681->leave($__internal_1676d37efe2d41f6dd3bdd66a47f89c909ca816f04fc437f36f44d836feea681_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
