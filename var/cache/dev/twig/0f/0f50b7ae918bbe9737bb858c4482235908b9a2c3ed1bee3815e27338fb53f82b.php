<?php

/* venteflash/index.html.twig */
class __TwigTemplate_fcfcfbc5bec5c73d8224052008b8c96b52dcc909b5072881e13cdcd3054b3ed9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "venteflash/index.html.twig", 1);
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
        $__internal_eb82c3c70e7062c0e85083aedb7ca3b2992a0a112055888ed54e3b95f4d29428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb82c3c70e7062c0e85083aedb7ca3b2992a0a112055888ed54e3b95f4d29428->enter($__internal_eb82c3c70e7062c0e85083aedb7ca3b2992a0a112055888ed54e3b95f4d29428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venteflash/index.html.twig"));

        $__internal_e5f7f01882ddcb702e121ecdbb9ee5a1723bad78314f05cf213df72e6b44e6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f7f01882ddcb702e121ecdbb9ee5a1723bad78314f05cf213df72e6b44e6ed->enter($__internal_e5f7f01882ddcb702e121ecdbb9ee5a1723bad78314f05cf213df72e6b44e6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venteflash/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb82c3c70e7062c0e85083aedb7ca3b2992a0a112055888ed54e3b95f4d29428->leave($__internal_eb82c3c70e7062c0e85083aedb7ca3b2992a0a112055888ed54e3b95f4d29428_prof);

        
        $__internal_e5f7f01882ddcb702e121ecdbb9ee5a1723bad78314f05cf213df72e6b44e6ed->leave($__internal_e5f7f01882ddcb702e121ecdbb9ee5a1723bad78314f05cf213df72e6b44e6ed_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_b0e0e6de4f4cb18d57360aceaf8e2388710cc5b9f254153ef688a1ea87a63e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e0e6de4f4cb18d57360aceaf8e2388710cc5b9f254153ef688a1ea87a63e30->enter($__internal_b0e0e6de4f4cb18d57360aceaf8e2388710cc5b9f254153ef688a1ea87a63e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2359271c9936f36dfcee2e443dbb9b1da8c8eeb88dc57b80ee7a13b9a8fe53cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2359271c9936f36dfcee2e443dbb9b1da8c8eeb88dc57b80ee7a13b9a8fe53cd->enter($__internal_2359271c9936f36dfcee2e443dbb9b1da8c8eeb88dc57b80ee7a13b9a8fe53cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "<div class=\"container main-container\">
 <br>
    <br>

    <h3><span class=\"glyphicon glyphicon-list-alt\"></span>  mes ventes flashes  </h3> <br>


    <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href= \"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("venteflash_new");
        echo "\"><span class=\"fa add-fav\"> </span>ajouter une vente flash </a>

    </br>
    </br>
    <div class=\"col-lg-12\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
                <thead>
                <tr>

                    <th>Nom</th>
                    <th>image</th>
                    <th>description</th>
                    <th>theme</th>

                    <th>date debut</th>
                    <th>date fin </th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["venteFlashes"]) ? $context["venteFlashes"] : $this->getContext($context, "venteFlashes")));
        foreach ($context['_seq'] as $context["_key"] => $context["venteflash"]) {
            // line 34
            echo "                    <tr>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["venteflash"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["venteflash"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo $this->getAttribute($context["venteflash"], "description", array());
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["venteflash"], "theme", array()), "html", null, true);
            echo "</td>


                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["venteflash"], "datedebut", array())), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["venteflash"], "finish", array())), "html", null, true);
            echo "</td>

                        </td>
                        <td >
                            <div >


                                <a class=\"btn btn-primary btn-sm\" data-toggle=\"tooltip\"  title=\"afficher\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("venteflash_show", array("id" => $this->getAttribute($context["venteflash"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                                 <a class=\"btn btn-danger btn-sm\" data-toggle=\"tooltip\"  title=\"modifier\" href= \"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("venteflash_edit", array("id" => $this->getAttribute($context["venteflash"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>

                                 <a class=\"btn btn-danger btn-sm\" data-toggle=\"tooltip\"  title=\"jouter\" href= \"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("venteflash_index1", array("id" => $this->getAttribute($context["venteflash"], "id", array()), "operation" => 1)), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-plus\"></span></a>
                                 <a class=\"btn btn-danger btn-sm\" data-toggle=\"tooltip\"  title=\"supprimer\" href= \"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("venteflash_index1", array("id" => $this->getAttribute($context["venteflash"], "id", array()), "operation" => 0)), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-minus\"></span></a>



                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venteflash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </tbody>
            </table>
        </div>
    </div></div>
