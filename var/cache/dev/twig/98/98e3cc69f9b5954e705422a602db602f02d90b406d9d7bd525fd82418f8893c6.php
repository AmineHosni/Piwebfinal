<?php

/* MainBundle:Default:index.html.twig */
class __TwigTemplate_3e804c2f6a8867ac51e32d5c25af2c1dc777c71efaf0177ad87606e471654e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "MainBundle:Default:index.html.twig", 2);
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
        $__internal_5d5445be920d0c6fa8314b138afffe0f150b7004e44e507592390c99002f9083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5445be920d0c6fa8314b138afffe0f150b7004e44e507592390c99002f9083->enter($__internal_5d5445be920d0c6fa8314b138afffe0f150b7004e44e507592390c99002f9083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:index.html.twig"));

        $__internal_d597564943912b496c11ba631688aa8c5c1369ab89c8abb945711441f90afb02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d597564943912b496c11ba631688aa8c5c1369ab89c8abb945711441f90afb02->enter($__internal_d597564943912b496c11ba631688aa8c5c1369ab89c8abb945711441f90afb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d5445be920d0c6fa8314b138afffe0f150b7004e44e507592390c99002f9083->leave($__internal_5d5445be920d0c6fa8314b138afffe0f150b7004e44e507592390c99002f9083_prof);

        
        $__internal_d597564943912b496c11ba631688aa8c5c1369ab89c8abb945711441f90afb02->leave($__internal_d597564943912b496c11ba631688aa8c5c1369ab89c8abb945711441f90afb02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c65f6932607500b69c173f11a9ab4bc02c71f1bffaf3510f60671d6f3ae2854d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65f6932607500b69c173f11a9ab4bc02c71f1bffaf3510f60671d6f3ae2854d->enter($__internal_c65f6932607500b69c173f11a9ab4bc02c71f1bffaf3510f60671d6f3ae2854d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bf1de330f9fc5e6a04a18db2c365e233557764826c8109d5fc927e5b357a3530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1de330f9fc5e6a04a18db2c365e233557764826c8109d5fc927e5b357a3530->enter($__internal_bf1de330f9fc5e6a04a18db2c365e233557764826c8109d5fc927e5b357a3530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"banner\">
        <div class=\"full-container\">
            <div class=\"slider-content\">
                <ul id=\"pager2\" class=\"container\">
                </ul>
                <!-- prev/next links -->

                <span class=\"prevControl sliderControl\"> <i class=\"fa fa-angle-left fa-3x \"></i></span> <span
                        class=\"nextControl sliderControl\"> <i class=\"fa fa-angle-right fa-3x \"></i></span>

                <div class=\"slider slider-v1\"
                     data-cycle-swipe=true
                     data-cycle-prev=\".prevControl\"
                     data-cycle-next=\".nextControl\" data-cycle-loader=\"wait\">
                    <div class=\"slider-item slider-item-img1\"><img
                                src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/slider/slider0.jpg"), "html", null, true);
        echo "\"
                                class=\"img-responsive parallaximg sliderImg\" alt=\"img\">
                    </div>
                    <div class=\"slider-item slider-item-img1\">
                        <div class=\"sliderInfo\">
                            <div class=\"container\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 sliderTextFull \">
                                    <div class=\"inner text-center\">
                                        <div class=\"topAnima animated\">
                                            <h1 class=\"uppercase xlarge\">FREE SHIPPING</h1>

                                            <h3 class=\"hidden-xs\"> Free Standard Shipping on Orders Over \$100 </h3>
                                        </div>
                                        <a class=\"btn btn-danger btn-lg bottomAnima animated opacity0\">SHOP NOW ON TSHOP
                                            <span class=\"arrowUnicode\">►</span></a></div>
                                </div>
                            </div>
                        </div>
                        <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/slider/slider1.jpg"), "html", null, true);
        echo "\"
                             class=\"img-responsive parallaximg sliderImg\" alt=\"img\"></div>
                    <!--/.slider-item-->

                    <div class=\"slider-item slider-item-img2 \">
                        <div class=\"sliderInfo\">
                            <div class=\"container\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 sliderTextFull  \">
                                    <div class=\"inner dark maxwidth500 text-center animated topAnima\">
                                        <div class=\" \">
                                            <h1 class=\"uppercase xlarge\"> Des Coupons Gratuits</h1>

                                            <h3 class=\"hidden-xs\"> Fully Free </h3>
                                        </div>
                                        <a class=\"btn btn-danger btn-lg\">SHOP NOW ON TSHOP <span
                                                    class=\"arrowUnicode\">►</span></a></div>
                                </div>
                            </div>
                        </div>
                        <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/slider/slider3.jpg"), "html", null, true);
        echo "\"
                             class=\"img-responsive parallaximg sliderImg\" alt=\"img\"></div>
                    <!--/.slider-item-->

                    <div class=\"slider-item slider-item-img3 \">
                        <div class=\"sliderInfo\">
                            <div class=\"container\">
                                <div class=\"col-lg-5 col-md-4 col-sm-6 col-xs-8   pull-left sliderText white hidden-xs\">
                                    <div class=\"inner\">
                                        <h1>TSHOP JEANS</h1>

                                        <h3 class=\"price \"> Free Shipping on \$100</h3>

                                        <p class=\"hidden-xs\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                            sed
                                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. </p>
                                        <a href=\"category.html\" class=\"btn btn-primary\">SHOP NOW <span
                                                    class=\"arrowUnicode\">►</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/slider/slider4.jpg"), "html", null, true);
        echo "\"
                             class=\"img-responsive parallaximg sliderImg\" alt=\"img\"></div>
                    <!--/.slider-item-->

                    <div class=\"slider-item slider-item-img3\">
                        <div class=\"sliderInfo\">
                            <div class=\"container\">
                                <div class=\"col-lg-5 col-md-6 col-sm-5 col-xs-5 pull-left sliderText blankstyle transformRight\">
                                    <div class=\"inner text-right\"><img
                                                src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/slider/color.png"), "html", null, true);
        echo "\"
                                                class=\"img-responsive\" alt=\"img\"></div>
                                </div>
                                <div class=\"col-lg-4 col-md-4 col-sm-5 col-xs-7   pull-left sliderText blankstyle color-white\">
                                    <div class=\"inner\">
                                        <h1 class=\"uppercase topAnima animated \">Amazing Vente Flash</h1>

                                        <p class=\"bot tomAnima animated opacity0 hidden-xs\"> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/slider/6.jpg"), "html", null, true);
        echo "\"
                             class=\"img-responsive parallaximg sliderImg\" alt=\"img\"></div>
                </div>
                <!--/.slider slider-v1-->
            </div>
            <!--/.slider-content-->
        </div>
        <!--/.full-container-->
    </div>
    <!--/.banner style1-->


    <!-- /main container -->


    <!--/.parallax-image-1-->

    <div class=\"container main-container\">


        <!-- Demo Features Content start -->

        <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">
            <!-- this div is for demo || Please remove it when use this page -->

            <h3 class=\"section-title style2 text-center\"><span>Nos Produits</span></h3>

            <div class=\"container\">
                <div class=\"row xsResponse\">
                    ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 131
            echo "                        <div class=\"col-lg-3 col-md-3 col-sm-6\">
                            <div class=\"product\">

                                <a  data-toggle=\"tooltip\" data-original-title=\"Add to Wishlist\" data-placement=\"left\" href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newwish", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"glyphicon glyphicon-heart\"></i>
                                </a>

                                <div class=\"image\">

                                    <a href=\"";
            // line 140
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute($context["product"], "imageName", array())), "html", null, true);
            echo "\"  style=\"height: 400px; width: 300px\"  ><img
                                                alt=\"img\"    class=\"img-responsive\"
                                                src=\"";
            // line 142
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute($context["product"], "imageName", array())), "html", null, true);
            echo "\"
                                                height=\"250\" width=\"200\"></a>

                                    <div class=\"promotion\"><span class=\"discount\">15% OFF</span></div>
                                </div>
                                <div class=\"description\">
                                    <h4><a href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "libelle", array()), "html", null, true);
            echo " </a></h4>

                                    <div class=\"grid-description\">
                                        <p>";
            // line 151
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p>
                                    </div>
                                    <div class=\"list-description\">
                                        <p> ";
            // line 154
            echo $this->getAttribute($context["product"], "description", array());
            echo " </p>
                                    </div>
                                    <div class=\"price\"><span>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "prixProduit", array()), "html", null, true);
            echo " <strong>\$</strong></span></div>
                                    <div class=\"action-control\"><a class=\"btn btn-primary\" href=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_panier", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"> <span class=\"add2cart\"><i
                                                        class=\"glyphicon glyphicon-shopping-cart\"> </i> Ajout au panier </span> </a></div>
                                </div>
                            </div></div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "
                </div>


            </div>

        </div>
        <!-- Demo Features Content end -->

        <!-- Main component call to action -->
 <div class=\"parallax-section parallax-image-1\">
                <div class=\"container\">
                    <div class=\"row \">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                            <div class=\"parallax-content clearfix\">
                                <h1 class=\"parallaxPrce\"> FREE </h1>

                                <h2 class=\"uppercase\">Impression GRATUITE! OBTENEZ DES COUPONS DE RéDUCTION GRATUITS </h2>


                                <div style=\"clear:both\"></div>
                                <a class=\"btn btn-discover \" href=\"";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_list");
        echo "\"> <i
                                            class=\"fa fa-shopping-cart\"></i> Imprimer Maintenant </a></div>
                        </div>
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>
        <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">
            <h3 class=\"section-title style2 text-center\"><span>Coupons</span></h3>

            <div class=\"container\">
                <div class=\"row xsResponse\">
                    ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 197
            echo "                        ";
            if ((($this->getAttribute($context["modele"], "Qte", array()) > 0) && (twig_date_converter($this->env, $this->getAttribute($context["modele"], "datefin", array())) > twig_date_converter($this->env)))) {
                // line 198
                echo "                            <div class=\"item col-lg-3 col-md-3 col-sm-4 col-xs-6\">
                                <div class=\"product\">
                                    <a class=\"add-fav tooltipHere\" data-toggle=\"tooltip\"
                                       data-original-title=\"Add to Wishlist\" data-placement=\"left\">
                                        <i class=\"glyphicon glyphicon-heart\"></i>
                                    </a>

                                    <div class=\"image\">
                                        <a href=\"";
                // line 206
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_print", array("id" => $this->getAttribute($context["modele"], "id", array()))), "html", null, true);
                echo "\"><img
                                                    src=\"";
                // line 207
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute($context["modele"], "imageName", array())), "html", null, true);
                echo "\" alt=\"img\"
                                                    class=\"img-responsive\"></a>

                                        <div class=\"promotion\"><span class=\"new-product\"> NEW</span> <span
                                                    class=\"discount\">";
                // line 211
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "tauxreduction", array()), "html", null, true);
                echo " DT Reduction</span></div>
                                    </div>
                                    <div class=\"description\">
                                        <h4><a href=\"#\">
                                                <td>";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "titre", array()), "html", null, true);
                echo "</td>
                                            </a></h4>

                                        <p>";
                // line 218
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "description", array()), "html", null, true);
                echo " </p></div>
                                    ";
                // line 219
                if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                    // line 220
                    echo "                                        <div class=\"action-control\"><a class=\"btn btn-primary\"
                                                                       href=\"";
                    // line 221
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_print", array("id" => $this->getAttribute($context["modele"], "id", array()))), "html", null, true);
                    echo "\">
                                                <span class=\"add2cart\"><i class=\"glyphicon glyphicon-shopping-cart\"> </i> Imprimer Coupon </span>
                                            </a></div>
                                    ";
                } else {
                    // line 225
                    echo "                                        <div class=\"action-control\"><a class=\"btn btn-primary\"
                                                                       href=\"";
                    // line 226
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                    echo "\"> <span
                                                        class=\"add2cart\"><i class=\"glyphicon glyphicon-shopping-cart\"> </i> Imprimer Coupon </span>
                                            </a></div>
                                    ";
                }
                // line 230
                echo "
                                </div>
                            </div>
                        ";
            }
            // line 234
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "                </div>

            </div>
           
        </div>

        <hr class=\"no-margin-top\">
        <div class=\"width100 section-block \">
            <div class=\"row featureImg\">
                <div class=\"col-md-3 col-sm-3 col-xs-6\"><a href=\"category.html\"><img
                                src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/site/new-collection-1.jpg"), "html", null, true);
        echo "\"
                                class=\"img-responsive\" alt=\"img\"></a>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\"><a href=\"category.html\"><img
                                src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/site/new-collection-2.jpg"), "html", null, true);
        echo "\"
                                class=\"img-responsive\" alt=\"img\"></a>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\"><a href=\"category.html\"><img
                                src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/site/new-collection-3.jpg"), "html", null, true);
        echo "\"
                                class=\"img-responsive\" alt=\"img\"></a>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\"><a href=\"category.html\"><img
                                src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/site/new-collection-4.jpg"), "html", null, true);
        echo "\"
                                class=\"img-responsive\" alt=\"img\"></a>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.section-block-->

        <div class=\"width100 section-block\">
            <h3 class=\"section-title\"><span> BRAND</span> <a id=\"nextBrand\" class=\"link pull-right carousel-nav\"> <i
                            class=\"fa fa-angle-right\"></i></a> <a id=\"prevBrand\" class=\"link pull-right carousel-nav\"> <i
                            class=\"fa fa-angle-left\"></i> </a></h3>

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ul class=\"no-margin brand-carousel owl-carousel owl-theme\">
                        <li><a><img src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/1.gif"), "html", null, true);
        echo "\" alt=\"img\"></a></li>
                        <li><img src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/2.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/3.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/4.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/5.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/6.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/7.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/8.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/1.gif"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/2.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/3.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/4.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/5.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/6.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/7.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/8.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                    </ul>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.section-block-->

    </div>
    <!--main-container-->

    <div class=\"parallax-section parallax-image-2\">
        <div class=\"w100 parallax-section-overley\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                        <div class=\"parallax-content clearfix\">
                            <h1 class=\"xlarge\"> Trusted Seller 500+ </h1>
                            <h5 class=\"parallaxSubtitle\"> Lorem ipsum dolor sit amet consectetuer </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.parallax-section-->

    <!-- Product Details Modal  -->
    <!-- Modal -->
    <div class=\"modal fade\" id=\"productSetailsModalAjax\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- End Modal -->
