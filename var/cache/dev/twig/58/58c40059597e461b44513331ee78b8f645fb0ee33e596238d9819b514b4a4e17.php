<?php

/* product/show.html.twig */
class __TwigTemplate_8b2343d18614ff0ca28b141607c0568d7abf258eed3b0fae6326819616811133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "product/show.html.twig", 1);
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
        $__internal_e2ef787d0fc0fc73c699e9792036801857385bdf612290df81f4c650483237cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ef787d0fc0fc73c699e9792036801857385bdf612290df81f4c650483237cb->enter($__internal_e2ef787d0fc0fc73c699e9792036801857385bdf612290df81f4c650483237cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_2f480757fc635ca8fb2617b3e5da9e09d864d4a0f64b063408389ffa727fb3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f480757fc635ca8fb2617b3e5da9e09d864d4a0f64b063408389ffa727fb3e1->enter($__internal_2f480757fc635ca8fb2617b3e5da9e09d864d4a0f64b063408389ffa727fb3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2ef787d0fc0fc73c699e9792036801857385bdf612290df81f4c650483237cb->leave($__internal_e2ef787d0fc0fc73c699e9792036801857385bdf612290df81f4c650483237cb_prof);

        
        $__internal_2f480757fc635ca8fb2617b3e5da9e09d864d4a0f64b063408389ffa727fb3e1->leave($__internal_2f480757fc635ca8fb2617b3e5da9e09d864d4a0f64b063408389ffa727fb3e1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1a1852835fb31503053d9a7b169243abcef45dab7291ad1cc114b67daaf64334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a1852835fb31503053d9a7b169243abcef45dab7291ad1cc114b67daaf64334->enter($__internal_1a1852835fb31503053d9a7b169243abcef45dab7291ad1cc114b67daaf64334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d61c3b90dec6b73388d2a351625c1b3293fc461e8c3cc2fee9d107d3010d4c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61c3b90dec6b73388d2a351625c1b3293fc461e8c3cc2fee9d107d3010d4c62->enter($__internal_d61c3b90dec6b73388d2a351625c1b3293fc461e8c3cc2fee9d107d3010d4c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"container main-container headerOffset\">
        <div class=\"row\">
            <div class=\"breadcrumbDiv col-lg-12\">
                <ul class=\"breadcrumb\">
                    <li><a href=\"index.html\">Home</a></li>
                    <li><a href=\"category.html\">MEN COLLECTION</a></li>
                    <li><a href=\"sub-category.html\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "Categorie", array()), "nom", array()), "html", null, true);
        echo "</a></li>
                    <li class=\"active\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "libelle", array()), "html", null, true);
        echo "</li>
                </ul>
            </div>
        </div>
        <div class=\"row transitionfx\">

            <!-- left column -->
            <div class=\"col-lg-6 col-md-6 col-sm-6\">
                <!-- product Image and Zoom -->
                <div >



                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "imageName", array())), "html", null, true);
        echo "\" alt=\"Smiley face\" height=\"400\" width=\"500\">

                </div>
            </div>
            <!--/ left column end -->

            <!-- right column -->
            <div class=\"col-lg-6 col-md-6 col-sm-5\">
                <h2 class=\"product-title\"> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "libelle", array()), "html", null, true);
        echo "</h2>

                <h3 class=\"product-code\">Product Id : ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "</h3>


                ";
        // line 38
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "pourcentagePromotion", array()) == 0)) {
            // line 39
            echo "                    <div class=\"product-price\">
                        <span class=\"price-sales\"> Price : ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "prixProduit", array()), "html", null, true);
            echo "dt</span>
                    </div>

                ";
        } else {
            // line 44
            echo "


                <div class=\"product-price\">
                    Price :<span class=\"price-standard\">  ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "prixProduit", array()), "html", null, true);
            echo "dt</span>
                    <span class=\"price-sales\">";
            // line 49
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "prixProduit", array()) * ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "pourcentagePromotion", array()) / 100)), "html", null, true);
            echo "dt</span>
                </div>


                ";
        }
        // line 54
        echo "                <h3>Categorie : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "Categorie", array()), "nom", array()), "html", null, true);
        echo "</h3>
                <div class=\"active\"><p>
                        Etat : ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "etat", array()), "html", null, true);
        echo "
                </div>

                <div class=\"cart-actions\">
                    <div class=\"addto row\">
                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                           
                        </div>
                    
                    </div>
                    ";
        // line 66
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "quantiteStock", array()) != 0)) {
            // line 67
            echo "
                        <div style=\"clear:both\"></div>
                        <h3 class=\"incaps\"><i class=\"fa fa fa-check-circle-o color-in\"></i> In stock</h3>
                    ";
        } else {
            // line 71
            echo "                        <h3 style=\"clear:both\" class=\"incaps\"><i class=\"fa fa-minus-circle color-out\"></i> Out of stock
                        </h3>

                    ";
        }
        // line 75
        echo "
                </div>
                <!--/.cart-actions-->

                <div class=\"clear\"></div>
                <div class=\"product-tab w100 clearfix\">
                   

                    <!-- Tab panes -->
                    <div class=\"tab-content\">
                     

                    </div>
                    <!-- /.tab content -->

                </div>
            </div>
            <!--if  product.seller == app.user.id
               <table>
                   <td>
                       <a href=\" path('product_index') }}\" class=\"btn btn-block btn-success\">Back to the list</a>
                   </td>

                   <td>
                       <a href=\"path('product_edit', { 'id': product.id }) }}\"
                          class=\"btn btn-block btn-info\">Edit</a>
                   </td>

                   <td>
                        form_start(delete_form) }}
                       <input type=\"submit\" value=\"Delete\" class=\"btn btn-block btn-danger\">
                        form_end(delete_form) }}
                   </td>
               </table> -->
        </div>
    </div>
