<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_6506edacc1d9caece9c3f99a2e022825e20fc6ab81c34aef6f8e2e4c9f06f920 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_9883c3ec14042c3f71137c4f50f3807752ef2d2b49837cc038931bd00e266751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9883c3ec14042c3f71137c4f50f3807752ef2d2b49837cc038931bd00e266751->enter($__internal_9883c3ec14042c3f71137c4f50f3807752ef2d2b49837cc038931bd00e266751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_836a803fd41d2e99d13abbc139f7d374e5cf64851205b62a89e699870834fff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836a803fd41d2e99d13abbc139f7d374e5cf64851205b62a89e699870834fff2->enter($__internal_836a803fd41d2e99d13abbc139f7d374e5cf64851205b62a89e699870834fff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9883c3ec14042c3f71137c4f50f3807752ef2d2b49837cc038931bd00e266751->leave($__internal_9883c3ec14042c3f71137c4f50f3807752ef2d2b49837cc038931bd00e266751_prof);

        
        $__internal_836a803fd41d2e99d13abbc139f7d374e5cf64851205b62a89e699870834fff2->leave($__internal_836a803fd41d2e99d13abbc139f7d374e5cf64851205b62a89e699870834fff2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6b72116da70192c34a3f241474906573e77ae92cc7354f1bad2be6bbed7b871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b72116da70192c34a3f241474906573e77ae92cc7354f1bad2be6bbed7b871->enter($__internal_a6b72116da70192c34a3f241474906573e77ae92cc7354f1bad2be6bbed7b871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_82ec07c889131c503481f42d7c63db4e02cc1ce129d4da5a190831ae0b7c9443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ec07c889131c503481f42d7c63db4e02cc1ce129d4da5a190831ae0b7c9443->enter($__internal_82ec07c889131c503481f42d7c63db4e02cc1ce129d4da5a190831ae0b7c9443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_82ec07c889131c503481f42d7c63db4e02cc1ce129d4da5a190831ae0b7c9443->leave($__internal_82ec07c889131c503481f42d7c63db4e02cc1ce129d4da5a190831ae0b7c9443_prof);

        
        $__internal_a6b72116da70192c34a3f241474906573e77ae92cc7354f1bad2be6bbed7b871->leave($__internal_a6b72116da70192c34a3f241474906573e77ae92cc7354f1bad2be6bbed7b871_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\src\\MainBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
