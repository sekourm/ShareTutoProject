<?php

/* Tutorial/tutorial_by_categ_view.html.twig */
class __TwigTemplate_ec79e1d70f80b70bc6bc9743df0c818623846d2942dd8d5f0661e1bdfa95d14c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Tutorial/tutorial_by_categ_view.html.twig", 1);
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
        $__internal_245a2b53f207e86278171725dc720ff65e50f68f9ee229cd394e3a8f3214e6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245a2b53f207e86278171725dc720ff65e50f68f9ee229cd394e3a8f3214e6f7->enter($__internal_245a2b53f207e86278171725dc720ff65e50f68f9ee229cd394e3a8f3214e6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Tutorial/tutorial_by_categ_view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_245a2b53f207e86278171725dc720ff65e50f68f9ee229cd394e3a8f3214e6f7->leave($__internal_245a2b53f207e86278171725dc720ff65e50f68f9ee229cd394e3a8f3214e6f7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6152d0cf894d913ecca376238e5c8f798136f534c8eddc1e5576cca4eff5c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6152d0cf894d913ecca376238e5c8f798136f534c8eddc1e5576cca4eff5c76->enter($__internal_c6152d0cf894d913ecca376238e5c8f798136f534c8eddc1e5576cca4eff5c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-xs-12 col-md-12 sidebar\">
                <ul class=\"nav nav-sidebar text-center\">
                    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["all_c"]) {
            // line 8
            echo "                        ";
            if (($this->getAttribute($context["all_c"], "getId", array()) == $this->getAttribute(($context["categorie_active"] ?? $this->getContext($context, "categorie_active")), "getId", array()))) {
                // line 9
                echo "                            <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_view_tutorial_by_categ_site", array("categ_id" => $this->getAttribute($context["all_c"], "getId", array()))), "html", null, true);
                echo "\"><img
                                            src=\"";
                // line 10
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
            } else {
                // line 15
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_view_tutorial_by_categ_site", array("categ_id" => $this->getAttribute($context["all_c"], "getId", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getLogoSca", array()), "html", null, true);
                echo "\"
                                                                                  alt=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getNameSca", array()), "html", null, true);
                echo "\"
                                                                                  class=\"logo_categories\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getNameSca", array()), "html", null, true);
                echo "
                                </a></li>
                        ";
            }
            // line 20
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['all_c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                </ul>
            </div>
            <div class=\"col-sm-12 col-xs-12 col-md-12\">
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <h1 class=\"page-header\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/arrow.png"), "html", null, true);
        echo "\" alt=\"arrow\"
                                                 class=\"arrow_header\"/> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["categorie_active"] ?? $this->getContext($context, "categorie_active")), "getNameSca", array()), "html", null, true);
        echo " <span
                                class=\"nbr_tuto\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</span></h1>

                    <div class=\"row placeholders margin_card\">
                        ";
        // line 30
        if (($context["pagination"] ?? $this->getContext($context, "pagination"))) {
            // line 31
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["tuto_n"]) {
                // line 32
                echo "                                ";
                if (($this->getAttribute($context["tuto_n"], "getActiveStu", array()) == 1)) {
                    // line 33
                    echo "                                    <div class=\"cards\">
                                        <div class=\"image\">
                                            <img src=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tuto_n"], "getTutosCategories", array()), "getLogoSca", array()), "html", null, true);
                    echo "\"
                                                 alt=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tuto_n"], "getTutosCategories", array()), "getNameSca", array()), "html", null, true);
                    echo "\"/>
                                            <a href=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_view_tuto_site", array("tuto_id" => $this->getAttribute($context["tuto_n"], "getId", array()))), "html", null, true);
                    echo "\" class=\"tutoriel\">Voir le
                                                tutoriel</a>
                                        </div>
                                        <div class=\"button_cards_dispear\">
                                            <h3>";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tuto_n"], "getTitleStu", array()), "html", null, true);
                    echo "</h3>
                                            <p>";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tuto_n"], "getDescriptionStu", array()), "html", null, true);
                    echo "</p>
                                            <div class=\"name\"><img src=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users.png"), "html", null, true);
                    echo "\" alt=\"users\"
                                                                   class=\"users_tuto\"/> ";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tuto_n"], "getTutosUsers", array()), "GetUsernameSha", array()), "html", null, true);
                    echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
                }
                // line 49
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tuto_n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                        ";
        } else {
            // line 51
            echo "                            <div class=\"nothing_tuto\">
                                Aucune tutoriel dans cette catégorie, <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_create_tutorial_site");
            echo "\"> Créer un tutoriel maintenant ? </a>
                            </div>
                        ";
        }
        // line 55
        echo "                    </div>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12 text-center pagination\">
                    <hr/>
                    ";
        // line 59
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c6152d0cf894d913ecca376238e5c8f798136f534c8eddc1e5576cca4eff5c76->leave($__internal_c6152d0cf894d913ecca376238e5c8f798136f534c8eddc1e5576cca4eff5c76_prof);

    }

    public function getTemplateName()
    {
        return "Tutorial/tutorial_by_categ_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 59,  182 => 55,  176 => 52,  173 => 51,  170 => 50,  164 => 49,  156 => 44,  152 => 43,  148 => 42,  144 => 41,  137 => 37,  133 => 36,  129 => 35,  125 => 33,  122 => 32,  117 => 31,  115 => 30,  109 => 27,  105 => 26,  101 => 25,  95 => 21,  89 => 20,  83 => 17,  79 => 16,  72 => 15,  66 => 12,  62 => 11,  58 => 10,  53 => 9,  50 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
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
            <div class=\"col-sm-12 col-xs-12 col-md-12 sidebar\">
                <ul class=\"nav nav-sidebar text-center\">
                    {% for all_c in categories %}
                        {% if all_c.getId == categorie_active.getId %}
                            <li class=\"active\"><a href=\"{{ path('app_view_tutorial_by_categ_site', { categ_id: all_c.getId}) }}\"><img
                                            src=\"{{ all_c.getLogoSca }}\"
                                            alt=\"{{ all_c.getNameSca }}\"
                                            class=\"logo_categories\">{{ all_c.getNameSca }}
                                </a></li>
                        {% else %}
                            <li><a href=\"{{ path('app_view_tutorial_by_categ_site', { categ_id: all_c.getId}) }}\"><img src=\"{{ all_c.getLogoSca }}\"
                                                                                  alt=\"{{ all_c.getNameSca }}\"
                                                                                  class=\"logo_categories\">{{ all_c.getNameSca }}
                                </a></li>
                        {% endif %}
                    {% endfor %}
                </ul>
            </div>
            <div class=\"col-sm-12 col-xs-12 col-md-12\">
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <h1 class=\"page-header\"><img src=\"{{ asset('img/arrow.png') }}\" alt=\"arrow\"
                                                 class=\"arrow_header\"/> {{ categorie_active.getNameSca }} <span
                                class=\"nbr_tuto\">{{ pagination.getTotalItemCount }}</span></h1>

                    <div class=\"row placeholders margin_card\">
                        {% if pagination %}
                            {% for tuto_n in pagination %}
                                {% if tuto_n.getActiveStu == 1 %}
                                    <div class=\"cards\">
                                        <div class=\"image\">
                                            <img src=\"{{ tuto_n.getTutosCategories.getLogoSca }}\"
                                                 alt=\"{{ tuto_n.getTutosCategories.getNameSca }}\"/>
                                            <a href=\"{{ path('app_view_tuto_site', { tuto_id: tuto_n.getId }) }}\" class=\"tutoriel\">Voir le
                                                tutoriel</a>
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
                                Aucune tutoriel dans cette catégorie, <a href=\"{{ path('app_create_tutorial_site') }}\"> Créer un tutoriel maintenant ? </a>
                            </div>
                        {% endif %}
                    </div>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12 text-center pagination\">
                    <hr/>
                    {{ knp_pagination_render(pagination) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "Tutorial/tutorial_by_categ_view.html.twig", "/var/www/html/ShareTutoProject/app/Resources/views/Tutorial/tutorial_by_categ_view.html.twig");
    }
}