";
        
        $__internal_d61c3b90dec6b73388d2a351625c1b3293fc461e8c3cc2fee9d107d3010d4c62->leave($__internal_d61c3b90dec6b73388d2a351625c1b3293fc461e8c3cc2fee9d107d3010d4c62_prof);

        
        $__internal_1a1852835fb31503053d9a7b169243abcef45dab7291ad1cc114b67daaf64334->leave($__internal_1a1852835fb31503053d9a7b169243abcef45dab7291ad1cc114b67daaf64334_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 75,  157 => 71,  151 => 67,  149 => 66,  136 => 56,  130 => 54,  122 => 49,  118 => 48,  112 => 44,  105 => 40,  102 => 39,  100 => 38,  94 => 35,  89 => 33,  78 => 25,  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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

    <div class=\"container main-container headerOffset\">
        <div class=\"row\">
            <div class=\"breadcrumbDiv col-lg-12\">
                <ul class=\"breadcrumb\">
                    <li><a href=\"index.html\">Home</a></li>
                    <li><a href=\"category.html\">MEN COLLECTION</a></li>
                    <li><a href=\"sub-category.html\">{{ product.Categorie.nom }}</a></li>
                    <li class=\"active\">{{ product.libelle }}</li>
                </ul>
            </div>
        </div>
        <div class=\"row transitionfx\">

            <!-- left column -->
            <div class=\"col-lg-6 col-md-6 col-sm-6\">
                <!-- product Image and Zoom -->
                <div >



                    <img src=\"{{asset('bundles/images/')~ product.imageName}}\" alt=\"Smiley face\" height=\"400\" width=\"500\">

                </div>
            </div>
            <!--/ left column end -->

            <!-- right column -->
            <div class=\"col-lg-6 col-md-6 col-sm-5\">
                <h2 class=\"product-title\"> {{ product.libelle }}</h2>

                <h3 class=\"product-code\">Product Id : {{ product.id }}</h3>


                {% if product.pourcentagePromotion==0 %}
                    <div class=\"product-price\">
                        <span class=\"price-sales\"> Price : {{ product.prixProduit }}dt</span>
                    </div>

                {%  else %}



                <div class=\"product-price\">
                    Price :<span class=\"price-standard\">  {{ product.prixProduit }}dt</span>
                    <span class=\"price-sales\">{{  product.prixProduit * (  product.pourcentagePromotion/100 )}}dt</span>
                </div>


                {% endif %}
                <h3>Categorie : {{ product.Categorie.nom }}</h3>
                <div class=\"active\"><p>
                        Etat : {{ product.etat }}
                </div>

                <div class=\"cart-actions\">
                    <div class=\"addto row\">
                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                           
                        </div>
                    
                    </div>
                    {% if  product.quantiteStock  != 0 %}

                        <div style=\"clear:both\"></div>
                        <h3 class=\"incaps\"><i class=\"fa fa fa-check-circle-o color-in\"></i> In stock</h3>
                    {% else %}
                        <h3 style=\"clear:both\" class=\"incaps\"><i class=\"fa fa-minus-circle color-out\"></i> Out of stock
                        </h3>

                    {% endif %}

                </div>
                <!--/.cart-actions-->

                <div class=\"clear\"></div>
                <div class=\"product-tab w100 clearfix\">
                   

                    <!-- Tab panes -->
                    <div class=\"tab-content\">
                     

                    </div>
                    <!-- /.tab content -->

                </div>
            </div>
            <!--if  product.seller == app.user.id
               <table>
                   <td>
                       <a href=\" path('product_index') }}\" class=\"btn btn-block btn-success\">Back to the list</a>
                   </td>

                   <td>
                       <a href=\"path('product_edit', { 'id': product.id }) }}\"
                          class=\"btn btn-block btn-info\">Edit</a>
                   </td>

                   <td>
                        form_start(delete_form) }}
                       <input type=\"submit\" value=\"Delete\" class=\"btn btn-block btn-danger\">
                        form_end(delete_form) }}
                   </td>
               </table> -->
        </div>
    </div>
{% endblock %}



", "product/show.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\app\\Resources\\views\\product\\show.html.twig");
    }
}
