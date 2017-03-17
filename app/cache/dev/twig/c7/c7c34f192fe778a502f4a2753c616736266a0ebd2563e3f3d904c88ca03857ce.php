<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d50ffc44fab92e82e62635819be642756ff34290cae9a408400652ce7fd5f00b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5836329eab0d8b6eafd7d4e63831cd3c77b7dd299483442a8799d8387068eda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5836329eab0d8b6eafd7d4e63831cd3c77b7dd299483442a8799d8387068eda9->enter($__internal_5836329eab0d8b6eafd7d4e63831cd3c77b7dd299483442a8799d8387068eda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5836329eab0d8b6eafd7d4e63831cd3c77b7dd299483442a8799d8387068eda9->leave($__internal_5836329eab0d8b6eafd7d4e63831cd3c77b7dd299483442a8799d8387068eda9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_74764c4acf15f7fc20a6ae585e2e6e7f2ba315246b6ad19ea491a9af64a8a7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74764c4acf15f7fc20a6ae585e2e6e7f2ba315246b6ad19ea491a9af64a8a7b5->enter($__internal_74764c4acf15f7fc20a6ae585e2e6e7f2ba315246b6ad19ea491a9af64a8a7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_74764c4acf15f7fc20a6ae585e2e6e7f2ba315246b6ad19ea491a9af64a8a7b5->leave($__internal_74764c4acf15f7fc20a6ae585e2e6e7f2ba315246b6ad19ea491a9af64a8a7b5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6db5ef4cfea24a74ce5206ce15f518d1c09f48e5315eadff09d94e1d4dc30216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db5ef4cfea24a74ce5206ce15f518d1c09f48e5315eadff09d94e1d4dc30216->enter($__internal_6db5ef4cfea24a74ce5206ce15f518d1c09f48e5315eadff09d94e1d4dc30216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6db5ef4cfea24a74ce5206ce15f518d1c09f48e5315eadff09d94e1d4dc30216->leave($__internal_6db5ef4cfea24a74ce5206ce15f518d1c09f48e5315eadff09d94e1d4dc30216_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_98bb65189df49338416312af75bf8fbdc6dd79a578acdebc000f391510aed497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98bb65189df49338416312af75bf8fbdc6dd79a578acdebc000f391510aed497->enter($__internal_98bb65189df49338416312af75bf8fbdc6dd79a578acdebc000f391510aed497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_98bb65189df49338416312af75bf8fbdc6dd79a578acdebc000f391510aed497->leave($__internal_98bb65189df49338416312af75bf8fbdc6dd79a578acdebc000f391510aed497_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
