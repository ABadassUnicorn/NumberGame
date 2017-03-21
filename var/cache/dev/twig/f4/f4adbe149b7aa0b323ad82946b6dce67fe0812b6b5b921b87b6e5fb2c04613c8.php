<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1f3c9542a927b8eb89e28b14cf66ab572de7effe93680ca4cb22efda20fad1cb extends Twig_Template
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
        $__internal_eb4447303fefdbb2df8b05e4b77b9593881052504713df13d0faebc8c86d29e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4447303fefdbb2df8b05e4b77b9593881052504713df13d0faebc8c86d29e5->enter($__internal_eb4447303fefdbb2df8b05e4b77b9593881052504713df13d0faebc8c86d29e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_53ce342e7b3e5b6caf14e093fbf869c05108770e75ecc042495e2fb29225b483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ce342e7b3e5b6caf14e093fbf869c05108770e75ecc042495e2fb29225b483->enter($__internal_53ce342e7b3e5b6caf14e093fbf869c05108770e75ecc042495e2fb29225b483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_eb4447303fefdbb2df8b05e4b77b9593881052504713df13d0faebc8c86d29e5->leave($__internal_eb4447303fefdbb2df8b05e4b77b9593881052504713df13d0faebc8c86d29e5_prof);

        
        $__internal_53ce342e7b3e5b6caf14e093fbf869c05108770e75ecc042495e2fb29225b483->leave($__internal_53ce342e7b3e5b6caf14e093fbf869c05108770e75ecc042495e2fb29225b483_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
