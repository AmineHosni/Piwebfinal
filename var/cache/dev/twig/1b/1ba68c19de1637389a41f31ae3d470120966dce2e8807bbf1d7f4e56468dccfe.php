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
        $__internal_23f97dd9f23e0d45f011515359e77cfed63539f5ad6158a7cc83fdfc98393689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f97dd9f23e0d45f011515359e77cfed63539f5ad6158a7cc83fdfc98393689->enter($__internal_23f97dd9f23e0d45f011515359e77cfed63539f5ad6158a7cc83fdfc98393689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_40c3dce18816d07be9f39c98796414c0f33a8efc673a79d05bef34a276542328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c3dce18816d07be9f39c98796414c0f33a8efc673a79d05bef34a276542328->enter($__internal_40c3dce18816d07be9f39c98796414c0f33a8efc673a79d05bef34a276542328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23f97dd9f23e0d45f011515359e77cfed63539f5ad6158a7cc83fdfc98393689->leave($__internal_23f97dd9f23e0d45f011515359e77cfed63539f5ad6158a7cc83fdfc98393689_prof);

        
        $__internal_40c3dce18816d07be9f39c98796414c0f33a8efc673a79d05bef34a276542328->leave($__internal_40c3dce18816d07be9f39c98796414c0f33a8efc673a79d05bef34a276542328_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85061d7c85b64045a77b77be6d173e606b1d81af3810a5791caf9ded42360435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85061d7c85b64045a77b77be6d173e606b1d81af3810a5791caf9ded42360435->enter($__internal_85061d7c85b64045a77b77be6d173e606b1d81af3810a5791caf9ded42360435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ffe950d2bee53a2f5259378bb0b4ca8351bdb5f8d4b6ea1f2c597c6f88e43e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe950d2bee53a2f5259378bb0b4ca8351bdb5f8d4b6ea1f2c597c6f88e43e9f->enter($__internal_ffe950d2bee53a2f5259378bb0b4ca8351bdb5f8d4b6ea1f2c597c6f88e43e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_ffe950d2bee53a2f5259378bb0b4ca8351bdb5f8d4b6ea1f2c597c6f88e43e9f->leave($__internal_ffe950d2bee53a2f5259378bb0b4ca8351bdb5f8d4b6ea1f2c597c6f88e43e9f_prof);

        
        $__internal_85061d7c85b64045a77b77be6d173e606b1d81af3810a5791caf9ded42360435->leave($__internal_85061d7c85b64045a77b77be6d173e606b1d81af3810a5791caf9ded42360435_prof);

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
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\src\\MainBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
