<?php

/* MainBundle:user:list.html.twig */
class __TwigTemplate_6dedc6e69be72e135b057b0b134b07a245461a270765b015e69def5cb56cb9a8 extends Twig_Template
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
        $__internal_39225c778fa0cc3e521737cd8fc9510ebfa89a6a9489bbe4aa0b06b1f6240b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39225c778fa0cc3e521737cd8fc9510ebfa89a6a9489bbe4aa0b06b1f6240b93->enter($__internal_39225c778fa0cc3e521737cd8fc9510ebfa89a6a9489bbe4aa0b06b1f6240b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:user:list.html.twig"));

        $__internal_caa94f7e295acd1cc1d2f3905c4efee28b7e7b6bb726ac69d645955f58baa4a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa94f7e295acd1cc1d2f3905c4efee28b7e7b6bb726ac69d645955f58baa4a7->enter($__internal_caa94f7e295acd1cc1d2f3905c4efee28b7e7b6bb726ac69d645955f58baa4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:user:list.html.twig"));

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
                <th>Nom</th>
                <th>Email</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "                <tr>
                    <td ";
            // line 24
            if ($this->getAttribute($context["entity"], "enabled", array())) {
                echo "class=\"active-row\"";
            }
            echo "><input type=\"checkbox\" name=\"users[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\"></td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            if ($this->getAttribute($context["entity"], "enabled", array())) {
                echo " <span class=\"label label-success\">Activer</span> ";
            } else {
                echo " <span class=\"label label-danger\">BANNED</span> ";
            }
            // line 28
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
        // line 39
        echo "            </tbody>
        </table>
    </div>
</div>
        </div>
    </div></section>";
        
        $__internal_39225c778fa0cc3e521737cd8fc9510ebfa89a6a9489bbe4aa0b06b1f6240b93->leave($__internal_39225c778fa0cc3e521737cd8fc9510ebfa89a6a9489bbe4aa0b06b1f6240b93_prof);

        
        $__internal_caa94f7e295acd1cc1d2f3905c4efee28b7e7b6bb726ac69d645955f58baa4a7->leave($__internal_caa94f7e295acd1cc1d2f3905c4efee28b7e7b6bb726ac69d645955f58baa4a7_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:user:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 39,  77 => 28,  71 => 27,  67 => 26,  63 => 25,  55 => 24,  52 => 23,  48 => 22,  25 => 1,);
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
                <th>Nom</th>
                <th>Email</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for entity in entities %}
                <tr>
                    <td {% if entity.enabled %}class=\"active-row\"{% endif %}><input type=\"checkbox\" name=\"users[]\" value=\"{{ entity.id }}\"></td>
                    <td>{{ entity.username }}</td>
                    <td>{{ entity.email }}</td>
                    <td>{% if(entity.enabled)%} <span class=\"label label-success\">Activer</span> {% else %} <span class=\"label label-danger\">BANNED</span> {% endif %}


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
    </div></section>", "MainBundle:user:list.html.twig", "C:\\wamp64\\www\\test\\src\\MainBundle/Resources/views/user/list.html.twig");
    }
}
