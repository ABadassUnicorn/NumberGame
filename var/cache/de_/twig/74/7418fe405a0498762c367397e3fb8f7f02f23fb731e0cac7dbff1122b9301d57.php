<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_e7bd8a8f0914763a9111e268bb5461f0c2e09bc0c35efadb56fd4e41e908c583 extends Twig_Template
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
        $__internal_3c966588ff79b13a64d90ed2b8c2fa89fc5a687547ac26b670333106e34ed20a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c966588ff79b13a64d90ed2b8c2fa89fc5a687547ac26b670333106e34ed20a->enter($__internal_3c966588ff79b13a64d90ed2b8c2fa89fc5a687547ac26b670333106e34ed20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f06f3ba83f2d9ce374fe97ddf20baef713a5b394c3a15c5d12655bd4b6b41c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06f3ba83f2d9ce374fe97ddf20baef713a5b394c3a15c5d12655bd4b6b41c12->enter($__internal_f06f3ba83f2d9ce374fe97ddf20baef713a5b394c3a15c5d12655bd4b6b41c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_3c966588ff79b13a64d90ed2b8c2fa89fc5a687547ac26b670333106e34ed20a->leave($__internal_3c966588ff79b13a64d90ed2b8c2fa89fc5a687547ac26b670333106e34ed20a_prof);

        
        $__internal_f06f3ba83f2d9ce374fe97ddf20baef713a5b394c3a15c5d12655bd4b6b41c12->leave($__internal_f06f3ba83f2d9ce374fe97ddf20baef713a5b394c3a15c5d12655bd4b6b41c12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
