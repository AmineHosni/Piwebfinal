<?php

/* venteflash/addflash.html.twig */
class __TwigTemplate_1fe74153252d6c5cd9e26fd3332bbf4caf3db78385c16ae0c0e2065a0e636be7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "venteflash/addflash.html.twig", 1);
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
        $__internal_1fc0c9a744b8aaeba8d7b88323490903bc1dd07eca84d5d5346789a53642c9d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fc0c9a744b8aaeba8d7b88323490903bc1dd07eca84d5d5346789a53642c9d7->enter($__internal_1fc0c9a744b8aaeba8d7b88323490903bc1dd07eca84d5d5346789a53642c9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venteflash/addflash.html.twig"));

        $__internal_99225247ccbb3c01a9147388025a992a64b9d44dc161ce0b3be3f21b0fced591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99225247ccbb3c01a9147388025a992a64b9d44dc161ce0b3be3f21b0fced591->enter($__internal_99225247ccbb3c01a9147388025a992a64b9d44dc161ce0b3be3f21b0fced591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venteflash/addflash.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fc0c9a744b8aaeba8d7b88323490903bc1dd07eca84d5d5346789a53642c9d7->leave($__internal_1fc0c9a744b8aaeba8d7b88323490903bc1dd07eca84d5d5346789a53642c9d7_prof);

        
        $__internal_99225247ccbb3c01a9147388025a992a64b9d44dc161ce0b3be3f21b0fced591->leave($__internal_99225247ccbb3c01a9147388025a992a64b9d44dc161ce0b3be3f21b0fced591_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6467c80598f4e6a66ab0eec496f8d330effbaf75716ee4285ae1728497093f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6467c80598f4e6a66ab0eec496f8d330effbaf75716ee4285ae1728497093f1c->enter($__internal_6467c80598f4e6a66ab0eec496f8d330effbaf75716ee4285ae1728497093f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_32ccbd3666d500cfad944ce0a94762a2f007c61ea8acff2e7dbd05352f677dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ccbd3666d500cfad944ce0a94762a2f007c61ea8acff2e7dbd05352f677dc4->enter($__internal_32ccbd3666d500cfad944ce0a94762a2f007c61ea8acff2e7dbd05352f677dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<div class=\"container main-container\">

       <form id=\"jsform\" >

        <h3 class=\"section-title style2 text-center\"><span>les produits disponibles</span></h3>
        <br>




                    <div  id=\"xcontainer\" >





    </div></form>
";
        
        $__internal_32ccbd3666d500cfad944ce0a94762a2f007c61ea8acff2e7dbd05352f677dc4->leave($__internal_32ccbd3666d500cfad944ce0a94762a2f007c61ea8acff2e7dbd05352f677dc4_prof);

        
        $__internal_6467c80598f4e6a66ab0eec496f8d330effbaf75716ee4285ae1728497093f1c->leave($__internal_6467c80598f4e6a66ab0eec496f8d330effbaf75716ee4285ae1728497093f1c_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6bd65c8dd478052bd80cb6da9823b644cbc3c660f4844fe4db85ce432007a979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bd65c8dd478052bd80cb6da9823b644cbc3c660f4844fe4db85ce432007a979->enter($__internal_6bd65c8dd478052bd80cb6da9823b644cbc3c660f4844fe4db85ce432007a979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b06b2fdd063c12b1ee55449e28cfeab8649b76776809510636a8fea43be24297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06b2fdd063c12b1ee55449e28cfeab8649b76776809510636a8fea43be24297->enter($__internal_b06b2fdd063c12b1ee55449e28cfeab8649b76776809510636a8fea43be24297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "    ";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("venteflash_Listing", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "operation" => 1)), "html", null, true);
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
        
        $__internal_b06b2fdd063c12b1ee55449e28cfeab8649b76776809510636a8fea43be24297->leave($__internal_b06b2fdd063c12b1ee55449e28cfeab8649b76776809510636a8fea43be24297_prof);

        
        $__internal_6bd65c8dd478052bd80cb6da9823b644cbc3c660f4844fe4db85ce432007a979->leave($__internal_6bd65c8dd478052bd80cb6da9823b644cbc3c660f4844fe4db85ce432007a979_prof);

    }

    public function getTemplateName()
    {
        return "venteflash/addflash.html.twig";
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
                jsFormUrl = '{{ path('venteflash_Listing',{'id': id, 'operation':1}) }}';
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


", "venteflash/addflash.html.twig", "C:\\wamp64\\www\\test\\app\\Resources\\views\\venteflash\\addflash.html.twig");
    }
}
