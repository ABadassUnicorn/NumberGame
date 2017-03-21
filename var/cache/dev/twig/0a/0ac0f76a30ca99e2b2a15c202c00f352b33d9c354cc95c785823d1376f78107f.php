<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bdcd024f544cbb901250e37c5f9660d96f37c8809b4f5528f9c7f317a9454b37 extends Twig_Template
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
        $__internal_ef5012c08da2f2a6a1a0cce6849ab8c33466b2bbbb4a7294ff2ce1391f1c19ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef5012c08da2f2a6a1a0cce6849ab8c33466b2bbbb4a7294ff2ce1391f1c19ec->enter($__internal_ef5012c08da2f2a6a1a0cce6849ab8c33466b2bbbb4a7294ff2ce1391f1c19ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_0976288b6b02fe72e1a1e476deadde79f44c19500acd1e0ba6482375c9532ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0976288b6b02fe72e1a1e476deadde79f44c19500acd1e0ba6482375c9532ce4->enter($__internal_0976288b6b02fe72e1a1e476deadde79f44c19500acd1e0ba6482375c9532ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_ef5012c08da2f2a6a1a0cce6849ab8c33466b2bbbb4a7294ff2ce1391f1c19ec->leave($__internal_ef5012c08da2f2a6a1a0cce6849ab8c33466b2bbbb4a7294ff2ce1391f1c19ec_prof);

        
        $__internal_0976288b6b02fe72e1a1e476deadde79f44c19500acd1e0ba6482375c9532ce4->leave($__internal_0976288b6b02fe72e1a1e476deadde79f44c19500acd1e0ba6482375c9532ce4_prof);

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
", "@Framework/FormTable/form_row.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
