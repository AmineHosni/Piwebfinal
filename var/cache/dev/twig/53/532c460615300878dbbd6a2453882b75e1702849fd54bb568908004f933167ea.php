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
        $__internal_4c3845763c1dd129d8e8993ca8b06f928ad02b29df44c47d5398d7131514aaf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c3845763c1dd129d8e8993ca8b06f928ad02b29df44c47d5398d7131514aaf2->enter($__internal_4c3845763c1dd129d8e8993ca8b06f928ad02b29df44c47d5398d7131514aaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:boucle.html.twig"));

        $__internal_285a50c796d20a876cdfa0590d327e449f4e53415b2517e62c9659586ef06310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285a50c796d20a876cdfa0590d327e449f4e53415b2517e62c9659586ef06310->enter($__internal_285a50c796d20a876cdfa0590d327e449f4e53415b2517e62c9659586ef06310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:boucle.html.twig"));

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
                <div class=\"quickview\">
                    <a data-toggle=\"modal\" class=\"btn btn-xs btn-quickview\" href=\"ajax/product.html\"
                       data-target=\"#productSetailsModalAjax\">Quick View </a>
                </div>
                <a href=\"\"><img style=\"height: 250px; width: 400px\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/images/" . $this->getAttribute($context["product"], "imageName", array()))), "html", null, true);
            echo "\" alt=\"img\"
                                class=\"img-responsive\"></a>

                <div class=\"promotion\"><span class=\"discount\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pourcentagePromotion", array()), "html", null, true);
            echo " OFF</span></div>
            </div>
            <div class=\"description\">
                <h4><a href=\"product-details.html\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "libelle", array()), "html", null, true);
            echo " </a></h4>

                <div class=\"grid-description\">
                    <p>sdcsdcsddcsdcsdcsdcsdddddddddddddddddddddddddddddddddddddddddddddddc</p>
                </div>
                <div class=\"list-description\">
                    <p> ";
            // line 31
            echo $this->getAttribute($context["product"], "description", array());
            echo " </p>
                </div>
                <div class=\"price\"><span>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "prixProduit", array()), "html", null, true);
            echo " <strong>\$</strong></span></div>
                <div class=\"action-control\"><a class=\"btn btn-primary\"> <span class=\"add2cart\"><i
                                    class=\"glyphicon glyphicon-shopping-cart\"> </i> Ajout au panier </span> </a></div>
                <div class=\"action-control\"><a class=\"btn btn-primary\"> <span><i
                                    class=\"glyphicon glyphicon-zoom-in\"> </i> view more </span> </a></div>
            </div>
        </div></div></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
    </div>
</div>
";
        
        $__internal_4c3845763c1dd129d8e8993ca8b06f928ad02b29df44c47d5398d7131514aaf2->leave($__internal_4c3845763c1dd129d8e8993ca8b06f928ad02b29df44c47d5398d7131514aaf2_prof);

        
        $__internal_285a50c796d20a876cdfa0590d327e449f4e53415b2517e62c9659586ef06310->leave($__internal_285a50c796d20a876cdfa0590d327e449f4e53415b2517e62c9659586ef06310_prof);

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
        return array (  90 => 41,  76 => 33,  71 => 31,  62 => 25,  56 => 22,  50 => 19,  36 => 7,  32 => 6,  25 => 1,);
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
                <div class=\"quickview\">
                    <a data-toggle=\"modal\" class=\"btn btn-xs btn-quickview\" href=\"ajax/product.html\"
                       data-target=\"#productSetailsModalAjax\">Quick View </a>
                </div>
                <a href=\"\"><img style=\"height: 250px; width: 400px\" src=\"{{ asset('bundles/images/'~ product.imageName) }}\" alt=\"img\"
                                class=\"img-responsive\"></a>

                <div class=\"promotion\"><span class=\"discount\">{{ product.pourcentagePromotion }} OFF</span></div>
            </div>
            <div class=\"description\">
                <h4><a href=\"product-details.html\">{{  product.libelle }} </a></h4>

                <div class=\"grid-description\">
                    <p>sdcsdcsddcsdcsdcsdcsdddddddddddddddddddddddddddddddddddddddddddddddc</p>
                </div>
                <div class=\"list-description\">
                    <p> {{  product.description|raw }} </p>
                </div>
                <div class=\"price\"><span>{{  product.prixProduit }} <strong>\$</strong></span></div>
                <div class=\"action-control\"><a class=\"btn btn-primary\"> <span class=\"add2cart\"><i
                                    class=\"glyphicon glyphicon-shopping-cart\"> </i> Ajout au panier </span> </a></div>
                <div class=\"action-control\"><a class=\"btn btn-primary\"> <span><i
                                    class=\"glyphicon glyphicon-zoom-in\"> </i> view more </span> </a></div>
            </div>
        </div></div></div>
{% endfor %}

    </div>
</div>
", ":product:boucle.html.twig", "C:\\wamp64\\www\\test\\app/Resources\\views/product/boucle.html.twig");
    }
}
