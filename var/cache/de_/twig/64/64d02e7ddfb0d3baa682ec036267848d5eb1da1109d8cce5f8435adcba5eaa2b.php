<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_715209021586abd127a5b07741957fa427f51b82ed6e6c89cdff6b07bdc99298 extends Twig_Template
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
        $__internal_49f449a063f980a0cae01c7a3c3aa2b701155c4d8ab2674933cf40f335c64c8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49f449a063f980a0cae01c7a3c3aa2b701155c4d8ab2674933cf40f335c64c8f->enter($__internal_49f449a063f980a0cae01c7a3c3aa2b701155c4d8ab2674933cf40f335c64c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a866b5ef3e3288e9d345db8e4c2c3457d5158237858ac02d6bfa930cf64f0d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a866b5ef3e3288e9d345db8e4c2c3457d5158237858ac02d6bfa930cf64f0d8e->enter($__internal_a866b5ef3e3288e9d345db8e4c2c3457d5158237858ac02d6bfa930cf64f0d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_49f449a063f980a0cae01c7a3c3aa2b701155c4d8ab2674933cf40f335c64c8f->leave($__internal_49f449a063f980a0cae01c7a3c3aa2b701155c4d8ab2674933cf40f335c64c8f_prof);

        
        $__internal_a866b5ef3e3288e9d345db8e4c2c3457d5158237858ac02d6bfa930cf64f0d8e->leave($__internal_a866b5ef3e3288e9d345db8e4c2c3457d5158237858ac02d6bfa930cf64f0d8e_prof);

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
", "@Framework/Form/choice_attributes.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
