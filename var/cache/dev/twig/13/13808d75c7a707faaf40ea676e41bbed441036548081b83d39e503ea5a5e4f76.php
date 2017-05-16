<?php

/* coupon/edit.html.twig */
class __TwigTemplate_ce6ce66a68ee8bf2ba5bdb0ce1ca3edd6a4e8729275ebbe006002f901883207d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "coupon/edit.html.twig", 1);
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
        $__internal_a453e983321fbacf4a9ff5bcdfcb5bbc94acb9382a4e8484f20c83f69153c90c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a453e983321fbacf4a9ff5bcdfcb5bbc94acb9382a4e8484f20c83f69153c90c->enter($__internal_a453e983321fbacf4a9ff5bcdfcb5bbc94acb9382a4e8484f20c83f69153c90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coupon/edit.html.twig"));

        $__internal_308f2743700eaab0c4ac54350d3f836fda9f5a743da267f48b76ce70601c46eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308f2743700eaab0c4ac54350d3f836fda9f5a743da267f48b76ce70601c46eb->enter($__internal_308f2743700eaab0c4ac54350d3f836fda9f5a743da267f48b76ce70601c46eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coupon/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a453e983321fbacf4a9ff5bcdfcb5bbc94acb9382a4e8484f20c83f69153c90c->leave($__internal_a453e983321fbacf4a9ff5bcdfcb5bbc94acb9382a4e8484f20c83f69153c90c_prof);

        
        $__internal_308f2743700eaab0c4ac54350d3f836fda9f5a743da267f48b76ce70601c46eb->leave($__internal_308f2743700eaab0c4ac54350d3f836fda9f5a743da267f48b76ce70601c46eb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f4ca1b4534afa4439efe877f96987107c8aa32fbf68e59f3b6167339bb89d3b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ca1b4534afa4439efe877f96987107c8aa32fbf68e59f3b6167339bb89d3b6->enter($__internal_f4ca1b4534afa4439efe877f96987107c8aa32fbf68e59f3b6167339bb89d3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4ba74846baf55bb82ca6f4db1d9b7a9d7f6ab5440b55e12a10d59d1d34e8f4ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba74846baf55bb82ca6f4db1d9b7a9d7f6ab5440b55e12a10d59d1d34e8f4ac->enter($__internal_4ba74846baf55bb82ca6f4db1d9b7a9d7f6ab5440b55e12a10d59d1d34e8f4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<script src=\"http://code.jquery.com/jquery-1.8.3.js\"></script>

<div class=\"container main-container headerOffset\">
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_homepage");
        echo "\">Home</a></li>
                <li><a href=\"#\">Mes Coupons</a></li>
            </ul>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7\">
            <h1 class=\"section-title-inner\"><span><i></i> Liste des Coupons </span></h1>
<div class=\"col-lg-12 clearfix\">
                    
                </div>
            <div class=\"row userInfo\">
                
            <div class=\"box\">
            <div class=\"box-header\">
            </div>
            <ul class=\"pager\">
                      
                        <li class=\"next pull-right\"><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_index");
        echo "\"> ← Retour a la liste</a></li>
                    </ul>
<div class=\"row transitionfx\">

        <!-- left column -->
        <div class=\"col-lg-6 col-md-6 col-sm-6\">
            <!-- product Image and Zoom -->


            <div class=\"main-image sp-wrap col-lg-12 no-padding style2 style2look2\" style=\"display: inline-block;\">



                <div class=\"sp-large\"><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : $this->getContext($context, "coupon")), "imageName", array())), "html", null, true);
        echo "\" class=\"\"><img src=\"";
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : $this->getContext($context, "coupon")), "imageName", array())), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"img\"></a></div></div>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-6\">
    <h1>Modifier Coupon </h1>

    ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    <label>Titre : </label> ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
   <label>Description : </label>  ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
    <label>Quantité : </label> ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Qte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
   <label>Taux de Reduction</label>  ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tauxreduction", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
   <label>Date de Debut</label>  ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "date_deb", array()), 'widget', array("attr" => array("class" => "firstDate form-control")));
        echo "<br>
   <label>date Expiration</label>  ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "date_fin", array()), 'widget', array("attr" => array("class" => "lastDate form-control")));
        echo "<br>
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Modifier\" class=\"btn\" />

    ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
 ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" onclick=\"return confirm('Voulez vous vraiment supprimer ce contenu ?');\">
            ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
 <script >
