<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b96996014f2e363ae89eb4d50f9ee2bef2a7af96cf69d4c35c5837342047c8ba extends Twig_Template
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
        $__internal_673f587154159f2e2349825ffef276cdbd66865c3bed18f8da24290e575f1de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673f587154159f2e2349825ffef276cdbd66865c3bed18f8da24290e575f1de0->enter($__internal_673f587154159f2e2349825ffef276cdbd66865c3bed18f8da24290e575f1de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0e8786d9217fcd58857e982f0a3dc854c2a756b1295c706a7980b1503d18ed97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8786d9217fcd58857e982f0a3dc854c2a756b1295c706a7980b1503d18ed97->enter($__internal_0e8786d9217fcd58857e982f0a3dc854c2a756b1295c706a7980b1503d18ed97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_673f587154159f2e2349825ffef276cdbd66865c3bed18f8da24290e575f1de0->leave($__internal_673f587154159f2e2349825ffef276cdbd66865c3bed18f8da24290e575f1de0_prof);

        
        $__internal_0e8786d9217fcd58857e982f0a3dc854c2a756b1295c706a7980b1503d18ed97->leave($__internal_0e8786d9217fcd58857e982f0a3dc854c2a756b1295c706a7980b1503d18ed97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\workspaceProjet\\NumberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
