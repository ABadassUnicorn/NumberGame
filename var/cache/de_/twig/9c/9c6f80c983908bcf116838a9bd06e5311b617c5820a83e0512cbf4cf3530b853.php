<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f779fa01925337ed96c12bec56d2c0ca066f703f8d9ed965665e906e163233fa extends Twig_Template
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
        $__internal_a49dc580ef60d0b2d5cd77cd6da7b041d26a9edb93fd90226357596bffa0d1ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49dc580ef60d0b2d5cd77cd6da7b041d26a9edb93fd90226357596bffa0d1ce->enter($__internal_a49dc580ef60d0b2d5cd77cd6da7b041d26a9edb93fd90226357596bffa0d1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_93ec6661231e035c5e71792053e5a57e0c3eb3e118dca7cab6649200e1a58a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ec6661231e035c5e71792053e5a57e0c3eb3e118dca7cab6649200e1a58a55->enter($__internal_93ec6661231e035c5e71792053e5a57e0c3eb3e118dca7cab6649200e1a58a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a49dc580ef60d0b2d5cd77cd6da7b041d26a9edb93fd90226357596bffa0d1ce->leave($__internal_a49dc580ef60d0b2d5cd77cd6da7b041d26a9edb93fd90226357596bffa0d1ce_prof);

        
        $__internal_93ec6661231e035c5e71792053e5a57e0c3eb3e118dca7cab6649200e1a58a55->leave($__internal_93ec6661231e035c5e71792053e5a57e0c3eb3e118dca7cab6649200e1a58a55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
