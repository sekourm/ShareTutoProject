<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fb47b84907d2d4d57658174432f4e2ae8ab2179bb73fed2bbd3ab89a8c06ca31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27b0f01d9e99a9b3ef9c64c9dae112014d041786bf0c7d0b1acf49d48c9b49a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b0f01d9e99a9b3ef9c64c9dae112014d041786bf0c7d0b1acf49d48c9b49a7->enter($__internal_27b0f01d9e99a9b3ef9c64c9dae112014d041786bf0c7d0b1acf49d48c9b49a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_27b0f01d9e99a9b3ef9c64c9dae112014d041786bf0c7d0b1acf49d48c9b49a7->leave($__internal_27b0f01d9e99a9b3ef9c64c9dae112014d041786bf0c7d0b1acf49d48c9b49a7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_39287cd9ec98ad04109c15047d80b7608c597fed3c3ca45fa696f51ad581d0e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39287cd9ec98ad04109c15047d80b7608c597fed3c3ca45fa696f51ad581d0e7->enter($__internal_39287cd9ec98ad04109c15047d80b7608c597fed3c3ca45fa696f51ad581d0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_39287cd9ec98ad04109c15047d80b7608c597fed3c3ca45fa696f51ad581d0e7->leave($__internal_39287cd9ec98ad04109c15047d80b7608c597fed3c3ca45fa696f51ad581d0e7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
