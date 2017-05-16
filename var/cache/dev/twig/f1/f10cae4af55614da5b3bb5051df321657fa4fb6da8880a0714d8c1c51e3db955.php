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
        $__internal_9cd6b5ade352f635732cfd0518d7c249e521a26e7e1d2ae19449c91178bdd1b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd6b5ade352f635732cfd0518d7c249e521a26e7e1d2ae19449c91178bdd1b7->enter($__internal_9cd6b5ade352f635732cfd0518d7c249e521a26e7e1d2ae19449c91178bdd1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_bc8b1be0ac43f6a7b50cb6f68c1bff58799135b6ed9c68b55414ea5ded6861ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8b1be0ac43f6a7b50cb6f68c1bff58799135b6ed9c68b55414ea5ded6861ad->enter($__internal_bc8b1be0ac43f6a7b50cb6f68c1bff58799135b6ed9c68b55414ea5ded6861ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cd6b5ade352f635732cfd0518d7c249e521a26e7e1d2ae19449c91178bdd1b7->leave($__internal_9cd6b5ade352f635732cfd0518d7c249e521a26e7e1d2ae19449c91178bdd1b7_prof);

        
        $__internal_bc8b1be0ac43f6a7b50cb6f68c1bff58799135b6ed9c68b55414ea5ded6861ad->leave($__internal_bc8b1be0ac43f6a7b50cb6f68c1bff58799135b6ed9c68b55414ea5ded6861ad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_950ed69c67dc9ecc6664ecd9cfb287ecd200f95ed4ccfb424a8482fbcadb0a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_950ed69c67dc9ecc6664ecd9cfb287ecd200f95ed4ccfb424a8482fbcadb0a42->enter($__internal_950ed69c67dc9ecc6664ecd9cfb287ecd200f95ed4ccfb424a8482fbcadb0a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8188a19e314a5acbc200e5193e8cba2a0a31c5e29493d4186b767b71c07c94cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8188a19e314a5acbc200e5193e8cba2a0a31c5e29493d4186b767b71c07c94cf->enter($__internal_8188a19e314a5acbc200e5193e8cba2a0a31c5e29493d4186b767b71c07c94cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_8188a19e314a5acbc200e5193e8cba2a0a31c5e29493d4186b767b71c07c94cf->leave($__internal_8188a19e314a5acbc200e5193e8cba2a0a31c5e29493d4186b767b71c07c94cf_prof);

        
        $__internal_950ed69c67dc9ecc6664ecd9cfb287ecd200f95ed4ccfb424a8482fbcadb0a42->leave($__internal_950ed69c67dc9ecc6664ecd9cfb287ecd200f95ed4ccfb424a8482fbcadb0a42_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\weeeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
