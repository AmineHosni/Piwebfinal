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
        $__internal_4a4fca9f1b573431e09875f0b7ada02dece1929ece59ade5b908372119031c27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4fca9f1b573431e09875f0b7ada02dece1929ece59ade5b908372119031c27->enter($__internal_4a4fca9f1b573431e09875f0b7ada02dece1929ece59ade5b908372119031c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_60de44ed15415b555aea0e2c1b261e0f1139a9196abb9487138838b7b0f9b44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60de44ed15415b555aea0e2c1b261e0f1139a9196abb9487138838b7b0f9b44e->enter($__internal_60de44ed15415b555aea0e2c1b261e0f1139a9196abb9487138838b7b0f9b44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a4fca9f1b573431e09875f0b7ada02dece1929ece59ade5b908372119031c27->leave($__internal_4a4fca9f1b573431e09875f0b7ada02dece1929ece59ade5b908372119031c27_prof);

        
        $__internal_60de44ed15415b555aea0e2c1b261e0f1139a9196abb9487138838b7b0f9b44e->leave($__internal_60de44ed15415b555aea0e2c1b261e0f1139a9196abb9487138838b7b0f9b44e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ba96ce8deea8323a9f886430921155026f0ab59d5b5810b6ac1ff7f75c372e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba96ce8deea8323a9f886430921155026f0ab59d5b5810b6ac1ff7f75c372e1->enter($__internal_0ba96ce8deea8323a9f886430921155026f0ab59d5b5810b6ac1ff7f75c372e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_97b070a59e5446d89fdd2f2badd6402c11c17e37a1432e096bb783af314058d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b070a59e5446d89fdd2f2badd6402c11c17e37a1432e096bb783af314058d7->enter($__internal_97b070a59e5446d89fdd2f2badd6402c11c17e37a1432e096bb783af314058d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/bootstrap/css/login.add.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


";
        
        $__internal_97b070a59e5446d89fdd2f2badd6402c11c17e37a1432e096bb783af314058d7->leave($__internal_97b070a59e5446d89fdd2f2badd6402c11c17e37a1432e096bb783af314058d7_prof);

        
        $__internal_0ba96ce8deea8323a9f886430921155026f0ab59d5b5810b6ac1ff7f75c372e1->leave($__internal_0ba96ce8deea8323a9f886430921155026f0ab59d5b5810b6ac1ff7f75c372e1_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_bcbe0c5041c3dec6b52758f90653f7dc0da6160ac83285c60545a2165d2ea1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcbe0c5041c3dec6b52758f90653f7dc0da6160ac83285c60545a2165d2ea1d9->enter($__internal_bcbe0c5041c3dec6b52758f90653f7dc0da6160ac83285c60545a2165d2ea1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7aa38688fea4ad7ae82f6347fb03595732747d668662ca87af7b266cfea84e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa38688fea4ad7ae82f6347fb03595732747d668662ca87af7b266cfea84e5d->enter($__internal_7aa38688fea4ad7ae82f6347fb03595732747d668662ca87af7b266cfea84e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo "        </div>
";
        
        $__internal_7aa38688fea4ad7ae82f6347fb03595732747d668662ca87af7b266cfea84e5d->leave($__internal_7aa38688fea4ad7ae82f6347fb03595732747d668662ca87af7b266cfea84e5d_prof);

        
        $__internal_bcbe0c5041c3dec6b52758f90653f7dc0da6160ac83285c60545a2165d2ea1d9->leave($__internal_bcbe0c5041c3dec6b52758f90653f7dc0da6160ac83285c60545a2165d2ea1d9_prof);

    }

    // line 32
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7f85b4be669f0e6ac2eaadde40e3b059ebc54c17d9cfd3de8256cb604df5234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f85b4be669f0e6ac2eaadde40e3b059ebc54c17d9cfd3de8256cb604df5234->enter($__internal_c7f85b4be669f0e6ac2eaadde40e3b059ebc54c17d9cfd3de8256cb604df5234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_51c673b457f0909467d516f734957790a20781108c5ba7e89cfc136551285103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c673b457f0909467d516f734957790a20781108c5ba7e89cfc136551285103->enter($__internal_51c673b457f0909467d516f734957790a20781108c5ba7e89cfc136551285103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 33
        echo "            ";
        
        $__internal_51c673b457f0909467d516f734957790a20781108c5ba7e89cfc136551285103->leave($__internal_51c673b457f0909467d516f734957790a20781108c5ba7e89cfc136551285103_prof);

        
        $__internal_c7f85b4be669f0e6ac2eaadde40e3b059ebc54c17d9cfd3de8256cb604df5234->leave($__internal_c7f85b4be669f0e6ac2eaadde40e3b059ebc54c17d9cfd3de8256cb604df5234_prof);

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
        return array (  170 => 33,  161 => 32,  150 => 34,  148 => 32,  144 => 30,  141 => 29,  135 => 28,  126 => 25,  121 => 24,  116 => 23,  111 => 22,  109 => 21,  105 => 19,  97 => 17,  91 => 14,  87 => 13,  82 => 12,  79 => 11,  70 => 10,  56 => 6,  51 => 5,  42 => 4,  11 => 1,);
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
        </div>
{% endblock %}
", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\test\\src\\MainBundle\\Resources\\views\\layout.html.twig");
    }
}
