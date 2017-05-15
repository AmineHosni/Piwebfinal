<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_96bf964b78de8e69ba89a870bb776fc023664bb8216388c9dda453250df8a577 extends Twig_Template
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
        $__internal_2c8696ca45e8a70680f5a63c3fe34f6a3acbdc7d406b59bc2d712bdfbae16410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8696ca45e8a70680f5a63c3fe34f6a3acbdc7d406b59bc2d712bdfbae16410->enter($__internal_2c8696ca45e8a70680f5a63c3fe34f6a3acbdc7d406b59bc2d712bdfbae16410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_c3f15664ecc5c8d31e5c2409b59fdf582ee1cca84d26c27bb70c5ec59c962a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f15664ecc5c8d31e5c2409b59fdf582ee1cca84d26c27bb70c5ec59c962a5f->enter($__internal_c3f15664ecc5c8d31e5c2409b59fdf582ee1cca84d26c27bb70c5ec59c962a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_2c8696ca45e8a70680f5a63c3fe34f6a3acbdc7d406b59bc2d712bdfbae16410->leave($__internal_2c8696ca45e8a70680f5a63c3fe34f6a3acbdc7d406b59bc2d712bdfbae16410_prof);

        
        $__internal_c3f15664ecc5c8d31e5c2409b59fdf582ee1cca84d26c27bb70c5ec59c962a5f->leave($__internal_c3f15664ecc5c8d31e5c2409b59fdf582ee1cca84d26c27bb70c5ec59c962a5f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\test\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
