<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_becf51e177eb5061b22e6e4a151bf845526323b22ee1582093f8a500b320a5fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_486ed4934ec19d2c18039fe0e44460b95b0fcab99b962b2fe336641227d2ffa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_486ed4934ec19d2c18039fe0e44460b95b0fcab99b962b2fe336641227d2ffa8->enter($__internal_486ed4934ec19d2c18039fe0e44460b95b0fcab99b962b2fe336641227d2ffa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6981ab2eccf48e963be23e03590818eac81c1b7e815b13978cf632e38d3ddf5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6981ab2eccf48e963be23e03590818eac81c1b7e815b13978cf632e38d3ddf5e->enter($__internal_6981ab2eccf48e963be23e03590818eac81c1b7e815b13978cf632e38d3ddf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_486ed4934ec19d2c18039fe0e44460b95b0fcab99b962b2fe336641227d2ffa8->leave($__internal_486ed4934ec19d2c18039fe0e44460b95b0fcab99b962b2fe336641227d2ffa8_prof);

        
        $__internal_6981ab2eccf48e963be23e03590818eac81c1b7e815b13978cf632e38d3ddf5e->leave($__internal_6981ab2eccf48e963be23e03590818eac81c1b7e815b13978cf632e38d3ddf5e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ce8c811e246302e0a71b2fc75fd60bb1503fc90a9dab87594375697ed10531f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8c811e246302e0a71b2fc75fd60bb1503fc90a9dab87594375697ed10531f3->enter($__internal_ce8c811e246302e0a71b2fc75fd60bb1503fc90a9dab87594375697ed10531f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e75d99196549f7f111bf3b81f6843697dfa2c2f25be7a90cc2437ff0b33c379f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75d99196549f7f111bf3b81f6843697dfa2c2f25be7a90cc2437ff0b33c379f->enter($__internal_e75d99196549f7f111bf3b81f6843697dfa2c2f25be7a90cc2437ff0b33c379f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e75d99196549f7f111bf3b81f6843697dfa2c2f25be7a90cc2437ff0b33c379f->leave($__internal_e75d99196549f7f111bf3b81f6843697dfa2c2f25be7a90cc2437ff0b33c379f_prof);

        
        $__internal_ce8c811e246302e0a71b2fc75fd60bb1503fc90a9dab87594375697ed10531f3->leave($__internal_ce8c811e246302e0a71b2fc75fd60bb1503fc90a9dab87594375697ed10531f3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a459de94dee0f3ea2c5701238161ceb61a22a91fc0975c7f4e634ae8e1607322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a459de94dee0f3ea2c5701238161ceb61a22a91fc0975c7f4e634ae8e1607322->enter($__internal_a459de94dee0f3ea2c5701238161ceb61a22a91fc0975c7f4e634ae8e1607322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_30080496e3942a7cb495f189ba6174f00627a3ae74a8ef97a096245d6450bf66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30080496e3942a7cb495f189ba6174f00627a3ae74a8ef97a096245d6450bf66->enter($__internal_30080496e3942a7cb495f189ba6174f00627a3ae74a8ef97a096245d6450bf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_30080496e3942a7cb495f189ba6174f00627a3ae74a8ef97a096245d6450bf66->leave($__internal_30080496e3942a7cb495f189ba6174f00627a3ae74a8ef97a096245d6450bf66_prof);

        
        $__internal_a459de94dee0f3ea2c5701238161ceb61a22a91fc0975c7f4e634ae8e1607322->leave($__internal_a459de94dee0f3ea2c5701238161ceb61a22a91fc0975c7f4e634ae8e1607322_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5f885e57fb0fe723e9b7d463822cc35ce0ecfee21684eb4d2cf6470ade88381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f885e57fb0fe723e9b7d463822cc35ce0ecfee21684eb4d2cf6470ade88381->enter($__internal_a5f885e57fb0fe723e9b7d463822cc35ce0ecfee21684eb4d2cf6470ade88381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fca72897484d5c9f5a9dade9b28191f4da765742fd27617c20ebfec02cf7cf93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca72897484d5c9f5a9dade9b28191f4da765742fd27617c20ebfec02cf7cf93->enter($__internal_fca72897484d5c9f5a9dade9b28191f4da765742fd27617c20ebfec02cf7cf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fca72897484d5c9f5a9dade9b28191f4da765742fd27617c20ebfec02cf7cf93->leave($__internal_fca72897484d5c9f5a9dade9b28191f4da765742fd27617c20ebfec02cf7cf93_prof);

        
        $__internal_a5f885e57fb0fe723e9b7d463822cc35ce0ecfee21684eb4d2cf6470ade88381->leave($__internal_a5f885e57fb0fe723e9b7d463822cc35ce0ecfee21684eb4d2cf6470ade88381_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\weeeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
