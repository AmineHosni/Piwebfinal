<?php

/* :product:adminList.html.twig */
class __TwigTemplate_d73a2a8d5f1f1bdacb3338a48610b563c3b5c961305f74a22529a9a5f560ba9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base1.html.twig", ":product:adminList.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c77b9b6fbbdb52b521e5c5d686a0af3aaf094a1725fff557ff2e5c5f5c21c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c77b9b6fbbdb52b521e5c5d686a0af3aaf094a1725fff557ff2e5c5f5c21c57->enter($__internal_7c77b9b6fbbdb52b521e5c5d686a0af3aaf094a1725fff557ff2e5c5f5c21c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:adminList.html.twig"));

        $__internal_520836d2dd2d22ed5a6054aad2151a8ffc4fd5bd28e35cef4d828ca2ab13428c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520836d2dd2d22ed5a6054aad2151a8ffc4fd5bd28e35cef4d828ca2ab13428c->enter($__internal_520836d2dd2d22ed5a6054aad2151a8ffc4fd5bd28e35cef4d828ca2ab13428c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:adminList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c77b9b6fbbdb52b521e5c5d686a0af3aaf094a1725fff557ff2e5c5f5c21c57->leave($__internal_7c77b9b6fbbdb52b521e5c5d686a0af3aaf094a1725fff557ff2e5c5f5c21c57_prof);

        
        $__internal_520836d2dd2d22ed5a6054aad2151a8ffc4fd5bd28e35cef4d828ca2ab13428c->leave($__internal_520836d2dd2d22ed5a6054aad2151a8ffc4fd5bd28e35cef4d828ca2ab13428c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f00850ad73c2bde6897a367ea9dc5a8a57864a676dcb557b6832932d9b25a449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00850ad73c2bde6897a367ea9dc5a8a57864a676dcb557b6832932d9b25a449->enter($__internal_f00850ad73c2bde6897a367ea9dc5a8a57864a676dcb557b6832932d9b25a449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a053ad7c4ffb8029d8daaf7754b2c721290ec7b4dd11ae3da2306194162f939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a053ad7c4ffb8029d8daaf7754b2c721290ec7b4dd11ae3da2306194162f939->enter($__internal_8a053ad7c4ffb8029d8daaf7754b2c721290ec7b4dd11ae3da2306194162f939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"content-wrapper\">


        <br><br>
        <form id=\"jsform\" >
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <!-- Split button -->

                    <h1 class=\"page-header\">
                        <p> liste des produits</p>
                    </h1>

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-lg btn-danger\" id=\"js-activer\" data-action=\"1\" > approuver  </button>


                    </div>

                </div>
            </div>
            <div id=\"container\" class=\"row\">

                <div id=\"xcontainer\" class=\"row\">

                </div>            </div>

        </form>            </div>

";
        
        $__internal_8a053ad7c4ffb8029d8daaf7754b2c721290ec7b4dd11ae3da2306194162f939->leave($__internal_8a053ad7c4ffb8029d8daaf7754b2c721290ec7b4dd11ae3da2306194162f939_prof);

        
        $__internal_f00850ad73c2bde6897a367ea9dc5a8a57864a676dcb557b6832932d9b25a449->leave($__internal_f00850ad73c2bde6897a367ea9dc5a8a57864a676dcb557b6832932d9b25a449_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bd0e373f4ee2d4ea96f2f2804d8782d8caf674a2543a8fa99386e9cdb54f3f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0e373f4ee2d4ea96f2f2804d8782d8caf674a2543a8fa99386e9cdb54f3f39->enter($__internal_bd0e373f4ee2d4ea96f2f2804d8782d8caf674a2543a8fa99386e9cdb54f3f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_45733294e373503875728e384ef2df82acca586a98a228491d3d80b3cb0d2ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45733294e373503875728e384ef2df82acca586a98a228491d3d80b3cb0d2ad4->enter($__internal_45733294e373503875728e384ef2df82acca586a98a228491d3d80b3cb0d2ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        (function (\$) {
            var form = \$('#jsform'),
                    jsFormUrl = '',
                    container = \$('#xcontainer');


            \$('#js-activer').on('click', function () {
                var url = '";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_ajaxListProd", array("etat" => 1111));
        echo "',
                        etat = \$(this).data('action');
                jsFormUrl = url.replace('1111', etat);
                ajaxPost('activer');
            });


            function init() {
                jsFormUrl = '";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_autoriser_produitAjax");
        echo "';            }
            function ajaxPost(action) {
                container.addClass('working');
                \$.ajax({
                    type: \"POST\",
                    data: form.serialize(),
                    url: jsFormUrl,
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
            form.on('submit', ajaxPost);
            init();
            setTimeout(ajaxPost, 1);


        })(jQuery);
    </script>
";
        
        $__internal_45733294e373503875728e384ef2df82acca586a98a228491d3d80b3cb0d2ad4->leave($__internal_45733294e373503875728e384ef2df82acca586a98a228491d3d80b3cb0d2ad4_prof);

        
        $__internal_bd0e373f4ee2d4ea96f2f2804d8782d8caf674a2543a8fa99386e9cdb54f3f39->leave($__internal_bd0e373f4ee2d4ea96f2f2804d8782d8caf674a2543a8fa99386e9cdb54f3f39_prof);

    }

    public function getTemplateName()
    {
        return ":product:adminList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 51,  111 => 43,  98 => 34,  89 => 33,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base1.html.twig\" %}
{% block body %}
    <div class=\"content-wrapper\">


        <br><br>
        <form id=\"jsform\" >
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <!-- Split button -->

                    <h1 class=\"page-header\">
                        <p> liste des produits</p>
                    </h1>

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-lg btn-danger\" id=\"js-activer\" data-action=\"1\" > approuver  </button>


                    </div>

                </div>
            </div>
            <div id=\"container\" class=\"row\">

                <div id=\"xcontainer\" class=\"row\">

                </div>            </div>

        </form>            </div>

{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script>
        (function (\$) {
            var form = \$('#jsform'),
                    jsFormUrl = '',
                    container = \$('#xcontainer');


            \$('#js-activer').on('click', function () {
                var url = '{{ path('admin_ajaxListProd', {'etat': 1111 }) }}',
                        etat = \$(this).data('action');
                jsFormUrl = url.replace('1111', etat);
                ajaxPost('activer');
            });


            function init() {
                jsFormUrl = '{{ path('admin_autoriser_produitAjax') }}';            }
            function ajaxPost(action) {
                container.addClass('working');
                \$.ajax({
                    type: \"POST\",
                    data: form.serialize(),
                    url: jsFormUrl,
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
            form.on('submit', ajaxPost);
            init();
            setTimeout(ajaxPost, 1);


        })(jQuery);
    </script>
{% endblock %}
", ":product:adminList.html.twig", "C:\\wamp64\\www\\test\\app/Resources\\views/product/adminList.html.twig");
    }
}
