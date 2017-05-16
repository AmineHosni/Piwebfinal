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
        $__internal_adfe5f6cc0692ac0869c230bf4cb016eb2bc16515c431035bef0449c9968bb38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adfe5f6cc0692ac0869c230bf4cb016eb2bc16515c431035bef0449c9968bb38->enter($__internal_adfe5f6cc0692ac0869c230bf4cb016eb2bc16515c431035bef0449c9968bb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:adminList.html.twig"));

        $__internal_0e04f1371efa8f8a1b1af142fc9dce596c73c4205a96e32645a669eb5061870d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e04f1371efa8f8a1b1af142fc9dce596c73c4205a96e32645a669eb5061870d->enter($__internal_0e04f1371efa8f8a1b1af142fc9dce596c73c4205a96e32645a669eb5061870d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:adminList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adfe5f6cc0692ac0869c230bf4cb016eb2bc16515c431035bef0449c9968bb38->leave($__internal_adfe5f6cc0692ac0869c230bf4cb016eb2bc16515c431035bef0449c9968bb38_prof);

        
        $__internal_0e04f1371efa8f8a1b1af142fc9dce596c73c4205a96e32645a669eb5061870d->leave($__internal_0e04f1371efa8f8a1b1af142fc9dce596c73c4205a96e32645a669eb5061870d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4aa416e5863b961e1cc16c42c8133d205b44228de90759cb6015175a2d2256b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa416e5863b961e1cc16c42c8133d205b44228de90759cb6015175a2d2256b2->enter($__internal_4aa416e5863b961e1cc16c42c8133d205b44228de90759cb6015175a2d2256b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92308fc622fc1132d33eaee312b583617fcbb14d7965606415e395d29a1d916e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92308fc622fc1132d33eaee312b583617fcbb14d7965606415e395d29a1d916e->enter($__internal_92308fc622fc1132d33eaee312b583617fcbb14d7965606415e395d29a1d916e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"content-wrapper\">
    <br><br>
        <form id=\"jsform\" align=\"center\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <!-- Split button -->

                    <h1 class=\"page-header\">
                        <p> liste des produits</p>
                    </h1>

                </div>
            </div>
            <div id=\"container\" class=\"row\">

                <div id=\"xcontainer\" class=\"row\">

                </div>
                <div class=\"btn-group\" align=\"right\">
                    <button type=\"button\" class=\"btn btn-lg btn-success\" id=\"js-activer\" data-action=\"1\" > approuver  </button>
                    <button type=\"button\" class=\"btn btn-lg btn-danger\" id=\"js-supprimer\" data-action=\"1\" > Supprimer  </button>

                </div>
            </div>

        </form>            </div>

";
        
        $__internal_92308fc622fc1132d33eaee312b583617fcbb14d7965606415e395d29a1d916e->leave($__internal_92308fc622fc1132d33eaee312b583617fcbb14d7965606415e395d29a1d916e_prof);

        
        $__internal_4aa416e5863b961e1cc16c42c8133d205b44228de90759cb6015175a2d2256b2->leave($__internal_4aa416e5863b961e1cc16c42c8133d205b44228de90759cb6015175a2d2256b2_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f3f13fd2223cae0739de72c445a4e2f425bb4660661c6edccf4bf560e09a4612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f13fd2223cae0739de72c445a4e2f425bb4660661c6edccf4bf560e09a4612->enter($__internal_f3f13fd2223cae0739de72c445a4e2f425bb4660661c6edccf4bf560e09a4612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_036c4a4be1ca1017e7afc865acb841d8b10e0350a00204945eb14e2c2124a2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036c4a4be1ca1017e7afc865acb841d8b10e0350a00204945eb14e2c2124a2bb->enter($__internal_036c4a4be1ca1017e7afc865acb841d8b10e0350a00204945eb14e2c2124a2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
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
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_ajaxListProd", array("etat" => 1111));
        echo "',
                        etat = \$(this).data('action');
                jsFormUrl = url.replace('1111', etat);
                ajaxPost('activer');
            });
            \$('#js-supprimer').on('click', function () {
                var url = '";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_ajaxsupprimer", array("etat" => 1111));
        echo "',
                        etat = \$(this).data('action');
                jsFormUrl = url.replace('1111', etat);
                ajaxPost('activer');
            });


            function init() {
                jsFormUrl = '";
        // line 55
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
        
        $__internal_036c4a4be1ca1017e7afc865acb841d8b10e0350a00204945eb14e2c2124a2bb->leave($__internal_036c4a4be1ca1017e7afc865acb841d8b10e0350a00204945eb14e2c2124a2bb_prof);

        
        $__internal_f3f13fd2223cae0739de72c445a4e2f425bb4660661c6edccf4bf560e09a4612->leave($__internal_f3f13fd2223cae0739de72c445a4e2f425bb4660661c6edccf4bf560e09a4612_prof);

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
        return array (  129 => 55,  118 => 47,  109 => 41,  96 => 32,  87 => 31,  50 => 3,  41 => 2,  11 => 1,);
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
        <form id=\"jsform\" align=\"center\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <!-- Split button -->

                    <h1 class=\"page-header\">
                        <p> liste des produits</p>
                    </h1>

                </div>
            </div>
            <div id=\"container\" class=\"row\">

                <div id=\"xcontainer\" class=\"row\">

                </div>
                <div class=\"btn-group\" align=\"right\">
                    <button type=\"button\" class=\"btn btn-lg btn-success\" id=\"js-activer\" data-action=\"1\" > approuver  </button>
                    <button type=\"button\" class=\"btn btn-lg btn-danger\" id=\"js-supprimer\" data-action=\"1\" > Supprimer  </button>

                </div>
            </div>

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
            \$('#js-supprimer').on('click', function () {
                var url = '{{ path('admin_ajaxsupprimer', {'etat': 1111 }) }}',
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
{% endblock %}", ":product:adminList.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\app/Resources\\views/product/adminList.html.twig");
    }
}
