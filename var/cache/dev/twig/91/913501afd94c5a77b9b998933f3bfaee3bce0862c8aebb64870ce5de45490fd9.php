<?php

/* panier/mycart.html.twig */
class __TwigTemplate_e6a5953b1103444ac361de4cc883864e7863984c677f146457aabad577158037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "panier/mycart.html.twig", 1);
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
        $__internal_50b79260028f9ad71ca7cf399070200ee3ac60b300a02249fdba6045ac550f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b79260028f9ad71ca7cf399070200ee3ac60b300a02249fdba6045ac550f72->enter($__internal_50b79260028f9ad71ca7cf399070200ee3ac60b300a02249fdba6045ac550f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/mycart.html.twig"));

        $__internal_738291a6b7229435a503e555d1cd7df74c7ec0787a2125f51bbefb28e8877197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738291a6b7229435a503e555d1cd7df74c7ec0787a2125f51bbefb28e8877197->enter($__internal_738291a6b7229435a503e555d1cd7df74c7ec0787a2125f51bbefb28e8877197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/mycart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50b79260028f9ad71ca7cf399070200ee3ac60b300a02249fdba6045ac550f72->leave($__internal_50b79260028f9ad71ca7cf399070200ee3ac60b300a02249fdba6045ac550f72_prof);

        
        $__internal_738291a6b7229435a503e555d1cd7df74c7ec0787a2125f51bbefb28e8877197->leave($__internal_738291a6b7229435a503e555d1cd7df74c7ec0787a2125f51bbefb28e8877197_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ba0f58a760fa94a51dad672518d5e0249e4dbcc0ecd972e398f50cbafeb5d827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba0f58a760fa94a51dad672518d5e0249e4dbcc0ecd972e398f50cbafeb5d827->enter($__internal_ba0f58a760fa94a51dad672518d5e0249e4dbcc0ecd972e398f50cbafeb5d827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6842d5147256516bc4bd24e637520578104b8e71d74c7c1b7c31b59a141fef65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6842d5147256516bc4bd24e637520578104b8e71d74c7c1b7c31b59a141fef65->enter($__internal_6842d5147256516bc4bd24e637520578104b8e71d74c7c1b7c31b59a141fef65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container main-container headerOffset\">
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"index.html\">Home</a></li>
                <li><a href=\"category.html\">Category</a></li>
                <li class=\"active\">Cart</li>
            </ul>
        </div>
    </div>
    <!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs\">
            <h1 class=\"section-title-inner\"><span><i
                    class=\"glyphicon glyphicon-shopping-cart\"></i> Shopping cart </span></h1>
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
                                <td style=\"width:10%\">QNT</td>
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["panier"], "prixtot", array()), "html", null, true);
            echo " TND</span></div>
                                    </div>
                                </td>
                                <td class=\"delete\"><a title=\"Delete\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_cart_del", array("id" => $this->getAttribute($context["panier"], "id", array()))), "html", null, true);
            echo "\"> <i
                                        class=\"glyphicon glyphicon-trash fa-2x\"></i></a></td>
                                <td><input class=\"quanitySniper\" type=\"text\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["panier"], "qtepan", array()), "html", null, true);
            echo "\" name=\"quanitySniper\"></td>
                                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["panier"], "idProd", array()), "pourcentagePromotion", array()), "html", null, true);
            echo " %</td>
                                <td class=\"price\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["panier"], "prixtot", array()), "html", null, true);
            echo " TND</td>
                            </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                      
                            </tbody>
                        </table>
                    </div>
                    <!--cartContent-->

                    <div class=\"cartFooter w100\">
                        <div class=\"box-footer\">
                            <div class=\"pull-left\"><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_homepage");
        echo "\" class=\"btn btn-default\"> <i
                                    class=\"fa fa-arrow-left\"></i> &nbsp; Continue shopping </a></div>
                            <div class=\"pull-right\">
                                <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-undo\"></i> &nbsp; Update
                                    cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--/ cartFooter -->

                </div>
            </div>
            <!--/row end-->

        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-5 rightSidebar\">
            <div class=\"contentBox\">
                <div class=\"w100 costDetails\">
                    <div class=\"table-block\" id=\"order-detail-content\"><a class=\"btn btn-primary btn-lg btn-block \"
                                                                          title=\"checkout\" href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("checkout");
        echo "\"
                                                                          style=\"margin-bottom:20px\"> Proceed to
                        checkout &nbsp; <i class=\"fa fa-arrow-right\"></i> </a>

                       
                    </div>
                </div>
            </div>
            <!-- End popular -->

        </div>
        <!--/rightSidebar-->

    </div>
    <!--/row-->

    <div style=\"clear:both\"></div>
</div>
";
        
        $__internal_6842d5147256516bc4bd24e637520578104b8e71d74c7c1b7c31b59a141fef65->leave($__internal_6842d5147256516bc4bd24e637520578104b8e71d74c7c1b7c31b59a141fef65_prof);

        
        $__internal_ba0f58a760fa94a51dad672518d5e0249e4dbcc0ecd972e398f50cbafeb5d827->leave($__internal_ba0f58a760fa94a51dad672518d5e0249e4dbcc0ecd972e398f50cbafeb5d827_prof);

    }

    public function getTemplateName()
    {
        return "panier/mycart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 94,  152 => 74,  142 => 66,  133 => 63,  129 => 62,  125 => 61,  120 => 59,  114 => 56,  108 => 53,  97 => 44,  93 => 43,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
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
                <li class=\"active\">Cart</li>
            </ul>
        </div>
    </div>
    <!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs\">
            <h1 class=\"section-title-inner\"><span><i
                    class=\"glyphicon glyphicon-shopping-cart\"></i> Shopping cart </span></h1>
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
                                <td style=\"width:10%\">QNT</td>
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

                                        <div class=\"price\"><span>{{ panier.prixtot }} TND</span></div>
                                    </div>
                                </td>
                                <td class=\"delete\"><a title=\"Delete\" href=\"{{path('my_cart_del', {'id':panier.id})}}\"> <i
                                        class=\"glyphicon glyphicon-trash fa-2x\"></i></a></td>
                                <td><input class=\"quanitySniper\" type=\"text\" value=\"{{ panier.qtepan }}\" name=\"quanitySniper\"></td>
                                <td>{{panier.idProd.pourcentagePromotion}} %</td>
                                <td class=\"price\">{{ panier.prixtot }} TND</td>
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
                                <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-undo\"></i> &nbsp; Update
                                    cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--/ cartFooter -->

                </div>
            </div>
            <!--/row end-->

        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-5 rightSidebar\">
            <div class=\"contentBox\">
                <div class=\"w100 costDetails\">
                    <div class=\"table-block\" id=\"order-detail-content\"><a class=\"btn btn-primary btn-lg btn-block \"
                                                                          title=\"checkout\" href=\"{{ path('checkout') }}\"
                                                                          style=\"margin-bottom:20px\"> Proceed to
                        checkout &nbsp; <i class=\"fa fa-arrow-right\"></i> </a>

                       
                    </div>
                </div>
            </div>
            <!-- End popular -->

        </div>
        <!--/rightSidebar-->

    </div>
    <!--/row-->

    <div style=\"clear:both\"></div>
</div>
{% endblock %}
", "panier/mycart.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\panier\\mycart.html.twig");
    }
}