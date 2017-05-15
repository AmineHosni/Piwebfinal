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
        $__internal_3dc5b675d9f8066085ef220b6a0e4c5c7c69e8b8fb210d08ecaf722593b17966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dc5b675d9f8066085ef220b6a0e4c5c7c69e8b8fb210d08ecaf722593b17966->enter($__internal_3dc5b675d9f8066085ef220b6a0e4c5c7c69e8b8fb210d08ecaf722593b17966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2a695f4032afb9a4da02b7e794604e3977b1bf302f78f3cda875c2b28afd36cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a695f4032afb9a4da02b7e794604e3977b1bf302f78f3cda875c2b28afd36cb->enter($__internal_2a695f4032afb9a4da02b7e794604e3977b1bf302f78f3cda875c2b28afd36cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dc5b675d9f8066085ef220b6a0e4c5c7c69e8b8fb210d08ecaf722593b17966->leave($__internal_3dc5b675d9f8066085ef220b6a0e4c5c7c69e8b8fb210d08ecaf722593b17966_prof);

        
        $__internal_2a695f4032afb9a4da02b7e794604e3977b1bf302f78f3cda875c2b28afd36cb->leave($__internal_2a695f4032afb9a4da02b7e794604e3977b1bf302f78f3cda875c2b28afd36cb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_db85abb59aa4fd0d9513528fcfd22ae64ecad6ad8d239389849ab3b293def724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db85abb59aa4fd0d9513528fcfd22ae64ecad6ad8d239389849ab3b293def724->enter($__internal_db85abb59aa4fd0d9513528fcfd22ae64ecad6ad8d239389849ab3b293def724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3cce9a860d00bf44b4fca1db38119bcbf92f717c7adccd1a61c9e4828c097703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cce9a860d00bf44b4fca1db38119bcbf92f717c7adccd1a61c9e4828c097703->enter($__internal_3cce9a860d00bf44b4fca1db38119bcbf92f717c7adccd1a61c9e4828c097703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3cce9a860d00bf44b4fca1db38119bcbf92f717c7adccd1a61c9e4828c097703->leave($__internal_3cce9a860d00bf44b4fca1db38119bcbf92f717c7adccd1a61c9e4828c097703_prof);

        
        $__internal_db85abb59aa4fd0d9513528fcfd22ae64ecad6ad8d239389849ab3b293def724->leave($__internal_db85abb59aa4fd0d9513528fcfd22ae64ecad6ad8d239389849ab3b293def724_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a9c67fee6082cb5877c5980b012e70e7cdfb413be15e4e78d466855262f9d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9c67fee6082cb5877c5980b012e70e7cdfb413be15e4e78d466855262f9d33->enter($__internal_3a9c67fee6082cb5877c5980b012e70e7cdfb413be15e4e78d466855262f9d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ff0e1e67a1dd4d2b55c3d0c026dfb0507abd42c639ba118217fed58703ec7a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff0e1e67a1dd4d2b55c3d0c026dfb0507abd42c639ba118217fed58703ec7a81->enter($__internal_ff0e1e67a1dd4d2b55c3d0c026dfb0507abd42c639ba118217fed58703ec7a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ff0e1e67a1dd4d2b55c3d0c026dfb0507abd42c639ba118217fed58703ec7a81->leave($__internal_ff0e1e67a1dd4d2b55c3d0c026dfb0507abd42c639ba118217fed58703ec7a81_prof);

        
        $__internal_3a9c67fee6082cb5877c5980b012e70e7cdfb413be15e4e78d466855262f9d33->leave($__internal_3a9c67fee6082cb5877c5980b012e70e7cdfb413be15e4e78d466855262f9d33_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d961547164375ee7f846c14583fc7938d1ce39d9d905789acf11d7bd03260aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d961547164375ee7f846c14583fc7938d1ce39d9d905789acf11d7bd03260aa5->enter($__internal_d961547164375ee7f846c14583fc7938d1ce39d9d905789acf11d7bd03260aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_64793b8814f23e0197fb99585d2bab26fa60853dae80d7e854e62eb886cf65e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64793b8814f23e0197fb99585d2bab26fa60853dae80d7e854e62eb886cf65e3->enter($__internal_64793b8814f23e0197fb99585d2bab26fa60853dae80d7e854e62eb886cf65e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_64793b8814f23e0197fb99585d2bab26fa60853dae80d7e854e62eb886cf65e3->leave($__internal_64793b8814f23e0197fb99585d2bab26fa60853dae80d7e854e62eb886cf65e3_prof);

        
        $__internal_d961547164375ee7f846c14583fc7938d1ce39d9d905789acf11d7bd03260aa5->leave($__internal_d961547164375ee7f846c14583fc7938d1ce39d9d905789acf11d7bd03260aa5_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\test\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