";
        
        $__internal_bf1de330f9fc5e6a04a18db2c365e233557764826c8109d5fc927e5b357a3530->leave($__internal_bf1de330f9fc5e6a04a18db2c365e233557764826c8109d5fc927e5b357a3530_prof);

        
        $__internal_c65f6932607500b69c173f11a9ab4bc02c71f1bffaf3510f60671d6f3ae2854d->leave($__internal_c65f6932607500b69c173f11a9ab4bc02c71f1bffaf3510f60671d6f3ae2854d_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  491 => 288,  487 => 287,  483 => 286,  479 => 285,  475 => 284,  471 => 283,  467 => 282,  463 => 281,  459 => 280,  455 => 279,  451 => 278,  447 => 277,  443 => 276,  439 => 275,  435 => 274,  431 => 273,  412 => 257,  405 => 253,  398 => 249,  391 => 245,  379 => 235,  373 => 234,  367 => 230,  360 => 226,  357 => 225,  350 => 221,  347 => 220,  345 => 219,  341 => 218,  335 => 215,  328 => 211,  321 => 207,  317 => 206,  307 => 198,  304 => 197,  300 => 196,  284 => 183,  261 => 162,  250 => 157,  246 => 156,  241 => 154,  235 => 151,  227 => 148,  218 => 142,  213 => 140,  204 => 134,  199 => 131,  195 => 130,  163 => 101,  148 => 89,  136 => 80,  110 => 57,  88 => 38,  67 => 20,  49 => 4,  40 => 3,  11 => 2,);
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
{% extends \"MainBundle:eshop:main.html.twig\" %}
{% block content %}

    <div class=\"banner\">
        <div class=\"full-container\">
            <div class=\"slider-content\">
                <ul id=\"pager2\" class=\"container\">
                </ul>
                <!-- prev/next links -->

                <span class=\"prevControl sliderControl\"> <i class=\"fa fa-angle-left fa-3x \"></i></span> <span
                        class=\"nextControl sliderControl\"> <i class=\"fa fa-angle-right fa-3x \"></i></span>

                <div class=\"slider slider-v1\"
                     data-cycle-swipe=true
                     data-cycle-prev=\".prevControl\"
                     data-cycle-next=\".nextControl\" data-cycle-loader=\"wait\">
                    <div class=\"slider-item slider-item-img1\"><img
                                src=\"{{ asset('bundles/eshop/images/slider/slider0.jpg') }}\"
                                class=\"img-responsive parallaximg sliderImg\" alt=\"img\">
                    </div>
                    <div class=\"slider-item slider-item-img1\">
                        <div class=\"sliderInfo\">
                            <div class=\"container\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 sliderTextFull \">
                                    <div class=\"inner text-center\">
                                        <div class=\"topAnima animated\">
                                            <h1 class=\"uppercase xlarge\">FREE SHIPPING</h1>

                                            <h3 class=\"hidden-xs\"> Free Standard Shipping on Orders Over \$100 </h3>
                                        </div>
                                        <a class=\"btn btn-danger btn-lg bottomAnima animated opacity0\">SHOP NOW ON TSHOP
                                            <span class=\"arrowUnicode\">►</span></a></div>
                                </div>
                            </div>
                        </div>
                        <img src=\"{{ asset('bundles/eshop/images/slider/slider1.jpg') }}\"
                             class=\"img-responsive parallaximg sliderImg\" alt=\"img\"></div>
                    <!--/.slider-item-->

                    <div class=\"slider-item slider-item-img2 \">
                        <div class=\"sliderInfo\">
                            <div class=\"container\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 sliderTextFull  \">
                                    <div class=\"inner dark maxwidth500 text-center animated topAnima\">
                                        <div class=\" \">
                                            <h1 class=\"uppercase xlarge\"> Des Coupons Gratuits</h1>

                                            <h3 class=\"hidden-xs\"> Fully Free </h3>
                                        </div>
                                        <a class=\"btn btn-danger btn-lg\">SHOP NOW ON TSHOP <span
                                                    class=\"arrowUnicode\">►</span></a></div>
                                </div>
                            </div>
                        </div>
                        <img src=\"{{ asset('bundles/eshop/images/slider/slider3.jpg') }}\"
                             class=\"img-responsive parallaximg sliderImg\" alt=\"img\"></div>
                    <!--/.slider-item-->

                    <div class=\"slider-item slider-item-img3 \">
                        <div class=\"sliderInfo\">
                            <div class=\"container\">
                                <div class=\"col-lg-5 col-md-4 col-sm-6 col-xs-8   pull-left sliderText white hidden-xs\">
                                    <div class=\"inner\">
                                        <h1>TSHOP JEANS</h1>

                                        <h3 class=\"price \"> Free Shipping on \$100</h3>

                                        <p class=\"hidden-xs\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                            sed
                                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. </p>
                                        <a href=\"category.html\" class=\"btn btn-primary\">SHOP NOW <span
                                                    class=\"arrowUnicode\">►</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src=\"{{ asset('bundles/eshop/images/slider/slider4.jpg') }}\"
                             class=\"img-responsive parallaximg sliderImg\" alt=\"img\"></div>
                    <!--/.slider-item-->

                    <div class=\"slider-item slider-item-img3\">
                        <div class=\"sliderInfo\">
                            <div class=\"container\">
                                <div class=\"col-lg-5 col-md-6 col-sm-5 col-xs-5 pull-left sliderText blankstyle transformRight\">
                                    <div class=\"inner text-right\"><img
                                                src=\"{{ asset('bundles/eshop/images/slider/color.png') }}\"
                                                class=\"img-responsive\" alt=\"img\"></div>
                                </div>
                                <div class=\"col-lg-4 col-md-4 col-sm-5 col-xs-7   pull-left sliderText blankstyle color-white\">
                                    <div class=\"inner\">
                                        <h1 class=\"uppercase topAnima animated \">Amazing Vente Flash</h1>

                                        <p class=\"bot tomAnima animated opacity0 hidden-xs\"> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src=\"{{ asset('bundles/eshop/images/slider/6.jpg') }}\"
                             class=\"img-responsive parallaximg sliderImg\" alt=\"img\"></div>
                </div>
                <!--/.slider slider-v1-->
            </div>
            <!--/.slider-content-->
        </div>
        <!--/.full-container-->
    </div>
    <!--/.banner style1-->


    <!-- /main container -->


    <!--/.parallax-image-1-->

    <div class=\"container main-container\">


        <!-- Demo Features Content start -->

        <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">
            <!-- this div is for demo || Please remove it when use this page -->

            <h3 class=\"section-title style2 text-center\"><span>Nos Produits</span></h3>

            <div class=\"container\">
                <div class=\"row xsResponse\">
                    {% for product in products %}
                        <div class=\"col-lg-3 col-md-3 col-sm-6\">
                            <div class=\"product\">

                                <a  data-toggle=\"tooltip\" data-original-title=\"Add to Wishlist\" data-placement=\"left\" href=\"{{path('newwish', {'id':product.id})}}\">
                                    <i class=\"glyphicon glyphicon-heart\"></i>
                                </a>

                                <div class=\"image\">

                                    <a href=\"{{ asset('bundles/images/')~ product.imageName}}\"  style=\"height: 400px; width: 300px\"  ><img
                                                alt=\"img\"    class=\"img-responsive\"
                                                src=\"{{ asset('bundles/images/')~ product.imageName}}\"
                                                height=\"250\" width=\"200\"></a>

                                    <div class=\"promotion\"><span class=\"discount\">15% OFF</span></div>
                                </div>
                                <div class=\"description\">
                                    <h4><a href=\"{{path('product_show', {'id':product.id})}}\">{{  product.libelle }} </a></h4>

                                    <div class=\"grid-description\">
                                        <p>{{product.description|raw  }}</p>
                                    </div>
                                    <div class=\"list-description\">
                                        <p> {{  product.description|raw }} </p>
                                    </div>
                                    <div class=\"price\"><span>{{  product.prixProduit }} <strong>\$</strong></span></div>
                                    <div class=\"action-control\"><a class=\"btn btn-primary\" href=\"{{path('new_panier', {'id':product.id})}}\"> <span class=\"add2cart\"><i
                                                        class=\"glyphicon glyphicon-shopping-cart\"> </i> Ajout au panier </span> </a></div>
                                </div>
                            </div></div>
                    {% endfor %}

                </div>


            </div>

        </div>
        <!-- Demo Features Content end -->

        <!-- Main component call to action -->
 <div class=\"parallax-section parallax-image-1\">
                <div class=\"container\">
                    <div class=\"row \">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                            <div class=\"parallax-content clearfix\">
                                <h1 class=\"parallaxPrce\"> FREE </h1>

                                <h2 class=\"uppercase\">Impression GRATUITE! OBTENEZ DES COUPONS DE RéDUCTION GRATUITS </h2>


                                <div style=\"clear:both\"></div>
                                <a class=\"btn btn-discover \" href=\"{{ path('coupon_list') }}\"> <i
                                            class=\"fa fa-shopping-cart\"></i> Imprimer Maintenant </a></div>
                        </div>
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>
        <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">
            <h3 class=\"section-title style2 text-center\"><span>Coupons</span></h3>

            <div class=\"container\">
                <div class=\"row xsResponse\">
                    {% for modele in modeles %}
                        {% if  modele.Qte> 0 and date(modele.datefin) > date() %}
                            <div class=\"item col-lg-3 col-md-3 col-sm-4 col-xs-6\">
                                <div class=\"product\">
                                    <a class=\"add-fav tooltipHere\" data-toggle=\"tooltip\"
                                       data-original-title=\"Add to Wishlist\" data-placement=\"left\">
                                        <i class=\"glyphicon glyphicon-heart\"></i>
                                    </a>

                                    <div class=\"image\">
                                        <a href=\"{{ path('coupon_print', {'id':modele.id}) }}\"><img
                                                    src=\"{{ asset('bundles/images/')~ modele.imageName}}\" alt=\"img\"
                                                    class=\"img-responsive\"></a>

                                        <div class=\"promotion\"><span class=\"new-product\"> NEW</span> <span
                                                    class=\"discount\">{{ modele.tauxreduction }} DT Reduction</span></div>
                                    </div>
                                    <div class=\"description\">
                                        <h4><a href=\"#\">
                                                <td>{{ modele.titre }}</td>
                                            </a></h4>

                                        <p>{{ modele.description }} </p></div>
                                    {% if app.user %}
                                        <div class=\"action-control\"><a class=\"btn btn-primary\"
                                                                       href=\"{{ path('coupon_print', {'id':modele.id}) }}\">
                                                <span class=\"add2cart\"><i class=\"glyphicon glyphicon-shopping-cart\"> </i> Imprimer Coupon </span>
                                            </a></div>
                                    {% else %}
                                        <div class=\"action-control\"><a class=\"btn btn-primary\"
                                                                       href=\"{{ path('fos_user_security_login') }}\"> <span
                                                        class=\"add2cart\"><i class=\"glyphicon glyphicon-shopping-cart\"> </i> Imprimer Coupon </span>
                                            </a></div>
                                    {% endif %}

                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                </div>

            </div>
           
        </div>

        <hr class=\"no-margin-top\">
        <div class=\"width100 section-block \">
            <div class=\"row featureImg\">
                <div class=\"col-md-3 col-sm-3 col-xs-6\"><a href=\"category.html\"><img
                                src=\"{{ asset('bundles/eshop/images/site/new-collection-1.jpg') }}\"
                                class=\"img-responsive\" alt=\"img\"></a>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\"><a href=\"category.html\"><img
                                src=\"{{ asset('bundles/eshop/images/site/new-collection-2.jpg') }}\"
                                class=\"img-responsive\" alt=\"img\"></a>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\"><a href=\"category.html\"><img
                                src=\"{{ asset('bundles/eshop/images/site/new-collection-3.jpg') }}\"
                                class=\"img-responsive\" alt=\"img\"></a>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\"><a href=\"category.html\"><img
                                src=\"{{ asset('bundles/eshop/images/site/new-collection-4.jpg') }}\"
                                class=\"img-responsive\" alt=\"img\"></a>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.section-block-->

        <div class=\"width100 section-block\">
            <h3 class=\"section-title\"><span> BRAND</span> <a id=\"nextBrand\" class=\"link pull-right carousel-nav\"> <i
                            class=\"fa fa-angle-right\"></i></a> <a id=\"prevBrand\" class=\"link pull-right carousel-nav\"> <i
                            class=\"fa fa-angle-left\"></i> </a></h3>

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ul class=\"no-margin brand-carousel owl-carousel owl-theme\">
                        <li><a><img src=\"{{ asset('bundles/eshop/images/brand/1.gif') }}\" alt=\"img\"></a></li>
                        <li><img src=\"{{ asset('bundles/eshop/images/brand/2.png') }}\" alt=\"img\"></li>
                        <li><img src=\"{{ asset('bundles/eshop/images/brand/3.png') }}\" alt=\"img\"></li>
                        <li><img src=\"{{ asset('bundles/eshop/images/brand/4.png') }}\" alt=\"img\"></li>
                        <li><img src=\"{{ asset('bundles/eshop/images/brand/5.png') }}\" alt=\"img\"></li>
                        <li><img src=\"{{ asset('bundles/eshop/images/brand/6.png') }}\" alt=\"img\"></li>
                        <li><img src=\"{{ asset('bundles/eshop/images/brand/7.png') }}\" alt=\"img\"></li>
                        <li><img src=\"{{ asset('bundles/eshop/images/brand/8.png') }}\" alt=\"img\"></li>
                        <li><img src=\"{{ asset('bundles/eshop/images/brand/1.gif') }}\" alt=\"img\"></li>
                        <li><img src=\"{{ asset('bundles/eshop/images/brand/2.png') }}\" alt=\"img\"></li>
                        <li><img src=\"{{ asset('bundles/eshop/images/brand/3.png') }}\" alt=\"img\"></li>
                        <li><img src=\"{{ asset('bundles/eshop/images/brand/4.png') }}\" alt=\"img\"></li>
                        <li><img src=\"{{ asset('bundles/eshop/images/brand/5.png') }}\" alt=\"img\"></li>
                        <li><img src=\"{{ asset('bundles/eshop/images/brand/6.png') }}\" alt=\"img\"></li>
                        <li><img src=\"{{ asset('bundles/eshop/images/brand/7.png') }}\" alt=\"img\"></li>
                        <li><img src=\"{{ asset('bundles/eshop/images/brand/8.png') }}\" alt=\"img\"></li>
                    </ul>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.section-block-->

    </div>
    <!--main-container-->

    <div class=\"parallax-section parallax-image-2\">
        <div class=\"w100 parallax-section-overley\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                        <div class=\"parallax-content clearfix\">
                            <h1 class=\"xlarge\"> Trusted Seller 500+ </h1>
                            <h5 class=\"parallaxSubtitle\"> Lorem ipsum dolor sit amet consectetuer </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.parallax-section-->

    <!-- Product Details Modal  -->
    <!-- Modal -->
    <div class=\"modal fade\" id=\"productSetailsModalAjax\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"productSetailsModalAjaxLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- End Modal -->
{% endblock %}
", "MainBundle:Default:index.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\src\\MainBundle/Resources/views/Default/index.html.twig");
    }
}
