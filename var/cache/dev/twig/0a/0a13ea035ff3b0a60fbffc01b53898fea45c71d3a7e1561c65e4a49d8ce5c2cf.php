<?php

/* venteflash/adding.html.twig */
class __TwigTemplate_11ea0750f02a977a773aa906a06f9512b0f04fb8c84e3b1d185741d0345c2a7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_495c824e767b1ccb63533b0e2864a19a1e0fbbb4f09a4231a8052c2eb48580a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_495c824e767b1ccb63533b0e2864a19a1e0fbbb4f09a4231a8052c2eb48580a9->enter($__internal_495c824e767b1ccb63533b0e2864a19a1e0fbbb4f09a4231a8052c2eb48580a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venteflash/adding.html.twig"));

        $__internal_d5c7882ffed0666f2c500a048d690d827c5632d2c6a751b4eec7907814aae2b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c7882ffed0666f2c500a048d690d827c5632d2c6a751b4eec7907814aae2b9->enter($__internal_d5c7882ffed0666f2c500a048d690d827c5632d2c6a751b4eec7907814aae2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venteflash/adding.html.twig"));

        // line 1
        echo "<div class=\"col-lg-9 col-md-9 col-sm-12\">

<div class=\"row  categoryProduct xsResponse clearfix\">

    <div class=\"item col-sm-2 col-lg-1 col-md-4 col-xs-1 list-view\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 7
            echo "
        <div class=\"product\">
            <a class=\"add-fav tooltipHere\" data-toggle=\"tooltip\" data-original-title=\"Add to Wishlist\"
               data-placement=\"left\">
                <i class=\"glyphicon glyphicon-heart\"></i>
            </a>

            <div class=\"image\">
                <div class=\"quickview\">
                    <a data-toggle=\"modal\" class=\"btn btn-xs btn-quickview\" href=\"ajax/product.html\"
                       data-target=\"#productSetailsModalAjax\">Quick View </a>
                </div>
                <a href=\"\"><img style=\"height: 250px; width: 400px\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/images/" . $this->getAttribute($context["p"], "imageName", array()))), "html", null, true);
            echo "\" alt=\"img\"
                                                                                      class=\"img-responsive\"></a>

                <div class=\"promotion\"><span class=\"new-product\"> NEW</span> <span
                            class=\"discount\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "pourcentagePromotion", array()), "html", null, true);
            echo " off</span></div>
            </div>
            <div class=\"description\">
                <h4><a href=\"product-details.html\"></a>sdfiosjfozerjfzoerufjzoejfozefjzoefijzoeifjzoeijfoziejfoz</h4>

                <div class=\"grid-description\">
                    <p>sdfiosjfozerjfzoerufjzoejfozefjzoefijzoeifjzoeijfoziejfoz</p>
                </div>
                <div class=\"list-description\">
                    <p>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelle", array()), "html", null, true);
            echo " </p>
                </div>
                <div class=\"price\"><span>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prixProduit", array()), "html", null, true);
            echo "DT</span></div>

                <a href=\"#\" data-toggle=\"modal\" data-target=\"#searchModal\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-flash\"></span> ajouter a la vente flash</a>


        </div>

<br><br><br>


    <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\"  class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\" id=\"searchModalLabel\">prix flash</h4>
                </div>
                <div class=\"modal-body form-horizontal\">
                    <div class=\"form-group\">
                        <label for=\"\" class=\"col-sm-5 control-label\">ajouter vente flash</label>
                        <div class=\"col-sm-6\">
                            <form action=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("venteflash_ajouterproduit", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "prod" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">
                                <input type=\"text\" name=\"prix\"  class=\"form-control\">
                                <button> <a  class=\"btn btn-sucess\"   href='";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("venteflash_ajouterproduit", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "prod" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "'>ajouter vente</a></button>
                        </div></form>
                    </div>

                </div></div></div></div></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "

</div></div>
</div>
";
        
        $__internal_495c824e767b1ccb63533b0e2864a19a1e0fbbb4f09a4231a8052c2eb48580a9->leave($__internal_495c824e767b1ccb63533b0e2864a19a1e0fbbb4f09a4231a8052c2eb48580a9_prof);

        
        $__internal_d5c7882ffed0666f2c500a048d690d827c5632d2c6a751b4eec7907814aae2b9->leave($__internal_d5c7882ffed0666f2c500a048d690d827c5632d2c6a751b4eec7907814aae2b9_prof);

    }

    public function getTemplateName()
    {
        return "venteflash/adding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 63,  103 => 57,  98 => 55,  74 => 34,  69 => 32,  57 => 23,  50 => 19,  36 => 7,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-lg-9 col-md-9 col-sm-12\">

<div class=\"row  categoryProduct xsResponse clearfix\">

    <div class=\"item col-sm-2 col-lg-1 col-md-4 col-xs-1 list-view\">
        {% for p in products %}

        <div class=\"product\">
            <a class=\"add-fav tooltipHere\" data-toggle=\"tooltip\" data-original-title=\"Add to Wishlist\"
               data-placement=\"left\">
                <i class=\"glyphicon glyphicon-heart\"></i>
            </a>

            <div class=\"image\">
                <div class=\"quickview\">
                    <a data-toggle=\"modal\" class=\"btn btn-xs btn-quickview\" href=\"ajax/product.html\"
                       data-target=\"#productSetailsModalAjax\">Quick View </a>
                </div>
                <a href=\"\"><img style=\"height: 250px; width: 400px\" src=\"{{ asset('bundles/images/'~ p.imageName) }}\" alt=\"img\"
                                                                                      class=\"img-responsive\"></a>

                <div class=\"promotion\"><span class=\"new-product\"> NEW</span> <span
                            class=\"discount\">{{ p.pourcentagePromotion }} off</span></div>
            </div>
            <div class=\"description\">
                <h4><a href=\"product-details.html\"></a>sdfiosjfozerjfzoerufjzoejfozefjzoefijzoeifjzoeijfoziejfoz</h4>

                <div class=\"grid-description\">
                    <p>sdfiosjfozerjfzoerufjzoejfozefjzoefijzoeifjzoeijfoziejfoz</p>
                </div>
                <div class=\"list-description\">
                    <p>{{ p.libelle }} </p>
                </div>
                <div class=\"price\"><span>{{ p.prixProduit }}DT</span></div>

                <a href=\"#\" data-toggle=\"modal\" data-target=\"#searchModal\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-flash\"></span> ajouter a la vente flash</a>


        </div>

<br><br><br>


    <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\"  class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\" id=\"searchModalLabel\">prix flash</h4>
                </div>
                <div class=\"modal-body form-horizontal\">
                    <div class=\"form-group\">
                        <label for=\"\" class=\"col-sm-5 control-label\">ajouter vente flash</label>
                        <div class=\"col-sm-6\">
                            <form action=\"{{ path('venteflash_ajouterproduit',{'id': id,'prod':p.id }) }}\">
                                <input type=\"text\" name=\"prix\"  class=\"form-control\">
                                <button> <a  class=\"btn btn-sucess\"   href='{{ path('venteflash_ajouterproduit',{'id': id,'prod':p.id }) }}'>ajouter vente</a></button>
                        </div></form>
                    </div>

                </div></div></div></div></div>
    {% endfor %}


</div></div>
</div>
", "venteflash/adding.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\venteflash\\adding.html.twig");
    }
}
