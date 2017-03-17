<?php

/* :Home:index.html.twig */
class __TwigTemplate_feadc178df50ebffc4424e72b47005bdf8eb81f138de471d4e6eacc33e2e850a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Home:index.html.twig", 1);
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
        $__internal_4b6abfd48a36289acd0189635ad06a33c2548647bed11e54f6be1ff11a7a5fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6abfd48a36289acd0189635ad06a33c2548647bed11e54f6be1ff11a7a5fc9->enter($__internal_4b6abfd48a36289acd0189635ad06a33c2548647bed11e54f6be1ff11a7a5fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b6abfd48a36289acd0189635ad06a33c2548647bed11e54f6be1ff11a7a5fc9->leave($__internal_4b6abfd48a36289acd0189635ad06a33c2548647bed11e54f6be1ff11a7a5fc9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c27d8838ed662faeab269f55fbbbe196de6ac5565e3a5e021b6020db8fa69896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27d8838ed662faeab269f55fbbbe196de6ac5565e3a5e021b6020db8fa69896->enter($__internal_c27d8838ed662faeab269f55fbbbe196de6ac5565e3a5e021b6020db8fa69896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $context["count_like"] = 0;
        // line 4
        echo "    ";
        $context["count_view"] = 0;
        // line 5
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 sidebar\">
                <ul class=\"nav nav-sidebar text-center margin_nav\">
                    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["all_c"]) {
            // line 10
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_view_tutorial_by_categ_site", array("categ_id" => $this->getAttribute($context["all_c"], "getId", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getLogoSca", array()), "html", null, true);
            echo "\"
                                                                              alt=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getNameSca", array()), "html", null, true);
            echo "\"
                                                                              class=\"logo_categories\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getNameSca", array()), "html", null, true);
            echo "
                            </a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['all_c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                </ul>
            </div>
            <div class=\"col-sm-12 col-xs-12 col-md-12\">
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <h1 class=\"page-header\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/arrow.png"), "html", null, true);
        echo "\" alt=\"arrow\" class=\"arrow_header\"/>Derniers
                        tutoriels</h1>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-10 col-centered\">
                    <div class=\"row placeholders margin_card\">
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["last_tutorial"] ?? $this->getContext($context, "last_tutorial")), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["last_n"]) {
            // line 25
            echo "                            <div class=\"cards\">
                                <div class=\"image\">
                                    <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["last_n"], "getTutosCategories", array()), "getLogoSca", array()), "html", null, true);
            echo "\"
                                         alt=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["last_n"], "getTutosCategories", array()), "getNameSca", array()), "html", null, true);
            echo "\"/>
                                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_view_tuto_site", array("tuto_id" => $this->getAttribute($context["last_n"], "getId", array()))), "html", null, true);
            echo "\" class=\"tutoriel\">Voir le tutoriel</a>
                                </div>
                                <div class=\"button_cards_dispear\">
                                    <h3>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["last_n"], "getTitleStu", array()), "html", null, true);
            echo "</h3>
                                    <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["last_n"], "getDescriptionStu", array()), "html", null, true);
            echo "</p>
                                    <div class=\"name\"><img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users.png"), "html", null, true);
            echo "\" alt=\"users\"
                                                           class=\"users_tuto\"/> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["last_n"], "getTutosUsers", array()), "GetUsernameSha", array()), "html", null, true);
            echo "
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['last_n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </div>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <h2 class=\"page-header\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/arrow.png"), "html", null, true);
        echo "\" alt=\"arrow\" class=\"arrow_header2\"/>Les
                        six plus vue</h2>
                    <div class=\"col-sm-12 col-xs-12 col-md-12\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped\">
                                <thead>
                                <tr>
                                    <th>Classement</th>
                                    <th>Pseudonyme</th>
                                    <th>Titre</th>
                                    <th>Categorie</th>
                                    <th>Nbr vue</th>
                                    <th>Voir le tuto</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["view_tutorial"] ?? $this->getContext($context, "view_tutorial")));
        foreach ($context['_seq'] as $context["_key"] => $context["t_view"]) {
            // line 60
            echo "                                    ";
            $context["count_view"] = (($context["count_view"] ?? $this->getContext($context, "count_view")) + 1);
            // line 61
            echo "
                                    <tr>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, ($context["count_view"] ?? $this->getContext($context, "count_view")), "html", null, true);
            echo "</td>
                                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["t_view"], "getTutosUsers", array()), "getUsernameSha", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["t_view"], "getTitleStu", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["t_view"], "getTutosCategories", array()), "getNameSca", array()), "html", null, true);
            echo "</td>
                                        ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["view_number"] ?? $this->getContext($context, "view_number")));
            foreach ($context['_seq'] as $context["key"] => $context["t_number"]) {
                // line 68
                echo "                                            ";
                if (($context["key"] == $this->getAttribute($context["t_view"], "getId", array()))) {
                    // line 69
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, $context["t_number"], "html", null, true);
                    echo "</td>
                                            ";
                }
                // line 71
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['t_number'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                                        <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_view_tuto_site", array("tuto_id" => $this->getAttribute($context["t_view"], "getId", array()))), "html", null, true);
            echo "\" class=\"tutoriel\">Voir le
                                                tutoriel</a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <h2 class=\"page-header\"><img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/arrow.png"), "html", null, true);
        echo "\" alt=\"arrow\" class=\"arrow_header2\"/>Les
                        six plus aimer</h2>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th>Classement</th>
                                <th>Pseudonyme</th>
                                <th>Titre</th>
                                <th>Categorie</th>
                                <th>Nbr vue</th>
                                <th>Voir le tuto</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["like_tutorial"] ?? $this->getContext($context, "like_tutorial")));
        foreach ($context['_seq'] as $context["_key"] => $context["t_like"]) {
            // line 101
            echo "                                <tr>

                                    ";
            // line 103
            $context["count_like"] = (($context["count_like"] ?? $this->getContext($context, "count_like")) + 1);
            // line 104
            echo "
                                    <td>";
            // line 105
            echo twig_escape_filter($this->env, ($context["count_like"] ?? $this->getContext($context, "count_like")), "html", null, true);
            echo "</td>
                                    <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["t_like"], "getTutosUsers", array()), "getUsernameSha", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["t_like"], "getTitleStu", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["t_like"], "getTutosCategories", array()), "getNameSca", array()), "html", null, true);
            echo "</td>
                                    ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["like_number"] ?? $this->getContext($context, "like_number")));
            foreach ($context['_seq'] as $context["key"] => $context["t_number"]) {
                // line 110
                echo "                                        ";
                if (($context["key"] == $this->getAttribute($context["t_like"], "getId", array()))) {
                    // line 111
                    echo "                                            <td>";
                    echo twig_escape_filter($this->env, $context["t_number"], "html", null, true);
                    echo "</td>
                                        ";
                }
                // line 113
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['t_number'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "                                    <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_view_tuto_site", array("tuto_id" => $this->getAttribute($context["t_like"], "getId", array()))), "html", null, true);
            echo "\" class=\"tutoriel\">Voir le tutoriel</a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_like'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c27d8838ed662faeab269f55fbbbe196de6ac5565e3a5e021b6020db8fa69896->leave($__internal_c27d8838ed662faeab269f55fbbbe196de6ac5565e3a5e021b6020db8fa69896_prof);

    }

    public function getTemplateName()
    {
        return ":Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 117,  293 => 114,  287 => 113,  281 => 111,  278 => 110,  274 => 109,  270 => 108,  266 => 107,  262 => 106,  258 => 105,  255 => 104,  253 => 103,  249 => 101,  245 => 100,  225 => 83,  217 => 77,  205 => 72,  199 => 71,  193 => 69,  190 => 68,  186 => 67,  182 => 66,  178 => 65,  174 => 64,  170 => 63,  166 => 61,  163 => 60,  159 => 59,  140 => 43,  135 => 40,  124 => 35,  120 => 34,  116 => 33,  112 => 32,  106 => 29,  102 => 28,  98 => 27,  94 => 25,  90 => 24,  82 => 19,  76 => 15,  67 => 12,  63 => 11,  56 => 10,  52 => 9,  46 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
    {% set count_like = 0 %}
    {% set count_view = 0 %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 sidebar\">
                <ul class=\"nav nav-sidebar text-center margin_nav\">
                    {% for all_c in categories %}
                        <li><a href=\"{{ path('app_view_tutorial_by_categ_site', { categ_id: all_c.getId}) }}\"><img src=\"{{ all_c.getLogoSca }}\"
                                                                              alt=\"{{ all_c.getNameSca }}\"
                                                                              class=\"logo_categories\">{{ all_c.getNameSca }}
                            </a></li>
                    {% endfor %}
                </ul>
            </div>
            <div class=\"col-sm-12 col-xs-12 col-md-12\">
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <h1 class=\"page-header\"><img src=\"{{ asset('img/arrow.png') }}\" alt=\"arrow\" class=\"arrow_header\"/>Derniers
                        tutoriels</h1>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-10 col-centered\">
                    <div class=\"row placeholders margin_card\">
                        {% for last_n in last_tutorial | slice(0, 4) %}
                            <div class=\"cards\">
                                <div class=\"image\">
                                    <img src=\"{{ last_n.getTutosCategories.getLogoSca }}\"
                                         alt=\"{{ last_n.getTutosCategories.getNameSca }}\"/>
                                    <a href=\"{{ path('app_view_tuto_site', { tuto_id: last_n.getId}) }}\" class=\"tutoriel\">Voir le tutoriel</a>
                                </div>
                                <div class=\"button_cards_dispear\">
                                    <h3>{{ last_n.getTitleStu }}</h3>
                                    <p>{{ last_n.getDescriptionStu }}</p>
                                    <div class=\"name\"><img src=\"{{ asset('img/users.png') }}\" alt=\"users\"
                                                           class=\"users_tuto\"/> {{ last_n.getTutosUsers.GetUsernameSha }}
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <h2 class=\"page-header\"><img src=\"{{ asset('img/arrow.png') }}\" alt=\"arrow\" class=\"arrow_header2\"/>Les
                        six plus vue</h2>
                    <div class=\"col-sm-12 col-xs-12 col-md-12\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped\">
                                <thead>
                                <tr>
                                    <th>Classement</th>
                                    <th>Pseudonyme</th>
                                    <th>Titre</th>
                                    <th>Categorie</th>
                                    <th>Nbr vue</th>
                                    <th>Voir le tuto</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for t_view in view_tutorial %}
                                    {% set count_view = count_view + 1 %}

                                    <tr>
                                        <td>{{ count_view }}</td>
                                        <td>{{ t_view.getTutosUsers.getUsernameSha }}</td>
                                        <td>{{ t_view.getTitleStu }}</td>
                                        <td>{{ t_view.getTutosCategories.getNameSca }}</td>
                                        {% for key, t_number in view_number %}
                                            {% if key == t_view.getId %}
                                                <td>{{ t_number }}</td>
                                            {% endif %}
                                        {% endfor %}
                                        <td><a href=\"{{ path('app_view_tuto_site', { tuto_id: t_view.getId}) }}\" class=\"tutoriel\">Voir le
                                                tutoriel</a>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <h2 class=\"page-header\"><img src=\"{{ asset('img/arrow.png') }}\" alt=\"arrow\" class=\"arrow_header2\"/>Les
                        six plus aimer</h2>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th>Classement</th>
                                <th>Pseudonyme</th>
                                <th>Titre</th>
                                <th>Categorie</th>
                                <th>Nbr vue</th>
                                <th>Voir le tuto</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for t_like in like_tutorial %}
                                <tr>

                                    {% set count_like = count_like + 1 %}

                                    <td>{{ count_like }}</td>
                                    <td>{{ t_like.getTutosUsers.getUsernameSha }}</td>
                                    <td>{{ t_like.getTitleStu }}</td>
                                    <td>{{ t_like.getTutosCategories.getNameSca }}</td>
                                    {% for key, t_number in like_number %}
                                        {% if key == t_like.getId %}
                                            <td>{{ t_number }}</td>
                                        {% endif %}
                                    {% endfor %}
                                    <td><a href=\"{{ path('app_view_tuto_site', { tuto_id: t_like.getId}) }}\" class=\"tutoriel\">Voir le tutoriel</a></td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", ":Home:index.html.twig", "/var/www/html/ShareTutoProject/app/Resources/views/Home/index.html.twig");
    }
}
