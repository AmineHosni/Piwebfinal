<?php

/* MainBundle:user:adminUsers.html.twig */
class __TwigTemplate_3fc8b491c02f4160622a740f829c80c28b90f31ff0fa1f5e9d679cd1289d70de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base1.html.twig", "MainBundle:user:adminUsers.html.twig", 1);
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
        $__internal_45d44af0355b786ec64a5bac7611862638dc8d9a55aea45788e85385269e45cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d44af0355b786ec64a5bac7611862638dc8d9a55aea45788e85385269e45cf->enter($__internal_45d44af0355b786ec64a5bac7611862638dc8d9a55aea45788e85385269e45cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:user:adminUsers.html.twig"));

        $__internal_402d178d1a1261f8580bddb79b6ffbde80ea5694919c0dae92e70bda4ec0f20a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402d178d1a1261f8580bddb79b6ffbde80ea5694919c0dae92e70bda4ec0f20a->enter($__internal_402d178d1a1261f8580bddb79b6ffbde80ea5694919c0dae92e70bda4ec0f20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:user:adminUsers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45d44af0355b786ec64a5bac7611862638dc8d9a55aea45788e85385269e45cf->leave($__internal_45d44af0355b786ec64a5bac7611862638dc8d9a55aea45788e85385269e45cf_prof);

        
        $__internal_402d178d1a1261f8580bddb79b6ffbde80ea5694919c0dae92e70bda4ec0f20a->leave($__internal_402d178d1a1261f8580bddb79b6ffbde80ea5694919c0dae92e70bda4ec0f20a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0674e8cef4f1fa4c7db0ecf6bd653449fd15f994902e90bbb4fbdaca723c84f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0674e8cef4f1fa4c7db0ecf6bd653449fd15f994902e90bbb4fbdaca723c84f4->enter($__internal_0674e8cef4f1fa4c7db0ecf6bd653449fd15f994902e90bbb4fbdaca723c84f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_513afbbcfcf8df3ca7083e5e42a046b2b06e7d0da53e32f34e5eaf76844fe2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513afbbcfcf8df3ca7083e5e42a046b2b06e7d0da53e32f34e5eaf76844fe2e1->enter($__internal_513afbbcfcf8df3ca7083e5e42a046b2b06e7d0da53e32f34e5eaf76844fe2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content-wrapper\">


    <br><br>
    <form id=\"jsform\" >
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <!-- Split button -->

                <h1 class=\"page-header\">
                    <p>    liste des inscrits</p>
                </h1>

                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-lg btn-danger\" id=\"js-activer\" data-action=\"1\" >switch state </button>


                </div>

            </div>
        </div>
        <div id=\"container\" class=\"row\">

            <div id=\"xcontainer\" class=\"row\">

            </div>            </div>

    </form>            </div>

";
        
        $__internal_513afbbcfcf8df3ca7083e5e42a046b2b06e7d0da53e32f34e5eaf76844fe2e1->leave($__internal_513afbbcfcf8df3ca7083e5e42a046b2b06e7d0da53e32f34e5eaf76844fe2e1_prof);

        
        $__internal_0674e8cef4f1fa4c7db0ecf6bd653449fd15f994902e90bbb4fbdaca723c84f4->leave($__internal_0674e8cef4f1fa4c7db0ecf6bd653449fd15f994902e90bbb4fbdaca723c84f4_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_98c64d14ef6639b7a8fa0db22c3fe0d5d9f6dcefaafeac8f3d07024768b0da09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c64d14ef6639b7a8fa0db22c3fe0d5d9f6dcefaafeac8f3d07024768b0da09->enter($__internal_98c64d14ef6639b7a8fa0db22c3fe0d5d9f6dcefaafeac8f3d07024768b0da09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_663e87e820cd67cd71131121885941bdd6630f76dc0f0ca8db0b75162a4f798b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663e87e820cd67cd71131121885941bdd6630f76dc0f0ca8db0b75162a4f798b->enter($__internal_663e87e820cd67cd71131121885941bdd6630f76dc0f0ca8db0b75162a4f798b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_activer_users", array("etat" => 1111));
        echo "',
                        etat = \$(this).data('action');
                jsFormUrl = url.replace('1111', etat);
                ajaxPost('activer');
            });


            function init() {
                jsFormUrl = '";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_ajaxList");
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
        
        $__internal_663e87e820cd67cd71131121885941bdd6630f76dc0f0ca8db0b75162a4f798b->leave($__internal_663e87e820cd67cd71131121885941bdd6630f76dc0f0ca8db0b75162a4f798b_prof);

        
        $__internal_98c64d14ef6639b7a8fa0db22c3fe0d5d9f6dcefaafeac8f3d07024768b0da09->leave($__internal_98c64d14ef6639b7a8fa0db22c3fe0d5d9f6dcefaafeac8f3d07024768b0da09_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:user:adminUsers.html.twig";
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
                    <p>    liste des inscrits</p>
                </h1>

                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-lg btn-danger\" id=\"js-activer\" data-action=\"1\" >switch state </button>


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
                var url = '{{ path('admin_activer_users', {'etat': 1111 }) }}',
                        etat = \$(this).data('action');
                jsFormUrl = url.replace('1111', etat);
                ajaxPost('activer');
            });


            function init() {
                jsFormUrl = '{{ path('admin_ajaxList') }}';            }
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
", "MainBundle:user:adminUsers.html.twig", "C:\\wamp64\\www\\test\\src\\MainBundle/Resources/views/user/adminUsers.html.twig");
    }
}
