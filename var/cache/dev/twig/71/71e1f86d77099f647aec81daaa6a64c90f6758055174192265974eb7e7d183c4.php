<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_28244dbe656c595010e6726eb70e8e83969908a04bfa21e9622c15a14c8ede68 extends Twig_Template
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
        $__internal_eff1c98bded9311b018066173c54850d62d9424823fe0018e51f683763fa3fa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff1c98bded9311b018066173c54850d62d9424823fe0018e51f683763fa3fa0->enter($__internal_eff1c98bded9311b018066173c54850d62d9424823fe0018e51f683763fa3fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_2c8eefff193475d85f4c48f412ffd4a9152686651d3b2467da21be0a552e0bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8eefff193475d85f4c48f412ffd4a9152686651d3b2467da21be0a552e0bd0->enter($__internal_2c8eefff193475d85f4c48f412ffd4a9152686651d3b2467da21be0a552e0bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_eff1c98bded9311b018066173c54850d62d9424823fe0018e51f683763fa3fa0->leave($__internal_eff1c98bded9311b018066173c54850d62d9424823fe0018e51f683763fa3fa0_prof);

        
        $__internal_2c8eefff193475d85f4c48f412ffd4a9152686651d3b2467da21be0a552e0bd0->leave($__internal_2c8eefff193475d85f4c48f412ffd4a9152686651d3b2467da21be0a552e0bd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
