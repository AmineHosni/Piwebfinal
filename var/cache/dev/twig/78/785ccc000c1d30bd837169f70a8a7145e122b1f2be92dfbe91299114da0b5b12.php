<?php

/* venteflash/new.html.twig */
class __TwigTemplate_83f550d5ae10eea9340bd87d78a367987e78dcb602d89d55684d88589b16ca21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "venteflash/new.html.twig", 1);
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
        $__internal_2b3990fae039da7518d21545c85d01164a8b00f5e570df95e10b7171af4e25b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3990fae039da7518d21545c85d01164a8b00f5e570df95e10b7171af4e25b7->enter($__internal_2b3990fae039da7518d21545c85d01164a8b00f5e570df95e10b7171af4e25b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venteflash/new.html.twig"));

        $__internal_14e885eea169bf4ebd939fab9fe5bc436395891a2f93bd21b87ffac9987e908d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e885eea169bf4ebd939fab9fe5bc436395891a2f93bd21b87ffac9987e908d->enter($__internal_14e885eea169bf4ebd939fab9fe5bc436395891a2f93bd21b87ffac9987e908d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venteflash/new.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b3990fae039da7518d21545c85d01164a8b00f5e570df95e10b7171af4e25b7->leave($__internal_2b3990fae039da7518d21545c85d01164a8b00f5e570df95e10b7171af4e25b7_prof);

        
        $__internal_14e885eea169bf4ebd939fab9fe5bc436395891a2f93bd21b87ffac9987e908d->leave($__internal_14e885eea169bf4ebd939fab9fe5bc436395891a2f93bd21b87ffac9987e908d_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_805eb6727084b3a272103a1ccc933e9261263ab652dc4e3e8a509583b4c0f5df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_805eb6727084b3a272103a1ccc933e9261263ab652dc4e3e8a509583b4c0f5df->enter($__internal_805eb6727084b3a272103a1ccc933e9261263ab652dc4e3e8a509583b4c0f5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3de6a5bc905431b98bc0e6eac07715b00ee45b057ec39ca30993cf1a7dcac943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de6a5bc905431b98bc0e6eac07715b00ee45b057ec39ca30993cf1a7dcac943->enter($__internal_3de6a5bc905431b98bc0e6eac07715b00ee45b057ec39ca30993cf1a7dcac943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<h1>creation d'une vente flash</h1>

<div class=\"row\">
    <div class=\"col-lg-6\">

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <h3>Theme:</h3>       ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "theme", array()), 'widget');
        echo "

        <h3>titre:</h3>       ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "

        <h3>Image:</h3>  ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageFile", array()), 'widget');
        echo "

        <h3>Durée:</h3>  ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datedebut", array()), 'widget');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datedebut", array()), 'errors');
        echo "
        <h3>Durée:</h3>  ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "finish", array()), 'widget');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "finish", array()), 'errors');
        echo "

        <div class=\"text-center\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "span12", "placeholder" => " ", "value" => "")));
        // line 25
        echo "

        </div>
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        <ul>
            <li>
              <a  class=\"btn-success href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("venteflash_index");
        echo "\"><i class=\"glyphicon glyphicon-backward></i>Back to the list</a>
            </li>
        </ul><div>





        </div>    </div>    </div>
";
        
        $__internal_3de6a5bc905431b98bc0e6eac07715b00ee45b057ec39ca30993cf1a7dcac943->leave($__internal_3de6a5bc905431b98bc0e6eac07715b00ee45b057ec39ca30993cf1a7dcac943_prof);

        
        $__internal_805eb6727084b3a272103a1ccc933e9261263ab652dc4e3e8a509583b4c0f5df->leave($__internal_805eb6727084b3a272103a1ccc933e9261263ab652dc4e3e8a509583b4c0f5df_prof);

    }

    public function getTemplateName()
    {
        return "venteflash/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 33,  107 => 29,  103 => 28,  98 => 25,  96 => 24,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  73 => 16,  68 => 14,  63 => 12,  59 => 11,  52 => 6,  43 => 5,  33 => 1,  31 => 2,  11 => 1,);
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


{% block content %}
<h1>creation d'une vente flash</h1>

<div class=\"row\">
    <div class=\"col-lg-6\">

        {{ form_start(form) }}
        <h3>Theme:</h3>       {{ form_widget(form.theme) }}

        <h3>titre:</h3>       {{ form_widget(form.nom) }}

        <h3>Image:</h3>  {{ form_widget(form.imageFile) }}

        <h3>Durée:</h3>  {{ form_widget(form.datedebut) }}
        {{ form_errors(form.datedebut) }}
        <h3>Durée:</h3>  {{ form_widget(form.finish) }}
        {{ form_errors(form.finish) }}

        <div class=\"text-center\">
            {{ form_widget(form.nom,{ 'attr': {'class': \"span12\",
                'placeholder': \" \",value:\"\"} }) }}

        </div>
        {{ form_errors(form) }}
        {{ form_rest(form) }}

        <ul>
            <li>
              <a  class=\"btn-success href=\"{{ path('venteflash_index') }}\"><i class=\"glyphicon glyphicon-backward></i>Back to the list</a>
            </li>
        </ul><div>





        </div>    </div>    </div>
{% endblock %}
", "venteflash/new.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\venteflash\\new.html.twig");
    }
}
