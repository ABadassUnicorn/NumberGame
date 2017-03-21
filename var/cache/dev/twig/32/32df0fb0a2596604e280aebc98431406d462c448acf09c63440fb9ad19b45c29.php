<?php

/* FrontBundle:Home:home.html.twig */
class __TwigTemplate_da07c4dfea86b9897a4de37fe25926a632a9b47025ecb8c04155adc34ee24cac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle:Common:layout.html.twig", "FrontBundle:Home:home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts_body' => array($this, 'block_javascripts_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle:Common:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e09ac98b830a279f19f1013c852d80c8b61397aef6afb0dc295da59119cf5cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e09ac98b830a279f19f1013c852d80c8b61397aef6afb0dc295da59119cf5cdb->enter($__internal_e09ac98b830a279f19f1013c852d80c8b61397aef6afb0dc295da59119cf5cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Home:home.html.twig"));

        $__internal_996311ff852b294b1f5b0d2ca116198f9287e07dde003776dec1bc0f17c34998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996311ff852b294b1f5b0d2ca116198f9287e07dde003776dec1bc0f17c34998->enter($__internal_996311ff852b294b1f5b0d2ca116198f9287e07dde003776dec1bc0f17c34998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Home:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e09ac98b830a279f19f1013c852d80c8b61397aef6afb0dc295da59119cf5cdb->leave($__internal_e09ac98b830a279f19f1013c852d80c8b61397aef6afb0dc295da59119cf5cdb_prof);

        
        $__internal_996311ff852b294b1f5b0d2ca116198f9287e07dde003776dec1bc0f17c34998->leave($__internal_996311ff852b294b1f5b0d2ca116198f9287e07dde003776dec1bc0f17c34998_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_51853885ea64a92fe026481d0201e8562fba1a06043ced5593f52cab527d3540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51853885ea64a92fe026481d0201e8562fba1a06043ced5593f52cab527d3540->enter($__internal_51853885ea64a92fe026481d0201e8562fba1a06043ced5593f52cab527d3540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_365eb37e09c0e7a3b629250fa7b5de750941f2c22132d09ee686ff56ec11b286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365eb37e09c0e7a3b629250fa7b5de750941f2c22132d09ee686ff56ec11b286->enter($__internal_365eb37e09c0e7a3b629250fa7b5de750941f2c22132d09ee686ff56ec11b286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.home", array(), "messages"), "html", null, true);
        
        $__internal_365eb37e09c0e7a3b629250fa7b5de750941f2c22132d09ee686ff56ec11b286->leave($__internal_365eb37e09c0e7a3b629250fa7b5de750941f2c22132d09ee686ff56ec11b286_prof);

        
        $__internal_51853885ea64a92fe026481d0201e8562fba1a06043ced5593f52cab527d3540->leave($__internal_51853885ea64a92fe026481d0201e8562fba1a06043ced5593f52cab527d3540_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ae13da2034b0f311f98c2633128049e651bd00538e8c7bb3015cb79a430a852a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae13da2034b0f311f98c2633128049e651bd00538e8c7bb3015cb79a430a852a->enter($__internal_ae13da2034b0f311f98c2633128049e651bd00538e8c7bb3015cb79a430a852a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_460379c52282d8e5c795504770aadfc10dafd446dbba8bb1515eb54153aa1caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460379c52282d8e5c795504770aadfc10dafd446dbba8bb1515eb54153aa1caf->enter($__internal_460379c52282d8e5c795504770aadfc10dafd446dbba8bb1515eb54153aa1caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("v-on:submit.prevent" => "onSubmit")));
        echo "
    <div class=\"row\">
        <div class=\"col-sm-3\">
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number", array()), 'widget', array("attr" => array("type" => "number", "min" => $this->getAttribute((isset($context["limitService"]) ? $context["limitService"] : $this->getContext($context, "limitService")), "getMinValue", array()), "max" => $this->getAttribute((isset($context["limitService"]) ? $context["limitService"] : $this->getContext($context, "limitService")), "getMaxValue", array()))));
        echo "
        </div>
        <div class=\"col-sm-3\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array(" v-on:click" => "handleResponse")));
        echo "
        </div>
    </div>
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    <div id=\"resultLog\">
        
    </div>    
";
        
        $__internal_460379c52282d8e5c795504770aadfc10dafd446dbba8bb1515eb54153aa1caf->leave($__internal_460379c52282d8e5c795504770aadfc10dafd446dbba8bb1515eb54153aa1caf_prof);

        
        $__internal_ae13da2034b0f311f98c2633128049e651bd00538e8c7bb3015cb79a430a852a->leave($__internal_ae13da2034b0f311f98c2633128049e651bd00538e8c7bb3015cb79a430a852a_prof);

    }

    // line 18
    public function block_javascripts_body($context, array $blocks = array())
    {
        $__internal_553b2741991c94422478a18f9acd0f9e096724de4e165b40b322096de2035e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_553b2741991c94422478a18f9acd0f9e096724de4e165b40b322096de2035e43->enter($__internal_553b2741991c94422478a18f9acd0f9e096724de4e165b40b322096de2035e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

        $__internal_0da7c4ecdb837eb271fba56662296a92f66c6abec57727e90dfe676cc47784e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da7c4ecdb837eb271fba56662296a92f66c6abec57727e90dfe676cc47784e5->enter($__internal_0da7c4ecdb837eb271fba56662296a92f66c6abec57727e90dfe676cc47784e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

        // line 19
        echo "    <script  type=\"text/javascript\">
        \$( document ).ready(function() {
            var formSave = new Vue({
                el: '#form_save',
                data: {
                  name: 'Vue.js'
                },
                // define methods under the `methods` object
                methods: {
                  handleResponse: function (event) {
                    //prevent symfony default form submission
                    if (event){
                        event.preventDefault()
                    }
                    var ajaxPathBase = \"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("number_game_ajax_check_answer", array("number" => "numberParam"));
        echo "\";
                    var inputValue = \$('#form_number').val();
                    var ajaxPathParameter = ajaxPathBase.replace(\"numberParam\", inputValue)

                    this.\$http.get(ajaxPathParameter).then(response => {
                        var stringAnswer = JSON.stringify(response.body);
                        var stringAnswer = stringAnswer.replace(\"{\", '');
                        var stringAnswer = stringAnswer.replace(\"}\", '');
                        var stringAnswer = stringAnswer.replace(/\"/g, '');
                        var stringAnsweArray = stringAnswer.split(\":\");
                        var sign = stringAnsweArray[0];
                        var number = stringAnsweArray[1];
                        var resultString = sign + ' que ' + number + '<br>';
                        console.log(resultString);
                        \$(\"#resultLog\").append(resultString);
                    }, response => {
                      // error callback
                    });
                  }
                }
              })
        });
    </script>
";
        
        $__internal_0da7c4ecdb837eb271fba56662296a92f66c6abec57727e90dfe676cc47784e5->leave($__internal_0da7c4ecdb837eb271fba56662296a92f66c6abec57727e90dfe676cc47784e5_prof);

        
        $__internal_553b2741991c94422478a18f9acd0f9e096724de4e165b40b322096de2035e43->leave($__internal_553b2741991c94422478a18f9acd0f9e096724de4e165b40b322096de2035e43_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 33,  112 => 19,  103 => 18,  88 => 13,  82 => 10,  76 => 7,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FrontBundle:Common:layout.html.twig\" %}
{% block title %}{{ 'menu.home'|trans({}, 'messages') }}{% endblock %}
{% block content %}
    {{ form_start(form, {'attr': { 'v-on:submit.prevent': 'onSubmit'}}) }}
    <div class=\"row\">
        <div class=\"col-sm-3\">
            {{ form_widget(form.number, {'attr': {'type': 'number', 'min' : limitService.getMinValue, 'max' : limitService.getMaxValue}}) }}
        </div>
        <div class=\"col-sm-3\">
            {{ form_widget(form.save, {'attr': {' v-on:click': 'handleResponse'}}) }}
        </div>
    </div>
    {{ form_end(form) }}
    <div id=\"resultLog\">
        
    </div>    
{% endblock %}
{% block javascripts_body %}
    <script  type=\"text/javascript\">
        \$( document ).ready(function() {
            var formSave = new Vue({
                el: '#form_save',
                data: {
                  name: 'Vue.js'
                },
                // define methods under the `methods` object
                methods: {
                  handleResponse: function (event) {
                    //prevent symfony default form submission
                    if (event){
                        event.preventDefault()
                    }
                    var ajaxPathBase = \"{{ path('number_game_ajax_check_answer', { 'number': 'numberParam'}) }}\";
                    var inputValue = \$('#form_number').val();
                    var ajaxPathParameter = ajaxPathBase.replace(\"numberParam\", inputValue)

                    this.\$http.get(ajaxPathParameter).then(response => {
                        var stringAnswer = JSON.stringify(response.body);
                        var stringAnswer = stringAnswer.replace(\"{\", '');
                        var stringAnswer = stringAnswer.replace(\"}\", '');
                        var stringAnswer = stringAnswer.replace(/\"/g, '');
                        var stringAnsweArray = stringAnswer.split(\":\");
                        var sign = stringAnsweArray[0];
                        var number = stringAnsweArray[1];
                        var resultString = sign + ' que ' + number + '<br>';
                        console.log(resultString);
                        \$(\"#resultLog\").append(resultString);
                    }, response => {
                      // error callback
                    });
                  }
                }
              })
        });
    </script>
{% endblock %}", "FrontBundle:Home:home.html.twig", "C:\\workspaceProjet\\NumberGame\\src\\FrontBundle/Resources/views/Home/home.html.twig");
    }
}
