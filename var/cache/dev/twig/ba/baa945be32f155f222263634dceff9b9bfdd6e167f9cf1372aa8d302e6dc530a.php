<?php

/* ::base1.html.twig */
class __TwigTemplate_8d8f17a3a15ad9ac63c0c3754cdd1f2c9d182ebd52e1bf567ae12414cabaf4df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35c38a6efe7239e0d81c88eb1df1727814737e1bed597dab5099de70eabd0266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c38a6efe7239e0d81c88eb1df1727814737e1bed597dab5099de70eabd0266->enter($__internal_35c38a6efe7239e0d81c88eb1df1727814737e1bed597dab5099de70eabd0266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

        $__internal_3f3fa5ace2e78daa39410518b7a556d71c6d113fde76086d06a963b1fc387e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3fa5ace2e78daa39410518b7a556d71c6d113fde76086d06a963b1fc387e0e->enter($__internal_3f3fa5ace2e78daa39410518b7a556d71c6d113fde76086d06a963b1fc387e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.6 -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/plugins/morris/morris.css"), "html", null, true);
        echo "\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}\"></script>
    <![endif]-->
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

    <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_homepage");
        echo "\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>E</b>shop</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>Admin</b>Eshop</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>

            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class=\"dropdown messages-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"label label-success\">4</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li><!-- start message -->
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                AdminLTE Design Team
                                                <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/dist/img/user4-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Developers
                                                <small><i class=\"fa fa-clock-o\"></i> Today</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Sales Department
                                                <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/dist/img/user4-128x128.jpg"), "html", null, true);
        echo "\"class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Reviewers
                                                <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class=\"dropdown notifications-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"label label-warning\">10</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the
                                            page and may cause design problems
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-red\"></i> 5 new members joined
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-user text-red\"></i> You changed your username
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class=\"dropdown tasks-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-flag-o\"></i>
                            <span class=\"label label-danger\">9</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Design some buttons
                                                <small class=\"pull-right\">20%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Create a nice theme
                                                <small class=\"pull-right\">40%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Some task I need to do
                                                <small class=\"pull-right\">60%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Make beautiful transitions
                                                <small class=\"pull-right\">80%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class=\"footer\">
                                <a href=\"#\">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"";
        // line 257
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "imageName", array())), "html", null, true);
        echo "\" class=\"user-image\"  alt=\"User Image\">
                            <span class=\"hidden-xs\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- User image -->
                            <li class=\"user-header\">

                                <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "imageName", array())), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    ";
        // line 267
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class=\"user-body\">
                                <div class=\"row\">
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Followers</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Sales</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"";
        // line 292
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-flat\">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            <!-- Sidebar user panel -->
            <div class=\"user-panel\">
                <div class=\"pull-left image\">

                    <img src=\"";
        // line 311
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "imageName", array())), "html", null, true);
        echo "\" height=\"80px\" width=\"80px\"  alt=\"User Image\">
                </div>
                <div class=\"pull-left info\">
                    <p>";
        // line 314
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</p>
                </div>
            </div>
            <!-- search form -->
            <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                    <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
                </div>
            </form>
            <ul class=\"sidebar-menu\">
                <li class=\"header\">MAIN NAVIGATION</li>
                <li class=\"active treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>

                </li>

                <li>
                    <a href=\"";
        // line 340
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aff_autoriser_coupon");
        echo "\">
                        <i class=\"fa fa-sticky-note-o\"></i> <span>Autorisation Coupon</span>
                    </a>
                </li>

                <li>
                    <a href=\"";
        // line 346
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
        echo "\">
                        <i class=\"fa fa-th\"></i> <span> gestion categories</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 351
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users");
        echo "\">
                        <i class=\"fa fa-users\"></i> <span> gestion des membres </span>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 356
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_autoriser_produit");
        echo "\">
                        <i class=\"fa fa-check-circle-o\"></i> <span>Autorisation produits</span>
                    </a>
                </li>


            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    ";
        // line 366
        $this->displayBlock('body', $context, $blocks);
        // line 367
        echo "

    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 2.3.11
        </div>
        <strong>Copyright &copy; 2014-2016 <a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Morris.js charts -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
