<?php

/* :Magasin:list.html.twig */
class __TwigTemplate_5be56c2184a436a5abf8b035c7378d0360afa606057adbe85272d9de82078acd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", ":Magasin:list.html.twig", 1);
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
        $__internal_1375d3a96ff981dab96f347f2fbeb4b7dfd32157ba043a64e239f692810f5626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1375d3a96ff981dab96f347f2fbeb4b7dfd32157ba043a64e239f692810f5626->enter($__internal_1375d3a96ff981dab96f347f2fbeb4b7dfd32157ba043a64e239f692810f5626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Magasin:list.html.twig"));

        $__internal_0552372f5a3f858ce93cb19c5bf9bd2b767e958dfe86ca7ce6745e9e6f60bf86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0552372f5a3f858ce93cb19c5bf9bd2b767e958dfe86ca7ce6745e9e6f60bf86->enter($__internal_0552372f5a3f858ce93cb19c5bf9bd2b767e958dfe86ca7ce6745e9e6f60bf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Magasin:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1375d3a96ff981dab96f347f2fbeb4b7dfd32157ba043a64e239f692810f5626->leave($__internal_1375d3a96ff981dab96f347f2fbeb4b7dfd32157ba043a64e239f692810f5626_prof);

        
        $__internal_0552372f5a3f858ce93cb19c5bf9bd2b767e958dfe86ca7ce6745e9e6f60bf86->leave($__internal_0552372f5a3f858ce93cb19c5bf9bd2b767e958dfe86ca7ce6745e9e6f60bf86_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8e72792d3c4e530622a2b8d0428a74f5a0c19ade3c6df7bbf8e3301045bfcf67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e72792d3c4e530622a2b8d0428a74f5a0c19ade3c6df7bbf8e3301045bfcf67->enter($__internal_8e72792d3c4e530622a2b8d0428a74f5a0c19ade3c6df7bbf8e3301045bfcf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a5a1169f62bcaa8e8805d8bf9878b184013f16f9c5be29962958bcddc6093ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a1169f62bcaa8e8805d8bf9878b184013f16f9c5be29962958bcddc6093ce4->enter($__internal_a5a1169f62bcaa8e8805d8bf9878b184013f16f9c5be29962958bcddc6093ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container main-container\">

    <br><br>


    <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">
        <h3 class=\"section-title style2 text-center\"><span>produits disponibles</span></h3>
        <div class=\"container\">
            <div class=\"row xsResponse\">

                <div class=\"action-control\">


                    <div class=\"action-control\">
                        <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Magasin_List_Perso");
        echo "\" class=\"btn btn-success\"> gerer mes magasins <i
                                    class=\"fa fa-database\"> </i> </a>
                        <br>


                    </div>

                </div>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Magasin"]) ? $context["Magasin"] : $this->getContext($context, "Magasin")));
        foreach ($context['_seq'] as $context["_key"] => $context["magasin"]) {
            // line 27
            echo "
            <div class=\"col-lg-3 col-md-3 col-sm-6\">
                <div class=\"product\">


                <div class=\"image\">
                    <div class=\"quickview\">
                        <a data-toggle=\"modal\" class=\"btn btn-xs btn-quickview\" href=\"ajax/product.html\"
                           data-target=\"#productSetailsModalAjax\">Quick View </a>
                    </div>
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Magasin_Details", array("idMagasin" => $this->getAttribute($context["magasin"], "id", array()))), "html", null, true);
            echo "\"><img style=\"height: 300px; width: 200px\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/images/" . $this->getAttribute($context["magasin"], "imageName", array()))), "html", null, true);
            echo "\" alt=\"img\"
                                                        class=\"img-responsive\"></a></div>
                <div class=\"description\">
                    <h4><strong>";
            // line 40
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["magasin"], "name", array())), "html", null, true);
            echo "</strong></h4>

                    <div class=\"grid-description\">
                        <p>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["magasin"], "description", array()), "html", null, true);
            echo " </p>
                    </div>


                    <div class=\"action-control\">
                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Magasin_Details", array("idMagasin" => $this->getAttribute($context["magasin"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">  Visit <i
                                        class=\"fa fa-share\"> </i> </a>
                        <br>


                </div>
            </div>
                </div>            </div>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['magasin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </div>
    </div>
</div></div></div>

";
        
        $__internal_a5a1169f62bcaa8e8805d8bf9878b184013f16f9c5be29962958bcddc6093ce4->leave($__internal_a5a1169f62bcaa8e8805d8bf9878b184013f16f9c5be29962958bcddc6093ce4_prof);

        
        $__internal_8e72792d3c4e530622a2b8d0428a74f5a0c19ade3c6df7bbf8e3301045bfcf67->leave($__internal_8e72792d3c4e530622a2b8d0428a74f5a0c19ade3c6df7bbf8e3301045bfcf67_prof);

    }

    public function getTemplateName()
    {
        return ":Magasin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 59,  114 => 48,  106 => 43,  100 => 40,  92 => 37,  80 => 27,  76 => 26,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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

    <br><br>


    <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">
        <h3 class=\"section-title style2 text-center\"><span>produits disponibles</span></h3>
        <div class=\"container\">
            <div class=\"row xsResponse\">

                <div class=\"action-control\">


                    <div class=\"action-control\">
                        <a href=\"{{ path(\"Magasin_List_Perso\") }}\" class=\"btn btn-success\"> gerer mes magasins <i
                                    class=\"fa fa-database\"> </i> </a>
                        <br>


                    </div>

                </div>
        {% for magasin  in Magasin %}

            <div class=\"col-lg-3 col-md-3 col-sm-6\">
                <div class=\"product\">


                <div class=\"image\">
                    <div class=\"quickview\">
                        <a data-toggle=\"modal\" class=\"btn btn-xs btn-quickview\" href=\"ajax/product.html\"
                           data-target=\"#productSetailsModalAjax\">Quick View </a>
                    </div>
                    <a href=\"{{ path(\"Magasin_Details\",{'idMagasin':magasin.id}) }}\"><img style=\"height: 300px; width: 200px\" src=\"{{ asset('bundles/images/'~ magasin.imageName) }}\" alt=\"img\"
                                                        class=\"img-responsive\"></a></div>
                <div class=\"description\">
                    <h4><strong>{{ magasin.name|upper }}</strong></h4>

                    <div class=\"grid-description\">
                        <p>{{ magasin.description }} </p>
                    </div>


                    <div class=\"action-control\">
                        <a href=\"{{ path(\"Magasin_Details\",{'idMagasin':magasin.id}) }}\" class=\"btn btn-default\">  Visit <i
                                        class=\"fa fa-share\"> </i> </a>
                        <br>


                </div>
            </div>
                </div>            </div>


        {% endfor %}
        </div>
    </div>
</div></div></div>

{% endblock %}

", ":Magasin:list.html.twig", "C:\\wamp64\\www\\test\\app/Resources\\views/Magasin/list.html.twig");
    }
}
