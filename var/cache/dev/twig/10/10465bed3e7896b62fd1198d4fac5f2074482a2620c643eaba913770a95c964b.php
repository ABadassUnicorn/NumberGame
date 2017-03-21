<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_698027e0cc060e0c9cea9351b21c9b66f947840912f3f22ae51c8a12479d709c extends Twig_Template
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
        $__internal_a44dfee8812fe4e44e24ae263d4a89e25393cd33da15c6c4513a7d9160534476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44dfee8812fe4e44e24ae263d4a89e25393cd33da15c6c4513a7d9160534476->enter($__internal_a44dfee8812fe4e44e24ae263d4a89e25393cd33da15c6c4513a7d9160534476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_298a9b6b5e1ec5daa7328ca098e275db3debb081cc444412f48265d3ac808a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298a9b6b5e1ec5daa7328ca098e275db3debb081cc444412f48265d3ac808a93->enter($__internal_298a9b6b5e1ec5daa7328ca098e275db3debb081cc444412f48265d3ac808a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a44dfee8812fe4e44e24ae263d4a89e25393cd33da15c6c4513a7d9160534476->leave($__internal_a44dfee8812fe4e44e24ae263d4a89e25393cd33da15c6c4513a7d9160534476_prof);

        
        $__internal_298a9b6b5e1ec5daa7328ca098e275db3debb081cc444412f48265d3ac808a93->leave($__internal_298a9b6b5e1ec5daa7328ca098e275db3debb081cc444412f48265d3ac808a93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