\$(\".btn\").click(function(){
    var firstDate = \$('.firstDate').val();
    var lastDate = \$('.lastDate').val();
    
    if (firstDate > lastDate) {
        alert(\"First date can not be greater than Last date!!\");
        return false;
    } 
});</script>
    <ul>
        <li>
        </li>
        <li>
           
        </li>
    </ul>
</div>
    
        </div>
    </div></div>
    <!--/row--></div></div></div>

    <div style=\"clear:both\"></div>
";
        
        $__internal_4ba74846baf55bb82ca6f4db1d9b7a9d7f6ab5440b55e12a10d59d1d34e8f4ac->leave($__internal_4ba74846baf55bb82ca6f4db1d9b7a9d7f6ab5440b55e12a10d59d1d34e8f4ac_prof);

        
        $__internal_f4ca1b4534afa4439efe877f96987107c8aa32fbf68e59f3b6167339bb89d3b6->leave($__internal_f4ca1b4534afa4439efe877f96987107c8aa32fbf68e59f3b6167339bb89d3b6_prof);

    }

    public function getTemplateName()
    {
        return "coupon/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 59,  142 => 57,  138 => 56,  132 => 53,  128 => 52,  124 => 51,  120 => 50,  116 => 49,  112 => 48,  108 => 47,  104 => 46,  94 => 41,  78 => 28,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
<script src=\"http://code.jquery.com/jquery-1.8.3.js\"></script>

<div class=\"container main-container headerOffset\">
    <div class=\"row\">
        <div class=\"breadcrumbDiv col-lg-12\">
            <ul class=\"breadcrumb\">
                <li><a href=\"{{path('main_homepage')}}\">Home</a></li>
                <li><a href=\"#\">Mes Coupons</a></li>
            </ul>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-9 col-md-9 col-sm-7\">
            <h1 class=\"section-title-inner\"><span><i></i> Liste des Coupons </span></h1>
<div class=\"col-lg-12 clearfix\">
                    
                </div>
            <div class=\"row userInfo\">
                
            <div class=\"box\">
            <div class=\"box-header\">
            </div>
            <ul class=\"pager\">
                      
                        <li class=\"next pull-right\"><a href=\"{{ path('coupon_index') }}\"> ← Retour a la liste</a></li>
                    </ul>
<div class=\"row transitionfx\">

        <!-- left column -->
        <div class=\"col-lg-6 col-md-6 col-sm-6\">
            <!-- product Image and Zoom -->


            <div class=\"main-image sp-wrap col-lg-12 no-padding style2 style2look2\" style=\"display: inline-block;\">



                <div class=\"sp-large\"><a href=\"{{ asset('bundles/images/')~ coupon.imageName }}\" class=\"\"><img src=\"{{ asset('bundles/images/')~ coupon.imageName }}\" class=\"img-responsive\" alt=\"img\"></a></div></div>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-6\">
    <h1>Modifier Coupon </h1>

    {{ form_start(edit_form) }}
    <label>Titre : </label> {{form_widget(edit_form.titre,{ 'attr': {'class': \"form-control\"}} )}}<br>
   <label>Description : </label>  {{form_widget(edit_form.Description,{ 'attr': {'class': \"form-control\"}} )}}<br>
    <label>Quantité : </label> {{form_widget(edit_form.Qte,{ 'attr': {'class': \"form-control\"}} )}}<br>
   <label>Taux de Reduction</label>  {{form_widget(edit_form.tauxreduction,{ 'attr': {'class': \"form-control\"}} )}}<br>
   <label>Date de Debut</label>  {{form_widget(edit_form.date_deb,{ 'attr': {'class': \"firstDate form-control\"}} )}}<br>
   <label>date Expiration</label>  {{form_widget(edit_form.date_fin,{ 'attr': {'class': \"lastDate form-control\"}} )}}<br>
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Modifier\" class=\"btn\" />

    {{ form_end(edit_form) }}
 {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" onclick=\"return confirm('Voulez vous vraiment supprimer ce contenu ?');\">
            {{ form_end(delete_form) }}
 <script >
\$(\".btn\").click(function(){
    var firstDate = \$('.firstDate').val();
    var lastDate = \$('.lastDate').val();
    
    if (firstDate > lastDate) {
        alert(\"First date can not be greater than Last date!!\");
        return false;
    } 
});</script>
    <ul>
        <li>
        </li>
        <li>
           
        </li>
    </ul>
</div>
    
        </div>
    </div></div>
    <!--/row--></div></div></div>

    <div style=\"clear:both\"></div>
{% endblock %}
", "coupon/edit.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\app\\Resources\\views\\coupon\\edit.html.twig");
    }
}
