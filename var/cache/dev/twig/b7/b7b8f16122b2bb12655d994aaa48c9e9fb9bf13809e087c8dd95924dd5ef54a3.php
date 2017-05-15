<?php

/* :Magasin:show.html.twig */
class __TwigTemplate_626c6c1f32d5a8c63e903c9c6bb4b6334581de85c49b18afd51d9d46603bb3c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", ":Magasin:show.html.twig", 1);
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
        $__internal_da1d94f69a726136bfc999b58fbab31be9dd905f447c944116d0bc9a92786efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1d94f69a726136bfc999b58fbab31be9dd905f447c944116d0bc9a92786efe->enter($__internal_da1d94f69a726136bfc999b58fbab31be9dd905f447c944116d0bc9a92786efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Magasin:show.html.twig"));

        $__internal_3a1322619de21d2d118c809c68268cfc1c3dae78fc70339c7125066889f25b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1322619de21d2d118c809c68268cfc1c3dae78fc70339c7125066889f25b2a->enter($__internal_3a1322619de21d2d118c809c68268cfc1c3dae78fc70339c7125066889f25b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Magasin:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da1d94f69a726136bfc999b58fbab31be9dd905f447c944116d0bc9a92786efe->leave($__internal_da1d94f69a726136bfc999b58fbab31be9dd905f447c944116d0bc9a92786efe_prof);

        
        $__internal_3a1322619de21d2d118c809c68268cfc1c3dae78fc70339c7125066889f25b2a->leave($__internal_3a1322619de21d2d118c809c68268cfc1c3dae78fc70339c7125066889f25b2a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_cc4be5d89a363ceaeded703690b29fb241bafc3a8dcabceff28521d4b6630cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc4be5d89a363ceaeded703690b29fb241bafc3a8dcabceff28521d4b6630cff->enter($__internal_cc4be5d89a363ceaeded703690b29fb241bafc3a8dcabceff28521d4b6630cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9ef20ea953c0b125f20e7c95141e2eee60a55f7d6f50a51c9623e4f0bfece5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef20ea953c0b125f20e7c95141e2eee60a55f7d6f50a51c9623e4f0bfece5f9->enter($__internal_9ef20ea953c0b125f20e7c95141e2eee60a55f7d6f50a51c9623e4f0bfece5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBbOYJWkSIBpYfHPZdL4aNspSxBFTlYmTM\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>



    <script type=\"text/javascript\">
        \$(function () {
            var mapOptions = {
                center: new google.maps.LatLng(";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magasin"]) ? $context["magasin"] : $this->getContext($context, "magasin")), "altitude", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magasin"]) ? $context["magasin"] : $this->getContext($context, "magasin")), "longitude", array()), "html", null, true);
        echo "),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var infoWindow = new google.maps.InfoWindow();
            var latlngbounds = new google.maps.LatLngBounds();
            var map = new google.maps.Map(document.getElementById(\"dvMap\"), mapOptions);
            google.maps.event.addListener(map,
                    'click',
                    function (e) {

                        // alert(\"Latitude: \" + e.latLng.lat() + \"\\r\\nLongitude: \" + e.latLng.lng());
                        document.getElementById(\"lat\").value = e.latLng.lat();
                        document.getElementById(\"long\").value = e.latLng.lng();
                        //document.getElementById(\"p2\").innerHTML = e.latLng.lng();

                    });
            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                position: { lat: ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magasin"]) ? $context["magasin"] : $this->getContext($context, "magasin")), "altitude", array()), "html", null, true);
        echo ", lng: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magasin"]) ? $context["magasin"] : $this->getContext($context, "magasin")), "longitude", array()), "html", null, true);
        echo "}
            });
            marker.addListener('click', toggleBounce);
            //marker.setPosition(tx);
            google.maps.event.addListener(marker,
                    'dragend',
                    function () {
                        var lat = marker.getPosition().lat();
                        var lng = marker.getPosition().lng();
                        /*marke
                         \$('#lat').val(lat);
                         \$('#lng').val(lng);*/
                        /*\$.ajax({
                         url: \"http://maps.googleapis.com/maps/api/geocode/json?latlng=\" + lat + \",\" + lng + \"&sensor=true\",
                         success: function (res) {
                         console.log(res.results[0].formatted_address);
                         }
                         })*/
                        var latlng = new google.maps.LatLng(lat, lng);
                        var geocoder = geocoder = new google.maps.Geocoder();
                        geocoder.geocode({ 'latLng': latlng },
                                function (results, status) {

                                    if (status == google.maps.GeocoderStatus.OK) {
                                        if (results[1]) {
                                            //alert(\"Location: \" + results[1].formatted_address);
                                            \$(document).find(\"#cityAdresse\").val(results[1].formatted_address);
                                            \$(\"#cityAdresse\").val(results[1].formatted_address);
                                            \$(\"#laltitude\").val(results[1].geometry.location.lat());
                                            \$(\"#longitude\").val(results[1].geometry.location.lng());
                                        }
                                    }
                                });

                    });
            google.maps.event.addListener(marker,
                    'tx',
                    function () {
                        var tx = marker.setPosition().tx();
                        \$('#tx').val(tx);

                    });


            function toggleBounce() {
                if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            }

        });


    </script>
    <div class=\"parallax-section parallax-fx parallax-image-aboutus parallaxOffset no-padding\">
        <div class=\"w100 \">
            <div class=\"container\">

                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                        <div class=\"parallax-content clearfix animated \">
                            <h1 class=\"x2large\">
                                ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magasin"]) ? $context["magasin"] : $this->getContext($context, "magasin")), "name", array()), "html", null, true);
        echo "
                            </h1>
                            <h5 class=\"parallaxSubtitle\">
                                Propirété de <strong>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magasin"]) ? $context["magasin"] : $this->getContext($context, "magasin")), "owner", array()), "html", null, true);
        echo "</strong>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.parallax -->

    <div class=\"container main-container \">

        <div class=\"row innerPage\">
            <div class=\"col-lg-12 col-md-12 col-sm-12\">
                <div class=\"row userInfo\">
                    <div class=\"col-xs-12 col-sm-12\">
                        <h1 class=\"title-big text-center section-title-style2\">
            <span>
              About us
            </span>
                        </h1>

                        <p class=\"lead text-center\">
                            ";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magasin"]) ? $context["magasin"] : $this->getContext($context, "magasin")), "description", array()), "html", null, true);
        echo "
                        </p>


                        <hr class=\"hr hr30\">
                        <div class=\"row animated\">
                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-sm-6\">

                                <h3 class=\"block-title-3\">
                                    Facebook Page
                                </h3>

                                <p><center>Facebook Page here</center>

                                </p>


                            </div>

                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-sm-6\">

                                <h3 class=\"block-title-3\">
                                    Adresse
                                </h3>

                                <center>
                                    <div id=\"dvMap\" style=\"width: 90%; height: 300px;\">
                                    </div>
                                    <h5>";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magasin"]) ? $context["magasin"] : $this->getContext($context, "magasin")), "address", array()), "html", null, true);
        echo "</h5>
                                </center>

                            </div>

                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-sm-6\">

                                <h3 class=\"block-title-3\">
                                    Produits en ventes
                                </h3>

                                <a class=\"img-responsive\" href=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Magasin_Details", array("idMagasin" => $this->getAttribute((isset($context["magasin"]) ? $context["magasin"] : $this->getContext($context, "magasin")), "id", array()))), "html", null, true);
        echo "\">
                                    <img style=\"width: 90%; height: 300px;\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/imageproducts/" . $this->getAttribute((isset($context["magasin"]) ? $context["magasin"] : $this->getContext($context, "magasin")), "imageName", array()))), "html", null, true);
        echo "\">   </a>

                            </div>


                        </div>
                        <!--/.row-->

                        <hr>
                    </div>
                </div>
                <!--/row end-->
            </div>
        </div>
        <!--/.innerPage-->
        <div style=\"clear:both\"></div>
    </div>
    <!-- /.main-container -->


    <div class=\"gap\"></div>
    <style>
        .parallax-section {
            /* The image used */
            background-image: url(\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/images/" . $this->getAttribute((isset($context["magasin"]) ? $context["magasin"] : $this->getContext($context, "magasin")), "imageName", array()))), "html", null, true);
        echo "\");

            /* Set a specific height */
            height: 500px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

";
        
        $__internal_9ef20ea953c0b125f20e7c95141e2eee60a55f7d6f50a51c9623e4f0bfece5f9->leave($__internal_9ef20ea953c0b125f20e7c95141e2eee60a55f7d6f50a51c9623e4f0bfece5f9_prof);

        
        $__internal_cc4be5d89a363ceaeded703690b29fb241bafc3a8dcabceff28521d4b6630cff->leave($__internal_cc4be5d89a363ceaeded703690b29fb241bafc3a8dcabceff28521d4b6630cff_prof);

    }

    public function getTemplateName()
    {
        return ":Magasin:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 190,  241 => 166,  237 => 165,  223 => 154,  192 => 126,  166 => 103,  160 => 100,  91 => 36,  64 => 14,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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


    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBbOYJWkSIBpYfHPZdL4aNspSxBFTlYmTM\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/eshop/assets/js/jquery-3.1.1.min.js') }}\"></script>



    <script type=\"text/javascript\">
        \$(function () {
            var mapOptions = {
                center: new google.maps.LatLng({{ magasin.altitude }}, {{ magasin.longitude }}),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var infoWindow = new google.maps.InfoWindow();
            var latlngbounds = new google.maps.LatLngBounds();
            var map = new google.maps.Map(document.getElementById(\"dvMap\"), mapOptions);
            google.maps.event.addListener(map,
                    'click',
                    function (e) {

                        // alert(\"Latitude: \" + e.latLng.lat() + \"\\r\\nLongitude: \" + e.latLng.lng());
                        document.getElementById(\"lat\").value = e.latLng.lat();
                        document.getElementById(\"long\").value = e.latLng.lng();
                        //document.getElementById(\"p2\").innerHTML = e.latLng.lng();

                    });
            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                position: { lat: {{ magasin.altitude }}, lng: {{ magasin.longitude }}}
            });
            marker.addListener('click', toggleBounce);
            //marker.setPosition(tx);
            google.maps.event.addListener(marker,
                    'dragend',
                    function () {
                        var lat = marker.getPosition().lat();
                        var lng = marker.getPosition().lng();
                        /*marke
                         \$('#lat').val(lat);
                         \$('#lng').val(lng);*/
                        /*\$.ajax({
                         url: \"http://maps.googleapis.com/maps/api/geocode/json?latlng=\" + lat + \",\" + lng + \"&sensor=true\",
                         success: function (res) {
                         console.log(res.results[0].formatted_address);
                         }
                         })*/
                        var latlng = new google.maps.LatLng(lat, lng);
                        var geocoder = geocoder = new google.maps.Geocoder();
                        geocoder.geocode({ 'latLng': latlng },
                                function (results, status) {

                                    if (status == google.maps.GeocoderStatus.OK) {
                                        if (results[1]) {
                                            //alert(\"Location: \" + results[1].formatted_address);
                                            \$(document).find(\"#cityAdresse\").val(results[1].formatted_address);
                                            \$(\"#cityAdresse\").val(results[1].formatted_address);
                                            \$(\"#laltitude\").val(results[1].geometry.location.lat());
                                            \$(\"#longitude\").val(results[1].geometry.location.lng());
                                        }
                                    }
                                });

                    });
            google.maps.event.addListener(marker,
                    'tx',
                    function () {
                        var tx = marker.setPosition().tx();
                        \$('#tx').val(tx);

                    });


            function toggleBounce() {
                if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            }

        });


    </script>
    <div class=\"parallax-section parallax-fx parallax-image-aboutus parallaxOffset no-padding\">
        <div class=\"w100 \">
            <div class=\"container\">

                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                        <div class=\"parallax-content clearfix animated \">
                            <h1 class=\"x2large\">
                                {{ magasin.name }}
                            </h1>
                            <h5 class=\"parallaxSubtitle\">
                                Propirété de <strong>{{ magasin.owner }}</strong>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.parallax -->

    <div class=\"container main-container \">

        <div class=\"row innerPage\">
            <div class=\"col-lg-12 col-md-12 col-sm-12\">
                <div class=\"row userInfo\">
                    <div class=\"col-xs-12 col-sm-12\">
                        <h1 class=\"title-big text-center section-title-style2\">
            <span>
              About us
            </span>
                        </h1>

                        <p class=\"lead text-center\">
                            {{ magasin.description }}
                        </p>


                        <hr class=\"hr hr30\">
                        <div class=\"row animated\">
                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-sm-6\">

                                <h3 class=\"block-title-3\">
                                    Facebook Page
                                </h3>

                                <p><center>Facebook Page here</center>

                                </p>


                            </div>

                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-sm-6\">

                                <h3 class=\"block-title-3\">
                                    Adresse
                                </h3>

                                <center>
                                    <div id=\"dvMap\" style=\"width: 90%; height: 300px;\">
                                    </div>
                                    <h5>{{ magasin.address }}</h5>
                                </center>

                            </div>

                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-sm-6\">

                                <h3 class=\"block-title-3\">
                                    Produits en ventes
                                </h3>

                                <a class=\"img-responsive\" href=\"{{ path(\"Magasin_Details\",{'idMagasin':magasin.id}) }}\">
                                    <img style=\"width: 90%; height: 300px;\" src=\"{{ asset('bundles/imageproducts/'~ magasin.imageName) }}\">   </a>

                            </div>


                        </div>
                        <!--/.row-->

                        <hr>
                    </div>
                </div>
                <!--/row end-->
            </div>
        </div>
        <!--/.innerPage-->
        <div style=\"clear:both\"></div>
    </div>
    <!-- /.main-container -->


    <div class=\"gap\"></div>
    <style>
        .parallax-section {
            /* The image used */
            background-image: url(\"{{ asset('bundles/images/'~ magasin.imageName) }}\");

            /* Set a specific height */
            height: 500px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

{% endblock %}
", ":Magasin:show.html.twig", "C:\\wamp64\\www\\test\\app/Resources\\views/Magasin/show.html.twig");
    }
}
