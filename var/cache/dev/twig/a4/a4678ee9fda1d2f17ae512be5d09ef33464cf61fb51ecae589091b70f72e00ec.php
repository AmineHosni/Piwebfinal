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
        $__internal_885150675bc065c7bc6a53f2cce11ef925538ea23a8ecad330c746ef1dd1cf3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885150675bc065c7bc6a53f2cce11ef925538ea23a8ecad330c746ef1dd1cf3b->enter($__internal_885150675bc065c7bc6a53f2cce11ef925538ea23a8ecad330c746ef1dd1cf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7df395c37e8dc31e22bfc078ed68e76ac817cd6434bcf14eee5d2c57546a994d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df395c37e8dc31e22bfc078ed68e76ac817cd6434bcf14eee5d2c57546a994d->enter($__internal_7df395c37e8dc31e22bfc078ed68e76ac817cd6434bcf14eee5d2c57546a994d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_885150675bc065c7bc6a53f2cce11ef925538ea23a8ecad330c746ef1dd1cf3b->leave($__internal_885150675bc065c7bc6a53f2cce11ef925538ea23a8ecad330c746ef1dd1cf3b_prof);

        
        $__internal_7df395c37e8dc31e22bfc078ed68e76ac817cd6434bcf14eee5d2c57546a994d->leave($__internal_7df395c37e8dc31e22bfc078ed68e76ac817cd6434bcf14eee5d2c57546a994d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56c8a1979d11eb1cf8a386358ae680dc9c1a64eac2ba6b83934aae24c8c94d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56c8a1979d11eb1cf8a386358ae680dc9c1a64eac2ba6b83934aae24c8c94d1d->enter($__internal_56c8a1979d11eb1cf8a386358ae680dc9c1a64eac2ba6b83934aae24c8c94d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1975cd1310996778eb8370e6cd58ba727201945f2152b5b0f0740c7a0bae991e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1975cd1310996778eb8370e6cd58ba727201945f2152b5b0f0740c7a0bae991e->enter($__internal_1975cd1310996778eb8370e6cd58ba727201945f2152b5b0f0740c7a0bae991e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1975cd1310996778eb8370e6cd58ba727201945f2152b5b0f0740c7a0bae991e->leave($__internal_1975cd1310996778eb8370e6cd58ba727201945f2152b5b0f0740c7a0bae991e_prof);

        
        $__internal_56c8a1979d11eb1cf8a386358ae680dc9c1a64eac2ba6b83934aae24c8c94d1d->leave($__internal_56c8a1979d11eb1cf8a386358ae680dc9c1a64eac2ba6b83934aae24c8c94d1d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9713957f9d070fd268e0583fef662e1f182ce8c6ffd667d18afac7ab1eeb262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9713957f9d070fd268e0583fef662e1f182ce8c6ffd667d18afac7ab1eeb262->enter($__internal_d9713957f9d070fd268e0583fef662e1f182ce8c6ffd667d18afac7ab1eeb262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ce9d17b7fb1722ebc345001c356a4048ffc5d09d84f957988716f869165b8f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9d17b7fb1722ebc345001c356a4048ffc5d09d84f957988716f869165b8f89->enter($__internal_ce9d17b7fb1722ebc345001c356a4048ffc5d09d84f957988716f869165b8f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ce9d17b7fb1722ebc345001c356a4048ffc5d09d84f957988716f869165b8f89->leave($__internal_ce9d17b7fb1722ebc345001c356a4048ffc5d09d84f957988716f869165b8f89_prof);

        
        $__internal_d9713957f9d070fd268e0583fef662e1f182ce8c6ffd667d18afac7ab1eeb262->leave($__internal_d9713957f9d070fd268e0583fef662e1f182ce8c6ffd667d18afac7ab1eeb262_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b15330ede3d77cfbb5c5306a0098ab1c149b02c0cd712b2363003435723f868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b15330ede3d77cfbb5c5306a0098ab1c149b02c0cd712b2363003435723f868->enter($__internal_7b15330ede3d77cfbb5c5306a0098ab1c149b02c0cd712b2363003435723f868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_65dbe4bca2bbb89740fe2437b6b0e9c7aaa9c38fc5e58ef6d75041ce52454ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65dbe4bca2bbb89740fe2437b6b0e9c7aaa9c38fc5e58ef6d75041ce52454ac6->enter($__internal_65dbe4bca2bbb89740fe2437b6b0e9c7aaa9c38fc5e58ef6d75041ce52454ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_65dbe4bca2bbb89740fe2437b6b0e9c7aaa9c38fc5e58ef6d75041ce52454ac6->leave($__internal_65dbe4bca2bbb89740fe2437b6b0e9c7aaa9c38fc5e58ef6d75041ce52454ac6_prof);

        
        $__internal_7b15330ede3d77cfbb5c5306a0098ab1c149b02c0cd712b2363003435723f868->leave($__internal_7b15330ede3d77cfbb5c5306a0098ab1c149b02c0cd712b2363003435723f868_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\weeeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
