<?php

/* :product:listContent.html.twig */
class __TwigTemplate_6e0fb3628b10c04d62e5f04e2a84dfa2476de4f2862e581e7faceae9cd1bcf8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", ":product:listContent.html.twig", 1);
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
        $__internal_7855f8d744baa9cf6ad04c19771c8eebee3d343e75f151b01ac81a1d0f47603e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7855f8d744baa9cf6ad04c19771c8eebee3d343e75f151b01ac81a1d0f47603e->enter($__internal_7855f8d744baa9cf6ad04c19771c8eebee3d343e75f151b01ac81a1d0f47603e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:listContent.html.twig"));

        $__internal_dac3db9606819deb860c24a170ade79617ff1c29891833a0d92b2e4825c0ba9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac3db9606819deb860c24a170ade79617ff1c29891833a0d92b2e4825c0ba9e->enter($__internal_dac3db9606819deb860c24a170ade79617ff1c29891833a0d92b2e4825c0ba9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:listContent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7855f8d744baa9cf6ad04c19771c8eebee3d343e75f151b01ac81a1d0f47603e->leave($__internal_7855f8d744baa9cf6ad04c19771c8eebee3d343e75f151b01ac81a1d0f47603e_prof);

        
        $__internal_dac3db9606819deb860c24a170ade79617ff1c29891833a0d92b2e4825c0ba9e->leave($__internal_dac3db9606819deb860c24a170ade79617ff1c29891833a0d92b2e4825c0ba9e_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_08f23454f05cd2c33cabe3663fe18c29c4d126ba8484dc34a682af42b4ee65b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f23454f05cd2c33cabe3663fe18c29c4d126ba8484dc34a682af42b4ee65b5->enter($__internal_08f23454f05cd2c33cabe3663fe18c29c4d126ba8484dc34a682af42b4ee65b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_26a778a015c970e1cd28c1036d3b9f44681c62d6b60acd09288581eb6647e256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a778a015c970e1cd28c1036d3b9f44681c62d6b60acd09288581eb6647e256->enter($__internal_26a778a015c970e1cd28c1036d3b9f44681c62d6b60acd09288581eb6647e256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <form id=\"jsform\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <h4 class=\"heada__title\">
                        <!-- an icon-->
                        <i class=\"fa fa-archive\"></i>
                        Projets ouverts
                    </h4>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h2>Custom search field</h2>
                                    <div id=\"custom-search-input\">
                                        <div class=\"input-group col-md-12\">
                                            <input type=\"text\" class=\"form-control input-lg\" placeholder=\"chercher\" name=\"mot\" />
                                            <span class=\"input-group-btn\">
                        <button class=\"btn btn-info btn-lg\" type=\"button\" class=\"js-searcher\">
                            <i class=\"glyphicon glyphicon-search\"></i>
                        </button>
                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label >CatÃ©gorie</label>
                        <!-- remember the name of the form for it is mentinned in the java script codes-->
                        <select name=\"categorie\" class=\"js-categorie form-control\">
                            <!-- and now we are looping in the array that the twig page has receved as a parameter .. as simple as that-->
                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")));
        foreach ($context['_seq'] as $context["_key"] => $context["itemcategorie"]) {
            // line 40
            echo "                                <!-- show te name but keep the id as a value to be used .. as simple as that-->
                                <option value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["itemcategorie"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["itemcategorie"], "nom", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemcategorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
                        </select>
                    </div>
                </div>

                <div id=\"container\">
                </div>
            </div>
        </form>
    </div>
";
        
        $__internal_26a778a015c970e1cd28c1036d3b9f44681c62d6b60acd09288581eb6647e256->leave($__internal_26a778a015c970e1cd28c1036d3b9f44681c62d6b60acd09288581eb6647e256_prof);

        
        $__internal_08f23454f05cd2c33cabe3663fe18c29c4d126ba8484dc34a682af42b4ee65b5->leave($__internal_08f23454f05cd2c33cabe3663fe18c29c4d126ba8484dc34a682af42b4ee65b5_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bec656e64321035bd1b84b1708e123da644f01dfa4f2767ecfca6797fa6b4d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec656e64321035bd1b84b1708e123da644f01dfa4f2767ecfca6797fa6b4d74->enter($__internal_bec656e64321035bd1b84b1708e123da644f01dfa4f2767ecfca6797fa6b4d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9fa7a94adce5ef382f161e328853547496379ef9c3da1180039ec99ced7abe3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa7a94adce5ef382f161e328853547496379ef9c3da1180039ec99ced7abe3e->enter($__internal_9fa7a94adce5ef382f161e328853547496379ef9c3da1180039ec99ced7abe3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
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
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_all");
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
        
        $__internal_9fa7a94adce5ef382f161e328853547496379ef9c3da1180039ec99ced7abe3e->leave($__internal_9fa7a94adce5ef382f161e328853547496379ef9c3da1180039ec99ced7abe3e_prof);

        
        $__internal_bec656e64321035bd1b84b1708e123da644f01dfa4f2767ecfca6797fa6b4d74->leave($__internal_bec656e64321035bd1b84b1708e123da644f01dfa4f2767ecfca6797fa6b4d74_prof);

    }

    public function getTemplateName()
    {
        return ":product:listContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 73,  134 => 55,  125 => 54,  105 => 43,  95 => 41,  92 => 40,  88 => 39,  50 => 3,  41 => 2,  11 => 1,);
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
                        Projets ouverts
                    </h4>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h2>Custom search field</h2>
                                    <div id=\"custom-search-input\">
                                        <div class=\"input-group col-md-12\">
                                            <input type=\"text\" class=\"form-control input-lg\" placeholder=\"chercher\" name=\"mot\" />
                                            <span class=\"input-group-btn\">
                        <button class=\"btn btn-info btn-lg\" type=\"button\" class=\"js-searcher\">
                            <i class=\"glyphicon glyphicon-search\"></i>
                        </button>
                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label >CatÃ©gorie</label>
                        <!-- remember the name of the form for it is mentinned in the java script codes-->
                        <select name=\"categorie\" class=\"js-categorie form-control\">
                            <!-- and now we are looping in the array that the twig page has receved as a parameter .. as simple as that-->
                            {% for itemcategorie in categorie %}
                                <!-- show te name but keep the id as a value to be used .. as simple as that-->
                                <option value=\"{{itemcategorie.id}}\">{{itemcategorie.nom}}</option>
                            {% endfor %}

                        </select>
                    </div>
                </div>

                <div id=\"container\">
                </div>
            </div>
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

                jsFormUrl = '{{ path('product_all') }}';
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

", ":product:listContent.html.twig", "C:\\wamp64\\www\\test\\app/Resources\\views/product/listContent.html.twig");
    }
}
