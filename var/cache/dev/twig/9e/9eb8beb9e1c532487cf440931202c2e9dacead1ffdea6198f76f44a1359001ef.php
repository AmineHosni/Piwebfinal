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
        $__internal_25c136cd1841701a51f2fafcec1b4543e2bca63c7275bc118f5a05305c8f9780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c136cd1841701a51f2fafcec1b4543e2bca63c7275bc118f5a05305c8f9780->enter($__internal_25c136cd1841701a51f2fafcec1b4543e2bca63c7275bc118f5a05305c8f9780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/listContent.html.twig"));

        $__internal_35791ace7420bf73ef83979ba1932a791cdef302a354438fb52a624905fde8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35791ace7420bf73ef83979ba1932a791cdef302a354438fb52a624905fde8ee->enter($__internal_35791ace7420bf73ef83979ba1932a791cdef302a354438fb52a624905fde8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/listContent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25c136cd1841701a51f2fafcec1b4543e2bca63c7275bc118f5a05305c8f9780->leave($__internal_25c136cd1841701a51f2fafcec1b4543e2bca63c7275bc118f5a05305c8f9780_prof);

        
        $__internal_35791ace7420bf73ef83979ba1932a791cdef302a354438fb52a624905fde8ee->leave($__internal_35791ace7420bf73ef83979ba1932a791cdef302a354438fb52a624905fde8ee_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_27c3339adbede39a120dd6e1e6854da2107a466b207bbfbe2b449c82fe701331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c3339adbede39a120dd6e1e6854da2107a466b207bbfbe2b449c82fe701331->enter($__internal_27c3339adbede39a120dd6e1e6854da2107a466b207bbfbe2b449c82fe701331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c6e33ad210ed28fe02daf9b9938b9ac85d84d1fdf6f911ca76d72b48b8adb32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e33ad210ed28fe02daf9b9938b9ac85d84d1fdf6f911ca76d72b48b8adb32f->enter($__internal_c6e33ad210ed28fe02daf9b9938b9ac85d84d1fdf6f911ca76d72b48b8adb32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c6e33ad210ed28fe02daf9b9938b9ac85d84d1fdf6f911ca76d72b48b8adb32f->leave($__internal_c6e33ad210ed28fe02daf9b9938b9ac85d84d1fdf6f911ca76d72b48b8adb32f_prof);

        
        $__internal_27c3339adbede39a120dd6e1e6854da2107a466b207bbfbe2b449c82fe701331->leave($__internal_27c3339adbede39a120dd6e1e6854da2107a466b207bbfbe2b449c82fe701331_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8861ab9b900de7aa6fcc463a208e8b8406cdc14bb842fdd335ebb834cf7ea206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8861ab9b900de7aa6fcc463a208e8b8406cdc14bb842fdd335ebb834cf7ea206->enter($__internal_8861ab9b900de7aa6fcc463a208e8b8406cdc14bb842fdd335ebb834cf7ea206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f69558498a0bdc774e0a5067eb15bbd8e1fb24f26e737db2f0e53bfbdebc8243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69558498a0bdc774e0a5067eb15bbd8e1fb24f26e737db2f0e53bfbdebc8243->enter($__internal_f69558498a0bdc774e0a5067eb15bbd8e1fb24f26e737db2f0e53bfbdebc8243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f69558498a0bdc774e0a5067eb15bbd8e1fb24f26e737db2f0e53bfbdebc8243->leave($__internal_f69558498a0bdc774e0a5067eb15bbd8e1fb24f26e737db2f0e53bfbdebc8243_prof);

        
        $__internal_8861ab9b900de7aa6fcc463a208e8b8406cdc14bb842fdd335ebb834cf7ea206->leave($__internal_8861ab9b900de7aa6fcc463a208e8b8406cdc14bb842fdd335ebb834cf7ea206_prof);

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

", "product/listContent.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\app\\Resources\\views\\product\\listContent.html.twig");
    }
}
