<?php

/* :Magasin:addcontent.html.twig */
class __TwigTemplate_b9e82d396a1f19f9ab58f411e7920a5e4794ee13c224be29116eca37e271fd14 extends Twig_Template
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
        $__internal_412681b3ec03e3814af2ddb6e0bc4ba7d1120e69a4f7ff8211bd9cdabd805edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_412681b3ec03e3814af2ddb6e0bc4ba7d1120e69a4f7ff8211bd9cdabd805edc->enter($__internal_412681b3ec03e3814af2ddb6e0bc4ba7d1120e69a4f7ff8211bd9cdabd805edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Magasin:addcontent.html.twig"));

        $__internal_4e6b3d2a7b471398f8039e4ebdc25401df3498807a1d699dcfe22c8047b01a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e6b3d2a7b471398f8039e4ebdc25401df3498807a1d699dcfe22c8047b01a6a->enter($__internal_4e6b3d2a7b471398f8039e4ebdc25401df3498807a1d699dcfe22c8047b01a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Magasin:addcontent.html.twig"));

        // line 1
        echo "










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
                            <th></th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Etat</th>

                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 34
            echo "                            <tr>
                            <td>
                                <select name=\"mag[]\"  id=\"hi\"class=\"js-categorie form-control\">
                                    <option  value=NULL>nothing</option>

                                    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["magasins"]) ? $context["magasins"] : $this->getContext($context, "magasins")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 40
                echo "



                                        <option  value=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "name", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                                </select></td>
                            <input type=\"hidden\" name=\"products[]\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">
                            <td >";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelle", array()), "html", null, true);
            echo "</td>
                        ";
            // line 49
            if ((null === $this->getAttribute($context["p"], "magasin", array()))) {
                echo "<td> <span  >produit libre</span>  </td>
                                ";
            } else {
                // line 51
                echo "                                <td> <span  >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "magasin", array()), "nom", array()), "html", null, true);
                echo "</span>  </td>
                                ";
            }
            // line 53
            echo "
                                </td>

                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div></section>


















";
        
        $__internal_412681b3ec03e3814af2ddb6e0bc4ba7d1120e69a4f7ff8211bd9cdabd805edc->leave($__internal_412681b3ec03e3814af2ddb6e0bc4ba7d1120e69a4f7ff8211bd9cdabd805edc_prof);

        
        $__internal_4e6b3d2a7b471398f8039e4ebdc25401df3498807a1d699dcfe22c8047b01a6a->leave($__internal_4e6b3d2a7b471398f8039e4ebdc25401df3498807a1d699dcfe22c8047b01a6a_prof);

    }

    public function getTemplateName()
    {
        return ":Magasin:addcontent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 58,  112 => 53,  106 => 51,  101 => 49,  97 => 48,  93 => 47,  90 => 46,  80 => 44,  74 => 40,  70 => 39,  63 => 34,  59 => 33,  25 => 1,);
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
                            <th></th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Etat</th>

                        </tr>
                        </thead>
                        <tbody>
                        {% for p in products %}
                            <tr>
                            <td>
                                <select name=\"mag[]\"  id=\"hi\"class=\"js-categorie form-control\">
                                    <option  value=NULL>nothing</option>

                                    {% for m in magasins %}




                                        <option  value=\"{{m.id}}\">{{m.name}}</option>
                                    {% endfor %}
                                </select></td>
                            <input type=\"hidden\" name=\"products[]\" value=\"{{ p.id }}\">
                            <td >{{ p.libelle }}</td>
                        {% if  p.magasin is  null %}<td> <span  >produit libre</span>  </td>
                                {%  else  %}
                                <td> <span  >{{ p.magasin.nom }}</span>  </td>
                                {% endif %}

                                </td>

                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div></section>


















", ":Magasin:addcontent.html.twig", "C:\\wamp64\\www\\test\\app/Resources\\views/Magasin/addcontent.html.twig");
    }
}
