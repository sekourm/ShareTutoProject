<?php

/* Security/login.html.twig */
class __TwigTemplate_26a6da2aa7cc46bc333134eb3be6d014da22ee209d3ffd60829f5035731b1e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Security/login.html.twig", 1);
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
        $__internal_47627d75c2e318476d2a29ee53d0a546e7087e67b8ecf0a0666f00d274f9a20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47627d75c2e318476d2a29ee53d0a546e7087e67b8ecf0a0666f00d274f9a20f->enter($__internal_47627d75c2e318476d2a29ee53d0a546e7087e67b8ecf0a0666f00d274f9a20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47627d75c2e318476d2a29ee53d0a546e7087e67b8ecf0a0666f00d274f9a20f->leave($__internal_47627d75c2e318476d2a29ee53d0a546e7087e67b8ecf0a0666f00d274f9a20f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_acdd519be92dfc8b3235b4f1a5b248b8e213536aba22f38823591407195df162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acdd519be92dfc8b3235b4f1a5b248b8e213536aba22f38823591407195df162->enter($__internal_acdd519be92dfc8b3235b4f1a5b248b8e213536aba22f38823591407195df162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container-fluid login_register\">
        <div class=\"row-fluid\">
            <div class=\"col-md-offset-4 col-md-4\" id=\"box\">
                <h2>Connecter-Vous</h2>
                <hr>
                ";
        // line 8
        echo twig_include($this->env, $context, "Form/form_login.html.twig");
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_acdd519be92dfc8b3235b4f1a5b248b8e213536aba22f38823591407195df162->leave($__internal_acdd519be92dfc8b3235b4f1a5b248b8e213536aba22f38823591407195df162_prof);

    }

    public function getTemplateName()
    {
        return "Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
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
    <div class=\"container-fluid login_register\">
        <div class=\"row-fluid\">
            <div class=\"col-md-offset-4 col-md-4\" id=\"box\">
                <h2>Connecter-Vous</h2>
                <hr>
                {{ include('Form/form_login.html.twig') }}
            </div>
        </div>
    </div>
{% endblock %}
", "Security/login.html.twig", "/var/www/html/ShareTutoProject/app/Resources/views/Security/login.html.twig");
    }
}
