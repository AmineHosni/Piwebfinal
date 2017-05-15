<?php

/* venteflash/show.html.twig */
class __TwigTemplate_0d6c332ab6b4bc9e7b25410ff3d4e41b4d976630a5d8f187124379accda4b307 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "venteflash/show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle:eshop:main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d65b80c532df6369f8cb65bd7d0ca979359937e8b2bd9ef03ac1975567445b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d65b80c532df6369f8cb65bd7d0ca979359937e8b2bd9ef03ac1975567445b94->enter($__internal_d65b80c532df6369f8cb65bd7d0ca979359937e8b2bd9ef03ac1975567445b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venteflash/show.html.twig"));

        $__internal_532eeead6e4c961b83213685c6be3625f5ba2bb9ef2bea1d784c135256e02be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532eeead6e4c961b83213685c6be3625f5ba2bb9ef2bea1d784c135256e02be4->enter($__internal_532eeead6e4c961b83213685c6be3625f5ba2bb9ef2bea1d784c135256e02be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venteflash/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d65b80c532df6369f8cb65bd7d0ca979359937e8b2bd9ef03ac1975567445b94->leave($__internal_d65b80c532df6369f8cb65bd7d0ca979359937e8b2bd9ef03ac1975567445b94_prof);

        
        $__internal_532eeead6e4c961b83213685c6be3625f5ba2bb9ef2bea1d784c135256e02be4->leave($__internal_532eeead6e4c961b83213685c6be3625f5ba2bb9ef2bea1d784c135256e02be4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_384b94a0a20ad489773f75429ace8cdbf9b3d10781283b63d8ad6d98b2624f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_384b94a0a20ad489773f75429ace8cdbf9b3d10781283b63d8ad6d98b2624f81->enter($__internal_384b94a0a20ad489773f75429ace8cdbf9b3d10781283b63d8ad6d98b2624f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2632ae36ea30c500c53cdd92e0e140750cc488d8f8456f42b552511268388e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2632ae36ea30c500c53cdd92e0e140750cc488d8f8456f42b552511268388e6a->enter($__internal_2632ae36ea30c500c53cdd92e0e140750cc488d8f8456f42b552511268388e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<br><br>
    <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["venteFlash"]) ? $context["venteFlash"] : $this->getContext($context, "venteFlash")), "nom", array()), "html", null, true);
        echo "</h1>

<div class=\"row\">
 <div class=\"col-md-6 col-md-push-3\">
                <div class=\"timer-container text-center\">
                    <div class=\"counter-title\">
                        <h2><i class=\"glyphicon glyphicon-time clock\"></i> flash Countdown
                        </h2>
                    </div>

                    <p class=\"clock-container\">

                        <span id=\"demo\" class=\"timer\"><p class=\"demo\"></p></span>

                </div>
            </div>
        </div>
<div>

      ></div>

    <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">
            <h3 class=\"section-title style2 text-center\"><span>produits a la vente flash</span></h3>

        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["venteFlash"]) ? $context["venteFlash"] : $this->getContext($context, "venteFlash")), "produit", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 31
            echo "        <div class=\"col-lg-3 col-md-3 col-sm-6\">
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
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/images/" . $this->getAttribute($context["product"], "imageName", array()))), "html", null, true);
            echo "\" alt=\"img\"
                                    class=\"img-responsive\"></a>

                    <div class=\"promotion\"><span class=\"discount\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pourcentagePromotion", array()), "html", null, true);
            echo " OFF</span></div>
                </div>
                <div class=\"description\">
                    <h4><a href=\"product-details.html\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "libelle", array()), "html", null, true);
            echo " </a></h4>

                    <div class=\"grid-description\">
                        <p>sdcsdcsddcsdcsdcsdcsdddddddddddddddddddddddddddddddddddddddddddddddc</p>
                    </div>
                    <div class=\"list-description\">
                        <p> ";
            // line 55
            echo $this->getAttribute($context["product"], "description", array());
            echo " </p>
                    </div>
                    <div class=\"price\"><span>";
            // line 57
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
        // line 65
        echo "
    </div>
    </div>

    </div>


    <script>




        window.setInterval(countDown, 1000);

        function countDown() {
            var now = new Date();
            var future = new Date(\"";
        // line 81
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["venteFlash"]) ? $context["venteFlash"] : $this->getContext($context, "venteFlash")), "finish", array())), "html", null, true);
        echo "\").getTime();
            var timeLeft = future - now;
            var milli = timeLeft;

            var seconds = milli / 1000;
            var minutes = seconds / 60;
            var hours = minutes / 60;
            var days = hours / 24;
            var spareSeconds = seconds % 60;
            var spareMinutes = minutes % 60;
            var spareHours = hours % 24;
            var spareDays = days % 365;

            minutes = parseInt(minutes);
            hours = parseInt(hours);
            days = parseInt(days);
            spareSeconds = parseInt(spareSeconds);
            spareMinutes = parseInt(spareMinutes);
            spareHours = parseInt(spareHours);
            spareDays = parseInt(spareDays);

            days = padNumber(days);
            hours = padNumber(hours);
            minutes = padNumber(minutes);
            spareSeconds = padNumber(spareSeconds);
            spareMinutes = padNumber(spareMinutes);
            spareHours = padNumber(spareHours);
            spareDays = padNumber(spareDays);

            timeLeft = spareDays + \":\" + spareHours + \":\" + spareMinutes + \":\" + spareSeconds;
            var mySpan = document.getElementById(\"demo\");
            mySpan.innerHTML = timeLeft;

            if (milli <= 0) { //Time's run out! If all values go to zero
                mySpan.innerHTML = \"00:00:00\";
            }
        }

        function padNumber(number) {
            if (number < 10) {
                number = \"0\" + number;
            }
            return number;
        }
    </script>





