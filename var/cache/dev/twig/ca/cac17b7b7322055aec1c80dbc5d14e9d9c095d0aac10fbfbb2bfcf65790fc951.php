<?php

/* MainBundle:user:clients.html.twig */
class __TwigTemplate_894374dfcf47a9fe311091f51f8243dab84faca67008959e56744a6d47e7f5f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1703a782287b8da19170334e366ff54745816bc49d352881851c3b8559262219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1703a782287b8da19170334e366ff54745816bc49d352881851c3b8559262219->enter($__internal_1703a782287b8da19170334e366ff54745816bc49d352881851c3b8559262219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:user:clients.html.twig"));

        $__internal_cdd4e6e7b9fe201253b52c9cc0c85d723c08818ad4af4701d0b728291baa7a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd4e6e7b9fe201253b52c9cc0c85d723c08818ad4af4701d0b728291baa7a0c->enter($__internal_cdd4e6e7b9fe201253b52c9cc0c85d723c08818ad4af4701d0b728291baa7a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:user:clients.html.twig"));

        // line 1
        echo "
<div class=\"container main-container\">
    <div class=\"row\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 5
            echo "            <div class=\"col-xs-12 col-sm-6 col-md-6\">

                <div class=\"well well-sm\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-md-4\">
                            <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute($context["user"], "imageName", array())), "html", null, true);
            echo "\" alt=\"\" class=\"img-rounded img-responsive\" style=\"height: 100px; width: 100px\" />
                        </div>
                        <div class=\"col-sm-6 col-md-8\">
                            <h4>
                                ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</h4>
                            <small><cite title=\"San Francisco, USA\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "pays", array()), "html", null, true);
            echo " <i class=\"glyphicon glyphicon-map-marker\">
                                    </i></cite></small>
                            <p>
                                <i class=\"glyphicon glyphicon-envelope\"></i>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "
                                <br />
                                <br />
                                <i class=\"glyphicon glyphicon-gift\"></i>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "datenaissance", array()), "Y-m-d "), "html", null, true);
            echo "</p>
                            <!-- Split button -->
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-primary\">
                                    Social</button>
                                <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                                    <span class=\"caret\"></span><span class=\"sr-only\">voir profile</span>
                                </button>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li><a href=\"#\">Twitter</a></li>
                                    <li><a href=\"https://plus.google.com/+Jquery2dotnet/posts\">Google +</a></li>
                                    <li><a href=\"https://www.facebook.com/jquery2dotnet\">Facebook</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\">Github</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>   </div>    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</div></div>

";
        // line 41
        $this->loadTemplate("MainBundle:Default:pagination.html.twig", "MainBundle:user:clients.html.twig", 41)->display($context);
        
        $__internal_1703a782287b8da19170334e366ff54745816bc49d352881851c3b8559262219->leave($__internal_1703a782287b8da19170334e366ff54745816bc49d352881851c3b8559262219_prof);

        
        $__internal_cdd4e6e7b9fe201253b52c9cc0c85d723c08818ad4af4701d0b728291baa7a0c->leave($__internal_cdd4e6e7b9fe201253b52c9cc0c85d723c08818ad4af4701d0b728291baa7a0c_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:user:clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 41,  89 => 39,  64 => 21,  58 => 18,  52 => 15,  48 => 14,  41 => 10,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"container main-container\">
    <div class=\"row\">
        {% for user in users %}
            <div class=\"col-xs-12 col-sm-6 col-md-6\">

                <div class=\"well well-sm\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-md-4\">
                            <img src=\"{{ asset('bundles/images/')~ user.imageName}}\" alt=\"\" class=\"img-rounded img-responsive\" style=\"height: 100px; width: 100px\" />
                        </div>
                        <div class=\"col-sm-6 col-md-8\">
                            <h4>
                                {{ user.nom}}</h4>
                            <small><cite title=\"San Francisco, USA\">{{ user.pays}} <i class=\"glyphicon glyphicon-map-marker\">
                                    </i></cite></small>
                            <p>
                                <i class=\"glyphicon glyphicon-envelope\"></i>{{ user.email}}
                                <br />
                                <br />
                                <i class=\"glyphicon glyphicon-gift\"></i>{{ user.datenaissance|date('Y-m-d ') }}</p>
                            <!-- Split button -->
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-primary\">
                                    Social</button>
                                <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                                    <span class=\"caret\"></span><span class=\"sr-only\">voir profile</span>
                                </button>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li><a href=\"#\">Twitter</a></li>
                                    <li><a href=\"https://plus.google.com/+Jquery2dotnet/posts\">Google +</a></li>
                                    <li><a href=\"https://www.facebook.com/jquery2dotnet\">Facebook</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\">Github</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>   </div>    {% endfor %}</div></div>

{% include \"MainBundle:Default:pagination.html.twig\" %}
", "MainBundle:user:clients.html.twig", "C:\\wamp64\\www\\test\\src\\MainBundle/Resources/views/user/clients.html.twig");
    }
}
