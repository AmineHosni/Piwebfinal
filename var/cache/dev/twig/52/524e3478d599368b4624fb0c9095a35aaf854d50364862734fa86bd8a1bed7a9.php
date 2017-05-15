<?php

/* :Magasin:add.html.twig */
class __TwigTemplate_56c762db12152b5056737f3f2acb087f631c52311b7c48ec4f7c0053e04f3d2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", ":Magasin:add.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle:eshop:main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b8d9316ccb138e960024cee30f81ab4562416486533a19764f5a12edba73b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b8d9316ccb138e960024cee30f81ab4562416486533a19764f5a12edba73b92->enter($__internal_1b8d9316ccb138e960024cee30f81ab4562416486533a19764f5a12edba73b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Magasin:add.html.twig"));

        $__internal_93fb3e63bd8026050269f0a3da0a623b2eaf3aa17fda0a88182b4852abceeae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fb3e63bd8026050269f0a3da0a623b2eaf3aa17fda0a88182b4852abceeae9->enter($__internal_93fb3e63bd8026050269f0a3da0a623b2eaf3aa17fda0a88182b4852abceeae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Magasin:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b8d9316ccb138e960024cee30f81ab4562416486533a19764f5a12edba73b92->leave($__internal_1b8d9316ccb138e960024cee30f81ab4562416486533a19764f5a12edba73b92_prof);

        
        $__internal_93fb3e63bd8026050269f0a3da0a623b2eaf3aa17fda0a88182b4852abceeae9->leave($__internal_93fb3e63bd8026050269f0a3da0a623b2eaf3aa17fda0a88182b4852abceeae9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9e55fc2244d67f86a159a5d35ab72018432b6a80d1f6196bed7cfed04ad53f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e55fc2244d67f86a159a5d35ab72018432b6a80d1f6196bed7cfed04ad53f38->enter($__internal_9e55fc2244d67f86a159a5d35ab72018432b6a80d1f6196bed7cfed04ad53f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2886dcc0173942f7ab918cd70e9284ef352910a1ba4462cf813a2fc0d1cfaa57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2886dcc0173942f7ab918cd70e9284ef352910a1ba4462cf813a2fc0d1cfaa57->enter($__internal_2886dcc0173942f7ab918cd70e9284ef352910a1ba4462cf813a2fc0d1cfaa57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "



    <div>
        <center>
            <div id=\"dvMap\" style=\"width: 90%; height: 300px;\">
            </div>
        </center>
        <div class=\"field-input\">

            <label> Adreese </label>
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("id" => "cityAdresse", "attr" => array("class" => "form-control")));
        echo "

        </div>
        <div class=\"field-input\">

            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "altitude", array()), 'widget', array("id" => "laltitude", "attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"field-input\">

            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude", array()), 'widget', array("id" => "longitude", "attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"field-input\">

            <label> Name </label>
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("id" => "longitude", "attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"field-input\">

            <label> Description </label>
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("id" => "description", "attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <input type=\"submit\" value=\"ajouter\" name=\"ajouter\">
    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_2886dcc0173942f7ab918cd70e9284ef352910a1ba4462cf813a2fc0d1cfaa57->leave($__internal_2886dcc0173942f7ab918cd70e9284ef352910a1ba4462cf813a2fc0d1cfaa57_prof);

        
        $__internal_9e55fc2244d67f86a159a5d35ab72018432b6a80d1f6196bed7cfed04ad53f38->leave($__internal_9e55fc2244d67f86a159a5d35ab72018432b6a80d1f6196bed7cfed04ad53f38_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bc40c0a183c4466c1b627520bae927686baaeef3eaf94eca2f3b534a77672d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc40c0a183c4466c1b627520bae927686baaeef3eaf94eca2f3b534a77672d60->enter($__internal_bc40c0a183c4466c1b627520bae927686baaeef3eaf94eca2f3b534a77672d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_61be75e66ce9d011d444785c9c36f207158a453772ae49b46f783c2644bf2319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61be75e66ce9d011d444785c9c36f207158a453772ae49b46f783c2644bf2319->enter($__internal_61be75e66ce9d011d444785c9c36f207158a453772ae49b46f783c2644bf2319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            var mapOptions = {
                center: new google.maps.LatLng(36.8, 10.1),
                zoom: 7,
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
        
        $__internal_61be75e66ce9d011d444785c9c36f207158a453772ae49b46f783c2644bf2319->leave($__internal_61be75e66ce9d011d444785c9c36f207158a453772ae49b46f783c2644bf2319_prof);

        
        $__internal_bc40c0a183c4466c1b627520bae927686baaeef3eaf94eca2f3b534a77672d60->leave($__internal_bc40c0a183c4466c1b627520bae927686baaeef3eaf94eca2f3b534a77672d60_prof);

    }

    public function getTemplateName()
    {
        return ":Magasin:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 44,  117 => 43,  105 => 40,  98 => 36,  89 => 30,  81 => 25,  74 => 21,  66 => 16,  50 => 4,  41 => 3,  11 => 1,);
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
    {{ form_start(form) }}



    <div>
        <center>
            <div id=\"dvMap\" style=\"width: 90%; height: 300px;\">
            </div>
        </center>
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
            {{ form_widget(form.description, {'id' : 'description','attr': {'class': 'form-control' }}) }}
        </div>
    </div>
    <input type=\"submit\" value=\"ajouter\" name=\"ajouter\">
    {{ form_end(form) }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function () {
            var mapOptions = {
                center: new google.maps.LatLng(36.8, 10.1),
                zoom: 7,
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

", ":Magasin:add.html.twig", "C:\\wamp64\\www\\test\\app/Resources\\views/Magasin/add.html.twig");
    }
}
