<?php

/* coupon/show.html.twig */
class __TwigTemplate_afcd8312e10625406671efce275c34a50403decbaf28197ca692e35f0101f813 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "coupon/show.html.twig", 1);
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
        $__internal_b6416db141a9943308a4b599575300b78081f9d6a82b96ffca31409a776e205e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6416db141a9943308a4b599575300b78081f9d6a82b96ffca31409a776e205e->enter($__internal_b6416db141a9943308a4b599575300b78081f9d6a82b96ffca31409a776e205e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coupon/show.html.twig"));

        $__internal_9bdaf9ea8d3e38abb98d18a9eee34a46783580802cf8ba87c3e603e805e400cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bdaf9ea8d3e38abb98d18a9eee34a46783580802cf8ba87c3e603e805e400cc->enter($__internal_9bdaf9ea8d3e38abb98d18a9eee34a46783580802cf8ba87c3e603e805e400cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coupon/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6416db141a9943308a4b599575300b78081f9d6a82b96ffca31409a776e205e->leave($__internal_b6416db141a9943308a4b599575300b78081f9d6a82b96ffca31409a776e205e_prof);

        
        $__internal_9bdaf9ea8d3e38abb98d18a9eee34a46783580802cf8ba87c3e603e805e400cc->leave($__internal_9bdaf9ea8d3e38abb98d18a9eee34a46783580802cf8ba87c3e603e805e400cc_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a4f6d883b978b86609b57d6653105c78c00633edfa0168b192b2951068d24b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f6d883b978b86609b57d6653105c78c00633edfa0168b192b2951068d24b7d->enter($__internal_a4f6d883b978b86609b57d6653105c78c00633edfa0168b192b2951068d24b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_db5f3aeb8d452a0ed893617f3458105f067d039a200370ec8b7a9688c0930802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5f3aeb8d452a0ed893617f3458105f067d039a200370ec8b7a9688c0930802->enter($__internal_db5f3aeb8d452a0ed893617f3458105f067d039a200370ec8b7a9688c0930802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container main-container headerOffset\">
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
    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7\">
 <ul class=\"pager\">
            <h1 class=\"section-title-inner\"><span><i></i> Liste des Coupons </span></h1>
             
                      
                        <li class=\"next pull-right\"><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_index");
        echo "\"> ← Retour a la liste</a></li>
                    </ul>
<div class=\"col-lg-12 clearfix\">
                    
                </div>
            <div class=\"row userInfo\">
                
            <div class=\"box\">
            <div class=\"box-header\">
            </div>
<div class=\"row transitionfx\">

        <!-- left column -->
        <div class=\"col-lg-6 col-md-6 col-sm-6\">
            <!-- product Image and Zoom -->


            <div class=\"main-image sp-wrap col-lg-12 no-padding style2 style2look2\" style=\"display: inline-block;\">


                    <div class=\"sp-large\"><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : $this->getContext($context, "coupon")), "imageName", array())), "html", null, true);
        echo "\" class=\"\"><img src=\"";
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : $this->getContext($context, "coupon")), "imageName", array())), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"img\"></a></div></div>
        </div>
        <!--/ left column end -->


        <!-- right column -->
        <div class=\"col-lg-6 col-md-6 col-sm-5\">

            <h1 class=\"product-title\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : $this->getContext($context, "coupon")), "titre", array()), "html", null, true);
        echo "</h1>

                <div class=\"details-description\">
               <h4>Description : </h4>     <p>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : $this->getContext($context, "coupon")), "Description", array()), "html", null, true);
        echo " </p>
                </div>

                
                <!--/.color-details-->

                <div class=\"productFilter productFilterLook2\">
                    <div class=\"row\">
                       
                          <h4>Date Début : </h4> 
";
        // line 60
        if ($this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : $this->getContext($context, "coupon")), "datedeb", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : $this->getContext($context, "coupon")), "datedeb", array()), "Y-m-d"), "html", null, true);
        }
        echo "           
           
                            <h4>Date Expiration : </h4> 
                             ";
        // line 63
        if ($this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : $this->getContext($context, "coupon")), "datedeb", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : $this->getContext($context, "coupon")), "datefin", array()), "Y-m-d"), "html", null, true);
        }
        // line 64
        echo "               <h4>Quantité Restante : </h4>     <p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : $this->getContext($context, "coupon")), "Qte", array()), "html", null, true);
        echo " </p>
             <h4>Taux de Réduction : </h4> <h2> <span class=\"price-sales\">";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : $this->getContext($context, "coupon")), "tauxreduction", array()), "html", null, true);
        echo "dt</span></h2>
                    </div>
                </div>
                <!-- productFilter -->

                <div class=\"cart-actions\">
                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                            ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" class=\"button btn-block btn-cart cart first\" onclick=\"return confirm('Voulez vous vraiment supprimer ce contenu ?');\" value=\"Supprimer\">
            ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                            
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <a  href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_edit", array("id" => $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : $this->getContext($context, "coupon")), "Id", array()))), "html", null, true);
        echo "\" class=\"link-wishlist wishlist btn-block \">Modifier</a></div>

                    <div style=\"clear:both\"></div>
                    ";
        // line 81
        if (($this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : $this->getContext($context, "coupon")), "qte", array()) > 0)) {
            echo "<h3 class=\"incaps\"><i class=\"fa fa fa-check-circle-o color-in\"></i> In stock</h3>
                    ";
        } else {
            // line 83
            echo "                         <h3  class=\"incaps\"><i class=\"fa fa-minus-circle color-out\"></i> Out of stock
                    </h3>
                    ";
        }
        // line 86
        echo "                    

                   

                </div>
                <!--/.cart-actions-->


               
        <!--/ right column end -->

    </div>
   
                
              

 

   
     
            </div>
            <!--/row end-->

        </div>
       
    </div></div>
    <!--/row--></div></div></div>

