<?php

/* Register/register.html.twig */
class __TwigTemplate_9336e8a05c963bf5ea74e4bf02e5dc6066311c7cb5d0d73b36aad760c2df2927 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Register/register.html.twig", 1);
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
        $__internal_f79131adf75c006c62a862139abd15647c7445124ef89256505200e82df7195d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79131adf75c006c62a862139abd15647c7445124ef89256505200e82df7195d->enter($__internal_f79131adf75c006c62a862139abd15647c7445124ef89256505200e82df7195d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Register/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f79131adf75c006c62a862139abd15647c7445124ef89256505200e82df7195d->leave($__internal_f79131adf75c006c62a862139abd15647c7445124ef89256505200e82df7195d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_912a9dc63ef59fea9091f153d02afadc72bb2b8ab87253e562772c95cf795c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912a9dc63ef59fea9091f153d02afadc72bb2b8ab87253e562772c95cf795c96->enter($__internal_912a9dc63ef59fea9091f153d02afadc72bb2b8ab87253e562772c95cf795c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container-fluid login_register\">
    <div class=\"row-fluid\">
        <div class=\"col-md-offset-4 col-md-4\" id=\"box\">
            <h2>Inscrivez-Vous</h2>
            <hr>
            ";
        // line 8
        echo twig_include($this->env, $context, "Form/form_register.html.twig");
        echo "
        </div>
    </div>
";
        
        $__internal_912a9dc63ef59fea9091f153d02afadc72bb2b8ab87253e562772c95cf795c96->leave($__internal_912a9dc63ef59fea9091f153d02afadc72bb2b8ab87253e562772c95cf795c96_prof);

    }

    public function getTemplateName()
    {
        return "Register/register.html.twig";
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
            <h2>Inscrivez-Vous</h2>
            <hr>
            {{ include('Form/form_register.html.twig') }}
        </div>
    </div>
{% endblock %}", "Register/register.html.twig", "/var/www/html/ShareTutoProject/app/Resources/views/Register/register.html.twig");
    }
}
