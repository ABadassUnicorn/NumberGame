<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8e8926adead250e367769c8f108702bc4ed0a70568c3909c532b11c9be434e00 extends Twig_Template
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
        $__internal_b95ea6bfc978f954eba15f24972ffe9593973a1492c183fc073501a7e1f74a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b95ea6bfc978f954eba15f24972ffe9593973a1492c183fc073501a7e1f74a7f->enter($__internal_b95ea6bfc978f954eba15f24972ffe9593973a1492c183fc073501a7e1f74a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_cb52f351c35e0950a061bf959612c63e830370f13122cf1f37ccc17776058abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb52f351c35e0950a061bf959612c63e830370f13122cf1f37ccc17776058abe->enter($__internal_cb52f351c35e0950a061bf959612c63e830370f13122cf1f37ccc17776058abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b95ea6bfc978f954eba15f24972ffe9593973a1492c183fc073501a7e1f74a7f->leave($__internal_b95ea6bfc978f954eba15f24972ffe9593973a1492c183fc073501a7e1f74a7f_prof);

        
        $__internal_cb52f351c35e0950a061bf959612c63e830370f13122cf1f37ccc17776058abe->leave($__internal_cb52f351c35e0950a061bf959612c63e830370f13122cf1f37ccc17776058abe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
