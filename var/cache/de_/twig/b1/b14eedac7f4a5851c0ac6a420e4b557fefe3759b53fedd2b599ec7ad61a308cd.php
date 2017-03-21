<?php

/* @Front/Home/home.html.twig */
class __TwigTemplate_10dd2901901819b3bf231372b6b50b811c244b81045106ceeea7fadc71cb535e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle:Common:layout.html.twig", "@Front/Home/home.html.twig", 1);
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
        $__internal_b59daaf783938b779a468c122502432a2e50e7c573cb7f45afea766b085ae9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59daaf783938b779a468c122502432a2e50e7c573cb7f45afea766b085ae9e5->enter($__internal_b59daaf783938b779a468c122502432a2e50e7c573cb7f45afea766b085ae9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/Home/home.html.twig"));

        $__internal_2ee8a696a741403fbce1d54446b8b244bfe2c3d9f7b3165b6207e4cea580e610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee8a696a741403fbce1d54446b8b244bfe2c3d9f7b3165b6207e4cea580e610->enter($__internal_2ee8a696a741403fbce1d54446b8b244bfe2c3d9f7b3165b6207e4cea580e610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/Home/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b59daaf783938b779a468c122502432a2e50e7c573cb7f45afea766b085ae9e5->leave($__internal_b59daaf783938b779a468c122502432a2e50e7c573cb7f45afea766b085ae9e5_prof);

        
        $__internal_2ee8a696a741403fbce1d54446b8b244bfe2c3d9f7b3165b6207e4cea580e610->leave($__internal_2ee8a696a741403fbce1d54446b8b244bfe2c3d9f7b3165b6207e4cea580e610_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7528cf936525a5927aef83f37398729837ea717781f7210d889218f1807d1d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7528cf936525a5927aef83f37398729837ea717781f7210d889218f1807d1d4a->enter($__internal_7528cf936525a5927aef83f37398729837ea717781f7210d889218f1807d1d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aab351cc18e340f68d7d745e068ad8c3b1f3fd84555327c9e668af3cc8c682f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab351cc18e340f68d7d745e068ad8c3b1f3fd84555327c9e668af3cc8c682f9->enter($__internal_aab351cc18e340f68d7d745e068ad8c3b1f3fd84555327c9e668af3cc8c682f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.home", array(), "messages"), "html", null, true);
        
        $__internal_aab351cc18e340f68d7d745e068ad8c3b1f3fd84555327c9e668af3cc8c682f9->leave($__internal_aab351cc18e340f68d7d745e068ad8c3b1f3fd84555327c9e668af3cc8c682f9_prof);

        
        $__internal_7528cf936525a5927aef83f37398729837ea717781f7210d889218f1807d1d4a->leave($__internal_7528cf936525a5927aef83f37398729837ea717781f7210d889218f1807d1d4a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c5a59fec1524af7b72518c1d377084ee6d88706b5fef964e09baf45a0e13f23c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5a59fec1524af7b72518c1d377084ee6d88706b5fef964e09baf45a0e13f23c->enter($__internal_c5a59fec1524af7b72518c1d377084ee6d88706b5fef964e09baf45a0e13f23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_484a4a1ac4e68d0d5f899bd87d7c2f104106d45eb6a0b8c34527735244d1d708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484a4a1ac4e68d0d5f899bd87d7c2f104106d45eb6a0b8c34527735244d1d708->enter($__internal_484a4a1ac4e68d0d5f899bd87d7c2f104106d45eb6a0b8c34527735244d1d708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_484a4a1ac4e68d0d5f899bd87d7c2f104106d45eb6a0b8c34527735244d1d708->leave($__internal_484a4a1ac4e68d0d5f899bd87d7c2f104106d45eb6a0b8c34527735244d1d708_prof);

        
        $__internal_c5a59fec1524af7b72518c1d377084ee6d88706b5fef964e09baf45a0e13f23c->leave($__internal_c5a59fec1524af7b72518c1d377084ee6d88706b5fef964e09baf45a0e13f23c_prof);

    }

    // line 25
    public function block_javascripts_body($context, array $blocks = array())
    {
        $__internal_9172614fa3e8099f9df1c9465d1ee6dee6602b98ce3d18ee41937fd9f32866e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9172614fa3e8099f9df1c9465d1ee6dee6602b98ce3d18ee41937fd9f32866e7->enter($__internal_9172614fa3e8099f9df1c9465d1ee6dee6602b98ce3d18ee41937fd9f32866e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

        $__internal_fd83ba9e185d0bf7aa297fc15a722b9dc99a6f8b3ddde5ef9221df56e55540a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd83ba9e185d0bf7aa297fc15a722b9dc99a6f8b3ddde5ef9221df56e55540a4->enter($__internal_fd83ba9e185d0bf7aa297fc15a722b9dc99a6f8b3ddde5ef9221df56e55540a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

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
        
        $__internal_fd83ba9e185d0bf7aa297fc15a722b9dc99a6f8b3ddde5ef9221df56e55540a4->leave($__internal_fd83ba9e185d0bf7aa297fc15a722b9dc99a6f8b3ddde5ef9221df56e55540a4_prof);

        
        $__internal_9172614fa3e8099f9df1c9465d1ee6dee6602b98ce3d18ee41937fd9f32866e7->leave($__internal_9172614fa3e8099f9df1c9465d1ee6dee6602b98ce3d18ee41937fd9f32866e7_prof);

    }

    public function getTemplateName()
    {
        return "@Front/Home/home.html.twig";
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
{% endblock %}", "@Front/Home/home.html.twig", "E:\\wamp64\\www\\numberGame\\src\\FrontBundle\\Resources\\views\\Home\\home.html.twig");
    }
}
