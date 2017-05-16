<?php

/* coupon/print.html.twig */
class __TwigTemplate_71aaca5e96476b9fbc3fdd33a6d638cadd3fa9b8a1fe80966396992f8813038a extends Twig_Template
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
        $__internal_46c5e53bdca577d6d1c8d12b583866831881a5e23d09477afccae48cef0b6829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c5e53bdca577d6d1c8d12b583866831881a5e23d09477afccae48cef0b6829->enter($__internal_46c5e53bdca577d6d1c8d12b583866831881a5e23d09477afccae48cef0b6829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coupon/print.html.twig"));

        $__internal_5abd59740913521b8ff88824c4e871be9be9ac2513a426973a2f22179c0f4a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5abd59740913521b8ff88824c4e871be9be9ac2513a426973a2f22179c0f4a79->enter($__internal_5abd59740913521b8ff88824c4e871be9be9ac2513a426973a2f22179c0f4a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coupon/print.html.twig"));

        // line 1
        echo "<style type=\"text/css\">
    .coupon {
        position: relative;

    }
    .qrcode{
        position: absolute;
        top: 300px;
        left: 50;
        width: 100%;
    }
    .img{
        position: absolute;
        top: 20px;
        left: 50;
        width: 100%;
    }
    .prix{
        position: absolute;
        top: 50px;
        left: 410;
        width: 100%;
        color: rgb(32, 64, 128);
        font: 15px Algerian, sans-serif;
    }
    .username {
        position: absolute;
        top: 50px;
        left: 650;
        width: 100%;
    }
    .ville {
        position: absolute;
        top: 60px;
        left: 650;
        width: 100%;
    }
    .adresse {
        position: absolute;
        top: 100px;
        left: 650;
        width: 100%;
    }
    .vendeur {
        position: absolute;
        top: 300px;
        left: 640;
        width: 100%;
    }
    .date {
        position: absolute;
        top: 220px;
        left: 700;
        width: 100%;
    }
    .logo {
        position: absolute;
        top: 395px;
        left: 400;
        width: 100%;
    }
</style>

<div class=\"coupon\">
    <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/aasaas.png"), "html", null, true);
        echo "\">
</div>
<div class=\"username\">
    <h3>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h3></div>
<div class=\"ville\">  <br /><h3>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pays", array()), "html", null, true);
        echo "</h3><br /></div>
<div class=\"adresse\">   <h3>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ville", array()), "html", null, true);
        echo "</h3><br /></div>


<div class=\"date\"><h4>";
        // line 73
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")), "datedeb", array()), "m/d/Y"), "html", null, true);
        echo "</h4></div>
<div class=\"prix\">


    <h1>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")), "tauxreduction", array()), "html", null, true);
        echo " Dinar <br>de Reduction</h1>
</div>
<div class=\"vendeur\">


    <p>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")), "utilisateur_id", array()), "username", array()), "html", null, true);
        echo " <br>
        ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")), "utilisateur_id", array()), "pays", array()), "html", null, true);
        echo " <br>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")), "utilisateur_id", array()), "ville", array()), "html", null, true);
        echo "<br>
        ";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")), "utilisateur_id", array()), "cp", array()), "html", null, true);
        echo " </p>
</div>
<div class=\"qrcode\">
    <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Endroid\QrCode\Bundle\Twig\Extension\QrCodeExtension')->qrcodeUrlFunction(("http://localhost:8080/eshop-master/web/app_dev.php/coupon/print/" . $this->getAttribute((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")), "id", array())), array("size" => 120)), "html", null, true);
        echo "\" />

</div>
<div class=\"img\">

    <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")), "imageName", array())), "html", null, true);
        echo "\" style=\"width : 150px; height: 250px ;\" /></div>
<div class=\"logo\">
    <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/Capture.PNG"), "html", null, true);
        echo "\" style=\"width : 200px; height: 40px ;\" />
</div>
";
        
        $__internal_46c5e53bdca577d6d1c8d12b583866831881a5e23d09477afccae48cef0b6829->leave($__internal_46c5e53bdca577d6d1c8d12b583866831881a5e23d09477afccae48cef0b6829_prof);

        
        $__internal_5abd59740913521b8ff88824c4e871be9be9ac2513a426973a2f22179c0f4a79->leave($__internal_5abd59740913521b8ff88824c4e871be9be9ac2513a426973a2f22179c0f4a79_prof);

    }

    public function getTemplateName()
    {
        return "coupon/print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 94,  152 => 92,  144 => 87,  138 => 84,  132 => 83,  128 => 82,  120 => 77,  113 => 73,  105 => 70,  101 => 69,  97 => 68,  91 => 65,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style type=\"text/css\">
    .coupon {
        position: relative;

    }
    .qrcode{
        position: absolute;
        top: 300px;
        left: 50;
        width: 100%;
    }
    .img{
        position: absolute;
        top: 20px;
        left: 50;
        width: 100%;
    }
    .prix{
        position: absolute;
        top: 50px;
        left: 410;
        width: 100%;
        color: rgb(32, 64, 128);
        font: 15px Algerian, sans-serif;
    }
    .username {
        position: absolute;
        top: 50px;
        left: 650;
        width: 100%;
    }
    .ville {
        position: absolute;
        top: 60px;
        left: 650;
        width: 100%;
    }
    .adresse {
        position: absolute;
        top: 100px;
        left: 650;
        width: 100%;
    }
    .vendeur {
        position: absolute;
        top: 300px;
        left: 640;
        width: 100%;
    }
    .date {
        position: absolute;
        top: 220px;
        left: 700;
        width: 100%;
    }
    .logo {
        position: absolute;
        top: 395px;
        left: 400;
        width: 100%;
    }
</style>

<div class=\"coupon\">
    <img src=\"{{ asset('bundles/aasaas.png')}}\">
</div>
<div class=\"username\">
    <h3>{{ app.user.username}}</h3></div>
<div class=\"ville\">  <br /><h3>{{ app.user.pays}}</h3><br /></div>
<div class=\"adresse\">   <h3>{{ app.user.cp}} {{ app.user.ville}}</h3><br /></div>


<div class=\"date\"><h4>{{ modeles.datedeb|date(\"m/d/Y\") }}</h4></div>
<div class=\"prix\">


    <h1>{{ modeles.tauxreduction }} Dinar <br>de Reduction</h1>
</div>
<div class=\"vendeur\">


    <p>{{ modeles.utilisateur_id.username }} <br>
        {{ modeles.utilisateur_id.pays}} <br>{{ modeles.utilisateur_id.ville }}<br>
        {{ modeles.utilisateur_id.cp }} </p>
</div>
<div class=\"qrcode\">
    <img src=\"{{ qrcode_url('http://localhost:8080/eshop-master/web/app_dev.php/coupon/print/'~modeles.id, { size: 120 }) }}\" />

</div>
<div class=\"img\">

    <img src=\"{{ asset('bundles/images/')~ modeles.imageName }}\" style=\"width : 150px; height: 250px ;\" /></div>
<div class=\"logo\">
    <img src=\"{{ asset('bundles/Capture.PNG')}}\" style=\"width : 200px; height: 40px ;\" />
</div>
", "coupon/print.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\app\\Resources\\views\\coupon\\print.html.twig");
    }
}
