<?php

/* MainBundle:Default:index.html.twig */
class __TwigTemplate_3e804c2f6a8867ac51e32d5c25af2c1dc777c71efaf0177ad87606e471654e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "MainBundle:Default:index.html.twig", 1);
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
        $__internal_6a1880342751662e43857bc252ebd7c4497306516ad2741ec2e44efa69d34df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a1880342751662e43857bc252ebd7c4497306516ad2741ec2e44efa69d34df0->enter($__internal_6a1880342751662e43857bc252ebd7c4497306516ad2741ec2e44efa69d34df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:index.html.twig"));

        $__internal_d3dfd6a0785ccd490bcb3efb266e152d144f8bb1786aa0d2d68056dc453d7595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3dfd6a0785ccd490bcb3efb266e152d144f8bb1786aa0d2d68056dc453d7595->enter($__internal_d3dfd6a0785ccd490bcb3efb266e152d144f8bb1786aa0d2d68056dc453d7595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a1880342751662e43857bc252ebd7c4497306516ad2741ec2e44efa69d34df0->leave($__internal_6a1880342751662e43857bc252ebd7c4497306516ad2741ec2e44efa69d34df0_prof);

        
        $__internal_d3dfd6a0785ccd490bcb3efb266e152d144f8bb1786aa0d2d68056dc453d7595->leave($__internal_d3dfd6a0785ccd490bcb3efb266e152d144f8bb1786aa0d2d68056dc453d7595_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_3a0fd1d68226e8a2a464f7246c2a7aff04f50bf5e3935d07af6b63e5cd52ec0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0fd1d68226e8a2a464f7246c2a7aff04f50bf5e3935d07af6b63e5cd52ec0e->enter($__internal_3a0fd1d68226e8a2a464f7246c2a7aff04f50bf5e3935d07af6b63e5cd52ec0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_90e4d43d8f0ab7029ff898960d99f11f80df59fb97a2fe4e4b1adbaf4f145dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e4d43d8f0ab7029ff898960d99f11f80df59fb97a2fe4e4b1adbaf4f145dd2->enter($__internal_90e4d43d8f0ab7029ff898960d99f11f80df59fb97a2fe4e4b1adbaf4f145dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
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
                    <div class=\"slider-item slider-item-img1\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/slider/slider0.jpg"), "html", null, true);
        echo "\" class=\"img-responsive parallaximg sliderImg\" alt=\"img\">
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
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/slider/slider1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive parallaximg sliderImg\" alt=\"img\"></div>
                    <!--/.slider-item-->

                    <div class=\"slider-item slider-item-img2 \">
                        <div class=\"sliderInfo\">
                            <div class=\"container\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 sliderTextFull  \">
                                    <div class=\"inner dark maxwidth500 text-center animated topAnima\">
                                        <div class=\" \">
                                            <h1 class=\"uppercase xlarge\"> CUSTOM HTML BLOCK</h1>

                                            <h3 class=\"hidden-xs\"> Custom Slides to Your Slider </h3>
                                        </div>
                                        <a class=\"btn btn-danger btn-lg\">SHOP NOW ON TSHOP <span
                                                    class=\"arrowUnicode\">►</span></a></div>
                                </div>
                            </div>
                        </div>
                        <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/slider/slider3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive parallaximg sliderImg\" alt=\"img\"></div>
                    <!--/.slider-item-->

                    <div class=\"slider-item slider-item-img3 \">
                        <div class=\"sliderInfo\">
                            <div class=\"container\">
                                <div class=\"col-lg-5 col-md-4 col-sm-6 col-xs-8   pull-left sliderText white hidden-xs\">
                                    <div class=\"inner\">
                                        <h1>TSHOP JEANS</h1>

                                        <h3 class=\"price \"> Free Shipping on \$100</h3>

                                        <p class=\"hidden-xs\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. </p>
                                        <a href=\"category.html\" class=\"btn btn-primary\">SHOP NOW <span class=\"arrowUnicode\">►</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/slider/slider4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive parallaximg sliderImg\" alt=\"img\"></div>
                    <!--/.slider-item-->

                    <div class=\"slider-item slider-item-img3\">
                        <div class=\"sliderInfo\">
                            <div class=\"container\">
                                <div class=\"col-lg-5 col-md-6 col-sm-5 col-xs-5 pull-left sliderText blankstyle transformRight\">
                                    <div class=\"inner text-right\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/slider/color.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"img\"></div>
                                </div>
                                <div class=\"col-lg-4 col-md-4 col-sm-5 col-xs-7   pull-left sliderText blankstyle color-white\">
                                    <div class=\"inner\">
                                        <h1 class=\"uppercase topAnima animated \">10+ Amazing Color Theme</h1>

                                        <p class=\"bot tomAnima animated opacity0 hidden-xs\"> Fully responsive bootstrap
                                            Ecommerce Template. Available in 10+ color schemes and easy to set. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/slider/6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive parallaximg sliderImg\" alt=\"img\"></div>
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

            <h3 class=\"section-title style2 text-center\"><span>NEW FEATURES</span></h3>

            <div class=\"container\">
                <div class=\"row xsResponse categoryProduct\">
                    ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 121
            echo "
                        <div class=\"item itemauto col-lg-3 col-md-3 col-sm-6 col-xs-6\">
                            <div class=\"product\">
                                <a class=\"tooltipHere\" href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newwish", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"
                                   data-placement=\"left\">
                                    <i class=\"glyphicon glyphicon-heart\"></i>
                                </a>


                                <div class=\"imageHover\">

                                    <div class=\"promotion\"><span class=\"discount\">15% OFF</span></div>

                                    <div id=\"carousel-id-1\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"0\">
                                        <!-- Indicators -->
                                        <ol class=\"carousel-indicators\">
                                            <li data-target=\"#carousel-id-1\" data-slide-to=\"0\" class=\"active\"></li>
                                            <li data-target=\"#carousel-id-1\" data-slide-to=\"1\"></li>
                                            <li data-target=\"#carousel-id-1\" data-slide-to=\"2\"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class=\"carousel-inner\" role=\"listbox\">
                                            <div class=\"item active\"><a href=\"product-details.html\"> <img
                                                            src=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/product/5.jpg"), "html", null, true);
            echo "\" alt=\"img\" class=\"img-responsive \"></a></div>
                                            <div class=\"item\"><a href=\"product-details.html\"> <img src=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/product/21.jpg"), "html", null, true);
            echo "\" alt=\"img\" class=\"img-responsive \"></a>
                                            </div>
                                            <div class=\"item\"><a href=\"product-details.html\"> <img src=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/product/30.jpg"), "html", null, true);
            echo "\" alt=\"img\" class=\"img-responsive \"></a>
                                            </div>
                                        </div>

                                        <!-- Controls -->
                                        <a class=\"left carousel-control\" href=\"#carousel-id-1\" role=\"button\" data-slide=\"prev\">
                                            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Previous</span>
                                        </a>
                                        <a class=\"right carousel-control\" href=\"#carousel-id-1\" role=\"button\" data-slide=\"next\">
                                            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Next</span>
                                        </a>
                                    </div>


                                </div>


                                <div class=\"description\">
                                    <h4><a href=\"product-details.html\"> Product Slider </a></h4>

                                    <div class=\"grid-description\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    </div>
                                    <div class=\"list-description\">
                                        <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                                            fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                                            odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                                            vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                                            sit amet placerat elit. </p>
                                    </div>
                                    <span class=\"size\">XL / XXL / S </span></div>
                                <div class=\"price\"><span>\$25</span></div>
                                <div class=\"action-control\"><a class=\"btn btn-primary\" href=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_panier", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"> <span class=\"add2cart\"><i
                                                    class=\"glyphicon glyphicon-shopping-cart\"> </i> Add to cart </span> </a></div>
                            </div>
                        </div>
                        <!--/.item-->
                        <!--/.item-->
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "
                </div>
            </div>

        </div>
        <!-- Demo Features Content end -->

        <!-- Main component call to action -->

        <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">
            <h3 class=\"section-title style2 text-center\"><span>Coupons</span></h3>

            <div class=\"container\">
                <div class=\"row xsResponse\">
                    ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 205
            echo "                        ";
            if ((($this->getAttribute($context["modele"], "Qte", array()) > 0) && (twig_date_converter($this->env, $this->getAttribute($context["modele"], "datefin", array())) > twig_date_converter($this->env)))) {
                // line 206
                echo "                            <div class=\"item col-lg-3 col-md-3 col-sm-4 col-xs-6\">
                                <div class=\"product\">
                                    <a class=\"add-fav tooltipHere\" data-toggle=\"tooltip\" data-original-title=\"Add to Wishlist\" data-placement=\"left\">
                                        <i class=\"glyphicon glyphicon-heart\"></i>
                                    </a>

                                    <div class=\"image\">

                                        <a href=\"";
                // line 214
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_print", array("id" => $this->getAttribute($context["modele"], "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/products/" . $this->getAttribute($context["modele"], "imageName", array()))), "html", null, true);
                echo "\" alt=\"img\" class=\"img-responsive\"></a>

                                        <div class=\"promotion\"><span class=\"new-product\"> NEW</span> <span class=\"discount\">";
                // line 216
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "tauxreduction", array()), "html", null, true);
                echo " DT Reduction</span></div>
                                    </div>
                                    <div class=\"description\">
                                        <h4><a href=\"#\"><td>";
                // line 219
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "titre", array()), "html", null, true);
                echo "</td></a></h4>

                                        <p>";
                // line 221
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "description", array()), "html", null, true);
                echo " </p></div>
                                    ";
                // line 222
                if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                    // line 223
                    echo "                                        <div class=\"action-control\"><a class=\"btn btn-primary\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_print", array("id" => $this->getAttribute($context["modele"], "id", array()))), "html", null, true);
                    echo "\"> <span class=\"add2cart\"><i class=\"glyphicon glyphicon-shopping-cart\"> </i> Imprimer Coupon </span> </a></div>
                                    ";
                } else {
                    // line 225
                    echo "                                        <div class=\"action-control\"><a class=\"btn btn-primary\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                    echo "\"> <span class=\"add2cart\"><i class=\"glyphicon glyphicon-shopping-cart\"> </i> Imprimer Coupon </span> </a></div>
                                    ";
                }
                // line 227
                echo "
                                </div>
                            </div>
                        ";
            }
            // line 231
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "                </div>

            </div>
            <div class=\"parallax-section parallax-image-1\">
                <div class=\"container\">
                    <div class=\"row \">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                            <div class=\"parallax-content clearfix\">
                                <h1 class=\"parallaxPrce\"> FREE </h1>

                                <h2 class=\"uppercase\">Impression GRATUITE! OBTENEZ DES COUPONS DE RéDUCTION GRATUITS </h2>


                                <div style=\"clear:both\"></div>
                                <a class=\"btn btn-discover \" href=\"";
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_list");
        echo "\"> <i class=\"fa fa-shopping-cart\"></i> Imprimer Maintenant </a></div>
                        </div>
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>
        </div>

        <hr class=\"no-margin-top\">
        <div class=\"width100 section-block \">
            <div class=\"row featureImg\">
                <div class=\"col-md-3 col-sm-3 col-xs-6\"><a href=\"category.html\"><img src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/site/new-collection-1.jpg"), "html", null, true);
        echo "\"
                                                                                     class=\"img-responsive\" alt=\"img\"></a>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\"><a href=\"category.html\"><img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/site/new-collection-2.jpg"), "html", null, true);
        echo "\"
                                                                                     class=\"img-responsive\" alt=\"img\"></a>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\"><a href=\"category.html\"><img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/site/new-collection-3.jpg"), "html", null, true);
        echo "\"
                                                                                     class=\"img-responsive\" alt=\"img\"></a>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\"><a href=\"category.html\"><img src=\"";
        // line 267
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
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/1.gif"), "html", null, true);
        echo "\" alt=\"img\"></a></li>
                        <li><img src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/2.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/3.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/4.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/5.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/6.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/7.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/8.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/1.gif"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/2.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/3.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/4.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/5.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/6.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/brand/7.png"), "html", null, true);
        echo "\" alt=\"img\"></li>
                        <li><img src=\"";
        // line 298
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
        
        $__internal_90e4d43d8f0ab7029ff898960d99f11f80df59fb97a2fe4e4b1adbaf4f145dd2->leave($__internal_90e4d43d8f0ab7029ff898960d99f11f80df59fb97a2fe4e4b1adbaf4f145dd2_prof);

        
        $__internal_3a0fd1d68226e8a2a464f7246c2a7aff04f50bf5e3935d07af6b63e5cd52ec0e->leave($__internal_3a0fd1d68226e8a2a464f7246c2a7aff04f50bf5e3935d07af6b63e5cd52ec0e_prof);

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
        return array (  488 => 298,  484 => 297,  480 => 296,  476 => 295,  472 => 294,  468 => 293,  464 => 292,  460 => 291,  456 => 290,  452 => 289,  448 => 288,  444 => 287,  440 => 286,  436 => 285,  432 => 284,  428 => 283,  409 => 267,  403 => 264,  397 => 261,  391 => 258,  376 => 246,  360 => 232,  354 => 231,  348 => 227,  342 => 225,  336 => 223,  334 => 222,  330 => 221,  325 => 219,  319 => 216,  312 => 214,  302 => 206,  299 => 205,  295 => 204,  279 => 190,  266 => 183,  228 => 148,  223 => 146,  219 => 145,  195 => 124,  190 => 121,  186 => 120,  155 => 92,  140 => 80,  130 => 73,  107 => 53,  86 => 35,  66 => 18,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MainBundle:eshop:main.html.twig\" %}
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
                    <div class=\"slider-item slider-item-img1\"><img src=\"{{asset('bundles/eshop/images/slider/slider0.jpg')}}\" class=\"img-responsive parallaximg sliderImg\" alt=\"img\">
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
                        <img src=\"{{asset('bundles/eshop/images/slider/slider1.jpg')}}\" class=\"img-responsive parallaximg sliderImg\" alt=\"img\"></div>
                    <!--/.slider-item-->

                    <div class=\"slider-item slider-item-img2 \">
                        <div class=\"sliderInfo\">
                            <div class=\"container\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 sliderTextFull  \">
                                    <div class=\"inner dark maxwidth500 text-center animated topAnima\">
                                        <div class=\" \">
                                            <h1 class=\"uppercase xlarge\"> CUSTOM HTML BLOCK</h1>

                                            <h3 class=\"hidden-xs\"> Custom Slides to Your Slider </h3>
                                        </div>
                                        <a class=\"btn btn-danger btn-lg\">SHOP NOW ON TSHOP <span
                                                    class=\"arrowUnicode\">►</span></a></div>
                                </div>
                            </div>
                        </div>
                        <img src=\"{{asset('bundles/eshop/images/slider/slider3.jpg')}}\" class=\"img-responsive parallaximg sliderImg\" alt=\"img\"></div>
                    <!--/.slider-item-->

                    <div class=\"slider-item slider-item-img3 \">
                        <div class=\"sliderInfo\">
                            <div class=\"container\">
                                <div class=\"col-lg-5 col-md-4 col-sm-6 col-xs-8   pull-left sliderText white hidden-xs\">
                                    <div class=\"inner\">
                                        <h1>TSHOP JEANS</h1>

                                        <h3 class=\"price \"> Free Shipping on \$100</h3>

                                        <p class=\"hidden-xs\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. </p>
                                        <a href=\"category.html\" class=\"btn btn-primary\">SHOP NOW <span class=\"arrowUnicode\">►</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src=\"{{asset('bundles/eshop/images/slider/slider4.jpg')}}\" class=\"img-responsive parallaximg sliderImg\" alt=\"img\"></div>
                    <!--/.slider-item-->

                    <div class=\"slider-item slider-item-img3\">
                        <div class=\"sliderInfo\">
                            <div class=\"container\">
                                <div class=\"col-lg-5 col-md-6 col-sm-5 col-xs-5 pull-left sliderText blankstyle transformRight\">
                                    <div class=\"inner text-right\"><img src=\"{{asset('bundles/eshop/images/slider/color.png')}}\" class=\"img-responsive\" alt=\"img\"></div>
                                </div>
                                <div class=\"col-lg-4 col-md-4 col-sm-5 col-xs-7   pull-left sliderText blankstyle color-white\">
                                    <div class=\"inner\">
                                        <h1 class=\"uppercase topAnima animated \">10+ Amazing Color Theme</h1>

                                        <p class=\"bot tomAnima animated opacity0 hidden-xs\"> Fully responsive bootstrap
                                            Ecommerce Template. Available in 10+ color schemes and easy to set. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src=\"{{asset('bundles/eshop/images/slider/6.jpg')}}\" class=\"img-responsive parallaximg sliderImg\" alt=\"img\"></div>
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

            <h3 class=\"section-title style2 text-center\"><span>NEW FEATURES</span></h3>

            <div class=\"container\">
                <div class=\"row xsResponse categoryProduct\">
                    {% for product in products %}

                        <div class=\"item itemauto col-lg-3 col-md-3 col-sm-6 col-xs-6\">
                            <div class=\"product\">
                                <a class=\"tooltipHere\" href=\"{{path('newwish', {'id':product.id})}}\"
                                   data-placement=\"left\">
                                    <i class=\"glyphicon glyphicon-heart\"></i>
                                </a>


                                <div class=\"imageHover\">

                                    <div class=\"promotion\"><span class=\"discount\">15% OFF</span></div>

                                    <div id=\"carousel-id-1\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"0\">
                                        <!-- Indicators -->
                                        <ol class=\"carousel-indicators\">
                                            <li data-target=\"#carousel-id-1\" data-slide-to=\"0\" class=\"active\"></li>
                                            <li data-target=\"#carousel-id-1\" data-slide-to=\"1\"></li>
                                            <li data-target=\"#carousel-id-1\" data-slide-to=\"2\"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class=\"carousel-inner\" role=\"listbox\">
                                            <div class=\"item active\"><a href=\"product-details.html\"> <img
                                                            src=\"{{asset('bundles/eshop/images/product/5.jpg')}}\" alt=\"img\" class=\"img-responsive \"></a></div>
                                            <div class=\"item\"><a href=\"product-details.html\"> <img src=\"{{asset('bundles/eshop/images/product/21.jpg')}}\" alt=\"img\" class=\"img-responsive \"></a>
                                            </div>
                                            <div class=\"item\"><a href=\"product-details.html\"> <img src=\"{{asset('bundles/eshop/images/product/30.jpg')}}\" alt=\"img\" class=\"img-responsive \"></a>
                                            </div>
                                        </div>

                                        <!-- Controls -->
                                        <a class=\"left carousel-control\" href=\"#carousel-id-1\" role=\"button\" data-slide=\"prev\">
                                            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Previous</span>
                                        </a>
                                        <a class=\"right carousel-control\" href=\"#carousel-id-1\" role=\"button\" data-slide=\"next\">
                                            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Next</span>
                                        </a>
                                    </div>


                                </div>


                                <div class=\"description\">
                                    <h4><a href=\"product-details.html\"> Product Slider </a></h4>

                                    <div class=\"grid-description\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    </div>
                                    <div class=\"list-description\">
                                        <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                                            fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                                            odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                                            vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                                            sit amet placerat elit. </p>
                                    </div>
                                    <span class=\"size\">XL / XXL / S </span></div>
                                <div class=\"price\"><span>\$25</span></div>
                                <div class=\"action-control\"><a class=\"btn btn-primary\" href=\"{{path('new_panier', {'id':product.id})}}\"> <span class=\"add2cart\"><i
                                                    class=\"glyphicon glyphicon-shopping-cart\"> </i> Add to cart </span> </a></div>
                            </div>
                        </div>
                        <!--/.item-->
                        <!--/.item-->
                    {% endfor %}

                </div>
            </div>

        </div>
        <!-- Demo Features Content end -->

        <!-- Main component call to action -->

        <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">
            <h3 class=\"section-title style2 text-center\"><span>Coupons</span></h3>

            <div class=\"container\">
                <div class=\"row xsResponse\">
                    {% for modele in modeles %}
                        {% if  modele.Qte> 0 and date(modele.datefin) > date() %}
                            <div class=\"item col-lg-3 col-md-3 col-sm-4 col-xs-6\">
                                <div class=\"product\">
                                    <a class=\"add-fav tooltipHere\" data-toggle=\"tooltip\" data-original-title=\"Add to Wishlist\" data-placement=\"left\">
                                        <i class=\"glyphicon glyphicon-heart\"></i>
                                    </a>

                                    <div class=\"image\">

                                        <a href=\"{{path('coupon_print', {'id':modele.id})}}\"><img src=\"{{ asset('images/products/' ~ modele.imageName)}}\" alt=\"img\" class=\"img-responsive\"></a>

                                        <div class=\"promotion\"><span class=\"new-product\"> NEW</span> <span class=\"discount\">{{modele.tauxreduction}} DT Reduction</span></div>
                                    </div>
                                    <div class=\"description\">
                                        <h4><a href=\"#\"><td>{{modele.titre}}</td></a></h4>

                                        <p>{{modele.description}} </p></div>
                                    {% if app.user %}
                                        <div class=\"action-control\"><a class=\"btn btn-primary\" href=\"{{path('coupon_print', {'id':modele.id})}}\"> <span class=\"add2cart\"><i class=\"glyphicon glyphicon-shopping-cart\"> </i> Imprimer Coupon </span> </a></div>
                                    {% else %}
                                        <div class=\"action-control\"><a class=\"btn btn-primary\" href=\"{{path('fos_user_security_login')}}\"> <span class=\"add2cart\"><i class=\"glyphicon glyphicon-shopping-cart\"> </i> Imprimer Coupon </span> </a></div>
                                    {% endif %}

                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                </div>

            </div>
            <div class=\"parallax-section parallax-image-1\">
                <div class=\"container\">
                    <div class=\"row \">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                            <div class=\"parallax-content clearfix\">
                                <h1 class=\"parallaxPrce\"> FREE </h1>

                                <h2 class=\"uppercase\">Impression GRATUITE! OBTENEZ DES COUPONS DE RéDUCTION GRATUITS </h2>


                                <div style=\"clear:both\"></div>
                                <a class=\"btn btn-discover \" href=\"{{path('coupon_list')}}\"> <i class=\"fa fa-shopping-cart\"></i> Imprimer Maintenant </a></div>
                        </div>
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>
        </div>

        <hr class=\"no-margin-top\">
        <div class=\"width100 section-block \">
            <div class=\"row featureImg\">
                <div class=\"col-md-3 col-sm-3 col-xs-6\"><a href=\"category.html\"><img src=\"{{asset('bundles/eshop/images/site/new-collection-1.jpg')}}\"
                                                                                     class=\"img-responsive\" alt=\"img\"></a>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\"><a href=\"category.html\"><img src=\"{{asset('bundles/eshop/images/site/new-collection-2.jpg')}}\"
                                                                                     class=\"img-responsive\" alt=\"img\"></a>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\"><a href=\"category.html\"><img src=\"{{asset('bundles/eshop/images/site/new-collection-3.jpg')}}\"
                                                                                     class=\"img-responsive\" alt=\"img\"></a>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\"><a href=\"category.html\"><img src=\"{{asset('bundles/eshop/images/site/new-collection-4.jpg')}}\"
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
                        <li><a><img src=\"{{asset('bundles/eshop/images/brand/1.gif')}}\" alt=\"img\"></a></li>
                        <li><img src=\"{{asset('bundles/eshop/images/brand/2.png')}}\" alt=\"img\"></li>
                        <li><img src=\"{{asset('bundles/eshop/images/brand/3.png')}}\" alt=\"img\"></li>
                        <li><img src=\"{{asset('bundles/eshop/images/brand/4.png')}}\" alt=\"img\"></li>
                        <li><img src=\"{{asset('bundles/eshop/images/brand/5.png')}}\" alt=\"img\"></li>
                        <li><img src=\"{{asset('bundles/eshop/images/brand/6.png')}}\" alt=\"img\"></li>
                        <li><img src=\"{{asset('bundles/eshop/images/brand/7.png')}}\" alt=\"img\"></li>
                        <li><img src=\"{{asset('bundles/eshop/images/brand/8.png')}}\" alt=\"img\"></li>
                        <li><img src=\"{{asset('bundles/eshop/images/brand/1.gif')}}\" alt=\"img\"></li>
                        <li><img src=\"{{asset('bundles/eshop/images/brand/2.png')}}\" alt=\"img\"></li>
                        <li><img src=\"{{asset('bundles/eshop/images/brand/3.png')}}\" alt=\"img\"></li>
                        <li><img src=\"{{asset('bundles/eshop/images/brand/4.png')}}\" alt=\"img\"></li>
                        <li><img src=\"{{asset('bundles/eshop/images/brand/5.png')}}\" alt=\"img\"></li>
                        <li><img src=\"{{asset('bundles/eshop/images/brand/6.png')}}\" alt=\"img\"></li>
                        <li><img src=\"{{asset('bundles/eshop/images/brand/7.png')}}\" alt=\"img\"></li>
                        <li><img src=\"{{asset('bundles/eshop/images/brand/8.png')}}\" alt=\"img\"></li>
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
", "MainBundle:Default:index.html.twig", "C:\\wamp64\\www\\test\\src\\MainBundle/Resources/views/Default/index.html.twig");
    }
}
