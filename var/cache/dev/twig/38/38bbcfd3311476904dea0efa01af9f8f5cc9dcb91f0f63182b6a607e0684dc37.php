<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_8661b5367f51490036c8844e265da8956eaa2b169bdc7ff21d964a1c9192f1d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a66f4875d6b65f90ee4b32e8d821d6708e23765488a92d96142c4069d2fb507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a66f4875d6b65f90ee4b32e8d821d6708e23765488a92d96142c4069d2fb507->enter($__internal_0a66f4875d6b65f90ee4b32e8d821d6708e23765488a92d96142c4069d2fb507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_0d1b544878095bd8494336b24e417252408cd8897ad27bd0f96e2d4cd747bed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1b544878095bd8494336b24e417252408cd8897ad27bd0f96e2d4cd747bed0->enter($__internal_0d1b544878095bd8494336b24e417252408cd8897ad27bd0f96e2d4cd747bed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a66f4875d6b65f90ee4b32e8d821d6708e23765488a92d96142c4069d2fb507->leave($__internal_0a66f4875d6b65f90ee4b32e8d821d6708e23765488a92d96142c4069d2fb507_prof);

        
        $__internal_0d1b544878095bd8494336b24e417252408cd8897ad27bd0f96e2d4cd747bed0->leave($__internal_0d1b544878095bd8494336b24e417252408cd8897ad27bd0f96e2d4cd747bed0_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_57a2e8fb82fbc356bc1abc8b59d28b2cb01468e0e68fb8a0cb465407af2ad186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a2e8fb82fbc356bc1abc8b59d28b2cb01468e0e68fb8a0cb465407af2ad186->enter($__internal_57a2e8fb82fbc356bc1abc8b59d28b2cb01468e0e68fb8a0cb465407af2ad186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_08b43e1469256aa96031589cd40f1320e45007f8a26777a72d00493658db8d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b43e1469256aa96031589cd40f1320e45007f8a26777a72d00493658db8d28->enter($__internal_08b43e1469256aa96031589cd40f1320e45007f8a26777a72d00493658db8d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_08b43e1469256aa96031589cd40f1320e45007f8a26777a72d00493658db8d28->leave($__internal_08b43e1469256aa96031589cd40f1320e45007f8a26777a72d00493658db8d28_prof);

        
        $__internal_57a2e8fb82fbc356bc1abc8b59d28b2cb01468e0e68fb8a0cb465407af2ad186->leave($__internal_57a2e8fb82fbc356bc1abc8b59d28b2cb01468e0e68fb8a0cb465407af2ad186_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cfb546a1af5168a3ce7f54e82329e13e30b0693d5ddde3f56da84197b845766a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfb546a1af5168a3ce7f54e82329e13e30b0693d5ddde3f56da84197b845766a->enter($__internal_cfb546a1af5168a3ce7f54e82329e13e30b0693d5ddde3f56da84197b845766a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c1bead16ea48d292cb3294f18157757e990b079a749971b277981bf89d9f96bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1bead16ea48d292cb3294f18157757e990b079a749971b277981bf89d9f96bd->enter($__internal_c1bead16ea48d292cb3294f18157757e990b079a749971b277981bf89d9f96bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c1bead16ea48d292cb3294f18157757e990b079a749971b277981bf89d9f96bd->leave($__internal_c1bead16ea48d292cb3294f18157757e990b079a749971b277981bf89d9f96bd_prof);

        
        $__internal_cfb546a1af5168a3ce7f54e82329e13e30b0693d5ddde3f56da84197b845766a->leave($__internal_cfb546a1af5168a3ce7f54e82329e13e30b0693d5ddde3f56da84197b845766a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\test\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
