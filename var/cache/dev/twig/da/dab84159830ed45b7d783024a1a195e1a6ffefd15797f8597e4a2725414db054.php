<?php

/* product/edit.html.twig */
class __TwigTemplate_e916e1b2463dbc772d7d9a8a3a749fa917ca0f1e3ddda73cf9944b078b908011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "product/edit.html.twig", 2);
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
        $__internal_ec07766e3e048a315d29fa98dcd2a0b7adcfc559b416ff102670f458e3101f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec07766e3e048a315d29fa98dcd2a0b7adcfc559b416ff102670f458e3101f1f->enter($__internal_ec07766e3e048a315d29fa98dcd2a0b7adcfc559b416ff102670f458e3101f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

        $__internal_779ca873ea4a18cbf84dd0d9e82caff3d77077427ed7d457267d8dc89912afc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_779ca873ea4a18cbf84dd0d9e82caff3d77077427ed7d457267d8dc89912afc7->enter($__internal_779ca873ea4a18cbf84dd0d9e82caff3d77077427ed7d457267d8dc89912afc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec07766e3e048a315d29fa98dcd2a0b7adcfc559b416ff102670f458e3101f1f->leave($__internal_ec07766e3e048a315d29fa98dcd2a0b7adcfc559b416ff102670f458e3101f1f_prof);

        
        $__internal_779ca873ea4a18cbf84dd0d9e82caff3d77077427ed7d457267d8dc89912afc7->leave($__internal_779ca873ea4a18cbf84dd0d9e82caff3d77077427ed7d457267d8dc89912afc7_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_8ea0e381bdf2eb4f6033fd3846d468398a2e52b06eae38663fc8aef00a40e4b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea0e381bdf2eb4f6033fd3846d468398a2e52b06eae38663fc8aef00a40e4b2->enter($__internal_8ea0e381bdf2eb4f6033fd3846d468398a2e52b06eae38663fc8aef00a40e4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_596685e1b2e4bb06d95a49c7f407e7216a1e6a2dd3310dcff41b4468a3128cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596685e1b2e4bb06d95a49c7f407e7216a1e6a2dd3310dcff41b4468a3128cdd->enter($__internal_596685e1b2e4bb06d95a49c7f407e7216a1e6a2dd3310dcff41b4468a3128cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "            <div class=\"container main-container\">

            <br>
            <div class=\"modal-dialog\">
            <div class=\"modal-content\">
            <div class=\"row featuredPostContainer globalPadding style2\">
            </div>


                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

            <div class=\"modal-content\">
            <div class=\"row featuredPostContainer globalPadding style2\">
                <h3 class=\"section-title style2 text-center\"><span>Modifier ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "libelle", array()), "html", null, true);
        echo "</span></h3>
            </div>
            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "libelle", array()), 'widget');
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "
            <br>
            <p>Marque</p>
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "marque", array()), 'widget');
        echo "
            <br><br>
            <p>Categorie </p>
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categorie", array()), 'widget');
        echo "
            <p>Etat du Produit</p>
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "etat", array()), 'widget');
        echo "

            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prixProduit", array()), 'widget');
        echo "

            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "quantiteStock", array()), 'widget');
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pourcentagePromotion", array()), 'widget');
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imageFile", array()), 'widget');
        echo "


                <input type=\"submit\" value=\"Edit\" />



            </div>            </div>



        ";
        
        $__internal_596685e1b2e4bb06d95a49c7f407e7216a1e6a2dd3310dcff41b4468a3128cdd->leave($__internal_596685e1b2e4bb06d95a49c7f407e7216a1e6a2dd3310dcff41b4468a3128cdd_prof);

        
        $__internal_8ea0e381bdf2eb4f6033fd3846d468398a2e52b06eae38663fc8aef00a40e4b2->leave($__internal_8ea0e381bdf2eb4f6033fd3846d468398a2e52b06eae38663fc8aef00a40e4b2_prof);

    }

    public function getTemplateName()
    {
        return "product/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 37,  114 => 36,  110 => 35,  105 => 33,  100 => 31,  95 => 29,  89 => 26,  83 => 23,  79 => 22,  75 => 21,  70 => 19,  63 => 15,  52 => 6,  43 => 5,  33 => 2,  31 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
        {% extends 'MainBundle:eshop:main.html.twig' %}
        {% form_theme edit_form 'bootstrap_3_layout.html.twig' %}

        {% block content %}
            <div class=\"container main-container\">

            <br>
            <div class=\"modal-dialog\">
            <div class=\"modal-content\">
            <div class=\"row featuredPostContainer globalPadding style2\">
            </div>


                {{ form_start(edit_form) }}

            <div class=\"modal-content\">
            <div class=\"row featuredPostContainer globalPadding style2\">
                <h3 class=\"section-title style2 text-center\"><span>Modifier {{ product.libelle }}</span></h3>
            </div>
            {{ form_start(edit_form) }}
            {{ form_widget(edit_form.libelle )}}
            {{ form_widget(edit_form.description)}}
            <br>
            <p>Marque</p>
            {{ form_widget(edit_form.marque )}}
            <br><br>
            <p>Categorie </p>
            {{ form_widget(edit_form.categorie )}}
            <p>Etat du Produit</p>
            {{ form_widget(edit_form.etat) }}

            {{ form_widget(edit_form.prixProduit)}}

            {{ form_widget(edit_form.quantiteStock) }}
            {{ form_widget(edit_form.pourcentagePromotion) }}
            {{ form_widget(edit_form.imageFile)}}


                <input type=\"submit\" value=\"Edit\" />



            </div>            </div>



        {% endblock %}", "product/edit.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\app\\Resources\\views\\product\\edit.html.twig");
    }
}
