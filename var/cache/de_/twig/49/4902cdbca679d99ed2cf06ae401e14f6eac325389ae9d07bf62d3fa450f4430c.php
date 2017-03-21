<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_782204acb06af663b97d082d21435a397556367dbfc44c2237a33a59dc36c4a7 extends Twig_Template
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
        $__internal_84a9be7faf0b9e0a52d5a460054685d994df493c41beef8b76ae0b14a57decec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a9be7faf0b9e0a52d5a460054685d994df493c41beef8b76ae0b14a57decec->enter($__internal_84a9be7faf0b9e0a52d5a460054685d994df493c41beef8b76ae0b14a57decec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_fd86ec11349beca1820f81d8dcf5ff8b6c8c901e468a676f69cdd5e41617ae0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd86ec11349beca1820f81d8dcf5ff8b6c8c901e468a676f69cdd5e41617ae0f->enter($__internal_fd86ec11349beca1820f81d8dcf5ff8b6c8c901e468a676f69cdd5e41617ae0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_84a9be7faf0b9e0a52d5a460054685d994df493c41beef8b76ae0b14a57decec->leave($__internal_84a9be7faf0b9e0a52d5a460054685d994df493c41beef8b76ae0b14a57decec_prof);

        
        $__internal_fd86ec11349beca1820f81d8dcf5ff8b6c8c901e468a676f69cdd5e41617ae0f->leave($__internal_fd86ec11349beca1820f81d8dcf5ff8b6c8c901e468a676f69cdd5e41617ae0f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
