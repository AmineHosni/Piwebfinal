<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_482c3633d327b0f2cfa52b0dfeab2362a2c7ce9dccf8336e34a0602436a189ee extends Twig_Template
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
        $__internal_844561e8966da8883a5ee5fe6a5c995415d672d3275e8f5de4aad09479b108e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_844561e8966da8883a5ee5fe6a5c995415d672d3275e8f5de4aad09479b108e1->enter($__internal_844561e8966da8883a5ee5fe6a5c995415d672d3275e8f5de4aad09479b108e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_f9a6d81a6d96f685fff3747ce8669ef81c1600cdaea17b8bd8cf981b45089b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a6d81a6d96f685fff3747ce8669ef81c1600cdaea17b8bd8cf981b45089b27->enter($__internal_f9a6d81a6d96f685fff3747ce8669ef81c1600cdaea17b8bd8cf981b45089b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 1
        echo "<br><br>


<div class=\"container main-container\">

<div class=\"container bootstrap snippet\">
    <div class=\"row\">
        <div class=\"main-content\">
            <!-- NAV TABS -->
            <ul class=\"nav nav-tabs nav-tabs-custom-colored tabs-iconized\">
                <li class=\"active\"><a href=\"#profile-tab\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-user\"></i> Profile</a></li>
                <li class=\"\"><a href=\"#activity-tab\" data-toggle=\"tab\" aria-expanded=\"false\"><i class=\"fa fa-rss\"></i> Recent Activity</a></li>
                <li class=\"\"><a href=\"#settings-tab\" data-toggle=\"tab\" aria-expanded=\"false\"><i class=\"fa fa-gear\"></i> Settings</a></li>
            </ul>
            <!-- END NAV TABS -->
            <div class=\"tab-content profile-page\">
                <!-- PROFILE TAB CONTENT -->
                <div class=\"tab-pane profile active\" id=\"profile-tab\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <div class=\"user-info-left\">

                                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/images/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "imageName", array())), "html", null, true);
        echo "\"  alt=\"Profile Picture\"  style=\"height: 350px\" width=\"300px\">
                                <h2>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " <i class=\"fa fa-circle green-font online-icon\"></i><sup class=\"sr-only\">online</sup></h2>
                                <div class=\"contact\">
                                    <a href=\"#\" class=\"btn btn-block btn-danger\"><i class=\"fa fa-envelope-o\"></i> Send Message</a>
                                    <a href=\"#\" class=\"btn btn-block btn-success\"><i class=\"fa fa-book\"></i> Add To Contact</a>
                                    <ul class=\"list-inline social\">
                                        <li><a href=\"#\" title=\"Facebook\"><i class=\"fa fa-facebook-square\"></i></a></li>
                                        <li><a href=\"#\" title=\"Twitter\"><i class=\"fa fa-twitter-square\"></i></a></li>
                                        <li><a href=\"#\" title=\"Google Plus\"><i class=\"fa fa-google-plus-square\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-9\">
                            <div class=\"user-info-right\">
                                <div class=\"basic-info\">
                                    <h3><i class=\"fa fa-square\"></i> Basic Information</h3>
                                    <p class=\"data-row\">
                                        <span class=\"data-name\">Username</span>
                                        <span class=\"data-value\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</span>
                                    </p>
                                    <p class=\"data-row\">
                                        <span class=\"data-name\">Birth Date</span>
                                        <span class=\"data-value\">";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "datenaissance", array()), "Y-m-d "), "html", null, true);
        echo "</span>
                                        <span class=\"data-value\">";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "datenaissance", array()), "Y-m-d recent"), "html", null, true);
        echo "</span>
                                    </p>
                                    <p class=\"data-row\">
                                        <span class=\"data-name\">Gender</span>
                                        <span class=\"data-value\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "sexe", array()), "html", null, true);
        echo "</span>
                                    </p>

                                    <p class=\"data-row\">
                                        <span class=\"data-name\">Last Login</span>
                                        <span class=\"data-value\">";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastlogin", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>
                                    </p>

                                </div>
                                <div class=\"contact_info\">
                                    <h3><i class=\"fa fa-square\"></i> Contact Information</h3>
                                    <p class=\"data-row\">
                                        <span class=\"data-name\">Email</span>
                                        <span class=\"data-value\">";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</span>
                                    </p>
                                    <p class=\"data-row\">
                                        <span class=\"data-name\">Phone</span>
                                        <span class=\"data-value\">(1800) 221 - 876543</span>
                                    </p>
                                    <p class=\"data-row\">
                                        <span class=\"data-name\">Address</span>
                                        <span class=\"data-value\">Riverside City 66, 80123 Denver<br>Colorado</span>
                                    </p>
                                </div>
                                <div class=\"about\">
                                    <h3><i class=\"fa fa-square\"></i> About Me</h3>
                                    <p>Dramatically facilitate proactive solutions whereas professional intellectual capital. Holisticly utilize competitive e-markets through intermandated meta-services. Objectively.</p>
                                    <p>Monotonectally foster future-proof infomediaries before principle-centered interfaces. Assertively recaptiualize cutting-edge web services rather than emerging \"outside the box\" thinking. Phosfluorescently cultivate resource maximizing technologies and user-centric convergence. Completely underwhelm cross functional innovation vis-a-vis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PROFILE TAB CONTENT -->

                <!-- ACTIVITY TAB CONTENT -->
                <div class=\"tab-pane activity\" id=\"activity-tab\">




                    containner

                </div>
                <!-- END ACTIVITY TAB CONTENT -->

                <!-- SETTINGS TAB CONTENT -->
                <div class=\"tab-pane settings\" id=\"settings-tab\">
                    <form class=\"form-horizontal\" role=\"form\">
                        <fieldset>
                            <h3><i class=\"fa fa-square\"></i> Change Password</h3>
                            <div class=\"form-group\">
                                <label for=\"old-password\" class=\"col-sm-3 control-label\">Old Password</label>
                                <div class=\"col-sm-4\">
                                    <input type=\"password\" id=\"old-password\" name=\"old-password\" class=\"form-control\">
                                </div>
                            </div>
                            <hr>
                            <div class=\"form-group\">
                                <label for=\"password\" class=\"col-sm-3 control-label\">New Password</label>
                                <div class=\"col-sm-4\">
                                    <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password2\" class=\"col-sm-3 control-label\">Repeat Password</label>
                                <div class=\"col-sm-4\">
                                    <input type=\"password\" id=\"password2\" name=\"password2\" class=\"form-control\">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <h3><i class=\"fa fa-square\"></i> Privacy</h3>
                            <label class=\"fancy-checkbox\">
                                <input type=\"checkbox\">
                                <span>Show my display name</span>
                            </label>
                            <label class=\"fancy-checkbox\">
                                <input type=\"checkbox\">
                                <span>Show my birth date</span>
                            </label>
                            <label class=\"fancy-checkbox\">
                                <input type=\"checkbox\">
                                <span>Show my email</span>
                            </label>
                            <label class=\"fancy-checkbox\">
                                <input type=\"checkbox\">
                                <span>Show my online status on chat</span>
                            </label>
                        </fieldset>
                        <h3><i class=\"fa fa-square\"> </i>Notifications</h3>
                        <fieldset>
                            <div class=\"form-group\">
                                <label class=\"col-sm-5 control-label\">Receive message from administrator</label>
                                <ul class=\"col-sm-7 list-inline\">
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-on\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-globe\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-globe\"></i></span><input type=\"checkbox\" checked=\"\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-globe'></i>\" data-off-label=\"<i class='glyphicon glyphicon-globe'></i>\"></div></div>
                                    </li>
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-on\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-phone\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-phone\"></i></span><input type=\"checkbox\" checked=\"\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-phone'></i>\" data-off-label=\"<i class='glyphicon glyphicon-phone'></i>\"></div></div>
                                    </li>
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-on\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-envelope\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-envelope\"></i></span><input type=\"checkbox\" checked=\"\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-envelope'></i>\" data-off-label=\"<i class='glyphicon glyphicon-envelope'></i>\"></div></div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-5 control-label\">New product has been added</label>
                                <ul class=\"col-sm-7 list-inline\">
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-off\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-globe\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-globe\"></i></span><input type=\"checkbox\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-globe'></i>\" data-off-label=\"<i class='glyphicon glyphicon-globe'></i>\"></div></div>
                                    </li>
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-on\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-phone\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-phone\"></i></span><input type=\"checkbox\" checked=\"\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-phone'></i>\" data-off-label=\"<i class='glyphicon glyphicon-phone'></i>\"></div></div>
                                    </li>
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-on\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-envelope\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-envelope\"></i></span><input type=\"checkbox\" checked=\"\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-envelope'></i>\" data-off-label=\"<i class='glyphicon glyphicon-envelope'></i>\"></div></div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-5 control-label\">Product review has been approved</label>
                                <ul class=\"col-sm-7 list-inline\">
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-on\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-globe\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-globe\"></i></span><input type=\"checkbox\" checked=\"\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-globe'></i>\" data-off-label=\"<i class='glyphicon glyphicon-globe'></i>\"></div></div>
                                    </li>
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-off\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-phone\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-phone\"></i></span><input type=\"checkbox\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-phone'></i>\" data-off-label=\"<i class='glyphicon glyphicon-phone'></i>\"></div></div>
                                    </li>
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-on\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-envelope\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-envelope\"></i></span><input type=\"checkbox\" checked=\"\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-envelope'></i>\" data-off-label=\"<i class='glyphicon glyphicon-envelope'></i>\"></div></div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-5 control-label\">Others liked your post</label>
                                <ul class=\"col-sm-7 list-inline\">
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-off\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-globe\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-globe\"></i></span><input type=\"checkbox\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-globe'></i>\" data-off-label=\"<i class='glyphicon glyphicon-globe'></i>\"></div></div>
                                    </li>
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-off\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-phone\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-phone\"></i></span><input type=\"checkbox\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-phone'></i>\" data-off-label=\"<i class='glyphicon glyphicon-phone'></i>\"></div></div>
                                    </li>
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-off\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-envelope\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-envelope\"></i></span><input type=\"checkbox\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-envelope'></i>\" data-off-label=\"<i class='glyphicon glyphicon-envelope'></i>\"></div></div>
                                    </li>
                                </ul>
                            </div>
                        </fieldset>
                    </form>
                    <p class=\"text-center\"><a href=\"#\" class=\"btn btn-custom-primary\"><i class=\"fa fa-floppy-o\"></i> Save Changes</a></p>
                </div>
                <!-- END SETTINGS TAB CONTENT -->
            </div>
        </div>



    </div>
