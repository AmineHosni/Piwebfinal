<?php

/* :Magasin:listPerso.html.twig */
class __TwigTemplate_9cd1d45fa398054948df1659ec7700e7fbfa5d7ee44bab43996815f461643142 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", ":Magasin:listPerso.html.twig", 1);
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
        $__internal_72fce50159245a2cf916ee57e9da912394c4ca41d07aad23e6d13e4401b579f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72fce50159245a2cf916ee57e9da912394c4ca41d07aad23e6d13e4401b579f1->enter($__internal_72fce50159245a2cf916ee57e9da912394c4ca41d07aad23e6d13e4401b579f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Magasin:listPerso.html.twig"));

        $__internal_5d81098a246e78f3cc99e409c6346e470ee6a512efa29c4cf446b8c960bea05c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d81098a246e78f3cc99e409c6346e470ee6a512efa29c4cf446b8c960bea05c->enter($__internal_5d81098a246e78f3cc99e409c6346e470ee6a512efa29c4cf446b8c960bea05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Magasin:listPerso.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72fce50159245a2cf916ee57e9da912394c4ca41d07aad23e6d13e4401b579f1->leave($__internal_72fce50159245a2cf916ee57e9da912394c4ca41d07aad23e6d13e4401b579f1_prof);

        
        $__internal_5d81098a246e78f3cc99e409c6346e470ee6a512efa29c4cf446b8c960bea05c->leave($__internal_5d81098a246e78f3cc99e409c6346e470ee6a512efa29c4cf446b8c960bea05c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f3caaa3246cf616cb6ad66563baafb63b6fd1ac638d952c902d0ef2b7eb6e1b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3caaa3246cf616cb6ad66563baafb63b6fd1ac638d952c902d0ef2b7eb6e1b4->enter($__internal_f3caaa3246cf616cb6ad66563baafb63b6fd1ac638d952c902d0ef2b7eb6e1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6704c2dbf9c03f88de4b93dbe66808cd01a3cb712561c0ff38fab0d2dbc6f9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6704c2dbf9c03f88de4b93dbe66808cd01a3cb712561c0ff38fab0d2dbc6f9fe->enter($__internal_6704c2dbf9c03f88de4b93dbe66808cd01a3cb712561c0ff38fab0d2dbc6f9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container main-container\">

        <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">
            <h3 class=\"section-title style2 text-center\"><span>mes magasins</span></h3>


            <div class=\"action-control\">
                <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Magasin_produits");
        echo "\" class=\"btn btn-success\"> attribute products <i
                            class=\"fa fa-database\"> </i> </a>
                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Magasin_Add");
        echo "\" class=\"btn btn-success\"> new entry<i
                            class=\"fa fa-plus\"> </i> </a>

            <div class=\"container\">


                    <div class=\"container\">
                <div class=\"row xsResponse\">


        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Magasin"]) ? $context["Magasin"] : $this->getContext($context, "Magasin")));
        foreach ($context['_seq'] as $context["_key"] => $context["magasin"]) {
            // line 24
            echo "
            <div class=\"col-lg-3 col-md-3 col-sm-6\">
                <div class=\"product\">


                    <div class=\"image\">
                        <div class=\"quickview\">
                            <a data-toggle=\"modal\" class=\"btn btn-xs btn-quickview\" href=\"ajax/product.html\"
                               data-target=\"#productSetailsModalAjax\">Quick View </a>
                        </div>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Magasin_Details", array("idMagasin" => $this->getAttribute($context["magasin"], "id", array()))), "html", null, true);
            echo "\"><img style=\"height: 400px; width: 300px\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/images/" . $this->getAttribute($context["magasin"], "imageName", array()))), "html", null, true);
            echo "\" alt=\"img\"
                                                                                              class=\"img-responsive\"></a></div>
                    <div class=\"description\">
                        <h4><strong>";
            // line 37
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["magasin"], "name", array())), "html", null, true);
            echo "</strong></h4>

                        <div class=\"grid-description\">
                            <p>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["magasin"], "description", array()), "html", null, true);
            echo " </p>
                        </div>
                        <div class=\"list-description\">
                            <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                                fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                                odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                                vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                                sit amet placerat elit. </p>
                        </div>

                        <div class=\"action-control\">
                            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Magasin_Details", array("idMagasin" => $this->getAttribute($context["magasin"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">  Visit <i
                                        class=\"fa fa-share\"> </i> </a>
                            <br>

                                <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Magasin_Edit", array("idMagasin" => $this->getAttribute($context["magasin"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"> <span class=\"add2cart\"> Edit <i
                                                class=\"fa fa-share\"> </i> </span> </a>
                                <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Magasin_Delete", array("idMagasin" => $this->getAttribute($context["magasin"], "id", array()))), "html", null, true);
            echo "\">
                                    <button type=\"button\" class=\"btn btn-danger\" onclick=\"return confirm('Are you sure you want to delete this item?');\">  Delete   </button></a>


                        </div>
                    </div>
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['magasin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </table>

</div>
                    </div></div></div></div></div>

                ";
        
        $__internal_6704c2dbf9c03f88de4b93dbe66808cd01a3cb712561c0ff38fab0d2dbc6f9fe->leave($__internal_6704c2dbf9c03f88de4b93dbe66808cd01a3cb712561c0ff38fab0d2dbc6f9fe_prof);

        
        $__internal_f3caaa3246cf616cb6ad66563baafb63b6fd1ac638d952c902d0ef2b7eb6e1b4->leave($__internal_f3caaa3246cf616cb6ad66563baafb63b6fd1ac638d952c902d0ef2b7eb6e1b4_prof);

    }

    public function getTemplateName()
    {
        return ":Magasin:listPerso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 68,  133 => 58,  128 => 56,  121 => 52,  106 => 40,  100 => 37,  92 => 34,  80 => 24,  76 => 23,  63 => 13,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container main-container\">

        <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">
            <h3 class=\"section-title style2 text-center\"><span>mes magasins</span></h3>


            <div class=\"action-control\">
                <a href=\"{{ path(\"Magasin_produits\") }}\" class=\"btn btn-success\"> attribute products <i
                            class=\"fa fa-database\"> </i> </a>
                <a href=\"{{ path(\"Magasin_Add\") }}\" class=\"btn btn-success\"> new entry<i
                            class=\"fa fa-plus\"> </i> </a>

            <div class=\"container\">


                    <div class=\"container\">
                <div class=\"row xsResponse\">


        {% for magasin  in Magasin %}

            <div class=\"col-lg-3 col-md-3 col-sm-6\">
                <div class=\"product\">


                    <div class=\"image\">
                        <div class=\"quickview\">
                            <a data-toggle=\"modal\" class=\"btn btn-xs btn-quickview\" href=\"ajax/product.html\"
                               data-target=\"#productSetailsModalAjax\">Quick View </a>
                        </div>
                        <a href=\"{{ path(\"Magasin_Details\",{'idMagasin':magasin.id}) }}\"><img style=\"height: 400px; width: 300px\" src=\"{{ asset('bundles/images/'~ magasin.imageName) }}\" alt=\"img\"
                                                                                              class=\"img-responsive\"></a></div>
                    <div class=\"description\">
                        <h4><strong>{{ magasin.name|upper }}</strong></h4>

                        <div class=\"grid-description\">
                            <p>{{ magasin.description }} </p>
                        </div>
                        <div class=\"list-description\">
                            <p> Sed sed rutrum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Pellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante. Aliquam vel
                                fermentum elit. Morbi rhoncus, neque in vulputate facilisis, leo tortor sollicitudin
                                odio, quis pellentesque lorem nisi quis enim. In dolor mi, hendrerit at blandit
                                vulputate, congue a purus. Sed eget turpis sit amet orci euismod accumsan. Praesent
                                sit amet placerat elit. </p>
                        </div>

                        <div class=\"action-control\">
                            <a href=\"{{ path(\"Magasin_Details\",{'idMagasin':magasin.id}) }}\" class=\"btn btn-default\">  Visit <i
                                        class=\"fa fa-share\"> </i> </a>
                            <br>

                                <a href=\"{{ path('Magasin_Edit',{'idMagasin':magasin.id }) }}\" class=\"btn btn-primary\"> <span class=\"add2cart\"> Edit <i
                                                class=\"fa fa-share\"> </i> </span> </a>
                                <a href=\"{{ path('Magasin_Delete',{'idMagasin':magasin.id }) }}\">
                                    <button type=\"button\" class=\"btn btn-danger\" onclick=\"return confirm('Are you sure you want to delete this item?');\">  Delete   </button></a>


                        </div>
                    </div>
                </div>
            </div>

        {% endfor %}
    </table>

</div>
                    </div></div></div></div></div>

                {% endblock %}
", ":Magasin:listPerso.html.twig", "C:\\wamp64\\www\\test\\app/Resources\\views/Magasin/listPerso.html.twig");
    }
}
