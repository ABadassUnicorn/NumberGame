<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3dd0b3beb97ebf00f6726c2db0fc152df35e27f507c01296a1b4182258253378 extends Twig_Template
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
        $__internal_2c27369103564783facb90083ab3eb030b43e18fc0ba27738aae4d0d6470435f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c27369103564783facb90083ab3eb030b43e18fc0ba27738aae4d0d6470435f->enter($__internal_2c27369103564783facb90083ab3eb030b43e18fc0ba27738aae4d0d6470435f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e5c2ce8b9eb73309a54595c6582bf8dfcd86e791213d911c98f1e6ff0e34d8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c2ce8b9eb73309a54595c6582bf8dfcd86e791213d911c98f1e6ff0e34d8b5->enter($__internal_e5c2ce8b9eb73309a54595c6582bf8dfcd86e791213d911c98f1e6ff0e34d8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2c27369103564783facb90083ab3eb030b43e18fc0ba27738aae4d0d6470435f->leave($__internal_2c27369103564783facb90083ab3eb030b43e18fc0ba27738aae4d0d6470435f_prof);

        
        $__internal_e5c2ce8b9eb73309a54595c6582bf8dfcd86e791213d911c98f1e6ff0e34d8b5->leave($__internal_e5c2ce8b9eb73309a54595c6582bf8dfcd86e791213d911c98f1e6ff0e34d8b5_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
