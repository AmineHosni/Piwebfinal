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
        $__internal_152b63f19531b519ae202e2a77da74384107873a6a3c905eea397de9207c81c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_152b63f19531b519ae202e2a77da74384107873a6a3c905eea397de9207c81c4->enter($__internal_152b63f19531b519ae202e2a77da74384107873a6a3c905eea397de9207c81c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_552276087b183b707404f16b3accdf5238332e396f7457420cd1ff713851c367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552276087b183b707404f16b3accdf5238332e396f7457420cd1ff713851c367->enter($__internal_552276087b183b707404f16b3accdf5238332e396f7457420cd1ff713851c367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_152b63f19531b519ae202e2a77da74384107873a6a3c905eea397de9207c81c4->leave($__internal_152b63f19531b519ae202e2a77da74384107873a6a3c905eea397de9207c81c4_prof);

        
        $__internal_552276087b183b707404f16b3accdf5238332e396f7457420cd1ff713851c367->leave($__internal_552276087b183b707404f16b3accdf5238332e396f7457420cd1ff713851c367_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c70f6e5dbf4d236368c8ee0c6b26d19ad63c53625c9a68450006b6c975588372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c70f6e5dbf4d236368c8ee0c6b26d19ad63c53625c9a68450006b6c975588372->enter($__internal_c70f6e5dbf4d236368c8ee0c6b26d19ad63c53625c9a68450006b6c975588372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2cfba5e33d8cc5b89ffab0ff8b1d48c388a6bf40ae0ebcccb36158cd63195745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cfba5e33d8cc5b89ffab0ff8b1d48c388a6bf40ae0ebcccb36158cd63195745->enter($__internal_2cfba5e33d8cc5b89ffab0ff8b1d48c388a6bf40ae0ebcccb36158cd63195745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

                <div class=\"rating\">
                    <p><span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i
                                    class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i
                                    class=\"fa fa-star-o \"></i></span> <span class=\"ratingInfo\"> <span> / </span> <a
                                    data-target=\"#modal-review\" data-toggle=\"modal\"> Write a review</a> </span></p>
                </div>

                <div class=\"product-price\"><span class=\"price-sales\"> Price : ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "prixProduit", array()), "html", null, true);
        echo "dt
                       </span> <span class=\"price-standard\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "pourcentagePromotion", array()), "html", null, true);
        echo "dt</span>
                </div>

                <h3>Categorie : ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "Categorie", array()), "nom", array()), "html", null, true);
        echo "</h3>
                <div class=\"active\"><p>
                        Etat : ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "etat", array()), "html", null, true);
        echo "
                </div>

                <div class=\"cart-actions\">
                    <div class=\"addto row\">
                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                            <button onclick=\"productAddToCartForm.submit(this);\"
                                    class=\"button btn-block btn-cart cart first\" title=\"Add to Cart\" type=\"button\">Add
                                to Cart
                            </button>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\"><a class=\"link-wishlist wishlist btn-block \">Add
                                to Wishlist</a></div>
                    </div>
                    ";
        // line 64
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "quantiteStock", array()) != 0)) {
            // line 65
            echo "
                        <div style=\"clear:both\"></div>
                        <h3 class=\"incaps\"><i class=\"fa fa fa-check-circle-o color-in\"></i> In stock</h3>
                    ";
        } else {
            // line 69
            echo "                        <h3 style=\"clear:both\" class=\"incaps\"><i class=\"fa fa-minus-circle color-out\"></i> Out of stock
                        </h3>

                    ";
        }
        // line 73
        echo "
                </div>
                <!--/.cart-actions-->

                <div class=\"clear\"></div>
                <div class=\"product-tab w100 clearfix\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#details\" data-toggle=\"tab\">Details</a></li>

                    </ul>

                    <!-- Tab panes -->
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"details\">
                            ";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "
                            <br>
                        </div>

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
        
        $__internal_2cfba5e33d8cc5b89ffab0ff8b1d48c388a6bf40ae0ebcccb36158cd63195745->leave($__internal_2cfba5e33d8cc5b89ffab0ff8b1d48c388a6bf40ae0ebcccb36158cd63195745_prof);

        
        $__internal_c70f6e5dbf4d236368c8ee0c6b26d19ad63c53625c9a68450006b6c975588372->leave($__internal_c70f6e5dbf4d236368c8ee0c6b26d19ad63c53625c9a68450006b6c975588372_prof);

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
        return array (  168 => 87,  152 => 73,  146 => 69,  140 => 65,  138 => 64,  121 => 50,  116 => 48,  110 => 45,  106 => 44,  94 => 35,  89 => 33,  78 => 25,  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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

                <div class=\"rating\">
                    <p><span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i
                                    class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i
                                    class=\"fa fa-star-o \"></i></span> <span class=\"ratingInfo\"> <span> / </span> <a
                                    data-target=\"#modal-review\" data-toggle=\"modal\"> Write a review</a> </span></p>
                </div>

                <div class=\"product-price\"><span class=\"price-sales\"> Price : {{ product.prixProduit }}dt
                       </span> <span class=\"price-standard\">{{ product.pourcentagePromotion }}dt</span>
                </div>

                <h3>Categorie : {{ product.Categorie.nom }}</h3>
                <div class=\"active\"><p>
                        Etat : {{ product.etat }}
                </div>

                <div class=\"cart-actions\">
                    <div class=\"addto row\">
                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                            <button onclick=\"productAddToCartForm.submit(this);\"
                                    class=\"button btn-block btn-cart cart first\" title=\"Add to Cart\" type=\"button\">Add
                                to Cart
                            </button>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\"><a class=\"link-wishlist wishlist btn-block \">Add
                                to Wishlist</a></div>
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
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#details\" data-toggle=\"tab\">Details</a></li>

                    </ul>

                    <!-- Tab panes -->
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"details\">
                            {{ product.description }}
                            <br>
                        </div>

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



", "product/show.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\product\\show.html.twig");
    }
}
