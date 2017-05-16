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
        $__internal_3c420562c98a212871b59cb22f7a1422188aea6c25223e6e6f884f1676bed338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c420562c98a212871b59cb22f7a1422188aea6c25223e6e6f884f1676bed338->enter($__internal_3c420562c98a212871b59cb22f7a1422188aea6c25223e6e6f884f1676bed338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/wishlist.html.twig"));

        $__internal_6cb17eb47d53d3687fa18361531f2520f1ca6fd5950b4ec712eedf176645025e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb17eb47d53d3687fa18361531f2520f1ca6fd5950b4ec712eedf176645025e->enter($__internal_6cb17eb47d53d3687fa18361531f2520f1ca6fd5950b4ec712eedf176645025e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/wishlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c420562c98a212871b59cb22f7a1422188aea6c25223e6e6f884f1676bed338->leave($__internal_3c420562c98a212871b59cb22f7a1422188aea6c25223e6e6f884f1676bed338_prof);

        
        $__internal_6cb17eb47d53d3687fa18361531f2520f1ca6fd5950b4ec712eedf176645025e->leave($__internal_6cb17eb47d53d3687fa18361531f2520f1ca6fd5950b4ec712eedf176645025e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d726ff55f4f9e768f3f142104d6bb045748dd5f25a1ef19f11d143af7e5c554b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d726ff55f4f9e768f3f142104d6bb045748dd5f25a1ef19f11d143af7e5c554b->enter($__internal_d726ff55f4f9e768f3f142104d6bb045748dd5f25a1ef19f11d143af7e5c554b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8c2e5819aeea06414c6411c9434accc70ee7867f84fd174006bfcbc44524d6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2e5819aeea06414c6411c9434accc70ee7867f84fd174006bfcbc44524d6a5->enter($__internal_8c2e5819aeea06414c6411c9434accc70ee7867f84fd174006bfcbc44524d6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                <td style=\"width:10%\" class=\"delete\">&nbsp;</td>
                                <td style=\"width:10%\">Discount</td>
                                <td style=\"width:15%\">Total</td>
                            </tr>
                            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) ? $context["paniers"] : $this->getContext($context, "paniers")));
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            // line 44
            echo "                                
                            
                            <tr class=\"CartProduct\">
                                <td class=\"CartProductThumb\">
                                    <div><a href=\"product-details.html\"><img src=\"images/product/a1.jpg\" alt=\"img\"></a>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"CartDescription\">
                                        <h4><a href=\"product-details.html\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["panier"], "idProd", array()), "libelle", array()), "html", null, true);
            echo "</a></h4>
                                        <span class=\"size\"></span>

                                        <div class=\"price\"><span>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["panier"], "idProd", array()), "prixProduit", array()), "html", null, true);
            echo " TND</span></div>
                                    </div>
                                </td>
                                <td class=\"delete\"><a title=\"Delete\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletewish", array("id" => $this->getAttribute($context["panier"], "id", array()))), "html", null, true);
            echo "\"> <i
                                        class=\"glyphicon glyphicon-trash fa-2x\"></i></a></td>
                                    <td class=\"delete\"><a title=\"\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panwish", array("id" => $this->getAttribute($context["panier"], "id", array()), "idpd" => $this->getAttribute($this->getAttribute($context["panier"], "idProd", array()), "id", array()))), "html", null, true);
            echo "\"> <i
                                        class=\"glyphicon glyphicon-shopping-cart  fa-2x\"></i></a></td>
                                
                                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["panier"], "idProd", array()), "pourcentagePromotion", array()), "html", null, true);
            echo " %</td>
                                <td class=\"price\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["panier"], "idProd", array()), "prixProduit", array()), "html", null, true);
            echo " TND</td>
                            </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                      
                            </tbody>
                        </table>
                    </div>
                    <!--cartContent-->

                    <div class=\"cartFooter w100\">
                        <div class=\"box-footer\">
                            <div class=\"pull-left\"><a href=\"";
        // line 76
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
        
        $__internal_8c2e5819aeea06414c6411c9434accc70ee7867f84fd174006bfcbc44524d6a5->leave($__internal_8c2e5819aeea06414c6411c9434accc70ee7867f84fd174006bfcbc44524d6a5_prof);

        
        $__internal_d726ff55f4f9e768f3f142104d6bb045748dd5f25a1ef19f11d143af7e5c554b->leave($__internal_d726ff55f4f9e768f3f142104d6bb045748dd5f25a1ef19f11d143af7e5c554b_prof);

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
        return array (  154 => 76,  144 => 68,  135 => 65,  131 => 64,  125 => 61,  120 => 59,  114 => 56,  108 => 53,  97 => 44,  93 => 43,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
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
                                <td class=\"delete\"><a title=\"Delete\" href=\"{{path('deletewish', {'id':panier.id})}}\"> <i
                                        class=\"glyphicon glyphicon-trash fa-2x\"></i></a></td>
                                    <td class=\"delete\"><a title=\"\" href=\"{{path('panwish', {'id':panier.id,'idpd': panier.idProd.id})}}\"> <i
                                        class=\"glyphicon glyphicon-shopping-cart  fa-2x\"></i></a></td>
                                
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
", "default/wishlist.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\app\\Resources\\views\\default\\wishlist.html.twig");
    }
}
