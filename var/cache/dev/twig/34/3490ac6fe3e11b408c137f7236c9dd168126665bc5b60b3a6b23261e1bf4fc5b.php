<?php

/* categorie/new.html.twig */
class __TwigTemplate_ae5aa43f53190d4ac18912d8d8939a092f9c47e752c11d2fc303e8a03a582b64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base1.html.twig", "categorie/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9740aba42315e9bc4cc5c0f1c50f512cd0b24bb7146dd41f70c13dc3efdd906a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9740aba42315e9bc4cc5c0f1c50f512cd0b24bb7146dd41f70c13dc3efdd906a->enter($__internal_9740aba42315e9bc4cc5c0f1c50f512cd0b24bb7146dd41f70c13dc3efdd906a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/new.html.twig"));

        $__internal_e480551b5e9a262e4035bef047f273a4d247f8647a4826ab823e627c24e4c47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e480551b5e9a262e4035bef047f273a4d247f8647a4826ab823e627c24e4c47c->enter($__internal_e480551b5e9a262e4035bef047f273a4d247f8647a4826ab823e627c24e4c47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9740aba42315e9bc4cc5c0f1c50f512cd0b24bb7146dd41f70c13dc3efdd906a->leave($__internal_9740aba42315e9bc4cc5c0f1c50f512cd0b24bb7146dd41f70c13dc3efdd906a_prof);

        
        $__internal_e480551b5e9a262e4035bef047f273a4d247f8647a4826ab823e627c24e4c47c->leave($__internal_e480551b5e9a262e4035bef047f273a4d247f8647a4826ab823e627c24e4c47c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f1dc059c79083dd3292669bd28f9032274b845abc0b94c0688cbc33eb37e6d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f1dc059c79083dd3292669bd28f9032274b845abc0b94c0688cbc33eb37e6d2->enter($__internal_9f1dc059c79083dd3292669bd28f9032274b845abc0b94c0688cbc33eb37e6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e549e40c6546843bbe1d0e57e43a460909b415439e1c399e24cff1087025be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e549e40c6546843bbe1d0e57e43a460909b415439e1c399e24cff1087025be2->enter($__internal_8e549e40c6546843bbe1d0e57e43a460909b415439e1c399e24cff1087025be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"content-wrapper\">

<div class=\"row\">
        <div class=\"col-lg-12\">
            <a type=\"button\" class=\"btn btn-success btn-sm\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
        echo "\">Retourner vers la liste</a>
            <h1>creation nouvelle categorie</h1>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo " 

            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"form-group\">
                <div class=\"col-sm-offset-5 col-sm-6\">
                    <button type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Ajouter</button>
                </div>
            </div>
            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>    </div>

";
        
        $__internal_8e549e40c6546843bbe1d0e57e43a460909b415439e1c399e24cff1087025be2->leave($__internal_8e549e40c6546843bbe1d0e57e43a460909b415439e1c399e24cff1087025be2_prof);

        
        $__internal_9f1dc059c79083dd3292669bd28f9032274b845abc0b94c0688cbc33eb37e6d2->leave($__internal_9f1dc059c79083dd3292669bd28f9032274b845abc0b94c0688cbc33eb37e6d2_prof);

    }

    public function getTemplateName()
    {
        return "categorie/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  71 => 17,  66 => 15,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base1.html.twig\" %}
{% block body %}

<div class=\"content-wrapper\">

<div class=\"row\">
        <div class=\"col-lg-12\">
            <a type=\"button\" class=\"btn btn-success btn-sm\" href=\"{{ path('categorie_index') }}\">Retourner vers la liste</a>
            <h1>creation nouvelle categorie</h1>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            {{ form_start(form) }} 

            {{ form_widget(form) }}
            <div class=\"form-group\">
                <div class=\"col-sm-offset-5 col-sm-6\">
                    <button type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> Ajouter</button>
                </div>
            </div>
            {{ form_end(form) }}
        </div>
    </div>    </div>

{% endblock %}
", "categorie/new.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\Categorie\\new.html.twig");
    }
}
