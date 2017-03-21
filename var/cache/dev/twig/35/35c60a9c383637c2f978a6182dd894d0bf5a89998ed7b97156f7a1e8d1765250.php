<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_74fb0a289ee284102068424c723f0c9165921ea99780f219fe5af8b4b1f2a1b5 extends Twig_Template
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
        $__internal_8fabbcb4b00601783c689c8f1da767329fb376e00c0ae69632dfeda7f116ee38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fabbcb4b00601783c689c8f1da767329fb376e00c0ae69632dfeda7f116ee38->enter($__internal_8fabbcb4b00601783c689c8f1da767329fb376e00c0ae69632dfeda7f116ee38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_e50d63f9e6e8354c370f743942631ec713dc3e7115e7f9003e702e832f1b45b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50d63f9e6e8354c370f743942631ec713dc3e7115e7f9003e702e832f1b45b2->enter($__internal_e50d63f9e6e8354c370f743942631ec713dc3e7115e7f9003e702e832f1b45b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8fabbcb4b00601783c689c8f1da767329fb376e00c0ae69632dfeda7f116ee38->leave($__internal_8fabbcb4b00601783c689c8f1da767329fb376e00c0ae69632dfeda7f116ee38_prof);

        
        $__internal_e50d63f9e6e8354c370f743942631ec713dc3e7115e7f9003e702e832f1b45b2->leave($__internal_e50d63f9e6e8354c370f743942631ec713dc3e7115e7f9003e702e832f1b45b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
