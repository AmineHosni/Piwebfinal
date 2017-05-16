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
        $__internal_4b82c303ca8442a4f35ea5d9462b8dd93458d807cd27a56bf4e54dc0e48c986f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b82c303ca8442a4f35ea5d9462b8dd93458d807cd27a56bf4e54dc0e48c986f->enter($__internal_4b82c303ca8442a4f35ea5d9462b8dd93458d807cd27a56bf4e54dc0e48c986f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:eshop:main.html.twig"));

        $__internal_d3d7feec98ed36b0f96efae85d19c870a75b3b43fbb242258ca3cd47668271fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d7feec98ed36b0f96efae85d19c870a75b3b43fbb242258ca3cd47668271fe->enter($__internal_d3d7feec98ed36b0f96efae85d19c870a75b3b43fbb242258ca3cd47668271fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:eshop:main.html.twig"));

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

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->

    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/pace.min.js"), "html", null, true);
        echo "\"></script>
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
        // line 194
        $this->loadTemplate("MainBundle:eshop:header.html.twig", "MainBundle:eshop:main.html.twig", 194)->display($context);
        // line 195
        echo "</div>

<div class=\"container \">

                 ";
        // line 199
        $this->displayBlock('content', $context, $blocks);
        // line 200
        echo "

</div>

<!--main-container-->
";
        // line 205
        $this->loadTemplate("MainBundle:eshop:footer.html.twig", "MainBundle:eshop:main.html.twig", 205)->display($context);
        // line 206
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js\">
</script>
<script src=\"";
        // line 209
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
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/jquery.cycle2.min.js"), "html", null, true);
        echo "\"></script>

<!-- include easing plugin -->
<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>

<!-- include  parallax plugin -->
<script type=\"text/javascript\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/jquery.parallax-1.1.js"), "html", null, true);
        echo "\"></script>

<!-- optionally include helper plugins -->
<script type=\"text/javascript\" src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/helper-plugins/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>

<!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

<script type=\"text/javascript\" src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/jquery.mCustomScrollbar.js"), "html", null, true);
        echo "\"></script>

<!-- include icheck plugin // customized checkboxes and radio buttons   -->
<script type=\"text/javascript\" src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/plugins/icheck-1.x/icheck.min.js"), "html", null, true);
        echo "\"></script>

<!-- include grid.js // for equal Div height  -->
<script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/grids.js"), "html", null, true);
        echo "\"></script>

<!-- include carousel slider plugin  -->
<script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

<!-- jQuery select2 // custom select   -->
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js\"></script>

<!-- include touchspin.js // touch friendly input spinner component   -->
<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/bootstrap.touchspin.js"), "html", null, true);
        echo "\"></script>

<!-- include custom script for only homepage  -->
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/home.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/jquery-1.8.3.js"), "html", null, true);
        echo "\"></script>
<!-- include custom script for site  -->
<script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/assets/js/script.js"), "html", null, true);
        echo "\"></script>
<script>

</script>
";
        // line 259
        $this->displayBlock('javascripts', $context, $blocks);
        // line 260
        echo "
</body>

</html>";
        
        $__internal_4b82c303ca8442a4f35ea5d9462b8dd93458d807cd27a56bf4e54dc0e48c986f->leave($__internal_4b82c303ca8442a4f35ea5d9462b8dd93458d807cd27a56bf4e54dc0e48c986f_prof);

        
        $__internal_d3d7feec98ed36b0f96efae85d19c870a75b3b43fbb242258ca3cd47668271fe->leave($__internal_d3d7feec98ed36b0f96efae85d19c870a75b3b43fbb242258ca3cd47668271fe_prof);

    }

    // line 199
    public function block_content($context, array $blocks = array())
    {
        $__internal_2f59998dd47b72e195961016ab30c6ea71cc80f61eed2dac2e1fbb1a9cfde7f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f59998dd47b72e195961016ab30c6ea71cc80f61eed2dac2e1fbb1a9cfde7f9->enter($__internal_2f59998dd47b72e195961016ab30c6ea71cc80f61eed2dac2e1fbb1a9cfde7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f4e5bb99feae0c061fc97c707709704317b2cec5c63f6e81390546e1098da5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e5bb99feae0c061fc97c707709704317b2cec5c63f6e81390546e1098da5d8->enter($__internal_f4e5bb99feae0c061fc97c707709704317b2cec5c63f6e81390546e1098da5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f4e5bb99feae0c061fc97c707709704317b2cec5c63f6e81390546e1098da5d8->leave($__internal_f4e5bb99feae0c061fc97c707709704317b2cec5c63f6e81390546e1098da5d8_prof);

        
        $__internal_2f59998dd47b72e195961016ab30c6ea71cc80f61eed2dac2e1fbb1a9cfde7f9->leave($__internal_2f59998dd47b72e195961016ab30c6ea71cc80f61eed2dac2e1fbb1a9cfde7f9_prof);

    }

    // line 259
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eccea7385069bef0e7d9633ff2e28f773c745c9e254cb57a360de508a504f8ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eccea7385069bef0e7d9633ff2e28f773c745c9e254cb57a360de508a504f8ad->enter($__internal_eccea7385069bef0e7d9633ff2e28f773c745c9e254cb57a360de508a504f8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_280d2152c1e17f1afa702c683fc4aa2b6b56e9d46f67589d936ac307241dc66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280d2152c1e17f1afa702c683fc4aa2b6b56e9d46f67589d936ac307241dc66f->enter($__internal_280d2152c1e17f1afa702c683fc4aa2b6b56e9d46f67589d936ac307241dc66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_280d2152c1e17f1afa702c683fc4aa2b6b56e9d46f67589d936ac307241dc66f->leave($__internal_280d2152c1e17f1afa702c683fc4aa2b6b56e9d46f67589d936ac307241dc66f_prof);

        
        $__internal_eccea7385069bef0e7d9633ff2e28f773c745c9e254cb57a360de508a504f8ad->leave($__internal_eccea7385069bef0e7d9633ff2e28f773c745c9e254cb57a360de508a504f8ad_prof);

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
        return array (  385 => 259,  368 => 199,  355 => 260,  353 => 259,  346 => 255,  341 => 253,  337 => 252,  331 => 249,  322 => 243,  316 => 240,  310 => 237,  304 => 234,  297 => 230,  291 => 227,  285 => 224,  279 => 221,  264 => 209,  259 => 206,  257 => 205,  250 => 200,  248 => 199,  242 => 195,  240 => 194,  118 => 75,  99 => 59,  56 => 19,  52 => 18,  47 => 16,  42 => 14,  27 => 1,);
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

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->

    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src=\"{{asset('bundles/assets/js/pace.min.js')}}\"></script>
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
<script>

</script>
{% block javascripts %}{% endblock %}

</body>

</html>", "MainBundle:eshop:main.html.twig", "C:\\wamp64\\www\\weeeb\\src\\MainBundle/Resources/views/eshop/main.html.twig");
    }
}
