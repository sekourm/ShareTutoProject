<?php

/* Tutorial/tutorial_view.html.twig */
class __TwigTemplate_bc1ad5bbc7f72a69735bbd50568da0d38dd03d940ef4f02b79a288eadf77c952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Tutorial/tutorial_view.html.twig", 1);
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
        $__internal_51ce991d9ee9f7a5bcda8f5c145a0c820ae47520b206dbbf994954a3149e906a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ce991d9ee9f7a5bcda8f5c145a0c820ae47520b206dbbf994954a3149e906a->enter($__internal_51ce991d9ee9f7a5bcda8f5c145a0c820ae47520b206dbbf994954a3149e906a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Tutorial/tutorial_view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51ce991d9ee9f7a5bcda8f5c145a0c820ae47520b206dbbf994954a3149e906a->leave($__internal_51ce991d9ee9f7a5bcda8f5c145a0c820ae47520b206dbbf994954a3149e906a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8de4acac01627b5615ffa257a399c021048f99d18dfd51192d7022720568e1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de4acac01627b5615ffa257a399c021048f99d18dfd51192d7022720568e1c7->enter($__internal_8de4acac01627b5615ffa257a399c021048f99d18dfd51192d7022720568e1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 col-xs-12 col-sm-12 sidebar\">
                <ul class=\"nav nav-sidebar text-center\">
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
            <div class=\"col-sm-12 col-xs-12 col-md-6 col-centered\">
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <h1 class=\"page-header\">
                        <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/arrow.png"), "html", null, true);
        echo "\" alt=\"arrow\"
                             class=\"arrow_header\"/>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tuto"] ?? $this->getContext($context, "tuto")), "getTitleStu", array()), "html", null, true);
        echo "
                    </h1>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12 description_tuto\">
                    ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tuto"] ?? $this->getContext($context, "tuto")), "getDescriptionStu", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    ";
        // line 26
        echo $this->getAttribute(($context["tuto"] ?? $this->getContext($context, "tuto")), "getContentStu", array());
        echo "
                </div>
                ";
        // line 28
        if (($context["file"] ?? $this->getContext($context, "file"))) {
            // line 29
            echo "                    <div class=\"col-sm-12 col-xs-12 col-md-12\">
                        <br/>
                        <ul class=\"listrap\">
                            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["file"] ?? $this->getContext($context, "file")));
            foreach ($context['_seq'] as $context["_key"] => $context["n_file"]) {
                // line 33
                echo "                                <li>
                                    <div class=\"listrap-toggle\">
                                        <span></span><img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/file.png"), "html", null, true);
                echo "\" width=\"60\"
                                                          height=\"60\"/>
                                    </div>
                                    <strong>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["n_file"], "getRealNameStf", array()), "html", null, true);
                echo "</strong>
                                    <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, (($context["directory"] ?? $this->getContext($context, "directory")) . $this->getAttribute($context["n_file"], "getNameStf", array())), "html", null, true);
                echo "\"
                                       download=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["n_file"], "getRealNameStf", array()), "html", null, true);
                echo "\" class=\"button_download pull-right\">Download</a>
                                </li>
                                <br/>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n_file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                        </ul>
                    </div>
                ";
        }
        // line 47
        echo "                ";
        if (($context["like_user"] ?? $this->getContext($context, "like_user"))) {
            // line 48
            echo "                    <div class=\"col-sm-12 col-xs-12 col-md-12 like-content\">
                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_delete_like_site", array("tuto_id" => $this->getAttribute(($context["tuto"] ?? $this->getContext($context, "tuto")), "getId", array()))), "html", null, true);
            echo "\" class=\"btn-secondary like-review\">
                            <i class=\"fa glyphicon glyphicon-heart\" aria-hidden=\"true\"></i> Dislike
                        </a>
                    </div>
                ";
        } else {
            // line 54
            echo "                    <div class=\"col-sm-12 col-xs-12 col-md-12 like-content\">
                        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_create_like_site", array("tuto_id" => $this->getAttribute(($context["tuto"] ?? $this->getContext($context, "tuto")), "getId", array()))), "html", null, true);
            echo "\" class=\"btn-secondary like-review\">
                            <i class=\"fa glyphicon glyphicon-heart\" aria-hidden=\"true\"></i> Like
                        </a>
                    </div>
                ";
        }
        // line 60
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_8de4acac01627b5615ffa257a399c021048f99d18dfd51192d7022720568e1c7->leave($__internal_8de4acac01627b5615ffa257a399c021048f99d18dfd51192d7022720568e1c7_prof);

    }

    public function getTemplateName()
    {
        return "Tutorial/tutorial_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 60,  160 => 55,  157 => 54,  149 => 49,  146 => 48,  143 => 47,  138 => 44,  128 => 40,  124 => 39,  120 => 38,  114 => 35,  110 => 33,  106 => 32,  101 => 29,  99 => 28,  94 => 26,  88 => 23,  81 => 19,  77 => 18,  70 => 13,  61 => 10,  57 => 9,  50 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
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
                <ul class=\"nav nav-sidebar text-center\">
                    {% for all_c in categories %}
                        <li><a href=\"{{ path('app_view_tutorial_by_categ_site', { categ_id: all_c.getId}) }}\"><img src=\"{{ all_c.getLogoSca }}\"
                                                                              alt=\"{{ all_c.getNameSca }}\"
                                                                              class=\"logo_categories\">{{ all_c.getNameSca }}
                            </a></li>
                    {% endfor %}
                </ul>
            </div>
            <div class=\"col-sm-12 col-xs-12 col-md-6 col-centered\">
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <h1 class=\"page-header\">
                        <img src=\"{{ asset('img/arrow.png') }}\" alt=\"arrow\"
                             class=\"arrow_header\"/>{{ tuto.getTitleStu }}
                    </h1>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12 description_tuto\">
                    {{ tuto.getDescriptionStu }}
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    {{ tuto.getContentStu | raw }}
                </div>
                {% if file %}
                    <div class=\"col-sm-12 col-xs-12 col-md-12\">
                        <br/>
                        <ul class=\"listrap\">
                            {% for n_file in file %}
                                <li>
                                    <div class=\"listrap-toggle\">
                                        <span></span><img src=\"{{ asset('img/file.png') }}\" width=\"60\"
                                                          height=\"60\"/>
                                    </div>
                                    <strong>{{ n_file.getRealNameStf }}</strong>
                                    <a href=\"{{ (directory ~ n_file.getNameStf) }}\"
                                       download=\"{{ n_file.getRealNameStf }}\" class=\"button_download pull-right\">Download</a>
                                </li>
                                <br/>
                            {% endfor %}
                        </ul>
                    </div>
                {% endif %}
                {% if like_user %}
                    <div class=\"col-sm-12 col-xs-12 col-md-12 like-content\">
                        <a href=\"{{ path('app_delete_like_site', { tuto_id: tuto.getId}) }}\" class=\"btn-secondary like-review\">
                            <i class=\"fa glyphicon glyphicon-heart\" aria-hidden=\"true\"></i> Dislike
                        </a>
                    </div>
                {% else %}
                    <div class=\"col-sm-12 col-xs-12 col-md-12 like-content\">
                        <a href=\"{{ path('app_create_like_site', { tuto_id: tuto.getId}) }}\" class=\"btn-secondary like-review\">
                            <i class=\"fa glyphicon glyphicon-heart\" aria-hidden=\"true\"></i> Like
                        </a>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}
", "Tutorial/tutorial_view.html.twig", "/var/www/html/ShareTutoProject/app/Resources/views/Tutorial/tutorial_view.html.twig");
    }
}
