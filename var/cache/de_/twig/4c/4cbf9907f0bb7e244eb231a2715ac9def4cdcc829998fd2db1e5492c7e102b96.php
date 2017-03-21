<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_225e5a22abb4c8751c1d5900be9b49bdf8f81ed55acc1fc6e41bbf6ed01e6f0c extends Twig_Template
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
        $__internal_f529983daa0b43f284e11ae0c5aebcba482839ff3a2137ff6e9c45638c666ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f529983daa0b43f284e11ae0c5aebcba482839ff3a2137ff6e9c45638c666ea1->enter($__internal_f529983daa0b43f284e11ae0c5aebcba482839ff3a2137ff6e9c45638c666ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_493c343efd5df1bef716f2a9b7cb36323d5f2083075d36977ab14f76cf635baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493c343efd5df1bef716f2a9b7cb36323d5f2083075d36977ab14f76cf635baf->enter($__internal_493c343efd5df1bef716f2a9b7cb36323d5f2083075d36977ab14f76cf635baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f529983daa0b43f284e11ae0c5aebcba482839ff3a2137ff6e9c45638c666ea1->leave($__internal_f529983daa0b43f284e11ae0c5aebcba482839ff3a2137ff6e9c45638c666ea1_prof);

        
        $__internal_493c343efd5df1bef716f2a9b7cb36323d5f2083075d36977ab14f76cf635baf->leave($__internal_493c343efd5df1bef716f2a9b7cb36323d5f2083075d36977ab14f76cf635baf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
