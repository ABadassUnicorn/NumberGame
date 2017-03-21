<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b64611cf7a3dab01e3f6b01a12a5794f68bd4ab88cac8e3df43ab24bdcf9e7c5 extends Twig_Template
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
        $__internal_fccd0c08880211492f620e5022da3e8b45ab993a6d5a057ee24b2b94be8db747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fccd0c08880211492f620e5022da3e8b45ab993a6d5a057ee24b2b94be8db747->enter($__internal_fccd0c08880211492f620e5022da3e8b45ab993a6d5a057ee24b2b94be8db747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_254f8ec8310b76dfa034c15b906f98de593e71aeb153db2e8b1473db2b8c1bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254f8ec8310b76dfa034c15b906f98de593e71aeb153db2e8b1473db2b8c1bd3->enter($__internal_254f8ec8310b76dfa034c15b906f98de593e71aeb153db2e8b1473db2b8c1bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fccd0c08880211492f620e5022da3e8b45ab993a6d5a057ee24b2b94be8db747->leave($__internal_fccd0c08880211492f620e5022da3e8b45ab993a6d5a057ee24b2b94be8db747_prof);

        
        $__internal_254f8ec8310b76dfa034c15b906f98de593e71aeb153db2e8b1473db2b8c1bd3->leave($__internal_254f8ec8310b76dfa034c15b906f98de593e71aeb153db2e8b1473db2b8c1bd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
