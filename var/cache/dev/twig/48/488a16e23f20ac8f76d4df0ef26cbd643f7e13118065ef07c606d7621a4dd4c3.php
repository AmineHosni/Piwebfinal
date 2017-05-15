<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_2baaffb7dcd75e92e0bf735a65de45fade32c3cbe3cf8be00d96499ece24cefc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle:eshop:main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5691119d21bedb43e7a11bf046022115bb4f031985899abed3bcab4d41446d20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5691119d21bedb43e7a11bf046022115bb4f031985899abed3bcab4d41446d20->enter($__internal_5691119d21bedb43e7a11bf046022115bb4f031985899abed3bcab4d41446d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_8e68b2ae6f7b561ff71e1abda7d2ea94c5040e7bfe5fbbc7523421e5810fd8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e68b2ae6f7b561ff71e1abda7d2ea94c5040e7bfe5fbbc7523421e5810fd8bb->enter($__internal_8e68b2ae6f7b561ff71e1abda7d2ea94c5040e7bfe5fbbc7523421e5810fd8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5691119d21bedb43e7a11bf046022115bb4f031985899abed3bcab4d41446d20->leave($__internal_5691119d21bedb43e7a11bf046022115bb4f031985899abed3bcab4d41446d20_prof);

        
        $__internal_8e68b2ae6f7b561ff71e1abda7d2ea94c5040e7bfe5fbbc7523421e5810fd8bb->leave($__internal_8e68b2ae6f7b561ff71e1abda7d2ea94c5040e7bfe5fbbc7523421e5810fd8bb_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2080e365f87b63f6a933e26073edaaf1540dbc0ea497d45d07465140e823a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2080e365f87b63f6a933e26073edaaf1540dbc0ea497d45d07465140e823a86->enter($__internal_c2080e365f87b63f6a933e26073edaaf1540dbc0ea497d45d07465140e823a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_66e1bf42b82b25afc4614896dc3a9e6fddc0d9334cf2d48454ca0444144c1281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e1bf42b82b25afc4614896dc3a9e6fddc0d9334cf2d48454ca0444144c1281->enter($__internal_66e1bf42b82b25afc4614896dc3a9e6fddc0d9334cf2d48454ca0444144c1281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/bootstrap/css/login.add.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


";
        
        $__internal_66e1bf42b82b25afc4614896dc3a9e6fddc0d9334cf2d48454ca0444144c1281->leave($__internal_66e1bf42b82b25afc4614896dc3a9e6fddc0d9334cf2d48454ca0444144c1281_prof);

        
        $__internal_c2080e365f87b63f6a933e26073edaaf1540dbc0ea497d45d07465140e823a86->leave($__internal_c2080e365f87b63f6a933e26073edaaf1540dbc0ea497d45d07465140e823a86_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_d62f83477802b8c810d2d6f62d7d007f642e661038fff42852834e945ce2a9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d62f83477802b8c810d2d6f62d7d007f642e661038fff42852834e945ce2a9d2->enter($__internal_d62f83477802b8c810d2d6f62d7d007f642e661038fff42852834e945ce2a9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5cb61fc21850414bb923633dc7271f322013725b093a4579713d661750c72385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb61fc21850414bb923633dc7271f322013725b093a4579713d661750c72385->enter($__internal_5cb61fc21850414bb923633dc7271f322013725b093a4579713d661750c72385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 17
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 19
        echo "        </div>

        ";
        // line 21
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 23
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 24
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 25
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
        }
        // line 30
        echo "
        <div>
            ";
        // line 32
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 34
        echo "        </div></div>

    <br><br>
";
        
        $__internal_5cb61fc21850414bb923633dc7271f322013725b093a4579713d661750c72385->leave($__internal_5cb61fc21850414bb923633dc7271f322013725b093a4579713d661750c72385_prof);

        
        $__internal_d62f83477802b8c810d2d6f62d7d007f642e661038fff42852834e945ce2a9d2->leave($__internal_d62f83477802b8c810d2d6f62d7d007f642e661038fff42852834e945ce2a9d2_prof);

    }

    // line 32
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_16f9ed6032c550280532cdc210a25c6c500ab507262ea4f3bbd493e3d4c1044f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f9ed6032c550280532cdc210a25c6c500ab507262ea4f3bbd493e3d4c1044f->enter($__internal_16f9ed6032c550280532cdc210a25c6c500ab507262ea4f3bbd493e3d4c1044f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a30ee964dc04510bb5e758f6caf5e8d018329705477ce0330f8b61c6b5fe23bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30ee964dc04510bb5e758f6caf5e8d018329705477ce0330f8b61c6b5fe23bd->enter($__internal_a30ee964dc04510bb5e758f6caf5e8d018329705477ce0330f8b61c6b5fe23bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 33
        echo "            ";
        
        $__internal_a30ee964dc04510bb5e758f6caf5e8d018329705477ce0330f8b61c6b5fe23bd->leave($__internal_a30ee964dc04510bb5e758f6caf5e8d018329705477ce0330f8b61c6b5fe23bd_prof);

        
        $__internal_16f9ed6032c550280532cdc210a25c6c500ab507262ea4f3bbd493e3d4c1044f->leave($__internal_16f9ed6032c550280532cdc210a25c6c500ab507262ea4f3bbd493e3d4c1044f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 33,  163 => 32,  150 => 34,  148 => 32,  144 => 30,  141 => 29,  135 => 28,  126 => 25,  121 => 24,  116 => 23,  111 => 22,  109 => 21,  105 => 19,  97 => 17,  91 => 14,  87 => 13,  82 => 12,  79 => 11,  70 => 10,  56 => 6,  51 => 5,  42 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MainBundle:eshop:main.html.twig\" %}


{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{asset('bundles/eshop/bootstrap/css/login.add.css')}}\" rel=\"stylesheet\">


{% endblock %}
{% block content %}
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div></div>

    <br><br>
{% endblock %}
", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\test\\src\\MainBundle/Resources/views/layout.html.twig");
    }
}
