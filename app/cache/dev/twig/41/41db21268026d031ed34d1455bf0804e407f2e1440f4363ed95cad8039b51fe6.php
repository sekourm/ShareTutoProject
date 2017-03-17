<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c8a682e6f37956649de43ee5806db734796ad7cb70721af9377d33f3b9519b0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a59f2836776ab330d7e27163f58b6a26d66959d9af953ddc8e811b504c2f4498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59f2836776ab330d7e27163f58b6a26d66959d9af953ddc8e811b504c2f4498->enter($__internal_a59f2836776ab330d7e27163f58b6a26d66959d9af953ddc8e811b504c2f4498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a59f2836776ab330d7e27163f58b6a26d66959d9af953ddc8e811b504c2f4498->leave($__internal_a59f2836776ab330d7e27163f58b6a26d66959d9af953ddc8e811b504c2f4498_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
