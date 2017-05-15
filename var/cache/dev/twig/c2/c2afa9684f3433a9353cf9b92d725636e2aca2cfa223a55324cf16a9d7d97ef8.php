<?php

/* venteflash/edit.html.twig */
class __TwigTemplate_26c0604dc5ab5db26b3473acdd6bca71d427ad0ac04f8cc871db43fb1db9d0ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "venteflash/edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle:eshop:main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_518119902c7f91974d91c042bc7ba39be85a2246658c8b392a659307d0a17438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_518119902c7f91974d91c042bc7ba39be85a2246658c8b392a659307d0a17438->enter($__internal_518119902c7f91974d91c042bc7ba39be85a2246658c8b392a659307d0a17438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venteflash/edit.html.twig"));

        $__internal_85bb5905b3596197be3e69fc92d1f8eaefd6870f27f0a8f91f83e3705c712866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85bb5905b3596197be3e69fc92d1f8eaefd6870f27f0a8f91f83e3705c712866->enter($__internal_85bb5905b3596197be3e69fc92d1f8eaefd6870f27f0a8f91f83e3705c712866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venteflash/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_518119902c7f91974d91c042bc7ba39be85a2246658c8b392a659307d0a17438->leave($__internal_518119902c7f91974d91c042bc7ba39be85a2246658c8b392a659307d0a17438_prof);

        
        $__internal_85bb5905b3596197be3e69fc92d1f8eaefd6870f27f0a8f91f83e3705c712866->leave($__internal_85bb5905b3596197be3e69fc92d1f8eaefd6870f27f0a8f91f83e3705c712866_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_844e016823340670fd142d2bc3c501145158da24b8bdd3409771ce2b9df0c753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_844e016823340670fd142d2bc3c501145158da24b8bdd3409771ce2b9df0c753->enter($__internal_844e016823340670fd142d2bc3c501145158da24b8bdd3409771ce2b9df0c753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dd109b40e1ad530609f8a8b015bd9b2853b1129c8741e677f19b55ddf7b68c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd109b40e1ad530609f8a8b015bd9b2853b1129c8741e677f19b55ddf7b68c20->enter($__internal_dd109b40e1ad530609f8a8b015bd9b2853b1129c8741e677f19b55ddf7b68c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <h1>Venteflash edit</h1>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("venteflash_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_dd109b40e1ad530609f8a8b015bd9b2853b1129c8741e677f19b55ddf7b68c20->leave($__internal_dd109b40e1ad530609f8a8b015bd9b2853b1129c8741e677f19b55ddf7b68c20_prof);

        
        $__internal_844e016823340670fd142d2bc3c501145158da24b8bdd3409771ce2b9df0c753->leave($__internal_844e016823340670fd142d2bc3c501145158da24b8bdd3409771ce2b9df0c753_prof);

    }

    public function getTemplateName()
    {
        return "venteflash/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  76 => 18,  70 => 15,  63 => 11,  58 => 9,  54 => 8,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MainBundle:eshop:main.html.twig' %}


{% block content %}

    <h1>Venteflash edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('venteflash_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "venteflash/edit.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\venteflash\\edit.html.twig");
    }
}
