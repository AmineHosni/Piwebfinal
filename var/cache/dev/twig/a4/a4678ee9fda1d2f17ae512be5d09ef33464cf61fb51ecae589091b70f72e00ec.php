<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_44422672c59fd6a628e75674e5b25c644da57622f7dfdaa65837b253a67fab8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_61bd6bc22bc7d68969dd91db8c600dbe6ff3c550b70999124bee497c051feb38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61bd6bc22bc7d68969dd91db8c600dbe6ff3c550b70999124bee497c051feb38->enter($__internal_61bd6bc22bc7d68969dd91db8c600dbe6ff3c550b70999124bee497c051feb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1df7d7d07147d58482a5d98ff435cd22136f46f8443ac0b929d590bd7c7a39fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df7d7d07147d58482a5d98ff435cd22136f46f8443ac0b929d590bd7c7a39fa->enter($__internal_1df7d7d07147d58482a5d98ff435cd22136f46f8443ac0b929d590bd7c7a39fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61bd6bc22bc7d68969dd91db8c600dbe6ff3c550b70999124bee497c051feb38->leave($__internal_61bd6bc22bc7d68969dd91db8c600dbe6ff3c550b70999124bee497c051feb38_prof);

        
        $__internal_1df7d7d07147d58482a5d98ff435cd22136f46f8443ac0b929d590bd7c7a39fa->leave($__internal_1df7d7d07147d58482a5d98ff435cd22136f46f8443ac0b929d590bd7c7a39fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1c14d7bce2ad8b3ef28096ecf661f8c97b5b38b48001e17bbdbdc711c884c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c14d7bce2ad8b3ef28096ecf661f8c97b5b38b48001e17bbdbdc711c884c03->enter($__internal_b1c14d7bce2ad8b3ef28096ecf661f8c97b5b38b48001e17bbdbdc711c884c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4c7558e089289c8fe4ebbcf633e262b69e1cc2970e886bb8b97a3e73778bfcf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7558e089289c8fe4ebbcf633e262b69e1cc2970e886bb8b97a3e73778bfcf6->enter($__internal_4c7558e089289c8fe4ebbcf633e262b69e1cc2970e886bb8b97a3e73778bfcf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4c7558e089289c8fe4ebbcf633e262b69e1cc2970e886bb8b97a3e73778bfcf6->leave($__internal_4c7558e089289c8fe4ebbcf633e262b69e1cc2970e886bb8b97a3e73778bfcf6_prof);

        
        $__internal_b1c14d7bce2ad8b3ef28096ecf661f8c97b5b38b48001e17bbdbdc711c884c03->leave($__internal_b1c14d7bce2ad8b3ef28096ecf661f8c97b5b38b48001e17bbdbdc711c884c03_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65efb5719cdf6d951ab06127616ff0cf3bc80d418cb2f4219bc93d4268d778a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65efb5719cdf6d951ab06127616ff0cf3bc80d418cb2f4219bc93d4268d778a9->enter($__internal_65efb5719cdf6d951ab06127616ff0cf3bc80d418cb2f4219bc93d4268d778a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d669e8f87a407ffb50b3c11867dbe7ded8281339c9983e4bccd35ac75b4a654e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d669e8f87a407ffb50b3c11867dbe7ded8281339c9983e4bccd35ac75b4a654e->enter($__internal_d669e8f87a407ffb50b3c11867dbe7ded8281339c9983e4bccd35ac75b4a654e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d669e8f87a407ffb50b3c11867dbe7ded8281339c9983e4bccd35ac75b4a654e->leave($__internal_d669e8f87a407ffb50b3c11867dbe7ded8281339c9983e4bccd35ac75b4a654e_prof);

        
        $__internal_65efb5719cdf6d951ab06127616ff0cf3bc80d418cb2f4219bc93d4268d778a9->leave($__internal_65efb5719cdf6d951ab06127616ff0cf3bc80d418cb2f4219bc93d4268d778a9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c18893c09aa8a1e4ef9f1a14a70d25f7306e090ca1e07ab51805baef7ea1b27a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c18893c09aa8a1e4ef9f1a14a70d25f7306e090ca1e07ab51805baef7ea1b27a->enter($__internal_c18893c09aa8a1e4ef9f1a14a70d25f7306e090ca1e07ab51805baef7ea1b27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_18b3c5dc2ddffcc9703e82627c45d7c863cd4452b2514c90fb8f13b1b9b4cda5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b3c5dc2ddffcc9703e82627c45d7c863cd4452b2514c90fb8f13b1b9b4cda5->enter($__internal_18b3c5dc2ddffcc9703e82627c45d7c863cd4452b2514c90fb8f13b1b9b4cda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_18b3c5dc2ddffcc9703e82627c45d7c863cd4452b2514c90fb8f13b1b9b4cda5->leave($__internal_18b3c5dc2ddffcc9703e82627c45d7c863cd4452b2514c90fb8f13b1b9b4cda5_prof);

        
        $__internal_c18893c09aa8a1e4ef9f1a14a70d25f7306e090ca1e07ab51805baef7ea1b27a->leave($__internal_c18893c09aa8a1e4ef9f1a14a70d25f7306e090ca1e07ab51805baef7ea1b27a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
