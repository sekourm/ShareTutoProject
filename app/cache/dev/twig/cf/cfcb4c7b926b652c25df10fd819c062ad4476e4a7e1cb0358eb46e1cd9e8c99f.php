<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_df255662e01a646aa9fc6c6f615a40262f4ff538d4cdad1d41f94926e7ee7e71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5876e76d0e2545889facbb6fc78760b1953bb72bd08d92175f4ec55873eb873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5876e76d0e2545889facbb6fc78760b1953bb72bd08d92175f4ec55873eb873->enter($__internal_f5876e76d0e2545889facbb6fc78760b1953bb72bd08d92175f4ec55873eb873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5876e76d0e2545889facbb6fc78760b1953bb72bd08d92175f4ec55873eb873->leave($__internal_f5876e76d0e2545889facbb6fc78760b1953bb72bd08d92175f4ec55873eb873_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9719356a27df381b5c3af225d900fad314a0df17552719c5a1ec48745b85251f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9719356a27df381b5c3af225d900fad314a0df17552719c5a1ec48745b85251f->enter($__internal_9719356a27df381b5c3af225d900fad314a0df17552719c5a1ec48745b85251f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9719356a27df381b5c3af225d900fad314a0df17552719c5a1ec48745b85251f->leave($__internal_9719356a27df381b5c3af225d900fad314a0df17552719c5a1ec48745b85251f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_988da76545d6bde635530f7467c197be3a9def1651d3706699335cd4db0ef409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988da76545d6bde635530f7467c197be3a9def1651d3706699335cd4db0ef409->enter($__internal_988da76545d6bde635530f7467c197be3a9def1651d3706699335cd4db0ef409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_988da76545d6bde635530f7467c197be3a9def1651d3706699335cd4db0ef409->leave($__internal_988da76545d6bde635530f7467c197be3a9def1651d3706699335cd4db0ef409_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_472de9305dec355e8b48625ace7e7dfaf218a2f40116d94b54346f65e713a6e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472de9305dec355e8b48625ace7e7dfaf218a2f40116d94b54346f65e713a6e3->enter($__internal_472de9305dec355e8b48625ace7e7dfaf218a2f40116d94b54346f65e713a6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_472de9305dec355e8b48625ace7e7dfaf218a2f40116d94b54346f65e713a6e3->leave($__internal_472de9305dec355e8b48625ace7e7dfaf218a2f40116d94b54346f65e713a6e3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
