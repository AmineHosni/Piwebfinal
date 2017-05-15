<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_eab8dbb5ce7a3a7c5657a4120905a5ee4868b48b7443b660c045f2df40491f42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_27ddf6b27abbff0e5b413c7f252a1473bdb9710746782a49abcb2d2641bf4441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ddf6b27abbff0e5b413c7f252a1473bdb9710746782a49abcb2d2641bf4441->enter($__internal_27ddf6b27abbff0e5b413c7f252a1473bdb9710746782a49abcb2d2641bf4441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_a33ca89ec973a74e8f1d201f6fe2dd8710ac4b469066faad5efeda9148b0f04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33ca89ec973a74e8f1d201f6fe2dd8710ac4b469066faad5efeda9148b0f04d->enter($__internal_a33ca89ec973a74e8f1d201f6fe2dd8710ac4b469066faad5efeda9148b0f04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27ddf6b27abbff0e5b413c7f252a1473bdb9710746782a49abcb2d2641bf4441->leave($__internal_27ddf6b27abbff0e5b413c7f252a1473bdb9710746782a49abcb2d2641bf4441_prof);

        
        $__internal_a33ca89ec973a74e8f1d201f6fe2dd8710ac4b469066faad5efeda9148b0f04d->leave($__internal_a33ca89ec973a74e8f1d201f6fe2dd8710ac4b469066faad5efeda9148b0f04d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36553047be0ac336664a207a099afedd4e8bed534101a7c7e155658cc30ae11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36553047be0ac336664a207a099afedd4e8bed534101a7c7e155658cc30ae11e->enter($__internal_36553047be0ac336664a207a099afedd4e8bed534101a7c7e155658cc30ae11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2d224cacdf7fdd8ad3fa3117b3aba49645a501133c09ea499d4051c9327ce12e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d224cacdf7fdd8ad3fa3117b3aba49645a501133c09ea499d4051c9327ce12e->enter($__internal_2d224cacdf7fdd8ad3fa3117b3aba49645a501133c09ea499d4051c9327ce12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_2d224cacdf7fdd8ad3fa3117b3aba49645a501133c09ea499d4051c9327ce12e->leave($__internal_2d224cacdf7fdd8ad3fa3117b3aba49645a501133c09ea499d4051c9327ce12e_prof);

        
        $__internal_36553047be0ac336664a207a099afedd4e8bed534101a7c7e155658cc30ae11e->leave($__internal_36553047be0ac336664a207a099afedd4e8bed534101a7c7e155658cc30ae11e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\test\\src\\MainBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
