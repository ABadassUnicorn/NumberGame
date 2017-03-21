<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d1a42b9065355e0c0826c552fb1d9b324d45b067c047475001bf58e2671ef7cc extends Twig_Template
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
        $__internal_601fed29d2e510e259e14dead2b6b50d1fb553482dbb6d6527a0d0220cf75b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_601fed29d2e510e259e14dead2b6b50d1fb553482dbb6d6527a0d0220cf75b65->enter($__internal_601fed29d2e510e259e14dead2b6b50d1fb553482dbb6d6527a0d0220cf75b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_f9da74ae105f5975f3afe6cb62081d33db4884fb1106e2374aaa77d4330817d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9da74ae105f5975f3afe6cb62081d33db4884fb1106e2374aaa77d4330817d4->enter($__internal_f9da74ae105f5975f3afe6cb62081d33db4884fb1106e2374aaa77d4330817d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_601fed29d2e510e259e14dead2b6b50d1fb553482dbb6d6527a0d0220cf75b65->leave($__internal_601fed29d2e510e259e14dead2b6b50d1fb553482dbb6d6527a0d0220cf75b65_prof);

        
        $__internal_f9da74ae105f5975f3afe6cb62081d33db4884fb1106e2374aaa77d4330817d4->leave($__internal_f9da74ae105f5975f3afe6cb62081d33db4884fb1106e2374aaa77d4330817d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
