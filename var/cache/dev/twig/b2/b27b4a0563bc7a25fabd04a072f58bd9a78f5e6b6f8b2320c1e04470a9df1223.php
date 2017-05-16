<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_d3625e48113729179a72a8a16a0eb9a810e6589405d592dcf99fb4a155385c52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
            'ckeditor_javascript' => array($this, 'block_ckeditor_javascript'),
            '_ckeditor_javascript' => array($this, 'block__ckeditor_javascript'),
            'ckeditor_widget_extra' => array($this, 'block_ckeditor_widget_extra'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e54ba6caaf609364c0711f6f0427d74be360bbde563085c4f44dc54c68ab3641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e54ba6caaf609364c0711f6f0427d74be360bbde563085c4f44dc54c68ab3641->enter($__internal_e54ba6caaf609364c0711f6f0427d74be360bbde563085c4f44dc54c68ab3641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig"));

        $__internal_02439087ac84ac069059ff7f5b6095b709f7b2cf757a9e930b5de9e4db626a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02439087ac84ac069059ff7f5b6095b709f7b2cf757a9e930b5de9e4db626a66->enter($__internal_02439087ac84ac069059ff7f5b6095b709f7b2cf757a9e930b5de9e4db626a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig"));

        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('ckeditor_javascript', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('_ckeditor_javascript', $context, $blocks);
        
        $__internal_e54ba6caaf609364c0711f6f0427d74be360bbde563085c4f44dc54c68ab3641->leave($__internal_e54ba6caaf609364c0711f6f0427d74be360bbde563085c4f44dc54c68ab3641_prof);

        
        $__internal_02439087ac84ac069059ff7f5b6095b709f7b2cf757a9e930b5de9e4db626a66->leave($__internal_02439087ac84ac069059ff7f5b6095b709f7b2cf757a9e930b5de9e4db626a66_prof);

    }

    // line 1
    public function block_ckeditor_widget($context, array $blocks = array())
    {
        $__internal_720fbadc0249064a78ca008dd988d23149c374b8a35a8b191a2a82f7265eb6a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_720fbadc0249064a78ca008dd988d23149c374b8a35a8b191a2a82f7265eb6a2->enter($__internal_720fbadc0249064a78ca008dd988d23149c374b8a35a8b191a2a82f7265eb6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        $__internal_6b2606d75cd0a5c65e6604587866e4eed5dd474d89618907564aa181b0315524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2606d75cd0a5c65e6604587866e4eed5dd474d89618907564aa181b0315524->enter($__internal_6b2606d75cd0a5c65e6604587866e4eed5dd474d89618907564aa181b0315524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if (((isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable")) &&  !(isset($context["async"]) ? $context["async"] : $this->getContext($context, "async")))) {
            // line 5
            echo "        ";
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6b2606d75cd0a5c65e6604587866e4eed5dd474d89618907564aa181b0315524->leave($__internal_6b2606d75cd0a5c65e6604587866e4eed5dd474d89618907564aa181b0315524_prof);

        
        $__internal_720fbadc0249064a78ca008dd988d23149c374b8a35a8b191a2a82f7265eb6a2->leave($__internal_720fbadc0249064a78ca008dd988d23149c374b8a35a8b191a2a82f7265eb6a2_prof);

    }

    // line 9
    public function block_ckeditor_javascript($context, array $blocks = array())
    {
        $__internal_6c3524dd08522e7862627dd45c398567a0c5675bb6f8a6732caeba2b0d882df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c3524dd08522e7862627dd45c398567a0c5675bb6f8a6732caeba2b0d882df1->enter($__internal_6c3524dd08522e7862627dd45c398567a0c5675bb6f8a6732caeba2b0d882df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_javascript"));

        $__internal_421a960283ad3c3d8590d1b8366c0401b471a0cca3cd17bae67a74f1f4dd44b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421a960283ad3c3d8590d1b8366c0401b471a0cca3cd17bae67a74f1f4dd44b3->enter($__internal_421a960283ad3c3d8590d1b8366c0401b471a0cca3cd17bae67a74f1f4dd44b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_javascript"));

        // line 10
        echo "    ";
        if (((isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable")) && (isset($context["async"]) ? $context["async"] : $this->getContext($context, "async")))) {
            // line 11
            echo "        ";
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_421a960283ad3c3d8590d1b8366c0401b471a0cca3cd17bae67a74f1f4dd44b3->leave($__internal_421a960283ad3c3d8590d1b8366c0401b471a0cca3cd17bae67a74f1f4dd44b3_prof);

        
        $__internal_6c3524dd08522e7862627dd45c398567a0c5675bb6f8a6732caeba2b0d882df1->leave($__internal_6c3524dd08522e7862627dd45c398567a0c5675bb6f8a6732caeba2b0d882df1_prof);

    }

    // line 15
    public function block__ckeditor_javascript($context, array $blocks = array())
    {
        $__internal_1bc6d9b38eace7384b1505752c527450eef5bbf3dfddb01437db2d3fd555d201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc6d9b38eace7384b1505752c527450eef5bbf3dfddb01437db2d3fd555d201->enter($__internal_1bc6d9b38eace7384b1505752c527450eef5bbf3dfddb01437db2d3fd555d201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_ckeditor_javascript"));

        $__internal_ccafd400358a3744db372ad0bae3d780e71ffddd20e62283d77b7d8974e6aece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccafd400358a3744db372ad0bae3d780e71ffddd20e62283d77b7d8974e6aece->enter($__internal_ccafd400358a3744db372ad0bae3d780e71ffddd20e62283d77b7d8974e6aece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_ckeditor_javascript"));

        // line 16
        echo "    ";
        if ((isset($context["autoload"]) ? $context["autoload"] : $this->getContext($context, "autoload"))) {
            // line 17
            echo "        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"";
            // line 18
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderBasePath((isset($context["base_path"]) ? $context["base_path"] : $this->getContext($context, "base_path")));
            echo "\";
        </script>
        <script type=\"text/javascript\" src=\"";
            // line 20
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderJsPath((isset($context["js_path"]) ? $context["js_path"] : $this->getContext($context, "js_path")));
            echo "\"></script>
        ";
            // line 21
            if ((isset($context["jquery"]) ? $context["jquery"] : $this->getContext($context, "jquery"))) {
                // line 22
                echo "            <script type=\"text/javascript\" src=\"";
                echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderJsPath((isset($context["jquery_path"]) ? $context["jquery_path"] : $this->getContext($context, "jquery_path")));
                echo "\"></script>
        ";
            }
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <script type=\"text/javascript\">
        ";
        // line 26
        if ((isset($context["jquery"]) ? $context["jquery"] : $this->getContext($context, "jquery"))) {
            // line 27
            echo "            \$(function () {
        ";
        }
        // line 29
        echo "
        ";
        // line 30
        if ((isset($context["require_js"]) ? $context["require_js"] : $this->getContext($context, "require_js"))) {
            // line 31
            echo "            require(['ckeditor'], function() {
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderDestroy((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        echo "

        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")));
        foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
            // line 37
            echo "            ";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderPlugin($context["plugin_name"], $context["plugin"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : $this->getContext($context, "styles")));
        foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
            // line 41
            echo "            ";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderStylesSet($context["style_name"], $context["style"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
        foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
            // line 45
            echo "            ";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderTemplate($context["template_name"], $context["template"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
        ";
        // line 48
        $this->displayBlock('ckeditor_widget_extra', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderWidget((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), array("auto_inline" =>         // line 51
(isset($context["auto_inline"]) ? $context["auto_inline"] : $this->getContext($context, "auto_inline")), "inline" =>         // line 52
(isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "input_sync" =>         // line 53
(isset($context["input_sync"]) ? $context["input_sync"] : $this->getContext($context, "input_sync")), "filebrowsers" =>         // line 54
(isset($context["filebrowsers"]) ? $context["filebrowsers"] : $this->getContext($context, "filebrowsers"))));
        // line 55
        echo "

        ";
        // line 57
        if ((isset($context["require_js"]) ? $context["require_js"] : $this->getContext($context, "require_js"))) {
            // line 58
            echo "            });
        ";
        }
        // line 60
        echo "
        ";
        // line 61
        if ((isset($context["jquery"]) ? $context["jquery"] : $this->getContext($context, "jquery"))) {
            // line 62
            echo "            });
        ";
        }
        // line 64
        echo "    </script>
";
        
        $__internal_ccafd400358a3744db372ad0bae3d780e71ffddd20e62283d77b7d8974e6aece->leave($__internal_ccafd400358a3744db372ad0bae3d780e71ffddd20e62283d77b7d8974e6aece_prof);

        
        $__internal_1bc6d9b38eace7384b1505752c527450eef5bbf3dfddb01437db2d3fd555d201->leave($__internal_1bc6d9b38eace7384b1505752c527450eef5bbf3dfddb01437db2d3fd555d201_prof);

    }

    // line 48
    public function block_ckeditor_widget_extra($context, array $blocks = array())
    {
        $__internal_716f1d98b7ee89cc68de7520166290e4ae8ea9ef9691350392a73b52ca26130f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716f1d98b7ee89cc68de7520166290e4ae8ea9ef9691350392a73b52ca26130f->enter($__internal_716f1d98b7ee89cc68de7520166290e4ae8ea9ef9691350392a73b52ca26130f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget_extra"));

        $__internal_a1b65c7faae93fbc2457d9f8f35c8bd0a34006723de86293a8cf2fdec94a2b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b65c7faae93fbc2457d9f8f35c8bd0a34006723de86293a8cf2fdec94a2b0c->enter($__internal_a1b65c7faae93fbc2457d9f8f35c8bd0a34006723de86293a8cf2fdec94a2b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget_extra"));

        
        $__internal_a1b65c7faae93fbc2457d9f8f35c8bd0a34006723de86293a8cf2fdec94a2b0c->leave($__internal_a1b65c7faae93fbc2457d9f8f35c8bd0a34006723de86293a8cf2fdec94a2b0c_prof);

        
        $__internal_716f1d98b7ee89cc68de7520166290e4ae8ea9ef9691350392a73b52ca26130f->leave($__internal_716f1d98b7ee89cc68de7520166290e4ae8ea9ef9691350392a73b52ca26130f_prof);

    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  258 => 48,  247 => 64,  243 => 62,  241 => 61,  238 => 60,  234 => 58,  232 => 57,  228 => 55,  226 => 54,  225 => 53,  224 => 52,  223 => 51,  222 => 50,  219 => 49,  217 => 48,  214 => 47,  205 => 45,  201 => 44,  198 => 43,  189 => 41,  185 => 40,  182 => 39,  173 => 37,  169 => 36,  164 => 34,  161 => 33,  157 => 31,  155 => 30,  152 => 29,  148 => 27,  146 => 26,  143 => 25,  140 => 24,  134 => 22,  132 => 21,  128 => 20,  123 => 18,  120 => 17,  117 => 16,  108 => 15,  94 => 11,  91 => 10,  82 => 9,  68 => 5,  66 => 4,  58 => 2,  49 => 1,  39 => 15,  36 => 14,  34 => 9,  31 => 8,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block ckeditor_widget %}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>

    {% if enable and not async %}
        {{ block('_ckeditor_javascript') }}
    {% endif %}
{% endblock %}

{% block ckeditor_javascript %}
    {% if enable and async %}
        {{ block('_ckeditor_javascript') }}
    {% endif %}
{% endblock %}

{% block _ckeditor_javascript %}
    {% if autoload %}
        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"{{ ckeditor_base_path(base_path) }}\";
        </script>
        <script type=\"text/javascript\" src=\"{{ ckeditor_js_path(js_path) }}\"></script>
        {% if jquery %}
            <script type=\"text/javascript\" src=\"{{ ckeditor_js_path(jquery_path) }}\"></script>
        {% endif %}
    {% endif %}
    <script type=\"text/javascript\">
        {% if jquery %}
            \$(function () {
        {% endif %}

        {% if require_js %}
            require(['ckeditor'], function() {
        {% endif %}

        {{ ckeditor_destroy(id) }}

        {% for plugin_name, plugin in plugins %}
            {{ ckeditor_plugin(plugin_name, plugin) }}
        {% endfor %}

        {% for style_name, style in styles %}
            {{ ckeditor_styles_set(style_name, style) }}
        {% endfor %}

        {% for template_name, template in templates %}
            {{ ckeditor_template(template_name, template) }}
        {% endfor %}

        {% block ckeditor_widget_extra %}{% endblock ckeditor_widget_extra %}

        {{ ckeditor_widget(id, config, {
            auto_inline: auto_inline,
            inline: inline,
            input_sync: input_sync,
            filebrowsers: filebrowsers
        }) }}

        {% if require_js %}
            });
        {% endif %}

        {% if jquery %}
            });
        {% endif %}
    </script>
{% endblock %}
", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\vendor\\egeloen\\ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.twig");
    }
}
