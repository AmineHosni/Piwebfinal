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
        $__internal_d3cf94f4a0141d789b14c30e07ed28dd9ccce92655a9fdbcf7d9bbd313a6d5df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3cf94f4a0141d789b14c30e07ed28dd9ccce92655a9fdbcf7d9bbd313a6d5df->enter($__internal_d3cf94f4a0141d789b14c30e07ed28dd9ccce92655a9fdbcf7d9bbd313a6d5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d7633454c3d87697042f6bf2a22171c919c93a487e07a2146c7fea26cfb272d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7633454c3d87697042f6bf2a22171c919c93a487e07a2146c7fea26cfb272d6->enter($__internal_d7633454c3d87697042f6bf2a22171c919c93a487e07a2146c7fea26cfb272d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3cf94f4a0141d789b14c30e07ed28dd9ccce92655a9fdbcf7d9bbd313a6d5df->leave($__internal_d3cf94f4a0141d789b14c30e07ed28dd9ccce92655a9fdbcf7d9bbd313a6d5df_prof);

        
        $__internal_d7633454c3d87697042f6bf2a22171c919c93a487e07a2146c7fea26cfb272d6->leave($__internal_d7633454c3d87697042f6bf2a22171c919c93a487e07a2146c7fea26cfb272d6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_07f516ffa82eecb0cad6575ffad40c5b35dbd5cb32731ededa0304a5eb49b7b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f516ffa82eecb0cad6575ffad40c5b35dbd5cb32731ededa0304a5eb49b7b1->enter($__internal_07f516ffa82eecb0cad6575ffad40c5b35dbd5cb32731ededa0304a5eb49b7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_82e1a06ca2e347f8c33df3afecbde6a5e1df3ffb7fc91403ce183050827d7862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e1a06ca2e347f8c33df3afecbde6a5e1df3ffb7fc91403ce183050827d7862->enter($__internal_82e1a06ca2e347f8c33df3afecbde6a5e1df3ffb7fc91403ce183050827d7862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_82e1a06ca2e347f8c33df3afecbde6a5e1df3ffb7fc91403ce183050827d7862->leave($__internal_82e1a06ca2e347f8c33df3afecbde6a5e1df3ffb7fc91403ce183050827d7862_prof);

        
        $__internal_07f516ffa82eecb0cad6575ffad40c5b35dbd5cb32731ededa0304a5eb49b7b1->leave($__internal_07f516ffa82eecb0cad6575ffad40c5b35dbd5cb32731ededa0304a5eb49b7b1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e7f8731bbe7dd701114377bec0d93da386cfc97607268a367f5a0e42643cc09b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f8731bbe7dd701114377bec0d93da386cfc97607268a367f5a0e42643cc09b->enter($__internal_e7f8731bbe7dd701114377bec0d93da386cfc97607268a367f5a0e42643cc09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_37b7ba8097d8b174653ece379969a17bf9c1b25bb7bb2bca681d9707d08d66b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b7ba8097d8b174653ece379969a17bf9c1b25bb7bb2bca681d9707d08d66b8->enter($__internal_37b7ba8097d8b174653ece379969a17bf9c1b25bb7bb2bca681d9707d08d66b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_37b7ba8097d8b174653ece379969a17bf9c1b25bb7bb2bca681d9707d08d66b8->leave($__internal_37b7ba8097d8b174653ece379969a17bf9c1b25bb7bb2bca681d9707d08d66b8_prof);

        
        $__internal_e7f8731bbe7dd701114377bec0d93da386cfc97607268a367f5a0e42643cc09b->leave($__internal_e7f8731bbe7dd701114377bec0d93da386cfc97607268a367f5a0e42643cc09b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_361ee0241182918e3a99de2966d6d6b50d82bf490467bfdbfb1ce24cea8531cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_361ee0241182918e3a99de2966d6d6b50d82bf490467bfdbfb1ce24cea8531cb->enter($__internal_361ee0241182918e3a99de2966d6d6b50d82bf490467bfdbfb1ce24cea8531cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a67c13e8723a15389bf2a54a55489aa539dd95191573e275a023f79b567c96dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67c13e8723a15389bf2a54a55489aa539dd95191573e275a023f79b567c96dc->enter($__internal_a67c13e8723a15389bf2a54a55489aa539dd95191573e275a023f79b567c96dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a67c13e8723a15389bf2a54a55489aa539dd95191573e275a023f79b567c96dc->leave($__internal_a67c13e8723a15389bf2a54a55489aa539dd95191573e275a023f79b567c96dc_prof);

        
        $__internal_361ee0241182918e3a99de2966d6d6b50d82bf490467bfdbfb1ce24cea8531cb->leave($__internal_361ee0241182918e3a99de2966d6d6b50d82bf490467bfdbfb1ce24cea8531cb_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
