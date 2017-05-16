<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e6440e34d540da710f84f23bfadf953eda13e71d397478e586002e5aa7f79cae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_181fb8b45bcf20638a9d9d222cc51ba143a4d5d7386b73329e0f4e65a8718ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_181fb8b45bcf20638a9d9d222cc51ba143a4d5d7386b73329e0f4e65a8718ca4->enter($__internal_181fb8b45bcf20638a9d9d222cc51ba143a4d5d7386b73329e0f4e65a8718ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d063778011b6945c66ca12210d2eb864dccfef5a94bf73765c207c2c90bc208e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d063778011b6945c66ca12210d2eb864dccfef5a94bf73765c207c2c90bc208e->enter($__internal_d063778011b6945c66ca12210d2eb864dccfef5a94bf73765c207c2c90bc208e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_181fb8b45bcf20638a9d9d222cc51ba143a4d5d7386b73329e0f4e65a8718ca4->leave($__internal_181fb8b45bcf20638a9d9d222cc51ba143a4d5d7386b73329e0f4e65a8718ca4_prof);

        
        $__internal_d063778011b6945c66ca12210d2eb864dccfef5a94bf73765c207c2c90bc208e->leave($__internal_d063778011b6945c66ca12210d2eb864dccfef5a94bf73765c207c2c90bc208e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c91837c7669db8c6f98d5bca85a49119932dad934a19e0ecf8afd243a08c23b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91837c7669db8c6f98d5bca85a49119932dad934a19e0ecf8afd243a08c23b4->enter($__internal_c91837c7669db8c6f98d5bca85a49119932dad934a19e0ecf8afd243a08c23b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6a4e81441942a8590e9c08f906c0aca357aa01252c4b0a546a5352b189db39e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4e81441942a8590e9c08f906c0aca357aa01252c4b0a546a5352b189db39e1->enter($__internal_6a4e81441942a8590e9c08f906c0aca357aa01252c4b0a546a5352b189db39e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6a4e81441942a8590e9c08f906c0aca357aa01252c4b0a546a5352b189db39e1->leave($__internal_6a4e81441942a8590e9c08f906c0aca357aa01252c4b0a546a5352b189db39e1_prof);

        
        $__internal_c91837c7669db8c6f98d5bca85a49119932dad934a19e0ecf8afd243a08c23b4->leave($__internal_c91837c7669db8c6f98d5bca85a49119932dad934a19e0ecf8afd243a08c23b4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fe3006a93619e22c2cd783af9881fdc13f463992325d22aca6c71f5955bc46c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe3006a93619e22c2cd783af9881fdc13f463992325d22aca6c71f5955bc46c->enter($__internal_7fe3006a93619e22c2cd783af9881fdc13f463992325d22aca6c71f5955bc46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe0927cba1c933dfe011b20d8c9cc667f128d824cfe09d10c3a62536601d7e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0927cba1c933dfe011b20d8c9cc667f128d824cfe09d10c3a62536601d7e25->enter($__internal_fe0927cba1c933dfe011b20d8c9cc667f128d824cfe09d10c3a62536601d7e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fe0927cba1c933dfe011b20d8c9cc667f128d824cfe09d10c3a62536601d7e25->leave($__internal_fe0927cba1c933dfe011b20d8c9cc667f128d824cfe09d10c3a62536601d7e25_prof);

        
        $__internal_7fe3006a93619e22c2cd783af9881fdc13f463992325d22aca6c71f5955bc46c->leave($__internal_7fe3006a93619e22c2cd783af9881fdc13f463992325d22aca6c71f5955bc46c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5056b7d6f9c260f4005236d88cb59dff282c6f37cd48b3405b28b3bd47153543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5056b7d6f9c260f4005236d88cb59dff282c6f37cd48b3405b28b3bd47153543->enter($__internal_5056b7d6f9c260f4005236d88cb59dff282c6f37cd48b3405b28b3bd47153543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f96c7dec663b4e4a085935a69120165ce46745e2f05221fc19476b57f48d6f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96c7dec663b4e4a085935a69120165ce46745e2f05221fc19476b57f48d6f79->enter($__internal_f96c7dec663b4e4a085935a69120165ce46745e2f05221fc19476b57f48d6f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f96c7dec663b4e4a085935a69120165ce46745e2f05221fc19476b57f48d6f79->leave($__internal_f96c7dec663b4e4a085935a69120165ce46745e2f05221fc19476b57f48d6f79_prof);

        
        $__internal_5056b7d6f9c260f4005236d88cb59dff282c6f37cd48b3405b28b3bd47153543->leave($__internal_5056b7d6f9c260f4005236d88cb59dff282c6f37cd48b3405b28b3bd47153543_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
