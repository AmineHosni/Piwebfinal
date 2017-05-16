<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_263c7506e197a7410400a44475037794fdbb06c1439375e1cd109c7e847225c8 extends Twig_Template
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
        $__internal_dacef9eb9f0f43a7085109c8f2b62350c6e854c997c451c5b70471c7e4b69734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dacef9eb9f0f43a7085109c8f2b62350c6e854c997c451c5b70471c7e4b69734->enter($__internal_dacef9eb9f0f43a7085109c8f2b62350c6e854c997c451c5b70471c7e4b69734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_0c205a3c2f8d0fb930441dbf06f863d0b7b8b2cac38c37b9fa9becb271344cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c205a3c2f8d0fb930441dbf06f863d0b7b8b2cac38c37b9fa9becb271344cdd->enter($__internal_0c205a3c2f8d0fb930441dbf06f863d0b7b8b2cac38c37b9fa9becb271344cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 3
        echo "

";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "



<div class=\"modal-dialog\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3 class=\"modal-title-site text-center\"> REGISTER </h3>
        </div>



        <div class=\"form-group reg-username\">
            <div>
                <strong>login:</strong><br>
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control input", "size" => "20", "placeholder" => "nom")));
        // line 21
        echo "


                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
            </div>  </div>

        <div class=\"form-group reg-email\">
            <div>
                <strong>email:</strong><br>

                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control input", "size" => "20", "placeholder" => "adresse email")));
        // line 32
        echo "

                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "

            </div>
        </div>
        <div class=\"form-group reg-password\">
            <div>
                <strong>mot de passe :</strong><br>

                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control input", "size" => "20", "placeholder" => "mot de passe")));
        // line 43
        echo "


                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
            </div>   </div>

        <div class=\"form-group reg-password\">
            <div>
                <strong> confirmation :</strong><br>
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control input", "size" => "20", "placeholder" => "verification")));
        // line 53
        echo "

                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"input-field col s12\">

                <strong> sexe :</strong><br>
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget', array("attr" => array("class" => "span12", "placeholder" => " sexe")));
        // line 63
        echo "
            </div>
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'errors');
        echo "
        </div>


        <div class=\"form-group\">

            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'label');
        echo "
            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'widget', array("attr" => array("class" => "span12", "placeholder" => " ", "value" => "")));
        // line 73
        echo "
        </div>
        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'errors');
        echo "

        <div class=\"form-group\">

            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "span12", "placeholder" => " ", "value" => "")));
        // line 81
        echo "
        </div>
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'errors');
        echo "

        <div class=\"text-center\">
            <input type=\"submit\" class=\"btn btn-success\"  value=\"register\" />

        </div>
        ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


    </div>
    </div>





";
        
        $__internal_dacef9eb9f0f43a7085109c8f2b62350c6e854c997c451c5b70471c7e4b69734->leave($__internal_dacef9eb9f0f43a7085109c8f2b62350c6e854c997c451c5b70471c7e4b69734_prof);

        
        $__internal_0c205a3c2f8d0fb930441dbf06f863d0b7b8b2cac38c37b9fa9becb271344cdd->leave($__internal_0c205a3c2f8d0fb930441dbf06f863d0b7b8b2cac38c37b9fa9becb271344cdd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 89,  157 => 83,  153 => 81,  151 => 80,  147 => 79,  140 => 75,  136 => 73,  134 => 72,  130 => 71,  121 => 65,  117 => 63,  115 => 62,  105 => 55,  101 => 53,  99 => 52,  90 => 46,  85 => 43,  83 => 42,  72 => 34,  68 => 32,  66 => 31,  56 => 24,  51 => 21,  49 => 20,  31 => 5,  27 => 3,  25 => 2,);
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


{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}



<div class=\"modal-dialog\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3 class=\"modal-title-site text-center\"> REGISTER </h3>
        </div>



        <div class=\"form-group reg-username\">
            <div>
                <strong>login:</strong><br>
                {{ form_widget(form.username,{ 'attr': {'class': \"form-control input\",'size':\"20\",
                    'placeholder': \"nom\"} }) }}


                {{ form_errors(form.username) }}
            </div>  </div>

        <div class=\"form-group reg-email\">
            <div>
                <strong>email:</strong><br>

                {{ form_widget(form.email,{ 'attr': {'class': \"form-control input\",'size':\"20\",
                    'placeholder': \"adresse email\"} }) }}

                {{ form_errors(form.email) }}

            </div>
        </div>
        <div class=\"form-group reg-password\">
            <div>
                <strong>mot de passe :</strong><br>

                {{ form_widget(form.plainPassword.first,{ 'attr': {'class': \"form-control input\",'size':\"20\",
                    'placeholder': \"mot de passe\"} }) }}


                {{ form_errors(form.plainPassword.first) }}
            </div>   </div>

        <div class=\"form-group reg-password\">
            <div>
                <strong> confirmation :</strong><br>
                {{ form_widget(form.plainPassword.second,{ 'attr': {'class': \"form-control input\",'size':\"20\",
                    'placeholder': \"verification\"} }) }}

                {{ form_errors(form.plainPassword.second) }}
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"input-field col s12\">

                <strong> sexe :</strong><br>
                {{ form_widget(form.sexe,{ 'attr': {'class': \"span12\",
                    'placeholder': \" sexe\"} }) }}
            </div>
            {{ form_errors(form.sexe) }}
        </div>


        <div class=\"form-group\">

            {{ form_label(form.datenaissance) }}
            {{ form_widget(form.datenaissance,{ 'attr': {'class': \"span12\",
                'placeholder': \" \",value:\"\"} }) }}
        </div>
        {{ form_errors(form.datenaissance) }}

        <div class=\"form-group\">

            {{ form_label(form.nom) }}
            {{ form_widget(form.nom,{ 'attr': {'class': \"span12\",
                'placeholder': \" \",value:\"\"} }) }}
        </div>
        {{ form_errors(form.datenaissance) }}

        <div class=\"text-center\">
            <input type=\"submit\" class=\"btn btn-success\"  value=\"register\" />

        </div>
        {{ form_end(form) }}


    </div>
    </div>





", "FOSUserBundle:Registration:register_content.html.twig", "C:\\wamp64\\www\\weeeb\\src\\MainBundle/Resources/views/Registration/register_content.html.twig");
    }
}
