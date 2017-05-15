<?php

/* categorie/index.html.twig */
class __TwigTemplate_de336543e5c2fd63507bc62724f1ad545e8da020cab0d036dca763f8b9900ff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base1.html.twig", "categorie/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9eeac8916cd73e03ce3adaa9ccc7bc512ffff030722d2c00ff9a96085767f727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eeac8916cd73e03ce3adaa9ccc7bc512ffff030722d2c00ff9a96085767f727->enter($__internal_9eeac8916cd73e03ce3adaa9ccc7bc512ffff030722d2c00ff9a96085767f727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $__internal_ea80152fccc583bfcc51c3549b352071a17cebbc004265ab8b3df4dbfac1ddd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea80152fccc583bfcc51c3549b352071a17cebbc004265ab8b3df4dbfac1ddd2->enter($__internal_ea80152fccc583bfcc51c3549b352071a17cebbc004265ab8b3df4dbfac1ddd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9eeac8916cd73e03ce3adaa9ccc7bc512ffff030722d2c00ff9a96085767f727->leave($__internal_9eeac8916cd73e03ce3adaa9ccc7bc512ffff030722d2c00ff9a96085767f727_prof);

        
        $__internal_ea80152fccc583bfcc51c3549b352071a17cebbc004265ab8b3df4dbfac1ddd2->leave($__internal_ea80152fccc583bfcc51c3549b352071a17cebbc004265ab8b3df4dbfac1ddd2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_881f50162030fcf6b1d561075efda7be19578dac541c404352f313a97cb0c42b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_881f50162030fcf6b1d561075efda7be19578dac541c404352f313a97cb0c42b->enter($__internal_881f50162030fcf6b1d561075efda7be19578dac541c404352f313a97cb0c42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ecea246d429953c5036d9d7f89bb4cf5fe94f2738041b1529cc45c778dd3456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ecea246d429953c5036d9d7f89bb4cf5fe94f2738041b1529cc45c778dd3456->enter($__internal_9ecea246d429953c5036d9d7f89bb4cf5fe94f2738041b1529cc45c778dd3456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
      <!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">

          <div class=\"row\">

          </div>
          <div class=\"row\">
              <section class=\"col-xs-12\">
                  <div class=\"box\">
                      <div class=\"box-header\">
                          <h3 class=\"box-title\">Liste categories</h3>
                      </div>
                      <div class=\"row\">

                      <div class=\"col-lg-12\">
                          <a type=\"button\" class=\"btn btn-success btn-sm\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_new");
        echo "\">Ajouter une Categorie</a>
                      </div>                      </div>
<br><br>
                      <div class=\"row\">
                          <div class=\"col-lg-12\">
                              <div class=\"table-responsive\">
                                  <table class=\"table table-bordered table-hover\">
                                      <thead>
                                      <tr>
                                          <th>Id</th>
                                          <th>Nom</th>
                                          <th>Actions</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "                                          <tr>
                                              <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                                              <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                                              <td class=\"hidden-print\">
                                                  <div class=\"text-center\">
                                                      <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                                                      <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                                                  </div>
                                              </td>
                                          </tr>
                                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div> </div></section>
              <!-- /.content -->
          </div>
      </div>


  ";
        
        $__internal_9ecea246d429953c5036d9d7f89bb4cf5fe94f2738041b1529cc45c778dd3456->leave($__internal_9ecea246d429953c5036d9d7f89bb4cf5fe94f2738041b1529cc45c778dd3456_prof);

        
        $__internal_881f50162030fcf6b1d561075efda7be19578dac541c404352f313a97cb0c42b->leave($__internal_881f50162030fcf6b1d561075efda7be19578dac541c404352f313a97cb0c42b_prof);

    }

    public function getTemplateName()
    {
        return "categorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 47,  108 => 42,  104 => 41,  98 => 38,  92 => 37,  89 => 36,  85 => 35,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base1.html.twig' %}

  {% block body %}

      <!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">

          <div class=\"row\">

          </div>
          <div class=\"row\">
              <section class=\"col-xs-12\">
                  <div class=\"box\">
                      <div class=\"box-header\">
                          <h3 class=\"box-title\">Liste categories</h3>
                      </div>
                      <div class=\"row\">

                      <div class=\"col-lg-12\">
                          <a type=\"button\" class=\"btn btn-success btn-sm\" href=\"{{ path('categorie_new') }}\">Ajouter une Categorie</a>
                      </div>                      </div>
<br><br>
                      <div class=\"row\">
                          <div class=\"col-lg-12\">
                              <div class=\"table-responsive\">
                                  <table class=\"table table-bordered table-hover\">
                                      <thead>
                                      <tr>
                                          <th>Id</th>
                                          <th>Nom</th>
                                          <th>Actions</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      {% for entity in categories %}
                                          <tr>
                                              <td><a href=\"{{ path('categorie_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                                              <td>{{ entity.nom }}</td>
                                              <td class=\"hidden-print\">
                                                  <div class=\"text-center\">
                                                      <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"{{ path('categorie_show', { 'id': entity.id }) }}\"><span class=\"glyphicon glyphicon-search\"></span></a>
                                                      <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"{{ path('categorie_edit', { 'id': entity.id }) }}\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                                                  </div>
                                              </td>
                                          </tr>
                                      {% endfor %}
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div> </div></section>
              <!-- /.content -->
          </div>
      </div>


  {% endblock %}
", "categorie/index.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\Categorie\\index.html.twig");
    }
}
