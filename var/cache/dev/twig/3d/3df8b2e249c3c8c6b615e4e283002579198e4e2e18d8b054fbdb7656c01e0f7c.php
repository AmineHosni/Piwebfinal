<?php

/* panier/order.html.twig */
class __TwigTemplate_9735aedde9be1160e9732d88c5b369e3ac98ec048b45c4cfb2b5f84fabc0c1f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "panier/order.html.twig", 1);
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
        $__internal_b32024c3c91effb3ac873f21518fce286c4a6d2276bf7995d6a299a59ae1a5b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b32024c3c91effb3ac873f21518fce286c4a6d2276bf7995d6a299a59ae1a5b0->enter($__internal_b32024c3c91effb3ac873f21518fce286c4a6d2276bf7995d6a299a59ae1a5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/order.html.twig"));

        $__internal_85e2d0098948d756e6888ef63616301e37987a0828ffef50f83f5a511a5708c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e2d0098948d756e6888ef63616301e37987a0828ffef50f83f5a511a5708c0->enter($__internal_85e2d0098948d756e6888ef63616301e37987a0828ffef50f83f5a511a5708c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/order.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b32024c3c91effb3ac873f21518fce286c4a6d2276bf7995d6a299a59ae1a5b0->leave($__internal_b32024c3c91effb3ac873f21518fce286c4a6d2276bf7995d6a299a59ae1a5b0_prof);

        
        $__internal_85e2d0098948d756e6888ef63616301e37987a0828ffef50f83f5a511a5708c0->leave($__internal_85e2d0098948d756e6888ef63616301e37987a0828ffef50f83f5a511a5708c0_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d1349803959e5c46a34318329cd8852b0d97f99ac726194671be026ccf8068f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1349803959e5c46a34318329cd8852b0d97f99ac726194671be026ccf8068f1->enter($__internal_d1349803959e5c46a34318329cd8852b0d97f99ac726194671be026ccf8068f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ae8cda30eae4f872c2448fd426dbb8d20ba7a50ac2a61497ebcc8853315491d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8cda30eae4f872c2448fd426dbb8d20ba7a50ac2a61497ebcc8853315491d7->enter($__internal_ae8cda30eae4f872c2448fd426dbb8d20ba7a50ac2a61497ebcc8853315491d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "  <div class=\"container main-container headerOffset\">
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"index.html\">Home</a></li>
                <li><a href=\"cart.html\">Cart</a></li>
                <li class=\"active\"> Checkout</li>
            </ul>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs\">
            <h1 class=\"section-title-inner\"><span><i class=\"glyphicon glyphicon-shopping-cart\"></i> Checkout</span></h1>
        </div>

        <div class=\"col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs\">

            <h4 class=\"caps\"><a href=\"category.html\"> </a></h4>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-12\">
            <div class=\"row userInfo\">

                <div class=\"col-xs-12 col-sm-12\">

                    <div class=\"w100 clearfix\">


                        <ul class=\"orderStep orderStepLook2\">
                            <li><a href=\"checkout-1.html\">
                                <i class=\"fa fa-map-marker \"></i>
                                <span> address</span>
                            </a></li>

                            <li><a href=\"checkout-2.html\"> <i class=\"fa fa fa-envelope  \"></i>
                                <span> Billing </span></a></li>

                            <li><a href=\"checkout-3.html\"><i class=\"fa fa-truck \"> </i><span>Shipping</span> </a></li>

                            <li><a href=\"checkout-4.html\"><i class=\"fa fa-money  \"> </i><span>Payment</span> </a></li>

                            <li class=\"active\"><a href=\"checkout-5.html\"><i
                                    class=\"fa fa-check-square \"> </i><span>Order</span></a></li>

                        </ul>
                        <!--orderStep-->
                    </div>


                    <div class=\"w100 clearfix\">


                        <div class=\"row userInfo\">

                            <div class=\"col-lg-12\">
                                <h2 class=\"block-title-2\"> Review Order </h2>
                            </div>


                            <div class=\"col-xs-12 col-sm-12\">
                                <div class=\"cartContent w100 checkoutReview \">
                                    <table class=\"cartTable table-responsive\" style=\"width:100%\">
                                        <tbody>
                                        <tr class=\"CartProduct cartTableHeader\">
                                            <th style=\"width:15%\"> Product</th>
                                            <th class=\"checkoutReviewTdDetails\">Details</th>
                                            <th style=\"width:10%\">Unit Price</th>
                                            <th class=\"hidden-xs\" style=\"width:5%\">QNT</th>
                                            <th class=\"hidden-xs\" style=\"width:10%\">Discount</th>
                                            <th style=\"width:15%\">Total</th>
                                        </tr>
                                      
                                        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) ? $context["paniers"] : $this->getContext($context, "paniers")));
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            // line 80
            echo "                                
                            
                            <tr class=\"CartProduct\">
                                <td class=\"CartProductThumb\">
                                    <div><a href=\"product-details.html\"><img src=\"images/product/a1.jpg\" alt=\"img\"></a>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"CartDescription\">
                                        <h4><a href=\"product-details.html\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["panier"], "idProd", array()), "libelle", array()), "html", null, true);
            echo "</a></h4>
                                        <span class=\"size\"></span>

                                    </div>
                                </td>
                               
                                <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["panier"], "prixtot", array()), "html", null, true);
            echo " TND</td>
                                <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["panier"], "qtepan", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["panier"], "idProd", array()), "pourcentagePromotion", array()), "html", null, true);
            echo " %</td>
                                <td class=\"price\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["panier"], "prixtot", array()), "html", null, true);
            echo " TND</td>
                            </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--cartContent-->

                                <div class=\"w100 costDetails\">
                                    <div class=\"table-block\" id=\"order-detail-content\">
                                        <table class=\"std table\" id=\"cart-summary\">
                                            <tr>
                                            ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")));
        foreach ($context['_seq'] as $context["_key"] => $context["liv"]) {
            // line 112
            echo "                                                <td>Total products</td>
                                                <td class=\"price\">";
            // line 113
            echo twig_escape_filter($this->env, ($this->getAttribute($context["liv"], "prixtotal", array()) - 8000), "html", null, true);
            echo "</td>
                                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                                            </tr>
                                            <tr style=\"\">
                                                <td>Shipping</td>
                                                <td class=\"price\"><span class=\"success\">8000</span></td>
                                            </tr>
                                           ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")));
        foreach ($context['_seq'] as $context["_key"] => $context["liv"]) {
            // line 121
            echo "                                               <tr>
                                                <td> Total</td>
                                                <td id=\"total-price\" class=\"price\">";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "prixtotal", array()), "html", null, true);
            echo "</td>
                                            </tr>
                                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                                       
                                        
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/costDetails-->


                                <!--/row-->


                            </div>


                        </div>


                    </div>
                    <!--/row end-->


                    <div class=\"cartFooter w100\">
                        <div class=\"box-footer\">
                            <div class=\"pull-left\">
                            </div>


                            <div class=\"pull-right\">
                                <a href=\"";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("thanks");
        echo "\" class=\"btn btn-primary btn-small \">
                                    Confirm Order &nbsp; <i class=\"fa fa-check\"></i>
                                </a>
                            </div>


                        </div>
                    </div>
                    <!--/ cartFooter -->
                </div>


            </div>
        </div>
        <!--/row end-->


        <div class=\"col-lg-3 col-md-3 col-sm-12 rightSidebar\">

           

        </div>
        <!--/rightSidebar-->

    </div>
    <!--/row-->

    <div style=\"clear:both\"></div>
