<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9a997eb471a04b98248e9fbcce5e3122a32c9c88a9145c9285f5e1c4b734ac28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_078ac65025d35055de894e61d043009fb610cd2ccb887611cfe18084f6ad5155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078ac65025d35055de894e61d043009fb610cd2ccb887611cfe18084f6ad5155->enter($__internal_078ac65025d35055de894e61d043009fb610cd2ccb887611cfe18084f6ad5155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_078ac65025d35055de894e61d043009fb610cd2ccb887611cfe18084f6ad5155->leave($__internal_078ac65025d35055de894e61d043009fb610cd2ccb887611cfe18084f6ad5155_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f75e10c0919fcf9af3b7d94ad2943cac7f3e0237743350f096c1626897872bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75e10c0919fcf9af3b7d94ad2943cac7f3e0237743350f096c1626897872bbf->enter($__internal_f75e10c0919fcf9af3b7d94ad2943cac7f3e0237743350f096c1626897872bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f75e10c0919fcf9af3b7d94ad2943cac7f3e0237743350f096c1626897872bbf->leave($__internal_f75e10c0919fcf9af3b7d94ad2943cac7f3e0237743350f096c1626897872bbf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_843ecf8643c32627504ba571db13f4734be5a6c72f114e3be5551ef8a9bf433f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843ecf8643c32627504ba571db13f4734be5a6c72f114e3be5551ef8a9bf433f->enter($__internal_843ecf8643c32627504ba571db13f4734be5a6c72f114e3be5551ef8a9bf433f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_843ecf8643c32627504ba571db13f4734be5a6c72f114e3be5551ef8a9bf433f->leave($__internal_843ecf8643c32627504ba571db13f4734be5a6c72f114e3be5551ef8a9bf433f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bbdbeecfadc59d62db193f0bd98d400efec50753e4dfb0cd87f8f636858425a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbdbeecfadc59d62db193f0bd98d400efec50753e4dfb0cd87f8f636858425a2->enter($__internal_bbdbeecfadc59d62db193f0bd98d400efec50753e4dfb0cd87f8f636858425a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bbdbeecfadc59d62db193f0bd98d400efec50753e4dfb0cd87f8f636858425a2->leave($__internal_bbdbeecfadc59d62db193f0bd98d400efec50753e4dfb0cd87f8f636858425a2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
