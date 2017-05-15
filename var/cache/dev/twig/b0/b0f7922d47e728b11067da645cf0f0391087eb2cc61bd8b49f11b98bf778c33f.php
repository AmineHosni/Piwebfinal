<?php

/* :venteflash:adding.html.twig */
class __TwigTemplate_f7ebccf00f90965babfafbabb5fbddca800d152b116977c776b3f872799ae321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":venteflash:adding.html.twig", ":venteflash:adding.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":venteflash:adding.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22a955387fdfc328288a1a239165f8d1aed3d70a11268981b692e345692586a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a955387fdfc328288a1a239165f8d1aed3d70a11268981b692e345692586a1->enter($__internal_22a955387fdfc328288a1a239165f8d1aed3d70a11268981b692e345692586a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":venteflash:adding.html.twig"));

        $__internal_5697c5a96d3d85e356b59de22d2702463f81e88621ee0ad3c76f5ff9cdbd95c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5697c5a96d3d85e356b59de22d2702463f81e88621ee0ad3c76f5ff9cdbd95c8->enter($__internal_5697c5a96d3d85e356b59de22d2702463f81e88621ee0ad3c76f5ff9cdbd95c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":venteflash:adding.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22a955387fdfc328288a1a239165f8d1aed3d70a11268981b692e345692586a1->leave($__internal_22a955387fdfc328288a1a239165f8d1aed3d70a11268981b692e345692586a1_prof);

        
        $__internal_5697c5a96d3d85e356b59de22d2702463f81e88621ee0ad3c76f5ff9cdbd95c8->leave($__internal_5697c5a96d3d85e356b59de22d2702463f81e88621ee0ad3c76f5ff9cdbd95c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c45580fc2fd51a112a605c4aaffbf6b1737de0116003b3165fe78274e2e461c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c45580fc2fd51a112a605c4aaffbf6b1737de0116003b3165fe78274e2e461c->enter($__internal_9c45580fc2fd51a112a605c4aaffbf6b1737de0116003b3165fe78274e2e461c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2b883a160f229922ff515003a78c55ec9a4e69fae634dc24f68b019629eb249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b883a160f229922ff515003a78c55ec9a4e69fae634dc24f68b019629eb249->enter($__internal_e2b883a160f229922ff515003a78c55ec9a4e69fae634dc24f68b019629eb249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 5
            echo "    <div class=\"col-lg-3 col-md-3 col-sm-6\">                        <div class=\"product\">
            <a class=\"add-fav tooltipHere\" data-toggle=\"tooltip\" data-original-title=\"Add to Wishlist\"
               data-placement=\"left\">
                <i class=\"glyphicon glyphicon-heart\"></i>
            </a>

            <div  >
                <div class=\"quickview\">
                    <a data-toggle=\"modal\" class=\"btn btn-xs btn-quickview\" href=\"ajax/product.html\"
                       data-target=\"#productSetailsModalAjax\">Quick View </a>
                </div>
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute($context["p"], "imageName", array())), "html", null, true);
            echo "\"
                   height=\"400\" width=\"600\"><img
                            alt=\"img\"    class=\"img-responsive\"
                            src=\"";
            // line 19
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute($context["p"], "imageName", array())), "html", null, true);
            echo "\"
                    ></a>

                <div class=\"promotion\"><span class=\"discount\"></span></div>
            </div>
            <div class=\"description\">
                <h4><a href=\"product-details.html\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelle", array()), "html", null, true);
            echo "</a></h4>


                <div class=\"list-description\">
                    <p> ";
            // line 29
            echo $this->getAttribute($context["p"], "description", array());
            echo "</p>
                </div>
                <div class=\"btn-group\"  data-toggle=\"buttons\">
                    <div class=\"col-md-5\">
                        <div class=\"btn-group pull-right\">


                        </div>
                    </div></div>

                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Activation</button>
                    <button type=\"button\" class=\"btn btn-sm  btn-danger dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"js-activer\" data-action=\"1\" href=\"#\">Activer</a></li>
                        <li><a class=\"js-activer\" data-action=\"0\" href=\"#\">Désactiver</a></li>
                    </ul>
                </div>


                <input name=\"prod\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">
                <div class=\"btn-group\">



                <button  class=\"btn btn-primary\"   >set flash price </button>





            </div></div></div></div></div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
";
        
        $__internal_e2b883a160f229922ff515003a78c55ec9a4e69fae634dc24f68b019629eb249->leave($__internal_e2b883a160f229922ff515003a78c55ec9a4e69fae634dc24f68b019629eb249_prof);

        
        $__internal_9c45580fc2fd51a112a605c4aaffbf6b1737de0116003b3165fe78274e2e461c->leave($__internal_9c45580fc2fd51a112a605c4aaffbf6b1737de0116003b3165fe78274e2e461c_prof);

    }

    public function getTemplateName()
    {
        return ":venteflash:adding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 67,  114 => 52,  88 => 29,  81 => 25,  72 => 19,  66 => 16,  53 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":venteflash:adding.html.twig\" %}

{% block body %}
{% for p in products %}
    <div class=\"col-lg-3 col-md-3 col-sm-6\">                        <div class=\"product\">
            <a class=\"add-fav tooltipHere\" data-toggle=\"tooltip\" data-original-title=\"Add to Wishlist\"
               data-placement=\"left\">
                <i class=\"glyphicon glyphicon-heart\"></i>
            </a>

            <div  >
                <div class=\"quickview\">
                    <a data-toggle=\"modal\" class=\"btn btn-xs btn-quickview\" href=\"ajax/product.html\"
                       data-target=\"#productSetailsModalAjax\">Quick View </a>
                </div>
                <a href=\"{{ asset('bundles/images/')~ p.imageName}}\"
                   height=\"400\" width=\"600\"><img
                            alt=\"img\"    class=\"img-responsive\"
                            src=\"{{ asset('bundles/images/')~ p.imageName}}\"
                    ></a>

                <div class=\"promotion\"><span class=\"discount\"></span></div>
            </div>
            <div class=\"description\">
                <h4><a href=\"product-details.html\">{{ p.libelle }}</a></h4>


                <div class=\"list-description\">
                    <p> {{ p.description|raw }}</p>
                </div>
                <div class=\"btn-group\"  data-toggle=\"buttons\">
                    <div class=\"col-md-5\">
                        <div class=\"btn-group pull-right\">


                        </div>
                    </div></div>

                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-sm btn-danger\">Activation</button>
                    <button type=\"button\" class=\"btn btn-sm  btn-danger dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"js-activer\" data-action=\"1\" href=\"#\">Activer</a></li>
                        <li><a class=\"js-activer\" data-action=\"0\" href=\"#\">Désactiver</a></li>
                    </ul>
                </div>


                <input name=\"prod\" value=\"{{ p.id }}\">
                <div class=\"btn-group\">



                <button  class=\"btn btn-primary\"   >set flash price </button>





            </div></div></div></div></div>


{% endfor %}

{% endblock %}
", ":venteflash:adding.html.twig", "C:\\wamp64\\www\\test\\app/Resources\\views/venteflash/adding.html.twig");
    }
}
