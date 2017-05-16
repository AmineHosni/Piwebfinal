<?php

/* panier/thanks.html.twig */
class __TwigTemplate_9af02760ac604dce8e619d19ade296d01b04598c4b04a2c59b9b9634ffd8d49e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "panier/thanks.html.twig", 1);
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
        $__internal_ad4f861ec48e75829f872449e1fb9a103db0e6737a41618d3249e311192031a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad4f861ec48e75829f872449e1fb9a103db0e6737a41618d3249e311192031a7->enter($__internal_ad4f861ec48e75829f872449e1fb9a103db0e6737a41618d3249e311192031a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/thanks.html.twig"));

        $__internal_f95028cd16788d2a1099adc0740fc2d98a72fda85bcf848a6a76998076f933ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95028cd16788d2a1099adc0740fc2d98a72fda85bcf848a6a76998076f933ef->enter($__internal_f95028cd16788d2a1099adc0740fc2d98a72fda85bcf848a6a76998076f933ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/thanks.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad4f861ec48e75829f872449e1fb9a103db0e6737a41618d3249e311192031a7->leave($__internal_ad4f861ec48e75829f872449e1fb9a103db0e6737a41618d3249e311192031a7_prof);

        
        $__internal_f95028cd16788d2a1099adc0740fc2d98a72fda85bcf848a6a76998076f933ef->leave($__internal_f95028cd16788d2a1099adc0740fc2d98a72fda85bcf848a6a76998076f933ef_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_09ff11c396e101ad803eeb76258e2f27fbe6d4a0164650776c38bbdabc8e1f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ff11c396e101ad803eeb76258e2f27fbe6d4a0164650776c38bbdabc8e1f93->enter($__internal_09ff11c396e101ad803eeb76258e2f27fbe6d4a0164650776c38bbdabc8e1f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ad64b2dfde7995d1fe72913185e300b5d75f442eb2b8530b001f044f5b321cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad64b2dfde7995d1fe72913185e300b5d75f442eb2b8530b001f044f5b321cd4->enter($__internal_ad64b2dfde7995d1fe72913185e300b5d75f442eb2b8530b001f044f5b321cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container main-container headerOffset\">
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"index.html\">Home</a></li>
                <li><a href=\"category.html\">Category</a></li>
                <li class=\"active\"> Order</li>
            </ul>
        </div>
    </div>
    <!--/.row-->


    <div class=\"row\">
        <div class=\"col-lg-12 \">
            <div class=\"row userInfo\">

                <div class=\"thanxContent text-center\">

                    <h1> Thank you for your order <a href=\"order-status.html\">#6469</a></h1>
                    <h4>we'll let you know when your items are on their way</h4>

                </div>

              
            </div>
            <!--/row end-->

        </div>

        <!--/rightSidebar-->

    </div>
    <!--/row-->

    <div style=\"clear:both\"></div>
</div>
";
        
        $__internal_ad64b2dfde7995d1fe72913185e300b5d75f442eb2b8530b001f044f5b321cd4->leave($__internal_ad64b2dfde7995d1fe72913185e300b5d75f442eb2b8530b001f044f5b321cd4_prof);

        
        $__internal_09ff11c396e101ad803eeb76258e2f27fbe6d4a0164650776c38bbdabc8e1f93->leave($__internal_09ff11c396e101ad803eeb76258e2f27fbe6d4a0164650776c38bbdabc8e1f93_prof);

    }

    public function getTemplateName()
    {
        return "panier/thanks.html.twig";
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
        return new Twig_Source("{% extends \"MainBundle:eshop:main.html.twig\" %}

{% block content %}
<div class=\"container main-container headerOffset\">
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"index.html\">Home</a></li>
                <li><a href=\"category.html\">Category</a></li>
                <li class=\"active\"> Order</li>
            </ul>
        </div>
    </div>
    <!--/.row-->


    <div class=\"row\">
        <div class=\"col-lg-12 \">
            <div class=\"row userInfo\">

                <div class=\"thanxContent text-center\">

                    <h1> Thank you for your order <a href=\"order-status.html\">#6469</a></h1>
                    <h4>we'll let you know when your items are on their way</h4>

                </div>

              
            </div>
            <!--/row end-->

        </div>

        <!--/rightSidebar-->

    </div>
    <!--/row-->

    <div style=\"clear:both\"></div>
</div>
{% endblock %}", "panier/thanks.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\app\\Resources\\views\\panier\\thanks.html.twig");
    }
}
