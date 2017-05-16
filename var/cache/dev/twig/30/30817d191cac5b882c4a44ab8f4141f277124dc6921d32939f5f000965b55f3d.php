<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_6f7b015bb065e8c1cd8407d8bf42f5e2bc8ac1d1ff8e077186098f6e466bd73b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "@FOSUser/layout.html.twig", 1);
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
        $__internal_518967bb637bd48344a0aac6326d9a229419c75575a600bdc50f8b81f11132c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_518967bb637bd48344a0aac6326d9a229419c75575a600bdc50f8b81f11132c9->enter($__internal_518967bb637bd48344a0aac6326d9a229419c75575a600bdc50f8b81f11132c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_c90f092ac0b4c6d7a1a4cd1a10aa1f3f688e310977ae9b12e56d094cd28f0e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90f092ac0b4c6d7a1a4cd1a10aa1f3f688e310977ae9b12e56d094cd28f0e93->enter($__internal_c90f092ac0b4c6d7a1a4cd1a10aa1f3f688e310977ae9b12e56d094cd28f0e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_518967bb637bd48344a0aac6326d9a229419c75575a600bdc50f8b81f11132c9->leave($__internal_518967bb637bd48344a0aac6326d9a229419c75575a600bdc50f8b81f11132c9_prof);

        
        $__internal_c90f092ac0b4c6d7a1a4cd1a10aa1f3f688e310977ae9b12e56d094cd28f0e93->leave($__internal_c90f092ac0b4c6d7a1a4cd1a10aa1f3f688e310977ae9b12e56d094cd28f0e93_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7448120ec6d2fc6729c9b1722f5f2236dc9693f164f7be840d4e2b1442b51a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7448120ec6d2fc6729c9b1722f5f2236dc9693f164f7be840d4e2b1442b51a0a->enter($__internal_7448120ec6d2fc6729c9b1722f5f2236dc9693f164f7be840d4e2b1442b51a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0e98f995134f9161fef60df99bbec228985bc47bac23b431a5d920b1685af99a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e98f995134f9161fef60df99bbec228985bc47bac23b431a5d920b1685af99a->enter($__internal_0e98f995134f9161fef60df99bbec228985bc47bac23b431a5d920b1685af99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/bootstrap/css/login.add.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


";
        
        $__internal_0e98f995134f9161fef60df99bbec228985bc47bac23b431a5d920b1685af99a->leave($__internal_0e98f995134f9161fef60df99bbec228985bc47bac23b431a5d920b1685af99a_prof);

        
        $__internal_7448120ec6d2fc6729c9b1722f5f2236dc9693f164f7be840d4e2b1442b51a0a->leave($__internal_7448120ec6d2fc6729c9b1722f5f2236dc9693f164f7be840d4e2b1442b51a0a_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_7074b05acc3cb76d81e9086fba0ad48c03b60e7ac8e4b8da4df4557e1ca6dae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7074b05acc3cb76d81e9086fba0ad48c03b60e7ac8e4b8da4df4557e1ca6dae7->enter($__internal_7074b05acc3cb76d81e9086fba0ad48c03b60e7ac8e4b8da4df4557e1ca6dae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bcf43c4d2876be1441ad7a4ab7daf020154b82bbf52ee93d5e45cab021848fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf43c4d2876be1441ad7a4ab7daf020154b82bbf52ee93d5e45cab021848fa3->enter($__internal_bcf43c4d2876be1441ad7a4ab7daf020154b82bbf52ee93d5e45cab021848fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_bcf43c4d2876be1441ad7a4ab7daf020154b82bbf52ee93d5e45cab021848fa3->leave($__internal_bcf43c4d2876be1441ad7a4ab7daf020154b82bbf52ee93d5e45cab021848fa3_prof);

        
        $__internal_7074b05acc3cb76d81e9086fba0ad48c03b60e7ac8e4b8da4df4557e1ca6dae7->leave($__internal_7074b05acc3cb76d81e9086fba0ad48c03b60e7ac8e4b8da4df4557e1ca6dae7_prof);

    }

    // line 32
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b8a3f57712023bead2c3b63812a62d7b451b6fff8f16930bc20abfcd60edda6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b8a3f57712023bead2c3b63812a62d7b451b6fff8f16930bc20abfcd60edda6->enter($__internal_7b8a3f57712023bead2c3b63812a62d7b451b6fff8f16930bc20abfcd60edda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fbe188cfdb5b56c5ee55684a9cf62afcc15e79c8e289f055e8e068fe9c1bf0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe188cfdb5b56c5ee55684a9cf62afcc15e79c8e289f055e8e068fe9c1bf0f2->enter($__internal_fbe188cfdb5b56c5ee55684a9cf62afcc15e79c8e289f055e8e068fe9c1bf0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 33
        echo "            ";
        
        $__internal_fbe188cfdb5b56c5ee55684a9cf62afcc15e79c8e289f055e8e068fe9c1bf0f2->leave($__internal_fbe188cfdb5b56c5ee55684a9cf62afcc15e79c8e289f055e8e068fe9c1bf0f2_prof);

        
        $__internal_7b8a3f57712023bead2c3b63812a62d7b451b6fff8f16930bc20abfcd60edda6->leave($__internal_7b8a3f57712023bead2c3b63812a62d7b451b6fff8f16930bc20abfcd60edda6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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
", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\src\\MainBundle\\Resources\\views\\layout.html.twig");
    }
}