</div></div>

";
        
        $__internal_844561e8966da8883a5ee5fe6a5c995415d672d3275e8f5de4aad09479b108e1->leave($__internal_844561e8966da8883a5ee5fe6a5c995415d672d3275e8f5de4aad09479b108e1_prof);

        
        $__internal_f9a6d81a6d96f685fff3747ce8669ef81c1600cdaea17b8bd8cf981b45089b27->leave($__internal_f9a6d81a6d96f685fff3747ce8669ef81c1600cdaea17b8bd8cf981b45089b27_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 64,  100 => 56,  92 => 51,  85 => 47,  81 => 46,  74 => 42,  53 => 24,  49 => 23,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<br><br>


<div class=\"container main-container\">

<div class=\"container bootstrap snippet\">
    <div class=\"row\">
        <div class=\"main-content\">
            <!-- NAV TABS -->
            <ul class=\"nav nav-tabs nav-tabs-custom-colored tabs-iconized\">
                <li class=\"active\"><a href=\"#profile-tab\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-user\"></i> Profile</a></li>
                <li class=\"\"><a href=\"#activity-tab\" data-toggle=\"tab\" aria-expanded=\"false\"><i class=\"fa fa-rss\"></i> Recent Activity</a></li>
                <li class=\"\"><a href=\"#settings-tab\" data-toggle=\"tab\" aria-expanded=\"false\"><i class=\"fa fa-gear\"></i> Settings</a></li>
            </ul>
            <!-- END NAV TABS -->
            <div class=\"tab-content profile-page\">
                <!-- PROFILE TAB CONTENT -->
                <div class=\"tab-pane profile active\" id=\"profile-tab\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <div class=\"user-info-left\">

                                <img src=\"{{ asset('bundles/images/')~ app.user.imageName}}\"  alt=\"Profile Picture\"  style=\"height: 350px\" width=\"300px\">
                                <h2>{{app.user.nom}} <i class=\"fa fa-circle green-font online-icon\"></i><sup class=\"sr-only\">online</sup></h2>
                                <div class=\"contact\">
                                    <a href=\"#\" class=\"btn btn-block btn-danger\"><i class=\"fa fa-envelope-o\"></i> Send Message</a>
                                    <a href=\"#\" class=\"btn btn-block btn-success\"><i class=\"fa fa-book\"></i> Add To Contact</a>
                                    <ul class=\"list-inline social\">
                                        <li><a href=\"#\" title=\"Facebook\"><i class=\"fa fa-facebook-square\"></i></a></li>
                                        <li><a href=\"#\" title=\"Twitter\"><i class=\"fa fa-twitter-square\"></i></a></li>
                                        <li><a href=\"#\" title=\"Google Plus\"><i class=\"fa fa-google-plus-square\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-9\">
                            <div class=\"user-info-right\">
                                <div class=\"basic-info\">
                                    <h3><i class=\"fa fa-square\"></i> Basic Information</h3>
                                    <p class=\"data-row\">
                                        <span class=\"data-name\">Username</span>
                                        <span class=\"data-value\">{{app.user.nom}}</span>
                                    </p>
                                    <p class=\"data-row\">
                                        <span class=\"data-name\">Birth Date</span>
                                        <span class=\"data-value\">{{app.user.datenaissance|date('Y-m-d ') }}</span>
                                        <span class=\"data-value\">{{app.user.datenaissance|date('Y-m-d recent') }}</span>
                                    </p>
                                    <p class=\"data-row\">
                                        <span class=\"data-name\">Gender</span>
                                        <span class=\"data-value\">{{app.user.sexe}}</span>
                                    </p>

                                    <p class=\"data-row\">
                                        <span class=\"data-name\">Last Login</span>
                                        <span class=\"data-value\">{{app.user.lastlogin|date('Y-m-d H:i:s') }}</span>
                                    </p>

                                </div>
                                <div class=\"contact_info\">
                                    <h3><i class=\"fa fa-square\"></i> Contact Information</h3>
                                    <p class=\"data-row\">
                                        <span class=\"data-name\">Email</span>
                                        <span class=\"data-value\">{{app.user.email}}</span>
                                    </p>
                                    <p class=\"data-row\">
                                        <span class=\"data-name\">Phone</span>
                                        <span class=\"data-value\">(1800) 221 - 876543</span>
                                    </p>
                                    <p class=\"data-row\">
                                        <span class=\"data-name\">Address</span>
                                        <span class=\"data-value\">Riverside City 66, 80123 Denver<br>Colorado</span>
                                    </p>
                                </div>
                                <div class=\"about\">
                                    <h3><i class=\"fa fa-square\"></i> About Me</h3>
                                    <p>Dramatically facilitate proactive solutions whereas professional intellectual capital. Holisticly utilize competitive e-markets through intermandated meta-services. Objectively.</p>
                                    <p>Monotonectally foster future-proof infomediaries before principle-centered interfaces. Assertively recaptiualize cutting-edge web services rather than emerging \"outside the box\" thinking. Phosfluorescently cultivate resource maximizing technologies and user-centric convergence. Completely underwhelm cross functional innovation vis-a-vis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PROFILE TAB CONTENT -->

                <!-- ACTIVITY TAB CONTENT -->
                <div class=\"tab-pane activity\" id=\"activity-tab\">




                    containner

                </div>
                <!-- END ACTIVITY TAB CONTENT -->

                <!-- SETTINGS TAB CONTENT -->
                <div class=\"tab-pane settings\" id=\"settings-tab\">
                    <form class=\"form-horizontal\" role=\"form\">
                        <fieldset>
                            <h3><i class=\"fa fa-square\"></i> Change Password</h3>
                            <div class=\"form-group\">
                                <label for=\"old-password\" class=\"col-sm-3 control-label\">Old Password</label>
                                <div class=\"col-sm-4\">
                                    <input type=\"password\" id=\"old-password\" name=\"old-password\" class=\"form-control\">
                                </div>
                            </div>
                            <hr>
                            <div class=\"form-group\">
                                <label for=\"password\" class=\"col-sm-3 control-label\">New Password</label>
                                <div class=\"col-sm-4\">
                                    <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password2\" class=\"col-sm-3 control-label\">Repeat Password</label>
                                <div class=\"col-sm-4\">
                                    <input type=\"password\" id=\"password2\" name=\"password2\" class=\"form-control\">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <h3><i class=\"fa fa-square\"></i> Privacy</h3>
                            <label class=\"fancy-checkbox\">
                                <input type=\"checkbox\">
                                <span>Show my display name</span>
                            </label>
                            <label class=\"fancy-checkbox\">
                                <input type=\"checkbox\">
                                <span>Show my birth date</span>
                            </label>
                            <label class=\"fancy-checkbox\">
                                <input type=\"checkbox\">
                                <span>Show my email</span>
                            </label>
                            <label class=\"fancy-checkbox\">
                                <input type=\"checkbox\">
                                <span>Show my online status on chat</span>
                            </label>
                        </fieldset>
                        <h3><i class=\"fa fa-square\"> </i>Notifications</h3>
                        <fieldset>
                            <div class=\"form-group\">
                                <label class=\"col-sm-5 control-label\">Receive message from administrator</label>
                                <ul class=\"col-sm-7 list-inline\">
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-on\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-globe\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-globe\"></i></span><input type=\"checkbox\" checked=\"\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-globe'></i>\" data-off-label=\"<i class='glyphicon glyphicon-globe'></i>\"></div></div>
                                    </li>
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-on\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-phone\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-phone\"></i></span><input type=\"checkbox\" checked=\"\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-phone'></i>\" data-off-label=\"<i class='glyphicon glyphicon-phone'></i>\"></div></div>
                                    </li>
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-on\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-envelope\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-envelope\"></i></span><input type=\"checkbox\" checked=\"\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-envelope'></i>\" data-off-label=\"<i class='glyphicon glyphicon-envelope'></i>\"></div></div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-5 control-label\">New product has been added</label>
                                <ul class=\"col-sm-7 list-inline\">
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-off\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-globe\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-globe\"></i></span><input type=\"checkbox\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-globe'></i>\" data-off-label=\"<i class='glyphicon glyphicon-globe'></i>\"></div></div>
                                    </li>
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-on\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-phone\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-phone\"></i></span><input type=\"checkbox\" checked=\"\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-phone'></i>\" data-off-label=\"<i class='glyphicon glyphicon-phone'></i>\"></div></div>
                                    </li>
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-on\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-envelope\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-envelope\"></i></span><input type=\"checkbox\" checked=\"\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-envelope'></i>\" data-off-label=\"<i class='glyphicon glyphicon-envelope'></i>\"></div></div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-5 control-label\">Product review has been approved</label>
                                <ul class=\"col-sm-7 list-inline\">
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-on\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-globe\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-globe\"></i></span><input type=\"checkbox\" checked=\"\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-globe'></i>\" data-off-label=\"<i class='glyphicon glyphicon-globe'></i>\"></div></div>
                                    </li>
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-off\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-phone\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-phone\"></i></span><input type=\"checkbox\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-phone'></i>\" data-off-label=\"<i class='glyphicon glyphicon-phone'></i>\"></div></div>
                                    </li>
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-on\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-envelope\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-envelope\"></i></span><input type=\"checkbox\" checked=\"\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-envelope'></i>\" data-off-label=\"<i class='glyphicon glyphicon-envelope'></i>\"></div></div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-5 control-label\">Others liked your post</label>
                                <ul class=\"col-sm-7 list-inline\">
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-off\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-globe\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-globe\"></i></span><input type=\"checkbox\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-globe'></i>\" data-off-label=\"<i class='glyphicon glyphicon-globe'></i>\"></div></div>
                                    </li>
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-off\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-phone\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-phone\"></i></span><input type=\"checkbox\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-phone'></i>\" data-off-label=\"<i class='glyphicon glyphicon-phone'></i>\"></div></div>
                                    </li>
                                    <li>
                                        <div class=\"has-switch switch-animate switch-small switch-off\" tabindex=\"0\"><div><span class=\"switch-left\"><i class=\"glyphicon glyphicon-envelope\"></i></span><label>&nbsp;</label><span class=\"switch-right switch-default\"><i class=\"glyphicon glyphicon-envelope\"></i></span><input type=\"checkbox\" class=\"bs-switch switch-small\" data-off=\"default\" data-on-label=\"<i class='glyphicon glyphicon-envelope'></i>\" data-off-label=\"<i class='glyphicon glyphicon-envelope'></i>\"></div></div>
                                    </li>
                                </ul>
                            </div>
                        </fieldset>
                    </form>
                    <p class=\"text-center\"><a href=\"#\" class=\"btn btn-custom-primary\"><i class=\"fa fa-floppy-o\"></i> Save Changes</a></p>
                </div>
                <!-- END SETTINGS TAB CONTENT -->
            </div>
        </div>



    </div>
</div></div>

", "@FOSUser/Profile/show_content.html.twig", "C:\\wamp64\\www\\test\\src\\MainBundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
