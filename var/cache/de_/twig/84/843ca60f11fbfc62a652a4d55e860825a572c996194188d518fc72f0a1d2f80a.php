<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7059dfef74b1495eac5312e846cb522038e73e4adb728cd1aa38f41f96d8d030 extends Twig_Template
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
        $__internal_d2bb46090117ca10da79b95efa71cde7ac67fb0a6259201d81edd8156b8f0d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2bb46090117ca10da79b95efa71cde7ac67fb0a6259201d81edd8156b8f0d4b->enter($__internal_d2bb46090117ca10da79b95efa71cde7ac67fb0a6259201d81edd8156b8f0d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_d63c9421da6f5ab093315a6936521266111eafa50158050aea12df6151c489b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63c9421da6f5ab093315a6936521266111eafa50158050aea12df6151c489b9->enter($__internal_d63c9421da6f5ab093315a6936521266111eafa50158050aea12df6151c489b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d2bb46090117ca10da79b95efa71cde7ac67fb0a6259201d81edd8156b8f0d4b->leave($__internal_d2bb46090117ca10da79b95efa71cde7ac67fb0a6259201d81edd8156b8f0d4b_prof);

        
        $__internal_d63c9421da6f5ab093315a6936521266111eafa50158050aea12df6151c489b9->leave($__internal_d63c9421da6f5ab093315a6936521266111eafa50158050aea12df6151c489b9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "E:\\wamp64\\www\\numberGame\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
