<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d2b260c1a101ebd32a0849a64e239165781e428f14671583e00b7dd0f2ddc1ca extends Twig_Template
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
        $__internal_fdd6f690093de988f00decee7c8cdf20b4bce489c8c9ca63ae25f7a7d2b691e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd6f690093de988f00decee7c8cdf20b4bce489c8c9ca63ae25f7a7d2b691e4->enter($__internal_fdd6f690093de988f00decee7c8cdf20b4bce489c8c9ca63ae25f7a7d2b691e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_3dae340f1b5bc252bee063b1df7bcd925bd08a2d8e2500f26653bc2fdd9cb275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dae340f1b5bc252bee063b1df7bcd925bd08a2d8e2500f26653bc2fdd9cb275->enter($__internal_3dae340f1b5bc252bee063b1df7bcd925bd08a2d8e2500f26653bc2fdd9cb275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fdd6f690093de988f00decee7c8cdf20b4bce489c8c9ca63ae25f7a7d2b691e4->leave($__internal_fdd6f690093de988f00decee7c8cdf20b4bce489c8c9ca63ae25f7a7d2b691e4_prof);

        
        $__internal_3dae340f1b5bc252bee063b1df7bcd925bd08a2d8e2500f26653bc2fdd9cb275->leave($__internal_3dae340f1b5bc252bee063b1df7bcd925bd08a2d8e2500f26653bc2fdd9cb275_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
