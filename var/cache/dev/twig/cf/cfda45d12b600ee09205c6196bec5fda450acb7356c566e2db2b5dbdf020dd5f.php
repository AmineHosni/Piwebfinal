<?php

/* MainBundle:eshop:header.html.twig */
class __TwigTemplate_f78bc8970df001aae7318f6709bd1c16234a0759f21b1293f350dd7672985532 extends Twig_Template
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
        $__internal_b1fed2d9c80db1f04c042e98a6ec19029d9a25193babcecd6487261df30fa924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1fed2d9c80db1f04c042e98a6ec19029d9a25193babcecd6487261df30fa924->enter($__internal_b1fed2d9c80db1f04c042e98a6ec19029d9a25193babcecd6487261df30fa924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:eshop:header.html.twig"));

        $__internal_971aff1206b2780b1b8914c7d5f9f7512cf8304bb52979e7624c657e107f48f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971aff1206b2780b1b8914c7d5f9f7512cf8304bb52979e7624c657e107f48f1->enter($__internal_971aff1206b2780b1b8914c7d5f9f7512cf8304bb52979e7624c657e107f48f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:eshop:header.html.twig"));

        // line 1
        echo "<div class=\"navbar navbar-tshop navbar-fixed-top megamenu\" role=\"navigation\">
    <div class=\"navbar-top\">
        ";
        // line 3
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 4
            echo "            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-sm-6 col-xs-6 col-md-6\">
                        <div class=\"pull-left \">
                            <ul class=\"userMenu \">
                                <li><a href=\"#\"> <span class=\"hidden-xs\">HELP</span><i class=\"glyphicon glyphicon-info-sign hide visible-xs \"></i> </a></li>
                                <li class=\"phone-number\"><a href=\"callto:+216 41747037\"> <span> <i class=\"glyphicon glyphicon-phone-alt \"></i></span> <span class=\"hidden-xs\" style=\"margin-left:5px\"> +216 41747037 </span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding\">
                        <div class=\"pull-right\">
                            <ul class=\"userMenu\">


                              ";
            // line 20
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 21
                echo "                                   <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mainaddminn");
                echo "\"><span class=\"hidden-xs\">espace Administrateur</span> <i class=\"glyphicon glyphicon-user hide visible-xs \"></i></a></li>
                                   ";
            }
            // line 23
            echo "                               
                        <li class=\"dropdown hasUserMenu\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"> <i class=\"glyphicon glyphicon-log-in hide visible-xs \"></i> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\"></i> Modifier Profil</a></li>
                                        <li><a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><i class=\"fa fa fa-cog\"></i> Profile</a></li>
                                        <li><a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_wishlist");
            echo "\" title=\"My wishlists\">
                                                <i class=\"fa fa-heart\"></i>
                                                Ma wishlist
                                            </a></li>
                                              ";
            // line 32
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "statutcoupon", array()) == 1)) {
                // line 33
                echo "                                        <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_index");
                echo "\" title=\"Mes Coupons\">
                                                <i class=\"fa fa-fw fa-clock-o\"></i>
                                                Mes Coupons
                                            </a></li>
                                            ";
            }
            // line 38
            echo "                                        <li class=\"divider\"></li>
                                        <li><a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa  fa-sign-out\"></i> Déconnexion</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        ";
        } else {
            // line 51
            echo "            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-sm-6 col-xs-6 col-md-6\">
                        <div class=\"pull-left \">
                            <ul class=\"userMenu \">
                                <li><a href=\"#\"> <span class=\"hidden-xs\">HELP</span><i
                                                class=\"glyphicon glyphicon-info-sign hide visible-xs \"></i> </a></li>
                                <li class=\"phone-number\"><a href=\"callto:+216 41747037\"> <span> <i
                                                    class=\"glyphicon glyphicon-phone-alt \"></i></span> <span class=\"hidden-xs\"
                                                                                                             style=\"margin-left:5px\"> +216 41747037</span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding\">
                        <div class=\"pull-right\">
                            <ul class=\"userMenu\">

                                <li><a href=\"";
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" > <span class=\"hidden-xs\">Se Connecter</span>
                                <li><a href=\"";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" > <span class=\"hidden-xs\">Inscription</span>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 78
        echo "    </div>
    <!--/.navbar-top-->




















    <div class=\"container\">
    
   <div class=\"nav navbar-nav navbar-right hidden-xs\">
                <div class=\"dropdown  cartMenu \"><a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_cart");
        echo "\" class=\"dropdown-toggle\" > <i
                        class=\"fa fa-shopping-cart\"> </i> <span class=\"cartRespons\"> Mon Panier </span> </a>

          
                    <!--/.dropdown-menu-->
                </div>
                <!--/.cartMenu-->

           
                <!--/.search-box -->
            </div>






        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span
                        class=\"sr-only\"> Toggle navigation </span> <span class=\"icon-bar\"> </span> <span
                        class=\"icon-bar\"> </span> <span class=\"icon-bar\"> </span></button>
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-cart\"><i
                        class=\"fa fa-shopping-cart colorWhite\"> </i> <span
                        class=\"cartRespons colorWhite\"> Cart (\$210.00) </span></button>
            <a class=\"navbar-brand \" href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_homepage");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/logo.png"), "html", null, true);
        echo "\" alt=\"TSHOP\"> </a>

            <!-- this part for mobile -->

        </div>

        <!-- this part is duplicate from cartMenu  keep it for mobile -->
        <div class=\"navbar-cart  collapse\">
            <div class=\"cartMenu  col-lg-4 col-xs-12 col-md-4 \">

            </div>
            <!--/.cartMenu-->
        </div>
        <!--/.navbar-cart-->

        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"\"><a href=\"";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\"> Les membres
                    </a></li>
                <li class=\"\"><a href=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("venteflash_list");
        echo "\"><i class=\"fa fa-fw fa-clock-o\"></i> les ventes flash </a></li>
                <li class=\"\"><a href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\"><i class=\"fa fa-fw fa-caret-square-o-down\"></i> les  produits </a></li>
                <li class=\"\"><a href=\"";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_list");
        echo "\"><i class=\"fa fa-fw fa-sticky-note\"></i> les coupons </a></li>
                <li class=\"\"><a href=\"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Magasin_List");
        echo "\"><i class=\"fa fa-fw fa-home\"></i> les magazins </a></li>



                <li class=\"dropdown megamenu-fullwidth\"><a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"> New
                        Products <b class=\"caret\"> </b> </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"megamenu-content \">
                            <ul class=\"col-lg-3  col-sm-3 col-md-3 unstyled noMarginLeft newCollectionUl\">
                                <li class=\"no-border\">
                                    <p class=\"promo-1\"><strong> NEW COLLECTION </strong></p>
                                </li>
                                <li><a href=\"category.html\"> ALL NEW PRODUCTS </a></li>
                                <li><a href=\"category.html\"> NEW TOPS </a></li>
                                <li><a href=\"category.html\"> NEW SHOES </a></li>
                                <li><a href=\"category.html\"> NEW TSHIRT </a></li>
                                <li><a href=\"category.html\"> NEW TSHOP </a></li>
                            </ul>
                            <ul class=\"col-lg-3  col-sm-3 col-md-3  col-xs-4\">
                                <li><a class=\"newProductMenuBlock\" href=\"product-details.html\"> <img
                                                class=\"img-responsive\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/site/promo1.jpg"), "html", null, true);
        echo "\" alt=\"product\"> <span
                                                class=\"ProductMenuCaption\"> <i class=\"fa fa-caret-right\"> </i> JEANS </span>
                                    </a></li>
                            </ul>
                            <ul class=\"col-lg-3  col-sm-3 col-md-3 col-xs-4\">
                                <li><a class=\"newProductMenuBlock\" href=\"product-details.html\"> <img
                                                class=\"img-responsive\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/site/promo2.jpg"), "html", null, true);
        echo "\" alt=\"product\"> <span
                                                class=\"ProductMenuCaption\"> <i
                                                    class=\"fa fa-caret-right\"> </i> PARTY DRESS </span> </a></li>
                            </ul>
                            <ul class=\"col-lg-3  col-sm-3 col-md-3 col-xs-4\">
                                <li><a class=\"newProductMenuBlock\" href=\"product-details.html\"> <img
                                                class=\"img-responsive\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/site/promo3.jpg"), "html", null, true);
        echo "\" alt=\"product\"> <span
                                                class=\"ProductMenuCaption\"> <i class=\"fa fa-caret-right\"> </i> SHOES </span>
                                    </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->


                <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->

            


            </ul>


            </ul>


            <!--/.navbar-nav hidden-xs-->
        </div>
        <!--/.nav-collapse -->

    </div>
    <!--/.container -->

    <!--/.search-full-->

