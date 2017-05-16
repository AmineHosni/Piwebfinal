<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e63d5f02e72346f916aeb882145b5ef94572e0421f91b49b978d9784575f7007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b567b8dc492cb96ca16e9b0f78f18973ea43d3d88fb6119788a486c0a183e79b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b567b8dc492cb96ca16e9b0f78f18973ea43d3d88fb6119788a486c0a183e79b->enter($__internal_b567b8dc492cb96ca16e9b0f78f18973ea43d3d88fb6119788a486c0a183e79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4f2602939ef236639e9cd4dc899c021084ea0b6f6b68f7c728cd438d30725548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2602939ef236639e9cd4dc899c021084ea0b6f6b68f7c728cd438d30725548->enter($__internal_4f2602939ef236639e9cd4dc899c021084ea0b6f6b68f7c728cd438d30725548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b567b8dc492cb96ca16e9b0f78f18973ea43d3d88fb6119788a486c0a183e79b->leave($__internal_b567b8dc492cb96ca16e9b0f78f18973ea43d3d88fb6119788a486c0a183e79b_prof);

        
        $__internal_4f2602939ef236639e9cd4dc899c021084ea0b6f6b68f7c728cd438d30725548->leave($__internal_4f2602939ef236639e9cd4dc899c021084ea0b6f6b68f7c728cd438d30725548_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd4f98fd5afcc7745a4e5f1a891fb150f98b5e051fa70d8211527ee89477d63d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4f98fd5afcc7745a4e5f1a891fb150f98b5e051fa70d8211527ee89477d63d->enter($__internal_cd4f98fd5afcc7745a4e5f1a891fb150f98b5e051fa70d8211527ee89477d63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_935872a00371a1efc6b6d91c5d9765a0e303bd56cf2dc9fb06fc95ab8fe573ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935872a00371a1efc6b6d91c5d9765a0e303bd56cf2dc9fb06fc95ab8fe573ef->enter($__internal_935872a00371a1efc6b6d91c5d9765a0e303bd56cf2dc9fb06fc95ab8fe573ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_935872a00371a1efc6b6d91c5d9765a0e303bd56cf2dc9fb06fc95ab8fe573ef->leave($__internal_935872a00371a1efc6b6d91c5d9765a0e303bd56cf2dc9fb06fc95ab8fe573ef_prof);

        
        $__internal_cd4f98fd5afcc7745a4e5f1a891fb150f98b5e051fa70d8211527ee89477d63d->leave($__internal_cd4f98fd5afcc7745a4e5f1a891fb150f98b5e051fa70d8211527ee89477d63d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
