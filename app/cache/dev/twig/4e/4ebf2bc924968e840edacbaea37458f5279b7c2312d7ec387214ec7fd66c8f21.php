<?php

/* :Tutorial:tutorial_create.html.twig */
class __TwigTemplate_97bb17eb3d87b48bd147c682bd1f02336292058db96531a607062949c0325d93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Tutorial:tutorial_create.html.twig", 1);
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
        $__internal_abbd0a5d9392d059dcc0168e02b58adab87157dbece941924adeeb1342f8dd20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abbd0a5d9392d059dcc0168e02b58adab87157dbece941924adeeb1342f8dd20->enter($__internal_abbd0a5d9392d059dcc0168e02b58adab87157dbece941924adeeb1342f8dd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Tutorial:tutorial_create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abbd0a5d9392d059dcc0168e02b58adab87157dbece941924adeeb1342f8dd20->leave($__internal_abbd0a5d9392d059dcc0168e02b58adab87157dbece941924adeeb1342f8dd20_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca1c7a9a8a3c38362df478329aea7340ed410d6c5ba61003e371abbe77d8f4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1c7a9a8a3c38362df478329aea7340ed410d6c5ba61003e371abbe77d8f4e9->enter($__internal_ca1c7a9a8a3c38362df478329aea7340ed410d6c5ba61003e371abbe77d8f4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 col-xs-12 col-sm-12\">
                <div class=\"col-md-12 col-xs-12 col-sm-12 sidebar\">
                    <ul class=\"nav nav-sidebar text-center\">
                        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["all_c"]) {
            // line 9
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_view_tutorial_by_categ_site", array("categ_id" => $this->getAttribute($context["all_c"], "getId", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getLogoSca", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getNameSca", array()), "html", null, true);
            echo "\"
                                                 class=\"logo_categories\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["all_c"], "getNameSca", array()), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['all_c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "                    </ul>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <div class=\"col-sm-12 col-xs-12 col-md-12\">
                        <h1 class=\"page-header\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/arrow.png"), "html", null, true);
        echo "\" alt=\"arrow\"
                                                     class=\"arrow_header\"/>Créer
                            un tutoriel</h1>
                    </div>
                    <div class=\"col-sm-12 col-xs-12 col-md-12\">
                        ";
        // line 21
        echo twig_include($this->env, $context, "Form/form_tutorial.html.twig");
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/jQuery.plugin.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"> \$(\"textarea\").my_wysiwyg(); </script>

";
        
        $__internal_ca1c7a9a8a3c38362df478329aea7340ed410d6c5ba61003e371abbe77d8f4e9->leave($__internal_ca1c7a9a8a3c38362df478329aea7340ed410d6c5ba61003e371abbe77d8f4e9_prof);

    }

    public function getTemplateName()
    {
        return ":Tutorial:tutorial_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  82 => 21,  74 => 16,  68 => 12,  60 => 10,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
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
            <div class=\"col-md-12 col-xs-12 col-sm-12\">
                <div class=\"col-md-12 col-xs-12 col-sm-12 sidebar\">
                    <ul class=\"nav nav-sidebar text-center\">
                        {% for all_c in categories %}
                            <li><a href=\"{{ path('app_view_tutorial_by_categ_site', { categ_id: all_c.getId}) }}\"><img src=\"{{ all_c.getLogoSca }}\" alt=\"{{ all_c.getNameSca }}\"
                                                 class=\"logo_categories\">{{ all_c.getNameSca }}</a></li>
                        {% endfor %}
                    </ul>
                </div>
                <div class=\"col-sm-12 col-xs-12 col-md-12\">
                    <div class=\"col-sm-12 col-xs-12 col-md-12\">
                        <h1 class=\"page-header\"><img src=\"{{ asset('img/arrow.png') }}\" alt=\"arrow\"
                                                     class=\"arrow_header\"/>Créer
                            un tutoriel</h1>
                    </div>
                    <div class=\"col-sm-12 col-xs-12 col-md-12\">
                        {{ include('Form/form_tutorial.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type=\"text/javascript\" src=\"{{ asset('js/plugin/jQuery.plugin.js') }}\"></script>
    <script type=\"text/javascript\"> \$(\"textarea\").my_wysiwyg(); </script>

{% endblock %}
", ":Tutorial:tutorial_create.html.twig", "/var/www/html/ShareTutoProject/app/Resources/views/Tutorial/tutorial_create.html.twig");
    }
}
