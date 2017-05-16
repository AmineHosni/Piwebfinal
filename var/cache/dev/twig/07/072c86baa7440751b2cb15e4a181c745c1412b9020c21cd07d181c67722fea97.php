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
        $__internal_4756dc2dd996b3a30147ac42a44767381291f9fc87f6c9830a0ad6eb9c62f648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4756dc2dd996b3a30147ac42a44767381291f9fc87f6c9830a0ad6eb9c62f648->enter($__internal_4756dc2dd996b3a30147ac42a44767381291f9fc87f6c9830a0ad6eb9c62f648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/adminContent.html.twig"));

        $__internal_db01d3de040460b6f5f68dcae53f96109ca2e1155abb1dec315185c0b2a6ca0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db01d3de040460b6f5f68dcae53f96109ca2e1155abb1dec315185c0b2a6ca0a->enter($__internal_db01d3de040460b6f5f68dcae53f96109ca2e1155abb1dec315185c0b2a6ca0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/adminContent.html.twig"));

        // line 1
        echo "<!-- Main content -->
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">

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

                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "                            <tr>
                                <td ";
            // line 24
            if (($this->getAttribute($context["entity"], "Approuver", array()) == "0")) {
                echo "class=\"active-row\"";
            }
            echo ">


                                <input type=\"checkbox\" name=\"products[]\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\"></td>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prixProduit", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "pourcentagePromotion", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>

                                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "Approuver", array()), "html", null, true);
            echo "</td>


                                <td>";
            // line 36
            if (($this->getAttribute($context["entity"], "Approuver", array()) == "1")) {
                echo " <span class=\"label label-success\">APPROUVED</span> ";
            } else {
                echo " <span class=\"label label-danger\">ON HOLD</span> ";
            }
            // line 37
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
        // line 48
        echo "                        </tbody>
                    </table>



                </div>
            </div>
        </div>

    </div>
</section>


";
        
        $__internal_4756dc2dd996b3a30147ac42a44767381291f9fc87f6c9830a0ad6eb9c62f648->leave($__internal_4756dc2dd996b3a30147ac42a44767381291f9fc87f6c9830a0ad6eb9c62f648_prof);

        
        $__internal_db01d3de040460b6f5f68dcae53f96109ca2e1155abb1dec315185c0b2a6ca0a->leave($__internal_db01d3de040460b6f5f68dcae53f96109ca2e1155abb1dec315185c0b2a6ca0a_prof);

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
        return array (  112 => 48,  96 => 37,  90 => 36,  84 => 33,  79 => 31,  75 => 30,  71 => 29,  67 => 28,  63 => 27,  55 => 24,  52 => 23,  48 => 22,  25 => 1,);
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

                        </tr>
                        </thead>
                        <tbody>
                        {% for entity in entities %}
                            <tr>
                                <td {% if entity.Approuver=='0' %}class=\"active-row\"{% endif %}>


                                <input type=\"checkbox\" name=\"products[]\" value=\"{{ entity.id }}\"></td>
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

    </div>
</section>


", "product/adminContent.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\app\\Resources\\views\\product\\adminContent.html.twig");
    }
}
