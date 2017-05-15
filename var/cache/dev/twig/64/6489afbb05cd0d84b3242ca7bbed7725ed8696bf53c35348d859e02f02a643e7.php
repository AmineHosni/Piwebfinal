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
        $__internal_476194af6841c695536be173a0d43f0be618db9091e33715a763c9f5dbc8937a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476194af6841c695536be173a0d43f0be618db9091e33715a763c9f5dbc8937a->enter($__internal_476194af6841c695536be173a0d43f0be618db9091e33715a763c9f5dbc8937a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/thanks.html.twig"));

        $__internal_f713ed1d443a6a5d243f12340f98b971964c21061491271b3d9b8aac3ba7cf47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f713ed1d443a6a5d243f12340f98b971964c21061491271b3d9b8aac3ba7cf47->enter($__internal_f713ed1d443a6a5d243f12340f98b971964c21061491271b3d9b8aac3ba7cf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/thanks.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_476194af6841c695536be173a0d43f0be618db9091e33715a763c9f5dbc8937a->leave($__internal_476194af6841c695536be173a0d43f0be618db9091e33715a763c9f5dbc8937a_prof);

        
        $__internal_f713ed1d443a6a5d243f12340f98b971964c21061491271b3d9b8aac3ba7cf47->leave($__internal_f713ed1d443a6a5d243f12340f98b971964c21061491271b3d9b8aac3ba7cf47_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fad69e1c5fdae4d8516f6603142a283c6f10662b46260406759515192113d6ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad69e1c5fdae4d8516f6603142a283c6f10662b46260406759515192113d6ec->enter($__internal_fad69e1c5fdae4d8516f6603142a283c6f10662b46260406759515192113d6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3c7f56af93472e9b05d4d63cce964ce5e1268f0201e30a4b9fc06645af8d72bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7f56af93472e9b05d4d63cce964ce5e1268f0201e30a4b9fc06645af8d72bb->enter($__internal_3c7f56af93472e9b05d4d63cce964ce5e1268f0201e30a4b9fc06645af8d72bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3c7f56af93472e9b05d4d63cce964ce5e1268f0201e30a4b9fc06645af8d72bb->leave($__internal_3c7f56af93472e9b05d4d63cce964ce5e1268f0201e30a4b9fc06645af8d72bb_prof);

        
        $__internal_fad69e1c5fdae4d8516f6603142a283c6f10662b46260406759515192113d6ec->leave($__internal_fad69e1c5fdae4d8516f6603142a283c6f10662b46260406759515192113d6ec_prof);

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
{% endblock %}", "panier/thanks.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\panier\\thanks.html.twig");
    }
}
