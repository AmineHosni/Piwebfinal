<?php

/* default/wishlist.html.twig */
class __TwigTemplate_7ba9e3b43f5fbe25b31351b3d63c357a6f608df6ba3dc2217dd92110a0b9b236 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "default/wishlist.html.twig", 1);
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
        $__internal_296cc53935e24cf169fde110c0624ba12c1d18f73b6f1d4d109368054e56fc53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296cc53935e24cf169fde110c0624ba12c1d18f73b6f1d4d109368054e56fc53->enter($__internal_296cc53935e24cf169fde110c0624ba12c1d18f73b6f1d4d109368054e56fc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/wishlist.html.twig"));

        $__internal_305ad83a3e35f81ea7abe2bef223c63f917e4ff6a0b63d1202114d4878a3d5be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305ad83a3e35f81ea7abe2bef223c63f917e4ff6a0b63d1202114d4878a3d5be->enter($__internal_305ad83a3e35f81ea7abe2bef223c63f917e4ff6a0b63d1202114d4878a3d5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/wishlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_296cc53935e24cf169fde110c0624ba12c1d18f73b6f1d4d109368054e56fc53->leave($__internal_296cc53935e24cf169fde110c0624ba12c1d18f73b6f1d4d109368054e56fc53_prof);

        
        $__internal_305ad83a3e35f81ea7abe2bef223c63f917e4ff6a0b63d1202114d4878a3d5be->leave($__internal_305ad83a3e35f81ea7abe2bef223c63f917e4ff6a0b63d1202114d4878a3d5be_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1fb329c74485dc35941c62e213d627e0fb0b0efdf9ba7b4d835bd4515c8f978f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb329c74485dc35941c62e213d627e0fb0b0efdf9ba7b4d835bd4515c8f978f->enter($__internal_1fb329c74485dc35941c62e213d627e0fb0b0efdf9ba7b4d835bd4515c8f978f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3bd343cd14d57a2be637aa86c968e29c4e94d89ece806f8423a3441b2923663b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd343cd14d57a2be637aa86c968e29c4e94d89ece806f8423a3441b2923663b->enter($__internal_3bd343cd14d57a2be637aa86c968e29c4e94d89ece806f8423a3441b2923663b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container main-container headerOffset\">
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"index.html\">Home</a></li>
                <li><a href=\"category.html\">Category</a></li>
                <li class=\"active\">wishlist</li>
            </ul>
        </div>
    </div>
    <!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs\">
            <h1 class=\"section-title-inner\"><span><i
                    class=\"glyphicon glyphicon-shopping-cart\"></i>Wishlist </span></h1>
        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs\">
            <h4 class=\"caps\"><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_homepage");
        echo "\"><i class=\"fa fa-chevron-left\"></i> Back to shopping </a></h4>
        </div>
    </div>
    <!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7\">
            <div class=\"row userInfo\">
                <div class=\"col-xs-12 col-sm-12\">
                    <div class=\"cartContent w100\">
                        <table class=\"cartTable table-responsive\" style=\"width:100%\">
                            <tbody>

                            <tr class=\"CartProduct cartTableHeader\">
                                <td style=\"width:15%\"> Product</td>
                                <td style=\"width:40%\">Details</td>
                                <td style=\"width:10%\" class=\"delete\">&nbsp;</td>
                                <td style=\"width:10%\">Discount</td>
                                <td style=\"width:15%\">Total</td>
                            </tr>
                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) ? $context["paniers"] : $this->getContext($context, "paniers")));
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            // line 43
            echo "                                
                            
                            <tr class=\"CartProduct\">
                                <td class=\"CartProductThumb\">
                                    <div><a href=\"product-details.html\"><img src=\"images/product/a1.jpg\" alt=\"img\"></a>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"CartDescription\">
                                        <h4><a href=\"product-details.html\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["panier"], "idProd", array()), "libelle", array()), "html", null, true);
            echo "</a></h4>
                                        <span class=\"size\"></span>

                                        <div class=\"price\"><span>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["panier"], "idProd", array()), "prixProduit", array()), "html", null, true);
            echo " TND</span></div>
                                    </div>
                                </td>
                                <td class=\"delete\"><a title=\"Delete\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_cart_del", array("id" => $this->getAttribute($context["panier"], "id", array()))), "html", null, true);
            echo "\"> <i
                                        class=\"glyphicon glyphicon-trash fa-2x\"></i></a></td>
                                
                                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["panier"], "idProd", array()), "pourcentagePromotion", array()), "html", null, true);
            echo " %</td>
                                <td class=\"price\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["panier"], "idProd", array()), "prixProduit", array()), "html", null, true);
            echo " TND</td>
                            </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                      
                            </tbody>
                        </table>
                    </div>
                    <!--cartContent-->

                    <div class=\"cartFooter w100\">
                        <div class=\"box-footer\">
                            <div class=\"pull-left\"><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_homepage");
        echo "\" class=\"btn btn-default\"> <i
                                    class=\"fa fa-arrow-left\"></i> &nbsp; Continue shopping </a></div>
                            <div class=\"pull-right\">
                             
                            </div>
                        </div>
                    </div>
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
        
        $__internal_3bd343cd14d57a2be637aa86c968e29c4e94d89ece806f8423a3441b2923663b->leave($__internal_3bd343cd14d57a2be637aa86c968e29c4e94d89ece806f8423a3441b2923663b_prof);

        
        $__internal_1fb329c74485dc35941c62e213d627e0fb0b0efdf9ba7b4d835bd4515c8f978f->leave($__internal_1fb329c74485dc35941c62e213d627e0fb0b0efdf9ba7b4d835bd4515c8f978f_prof);

    }

    public function getTemplateName()
    {
        return "default/wishlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 73,  138 => 65,  129 => 62,  125 => 61,  119 => 58,  113 => 55,  107 => 52,  96 => 43,  92 => 42,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
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
                <li><a href=\"category.html\">Category</a></li>
                <li class=\"active\">wishlist</li>
            </ul>
        </div>
    </div>
    <!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs\">
            <h1 class=\"section-title-inner\"><span><i
                    class=\"glyphicon glyphicon-shopping-cart\"></i>Wishlist </span></h1>
        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs\">
            <h4 class=\"caps\"><a href=\"{{ path('main_homepage') }}\"><i class=\"fa fa-chevron-left\"></i> Back to shopping </a></h4>
        </div>
    </div>
    <!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7\">
            <div class=\"row userInfo\">
                <div class=\"col-xs-12 col-sm-12\">
                    <div class=\"cartContent w100\">
                        <table class=\"cartTable table-responsive\" style=\"width:100%\">
                            <tbody>

                            <tr class=\"CartProduct cartTableHeader\">
                                <td style=\"width:15%\"> Product</td>
                                <td style=\"width:40%\">Details</td>
                                <td style=\"width:10%\" class=\"delete\">&nbsp;</td>
                                <td style=\"width:10%\">Discount</td>
                                <td style=\"width:15%\">Total</td>
                            </tr>
                            {% for panier in paniers %}
                                
                            
                            <tr class=\"CartProduct\">
                                <td class=\"CartProductThumb\">
                                    <div><a href=\"product-details.html\"><img src=\"images/product/a1.jpg\" alt=\"img\"></a>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"CartDescription\">
                                        <h4><a href=\"product-details.html\">{{panier.idProd.libelle }}</a></h4>
                                        <span class=\"size\"></span>

                                        <div class=\"price\"><span>{{ panier.idProd.prixProduit }} TND</span></div>
                                    </div>
                                </td>
                                <td class=\"delete\"><a title=\"Delete\" href=\"{{path('my_cart_del', {'id':panier.id})}}\"> <i
                                        class=\"glyphicon glyphicon-trash fa-2x\"></i></a></td>
                                
                                <td>{{panier.idProd.pourcentagePromotion}} %</td>
                                <td class=\"price\">{{ panier.idProd.prixProduit }} TND</td>
                            </tr>
{% endfor %}
                      
                            </tbody>
                        </table>
                    </div>
                    <!--cartContent-->

                    <div class=\"cartFooter w100\">
                        <div class=\"box-footer\">
                            <div class=\"pull-left\"><a href=\"{{ path('main_homepage') }}\" class=\"btn btn-default\"> <i
                                    class=\"fa fa-arrow-left\"></i> &nbsp; Continue shopping </a></div>
                            <div class=\"pull-right\">
                             
                            </div>
                        </div>
                    </div>
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
{% endblock %}
", "default/wishlist.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\default\\wishlist.html.twig");
    }
}
