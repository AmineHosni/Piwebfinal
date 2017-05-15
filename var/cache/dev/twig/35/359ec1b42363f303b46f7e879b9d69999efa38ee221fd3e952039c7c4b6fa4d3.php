<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_695390a8e3e897c63fb09ad1a596cd63095ce8e85c16f7c0fcc8c7167b6bdfb0 extends Twig_Template
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
        $__internal_ccd3e4fb4fc12e78836b059a5faeb35c1f9257fd3d08330985af562693e1a49e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccd3e4fb4fc12e78836b059a5faeb35c1f9257fd3d08330985af562693e1a49e->enter($__internal_ccd3e4fb4fc12e78836b059a5faeb35c1f9257fd3d08330985af562693e1a49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_bb2430ab73146beda1c77fb06257266cddf0752cb80d8bfe3d42a987f9023a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2430ab73146beda1c77fb06257266cddf0752cb80d8bfe3d42a987f9023a95->enter($__internal_bb2430ab73146beda1c77fb06257266cddf0752cb80d8bfe3d42a987f9023a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_ccd3e4fb4fc12e78836b059a5faeb35c1f9257fd3d08330985af562693e1a49e->leave($__internal_ccd3e4fb4fc12e78836b059a5faeb35c1f9257fd3d08330985af562693e1a49e_prof);

        
        $__internal_bb2430ab73146beda1c77fb06257266cddf0752cb80d8bfe3d42a987f9023a95->leave($__internal_bb2430ab73146beda1c77fb06257266cddf0752cb80d8bfe3d42a987f9023a95_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\test\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
