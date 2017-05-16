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
        $__internal_eef38cd8b50da41d68d700fe59d1a2cbd742442cde48aa163504ddc19ef16325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef38cd8b50da41d68d700fe59d1a2cbd742442cde48aa163504ddc19ef16325->enter($__internal_eef38cd8b50da41d68d700fe59d1a2cbd742442cde48aa163504ddc19ef16325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $__internal_3c6921199fac59e47bbabff36ae155f979d975335c3ae742e147b42f72a9f2e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6921199fac59e47bbabff36ae155f979d975335c3ae742e147b42f72a9f2e8->enter($__internal_3c6921199fac59e47bbabff36ae155f979d975335c3ae742e147b42f72a9f2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eef38cd8b50da41d68d700fe59d1a2cbd742442cde48aa163504ddc19ef16325->leave($__internal_eef38cd8b50da41d68d700fe59d1a2cbd742442cde48aa163504ddc19ef16325_prof);

        
        $__internal_3c6921199fac59e47bbabff36ae155f979d975335c3ae742e147b42f72a9f2e8->leave($__internal_3c6921199fac59e47bbabff36ae155f979d975335c3ae742e147b42f72a9f2e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f6e783a3a8856d976e4b11f505df28c43a9da6ebbeffec5031393fdc0e3ccb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f6e783a3a8856d976e4b11f505df28c43a9da6ebbeffec5031393fdc0e3ccb7->enter($__internal_1f6e783a3a8856d976e4b11f505df28c43a9da6ebbeffec5031393fdc0e3ccb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b5cfb185f15b40c096b2f3fcf4ca4325bb8af298bb110ef708437ff7e5c4455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5cfb185f15b40c096b2f3fcf4ca4325bb8af298bb110ef708437ff7e5c4455->enter($__internal_5b5cfb185f15b40c096b2f3fcf4ca4325bb8af298bb110ef708437ff7e5c4455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5b5cfb185f15b40c096b2f3fcf4ca4325bb8af298bb110ef708437ff7e5c4455->leave($__internal_5b5cfb185f15b40c096b2f3fcf4ca4325bb8af298bb110ef708437ff7e5c4455_prof);

        
        $__internal_1f6e783a3a8856d976e4b11f505df28c43a9da6ebbeffec5031393fdc0e3ccb7->leave($__internal_1f6e783a3a8856d976e4b11f505df28c43a9da6ebbeffec5031393fdc0e3ccb7_prof);

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
", "categorie/index.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\app\\Resources\\views\\Categorie\\index.html.twig");
    }
}
