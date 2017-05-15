<?php

/* product/adminContent.html.twig */
class __TwigTemplate_44fd2cbe9acb9dbd028b0db0954e7bfc6acb0df4c2a9b54552ff6d8a06cf28bd extends Twig_Template
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
        $__internal_e59c92cc85afef5c3c760dfbd629cbad5e6c36651195cae453b67e674aa4f82b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59c92cc85afef5c3c760dfbd629cbad5e6c36651195cae453b67e674aa4f82b->enter($__internal_e59c92cc85afef5c3c760dfbd629cbad5e6c36651195cae453b67e674aa4f82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/adminContent.html.twig"));

        $__internal_781b534dc1b3629f6e4adb7aa4d39970f74a3bed1cd45af77e16d34a18a658ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781b534dc1b3629f6e4adb7aa4d39970f74a3bed1cd45af77e16d34a18a658ad->enter($__internal_781b534dc1b3629f6e4adb7aa4d39970f74a3bed1cd45af77e16d34a18a658ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/adminContent.html.twig"));

        // line 1
        echo "<!-- Main content -->
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
                            <th>libelle</th>
                            <th>prix</th>
                            <th>prixPromotion</th>


                            <th>description</th>

                            <th>etat</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "                            <tr>
                                <td ";
            // line 29
            if (($this->getAttribute($context["entity"], "Approuver", array()) == "0")) {
                echo "class=\"active-row\"";
            }
            echo ">


                                    ";
            // line 32
            if (($this->getAttribute($context["entity"], "Approuver", array()) == "0")) {
                // line 33
                echo "                                    <input type=\"checkbox\" name=\"products[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\">";
            }
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prixProduit", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "pourcentagePromotion", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>

                                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "Approuver", array()), "html", null, true);
            echo "</td>


                                <td>";
            // line 42
            if (($this->getAttribute($context["entity"], "Approuver", array()) == "1")) {
                echo " <span class=\"label label-success\">APPROUVED</span> ";
            } else {
                echo " <span class=\"label label-danger\">ON HOLD</span> ";
            }
            // line 43
            echo "

                                </td>
                                <td class=\"hidden-print\">
                                    <div class=\"text-center\">
                                        <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"#\"><span class=\"glyphicon glyphicon-search\"></span></a>
                                        <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"#\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div></section>";
        
        $__internal_e59c92cc85afef5c3c760dfbd629cbad5e6c36651195cae453b67e674aa4f82b->leave($__internal_e59c92cc85afef5c3c760dfbd629cbad5e6c36651195cae453b67e674aa4f82b_prof);

        
        $__internal_781b534dc1b3629f6e4adb7aa4d39970f74a3bed1cd45af77e16d34a18a658ad->leave($__internal_781b534dc1b3629f6e4adb7aa4d39970f74a3bed1cd45af77e16d34a18a658ad_prof);

    }

    public function getTemplateName()
    {
        return "product/adminContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 54,  106 => 43,  100 => 42,  94 => 39,  89 => 37,  85 => 36,  81 => 35,  77 => 34,  70 => 33,  68 => 32,  60 => 29,  57 => 28,  53 => 27,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Main content -->
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
                            <th>libelle</th>
                            <th>prix</th>
                            <th>prixPromotion</th>


                            <th>description</th>

                            <th>etat</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for entity in entities %}
                            <tr>
                                <td {% if entity.Approuver=='0' %}class=\"active-row\"{% endif %}>


                                    {% if entity.Approuver=='0' %}
                                    <input type=\"checkbox\" name=\"products[]\" value=\"{{ entity.id }}\">{% endif %}</td>
                                <td>{{ entity.libelle }}</td>
                                <td>{{ entity.prixProduit }}</td>
                                <td>{{ entity.pourcentagePromotion }}</td>
                                <td>{{ entity.description }}</td>

                                <td>{{ entity.Approuver }}</td>


                                <td>{% if(entity.Approuver=='1')%} <span class=\"label label-success\">APPROUVED</span> {% else %} <span class=\"label label-danger\">ON HOLD</span> {% endif %}


                                </td>
                                <td class=\"hidden-print\">
                                    <div class=\"text-center\">
                                        <a class=\"btn btn-primary btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"afficher\" href=\"#\"><span class=\"glyphicon glyphicon-search\"></span></a>
                                        <a class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"modifier\" href=\"#\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div></section>", "product/adminContent.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\product\\adminContent.html.twig");
    }
}
