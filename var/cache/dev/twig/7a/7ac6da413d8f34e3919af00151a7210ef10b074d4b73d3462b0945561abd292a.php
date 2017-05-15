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
        $__internal_89befbbcd6723cd541708f1bb5c9ad9d5ae4a47aaf475a85d3a0726b3ebac1b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89befbbcd6723cd541708f1bb5c9ad9d5ae4a47aaf475a85d3a0726b3ebac1b9->enter($__internal_89befbbcd6723cd541708f1bb5c9ad9d5ae4a47aaf475a85d3a0726b3ebac1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_32e18b060474b18bc6fef4fd1eb1535584cce0e0f54954c0d6a66d69f2cd6b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e18b060474b18bc6fef4fd1eb1535584cce0e0f54954c0d6a66d69f2cd6b29->enter($__internal_32e18b060474b18bc6fef4fd1eb1535584cce0e0f54954c0d6a66d69f2cd6b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89befbbcd6723cd541708f1bb5c9ad9d5ae4a47aaf475a85d3a0726b3ebac1b9->leave($__internal_89befbbcd6723cd541708f1bb5c9ad9d5ae4a47aaf475a85d3a0726b3ebac1b9_prof);

        
        $__internal_32e18b060474b18bc6fef4fd1eb1535584cce0e0f54954c0d6a66d69f2cd6b29->leave($__internal_32e18b060474b18bc6fef4fd1eb1535584cce0e0f54954c0d6a66d69f2cd6b29_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_304ea62d6f989dacef9f5f486ba550b11cc2b6696f90b6c0e1311724df7f85de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_304ea62d6f989dacef9f5f486ba550b11cc2b6696f90b6c0e1311724df7f85de->enter($__internal_304ea62d6f989dacef9f5f486ba550b11cc2b6696f90b6c0e1311724df7f85de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0e040f5d865456715ffe27112b069469ad6ccac086be551773fec9c3a9491889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e040f5d865456715ffe27112b069469ad6ccac086be551773fec9c3a9491889->enter($__internal_0e040f5d865456715ffe27112b069469ad6ccac086be551773fec9c3a9491889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_0e040f5d865456715ffe27112b069469ad6ccac086be551773fec9c3a9491889->leave($__internal_0e040f5d865456715ffe27112b069469ad6ccac086be551773fec9c3a9491889_prof);

        
        $__internal_304ea62d6f989dacef9f5f486ba550b11cc2b6696f90b6c0e1311724df7f85de->leave($__internal_304ea62d6f989dacef9f5f486ba550b11cc2b6696f90b6c0e1311724df7f85de_prof);

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
{% endblock fos_user_content %}", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\test\\src\\MainBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
