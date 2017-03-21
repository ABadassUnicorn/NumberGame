<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8a14b6e867078305ab5136f04e346c046334f32d76dfbb5a8ae08a1b9aa7ed75 extends Twig_Template
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
        $__internal_5964d5ce3ec9b1a26a242066dab57613fe242cef641463c26042b77fa978fd34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5964d5ce3ec9b1a26a242066dab57613fe242cef641463c26042b77fa978fd34->enter($__internal_5964d5ce3ec9b1a26a242066dab57613fe242cef641463c26042b77fa978fd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_36eaef3e16b0396608b7fed0f47778b09445c9b56bf6aa722eb2115c8ac0758c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36eaef3e16b0396608b7fed0f47778b09445c9b56bf6aa722eb2115c8ac0758c->enter($__internal_36eaef3e16b0396608b7fed0f47778b09445c9b56bf6aa722eb2115c8ac0758c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5964d5ce3ec9b1a26a242066dab57613fe242cef641463c26042b77fa978fd34->leave($__internal_5964d5ce3ec9b1a26a242066dab57613fe242cef641463c26042b77fa978fd34_prof);

        
        $__internal_36eaef3e16b0396608b7fed0f47778b09445c9b56bf6aa722eb2115c8ac0758c->leave($__internal_36eaef3e16b0396608b7fed0f47778b09445c9b56bf6aa722eb2115c8ac0758c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