<script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
<!-- Sparkline -->
<script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
<!-- jvectormap -->
<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery Knob Chart -->
<script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
<!-- daterangepicker -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>
<script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!-- datepicker -->
<script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
<!-- Slimscroll -->
<script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
<!-- FastClick -->
<script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
";
        // line 423
        $this->displayBlock('javascripts', $context, $blocks);
        // line 424
        echo "</body>
</html>
";
        
        $__internal_35c38a6efe7239e0d81c88eb1df1727814737e1bed597dab5099de70eabd0266->leave($__internal_35c38a6efe7239e0d81c88eb1df1727814737e1bed597dab5099de70eabd0266_prof);

        
        $__internal_3f3fa5ace2e78daa39410518b7a556d71c6d113fde76086d06a963b1fc387e0e->leave($__internal_3f3fa5ace2e78daa39410518b7a556d71c6d113fde76086d06a963b1fc387e0e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9908bc4f6c1a7433aa3c63185626e587a47fe94f2b751ab2ac0145315392a110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9908bc4f6c1a7433aa3c63185626e587a47fe94f2b751ab2ac0145315392a110->enter($__internal_9908bc4f6c1a7433aa3c63185626e587a47fe94f2b751ab2ac0145315392a110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f8a21aa3aae7d66d83d26385e9991357e97ffea9651f22ba498e0fc9b837cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8a21aa3aae7d66d83d26385e9991357e97ffea9651f22ba498e0fc9b837cc2->enter($__internal_7f8a21aa3aae7d66d83d26385e9991357e97ffea9651f22ba498e0fc9b837cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7f8a21aa3aae7d66d83d26385e9991357e97ffea9651f22ba498e0fc9b837cc2->leave($__internal_7f8a21aa3aae7d66d83d26385e9991357e97ffea9651f22ba498e0fc9b837cc2_prof);

        
        $__internal_9908bc4f6c1a7433aa3c63185626e587a47fe94f2b751ab2ac0145315392a110->leave($__internal_9908bc4f6c1a7433aa3c63185626e587a47fe94f2b751ab2ac0145315392a110_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6daf7135a85b453fc5a634ea796f1792990268a2860adb2dbaa505d5f62b7fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6daf7135a85b453fc5a634ea796f1792990268a2860adb2dbaa505d5f62b7fe7->enter($__internal_6daf7135a85b453fc5a634ea796f1792990268a2860adb2dbaa505d5f62b7fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1d152fe07a0b0efff922a29cac72ba0fae8df1fde19e26819c1efbca7bacecfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d152fe07a0b0efff922a29cac72ba0fae8df1fde19e26819c1efbca7bacecfa->enter($__internal_1d152fe07a0b0efff922a29cac72ba0fae8df1fde19e26819c1efbca7bacecfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1d152fe07a0b0efff922a29cac72ba0fae8df1fde19e26819c1efbca7bacecfa->leave($__internal_1d152fe07a0b0efff922a29cac72ba0fae8df1fde19e26819c1efbca7bacecfa_prof);

        
        $__internal_6daf7135a85b453fc5a634ea796f1792990268a2860adb2dbaa505d5f62b7fe7->leave($__internal_6daf7135a85b453fc5a634ea796f1792990268a2860adb2dbaa505d5f62b7fe7_prof);

    }

    // line 366
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9e4dd872ff8e7039b3da0b27087aa4ee06765e42ec8f0d361945485bdf0d1fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9e4dd872ff8e7039b3da0b27087aa4ee06765e42ec8f0d361945485bdf0d1fa->enter($__internal_c9e4dd872ff8e7039b3da0b27087aa4ee06765e42ec8f0d361945485bdf0d1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a8975383f9d4b928aa65a2b506ff7293189a2ff64fe49db567d97b23d9c7275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8975383f9d4b928aa65a2b506ff7293189a2ff64fe49db567d97b23d9c7275->enter($__internal_5a8975383f9d4b928aa65a2b506ff7293189a2ff64fe49db567d97b23d9c7275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5a8975383f9d4b928aa65a2b506ff7293189a2ff64fe49db567d97b23d9c7275->leave($__internal_5a8975383f9d4b928aa65a2b506ff7293189a2ff64fe49db567d97b23d9c7275_prof);

        
        $__internal_c9e4dd872ff8e7039b3da0b27087aa4ee06765e42ec8f0d361945485bdf0d1fa->leave($__internal_c9e4dd872ff8e7039b3da0b27087aa4ee06765e42ec8f0d361945485bdf0d1fa_prof);

    }

    // line 423
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cb03ca53a836b499900bb24deae8701e706fb140163c847209c0b6fd91fe33f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb03ca53a836b499900bb24deae8701e706fb140163c847209c0b6fd91fe33f0->enter($__internal_cb03ca53a836b499900bb24deae8701e706fb140163c847209c0b6fd91fe33f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_898a8475b1467bc610af6faa8ab92f8eb79d1da1c2e6fc35387d1f4b7184930b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898a8475b1467bc610af6faa8ab92f8eb79d1da1c2e6fc35387d1f4b7184930b->enter($__internal_898a8475b1467bc610af6faa8ab92f8eb79d1da1c2e6fc35387d1f4b7184930b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_898a8475b1467bc610af6faa8ab92f8eb79d1da1c2e6fc35387d1f4b7184930b->leave($__internal_898a8475b1467bc610af6faa8ab92f8eb79d1da1c2e6fc35387d1f4b7184930b_prof);

        
        $__internal_cb03ca53a836b499900bb24deae8701e706fb140163c847209c0b6fd91fe33f0->leave($__internal_cb03ca53a836b499900bb24deae8701e706fb140163c847209c0b6fd91fe33f0_prof);

    }

    public function getTemplateName()
    {
        return "::base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  648 => 423,  631 => 366,  614 => 7,  596 => 6,  584 => 424,  582 => 423,  578 => 422,  573 => 420,  568 => 418,  563 => 416,  558 => 414,  553 => 412,  548 => 410,  543 => 408,  537 => 405,  532 => 403,  528 => 402,  523 => 400,  518 => 398,  512 => 395,  501 => 387,  479 => 367,  477 => 366,  464 => 356,  456 => 351,  448 => 346,  439 => 340,  410 => 314,  404 => 311,  382 => 292,  354 => 267,  348 => 264,  338 => 257,  202 => 124,  187 => 112,  172 => 100,  157 => 88,  141 => 75,  109 => 46,  92 => 32,  87 => 30,  82 => 28,  77 => 26,  72 => 24,  67 => 22,  62 => 20,  56 => 17,  47 => 11,  42 => 8,  40 => 7,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.6 -->
    <link rel=\"stylesheet\" href=\"{{asset('bundles/admin/bootstrap/css/bootstrap.min.css')}}\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{asset('bundles/admin/dist/css/AdminLTE.min.css')}}\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"{{asset('bundles/admin/dist/css/skins/_all-skins.min.css')}}\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"{{asset('bundles/admin/plugins/iCheck/flat/blue.css')}}\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"{{asset('bundles/admin/plugins/morris/morris.css')}}\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"{{asset('bundles/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"{{asset('bundles/admin/plugins/datepicker/datepicker3.css')}}\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"{{asset('bundles/admin/plugins/daterangepicker/daterangepicker.css')}}\">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel=\"stylesheet\" href=\"{{asset('bundles/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}\"></script>
    <![endif]-->
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

    <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"{{path('main_homepage')}}\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>E</b>shop</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>Admin</b>Eshop</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>

            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class=\"dropdown messages-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"label label-success\">4</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li><!-- start message -->
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"{{asset('bundles/admin/dist/img/user2-160x160.jpg')}}\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"{{asset('bundles/admin/dist/img/user3-128x128.jpg')}}\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                AdminLTE Design Team
                                                <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"{{asset('bundles/admin/dist/img/user4-128x128.jpg')}}\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Developers
                                                <small><i class=\"fa fa-clock-o\"></i> Today</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"{{asset('bundles/admin/dist/img/user3-128x128.jpg')}}\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Sales Department
                                                <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"{{asset('bundles/admin/dist/img/user4-128x128.jpg')}}\"class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Reviewers
                                                <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class=\"dropdown notifications-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"label label-warning\">10</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the
                                            page and may cause design problems
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-red\"></i> 5 new members joined
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-user text-red\"></i> You changed your username
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class=\"dropdown tasks-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-flag-o\"></i>
                            <span class=\"label label-danger\">9</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Design some buttons
                                                <small class=\"pull-right\">20%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Create a nice theme
                                                <small class=\"pull-right\">40%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Some task I need to do
                                                <small class=\"pull-right\">60%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Make beautiful transitions
                                                <small class=\"pull-right\">80%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class=\"footer\">
                                <a href=\"#\">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"{{ asset('bundles/images/')~ app.user.imageName}}\" class=\"user-image\"  alt=\"User Image\">
                            <span class=\"hidden-xs\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- User image -->
                            <li class=\"user-header\">

                                <img src=\"{{ asset('bundles/images/')~ app.user.imageName}}\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    {{ app.user.username}}
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class=\"user-body\">
                                <div class=\"row\">
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Followers</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Sales</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"{{path('fos_user_security_logout')}}\" class=\"btn btn-default btn-flat\">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            <!-- Sidebar user panel -->
            <div class=\"user-panel\">
                <div class=\"pull-left image\">

                    <img src=\"{{ asset('bundles/images/')~ app.user.imageName}}\" height=\"80px\" width=\"80px\"  alt=\"User Image\">
                </div>
                <div class=\"pull-left info\">
                    <p>{{ app.user.username}}</p>
                </div>
            </div>
            <!-- search form -->
            <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                    <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
                </div>
            </form>
            <ul class=\"sidebar-menu\">
                <li class=\"header\">MAIN NAVIGATION</li>
                <li class=\"active treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>

                </li>

                <li>
                    <a href=\"{{path('aff_autoriser_coupon')}}\">
                        <i class=\"fa fa-sticky-note-o\"></i> <span>Autorisation Coupon</span>
                    </a>
                </li>

                <li>
                    <a href=\"{{path('categorie_index')}}\">
                        <i class=\"fa fa-th\"></i> <span> gestion categories</span>
                    </a>
                </li>
                <li>
                    <a href=\"{{path('admin_users')}}\">
                        <i class=\"fa fa-users\"></i> <span> gestion des membres </span>
                    </a>
                </li>
                <li>
                    <a href=\"{{path('admin_autoriser_produit')}}\">
                        <i class=\"fa fa-check-circle-o\"></i> <span>Autorisation produits</span>
                    </a>
                </li>


            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    {% block body %}{% endblock %}


    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 2.3.11
        </div>
        <strong>Copyright &copy; 2014-2016 <a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src=\"{{asset('bundles/admin/plugins/jQuery/jquery-2.2.3.min.js')}}\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src=\"{{asset('bundles/admin/bootstrap/js/bootstrap.min.js')}}\"></script>
<!-- Morris.js charts -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
<script src=\"{{asset('bundles/admin/plugins/morris/morris.min.js')}}\"></script>
<!-- Sparkline -->
<script src=\"{{asset('bundles/admin/plugins/sparkline/jquery.sparkline.min.js')}}\"></script>
<!-- jvectormap -->
<script src=\"{{asset('bundles/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}\"></script>
<script src=\"{{asset('bundles/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}\"></script>
<!-- jQuery Knob Chart -->
<script src=\"{{asset('bundles/admin/plugins/knob/jquery.knob.js')}}\"></script>
<!-- daterangepicker -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>
<script src=\"{{asset('bundles/admin/plugins/daterangepicker/daterangepicker.js')}}\"></script>
<!-- datepicker -->
<script src=\"{{asset('bundles/admin/plugins/datepicker/bootstrap-datepicker.js')}}\"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=\"{{asset('bundles/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}\"></script>
<!-- Slimscroll -->
<script src=\"{{asset('bundles/admin/plugins/slimScroll/jquery.slimscroll.min.js')}}\"></script>
<!-- FastClick -->
<script src=\"{{asset('bundles/admin/plugins/fastclick/fastclick.js')}}\"></script>
<!-- AdminLTE App -->
<script src=\"{{asset('bundles/admin/dist/js/app.min.js')}}\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"{{asset('bundles/admin/dist/js/pages/dashboard.js')}}\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"{{asset('bundles/admin/dist/js/demo.js')}}\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "::base1.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\app/Resources\\views/base1.html.twig");
    }
}
