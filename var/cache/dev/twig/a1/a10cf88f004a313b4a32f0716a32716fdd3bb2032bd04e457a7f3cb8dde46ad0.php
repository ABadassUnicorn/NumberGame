<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_82d906bb1a121d086f27a3e5623fc381a4ffc5ef674e012ad7c6a2e4f725225f extends Twig_Template
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
        $__internal_210f3028d3c22ca73cfa3272e28bafd028276f580d5140ebc23c27bfbb0196a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_210f3028d3c22ca73cfa3272e28bafd028276f580d5140ebc23c27bfbb0196a4->enter($__internal_210f3028d3c22ca73cfa3272e28bafd028276f580d5140ebc23c27bfbb0196a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_beed85ab1c0b511dbb61af3c65204fb8d5d68e4a6dd6344d7072e8492110ea0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beed85ab1c0b511dbb61af3c65204fb8d5d68e4a6dd6344d7072e8492110ea0e->enter($__internal_beed85ab1c0b511dbb61af3c65204fb8d5d68e4a6dd6344d7072e8492110ea0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_210f3028d3c22ca73cfa3272e28bafd028276f580d5140ebc23c27bfbb0196a4->leave($__internal_210f3028d3c22ca73cfa3272e28bafd028276f580d5140ebc23c27bfbb0196a4_prof);

        
        $__internal_beed85ab1c0b511dbb61af3c65204fb8d5d68e4a6dd6344d7072e8492110ea0e->leave($__internal_beed85ab1c0b511dbb61af3c65204fb8d5d68e4a6dd6344d7072e8492110ea0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
