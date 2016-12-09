<?php

/* Tutorial/tutorial_by_user.html.twig */
class __TwigTemplate_144de03d8a254d9b238b54763bb5e23c4b03891a377afaf27ec58be8692810fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Tutorial/tutorial_by_user.html.twig", 1);
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
        $__internal_4ca6c65b3be1ae1309ac4e687c5257b1eb9a655c88b836bf86954e5d30df85f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca6c65b3be1ae1309ac4e687c5257b1eb9a655c88b836bf86954e5d30df85f0->enter($__internal_4ca6c65b3be1ae1309ac4e687c5257b1eb9a655c88b836bf86954e5d30df85f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Tutorial/tutorial_by_user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ca6c65b3be1ae1309ac4e687c5257b1eb9a655c88b836bf86954e5d30df85f0->leave($__internal_4ca6c65b3be1ae1309ac4e687c5257b1eb9a655c88b836bf86954e5d30df85f0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_48faadd6002e72779428fc7caa053405ad948f6b367dacbf186ad2b20b4039b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48faadd6002e72779428fc7caa053405ad948f6b367dacbf186ad2b20b4039b0->enter($__internal_48faadd6002e72779428fc7caa053405ad948f6b367dacbf186ad2b20b4039b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-xs-12 col-md-12\">
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <h1 class=\"page-header\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/arrow.png"), "html", null, true);
        echo "\" alt=\"arrow\"
                                                 class=\"arrow_header\"/>Tout mes Tutoriels <span
                                class=\"nbr_tuto\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</span></h1>
                </div>
                <div class=\"col-md-12 col-xs-12 col-sm-12 sidebar\">
                    <ul class=\"nav nav-sidebar text-center\">
                        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["all_c"]) {
            // line 14
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_view_tutorial_by_categ_user_site", array("categ_id" => $this->getAttribute($context["all_c"], "getId", array()))), "html", null, true);
            echo "\"><img
                                            src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getLogoSca", array()), "html", null, true);
            echo "\"
                                            alt=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getNameSca", array()), "html", null, true);
            echo "\"
                                            class=\"logo_categories\">Mes tutoriels [";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getNameSca", array()), "html", null, true);
            echo "]
                                </a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['all_c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                    </ul>
                </div>
                <div class=\"col-md-12 col-xs-12 col-sm-12\">
                    <div class=\"row placeholders margin_card\">
                        ";
        // line 24
        echo twig_include($this->env, $context, "Alert/alert.html.twig");
        echo "
                        ";
        // line 25
        if (($context["tuto"] ?? $this->getContext($context, "tuto"))) {
            // line 26
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["tuto_n"]) {
                // line 27
                echo "                                <div class=\"cards\">
                                    <div class=\"image\">
                                        <img src=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tuto_n"], "getTutosCategories", array()), "getLogoSca", array()), "html", null, true);
                echo "\"
                                             alt=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tuto_n"], "getTutosCategories", array()), "getNameSca", array()), "html", null, true);
                echo "\"/>
                                        <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_view_tuto_site", array("tuto_id" => $this->getAttribute($context["tuto_n"], "getId", array()))), "html", null, true);
                echo "\"
                                           class=\"tutoriel\">Voir le tutoriel</a>
                                        <a href=\"/tuto/delete/";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["tuto_n"], "getId", array(), "method"), "html", null, true);
                echo "\" class=\"tutoriel\">
                                            <div class=\"btn_trash\">
                                                <img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/trash.png"), "html", null, true);
                echo "\" alt=\"trash\"/>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"tutoriel\">
                                            <div class=\"btn_update\">
                                                <img src=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/update.png"), "html", null, true);
                echo "\" alt=\"update\"/>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"button_cards_dispear\">
                                        <h3>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["tuto_n"], "getTitleStu", array()), "html", null, true);
                echo "</h3>
                                        <p>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["tuto_n"], "getDescriptionStu", array()), "html", null, true);
                echo "</p>
                                        <div class=\"name\"><img src=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users.png"), "html", null, true);
                echo "\" alt=\"users\"
                                                               class=\"users_tuto\"/> ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tuto_n"], "getTutosUsers", array()), "GetUsernameSha", array()), "html", null, true);
                echo "
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tuto_n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                        ";
        } else {
            // line 54
            echo "                            <div class=\"nothing_tuto\">
                                Vous n'avez encore aucun tutoriel, <a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_create_tutorial_site");
            echo "\">
                                    Créer un tutoriel maintenant ? </a>
                            </div>
                        ";
        }
        // line 59
        echo "                    </div>
                </div>
            </div>
            <div class=\"col-sm-12 col-xs-12 col-md-12 text-center pagination\">
                <hr/>
                ";
        // line 64
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>
    </div>
    </div>
";
        
        $__internal_48faadd6002e72779428fc7caa053405ad948f6b367dacbf186ad2b20b4039b0->leave($__internal_48faadd6002e72779428fc7caa053405ad948f6b367dacbf186ad2b20b4039b0_prof);

    }

    public function getTemplateName()
    {
        return "Tutorial/tutorial_by_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 64,  175 => 59,  168 => 55,  165 => 54,  162 => 53,  151 => 48,  147 => 47,  143 => 46,  139 => 45,  131 => 40,  123 => 35,  118 => 33,  113 => 31,  109 => 30,  105 => 29,  101 => 27,  96 => 26,  94 => 25,  90 => 24,  84 => 20,  75 => 17,  71 => 16,  67 => 15,  62 => 14,  58 => 13,  51 => 9,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
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
                                                 class=\"arrow_header\"/>Tout mes Tutoriels <span
                                class=\"nbr_tuto\">{{ pagination.getTotalItemCount }}</span></h1>
                </div>
                <div class=\"col-md-12 col-xs-12 col-sm-12 sidebar\">
                    <ul class=\"nav nav-sidebar text-center\">
                        {% for all_c in categories %}
                            <li><a href=\"{{ path('app_view_tutorial_by_categ_user_site', { categ_id: all_c.getId}) }}\"><img
                                            src=\"{{ all_c.getLogoSca }}\"
                                            alt=\"{{ all_c.getNameSca }}\"
                                            class=\"logo_categories\">Mes tutoriels [{{ all_c.getNameSca }}]
                                </a></li>
                        {% endfor %}
                    </ul>
                </div>
                <div class=\"col-md-12 col-xs-12 col-sm-12\">
                    <div class=\"row placeholders margin_card\">
                        {{ include('Alert/alert.html.twig') }}
                        {% if  tuto %}
                            {% for tuto_n in pagination %}
                                <div class=\"cards\">
                                    <div class=\"image\">
                                        <img src=\"{{ tuto_n.getTutosCategories.getLogoSca }}\"
                                             alt=\"{{ tuto_n.getTutosCategories.getNameSca }}\"/>
                                        <a href=\"{{ path('app_view_tuto_site',{tuto_id: tuto_n.getId}) }}\"
                                           class=\"tutoriel\">Voir le tutoriel</a>
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
                            {% endfor %}
                        {% else %}
                            <div class=\"nothing_tuto\">
                                Vous n'avez encore aucun tutoriel, <a href=\"{{ path('app_create_tutorial_site') }}\">
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
{% endblock %}", "Tutorial/tutorial_by_user.html.twig", "/var/www/html/ShareTutoProject/app/Resources/views/Tutorial/tutorial_by_user.html.twig");
    }
}
