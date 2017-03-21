<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c5609c2da4459443b04ecf97af73750685df9c9a49e99b61026903257ba1e137 extends Twig_Template
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
        $__internal_490ea8e1ac4663d6f37b131d44137b92dbb20d329f94c4bc0a03f096b9554484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490ea8e1ac4663d6f37b131d44137b92dbb20d329f94c4bc0a03f096b9554484->enter($__internal_490ea8e1ac4663d6f37b131d44137b92dbb20d329f94c4bc0a03f096b9554484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_4cfc22017de20a3d94c3ba0effd9b1f8a90353c788c6e4dccfff6b7864202c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cfc22017de20a3d94c3ba0effd9b1f8a90353c788c6e4dccfff6b7864202c5f->enter($__internal_4cfc22017de20a3d94c3ba0effd9b1f8a90353c788c6e4dccfff6b7864202c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_490ea8e1ac4663d6f37b131d44137b92dbb20d329f94c4bc0a03f096b9554484->leave($__internal_490ea8e1ac4663d6f37b131d44137b92dbb20d329f94c4bc0a03f096b9554484_prof);

        
        $__internal_4cfc22017de20a3d94c3ba0effd9b1f8a90353c788c6e4dccfff6b7864202c5f->leave($__internal_4cfc22017de20a3d94c3ba0effd9b1f8a90353c788c6e4dccfff6b7864202c5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
