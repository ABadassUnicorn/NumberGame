<?php

/* FrontBundle:Home:home.html.twig */
class __TwigTemplate_868e7386f56eb055d33af1fc335759448e280caec6ca5bb4ef534ae5bdd11e5d extends Twig_Template
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
        $__internal_4c7ec813e9963c9e6f38ae7ac4fc1a569ed31b845a09282131cf3e16028d0edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7ec813e9963c9e6f38ae7ac4fc1a569ed31b845a09282131cf3e16028d0edb->enter($__internal_4c7ec813e9963c9e6f38ae7ac4fc1a569ed31b845a09282131cf3e16028d0edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Home:home.html.twig"));

        $__internal_6312333202a3904ea42b83603f8cd252fe07b60d738affe42abbbf19f0c311aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6312333202a3904ea42b83603f8cd252fe07b60d738affe42abbbf19f0c311aa->enter($__internal_6312333202a3904ea42b83603f8cd252fe07b60d738affe42abbbf19f0c311aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Home:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c7ec813e9963c9e6f38ae7ac4fc1a569ed31b845a09282131cf3e16028d0edb->leave($__internal_4c7ec813e9963c9e6f38ae7ac4fc1a569ed31b845a09282131cf3e16028d0edb_prof);

        
        $__internal_6312333202a3904ea42b83603f8cd252fe07b60d738affe42abbbf19f0c311aa->leave($__internal_6312333202a3904ea42b83603f8cd252fe07b60d738affe42abbbf19f0c311aa_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_42c6ee20f7a3e5cd9a3b41fc4f988de1da0f2dbe9111ca40af9c5307f13dbd27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c6ee20f7a3e5cd9a3b41fc4f988de1da0f2dbe9111ca40af9c5307f13dbd27->enter($__internal_42c6ee20f7a3e5cd9a3b41fc4f988de1da0f2dbe9111ca40af9c5307f13dbd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_293d346ed4f1152ec16bafab233e868cfe482585f85a418e0e44a48272d5f8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293d346ed4f1152ec16bafab233e868cfe482585f85a418e0e44a48272d5f8f6->enter($__internal_293d346ed4f1152ec16bafab233e868cfe482585f85a418e0e44a48272d5f8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.home", array(), "messages"), "html", null, true);
        
        $__internal_293d346ed4f1152ec16bafab233e868cfe482585f85a418e0e44a48272d5f8f6->leave($__internal_293d346ed4f1152ec16bafab233e868cfe482585f85a418e0e44a48272d5f8f6_prof);

        
        $__internal_42c6ee20f7a3e5cd9a3b41fc4f988de1da0f2dbe9111ca40af9c5307f13dbd27->leave($__internal_42c6ee20f7a3e5cd9a3b41fc4f988de1da0f2dbe9111ca40af9c5307f13dbd27_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1aa255f40b14f1d44ee870685a7eb800b841f5ef3349ae1ab4dcec5684cf4167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aa255f40b14f1d44ee870685a7eb800b841f5ef3349ae1ab4dcec5684cf4167->enter($__internal_1aa255f40b14f1d44ee870685a7eb800b841f5ef3349ae1ab4dcec5684cf4167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_576d1663df0adae92e2f01b150bbc8baec4f047f070c53f09511d5b322b00c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576d1663df0adae92e2f01b150bbc8baec4f047f070c53f09511d5b322b00c44->enter($__internal_576d1663df0adae92e2f01b150bbc8baec4f047f070c53f09511d5b322b00c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div id=\"divwin\" v-if=\"win\">
        <h1 id=\"winText\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("win", array(), "messages"), "html", null, true);
        echo "</h1>
    </div>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("v-on:submit.prevent" => "onSubmit")));
        echo "
    <div class=\"row\">
        <div class=\"col-sm-3\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "number", array()), 'widget', array("attr" => array("type" => "number", "min" => $this->getAttribute(($context["limitService"] ?? $this->getContext($context, "limitService")), "getMinValue", array()), "max" => $this->getAttribute(($context["limitService"] ?? $this->getContext($context, "limitService")), "getMaxValue", array()), "default" => 0)));
        echo "
        </div>
        <div class=\"col-sm-3\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plus", array()), 'widget', array("attr" => array(" v-on:click" => "plus")));
        echo "
        </div>
        <div class=\"col-sm-3\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minus", array()), 'widget', array("attr" => array(" v-on:click" => "minus")));
        echo "
        </div>
        <div class=\"col-sm-3\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array(" v-on:click" => "handleResponse")));
        echo "
        </div>
    </div>
    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <div id=\"resultLog\"></div>
";
        
        $__internal_576d1663df0adae92e2f01b150bbc8baec4f047f070c53f09511d5b322b00c44->leave($__internal_576d1663df0adae92e2f01b150bbc8baec4f047f070c53f09511d5b322b00c44_prof);

        
        $__internal_1aa255f40b14f1d44ee870685a7eb800b841f5ef3349ae1ab4dcec5684cf4167->leave($__internal_1aa255f40b14f1d44ee870685a7eb800b841f5ef3349ae1ab4dcec5684cf4167_prof);

    }

    // line 25
    public function block_javascripts_body($context, array $blocks = array())
    {
        $__internal_051b1167d3f8d879c1c3c55d9c9bec46f47aad2b859b57cde41cbf6baf0d27d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051b1167d3f8d879c1c3c55d9c9bec46f47aad2b859b57cde41cbf6baf0d27d2->enter($__internal_051b1167d3f8d879c1c3c55d9c9bec46f47aad2b859b57cde41cbf6baf0d27d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

        $__internal_2ea7550564988723c2c5d8176ff81caba024a408c80de1b9c3b0557f4af79bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea7550564988723c2c5d8176ff81caba024a408c80de1b9c3b0557f4af79bde->enter($__internal_2ea7550564988723c2c5d8176ff81caba024a408c80de1b9c3b0557f4af79bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

        // line 26
        echo "    <script  type=\"text/javascript\">
        \$( document ).ready(function() {
            \$(\"#form_number\").val(0);
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
        // line 47
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
            });
            var formPlus = new Vue({
                el: '#form_plus',
                data: {
                  name: 'Vue.js'
                },
                // define methods under the `methods` object
                methods: {
                    plus: function (event) {
                            var max = ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute(($context["limitService"] ?? $this->getContext($context, "limitService")), "getMaxValue", array()), "html", null, true);
        echo ";
                            var maxError = \"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.plusMax", array("%max%" => $this->getAttribute(($context["limitService"] ?? $this->getContext($context, "limitService")), "getMaxValue", array())), "messages"), "html", null, true);
        echo "<br>\";
                            if(\$('#form_number').val() == max){
                                \$(\"#resultLog\").append(maxError);
                            } else {
                                var newAnswer = parseInt(\$('#form_number').val()) + 1;
                                console.log(newAnswer);
                                \$('#form_number').val(newAnswer);                        
                            }
                        }
                }
            });
            var formMinus = new Vue({
                el: '#form_minus',
                data: {
                  name: 'Vue.js'
                },
                // define methods under the `methods` object
                methods: {
                    minus: function (event) {
                        var min = ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["limitService"] ?? $this->getContext($context, "limitService")), "getMinValue", array()), "html", null, true);
        echo ";
                        var minError = \"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.minusMax", array("%min%" => $this->getAttribute(($context["limitService"] ?? $this->getContext($context, "limitService")), "getMinValue", array())), "messages"), "html", null, true);
        echo "<br>\";
                        if(\$('#form_number').val() == min){
                            \$(\"#resultLog\").append(minError);
                        } else {
                            var newAnswer = parseInt(\$('#form_number').val()) - 1;
                            console.log(newAnswer);
                            \$('#form_number').val(newAnswer);
                        }
                    }
                }
            });
        });
    </script>
