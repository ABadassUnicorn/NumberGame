<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_693758e244e2f44f7a2dcb8a69d4431f51c7c802b14f87637c52d0e03d9f90a8 extends Twig_Template
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
        $__internal_9a8b1f8c8e144740210d40deb39c3fa7e0d8a1d00292c7021d4d492bea996ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8b1f8c8e144740210d40deb39c3fa7e0d8a1d00292c7021d4d492bea996ce6->enter($__internal_9a8b1f8c8e144740210d40deb39c3fa7e0d8a1d00292c7021d4d492bea996ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_b874eb9168ea79bbfd66c89132eb74d0d7cd0679985cffaf33d2b5ce474c2232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b874eb9168ea79bbfd66c89132eb74d0d7cd0679985cffaf33d2b5ce474c2232->enter($__internal_b874eb9168ea79bbfd66c89132eb74d0d7cd0679985cffaf33d2b5ce474c2232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_9a8b1f8c8e144740210d40deb39c3fa7e0d8a1d00292c7021d4d492bea996ce6->leave($__internal_9a8b1f8c8e144740210d40deb39c3fa7e0d8a1d00292c7021d4d492bea996ce6_prof);

        
        $__internal_b874eb9168ea79bbfd66c89132eb74d0d7cd0679985cffaf33d2b5ce474c2232->leave($__internal_b874eb9168ea79bbfd66c89132eb74d0d7cd0679985cffaf33d2b5ce474c2232_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