";
        
        $__internal_2632ae36ea30c500c53cdd92e0e140750cc488d8f8456f42b552511268388e6a->leave($__internal_2632ae36ea30c500c53cdd92e0e140750cc488d8f8456f42b552511268388e6a_prof);

        
        $__internal_384b94a0a20ad489773f75429ace8cdbf9b3d10781283b63d8ad6d98b2624f81->leave($__internal_384b94a0a20ad489773f75429ace8cdbf9b3d10781283b63d8ad6d98b2624f81_prof);

    }

    public function getTemplateName()
    {
        return "venteflash/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 81,  138 => 65,  124 => 57,  119 => 55,  110 => 49,  104 => 46,  98 => 43,  84 => 31,  80 => 30,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

<br><br>
    <h1>{{ venteFlash.nom }}</h1>

<div class=\"row\">
 <div class=\"col-md-6 col-md-push-3\">
                <div class=\"timer-container text-center\">
                    <div class=\"counter-title\">
                        <h2><i class=\"glyphicon glyphicon-time clock\"></i> flash Countdown
                        </h2>
                    </div>

                    <p class=\"clock-container\">

                        <span id=\"demo\" class=\"timer\"><p class=\"demo\"></p></span>

                </div>
            </div>
        </div>
<div>

      ></div>

    <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">
            <h3 class=\"section-title style2 text-center\"><span>produits a la vente flash</span></h3>

        {% for product in venteFlash.produit %}
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

    </div>


    <script>




        window.setInterval(countDown, 1000);

        function countDown() {
            var now = new Date();
            var future = new Date(\"{{ venteFlash.finish|  date }}\").getTime();
            var timeLeft = future - now;
            var milli = timeLeft;

            var seconds = milli / 1000;
            var minutes = seconds / 60;
            var hours = minutes / 60;
            var days = hours / 24;
            var spareSeconds = seconds % 60;
            var spareMinutes = minutes % 60;
            var spareHours = hours % 24;
            var spareDays = days % 365;

            minutes = parseInt(minutes);
            hours = parseInt(hours);
            days = parseInt(days);
            spareSeconds = parseInt(spareSeconds);
            spareMinutes = parseInt(spareMinutes);
            spareHours = parseInt(spareHours);
            spareDays = parseInt(spareDays);

            days = padNumber(days);
            hours = padNumber(hours);
            minutes = padNumber(minutes);
            spareSeconds = padNumber(spareSeconds);
            spareMinutes = padNumber(spareMinutes);
            spareHours = padNumber(spareHours);
            spareDays = padNumber(spareDays);

            timeLeft = spareDays + \":\" + spareHours + \":\" + spareMinutes + \":\" + spareSeconds;
            var mySpan = document.getElementById(\"demo\");
            mySpan.innerHTML = timeLeft;

            if (milli <= 0) { //Time's run out! If all values go to zero
                mySpan.innerHTML = \"00:00:00\";
            }
        }

        function padNumber(number) {
            if (number < 10) {
                number = \"0\" + number;
            }
            return number;
        }
    </script>





{% endblock %}
", "venteflash/show.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\venteflash\\show.html.twig");
    }
}
