<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_393b81f3684a9e027585e96fd45a061dc7e72d7d21b4e1a45e791b9482f3e817 extends Twig_Template
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
        $__internal_3982977f48e483a3ad703a54ca07918acc68a6364b24509687096d2b001feff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3982977f48e483a3ad703a54ca07918acc68a6364b24509687096d2b001feff7->enter($__internal_3982977f48e483a3ad703a54ca07918acc68a6364b24509687096d2b001feff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a9e91ad5f2bd3b41f9fa6ab375ff93710079653465d54014aa79eb066d1f7d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e91ad5f2bd3b41f9fa6ab375ff93710079653465d54014aa79eb066d1f7d36->enter($__internal_a9e91ad5f2bd3b41f9fa6ab375ff93710079653465d54014aa79eb066d1f7d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3982977f48e483a3ad703a54ca07918acc68a6364b24509687096d2b001feff7->leave($__internal_3982977f48e483a3ad703a54ca07918acc68a6364b24509687096d2b001feff7_prof);

        
        $__internal_a9e91ad5f2bd3b41f9fa6ab375ff93710079653465d54014aa79eb066d1f7d36->leave($__internal_a9e91ad5f2bd3b41f9fa6ab375ff93710079653465d54014aa79eb066d1f7d36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