";
        
        $__internal_db5f3aeb8d452a0ed893617f3458105f067d039a200370ec8b7a9688c0930802->leave($__internal_db5f3aeb8d452a0ed893617f3458105f067d039a200370ec8b7a9688c0930802_prof);

        
        $__internal_a4f6d883b978b86609b57d6653105c78c00633edfa0168b192b2951068d24b7d->leave($__internal_a4f6d883b978b86609b57d6653105c78c00633edfa0168b192b2951068d24b7d_prof);

    }

    public function getTemplateName()
    {
        return "coupon/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 86,  174 => 83,  169 => 81,  163 => 78,  156 => 74,  151 => 72,  141 => 65,  136 => 64,  132 => 63,  124 => 60,  111 => 50,  105 => 47,  92 => 39,  69 => 19,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7\">
 <ul class=\"pager\">
            <h1 class=\"section-title-inner\"><span><i></i> Liste des Coupons </span></h1>
             
                      
                        <li class=\"next pull-right\"><a href=\"{{ path('coupon_index') }}\"> ← Retour a la liste</a></li>
                    </ul>
<div class=\"col-lg-12 clearfix\">
                    
                </div>
            <div class=\"row userInfo\">
                
            <div class=\"box\">
            <div class=\"box-header\">
            </div>
<div class=\"row transitionfx\">

        <!-- left column -->
        <div class=\"col-lg-6 col-md-6 col-sm-6\">
            <!-- product Image and Zoom -->


            <div class=\"main-image sp-wrap col-lg-12 no-padding style2 style2look2\" style=\"display: inline-block;\">


                    <div class=\"sp-large\"><a href=\"{{ asset('bundles/images/')~ coupon.imageName }}\" class=\"\"><img src=\"{{ asset('bundles/images/')~ coupon.imageName }}\" class=\"img-responsive\" alt=\"img\"></a></div></div>
        </div>
        <!--/ left column end -->


        <!-- right column -->
        <div class=\"col-lg-6 col-md-6 col-sm-5\">

            <h1 class=\"product-title\">{{ coupon.titre }}</h1>

                <div class=\"details-description\">
               <h4>Description : </h4>     <p>{{ coupon.Description }} </p>
                </div>

                
                <!--/.color-details-->

                <div class=\"productFilter productFilterLook2\">
                    <div class=\"row\">
                       
                          <h4>Date Début : </h4> 
{% if coupon.datedeb %}{{ coupon.datedeb|date('Y-m-d') }}{% endif %}           
           
                            <h4>Date Expiration : </h4> 
                             {% if coupon.datedeb %}{{ coupon.datefin|date('Y-m-d') }}{% endif %}
               <h4>Quantité Restante : </h4>     <p>{{ coupon.Qte }} </p>
             <h4>Taux de Réduction : </h4> <h2> <span class=\"price-sales\">{{ coupon.tauxreduction }}dt</span></h2>
                    </div>
                </div>
                <!-- productFilter -->

                <div class=\"cart-actions\">
                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                            {{ form_start(delete_form) }}
                <input type=\"submit\" class=\"button btn-block btn-cart cart first\" onclick=\"return confirm('Voulez vous vraiment supprimer ce contenu ?');\" value=\"Supprimer\">
            {{ form_end(delete_form) }}
                            
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <a  href=\"{{ path('coupon_edit', { 'id': coupon.Id }) }}\" class=\"link-wishlist wishlist btn-block \">Modifier</a></div>

                    <div style=\"clear:both\"></div>
                    {% if coupon.qte > 0 %}<h3 class=\"incaps\"><i class=\"fa fa fa-check-circle-o color-in\"></i> In stock</h3>
                    {% else %}
                         <h3  class=\"incaps\"><i class=\"fa fa-minus-circle color-out\"></i> Out of stock
                    </h3>
                    {% endif %}
                    

                   

                </div>
                <!--/.cart-actions-->


               
        <!--/ right column end -->

    </div>
   
                
              

 

   
     
            </div>
            <!--/row end-->

        </div>
       
    </div></div>
    <!--/row--></div></div></div>

{% endblock %}
", "coupon/show.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\app\\Resources\\views\\coupon\\show.html.twig");
    }
}
