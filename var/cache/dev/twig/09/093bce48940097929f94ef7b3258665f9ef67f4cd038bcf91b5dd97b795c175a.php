<?php

/* venteflash/list.html.twig */
class __TwigTemplate_578ae80a625a84ebe5f1b53cff246bc6f42810b520e48ee0780c131f9f86b549 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "venteflash/list.html.twig", 2);
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
        $__internal_328fb3803004e1ab031039b9109ddc41300ebda828bb833ee04b9b035225d892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_328fb3803004e1ab031039b9109ddc41300ebda828bb833ee04b9b035225d892->enter($__internal_328fb3803004e1ab031039b9109ddc41300ebda828bb833ee04b9b035225d892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venteflash/list.html.twig"));

        $__internal_4f120929a390ad92ac421d92a9cbf531b97c9c8d423fcd35b99586fee4fc3242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f120929a390ad92ac421d92a9cbf531b97c9c8d423fcd35b99586fee4fc3242->enter($__internal_4f120929a390ad92ac421d92a9cbf531b97c9c8d423fcd35b99586fee4fc3242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venteflash/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_328fb3803004e1ab031039b9109ddc41300ebda828bb833ee04b9b035225d892->leave($__internal_328fb3803004e1ab031039b9109ddc41300ebda828bb833ee04b9b035225d892_prof);

        
        $__internal_4f120929a390ad92ac421d92a9cbf531b97c9c8d423fcd35b99586fee4fc3242->leave($__internal_4f120929a390ad92ac421d92a9cbf531b97c9c8d423fcd35b99586fee4fc3242_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d4b4c33a656cd03db2f4e63ccc82050a7e59b816f3e515bc953e6f01a6599fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b4c33a656cd03db2f4e63ccc82050a7e59b816f3e515bc953e6f01a6599fe1->enter($__internal_d4b4c33a656cd03db2f4e63ccc82050a7e59b816f3e515bc953e6f01a6599fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_221875e43694db7db80384e8a244cc772184547ca401582883aa6d3014dfcfff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221875e43694db7db80384e8a244cc772184547ca401582883aa6d3014dfcfff->enter($__internal_221875e43694db7db80384e8a244cc772184547ca401582883aa6d3014dfcfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h2 xmlns=\"http://www.w3.org/1999/html\"> <i class=\" glyphicon glyphicon-flash\"></i> les ventes flashes ouvertes</h2>
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"myCarousel\" class=\"carousel  slide\">
                <!-- Dot Indicators -->

                <!-- Items -->
                <div class=\"carousel-inner\">
                    <div class=\"active item\">  <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/banner.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"></div>
                    <div class=\"item\">  <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/banner.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"></div>
                </div>
                <!-- Navigation -->

            </div>
        </div>
    </div>
 <br>
    <br>

    <div class=\"row featuredPostContainer \">
        <div class=\"featuredImageLook3\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["venteFlashes"]) ? $context["venteFlashes"] : $this->getContext($context, "venteFlashes")));
        foreach ($context['_seq'] as $context["_key"] => $context["venteFlash"]) {
            // line 26
            echo "                <div class=\"col-md-4 col-sm-6 col-xs-6 col-xs-min-12\">
                    <div class=\"inner\">
                        <div class=\"box-content-overly box-content-overly-white\">
                            <div class=\"box-text-table\">
                                <div class=\"box-text-cell \">
                                    <div class=\"box-text-cell-inner dark\">
                                        <h1 class=\"uppercase\"><h2>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["venteFlash"], "nom", array())), "html", null, true);
            echo "</h2></h1>
                                        <hr class=\"submini\">

                                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("venteflash_show", array("id" => $this->getAttribute($context["venteFlash"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-inverse\">Acceder Maintenant</a></div>

                                </div>
                            </div>
                        </div>

                    <!--/.box-content-overly -->
                    <div class=\"img-title\"><h1>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["venteFlash"], "nom", array())), "html", null, true);
            echo "</h1> </div>
                    <a class=\"img-block\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("venteflash_show", array("id" => $this->getAttribute($context["venteFlash"], "id", array()))), "html", null, true);
            echo "\" > <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute($context["venteFlash"], "imageName", array())), "html", null, true);
            echo "\" }}  alt=\"img\"  height=\"400\" width=\"600\"></a>
                        <div class=container\"><h1> <div id=";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["venteFlash"], "id", array())), "html", null, true);
            echo " >  </div></h1></div>
                    </div>
                    </div>

                    <script>




                    window.setInterval(countDown, 1000);

                    function countDown() {
                        var now = new Date();
                        var future = new Date(\"";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["venteFlash"], "finish", array())), "html", null, true);
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
                        var mySpan = document.getElementById(\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["venteFlash"], "id", array())), "html", null, true);
            echo "\");
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
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venteFlash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "        </div></div></div>
    </div>

";
        
        $__internal_221875e43694db7db80384e8a244cc772184547ca401582883aa6d3014dfcfff->leave($__internal_221875e43694db7db80384e8a244cc772184547ca401582883aa6d3014dfcfff_prof);

        
        $__internal_d4b4c33a656cd03db2f4e63ccc82050a7e59b816f3e515bc953e6f01a6599fe1->leave($__internal_d4b4c33a656cd03db2f4e63ccc82050a7e59b816f3e515bc953e6f01a6599fe1_prof);

    }

    public function getTemplateName()
    {
        return "venteflash/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 105,  165 => 87,  132 => 57,  116 => 44,  110 => 43,  106 => 42,  96 => 35,  90 => 32,  82 => 26,  78 => 25,  63 => 13,  59 => 12,  49 => 4,  40 => 3,  11 => 2,);
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
{% extends 'MainBundle:eshop:main.html.twig' %}
{% block content %}
    <h2 xmlns=\"http://www.w3.org/1999/html\"> <i class=\" glyphicon glyphicon-flash\"></i> les ventes flashes ouvertes</h2>
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"myCarousel\" class=\"carousel  slide\">
                <!-- Dot Indicators -->

                <!-- Items -->
                <div class=\"carousel-inner\">
                    <div class=\"active item\">  <img src=\"{{asset('bundles/images/banner.jpg')}}\" class=\"img-responsive\"></div>
                    <div class=\"item\">  <img src=\"{{asset('bundles/images/banner.jpg')}}\" class=\"img-responsive\"></div>
                </div>
                <!-- Navigation -->

            </div>
        </div>
    </div>
 <br>
    <br>

    <div class=\"row featuredPostContainer \">
        <div class=\"featuredImageLook3\">
            {% for venteFlash in venteFlashes %}
                <div class=\"col-md-4 col-sm-6 col-xs-6 col-xs-min-12\">
                    <div class=\"inner\">
                        <div class=\"box-content-overly box-content-overly-white\">
                            <div class=\"box-text-table\">
                                <div class=\"box-text-cell \">
                                    <div class=\"box-text-cell-inner dark\">
                                        <h1 class=\"uppercase\"><h2>{{ venteFlash.nom  |trans }}</h2></h1>
                                        <hr class=\"submini\">

                                        <a href=\"{{ path(\"venteflash_show\",{\"id\":venteFlash.id}) }}\" class=\"btn btn-inverse\">Acceder Maintenant</a></div>

                                </div>
                            </div>
                        </div>

                    <!--/.box-content-overly -->
                    <div class=\"img-title\"><h1>{{ venteFlash.nom  |trans }}</h1> </div>
                    <a class=\"img-block\" href=\"{{ path(\"venteflash_show\",{\"id\":venteFlash.id}) }}\" > <img class=\"img-responsive\" src=\"{{ asset('bundles/images/')~ venteFlash.imageName }}\" }}  alt=\"img\"  height=\"400\" width=\"600\"></a>
                        <div class=container\"><h1> <div id={{ venteFlash.id  |trans }} >  </div></h1></div>
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
                        var mySpan = document.getElementById(\"{{ venteFlash.id | trans }}\");
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


            {% endfor %}
        </div></div></div>
    </div>

{% endblock %}


", "venteflash/list.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\venteflash\\list.html.twig");
    }
}
