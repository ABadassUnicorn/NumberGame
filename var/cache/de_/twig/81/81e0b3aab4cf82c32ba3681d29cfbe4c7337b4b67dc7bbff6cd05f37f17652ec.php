<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_8dbf14dcc8b47269a69c62713a02fbb0f9adfd5d8428dde99bf4edd71ee29655 extends Twig_Template
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
        $__internal_817177476ceb08a523ae31e6346ce05e47289185373c97d438f29154b4a02c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_817177476ceb08a523ae31e6346ce05e47289185373c97d438f29154b4a02c31->enter($__internal_817177476ceb08a523ae31e6346ce05e47289185373c97d438f29154b4a02c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_72eb652e60f387ba6cf4940fd31274e19682c759dad3312a0171dc5c862f248b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72eb652e60f387ba6cf4940fd31274e19682c759dad3312a0171dc5c862f248b->enter($__internal_72eb652e60f387ba6cf4940fd31274e19682c759dad3312a0171dc5c862f248b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_817177476ceb08a523ae31e6346ce05e47289185373c97d438f29154b4a02c31->leave($__internal_817177476ceb08a523ae31e6346ce05e47289185373c97d438f29154b4a02c31_prof);

        
        $__internal_72eb652e60f387ba6cf4940fd31274e19682c759dad3312a0171dc5c862f248b->leave($__internal_72eb652e60f387ba6cf4940fd31274e19682c759dad3312a0171dc5c862f248b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
