<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_036f8e0c97882da439143f60fbef178dd7aa1aebfa60cd2e15c01f4f9717b461 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_18a9a7d7fc0a13a550f37c03206cf5d7946a3e2073d215e56cd2f8e66315167b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a9a7d7fc0a13a550f37c03206cf5d7946a3e2073d215e56cd2f8e66315167b->enter($__internal_18a9a7d7fc0a13a550f37c03206cf5d7946a3e2073d215e56cd2f8e66315167b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18a9a7d7fc0a13a550f37c03206cf5d7946a3e2073d215e56cd2f8e66315167b->leave($__internal_18a9a7d7fc0a13a550f37c03206cf5d7946a3e2073d215e56cd2f8e66315167b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a603c3264762db9b5722d434a006712b130d29afdfc59959e59012b45900a87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a603c3264762db9b5722d434a006712b130d29afdfc59959e59012b45900a87a->enter($__internal_a603c3264762db9b5722d434a006712b130d29afdfc59959e59012b45900a87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a603c3264762db9b5722d434a006712b130d29afdfc59959e59012b45900a87a->leave($__internal_a603c3264762db9b5722d434a006712b130d29afdfc59959e59012b45900a87a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea2760aec5e4e699803a4474518e7c2e195dd62b5110df32866ee6018dd1d4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2760aec5e4e699803a4474518e7c2e195dd62b5110df32866ee6018dd1d4d0->enter($__internal_ea2760aec5e4e699803a4474518e7c2e195dd62b5110df32866ee6018dd1d4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ea2760aec5e4e699803a4474518e7c2e195dd62b5110df32866ee6018dd1d4d0->leave($__internal_ea2760aec5e4e699803a4474518e7c2e195dd62b5110df32866ee6018dd1d4d0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
