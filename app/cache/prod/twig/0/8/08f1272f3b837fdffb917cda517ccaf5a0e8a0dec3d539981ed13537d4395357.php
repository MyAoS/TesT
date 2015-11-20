<?php

/* PointWebFicheBundle::_nav.html.twig */
class __TwigTemplate_0383d479068e9312122b76a60fba7a43d4f42b0f10097c617de8a1f06578f2ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "

            ";
        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"wrapper\">

    <!-- Navigation -->
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("point_web_fiche_homepage");
        echo "\">SB Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class=\"nav navbar-right top-nav\">
        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-envelope\"></i> <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu message-dropdown\">
                <li class=\"message-preview\">
                    <a href=\"#\">
                        <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                            <div class=\"media-body\">
                                <h5 class=\"media-heading\"><strong>John Smith</strong>
                                </h5>
                                <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=\"message-preview\">
                    <a href=\"#\">
                        <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                            <div class=\"media-body\">
                                <h5 class=\"media-heading\"><strong>John Smith</strong>
                                </h5>
                                <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=\"message-preview\">
                    <a href=\"#\">
                        <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                            <div class=\"media-body\">
                                <h5 class=\"media-heading\"><strong>John Smith</strong>
                                </h5>
                                <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=\"message-footer\">
                    <a href=\"#\">Read All New Messages</a>
                </li>
            </ul>
        </li>
        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu alert-dropdown\">
                <li>
                    <a href=\"#\">Alert Name <span class=\"label label-default\">Alert Badge</span></a>
                </li>
                <li>
                    <a href=\"#\">Alert Name <span class=\"label label-primary\">Alert Badge</span></a>
                </li>
                <li>
                    <a href=\"#\">Alert Name <span class=\"label label-success\">Alert Badge</span></a>
                </li>
                <li>
                    <a href=\"#\">Alert Name <span class=\"label label-info\">Alert Badge</span></a>
                </li>
                <li>
                    <a href=\"#\">Alert Name <span class=\"label label-warning\">Alert Badge</span></a>
                </li>
                <li>
                    <a href=\"#\">Alert Name <span class=\"label label-danger\">Alert Badge</span></a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">View All</a>
                </li>
            </ul>
        </li>
        <li class=\"dropdown\">





            ";
        // line 107
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 108
            echo "            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "fullname", array()), "html", null, true);
            echo "<b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\">
                <li>
                    <a href=\"#\"><i class=\"fa fa-fw fa-user\"></i> Profile</a>
                </li>
                <li>
                    <a href=\"#\"><i class=\"fa fa-fw fa-envelope\"></i> Inbox</a>
                </li>
                <li>
                    <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Settings</a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"";
            // line 121
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                </li>
            </ul>
            ";
        } else {
            // line 125
            echo "                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\" id=\"connexion\" title=\"\">Connectez-vous</a>

            <ul class=\"dropdown-menu\">
                <li> <div id=\"block_connexion form-group\">

                        <form class=\"col-lg-12\" method=\"post\" name=\"login\" action=\"";
            // line 130
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" id=\"formLogin\">
                            <legend>";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</legend>
                            <input class=\"form-control\" type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 132
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\"/>

                            <label for=\"username\">";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
                            <input class=\"form-control\" type=\"text\" name=\"_username\" placeholder=\"Identifiant\"/>

                            <label for=\"password\">";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
                            <input class=\"form-control\" type=\"password\" name=\"_password\" placeholder=\"Mot de passe\"/>

                            <input class=\"btn btn-sm btn-success\" name=\"espace\" value=\"send\" type=\"hidden\" />
                            <input class=\"btn btn-sm btn-success\" type=\"submit\" name=\"_submit\" value=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "\" id=\"bt_connect\"/>

                        </form>
                    </div>
                </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-user\"></i> Profile</a>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-envelope\"></i> Inbox</a>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Settings</a>
                    </li>
                    <li class=\"divider\"></li>
                </ul>
                ";
        }
        // line 158
        echo "
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
        <ul class=\"nav navbar-nav side-nav\">
            <li class=\"active\">
                <a href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("point_web_app_homepage");
        echo "\"><i class=\"fa fa-fw fa-dashboard\"></i> Dashboard</a>
            </li>

                        ";
        // line 168
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 169
            echo "            <li>
                <a href=\"";
            // line 170
            echo $this->env->getExtension('routing')->getPath("admin_frais_new");
            echo "\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Ajouter une Fiche</a>
            </li>
                            <li>
                                <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#demo\"><i class=\"fa fa-fw fa-arrows-v\"></i> Gestion Utilisateur <i class=\"fa fa-fw fa-caret-down\"></i></a>
                                <ul id=\"demo\" class=\"collapse\">
                                    <li>
                                        <a href=\"";
            // line 176
            echo $this->env->getExtension('routing')->getPath("admin_frais");
            echo "\">Voir Fiches</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 179
            echo $this->env->getExtension('routing')->getPath("admin_frais_new");
            echo "\">Ajouter Fiche</a>
                                    </li>
                                </ul>
                            </li>
            <li>
                <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#demo1\"><i class=\"fa fa-fw fa-arrows-v\"></i> Gestion Comptable <i class=\"fa fa-fw fa-caret-down\"></i></a>
                <ul id=\"demo1\" class=\"collapse\">
                    <li>
                        <a href=\"#\">Nouvelles Fiches</a>
                    </li>
                    <li>
                        <a href=\"#\">Fiches en Attentes</a>
                    </li>
                    <li>
                        <a href=\"#\">Fiches Validées</a>
                    </li>
                </ul>
            </li>
                            <li>
                                <a href=\"";
            // line 198
            echo $this->env->getExtension('routing')->getPath("admin_frais");
            echo "\"><i class=\"fa fa-fw fa-dashboard\"></i> Fiche de Frais</a>
                            </li>
                            <li>
                                <a href=\"tables.html\"><i class=\"fa fa-fw fa-table\"></i> Table</a>
                            </li>
                            <li>
                                <a href=\"forms.html\"><i class=\"fa fa-fw fa-edit\"></i> Form</a>
                            </li>
                            <li>
                                <a href=\"bootstrap-elements.html\"><i class=\"fa fa-fw fa-desktop\"></i> bootstrap</a>
                            </li>
                            <li>
                <a href=\"blank-page.html\"><i class=\"fa fa-fw fa-file\"></i> Blank Page</a>
            </li>
            <li>
                <a href=\"index-rtl.html\"><i class=\"fa fa-fw fa-dashboard\"></i> RTL Dashboard</a>
            </li>
            ";
        }
        // line 216
        echo "        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
            ";
    }

    public function getTemplateName()
    {
        return "PointWebFicheBundle::_nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  294 => 216,  273 => 198,  251 => 179,  245 => 176,  236 => 170,  233 => 169,  231 => 168,  225 => 165,  216 => 158,  196 => 141,  189 => 137,  183 => 134,  178 => 132,  174 => 131,  170 => 130,  163 => 125,  156 => 121,  139 => 108,  137 => 107,  44 => 17,  30 => 5,  24 => 4,  20 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/*             {% block fos_user_content %}*/
/* <div id="wrapper">*/
/* */
/*     <!-- Navigation -->*/
/* <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*     <!-- Brand and toggle get grouped for better mobile display -->*/
/*     <div class="navbar-header">*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*         </button>*/
/*         <a class="navbar-brand" href="{{ path('point_web_fiche_homepage') }}">SB Admin</a>*/
/*     </div>*/
/*     <!-- Top Menu Items -->*/
/*     <ul class="nav navbar-right top-nav">*/
/*         <li class="dropdown">*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>*/
/*             <ul class="dropdown-menu message-dropdown">*/
/*                 <li class="message-preview">*/
/*                     <a href="#">*/
/*                         <div class="media">*/
/*                                     <span class="pull-left">*/
/*                                         <img class="media-object" src="http://placehold.it/50x50" alt="">*/
/*                                     </span>*/
/*                             <div class="media-body">*/
/*                                 <h5 class="media-heading"><strong>John Smith</strong>*/
/*                                 </h5>*/
/*                                 <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>*/
/*                                 <p>Lorem ipsum dolor sit amet, consectetur...</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="message-preview">*/
/*                     <a href="#">*/
/*                         <div class="media">*/
/*                                     <span class="pull-left">*/
/*                                         <img class="media-object" src="http://placehold.it/50x50" alt="">*/
/*                                     </span>*/
/*                             <div class="media-body">*/
/*                                 <h5 class="media-heading"><strong>John Smith</strong>*/
/*                                 </h5>*/
/*                                 <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>*/
/*                                 <p>Lorem ipsum dolor sit amet, consectetur...</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="message-preview">*/
/*                     <a href="#">*/
/*                         <div class="media">*/
/*                                     <span class="pull-left">*/
/*                                         <img class="media-object" src="http://placehold.it/50x50" alt="">*/
/*                                     </span>*/
/*                             <div class="media-body">*/
/*                                 <h5 class="media-heading"><strong>John Smith</strong>*/
/*                                 </h5>*/
/*                                 <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>*/
/*                                 <p>Lorem ipsum dolor sit amet, consectetur...</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="message-footer">*/
/*                     <a href="#">Read All New Messages</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/*         <li class="dropdown">*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>*/
/*             <ul class="dropdown-menu alert-dropdown">*/
/*                 <li>*/
/*                     <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>*/
/*                 </li>*/
/*                 <li class="divider"></li>*/
/*                 <li>*/
/*                     <a href="#">View All</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/*         <li class="dropdown">*/
/* */
/* */
/* */
/* */
/* */
/*             {% if app.user %}*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>{{ app.user.fullname }}<b class="caret"></b></a>*/
/*             <ul class="dropdown-menu">*/
/*                 <li>*/
/*                     <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>*/
/*                 </li>*/
/*                 <li class="divider"></li>*/
/*                 <li>*/
/*                     <a href="{{ path('fos_user_security_logout') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>*/
/*                 </li>*/
/*             </ul>*/
/*             {% else %}*/
/*                 <a data-toggle="dropdown" class="dropdown-toggle" href="#" id="connexion" title="">Connectez-vous</a>*/
/* */
/*             <ul class="dropdown-menu">*/
/*                 <li> <div id="block_connexion form-group">*/
/* */
/*                         <form class="col-lg-12" method="post" name="login" action="{{ path("fos_user_security_check") }}" id="formLogin">*/
/*                             <legend>{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</legend>*/
/*                             <input class="form-control" type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/* */
/*                             <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*                             <input class="form-control" type="text" name="_username" placeholder="Identifiant"/>*/
/* */
/*                             <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*                             <input class="form-control" type="password" name="_password" placeholder="Mot de passe"/>*/
/* */
/*                             <input class="btn btn-sm btn-success" name="espace" value="send" type="hidden" />*/
/*                             <input class="btn btn-sm btn-success" type="submit" name="_submit" value="{{ 'security.login.submit'|trans }}" id="bt_connect"/>*/
/* */
/*                         </form>*/
/*                     </div>*/
/*                 </li>*/
/*                     <li>*/
/*                         <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>*/
/*                     </li>*/
/*                     <li class="divider"></li>*/
/*                 </ul>*/
/*                 {% endif %}*/
/* */
/*         </li>*/
/*     </ul>*/
/*     <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->*/
/*     <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*         <ul class="nav navbar-nav side-nav">*/
/*             <li class="active">*/
/*                 <a href="{{ path('point_web_app_homepage') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>*/
/*             </li>*/
/* */
/*                         {% if app.user %}*/
/*             <li>*/
/*                 <a href="{{ path('admin_frais_new') }}"><i class="fa fa-fw fa-bar-chart-o"></i> Ajouter une Fiche</a>*/
/*             </li>*/
/*                             <li>*/
/*                                 <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Gestion Utilisateur <i class="fa fa-fw fa-caret-down"></i></a>*/
/*                                 <ul id="demo" class="collapse">*/
/*                                     <li>*/
/*                                         <a href="{{ path('admin_frais') }}">Voir Fiches</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('admin_frais_new') }}">Ajouter Fiche</a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*             <li>*/
/*                 <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i> Gestion Comptable <i class="fa fa-fw fa-caret-down"></i></a>*/
/*                 <ul id="demo1" class="collapse">*/
/*                     <li>*/
/*                         <a href="#">Nouvelles Fiches</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">Fiches en Attentes</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">Fiches Validées</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('admin_frais') }}"><i class="fa fa-fw fa-dashboard"></i> Fiche de Frais</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="tables.html"><i class="fa fa-fw fa-table"></i> Table</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Form</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> bootstrap</a>*/
/*                             </li>*/
/*                             <li>*/
/*                 <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>*/
/*             </li>*/
/*             {% endif %}*/
/*         </ul>*/
/*     </div>*/
/*     <!-- /.navbar-collapse -->*/
/* </nav>*/
/*             {% endblock fos_user_content %}*/
