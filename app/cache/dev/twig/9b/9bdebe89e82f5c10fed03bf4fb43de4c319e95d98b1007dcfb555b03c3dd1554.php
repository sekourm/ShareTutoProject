<?php

/* :Tutorial:tutorial_by_search.html.twig */
class __TwigTemplate_b032bd93414b9ce951c0ae7906370f73d69583eafdfbadccdf06b43471259f70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Tutorial:tutorial_by_search.html.twig", 1);
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
        $__internal_8d161332e0fbb11005fc685de343f111599a0e06fe3bcce4e40106050a56b4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d161332e0fbb11005fc685de343f111599a0e06fe3bcce4e40106050a56b4c1->enter($__internal_8d161332e0fbb11005fc685de343f111599a0e06fe3bcce4e40106050a56b4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Tutorial:tutorial_by_search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d161332e0fbb11005fc685de343f111599a0e06fe3bcce4e40106050a56b4c1->leave($__internal_8d161332e0fbb11005fc685de343f111599a0e06fe3bcce4e40106050a56b4c1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce24d9fc3c9e458ca3b603bfac1dff09815d8f70878eb94c5095f8382d02bffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce24d9fc3c9e458ca3b603bfac1dff09815d8f70878eb94c5095f8382d02bffc->enter($__internal_ce24d9fc3c9e458ca3b603bfac1dff09815d8f70878eb94c5095f8382d02bffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "\"><img
                                        src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getLogoSca", array()), "html", null, true);
            echo "\"
                                        alt=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getNameSca", array()), "html", null, true);
            echo "\"
                                        class=\"logo_categories\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getNameSca", array()), "html", null, true);
            echo "
                            </a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['all_c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                </ul>
            </div>
            <div class=\"col-sm-12 col-xs-12 col-md-12\">
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <h1 class=\"page-header\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/arrow.png"), "html", null, true);
        echo "\" alt=\"arrow\"
                                                 class=\"arrow_header\"/> Résultat de la recherche : ";
        // line 19
        echo twig_escape_filter($this->env, ($context["title_tutorial"] ?? $this->getContext($context, "title_tutorial")), "html", null, true);
        echo "<span
                                class=\"nbr_tuto\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</span></h1>

                    <div class=\"row placeholders margin_card\">
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["tuto_n"]) {
            // line 24
            echo "                            <div class=\"cards\">
                                <div class=\"image\">
                                    <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tuto_n"], "getTutosCategories", array()), "getLogoSca", array()), "html", null, true);
            echo "\"
                                         alt=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tuto_n"], "getTutosCategories", array()), "getNameSca", array()), "html", null, true);
            echo "\"/>
                                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_view_tuto_site", array("tuto_id" => $this->getAttribute($context["tuto_n"], "getId", array()))), "html", null, true);
            echo "\" class=\"tutoriel\">Voir
                                        le tutoriel</a>
                                </div>
                                <div class=\"button_cards_dispear\">
                                    <h3>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["tuto_n"], "getTitleStu", array()), "html", null, true);
            echo "</h3>
                                    <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["tuto_n"], "getDescriptionStu", array()), "html", null, true);
            echo "</p>
                                    <div class=\"name\"><img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users.png"), "html", null, true);
            echo "\" alt=\"users\"
                                                           class=\"users_tuto\"/> ";
            // line 35
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
        // line 40
        echo "                    </div>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12 text-center pagination\">
                    <hr/>
                    ";
        // line 44
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_ce24d9fc3c9e458ca3b603bfac1dff09815d8f70878eb94c5095f8382d02bffc->leave($__internal_ce24d9fc3c9e458ca3b603bfac1dff09815d8f70878eb94c5095f8382d02bffc_prof);

    }

    public function getTemplateName()
    {
        return ":Tutorial:tutorial_by_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 44,  138 => 40,  127 => 35,  123 => 34,  119 => 33,  115 => 32,  108 => 28,  104 => 27,  100 => 26,  96 => 24,  92 => 23,  86 => 20,  82 => 19,  78 => 18,  72 => 14,  63 => 11,  59 => 10,  55 => 9,  50 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
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
                        <li><a href=\"{{ path('app_view_tutorial_by_categ_site', { categ_id: all_c.getId}) }}\"><img
                                        src=\"{{ all_c.getLogoSca }}\"
                                        alt=\"{{ all_c.getNameSca }}\"
                                        class=\"logo_categories\">{{ all_c.getNameSca }}
                            </a></li>
                    {% endfor %}
                </ul>
            </div>
            <div class=\"col-sm-12 col-xs-12 col-md-12\">
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <h1 class=\"page-header\"><img src=\"{{ asset('img/arrow.png') }}\" alt=\"arrow\"
                                                 class=\"arrow_header\"/> Résultat de la recherche : {{ title_tutorial }}<span
                                class=\"nbr_tuto\">{{ pagination.getTotalItemCount }}</span></h1>

                    <div class=\"row placeholders margin_card\">
                        {% for tuto_n in pagination %}
                            <div class=\"cards\">
                                <div class=\"image\">
                                    <img src=\"{{ tuto_n.getTutosCategories.getLogoSca }}\"
                                         alt=\"{{ tuto_n.getTutosCategories.getNameSca }}\"/>
                                    <a href=\"{{ path('app_view_tuto_site',{tuto_id: tuto_n.getId}) }}\" class=\"tutoriel\">Voir
                                        le tutoriel</a>
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
                    </div>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12 text-center pagination\">
                    <hr/>
                    {{ knp_pagination_render(pagination) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", ":Tutorial:tutorial_by_search.html.twig", "/var/www/html/ShareTutoProject/app/Resources/views/Tutorial/tutorial_by_search.html.twig");
    }
}
