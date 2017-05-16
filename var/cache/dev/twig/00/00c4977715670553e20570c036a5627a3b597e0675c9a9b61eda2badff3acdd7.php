<?php

/* coupon/index.html.twig */
class __TwigTemplate_8d57daa976503d0f5a010515ea1fe021b9b9eeee9154bb3aadedd648d421bfb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "coupon/index.html.twig", 2);
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
        $__internal_cdd711f45bdbc6c1822b781c242840dda22e1c533a4c54473a4feea7e14142b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd711f45bdbc6c1822b781c242840dda22e1c533a4c54473a4feea7e14142b0->enter($__internal_cdd711f45bdbc6c1822b781c242840dda22e1c533a4c54473a4feea7e14142b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coupon/index.html.twig"));

        $__internal_fc71dddb863a36ec1ee9a8cbf0f4906fc8905179d48d05160879b47bb2744344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc71dddb863a36ec1ee9a8cbf0f4906fc8905179d48d05160879b47bb2744344->enter($__internal_fc71dddb863a36ec1ee9a8cbf0f4906fc8905179d48d05160879b47bb2744344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coupon/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdd711f45bdbc6c1822b781c242840dda22e1c533a4c54473a4feea7e14142b0->leave($__internal_cdd711f45bdbc6c1822b781c242840dda22e1c533a4c54473a4feea7e14142b0_prof);

        
        $__internal_fc71dddb863a36ec1ee9a8cbf0f4906fc8905179d48d05160879b47bb2744344->leave($__internal_fc71dddb863a36ec1ee9a8cbf0f4906fc8905179d48d05160879b47bb2744344_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_d84046d0206915fc7aab99683b6920f6fda256e70e256135b89a8a51452b0cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84046d0206915fc7aab99683b6920f6fda256e70e256135b89a8a51452b0cea->enter($__internal_d84046d0206915fc7aab99683b6920f6fda256e70e256135b89a8a51452b0cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5c1fa675336d1593c15455211402c67625f906e124703f81195d8ca185ebe6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c1fa675336d1593c15455211402c67625f906e124703f81195d8ca185ebe6cd->enter($__internal_5c1fa675336d1593c15455211402c67625f906e124703f81195d8ca185ebe6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "<div class=\"container main-container headerOffset\">
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"";
        // line 9
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
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_new");
        echo "\">Créer un nouveau coupon</a>
                        </li>
                        <li class=\"next pull-left\"><a href=\"";
        // line 21
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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coupons"]) ? $context["coupons"] : $this->getContext($context, "coupons")));
        foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
            // line 36
            echo "            <tr>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "tauxreduction", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "Qte", array()), "html", null, true);
            echo "</td>


                <td><img src=\"";
            // line 42
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute($context["coupon"], "imageName", array())), "html", null, true);
            echo "\"  class=\"img-responsive\"/></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_show", array("id" => $this->getAttribute($context["coupon"], "Id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\">Voir</a>
                        </li>
                        <br/>
                        <li>
                            <a href=\"";
            // line 50
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
        // line 56
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
        
        $__internal_5c1fa675336d1593c15455211402c67625f906e124703f81195d8ca185ebe6cd->leave($__internal_5c1fa675336d1593c15455211402c67625f906e124703f81195d8ca185ebe6cd_prof);

        
        $__internal_d84046d0206915fc7aab99683b6920f6fda256e70e256135b89a8a51452b0cea->leave($__internal_d84046d0206915fc7aab99683b6920f6fda256e70e256135b89a8a51452b0cea_prof);

    }

    public function getTemplateName()
    {
        return "coupon/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 56,  125 => 50,  118 => 46,  111 => 42,  105 => 39,  101 => 38,  97 => 37,  94 => 36,  90 => 35,  73 => 21,  68 => 19,  55 => 9,  49 => 5,  40 => 4,  11 => 2,);
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
{% extends \"MainBundle:eshop:main.html.twig\" %}

{% block content %}
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

{% endblock %}

", "coupon/index.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\app\\Resources\\views\\coupon\\index.html.twig");
    }
}