</div>
";
        
        $__internal_ae8cda30eae4f872c2448fd426dbb8d20ba7a50ac2a61497ebcc8853315491d7->leave($__internal_ae8cda30eae4f872c2448fd426dbb8d20ba7a50ac2a61497ebcc8853315491d7_prof);

        
        $__internal_d1349803959e5c46a34318329cd8852b0d97f99ac726194671be026ccf8068f1->leave($__internal_d1349803959e5c46a34318329cd8852b0d97f99ac726194671be026ccf8068f1_prof);

    }

    public function getTemplateName()
    {
        return "panier/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 156,  222 => 126,  213 => 123,  209 => 121,  205 => 120,  198 => 115,  190 => 113,  187 => 112,  183 => 111,  171 => 101,  162 => 98,  158 => 97,  154 => 96,  150 => 95,  141 => 89,  130 => 80,  126 => 79,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% extends \"MainBundle:eshop:main.html.twig\" %}

{% block content %}
  <div class=\"container main-container headerOffset\">
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"index.html\">Home</a></li>
                <li><a href=\"cart.html\">Cart</a></li>
                <li class=\"active\"> Checkout</li>
            </ul>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs\">
            <h1 class=\"section-title-inner\"><span><i class=\"glyphicon glyphicon-shopping-cart\"></i> Checkout</span></h1>
        </div>

        <div class=\"col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs\">

            <h4 class=\"caps\"><a href=\"category.html\"> </a></h4>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-12\">
            <div class=\"row userInfo\">

                <div class=\"col-xs-12 col-sm-12\">

                    <div class=\"w100 clearfix\">


                        <ul class=\"orderStep orderStepLook2\">
                            <li><a href=\"checkout-1.html\">
                                <i class=\"fa fa-map-marker \"></i>
                                <span> address</span>
                            </a></li>

                            <li><a href=\"checkout-2.html\"> <i class=\"fa fa fa-envelope  \"></i>
                                <span> Billing </span></a></li>

                            <li><a href=\"checkout-3.html\"><i class=\"fa fa-truck \"> </i><span>Shipping</span> </a></li>

                            <li><a href=\"checkout-4.html\"><i class=\"fa fa-money  \"> </i><span>Payment</span> </a></li>

                            <li class=\"active\"><a href=\"checkout-5.html\"><i
                                    class=\"fa fa-check-square \"> </i><span>Order</span></a></li>

                        </ul>
                        <!--orderStep-->
                    </div>


                    <div class=\"w100 clearfix\">


                        <div class=\"row userInfo\">

                            <div class=\"col-lg-12\">
                                <h2 class=\"block-title-2\"> Review Order </h2>
                            </div>


                            <div class=\"col-xs-12 col-sm-12\">
                                <div class=\"cartContent w100 checkoutReview \">
                                    <table class=\"cartTable table-responsive\" style=\"width:100%\">
                                        <tbody>
                                        <tr class=\"CartProduct cartTableHeader\">
                                            <th style=\"width:15%\"> Product</th>
                                            <th class=\"checkoutReviewTdDetails\">Details</th>
                                            <th style=\"width:10%\">Unit Price</th>
                                            <th class=\"hidden-xs\" style=\"width:5%\">QNT</th>
                                            <th class=\"hidden-xs\" style=\"width:10%\">Discount</th>
                                            <th style=\"width:15%\">Total</th>
                                        </tr>
                                      
                                        {% for panier in paniers %}
                                
                            
                            <tr class=\"CartProduct\">
                                <td class=\"CartProductThumb\">
                                    <div><a href=\"product-details.html\"><img src=\"images/product/a1.jpg\" alt=\"img\"></a>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"CartDescription\">
                                        <h4><a href=\"product-details.html\">{{panier.idProd.libelle }}</a></h4>
                                        <span class=\"size\"></span>

                                    </div>
                                </td>
                               
                                <td>{{ panier.prixtot }} TND</td>
                                <td>{{panier.qtepan }}</td>
                                <td>{{panier.idProd.pourcentagePromotion}} %</td>
                                <td class=\"price\">{{ panier.prixtot }} TND</td>
                            </tr>
{% endfor %}
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--cartContent-->

                                <div class=\"w100 costDetails\">
                                    <div class=\"table-block\" id=\"order-detail-content\">
                                        <table class=\"std table\" id=\"cart-summary\">
                                            <tr>
                                            {% for liv in livraison %}
                                                <td>Total products</td>
                                                <td class=\"price\">{{liv.prixtotal - 8000}}</td>
                                                   {% endfor %}
                                            </tr>
                                            <tr style=\"\">
                                                <td>Shipping</td>
                                                <td class=\"price\"><span class=\"success\">8000</span></td>
                                            </tr>
                                           {% for liv in livraison %}
                                               <tr>
                                                <td> Total</td>
                                                <td id=\"total-price\" class=\"price\">{{liv.prixtotal}}</td>
                                            </tr>
                                             {% endfor %}
                                       
                                        
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/costDetails-->


                                <!--/row-->


                            </div>


                        </div>


                    </div>
                    <!--/row end-->


                    <div class=\"cartFooter w100\">
                        <div class=\"box-footer\">
                            <div class=\"pull-left\">
                            </div>


                            <div class=\"pull-right\">
                                <a href=\"{{path('thanks')}}\" class=\"btn btn-primary btn-small \">
                                    Confirm Order &nbsp; <i class=\"fa fa-check\"></i>
                                </a>
                            </div>


                        </div>
                    </div>
                    <!--/ cartFooter -->
                </div>


            </div>
        </div>
        <!--/row end-->


        <div class=\"col-lg-3 col-md-3 col-sm-12 rightSidebar\">

           

        </div>
        <!--/rightSidebar-->

    </div>
    <!--/row-->

    <div style=\"clear:both\"></div>
</div>
{% endblock %}", "panier/order.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\panier\\order.html.twig");
    }
}
