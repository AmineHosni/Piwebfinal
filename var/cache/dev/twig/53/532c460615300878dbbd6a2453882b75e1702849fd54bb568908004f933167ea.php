<?php

/* :product:boucle.html.twig */
class __TwigTemplate_62583d19e863cbe3035c470c54af8c87c4b651e2e164e328538fe9525f8e512e extends Twig_Template
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
        $__internal_434964524aaee3453c370be109d733a64f8c96258f5954fd67b7cd41471b1071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434964524aaee3453c370be109d733a64f8c96258f5954fd67b7cd41471b1071->enter($__internal_434964524aaee3453c370be109d733a64f8c96258f5954fd67b7cd41471b1071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:boucle.html.twig"));

        $__internal_a97083a64c111907b23ffe8b3a4e102c65d131d1951019eaf25b9c9e5f2b6bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97083a64c111907b23ffe8b3a4e102c65d131d1951019eaf25b9c9e5f2b6bc0->enter($__internal_a97083a64c111907b23ffe8b3a4e102c65d131d1951019eaf25b9c9e5f2b6bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:boucle.html.twig"));

        // line 1
        echo "




    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "    <div class=\"col-lg-3 col-md-3 col-sm-6\">
        <div class=\"product\">
            <a class=\"add-fav tooltipHere\" data-toggle=\"tooltip\" data-original-title=\"Add to Wishlist\"
               data-placement=\"left\">
                <i class=\"glyphicon glyphicon-heart\"></i>
            </a>

            <div class=\"image\">

                <a href=\"\"><img style=\"height: 250px; \" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/images/" . $this->getAttribute($context["product"], "imageName", array()))), "html", null, true);
            echo "\" alt=\"img\"
                                class=\"img-responsive\"></a>

                <div class=\"promotion\"><span class=\"discount\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pourcentagePromotion", array()), "html", null, true);
            echo "% OFF</span></div>
            </div>
            <div class=\"description\">
                <h4><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "libelle", array()), "html", null, true);
            echo " </a></h4>

                <div class=\"grid-description\">
                    <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "Categorie", array()), "nom", array()), "html", null, true);
            echo "</p>
                </div>
                <div class=\"list-description\">
                    <p> ";
            // line 28
            echo $this->getAttribute($context["product"], "description", array());
            echo " </p>
                </div>
                <div class=\"price\"><span>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "prixProduit", array()), "html", null, true);
            echo " <strong>DT</strong></span></div>

                <div class=\"action-control\"><a class=\"btn btn-primary\"> <span class=\"add2cart\"><i
                                    class=\"glyphicon glyphicon-shopping-cart\"> </i> Ajout au panier </span> </a>
                <a  href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\"> <span><i
                                    class=\"glyphicon glyphicon-zoom-in\"> </i> view more </span> </a></div>
            </div>
        </div></div></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
    </div>
</div>
";
        
        $__internal_434964524aaee3453c370be109d733a64f8c96258f5954fd67b7cd41471b1071->leave($__internal_434964524aaee3453c370be109d733a64f8c96258f5954fd67b7cd41471b1071_prof);

        
        $__internal_a97083a64c111907b23ffe8b3a4e102c65d131d1951019eaf25b9c9e5f2b6bc0->leave($__internal_a97083a64c111907b23ffe8b3a4e102c65d131d1951019eaf25b9c9e5f2b6bc0_prof);

    }

    public function getTemplateName()
    {
        return ":product:boucle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 39,  85 => 34,  78 => 30,  73 => 28,  67 => 25,  59 => 22,  53 => 19,  47 => 16,  36 => 7,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("




    {% for product in products %}
    <div class=\"col-lg-3 col-md-3 col-sm-6\">
        <div class=\"product\">
            <a class=\"add-fav tooltipHere\" data-toggle=\"tooltip\" data-original-title=\"Add to Wishlist\"
               data-placement=\"left\">
                <i class=\"glyphicon glyphicon-heart\"></i>
            </a>

            <div class=\"image\">

                <a href=\"\"><img style=\"height: 250px; \" src=\"{{ asset('bundles/images/'~ product.imageName) }}\" alt=\"img\"
                                class=\"img-responsive\"></a>

                <div class=\"promotion\"><span class=\"discount\">{{ product.pourcentagePromotion }}% OFF</span></div>
            </div>
            <div class=\"description\">
                <h4><a href=\"{{ path('product_show', { 'id': product.id}) }}\">{{  product.libelle }} </a></h4>

                <div class=\"grid-description\">
                    <p>{{ product.Categorie.nom }}</p>
                </div>
                <div class=\"list-description\">
                    <p> {{  product.description|raw }} </p>
                </div>
                <div class=\"price\"><span>{{  product.prixProduit }} <strong>DT</strong></span></div>

                <div class=\"action-control\"><a class=\"btn btn-primary\"> <span class=\"add2cart\"><i
                                    class=\"glyphicon glyphicon-shopping-cart\"> </i> Ajout au panier </span> </a>
                <a  href=\"{{ path('product_show', { 'id': product.id}) }}\" class=\"btn btn-success\"> <span><i
                                    class=\"glyphicon glyphicon-zoom-in\"> </i> view more </span> </a></div>
            </div>
        </div></div></div>
{% endfor %}

    </div>
</div>
", ":product:boucle.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\app/Resources\\views/product/boucle.html.twig");
    }
}
