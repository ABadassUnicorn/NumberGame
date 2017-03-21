<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_bfa146c47852a0ff588a1519184b7cc0e79eb891a4cd93168e91cdc27bbea0e4 extends Twig_Template
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
        $__internal_8e57ae280328f8c6dd98583f011c317d4f44ab85a3e0238f3209e74c72160e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e57ae280328f8c6dd98583f011c317d4f44ab85a3e0238f3209e74c72160e2f->enter($__internal_8e57ae280328f8c6dd98583f011c317d4f44ab85a3e0238f3209e74c72160e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_1da001c478ced990522d15128d51ab5c8cb87ccd339a58015144479825eaf67c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da001c478ced990522d15128d51ab5c8cb87ccd339a58015144479825eaf67c->enter($__internal_1da001c478ced990522d15128d51ab5c8cb87ccd339a58015144479825eaf67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8e57ae280328f8c6dd98583f011c317d4f44ab85a3e0238f3209e74c72160e2f->leave($__internal_8e57ae280328f8c6dd98583f011c317d4f44ab85a3e0238f3209e74c72160e2f_prof);

        
        $__internal_1da001c478ced990522d15128d51ab5c8cb87ccd339a58015144479825eaf67c->leave($__internal_1da001c478ced990522d15128d51ab5c8cb87ccd339a58015144479825eaf67c_prof);

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
", "@Framework/Form/form_errors.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
