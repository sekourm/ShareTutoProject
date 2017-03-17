<?php

/* :Tutorial:tutorial_by_categ_user_view.html.twig */
class __TwigTemplate_1431812286a43e6fef206c45f9e6dc468ae1b9fcc0ef4100cd856a1e9ac327b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Tutorial:tutorial_by_categ_user_view.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95ba63fceb48a8a72f4ad200aa9d247b4555e3c33838647ac187476ecaefd618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ba63fceb48a8a72f4ad200aa9d247b4555e3c33838647ac187476ecaefd618->enter($__internal_95ba63fceb48a8a72f4ad200aa9d247b4555e3c33838647ac187476ecaefd618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Tutorial:tutorial_by_categ_user_view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95ba63fceb48a8a72f4ad200aa9d247b4555e3c33838647ac187476ecaefd618->leave($__internal_95ba63fceb48a8a72f4ad200aa9d247b4555e3c33838647ac187476ecaefd618_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_afc80121e3a9fd4582d1820a32c500e73a917fd6f120d011cb6113da7fcf78bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc80121e3a9fd4582d1820a32c500e73a917fd6f120d011cb6113da7fcf78bb->enter($__internal_afc80121e3a9fd4582d1820a32c500e73a917fd6f120d011cb6113da7fcf78bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-xs-12 col-md-12\">
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <h1 class=\"page-header\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/arrow.png"), "html", null, true);
        echo "\" alt=\"arrow\"
                                                 class=\"arrow_header\"/> Mes Tutoriels ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["categorie_active"] ?? $this->getContext($context, "categorie_active")), "getNameSca", array()), "html", null, true);
        echo " <span
                                class=\"nbr_tuto\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</span></h1>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12 sidebar\">
                    <ul class=\"nav nav-sidebar text-center\">
                        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["all_c"]) {
            // line 14
            echo "                            ";
            if (($this->getAttribute($context["all_c"], "getId", array()) == $this->getAttribute(($context["categorie_active"] ?? $this->getContext($context, "categorie_active")), "getId", array()))) {
                // line 15
                echo "                                <li class=\"active\"><a
                                            href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_view_tutorial_by_categ_user_site", array("categ_id" => $this->getAttribute($context["all_c"], "getId", array()))), "html", null, true);
                echo "\"><img
                                                src=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getLogoSca", array()), "html", null, true);
                echo "\"
                                                alt=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getNameSca", array()), "html", null, true);
                echo "\"
                                                class=\"logo_categories\">Mes tutoriels ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getNameSca", array()), "html", null, true);
                echo "
                                    </a></li>
                            ";
            } else {
                // line 22
                echo "                                <li>
                                    <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_view_tutorial_by_categ_user_site", array("categ_id" => $this->getAttribute($context["all_c"], "getId", array()))), "html", null, true);
                echo "\"><img
                                                src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getLogoSca", array()), "html", null, true);
                echo "\"
                                                alt=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getNameSca", array()), "html", null, true);
                echo "\"
                                                class=\"logo_categories\">Mes tutoriels ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getNameSca", array()), "html", null, true);
                echo "
                                    </a></li>
                            ";
            }
            // line 29
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['all_c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </ul>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <div class=\"row placeholders margin_card\">
                        ";
        // line 34
        if (($context["pagination"] ?? $this->getContext($context, "pagination"))) {
            // line 35
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["tuto_n"]) {
                // line 36
                echo "                                ";
                if (($this->getAttribute($context["tuto_n"], "getActiveStu", array()) == 1)) {
                    // line 37
                    echo "                                    <div class=\"cards\">
                                        <div class=\"image\">
                                            <img src=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tuto_n"], "getTutosCategories", array()), "getLogoSca", array()), "html", null, true);
                    echo "\"
                                                 alt=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tuto_n"], "getTutosCategories", array()), "getNameSca", array()), "html", null, true);
                    echo "\"/>
                                            <a href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_view_tuto_site", array("tuto_id" => $this->getAttribute($context["tuto_n"], "getId", array()))), "html", null, true);
                    echo "\"
                                               class=\"tutoriel\">Voir le
                                                tutoriel</a>
                                            <a href=\"/tuto/delete/";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tuto_n"], "getId", array(), "method"), "html", null, true);
                    echo "\" class=\"tutoriel\">
                                                <div class=\"btn_trash\">
                                                    <img src=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/trash.png"), "html", null, true);
                    echo "\" alt=\"trash\"/>
                                                </div>
                                            </a>
                                            <a href=\"#\" class=\"tutoriel\">
                                                <div class=\"btn_update\">
                                                    <img src=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/update.png"), "html", null, true);
                    echo "\" alt=\"update\"/>
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"button_cards_dispear\">
                                            <h3>";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tuto_n"], "getTitleStu", array()), "html", null, true);
                    echo "</h3>
                                            <p>";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tuto_n"], "getDescriptionStu", array()), "html", null, true);
                    echo "</p>
                                            <div class=\"name\"><img src=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users.png"), "html", null, true);
                    echo "\" alt=\"users\"
                                                                   class=\"users_tuto\"/> ";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tuto_n"], "getTutosUsers", array()), "GetUsernameSha", array()), "html", null, true);
                    echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
                }
                // line 64
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tuto_n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                        ";
        } else {
            // line 66
            echo "                            <div class=\"nothing_tuto\">
                                Aucune tutoriel dans cette catégorie, <a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_create_tutorial_site");
            echo "\">
                                    Créer un tutoriel maintenant ? </a>
                            </div>
                        ";
        }
        // line 71
        echo "                    </div>
                </div>
            </div>
            <div class=\"col-sm-12 col-xs-12 col-md-12 text-center pagination\">
                <hr/>
                ";
        // line 76
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>
    </div>
    </div>
