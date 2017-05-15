<?php

/* venteflash/delete.html.twig */
class __TwigTemplate_8c8da6e48ccba875cc95d09032f0e566a83a640723892336ca92ab765f225b83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "venteflash/delete.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle:eshop:main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52a58b021137215d60a9657369e8866c5ecb7c84692c1308ff62f3a288e9e046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a58b021137215d60a9657369e8866c5ecb7c84692c1308ff62f3a288e9e046->enter($__internal_52a58b021137215d60a9657369e8866c5ecb7c84692c1308ff62f3a288e9e046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venteflash/delete.html.twig"));

        $__internal_daf61cec89a774f5259790f05147491af6692f70dd4caaea5adef9c194da344d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf61cec89a774f5259790f05147491af6692f70dd4caaea5adef9c194da344d->enter($__internal_daf61cec89a774f5259790f05147491af6692f70dd4caaea5adef9c194da344d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venteflash/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52a58b021137215d60a9657369e8866c5ecb7c84692c1308ff62f3a288e9e046->leave($__internal_52a58b021137215d60a9657369e8866c5ecb7c84692c1308ff62f3a288e9e046_prof);

        
        $__internal_daf61cec89a774f5259790f05147491af6692f70dd4caaea5adef9c194da344d->leave($__internal_daf61cec89a774f5259790f05147491af6692f70dd4caaea5adef9c194da344d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c2f5e3cb07aa4b5aef3e6550513258d4471cc3a7a79250c5a9d49caeb8ca8750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f5e3cb07aa4b5aef3e6550513258d4471cc3a7a79250c5a9d49caeb8ca8750->enter($__internal_c2f5e3cb07aa4b5aef3e6550513258d4471cc3a7a79250c5a9d49caeb8ca8750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b2ac397f8b8d0e8d897aa60d72f9ed364b3a397b01c593dffd3e577bad7d9d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ac397f8b8d0e8d897aa60d72f9ed364b3a397b01c593dffd3e577bad7d9d91->enter($__internal_b2ac397f8b8d0e8d897aa60d72f9ed364b3a397b01c593dffd3e577bad7d9d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<div class=\"container main-container\">

    <form id=\"jsform\" >

        <h3 class=\"section-title style2 text-center\"><span>les produits disponibles</span></h3>
        <br>




        <div  id=\"xcontainer\" >





        </div></form>
    ";
        
        $__internal_b2ac397f8b8d0e8d897aa60d72f9ed364b3a397b01c593dffd3e577bad7d9d91->leave($__internal_b2ac397f8b8d0e8d897aa60d72f9ed364b3a397b01c593dffd3e577bad7d9d91_prof);

        
        $__internal_c2f5e3cb07aa4b5aef3e6550513258d4471cc3a7a79250c5a9d49caeb8ca8750->leave($__internal_c2f5e3cb07aa4b5aef3e6550513258d4471cc3a7a79250c5a9d49caeb8ca8750_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0fa52ae2359db9a8cc88c29c3bc56a0fad6b79fcd51ba73848c46a9dd8508ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa52ae2359db9a8cc88c29c3bc56a0fad6b79fcd51ba73848c46a9dd8508ef9->enter($__internal_0fa52ae2359db9a8cc88c29c3bc56a0fad6b79fcd51ba73848c46a9dd8508ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2d3da6b0a1ca1c25b7d9cafb9d58a07be9f6323ef9a6c7faf7654e9c96662e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3da6b0a1ca1c25b7d9cafb9d58a07be9f6323ef9a6c7faf7654e9c96662e9f->enter($__internal_2d3da6b0a1ca1c25b7d9cafb9d58a07be9f6323ef9a6c7faf7654e9c96662e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

        <script>
            (function (\$) {
                var form = \$('#jsform'),
                        jsFormUrl = '',
                        container = \$('#xcontainer');


                function init() {
                    jsFormUrl = '";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("venteflash_Listing", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "operation" => 0)), "html", null, true);
        echo "';
                }
                function ajaxPost(action) {
                    container.addClass('working');
                    \$.ajax({
                        type: \"POST\",
                        data: form.serialize(),
                        url: jsFormUrl,
                        success: function (data) {
                            container.removeClass('working');
                            init();
                            if (!action) {
                                container.empty().hide().html(data).fadeIn(3000);
                            } else
                                ajaxPost();
                        },
                        error: function () {
                            alert('service denied');
                            container.removeClass('working');
                        }
                    });
                    return false;
                }

                init();
                setTimeout(ajaxPost, 1);


            })(jQuery);
        </script>
    ";
        
        $__internal_2d3da6b0a1ca1c25b7d9cafb9d58a07be9f6323ef9a6c7faf7654e9c96662e9f->leave($__internal_2d3da6b0a1ca1c25b7d9cafb9d58a07be9f6323ef9a6c7faf7654e9c96662e9f_prof);

        
        $__internal_0fa52ae2359db9a8cc88c29c3bc56a0fad6b79fcd51ba73848c46a9dd8508ef9->leave($__internal_0fa52ae2359db9a8cc88c29c3bc56a0fad6b79fcd51ba73848c46a9dd8508ef9_prof);

    }

    public function getTemplateName()
    {
        return "venteflash/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 34,  87 => 24,  78 => 23,  50 => 4,  41 => 3,  11 => 1,);
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

{% block content %}

<div class=\"container main-container\">

    <form id=\"jsform\" >

        <h3 class=\"section-title style2 text-center\"><span>les produits disponibles</span></h3>
        <br>




        <div  id=\"xcontainer\" >





        </div></form>
    {% endblock %}
    {% block javascripts %}
        {{ parent() }}

        <script>
            (function (\$) {
                var form = \$('#jsform'),
                        jsFormUrl = '',
                        container = \$('#xcontainer');


                function init() {
                    jsFormUrl = '{{ path('venteflash_Listing',{'id': id, 'operation':0}) }}';
                }
                function ajaxPost(action) {
                    container.addClass('working');
                    \$.ajax({
                        type: \"POST\",
                        data: form.serialize(),
                        url: jsFormUrl,
                        success: function (data) {
                            container.removeClass('working');
                            init();
                            if (!action) {
                                container.empty().hide().html(data).fadeIn(3000);
                            } else
                                ajaxPost();
                        },
                        error: function () {
                            alert('service denied');
                            container.removeClass('working');
                        }
                    });
                    return false;
                }

                init();
                setTimeout(ajaxPost, 1);


            })(jQuery);
        </script>
    {% endblock %}


", "venteflash/delete.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\venteflash\\delete.html.twig");
    }
}
