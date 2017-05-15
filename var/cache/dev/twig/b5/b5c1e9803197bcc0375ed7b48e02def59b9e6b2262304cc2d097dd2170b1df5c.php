<?php

/* MainBundle:Default:couponlist.html.twig */
class __TwigTemplate_d7af184fd44f1fdf2379c39cf8930179c512b0100e922f0ff5139106979f1b09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "MainBundle:Default:couponlist.html.twig", 1);
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
        $__internal_88db4b191953c6bbe6a344d0fff4c1e5b4266d1494009991395fab5aae07d815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88db4b191953c6bbe6a344d0fff4c1e5b4266d1494009991395fab5aae07d815->enter($__internal_88db4b191953c6bbe6a344d0fff4c1e5b4266d1494009991395fab5aae07d815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:couponlist.html.twig"));

        $__internal_b2c0b1a21938fcf21154af9be7fbf1f59a1822db7db451cfa3309f4e9a4061a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c0b1a21938fcf21154af9be7fbf1f59a1822db7db451cfa3309f4e9a4061a0->enter($__internal_b2c0b1a21938fcf21154af9be7fbf1f59a1822db7db451cfa3309f4e9a4061a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:couponlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88db4b191953c6bbe6a344d0fff4c1e5b4266d1494009991395fab5aae07d815->leave($__internal_88db4b191953c6bbe6a344d0fff4c1e5b4266d1494009991395fab5aae07d815_prof);

        
        $__internal_b2c0b1a21938fcf21154af9be7fbf1f59a1822db7db451cfa3309f4e9a4061a0->leave($__internal_b2c0b1a21938fcf21154af9be7fbf1f59a1822db7db451cfa3309f4e9a4061a0_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_9a9481f579c75c9a7ecc97c62b7d29db0563c102ed0dac87d3949b21621b00c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a9481f579c75c9a7ecc97c62b7d29db0563c102ed0dac87d3949b21621b00c8->enter($__internal_9a9481f579c75c9a7ecc97c62b7d29db0563c102ed0dac87d3949b21621b00c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_38bd6c4b9cf90901828acdebfc92289c0e3245c2ce6dd82c85b22fcbff1561e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38bd6c4b9cf90901828acdebfc92289c0e3245c2ce6dd82c85b22fcbff1561e7->enter($__internal_38bd6c4b9cf90901828acdebfc92289c0e3245c2ce6dd82c85b22fcbff1561e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
<div class=\"container main-container headerOffset\">
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_homepage");
        echo "\">Home</a></li>
                <li><a href=\"#\">Mes Coupons</a></li>
            </ul>
        </div>
    </div>
    



<div class=\"row featuredPostContainer \">
        <div class=\"featuredImageLook3\">
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 20
            echo "  ";
            if (((twig_date_converter($this->env, $this->getAttribute($context["modele"], "datefin", array())) > twig_date_converter($this->env)) && ($this->getAttribute($context["modele"], "qte", array()) > 0))) {
                // line 21
                echo "            <div class=\"col-md-4 col-sm-6 col-xs-6 col-xs-min-12\">
                <div class=\"inner\">
                    <div class=\"box-content-overly box-content-overly-white\">
                        <div class=\"box-text-table\">
                            <div class=\"box-text-cell \">
                                <div class=\"box-text-cell-inner dark\">
                                    <h1 class=\"uppercase\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "titre", array()), "html", null, true);
                echo "</h1>

                                    <p>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "Description", array()), "html", null, true);
                echo "</p>
                                    <hr class=\"submini\">
                                     ";
                // line 31
                if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                    // line 32
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_print", array("id" => $this->getAttribute($context["modele"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-inverse\">Acheter Maintenant</a></div>
                                    ";
                } else {
                    // line 34
                    echo "                                    <a href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                    echo "\" class=\"btn btn-inverse\">Acheter Maintenant</a></div>

                                    ";
                }
                // line 37
                echo "                            </div>
                        </div>
                    </div>
                    <!--/.box-content-overly -->
                    <div class=\"img-title\"> ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "titre", array()), "html", null, true);
                echo "</div>
                    <a class=\"img-block\" href=\"#\"> <img class=\"img-responsive\" src=\"";
                // line 42
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute($context["modele"], "imageName", array())), "html", null, true);
                echo "\" alt=\"img\" style=\"height: 240px;width: 360px;\"></a>
                </div>
            </div>
         ";
            }
            // line 46
            echo "
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "         
           
          
           
        </div>
        <!--/.featuredImageLook3-->
    </div>
    </div>
    ";
        
        $__internal_38bd6c4b9cf90901828acdebfc92289c0e3245c2ce6dd82c85b22fcbff1561e7->leave($__internal_38bd6c4b9cf90901828acdebfc92289c0e3245c2ce6dd82c85b22fcbff1561e7_prof);

        
        $__internal_9a9481f579c75c9a7ecc97c62b7d29db0563c102ed0dac87d3949b21621b00c8->leave($__internal_9a9481f579c75c9a7ecc97c62b7d29db0563c102ed0dac87d3949b21621b00c8_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Default:couponlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 48,  127 => 46,  120 => 42,  116 => 41,  110 => 37,  103 => 34,  97 => 32,  95 => 31,  90 => 29,  85 => 27,  77 => 21,  74 => 20,  70 => 19,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
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

<div class=\"container main-container headerOffset\">
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"{{path('main_homepage')}}\">Home</a></li>
                <li><a href=\"#\">Mes Coupons</a></li>
            </ul>
        </div>
    </div>
    



<div class=\"row featuredPostContainer \">
        <div class=\"featuredImageLook3\">
{% for modele in modeles %}
  {% if date(modele.datefin)> date() and modele.qte > 0  %}
            <div class=\"col-md-4 col-sm-6 col-xs-6 col-xs-min-12\">
                <div class=\"inner\">
                    <div class=\"box-content-overly box-content-overly-white\">
                        <div class=\"box-text-table\">
                            <div class=\"box-text-cell \">
                                <div class=\"box-text-cell-inner dark\">
                                    <h1 class=\"uppercase\">{{modele.titre}}</h1>

                                    <p>{{modele.Description}}</p>
                                    <hr class=\"submini\">
                                     {% if app.user %}
                                    <a href=\"{{path('coupon_print', {'id':modele.id})}}\" class=\"btn btn-inverse\">Acheter Maintenant</a></div>
                                    {% else %}
                                    <a href=\"{{path('fos_user_security_login')}}\" class=\"btn btn-inverse\">Acheter Maintenant</a></div>

                                    {% endif %}
                            </div>
                        </div>
                    </div>
                    <!--/.box-content-overly -->
                    <div class=\"img-title\"> {{modele.titre}}</div>
                    <a class=\"img-block\" href=\"#\"> <img class=\"img-responsive\" src=\"{{ asset('bundles/images/')~ modele.imageName }}\" alt=\"img\" style=\"height: 240px;width: 360px;\"></a>
                </div>
            </div>
         {% endif %}

         {% endfor %}
         
           
          
           
        </div>
        <!--/.featuredImageLook3-->
    </div>
    </div>
    {% endblock %}", "MainBundle:Default:couponlist.html.twig", "C:\\wamp64\\www\\test\\src\\MainBundle/Resources/views/Default/couponlist.html.twig");
    }
}