";
        
        $__internal_afc80121e3a9fd4582d1820a32c500e73a917fd6f120d011cb6113da7fcf78bb->leave($__internal_afc80121e3a9fd4582d1820a32c500e73a917fd6f120d011cb6113da7fcf78bb_prof);

    }

    public function getTemplateName()
    {
        return ":Tutorial:tutorial_by_categ_user_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 76,  210 => 71,  203 => 67,  200 => 66,  197 => 65,  191 => 64,  183 => 59,  179 => 58,  175 => 57,  171 => 56,  163 => 51,  155 => 46,  150 => 44,  144 => 41,  140 => 40,  136 => 39,  132 => 37,  129 => 36,  124 => 35,  122 => 34,  116 => 30,  110 => 29,  104 => 26,  100 => 25,  96 => 24,  92 => 23,  89 => 22,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  68 => 15,  65 => 14,  61 => 13,  54 => 9,  50 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-xs-12 col-md-12\">
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <h1 class=\"page-header\"><img src=\"{{ asset('img/arrow.png') }}\" alt=\"arrow\"
                                                 class=\"arrow_header\"/> Mes Tutoriels {{ categorie_active.getNameSca }} <span
                                class=\"nbr_tuto\">{{ pagination.getTotalItemCount }}</span></h1>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12 sidebar\">
                    <ul class=\"nav nav-sidebar text-center\">
                        {% for all_c in categories %}
                            {% if all_c.getId == categorie_active.getId %}
                                <li class=\"active\"><a
                                            href=\"{{ path('app_view_tutorial_by_categ_user_site', { categ_id: all_c.getId}) }}\"><img
                                                src=\"{{ all_c.getLogoSca }}\"
                                                alt=\"{{ all_c.getNameSca }}\"
                                                class=\"logo_categories\">Mes tutoriels {{ all_c.getNameSca }}
                                    </a></li>
                            {% else %}
                                <li>
                                    <a href=\"{{ path('app_view_tutorial_by_categ_user_site', { categ_id: all_c.getId}) }}\"><img
                                                src=\"{{ all_c.getLogoSca }}\"
                                                alt=\"{{ all_c.getNameSca }}\"
                                                class=\"logo_categories\">Mes tutoriels {{ all_c.getNameSca }}
                                    </a></li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <div class=\"row placeholders margin_card\">
                        {% if pagination %}
                            {% for tuto_n in pagination %}
                                {% if tuto_n.getActiveStu == 1 %}
                                    <div class=\"cards\">
                                        <div class=\"image\">
                                            <img src=\"{{ tuto_n.getTutosCategories.getLogoSca }}\"
                                                 alt=\"{{ tuto_n.getTutosCategories.getNameSca }}\"/>
                                            <a href=\"{{ path('app_view_tuto_site', { tuto_id: tuto_n.getId }) }}\"
                                               class=\"tutoriel\">Voir le
                                                tutoriel</a>
                                            <a href=\"/tuto/delete/{{ tuto_n.getId() }}\" class=\"tutoriel\">
                                                <div class=\"btn_trash\">
                                                    <img src=\"{{ asset('img/trash.png') }}\" alt=\"trash\"/>
                                                </div>
                                            </a>
                                            <a href=\"#\" class=\"tutoriel\">
                                                <div class=\"btn_update\">
                                                    <img src=\"{{ asset('img/update.png') }}\" alt=\"update\"/>
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"button_cards_dispear\">
                                            <h3>{{ tuto_n.getTitleStu }}</h3>
                                            <p>{{ tuto_n.getDescriptionStu }}</p>
                                            <div class=\"name\"><img src=\"{{ asset('img/users.png') }}\" alt=\"users\"
                                                                   class=\"users_tuto\"/> {{ tuto_n.getTutosUsers.GetUsernameSha }}
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                            {% endfor %}
                        {% else %}
                            <div class=\"nothing_tuto\">
                                Aucune tutoriel dans cette catégorie, <a href=\"{{ path('app_create_tutorial_site') }}\">
                                    Créer un tutoriel maintenant ? </a>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12 col-xs-12 col-md-12 text-center pagination\">
                <hr/>
                {{ knp_pagination_render(pagination) }}
            </div>
        </div>
    </div>
    </div>
{% endblock %}", ":Tutorial:tutorial_by_categ_user_view.html.twig", "/var/www/html/ShareTutoProject/app/Resources/views/Tutorial/tutorial_by_categ_user_view.html.twig");
    }
}
