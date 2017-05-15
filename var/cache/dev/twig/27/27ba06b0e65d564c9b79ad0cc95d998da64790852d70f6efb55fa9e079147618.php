<?php

/* product/new.html.twig */
class __TwigTemplate_629b39f14b571a39aed723f830cf6a89cb86690f48c81e0fddd23866a99de206 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "product/new.html.twig", 1);
        $this->blocks = array(
            'script' => array($this, 'block_script'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle:eshop:main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02cabddb344d4d80ff3ada2fd72ae84f25fd142a34489449720f32fcd19f6791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02cabddb344d4d80ff3ada2fd72ae84f25fd142a34489449720f32fcd19f6791->enter($__internal_02cabddb344d4d80ff3ada2fd72ae84f25fd142a34489449720f32fcd19f6791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $__internal_92a67fa89c4c4413ef239221e982c93cb5c2639ecdbabfc0685e92b49df7c55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a67fa89c4c4413ef239221e982c93cb5c2639ecdbabfc0685e92b49df7c55a->enter($__internal_92a67fa89c4c4413ef239221e982c93cb5c2639ecdbabfc0685e92b49df7c55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02cabddb344d4d80ff3ada2fd72ae84f25fd142a34489449720f32fcd19f6791->leave($__internal_02cabddb344d4d80ff3ada2fd72ae84f25fd142a34489449720f32fcd19f6791_prof);

        
        $__internal_92a67fa89c4c4413ef239221e982c93cb5c2639ecdbabfc0685e92b49df7c55a->leave($__internal_92a67fa89c4c4413ef239221e982c93cb5c2639ecdbabfc0685e92b49df7c55a_prof);

    }

    // line 4
    public function block_script($context, array $blocks = array())
    {
        $__internal_88e19133f7d1ed9cb0c09fd24cc1a99a40c58887865955c3ef0aa891143306a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e19133f7d1ed9cb0c09fd24cc1a99a40c58887865955c3ef0aa891143306a2->enter($__internal_88e19133f7d1ed9cb0c09fd24cc1a99a40c58887865955c3ef0aa891143306a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_a63309426b80b0f1c6c81edc8261fe08a328d7894109fdf004defe492106c51e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63309426b80b0f1c6c81edc8261fe08a328d7894109fdf004defe492106c51e->enter($__internal_a63309426b80b0f1c6c81edc8261fe08a328d7894109fdf004defe492106c51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 5
        echo "
    <script>
        \$.validator.addMethod('positiveNumber',
                function (value) {
                    return Number(value) > 0;
                }, 'Enter a positive number.');


        \$(document).ready(function(){
            \$(\"ajouter\").click(function(){
               \$(\"prixProduit\").positiveNumber();
            });
        });

    </script>

";
        
        $__internal_a63309426b80b0f1c6c81edc8261fe08a328d7894109fdf004defe492106c51e->leave($__internal_a63309426b80b0f1c6c81edc8261fe08a328d7894109fdf004defe492106c51e_prof);

        
        $__internal_88e19133f7d1ed9cb0c09fd24cc1a99a40c58887865955c3ef0aa891143306a2->leave($__internal_88e19133f7d1ed9cb0c09fd24cc1a99a40c58887865955c3ef0aa891143306a2_prof);

    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_79c00f1dbed4330dff2df2ba39667390cdce5cb795356af010f482180d279076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c00f1dbed4330dff2df2ba39667390cdce5cb795356af010f482180d279076->enter($__internal_79c00f1dbed4330dff2df2ba39667390cdce5cb795356af010f482180d279076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6392612069393fe813651665af67de9911676fd6a24cab08b9e6e217a19d4b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6392612069393fe813651665af67de9911676fd6a24cab08b9e6e217a19d4b5c->enter($__internal_6392612069393fe813651665af67de9911676fd6a24cab08b9e6e217a19d4b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <br>
    <br>
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"row featuredPostContainer globalPadding style2\">
                <h3 class=\"section-title style2 text-center\"><span>Nouveau produit</span></h3>
            </div>
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget', array("attr" => array("class" => "form-control input", "placeholder" => "libelle", "required" => "true", "id" => "libelle")));
        // line 34
        echo "
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("placeholder" => "description", "required" => "true", "id" => "description")));
        // line 36
        echo "
            <br>
            <p>Marque</p>
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marque", array()), 'widget', array("attr" => array("required" => "true", "id" => "marque")));
        // line 40
        echo "
            <br><br>
            <p>Categorie </p>
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'widget', array("attr" => array("required" => "true", "id" => "categorie")));
        // line 44
        echo "
            <p>Etat du Produit</p>
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'widget', array("attr" => array("required" => "true", "id" => "etat")));
        // line 47
        echo "

            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixProduit", array()), 'widget', array("attr" => array("type" => "number", "min" => "0", "placeholder" => "Prix de Produit", "required" => "true", "id" => "prixProduit")));
        // line 50
        echo "

            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantiteStock", array()), 'widget', array("attr" => array("placeholder" => "Votre Stock", "required" => "true", "id" => "quantiteStock")));
        // line 53
        echo "
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pourcentagePromotion", array()), 'widget', array("attr" => array("placeholder" => "Pourcentage Promotion", "required" => "true", "id" => "quantiteStock")));
        // line 55
        echo "
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'widget', array("attr" => array("required" => "true", "id" => "categorie")));
        // line 57
        echo "
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageFile", array()), 'widget');
        echo "

            ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <input type=\"submit\" value=\"ajouter\" name=\"ajouter\">
        </div>
    </div>
    <ul>
        <li>
            <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6392612069393fe813651665af67de9911676fd6a24cab08b9e6e217a19d4b5c->leave($__internal_6392612069393fe813651665af67de9911676fd6a24cab08b9e6e217a19d4b5c_prof);

        
        $__internal_79c00f1dbed4330dff2df2ba39667390cdce5cb795356af010f482180d279076->leave($__internal_79c00f1dbed4330dff2df2ba39667390cdce5cb795356af010f482180d279076_prof);

    }

    public function getTemplateName()
    {
        return "product/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 66,  161 => 60,  156 => 58,  153 => 57,  151 => 56,  148 => 55,  146 => 54,  143 => 53,  141 => 52,  137 => 50,  135 => 49,  131 => 47,  129 => 46,  125 => 44,  123 => 43,  118 => 40,  116 => 39,  111 => 36,  109 => 35,  106 => 34,  104 => 33,  100 => 32,  88 => 24,  79 => 23,  53 => 5,  44 => 4,  34 => 1,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MainBundle:eshop:main.html.twig' %}
{% form_theme form 'bootstrap_3_layout.html.twig' %}

{% block script%}

    <script>
        \$.validator.addMethod('positiveNumber',
                function (value) {
                    return Number(value) > 0;
                }, 'Enter a positive number.');


        \$(document).ready(function(){
            \$(\"ajouter\").click(function(){
               \$(\"prixProduit\").positiveNumber();
            });
        });

    </script>

{% endblock script %}

  {% block content %}
    {{ form_start(form) }}
    <br>
    <br>
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"row featuredPostContainer globalPadding style2\">
                <h3 class=\"section-title style2 text-center\"><span>Nouveau produit</span></h3>
            </div>
            {{ form_start(form) }}
            {{ form_widget(form.libelle,{ 'attr': {'class': \"form-control input\",
                'placeholder': \"libelle\",'required':'true','id': 'libelle'} }) }}
            {{ form_widget(form.description,{ 'attr': {
                'placeholder': \"description\",'required':'true' ,'id': 'description'} }) }}
            <br>
            <p>Marque</p>
            {{ form_widget(form.marque,{ 'attr': {
                'required':'true' ,'id': 'marque'} }) }}
            <br><br>
            <p>Categorie </p>
            {{ form_widget(form.categorie,{ 'attr': {
                'required':'true','id': 'categorie'} }) }}
            <p>Etat du Produit</p>
            {{ form_widget(form.etat,{ 'attr': {
                'required':'true','id': 'etat'} }) }}

            {{ form_widget(form.prixProduit,{ 'attr': {\"type\": \"number\",  \"min\" :\"0\",
                'placeholder': \"Prix de Produit\",'required':'true','id': 'prixProduit'} }) }}

            {{ form_widget(form.quantiteStock,{ 'attr': {
                'placeholder': \"Votre Stock\",'required':'true','id': 'quantiteStock'} }) }}
            {{ form_widget(form.pourcentagePromotion,{ 'attr': {
                'placeholder': \"Pourcentage Promotion\",'required':'true','id': 'quantiteStock'} }) }}
            {{ form_widget(form.categorie,{ 'attr': {
                'required':'true','id': 'categorie'} }) }}
            {{ form_widget(form.imageFile)}}

            {{ form_end(form) }}
            <input type=\"submit\" value=\"ajouter\" name=\"ajouter\">
        </div>
    </div>
    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}", "product/new.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\product\\new.html.twig");
    }
}