";
        
        $__internal_2359271c9936f36dfcee2e443dbb9b1da8c8eeb88dc57b80ee7a13b9a8fe53cd->leave($__internal_2359271c9936f36dfcee2e443dbb9b1da8c8eeb88dc57b80ee7a13b9a8fe53cd_prof);

        
        $__internal_b0e0e6de4f4cb18d57360aceaf8e2388710cc5b9f254153ef688a1ea87a63e30->leave($__internal_b0e0e6de4f4cb18d57360aceaf8e2388710cc5b9f254153ef688a1ea87a63e30_prof);

    }

    public function getTemplateName()
    {
        return "venteflash/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 61,  134 => 53,  130 => 52,  125 => 50,  121 => 49,  111 => 42,  107 => 41,  101 => 38,  97 => 37,  93 => 36,  89 => 35,  86 => 34,  82 => 33,  58 => 12,  49 => 5,  40 => 4,  11 => 1,);
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
 <br>
    <br>

    <h3><span class=\"glyphicon glyphicon-list-alt\"></span>  mes ventes flashes  </h3> <br>


    <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href= \"{{ path('venteflash_new')}}\"><span class=\"fa add-fav\"> </span>ajouter une vente flash </a>

    </br>
    </br>
    <div class=\"col-lg-12\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
                <thead>
                <tr>

                    <th>Nom</th>
                    <th>image</th>
                    <th>description</th>
                    <th>theme</th>

                    <th>date debut</th>
                    <th>date fin </th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for venteflash in venteFlashes %}
                    <tr>
                        <td>{{  venteflash.nom }}</td>
                        <td>{{  venteflash.nom }}</td>
                        <td>{{  venteflash.description|raw }}</td>
                        <td>{{  venteflash.theme }}</td>


                        <td>{{  venteflash.datedebut | date }}</td>
                        <td>{{  venteflash.finish | date }}</td>

                        </td>
                        <td >
                            <div >


                                <a class=\"btn btn-primary btn-sm\" data-toggle=\"tooltip\"  title=\"afficher\" href=\"{{ path('venteflash_show', { 'id': venteflash.id}) }}\"><span class=\"glyphicon glyphicon-search\"></span></a>
                                 <a class=\"btn btn-danger btn-sm\" data-toggle=\"tooltip\"  title=\"modifier\" href= \"{{ path('venteflash_edit', { 'id': venteflash.id}) }}\"><span class=\"glyphicon glyphicon-edit\"></span></a>

                                 <a class=\"btn btn-danger btn-sm\" data-toggle=\"tooltip\"  title=\"jouter\" href= \"{{ path('venteflash_index1',{'id': venteflash.id, 'operation':1}) }}\"><span class=\"glyphicon glyphicon-plus\"></span></a>
                                 <a class=\"btn btn-danger btn-sm\" data-toggle=\"tooltip\"  title=\"supprimer\" href= \"{{ path('venteflash_index1', { 'id': venteflash.id , 'operation': 0}) }}\"><span class=\"glyphicon glyphicon-minus\"></span></a>



                            </div>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div></div>
{% endblock %}

", "venteflash/index.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\venteflash\\index.html.twig");
    }
}
