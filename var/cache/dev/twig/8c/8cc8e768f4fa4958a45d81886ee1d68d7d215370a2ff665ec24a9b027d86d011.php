<?php

/* MainBundle:eshop:main.html.twig */
class __TwigTemplate_811faea3fabe7ea2a595173cf3035e0435dee0ac44a64eb7a74775fc2fc77ecf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eef5f8ea7ca614c170fb904f2b5d9421b235d4394a66da4a65f0c23df9d80da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef5f8ea7ca614c170fb904f2b5d9421b235d4394a66da4a65f0c23df9d80da3->enter($__internal_eef5f8ea7ca614c170fb904f2b5d9421b235d4394a66da4a65f0c23df9d80da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:eshop:main.html.twig"));

        $__internal_05ba1772c37bba674dbedda4e72acea242ba51470bfce8fb8d410f54f91c34dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ba1772c37bba674dbedda4e72acea242ba51470bfce8fb8d410f54f91c34dc->enter($__internal_05ba1772c37bba674dbedda4e72acea242ba51470bfce8fb8d410f54f91c34dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:eshop:main.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"assets/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"assets/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"assets/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"ico/apple-touch-icon-57-precomposed.png\">
    <link rel=\"shortcut icon\" href=\"assets/ico/favicon.png\">
    <title>TSHOP - Bootstrap E-Commerce Parallax Theme</title>
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ckeditor.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/bootstrap/css/add.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style>.colorgraph {
            height: 5px;
            border-top: 0;
            background: #c4e17f;
            border-radius: 5px;
            background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        }

        .timer-container {
            margin-top: 100px;
        }

        .counter-title h2 {
            background: #45DBE3;
            color: #fff;
            font-size: 28px;
            font-weight: 600;
            margin: 0;
            padding: 10px;
        }

        .clock-container {
            background: #fff;
            border: 1px solid #45DBE3;
            color: #45DBE3;
            font-size: 60px;
            font-weight: 600;
            padding: 20px;
            min-height: 130px;
        }

        .clock {
            float: left;
        }</style>

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/css/skin-1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->


</head>
<body>


<!-- Modal Login start
<div class=\"modal signUpContent fade\" id=\"ModalLogin\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog \">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"> &times; </button>
                <h3 class=\"modal-title-site text-center\"> Login to TSHOP </h3>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group login-username\">
                    <div>
                        <input name=\"log\" id=\"login-user\" class=\"form-control input\" size=\"20\"
                               placeholder=\"Enter Username\" type=\"text\">
                    </div>
                </div>
                <div class=\"form-group login-password\">
                    <div>
                        <input name=\"Password\" id=\"login-password\" class=\"form-control input\" size=\"20\"
                               placeholder=\"Password\" type=\"password\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div>
                        <div class=\"checkbox login-remember\">
                            <label>
                                <input name=\"rememberme\" value=\"forever\" checked=\"checked\" type=\"checkbox\">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <input name=\"submit\" class=\"btn  btn-block btn-lg btn-primary\" value=\"LOGIN\" type=\"submit\">
                    </div>
                </div>
                userForm

            </div>
            <div class=\"modal-footer\">
                <p class=\"text-center\"> Not here before? <a data-toggle=\"modal\" data-dismiss=\"modal\"
                                                            href=\"#ModalSignup\"> Sign Up. </a> <br>
                    <a href=\"forgot-password.html\"> Lost your password? </a></p>
            </div>
        </div>
        /.modal-content

    </div>
    /.modal-dialog

</div>
/.Modal Login -->

<!-- Modal Signup start
<div class=\"modal signUpContent fade\" id=\"ModalSignup\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"> &times; </button>
                <h3 class=\"modal-title-site text-center\"> REGISTER </h3>
            </div>
            <div class=\"modal-body\">
                <div class=\"control-group\"><a class=\"fb_button btn  btn-block btn-lg \" href=\"#\"> SIGNUP WITH
                    FACEBOOK </a></div>
                <h5 style=\"padding:10px 0 10px 0;\" class=\"text-center\"> OR </h5>

                <div class=\"form-group reg-username\">
                    <div>
                        <input name=\"login\" class=\"form-control input\" size=\"20\" placeholder=\"Enter Username\"
                               type=\"text\">
                    </div>
                </div>
                <div class=\"form-group reg-email\">
                    <div>
                        <input name=\"reg\" class=\"form-control input\" size=\"20\" placeholder=\"Enter Email\" type=\"text\">
                    </div>
                </div>
                <div class=\"form-group reg-password\">
                    <div>
                        <input name=\"password\" class=\"form-control input\" size=\"20\" placeholder=\"Password\"
                               type=\"password\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div>
                        <div class=\"checkbox login-remember\">
                            <label>
                                <input name=\"rememberme\" id=\"rememberme\" value=\"forever\" checked=\"checked\"
                                       type=\"checkbox\">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <input name=\"submit\" class=\"btn  btn-block btn-lg btn-primary\" value=\"REGISTER\" type=\"submit\">
                    </div>
                </div>


            </div>
            <div class=\"modal-footer\">
                <p class=\"text-center\"> Already member? <a data-toggle=\"modal\" data-dismiss=\"modal\" href=\"#ModalLogin\">
                    Sign in </a></p>
            </div>
        </div>


    </div>


</div>
<!-- /.ModalSignup End -->

<!-- Fixed navbar start -->
<div>";
        // line 190
        $this->loadTemplate("MainBundle:eshop:header.html.twig", "MainBundle:eshop:main.html.twig", 190)->display($context);
        // line 191
        echo "</div>

<div class=\"container \">

                 ";
        // line 195
        $this->displayBlock('content', $context, $blocks);
        // line 196
        echo "

</div>

<!--main-container-->
";
        // line 201
        $this->loadTemplate("MainBundle:eshop:footer.html.twig", "MainBundle:eshop:main.html.twig", 201)->display($context);
        // line 202
        $this->displayBlock('javascripts', $context, $blocks);
        // line 258
        echo "
</body>

</html>";
        
        $__internal_eef5f8ea7ca614c170fb904f2b5d9421b235d4394a66da4a65f0c23df9d80da3->leave($__internal_eef5f8ea7ca614c170fb904f2b5d9421b235d4394a66da4a65f0c23df9d80da3_prof);

        
        $__internal_05ba1772c37bba674dbedda4e72acea242ba51470bfce8fb8d410f54f91c34dc->leave($__internal_05ba1772c37bba674dbedda4e72acea242ba51470bfce8fb8d410f54f91c34dc_prof);

    }

    // line 195
    public function block_content($context, array $blocks = array())
    {
        $__internal_d0e2b04a93f7a8ad1e4b7f4c801d0d042054ab09c9409556afce17af42aa3e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e2b04a93f7a8ad1e4b7f4c801d0d042054ab09c9409556afce17af42aa3e85->enter($__internal_d0e2b04a93f7a8ad1e4b7f4c801d0d042054ab09c9409556afce17af42aa3e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1fb3995ec75041c89d3184372b7892f970201e9560aa04ae4e33cc9605072415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb3995ec75041c89d3184372b7892f970201e9560aa04ae4e33cc9605072415->enter($__internal_1fb3995ec75041c89d3184372b7892f970201e9560aa04ae4e33cc9605072415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1fb3995ec75041c89d3184372b7892f970201e9560aa04ae4e33cc9605072415->leave($__internal_1fb3995ec75041c89d3184372b7892f970201e9560aa04ae4e33cc9605072415_prof);

        
        $__internal_d0e2b04a93f7a8ad1e4b7f4c801d0d042054ab09c9409556afce17af42aa3e85->leave($__internal_d0e2b04a93f7a8ad1e4b7f4c801d0d042054ab09c9409556afce17af42aa3e85_prof);

    }

    // line 202
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1f1dc32cd0b3bf63ff9485e2d596df63826951f24176b7732693a358bfcc2ecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f1dc32cd0b3bf63ff9485e2d596df63826951f24176b7732693a358bfcc2ecb->enter($__internal_1f1dc32cd0b3bf63ff9485e2d596df63826951f24176b7732693a358bfcc2ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5a72806b089724858b47689cae20cf7e8e1dcf27ad8d316fa76f909eb28aec14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a72806b089724858b47689cae20cf7e8e1dcf27ad8d316fa76f909eb28aec14->enter($__internal_5a72806b089724858b47689cae20cf7e8e1dcf27ad8d316fa76f909eb28aec14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 203
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js\">
</script>
<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script>
    // this script required for subscribe modal
    \$(window).load(function () {
        // full load
        \$('#modalAds').modal('show');
        \$('#modalAds').removeClass('hide');
    });

</script>

<!-- include jqueryCycle plugin -->
<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/jquery.cycle2.min.js"), "html", null, true);
        echo "\"></script>

<!-- include easing plugin -->
<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>

<!-- include  parallax plugin -->
<script type=\"text/javascript\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/jquery.parallax-1.1.js"), "html", null, true);
        echo "\"></script>

<!-- optionally include helper plugins -->
<script type=\"text/javascript\" src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/helper-plugins/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>

<!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

<script type=\"text/javascript\" src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/jquery.mCustomScrollbar.js"), "html", null, true);
        echo "\"></script>

<!-- include icheck plugin // customized checkboxes and radio buttons   -->
<script type=\"text/javascript\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/plugins/icheck-1.x/icheck.min.js"), "html", null, true);
        echo "\"></script>

