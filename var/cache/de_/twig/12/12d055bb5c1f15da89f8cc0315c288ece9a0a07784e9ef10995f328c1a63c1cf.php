<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_9ca98292860819045835296cbacd897a4dc64a6cbdfc4ab18d41f724bed4abf0 extends Twig_Template
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
        $__internal_2c9398523476b3d4813653aa438abdd05503a40fc1924de69bfb311ed3260127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9398523476b3d4813653aa438abdd05503a40fc1924de69bfb311ed3260127->enter($__internal_2c9398523476b3d4813653aa438abdd05503a40fc1924de69bfb311ed3260127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_cd31e7b3feaee9e9f5d0e2db99c65ecb56ff151877f1f00dba5454c4ddfb6322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd31e7b3feaee9e9f5d0e2db99c65ecb56ff151877f1f00dba5454c4ddfb6322->enter($__internal_cd31e7b3feaee9e9f5d0e2db99c65ecb56ff151877f1f00dba5454c4ddfb6322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_2c9398523476b3d4813653aa438abdd05503a40fc1924de69bfb311ed3260127->leave($__internal_2c9398523476b3d4813653aa438abdd05503a40fc1924de69bfb311ed3260127_prof);

        
        $__internal_cd31e7b3feaee9e9f5d0e2db99c65ecb56ff151877f1f00dba5454c4ddfb6322->leave($__internal_cd31e7b3feaee9e9f5d0e2db99c65ecb56ff151877f1f00dba5454c4ddfb6322_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
