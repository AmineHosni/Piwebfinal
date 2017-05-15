<?php

/* :Magasin:addproducts.html.twig */
class __TwigTemplate_7a9ab1ddaa20ebf32a20420b775aae2f4cb0b4ecda8cd2c6b2a29f132ce14852 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", ":Magasin:addproducts.html.twig", 1);
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
        $__internal_66a99d02b4b1034eee8ba382b67df257ebce622c4ccb66b37943acf203408e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a99d02b4b1034eee8ba382b67df257ebce622c4ccb66b37943acf203408e51->enter($__internal_66a99d02b4b1034eee8ba382b67df257ebce622c4ccb66b37943acf203408e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Magasin:addproducts.html.twig"));

        $__internal_1e83cfafe40f39e244ae468d268a88b82b770297dad0375b1f47ab5f96cd50a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e83cfafe40f39e244ae468d268a88b82b770297dad0375b1f47ab5f96cd50a3->enter($__internal_1e83cfafe40f39e244ae468d268a88b82b770297dad0375b1f47ab5f96cd50a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Magasin:addproducts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66a99d02b4b1034eee8ba382b67df257ebce622c4ccb66b37943acf203408e51->leave($__internal_66a99d02b4b1034eee8ba382b67df257ebce622c4ccb66b37943acf203408e51_prof);

        
        $__internal_1e83cfafe40f39e244ae468d268a88b82b770297dad0375b1f47ab5f96cd50a3->leave($__internal_1e83cfafe40f39e244ae468d268a88b82b770297dad0375b1f47ab5f96cd50a3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b2a88aaf5125fedd73ea892f6f0538536b0a976a7d480d9117881b5b99fbeea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b2a88aaf5125fedd73ea892f6f0538536b0a976a7d480d9117881b5b99fbeea->enter($__internal_4b2a88aaf5125fedd73ea892f6f0538536b0a976a7d480d9117881b5b99fbeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_03633bc30965b7a42b6668c0fe1da875068dc3b57062449d1ab5fca276136091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03633bc30965b7a42b6668c0fe1da875068dc3b57062449d1ab5fca276136091->enter($__internal_03633bc30965b7a42b6668c0fe1da875068dc3b57062449d1ab5fca276136091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"content-wrapper\">


        <br><br>
        <form id=\"jsform\" >
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <!-- Split button -->

                    <h1 class=\"page-header\">
                        <p>    liste de mes produits</p>
                    </h1>



                </div>
            </div>
            <div id=\"container\" class=\"row\">

                <div id=\"xcontainer\" class=\"row\">

                </div>            </div>
            <button type=\"button\" class=\"btn btn-lg btn-danger\" id=\"js-activer\" data-action=\"1\" >valider</button>


        </form>            </div>

";
        
        $__internal_03633bc30965b7a42b6668c0fe1da875068dc3b57062449d1ab5fca276136091->leave($__internal_03633bc30965b7a42b6668c0fe1da875068dc3b57062449d1ab5fca276136091_prof);

        
        $__internal_4b2a88aaf5125fedd73ea892f6f0538536b0a976a7d480d9117881b5b99fbeea->leave($__internal_4b2a88aaf5125fedd73ea892f6f0538536b0a976a7d480d9117881b5b99fbeea_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9b774ccc4edfce51844f6c6c4d25609e03c0de881340f6ef8d114c6c78d8ca48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b774ccc4edfce51844f6c6c4d25609e03c0de881340f6ef8d114c6c78d8ca48->enter($__internal_9b774ccc4edfce51844f6c6c4d25609e03c0de881340f6ef8d114c6c78d8ca48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_262a0f31a12448f1f5537c7c9543dcb252fc96cc23db68eadcc98f5179269c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262a0f31a12448f1f5537c7c9543dcb252fc96cc23db68eadcc98f5179269c17->enter($__internal_262a0f31a12448f1f5537c7c9543dcb252fc96cc23db68eadcc98f5179269c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
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
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Magasin_produitsinceptionadd", array("etat" => 1111));
        echo "',
                        etat = \$(this).data('action');
                jsFormUrl = url.replace('1111', etat);
                ajaxPost('activer');
            });

            \$('#hi').on('click', function () {
                alert('3asba');
            });


            function init() {
                jsFormUrl = '";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Magasin_produitsinception");
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
            setTimeout(ajaxPost, 0);


        })(jQuery);
    </script>
";
        
        $__internal_262a0f31a12448f1f5537c7c9543dcb252fc96cc23db68eadcc98f5179269c17->leave($__internal_262a0f31a12448f1f5537c7c9543dcb252fc96cc23db68eadcc98f5179269c17_prof);

        
        $__internal_9b774ccc4edfce51844f6c6c4d25609e03c0de881340f6ef8d114c6c78d8ca48->leave($__internal_9b774ccc4edfce51844f6c6c4d25609e03c0de881340f6ef8d114c6c78d8ca48_prof);

    }

    public function getTemplateName()
    {
        return ":Magasin:addproducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 54,  109 => 42,  96 => 33,  87 => 32,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MainBundle:eshop:main.html.twig' %}

{% block content %}
    <div class=\"content-wrapper\">


        <br><br>
        <form id=\"jsform\" >
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <!-- Split button -->

                    <h1 class=\"page-header\">
                        <p>    liste de mes produits</p>
                    </h1>



                </div>
            </div>
            <div id=\"container\" class=\"row\">

                <div id=\"xcontainer\" class=\"row\">

                </div>            </div>
            <button type=\"button\" class=\"btn btn-lg btn-danger\" id=\"js-activer\" data-action=\"1\" >valider</button>


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
                var url = '{{ path('Magasin_produitsinceptionadd', {'etat': 1111 }) }}',
                        etat = \$(this).data('action');
                jsFormUrl = url.replace('1111', etat);
                ajaxPost('activer');
            });

            \$('#hi').on('click', function () {
                alert('3asba');
            });


            function init() {
                jsFormUrl = '{{ path('Magasin_produitsinception') }}';            }
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
            setTimeout(ajaxPost, 0);


        })(jQuery);
    </script>
{% endblock %}
", ":Magasin:addproducts.html.twig", "C:\\wamp64\\www\\test\\app/Resources\\views/Magasin/addproducts.html.twig");
    }
}
