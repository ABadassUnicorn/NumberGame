<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_56d6ca808bfee452f34fcb3a8f4cb42fc53e637a28d35fee34bffb2e01fc26f7 extends Twig_Template
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
        $__internal_1338f77fbc24d044b4d53ea88394e4e563962662069eb5764d0e7a94158ed148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1338f77fbc24d044b4d53ea88394e4e563962662069eb5764d0e7a94158ed148->enter($__internal_1338f77fbc24d044b4d53ea88394e4e563962662069eb5764d0e7a94158ed148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_24ecca94ebd99f4ae95d78e8ffc49225123e6831dbe82030f73da96e4bfe2ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ecca94ebd99f4ae95d78e8ffc49225123e6831dbe82030f73da96e4bfe2ee6->enter($__internal_24ecca94ebd99f4ae95d78e8ffc49225123e6831dbe82030f73da96e4bfe2ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_1338f77fbc24d044b4d53ea88394e4e563962662069eb5764d0e7a94158ed148->leave($__internal_1338f77fbc24d044b4d53ea88394e4e563962662069eb5764d0e7a94158ed148_prof);

        
        $__internal_24ecca94ebd99f4ae95d78e8ffc49225123e6831dbe82030f73da96e4bfe2ee6->leave($__internal_24ecca94ebd99f4ae95d78e8ffc49225123e6831dbe82030f73da96e4bfe2ee6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
