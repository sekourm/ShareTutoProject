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
        $__internal_4bbaf259fb46dc7a80022456d6fce077dd22178c1c1045fc63491488ffa3d3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bbaf259fb46dc7a80022456d6fce077dd22178c1c1045fc63491488ffa3d3ec->enter($__internal_4bbaf259fb46dc7a80022456d6fce077dd22178c1c1045fc63491488ffa3d3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bbaf259fb46dc7a80022456d6fce077dd22178c1c1045fc63491488ffa3d3ec->leave($__internal_4bbaf259fb46dc7a80022456d6fce077dd22178c1c1045fc63491488ffa3d3ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c90026ae979502e1131ea7ac2a69e9366cad3e2844c3e762451dc47fde585067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90026ae979502e1131ea7ac2a69e9366cad3e2844c3e762451dc47fde585067->enter($__internal_c90026ae979502e1131ea7ac2a69e9366cad3e2844c3e762451dc47fde585067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c90026ae979502e1131ea7ac2a69e9366cad3e2844c3e762451dc47fde585067->leave($__internal_c90026ae979502e1131ea7ac2a69e9366cad3e2844c3e762451dc47fde585067_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b163bd59ce2ab24f397ad52d95a6eeb4be7769a17208cff55f4ae33a9d6417d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b163bd59ce2ab24f397ad52d95a6eeb4be7769a17208cff55f4ae33a9d6417d8->enter($__internal_b163bd59ce2ab24f397ad52d95a6eeb4be7769a17208cff55f4ae33a9d6417d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b163bd59ce2ab24f397ad52d95a6eeb4be7769a17208cff55f4ae33a9d6417d8->leave($__internal_b163bd59ce2ab24f397ad52d95a6eeb4be7769a17208cff55f4ae33a9d6417d8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_872f5b83039e9a1310e51f7a5b3ee1c77ec9ed240e37856559cd99276baf8705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872f5b83039e9a1310e51f7a5b3ee1c77ec9ed240e37856559cd99276baf8705->enter($__internal_872f5b83039e9a1310e51f7a5b3ee1c77ec9ed240e37856559cd99276baf8705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_872f5b83039e9a1310e51f7a5b3ee1c77ec9ed240e37856559cd99276baf8705->leave($__internal_872f5b83039e9a1310e51f7a5b3ee1c77ec9ed240e37856559cd99276baf8705_prof);

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
