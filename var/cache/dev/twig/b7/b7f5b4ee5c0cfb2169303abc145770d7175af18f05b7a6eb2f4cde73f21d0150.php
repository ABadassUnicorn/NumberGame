<?php

/* FrontBundle:Home:home.html.twig */
class __TwigTemplate_b5f8180ee26abb2294516165a873084337ca605023149ddbcb754ef442cb37aa extends Twig_Template
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
        $__internal_65b1620c7fbc4f11b67d38df1a858e39516b8adae31851f1a8ec0c46380c83d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b1620c7fbc4f11b67d38df1a858e39516b8adae31851f1a8ec0c46380c83d5->enter($__internal_65b1620c7fbc4f11b67d38df1a858e39516b8adae31851f1a8ec0c46380c83d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Home:home.html.twig"));

        $__internal_cd19381cd1b22ed0bea0afd2a0e002a8e838436a3af245998175656b063ffcc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd19381cd1b22ed0bea0afd2a0e002a8e838436a3af245998175656b063ffcc2->enter($__internal_cd19381cd1b22ed0bea0afd2a0e002a8e838436a3af245998175656b063ffcc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Home:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65b1620c7fbc4f11b67d38df1a858e39516b8adae31851f1a8ec0c46380c83d5->leave($__internal_65b1620c7fbc4f11b67d38df1a858e39516b8adae31851f1a8ec0c46380c83d5_prof);

        
        $__internal_cd19381cd1b22ed0bea0afd2a0e002a8e838436a3af245998175656b063ffcc2->leave($__internal_cd19381cd1b22ed0bea0afd2a0e002a8e838436a3af245998175656b063ffcc2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_fce463a17d54d277177839976a883a89506ad8e9c5bc06d177f1301e3e9304b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce463a17d54d277177839976a883a89506ad8e9c5bc06d177f1301e3e9304b5->enter($__internal_fce463a17d54d277177839976a883a89506ad8e9c5bc06d177f1301e3e9304b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f27e93e9c6d01d367ef206db00a2f1c6e7d4e580c35e6a83e6a39439861e731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f27e93e9c6d01d367ef206db00a2f1c6e7d4e580c35e6a83e6a39439861e731->enter($__internal_7f27e93e9c6d01d367ef206db00a2f1c6e7d4e580c35e6a83e6a39439861e731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.home", array(), "messages"), "html", null, true);
        
        $__internal_7f27e93e9c6d01d367ef206db00a2f1c6e7d4e580c35e6a83e6a39439861e731->leave($__internal_7f27e93e9c6d01d367ef206db00a2f1c6e7d4e580c35e6a83e6a39439861e731_prof);

        
        $__internal_fce463a17d54d277177839976a883a89506ad8e9c5bc06d177f1301e3e9304b5->leave($__internal_fce463a17d54d277177839976a883a89506ad8e9c5bc06d177f1301e3e9304b5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ac370e4341c129eb169903b84ced2332c004348b25363945ade6de021cd622ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac370e4341c129eb169903b84ced2332c004348b25363945ade6de021cd622ea->enter($__internal_ac370e4341c129eb169903b84ced2332c004348b25363945ade6de021cd622ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_329f9c331bb43d9d9d9da50e5f8f17cbb2a735161a2b31ff296c1062dce23f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329f9c331bb43d9d9d9da50e5f8f17cbb2a735161a2b31ff296c1062dce23f45->enter($__internal_329f9c331bb43d9d9d9da50e5f8f17cbb2a735161a2b31ff296c1062dce23f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div id=\"divwin\" v-if=\"win\">
        <h1 id=\"winText\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("win", array(), "messages"), "html", null, true);
        echo "</h1>
    </div>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("v-on:submit.prevent" => "onSubmit")));
        echo "
    <div class=\"row\">
        <div class=\"col-sm-3\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number", array()), 'widget', array("attr" => array("type" => "number", "min" => $this->getAttribute((isset($context["limitService"]) ? $context["limitService"] : $this->getContext($context, "limitService")), "getMinValue", array()), "max" => $this->getAttribute((isset($context["limitService"]) ? $context["limitService"] : $this->getContext($context, "limitService")), "getMaxValue", array()))));
        echo "
        </div>
        <div class=\"col-sm-3\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array(" v-on:click" => "handleResponse")));
        echo "
        </div>
    </div>
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    <div id=\"resultLog\"></div>
";
        
        $__internal_329f9c331bb43d9d9d9da50e5f8f17cbb2a735161a2b31ff296c1062dce23f45->leave($__internal_329f9c331bb43d9d9d9da50e5f8f17cbb2a735161a2b31ff296c1062dce23f45_prof);

        
        $__internal_ac370e4341c129eb169903b84ced2332c004348b25363945ade6de021cd622ea->leave($__internal_ac370e4341c129eb169903b84ced2332c004348b25363945ade6de021cd622ea_prof);

    }

    // line 19
    public function block_javascripts_body($context, array $blocks = array())
    {
        $__internal_df63a6bd6b2c51965d8f25cbd707d95293db3ecdeda2b0be12038f42a4dc882d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df63a6bd6b2c51965d8f25cbd707d95293db3ecdeda2b0be12038f42a4dc882d->enter($__internal_df63a6bd6b2c51965d8f25cbd707d95293db3ecdeda2b0be12038f42a4dc882d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

        $__internal_4727d50791cf1847120d550b5d5a500181fedb0323a61403dba435e8d67f1f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4727d50791cf1847120d550b5d5a500181fedb0323a61403dba435e8d67f1f3d->enter($__internal_4727d50791cf1847120d550b5d5a500181fedb0323a61403dba435e8d67f1f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

        // line 20
        echo "    <script  type=\"text/javascript\">
        \$( document ).ready(function() {
            var divwin = new Vue({
                el: '#divwin',
                data: {
                  win: false
                }
            })
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
        // line 40
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
                        if(sign == '='){
                            divwin.win = true;
                            \$(\"#winText\").append(number+'!');
                        }
                        else{
                            var resultString = sign + ' que ' + number + '<br>';
                            \$(\"#resultLog\").append(resultString);
                        }
                    }, response => {
                      // error callback
                    });
                  }
                }
              })
        });
    </script>
";
        
        $__internal_4727d50791cf1847120d550b5d5a500181fedb0323a61403dba435e8d67f1f3d->leave($__internal_4727d50791cf1847120d550b5d5a500181fedb0323a61403dba435e8d67f1f3d_prof);

        
        $__internal_df63a6bd6b2c51965d8f25cbd707d95293db3ecdeda2b0be12038f42a4dc882d->leave($__internal_df63a6bd6b2c51965d8f25cbd707d95293db3ecdeda2b0be12038f42a4dc882d_prof);

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
        return array (  139 => 40,  117 => 20,  108 => 19,  95 => 16,  89 => 13,  83 => 10,  77 => 7,  72 => 5,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
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
    <div id=\"divwin\" v-if=\"win\">
        <h1 id=\"winText\">{{ 'win'|trans({}, 'messages') }}</h1>
    </div>
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
    <div id=\"resultLog\"></div>
{% endblock %}
{% block javascripts_body %}
    <script  type=\"text/javascript\">
        \$( document ).ready(function() {
            var divwin = new Vue({
                el: '#divwin',
                data: {
                  win: false
                }
            })
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
                        if(sign == '='){
                            divwin.win = true;
                            \$(\"#winText\").append(number+'!');
                        }
                        else{
                            var resultString = sign + ' que ' + number + '<br>';
                            \$(\"#resultLog\").append(resultString);
                        }
                    }, response => {
                      // error callback
                    });
                  }
                }
              })
        });
    </script>
{% endblock %}", "FrontBundle:Home:home.html.twig", "C:\\workspaceProjet\\NumberGame\\src\\FrontBundle\\Resources\\views\\Home\\home.html.twig");
    }
}
