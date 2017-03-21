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
        $__internal_ae1e2631199b1a44376561f9453065f600b1c566e109403aaa9660e6b1204cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae1e2631199b1a44376561f9453065f600b1c566e109403aaa9660e6b1204cae->enter($__internal_ae1e2631199b1a44376561f9453065f600b1c566e109403aaa9660e6b1204cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Home:home.html.twig"));

        $__internal_e92df3854126ef2cececbb0113310295a40e9fee5308f958024f8da0358ada7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92df3854126ef2cececbb0113310295a40e9fee5308f958024f8da0358ada7f->enter($__internal_e92df3854126ef2cececbb0113310295a40e9fee5308f958024f8da0358ada7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Home:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae1e2631199b1a44376561f9453065f600b1c566e109403aaa9660e6b1204cae->leave($__internal_ae1e2631199b1a44376561f9453065f600b1c566e109403aaa9660e6b1204cae_prof);

        
        $__internal_e92df3854126ef2cececbb0113310295a40e9fee5308f958024f8da0358ada7f->leave($__internal_e92df3854126ef2cececbb0113310295a40e9fee5308f958024f8da0358ada7f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_98c8eb56f7a63eecf322725d1b26bb651ae367137b7d09208a2942ac5b116913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c8eb56f7a63eecf322725d1b26bb651ae367137b7d09208a2942ac5b116913->enter($__internal_98c8eb56f7a63eecf322725d1b26bb651ae367137b7d09208a2942ac5b116913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_84ba3e69b351e7b68cee91fbf9a9c6006a7f168c3d85cea2b0bb8770fac878da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ba3e69b351e7b68cee91fbf9a9c6006a7f168c3d85cea2b0bb8770fac878da->enter($__internal_84ba3e69b351e7b68cee91fbf9a9c6006a7f168c3d85cea2b0bb8770fac878da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.home", array(), "messages"), "html", null, true);
        
        $__internal_84ba3e69b351e7b68cee91fbf9a9c6006a7f168c3d85cea2b0bb8770fac878da->leave($__internal_84ba3e69b351e7b68cee91fbf9a9c6006a7f168c3d85cea2b0bb8770fac878da_prof);

        
        $__internal_98c8eb56f7a63eecf322725d1b26bb651ae367137b7d09208a2942ac5b116913->leave($__internal_98c8eb56f7a63eecf322725d1b26bb651ae367137b7d09208a2942ac5b116913_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6b3164f7b3393d07607d94f081c8a66ea03392cc626f087b90c8e02abbbecc27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3164f7b3393d07607d94f081c8a66ea03392cc626f087b90c8e02abbbecc27->enter($__internal_6b3164f7b3393d07607d94f081c8a66ea03392cc626f087b90c8e02abbbecc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e571d9372a0f350d62773257f7024188e6681fa06bba9ef0d5b697672fca4387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e571d9372a0f350d62773257f7024188e6681fa06bba9ef0d5b697672fca4387->enter($__internal_e571d9372a0f350d62773257f7024188e6681fa06bba9ef0d5b697672fca4387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e571d9372a0f350d62773257f7024188e6681fa06bba9ef0d5b697672fca4387->leave($__internal_e571d9372a0f350d62773257f7024188e6681fa06bba9ef0d5b697672fca4387_prof);

        
        $__internal_6b3164f7b3393d07607d94f081c8a66ea03392cc626f087b90c8e02abbbecc27->leave($__internal_6b3164f7b3393d07607d94f081c8a66ea03392cc626f087b90c8e02abbbecc27_prof);

    }

    // line 25
    public function block_javascripts_body($context, array $blocks = array())
    {
        $__internal_723470ebe1618de9beae2106138c5e3070060bbf92532837c83953ac59e94fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_723470ebe1618de9beae2106138c5e3070060bbf92532837c83953ac59e94fef->enter($__internal_723470ebe1618de9beae2106138c5e3070060bbf92532837c83953ac59e94fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

        $__internal_038934a225687f63cfe388dff58ebdd84b5ca2e2ab117d91d19991213f86127c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038934a225687f63cfe388dff58ebdd84b5ca2e2ab117d91d19991213f86127c->enter($__internal_038934a225687f63cfe388dff58ebdd84b5ca2e2ab117d91d19991213f86127c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_body"));

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
        
        $__internal_038934a225687f63cfe388dff58ebdd84b5ca2e2ab117d91d19991213f86127c->leave($__internal_038934a225687f63cfe388dff58ebdd84b5ca2e2ab117d91d19991213f86127c_prof);

        
        $__internal_723470ebe1618de9beae2106138c5e3070060bbf92532837c83953ac59e94fef->leave($__internal_723470ebe1618de9beae2106138c5e3070060bbf92532837c83953ac59e94fef_prof);

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
