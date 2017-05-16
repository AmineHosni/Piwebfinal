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
        $__internal_a7105b86798bd2f1a8b89360cc2a51bb02a076f6f498c468f74f8f6b7d7b4579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7105b86798bd2f1a8b89360cc2a51bb02a076f6f498c468f74f8f6b7d7b4579->enter($__internal_a7105b86798bd2f1a8b89360cc2a51bb02a076f6f498c468f74f8f6b7d7b4579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Magasin:list.html.twig"));

        $__internal_df1e401009d230146b77d216182f63cdd31c02f930223b333d53d0ed74bbb56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1e401009d230146b77d216182f63cdd31c02f930223b333d53d0ed74bbb56c->enter($__internal_df1e401009d230146b77d216182f63cdd31c02f930223b333d53d0ed74bbb56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Magasin:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7105b86798bd2f1a8b89360cc2a51bb02a076f6f498c468f74f8f6b7d7b4579->leave($__internal_a7105b86798bd2f1a8b89360cc2a51bb02a076f6f498c468f74f8f6b7d7b4579_prof);

        
        $__internal_df1e401009d230146b77d216182f63cdd31c02f930223b333d53d0ed74bbb56c->leave($__internal_df1e401009d230146b77d216182f63cdd31c02f930223b333d53d0ed74bbb56c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_263c5c59c3c9b86288ad47cfff2f6eee0a45e24271a90438599d9968567a14d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_263c5c59c3c9b86288ad47cfff2f6eee0a45e24271a90438599d9968567a14d8->enter($__internal_263c5c59c3c9b86288ad47cfff2f6eee0a45e24271a90438599d9968567a14d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8fc054d8221e5b18bec1ce6b6c02e9d6fe6e0a4b75c86bd621dbf2ca3f91c543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc054d8221e5b18bec1ce6b6c02e9d6fe6e0a4b75c86bd621dbf2ca3f91c543->enter($__internal_8fc054d8221e5b18bec1ce6b6c02e9d6fe6e0a4b75c86bd621dbf2ca3f91c543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container main-container\">

    <br><br><br><br>
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_homepage");
        echo "\">Home</a></li>
                <li><a href=\"account.html\">les magasins</a></li>
            </ul>
        </div>
    </div>

    <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">
        <div class=\"container\">
            <div class=\"row xsResponse\">

                <div class=\"action-control\">


                    <div class=\"action-control\">
                        <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Magasin_List_Perso");
        echo "\" class=\"btn btn-success\"> gerer mes magasins <i
                                    class=\"fa fa-database\"> </i> </a>
                        <br>


                    </div>

                </div>
                <div class=\"container main-container\">

                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Magasin"]) ? $context["Magasin"] : $this->getContext($context, "Magasin")));
        foreach ($context['_seq'] as $context["_key"] => $context["magasin"]) {
            // line 35
            echo "
            <div class=\"col-lg-3 col-md-3 col-sm-6\">
                <div class=\"product\">


                <div class=\"image\">
                    <div class=\"quickview\">
                        <a data-toggle=\"modal\" class=\"btn btn-xs btn-quickview\" href=\"ajax/product.html\"
                           data-target=\"#productSetailsModalAjax\">Quick View </a>
                    </div>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Magasin_Details", array("idMagasin" => $this->getAttribute($context["magasin"], "id", array()))), "html", null, true);
            echo "\"><img height=\"400\" width=\"400\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/images/" . $this->getAttribute($context["magasin"], "imageName", array()))), "html", null, true);
            echo "\" alt=\"img\"
                                                        class=\"img-responsive\"></a></div>
                <div class=\"description\">
                    <h4><strong>";
            // line 48
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["magasin"], "name", array())), "html", null, true);
            echo "</strong></h4>

                    <div class=\"grid-description\">
                        <p>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["magasin"], "description", array()), "html", null, true);
            echo " </p>
                    </div>


                    <div class=\"action-control\">
                        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Magasin_Details", array("idMagasin" => $this->getAttribute($context["magasin"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">  Visit <i
                                        class=\"fa fa-share\"> </i> </a>
                        <br>


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
        echo "                </div>  </div>   </div>
    </div>
</div></div>

";
        
        $__internal_8fc054d8221e5b18bec1ce6b6c02e9d6fe6e0a4b75c86bd621dbf2ca3f91c543->leave($__internal_8fc054d8221e5b18bec1ce6b6c02e9d6fe6e0a4b75c86bd621dbf2ca3f91c543_prof);

        
        $__internal_263c5c59c3c9b86288ad47cfff2f6eee0a45e24271a90438599d9968567a14d8->leave($__internal_263c5c59c3c9b86288ad47cfff2f6eee0a45e24271a90438599d9968567a14d8_prof);

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
        return array (  143 => 68,  125 => 56,  117 => 51,  111 => 48,  103 => 45,  91 => 35,  87 => 34,  74 => 24,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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

    <br><br><br><br>
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"{{path('main_homepage')}}\">Home</a></li>
                <li><a href=\"account.html\">les magasins</a></li>
            </ul>
        </div>
    </div>

    <div class=\"morePost row featuredPostContainer style2 globalPaddingTop \">
        <div class=\"container\">
            <div class=\"row xsResponse\">

                <div class=\"action-control\">


                    <div class=\"action-control\">
                        <a href=\"{{ path(\"Magasin_List_Perso\") }}\" class=\"btn btn-success\"> gerer mes magasins <i
                                    class=\"fa fa-database\"> </i> </a>
                        <br>


                    </div>

                </div>
                <div class=\"container main-container\">

                {% for magasin  in Magasin %}

            <div class=\"col-lg-3 col-md-3 col-sm-6\">
                <div class=\"product\">


                <div class=\"image\">
                    <div class=\"quickview\">
                        <a data-toggle=\"modal\" class=\"btn btn-xs btn-quickview\" href=\"ajax/product.html\"
                           data-target=\"#productSetailsModalAjax\">Quick View </a>
                    </div>
                    <a href=\"{{ path(\"Magasin_Details\",{'idMagasin':magasin.id}) }}\"><img height=\"400\" width=\"400\" src=\"{{ asset('bundles/images/'~ magasin.imageName) }}\" alt=\"img\"
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
                </div>
            </div>


            {% endfor %}
                </div>  </div>   </div>
    </div>
</div></div>

{% endblock %}

", ":Magasin:list.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\app/Resources\\views/Magasin/list.html.twig");
    }
}
