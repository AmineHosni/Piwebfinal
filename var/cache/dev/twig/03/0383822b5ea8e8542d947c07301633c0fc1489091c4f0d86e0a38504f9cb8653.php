<?php

/* MainBundle:user:clientsList.html.twig */
class __TwigTemplate_690c0ec90fc1b48980c8622f5eff26ef0e24ccb04d14d4e521248ce10f187e71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "MainBundle:user:clientsList.html.twig", 1);
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
        $__internal_f073ee4df0044fac98f539892462e7a4194daf0499a33669b72118a3cf29868f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f073ee4df0044fac98f539892462e7a4194daf0499a33669b72118a3cf29868f->enter($__internal_f073ee4df0044fac98f539892462e7a4194daf0499a33669b72118a3cf29868f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:user:clientsList.html.twig"));

        $__internal_c96203ab186faed64ad8b852df2f820442ec1ee4eb1c561119bb5477cb90bea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96203ab186faed64ad8b852df2f820442ec1ee4eb1c561119bb5477cb90bea5->enter($__internal_c96203ab186faed64ad8b852df2f820442ec1ee4eb1c561119bb5477cb90bea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:user:clientsList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f073ee4df0044fac98f539892462e7a4194daf0499a33669b72118a3cf29868f->leave($__internal_f073ee4df0044fac98f539892462e7a4194daf0499a33669b72118a3cf29868f_prof);

        
        $__internal_c96203ab186faed64ad8b852df2f820442ec1ee4eb1c561119bb5477cb90bea5->leave($__internal_c96203ab186faed64ad8b852df2f820442ec1ee4eb1c561119bb5477cb90bea5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_94cbc48aafb1ff74320e171252578597a8553907e74c98ce6cacc428f497ba54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94cbc48aafb1ff74320e171252578597a8553907e74c98ce6cacc428f497ba54->enter($__internal_94cbc48aafb1ff74320e171252578597a8553907e74c98ce6cacc428f497ba54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_99a05c58d3ac3460ace7146621c5d72045e3de975f4938f354fe7b57d23f3186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a05c58d3ac3460ace7146621c5d72045e3de975f4938f354fe7b57d23f3186->enter($__internal_99a05c58d3ac3460ace7146621c5d72045e3de975f4938f354fe7b57d23f3186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"container main-container\">
    <div class=\"row\">
        <div class=\"col-lg-12\">


            <h1 class=\"page-header\">
                liste des membres
            </h1>

        </div>
    <form id=\"jsform\" >
        <input id=\"pagenumber\" type=\"hidden\" name=\"searchParam[page]\" value=\"1\">
        <input id=\"sortBy\" type=\"hidden\" name=\"searchParam[sortBy]\" value=\"all\">
        <input id=\"sortDir\" type=\"hidden\" name=\"searchParam[sortDir]\" value=\"ASC\">
        <input id=\"sortDir\" type=\"hidden\" name=\"searchParam[perPage]\" value=\"4\">
        <h2>Recherche des membres</h2>
        <div id=\"custom-search-input\">
            <div class=\"input-group col-md-7\">
                <input type=\"text\"    class=\"form-control input-lg\" placeholder=\"recherche\" name=\"searchParam[keyword]\" />
                <br>
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-info btn-lg\" type=\"submit\">
                        <i class=\"glyphicon glyphicon-search\"></i>
                    </button>
                </span>
            </div>
        </div>
            <br>

        <div class=\"row\">

            <div id=\"xcontainer\" class=\"row\">
            </div>

        </div>
    </form>

</div></div>


";
        
        $__internal_99a05c58d3ac3460ace7146621c5d72045e3de975f4938f354fe7b57d23f3186->leave($__internal_99a05c58d3ac3460ace7146621c5d72045e3de975f4938f354fe7b57d23f3186_prof);

        
        $__internal_94cbc48aafb1ff74320e171252578597a8553907e74c98ce6cacc428f497ba54->leave($__internal_94cbc48aafb1ff74320e171252578597a8553907e74c98ce6cacc428f497ba54_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f57cfa6e033fefff979c117f7d2683264f67b22a76aa9162a60511c00b37c1b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f57cfa6e033fefff979c117f7d2683264f67b22a76aa9162a60511c00b37c1b4->enter($__internal_f57cfa6e033fefff979c117f7d2683264f67b22a76aa9162a60511c00b37c1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1f710b77e8764c6179cc30eb1cde3454fb4048528f5099acfa5aa0bae50d3318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f710b77e8764c6179cc30eb1cde3454fb4048528f5099acfa5aa0bae50d3318->enter($__internal_1f710b77e8764c6179cc30eb1cde3454fb4048528f5099acfa5aa0bae50d3318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        (function (\$) {
            var form = \$('#jsform'),
                    jsFormUrl = '',
                    container = \$('#xcontainer'),
                    pageInput = form.find('#pagenumber');

            function init() {
                jsFormUrl = '";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_list");
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
                            container.empty().hide().html(data).fadeIn();
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
            /* pagination */
            form.on('click', '.js-page', function () {
                pageInput.val(\$(this).data('page'));
                ajaxPost();
            });
            form.on('submit', ajaxPost);
            init();
            setTimeout(ajaxPost, 1);


        })(jQuery);
    </script>
";
        
        $__internal_1f710b77e8764c6179cc30eb1cde3454fb4048528f5099acfa5aa0bae50d3318->leave($__internal_1f710b77e8764c6179cc30eb1cde3454fb4048528f5099acfa5aa0bae50d3318_prof);

        
        $__internal_f57cfa6e033fefff979c117f7d2683264f67b22a76aa9162a60511c00b37c1b4->leave($__internal_f57cfa6e033fefff979c117f7d2683264f67b22a76aa9162a60511c00b37c1b4_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:user:clientsList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 56,  110 => 47,  101 => 46,  50 => 4,  41 => 3,  11 => 1,);
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
    <div class=\"row\">
        <div class=\"col-lg-12\">


            <h1 class=\"page-header\">
                liste des membres
            </h1>

        </div>
    <form id=\"jsform\" >
        <input id=\"pagenumber\" type=\"hidden\" name=\"searchParam[page]\" value=\"1\">
        <input id=\"sortBy\" type=\"hidden\" name=\"searchParam[sortBy]\" value=\"all\">
        <input id=\"sortDir\" type=\"hidden\" name=\"searchParam[sortDir]\" value=\"ASC\">
        <input id=\"sortDir\" type=\"hidden\" name=\"searchParam[perPage]\" value=\"4\">
        <h2>Recherche des membres</h2>
        <div id=\"custom-search-input\">
            <div class=\"input-group col-md-7\">
                <input type=\"text\"    class=\"form-control input-lg\" placeholder=\"recherche\" name=\"searchParam[keyword]\" />
                <br>
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-info btn-lg\" type=\"submit\">
                        <i class=\"glyphicon glyphicon-search\"></i>
                    </button>
                </span>
            </div>
        </div>
            <br>

        <div class=\"row\">

            <div id=\"xcontainer\" class=\"row\">
            </div>

        </div>
    </form>

</div></div>


{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script>
        (function (\$) {
            var form = \$('#jsform'),
                    jsFormUrl = '',
                    container = \$('#xcontainer'),
                    pageInput = form.find('#pagenumber');

            function init() {
                jsFormUrl = '{{ path('user_list') }}';
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
                            container.empty().hide().html(data).fadeIn();
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
            /* pagination */
            form.on('click', '.js-page', function () {
                pageInput.val(\$(this).data('page'));
                ajaxPost();
            });
            form.on('submit', ajaxPost);
            init();
            setTimeout(ajaxPost, 1);


        })(jQuery);
    </script>
{% endblock %}

", "MainBundle:user:clientsList.html.twig", "C:\\wamp64\\www\\test\\src\\MainBundle/Resources/views/user/clientsList.html.twig");
    }
}
