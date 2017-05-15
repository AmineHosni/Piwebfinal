<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_6506edacc1d9caece9c3f99a2e022825e20fc6ab81c34aef6f8e2e4c9f06f920 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a242d0ceb94e6b4e24f425ec4461697e3e521ed589770c39a9c871516d105f5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a242d0ceb94e6b4e24f425ec4461697e3e521ed589770c39a9c871516d105f5b->enter($__internal_a242d0ceb94e6b4e24f425ec4461697e3e521ed589770c39a9c871516d105f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_c8215af52f38b6529a59f5a52664e93d1d70f39a2053b1e0b5b6cc2df4730202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8215af52f38b6529a59f5a52664e93d1d70f39a2053b1e0b5b6cc2df4730202->enter($__internal_c8215af52f38b6529a59f5a52664e93d1d70f39a2053b1e0b5b6cc2df4730202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a242d0ceb94e6b4e24f425ec4461697e3e521ed589770c39a9c871516d105f5b->leave($__internal_a242d0ceb94e6b4e24f425ec4461697e3e521ed589770c39a9c871516d105f5b_prof);

        
        $__internal_c8215af52f38b6529a59f5a52664e93d1d70f39a2053b1e0b5b6cc2df4730202->leave($__internal_c8215af52f38b6529a59f5a52664e93d1d70f39a2053b1e0b5b6cc2df4730202_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e1720d39c7ea76b8e6c2b272ca124e3db5fffad5c41c65605a591336b6e3999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1720d39c7ea76b8e6c2b272ca124e3db5fffad5c41c65605a591336b6e3999->enter($__internal_5e1720d39c7ea76b8e6c2b272ca124e3db5fffad5c41c65605a591336b6e3999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1cb3cc0997d2c2762e9784faf0b055b54032526ba4e8d1539689d9f7e34490e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb3cc0997d2c2762e9784faf0b055b54032526ba4e8d1539689d9f7e34490e3->enter($__internal_1cb3cc0997d2c2762e9784faf0b055b54032526ba4e8d1539689d9f7e34490e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_1cb3cc0997d2c2762e9784faf0b055b54032526ba4e8d1539689d9f7e34490e3->leave($__internal_1cb3cc0997d2c2762e9784faf0b055b54032526ba4e8d1539689d9f7e34490e3_prof);

        
        $__internal_5e1720d39c7ea76b8e6c2b272ca124e3db5fffad5c41c65605a591336b6e3999->leave($__internal_5e1720d39c7ea76b8e6c2b272ca124e3db5fffad5c41c65605a591336b6e3999_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\test\\src\\MainBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
