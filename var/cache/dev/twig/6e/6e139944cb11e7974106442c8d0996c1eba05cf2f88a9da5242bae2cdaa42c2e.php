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
        $__internal_81ebe02c57c5884a38ef6f76dca79666bd9648ac842124b9c89dbe43ea1af794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81ebe02c57c5884a38ef6f76dca79666bd9648ac842124b9c89dbe43ea1af794->enter($__internal_81ebe02c57c5884a38ef6f76dca79666bd9648ac842124b9c89dbe43ea1af794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:user:adminUsers.html.twig"));

        $__internal_1e9059f857dcecb7d2199ab208e1bd27f2dd763795f2e122ee8d612c97f79cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9059f857dcecb7d2199ab208e1bd27f2dd763795f2e122ee8d612c97f79cdb->enter($__internal_1e9059f857dcecb7d2199ab208e1bd27f2dd763795f2e122ee8d612c97f79cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:user:adminUsers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81ebe02c57c5884a38ef6f76dca79666bd9648ac842124b9c89dbe43ea1af794->leave($__internal_81ebe02c57c5884a38ef6f76dca79666bd9648ac842124b9c89dbe43ea1af794_prof);

        
        $__internal_1e9059f857dcecb7d2199ab208e1bd27f2dd763795f2e122ee8d612c97f79cdb->leave($__internal_1e9059f857dcecb7d2199ab208e1bd27f2dd763795f2e122ee8d612c97f79cdb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2cac84f75d6d424afbf37d82cb9aade66d842ae8ef8fde522d700212b14c756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2cac84f75d6d424afbf37d82cb9aade66d842ae8ef8fde522d700212b14c756->enter($__internal_d2cac84f75d6d424afbf37d82cb9aade66d842ae8ef8fde522d700212b14c756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_638558d02dd06408b44852a4c9f00d78377499c10c8fa0716ef8a537b9081262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638558d02dd06408b44852a4c9f00d78377499c10c8fa0716ef8a537b9081262->enter($__internal_638558d02dd06408b44852a4c9f00d78377499c10c8fa0716ef8a537b9081262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_638558d02dd06408b44852a4c9f00d78377499c10c8fa0716ef8a537b9081262->leave($__internal_638558d02dd06408b44852a4c9f00d78377499c10c8fa0716ef8a537b9081262_prof);

        
        $__internal_d2cac84f75d6d424afbf37d82cb9aade66d842ae8ef8fde522d700212b14c756->leave($__internal_d2cac84f75d6d424afbf37d82cb9aade66d842ae8ef8fde522d700212b14c756_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fd399dbb03dca22e37d3c262a0f2e961e8e83652aceef0994b379e83f1ca2d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd399dbb03dca22e37d3c262a0f2e961e8e83652aceef0994b379e83f1ca2d7b->enter($__internal_fd399dbb03dca22e37d3c262a0f2e961e8e83652aceef0994b379e83f1ca2d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7ab204786f7c578619d1f04ade47511e7b551e2a9be9ac99558cbabb70eeb299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab204786f7c578619d1f04ade47511e7b551e2a9be9ac99558cbabb70eeb299->enter($__internal_7ab204786f7c578619d1f04ade47511e7b551e2a9be9ac99558cbabb70eeb299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7ab204786f7c578619d1f04ade47511e7b551e2a9be9ac99558cbabb70eeb299->leave($__internal_7ab204786f7c578619d1f04ade47511e7b551e2a9be9ac99558cbabb70eeb299_prof);

        
        $__internal_fd399dbb03dca22e37d3c262a0f2e961e8e83652aceef0994b379e83f1ca2d7b->leave($__internal_fd399dbb03dca22e37d3c262a0f2e961e8e83652aceef0994b379e83f1ca2d7b_prof);

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
", "MainBundle:user:adminUsers.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\src\\MainBundle/Resources/views/user/adminUsers.html.twig");
    }
}
