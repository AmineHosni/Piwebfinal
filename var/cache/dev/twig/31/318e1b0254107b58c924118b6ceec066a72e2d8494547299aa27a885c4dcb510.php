<?php

/* MainBundle:Default:CouponAutoriser.html.twig */
class __TwigTemplate_df7cac9d031392c7d56b18293284aaa221a187f638a22b86b235636b114d8f3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base1.html.twig", "MainBundle:Default:CouponAutoriser.html.twig", 1);
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
        $__internal_f6b47179799c3c82a649f892a3b006e670ca1e6dd5c2e939d95630a76ba03242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b47179799c3c82a649f892a3b006e670ca1e6dd5c2e939d95630a76ba03242->enter($__internal_f6b47179799c3c82a649f892a3b006e670ca1e6dd5c2e939d95630a76ba03242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:CouponAutoriser.html.twig"));

        $__internal_9f7bdf7e72db867f1d31ba7cb2625b7c33731da03277e5d3ef8b080535f213af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7bdf7e72db867f1d31ba7cb2625b7c33731da03277e5d3ef8b080535f213af->enter($__internal_9f7bdf7e72db867f1d31ba7cb2625b7c33731da03277e5d3ef8b080535f213af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:CouponAutoriser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6b47179799c3c82a649f892a3b006e670ca1e6dd5c2e939d95630a76ba03242->leave($__internal_f6b47179799c3c82a649f892a3b006e670ca1e6dd5c2e939d95630a76ba03242_prof);

        
        $__internal_9f7bdf7e72db867f1d31ba7cb2625b7c33731da03277e5d3ef8b080535f213af->leave($__internal_9f7bdf7e72db867f1d31ba7cb2625b7c33731da03277e5d3ef8b080535f213af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7bb0784d6948eee42a4d8b4ab6dd8df91d5cde7c6dd43eacc7254ca534244c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7bb0784d6948eee42a4d8b4ab6dd8df91d5cde7c6dd43eacc7254ca534244c6->enter($__internal_e7bb0784d6948eee42a4d8b4ab6dd8df91d5cde7c6dd43eacc7254ca534244c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68469ea98eac9ce84d3a140035324097d2697eb60728558e80b2d6874390857f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68469ea98eac9ce84d3a140035324097d2697eb60728558e80b2d6874390857f->enter($__internal_68469ea98eac9ce84d3a140035324097d2697eb60728558e80b2d6874390857f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <div class=\"box\">
            <div class=\"box-header\">
              <h3 class=\"box-title\">Liste Utilisateurs</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
              <table id=\"example1\" class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>Nom Utilisateur</th>
                  <th>Statut</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 30
            echo "                <tr>
                 <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "username", array()), "html", null, true);
            echo "</td>
                 ";
            // line 32
            if (($this->getAttribute($context["modele"], "statutcoupon", array()) == 1)) {
                // line 33
                echo "                  <td>Autoriser</td>
                  <td><a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_refuser", array("id" => $this->getAttribute($context["modele"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Refuser</a></td></input></td>

                  ";
            } else {
                // line 37
                echo "                       <td>Non Autoriser</td>
                  <td><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_accepter", array("id" => $this->getAttribute($context["modele"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info\">Autoriser </a></td></input></td>
                 

                 ";
            }
            // line 42
            echo "                  
                </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo " 
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


            ";
        
        $__internal_68469ea98eac9ce84d3a140035324097d2697eb60728558e80b2d6874390857f->leave($__internal_68469ea98eac9ce84d3a140035324097d2697eb60728558e80b2d6874390857f_prof);

        
        $__internal_e7bb0784d6948eee42a4d8b4ab6dd8df91d5cde7c6dd43eacc7254ca534244c6->leave($__internal_e7bb0784d6948eee42a4d8b4ab6dd8df91d5cde7c6dd43eacc7254ca534244c6_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Default:CouponAutoriser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 44,  108 => 42,  101 => 38,  98 => 37,  92 => 34,  89 => 33,  87 => 32,  83 => 31,  80 => 30,  76 => 29,  49 => 4,  40 => 3,  11 => 1,);
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
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <div class=\"box\">
            <div class=\"box-header\">
              <h3 class=\"box-title\">Liste Utilisateurs</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
              <table id=\"example1\" class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th>Nom Utilisateur</th>
                  <th>Statut</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 {% for modele in modeles %}
                <tr>
                 <td>{{modele.username}}</td>
                 {% if modele.statutcoupon == 1 %}
                  <td>Autoriser</td>
                  <td><a href=\"{{path('coupon_refuser', {'id':modele.id})}}\" class=\"btn btn-danger\">Refuser</a></td></input></td>

                  {% else %}
                       <td>Non Autoriser</td>
                  <td><a href=\"{{path('coupon_accepter', {'id':modele.id})}}\" class=\"btn btn-info\">Autoriser </a></td></input></td>
                 

                 {% endif %}
                  
                </tr>
                  {% endfor %} 
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


            {% endblock %}
  ", "MainBundle:Default:CouponAutoriser.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\src\\MainBundle/Resources/views/Default/CouponAutoriser.html.twig");
    }
}
