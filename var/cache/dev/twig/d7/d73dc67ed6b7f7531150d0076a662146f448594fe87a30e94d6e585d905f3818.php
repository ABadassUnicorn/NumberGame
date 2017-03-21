<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_fb6907f7c77d18e8adcbcf5f1ef463b6a148f90b9a818df8ba3b8af6ac3f51de extends Twig_Template
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
        $__internal_9d310cb176de62311a3220713d69ddc2184bbf880df3f41b18d2d2f7cc387ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d310cb176de62311a3220713d69ddc2184bbf880df3f41b18d2d2f7cc387ff2->enter($__internal_9d310cb176de62311a3220713d69ddc2184bbf880df3f41b18d2d2f7cc387ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_23675fe699d876ae005eb0b4dec633f9b1f8d6c2790516379b5000063c326325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23675fe699d876ae005eb0b4dec633f9b1f8d6c2790516379b5000063c326325->enter($__internal_23675fe699d876ae005eb0b4dec633f9b1f8d6c2790516379b5000063c326325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9d310cb176de62311a3220713d69ddc2184bbf880df3f41b18d2d2f7cc387ff2->leave($__internal_9d310cb176de62311a3220713d69ddc2184bbf880df3f41b18d2d2f7cc387ff2_prof);

        
        $__internal_23675fe699d876ae005eb0b4dec633f9b1f8d6c2790516379b5000063c326325->leave($__internal_23675fe699d876ae005eb0b4dec633f9b1f8d6c2790516379b5000063c326325_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
