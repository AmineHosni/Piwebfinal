<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_ce6e3baa1c6ccea7cf744266d492c25b172eafde50db1fa313a5b66b1ac72d87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 2);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5070a4ae87bd22be2ffe58978d72e6bae6b21f659418076df3367bdbb77d97a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5070a4ae87bd22be2ffe58978d72e6bae6b21f659418076df3367bdbb77d97a5->enter($__internal_5070a4ae87bd22be2ffe58978d72e6bae6b21f659418076df3367bdbb77d97a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_6e1df47cb606715c4ece1e81fe593839dbc1115f1a6254a60343291fe31f5a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1df47cb606715c4ece1e81fe593839dbc1115f1a6254a60343291fe31f5a3b->enter($__internal_6e1df47cb606715c4ece1e81fe593839dbc1115f1a6254a60343291fe31f5a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5070a4ae87bd22be2ffe58978d72e6bae6b21f659418076df3367bdbb77d97a5->leave($__internal_5070a4ae87bd22be2ffe58978d72e6bae6b21f659418076df3367bdbb77d97a5_prof);

        
        $__internal_6e1df47cb606715c4ece1e81fe593839dbc1115f1a6254a60343291fe31f5a3b->leave($__internal_6e1df47cb606715c4ece1e81fe593839dbc1115f1a6254a60343291fe31f5a3b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57abb8af77dbd89fb2e4593b09a967607d2487515c27aac0cff1c61ad06e6402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57abb8af77dbd89fb2e4593b09a967607d2487515c27aac0cff1c61ad06e6402->enter($__internal_57abb8af77dbd89fb2e4593b09a967607d2487515c27aac0cff1c61ad06e6402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_45ff833edb64e6b02c1442613816eb68fdb3fb653847141767058e6fd95cbfae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ff833edb64e6b02c1442613816eb68fdb3fb653847141767058e6fd95cbfae->enter($__internal_45ff833edb64e6b02c1442613816eb68fdb3fb653847141767058e6fd95cbfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">



                <div class=\"col-md-12\">
                    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 13)->display($context);
        // line 14
        echo "                    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié?</a>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_45ff833edb64e6b02c1442613816eb68fdb3fb653847141767058e6fd95cbfae->leave($__internal_45ff833edb64e6b02c1442613816eb68fdb3fb653847141767058e6fd95cbfae_prof);

        
        $__internal_57abb8af77dbd89fb2e4593b09a967607d2487515c27aac0cff1c61ad06e6402->leave($__internal_57abb8af77dbd89fb2e4593b09a967607d2487515c27aac0cff1c61ad06e6402_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  60 => 14,  58 => 13,  49 => 6,  40 => 5,  11 => 2,);
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
{% extends \"FOSUserBundle::layout.html.twig\" %}


{% block fos_user_content %}

        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">



                <div class=\"col-md-12\">
                    {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
                    <a href=\"{{ path('fos_user_resetting_request') }}\">Mot de passe oublié?</a>
                </div>
            </div>
        </div>
    </div>
    {{form_end(form)}}
{% endblock fos_user_content %}", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\weeeb\\src\\MainBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
