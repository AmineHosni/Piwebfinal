<?php

/* :Magasin:edit.html.twig */
class __TwigTemplate_e18dc5f2b6b0edaf148013739583e5f03258d6fb053ba05f30b39312fd0f12c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", ":Magasin:edit.html.twig", 1);
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
        $__internal_4fa883d9ff7df3e315195c3a1f6a8318f4a0327c693e471120be4f708a63ed31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa883d9ff7df3e315195c3a1f6a8318f4a0327c693e471120be4f708a63ed31->enter($__internal_4fa883d9ff7df3e315195c3a1f6a8318f4a0327c693e471120be4f708a63ed31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Magasin:edit.html.twig"));

        $__internal_9e3975742f1a883ac1a99d0d7858e72cceb1f737f50c08b6180445759f79903e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3975742f1a883ac1a99d0d7858e72cceb1f737f50c08b6180445759f79903e->enter($__internal_9e3975742f1a883ac1a99d0d7858e72cceb1f737f50c08b6180445759f79903e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Magasin:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fa883d9ff7df3e315195c3a1f6a8318f4a0327c693e471120be4f708a63ed31->leave($__internal_4fa883d9ff7df3e315195c3a1f6a8318f4a0327c693e471120be4f708a63ed31_prof);

        
        $__internal_9e3975742f1a883ac1a99d0d7858e72cceb1f737f50c08b6180445759f79903e->leave($__internal_9e3975742f1a883ac1a99d0d7858e72cceb1f737f50c08b6180445759f79903e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_305f3573d9c5c0f7aa665a304751b034500008daf4d76807abd347ef5cb5c4b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305f3573d9c5c0f7aa665a304751b034500008daf4d76807abd347ef5cb5c4b1->enter($__internal_305f3573d9c5c0f7aa665a304751b034500008daf4d76807abd347ef5cb5c4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9d4cce9384812cdd1e0de1fce570e1e832fe0959603f43d7d147c8c87794a45e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4cce9384812cdd1e0de1fce570e1e832fe0959603f43d7d147c8c87794a45e->enter($__internal_9d4cce9384812cdd1e0de1fce570e1e832fe0959603f43d7d147c8c87794a45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "



    <div>
            <div id=\"dvMap\" style=\"float:right;height:220px;width:45%\"></div>
        <div class=\"field-input\">

            <label> Adreese </label>
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("id" => "cityAdresse", "attr" => array("class" => "form-control")));
        echo "

        </div>
        <div class=\"field-input\">

            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "altitude", array()), 'widget', array("id" => "laltitude", "attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"field-input\">

            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude", array()), 'widget', array("id" => "longitude", "attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"field-input\">

            <label> Name </label>
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("id" => "longitude", "attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"field-input\">

            <label> Description </label>
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("id" => "description", "attr" => array("class" => "form-control")));
        echo "

        </div>
    </div>
    <input type=\"submit\" value=\"modifier\" name=\"ajouter\">
    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCGPlFrudGAAX5_Eh0zar3sbE9vl1UfGjQ&callback=initMap\">
    </script>

    <script type=\"text/javascript\">
        \$(function () {
            var mapOptions = {
                zoom      : 14,
                center    : latlng,
                mapTypeId : google.maps.MapTypeId.ROADMAP
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
                position: { lat: 36.8, lng: 10.1 }
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


";
        
        $__internal_9d4cce9384812cdd1e0de1fce570e1e832fe0959603f43d7d147c8c87794a45e->leave($__internal_9d4cce9384812cdd1e0de1fce570e1e832fe0959603f43d7d147c8c87794a45e_prof);

        
        $__internal_305f3573d9c5c0f7aa665a304751b034500008daf4d76807abd347ef5cb5c4b1->leave($__internal_305f3573d9c5c0f7aa665a304751b034500008daf4d76807abd347ef5cb5c4b1_prof);

    }

    public function getTemplateName()
    {
        return ":Magasin:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 39,  96 => 34,  87 => 28,  79 => 23,  72 => 19,  64 => 14,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

    {{ form_start(form) }}



    <div>
            <div id=\"dvMap\" style=\"float:right;height:220px;width:45%\"></div>
        <div class=\"field-input\">

            <label> Adreese </label>
            {{ form_widget(form.address, { 'id' : 'cityAdresse','attr': {'class': 'form-control'}}) }}

        </div>
        <div class=\"field-input\">

            {{ form_widget(form.altitude, { 'id' : 'laltitude','attr': {'class': 'form-control' }}) }}
        </div>
        <div class=\"field-input\">

            {{ form_widget(form.longitude, {'id' : 'longitude','attr': {'class': 'form-control' }}) }}
        </div>
        <div class=\"field-input\">

            <label> Name </label>
            {{ form_widget(form.name, {'id' : 'longitude','attr': {'class': 'form-control' }}) }}
        </div>

        <div class=\"field-input\">

            <label> Description </label>
            {{ form_widget(form.description, { 'id' : 'description','attr': {'class': 'form-control'}}) }}

        </div>
    </div>
    <input type=\"submit\" value=\"modifier\" name=\"ajouter\">
    {{ form_end(form) }}


    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCGPlFrudGAAX5_Eh0zar3sbE9vl1UfGjQ&callback=initMap\">
    </script>

    <script type=\"text/javascript\">
        \$(function () {
            var mapOptions = {
                zoom      : 14,
                center    : latlng,
                mapTypeId : google.maps.MapTypeId.ROADMAP
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
                position: { lat: 36.8, lng: 10.1 }
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


{% endblock %}

", ":Magasin:edit.html.twig", "C:\\wamp64\\www\\test\\app/Resources\\views/Magasin/edit.html.twig");
    }
}
