<?php

/* :Security:login.html.twig */
class __TwigTemplate_db1100ae0feac78dd3ebe4028dd77cd8496e618de90e4d60231f8c9ebf7ef9a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Security:login.html.twig", 1);
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
        $__internal_a0ac1d9b87e4934f372d83f7773ded6a632d0553d39de8a8798d376e41f9230e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ac1d9b87e4934f372d83f7773ded6a632d0553d39de8a8798d376e41f9230e->enter($__internal_a0ac1d9b87e4934f372d83f7773ded6a632d0553d39de8a8798d376e41f9230e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0ac1d9b87e4934f372d83f7773ded6a632d0553d39de8a8798d376e41f9230e->leave($__internal_a0ac1d9b87e4934f372d83f7773ded6a632d0553d39de8a8798d376e41f9230e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdaea1a35ed2ccedba1779c5aa4d66ec481af54075d303782ccbf0ce21492c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdaea1a35ed2ccedba1779c5aa4d66ec481af54075d303782ccbf0ce21492c82->enter($__internal_fdaea1a35ed2ccedba1779c5aa4d66ec481af54075d303782ccbf0ce21492c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fdaea1a35ed2ccedba1779c5aa4d66ec481af54075d303782ccbf0ce21492c82->leave($__internal_fdaea1a35ed2ccedba1779c5aa4d66ec481af54075d303782ccbf0ce21492c82_prof);

    }

    public function getTemplateName()
    {
        return ":Security:login.html.twig";
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
", ":Security:login.html.twig", "/var/www/html/ShareTutoProject/app/Resources/views/Security/login.html.twig");
    }
}
