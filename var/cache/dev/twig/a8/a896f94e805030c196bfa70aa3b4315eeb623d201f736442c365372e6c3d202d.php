<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_9247b9b40dce69e67459a6fd0e8e7f1155144c112b83a98beb56c14f448947ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1a77490728ad39004613ae9cf5ed4c48ee676b19631f0666bffc6ccc3c31458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1a77490728ad39004613ae9cf5ed4c48ee676b19631f0666bffc6ccc3c31458->enter($__internal_b1a77490728ad39004613ae9cf5ed4c48ee676b19631f0666bffc6ccc3c31458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_e8a9117e44f3657ec5a8d5ef0654c5851f0a04cc7a3121ec0cb4c95668a942d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a9117e44f3657ec5a8d5ef0654c5851f0a04cc7a3121ec0cb4c95668a942d9->enter($__internal_e8a9117e44f3657ec5a8d5ef0654c5851f0a04cc7a3121ec0cb4c95668a942d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1a77490728ad39004613ae9cf5ed4c48ee676b19631f0666bffc6ccc3c31458->leave($__internal_b1a77490728ad39004613ae9cf5ed4c48ee676b19631f0666bffc6ccc3c31458_prof);

        
        $__internal_e8a9117e44f3657ec5a8d5ef0654c5851f0a04cc7a3121ec0cb4c95668a942d9->leave($__internal_e8a9117e44f3657ec5a8d5ef0654c5851f0a04cc7a3121ec0cb4c95668a942d9_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63c3f88a4261f111441be402b7630c3d96394253647346de03801cbde814050c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c3f88a4261f111441be402b7630c3d96394253647346de03801cbde814050c->enter($__internal_63c3f88a4261f111441be402b7630c3d96394253647346de03801cbde814050c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_712bf8d5cd6f995ca829d64986c5bc45f51aa0594c55adeca2318ca215664af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712bf8d5cd6f995ca829d64986c5bc45f51aa0594c55adeca2318ca215664af2->enter($__internal_712bf8d5cd6f995ca829d64986c5bc45f51aa0594c55adeca2318ca215664af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
    <div class=\"container\">

        <div class=\"row\" style=\"margin-top:20px\">
            <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">
                <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

                        <h2>authentification </h2>
                        <div class=\"text-center col-md-12\">
                            ";
        // line 16
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 17
            echo "                                <p class=\"bg-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</p>
                            ";
        }
        // line 19
        echo "
                            <hr class=\"colorgraph\">



                            <div class=\"input-field col s12\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                                <div class=\"input-field col s12\">

                                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"  placeholder=\"email\"/>
                                </div>
                                <div class=\"input-field col s12\">
                                    <input type=\"password\"  class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"password\" />
                                </div>
                                <div class=\"input-field col s12\">                                    <label for=\"remember_me\">remember me</label>
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                </div>



                                <hr class=\"colorgraph\">
                                <div display=\"inline\">

                                        <div class=\"col-xs-6 col-sm-6 col-md-6\">

                                            <button class=\"btn btn-lg btn-success btn-block\" type=\"submit\" name=\"action\" id=\"line\">
                                                submit</button></div>



                                        <div class=\"col-xs-6 col-sm-6 col-md-6\">
                                            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-lg btn-primary btn-block\" id=\"line\">Register</a>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-3 col-md-offset-0\">
                                        </div>



            </div>
        </div>

    </div>
";
        
        $__internal_712bf8d5cd6f995ca829d64986c5bc45f51aa0594c55adeca2318ca215664af2->leave($__internal_712bf8d5cd6f995ca829d64986c5bc45f51aa0594c55adeca2318ca215664af2_prof);

        
        $__internal_63c3f88a4261f111441be402b7630c3d96394253647346de03801cbde814050c->leave($__internal_63c3f88a4261f111441be402b7630c3d96394253647346de03801cbde814050c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 52,  90 => 30,  83 => 26,  79 => 25,  71 => 19,  65 => 17,  63 => 16,  56 => 12,  49 => 7,  40 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}


{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}

    <div class=\"container\">

        <div class=\"row\" style=\"margin-top:20px\">
            <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">
                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">

                        <h2>authentification </h2>
                        <div class=\"text-center col-md-12\">
                            {% if error %}
                                <p class=\"bg-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</p>
                            {% endif %}

                            <hr class=\"colorgraph\">



                            <div class=\"input-field col s12\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

                                <div class=\"input-field col s12\">

                                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"  placeholder=\"email\"/>
                                </div>
                                <div class=\"input-field col s12\">
                                    <input type=\"password\"  class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"password\" />
                                </div>
                                <div class=\"input-field col s12\">                                    <label for=\"remember_me\">remember me</label>
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                </div>



                                <hr class=\"colorgraph\">
                                <div display=\"inline\">

                                        <div class=\"col-xs-6 col-sm-6 col-md-6\">

                                            <button class=\"btn btn-lg btn-success btn-block\" type=\"submit\" name=\"action\" id=\"line\">
                                                submit</button></div>



                                        <div class=\"col-xs-6 col-sm-6 col-md-6\">
                                            <a href=\"{{path('fos_user_registration_register')}}\" class=\"btn btn-lg btn-primary btn-block\" id=\"line\">Register</a>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-3 col-md-offset-0\">
                                        </div>



            </div>
        </div>

    </div>
{% endblock fos_user_content %}", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\src\\MainBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
