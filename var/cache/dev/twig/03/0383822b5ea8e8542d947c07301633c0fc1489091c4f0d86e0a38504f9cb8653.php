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
        $__internal_f991cf4f3659bdddd659e7c5fd3fb6f2bee6646e55e00072dd09c1461417ba21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f991cf4f3659bdddd659e7c5fd3fb6f2bee6646e55e00072dd09c1461417ba21->enter($__internal_f991cf4f3659bdddd659e7c5fd3fb6f2bee6646e55e00072dd09c1461417ba21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:user:clientsList.html.twig"));

        $__internal_8a0d8b757785d4947e183c8660b07e416f7104a43922cda53ade5c48626d3982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0d8b757785d4947e183c8660b07e416f7104a43922cda53ade5c48626d3982->enter($__internal_8a0d8b757785d4947e183c8660b07e416f7104a43922cda53ade5c48626d3982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:user:clientsList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f991cf4f3659bdddd659e7c5fd3fb6f2bee6646e55e00072dd09c1461417ba21->leave($__internal_f991cf4f3659bdddd659e7c5fd3fb6f2bee6646e55e00072dd09c1461417ba21_prof);

        
        $__internal_8a0d8b757785d4947e183c8660b07e416f7104a43922cda53ade5c48626d3982->leave($__internal_8a0d8b757785d4947e183c8660b07e416f7104a43922cda53ade5c48626d3982_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2edfbaf70b349dfe63399fc5adc9bb257f6a81caa2ea248fa8ed9d59592a4660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2edfbaf70b349dfe63399fc5adc9bb257f6a81caa2ea248fa8ed9d59592a4660->enter($__internal_2edfbaf70b349dfe63399fc5adc9bb257f6a81caa2ea248fa8ed9d59592a4660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cc098d4c8b83c3d1db4c6383d7431df2e7fc20dd2bacbf82764690a482906d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc098d4c8b83c3d1db4c6383d7431df2e7fc20dd2bacbf82764690a482906d37->enter($__internal_cc098d4c8b83c3d1db4c6383d7431df2e7fc20dd2bacbf82764690a482906d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_cc098d4c8b83c3d1db4c6383d7431df2e7fc20dd2bacbf82764690a482906d37->leave($__internal_cc098d4c8b83c3d1db4c6383d7431df2e7fc20dd2bacbf82764690a482906d37_prof);

        
        $__internal_2edfbaf70b349dfe63399fc5adc9bb257f6a81caa2ea248fa8ed9d59592a4660->leave($__internal_2edfbaf70b349dfe63399fc5adc9bb257f6a81caa2ea248fa8ed9d59592a4660_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e449398a33846799e272f315c8ee3509d72b24bb489427c7b70086df27c2062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e449398a33846799e272f315c8ee3509d72b24bb489427c7b70086df27c2062->enter($__internal_4e449398a33846799e272f315c8ee3509d72b24bb489427c7b70086df27c2062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_27f194c869d1f98f6d4cda20a68013fe965818df1a0923b058b8a39a692bb46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f194c869d1f98f6d4cda20a68013fe965818df1a0923b058b8a39a692bb46b->enter($__internal_27f194c869d1f98f6d4cda20a68013fe965818df1a0923b058b8a39a692bb46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_27f194c869d1f98f6d4cda20a68013fe965818df1a0923b058b8a39a692bb46b->leave($__internal_27f194c869d1f98f6d4cda20a68013fe965818df1a0923b058b8a39a692bb46b_prof);

        
        $__internal_4e449398a33846799e272f315c8ee3509d72b24bb489427c7b70086df27c2062->leave($__internal_4e449398a33846799e272f315c8ee3509d72b24bb489427c7b70086df27c2062_prof);

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

", "MainBundle:user:clientsList.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\src\\MainBundle/Resources/views/user/clientsList.html.twig");
    }
}
