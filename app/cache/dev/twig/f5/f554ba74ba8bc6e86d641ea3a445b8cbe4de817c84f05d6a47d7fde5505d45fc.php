<?php

/* ::Nav/nav.html.twig */
class __TwigTemplate_86e4d0a98be6d0a28bae4fc5fb230359ea79e3c7bd699504f1b29a7d3f608ea8 extends Twig_Template
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
        $__internal_e47e8311faeb9f3688cf1353bd0a08d18ddcf26d1b6b028bdcde29c21f2df86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47e8311faeb9f3688cf1353bd0a08d18ddcf26d1b6b028bdcde29c21f2df86c->enter($__internal_e47e8311faeb9f3688cf1353bd0a08d18ddcf26d1b6b028bdcde29c21f2df86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Nav/nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\"
                    aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            ";
        // line 11
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 12
            echo "                <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_site");
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
            echo "\"
                                                                                 class=\"logo\"
                                                                                 alt=\"tutorial_symfony\"> TutoShared</a>

                <a class=\"navbar-brand\" href=\"#\">
                    <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/users.png"), "html", null, true);
            echo "\" alt=\"users\"
                         class=\"users_tuto pull-left tweaked-margin\"/>";
            // line 18
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsernameSha", array(), "method")), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 21
            echo "                <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
            echo "\" class=\"logo\"
                                                                         alt=\"tutorial_symfony\"> TutoShared</a>
            ";
        }
        // line 24
        echo "        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 27
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 28
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_site");
            echo "\">Accueil</a></li>
                    <li><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_show_like_site");
            echo "\">Mes favoris</a></li>
                    <li><a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_view_my_tutorial_site");
            echo "\">Mes Tutoriels</a></li>
                    <li><a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Deconnexion</a></li>
                ";
        } else {
            // line 33
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Vous connectez</a></li>
                    <li><a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_register_site");
            echo "\">Vous inscrire</a></li>
                ";
        }
        // line 36
        echo "            </ul>
        </div>
    </div>
    ";
        // line 39
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 40
            echo "        <div class=\"search-bar\">
            <form>
                <input id=\"search_input\" type=\"text\" placeholder=\"Rechercher un tutoriel\" required/>
                <div class=\"search-icon\"></div>
            </form>
        </div>

        <div class=\"result_search text-center\">
            <ul class=\"list_search\">
            </ul>
        </div>
        ";
            // line 51
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "requestUri", array()) != "/tuto/create")) {
                // line 52
                echo "            <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_create_tutorial_site");
                echo "\" class=\"info\">
                <div id=\"meat_boy\">
                    <div id=\"shadow\"></div>
                    <div id=\"left-hand\"></div>
                    <div id=\"right-hand\"></div>
                    <div id=\"left-leg\"></div>
                    <div id=\"right-leg\"></div>
                    <div id=\"body\">
                        <div id=\"deformation1\"></div>
                        <div id=\"deformation2\"></div>
                        <div id=\"deformation3\"></div>
                        <div id=\"deformation4\"></div>
                        <div id=\"deformation5\"></div>
                        <div id=\"deformation6\"></div>
                        <div id=\"deformation7\"></div>
                        <div id=\"deformation8\"></div>
                        <div id=\"left-eye\"></div>
                        <div id=\"right-eye\"></div>
                        <div id=\"dimple\"></div>
                        <div id=\"smiley\"></div>
                    </div>
                    <span>Créer un tutoriel !</span>
                </div>
            </a>
        ";
            }
            // line 77
            echo "    ";
        }
        // line 78
        echo "</nav>";
        
        $__internal_e47e8311faeb9f3688cf1353bd0a08d18ddcf26d1b6b028bdcde29c21f2df86c->leave($__internal_e47e8311faeb9f3688cf1353bd0a08d18ddcf26d1b6b028bdcde29c21f2df86c_prof);

    }

    public function getTemplateName()
    {
        return "::Nav/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 78,  152 => 77,  123 => 52,  121 => 51,  108 => 40,  106 => 39,  101 => 36,  96 => 34,  91 => 33,  86 => 31,  82 => 30,  78 => 29,  73 => 28,  71 => 27,  66 => 24,  57 => 21,  51 => 18,  47 => 17,  36 => 12,  34 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\"
                    aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            {% if app.user %}
                <a class=\"navbar-brand\" href=\"{{ path('app_home_site') }}\"> <img src=\"{{ asset('img/logo.png') }}\"
                                                                                 class=\"logo\"
                                                                                 alt=\"tutorial_symfony\"> TutoShared</a>

                <a class=\"navbar-brand\" href=\"#\">
                    <img src=\"{{ asset('img/users.png') }}\" alt=\"users\"
                         class=\"users_tuto pull-left tweaked-margin\"/>{{ app.security.getToken().getUser().getUsernameSha()|capitalize }}
                </a>
            {% else %}
                <a class=\"navbar-brand\" href=\"{{ path('login') }}\"> <img src=\"{{ asset('img/logo.png') }}\" class=\"logo\"
                                                                         alt=\"tutorial_symfony\"> TutoShared</a>
            {% endif %}
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                {% if app.user %}
                    <li><a href=\"{{ path('app_home_site') }}\">Accueil</a></li>
                    <li><a href=\"{{ path('app_show_like_site') }}\">Mes favoris</a></li>
                    <li><a href=\"{{ path('app_view_my_tutorial_site') }}\">Mes Tutoriels</a></li>
                    <li><a href=\"{{ path('logout') }}\">Deconnexion</a></li>
                {% else %}
                    <li><a href=\"{{ path('login') }}\">Vous connectez</a></li>
                    <li><a href=\"{{ path('app_register_site') }}\">Vous inscrire</a></li>
                {% endif %}
            </ul>
        </div>
    </div>
    {% if app.user %}
        <div class=\"search-bar\">
            <form>
                <input id=\"search_input\" type=\"text\" placeholder=\"Rechercher un tutoriel\" required/>
                <div class=\"search-icon\"></div>
            </form>
        </div>

        <div class=\"result_search text-center\">
            <ul class=\"list_search\">
            </ul>
        </div>
        {% if app.request.requestUri != '/tuto/create' %}
            <a href=\"{{ path('app_create_tutorial_site') }}\" class=\"info\">
                <div id=\"meat_boy\">
                    <div id=\"shadow\"></div>
                    <div id=\"left-hand\"></div>
                    <div id=\"right-hand\"></div>
                    <div id=\"left-leg\"></div>
                    <div id=\"right-leg\"></div>
                    <div id=\"body\">
                        <div id=\"deformation1\"></div>
                        <div id=\"deformation2\"></div>
                        <div id=\"deformation3\"></div>
                        <div id=\"deformation4\"></div>
                        <div id=\"deformation5\"></div>
                        <div id=\"deformation6\"></div>
                        <div id=\"deformation7\"></div>
                        <div id=\"deformation8\"></div>
                        <div id=\"left-eye\"></div>
                        <div id=\"right-eye\"></div>
                        <div id=\"dimple\"></div>
                        <div id=\"smiley\"></div>
                    </div>
                    <span>Créer un tutoriel !</span>
                </div>
            </a>
        {% endif %}
    {% endif %}
</nav>", "::Nav/nav.html.twig", "/var/www/html/ShareTutoProject/app/Resources/views/Nav/nav.html.twig");
    }
}
