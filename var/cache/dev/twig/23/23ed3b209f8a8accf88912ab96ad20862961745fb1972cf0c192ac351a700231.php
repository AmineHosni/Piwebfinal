<?php

/* panier/checkout.html.twig */
class __TwigTemplate_0df364107efa64c9c7756ea6732fadf4054804f5760b54bfc1244815a8179093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "panier/checkout.html.twig", 1);
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
        $__internal_67abc71eb3efcb8ffdbd4c776c32fea668d62e942427691b0c50d6dde5317969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67abc71eb3efcb8ffdbd4c776c32fea668d62e942427691b0c50d6dde5317969->enter($__internal_67abc71eb3efcb8ffdbd4c776c32fea668d62e942427691b0c50d6dde5317969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/checkout.html.twig"));

        $__internal_5aab13a4bc9a332b23911be0fda8a2b7de71070853a82fac4dd1ad8d661674e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aab13a4bc9a332b23911be0fda8a2b7de71070853a82fac4dd1ad8d661674e5->enter($__internal_5aab13a4bc9a332b23911be0fda8a2b7de71070853a82fac4dd1ad8d661674e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/checkout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67abc71eb3efcb8ffdbd4c776c32fea668d62e942427691b0c50d6dde5317969->leave($__internal_67abc71eb3efcb8ffdbd4c776c32fea668d62e942427691b0c50d6dde5317969_prof);

        
        $__internal_5aab13a4bc9a332b23911be0fda8a2b7de71070853a82fac4dd1ad8d661674e5->leave($__internal_5aab13a4bc9a332b23911be0fda8a2b7de71070853a82fac4dd1ad8d661674e5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7a8f9e550eceaee7090bc27f8abbcfb814f229d3b0c07d1202caf9229a6d659f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8f9e550eceaee7090bc27f8abbcfb814f229d3b0c07d1202caf9229a6d659f->enter($__internal_7a8f9e550eceaee7090bc27f8abbcfb814f229d3b0c07d1202caf9229a6d659f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_59f0c6307d4f212079fb6be71bf3696a7346d380393134b91ce47e2a91029512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f0c6307d4f212079fb6be71bf3696a7346d380393134b91ce47e2a91029512->enter($__internal_59f0c6307d4f212079fb6be71bf3696a7346d380393134b91ce47e2a91029512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container main-container headerOffset\">
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"index.html\">Home</a></li>
                <li><a href=\"cart.html\">Cart</a></li>
                <li class=\"active\"> Checkout</li>
            </ul>
        </div>
    </div>
    <!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs\">
            <h1 class=\"section-title-inner\"><span><i class=\"glyphicon glyphicon-shopping-cart\"></i> Checkout</span></h1>
        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs\">
            <h4 class=\"caps\"><a href=\"category.html\"><i class=\"fa fa-chevron-left\"></i> Back to shopping </a></h4>
        </div>
    </div>
    <!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-12\">
            <div class=\"row userInfo\">
                <div class=\"col-xs-12 col-sm-12\">
                    <div class=\"w100 clearfix\">
                        <ul class=\"orderStep orderStepLook2\">
                            <li class=\"active\"><a href=\"checkout-1.html\"> <i class=\"fa fa-map-marker \"></i> <span> address</span>
                            </a></li>
                            <li><a href=\"checkout-2.html\"> <i class=\"fa fa fa-envelope  \"></i>
                                <span> Billing </span></a></li>
                            <li><a href=\"checkout-3.html\"><i class=\"fa fa-truck \"> </i><span>Shipping</span> </a></li>
                            <li><a href=\"checkout-4.html\"><i class=\"fa fa-money  \"> </i><span>Payment</span> </a></li>
                            <li><a href=\"checkout-5.html\"><i class=\"fa fa-check-square \"> </i><span>Order</span></a>
                            </li>
                        </ul>
                        <!--/.orderStep end-->
                    </div>


                    <div class=\"w100 clearfix\">
                        <div class=\"row userInfo\">
                            <div class=\"col-lg-12\">
                                <h2 class=\"block-title-2\"> To add a new address, please fill out the form below. </h2>
                            </div>

                   
                                <div class=\"col-xs-12 col-sm-6\">
                          ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                   
                                    <div class=\"form-group required\">
                                        <label for=\"InputCity\">Gouvernorat <sup>*</sup> </label>
                                    
                                               ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gouvernoratUser", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    </div>
                                    <div class=\"form-group required\">
                                        <label for=\"InputState\">Délégation <sup>*</sup> </label>

                                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delegationUser", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    </div>
                                      <div class=\"form-group\">
                                        <label for=\"InputAdditionalInformation\">Adresse</label>
                                 
                                                  ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresseLiv", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6\">
                                    <div class=\"form-group required\">
                                        <label for=\"InputZip\">Zip / Postal Code <sup>*</sup> </label>
                                      ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codepostaleUser", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    </div>
                                  
                                  
                                    <div class=\"form-group required\">
                                        <label for=\"InputMobile\">Mobile phone <sup>*</sup></label>
                                      ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephoneUser", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                   
                                    </div>
                                
                                </div>
                         
                        </div>
                        <!--/row end-->

                    </div>
                         <div class=\"form-group col-lg-12 col-sm-12 col-md-12 -col-xs-12\">
                                        <table style=\"width:100%\" class=\"table-bordered table tablelook2\">
                                            <tbody>
                                            <tr>
                                                <td> Transporteur</td>
                                                <td>Methode</td>
                                                <td>Information</td>
                                                <td>Prix!</td>
                                            </tr>
                                            <tr>
                                            <td><label class=\"radio\">
                                                   ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "methLivraison", array()), 0, array(), "array"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                    <i class=\"fa  fa-plane fa-2x\"></i> </label></td>
                                                <td> Poste</td>
                                                <td>L'obtenir en poste</td>
                                                <td>8 TND</td>
                                            </tr>
                                            <tr>
                                             <td><label class=\"radio\">
                                                   ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "methLivraison", array()), 1, array(), "array"), 'widget', array("attr" => array("class" => "form-control")));
        echo "<i class=\"fa  fa-truck fa-2x\"></i> </label>
                                                    </td>
                                                <td>Aramex</td>
                                                <td>demain !</td>
                                                <td>10 TND</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                    <div class=\"cartFooter w100\">
                        <div class=\"box-footer\">
                            <div class=\"pull-left\"><a class=\"btn btn-default\" href=\"index.html\"> <i
                                    class=\"fa fa-arrow-left\"></i> &nbsp; Back to Shop </a></div>
                            <div class=\"pull-right\"> ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Ajouter", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  </div>
                        </div>
                    </div>
                     ";
        // line 125
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    <!--/ cartFooter -->

                </div>
            </div>
            <!--/row end-->

        </div>

 
        <!--/rightSidebar-->

    </div>
    <!--/row-->

    <div style=\"clear:both\"></div>
</div>
";
        
        $__internal_59f0c6307d4f212079fb6be71bf3696a7346d380393134b91ce47e2a91029512->leave($__internal_59f0c6307d4f212079fb6be71bf3696a7346d380393134b91ce47e2a91029512_prof);

        
        $__internal_7a8f9e550eceaee7090bc27f8abbcfb814f229d3b0c07d1202caf9229a6d659f->leave($__internal_7a8f9e550eceaee7090bc27f8abbcfb814f229d3b0c07d1202caf9229a6d659f_prof);

    }

    public function getTemplateName()
    {
        return "panier/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 125,  193 => 122,  177 => 109,  166 => 101,  142 => 80,  133 => 74,  124 => 68,  116 => 63,  108 => 58,  100 => 53,  49 => 4,  40 => 3,  11 => 1,);
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
                <li><a href=\"index.html\">Home</a></li>
                <li><a href=\"cart.html\">Cart</a></li>
                <li class=\"active\"> Checkout</li>
            </ul>
        </div>
    </div>
    <!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs\">
            <h1 class=\"section-title-inner\"><span><i class=\"glyphicon glyphicon-shopping-cart\"></i> Checkout</span></h1>
        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs\">
            <h4 class=\"caps\"><a href=\"category.html\"><i class=\"fa fa-chevron-left\"></i> Back to shopping </a></h4>
        </div>
    </div>
    <!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-12\">
            <div class=\"row userInfo\">
                <div class=\"col-xs-12 col-sm-12\">
                    <div class=\"w100 clearfix\">
                        <ul class=\"orderStep orderStepLook2\">
                            <li class=\"active\"><a href=\"checkout-1.html\"> <i class=\"fa fa-map-marker \"></i> <span> address</span>
                            </a></li>
                            <li><a href=\"checkout-2.html\"> <i class=\"fa fa fa-envelope  \"></i>
                                <span> Billing </span></a></li>
                            <li><a href=\"checkout-3.html\"><i class=\"fa fa-truck \"> </i><span>Shipping</span> </a></li>
                            <li><a href=\"checkout-4.html\"><i class=\"fa fa-money  \"> </i><span>Payment</span> </a></li>
                            <li><a href=\"checkout-5.html\"><i class=\"fa fa-check-square \"> </i><span>Order</span></a>
                            </li>
                        </ul>
                        <!--/.orderStep end-->
                    </div>


                    <div class=\"w100 clearfix\">
                        <div class=\"row userInfo\">
                            <div class=\"col-lg-12\">
                                <h2 class=\"block-title-2\"> To add a new address, please fill out the form below. </h2>
                            </div>

                   
                                <div class=\"col-xs-12 col-sm-6\">
                          {{ form_start(form) }}
                   
                                    <div class=\"form-group required\">
                                        <label for=\"InputCity\">Gouvernorat <sup>*</sup> </label>
                                    
                                               {{form_widget(form.gouvernoratUser,{ 'attr': {'class': \"form-control\"}} )}}
                                    </div>
                                    <div class=\"form-group required\">
                                        <label for=\"InputState\">Délégation <sup>*</sup> </label>

                                        {{form_widget(form.delegationUser,{ 'attr': {'class': \"form-control\"}} )}}
                                    </div>
                                      <div class=\"form-group\">
                                        <label for=\"InputAdditionalInformation\">Adresse</label>
                                 
                                                  {{form_widget(form.adresseLiv,{ 'attr': {'class': \"form-control\"}} )}}
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6\">
                                    <div class=\"form-group required\">
                                        <label for=\"InputZip\">Zip / Postal Code <sup>*</sup> </label>
                                      {{form_widget(form.codepostaleUser,{ 'attr': {'class': \"form-control\"}} )}}
                                    </div>
                                  
                                  
                                    <div class=\"form-group required\">
                                        <label for=\"InputMobile\">Mobile phone <sup>*</sup></label>
                                      {{form_widget(form.telephoneUser,{ 'attr': {'class': \"form-control\"}} )}}
                                   
                                    </div>
                                
                                </div>
                         
                        </div>
                        <!--/row end-->

                    </div>
                         <div class=\"form-group col-lg-12 col-sm-12 col-md-12 -col-xs-12\">
                                        <table style=\"width:100%\" class=\"table-bordered table tablelook2\">
                                            <tbody>
                                            <tr>
                                                <td> Transporteur</td>
                                                <td>Methode</td>
                                                <td>Information</td>
                                                <td>Prix!</td>
                                            </tr>
                                            <tr>
                                            <td><label class=\"radio\">
                                                   {{form_widget(form.methLivraison[0],{ 'attr': {'class': \"form-control\"}} )}}
                                                    <i class=\"fa  fa-plane fa-2x\"></i> </label></td>
                                                <td> Poste</td>
                                                <td>L'obtenir en poste</td>
                                                <td>8 TND</td>
                                            </tr>
                                            <tr>
                                             <td><label class=\"radio\">
                                                   {{form_widget(form.methLivraison[1],{ 'attr': {'class': \"form-control\"}} )}}<i class=\"fa  fa-truck fa-2x\"></i> </label>
                                                    </td>
                                                <td>Aramex</td>
                                                <td>demain !</td>
                                                <td>10 TND</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                    <div class=\"cartFooter w100\">
                        <div class=\"box-footer\">
                            <div class=\"pull-left\"><a class=\"btn btn-default\" href=\"index.html\"> <i
                                    class=\"fa fa-arrow-left\"></i> &nbsp; Back to Shop </a></div>
                            <div class=\"pull-right\"> {{form_widget(form.Ajouter,{ 'attr': {'class': \"form-control\"}} )}}  </div>
                        </div>
                    </div>
                     {{ form_end(form) }}
                    <!--/ cartFooter -->

                </div>
            </div>
            <!--/row end-->

        </div>

 
        <!--/rightSidebar-->

    </div>
    <!--/row-->

    <div style=\"clear:both\"></div>
</div>
{% endblock %}", "panier/checkout.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\panier\\checkout.html.twig");
    }
}
