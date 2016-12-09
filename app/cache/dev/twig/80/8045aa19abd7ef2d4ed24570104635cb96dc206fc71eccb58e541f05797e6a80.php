<?php

/* Tutorial/tutorial_by_like.html.twig */
class __TwigTemplate_5f2f3ae040266b3edb92914d3036ca96df4c8aef209ec8812110d69903b8afba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Tutorial/tutorial_by_like.html.twig", 1);
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
        $__internal_32f234863b171b68c7a8c20bc482724ad38706fde2e7ffdb1e826fe1ee26caed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f234863b171b68c7a8c20bc482724ad38706fde2e7ffdb1e826fe1ee26caed->enter($__internal_32f234863b171b68c7a8c20bc482724ad38706fde2e7ffdb1e826fe1ee26caed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Tutorial/tutorial_by_like.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32f234863b171b68c7a8c20bc482724ad38706fde2e7ffdb1e826fe1ee26caed->leave($__internal_32f234863b171b68c7a8c20bc482724ad38706fde2e7ffdb1e826fe1ee26caed_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e6b65f12702c92973839e3d28369b85e0814201a74b01cb65ff53f86640ed1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6b65f12702c92973839e3d28369b85e0814201a74b01cb65ff53f86640ed1d->enter($__internal_8e6b65f12702c92973839e3d28369b85e0814201a74b01cb65ff53f86640ed1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 col-xs-12 col-sm-12 sidebar\">
                <ul class=\"nav nav-sidebar text-center margin_nav\">
                    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["all_c"]) {
            // line 8
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_view_tutorial_by_categ_site", array("categ_id" => $this->getAttribute($context["all_c"], "getId", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getLogoSca", array()), "html", null, true);
            echo "\"
                                                                              alt=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getNameSca", array()), "html", null, true);
            echo "\"
                                                                              class=\"logo_categories\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getNameSca", array()), "html", null, true);
            echo "
                            </a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['all_c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                </ul>
            </div>
            <div class=\"col-sm-12 col-xs-12 col-md-12\">
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <h1 class=\"page-header\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/arrow.png"), "html", null, true);
        echo "\" alt=\"arrow\"
                                                 class=\"arrow_header\"/> Mes favoris <span
                                class=\"nbr_tuto\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</span></h1>

                    <div class=\"row placeholders margin_card\">
                        ";
        // line 22
        if (($context["tuto"] ?? $this->getContext($context, "tuto"))) {
            // line 23
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["tuto_n"]) {
                // line 24
                echo "                            <div class=\"cards\">
                                <div class=\"image\">
                                    <img src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tuto_n"], "getLikeTuto", array()), "getTutosCategories", array()), "getLogoSca", array()), "html", null, true);
                echo "\"
                                         alt=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tuto_n"], "getLikeTuto", array()), "getTutosCategories", array()), "getNameSca", array()), "html", null, true);
                echo "\"/>
                                    <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_view_tuto_site", array("tuto_id" => $this->getAttribute($this->getAttribute($context["tuto_n"], "getLikeTuto", array()), "getId", array()))), "html", null, true);
                echo "\" class=\"tutoriel\">Voir le tutoriel</a>
                                </div>
                                <div class=\"button_cards_dispear\">
                                    <h3>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tuto_n"], "getLikeTuto", array()), "getTitleStu", array()), "html", null, true);
                echo "</h3>
                                    <p>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tuto_n"], "getLikeTuto", array()), "getDescriptionStu", array()), "html", null, true);
                echo "</p>
                                    <div class=\"name\"><img src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users.png"), "html", null, true);
                echo "\" alt=\"users\"
                                                           class=\"users_tuto\"/> ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tuto_n"], "getLikeUsers", array()), "GetUsernameSha", array()), "html", null, true);
                echo "
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tuto_n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                        ";
        } else {
            // line 40
            echo "                            <div class=\"nothing_tuto\">
                                Aucune tutoriel dans Favoris
                            </div>
                        ";
        }
        // line 44
        echo "                    </div>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12 text-center pagination\">
                    <hr/>
                    ";
        // line 48
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_8e6b65f12702c92973839e3d28369b85e0814201a74b01cb65ff53f86640ed1d->leave($__internal_8e6b65f12702c92973839e3d28369b85e0814201a74b01cb65ff53f86640ed1d_prof);

    }

    public function getTemplateName()
    {
        return "Tutorial/tutorial_by_like.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 48,  144 => 44,  138 => 40,  135 => 39,  124 => 34,  120 => 33,  116 => 32,  112 => 31,  106 => 28,  102 => 27,  98 => 26,  94 => 24,  89 => 23,  87 => 22,  81 => 19,  76 => 17,  70 => 13,  61 => 10,  57 => 9,  50 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
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
            <div class=\"col-md-12 col-xs-12 col-sm-12 sidebar\">
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
                    <h1 class=\"page-header\"><img src=\"{{ asset('img/arrow.png') }}\" alt=\"arrow\"
                                                 class=\"arrow_header\"/> Mes favoris <span
                                class=\"nbr_tuto\">{{ pagination.getTotalItemCount }}</span></h1>

                    <div class=\"row placeholders margin_card\">
                        {% if  tuto %}
                        {% for tuto_n in pagination %}
                            <div class=\"cards\">
                                <div class=\"image\">
                                    <img src=\"{{ tuto_n.getLikeTuto.getTutosCategories.getLogoSca }}\"
                                         alt=\"{{ tuto_n.getLikeTuto.getTutosCategories.getNameSca }}\"/>
                                    <a href=\"{{ path('app_view_tuto_site',{tuto_id: tuto_n.getLikeTuto.getId}) }}\" class=\"tutoriel\">Voir le tutoriel</a>
                                </div>
                                <div class=\"button_cards_dispear\">
                                    <h3>{{ tuto_n.getLikeTuto.getTitleStu }}</h3>
                                    <p>{{ tuto_n.getLikeTuto.getDescriptionStu }}</p>
                                    <div class=\"name\"><img src=\"{{ asset('img/users.png') }}\" alt=\"users\"
                                                           class=\"users_tuto\"/> {{ tuto_n.getLikeUsers.GetUsernameSha }}
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                        {% else %}
                            <div class=\"nothing_tuto\">
                                Aucune tutoriel dans Favoris
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
{% endblock %}", "Tutorial/tutorial_by_like.html.twig", "/var/www/html/ShareTutoProject/app/Resources/views/Tutorial/tutorial_by_like.html.twig");
    }
}
