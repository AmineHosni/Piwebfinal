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
        $__internal_7e86f07b636aeb0114fe7c20cd2c8383dae8055d5e14f719eb67fdd78d1f6520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e86f07b636aeb0114fe7c20cd2c8383dae8055d5e14f719eb67fdd78d1f6520->enter($__internal_7e86f07b636aeb0114fe7c20cd2c8383dae8055d5e14f719eb67fdd78d1f6520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7b5f7816d007f3c6c2b54ad9d139c526fc3f1e1714a7ba326589fcb89eae6e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5f7816d007f3c6c2b54ad9d139c526fc3f1e1714a7ba326589fcb89eae6e99->enter($__internal_7b5f7816d007f3c6c2b54ad9d139c526fc3f1e1714a7ba326589fcb89eae6e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e86f07b636aeb0114fe7c20cd2c8383dae8055d5e14f719eb67fdd78d1f6520->leave($__internal_7e86f07b636aeb0114fe7c20cd2c8383dae8055d5e14f719eb67fdd78d1f6520_prof);

        
        $__internal_7b5f7816d007f3c6c2b54ad9d139c526fc3f1e1714a7ba326589fcb89eae6e99->leave($__internal_7b5f7816d007f3c6c2b54ad9d139c526fc3f1e1714a7ba326589fcb89eae6e99_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_236bffd04dcb31a8ff8171ae04252b607a1d61a8e97ac4510326d68b1dd8c569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236bffd04dcb31a8ff8171ae04252b607a1d61a8e97ac4510326d68b1dd8c569->enter($__internal_236bffd04dcb31a8ff8171ae04252b607a1d61a8e97ac4510326d68b1dd8c569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_72ca0aeceea440f957ad441abf36a627adb269f2997cbb65bc7eac73bea8c9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ca0aeceea440f957ad441abf36a627adb269f2997cbb65bc7eac73bea8c9fd->enter($__internal_72ca0aeceea440f957ad441abf36a627adb269f2997cbb65bc7eac73bea8c9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72ca0aeceea440f957ad441abf36a627adb269f2997cbb65bc7eac73bea8c9fd->leave($__internal_72ca0aeceea440f957ad441abf36a627adb269f2997cbb65bc7eac73bea8c9fd_prof);

        
        $__internal_236bffd04dcb31a8ff8171ae04252b607a1d61a8e97ac4510326d68b1dd8c569->leave($__internal_236bffd04dcb31a8ff8171ae04252b607a1d61a8e97ac4510326d68b1dd8c569_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_191f1eb94af1eaf9050c4d23f16d3243d0dc1676da97ea3da0965f337831adb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191f1eb94af1eaf9050c4d23f16d3243d0dc1676da97ea3da0965f337831adb7->enter($__internal_191f1eb94af1eaf9050c4d23f16d3243d0dc1676da97ea3da0965f337831adb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_99a0e6d21d8c6935ef0a4857bd5d4a8fb59acb62264f145a509a581ffd3983cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a0e6d21d8c6935ef0a4857bd5d4a8fb59acb62264f145a509a581ffd3983cf->enter($__internal_99a0e6d21d8c6935ef0a4857bd5d4a8fb59acb62264f145a509a581ffd3983cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_99a0e6d21d8c6935ef0a4857bd5d4a8fb59acb62264f145a509a581ffd3983cf->leave($__internal_99a0e6d21d8c6935ef0a4857bd5d4a8fb59acb62264f145a509a581ffd3983cf_prof);

        
        $__internal_191f1eb94af1eaf9050c4d23f16d3243d0dc1676da97ea3da0965f337831adb7->leave($__internal_191f1eb94af1eaf9050c4d23f16d3243d0dc1676da97ea3da0965f337831adb7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e31ac1b7975c3539625fb7ec654ef668fdc6e2104f6ef74338dea94a43b2bb32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e31ac1b7975c3539625fb7ec654ef668fdc6e2104f6ef74338dea94a43b2bb32->enter($__internal_e31ac1b7975c3539625fb7ec654ef668fdc6e2104f6ef74338dea94a43b2bb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a4003edf1d9845852cbda38d1c71a2240ad275a3353098fa9f22bf7c8e91758b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4003edf1d9845852cbda38d1c71a2240ad275a3353098fa9f22bf7c8e91758b->enter($__internal_a4003edf1d9845852cbda38d1c71a2240ad275a3353098fa9f22bf7c8e91758b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a4003edf1d9845852cbda38d1c71a2240ad275a3353098fa9f22bf7c8e91758b->leave($__internal_a4003edf1d9845852cbda38d1c71a2240ad275a3353098fa9f22bf7c8e91758b_prof);

        
        $__internal_e31ac1b7975c3539625fb7ec654ef668fdc6e2104f6ef74338dea94a43b2bb32->leave($__internal_e31ac1b7975c3539625fb7ec654ef668fdc6e2104f6ef74338dea94a43b2bb32_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\test\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
