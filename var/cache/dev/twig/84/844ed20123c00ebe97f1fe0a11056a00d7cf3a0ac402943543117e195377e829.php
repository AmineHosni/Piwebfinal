<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_93343c098cd80a58190b4dc1fd2f4de78fb9eac382892bd01a98a5160a0130af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_952819b2cabc7301a45c2fad721f3d8fc5d3083e4e4de9f4abd47ed08f8106e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952819b2cabc7301a45c2fad721f3d8fc5d3083e4e4de9f4abd47ed08f8106e7->enter($__internal_952819b2cabc7301a45c2fad721f3d8fc5d3083e4e4de9f4abd47ed08f8106e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_c1b9345d5bf0e7c8408f66a56b1d61a3b1d5bcf94d0c34100a730a396f4d5d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b9345d5bf0e7c8408f66a56b1d61a3b1d5bcf94d0c34100a730a396f4d5d1b->enter($__internal_c1b9345d5bf0e7c8408f66a56b1d61a3b1d5bcf94d0c34100a730a396f4d5d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_952819b2cabc7301a45c2fad721f3d8fc5d3083e4e4de9f4abd47ed08f8106e7->leave($__internal_952819b2cabc7301a45c2fad721f3d8fc5d3083e4e4de9f4abd47ed08f8106e7_prof);

        
        $__internal_c1b9345d5bf0e7c8408f66a56b1d61a3b1d5bcf94d0c34100a730a396f4d5d1b->leave($__internal_c1b9345d5bf0e7c8408f66a56b1d61a3b1d5bcf94d0c34100a730a396f4d5d1b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a95bb337a6fb1bd472ebb52aae44bd6b8261a352a18f277edbef49b7e8f9ffb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a95bb337a6fb1bd472ebb52aae44bd6b8261a352a18f277edbef49b7e8f9ffb0->enter($__internal_a95bb337a6fb1bd472ebb52aae44bd6b8261a352a18f277edbef49b7e8f9ffb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_49aec77c9130b08345993b2d94f4d825843ecd64c351a4879887b833a45eb002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49aec77c9130b08345993b2d94f4d825843ecd64c351a4879887b833a45eb002->enter($__internal_49aec77c9130b08345993b2d94f4d825843ecd64c351a4879887b833a45eb002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_49aec77c9130b08345993b2d94f4d825843ecd64c351a4879887b833a45eb002->leave($__internal_49aec77c9130b08345993b2d94f4d825843ecd64c351a4879887b833a45eb002_prof);

        
        $__internal_a95bb337a6fb1bd472ebb52aae44bd6b8261a352a18f277edbef49b7e8f9ffb0->leave($__internal_a95bb337a6fb1bd472ebb52aae44bd6b8261a352a18f277edbef49b7e8f9ffb0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\test\\src\\MainBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
