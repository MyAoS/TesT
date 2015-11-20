<?php

/* PointWebCalendarBundle:Default:index.html.twig */
class __TwigTemplate_be4604c60c9c8faeb1a13758ba68a8f881b06155e80db8e0238c0da447d2c690 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebCalendarBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Calendrier ";
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo "</h1>
    <div class=\"btn-group-left\">
        <div class=\"btn-group\">
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("point_web_calendar_admin", array("year" => (isset($context["lastYear"]) ? $context["lastYear"] : $this->getContext($context, "lastYear")))), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i
                        class=\"fa fa-arrow-left\"></i> Année precedent</a>
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("point_web_calendar_admin", array("year" => (isset($context["nextYear"]) ? $context["nextYear"] : $this->getContext($context, "nextYear")))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Année
                suivant <i class=\"fa fa-arrow-right\"></i></a>
        </div>
    </div>
    <div class=\"btn-group-left filter-calendar\">
        <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("point_web_calendar_admin", array("year" => (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")))), "html", null, true);
        echo "\" method=\"post\">
            <select id=\"user_select\" name=\"id_user\" class=\"form-control\">
                <option value=\"\" ";
        // line 16
        if (((isset($context["selected_user"]) ? $context["selected_user"] : $this->getContext($context, "selected_user")) == 0)) {
            echo "selected=\"selected\"";
        }
        echo ">Sélectionnez un utilisateur
                </option>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\"
                            ";
            // line 20
            if (((isset($context["selected_user"]) ? $context["selected_user"] : $this->getContext($context, "selected_user")) == $this->getAttribute($context["user"], "id", array()))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "fullname", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </select>
            <button type=\"submit\" id=\"filter_calendar\" name=\"filter\" class=\"btn btn-success\">Filtrer<div class=\"ripple-wrapper\"></div></button>
        </form>
    </div>
    <div class=\"btn-group-right\">
        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("admin_calendarevent_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i>
            Ajouter</a>
    </div>
    ";
        // line 30
        echo (isset($context["calendar"]) ? $context["calendar"] : $this->getContext($context, "calendar"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "PointWebCalendarBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  91 => 27,  84 => 22,  72 => 20,  67 => 19,  63 => 18,  56 => 16,  51 => 14,  43 => 9,  38 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Calendrier {{ year }}</h1>*/
/*     <div class="btn-group-left">*/
/*         <div class="btn-group">*/
/*             <a href="{{ path('point_web_calendar_admin', {'year':lastYear}) }}" class="btn btn-primary"><i*/
/*                         class="fa fa-arrow-left"></i> Année precedent</a>*/
/*             <a href="{{ path('point_web_calendar_admin', {'year':nextYear}) }}" class="btn btn-primary">Année*/
/*                 suivant <i class="fa fa-arrow-right"></i></a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="btn-group-left filter-calendar">*/
/*         <form action="{{ path('point_web_calendar_admin', {'year':year}) }}" method="post">*/
/*             <select id="user_select" name="id_user" class="form-control">*/
/*                 <option value="" {% if selected_user == 0 %}selected="selected"{% endif %}>Sélectionnez un utilisateur*/
/*                 </option>*/
/*                 {% for user in users %}*/
/*                     <option value="{{ user.id }}"*/
/*                             {% if selected_user == user.id %}selected="selected"{% endif %}>{{ user.fullname }}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*             <button type="submit" id="filter_calendar" name="filter" class="btn btn-success">Filtrer<div class="ripple-wrapper"></div></button>*/
/*         </form>*/
/*     </div>*/
/*     <div class="btn-group-right">*/
/*         <a href="{{ path('admin_calendarevent_new') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i>*/
/*             Ajouter</a>*/
/*     </div>*/
/*     {{ calendar|raw }}*/
/* {% endblock %}*/