<!-- include grid.js // for equal Div height  -->
<script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/grids.js"), "html", null, true);
        echo "\"></script>

<!-- include carousel slider plugin  -->
<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

<!-- jQuery select2 // custom select   -->
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js\"></script>

<!-- include touchspin.js // touch friendly input spinner component   -->
<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/bootstrap.touchspin.js"), "html", null, true);
        echo "\"></script>

<!-- include custom script for only homepage  -->
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/home.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/jquery-1.8.3.js"), "html", null, true);
        echo "\"></script>
<!-- include custom script for site  -->
<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/script.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/pace.min.js"), "html", null, true);
        echo "\"></script>

<script>

</script>
";
        
        $__internal_5a72806b089724858b47689cae20cf7e8e1dcf27ad8d316fa76f909eb28aec14->leave($__internal_5a72806b089724858b47689cae20cf7e8e1dcf27ad8d316fa76f909eb28aec14_prof);

        
        $__internal_1f1dc32cd0b3bf63ff9485e2d596df63826951f24176b7732693a358bfcc2ecb->leave($__internal_1f1dc32cd0b3bf63ff9485e2d596df63826951f24176b7732693a358bfcc2ecb_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:eshop:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 252,  382 => 251,  377 => 249,  373 => 248,  367 => 245,  358 => 239,  352 => 236,  346 => 233,  340 => 230,  333 => 226,  327 => 223,  321 => 220,  315 => 217,  300 => 205,  296 => 203,  287 => 202,  270 => 195,  257 => 258,  255 => 202,  253 => 201,  246 => 196,  244 => 195,  238 => 191,  236 => 190,  104 => 61,  99 => 59,  56 => 19,  52 => 18,  47 => 16,  42 => 14,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"assets/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"assets/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"assets/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"ico/apple-touch-icon-57-precomposed.png\">
    <link rel=\"shortcut icon\" href=\"assets/ico/favicon.png\">
    <title>TSHOP - Bootstrap E-Commerce Parallax Theme</title>
    <!-- Bootstrap core CSS -->
    <link href=\"{{asset('bundles/ckeditor.css')}}\" rel=\"stylesheet\">

    <link href=\"{{asset('bundles/eshop/assets/bootstrap/css/bootstrap.css')}}\" rel=\"stylesheet\">

    <link href=\"{{asset('bundles/eshop/assets/bootstrap/css/bootstrap.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('bundles/eshop/assets/bootstrap/css/add.css')}}\" rel=\"stylesheet\">
    <style>.colorgraph {
            height: 5px;
            border-top: 0;
            background: #c4e17f;
            border-radius: 5px;
            background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        }

        .timer-container {
            margin-top: 100px;
        }

        .counter-title h2 {
            background: #45DBE3;
            color: #fff;
            font-size: 28px;
            font-weight: 600;
            margin: 0;
            padding: 10px;
        }

        .clock-container {
            background: #fff;
            border: 1px solid #45DBE3;
            color: #45DBE3;
            font-size: 60px;
            font-weight: 600;
            padding: 20px;
            min-height: 130px;
        }

        .clock {
            float: left;
        }</style>

    <!-- Custom styles for this template -->
    <link href=\"{{asset('bundles/eshop/assets/css/style.css')}}\" rel=\"stylesheet\">

    <link href=\"{{asset('bundles/eshop/assets/css/skin-1.css')}}\" rel=\"stylesheet\">


    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->


</head>
<body>


<!-- Modal Login start
<div class=\"modal signUpContent fade\" id=\"ModalLogin\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog \">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"> &times; </button>
                <h3 class=\"modal-title-site text-center\"> Login to TSHOP </h3>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group login-username\">
                    <div>
                        <input name=\"log\" id=\"login-user\" class=\"form-control input\" size=\"20\"
                               placeholder=\"Enter Username\" type=\"text\">
                    </div>
                </div>
                <div class=\"form-group login-password\">
                    <div>
                        <input name=\"Password\" id=\"login-password\" class=\"form-control input\" size=\"20\"
                               placeholder=\"Password\" type=\"password\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div>
                        <div class=\"checkbox login-remember\">
                            <label>
                                <input name=\"rememberme\" value=\"forever\" checked=\"checked\" type=\"checkbox\">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <input name=\"submit\" class=\"btn  btn-block btn-lg btn-primary\" value=\"LOGIN\" type=\"submit\">
                    </div>
                </div>
                userForm

            </div>
            <div class=\"modal-footer\">
                <p class=\"text-center\"> Not here before? <a data-toggle=\"modal\" data-dismiss=\"modal\"
                                                            href=\"#ModalSignup\"> Sign Up. </a> <br>
                    <a href=\"forgot-password.html\"> Lost your password? </a></p>
            </div>
        </div>
        /.modal-content

    </div>
    /.modal-dialog

</div>
/.Modal Login -->

<!-- Modal Signup start
<div class=\"modal signUpContent fade\" id=\"ModalSignup\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"> &times; </button>
                <h3 class=\"modal-title-site text-center\"> REGISTER </h3>
            </div>
            <div class=\"modal-body\">
                <div class=\"control-group\"><a class=\"fb_button btn  btn-block btn-lg \" href=\"#\"> SIGNUP WITH
                    FACEBOOK </a></div>
                <h5 style=\"padding:10px 0 10px 0;\" class=\"text-center\"> OR </h5>

                <div class=\"form-group reg-username\">
                    <div>
                        <input name=\"login\" class=\"form-control input\" size=\"20\" placeholder=\"Enter Username\"
                               type=\"text\">
                    </div>
                </div>
                <div class=\"form-group reg-email\">
                    <div>
                        <input name=\"reg\" class=\"form-control input\" size=\"20\" placeholder=\"Enter Email\" type=\"text\">
                    </div>
                </div>
                <div class=\"form-group reg-password\">
                    <div>
                        <input name=\"password\" class=\"form-control input\" size=\"20\" placeholder=\"Password\"
                               type=\"password\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div>
                        <div class=\"checkbox login-remember\">
                            <label>
                                <input name=\"rememberme\" id=\"rememberme\" value=\"forever\" checked=\"checked\"
                                       type=\"checkbox\">
                                Remember Me </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <input name=\"submit\" class=\"btn  btn-block btn-lg btn-primary\" value=\"REGISTER\" type=\"submit\">
                    </div>
                </div>


            </div>
            <div class=\"modal-footer\">
                <p class=\"text-center\"> Already member? <a data-toggle=\"modal\" data-dismiss=\"modal\" href=\"#ModalLogin\">
                    Sign in </a></p>
            </div>
        </div>


    </div>


</div>
<!-- /.ModalSignup End -->

<!-- Fixed navbar start -->
<div>{% include 'MainBundle:eshop:header.html.twig' %}
</div>

<div class=\"container \">

                 {% block content %}{% endblock %}


</div>

<!--main-container-->
{% include 'MainBundle:eshop:footer.html.twig' %}
{% block javascripts %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js\">
</script>
<script src=\"{{asset('bundles/eshop/assets/bootstrap/js/bootstrap.min.js')}}\"></script>
<script>
    // this script required for subscribe modal
    \$(window).load(function () {
        // full load
        \$('#modalAds').modal('show');
        \$('#modalAds').removeClass('hide');
    });

</script>

<!-- include jqueryCycle plugin -->
<script src=\"{{asset('bundles/eshop/assets/js/jquery.cycle2.min.js')}}\"></script>

<!-- include easing plugin -->
<script src=\"{{asset('bundles/eshop/assets/js/jquery.easing.1.3.js')}}\"></script>

<!-- include  parallax plugin -->
<script type=\"text/javascript\" src=\"{{asset('bundles/eshop/assets/js/jquery.parallax-1.1.js')}}\"></script>

<!-- optionally include helper plugins -->
<script type=\"text/javascript\" src=\"{{asset('bundles/eshop/assets/js/helper-plugins/jquery.mousewheel.min.js')}}\"></script>

<!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

<script type=\"text/javascript\" src=\"{{asset('bundles/eshop/assets/js/jquery.mCustomScrollbar.js')}}\"></script>

<!-- include icheck plugin // customized checkboxes and radio buttons   -->
<script type=\"text/javascript\" src=\"{{asset('bundles/eshop/assets/plugins/icheck-1.x/icheck.min.js')}}\"></script>

<!-- include grid.js // for equal Div height  -->
<script src=\"{{asset('bundles/eshop/assets/js/grids.js')}}\"></script>

<!-- include carousel slider plugin  -->
<script src=\"{{asset('bundles/eshop/assets/js/owl.carousel.min.js')}}\"></script>

<!-- jQuery select2 // custom select   -->
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js\"></script>

<!-- include touchspin.js // touch friendly input spinner component   -->
<script src=\"{{asset('bundles/eshop/assets/js/bootstrap.touchspin.js')}}\"></script>

<!-- include custom script for only homepage  -->
<script src=\"{{asset('bundles/eshop/assets/js/home.js')}}\"></script>
<script src=\"{{asset('bundles/eshop/assets/js/jquery-1.8.3.js')}}\"></script>
<!-- include custom script for site  -->
<script src=\"{{asset('bundles/eshop/assets/js/script.js')}}\"></script>
<script src=\"{{asset('bundles/assets/js/pace.min.js')}}\"></script>

<script>

</script>
{% endblock %}

</body>

</html>", "MainBundle:eshop:main.html.twig", "C:\\wamp64\\www\\test\\src\\MainBundle/Resources/views/eshop/main.html.twig");
    }
}
