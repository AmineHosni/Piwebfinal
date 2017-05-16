<?php

/* coupon/new.html.twig */
class __TwigTemplate_03ab5bd5a68dba7e391979878346964e4d1ea9edbd6b850a6b991826292bcfa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "coupon/new.html.twig", 1);
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
        $__internal_8b1218eddb736545b73e9a2927abd012eb0578c740502846d79a7e4064de8fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b1218eddb736545b73e9a2927abd012eb0578c740502846d79a7e4064de8fbe->enter($__internal_8b1218eddb736545b73e9a2927abd012eb0578c740502846d79a7e4064de8fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coupon/new.html.twig"));

        $__internal_72e86151f49c829e400c7e0db3b68ef46f1341a63623a331f2948359943c8f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e86151f49c829e400c7e0db3b68ef46f1341a63623a331f2948359943c8f74->enter($__internal_72e86151f49c829e400c7e0db3b68ef46f1341a63623a331f2948359943c8f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coupon/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b1218eddb736545b73e9a2927abd012eb0578c740502846d79a7e4064de8fbe->leave($__internal_8b1218eddb736545b73e9a2927abd012eb0578c740502846d79a7e4064de8fbe_prof);

        
        $__internal_72e86151f49c829e400c7e0db3b68ef46f1341a63623a331f2948359943c8f74->leave($__internal_72e86151f49c829e400c7e0db3b68ef46f1341a63623a331f2948359943c8f74_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_46890ed5f0615931fa80d0fbf4ad69b13e3b169acca2f8b0d5f1498c06476651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46890ed5f0615931fa80d0fbf4ad69b13e3b169acca2f8b0d5f1498c06476651->enter($__internal_46890ed5f0615931fa80d0fbf4ad69b13e3b169acca2f8b0d5f1498c06476651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5eacca9f29111ccc2b217a9a1350e90eed5b06e88f4a010186453dbe893b58a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eacca9f29111ccc2b217a9a1350e90eed5b06e88f4a010186453dbe893b58a9->enter($__internal_5eacca9f29111ccc2b217a9a1350e90eed5b06e88f4a010186453dbe893b58a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            <h1 class=\"section-title-inner\"><span><i></i> Ajouter Coupon </span></h1>
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
";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        <label>Titre : </label> ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
   <label>Description : </label>  ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
    <label>Quantité : </label> ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Qte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
   <label>Taux de Reduction</label>  ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tauxreduction", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
    
            <div class=\"main-image sp-wrap col-lg-12 no-padding style2 style2look2\" style=\"display: inline-block;\">

                </div>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-6\">

    
   <label>Date de Debut</label>  ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_deb", array()), 'widget', array("attr" => array("class" => "firstDate form-control")));
        echo "<br>
   <label>Date Expiration</label>  ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_fin", array()), 'widget', array("attr" => array("class" => "lastDate form-control")));
        echo "<br>
   <label>Image</label>  ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageFile", array()), 'widget', array("attr" => array("class" => " ")));
        echo "<br>
        <input type=\"submit\" value=\"Create\" class=\"btn btn-primary\" /><br>
    ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_5eacca9f29111ccc2b217a9a1350e90eed5b06e88f4a010186453dbe893b58a9->leave($__internal_5eacca9f29111ccc2b217a9a1350e90eed5b06e88f4a010186453dbe893b58a9_prof);

        
        $__internal_46890ed5f0615931fa80d0fbf4ad69b13e3b169acca2f8b0d5f1498c06476651->leave($__internal_46890ed5f0615931fa80d0fbf4ad69b13e3b169acca2f8b0d5f1498c06476651_prof);

    }

    public function getTemplateName()
    {
        return "coupon/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 53,  125 => 51,  121 => 50,  117 => 49,  105 => 40,  101 => 39,  97 => 38,  93 => 37,  88 => 35,  78 => 28,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
            <h1 class=\"section-title-inner\"><span><i></i> Ajouter Coupon </span></h1>
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
{{ form_start(form) }}

        <label>Titre : </label> {{form_widget(form.titre,{ 'attr': {'class': \"form-control\"}} )}}<br>
   <label>Description : </label>  {{form_widget(form.Description,{ 'attr': {'class': \"form-control\"}} )}}<br>
    <label>Quantité : </label> {{form_widget(form.Qte,{ 'attr': {'class': \"form-control\"}} )}}<br>
   <label>Taux de Reduction</label>  {{form_widget(form.tauxreduction,{ 'attr': {'class': \"form-control\"}} )}}<br>
    
            <div class=\"main-image sp-wrap col-lg-12 no-padding style2 style2look2\" style=\"display: inline-block;\">

                </div>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-6\">

    
   <label>Date de Debut</label>  {{form_widget(form.date_deb,{ 'attr': {'class': \"firstDate form-control\"}} )}}<br>
   <label>Date Expiration</label>  {{form_widget(form.date_fin,{ 'attr': {'class': \"lastDate form-control\"}} )}}<br>
   <label>Image</label>  {{form_widget(form.imageFile,{ 'attr': {'class': \" \"}} )}}<br>
        <input type=\"submit\" value=\"Create\" class=\"btn btn-primary\" /><br>
    {{ form_end(form) }}

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
", "coupon/new.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\app\\Resources\\views\\coupon\\new.html.twig");
    }
}
