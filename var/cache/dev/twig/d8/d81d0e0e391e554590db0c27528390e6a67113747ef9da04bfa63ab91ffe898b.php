<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_182dd92c33b2a1d583b8e9706d7a532ff758f5128ddb62461880d55ca24870e3 extends Twig_Template
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
        $__internal_8bc8d4437da92ba6bab5d24e534cd5e3c0960c9b43a928058fa6aecda30aab74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc8d4437da92ba6bab5d24e534cd5e3c0960c9b43a928058fa6aecda30aab74->enter($__internal_8bc8d4437da92ba6bab5d24e534cd5e3c0960c9b43a928058fa6aecda30aab74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_bb0b5f3823d8917bb56068e463684c2badd7af076b9af6f2728d0cbfd601c9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0b5f3823d8917bb56068e463684c2badd7af076b9af6f2728d0cbfd601c9b1->enter($__internal_bb0b5f3823d8917bb56068e463684c2badd7af076b9af6f2728d0cbfd601c9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8bc8d4437da92ba6bab5d24e534cd5e3c0960c9b43a928058fa6aecda30aab74->leave($__internal_8bc8d4437da92ba6bab5d24e534cd5e3c0960c9b43a928058fa6aecda30aab74_prof);

        
        $__internal_bb0b5f3823d8917bb56068e463684c2badd7af076b9af6f2728d0cbfd601c9b1->leave($__internal_bb0b5f3823d8917bb56068e463684c2badd7af076b9af6f2728d0cbfd601c9b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
