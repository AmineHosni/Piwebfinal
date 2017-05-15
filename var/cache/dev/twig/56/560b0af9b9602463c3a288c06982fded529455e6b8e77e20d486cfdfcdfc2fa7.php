<?php

/* venteflash/deleting.html.twig */
class __TwigTemplate_b285a270b99e4136d06e958a7ac017a1b6bfc526803fc3e220c4c8b8339dded4 extends Twig_Template
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
        $__internal_25c85a8278b1e5b9d4ef6246ae478a6313cefe4a5694d29c8686d80c4c64d8ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c85a8278b1e5b9d4ef6246ae478a6313cefe4a5694d29c8686d80c4c64d8ce->enter($__internal_25c85a8278b1e5b9d4ef6246ae478a6313cefe4a5694d29c8686d80c4c64d8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venteflash/deleting.html.twig"));

        $__internal_f81ca25887d94c621e3cc9c8d6744b45611794c87931b6961791d50807954895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81ca25887d94c621e3cc9c8d6744b45611794c87931b6961791d50807954895->enter($__internal_f81ca25887d94c621e3cc9c8d6744b45611794c87931b6961791d50807954895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venteflash/deleting.html.twig"));

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

                        <button class=\"btn btn-sucess\"> <a     href='";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("venteflash_supprimerproduit", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "prod" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "'>ajouter vente</a></button>
                    </div>

                    <br><br><br>


            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "

        </div></div>
</div>
";
        
        $__internal_25c85a8278b1e5b9d4ef6246ae478a6313cefe4a5694d29c8686d80c4c64d8ce->leave($__internal_25c85a8278b1e5b9d4ef6246ae478a6313cefe4a5694d29c8686d80c4c64d8ce_prof);

        
        $__internal_f81ca25887d94c621e3cc9c8d6744b45611794c87931b6961791d50807954895->leave($__internal_f81ca25887d94c621e3cc9c8d6744b45611794c87931b6961791d50807954895_prof);

    }

    public function getTemplateName()
    {
        return "venteflash/deleting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 43,  79 => 36,  74 => 34,  69 => 32,  57 => 23,  50 => 19,  36 => 7,  32 => 6,  25 => 1,);
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

                        <button class=\"btn btn-sucess\"> <a     href='{{ path('venteflash_supprimerproduit',{'id': id,'prod':p.id }) }}'>ajouter vente</a></button>
                    </div>

                    <br><br><br>


            {% endfor %}


        </div></div>
</div>
", "venteflash/deleting.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\venteflash\\deleting.html.twig");
    }
}
