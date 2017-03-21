<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2a3e2cf5c377a1ed915d60df17f3862339c783625fd85fe92ab35c78d9819afa extends Twig_Template
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
        $__internal_b11a55d18f875e244e7420aba9ff7bd0534ec85a59b94cd7dd3380c6d9961393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11a55d18f875e244e7420aba9ff7bd0534ec85a59b94cd7dd3380c6d9961393->enter($__internal_b11a55d18f875e244e7420aba9ff7bd0534ec85a59b94cd7dd3380c6d9961393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_da1da5388fe472883f00974fca4c77f9d19818df240064c038516bb75ccab424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1da5388fe472883f00974fca4c77f9d19818df240064c038516bb75ccab424->enter($__internal_da1da5388fe472883f00974fca4c77f9d19818df240064c038516bb75ccab424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b11a55d18f875e244e7420aba9ff7bd0534ec85a59b94cd7dd3380c6d9961393->leave($__internal_b11a55d18f875e244e7420aba9ff7bd0534ec85a59b94cd7dd3380c6d9961393_prof);

        
        $__internal_da1da5388fe472883f00974fca4c77f9d19818df240064c038516bb75ccab424->leave($__internal_da1da5388fe472883f00974fca4c77f9d19818df240064c038516bb75ccab424_prof);

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
", "@Framework/Form/form_rest.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
