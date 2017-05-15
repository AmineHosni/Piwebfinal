<?php

/* :coupon:index.html.twig */
class __TwigTemplate_73bee8355a6d1218bd0e3074f3882b1a3b8ca156544602abce91b13c6351a99d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52fe80a3253ed6a3037f574ac5ebb588cd2ed205f42dd9ede694dcc307a2d102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52fe80a3253ed6a3037f574ac5ebb588cd2ed205f42dd9ede694dcc307a2d102->enter($__internal_52fe80a3253ed6a3037f574ac5ebb588cd2ed205f42dd9ede694dcc307a2d102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":coupon:index.html.twig"));

        $__internal_6e76637b19330238f1bae882e47f35f5f29392239ea72cdb58cd260764390572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e76637b19330238f1bae882e47f35f5f29392239ea72cdb58cd260764390572->enter($__internal_6e76637b19330238f1bae882e47f35f5f29392239ea72cdb58cd260764390572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":coupon:index.html.twig"));

        // line 1
        echo "

<div class=\"container main-container headerOffset\">
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_homepage");
        echo "\">Home</a></li>
                <li><a href=\"account.html\">Mes Coupons</a></li>
            </ul>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7\">
            <h1 class=\"section-title-inner\"><span><i></i> Liste des Coupons </span></h1>
<div class=\"col-lg-12 clearfix\">
                    <ul class=\"pager\">
                        <li class=\"previous pull-right\"> <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_new");
        echo "\">Créer un nouveau coupon</a>
                        </li>
                        <li class=\"next pull-left\"><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_homepage");
        echo "\"> &larr; Retour a l'accueil</a></li>
                    </ul>
                </div>
            <div class=\"row userInfo\">
                
            <div class=\"box\">
            <div class=\"box-header\">
            </div>
            <!-- /.box-header -->
           <div class=\"col-sm-12\"><table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr role=\"row\"><th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Rendering engine: activate to sort column descending\" aria-sort=\"ascending\" style=\"width: 181px;\">Titre</th><th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Browser: activate to sort column ascending\" style=\"width: 224px;\">Taux Rededuction</th>  <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Engine version: activate to sort column ascending\" style=\"width: 154px;\">Quantité</th><th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"CSS grade: activate to sort column ascending\" style=\"width: 112px;\">Image</th><th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"CSS grade: activate to sort column ascending\" style=\"width: 112px;\">Action</th></tr>
                </thead>
                <tbody>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coupons"]) ? $context["coupons"] : $this->getContext($context, "coupons")));
        foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
            // line 34
            echo "            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "tauxreduction", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "Qte", array()), "html", null, true);
            echo "</td>


                <td><img src=\"";
            // line 40
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute($context["coupon"], "imageName", array())), "html", null, true);
            echo "\"  class=\"img-responsive\"/></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_show", array("id" => $this->getAttribute($context["coupon"], "Id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\">Voir</a>
                        </li>
                        <br/>
                        <li>
                            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_edit", array("id" => $this->getAttribute($context["coupon"], "Id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
               
              </table></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>

  

   
     
            </div>
            <!--/row end-->

        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-5\">
            
        </div>
    </div></div>
    <!--/row-->

    <div style=\"clear:both\"></div>


";
        
        $__internal_52fe80a3253ed6a3037f574ac5ebb588cd2ed205f42dd9ede694dcc307a2d102->leave($__internal_52fe80a3253ed6a3037f574ac5ebb588cd2ed205f42dd9ede694dcc307a2d102_prof);

        
        $__internal_6e76637b19330238f1bae882e47f35f5f29392239ea72cdb58cd260764390572->leave($__internal_6e76637b19330238f1bae882e47f35f5f29392239ea72cdb58cd260764390572_prof);

    }

    public function getTemplateName()
    {
        return ":coupon:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 54,  103 => 48,  96 => 44,  89 => 40,  83 => 37,  79 => 36,  75 => 35,  72 => 34,  68 => 33,  51 => 19,  46 => 17,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<div class=\"container main-container headerOffset\">
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"{{path('main_homepage')}}\">Home</a></li>
                <li><a href=\"account.html\">Mes Coupons</a></li>
            </ul>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7\">
            <h1 class=\"section-title-inner\"><span><i></i> Liste des Coupons </span></h1>
<div class=\"col-lg-12 clearfix\">
                    <ul class=\"pager\">
                        <li class=\"previous pull-right\"> <a href=\"{{ path('coupon_new') }}\">Créer un nouveau coupon</a>
                        </li>
                        <li class=\"next pull-left\"><a href=\"{{path('main_homepage')}}\"> &larr; Retour a l'accueil</a></li>
                    </ul>
                </div>
            <div class=\"row userInfo\">
                
            <div class=\"box\">
            <div class=\"box-header\">
            </div>
            <!-- /.box-header -->
           <div class=\"col-sm-12\"><table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr role=\"row\"><th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Rendering engine: activate to sort column descending\" aria-sort=\"ascending\" style=\"width: 181px;\">Titre</th><th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Browser: activate to sort column ascending\" style=\"width: 224px;\">Taux Rededuction</th>  <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Engine version: activate to sort column ascending\" style=\"width: 154px;\">Quantité</th><th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"CSS grade: activate to sort column ascending\" style=\"width: 112px;\">Image</th><th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"CSS grade: activate to sort column ascending\" style=\"width: 112px;\">Action</th></tr>
                </thead>
                <tbody>
        {% for coupon in coupons %}
            <tr>
                <td>{{ coupon.titre }}</td>
                <td>{{ coupon.tauxreduction }}</td>
                <td>{{ coupon.Qte }}</td>


                <td><img src=\"{{ asset('bundles/images/')~ coupon.imageName }}\"  class=\"img-responsive\"/></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('coupon_show', { 'id': coupon.Id }) }}\" class=\"btn btn-info\">Voir</a>
                        </li>
                        <br/>
                        <li>
                            <a href=\"{{ path('coupon_edit', { 'id': coupon.Id }) }}\" class=\"btn btn-warning\">Modifier</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
               
              </table></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>

  

   
     
            </div>
            <!--/row end-->

        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-5\">
            
        </div>
    </div></div>
    <!--/row-->

    <div style=\"clear:both\"></div>


", ":coupon:index.html.twig", "C:\\wamp64\\www\\test\\app/Resources\\views/coupon/index.html.twig");
    }
}