";
        
        $__internal_2ea7550564988723c2c5d8176ff81caba024a408c80de1b9c3b0557f4af79bde->leave($__internal_2ea7550564988723c2c5d8176ff81caba024a408c80de1b9c3b0557f4af79bde_prof);

        
        $__internal_051b1167d3f8d879c1c3c55d9c9bec46f47aad2b859b57cde41cbf6baf0d27d2->leave($__internal_051b1167d3f8d879c1c3c55d9c9bec46f47aad2b859b57cde41cbf6baf0d27d2_prof);

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
        return array (  218 => 101,  214 => 100,  192 => 81,  188 => 80,  152 => 47,  129 => 26,  120 => 25,  107 => 22,  101 => 19,  95 => 16,  89 => 13,  83 => 10,  77 => 7,  72 => 5,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
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
            {{ form_widget(form.number, {'attr': {'type': 'number', 'min' : limitService.getMinValue, 'max' : limitService.getMaxValue, 'default':0}}) }}
        </div>
        <div class=\"col-sm-3\">
            {{ form_widget(form.plus, {'attr': {' v-on:click': 'plus'}}) }}
        </div>
        <div class=\"col-sm-3\">
            {{ form_widget(form.minus, {'attr': {' v-on:click': 'minus'}}) }}
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
            \$(\"#form_number\").val(0);
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
            });
            var formPlus = new Vue({
                el: '#form_plus',
                data: {
                  name: 'Vue.js'
                },
                // define methods under the `methods` object
                methods: {
                    plus: function (event) {
                            var max = {{limitService.getMaxValue}};
                            var maxError = \"{{ 'form.plusMax' | trans({'%max%': limitService.getMaxValue}, \"messages\") }}<br>\";
                            if(\$('#form_number').val() == max){
                                \$(\"#resultLog\").append(maxError);
                            } else {
                                var newAnswer = parseInt(\$('#form_number').val()) + 1;
                                console.log(newAnswer);
                                \$('#form_number').val(newAnswer);                        
                            }
                        }
                }
            });
            var formMinus = new Vue({
                el: '#form_minus',
                data: {
                  name: 'Vue.js'
                },
                // define methods under the `methods` object
                methods: {
                    minus: function (event) {
                        var min = {{limitService.getMinValue}};
                        var minError = \"{{ 'form.minusMax' | trans({'%min%': limitService.getMinValue}, \"messages\") }}<br>\";
                        if(\$('#form_number').val() == min){
                            \$(\"#resultLog\").append(minError);
                        } else {
                            var newAnswer = parseInt(\$('#form_number').val()) - 1;
                            console.log(newAnswer);
                            \$('#form_number').val(newAnswer);
                        }
                    }
                }
            });
        });
    </script>
{% endblock %}", "FrontBundle:Home:home.html.twig", "E:\\wamp64\\www\\numberGame\\src\\FrontBundle/Resources/views/Home/home.html.twig");
    }
}
