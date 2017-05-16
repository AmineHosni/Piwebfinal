<?php

/* MainBundle:Default:pagination.html.twig */
class __TwigTemplate_aed2fb693997be7e45e5fb44d6691afa8ce928289c5349e3ee010de9caa7360b extends Twig_Template
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
        $__internal_b14bf9fc6af691ea3255ae0d5c7badafa5eee698a8b1ad5a8ba590cde1570573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b14bf9fc6af691ea3255ae0d5c7badafa5eee698a8b1ad5a8ba590cde1570573->enter($__internal_b14bf9fc6af691ea3255ae0d5c7badafa5eee698a8b1ad5a8ba590cde1570573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:pagination.html.twig"));

        $__internal_d0f3f667cb935a4afdc354554798088b077a9cd287cc08d02f9689808999e17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f3f667cb935a4afdc354554798088b077a9cd287cc08d02f9689808999e17e->enter($__internal_d0f3f667cb935a4afdc354554798088b077a9cd287cc08d02f9689808999e17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:pagination.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) > 0)) {
            // line 2
            echo "    <tr class=\"mypagination hide-print\">
        <td colspan=\"10\">
            <div class=\"text-center\">
                <ul class=\"pagination\">
                    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 7
                echo "                        <li";
                if ($this->getAttribute($context["p"], "is_current", array())) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#\" class=\"js-page\" data-page=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "page_number", array()), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "label", array()), "html", null, true);
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "                </ul>
            </div>
        </td>
    </tr>
";
        }
        
        $__internal_b14bf9fc6af691ea3255ae0d5c7badafa5eee698a8b1ad5a8ba590cde1570573->leave($__internal_b14bf9fc6af691ea3255ae0d5c7badafa5eee698a8b1ad5a8ba590cde1570573_prof);

        
        $__internal_d0f3f667cb935a4afdc354554798088b077a9cd287cc08d02f9689808999e17e->leave($__internal_d0f3f667cb935a4afdc354554798088b077a9cd287cc08d02f9689808999e17e_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Default:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  44 => 8,  37 => 7,  33 => 6,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if pagination|length > 0 %}
    <tr class=\"mypagination hide-print\">
        <td colspan=\"10\">
            <div class=\"text-center\">
                <ul class=\"pagination\">
                    {% for p in pagination %}
                        <li{% if p.is_current %} class=\"active\"{% endif %}>
                            <a href=\"#\" class=\"js-page\" data-page=\"{{ p.page_number }}\" >{{ p.label }}</a>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </td>
    </tr>
{% endif %}", "MainBundle:Default:pagination.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\src\\MainBundle/Resources/views/Default/pagination.html.twig");
    }
}
