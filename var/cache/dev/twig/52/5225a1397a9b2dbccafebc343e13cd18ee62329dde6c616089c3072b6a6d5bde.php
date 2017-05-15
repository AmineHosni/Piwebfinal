<?php

/* product/index.html.twig */
class __TwigTemplate_3fd8ad01177d7dc93657703c7adfbdae4326bf90c838e5315b19bc1d94601790 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "product/index.html.twig", 1);
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
        $__internal_74160ef3e7e5a305095d380e95011e60af7d19974f03e7eacbeec2417602634e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74160ef3e7e5a305095d380e95011e60af7d19974f03e7eacbeec2417602634e->enter($__internal_74160ef3e7e5a305095d380e95011e60af7d19974f03e7eacbeec2417602634e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_9c7d76fbfe4347b5ef526f3133ff8eb6be4efe8ff5106af9d9499bf30155b14c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7d76fbfe4347b5ef526f3133ff8eb6be4efe8ff5106af9d9499bf30155b14c->enter($__internal_9c7d76fbfe4347b5ef526f3133ff8eb6be4efe8ff5106af9d9499bf30155b14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74160ef3e7e5a305095d380e95011e60af7d19974f03e7eacbeec2417602634e->leave($__internal_74160ef3e7e5a305095d380e95011e60af7d19974f03e7eacbeec2417602634e_prof);

        
        $__internal_9c7d76fbfe4347b5ef526f3133ff8eb6be4efe8ff5106af9d9499bf30155b14c->leave($__internal_9c7d76fbfe4347b5ef526f3133ff8eb6be4efe8ff5106af9d9499bf30155b14c_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_f4661b5b5a9077beca66592e89313ea39fc6f106b175fa10c8c8ad185733b6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4661b5b5a9077beca66592e89313ea39fc6f106b175fa10c8c8ad185733b6e0->enter($__internal_f4661b5b5a9077beca66592e89313ea39fc6f106b175fa10c8c8ad185733b6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d7909bfc35f6d6b9f0e16ce87aef75cf18515695c7ba2587538efcbdb243df47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7909bfc35f6d6b9f0e16ce87aef75cf18515695c7ba2587538efcbdb243df47->enter($__internal_d7909bfc35f6d6b9f0e16ce87aef75cf18515695c7ba2587538efcbdb243df47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "<div class=\"container main-container\">

    <br><br>
    <br>
    <br>

    <h3><span class=\"glyphicon glyphicon-list-alt\"></span>  mes produits  </h3> <br>


    <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href= \"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_new");
        echo "\"><span class=\"fa add-fav\"> </span>ajouter une produit </a>

    </br>
    </br>
    <div class=\"col-lg-12\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
                <thead>
                <tr>

                    <th>Nom</th>
                    <th>description</th>
                    <th>prix</th>

                    <th>promotion </th>
                    <th>etat</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 36
            echo "                    <tr>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "libelle", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "prixProduit", array()), "html", null, true);
            echo "</td>

                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "etat", array()), "html", null, true);
            echo "</td>

                        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pourcentagePromotion", array()), "html", null, true);
            echo "</td>

                        </td>
                        <td >
                            <div >


                                <a class=\"btn btn-primary btn-sm\" data-toggle=\"tooltip\"  title=\"afficher\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                                <a class=\"btn btn-danger btn-sm\" data-toggle=\"tooltip\"  title=\"modifier\" href= \"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_edit", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>

                                <a class=\"btn btn-danger btn-sm\" data-toggle=\"tooltip\"  title=\"jouter\" href= \"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_delete", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-plus\"></span></a>



                            </div>
                        </td>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </tbody>
            </table>
    </div>
    </div>
</div>


";
        
        $__internal_d7909bfc35f6d6b9f0e16ce87aef75cf18515695c7ba2587538efcbdb243df47->leave($__internal_d7909bfc35f6d6b9f0e16ce87aef75cf18515695c7ba2587538efcbdb243df47_prof);

        
        $__internal_f4661b5b5a9077beca66592e89313ea39fc6f106b175fa10c8c8ad185733b6e0->leave($__internal_f4661b5b5a9077beca66592e89313ea39fc6f106b175fa10c8c8ad185733b6e0_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 62,  128 => 53,  123 => 51,  119 => 50,  109 => 43,  104 => 41,  99 => 39,  95 => 38,  91 => 37,  88 => 36,  84 => 35,  60 => 14,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MainBundle:eshop:main.html.twig' %}


{% block content %}
<div class=\"container main-container\">

    <br><br>
    <br>
    <br>

    <h3><span class=\"glyphicon glyphicon-list-alt\"></span>  mes produits  </h3> <br>


    <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href= \"{{ path('product_new')}}\"><span class=\"fa add-fav\"> </span>ajouter une produit </a>

    </br>
    </br>
    <div class=\"col-lg-12\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
                <thead>
                <tr>

                    <th>Nom</th>
                    <th>description</th>
                    <th>prix</th>

                    <th>promotion </th>
                    <th>etat</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                {% for product in products %}
                    <tr>
                        <td>{{  product.libelle }}</td>
                        <td>{{  product.description }}</td>
                        <td>{{  product.prixProduit }}</td>

                        <td>{{  product.etat }}</td>

                        <td>{{  product.pourcentagePromotion }}</td>

                        </td>
                        <td >
                            <div >


                                <a class=\"btn btn-primary btn-sm\" data-toggle=\"tooltip\"  title=\"afficher\" href=\"{{ path('product_show', { 'id': product.id}) }}\"><span class=\"glyphicon glyphicon-search\"></span></a>
                                <a class=\"btn btn-danger btn-sm\" data-toggle=\"tooltip\"  title=\"modifier\" href= \"{{ path('product_edit', { 'id': product.id}) }}\"><span class=\"glyphicon glyphicon-edit\"></span></a>

                                <a class=\"btn btn-danger btn-sm\" data-toggle=\"tooltip\"  title=\"jouter\" href= \"{{ path('product_delete',{'id': product.id })}}\"><span class=\"glyphicon glyphicon-plus\"></span></a>



                            </div>
                        </td>
                    </tr>

                {% endfor %}
                </tbody>
            </table>
    </div>
    </div>
</div>


{% endblock %}
", "product/index.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\product\\index.html.twig");
    }
}