</div> <br><br>";
        
        $__internal_b1fed2d9c80db1f04c042e98a6ec19029d9a25193babcecd6487261df30fa924->leave($__internal_b1fed2d9c80db1f04c042e98a6ec19029d9a25193babcecd6487261df30fa924_prof);

        
        $__internal_971aff1206b2780b1b8914c7d5f9f7512cf8304bb52979e7624c657e107f48f1->leave($__internal_971aff1206b2780b1b8914c7d5f9f7512cf8304bb52979e7624c657e107f48f1_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:eshop:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 181,  269 => 175,  260 => 169,  237 => 149,  233 => 148,  229 => 147,  225 => 146,  220 => 144,  198 => 127,  171 => 103,  144 => 78,  133 => 70,  129 => 69,  109 => 51,  94 => 39,  91 => 38,  82 => 33,  80 => 32,  73 => 28,  69 => 27,  65 => 26,  60 => 24,  57 => 23,  51 => 21,  49 => 20,  31 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"navbar navbar-tshop navbar-fixed-top megamenu\" role=\"navigation\">
    <div class=\"navbar-top\">
        {% if is_granted('ROLE_USER') %}
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-sm-6 col-xs-6 col-md-6\">
                        <div class=\"pull-left \">
                            <ul class=\"userMenu \">
                                <li><a href=\"#\"> <span class=\"hidden-xs\">HELP</span><i class=\"glyphicon glyphicon-info-sign hide visible-xs \"></i> </a></li>
                                <li class=\"phone-number\"><a href=\"callto:+216 41747037\"> <span> <i class=\"glyphicon glyphicon-phone-alt \"></i></span> <span class=\"hidden-xs\" style=\"margin-left:5px\"> +216 41747037 </span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding\">
                        <div class=\"pull-right\">
                            <ul class=\"userMenu\">


                              {% if is_granted('ROLE_ADMIN') %}
                                   <li><a href=\"{{ path('mainaddminn') }}\"><span class=\"hidden-xs\">espace Administrateur</span> <i class=\"glyphicon glyphicon-user hide visible-xs \"></i></a></li>
                                   {% endif %}
                               
                        <li class=\"dropdown hasUserMenu\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"> <i class=\"glyphicon glyphicon-log-in hide visible-xs \"></i> {{ app.user.username}} <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path('fos_user_profile_edit') }}\"></i> Modifier Profil</a></li>
                                        <li><a href=\"{{ path('fos_user_profile_show') }}\"><i class=\"fa fa fa-cog\"></i> Profile</a></li>
                                        <li><a href=\"{{ path('user_wishlist') }}\" title=\"My wishlists\">
                                                <i class=\"fa fa-heart\"></i>
                                                Ma wishlist
                                            </a></li>
                                              {% if app.user.statutcoupon == 1  %}
                                        <li><a href=\"{{ path('coupon_index') }}\" title=\"Mes Coupons\">
                                                <i class=\"fa fa-fw fa-clock-o\"></i>
                                                Mes Coupons
                                            </a></li>
                                            {% endif %}
                                        <li class=\"divider\"></li>
                                        <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa  fa-sign-out\"></i> Déconnexion</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        {% else %}
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-sm-6 col-xs-6 col-md-6\">
                        <div class=\"pull-left \">
                            <ul class=\"userMenu \">
                                <li><a href=\"#\"> <span class=\"hidden-xs\">HELP</span><i
                                                class=\"glyphicon glyphicon-info-sign hide visible-xs \"></i> </a></li>
                                <li class=\"phone-number\"><a href=\"callto:+216 41747037\"> <span> <i
                                                    class=\"glyphicon glyphicon-phone-alt \"></i></span> <span class=\"hidden-xs\"
                                                                                                             style=\"margin-left:5px\"> +216 41747037</span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding\">
                        <div class=\"pull-right\">
                            <ul class=\"userMenu\">

                                <li><a href=\"{{ path('fos_user_security_login') }}\" > <span class=\"hidden-xs\">Se Connecter</span>
                                <li><a href=\"{{ path('fos_user_registration_register') }}\" > <span class=\"hidden-xs\">Inscription</span>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
    <!--/.navbar-top-->




















    <div class=\"container\">
    
   <div class=\"nav navbar-nav navbar-right hidden-xs\">
                <div class=\"dropdown  cartMenu \"><a href=\"{{path('my_cart')}}\" class=\"dropdown-toggle\" > <i
                        class=\"fa fa-shopping-cart\"> </i> <span class=\"cartRespons\"> Mon Panier </span> </a>

          
                    <!--/.dropdown-menu-->
                </div>
                <!--/.cartMenu-->

           
                <!--/.search-box -->
            </div>






        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span
                        class=\"sr-only\"> Toggle navigation </span> <span class=\"icon-bar\"> </span> <span
                        class=\"icon-bar\"> </span> <span class=\"icon-bar\"> </span></button>
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-cart\"><i
                        class=\"fa fa-shopping-cart colorWhite\"> </i> <span
                        class=\"cartRespons colorWhite\"> Cart (\$210.00) </span></button>
            <a class=\"navbar-brand \" href=\"{{path('main_homepage')}}\"> <img src=\"{{asset('bundles/eshop/images/logo.png')}}\" alt=\"TSHOP\"> </a>

            <!-- this part for mobile -->

        </div>

        <!-- this part is duplicate from cartMenu  keep it for mobile -->
        <div class=\"navbar-cart  collapse\">
            <div class=\"cartMenu  col-lg-4 col-xs-12 col-md-4 \">

            </div>
            <!--/.cartMenu-->
        </div>
        <!--/.navbar-cart-->

        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"\"><a href=\"{{ path('user_index') }}\"> Les membres
                    </a></li>
                <li class=\"\"><a href=\"{{ path('venteflash_list') }}\"><i class=\"fa fa-fw fa-clock-o\"></i> les ventes flash </a></li>
                <li class=\"\"><a href=\"{{ path('product_index') }}\"><i class=\"fa fa-fw fa-caret-square-o-down\"></i> les  produits </a></li>
                <li class=\"\"><a href=\"{{ path('coupon_list') }}\"><i class=\"fa fa-fw fa-sticky-note\"></i> les coupons </a></li>
                <li class=\"\"><a href=\"{{ path('Magasin_List') }}\"><i class=\"fa fa-fw fa-home\"></i> les magazins </a></li>



                <li class=\"dropdown megamenu-fullwidth\"><a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"> New
                        Products <b class=\"caret\"> </b> </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"megamenu-content \">
                            <ul class=\"col-lg-3  col-sm-3 col-md-3 unstyled noMarginLeft newCollectionUl\">
                                <li class=\"no-border\">
                                    <p class=\"promo-1\"><strong> NEW COLLECTION </strong></p>
                                </li>
                                <li><a href=\"category.html\"> ALL NEW PRODUCTS </a></li>
                                <li><a href=\"category.html\"> NEW TOPS </a></li>
                                <li><a href=\"category.html\"> NEW SHOES </a></li>
                                <li><a href=\"category.html\"> NEW TSHIRT </a></li>
                                <li><a href=\"category.html\"> NEW TSHOP </a></li>
                            </ul>
                            <ul class=\"col-lg-3  col-sm-3 col-md-3  col-xs-4\">
                                <li><a class=\"newProductMenuBlock\" href=\"product-details.html\"> <img
                                                class=\"img-responsive\" src=\"{{asset('bundles/eshop/images/site/promo1.jpg')}}\" alt=\"product\"> <span
                                                class=\"ProductMenuCaption\"> <i class=\"fa fa-caret-right\"> </i> JEANS </span>
                                    </a></li>
                            </ul>
                            <ul class=\"col-lg-3  col-sm-3 col-md-3 col-xs-4\">
                                <li><a class=\"newProductMenuBlock\" href=\"product-details.html\"> <img
                                                class=\"img-responsive\" src=\"{{asset('bundles/eshop/images/site/promo2.jpg')}}\" alt=\"product\"> <span
                                                class=\"ProductMenuCaption\"> <i
                                                    class=\"fa fa-caret-right\"> </i> PARTY DRESS </span> </a></li>
                            </ul>
                            <ul class=\"col-lg-3  col-sm-3 col-md-3 col-xs-4\">
                                <li><a class=\"newProductMenuBlock\" href=\"product-details.html\"> <img
                                                class=\"img-responsive\" src=\"{{asset('bundles/eshop/images/site/promo3.jpg')}}\" alt=\"product\"> <span
                                                class=\"ProductMenuCaption\"> <i class=\"fa fa-caret-right\"> </i> SHOES </span>
                                    </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->


                <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->

            


            </ul>


            </ul>


            <!--/.navbar-nav hidden-xs-->
        </div>
        <!--/.nav-collapse -->

    </div>
    <!--/.container -->

    <!--/.search-full-->

</div> <br><br>", "MainBundle:eshop:header.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\src\\MainBundle/Resources/views/eshop/header.html.twig");
    }
}
