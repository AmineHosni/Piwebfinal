<?php

/* product/listContent.html.twig */
class __TwigTemplate_ec026d6d4b9ffb2f1a106883fdddfe45ca397985732bef8d3b960c4ee152ac61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "product/listContent.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle:eshop:main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91d6f4a4d8790b770dc1006b004731455f64cbdac409cb377f4bf638beba918e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d6f4a4d8790b770dc1006b004731455f64cbdac409cb377f4bf638beba918e->enter($__internal_91d6f4a4d8790b770dc1006b004731455f64cbdac409cb377f4bf638beba918e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/listContent.html.twig"));

        $__internal_9bfcf3f1100b90f6f11475506023b07002f288ba6c2250ec664acc32ba16a7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bfcf3f1100b90f6f11475506023b07002f288ba6c2250ec664acc32ba16a7a8->enter($__internal_9bfcf3f1100b90f6f11475506023b07002f288ba6c2250ec664acc32ba16a7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/listContent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91d6f4a4d8790b770dc1006b004731455f64cbdac409cb377f4bf638beba918e->leave($__internal_91d6f4a4d8790b770dc1006b004731455f64cbdac409cb377f4bf638beba918e_prof);

        
        $__internal_9bfcf3f1100b90f6f11475506023b07002f288ba6c2250ec664acc32ba16a7a8->leave($__internal_9bfcf3f1100b90f6f11475506023b07002f288ba6c2250ec664acc32ba16a7a8_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_bcb2d2056090b331c1d94d43b36856eb609157fe66ec91fd6379d57a44ad00f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb2d2056090b331c1d94d43b36856eb609157fe66ec91fd6379d57a44ad00f2->enter($__internal_bcb2d2056090b331c1d94d43b36856eb609157fe66ec91fd6379d57a44ad00f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_29c38d9fec77e1c90ec01211e528638d29f8e8087fd957551ee7fc786d339ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c38d9fec77e1c90ec01211e528638d29f8e8087fd957551ee7fc786d339ea4->enter($__internal_29c38d9fec77e1c90ec01211e528638d29f8e8087fd957551ee7fc786d339ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <form id=\"jsform\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <h4 class=\"heada__title\">
                        <!-- an icon-->
                        <i class=\"fa fa-archive\"></i>
produits disponibles                    </h4>
                </div>
            </div>
            <br>
            <br>
            <br>

            <div class=\"col-sm-4\">
                <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_indexme");
        echo "\" class=\"btn btn-success\"> mes produits<i
                            class=\"fa fa-gear\"> </i> </a>

               </div>
            <div class=\"row\">
                <br>                <br>
                <br>


                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">

                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-8\">
                            <div class=\"form-group\">

                        <label >recherche</label>
                                             <select name=\"categorie\" class=\"js-categorie form-control\"> <option value=\"\">tous les categories</option>
                                                 <!-- and now we are looping in the array that the twig page has receved as a parameter .. as simple as that-->
                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcategorie"]) {
            // line 43
            echo "                                <!-- show te name but keep the id as a value to be used .. as simple as that-->
                                <option value=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["itemcategorie"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["itemcategorie"], "nom", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcategorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
                        </select>
                    </div>
                </div>
                    </div>
                </div>

            </div>
            <div class=\"container main-container\">

                <div id=\"container\" >
                </div> </div>
        </form>
    </div>
";
        
        $__internal_29c38d9fec77e1c90ec01211e528638d29f8e8087fd957551ee7fc786d339ea4->leave($__internal_29c38d9fec77e1c90ec01211e528638d29f8e8087fd957551ee7fc786d339ea4_prof);

        
        $__internal_bcb2d2056090b331c1d94d43b36856eb609157fe66ec91fd6379d57a44ad00f2->leave($__internal_bcb2d2056090b331c1d94d43b36856eb609157fe66ec91fd6379d57a44ad00f2_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35664fee222939beccd6e5cbe28750f383b4c0f9f94f0e27822996b764498ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35664fee222939beccd6e5cbe28750f383b4c0f9f94f0e27822996b764498ee5->enter($__internal_35664fee222939beccd6e5cbe28750f383b4c0f9f94f0e27822996b764498ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1dfc5cb093a9650d2a6b416cc78f87898f5c872747230a028a729c4f616bbe10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dfc5cb093a9650d2a6b416cc78f87898f5c872747230a028a729c4f616bbe10->enter($__internal_1dfc5cb093a9650d2a6b416cc78f87898f5c872747230a028a729c4f616bbe10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        (function (\$) {

            var form = \$('#jsform'),

                    jsFormUrl = '',

                    container = \$('#container');

            \$('.js-categorie').on('change', function () {

                ajaxPost('modifier');
            });


            function init() {

                jsFormUrl = '";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_change");
        echo "';
            }

            function ajaxPost(action) {
                container.addClass('working');
                \$.ajax({
                    type: \"POST\",
                    data: form.serialize(),
                    url: jsFormUrl,//the rout leading to our ajax action page that we have deleted before understanding what i does exactely

                    success: function (data) {
                        container.removeClass('working');
                        init();
                        if (!action) {
                            container.empty().hide().html(data).fadeIn();
                        } else
                            ajaxPost();
                    },
                    error: function () {
                        alert('service denied');
                        container.removeClass('working');
                    }
                });
                return false;
            }
            init();
            setTimeout(ajaxPost, 1);
        })(jQuery);
    </script>
";
        
        $__internal_1dfc5cb093a9650d2a6b416cc78f87898f5c872747230a028a729c4f616bbe10->leave($__internal_1dfc5cb093a9650d2a6b416cc78f87898f5c872747230a028a729c4f616bbe10_prof);

        
        $__internal_35664fee222939beccd6e5cbe28750f383b4c0f9f94f0e27822996b764498ee5->leave($__internal_35664fee222939beccd6e5cbe28750f383b4c0f9f94f0e27822996b764498ee5_prof);

    }

    public function getTemplateName()
    {
        return "product/listContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 80,  144 => 62,  135 => 61,  111 => 46,  101 => 44,  98 => 43,  94 => 42,  67 => 18,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MainBundle:eshop:main.html.twig\" %}
{% block content %}
    <div class=\"panel panel-default\">
        <form id=\"jsform\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <h4 class=\"heada__title\">
                        <!-- an icon-->
                        <i class=\"fa fa-archive\"></i>
produits disponibles                    </h4>
                </div>
            </div>
            <br>
            <br>
            <br>

            <div class=\"col-sm-4\">
                <a href=\"{{ path(\"product_indexme\") }}\" class=\"btn btn-success\"> mes produits<i
                            class=\"fa fa-gear\"> </i> </a>

               </div>
            <div class=\"row\">
                <br>                <br>
                <br>


                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">

                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-8\">
                            <div class=\"form-group\">

                        <label >recherche</label>
                                             <select name=\"categorie\" class=\"js-categorie form-control\"> <option value=\"\">tous les categories</option>
                                                 <!-- and now we are looping in the array that the twig page has receved as a parameter .. as simple as that-->
                            {% for itemcategorie in categorie %}
                                <!-- show te name but keep the id as a value to be used .. as simple as that-->
                                <option value=\"{{itemcategorie.id}}\">{{itemcategorie.nom}}</option>
                            {% endfor %}

                        </select>
                    </div>
                </div>
                    </div>
                </div>

            </div>
            <div class=\"container main-container\">

                <div id=\"container\" >
                </div> </div>
        </form>
    </div>
{% endblock %}
{% block javascripts %}
    {{parent()}}
    <script>
        (function (\$) {

            var form = \$('#jsform'),

                    jsFormUrl = '',

                    container = \$('#container');

            \$('.js-categorie').on('change', function () {

                ajaxPost('modifier');
            });


            function init() {

                jsFormUrl = '{{ path('product_change') }}';
            }

            function ajaxPost(action) {
                container.addClass('working');
                \$.ajax({
                    type: \"POST\",
                    data: form.serialize(),
                    url: jsFormUrl,//the rout leading to our ajax action page that we have deleted before understanding what i does exactely

                    success: function (data) {
                        container.removeClass('working');
                        init();
                        if (!action) {
                            container.empty().hide().html(data).fadeIn();
                        } else
                            ajaxPost();
                    },
                    error: function () {
                        alert('service denied');
                        container.removeClass('working');
                    }
                });
                return false;
            }
            init();
            setTimeout(ajaxPost, 1);
        })(jQuery);
    </script>
{% endblock %}

", "product/listContent.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\product\\listContent.html.twig");
    }
}
