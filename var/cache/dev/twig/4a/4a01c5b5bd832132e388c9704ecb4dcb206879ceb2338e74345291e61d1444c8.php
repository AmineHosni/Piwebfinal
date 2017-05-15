<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_be6e5231feef5a5d71fb0a78632e4f377917fce5e73e233d495273ce71fcce88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e17bca17ca2e01e81e2eb88493fc990f54041bbb66a0dac22584d446f7d93113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e17bca17ca2e01e81e2eb88493fc990f54041bbb66a0dac22584d446f7d93113->enter($__internal_e17bca17ca2e01e81e2eb88493fc990f54041bbb66a0dac22584d446f7d93113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_264d7887a7332b6cbe3f519190f4cc848aaac1ffaa0814ddb7a8ca55a6704deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264d7887a7332b6cbe3f519190f4cc848aaac1ffaa0814ddb7a8ca55a6704deb->enter($__internal_264d7887a7332b6cbe3f519190f4cc848aaac1ffaa0814ddb7a8ca55a6704deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
<div class=\"container\" style=\"padding-top: 30px;\">
    <h1 class=\"page-header\">Edit Profile</h1>
    <div class=\"row\">
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "<p>
        <div class=\"text-center\">
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "imageName", array())), "html", null, true);
        echo "\" alt=\"image\" width=\"100px\" height=\"100px\" class=\"media-object dp img-circle\" alt=\"avatar\">
            <h6> modifier la photo de profil</h6>
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageFile", array()), 'widget', array("attr" => array("class" => "span12", "placeholder" => " ")));
        // line 14
        echo "
        </div>
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageFile", array()), 'errors');
        echo "
    </div>

    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest', array("attr" => array("class" => "span12")));
        echo "
    <div>
        <input   type=\"submit\"   class=\"btn-success\"  value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>


";
        
        $__internal_e17bca17ca2e01e81e2eb88493fc990f54041bbb66a0dac22584d446f7d93113->leave($__internal_e17bca17ca2e01e81e2eb88493fc990f54041bbb66a0dac22584d446f7d93113_prof);

        
        $__internal_264d7887a7332b6cbe3f519190f4cc848aaac1ffaa0814ddb7a8ca55a6704deb->leave($__internal_264d7887a7332b6cbe3f519190f4cc848aaac1ffaa0814ddb7a8ca55a6704deb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  66 => 21,  61 => 19,  55 => 16,  51 => 14,  49 => 13,  44 => 11,  39 => 9,  34 => 7,  27 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% form_theme form 'bootstrap_3_layout.html.twig' %}
{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
<div class=\"container\" style=\"padding-top: 30px;\">
    <h1 class=\"page-header\">Edit Profile</h1>
    <div class=\"row\">
        {{ form_start(form)}}

        <p>{{app.user.nom}}<p>
        <div class=\"text-center\">
            <img src=\"{{ asset('bundles/images/')~ app.user.imageName}}\" alt=\"image\" width=\"100px\" height=\"100px\" class=\"media-object dp img-circle\" alt=\"avatar\">
            <h6> modifier la photo de profil</h6>
            {{ form_widget(form.imageFile,{ 'attr': {'class': \"span12\",
                'placeholder': \" \" } }) }}
        </div>
        {{ form_errors(form.imageFile) }}
    </div>

    {{ form_rest(form,{ 'attr': {'class': \"span12\"} }) }}
    <div>
        <input   type=\"submit\"   class=\"btn-success\"  value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
    {{ form_end(form) }}
</div>


", "@FOSUser/Profile/edit_content.html.twig", "C:\\wamp64\\www\\test\\src\\MainBundle\\Resources\\views\\Profile\\edit_content.html.twig");
    }
}
