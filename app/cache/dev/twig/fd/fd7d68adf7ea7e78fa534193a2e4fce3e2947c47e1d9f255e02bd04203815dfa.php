<?php

/* Tutorial/tutorial_create.html.twig */
class __TwigTemplate_801a7a4b75e3f838e390d707aff88c3f42e8d1c868b07d89f9bdd9e0f6e1c289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Tutorial/tutorial_create.html.twig", 1);
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
        $__internal_90c0cf503849ed321bebb65fe702ffab3b138af8f89332bba9b9cb333d805a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c0cf503849ed321bebb65fe702ffab3b138af8f89332bba9b9cb333d805a53->enter($__internal_90c0cf503849ed321bebb65fe702ffab3b138af8f89332bba9b9cb333d805a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Tutorial/tutorial_create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90c0cf503849ed321bebb65fe702ffab3b138af8f89332bba9b9cb333d805a53->leave($__internal_90c0cf503849ed321bebb65fe702ffab3b138af8f89332bba9b9cb333d805a53_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_528f1ae6ea6b69dd753f5d6ca0af59b04cf3c57bc745aac57f647c27e4698fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528f1ae6ea6b69dd753f5d6ca0af59b04cf3c57bc745aac57f647c27e4698fe0->enter($__internal_528f1ae6ea6b69dd753f5d6ca0af59b04cf3c57bc745aac57f647c27e4698fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_528f1ae6ea6b69dd753f5d6ca0af59b04cf3c57bc745aac57f647c27e4698fe0->leave($__internal_528f1ae6ea6b69dd753f5d6ca0af59b04cf3c57bc745aac57f647c27e4698fe0_prof);

    }

    public function getTemplateName()
    {
        return "Tutorial/tutorial_create.html.twig";
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
", "Tutorial/tutorial_create.html.twig", "/var/www/html/ShareTutoProject/app/Resources/views/Tutorial/tutorial_create.html.twig");
    }
}
