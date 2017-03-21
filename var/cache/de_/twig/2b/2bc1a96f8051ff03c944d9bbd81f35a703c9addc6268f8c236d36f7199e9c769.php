<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_32a67f384e958c89f8f655f073ed9195cd8f5315b5768d5c79975105355efa8b extends Twig_Template
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
        $__internal_2825f4a99de76eb27d1f0591b72308c17c33593eb5d679169b1565dad346bed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2825f4a99de76eb27d1f0591b72308c17c33593eb5d679169b1565dad346bed5->enter($__internal_2825f4a99de76eb27d1f0591b72308c17c33593eb5d679169b1565dad346bed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9e860eb8d446682603983e198f48f35ac8d37c31009fe08c54138ea542357d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e860eb8d446682603983e198f48f35ac8d37c31009fe08c54138ea542357d89->enter($__internal_9e860eb8d446682603983e198f48f35ac8d37c31009fe08c54138ea542357d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2825f4a99de76eb27d1f0591b72308c17c33593eb5d679169b1565dad346bed5->leave($__internal_2825f4a99de76eb27d1f0591b72308c17c33593eb5d679169b1565dad346bed5_prof);

        
        $__internal_9e860eb8d446682603983e198f48f35ac8d37c31009fe08c54138ea542357d89->leave($__internal_9e860eb8d446682603983e198f48f35ac8d37c31009fe08c54138ea542357d89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
